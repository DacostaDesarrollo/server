<?php
return [

    'debug' => true,
    "database" => [
            "connections" => array(
                "development" => "mysql://root:''@localhost/apiresfull",
                "test" => "mysql://root:root@localhost/database",
                "primary" => "mysql://root:root@localhost/database"
            ) ,
            "models_dir" => "model"
    ],

    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        /*'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],*/

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
