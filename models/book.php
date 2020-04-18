<?php
class Book {
	private $_db;

	function __construct($db) {
		$this -> _db = $db;
	}

	public function search($keyword) {
		$sql = "SELECT * FROM `Books` WHERE `ID`=\"{$keyword}\" OR `Title` LIKE \"%{$keyword}%\" OR `Author_Name` LIKE \"%{$keyword}%\" OR `Genre` LIKE \"%{$keyword}%\" OR `Language` LIKE \"%{$keyword}%\" OR `Release_Date` LIKE \"%{$keyword}%\" OR `Price` LIKE \"%{$keyword}%\" OR `Provider` LIKE \"%{$keyword}%\" OR `ISBN` LIKE \"%{$keyword}%\" OR `Pages` LIKE \"%{$keyword}%\" ";
		$result = $this -> _db -> query($sql);
		if ($result -> num_rows > 0)
			while ($user = $result -> fetch_assoc())
				$books[] = $user;
		return $books;
	}

	public function find($column, $value) {
		$result = $this -> _db -> query("SELECT * FROM `Books` WHERE `{$column}`='{$value}';");
		$row = $result -> fetch_assoc();
		return $this -> fetchedRow($row);
	}

	public function get_all() {
		$result = $this -> _db -> query("SELECT * FROM `Books`;");
		if ($result -> num_rows > 0) {
			while($book = $result -> fetch_assoc()) {
				$books[] = $book;
			}
			return $books;
		}
	}

	public function get_authors() {
		$authors = array();
		$result = $this -> _db -> query("SELECT DISTINCT `Author_Name` FROM `Books`;");
		if ($result -> num_rows > 0) {
			while($author = $result -> fetch_assoc()) array_push($authors, $author["Author_Name"]);
			return $authors;
		}
	}

	public function add($title, $author, $provider, $genre, $language, $released, $isbn, $no_of_pages, $price) {
		$sql = "INSERT INTO `Books`
		(`Title`, `Author_Name`, `Provider`, `Genre`, `Language`, `Release_Date`, `ISBN`, `Number_of_Pages`, `Price`)
		VALUES
		(\"{$title}\", \"{$author}\", \"{$provider}\", \"{$genre}\", \"{$language}\", \"{$released}\", \"{$isbn}\", \"{$no_of_pages}\", \"{$price}\");";
		if($this -> _db -> query($sql) === TRUE) {
			echo "New record created successfully!";
		} else {
			echo $sql . "<hr>" . $this -> _db -> error;
		}
	}

	public function delete($isbn) {
		return $this -> _db -> query("DELETE FROM `Books` WHERE `ISBN`=\"{$isbn}\";");
	}

	private function fetchedRow($row) {
		return new Book($this -> _db, $row['ID'], $row['ISBN'], $row['Number_of_Pages'], $row['Author_Name'], $row['Provider'], $row['Release_Date'], $row['Language'], $row['Genre'], $row['Price'], $row['Title']);
	}
}