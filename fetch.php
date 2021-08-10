<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "esports");
 $query = "SELECT * FROM players WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["name"] = $row["name"];
  $data["gender"] = $row["gender"];
  $data["role"] = $row["role"];
  $data["age"] = $row["age"];
 }

 echo json_encode($data);
}
?>