<?php

/**
 * @license MIT
 * @package WalkerChiu\SiteCMS
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Switch association of package to On or Off
    |--------------------------------------------------------------------------
    |
    | When you set someone On:
    |     1. Its Foreign Key Constraints will be created together with data table.
    |     2. You may need to change the corresponding class settings in the config/wk-core.php.
    |
    | When you set someone Off:
    |     1. Association check will not be performed on FormRequest and Observer.
    |     2. Cleaner and Initializer will not handle tasks related to it.
    |
    | Note:
    |     The association still exists, which means you can still access related objects.
    |
    */
    'onoff' => [
        'core-lang_core' => 0,

        'user' => 1,

        'account'            => 1,
        'api'                => 0,
        'firewall'           => 0,
        'group'              => 0,
        'morph-address'      => 1,
        'morph-board'        => 0,
        'morph-category'     => 0,
        'morph-comment'      => 0,
        'morph-image'        => 1,
        'morph-nav'          => 1,
        'morph-registration' => 0,
        'morph-tag'          => 0,
        'morph-link'         => 0,
        'newsletter'         => 0,
        'role'               => 1,
        'rule'               => 0,
        'rule-hit'           => 0
    ],

    /*
    |--------------------------------------------------------------------------
    | Lang Log
    |--------------------------------------------------------------------------
    |
    | 0: Don't keep data.
    | 1: Keep data.
    |
    */
    'lang_log' => 0,

    /*
    |--------------------------------------------------------------------------
    | Output Data Format from Repository
    |--------------------------------------------------------------------------
    |
    | null:                  Query.
    | query:                 Query.
    | collection:            Query collection.
    | collection_pagination: Query collection with pagination.
    | array:                 Array.
    | array_pagination:      Array with pagination.
    |
    */
    'output_format' => null,

    /*
    |--------------------------------------------------------------------------
    | Pagination
    |--------------------------------------------------------------------------
    |
    */
    'pagination' => [
        'pageName' => 'page',
        'perPage'  => 15
    ],

    /*
    |--------------------------------------------------------------------------
    | Soft Delete
    |--------------------------------------------------------------------------
    |
    | 0: Disable.
    | 1: Enable.
    |
    */
    'soft_delete' => 1,

    /*
    |--------------------------------------------------------------------------
    | Editor
    |--------------------------------------------------------------------------
    |
    | Options: Text, HTML, CommonMark, Markdown, WYSIWYG
    |
    */
    'editor' => [
        'layout'  => 'HTML',
        'email'   => 'HTML',
        'board'   => 'WYSIWYG',
        'group'   => 'WYSIWYG',
        'comment' => 'Text'
    ],

    /*
    |--------------------------------------------------------------------------
    | Command
    |--------------------------------------------------------------------------
    |
    | Location of Commands.
    |
    */
    'command' => [
        'cleaner'     => 'WalkerChiu\SiteCMS\Console\Commands\SiteCMSCleaner',
        'initializer' => 'WalkerChiu\SiteCMS\Console\Commands\SiteCMSInitializer'
    ],

    /*
    |--------------------------------------------------------------------------
    | Initializer
    |--------------------------------------------------------------------------
    */
    'initializer' => [
        'admin' => [
            'name'     => 'admin',
            'email'    => 'admin@example.com',
            'password' => env('site_ADMIN_PASSWORD', '!QAZ2wsx'),
            'address' => [
                'type'          => 'contact',
                'phone'         => null,
                'email'         => 'admin@example.com',
                'name'          => 'admin',
                'area'          => 'TWN',
                'address_line1' => 'Administrative District',
                'address_line2' => 'Street Address',
            ]
        ],
        'site' => [
            'name'               => env('APP_NAME', 'Example Site'),
            'identifier'         => env('APP_DOMAIN', 'localhost'),
            'language'           => config('wk-core.language'),
            'language_supported' => ['en_us', 'zh_tw'],
            'timezone'           => config('wk-core.timezone'),
            'smtp_host'          => env('MAIL_HOST'),
            'smtp_port'          => env('MAIL_PORT'),
            'smtp_encryption'    => env('MAIL_ENCRYPTION'),
            'smtp_username'      => env('MAIL_USERNAME'),
            'smtp_password'      => env('MAIL_PASSWORD'),
            'address' => [
                'type'          => 'site',
                'phone'         => '(123) 1234-5678',
                'email'         => 'contact@example.com',
                'name'          => 'system',
                'area'          => 'TWN',
                'address_line1' => 'Administrative District',
                'address_line2' => 'Street Address',
                'guide'         => 'Monday - Friday: 9:00 - 19:00'
            ],
            'default_data' => [
                'address'       => 1,
                'navs'          => 1,
                'email'         => 1
            ]
        ],
        'navs' => [
            'system' => [
                'icon' => 'fas fa-fw fa-cogs',
                'data' => [
                    'schedule' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'template' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'skin' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'plugin' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'interface' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'backup' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'log' => [
                        'icon' => '',
                        'data' => []
                    ]
                ]
            ],
            'application' => [
                'icon' => 'fas fa-fw fa-store',
                'data' => [
                    'site' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'board' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'layout' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'email' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'tag' => [
                        'icon' => '',
                        'data' => []
                    ]
                ]
            ],
            'member' => [
                'icon' => 'fas fa-fw fa-users',
                'data' => [
                    'member' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'role' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'permission' => [
                        'icon' => '',
                        'data' => []
                    ]
                ]
            ],
            'services' => [
                'icon' => 'fas fa-file-signature',
                'data' => [
                    'newsletter' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'message' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'comment' => [
                        'icon' => '',
                        'data' => []
                    ],
                    'report' => [
                        'icon' => '',
                        'data' => []
                    ]
                ]
            ],
            'statistics' => [
                'icon' => 'fas fa-fw fa-chart-area',
                'data' => [
                    'member' => [
                        'icon' => '',
                        'data' => []
                    ]
                ]
            ]
        ],
        'email' => [
            'general' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'General notice',
                'subject' => 'General notice'
            ],
            'verifyEmail' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'Verify Email Address',
                'subject' => 'Verify Email Address'
            ],
            'emailVerified' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'Verified Email Address',
                'subject' => 'Verified Email Address'
            ],
            'registered' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'Registered Notice',
                'subject' => 'Welcome to join {{ $site_name }}'
            ],
            'login' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'Login Notice',
                'subject' => 'You are login at {{ $login_at }}'
            ],
            'loginFailed' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'Login Notice (Failure)',
                'subject' => 'You tried to login at {{ $login_at }}, but failed'
            ],
            'passwordForgot' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'Reset Password Notice',
                'subject' => 'Password reset link'
            ],
            'passwordReset' => [
                'onoff'   => 1,
                'serial'  => null,
                'name'    => 'Reset Password Notice',
                'subject' => 'Password reset successfully'
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Register Event
    |--------------------------------------------------------------------------
    */
    'register_event' => [
        'VerifyEmail'    => 1,
        'EmailVerified'  => 1,
        'PasswordForgot' => 1,
        'PasswordReset'  => 1,
        'Registered'     => 1,
        'Authenticated'  => 1,
        'AuthFailed'     => 1
    ],

    /*
    |--------------------------------------------------------------------------
    | Client
    |--------------------------------------------------------------------------
    */
    'client' => [
        'mode' => null,
        'url'  => env('FRONT_URL', 'http://localhost'),
        'link' => [
            'backend'         => 'admin',
            'home'            => 'home',
            'login'           => 'login',
            'email-verify'    => 'email/verify',
            'email-resend'    => 'email/resend',
            'password-forgot' => 'password/forgot',
            'password-reset'  => 'password/reset'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | SMTP
    |--------------------------------------------------------------------------
    */
    'smtp' => [
        'fixed_sender' => [
            'onoff' => 1,
            'email' => env('MAIL_FROM_ADDRESS')
        ],
        'encryption_supported' => ['ssl', 'tls']
    ]
];
