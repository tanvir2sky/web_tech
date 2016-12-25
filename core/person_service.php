<?php require_once(APP_ROOT."/data/person_data_access.php") ?>
<?php
	function addPerson($person){
		return addPersonToDb($person);
	}
	
	function editPerson($person){	
		return editPersonToDb($person);
	}
	
	function removePerson($id){
		return removePersonFromDb($id);
	}
	
	function getAllPerson(){
		return getAllPersonFromDb();
	}

	function getPersonById($id){	
		return getPersonByIdFromDb($id);
	}
?>