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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login and Signup</title>
</head>
<body>

    <div class="flex-container">
        <form class="login-email" method="Post">
            <p class="signup-text" style=*font-size: 2rem; font-weight: 800;>Signup</p>
            <div class="input-group">
                <input name="FirstName" placeholder="First Name" required>
            </div>
            <div class="input-group">
                <input name="LastName" placeholder="Last Name" required>
            </div>
            <div class="input-group">
                <input name="Username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input name="Email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input name="password" type="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button class="btn" type="Submit" name="Signup">Signup</button>
            </div>
            <p class="login-text">you can <a href="Login.php">Login now</a>
        </form>
    </div>

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
<?php
    
    if(isset($_POST['Signup'])){

        //Gjøre om POST-data til variabler
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $password = $_POST['password'];
        
        
        //Koble til databasen
        $dbc = mysqli_connect('localhost', 'root', '', 'mydb')
            or die('Error connecting to MySQL server.');
        
        //Hash password
        $password = md5($password);
        
        //Gjøre klar SQL-strengen
        $query = "INSERT INTO users VALUES ('$FirstName','$LastName','$Username','$Email','$password')";
        
        //Utføre spørringen
        $result = mysqli_query($dbc, $query)
            or die('Error querying database.');
        
        //Koble fra databasen
        mysqli_close($dbc);

        //Sjekke om spørringen gir resultater
        if($result){
            //Gyldig login
            echo "Takk for at du lagde bruker! Trykk <a href='index.php'>her</a> for å logge inn";
        }else{
            //Ugyldig login
            echo "Noe gikk galt, prøv igjen!";
        }




    }
?>
</html>