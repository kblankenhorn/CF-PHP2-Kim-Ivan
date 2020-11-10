<!DOCTYPE html>
<html>
<head>
	<title>Basic 4</title>
</head>
<body>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="basic_4_test";

$conn= mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Connection failed:" .mysqli_connect_error());
}

$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
	echo "Database $dbname create succesfully! \n";
}else {
	echo "Error creating database $dbname:" .mysqli_error($conn);
}
mysqli_close($conn);





 ?>
</body>
</html>