<?php
include("db.php");
if(isset($_GET['id'])){
    $delete=$_GET['id'];
    echo$delete;
    $sql="delete from registration where id=$delete";
    echo$sql;
    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        header("Location:staff_page.php");
    }
    else{
        echo"Error: ".$sql."<br>".mysqli_error($conn);
    }

}

?>