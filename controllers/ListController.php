<?php

/**
 *  This controller handles the list view and add actions
 *  */

class ListController {
	public function actionList(){
		
		// Fetch all the contacts
		$contacts = Contacts::find();		
		
		render('list',array(
			'title'			=> 'Showing all Contacts on database',
			'contacts'	=> $contacts		
		));		
	}
	
	public function actionAdd(){
		// init page variables
		$nameError = null;
		$emailError = null;
		$addSuccess = null;
		$name = null;
		$email = null;
		
		// Check if form has been submitted
		if ($_POST) {
			// Sanitize the name and email
			$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			
			// Now check if name is greater or equal to 2 chars (fair enough I think :) )
			if (strlen($name) < 2) {
				$nameError = "Name should be at least 2 characters long!";
			}
			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    			$emailError = "$email is NOT a valid email address.";
			}
			// now check if email already exists, if validation passed
			elseif (Contacts::find($email)) {
				$emailError = "This email ID is already taken. Please click 'List Items' to verify.";
			}
						
			// If no errors at all, then we are free to add to db...
			if (!$emailError and !$nameError) {
				$lastRecord = Contacts::insert(array(
						'name' => $name,
						'email' => $email
				));
				
				if ($lastRecord) {
					$addSuccess = "Successfully added new record with ID $lastRecord.";
					$name = $email = null;   // clear the fields
				}
			}
			
		}
		
							
		render('add',array(
				'title'			=> 'Adding a Contact to database',	
				'nameError' => $nameError,
				'emailError' => $emailError,
				'addSuccess' => $addSuccess,
				'name' => $name,
				'email' => $email
		));
	}
}


?>