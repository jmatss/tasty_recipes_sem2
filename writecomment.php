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
			<h1>New comment</h1>
				<form action="#">
					<label for="username" class="label">Username:</label><br/>
					<input type="text" name="username" id="username"><br/>
					<label for="password" class="label">Password:</label><br/>
					<input type="password" name="password" id="password"><br/><br/>
					<input type="submit" value="Register">
					<input type="reset" value="Reset">
				</form>
			</section>
			<br/>
		</div>
	</body>
</html>