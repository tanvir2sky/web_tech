<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php
	function addPersonToDb($person){
		$query = "INSERT INTO Person(Id, Name, Phone) VALUES($person[Id], '$person[Name]', '$person[Phone]')";
		return executeNonQuery($query);
	}	
	
	function editPersonToDb($person){
		$query = "UPDATE Person SET Name='$person[Name]', Phone='$person[Phone]' WHERE id=$person[Id]";
		return executeNonQuery($query);
	}
	
	function removePersonFromDb($id){
		$query = "DELETE FROM Person WHERE id=$id";
		return executeNonQuery($query);
	}
	
	function getAllPersonFromDb(){
		$query = "SELECT Id, Name, Phone FROM Person";  
		$result = executeQuery($query);	
		$personList = array();
		if($result){
			for($i=0; $row = mysqli_fetch_assoc($result); ++$i) {
				$personList[$i] = $row;				
			}
		}
		return $personList;
	}

	function getPersonByIdFromDb($id){
		$query = "SELECT Id, Name, Phone FROM Person WHERE Id=$id";  
		$result = executeQuery($query);	
		$person = null;
		if($result){
			$person = mysqli_fetch_assoc($result);
		}
		return $person;
	}
?>