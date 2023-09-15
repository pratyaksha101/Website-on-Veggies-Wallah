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
    <link rel="stylesheet" href="CSS\form.css">
    <title>Vendor lognin/SignUp</title>
</head>
<body>
    <nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
        <div class="logo">
                <img src="veggies wala logo.png">
        </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </div>
    </nav>

    <div class="max-width-1 m-auto">
        <hr>
    </div>
    <div class="regis">
        <div class="Cusregis">
            <h2>Vendor Register Here</h2>
            <form id="register" method="post" action:"connect.php">

                <label>First name : </label>
                <br>
                <input type="text" name="fname" id="name" placeholder="Enter your first name here">
                <br><br>


                <label>Last name : </label>
                <br>
                <input type="text" name="lname" id="name" placeholder="Enter your last name here">

                <!-- <div class="formbox"> -->
                    <label>Your Age : </label>
                    <br>
                    <input type="number" name="age" id="name" placeholder="How old are you ?">
                    <br><br>


                <label>Email Address</label>
                <br>
                <input type="email" name="email" id="name" placeholder="Enter your valid email">
                <br><br>

                <label>Gender : </label>
                <br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" id="male">
                &nbsp;
                <span id="male">Male</span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" id="female">
                &nbsp;
                <span id="female">Female</span>
                <br><br>


                <label>Phone number : </label>
                <br>
                <input type="number" name="phonenumber" id="name" placeholder="Enter your valid mobile number">
                <br><br>

                <label>Address : </label>
                <br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Enter your address..."></textarea>
                <br><br>


                <button class="btn2" id="submit"><a href="/">Submit</a></button>
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
                        <li><a href="#">fruits</a></li>
                        <li><a href="#">vegetable</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
