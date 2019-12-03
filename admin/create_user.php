<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="../meniu2.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<style>
		.header {
			background: #003366;
		}
		
	</style>
</head>
<body>
	<fieldset>
		<h2>Pridėti vartotoją</h2>
    <fieldset>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Vartotojo vardas: </label><br>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>El. paštas: </label><br>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Vartotojo tipas: </label><br>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Administratorius        </option>
				<option value="user">Vartotojas</option>
			</select>
		</div>
		<div class="input-group">
			<label>Slaptažodis: </label><br>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Pakartokite slaptažodį: </label><br>
			<input type="password" name="password_2">
		</div><br><br>
		<div class="input-group">
			<button type="submit" name="register_btn"> Pridėti vartotoją</button><br><br>
            <a href="home.php">Gryžti atgal</a>
		</div>
	</form>
        </fieldset>
    </fieldset>
</body>
</html>