<?php

class Get_db extends CI_Model{
	// getting data from db
	function getAll(){
		$query = $this -> db -> query("SELECT * FROM test");
		return $query -> result();
	}

	// posting data to db (using active record) ($data is an array in this case)
	function insert1($data){
		$this -> db -> insert("test", $data);
	}

	// another way to post data to db ($data is an array with multiple objects - if you want to add more than one row):
	function insert2($data){
		$this -> db -> insert_batch("test", $data);
	}

	// updating data ($data is an assoc. array with one key-value pair)
	function update1($data){
		// update take three params: db name, argument val, and "where" statement
		$this -> db -> update("test", $data, "id = 2");
	}

	// updating batch
	function update2($data){
		// update_batch takes three params: db name, argument vals, and specifier - also the where value
		$this -> db -> update_batch("test", $data, "id");
	}

	// deleting a value
	function delete1($data){
		$this -> db -> delete("test", $data);
	}

	// deleting a table
	function empty1($table){
		// empty takes one param: the table that needs to be emptied
		$this -> db -> empty($table);
	}
}