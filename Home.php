<!DOCTYPE html>
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

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a class="logo" href="/"><img src="images/logo.svg" alt="logo"></a>
                <nav>
                    <ul class="nav__links">
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="service.php">Service</a></li>
                    </ul>
                </nav>
            <a class="cta" href="#">My List</a>
            <p class="menu cta">Menu</p>
        </header>
        <h1>Welcome</h1>
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
    </body>
</html>

<?php
  
// Read the JSON file 
$json = file_get_contents('data.json');
  
// Decode the JSON file
$json_data = json_decode($json, true);
foreach($json_data as $key => $val) {
    echo "KEY IS: $key<br/>";
    foreach(((array)$json_data)[$key] as $val2) {
        echo "VALUE IS: $val2<br/>";
    }
}
// foreach($json_data as $key => $value){
//     echo $key . " => " . $value . "<br>";
// }
  
// Display data
  
?>