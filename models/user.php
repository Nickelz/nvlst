<?php
class User {
	private $_db;

	function __construct($db) {
		$this -> _db = $db;
	}

	// Logs the user in and declares the needed session values
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

	// User signup
	public function signUp($firstName, $lastName, $username, $email, $password) {
		$fields = array("First_Name", "Last_Name", "Username", "Email", "Password");
		$i=0;
		foreach($fields as $field) {
			$fields[$field] = $this -> _db -> real_escape_string(stripslashes(func_get_args()[$i]));	// Turns all user values to a URL-friendly values
			$i++;
		}

		$hashed_password = password_hash($fields['Password'], PASSWORD_BCRYPT);	// Hashes the password
		
		$query = "INSERT INTO `Users` (`First_Name`, `Last_Name`, `Username`, `Email`, `Password`)
		VALUES (
			\"{$fields['First_Name']}\",
			\"{$fields['Last_Name']}\",
			\"{$fields['Username']}\",
			\"{$fields['Email']}\",
			\"{$hashed_password}\"
		);";

		if ($this -> _db -> query($query) === TRUE) {
			$this -> login($fields['Email'], $fields['Password']);
			$this -> _db -> query("INSERT INTO `wishlist` (`UserID`) VALUES ('$_SESSION[UserID]');");
		}
	}

	public function search($keyword) {
		$sql = "SELECT * FROM `Users` WHERE `ID`=\"{$keyword}\" OR `First_Name` LIKE \"%{$keyword}%\" OR `Last_Name` LIKE \"%{$keyword}%\" OR `Username` LIKE \"%{$keyword}%\" OR `Email` LIKE \"%{$keyword}%\"";
		$result = $this -> _db -> query($sql);
		if ($result -> num_rows > 0)
			while ($user = $result -> fetch_assoc())
				$users[] = $user;
		return $users;
	}

	public function is_admin($id) {
		$sql = "SELECT * FROM `Admins` WHERE `UserID`=\"{$id}\";";
		$result = $this -> _db -> query($sql);
		return $result -> num_rows > 0;
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

	private function get_hash($email) {
		$result = $this -> _db -> query("SELECT * FROM `Users` WHERE `Email`=\"" . $email . "\";");
		return $result -> fetch_assoc();
	}
}