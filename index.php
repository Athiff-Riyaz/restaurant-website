<?php

@include 'db.php';

session_start();



?>










<!Doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" ,initial-scale="1" />
    <title>Signature cuisine</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!--Custom css file-->
    <link rel="stylesheet" type="text/css" href="StyleSheet.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>
<body>
    <!--header section of the site-->
    <header>
        <a href="#home" class="logo"><h1>Signature Cruisine</h1></a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>

            <a href="#menu">Menu</a>

            <a href="#team">Team</a>

            <a href="login.php">Reserve Table</a>
            
            <a href="#blog">Blog</a>
            <a href="logout.php">logout/officer login</a>

        </nav>
        <div class="icons">
            <a href="#"><i class="fas fa-bars"></i></a>

            <a href="user_page.php"><i class="fas fa-user-circle"></i></a>
            <a href="#services"><i class="fas fa-wrench"></i></a>



        </div>
    </header>
    <!--sliderpart-->
    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide slide1">
                    <div class="content">
                        <img src="" /> ;
                        <h3>Delicious Signature Cruisine</h3>
                        <h1>Gift voucher</h1>
                        <p>Give Away Your Beloved Customers</p>
                        <a href="#menu" class="btn">Order Now</a>
                    </div>
                </div>


                <div class="swiper-slide slide slide2">
                    <div class="content">
                        <img src="" /> ;
                        <h3>Sale Of 10% This Dish</h3>
                        <h1>The Fresh</h1>
                        <p>Food restaurant</p>
                        <a href="#menu" class="btn">Order Now</a>
                    </div>
                </div>



                <div class="swiper-slide slide slide3">
                    <div class="content">
                        <img src="" /> ;
                        <h3>We Are Open</h3>
                        <h1>Fresh fruits</h1>
                        <p>You will love it</p>
                        <a href="#menu" class="btn">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!--slider end-->
    <section class="welcome" id="about">
        <h1 class="heading">Welcome To Signature Cruisine</h1>
        <center><h3 class="sub-heading"> ~ Luxary & Quality ~</h3></center>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="https://wallpapercave.com/wp/wp7029319.jpg" />
                </div>
                <div class="content">
                    <h3>Handcrafted Culinary Excellence</h3>
                    <p> Explore the meticulous artistry behind every dish, from handpicked ingredients to precision techniques, showcasing the dedication to excellence in every culinary creation.</p>

                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="https://c.wallhere.com/photos/a7/a6/dinner_dof_matlagning_fotosondag_malm_restaurant_cooking_sweden-415554.jpg!d" />
                </div>
                <div class="content">
                    <h3>Luxurious Atmosphere and Exquisite Service</h3>
                    <p>Immerse yourself in the world of refined luxury as we curate an atmosphere of sophistication, complemented by impeccable service that caters to your every need.</p>

                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="https://images2.alphacoders.com/806/thumb-1920-806041.jpg" />
                </div>
                <div class="content">
                    <h3>Thoughtfully Selected Drinks</h3>
                    <p> Elevate your dining experience with our meticulously curated wine and spirits collection, featuring rare vintages and handcrafted cocktails that complement the exquisite flavors of our cuisine.</p>

                </div>
            </div>
        </div>
    </section>

    <section class="our-menu" id="menu">
        <h1 class="heading">Our Food Menu</h1>
        <center><h3 class="sub-heading">~ see what we offer ~</h3></center>
        <div class="menu-container">
            <div class="item">
                <div class="item-name">
                    <h2>Main Course </h2>
                    <img src="" />
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super Delicious Items</h3>
                        <span class="dots"></span>
                        <h3>Rs.3000/-</h3>

                        <ul>
                            <li><a href="#">Grilled Salmon with Lemon Butter Sauce</a></li>
                            <li><a href="#">Beef Tenderloin Medallions with Red Wine ReductionItalian</a> </li>
                            <li><a href="#">Vegetarian Eggplant Parmesan</a></li>
                            <li> <a href="#">Chicken Alfredo with Garlic Parmesan Pasta</a> </li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="item">
                <div class="item-name">
                    <h2>Soups and Salads</h2>
                    <img src="" />
                </div>

                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super Delicious Items</h3>
                        <span class="dots"></span>
                        <h3>Rs.1300/-</h3>

                        <ul>
                            <li><a href="#">Creamy Tomato Basil Soup</a></li>
                            <li><a href="#">Thai-inspired Coconut and Lemongrass Soup</a> </li>
                            <li><a href="#">Classic Caesar Salad</a></li>
                            <li> <a href="#">Spinach and Quinoa Salad</a> </li>
                        </ul>
                    </div>



                </div>
            </div>


            <div class="item">
                <div class="item-name">
                    <h2>Drinks</h2>
                    <img src="" />
                </div>

                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super Delicious Items</h3>
                        <span class="dots"></span>
                        <h3>Rs.1000/-</h3>

                        <ul>
                            <li><a href="#">Fresh Mint and Lime</a></li>
                            <li><a href="#">Pineapple Smoothie</a> </li>
                            <li><a href="#">Coffee Bean Garnish</a></li>
                            <li> <a href="#">Red Wine</a> </li>
                        </ul>
                    </div>



                </div>
            </div>

            <div class="item">
                <div class="item-name">
                    <h2>Desserts</h2>
                    <img src="" />
                </div>

                <div class="item-body">
                    <div class="item-menu">
                        <h3>Super Delicious Items</h3>
                        <span class="dots"></span>
                        <h3>Rs.2000/-</h3>

                        <ul>
                            <li><a href="#">Cheesecake with Berry</a></li>
                            <li><a href="#">Vanilla Bean Ice Cream</a> </li>
                            <li><a href="#">Fruits salad with Ice cream</a></li>

                        </ul>
                    </div>



                </div>
            </div>
        </div>




    </section>


    <!--our team section part-->
    <section class="our-team " id="team">
        <h1 class="heading">our talented chef</h1>
        <center>
            <h3 class="sub-heading">~ Experience & Enthusiasm ~</h3>
        </center>

        <div class="our-chef">
            <div class="item">
                <div class="image">
                    <img src="https://wallpapercave.com/wp/wp1882342.jpg" />
                </div>

                <div class="chef-info">
                    <div>
                        <h3>
                            Kumar sangakkara
                        </h3>
                        <span>master piece</span>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>





            <div class="item">
                <div class="image">
                    <img src="https://purepng.com/public/uploads/large/purepng.com-chefcheftrained-professional-cookfood-preparationkitchenchefsexperienced-1421526669634llgk1.png" />
                </div>

                <div class="chef-info">
                    <div>
                        <h3>
                            mahela Weerasinghe
                        </h3>
                        <span>master piece</span>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>






            <div class="item">
                <div class="image">
                    <img src="https://www.kindpng.com/picc/m/158-1588272_chef-cooking-chef-hd-png-download.png" />
                </div>

                <div class="chef-info">
                    <div>
                        <h3>
                            jayasuriya bandara
                        </h3>
                        <span>master piece</span>
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- team section ends-->
  
    <!--news sec-->
    <section class="blog welcome" id="blog">
        <h1 class="heading">Latest news</h1>
        <center><h3 class="sub-heading"> ~ Great Articles ~</h3></center>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="https://images2.alphacoders.com/101/thumb-1920-1019901.jpg" />
                </div>

                <div class="content">
                    <h3>PROFESSIONAL LEVEL</h3>
                    <p>"Experience culinary excellence with our professional-level foods. Elevate your dining with meticulously crafted dishes, premium ingredients, and expert techniques. Discover a new standard in gastronomy today."</p>
                    <a href="https://r.search.yahoo.com/_ylt=Awr.3gwD5wJly4kFnftXNyoA_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1694717827/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fNutrition_facts_label/RK=2/RS=qRhmXvYkgHP6Iez6JAsGx_M5HTU-">READ MORE</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://c0.wallpaperflare.com/preview/430/444/893/three-liquor-bottles-and-cocktail-drink-on-bar-counter.jpg" />
                </div>

                <div class="content">
                    <h3>FRESH FOOD GURANTEED</h3>
                    <p>"Indulge in the vibrant flavors of our freshly sourced ingredients. From crisp greens to succulent produce, every dish is a celebration of nature's finest. Taste the difference at Signature Cruisine."</p>
                    <a href="https://r.search.yahoo.com/_ylt=AwrO8_am5wJlSaUFGzJXNyoA_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3Nj/RV=2/RE=1694717991/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fFresh_food%23%3a~%3atext%3dFresh%2520food%2520is%2520food%2520which%2520has%2520not%2520been%2cbeen%2520recently%2520caught%2520or%2520harvested%2520and%2520kept%2520cold./RK=2/RS=tEjh0NeAJoLVIVCeNHoanBfuioY-">READ MORE</a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="https://wallpapercave.com/wp/wp1874173.jpg" />
                </div>

                <div class="content">
                    <h3>THE MENU IS PLENTIFUL</h3>
                    <p>
                        "Explore a bountiful array of delectable choices on our extensive menu. From savory classics to innovative creations, there's something to delight every palate. Savor the abundance at Signature Cruisine."
                    </p>
                    <a href="https://r.search.yahoo.com/_ylt=AwrO7f3Z5wJlAfEF_YlXNyoA_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1694718042/RO=10/RU=https%3a%2f%2fen.wiktionary.org%2fwiki%2fplentiful/RK=2/RS=UsMtj1WPJ2R.aRQxcD4IzPDxSiU-">READ MORE</a>

                </div>
            </div>


        </div>
    </section>


    <!--news sec end-->
    <!--services-->
        <section class="welcome" id="services">
        <h1 class="heading">SERVICES</h1>
        <center><h3 class="sub-heading"> ~ Free services for customers ~</h3></center>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="http://www.clipartbest.com/cliparts/9cp/LRr/9cpLRradi.jpg" />
                </div>
                <div class="content">
                    <h3>unlimited wifi</h3>
                    <p> unlimited internet surf with a fastest fiber connection for all the customers.</p>

                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="https://www.co.davidson.nc.us/ImageRepository/Document?documentID=730" />
                </div>
                <div class="content">
                    <h3>Parking Service</h3>
                    <p>Free parking service available for free</p>
                </div>
            </div>


            <div class="box">
                <div class="image">
                    <img src="https://wp-images-soyummy.s3.amazonaws.com/wp-content/uploads/2019/05/07020611/buffet.jpg" />
                </div>
                <div class="content">
                    <h3>Buffet Service</h3>
                    <p> Buffet Service is a popular and versatile assisted service style that caters to a variety of tastes and preferences. </p>

                </div>
            </div>
        </div>
    </section>


    <!--footer sec-->
    <section class="footer">
        <h1 class="logo">Signature Cruisine</h1>
        <div class="container">
            <div>
                <h3>About Us</h3>
                <p>


                    About Signature Cuisine
                    Welcome to Signature Cuisine, where every meal is an experience crafted with passion and precision. Established in 2023, we have been delighting taste buds and creating memorable moments for our valued guests.
                </p>
            </div>

            <div>
                <h3>GET NEWS & OFFERS </h3>
                <input type="email" name="" placeholder="enter your email" />
                <ul>
                    <li><a href="https://twitter.com/"> <i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/"> <i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://r.search.yahoo.com/_ylt=Awr49.3m5AJlJDUFRz9XNyoA_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1694717287/RO=10/RU=https%3a%2f%2fwww.whatsapp.com%2f/RK=2/RS=eb.FCyvv6LE3dNenUsdIHO3hwfM-"> <i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="https://r.search.yahoo.com/_ylt=AwrOu4UB5QJliyoGpBdXNyoA_ylu=Y29sbwNncTEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1694717313/RO=10/RU=https%3a%2f%2fwww.linkedin.com%2f/RK=2/RS=eu4huvO5ATHK6WCU9ObhsGkMfFw-"> <i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>


            <div>
                <h3>CONTACT US</h3>
                <span>+94123456789</span>
                <span>athiffriyazcool318@gmaill.com</span>

            </div>
        </div>

        <p>&copy;2023 Reserved by Athiff riyaz</p>
    </section>


    <!--footer sec end-->
    <!--jump to top-->

    <button class="topbtn"><i class="fa-solid fa-angle-up"></i></button>








    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
                var swiper = new Swiper(".home-slider", {
                    spaceBetween: 30,
                    centeredSlides: true,
                    autoplay: {
                        delay: 7500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    loop: true,
                });
    </script>



    <script type="text/javascript">
                let menu = document.querySelector('#menu');
                let navbar = document.querySelector('.navbar');

                menu.onclick = () => {
                    menu.classList.toggle('fa-times');
                    navbar.classList.toggle('active');
                }
    </script>
</body>
</html>