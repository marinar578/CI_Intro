<?php

class Get_db extends CI_Model{
	function getAll(){
		$query = $this -> db -> query("SELECT * FROM test");

		return $query -> result();
	}
}