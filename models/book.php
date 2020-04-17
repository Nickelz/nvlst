<?php
class Book {
	private $_db;

	function __construct($db) {
		$this -> _db = $db;
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

	private function fetchedRow($row) {
		return new Book($this -> _db, $row['ID'], $row['ISBN'], $row['Number_of_Pages'], $row['Author_Name'], $row['Provider'], $row['Release_Date'], $row['Language'], $row['Genre'], $row['Price'], $row['Title']);
	}
}