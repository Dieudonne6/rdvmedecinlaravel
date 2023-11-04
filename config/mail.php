<?php

return [

    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'your_smtp_host'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME', 'your_smtp_username'),
            'password' => env('MAIL_PASSWORD', 'your_smtp_password'),
            'timeout' => null,
            'auth_mode' => null,
        ],
        // ... (autres configurations de pilote de messagerie si nécessaire)
    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'dieudonneayena6@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'DIEU DONNE'),
    ],

    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];