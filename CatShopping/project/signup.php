<?php
	
	require_once('database.php');
	
	if(isset($_POST["submit"]))
	{
		$username = htmlspecialchars($_POST['username']);
		$first = htmlspecialchars($_POST['first']);
		$last = htmlspecialchars($_POST['last']);
		$pass = htmlspecialchars($_POST['pass']);
		$email = htmlspecialchars($_POST['email']);
		$phone = htmlspecialchars($_POST['phone']);
		$address = htmlspecialchars($_POST['address']);
		
		$query1 = "
		SELECT *
		FROM customers
		WHERE username = :username";
		$statement1 = $db->prepare($query1);
		$statement1->bindValue(':username', $username);
		$statement1->execute();
		$resultTable = $statement1->fetchAll();

		if($resultTable == null)
		{
			
			$new = password_hash($pass, PASSWORD_BCRYPT);
			
			$query2 = "
			INSERT INTO customers(username, first, last, password, email, phone, address)
			VALUES (:username, :first, :last, :pass, :email, :phone, :address)
			";
			$statement2 = $db->prepare($query2);
			$statement2->bindValue(':username', $username);
			$statement2->bindValue(':first', $first);
			$statement2->bindValue(':last', $last);
			$statement2->bindValue(':pass', $new);
			$statement2->bindValue(':email', $email);
			$statement2->bindValue(':phone', $phone);
			$statement2->bindValue(':address', $address);
			$statement2->execute();
			?>
			<!DOCTYPE html>
			<html lang="en">
			<html>
			<head>		
				<meta charset = "UTF-8">
				<link rel="stylesheet" href="..\styles\normalize.css">
				<link rel="stylesheet" href="..\styles\styles.css">
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
							<li style="float:right"><a class="active" href="register.php">Login/Register</a></li>
						</ul>
					</div>
					<h1 id="shipping">+ Free shipping, no minimum</h1>
				</header>
				<main>	
					<h2>Thank you for signing up!</h2> 
					<form method="post" action = "register.php">
						<button id="currentSchedule">Log in!</button>
					</form>
				</main>
				<footer>

				</footer>
			</body>
			</html>
			<?php
		}
		else
		{
			?>
			<!DOCTYPE html>
			<html lang="en">
			<html>
			<head>		
				<meta charset = "UTF-8">
				<link rel="stylesheet" href="..\styles\normalize.css">
				<link rel="stylesheet" href="..\styles\styles.css">
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
							<li style="float:right"><a class="active" href="register.php">Login/Register</a></li>
						</ul>
					</div>
					<h1 id="shipping">+ Free shipping, no minimum</h1>
				</header>
				<main>	
					<h2>This username is already in use!</h2> 
					<form method="post" action = "register.php">
						<button id="currentSchedule">Register</button>
					</form>
				</main>
				<footer>

				</footer>
			</body>
			</html>
			<?php
		}
	}
?>