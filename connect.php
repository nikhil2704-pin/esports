<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'esports';

$conn=new mysqli($servername,$username,$password,$dbname);

$Player1=$CID=$phone="";
$status='0';

if(isset($_POST['submit']))
{
	$Player1 = $_POST['Player1'];
	$CID = $_POST['CID'];
	$phone = $_POST['phone'];


  	$query="INSERT INTO solo values('$Player1','$CID','$phone')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    header("refresh:0; url=register.php");
    }
    else {
     echo "<script> alert('Something Went Wrong!!!')</script>";
     header("refresh:0; url=register.php");
    }
}
?>