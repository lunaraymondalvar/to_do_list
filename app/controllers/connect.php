
<?php

$host = "db4free.net";
$username = "rayluna";
$password = "incorrect";
$dbname = "to_do_app_list";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed: ' . mysqli_error($conn) );
}

echo 'connected successfully';
echo"<br>";
?>