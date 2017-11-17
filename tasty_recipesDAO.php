<?php
	class tasty_recipesDAO {
		private $DB;
		
		function __construct() {
			$this->$DB = new \mysqli('localhost', 'root', 'losenord', 'tasty_recipes');
			if ($this->$DB->connect_errno) {
				exit;
			}
		}
		
		public function loginUser($username, $password) {
			$result = $this->$DB->query("SELECT * FROM user WHERE username = '$username'");
			if ($result->num_rows === 0) {
				return false;
			}
			
			$user = $result->fetch_assoc();
			if ($user['password'] == $password) {
				session_start();
				$_SESSION['username'] = $username;
				return true;
			} else {
				return false;
			}
		}
		
		public function getComments($recipe) {
			$result = $this->$DB->query("SELECT * FROM comment WHERE recipe = '$recipe'");
			if ($result->num_rows === 0) {
				return false;
			}
			return $result;
		}
		
		public function writeComment($username, $number, $comment) {
			$result = $this->$DB->query("INSERT INTO `comment` (`recipe`, `username`, `comment`, `timestamp`) VALUES ('$number', '$username', '$comment', CURRENT_TIMESTAMP)");
			if ($result === false) {
				return false;
			}
			return true;
		}
		
		public function deleteComment($timestamp) {
			$result = $this->$DB->query("DELETE FROM `comment` WHERE `timestamp` = '$timestamp'");
			if ($result === false) {
				return false;
			}
			return true;
		}
		
		public function registerUser($username, $password) {
			$result = $this->$DB->query("SELECT * FROM user WHERE username = '$username'");
			if (!($result->num_rows === 0)) {
				return false;
			} else {
				$result = $this->$DB->query("INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')");
				if ($result == false) {
					return false;
				} else {
					return true;
				}
			}
		}
	}
?>