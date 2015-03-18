<?php

$dbConnect = array(
    'server' => 'ckmobile.ipagemysql.com',
    'user' => 'cyrus',
    'pass' => 'password',
    'name' => 'cyrusdb'
);

$db = new mysqli(
    $dbConnect['server'],
    $dbConnect['user'],
    $dbConnect['pass'],
    $dbConnect['name']
);



if ($db->connect_errno>0) {
    echo "Database connection error" . $db->connect_error;
    exit;
}



?>