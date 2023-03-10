<?php

require_once('Database.php');

class UserModel extends Database {

public function __construct() {
	parent::__construct();
	$this->table = 'users';
	$this->fields = "lastname,firstname,username,photo,password";
}

public function newUser($formvalues) {
	$statement = "(" . $this->fields . ") VALUES (?,?,?,?,?)";
	$this->create($statement,$formvalues);
}

public function updateUser($formvalues) {
	$statement = " SET lastname=?,firstname=?,username=?,photo=?,password=? WHERE id=?";
	$this->update($statement,$formvalues);
}

public function deleteUser($id) {
	//code to be sure the deletion should happen
	$this->delete($id);
}


}