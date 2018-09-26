<?php
	
	require_once('database.php');

?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>		
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="..\styles\normalize.css">
	<link rel="stylesheet" href="..\styles\styles.css">
	<link rel="stylesheet" href="..\styles\register.css">
	<link rel="stylesheet" href="..\styles\w3.css"> <!--used for image slideshow -->
	<script src="..\scripts\jquery-3.2.1.min.js"></script>
	<script src="..\scripts\simpleCart.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<img src="..\images\logo.png">
</head>
<body>
	<header>
		<div class="navbar">
			<ul id="list-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="food.php">Food</a></li>
				<li><a href="toys.php">Toys</a></li>
				<li><a href="supplies.php">Supplies</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li>
				<div style="float:right; margin-top: 15px; color:black" class="simpleCart_total"></div>
				<?php
				if (isset($_SESSION['username']))
				{
					echo "<li style='float:right'><a href='logout.php'>Logout?</a></li>";
					echo "<li style='float:right'><a class='active' href='update.php'>Hello ".$_SESSION['username'] ."</a></li>";	
				}
				else
				{
					echo "<li style='float:right'><a href='register.php'>Login/Register</a></li>";
				}
				?>
			</ul>
		</div>
		<h1 id="shipping">+ Free shipping, no minimum</h1>
	</header>
	<main>	
	  <div class="forms">
		<section class="register">
			<h1>Account</h1>
			<p>Update info below</p>
			<form method="post" action="accUpdate.php">
				Username: <input type="text" name="username" style="margin-left:5%" required></br>
				First Name: <input type = "text" name="first" style="margin-left:3.9%" required></br>
				Last Name: <input type = "text" name="last" style="margin-left:4.1%" required></br>
				Password: <input type = "password" name="pass" style="margin-left:6%" required></br>
				Email: <input type = "email" name="email" style="margin-left:12%" required></br>
				Phone: <input type = "text" name="phone" style="margin-left:11%" pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Phone number must contain 10 digits in the format xxx-xxx-xxxx" "></br>
				Address: <input type = "text" name="address" style="margin-left:8.2%" required></br>
				<input type="submit" value="Update" name="submit">
			</form>
		</section>
	  </div>
	</main>
	<footer>

	</footer>
</body>
</html>