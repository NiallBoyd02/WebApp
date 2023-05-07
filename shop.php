<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Expanded:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

    <div id="itemBanner">
        <p id="bannerTitle">New items have just released!</p>
    </div>
    
    <header id="shopheader">
    
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

        <body id="shopBody">


        <div id="products">
    <div class="Product">
        <img src="images/am95.jpg"style="width:100%">
        <h1>Nike Air Max 95</h1>
        <p class="price">£135</p>
        <p>As its name suggests, the silhouette debuted in 1995.</p>
        <p><a href="purchase.php?productID=1" class="buyButton">BUY IT NOW!</a></p>
    </div> 
    
    <div class="Product">
        <img src="images/Ultras.jpg"style="width:100%">
        <h1>Adidas UBS</h1>
        <p class="price">£180</p>
        <p>The adidas Ultraboost was first launched in 2015.</p>
        <p><a href="purchase.php?productID=2" class="buyButton">BUY IT NOW!</a></p>
    </div> 

    <div class="Product">
        <img src="images/vanss.jpg"style="width:100%">
        <h1>Vans Classics</h1>
        <p class="price">£60</p>
        <p>Vans first introduced the Slip-On trainer in 1977.</p>
        <p><a href="purchase.php?productID=3" class="buyButton">BUY IT NOW!</a></p>
    </div> 

    <div class="Product">
        <img src="images/chucks.jpg"style="width:100%">
        <h1>Converse S</h1>
        <p class="price">£45</p>
        <p>Converse started making basketball shoes in 1917.</p>
        <p><a href="purchase.php?productID=4" class="buyButton">BUY IT NOW!</a></p>
    </div> 
</div>


<form method="POST" action="submit-review.php" id="formReview">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" required>
  <br>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email" required>
  <br>
  <label for="rating">How Happy are you with our</label>
  <br>
  <label>product?:</label>

<select name="rating">
  <option disabled selected value=" ">Select One</option>
  <option value="Happy">Happy</option>
  <option value="Average">Average</option>
  <option value="Unhappy">Unhappy</option>
</select>

  <br>
  <label for="review">Review:</label>
  <textarea name="review" id="review" required></textarea>
  <br>
  <input type="submit" value="Submit" id="submitButtonForm">
</form>


    
    </footer>




       
    </body>
</html>
    