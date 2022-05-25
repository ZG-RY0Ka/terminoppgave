<!DOCTYPE html>
<html lang="en">
<head> 
<style>
            .flex-container {

            }

            .container {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;

                color: white;
                width: 250px;
                height: auto;
                margin: 0 auto;
                padding: 20px 30px;
                background-color: #24252a;
                border-radius: 10px;
                box-shadow: 0 0 10px 0 #24252a;
                margin-top: 20%;
            }   

            .flex-container{
                display: flex;
                justify-content: center;
                max-height: auto;
                max-width: auto;
            }
        </style>
          <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login and Signup</title>
</head>
<body>
<div class="flex-container">
    
    <div class="container">
        <form class="login-email" method="Post">
            <p class="login-text" style=*font-size: 2rem; font-weight: 800;>Login</p>
            <div class="input-group">
                <input name="Email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input name="password" type="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn" name="Login" type="Submit">Login</button>
            </div>
            <p class="login-register-text">Don't have an account?  <a href="register.php">Register Here</a>
        </form>
        
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
    </div>
</div>

</body>

<?php
        if(isset($_POST['Login'])){
            //Gjøre om POST-data til variabler
            $Email = $_POST['Email'];
            $password = $_POST['password'];
            
            //Koble til databasen
            $dbc = mysqli_connect('localhost', 'root', '', 'mydb')
              or die('Error connecting to MySQL server.');
            
            //Gjøre klar SQL-strengen
            $query = "SELECT username, password from users where Email='$Email' and password='md5($password)'";
            
            //Utføre spørringen
            $result = mysqli_query($dbc, $query)
              or die('Error querying database.');
            
            //Koble fra databasen
            mysqli_close($dbc);

            //Sjekke om spørringen gir resultater
            if($result->num_rows > 0){
                //Gyldig login
                header('location: Home.php');
            }else{
                //Ugyldig login
               echo "noe gikk galt,";
            }
        }
    ?> 

</html>