<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'mediawiki-core',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'mediawiki/core',
        'dev' => false,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'dev_requirement' => false,
        ),
        'composer/semver' => array(
            'pretty_version' => '3.2.4',
            'version' => '3.2.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/./semver',
            'aliases' => array(),
            'reference' => 'a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
            'dev_requirement' => false,
        ),
        'cssjanus/cssjanus' => array(
            'pretty_version' => 'v2.1.0',
            'version' => '2.1.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../cssjanus/cssjanus',
            'aliases' => array(),
            'reference' => 'de7483c0805750a6462b372eab55d022d555df02',
            'dev_requirement' => false,
        ),
        'data-values/common' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../data-values/common',
            'aliases' => array(),
            'reference' => '315bd95ef8e5c360ce8a1cf02c0eef35bbb92561',
            'dev_requirement' => false,
        ),
        'data-values/data-values' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../data-values/data-values',
            'aliases' => array(),
            'reference' => '63dee286f8bb4ae7899c2d2e8d439e7b5332cc49',
            'dev_requirement' => false,
        ),
        'data-values/interfaces' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../data-values/interfaces',
            'aliases' => array(),
            'reference' => '244d078954bc05edf8f8c6b088e848289171c3a8',
            'dev_requirement' => false,
        ),
        'data-values/validators' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../data-values/validators',
            'aliases' => array(),
            'reference' => '83dbac2c5e9442e8fa2119c8b941ecb88156abe8',
            'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => array(
            'pretty_version' => '7.2.0',
            'version' => '7.2.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/guzzle',
            'aliases' => array(),
            'reference' => '0aa74dfb41ae110835923ef10a9d803a22d50e79',
            'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => array(
            'pretty_version' => '1.5.1',
            'version' => '1.5.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/promises',
            'aliases' => array(),
            'reference' => 'fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
            'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => array(
            'pretty_version' => '1.8.3',
            'version' => '1.8.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../guzzlehttp/psr7',
            'aliases' => array(),
            'reference' => '1afdd860a2566ed3c2b0b4a3de6e23434a79ec85',
            'dev_requirement' => false,
        ),
        'jeroen/file-fetcher' => array(
            'pretty_version' => '6.0.0',
            'version' => '6.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../jeroen/file-fetcher',
            'aliases' => array(),
            'reference' => '7a17d947e268e351efc42386d4454a41b07ad481',
            'dev_requirement' => false,
        ),
        'justinrainbow/json-schema' => array(
            'pretty_version' => '5.2.11',
            'version' => '5.2.11.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../justinrainbow/json-schema',
            'aliases' => array(),
            'reference' => '2ab6744b7296ded80f8cc4f9509abbff393399aa',
            'dev_requirement' => false,
        ),
        'liuggio/statsd-php-client' => array(
            'pretty_version' => 'v1.0.18',
            'version' => '1.0.18.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../liuggio/statsd-php-client',
            'aliases' => array(),
            'reference' => 'c42e6d6687b7b2d7683186ec7f4f03351cc3dbca',
            'dev_requirement' => false,
        ),
        'mediawiki/core' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'mediawiki-core',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'mediawiki/data-values' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'mediawiki/mediawiki' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.37.1',
            ),
        ),
        'mediawiki/parser-hooks' => array(
            'pretty_version' => '1.6.1',
            'version' => '1.6.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../mediawiki/parser-hooks',
            'aliases' => array(),
            'reference' => '45660efef737bcf33abbbb12c1ddb049c4e713fe',
            'dev_requirement' => false,
        ),
        'mediawiki/semantic-media-wiki' => array(
            'pretty_version' => '4.0.0',
            'version' => '4.0.0.0',
            'type' => 'mediawiki-extension',
            'install_path' => __DIR__ . '/../../extensions/SemanticMediaWiki',
            'aliases' => array(),
            'reference' => '86bcff16f63975073235456c8bd2d6fc9d270507',
            'dev_requirement' => false,
        ),
        'mediawiki/semantic-mediawiki' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'monolog/monolog' => array(
            'pretty_version' => '2.2.0',
            'version' => '2.2.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'reference' => '1cb1cde8e8dd0f70cc0fe51354a59acad9302084',
            'dev_requirement' => false,
        ),
        'onoi/blob-store' => array(
            'pretty_version' => '1.2.1',
            'version' => '1.2.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/blob-store',
            'aliases' => array(),
            'reference' => 'c3e1f15214977e904fc0e91e0480175a464977ce',
            'dev_requirement' => false,
        ),
        'onoi/cache' => array(
            'pretty_version' => '1.2.0',
            'version' => '1.2.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/cache',
            'aliases' => array(),
            'reference' => 'ecc999186aab7c8db411aedd892b2e5fe5a0b422',
            'dev_requirement' => false,
        ),
        'onoi/callback-container' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/callback-container',
            'aliases' => array(),
            'reference' => 'cf2f4dda1b2479bc786985fdb5554af528d03e52',
            'dev_requirement' => false,
        ),
        'onoi/event-dispatcher' => array(
            'pretty_version' => '1.1.0',
            'version' => '1.1.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/event-dispatcher',
            'aliases' => array(),
            'reference' => '2af64e3997fc59b6d1e1f8f77e65fd6311c37109',
            'dev_requirement' => false,
        ),
        'onoi/http-request' => array(
            'pretty_version' => '1.3.1',
            'version' => '1.3.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/http-request',
            'aliases' => array(),
            'reference' => 'a7cf33bae82cffe570086fc06d6617e802c0cc74',
            'dev_requirement' => false,
        ),
        'onoi/message-reporter' => array(
            'pretty_version' => '1.4.2',
            'version' => '1.4.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/message-reporter',
            'aliases' => array(),
            'reference' => 'ead8ef8f2868ccee6881e471295ebbaf8428c96c',
            'dev_requirement' => false,
        ),
        'onoi/shared-resources' => array(
            'pretty_version' => '0.4.3',
            'version' => '0.4.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/shared-resources',
            'aliases' => array(),
            'reference' => '322273a7462eb0c15305dde9207138f00a387080',
            'dev_requirement' => false,
        ),
        'onoi/tesa' => array(
            'pretty_version' => '0.1.0',
            'version' => '0.1.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../onoi/tesa',
            'aliases' => array(),
            'reference' => 'c8a07ca8738cf6d644e83d10ba2cb1ef93dffa7d',
            'dev_requirement' => false,
        ),
        'oojs/oojs-ui' => array(
            'pretty_version' => 'v0.42.0',
            'version' => '0.42.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../oojs/oojs-ui',
            'aliases' => array(),
            'reference' => 'cf3761126c1da853bc7fd127e8471e5bfdde911e',
            'dev_requirement' => false,
        ),
        'param-processor/param-processor' => array(
            'pretty_version' => '1.12.0',
            'version' => '1.12.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../param-processor/param-processor',
            'aliases' => array(),
            'reference' => '0850dc2af72d31b8f645e0f87a44ff4b68583a64',
            'dev_requirement' => false,
        ),
        'pear/console_getopt' => array(
            'pretty_version' => 'v1.4.3',
            'version' => '1.4.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pear/console_getopt',
            'aliases' => array(),
            'reference' => 'a41f8d3e668987609178c7c4a9fe48fecac53fa0',
            'dev_requirement' => false,
        ),
        'pear/mail' => array(
            'pretty_version' => 'v1.4.1',
            'version' => '1.4.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pear/mail',
            'aliases' => array(),
            'reference' => '9609ed5e42ac5b221dfd9af85de005c59d418ee7',
            'dev_requirement' => false,
        ),
        'pear/mail_mime' => array(
            'pretty_version' => '1.10.11',
            'version' => '1.10.11.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pear/mail_mime',
            'aliases' => array(),
            'reference' => 'd4fb9ce61201593d0f8c6db629c45e29c3409c14',
            'dev_requirement' => false,
        ),
        'pear/net_smtp' => array(
            'pretty_version' => '1.9.2',
            'version' => '1.9.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pear/net_smtp',
            'aliases' => array(),
            'reference' => '18b5dbaa049bee5f6d02c9a4318db02472e2c922',
            'dev_requirement' => false,
        ),
        'pear/net_socket' => array(
            'pretty_version' => 'v1.2.2',
            'version' => '1.2.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pear/net_socket',
            'aliases' => array(),
            'reference' => 'bbe6a12bb4f7059dba161f6ddd43f369c0ec8d09',
            'dev_requirement' => false,
        ),
        'pear/net_url2' => array(
            'pretty_version' => 'v2.2.2',
            'version' => '2.2.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pear/net_url2',
            'aliases' => array(),
            'reference' => '07fd055820dbf466ee3990abe96d0e40a8791f9d',
            'dev_requirement' => false,
        ),
        'pear/pear-core-minimal' => array(
            'pretty_version' => 'v1.10.11',
            'version' => '1.10.11.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pear/pear-core-minimal',
            'aliases' => array(),
            'reference' => '68d0d32ada737153b7e93b8d3c710ebe70ac867d',
            'dev_requirement' => false,
        ),
        'pear/pear_exception' => array(
            'pretty_version' => 'v1.0.2',
            'version' => '1.0.2.0',
            'type' => 'class',
            'install_path' => __DIR__ . '/../pear/pear_exception',
            'aliases' => array(),
            'reference' => 'b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
            'dev_requirement' => false,
        ),
        'pleonasm/bloom-filter' => array(
            'pretty_version' => '1.0.2',
            'version' => '1.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pleonasm/bloom-filter',
            'aliases' => array(),
            'reference' => '4a3292c9f83a778c44271bf4e4f6be1204b87f7b',
            'dev_requirement' => false,
        ),
        'psr/container' => array(
            'pretty_version' => '1.1.1',
            'version' => '1.1.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
            'dev_requirement' => false,
        ),
        'psr/container-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0',
            ),
        ),
        'psr/http-client' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-client',
            'aliases' => array(),
            'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
            'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/http-message' => array(
            'pretty_version' => '1.0.1',
            'version' => '1.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/http-message',
            'aliases' => array(),
            'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
            'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.3',
            'version' => '1.1.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0',
            ),
        ),
        'ralouphie/getallheaders' => array(
            'pretty_version' => '3.0.3',
            'version' => '3.0.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../ralouphie/getallheaders',
            'aliases' => array(),
            'reference' => '120b605dfeb996808c31b6477290a714d356e822',
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'rsky/pear-core-min' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v1.10.11',
            ),
        ),
        'seld/jsonlint' => array(
            'pretty_version' => '1.8.3',
            'version' => '1.8.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../seld/jsonlint',
            'aliases' => array(),
            'reference' => '9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
            'dev_requirement' => false,
        ),
        'serialization/serialization' => array(
            'pretty_version' => '4.0.0',
            'version' => '4.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../serialization/serialization',
            'aliases' => array(),
            'reference' => '6fa293415e2b70c30c1e673d8bcd04d27dc15e44',
            'dev_requirement' => false,
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/css-selector' => array(
            'pretty_version' => 'v5.4.3',
            'version' => '5.4.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/css-selector',
            'aliases' => array(),
            'reference' => 'b0a190285cd95cb019237851205b8140ef6e368e',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '1.99',
            ),
        ),
        'symfony/polyfill-mbstring' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '1.99',
            ),
        ),
        'symfony/polyfill-php80' => array(
            'pretty_version' => 'v1.23.1',
            'version' => '1.23.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php80',
            'aliases' => array(),
            'reference' => '1100343ed1a92e3a38f9ae122fc0eb21602547be',
            'dev_requirement' => false,
        ),
        'wikimedia/assert' => array(
            'pretty_version' => 'v0.5.0',
            'version' => '0.5.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/assert',
            'aliases' => array(),
            'reference' => 'd8e97f15b8f3d3799899e3d56452d34511be5764',
            'dev_requirement' => false,
        ),
        'wikimedia/at-ease' => array(
            'pretty_version' => 'v2.1.0',
            'version' => '2.1.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/at-ease',
            'aliases' => array(),
            'reference' => 'e8ebaa7bb7c8a8395481a05f6dc4deaceab11c33',
            'dev_requirement' => false,
        ),
        'wikimedia/base-convert' => array(
            'pretty_version' => 'v2.0.1',
            'version' => '2.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/base-convert',
            'aliases' => array(),
            'reference' => '449f0d0237cf1e0e71faec90680c88d4af6e711d',
            'dev_requirement' => false,
        ),
        'wikimedia/cdb' => array(
            'pretty_version' => '1.4.1',
            'version' => '1.4.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/cdb',
            'aliases' => array(),
            'reference' => 'd49d96232f045311dc1f21bf0d7e40adf82a1f1d',
            'dev_requirement' => false,
        ),
        'wikimedia/cldr-plural-rule-parser' => array(
            'pretty_version' => 'v2.0.0',
            'version' => '2.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/cldr-plural-rule-parser',
            'aliases' => array(),
            'reference' => '83d78cb8018d5c0f66fd6d0efff6a8ae2de92d36',
            'dev_requirement' => false,
        ),
        'wikimedia/common-passwords' => array(
            'pretty_version' => 'v0.3.0',
            'version' => '0.3.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/common-passwords',
            'aliases' => array(),
            'reference' => '5b51a88a27e17f485ba1295ee6916620686cd5a5',
            'dev_requirement' => false,
        ),
        'wikimedia/composer-merge-plugin' => array(
            'pretty_version' => 'v2.0.1',
            'version' => '2.0.1.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../wikimedia/composer-merge-plugin',
            'aliases' => array(),
            'reference' => '8ca2ed8ab97c8ebce6b39d9943e9909bb4f18912',
            'dev_requirement' => false,
        ),
        'wikimedia/dodo' => array(
            'pretty_version' => 'v0.3.0',
            'version' => '0.3.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/dodo',
            'aliases' => array(),
            'reference' => 'e46b9c8a1e5804509d39d03d612f02c15fed0759',
            'dev_requirement' => false,
        ),
        'wikimedia/html-formatter' => array(
            'pretty_version' => '3.0.1',
            'version' => '3.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/html-formatter',
            'aliases' => array(),
            'reference' => 'f18622f3384b9b7fed185bff2a46594aec92fa47',
            'dev_requirement' => false,
        ),
        'wikimedia/idle-dom' => array(
            'pretty_version' => 'v0.10.0',
            'version' => '0.10.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/idle-dom',
            'aliases' => array(),
            'reference' => '1d34b55cfe259fd26c541811581c2e1578b46727',
            'dev_requirement' => false,
        ),
        'wikimedia/ip-set' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/ip-set',
            'aliases' => array(),
            'reference' => '4efe81f0ffb907a60778a72faf6ede17bb490081',
            'dev_requirement' => false,
        ),
        'wikimedia/ip-utils' => array(
            'pretty_version' => '3.0.2',
            'version' => '3.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/ip-utils',
            'aliases' => array(),
            'reference' => 'ba5db9991418c9b00c4ef7d327c32bf595755d02',
            'dev_requirement' => false,
        ),
        'wikimedia/less.php' => array(
            'pretty_version' => 'v3.1.0',
            'version' => '3.1.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/less.php',
            'aliases' => array(),
            'reference' => 'a486d78b9bd16b72f237fc6093aa56d69ce8bd13',
            'dev_requirement' => false,
        ),
        'wikimedia/minify' => array(
            'pretty_version' => '2.2.4',
            'version' => '2.2.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/minify',
            'aliases' => array(),
            'reference' => '2efef5f0b97d6342504490cd2525d2bc6eb8821e',
            'dev_requirement' => false,
        ),
        'wikimedia/normalized-exception' => array(
            'pretty_version' => 'v1.0.1',
            'version' => '1.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/normalized-exception',
            'aliases' => array(),
            'reference' => 'ed9fc13d75f65c80dc1a95d4792658c97fd782e6',
            'dev_requirement' => false,
        ),
        'wikimedia/object-factory' => array(
            'pretty_version' => 'v3.0.2',
            'version' => '3.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/object-factory',
            'aliases' => array(),
            'reference' => 'fcfc7a0dafe9608231816d6bf74919826d9bc885',
            'dev_requirement' => false,
        ),
        'wikimedia/parsoid' => array(
            'pretty_version' => 'v0.14.0',
            'version' => '0.14.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/parsoid',
            'aliases' => array(),
            'reference' => 'aa88828c6619595e145469f63320d065e796d77a',
            'dev_requirement' => false,
        ),
        'wikimedia/php-session-serializer' => array(
            'pretty_version' => 'v2.0.0',
            'version' => '2.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/php-session-serializer',
            'aliases' => array(),
            'reference' => '99e7e926f1b61f71623d517fe38d9eec8618c59d',
            'dev_requirement' => false,
        ),
        'wikimedia/purtle' => array(
            'pretty_version' => 'v1.0.7',
            'version' => '1.0.7.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/purtle',
            'aliases' => array(),
            'reference' => '569064c065caae036cd5a685574b6f96f05cfe33',
            'dev_requirement' => false,
        ),
        'wikimedia/relpath' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/relpath',
            'aliases' => array(),
            'reference' => 'b237d203c820cd1000f2c5ecad25de9fa7165612',
            'dev_requirement' => false,
        ),
        'wikimedia/remex-html' => array(
            'pretty_version' => '2.3.2',
            'version' => '2.3.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/remex-html',
            'aliases' => array(),
            'reference' => 'd46adaad8c6640eb6ba834b6268188ff0426c449',
            'dev_requirement' => false,
        ),
        'wikimedia/request-timeout' => array(
            'pretty_version' => '1.1.0',
            'version' => '1.1.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/request-timeout',
            'aliases' => array(),
            'reference' => '8828e701fbc4e6090e3a5baac2ffc14730f099ad',
            'dev_requirement' => false,
        ),
        'wikimedia/running-stat' => array(
            'pretty_version' => 'v1.2.1',
            'version' => '1.2.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/running-stat',
            'aliases' => array(),
            'reference' => '60eebada7cc64b7073d90e7d4bab00efaafa0ba9',
            'dev_requirement' => false,
        ),
        'wikimedia/scoped-callback' => array(
            'pretty_version' => 'v3.0.0',
            'version' => '3.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/scoped-callback',
            'aliases' => array(),
            'reference' => '0a480d9a9772634697c77598726cf24606597bd0',
            'dev_requirement' => false,
        ),
        'wikimedia/services' => array(
            'pretty_version' => '2.0.1',
            'version' => '2.0.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/services',
            'aliases' => array(),
            'reference' => '5ef69a8a8b0d2ea115d08469bdab468f58fac820',
            'dev_requirement' => false,
        ),
        'wikimedia/shellbox' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/shellbox',
            'aliases' => array(),
            'reference' => '1e92deeb37de7df1b59c3c8c923d92bf2f22fa9d',
            'dev_requirement' => false,
        ),
        'wikimedia/textcat' => array(
            'pretty_version' => '1.3.0',
            'version' => '1.3.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/textcat',
            'aliases' => array(),
            'reference' => '4f13aed2b32382c9d2fe9dc8b3e3fbb26ea4a2a9',
            'dev_requirement' => false,
        ),
        'wikimedia/timestamp' => array(
            'pretty_version' => 'v3.0.0',
            'version' => '3.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/timestamp',
            'aliases' => array(),
            'reference' => '42ce5586d2189826e28ebcf4cedc96226b6d77e2',
            'dev_requirement' => false,
        ),
        'wikimedia/utfnormal' => array(
            'pretty_version' => '3.0.2',
            'version' => '3.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/utfnormal',
            'aliases' => array(),
            'reference' => 'e690d29487a6ee346bcf4cbf5a6fd89170fa2306',
            'dev_requirement' => false,
        ),
        'wikimedia/wait-condition-loop' => array(
            'pretty_version' => 'v2.0.2',
            'version' => '2.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/wait-condition-loop',
            'aliases' => array(),
            'reference' => '9bb0894e8c5195d43b2f2babbe4cc8f36bd5be0e',
            'dev_requirement' => false,
        ),
        'wikimedia/wikipeg' => array(
            'pretty_version' => '2.0.6',
            'version' => '2.0.6.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/wikipeg',
            'aliases' => array(),
            'reference' => '9a92384ae11e1a3b7ecfe0feef1809b1af73889b',
            'dev_requirement' => false,
        ),
        'wikimedia/wrappedstring' => array(
            'pretty_version' => 'v3.2.0',
            'version' => '3.2.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/wrappedstring',
            'aliases' => array(),
            'reference' => '11b01a2286fd377cb15c2f5561e10f56d58f37a9',
            'dev_requirement' => false,
        ),
        'wikimedia/xmp-reader' => array(
            'pretty_version' => '0.8.1',
            'version' => '0.8.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/xmp-reader',
            'aliases' => array(),
            'reference' => '4fc577e28e09eec165b64ed74ce878ba4ea45a35',
            'dev_requirement' => false,
        ),
        'wikimedia/zest-css' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wikimedia/zest-css',
            'aliases' => array(),
            'reference' => '423c867462801fda08a1c31009ec19d91a68b410',
            'dev_requirement' => false,
        ),
        'zordius/lightncandy' => array(
            'pretty_version' => 'v1.2.6',
            'version' => '1.2.6.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../zordius/lightncandy',
            'aliases' => array(),
            'reference' => 'b451f73e8b5c73e62e365997ba3c993a0376b72a',
            'dev_requirement' => false,
        ),
    ),
);