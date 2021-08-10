<?php
include 'connect1.php';
$conn=new mysqli($servername,$username,$password,$dbname);

$teamname=$CID=$phone="";
$status='0';

if(isset($_POST['submit']))
{
	$teamname = $_POST['teamname'];
	$CID = $_POST['CID'];
	$phone = $_POST['phone'];


  	$query="INSERT INTO team values('$teamname','$CID','$phone')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    header("refresh:0; url=games.php");
    }
    else {
     echo "<script> alert('Something Went Wrong!!!')</script>";
     header("refresh:0; url=games.php");
    }
}
?>