<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            "website-home" => array(
            "type"  => "segment",
            "options" => array(
                "route" => "/",
                "defaults" => array(
                   "controller" => "website/Controller/index",
                    "action" => "index"
                ),
            ),
            ),
            "website-about" => array(
            "type"  => "segment",
            "options" => array(
                "route" => "/about",
                "defaults" => array(
                   "controller" => "website/Controller/about",
                    "action" => "index"
                ),
            ),
            ),
            "website-services" => array(
            "type"  => "segment",
            "options" => array(
                "route" => "/services[/:action][/column][/:column]",
                "defaults" => array(
                   "controller" => "website/Controller/services",
                    "action" => "index",                    
                ),
                "constraints"=>array(
                    "action"=>"index|add|edit|delete",
                    "column"=>"[a-zA-Z_,]*",
                ),
            ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'website\Controller\index' => 'website\Controller\IndexController',
            'website\Controller\about' => 'website\Controller\AboutController',
            'website\Controller\services' => 'website\Controller\ServicesController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'website/index/index' => __DIR__ . '/../view/website/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
