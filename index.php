<?php 
include('functions.php');
    

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="meniu2.css">
    </head>
<body>
    
   
    <div class="profile_info">
	<div class="header">
        
        
	</div>
        </div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img  height="50" width="50" src="images/user_profile.png"  ><h1>Sveiki, Prisijungę!</h1>

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: maroon;">Atsijungti</a>
					</small>

				<?php endif ?>
			</div>
		</div>
        

<fieldset>
         
<h1>Pateikite užsakymą</h1>
    
<form method="post" action="kelimas.php">
<p>Priemonės tipas:</p>
<select name="tipas">
  <option value="Motoroleris">Motoroleris</option>
  <option value="Elektrinis chopperis">Elektrinis chopperis</option>
  <option value="Paspirtukas">Paspirtukas</option>
  <option value="Valtis">Valtis</option>
  <option value="Vandens dviratis">Vandens dviratis</option>
</select>
<br><br>

Paėmimo laikas: (hh:mm) <input type="text" name="tt"><br><br>
Gražinimo laikas: (hh:mm) <input type="text" name="rt"><br><br>

Kiekis:
<input type="number" name="kik"
min="0" max="100" step="1" value=""><br><br>
  
Nuomininkas:<input type="text" name="name"><br><br>
<button type="submit">Pateikti</button> <br>
</form>
</fieldset>
       
        
        
	</div>
   
    
    
    
    
</body>
</html>