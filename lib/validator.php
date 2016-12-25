<?php

////////
/////////
/////////name validation function Starts  here
///////
///// 
function validate_name($name){

	if(empty($name)){
		
		return false;
		
	}
	 else if(count(explode(' ',$name)) <2){
		
		
			return false;
		
	}
	
	else if(!preg_match("/^[a-zA-Z \.\-]*$/",$name)){
		
		
		return false;
	}
	else if(!preg_match("/^[a-zA-Z]*$/",$name[0])){
		
		
		return false;
	}
	else{
		
		return true;
	}
	
	
}

////////
/////////
/////////name validation function ends here
///////
/////

////////
/////////
/////////Email validation function starts here
///////
/////

function validate_email($email){
	
	if(empty($email)){
		
		return false;
		
	}
	if(count(explode('@',$email)) != 2){
		
		return false;
		
	}
	else {
		
		$words = explode('@',$email);
			$second = $words[1];
			if(count(explode('.',$email)) != 2){
			
			return false;
		
		}
		
	}
		return true;
	
	
}

////////
/////////
/////////Email validation function ends here
///////
/////
////////
/////////
/////////Date validation function start here
///////
/////

function validateDob($dd,$mm,$yyyy){
	
	
	$isLeaf = false;

	if ((($yyyy % 4) == 0) && ((($yyyy % 100) != 0) || (($yyyy %400) == 0))){
		$isLeaf = true;
	}

	
	
	
	if($dd=='' or $mm=='' or $yyyy==''){
		
		//echo 'Fields cant be empty.<br />';
		return false;
	}
	
	if(!is_numeric($dd) or !is_numeric($dd) or !is_numeric($dd)){
		
		//echo 'date , month and year must be numeric';
		return false;
	}
	
	if($mm<0 or $mm>12){
		//echo 'Month must be in 1-12';
		return false;
	}
	if($yyyy<1900 or $yyyy>2016){
		//echo 'Month must be in 1990-2016';
		return false;
	}
	
	if($mm !=2){
		
		if($dd<1 or $dd>31){
		//echo 'Date must be in 1-31';
		return false;
	}
	}
	if($mm == 2 and $isLeaf == true){
		
		if($dd<1 or $dd>29){
		//echo 'Date must be in 1-29. Itis february month and Leaf year';
		return false;
	}
		
	}
	if($mm == 2 and $isLeaf == false){
		
		if($dd<1 or $dd>28){
		//echo 'Date must be in 1-28. Itis february month But Not Leaf year';
		return false;
	}
		
	}
	
		return true;
	}
	
	////////
/////////
/////////Date validation function ends here
///////
/////



?>