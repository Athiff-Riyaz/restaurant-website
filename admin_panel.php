<?php
session_start();
@include("config.php");
@include 'adminHeader.php';
@include 'sidebar.php';
@include 'config.php';
if(isset( $_SESSION['id']) && isset( $_SESSION['email']))
{
    header("Location:login.php");
}
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/styleadminpanel.css"></link>
  </head>
</head>
<body >
    
     
 
    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:black;">Total Users</h4>
                    <h5 style="color:black;">
                  
                    <?php
                    $conn = mysqli_connect('localhost','root','','user_db');
                        $sql="SELECT * from user_form";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
           
            
       
<style>
.btn {
  
  margin-top: 2rem;
  display: inline-block;
  font-size: .5rem;
  color: white;
  border: 1px solid rgba(205,170,124,0.2);
  background: transparent;
  cursor: pointer;
  padding: 2rem 2rem;
  position: relative;
  overflow: hidden;
  z-index: 1;
}
.btn:before {
        content: '';
        width: 100%;
        height: 100%;
        background: #cdaa7c;
        z-index: -1;
        position: absolute;
        top: 0;
        left: -100%;
        transition: .5s;
    }

    .btn:hover.btn:before {
        left: 0;
    }

</style><div class="btn"><a href="officer_reg.php"> <center>ADD USER</center></a></div>
            




    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>