<?php

require_once 'DbManager.php';

$db_manager = new DbManager();
$db_manager->connect('master', array(
    'dsn' => 'mysql:dbname=db1;host=localhost',
    'user' => 'root',
    'password' => 'pass',
));
$db_manager->getConnection('master');
$db_manager->getConnection();