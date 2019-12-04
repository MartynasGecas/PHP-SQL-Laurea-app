<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
    <style>
table {

width: 60%;
color: white;
font-size: 25px;
text-align: left;
}
th {
background-color: #CEB31E;
color: white;
}
tr:nth-child(even) {background-color: yellowgreen}
</style>

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../meniu1.css">
	<style>
	.header {
		background: #CEB31E;
	}
	button[name=register_btn] {
		background: #CEB31E;
	}
	</style>
</head>
<body>
    <div class="profile_info">
	<div class="header">
        
		<h2>Admin page</h2>
        </div>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
        
       <fieldset>
		<!-- logged in user information -->
		<div class="profile_info">
			<img  height="50" width="50" src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: maroon;">Log out</a>
						&nbsp; <a href="create_user.php">Add a user +</a>
					</small>
				<?php endif ?>
			</div>
		</div>
        </fieldset>

        <h1>Orders</h1>
        
        
        <table>
            <tr>
            <th>Vehicle type</th>
            <th>Order time</th>
            <th>Bring back time</th>
            <th>Order vehicle amount</th>
            <th>Person ordering</th>
            </tr>
            <?php
            if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}
$sql = "SELECT tipas, valsk, valgr, kiek, nuom FROM uzsakymai";
$result = $db->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["tipas"]. "</td><td>" . $row["valsk"] . "</td><td>" . $row["valgr"]. "</td><td>"
. $row["kiek"]. "</td><td>".$row["nuom"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$db->close();

            
            
            ?>
        </table>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	</div>
		
</body>
</html>