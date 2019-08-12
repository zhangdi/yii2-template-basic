<?php


namespace App\Console\Controllers;


use App\Console\Controller;

class DevController extends Controller
{
    public $defaultAction = 'init';

    /**
     * 初始化开发环境
     */
    public function actionInit($domain)
    {
        $webroot = ROOT_PATH . '/webroot';
        $confFilename = ROOT_PATH.'/conf/httpd-vhost.conf';

        $template = <<<CONF
<VirtualHost *:80>
    ServerName {{domain}}
    DocumentRoot "{{webroot}}"
    
    <Directory "{{webroot}}">
        php_value upload_max_filesize 80M
        php_value post_max_size 80M
        Options -Indexes +FollowSymlinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
CONF;
        $confContents = strtr($template, [
            '{{domain}}' => $domain,
            '{{webroot}}' => $webroot
        ]);
        file_put_contents($confFilename, $confContents);

        $this->stdout("Put 'Include \"{$confFilename}\"' into your apache conf.\n");
    }
}