<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<header>
			<?php include 'fragments/header.php' ?>
		</header>
		<nav>
			<?php include 'fragments/nav.php' ?>
		</nav>
		<div class="main">
			<section class="main_section">
				<h1>Welcome!</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed ipsum eget sapien vestibulum lacinia.
					Vestibulum vulputate ut arcu eu tempor. Pellentesque turpis mauris, ornare eu suscipit in, gravida vitae diam.
					Nulla neque leo, viverra sed libero ac, malesuada sollicitudin dolor. Nulla ut tellus quis ante ornare iaculis.
					Quisque elit lectus, viverra et euismod nec, aliquet at diam. Nullam mattis egestas ipsum quis tristique.
					Ut vitae ante et tortor feugiat venenatis ac et arcu.
					<a href="calendar.php">Click here to get to the calendar page!</a>
				</p>
			</section>
			<section class="main_section">
				<div class="image_div">
					<a href="recipe.php?recipe=0"><img src="images/meatballs.png" alt="Picture of meatballs"/></a>
				</div>
				<h1>
					<a href="recipe.php?recipe=0">Meatballs</a>
				</h1> 
				<p>
					The Best Swedish Meatballs are smothered in the most amazing rich and creamy gravy. The meatballs are packed with such delicious flavor you will agree these are the BEST you have ever had!
					<a href="recipe.php?recipe=0">Click here to see the recipe!</a>
				</p>
			</section>
			<section class="main_section">
				<div class="image_div">
					<a href="recipe.php?recipe=1"><img src="images/pancakes.jpg" alt="Picture of pancakes"/></a>
				</div>
				<h1>
					<a href="recipe.php?recipe=1">Pancakes</a>
				</h1> 
				<p>
					Maple Sweet Potato Pancakes. These maple sweetened sweet potato pancakes are so thick and fluffy.  Not to mention perfectly spiced and flavorful.
					<a href="recipe.php?recipe=1">Click here to see the recipe!</a>
				</p>
			</section>
			<br/>
		</div>
	</body>
</html>