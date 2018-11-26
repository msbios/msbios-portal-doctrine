<?php

return [
    // Retrieve list of modules used in this application.
    'modules' => [
        'Zend\Serializer',
        'Zend\Cache',
        'Zend\Paginator',
        'Zend\Db',
        'Zend\I18n',
        'Zend\Navigation',
        'Zend\Mvc\Plugin\FilePrg',
        'Zend\Mvc\Plugin\Identity',
        'Zend\Mvc\Plugin\Prg',
        'Zend\Mvc\Plugin\FlashMessenger',
        'Zend\Form',
        'Zend\InputFilter',
        'Zend\Filter',
        'Zend\Hydrator',
        'Zend\Session',
        'Zend\Router',
        'Zend\Validator',

        'DoctrineModule',
        'DoctrineORMModule',

        'MSBios\Validator',
        'MSBios\Paginator\Doctrine',
        'MSBios\Cache',
        'MSBios\Hydrator',
        'MSBios\Db',
        'MSBios\Doctrine',
        'MSBios\Test',
        'MSBios\Portal',
        'MSBios\Application',
        'MSBios\Theme',
        'MSBios\Form',
        'MSBios\Assetic',
        'MSBios\View',
        'MSBios\Monolog',
        'MSBios\I18n',
        'MSBios\Widget',
        'MSBios\Resource',
        'MSBios\Navigation',
        'MSBios\Authentication',
        'MSBios\Guard',
        'MSBios\Guard\Resource',
        'MSBios\Guard\CPanel',
        'MSBios\CPanel',

        'MSBios\Resource\Doctrine',
        'MSBios\Form\Doctrine',
        'MSBios\Guard\Doctrine',
        'MSBios\Authentication\Doctrine',
        'MSBios\Guard\CPanel\Doctrine',
        'MSBios\Guard\Resource\Doctrine',
        'MSBios\CPanel\Doctrine',
        'MSBios\Portal\Doctrine',

         'Zend\Log',
         'ZendDeveloperTools',

    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ],
        'config_cache_enabled' => false,
        // 'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => false,
        // 'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/',
    ]
];
