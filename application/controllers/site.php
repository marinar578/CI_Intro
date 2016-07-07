<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	// index is the first function that's run when the controller is called
	public function index(){
		// echo "hi internet <br />";
		// $this -> hello();
		$this -> home();
	}

	// public function hello(){
	// 	echo "something else";
	// }

	public function home(){
		$data['title'] = "Welcome!";
		$data['var1'] = "2";
		$data['var2'] = "8";

		$this -> load -> model("math");
		$data['addTotal'] = $this -> math -> add($data['var1'], $data['var2']);
		$data['subTotal'] = $this -> math -> sub($data['var1'], $data['var2']);

		// passing data array into view. this
		// makes the items in $data available in the view
		$this -> load -> view("view_home", $data); 
	}

	// // loads model and specified functions from model
	// public function addStuff(){
	// 	$this -> load -> model("math");
	// 	echo $this -> math -> add(2, 3);
	// }

	function about(){
		$data['title'] = "About!";
		$this -> load -> view("view_about", $data);
	}

	function getValues(){
		$this -> load -> model("get_db");
		$data["results"] = $this -> get_db -> getAll();
		$this -> load -> view("view_db", $data);

		// to see this view, visit /getValues
	}

	function insertValues(){
		$this -> load -> model("get_db");

		// // inserting one item:
		// $newRow = array(
		// 	"name" => "bob"
		// );
		// $this -> get_db -> insert1($newRow);

		// inserting more than one item:
		$newRow = array(
			array(
				"name" =>"sue"
			),
			array(
				"name" => "dylan"
			)
		);

		$this -> get_db -> insert2($newRow);

		echo "it has been added";

		// to run this addition, visit /insertValues
	}

	function updateValues(){
		$this -> load -> model("get_db");

		// // updating one row:
		// $newRow = array(
		// 	"name" => "angie"
		// );
		// $this -> get_db -> update1($newRow);

		// batch updating:
		$newRow = array(
			array(
				"id" => "3",
				"name" => "marcus"
			),
			array(
				"id" => "4",
				"name" => "bill"
			)
		);

		echo "it has been updated";

		// to run this update, visit /updateValues
	}



}








