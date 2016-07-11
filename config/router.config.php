<?php

namespace ZendBricks\BricksUser;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use ZendBricks\BricksUser\Controller\NewsController;

return [
    'router_class' => \Zend\Mvc\I18n\Router\TranslatorAwareTreeRouteStack::class,
    'routes' => [
        'news' => [
            'type' => Literal::class,
            'options' => [
                'route' => '/news',
                'defaults' => [
                    'controller' => NewsController::class
                ]
            ],
//            'child_routes' => [
//                'login' => [
//                    'type' => Literal::class,
//                    'options' => [
//                        'route' => '/login',
//                        'defaults' => [
//                            'action' => 'login',
//                        ],
//                    ],
//                ]
//            ]
        ]
    ]
];

