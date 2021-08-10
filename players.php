
<?php 
//index.php
include 'connect1.php';
$connect = mysqli_connect("localhost", "root", "", "esports");
$query = "SELECT * FROM players ORDER BY name ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h3 align="center">Search Player Data</h3><br />   
   <div class="row">
    <div class="col-md-4">
     <select name="players_list" id="players_list" class="form-control">
      <option value="">Select players</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
      }
      ?>
     </select>
    </div>
    <div class="col-md-4">
     <button type="button" name="search" id="search" class="btn btn-info">Search</button>
    </div>
   </div>
   <br />
   <div class="table-responsive" id="players_details" style="display:none">
   <table class="table table-bordered">
    <tr>
     <td width="10%" align="right"><b>Name</b></td>
     <td width="90%"><span id="players_name"></span></td>
    </tr>

    <tr>
     <td width="10%" align="right"><b>Gender</b></td>
     <td width="90%"><span id="players_gender"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>Designation</b></td>
     <td width="90%"><span id="players_role"></span></td>
    </tr>
    <tr>
     <td width="10%" align="right"><b>Age</b></td>
     <td width="90%"><span id="players_age"></span></td>
    </tr>
   </table>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#players_list').val();
  if(id != '')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
    {
     $('#players_details').css("display", "block");
     $('#players_name').text(data.name);
     $('#players_gender').text(data.gender);
     $('#players_role').text(data.role);
     $('#players_age').text(data.age);
    }
   })
  }
  else
  {
   alert("Please Select players");
   $('#players_details').css("display", "none");
  }
 });
});
</script>

