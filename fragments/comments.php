<h1>Comments</h1>
<ul class="comments">
	<?php 
		session_start();
		include 'tasty_recipesDAO.php';
		$tasty_recipesDAO = new tasty_recipesDAO();
		if (isset($_POST['timestamp'])) {
			if(!($tasty_recipesDAO->deleteComment($_POST['timestamp']))) {
				echo '<p class="errortext">Something went wrong, try again!</p>';
			}
		}
		if (isset($_POST['username']) && isset($_POST['recipe_number']) && isset($_POST['comment'])) {
			if (!($tasty_recipesDAO->writeComment($_POST['username'], $_POST['recipe_number'], $_POST['comment']))) {
				echo '<p class="errortext">Something went wrong, try again!</p>';
			}
		}
		if ($comments = $tasty_recipesDAO->getComments($number)) {
			while($comment = $comments->fetch_assoc()) {
				echo '
					<li>
						<p class="comment_name">' . $comment['username'] . '</p>
				';
						
				if ($comment['username'] == $_SESSION['username']) {
					echo '
						<form action="recipe.php?recipe=' . $number . '" method="post" id="deleteform">
							<input type="hidden" name="timestamp" value="' . $comment['timestamp'] . '">
							<input type="submit" value="Delete">
						</form>
					';
				}
						
				echo '
						<p>' . $comment['comment'] . ' </p>
					</li>
				';
			}
		} else {
			echo '<p>No comments found!</p>';
		}
	?>
</ul>
<div id="line"></div>
<?php
	if(!empty($_SESSION['username'])) {
		echo '
			<form action="recipe.php?recipe=' . $number . '" method="post">
				<br/><label for="name">Username:</label> <b>' . $_SESSION['username'] . '</b><br/>
				<input type="hidden" name="username" value="' . $_SESSION['username'] . '">
				<input type="hidden" name="recipe_number" value="' . $number . '">
				<label for="comment">Write your comment here:</label><br/>
				<textarea id="comment" name="comment"></textarea><br/>
				<input type="submit" value="Post comment">
				<input type="reset" value="Reset">
			</form>
		';
	} else {
		echo '<br/><p class="errortext">You must log in to write comments!</p>';
	}
?>