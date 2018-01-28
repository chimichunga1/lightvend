<?php 
include('LV_queries.php'); 
include('connect.config.php');
session_start();


if (isset($_POST['addSuppliers']))
{
//-----------------------------------------------
    if(empty($_POST['Supplier_l']))
    {
        addSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k'],'0');
    }
    else
    {
        addSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k'],$_POST['Supplier_l']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>
<?php
}

if (isset($_POST['addInvoice']))
{
//-----------------------------------------------
    if(empty($_POST['invoice_a']))
    {

    }
    else
    {

$a = $_POST['invoice_a'];
$b = $_POST['invoice_b'];
$c = $_POST['invoice_c'];
$d = $_POST['invoice_d'];
$e = $_POST['invoice_e'];
$f = $_POST['invoice_f'];


$xQx = "INSERT INTO invoices(invoiceStatId,clientId,busTypeId,date_created,due_date,remarks,isDeleted)VALUES ('$a','$b','$c','$d','$e','$f','0')";
        $query=mysqli_query($conn,$xQx);
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SALES%20INVOICES";
    </script>
<?php
}




if (isset($_POST['delSupplier']))
{
//-----------------------------------------------
delSupplier($_POST['supId']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>
<?php
}


if (isset($_POST['editSuppliers']))
{
//-----------------------------------------------

    if(empty($_POST['Supplier_i']))
    {
        updSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],'0',$_POST['Supplier_j'],$_POST['Supplier_k'],$_POST['Supplier_l'],$_POST['supId']);
    }
    else
    {
        updSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k'],$_POST['Supplier_l'],$_POST['supId']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>
<?php
}

if (isset($_POST['addClient']))
{
//-----------------------------------------------
    if(empty($_POST['Client_o']))
    {
        addClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_i'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],'0',$_POST['clientId']);
    }
    else
    {
        addClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_i'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],$_POST['Client_o'],$_POST['clientId']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=CLIENTS";
    </script>
<?php
}

if (isset($_POST['delClient']))
{
//-----------------------------------------------
delClient($_POST['clientId']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=CLIENTS";
    </script>
<?php
}


if (isset($_POST['editClient']))
{
//-----------------------------------------------
    if(empty($_POST['Client_o']))
    {
        updClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],'0',$_POST['clientId']);
    }
    else
    {
        updClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],$_POST['Client_o'],$_POST['clientId']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=CLIENTS";
    </script>
<?php
}




if (isset($_POST['addGroups']))
{
//-----------------------------------------------
    if(empty($_POST['groupa']))
    {
    
    }
    else
    {
  
         echo $_POST['groupa'];
         addgroup($_POST['groupa'],'0');   

    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=GROUP";
    </script>
<?php
}











if (isset($_POST['add_busType']))
{



$busType = $_POST["busType"];

  $xQx_insert = "INSERT INTO businesstypes (busTypeName, isDeleted) VALUES ('$busType','0')";
  $query_insert=mysqli_query($conn,$xQx_insert);

?>
    <script>   
    window.location.href="admin.php?x=MAINTENANCE";
    </script>

    <?php

}



if (isset($_POST['del_busType']))
{



$busType = $_POST["delbusType"];

  $xQx_update = "UPDATE businesstypes SET isDeleted = '1' WHERE busTypeId = $busType";
  $query_update=mysqli_query($conn,$xQx_update);

?>
    <script>   
    window.location.href="admin.php?x=MAINTENANCE";
    </script>

    <?php

}

if (isset($_POST['del_catType']))
{



$catType = $_POST["delcatType"];

  $xQx_update = "UPDATE categories SET isDeleted = '1' WHERE catId = $catType";
  $query_update=mysqli_query($conn,$xQx_update);

?>
    <script>   
    window.location.href="admin.php?x=MAINTENANCE";
    </script>

    <?php

}




if (isset($_POST['add_catType']))
{



$catType = $_POST["catType"];

  $xQx_insert = "INSERT INTO categories (categoryName, isDeleted) VALUES ('$catType','0')";
  $query_insert=mysqli_query($conn,$xQx_insert);

?>
    <script>   
    window.location.href="admin.php?x=MAINTENANCE";
    </script>

    <?php

}






















if (isset($_POST['addstocks']))
{
//-----------------------------------------------
    if(empty($_POST['stock_m']))
    {
    
    }
    else
    {

  

$tagcode = $_POST["stock_a"];
$SerialNumber = $_POST["stock_b"];
$Supplier = $_POST["stock_c"];
$ItemGroup = $_POST["stock_d"];
$Item = $_POST["stock_e"];
$Brand = $_POST["stock_f"];
$Model = $_POST["stock_g"];
$quantity = $_POST["stock_q"];
$description = $_POST["stock_h"];
$unit_price = $_POST["stock_i"];
$sell_price = $_POST["stock_j"];

$DateofPurchase = $_POST["stock_k"];
$deliveryDate= $_POST["stock_m"];
$EndofWarranty = $_POST["stock_l"];
$Remarks = $_POST["stock_n"];






  $xQx_insert = "INSERT INTO assetstwo (code,serialName,supId,itmTypeId,assetName,brand,model,description,unitPrice,sellPrice,date_purchased,endofWarranty_date,delivery_date,quantity,isDeleted) VALUES ('$tagcode','$SerialNumber','$Supplier','$ItemGroup','$Item','$Brand','$Model','$description','$unit_price','$sell_price','$DateofPurchase','$EndofWarranty','$deliveryDate','$quantity','0')";
  $query_insert=mysqli_query($conn,$xQx_insert);        





    }
//-----------------------------------------------
    ?>
  <script>   
    window.location.href="admin.php?x=STOCKS";
    </script> 
<?php
}




if (isset($_POST['delStock']))
{
//-----------------------------------------------
delStock($_POST['stockId']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=STOCKS";
    </script>
<?php 

}

if (isset($_POST['delInvoice']))
{
//-----------------------------------------------
delInvoice($_POST['InvoiceId']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SALES%20INVOICES";
    </script>
<?php
}


if (isset($_POST['addItems_invoice']))
{

//use assetsID to and insert items_ordered

$assetsId = $_SESSION["assetsId_invoice"];
;
(int)$itemrange_order = $_POST["itemrange"];

  $xQx = "SELECT assetName,quantity FROM assetstwo WHERE assetsId = '$assetsId'";
  $query=mysqli_query($conn,$xQx);


            while($row = mysqli_fetch_array($query))

                { 

                    $quantity = $row["quantity"];
                    $assetName = $row["assetName"];

                }

$item_order = (int)$quantity - $itemrange_order;

$unitPrice_ordered = $_SESSION["unitPrice"];
$sellPrice_ordered = $_SESSION["sellPrice"];
$invoiceId_submit = $_SESSION["invoiceId_submit"];




  $xQx_insert = "INSERT INTO items_ordered (assetsId, assetName, quantity, unitPrice, sellPrice, invoiceId,isDeleted) VALUES ('$assetsId','$assetName','$itemrange_order','$unitPrice_ordered','$sellPrice_ordered','$invoiceId_submit','0')";
  $query_insert=mysqli_query($conn,$xQx_insert);

  $xQx_update = "UPDATE assetstwo SET quantity = $item_order WHERE assetsId = $assetsId";
  $query_update=mysqli_query($conn,$xQx_update);





}

?>

    <script>   
    window.location.href="admin.php?x=SALES%20INVOICES";
    </script>

    <?php
?>