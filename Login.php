<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login and sign up</title>
</head>
<body>
    
<div class="wrapper">
<div class="title-text">
    <div class="title login">
     Login Form   

    </div>
<div class="title Sign up form">    
</div>

</div>
<div class="Form-container">
    <div class="slide-controls">
        <input type="radio" name="
        slide" id="Login" checked>
        <input type="radio" name="
        slide" id="Sign up">
        <label for="Login" class="
        slide">Login</label>
        <label for="Sign up" class="
        slide Signup">Sign up</label>

        <div class="slide-tab"></div>



    </div>
</div>
<div class="Form.inner">
    <form action="#" class="Login">  
    </form>  
    <div class="field">
        <input type="text"
        placeholder="Email Address" 
        required>
    </div>
<div class="field">
    <input type="password"
    placeholder="password"
    required>
</div>
<div class="pass-link"> 
    <a href="#">Forgot password</a>
</div>
<div class="field btn">
    <div class="btn-layer"></div>
    <input type="submit" value="
    Login">
</div>
<div class="Signup-link">
    Not a member?<a href="">Signup
    Now</a>
</div>


</form>
<form action="#" class="Signp">
    <div class="field">
        <input type="text"
        placeholder="Email Address"
        required>
    </div>
<div class="field">
    <input type="password"
    placeholder="password"
    required>
</div>
<div class="field">
    <input type="password"
    placeholder="confirm password"
    required>
</div>
<div class="field btn">
    <div class="btn-layer"></div>
    <input type="submit" value="
    Signup">
</div>


</form>





</div>






</div>


</body>
</html>

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