<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic 2</title>
</head>
<body>

    <form action="" method ="POST">
        <p>Name:</p><input type="text"  name="name" />
        <p>Surename:</p> <input type ="text" name="surename" />
        <input  type="submit" name="submit"  />
    </form>
 <?php 

error_reporting( ~E_DEPRECATED & ~E_NOTICE);

 $a = $_POST['name'];
 $b = $_POST['surename'];

 if(isset($_POST['submit']))

 if($a && $b) {

    echo "Welcome " . $a ." ". $b;
} else {

    echo "Please enter your Name and Surename.";
}



/*
 
 if(isset($_POST['submit'])) {

    if($_POST['name'] && $_POST['surename']) {
        echo "Welcome " . $_POST['name'] ." ". $_POST['surename'];
    } else {

        echo "Please enter your Name and Surename.";
    }
 }*/
 
 ?>

</body>

</html>