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
$dbname ="basic_5_test";

$conn= mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed:" .mysqli_connect_error() . "\n");
}

/*$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
	echo "Database $dbname create succesfully! \n";
}else {
	echo "Error creating database $dbname:" .mysqli_error($conn);
}
mysqli_close($conn);*/


/*$sql = "CREATE TABLE test (
	user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(20) NOT NULL,
	lastname VARCHAR(20) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)" ;
	if (mysqli_query($conn, $sql)) {
	   echo "Table Test created successfully"  . "\n";
	} else {
	   echo  "Error creating table: " . mysqli_error($conn) . "\n";
	}
mysqli_close($conn);*/

/*$sql = "INSERT INTO Test (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@doe.com')";
if (mysqli_query($conn, $sql)) {
    echo "New record created.\n";
} else {
   echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
mysqli_close($conn);*/


/*$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST[ 'lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO Test (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email')";
if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created.<h1>";
} else {
    echo "<h1>Record creation error for: </h1>" .
         "<p>"  . $sql . "</p>" .
         mysqli_error($conn);
}
mysqli_close($conn);
echo  "</body></html>";*/

$sql = "SELECT user_id, lastname, firstname FROM Test";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s)<br>",
                     $row[ "user_id"], $row["lastname"],$row["firstname"]);
}
echo  "Fetched data successfully\n";

mysqli_free_result($result);

mysqli_close($conn);
?>



 ?>

<!--<form method ="post">
   <p>
       <label  for="firstName">First Name:</label>
       <input type="text" name= "firstname" id="firstName">
   </p >
   <p>
       <label for ="lastName">Last Name:</label>
       <input  type="text" name="lastname"  id="lastName">
   </p>
   <p>
       <label for= "emailAddress">Email Address:</label>
       <input  type="text" name= "email" id="emailAddress">
   </p>
   <input type= "submit" value="Submit">-->
</form>
</body>
</html>