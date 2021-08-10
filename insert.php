<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "esports";
try {
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO employee (firstName,email,password,phone,)
    VALUES ('$firstName', '$email','$password','$phone')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>