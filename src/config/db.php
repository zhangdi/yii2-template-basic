<?php


use ZhangDi\Env\Env;

$host = Env::get('MYSQL_HOST', 'localhost');
$dbname = Env::get('MYSQL_DBNAME', 'basic');
$username = Env::get('MYSQL_USERNAME', 'root');
$password = Env::get('MYSQL_PASSWORD', 'root');

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host={$host};dbname={$dbname}",
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8mb4',
];
