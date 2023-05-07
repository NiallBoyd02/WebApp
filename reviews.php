<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Page</title>
    <link rel="stylesheet" href="reviews.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body id="about">

    <div id="itemBanner">
        <p id="bannerTitle">New items have just released!</p>
    </div>
    
    <header>
    
        <div class="slogo">
    
            <a href="index.php"><img class="storelogo" src="images/logo.png" width="150px" height="150px"/></a>
    
        </div>
    
        <nav>
        <ul class="Navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="reviews.php">Reviews</a></li>
        </ul>
    </nav>
    
        <a href="#fHead"><button class="Contactbutton">Contact Us</button></a>
    
        </header>

        <div id="reviewsBox">

            <h3 id="reviewHeader">Reviews</h3>

        <div id="reviews">

<?php

    $conn = new mysqli('localhost', 'root', '', 'webApp');

    $sql = "SELECT * FROM reviewtbl;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h3>{$row['customerName']}</h3>";
            echo "<p>{$row['customerEmail']}</p>";
            echo "<p>{$row['rating']}</p>";
            echo "<p id='bottomRowReview'>{$row['review']}</p>";
        }
    }

?>

</div>
</div>

        <footer class="Footernavigation">
            <div class="row">
                <h3 id="fHead">Contact Us</h3>
                        <ul>
                            <div id="fLinks">
                            <li><a>support@vt.com</a></li>
                            <li><a>07 374636253</a></li>
                            <li><a>028 71526736</a></li>
                            </div>
                        </ul>
                    </div>
    
        <div class="row">
        <h3 id="fHead">Admin</h3>
        <nav>
            <ul>
                <div id="fLinks">
                <li><a href="passwordscreen.php">Admin Login</a></li>
                </div>
            </ul>
    </nav>
        </div>
    
            <div class="row">
            <h3 id="fHead">Social Media</h3>
            <nav>
                <ul>
                    <div id="fLinks">
                    <li><a href="http://www.Instagram.com">Instagram</a></li>
                    <li><a href="http://www.whatsonthestar.com">Whats on the Star?</a></li>
                    <li><a href="http://www.facebook.com">Facebook</a></li>
                    <li><a href="http://www.youtube.com">Youtube</a></li>
                </div>
                </ul>
            </nav>
            </div>
        
        </footer>
        
    </body>
</html>
    