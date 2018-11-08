<?php

/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Portal\Doctrine;

use Zend\ServiceManager\Factory\InvokableFactory;

return [

    //'router' => [
    //    'routes' => [
    //        'home' => [
    //            'type' => Literal::class,
    //            'options' => [
    //                'route' => '/',
    //                'defaults' => [
    //                    'controller' => Controller\IndexController::class,
    //                    'action' => 'index',
    //                ],
    //            ],
    //        ],
    //    ],
    //],

    'controllers' => [
        'factories' => [
            Controller\IndexController::class =>
                InvokableFactory::class,
        ],
        'aliases' => [
            \MSBios\Application\Controller\IndexController::class =>
                Controller\IndexController::class
        ]
    ],
];
