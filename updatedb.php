<?php
include("config.php");
if(isset($_GET['id'])){
    $update=$_GET['id'];
    echo$update;
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $user_type=$_POST['user_type'];
    
    
echo $name.$email.$user_type;


$sql="UPDATE user_form SET id='$update',name='$name',email='$email', password= '$pass' ,user_type='$user_type' WHERE id='$update'";
$result=mysqli_query($conn,$sql);
    if ($result)
    {
        header('location: admin_panel.php');
    }
    else{
        echo"Error: ".$sql."<br>".mysqli_error($conn);
    }

}
?>