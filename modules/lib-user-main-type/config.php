<?php

return [
    '__name' => 'lib-user-main-type',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-main-type.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-main-type' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user-main' => NULL
            ],
            [
                'lib-enum' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libEnum' => [
        'enums' =>[
            'user.type' => []
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'user' => [
                'type' => [
                    'type' => 'enum',
                    'enum' => 'user.type',
                    'vtype' => 'int'
                ]
            ]
        ]
    ],
    'libForm' => [
        'forms' => [
            'admin.user.account' => [
                'type' => [
                    'type' => 'select',
                    'label' => 'Type',
                    'position' => 'top-left',
                    'rules' => [
                        'required' => true,
                        'enum' => 'user.type'
                    ]
                ]
            ]
        ]
    ]
];