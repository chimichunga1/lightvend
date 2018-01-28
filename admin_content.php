  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     

     <style> 
   h3
{
  color:  white;
}
 </style>

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

<?php 




?>
    <?php
    if(isset($_GET['x']))
    {
      
      for ($i=0; $i < $x ; $i++) 
      { 
       
      
          if(($_GET['x']) == $sidebar_label[$i])
          {
          $y="LV_".$sidebar_label[$i].".php";
          include($y);
          }
      }
    }
    else
    {
      

    }
    ?>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

 
