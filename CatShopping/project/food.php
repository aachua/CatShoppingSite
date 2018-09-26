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
				<li><a class="active" href="food.php">Food</a></li>
				<li><a href="toys.php">Toys</a></li>
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
						<img src="..\images\food1.png">
						<h2 class="item_name">Friskies Shreds</h2>
						<div class="item_price">
							$0.48
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
						<img src="..\images\food2.png">
						<h2 class="item_name" >Fancy Feast Chicken in Gravy</h2>
						<div class="item_price">
							$0.59
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
						<img src="..\images\food3.png">
						<h2 class="item_name" >Purina Pro Plan</h2>
						<div class="item_price">
							$.89
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
						<img src="..\images\food4.png">
						<h2 class="item_name" >Authority Chicken in Gravy</h2>
						<div class="item_price">
							$0.89
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
						<img src="..\images\food5.png">
						<h2 class="item_name" >Great Choice Turkey Dinner</h2>
						<div class="item_price">
							$0.43
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
						<img src="..\images\food6.png">
						<h2 class="item_name" >Nutro Max Cat</h2>
						<div class="item_price">
							$0.94
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
						<img src="..\images\food7.png">
						<h2 class="item_name" >Purely Fancy Feast</h2>
						<div class="item_price">
							$1.33
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
						<img src="..\images\food8.png">
						<h2 class="item_name" >Sheba Perfect Portions</h2>
						<div class="item_price">
							$0.79
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
						<img src="..\images\food9.png">
						<h2 class="item_name" >Fancy Feast Medleys</h2>
						<div class="item_price">
							$5.00
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