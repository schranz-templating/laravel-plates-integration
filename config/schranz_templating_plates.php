<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cache directory
    |--------------------------------------------------------------------------
    |
    | Using directory for the cache files of plates templating files.
    */

    'cache' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views'))
    ) . '/plates',

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | Directories where the plates templates can be found.
    */
    'paths' => [
        resource_path('views'),
    ],
];
