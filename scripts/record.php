<?php
	// The code below creates the class
	class Record {
		// Creating some properties (variables tied to an object)
		public $record_name;
		public $artist_name;
		public $genre;
		public $record_year;
		
		// Assigning the values
		public function __construct($record_name, $artist_name, $genre, $record_year) {
		  $this->record_name = $record_name;
		  $this->artist_name = $artist_name;
		  $this->genre = $genre;
		  $this->record_year = $record_year;
		}
		
		public function isEqual($record_name, $artist_name, $genre, $record_year) {
			return $this->record_name == $record_name
				&& $this->artist_name == $artist_name
				&& $this->genre == $genre
				&& $this->record_year == $record_year;
		}
	}
?>