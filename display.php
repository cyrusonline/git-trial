<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './functions');
require_once 'connect.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

$sql = "SELECT * FROM `cyrustable` WHERE `name`='$username' && `password`='$password' ORDER BY `name`";

$result = $db->query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<p><b>Results:</b></p>

<table border="1" cellpadding="5" cellspacing="0">
    <tr style="text-align: left;">
        <th style="width: 100px;">ID</th>
        <th style="width: 150px;">Name</th>
        <th style="width: 150px;">Password</th>
        <th style="width: 200px;">Secrets</th>
    </tr>

    <?php
    
    while ($row = $result->fetch_object()) {
        $id = $row->id;
        $name = htmlentities($row->name, ENT_QUOTES, "UTF-8");
        $password = htmlentities($row->password, ENT_QUOTES, "UTF-8");
        $secrets = htmlentities($row->secrets, ENT_QUOTES, "UTF-8");
    ?>

    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $password; ?></td>
        <td><?php echo $secrets; ?></td>
    </tr>
    
    <?php
    
    }

    ?>

</table>
</body>

</html>

