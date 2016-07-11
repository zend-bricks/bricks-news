<?php

namespace ZendBricks\BricksUser;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'factories' => [
        Controller\NewsController::class => InvokableFactory::class
    ],
];

