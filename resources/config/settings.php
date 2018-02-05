<?php

return [
    'client_id'         => [
        'required' => true,
        'env'      => 'GITHUB_CLIENT_ID',
        'bind'     => 'services.github.client_id',
        'type'     => 'anomaly.field_type.encrypted',
    ],
    'client_secret'     => [
        'required' => true,
        'env'      => 'GITHUB_CLIENT_SECRET',
        'bind'     => 'services.github.client_secret',
        'type'     => 'anomaly.field_type.encrypted',
    ],
    'scope'             => [
        'bind'   => 'services.github.scope',
        'type'   => 'anomaly.field_type.tags',
        'config' => [
            'default_value' => [
                'user',
                'user:email',
            ],
        ],
    ],
    'application_scope' => [
        'bind'   => 'services.github.application_scope',
        'type'   => 'anomaly.field_type.tags',
        'config' => [
            'default_value' => [
                'user',
                'user:email',
            ],
        ],
    ],
];
