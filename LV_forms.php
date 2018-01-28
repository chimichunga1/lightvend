
<?php 


function frm_add_supplier()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Suppliers Name</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_a"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Contact Person</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_c"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Business Type</button>
                  </div>
                
              <select name="Supplier_b"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getallSup_BusType();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Address</button>
            </div>
            <input type="text" class="form-control"  name="Supplier_d"  required>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Telephone No</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_e"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Fax No</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_f"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Email</button>
                  </div>
                  <input type="email" class="form-control"  name="Supplier_g"  required>
      </div>
    </div>
  </div>

  
  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Approved By</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_h" >
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date Approved</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_i"  >

              
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
              <textarea  style="width:98%; resize: none;" rows="5" class="form-control"  name="Supplier_j"  ></textarea>
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Potential">Potential</option>
                <option value="Accredited">Accredited</option>
         
              </select>
                  
      </div>
    </div>
    <div class="col-md-3">
    <div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div>
    </div>
    <div class="col-md-3">
    <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div>
    </div>
  </div>


  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addSuppliers">Submit</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
<?php 
}

function frm_edit_supplier()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >
    <?php 
   
    $xQx=getEdit_Supplier($_SESSION['editsupid']);
    while($row=mysqli_fetch_array($xQx))
    {
        echo "<input type='text' class='form-control' id='SupId' name='supId'  style='position:absolute;z-index:-1;opacity:0;' value='".$row[12]."'>";
    ?>

    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Suppliers Name</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_a'  value='".$row[0]."'>"; ?>

        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Contact Person</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_b'  value='".$row[1]."'>"; ?>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Business Type</button>
                    </div>
                    
                <select name="Supplier_j"  class="form-control" >
                    <?php 
                      
                          $xQx=getSup_BusType($row[9]);
                          $rowx=mysqli_fetch_array($xQx);
                           echo "<option value='". $rowx[0]."' Selected>SELECTED -> ". $rowx[1]."</option>";

                    
                          $xQx=getallSup_BusType();

                          while($rowx=mysqli_fetch_array($xQx))

                          {
                            echo "
                            <option value='".$rowx[0]."' >".$rowx[1]."</option>
                            ";
                          }
                    ?>


                    <?php /* echo "<option value='". $row[9]."' Selected>SELECTED -> ". $row[9]."</option>"; */ ?>
                    <!-- <option value="1">1</option>
                    <option value="2">2</option>    
                    <option value="3">3</option>     -->
                </select>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                <div class="input-group-btn">
                <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Address</button>
                </div>
                <?php echo " <input type='text' class='form-control'  name='Supplier_e'  value='".$row[4]."'>"; ?>
        </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Telephone No</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_c'  value='".$row[2]."'>"; ?>
        </div>
        </div>
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Fax No</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_d'  value='".$row[3]."'>"; ?>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Email</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_f'  value='".$row[5]."'>"; ?>
        </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Approved By</button>
                    </div>
                    
                    <?php echo " <input type='text' class='form-control'  name='Supplier_k'  value='".$row[10]."'>"; ?>
        </div>
        </div>
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date Approved</button>
                    </div>
                    
                    <?php echo " <input type='date' class='form-control'  name='Supplier_l'  value='".$row[11]."'>"; ?>

                
        </div>
        </div>
    </div>
        

    <div class="row">
        <div class="col-md-12">
        <center>
                <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>        
                <?php echo" <textarea  style='width:98%; resize: none;' rows='5' class='form-control'  name='Supplier_h'  >".$row[7]." </textarea>"; ?>
        </center>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                    </div>
                

                    <select name="Supplier_g"  class="form-control"  >
                    <?php echo " <option value='".$row[6]."' Selected>SELECTED -> ".$row[6]."</option>"?>
                        <option value=" "> </option>
                        <option value="Potential">Potential</option>
                        <option value="Accredited">Accredited</option>
                
                    </select>

                   
                    
        </div>
        </div>
        <div class="col-md-3">
        <div style="margin:10px;">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >isActive</button>
        </div>
        </div>
        <div class="col-md-3">
        <div class="input-group margin">
        <center>
                     <label class="switch">
                    <?php 
                    if($row[8]=='1')
                    {
                        echo '<input type="checkbox" checked name="Supplier_i" value="1" >';
                    }
                    else
                    {
                        echo '<input type="checkbox" name="Supplier_i" value="1" >';
                    }
                    ?>
                        
                     <span class="slider"></span>
                    </label>
                    
        </center>
        </div>
        </div>
    </div>


    <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="editSuppliers">Submit</button>
    </form>  

    <br>
    <br>
    <div class="divider"></div>
    <?php 
    }

}

function frm_add_itemsinvo()

{

?>

<script>
  

function getState(val) {
    $.ajax({
    type: "POST",
    url: "lv_getitems.php",
    data:'positionname='+val,
    success: function(data){
        $("#item_stock").html(data);
    }
    });
}

</script>
  <div class="divider"></div>




      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Item</button>
                  </div>
                
              <select name="items_a"  class="form-control" onChange="getState(this.value)" required >
                 <option value=" " Selected> </option>
                 <?php $xQx=getItems();
                 
                      while($row=mysqli_fetch_array($xQx))

                      { 
                        echo "

                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>

     <!--   <input type='text' class='form-control'  name='Client_m'  value='".$row[13]."> -->
       <div id="item_stock">

</div>

   




<br><br>






<?php
}

function frm_edit_client_a()
{
  ?>
  <div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

     <?php 
 
    $xQx=getEdit_Clients($_SESSION['editclientid']);
    while($row=mysqli_fetch_array($xQx))
    {
        echo "<input type='text' class='form-control' id='clientId' name='clientId'  style='position:absolute;z-index:-1;opacity:0;' value='".$row[0]."'>";
    ?>

  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Company</button>
                  </div>
                
                  <?php echo " <input type='text' class='form-control'  name='Client_a'  value='".$row[1]."'>"; ?>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Contact Person</button>
                  </div>
              

                  <?php echo " <input type='text' class='form-control'  name='Client_c'  value='".$row[3]."'>"; ?>
      </div>
    </div>

    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Business Type</button>
                  </div>
                
              <select name="Client_b"  class="form-control" required>
               
                 <?php 
                      
                          $xQx=getSup_BusType($row[2]);
                          $rowx=mysqli_fetch_array($xQx);
                           echo "<option value='". $rowx[0]."' Selected>SELECTED -> ". $rowx[1]."</option>";

                    
                          $xQx=getallSup_BusType();

                          while($rowx=mysqli_fetch_array($xQx))

                          {
                            echo "
                            <option value='".$rowx[0]."' >".$rowx[1]."</option>
                            ";
                          }
                    ?>
                 
              
              </select>
      </div>
    </div>

  </div>

  <div class="row">
  
    <div class="col-md-4">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">TIN</button>
            </div>
  
            <?php echo " <input type='text' class='form-control'  name='Client_k'  value='".$row[11]."'>"; ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">SC TIN</button>
            </div>
           
            <?php echo " <input type='text' class='form-control'  name='Client_m'  value='".$row[13]."'>"; ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">OSCA/PWD/ID No.</button>
            </div>
           
            <?php echo " <input type='text' class='form-control'  name='Client_l'  value='".$row[12]."'>"; ?>
      </div>
    </div>

  </div>



  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Address</button>
                  </div>
                  <?php echo " <input type='text' class='form-control'  name='Client_d'  value='".$row[4]."'>"; ?>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Telephone No.</button>
                  </div>
                  <?php echo " <input type='text' class='form-control'  name='Client_e'  value='".$row[5]."'>"; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Mobile No.</button>
                  </div>
                  <?php echo " <input type='text' class='form-control'  name='Client_g'  value='".$row[7]."'>"; ?>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Fax No.</button>
                  </div>
                  <?php echo " <input type='text' class='form-control'  name='Client_f'  value='".$row[6]."'>"; ?>
      </div>
    </div>

  </div>

  
  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Email</button>
                  </div>
                  <?php echo " <input type='email' class='form-control'  name='Client_h'  value='".$row[8]."'>"; ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date Created</button>
                  </div>
               
                  <?php echo " <input type='date' class='form-control'  name='Client_i' style='cursor:default;' disabled value='".$row[9]."'>"; ?>
                

              
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
          
              <?php echo " <textarea  style='width:98%; resize: none;' rows='5' class='form-control'  name='Client_j'  >".$row[10]."</textarea>"; ?>        
             
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">TAX Status</button>
                  </div>
              <select name="Client_n"  class="form-control"  required>
                <?php echo " <option value='".$row[14]."' Selected>SELECTED -> ".$row[14]."</option>"; ?> 
                <option value=" "> </option>
                <option value="Vatable">Vatable</option>
                <option value="Non Vatable">Non Vatable</option>
         
              </select>
                  
      </div>
    </div>
    <div class="col-md-3">
    <div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div>
    </div>
    <div class="col-md-3">
    <div class="input-group margin">
      <center>
                  <label class="switch">
                
                    <?php 
                    if($row[15]=='1')
                    {
                        echo '<input type="checkbox" checked name="Client_o" value="1" >';
                    }
                    else
                    {
                        echo '<input type="checkbox" name="Client_o" value="1" >';
                    }
                    ?>
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div>
    </div>
  </div>
                

  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="editClient">Submit</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>

  <?php 
    }
}


function frm_add_client()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Company</button>
                  </div>
                  <input type="text" class="form-control"  name="Client_a"  required>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Contact Person</button>
                  </div>
                  <input type="text" class="form-control"  name="Client_c"  required>
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Business Type</button>
                  </div>
                
              <select name="Client_b"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getallSup_BusType();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">TIN</button>
            </div>
            <input type="text" class="form-control"  name="Client_k"  >
      </div>
    </div>

    <div class="col-md-4">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">SC TIN</button>
            </div>
            <input type="text" class="form-control"  name="Client_m"  >
      </div>
    </div>

    <div class="col-md-4">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">OSCA/PWD/ID No.</button>
            </div>
            <input type="text" class="form-control"  name="Client_l"  >
      </div>
    </div>

  </div>



  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Address</button>
                  </div>
                  <input type="text" class="form-control"  name="Client_d"  >
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Telephone No.</button>
                  </div>
                  <input type="text" class="form-control"  name="Client_e"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Mobile No.</button>
                  </div>
                  <input type="email" class="form-control"  name="Client_g"  >
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Fax No.</button>
                  </div>
                  <input type="email" class="form-control"  name="Client_f"  >
      </div>
    </div>
  </div>

  
  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Email</button>
                  </div>
                  <input type="text" class="form-control"  name="Client_h" >
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date Created</button>
                  </div>
                  <input type="date" class="form-control"  name="Client_i" value="<?php echo date("Y-m-d");?>" >
                

              
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
              <textarea  style="width:98%; resize: none;" rows="5" class="form-control"  name="Client_j"  ></textarea>
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">TAX Status</button>
                  </div>
              <select name="Client_n"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Vatable">Vatable</option>
                <option value="Non Vatable">Non Vatable</option>
         
              </select>
                  
      </div>
    </div>
    <div class="col-md-3">
    <div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div>
    </div>
    <div class="col-md-3">
    <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Client_o" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div>
    </div>
  </div>


  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addClient">Submit</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
<?php 
}

?>




<?php 


function frm_add_stocks()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Tag/Code</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_a"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">S/N</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_c"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Supplier</button>
                  </div>
                
              <select name="Supplier_b"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getSupplier();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Item Group</button>
                  </div>
                
              <select name="Supplier_b"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getSupplier();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Item</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_e"  required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Brand</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_f"  required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Model</button>
                  </div>
                 <input type="email" class="form-control"  name="Supplier_g"  required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Quantity</button>
                  </div>
                  <input type="email" class="form-control"  name="Supplier_q"  required>
      </div>
    </div>



  </div>

  
  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Description</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_h" >
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Unit Price</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_i" >

              
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date of Purchase</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_j"  >

              
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">End of Warranty</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_k"  >

              
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Delivery Date</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_l"  >

              
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
              <textarea  style="width:98%; resize: none;" rows="5" class="form-control"  name="Supplier_j"  ></textarea>
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
         <!--<div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Potential">Potential</option>
                <option value="Accredited">Accredited</option>
         
              </select>
                  
      </div> -->
    </div>
    <div class="col-md-3">
    <!--<div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div> -->
    </div>
    <div class="col-md-3">
       <!-- <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div> -->
    </div>
  </div>
<br>
 
  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addSuppliers">Save</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
<?php 
}

?>


 <?php 


function frm_edit_stocks()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Tag/Code</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_a"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">S/N</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_c"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Supplier</button>
                  </div>
                
              <select name="Supplier_b"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getStocks();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Item Group</button>
                  </div>
                
              <select name="Supplier_b"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getStocks();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Item</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_e"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Brand</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_f"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Model</button>
                  </div>
                  <input type="email" class="form-control"  name="Supplier_g"  required>
      </div>
    </div>
  </div>

  
  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Description</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_h" >
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Unit Price</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_i" >

              
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date of Purchase</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_j"  >

              
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">End of Warranty</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_k"  >

              
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>


  <div class="row">
<div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Delivery Date</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_l"  >

              
      </div>
</div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
              <textarea  style="width:98%; resize: none;" rows="5" class="form-control"  name="Supplier_j"  ></textarea>
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
         <!--<div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Potential">Potential</option>
                <option value="Accredited">Accredited</option>
         
              </select>
                  
      </div> -->
    </div>
    <div class="col-md-3">
    <!--<div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div> -->
    </div>
    <div class="col-md-3">
       <!-- <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div> -->
    </div>
  </div>
<br>
 
  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addSuppliers">Update</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
    <?php 
    
}

?>




 <?php 


function frm_edit_groups()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Category Name</button>
                  </div>
                  <input type="text" class="form-control"  name="Category_a"  required>
      </div>
    </div>
  </div>





  <div class="row">
    <div class="col-md-6">
         <!--<div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Potential">Potential</option>
                <option value="Accredited">Accredited</option>
         
              </select>
                  
      </div> -->
    </div>
    <div class="col-md-3">
    <!--<div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div> -->
    </div>
    <div class="col-md-3">
       <!-- <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div> -->
    </div>
  </div>
<br>
 
  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addSuppliers">Save</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
    <?php 
    
}

?>




<?php 


function frm_add_groups()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Category Name</button>
                  </div>
                  <input type="text" class="form-control"  name="groupa"  required>
      </div>
    </div>
  </div>





  <div class="row">
    <div class="col-md-6">
         <!--<div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Potential">Potential</option>
                <option value="Accredited">Accredited</option>
         
              </select>
                  
      </div> -->
    </div>
    <div class="col-md-3">
    <!--<div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div> -->
    </div>
    <div class="col-md-3">
       <!-- <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div> -->
    </div>
  </div>
<br>
 
  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addGroups">Save</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
<?php 
}

?>



<?php 


function frm_add_stocks_a()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Tag/Code</button>
                  </div>
                  <input type="text" class="form-control"  name="stock_a"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">S/N</button>
                  </div>
                  <input type="text" class="form-control"  name="stock_b"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Supplier</button>
                  </div>
                
              <select name="stock_c"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getSupplier();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Item Group</button>
                  </div>
                
              <select name="stock_d"  class="form-control" required>
                 <option value=" " Selected> </option>
                 <?php $xQx=getGroup();
                 
                      while($row=mysqli_fetch_array($xQx))

                      {
                        echo "
                        <option value='".$row[0]."' >".$row[1]."</option>
                        ";
                      }
                 ?>
              
              </select>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Item</button>
                  </div>
                  <input type="text" class="form-control"  name="stock_e"  required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Brand</button>
                  </div>
                  <input type="text" class="form-control"  name="stock_f"  required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Model</button>
                  </div>
                  <input type="text" class="form-control"  name="stock_g"  required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Quantity</button>
                  </div>
                  <input type="number" class="form-control"  name="stock_q"  required  pattern="[0-9]">
      </div>
    </div>



  </div>

  
  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Description</button>
                  </div>
                  <input type="text" class="form-control"  name="stock_h" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Unit Price</button>
                  </div>
                  <input type="number" class="form-control"  name="stock_i" required>

              
      </div>
    </div>

    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Sell Price</button>
                  </div>
                  <input type="number" class="form-control"  name="stock_j" required>

              
      </div>
    </div>

  </div>
    

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date of Purchase</button>
                  </div>
                  <input type="date" class="form-control"  name="stock_k"  required>

              
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">End of Warranty</button>
                  </div>
                  <input type="date" class="form-control"  name="stock_l"  required>

              
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Delivery Date</button>
                  </div>
                  <input type="date" class="form-control"  name="stock_m" required >

              
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
              <textarea  style="width:98%; resize: none;" rows="5" class="form-control"  name="stock_n" required></textarea>
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
         <!--<div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Potential">Potential</option>
                <option value="Accredited">Accredited</option>
         
              </select>
                  
      </div> -->
    </div>
    <div class="col-md-3">
    <!--<div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div> -->
    </div>
    <div class="col-md-3">
       <!-- <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div> -->
    </div>
  </div>
<br>
 
  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addstocks">Save</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
<?php 
}


function frm_invoice_items()
{

?>




<?php
}





?>


