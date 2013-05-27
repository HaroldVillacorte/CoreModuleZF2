<?php

namespace AlbumDoctrine;

use AlbumDoctrine\Model\AlbumTable;

class Module
{
    public function getAutoloaderConfig()
    {
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'AlbumDoctrine\Model\AlbumTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new AlbumTable($dbAdapter);
                    return $table;
                },
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}