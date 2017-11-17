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
				<?php 
					if(isset($_GET['recipe'])) {
						$number = (int) $_GET['recipe'];
					} else {
						echo 'Something went wrong, try again!';
						exit;
					}

					$recipes = simplexml_load_file('xml/recipes.xml');
					if ($recipes === false) {
						echo 'Failed to load recipes!';
						exit;
					}
					if (empty($recipes->recipe[$number])) {
						echo 'Couldn\'t find the specified recipe, try again!';
						exit;
					}
				?>
				<div class="recipe_header"> 
					<h1><?php echo $recipes->recipe[$number]->title ?></h1>
					<div class="recipe_header_info">
						<ul id="bold">
							<li>
								Prep time
							</li>
							<li>
								Cook time
							</li>
							<li>
								Servings
							</li>
						</ul>
						<ul>
							<li>
								<?php echo $recipes->recipe[$number]->preptime ?>
							</li>
							<li>
								<?php echo $recipes->recipe[$number]->cooktime ?>
							</li>
							<li>
								<?php echo $recipes->recipe[$number]->servings ?>
							</li>
						</ul>
					</div>
				</div>
				<div class="image_div_recipe">
				<?php echo '<img src="' . $recipes->recipe[$number]->imagepath . '" alt="Picture of '. $recipes->recipe[$number]->title . '"/>' ?>
				</div>
				<?php
					foreach($recipes->recipe[$number]->description->li as $description) {
						echo '<p>' . $description . '</p>';
					}
				?>
			</section>
			<section class="main_section">
				<h1>Ingredients</h1>
				<ul class="ingredients">
					<?php
						foreach($recipes->recipe[$number]->ingredient->li as $ingredient) {
							echo '<li>' . $ingredient . '</li>';
						}
					?>
				</ul>
			</section>
			<section class="main_section">
				<h1>Instructions</h1>
				<ol class="instructions">
					<?php
						foreach($recipes->recipe[$number]->recipetext->li as $recipetext) {
							echo '<li>' . $recipetext . '</li>';
						}
					?>
				</ol>
			</section>
			<section class="main_section">
				<?php include 'fragments/comments.php' ?>
			</section>
			<br/>
		</div>
	</body>
</html>