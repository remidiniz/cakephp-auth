<?php
use Cake\Core\Configure;

return [
    'Cookies' => [
        'Main' => [
        		'name' => 'StarAd24',
        		'expires' => '+2 weeks',
        		'path' => '/',
        		'domain' => '.'.Configure::read('General.App.domain'),
        		'secure' => false,
        		'key' => Configure::read('Security.Salt'),
        		'httpOnly' => false, 
        		'encryption' => 'aes'
        ]
    ],
];