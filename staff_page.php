<style> 
:root {
    --black: #333;
    --light-color: #cdaa7c;
    --box-shadow: 0 .5rem rgba(0,0,0,.1);
}

* {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    text-transform: capitalize;
    transition: all .2s linear;
    
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    background-image: url("https://en.free-wallpapers.su/data/media/2319/big/fd0244.jpg");
}

/*navigation styling*/
header {

    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: var(--black);
    padding: 1rem 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    --box-shadow: var(--box-shadow);
    z-index: 10000;
}
header .logo h1{
    font-weight:800;
    color:var(--light-color);
   
}

   

    header .navbar a {
        font-size: 1.7rem;
        padding: .5rem 1.5rem;
        color: var(--light-color);
        border: .1rem solid transparent;
    }

        header .navbar a.active,
        header .navbar a:hover {
            color: #fff;
            border: .1rem solid rgba(205,170,124, 0.2);
        }

    header .icons i {
        cursor: pointer;
        margin-left: .5rem;
        height: 4.5rem;
        width: 4.5rem;
        line-height: 4.5rem;
        background: var(--light-color);
        text-align: center;
        font-size: 1.7rem;
        color: #fff;
    }

        header .icons i:hover {
            color: #fff;
            background: var(--light-color);
            transform: rotate(360deg);
        }

    header .icons #menu {
        display: none;
    }
.delete {
  font-weight: 700;
  height: 36px;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
}
.delete a{
  font-weight: 700;
  color:red;
  
}
table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    border-radius: 12px 12px 0 0;
    margin-bottom: 50px;
  }

  td,
  th {
    padding: 10px 16px;
    text-align: center;
  }

  th {
    background-color: black;
    color: #fafafa;
    font-family: 'Open Sans', Sans-serif;
    font-weight: bold;
  }

  tr {
    width: 100%;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
  }

  tr:nth-child(even) {
    background-color: #eeeeee;
  }
  section {
    padding: 8rem 9%;
}

.heading {
  background-color: var(--black);
    text-align: center;
    color: var(--light-color);
    font-size: 4.5rem;
    padding-bottom: 2rem;
    text-transform: uppercase;
    letter-spacing: 1.3px;
}

.sub-heading {
    text-align: center;
    color: var(--light-color);
    font-size: 2.5rem;
    padding: .5rem 2rem;
    font-weight: 300;
    margin-bottom: 4rem;
    background: var(--black);
    display: inline-block;
}

.welcome .box-container {
    display: flex;
    gap: 1.5rem
}

    .welcome .box-container .box {
        width: 33%;
        background: var(--black);
        box-shadow: var(--box-shadow);
        text-align: center;
        padding-bottom: 1%;
    }

        .welcome .box-container .box .image {
            height: 25rem;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

            .welcome .box-container .box .image img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }

            .welcome .box-container .box .image:hover img {
                transform: scale(1.1);
            }

        .welcome .box-container .box .content {
            padding: 2rem;
            padding-top: 2rem;
        }

            .welcome .box-container .box .content h3 {
                color: var(--light-color);
                font-size: 2.2rem;
                font-weight: 400;
            }

            .welcome .box-container .box .content p {
                color: #fff;
                font-size: 1.4rem;
                font-weight: 300;
                padding: .5rem 0;
                line-height: 1.5;
            }
</style>

<?php
session_start();
include("config.php");
if(isset( $_SESSION['id']) && isset( $_SESSION['email']))
{
    header("Location:login.php");
}
?>




<!Doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" ,initial-scale="1" />
    <title>staff_page</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!--Custom css file-->
    <link rel="stylesheet" type="text/css" href="" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<header>
        <a href="#home" class="logo"><h1>Signature Cruisine</h1></a>
        <nav class="navbar">
           
            
            
            <a href="logout.php">logout/officer login</a>

        </nav>
        <div class="icons">
            

            <a href="user_page.php"><i class="fas fa-user-circle"></i></a>
          



        </div>
    </header>
<div >


<section class="welcome" id="about">
        <h1 class="heading">Welcome To Signature Cruisine Staff Page</h1>
        <center><h3 class="sub-heading"> ~ All Reservation Details ~</h3></center>
  
 
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">id</th>
        <th class="text-center">idnumber</th>
        <th class="text-center">people</th> </th>
        <th class="text-center">phone</th>
        <th class="text-center">date_time</th>
        <th class="text-center">name</th>
         <th class="text-center">email</th>
         <th class="text-center">delete</th>

      
   
      </tr>
    </thead>
    <?php
      @include"config.php";
$conn = mysqli_connect('localhost','root','','restaurant');

      $sql="SELECT * from registration";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>

    <tr>
      <td><?php echo $row['id']?></td>
      <td><?php echo $row['idnumber']?></td>
      <td><?php echo $row["people"]?></td>
      <td><?php echo $row["phone"]?></td>
      <td><?php echo $row["date_time"]?></td>
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["email"]?></td>
      
      <div class="delete"><td><a href="deletereservation.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td></div>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>