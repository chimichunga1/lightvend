<?php 
session_start();
include("connect.config.php");

if(!empty($_POST["positionname"]))
{
$query_item = $_POST["positionname"];

$_SESSION["assetsId_invoice"] = $query_item;


}

else
{
	$_SESSION["assetsId_invoice"] = "empty";
}


  $xQx = "SELECT assetsId,serialName FROM assetstwo WHERE itmTypeId = '$query_item'";
  $query_invoice=mysqli_query($conn,$xQx);




?>

<br>

</div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

<?php
$namaiwa=0;


while($rowsss=mysqli_fetch_array($query_invoice))

{
 
  echo ' 
         

  <input type="checkbox"    name="SN'.$namaiwa.'" value="'.$rowsss[0].'"> '.$rowsss[1].'</input>
  <br>
 

';

$namaiwa+=1;
}

$_SESSION['SN']=$namaiwa;


?>
     
     <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Sell Price</button>
                  </div>
        <input type='text' class='form-control'  name='Sell'  >
    </div>


  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addItems_invoice">Submit</button>
</form>



      <?php



?>