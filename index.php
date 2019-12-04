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
<h3><?php unset($_SESSION['success']); ?></h3>
</div>
<?php endif ?>
    
<!-- logged in user information -->
<div class="profile_info">
<img  height="50" width="50" src="images/user_profile.png"  ><h1>Welcome!</h1>
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
         
<h1>Add an order</h1>
    
<form method="post" action="kelimas.php">
<p>Vehicle type:</p>
<select name="tipas">
  <option value="Motoroleris">Scooter</option>
  <option value="Elektrinis chopperis">Electric "chopper"</option>
  <option value="Paspirtukas">Electric scooter</option>
  <option value="Valtis">Boat</option>
  <option value="Vandens dviratis">Water bike</option>
</select>
<br><br>
Take time: (hh:mm) <input type="text" name="tt"><br><br>
Return time: (hh:mm) <input type="text" name="rt"><br><br>

Amount:
<input type="number" name="kik"
min="0" max="100" step="1" value=""><br><br>
  
Person ordering:<input type="text" name="name"><br><br>
<button type="submit">Submit</button> <br>
</form>
</fieldset>
</div>
</body>
</html>