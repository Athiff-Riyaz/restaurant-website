<?php
session_start();
include("config.php");
if(isset( $_SESSION['id']) && isset( $_SESSION['email']))
{
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="StyleSheet.css"/>
</head>
<body>
    


<header>
        <a href="#home" class="logo"><h1>Signature Cruisine</h1></a>
        <nav class="navbar">
            <a href="index.php" class="active">Restaurant page</a>
            <a href="logout.php">logout</a>

        </nav>
        <div class="icons">

<a href="user_page.php"><i class="fas fa-user-circle"></i></a>

           </div>



        
        </header>
        <section class="welcome" id="about">
        <h1 class="heading">Welcome To Signature Cruisine Reservation Page</h1>
        <center><h3 class="sub-heading"> ~ Reserve Now ~</h3></center>
       </section>
    <!--reservation-->

    <div class="reservation" id="reservation">
        <div class="image">

        </div>
        <div class="form">
            <h1 class="heading">Book a Table</h1>
            <center><h3 class="sub-heading">~ Check Out Our Place ~</h3></center>


            <form action="insert.php" method="post">
                <div class="form-holder">
                    <div>
                        <input type="text" name="idnumber" placeholder="NIC number" required />
                        <input type="text" name="people" placeholder="people" required />

                        <input type="tel" name="phone" placeholder="Phone" required />
                    </div>
                    <div>
                        <input type="datetime-local" name="date_time" placeholder="Date_time" required />
                        <input type="text" name="name" placeholder="Name" required />
                        <input type="email" name="email" placeholder="Email" required />


                    </div>
                </div>
                <div class="btn"> <center><input type="submit" value="Book Table Now" /></center></div>

            </form>
        </div>
    </div>
</body>
</html>

    <!--resrvation ends-->