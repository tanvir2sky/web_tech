<?php
// Start the session
session_start();
?>
<?php
	if(!isset($_SESSION['is_logged_in'])){
			 header("Location: /web_tech/index.php/");
			 die();
			 
	}

?>
<?php
	include_once(APP_ROOT."/data/login_data_access.php");
	include_once(APP_ROOT."/lib/validator.php");
	include_once(APP_ROOT."/app/view/header.php");
	include_once(APP_ROOT."/app/view/footer.php");

?>


