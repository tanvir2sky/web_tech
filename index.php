<?php
	//var_dump($GLOBALS);
	define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/web_tech");

	$hasError=true;
	if(count($_GET) == 0){
		$hasError = false;
		$isDispatchedByFrontController=true;
		include_once(APP_ROOT."/app/controller/login_controller.php");

	}

	if(count($_GET)>0){
		//echo "hi";
		$key = array_keys($_GET)[0]; 
		//echo $key.'<br />';
		$path = explode("_", $key);
		//print_r($path);
		//echo count($path);
		if(count($path)==2){
			$hasError = false;
			
			$controller = $path[0]; 
			$view = $path[1]; 
			$isDispatchedByFrontController=true;
			
			include_once(APP_ROOT."/app/controller/".$controller."_controller.php");				
		}
	}
	if($hasError){
		include_once(APP_ROOT."/app/error.php");
	}
?>