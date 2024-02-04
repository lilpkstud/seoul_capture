<?php return array(
    'root' => array(
        'name' => 'lilpkstud/seoulcapture',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'ec8dccd80e96f71a8bc5d58ab9b8627867b084e4',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'johnpbloch/wordpress-core-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'lilpkstud/seoulcapture' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'ec8dccd80e96f71a8bc5d58ab9b8627867b084e4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wordpress' => array(
            'pretty_version' => '6.4.3',
            'version' => '6.4.3.0',
            'reference' => '41ff6e23ccbc3a1691406d69fe8c211a225514e2',
            'type' => 'metapackage',
            'install_path' => NULL,
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wordpress-core-installer' => array(
            'pretty_version' => '1.100.0',
            'version' => '1.100.0.0',
            'reference' => '73f8488e5178c5d54234b919f823a9095e2b1847',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../roots/wordpress-core-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roots/wordpress-no-content' => array(
            'pretty_version' => '6.4.3',
            'version' => '6.4.3.0',
            'reference' => '6.4.3',
            'type' => 'wordpress-core',
            'install_path' => __DIR__ . '/../../wordpress',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wordpress/core-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '6.4.3',
            ),
        ),
    ),
);
