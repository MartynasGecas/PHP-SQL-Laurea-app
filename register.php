<!--Database connection file-->
<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<!--custom font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="meniu.css">
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
	<!--Form for registration info-->
	<form method="post" action="register.php"  novalidate>

        <?php echo display_error(); ?>

    <!--radio toggles for registration or signing in-->
    <input type="radio" name="rg" id="sign-up"  checked/>
    <a href="login.php">Log in</a>
    <label for="sign-up">Register</label>


    <!--registration form-->
    <input class="sign-up sign-in" type="text" value="<?php echo $username; ?>" name="username" placeholder="Username" />    
    <input class="sign-up" type="email" value="<?php echo $email; ?>" name="email" placeholder="Email" />
    <input class="sign-in" type="password" name="password" placeholder ="Password" />
    <input class="sign-up" type="password" name="password_1" placeholder ="Password" />
    <input class="sign-up" type="password"  name="password_2" placeholder ="Repeat Password" />
   
        <!--submit button that triggers a register function-->
        <button name="register_btn"></button> <br>
         <p></p>
		 <!--go back button-->
        <a href="landingpg.php">Go back</a>
        
	</form>
    </fieldset>
</div>

</body>
</html>
