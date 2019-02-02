<?php

return [

    'dynamodb' => [
        'key'      => env('DYNAMODB_KEY', 'dynamodb_local'),
        'secret'   => env('DYNAMODB_SECRET', 'secret'),
        'region'   => env('DYNAMODB_REGION', 'us-west-2'),
        'version'  => env('DYNAMODB_VERSION', 'latest'),
        
    ]
];