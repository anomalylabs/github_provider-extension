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
        'bind'   => 'services.github.scope',
        'type'   => 'anomaly.field_type.checkboxes',
        'config' => [
            'options' => [
                'user'             => 'user',
                'user:email'       => 'user:email',
                'user:follow'      => 'user:follow',
                'public_repo'      => 'public_repo',
                'repo'             => 'repo',
                'repo_deployment'  => 'repo_deployment',
                'repo:status'      => 'repo:status',
                'delete_repo'      => 'delete_repo',
                'notifications'    => 'notifications',
                'gist'             => 'gist',
                'read:repo_hook'   => 'read:repo_hook',
                'write:repo_hook'  => 'write:repo_hook',
                'admin:repo_hook'  => 'admin:repo_hook',
                'admin:org_hook'   => 'admin:org_hook',
                'read:org'         => 'read:org',
                'write:org'        => 'write:org',
                'admin:org'        => 'admin:org',
                'read:public_key'  => 'read:public_key',
                'write:public_key' => 'write:public_key',
                'admin:public_key' => 'admin:public_key',
            ],
        ],
    ],
];
