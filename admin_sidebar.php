  <!-- Left side column. contains the logo and sidebar -->


  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
  


      <!-- Sidebar Menu -->

    <ul class="sidebar-menu" data-widget="tree">
   



  <a style="font-size:20px;color:#b8c7ce;" href="admin.php">  <div class="user-panel">
        <div class="pull-left image">
          <div style="background-color:white; background-size: 30px 30px;
    background-repeat: no-repeat;height:30px;width:30px;"  class="img-circle" alt="User Image">
 

          <center ><b><p style="font-size:20px;color:#b8c7ce;"><?php echo substr($_SESSION['fn'],0,1); ?></p></b></center>
          </div>
        </div>
        <div class="pull-left info" style="left:30px;">
    
          <p style="font-size:20px;"><?php echo substr($_SESSION['fn'],1); ?></p>
          <!-- Status -->
         
        </div>
      </div>
      </a>
     
</ul>

      <ul class="sidebar-menu" data-widget="tree">


 
        <li class="header">DASHBOARD</li>
        <!-- Optionally, you can add icons to the links -->
        
    <?php
  include('label_name.php'); 

   $x=count($sidebar_label);

   for ($i=0; $i < $x ; $i++ ) 
   { 
  
        if($i!=7)
        {
              if(isset($_GET['x']))
              {
                if(($_GET['x']) ==$sidebar_label[$i])
                {
                  echo "<li class='active'>";
                }
                else
                {
                      echo"<li>";
                }
              }
              else
              {
              echo"<li>";
              }
              $y="?x=".$sidebar_label[$i];
              ?>
              
              <?php  echo'<a href="'. $y .'"><i class="'.$sidebar_icon[$i].'"></i> <span> '. $sidebar_label[$i] .' </span></a></li>'; ?>
              <?php
          }
          else
          {
            $y="?x=".$sidebar_label[$i];
           echo'  <li><a href="'. $y .'" style="display:none;"><i class="'.$sidebar_icon[$i].'"></i> <span> '. $sidebar_label[$i] .' </span></a></li>';
          }
   }
   ?>
     
      </ul>

 
      
      

        <!-- Optionally, you can add icons to the links -->
        
       
  
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>