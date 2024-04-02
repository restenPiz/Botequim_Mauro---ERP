<?php

return [
    'create_users' => false,

    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'attendant' => [ 
            'users' => 'r,u',
            'payments' => 'r,u',
            'profile' => 'r,u',
        ],
        'stock_manager' => [ 
            'users' => 'r,u',
            'payments' => 'r,u',
            'profile' => 'r,u',
        ],
        'accountant' => [ 
            'users' => 'r,u',
            'payments' => 'r,u',
            'profile' => 'r,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];
