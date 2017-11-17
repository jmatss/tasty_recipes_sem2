<!DOCTYPE html>
<?php
	session_start();
	session_unset();
	session_destroy();
?>
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
				<h1>Log out</h1>
				<p>You have been logged out!</p>
			</section>
			<br/>
		</div>
	</body>
</html>