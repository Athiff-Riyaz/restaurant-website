<style>
   body {
      background-image: url("https://wallsdesk.com/wp-content/uploads/2017/01/Fast-Food-for-desktop-background.jpg");
}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: rgb(247, 245, 245);
}
h1.login-title {
    color: #090808;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #050505;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#cdaa7c;
    outline: none;
}
.login-button {
    color:#090909;
    background: #cdaa7c;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #0a0a0a;
}
h3 {
    font-weight: normal;
    text-align: center;
}

   </style>
<?php
session_start();
@include("config.php");
if(isset($_POST['email']) && isset($_POST['password'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
  

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'customer'){

        // $_SESSION['user_name'] = $row['name'];
         header('location:reservation_page.php');

      }elseif($row['user_type'] == 'admin'){

        // $_SESSION['user_name'] = $row['name'];
         header('location:admin_panel.php');

      }elseif($row['user_type'] == 'staff'){
       // $_SESSION['user_name'] = $row['name'];
         header('location:staff_page.php');
      }
      
   }else{
      $error[] = 'incorrect email or password!';
   }
   
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="style7.css"> -->

</head>
<body>


    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <?php
     if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
        <input type="text" class="login-input" name="email" placeholder="email" autofocus="true"/>
        <input type="text" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>

</body>
</html>

