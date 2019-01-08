
<?php

$host = "db4free.net";
$username = "lunaraymond";
$password = "IccsNoob19";
$dbname = "to_do_list";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('Connection failed: ' . mysqli_error($conn) );
}

echo 'connected successfully';
echo"<br>";
?>