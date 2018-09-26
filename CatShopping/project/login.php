<?php
	
	require_once('database.php');
	
	if(isset($_POST["submit"]))
	{
		$username = htmlspecialchars($_POST['username']);
		$pass = htmlspecialchars($_POST['pass']);
		
		$query= "
		SELECT *
		FROM customers
		WHERE username = :username";
		
		$statement = $db->prepare($query);
		$statement->bindValue(':username', $username);
		$statement->execute();
		$resultTable = $statement->fetchAll();
		
		if(password_verify($pass, $resultTable[0]['password']))
		{
			$_SESSION['username'] = $resultTable[0]['username'];
					
			header('Location:index.php');
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
					<h2>Username or password is incorrect!</h2> 
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