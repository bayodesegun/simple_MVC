<?php

class Contacts {
	
	public $id;
	public $name;
	public $email;
	
	/**
	 * The find static method selects contacts from the database
	 * @param string $email email of contact to be selected
	 * @return array an array of Contact objects.
	*/
	
	public static function find($email=null){
		global $db;
		if ($email) {
			$record = $db->prepare("SELECT * FROM contacts where email=:email");
			$record->execute(['email' => $email]);
			
			return $record->fetch(PDO::FETCH_ASSOC);
		}
		
		else {
			// Returns an array of Contact objects:
			return $db->query("SELECT * FROM contacts")->fetchAll();
		}
		
	}
	
	/**
	 * The insert static method inserts contacts data to the database
	 * @param object $data containing data to be inserted
	 * @return integer the last insert id
	 */
	public static function insert($data){
		global $db;
	
		if($data){
			$record = $db->prepare("INSERT INTO contacts (name, email) VALUES (:name, :email)")
				->execute([
					'name' => $data['name'],
					'email' => $data['email']
			]);
			
			// Return id of record inserted
			return $db->lastInsertId();
		}
		else {
			throw new Exception("Please specify data to insert!");
		}
		
		
	}
}

?>