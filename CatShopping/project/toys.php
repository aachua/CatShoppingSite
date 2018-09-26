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
				<li><a class="active" href="toys.php">Toys</a></li>
				<li><a href="supplies.php">Supplies</a></li>
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
						<img src="..\images\toy1.png">
						<h2 class="item_name" >Tower of Tracks</h2>
						<div class="item_price">
							$13.27
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
						<img src="..\images\toy2.png">
						<h2 class="item_name" >KONG Plush Turtle Toy</h2>
						<div class="item_price">
							$3.06
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
						<img src="..\images\toy3.png">
						<h2 class="item_name" >Safari Mice Value Pack</h2>
						<div class="item_price">
							$8.99
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
						<img src="..\images\toy4.png">
						<h2 class="item_name" >Petlinks Mouse and Catnip Toy</h2>
						<div class="item_price">
							$6.61
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
						<img src="..\images\toy5.png">
						<h2 class="item_name" >Natural Wicker Ball Toy</h2>
						<div class="item_price">
							$2.99
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
						<img src="..\images\toy6.png">
						<h2 class="item_name" >Pheasant Tail Toy</h2>
						<div class="item_price">
							$8.99
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
						<img src="..\images\toy7.png">
						<h2 class="item_name" >Mouse Value Pack Cat Toy</h2>
						<div class="item_price">
							$8.99
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
						<img src="..\images\toy8.png">
						<h2 class="item_name" >Feather Tailed Plush Teaser</h2>
						<div class="item_price">
							$4.99
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
						<img src="..\images\toy9.png">
						<h2 class="item_name">Kitten Mice Cat Toy</h2>
						<div class="item_price">
							$3.87
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