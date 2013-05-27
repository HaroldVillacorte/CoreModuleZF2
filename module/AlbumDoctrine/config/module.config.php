<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'AlbumDoctrine\Controller\AlbumDoctrine' => 'AlbumDoctrine\Controller\AlbumDoctrineController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'album-doctrine' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/album-doctrine[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'AlbumDoctrine\Controller\AlbumDoctrine',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'album-doctrine' => __DIR__ . '/../view',
        ),
    ),
);