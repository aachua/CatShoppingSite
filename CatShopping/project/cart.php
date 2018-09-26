<?php
	
	require_once('database.php');
?>

<script>
  simpleCart
  (
	  {
		checkout: 
		{
		  type: "PayPal",
		  email: "aachua@umich.edu"
		}
	  }
  );
</script>

<!DOCTYPE html>
<html lang="en">
<html>
<head>		
	<meta charset = "UTF-8">
	<link rel="stylesheet" href="..\styles\normalize.css">
	<link rel="stylesheet" href="..\styles\styles.css">
	<link rel="stylesheet" href="..\styles\cart.css">
	<link rel="stylesheet" href="..\styles\w3.css"> <!--used for image slideshow -->
	<script src="..\scripts\jquery-3.2.1.min.js"></script>
	<script src="..\scripts\simpleCart.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<div><img style="margin-bottom: 1px" src="..\images\logo.png"></div>
</head>
<body>
	<header>
		<div class="navbar">
			<ul id="list-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="food.php">Food</a></li>
				<li><a href="toys.php">Toys</a></li>
				<li><a href="supplies.php">Supplies</a></li>
				<li style="float:right"><a class="active" href="cart.php">Cart</a></li>
				<div style="float:right; margin-top: 15px; color:black" class="simpleCart_total"></div>
				<?php
				if (isset($_SESSION['username']))
				{
					echo "<li style='float:right'><a href='logout.php'>Logout?</a></li>";
					echo "<li style='float:right'><a href='update.php'>Hello ".$_SESSION['username'] ."</a></li>";	
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
		<h2 class="label">Cart</h2>
		<div class="inCart">
			<div class="simpleCart_items"></div>
			
			<div class="message">
				You have <span class="simpleCart_quantity"></span> items in your Cart.
				</br>
				</br>
				</br>
				Cart total: <div class="simpleCart_total"></div>
			</div>
		</div>
		
		<div class = "navbuttons">
			<?php
				if (isset($_SESSION['username']))
				{
					echo "<input type='button' value='Checkout'<a href='javascript:;' class='simpleCart_checkout'></a>";
				}
				else
				{
					echo"
					<form method='post' action = 'register.php'>
						<button id='currentSchedule'>Register</button>
					</form>";
				}
			?>
			<input type="button" value="Empty Cart"<a href="javascript:;" class="simpleCart_empty"></a>
		</div>
	</main>
	<footer>

	</footer>
</body>
</html>