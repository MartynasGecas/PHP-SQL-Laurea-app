<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>BDN</title>
	<link rel="stylesheet" type="text/css" href="meniu1.css">
    <style>
body {
  background-image: url("images/b.jpg");
     background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
    <fieldset>
    <h1 align="center";>Birštonas Bike Rental</h1>
    </fieldset>  
    
    <div class="flex-wrap">
    <fieldset>
	 <!--login form-->
	<form method="post" action="login.php"  novalidate>

        <?php echo display_error(); ?>

    <input type="radio" name="rg" id="sign-in" checked/>
    <label for="sign-in">Log in</label>
    <a href="register.php">Register</a>

    


    <!--login form-->    
    <input class="sign-up sign-in" type="text" value="<?php echo $username; ?>" name="username" placeholder="Username" />    
    <input class="sign-up" type="email" value="<?php echo $email; ?>" name="email" placeholder="Email" />
    <input class="sign-in" type="password" name="password" placeholder ="Password" />
    <input class="sign-up" type="password" name="password_1" placeholder ="Password" />
    <input class="sign-up" type="password"  name="password_2" placeholder ="Repeat Password" />
   
		<!--login button that calls out a function-->
        <button name="login_btn"></button> <br>
        <p></p>
        <a href="landingpg.php">Go back</a>
        
	</form>
    </fieldset> 
</div>

   
</body>
</html>
