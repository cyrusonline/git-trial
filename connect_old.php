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

$sql = "SELECT * FROM `cyrustable` ORDER BY `name`";

$result = $db->query($sql);

echo $db -> host_info;
echo "<br>";
echo $db -> connect_errno;
echo "<br>";

while ($row = $result ->fetch_object()){
	$id = $row->id;
	$name = $row->name;
	$password = $row->password;
	$secrets= $row->secrets;
	echo "<br>$id $name $password $secrets</br>";
	
	
}

if ($db->connect_errno>0) {
    echo "Database connection error" . $db->connect_error;
    exit;
}



?>