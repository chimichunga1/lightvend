<?php 
include('LV_queries.php'); 
include('connect.config.php');
include('support/function.php');
session_start();


if (isset($_POST['add_submit']))
{
//

$a = $_POST['Supplier_a'];
$b = $_POST['Supplier_b'];
$c = $_POST['Supplier_c'];
$d = $_POST['Supplier_d'];
$e = $_POST['Supplier_e'];
$f = $_POST['Supplier_f'];
$g = $_POST['Supplier_g'];
$h = $_POST['Supplier_h'];
$i = $_POST['Supplier_i'];







    if(empty($_POST['Supplier_j']))
    {





$xQx = "INSERT INTO suppliers(supName, contactPerson, busTypeId, address, telno, faxno, email, remarks, typeofSup, isActive)VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','0')";
        $query=mysqli_query($conn,$xQx);











    }
    else
    {

$j = $_POST['Supplier_j'];

$xQx = "INSERT INTO suppliers(supName, contactPerson, busTypeId, address, telno, faxno, email, remarks, typeofSup, isActive)VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
        $query=mysqli_query($conn,$xQx);






    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>  
<?php
}





if (isset($_POST['addAccount']))
{
//-----------------------------------------------
 
    
        addAccount($_POST['user1'],encryptIt($_POST['user2']),$_POST['user3'],'1');
    
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=ACCOUNTS";
    </script>
<?php
}

if (isset($_POST['editAccount']))
{
//-----------------------------------------------
 
    
        editAccount($_POST['user1'],encryptIt($_POST['user2']),$_POST['user3'],$_POST['user0']);
    
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=ACCOUNTS";
    </script>
<?php
}

if (isset($_POST['delAccount']))
{
//-----------------------------------------------
 
    
        delAccount($_POST['delId']);
    
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=ACCOUNTS";
    </script>
<?php
}
if (isset($_POST['resAccount']))
{
//-----------------------------------------------
 
    resAccount($_POST['resId']);

    
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=ACCOUNTS";
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

  $xQx_get_cname = "SELECT * FROM clients WHERE clientId = '$b'";
  $query_get_cname=mysqli_query($conn,$xQx_get_cname);         


                      while($row=mysqli_fetch_array($query_get_cname))

                      { 

                        $get_cname = $row["clientName"];


                      }

  $xQx_get_bname = "SELECT * FROM businesstypes WHERE busTypeId = '$c'";
  $query_get_bname=mysqli_query($conn,$xQx_get_bname);         


                      while($row=mysqli_fetch_array($query_get_bname))

                      { 

                        $get_bname = $row["busTypeName"];


                      }


$xQx = "INSERT INTO invoices(invoiceStatId , clientId, clientName, busTypeId, bustypeName, date_created ,due_date ,remarks ,isDeleted,Status)VALUES ('$a','$b','$get_cname','$c','$get_bname','$d','$e','$f','0','0')";
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

    if(empty($_POST['Supplier_j']))
    {
         updSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],'0',$_POST['Supplier_k']);
    }
    else
    {
        updSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k']);    
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
        addClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_i'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],'0');
    }
    else
    {
        addClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_i'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],$_POST['Client_o']);    
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

if(isset($_POST['editStock']))
{
$a=$_POST['Estock_a'];
$b=$_POST['Estock_b'];
$c=$_POST['Estock_c'];
$d=$_POST['Estock_d'];
$e=$_POST['Estock_e'];
$f=$_POST['Estock_f'];
$g=$_POST['Estock_g'];
$h=$_POST['Estock_h'];
$i=$_POST['Estock_i'];
$z=$_POST['Estock_z'];

    editStock($a,$b,$c,$d,$e,$f,$g,$h,$i,$z);

echo '   <script>   
    window.location.href="admin.php?x=STOCK DETAILS";
    </script>';

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















if (isset($_POST['copysave']))


{




$_SESSION['stock_a'] = $a = $_POST["stock_a"];
$_SESSION['stock_b'] = $b = $_POST["stock_b"];
$_SESSION['stock_c'] = $c = $_POST["stock_c"];
$_SESSION['stock_d'] = $d = $_POST["stock_d"];
$_SESSION['stock_e'] = $e = $_POST["stock_e"];
$_SESSION['stock_f'] = $f = $_POST["stock_f"];
$_SESSION['stock_g'] = $g = $_POST["stock_g"];
$_SESSION['stock_h'] = $h = $_POST["stock_h"];
$_SESSION['stock_i'] = $i = $_POST["stock_i"];



            addstocks($a,$b,$c,$d,$e,$f,$g,$h,$i);

/*  $xQx_insert = "INSERT INTO assetstwo (code,serialName,supId,itmTypeId,assetName,brand,model,description,unitPrice,sellPrice,date_purchased,endofWarranty_date,delivery_date,quantity,isDeleted) VALUES ('$tagcode','$SerialNumber','$Supplier','$ItemGroup','$Item','$Brand','$Model','$description','$unit_price','$sell_price','$DateofPurchase','$EndofWarranty','$deliveryDate','$quantity','0')";
  $query_insert=mysqli_query($conn,$xQx_insert);    */    





    
//-----------------------------------------------
    ?>
  <script>   
    window.location.href="admin.php?x=STOCK DETAILS";
    </script> 
<?php
}




if (isset($_POST['addstocks']))
{
//-----------------------------------------------
 

  

 $a = $_POST["stock_a"];
 $b = $_POST["stock_b"];
 $c = $_POST["stock_c"];
 $d = $_POST["stock_d"];
 $e = $_POST["stock_e"];
 $f = $_POST["stock_f"];
 $g = $_POST["stock_g"];
 $h = $_POST["stock_h"];
 $i = $_POST["stock_i"];



            addstocks($a,$b,$c,$d,$e,$f,$g,$h,$i);

/*  $xQx_insert = "INSERT INTO assetstwo (code,serialName,supId,itmTypeId,assetName,brand,model,description,unitPrice,sellPrice,date_purchased,endofWarranty_date,delivery_date,quantity,isDeleted) VALUES ('$tagcode','$SerialNumber','$Supplier','$ItemGroup','$Item','$Brand','$Model','$description','$unit_price','$sell_price','$DateofPurchase','$EndofWarranty','$deliveryDate','$quantity','0')";
  $query_insert=mysqli_query($conn,$xQx_insert);    */    





    
//-----------------------------------------------
    ?>
  <script>   
    window.location.href="admin.php?x=STOCK DETAILS";
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
    window.location.href="admin.php?x=STOCK DETAILS";
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
    window.location.href="admin.php?x=NEW%20INVOICE";
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
    window.location.href="admin.php?x=NEW%20INVOICE";
    </script>

    <?php




if(isset($_POST["payout"]))

{
    echo "tite";
}















?>