<?php
require_once('./models/sign.php');

// A controller class. Handles the linkage between the specific
// URL passed by the user and DB fetch/put methods in the model class.

class User {

private $model;

public function __construct() {
	$this->model = new UserModel();
}

// This file combines specific URL 'routes' with model methods
// we dont have actual routing, but each URL with parameters
// acts as a unique 'pointer' to a resource
// e.g., localhost:8888/Kouwen_Abram_HW2/ is unique compared to
// localhost:8888/Kouwen_Abram_HW2/index.php?task=delete&id=1

public function loadViews() {
	//get content through the model
	//load views that match the content
	require_once('views/head.php');
	require_once('views/nav.php');
	require_once('views/search.php');


	
	// what content should be passed back based on URL parameters?


	
	if(isset($_GET['id']) && !isset($_GET['task'])) {
		//run query method A on the model
		//load view(s) to match the model data
		$users = $this->model->getOne($_GET['id']);
		require_once('views/detail.php');



	}else if(isset($_GET['str'])) {
		//run query method B on the model
		//load view(s) to match THAT model data
		$users = $this->model->search('lastname',$_GET['str']);
		$rows = $this->model->rows;
		require_once('views/list.php');


	}else if(isset($_GET['task'])) {
		if($_GET['task'] == 'create') {
				$values = ['Lastname','Firstname','Username','Password','user.png'];
			//POST values from a form
			$formvalues = ['Lastname','Firstname','Username','Password','user.png'];
			$users = $this->model->newUser($formvalues);
			header("location:index.php");
		}else if($_GET['task'] == 'delete') {
			$users = $this->model->deleteUser($_GET['id']);
			header("location:index.php");
		}else if($_GET['task'] == 'update') {
			
			$id = $_GET['id'];
			//POST values from a form, could also be hidden field for id value
			$formvalues = [$_POST['last'],$_POST['first'],$_POST['usrn'],$_POST['pwd'],'user.png',$_GET['id']];
			$users = $this->model->updateUser($formvalues);
			header("location:index.php?id=$id");
		}

		

	}else{ 
		$users = $this->model->getAll();
		$rows = $this->model->rows;
		require_once('views/list.php');
	}

	require_once('views/footer.php');

}

}