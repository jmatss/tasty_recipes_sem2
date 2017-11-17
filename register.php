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
			<h1>Register</h1><br/>
			<?php
				if (isset($_SESSION['username'])) {
					echo 'You are logged in as <b>'. $_SESSION['username'] . '</b>!'; 
				} else {
					
					echo '
						<form action="register.php" method="post">
							<label for="username" class="label">Username:</label><br/>
							<input type="text" name="username" id="username"><br/>
							<label for="password" class="label">Password:</label><br/>
							<input type="password" name="password" id="password"><br/><br/>
							<input type="submit" value="Register">
							<input type="reset" value="Reset">
						</form>
					';
					
					if (isset($_POST['username']) && isset($_POST['password'])) {
						include 'tasty_recipesDAO.php';
						$tasty_recipesDAO = new tasty_recipesDAO();
						if ($tasty_recipesDAO->registerUser($_POST['username'], $_POST['password'])) {
							if ($tasty_recipesDAO->loginUser($_POST['username'], $_POST['password'])) {
								header("refresh:0");
							}
						} else {
							echo '<p class="errortext">This username is already taken!</p>';
						}
					}
				}
			?>
				
			</section>
			<br/>
		</div>
	</body>
</html>