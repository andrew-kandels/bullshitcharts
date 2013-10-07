<?php
return array(
    'router' => array(
        'routes' => array(
            'banana' => array(
                'type' => 'literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'IndexController',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
    ),
    'controllers' => array(
        'invokables' => array(
            'IndexController' => 'Application\Controller\Index',
        ),
    ),
    'view_helpers' => array(
    ),
    'view_manager' => array(
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'exception_template'        => 'error/index',
        'template_path_stack'       => array('Application' => __DIR__ . '/../view'),
        'template_map' => array(
            'layout/layout'         => __DIR__ . '/../view/layout/layout.phtml',
//            'error/404'             => __DIR__ . '/../view/error/404.phtml',
        ),
    ),
);
