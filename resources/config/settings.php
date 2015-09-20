<?php

return [
    'client_id'     => 'anomaly.field_type.encrypted',
    'client_secret' => 'anomaly.field_type.encrypted',
    'redirect_uri'  => 'anomaly.field_type.url',
    'scope'         => [
        'type'   => 'anomaly.field_type.checkboxes',
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
                'admin:public_key'
            ]
        ]
    ]
];
