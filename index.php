<?php
include 'prodconnection.php';
$prodconn = OpenCon();
echo "Connected Successfully";
CloseCon($prodconn);
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Koji Dino, Usaamah Gill, Akshay Gokani">

    <title>Space Website</title>

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/ea25cca267.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>

    <!-- Custom Stylesheet-->
    <link rel="stylesheet" href="css/style_landing.css">
</head>

<body>
    <!-- Navigation / Header -->
    <header>
        <!-- This creates the dynamic header image, text and logo area at the top of the page  -->
        <div class="TopBanner">
            <div class="BannerText">
                <h1>Welcome to the world of BlackStar Alliance</h1>
                <p>'Bringing the universe to you, and you to the universe'</p>
            </div>
        </div>
    </header>

    <main>

        <!-- Sticky Navbar -->
        <nav>
            <!-- Left Side -->
            <div>
                <button class="logo" onclick="location.href='./index.php'">BlackStar Alliance</button>
                <button class="item" href="#">About</button>
                <button class="item" href="#">Blog</button>
            </div>
            <div>
            </div>
            <!-- Right Side -->
            <div class="right">
                <div>
                    <li class="product-search">
                        <form action="/search.php" method="get" id="form1"><input type="text" placeholder="Search.." name="query" id="search_field">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </li>
                </div>
                <button class="item coolbuttons" href="#" onclick="location.href='./addproduct.php'">Log In</button>
                <button class="item coolbuttons" href="#">Sign Up</button>
                <button class="item coolbuttons" href="#"><i class="fas fa-shopping-cart"></i></button>
            </div>
        </nav>

        <!-- Product Category Navigation  -->
        <div class="flex-card">
            <div class="gallery">
                <a target="_self" href="search.php?category=SpaceShips&query=">
                    <img src="img/CATEGORY/SPACE_VEHICLES.png" alt="ship">
                    <div class="desc">SpaceShips</div>
                </a>
            </div>
            <div class="gallery">
                <a target="_self" href="search.php?category=SpaceParts&query=">
                    <img src="img/CATEGORY/PART.png" alt="ship">
                    <div class="desc">SpaceParts</div>
                </a>
            </div>
            <div class="gallery">
                <a target="_self" href="search.php?category=SpaceGear&query=">
                    <img src="img/CATEGORY/OUTERWEAR.png" alt="ship">
                    <div class="desc">SpaceGear</div>
                </a>
            </div>
            <div class="gallery">
                <a target="_self" href="search.php?category=SpaceTools&query=">
                    <img src="img/CATEGORY/WEAPONS.png" alt="ship">
                    <div class="desc">SpaceTools</div>
                </a>
            </div>
            <div class="gallery">
                <a target="_self" href="search.php?category=SpaceIns&query=">
                    <img src="img/CATEGORY/INSURANCE.png" alt="ship">
                    <div class="desc">Space Insurance</div>
                </a>
            </div>
        </div>

        <!-- Text (or jumbotron) -->
        <h1 class="desc">About Us</h1>
        <div class="text">
            <p class="desc">
                BlackStar Alliance is Earth's leading space frontier company. Featuring a conglomerate of the brightest minds from around the world, BlackStar's primary mission continues to be bringing humanity to space, and bringing space back to humanity by making
                it more accessible. We deal with alien civilizations all around the universe to supply the best technologies, food, insurance policies, and more. Come to BlackStar for all your space related needs!
            </p>
        </div>

        <!-- Featured cards -->
        <div class="flex-card">
            <div class="flextext">
                <h2>Brand new <br> Rocket Powered Battle Cars!</h2>
                <h4>Now Available across the Galaxy</h4>
            </div>
            <div class="fleximg"><img src="img/flex1.png"></div>
        </div>

        <div class="flex-card">
            <div class="fleximg"><img src="img/flex2.png"></div>
            <div class="flextext">
                <h2>Experience this stunning VR game</h2>
                <h4>Wits, deception, murder?</p>
            </div>
        </div>

        <!-- Featured Products -->
        <h1 class="desc">Featured Products</h1>
        <div class="flex-card flex-gallery">
            <div class="gallery">
                <a href="productpage.php">
                    <img src="img/featured_products/spaceship.jpg" width="500" height="310">
                </a>
                <ul class="desc">
                    <li>Mach III gunship by Netflix </li>
                    <li>dual booster</li>
                    <li>tertiary battteris</li>
                    <li>$20,000,000</li>
                    <li>&#9733; &#9733; &#9733; &#9733; &#9734;</li>
                </ul>
            </div>
            <div class="gallery">
                <a href="productpage.php">
                    <img src="img/featured_products/toilet.jpg" width="500" height="310">
                </a>
                <ul class="desc">
                    <li>Space toilet</li>
                    <li>Heated seat</li>
                    <li>SOLD OUT</li>
                    <li>$20,000</li>
                    <li>&#9733; &#9733; &#9733; &#9733; &#9734;</li>
                </ul>
            </div>
            <div class="gallery">
                <a href="productpage.php">
                    <img src="img/featured_products/mecha.jpg" width="500" height="310">
                </a>
                <ul class="desc">
                    <li>jupiter II mech by christies</li>
                    <li>patented armour</li>
                    <li>avaliable</li>
                    <li>$200,000</li>
                    <li>&#9733; &#9733; &#9733; &#9733; &#9734;</li>
                </ul>
            </div>
            <div class="gallery">
                <a href="productpage.php">
                    <img src="img/featured_products/astro.jpg" width="500" height="310">
                </a>
                <ul class="desc">
                    <li>50 sq/ft marble counter tops</li>
                    <li>Solid wood finishing</li>
                    <li>avaliable</li>
                    <li>$20,000</li>
                    <li>&#9733; &#9733; &#9733; &#9733; &#9734;</li>
                </ul>
            </div>
            <div class="gallery">
                <a href="productpage.php">
                    <img src="img/featured_products/spacegun.jpg" width="500" height="310">
                </a>
                <ul class="desc">
                    <li>50 sq/ft marble counter tops</li>
                    <li>Solid wood finishing</li>
                    <li>avaliable</li>
                    <li>$20,000</li>
                    <li>&#9733; &#9733; &#9733; &#9733; &#9734;</li>
                </ul>
            </div>
            <div class="gallery">
                <a href="productpage.php">
                    <img src="img/featured_products/gundam.png" width="500" height="310">
                </a>
                <ul class="desc">
                    <li>50 sq/ft marble counter tops</li>
                    <li>Solid wood finishing</li>
                    <li>avaliable</li>
                    <li>$20,000</li>
                    <li>&#9733; &#9733; &#9733; &#9733; &#9734;</li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">

        <!-- Left -->
        <div class="footer_left">
            <img src="img/logo2.png">
            <p class="footer_links">
                <a href="landingpage">Home</a>
                <a href="landingpage">About</a>
                <a href="landingpage">Blog</a>
                <a href="landingpage">Log In</a>
            </p>
            <p class="footer-company-name">
                © 2122 BlackStarAlliance
            </p>
        </div>

        <!-- Center -->
        <div class="footer_center">
            <div class="address">
                <p><span>1005 Market St, San Francisco, California, United States, North America, Earth, Solar System,
                        Spiral Arm, Milky Way, Laniakea Supercluster</p>
            </div>
            <div class="number">
                <p>403-222-0911</p>
            </div>
            <div class="support">
                <a href="info@BlackStarAlliance">
                    <p>info@BlackStarAlliance</p>
                </a>
            </div>
        </div>

        <!-- Right -->
        <div class="footer_right">
            <div class="footerAbout">
                <h3>About BlackStar Alliance</h3>
                <p>As the premiere Faster Than Light Travel&trade; company in the universe, we take great pride in bringing you into space, and beyond.</p>
            </div>
            <div class="footersocial">
                <a href="www.facebook.com" class="facebook">Facebook</a>
                <a href="www.instagram.com" class="instagram">instagram</a>
                <a href="www.Youtube.com" class="Youtube">Youtube</a>
                <a href="www.linkedin.com" class="linkedin">linkedin</a>
                <a href="www.twitter.com" class="twitter">twitter</a>
            </div>
        </div>
    </footer>
</body>

</html>
