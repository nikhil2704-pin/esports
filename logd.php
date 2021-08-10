<?php
include 'connect1.php';
$conn=new mysqli($servername,$username,$password,$dbname);

$username=$password="";
$status='0';

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
  $password = $_POST['password'];
	$phone = $_POST['phone'];

  	$query="INSERT INTO registration values('$username','$email','$password','$phone')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    header("refresh:0; url=login.php");
    }
    else {
     echo "<script> alert('Something Went Wrong!!!')</script>";
     header("refresh:0; url=login.php");
    }
}
?>