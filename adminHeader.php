<?php
   session_start();
   @include'config.php';

?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color:#cdaa7c;">
    
    <a class="navbar-brand ml-5" href="admin_panel.php">
        <img src="./assets/images/logo.png" width="80" height="80" alt="Signaturecruisine">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <a href="logout.php"><i class="fa fa-user mr-5" style="font-size:30px; color:black;" aria-hidden="true"></i></a>
         </a>
          <?php
        } else {
            ?>
            <a href="logout.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:black;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>
