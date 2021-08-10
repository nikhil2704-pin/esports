<?php
include 'connect1.php';
$conn=new mysqli($servername,$username,$password,$dbname);

$Player1=$CID1=$Player2=$CID2=$Player3=$CID3=$Player4=$CID4=$phone="";
$status='0';

if(isset($_POST['submit']))
{
	$Player1 = $_POST['Player1'];
	$CID1 = $_POST['CID1'];
  $Player2 = $_POST['Player2'];
  $CID2 = $_POST['CID2'];
  $Player3 = $_POST['Player3'];
  $CID3 = $_POST['CID3'];
  $Player4 = $_POST['Player4'];
  $CID4 = $_POST['CID4'];
	$phone = $_POST['phone'];


  	$query="INSERT INTO squad values('$Player1','$CID1','$Player2','$CID2','$Player3','$CID3','$Player4','$CID4','$phone')";
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