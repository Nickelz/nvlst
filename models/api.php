<?php
class GOODREADS {

	// TEMP
	const API_KEY = "HClOteK7gG6dLJ2XpQPE5Q";

	const BASE_URL = "https://www.goodreads.com";

	public static function find_author_by_name($name) {
		$name = urlencode($name);
		$response = file_get_contents(self::BASE_URL . "/api/author_url/${name}?key=" . self::API_KEY);
		$response = new SimpleXMLElement($response);
		return ((int) $response -> author['id']);
	}

	public static function get_author_image($id) {
		$id = self::find_author_by_name($id);
		$id = urlencode($id);
		$response = file_get_contents(self::BASE_URL . "/author/show/${id}?key=" . self::API_KEY);
		$response = new SimpleXMLElement($response);
		return $response -> author -> small_image_url;
	}

}