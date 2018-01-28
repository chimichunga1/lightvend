<?php 
include('connect.config.php');
session_start();

if(isset($_POST["Login"]))
{
$username = $_POST["name"];
$password = $_POST["pass"];

$row=mysqli_query($conn,'SELECT * From `account_tbl` WHERE `username`="'.$_POST["username"].'" AND `password`="'.$_POST["password"].'" ');
$search= mysqli_fetch_assoc($row);

  $_SESSION['fn']=$search['user_name'];
  $_SESSION["u_id"] = $search["user_id"];

  if (!empty($search) && ($search['accessright']==1))
  {

?> 


<script>
{
    alert("Reservation was successful!");
}

</script>

<?php
  }

}





?>