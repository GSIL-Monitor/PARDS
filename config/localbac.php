<?php
// Uncomment to enable debug mode. Recommended for development.
defined('YII_DEBUG') or define('YII_DEBUG', false);

// Uncomment to enable dev environment. Recommended for development
defined('YII_ENV') or define('YII_ENV', 'prod');

// zh_CN.UTF-8 => 中文,  en_US.UTF-8 => English
setlocale(LC_ALL, 'zh_CN.UTF-8');
putenv('LC_ALL=zh_CN.UTF-8');

return [
    'components' => [
        'db' => [
            'dsn'       => 'mysql:host=127.0.0.1;dbname=walle',
            'username'  => 'root',
            'password'  => 'root',
        ],
        'mail' => [
            'transport' => [
                'host'       => 'smtp.qiye.163.com',     # smtp 发件地址
                'username'   => 'lixiangcheng@brc.com.cn',  # smtp 发件用户名
                'password'   => 'UgRZYtf164Q4JBVy',       # smtp 发件人的密码
                'port'       => 25,                       # smtp 端口
                'encryption' => 'tls',                    # smtp 协议
            ],
	   

        ],
        'request' => [
            'cookieValidationKey' => 'PdXWDAfV5-gPJJWRar5sEN71DN0JcDRV',
        ],
    ],
    'language'   => 'zh', // zh => 中文,  en => English
];
