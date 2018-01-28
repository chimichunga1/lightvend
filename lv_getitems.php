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


  $xQx = "SELECT assetName,quantity FROM assetstwo WHERE assetsId = '$query_item'";
  $query_invoice=mysqli_query($conn,$xQx);


            while($row = mysqli_fetch_array($query_invoice))

                { 

                	(int)$current_stock = $row["quantity"];
                }


echo "Current Quantity in stock : ";
echo $current_stock;


  $xQx = "SELECT assetName,quantity,unitPrice,sellPrice FROM assetstwo WHERE assetsId = '$query_item'";
  $query=mysqli_query($conn,$xQx);


            while($row = mysqli_fetch_array($query))

                { 


(int)$quantity = $row["quantity"];
(int)$unitPrice = $row["unitPrice"];
(int)$sellPrice = $row["sellPrice"];
}
echo "<br>";
echo "Unit Price : ".$unitPrice."";
echo "<br>";
echo "Sell Price : ".$sellPrice."";

$_SESSION["unitPrice"] = $unitPrice;
$_SESSION["sellPrice"] = $sellPrice;



?>

<br><br>

</div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >


      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Pull Out Quantity</button>
            </div>
          

            <input type="number" class="form-control"  name="itemrange"  min="1" max="<?php echo $quantity; ?>" required>
            

      </div>


  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addItems_invoice">Submit</button>
</form>



      <?php



?>