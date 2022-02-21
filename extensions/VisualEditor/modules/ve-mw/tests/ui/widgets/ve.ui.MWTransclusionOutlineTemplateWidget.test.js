QUnit.module( 've.ui.MWTransclusionOutlineTemplateWidget' );

QUnit.test( 'Constructor', ( assert ) => {
	const transclusion = new ve.dm.MWTransclusionModel(),
		template = new ve.dm.MWTemplateModel( transclusion, { wt: 'Example' } ),
		widget = new ve.ui.MWTransclusionOutlineTemplateWidget( template );

	assert.strictEqual( widget.getData(), 'part_0' );
	assert.strictEqual(
		widget.$element.find( '.ve-ui-mwTransclusionOutlineButtonWidget' ).text(),
		'Example'
	);
	assert.notOk( widget.searchWidget.isVisible() );
	assert.notOk( widget.infoWidget.isVisible() );
} );

QUnit.test( 'insertCheckboxAtCanonicalPosition()', ( assert ) => {
	function assertOrder( widget, expected ) {
		assert.deepEqual( widget.parameters.items.map( ( item ) => item.data ), expected );
	}

	const transclusion = new ve.dm.MWTransclusionModel(),
		template = ve.dm.MWTemplateModel.newFromData( transclusion, {
			target: {},
			params: { b: {}, e: {} }
		} );
	template.getSpec().setTemplateData( {
		params: {
			e: { deprecated: true },
			h: { deprecated: true },
			g: {}
		},
		paramOrder: [ 'g', 'h', 'e' ]
	} );
	const widget = new ve.ui.MWTransclusionOutlineTemplateWidget( template );

	// Expected order on construction time is:
	// - Documented params in paramOrder (g, h, e), excluding unused deprected params (- h)
	// - Undocumented params currently used in the template (+ b)
	assertOrder( widget, [ 'g', 'e', 'b' ] );

	let insertAt = widget.findCanonicalPosition( 'h' );
	// Most minimal mock instead of an actual ve.ui.MWTransclusionOutlineParameterWidget
	widget.parameters.addItems( [ new OO.ui.Widget( { data: 'h' } ) ], insertAt );
	// Deprecated param appears at it's canonical position via paramOrder
	assert.strictEqual( insertAt, 1 );
	assertOrder( widget, [ 'g', 'h', 'e', 'b' ] );

	const newParam = new ve.dm.MWParameterModel( template, 'a1' );
	// This fires an "add" event the widget listens to, i.e. this covers onAddParameter() as well
	template.addParameter( newParam );
	assertOrder( widget, [ 'g', 'h', 'e', 'a1', 'b' ] );
	// Removing the param doesn't remove it's checkbox item from the widget
	template.removeParameter( newParam );
	assertOrder( widget, [ 'g', 'h', 'e', 'a1', 'b' ] );

	// This is effectively the same as above: teach the spec a new param without adding it to the
	// template. This doesn't fire events, which allows us to test the private method in isolation.
	template.getSpec().seenParameterNames.a2 = true;
	insertAt = widget.findCanonicalPosition( 'a2' );
	// Most minimal mock instead of an actual ve.ui.MWTransclusionOutlineParameterWidget
	widget.parameters.addItems( [ new OO.ui.Widget( { data: 'a2' } ) ], insertAt );
	assert.strictEqual( insertAt, 4 );
	assertOrder( widget, [ 'g', 'h', 'e', 'a1', 'a2', 'b' ] );
} );

QUnit.test( 'filterParameters() on an empty template', ( assert ) => {
	const transclusion = new ve.dm.MWTransclusionModel(),
		template = new ve.dm.MWTemplateModel( transclusion, {} ),
		widget = new ve.ui.MWTransclusionOutlineTemplateWidget( template );

	let eventsFired = 0;
	widget.connect( this, {
		filterParametersById: ( visibility ) => {
			assert.deepEqual( visibility, {} );
			eventsFired++;
		}
	} );

	widget.filterParameters( '' );
	assert.ok( widget.infoWidget.isVisible() );
	assert.strictEqual( eventsFired, 1 );
} );

QUnit.test( 'filterParameters() considers everything from the spec', ( assert ) => {
	const transclusion = new ve.dm.MWTransclusionModel(),
		template = ve.dm.MWTemplateModel.newFromData( transclusion, {
			target: {},
			params: { a: {}, b: {}, c: {}, d: {}, e: {} }
		} ),
		widget = new ve.ui.MWTransclusionOutlineTemplateWidget( template );

	template.getSpec().setTemplateData( {
		params: {
			c: { label: 'Contains a' },
			d: { description: 'Contains a' },
			e: { aliases: [ 'Contains a' ] },
			f: { label: 'Also contains a, but is not used in the template' }
		}
	} );

	let eventsFired = 0;
	widget.connect( this, {
		filterParametersById: ( visibility ) => {
			assert.deepEqual( visibility, {
				'part_0/a': true,
				'part_0/b': false,
				'part_0/c': true,
				'part_0/d': true,
				'part_0/e': true
			} );
			eventsFired++;
		}
	} );

	assert.ok( widget.searchWidget.isVisible() );
	widget.filterParameters( ' A ' );
	assert.notOk( widget.infoWidget.isVisible() );
	assert.strictEqual( eventsFired, 1 );
} );
