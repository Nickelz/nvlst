<?php
class User {
	private $_db;

	function __construct($db) {
		$this -> _db = $db;
	}

	public function login($email, $password) {
		$row = $this -> get_hash($email);

		if (password_verify($password, $row['Password']) == 1) {
			$_SESSION['loggedIn'] = true;
			$_SESSION['UserID'] = $row['ID'];
			$_SESSION['FullName'] = $row['First_Name'] . " " . $row['Last_Name'];
			$_SESSION['Email'] = $row['Email'];
			echo "Logged in successfully";
			return true;
		}
		return false;
	}

	private function get_hash($email) {
		$result = $this -> _db -> query("SELECT * FROM `Users` WHERE `Email`=\"" . $email . "\";");
		return $result -> fetch_assoc();
	}

	public function logout() {
		$_SESSION = array();
		session_destroy();
	}

	public function is_logged_in() {
		return (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true);
	}

	public function get_all() {
		$result = $this -> _db -> query("SELECT * FROM `Users`;");
		if ($result -> num_rows > 0) {
			while($user = $result -> fetch_assoc()) {
				$users[] = $user;
			}
			return $users;
		}
	}

	public function delete($id) {
		return $this -> _db -> query("DELETE FROM `Users` WHERE `ID`=\"{$id}\";");
	}
}