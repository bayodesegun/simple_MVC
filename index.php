<?php

/**
 * 	This is the index file for the simple app
 * 	It routes requets to the appropriate controllers
*/

require_once "utils/config.php";
require_once "utils/connect.php";
require_once "utils/helpers.php";
require_once "models/Contacts.php";
require_once "controllers/ListController.php";

try {

	if($_SERVER['REQUEST_URI'] == '/list'){
		$controller = new ListController();
		$controller->actionList();
	}
	else if($_SERVER['REQUEST_URI'] == '/add'){
		$controller = new ListController();
		$controller->actionAdd();
	}
	
	else if($_SERVER['REQUEST_URI'] == '/'){
		render('home', array('title' => $defaultTitle));
	}
	
	else throw new Exception('Wrong page!');
	
}
catch(Exception $e) {
	// Display the error page
	render('error',array('message'=>$e->getMessage()));
}

?>