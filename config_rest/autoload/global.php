<?php
return [
    /*'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=api;host=localhost',
        'driver_options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ],
    ],*/
   'db' => [
       'driver' => 'Pdo',
       'dsn' => 'mysql:dbname=rest_server;host=rest_server.mysql.dbaas.com.br',
       'driver_options' => [
           PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
       ],
   ],
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter'=> 'Zend\Db\Adapter\AdapterServiceFactory',
            // \Base\Files\FilesServiceInterface::class=>\Base\Factory\FilesServicesFactory::class,
            //'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ],
    ],
];
