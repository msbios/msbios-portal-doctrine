<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Portal\Doctrine;

return [

    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'host' => '127.0.0.1',
                    'user' => 'root',
                    'password' => 'root',
                    'dbname' => 'portal.dev',
                ],
            ],
        ],
    ],

    \MSBios\Theme\Module::class => [

        // default theme name if not set
        'default_theme_identifier' => 'pressroom',

        'themes' => [
            'pressroom' => [
                'identifier' => 'pressroom',
                'title' => 'Pressroom Portal Theme',
                'description' => 'Pressroom Portal Theme Description',
                'template_path_stack' => [
                    __DIR__ . '/../../themes/pressroom/view/',
                ],
                'translation_file_patterns' => [
                    [
                        'type' => 'gettext',
                        'base_dir' => __DIR__ . '/../../themes/pressroom/language/',
                        'pattern' => '%s.mo',
                    ],
                ],
                'widget_manager' => [
                    'template_map' => [
                    ],
                    'template_path_stack' => [
                        __DIR__ . '/../../themes/pressroom/widget/'
                    ],
                ],
            ]
        ]
    ],

    \MSBios\Assetic\Module::class => [
        'paths' => [
            __DIR__ . '/../../vendor/msbios/portal/themes/pressroom/public/',
        ],
    ],
];
