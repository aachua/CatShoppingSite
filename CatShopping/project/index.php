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
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="food.php">Food</a></li>
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
		<div class="w3-content w3-display-container" style="max-width:1300px">
		  <img class="mySlides" src="..\images\cats2.png" style="width:100%">
		  <img class="mySlides" src="..\images\cats3.png" style="width:100%">
		  <img class="mySlides" src="..\images\cats1.png" style="width:100%">
		  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
			<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
			<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
			<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
		  </div>
		 </div>
		<div id="services">
			<h2>Pet Services</h2>
			<p>Discover our full range of in-store grooming, training, pet sitting, and vaccination services.</p>
		</div>

		<div id = "brands">
			<h2> Featured Brands</h2>
		</div>
		
		<img src="..\images\brands.png" style="width:100%">
		
		<!-- image slideshow script from w3.com -->
		<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			 dots[i].className = dots[i].className.replace(" w3-white", "");
		  }
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-white";
		}
		</script>
	</main>
	<footer>

	</footer>
</body>
</html>