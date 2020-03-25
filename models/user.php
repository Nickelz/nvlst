<?php
class User {
	private $_db;

	function __construct($db) {
		$this -> _db = $db;
	}

	public function login($username, $password) {
		$row = $this -> get_hash($username);

		if (password_verify($password, $row['Password']) == 1) {
			$_SESSION['loggedIn'] = true;
			$_SESSION['Username'] = $row['Username'];
			$_SESSION['UserID'] = $row['ID'];
			echo "Logged in success";
			return true;
		}
	}

	private function get_hash($username) {
		$result = $this -> _db -> query("SELECT `ID`, `Username`, `Password` FROM `Users` WHERE `Username`=\"" . $username . "\";");

		echo $result -> num_rows;
		return $result -> fetch_assoc();
	}

	public function logout() {
		session_destroy();
	}

	public function is_logged_in() {
		return (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true);
	}

	public function test() {
		return "This is just a test from the User class!<br>";
	}
}