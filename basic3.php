<!DOCTYPE html>
<html>
<head>
	<title>Basic 3</title>
</head>
<body>
<form method ="POST">
Number1: <input type="text"  name="number1" />
Number2: <input type ="text" name="number2" />
<input  type="submit" name="submit"  />
</form>
<?php 

error_reporting( ~E_DEPRECATED & ~E_NOTICE);

 $a = $_POST['number1'];
 $b = $_POST['number2'];

 function run($a, $b) {
 	$c = $a * $b;
 	echo "<p>You number is $c</p>";
 }
 if(isset($_POST['submit'])) {
 	run($a, $b);
 }

?>


</body>
</html>