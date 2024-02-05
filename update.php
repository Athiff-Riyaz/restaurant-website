<?php
include("config.php");
if(isset($_GET['id'])){
    $update=$_GET['id'];
    echo$update;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./Home image/123.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Cuisine | Edit User</title>
    <style>
.card
{
    display: flex;
    align-items:center;
    justify-content:center;
}
.j{
    border:solid;
    width: 50%;
    height: 80%;
    position: relative;
 
   }     
body {
  font-family: Verdana, Geneva, Tahoma, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: rgb(232, 194, 194);
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size:15px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: rgb(86, 15, 15);
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  font-size:20px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body >
<?php
        $conn = mysqli_connect('localhost','root','','user_db');
        $query="select * from user_form where id=$update";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
        ?>
    <br>
    <br>
    <br>
    <br> 
<div class="card">
    <div class="container j" >
        <form action="updatedb.php?id=<?php echo $_GET['id'];?>" method="POST">
        
        <h1><center>Edit User</center></h1>
        
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $row ['name'];?>" id="name" placeholder="name...."><br>
            
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $row ['email'];?>" id="email" placeholder="Email id..."><br>

            
            <input type="hidden" name="password" value="<?php echo $row ['password'];?>" id="password" placeholder="password...">
            
            <label for="user_type">User Type</label><br>
            <input type="text" readonly name="user_type" value="<?php echo $row ['user_type'];?>" id="user_type" placeholder="user_type...">
            

            <input type="submit"  class="registerbtn" value="Submit" name="submit" >
        </form>
        
    </div>
</div>

</body>
</html>