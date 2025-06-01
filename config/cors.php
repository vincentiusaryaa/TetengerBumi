<?php

return [
    'paths' => [
        'api/*',
        'sanctum/csrf-cookie',
        'login',
        'logout',
        'profile/*',
        'profile/photo',
        'profile/update',
    ],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [
        'XSRF-TOKEN',
        'x-xsrf-token',
        'x-csrf-token',
    ],
    'max_age' => 0,
    'supports_credentials' => true,
];
