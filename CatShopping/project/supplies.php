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
				<li><a class="active" href="supplies.php">Supplies</a></li>
				<li style="float:right"><a href="cart.php">Cart</a></li>
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
		<div class="products">
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup1.png">
						<h2 class="item_name">Cat Tower</h2>
						<div class="item_price">
							$139.99
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>	
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup2.png">
						<h2 class="item_name" >Enclosed Bed</h2>
						<div class="item_price">
							$18.93
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
			
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup3.png">
						<h2 class="item_name" >Cat Scratcher</h2>
						<div class="item_price">
							$18.99
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup4.png">
						<h2 class="item_name">Cat Feeder Set</h2>
						<div class="item_price">
							$16.61
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
		
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup5.png">
						<h2 class="item_name">Pet Waterer</h2>
						<div class="item_price">
							$12.99
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup6.png">
						<h2 class="item_name">Pet Feader</h2>
						<div class="item_price">
							$12.99
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup7.png">
						<h2 class="item_name">Hooded Litter Box</h2>
						<div class="item_price">
							$18.99
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup8.png">
						<h2 class="item_name">Self Cleaning Litter Box</h2>
						<div class="item_price">
							$124.99
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
			<div class="simpleCart_shelfItem">
				<form method="post">
					<div class="product">
						<img src="..\images\sup9.png">
						<h2 class="item_name">deShedding Brush</h2>
						<div class="item_price">
							$13.87
						</div>
						<div class="btnAddAction">
							<input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
	<footer>

	</footer>
</body>
</html>