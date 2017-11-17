<div id="nav_div">
	<ul>
		<li>
			<a href="index.php">
				Recipes
			</a>
		</li><li>
			<a href="calendar.php">
				Calendar
			</a>
		</li>
	</ul>
	<?php
		session_start();
		if (empty($_SESSION["username"])) {
			echo '
				<div id="login">
					<a href="login.php">Log in</a> | 
					<a href="register.php">Register</a>
				</div>
			';
		} else {
			echo '
				<div id="login">
					Logged in as: <b>' . $_SESSION["username"] . '</b> ,<a href="logout.php">Log out</a>
				</div>
			';
		}
	?>
</div>