<?php

return [
    'client_id'     => [
        'env'  => 'GITHUB_CLIENT_ID',
        'bind' => 'services.github.client_id',
        'type' => 'anomaly.field_type.encrypted',
    ],
    'client_secret' => [
        'env'  => 'GITHUB_CLIENT_SECRET',
        'bind' => 'services.github.client_secret',
        'type' => 'anomaly.field_type.encrypted',
    ],
    'scope'         => [
        'type'   => 'anomaly.field_type.tags',
        'config' => [
            'options' => [
                'user',
                'user:email',
                'user:follow',
                'public_repo',
                'repo',
                'repo_deployment',
                'repo:status',
                'delete_repo',
                'notifications',
                'gist',
                'read:repo_hook',
                'write:repo_hook',
                'admin:repo_hook',
                'admin:org_hook',
                'read:org',
                'write:org',
                'admin:org',
                'read:public_key',
                'write:public_key',
                'admin:public_key',
            ],
        ],
    ],
];
