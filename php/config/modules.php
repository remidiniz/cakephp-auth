
<?php

use Cake\Core\Configure;

return [

    'Modules' => [
        'Core' => [
            'Api' => [
                'hostname' => 'core-starad24',
                'domain' => Configure::read('General.Api.domain'),
                'port' => Configure::read('General.Api.port'),
                'protocol' => Configure::read('General.Api.protocol'),
                'baseApp' => 'index.php'
            ]
        ],

        'Finance' => [
            'Api' => [
                'hostname' => 'finance-starad24',
                'domain' => Configure::read('General.Api.domain'),
                'port' => Configure::read('General.Api.port'),
                'protocol' => Configure::read('General.Api.protocol'),
                'baseApp' => ''
            ],

            'App' => [
                'hostname' => 'finance-starad24',
                'domain' => Configure::read('General.App.domain'),
                'port' => Configure::read('General.App.port'),
                'protocol' => Configure::read('General.App.protocol'),
                'baseApp' => ''
            ]
        ],

        'Frontend' => [
            'Api' => [
                'hostname' => 'front-starad24',
                'domain' => Configure::read('General.Api.domain'),
                'port' => Configure::read('General.Api.port'),
                'protocol' => Configure::read('General.Api.protocol'),
                'baseApp' => ''
            ],
            'App' => [
                'hostname' => 'front-starad24',
                'domain' => Configure::read('General.App.domain'),
                'port' => Configure::read('General.App.port'),
                'protocol' => Configure::read('General.App.protocol'),
                'baseApp' => ''
            ]
        ],

        'Backend' => [
            'Api' => [
                'hostname' => 'back-starad24',
                'domain' => Configure::read('General.Api.domain'),
                'port' => Configure::read('General.Api.port'),
                'protocol' => Configure::read('General.Api.protocol'),
                'baseApp' => ''
            ],

            'App' => [
                'hostname' => 'back-starad24',
                'domain' => Configure::read('General.App.domain'),
                'port' => Configure::read('General.App.port'),
                'protocol' => Configure::read('General.App.protocol'),
                'baseApp' => ''
            ]
        ],

        'AuthClient' => [
            'Api' => [
                'hostname' => 'authclient-starad24',
                'domain' => Configure::read('General.Api.domain'),
                'port' => Configure::read('General.Api.port'),
                'protocol' => Configure::read('General.Api.protocol'),
                'baseApp' => ''
            ],

            'App' => [
                'hostname' => 'authclient-starad24',
                'domain' => Configure::read('General.App.domain'),
                'port' => Configure::read('General.App.port'),
                'protocol' => Configure::read('General.App.protocol'),
                'baseApp' => ''
            ]
        ]
    ]
];