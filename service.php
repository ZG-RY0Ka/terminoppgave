<!DOCTYPE html>
<html lang="en">
<head>
        <style>
            .flex-container {
                color: white;
                width: 250px;
                height: auto;
                margin: 0 auto;
                padding: 20px 30px;
                background-color: #24252a;
                border-radius: 10px;
                box-shadow: 0 0 10px 0 #24252a;
            }   

            .flex-container{
                display: flex;
                justify-content: center;
            }

            body{
                background-color: white;
            }
        </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<header>
    <a class="logo" href="/"><img src="images/logo.svg" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="Login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    <a class="cta" href="#">My List</a>
    <p class="menu cta">Menu</p>
</header>
<h1>hva skjer?</h1>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Search</a>
                <a href="service.php">Service</a>
                <a href="#">My List</a>
                <a href="#">Sign Out</a>
            </div>
        </div>
            <script type="text/javascript" src="mobile.js"></script>


<div class="flex-container">

            <form action="https://formsubmit.co/lomsna90@gmail.com" method="POST" >

                <p class="login-text" style=*font-size: 2rem; font-weight: 800;>Contact Us</p>
                <input type="hidden" name="_subject" value="You recieved a new email from Din nettside register">
                <input type="text" class="box" name="name" placeholder="your name" required>
                <input type="text" class="box" name="username" placeholder="Username" required>
                <input type="email" class="box" name="email" placeholder="your email" required>
                <input type="text" class="box" name="subject" placeholder="subject" required>
                <input class="box message" cols="30" rows="10" type="text" name="message" placeholder="Your message here" required>
                <input type="submit" value="send" class="btn">
            </form>
</div>



</body>


</html>