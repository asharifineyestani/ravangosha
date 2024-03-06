<?php

return [


    'handleRedirectTo' => [

        /*
        |--------------------------------------------------------------------------
        | different redirect to every role
        |--------------------------------------------------------------------------
        |
        |
        */
        'roles' => [
            [
                'role' => 'super-admin',
                'redirect' => '/admin/users'
            ]
        ],


        /*
       |--------------------------------------------------------------------------
       | other role
       |--------------------------------------------------------------------------
       | you can specify a redirect path for persons who dosnt any role
       |
       */


        'any' => '/admin/profile',
    ]

];
