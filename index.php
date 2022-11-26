<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\utils.css">
    <link rel="stylesheet" href="CSS\style.css">
    <link rel="stylesheet" href="CSS\mobile.css">
    <link rel="stylesheet" href="CSS\contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">




    <title>vendors</title>
    <!-- <style>
        body {
            background-color: rgb(131, 242, 232);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            color:#cccccc;
          }
        </style> -->
</head>
<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <div class="logo">
                <img src="img/veggies wala logo.png">
        </div>
        
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </div>
           <div class="nav-right">
            <form action="/search.html" method="get">
                <input class="form-input" type="text" name="query " placeholder="Search for vendors">
                <button class="btn"><a href="submit1.php">Search</a></button>
            </form>

        </div>
    </nav> 
    
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="contents max-width-1 m-auto my-2">
        <div class="content-left">
        <h1>Quality Products by street Vegetable Vendor</h1>
        <p>This Website helps to sell the Best qaulity veggies to the nearby cutomers by the street vegetable vendors.<br> Most of the vendors are farmers who bring vegetables for selling.</p>
        <p>The customers living nearby can get quality veggies which they can't get from shopping mart or malls.<br>The customer can get the advantage of bargain and Vendors can get customers as many of them dont have their shops.</p>
    </div>
    <div class="content-right m-auto">
        <img src="https://thumbs.dreamstime.com/b/illustration-alphabet-letter-v-vendor-vegetable-vector-76239711.jpg" alt="">
    </div>
    </div>
    <div class="main">
    <div class="main-1">
        <h1>Customer Login/SignUp : </h1>
        <p>The customers can register to add their details
            <br> and then search for the nearby street vendors.</p>
            <a href="Customer.php" class="signup">SignUp</a>

    </div>
    <div class="main-2">
        <h1>Vendors Login/SignUp : </h1>
        <p>The vendors can register here to list the products
            <br>that they can sell to customers.</p>
            <a href="vendor.php" class="signup">SignUp</a>

    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">veggies</a></li>
                    <li><a href="#">fruites</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>