
<?php

require_once './connect.php';

$newtask = $_POST['taskname'];
// $pw = $_POST['password'];

$sql = "INSERT INTO tasks(name) VALUES ('$newtask')";

// mysql.query function expects 2 arguments, first is the connection to your db variable and the second is your mysql query variable

$result = mysqli_query($conn, $sql);

if ($result === TRUE) {
	// echo 'new task added successfully';
	header('Location: ../../index.php');
}else {
	echo 'error: ' . $sql . "<br>" . mysqli_error($conn);
}

// close a previously opened database connection
mysqli_close($conn);

?>