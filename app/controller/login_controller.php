<?php
// Start the session
session_start();
?>

<?php
	include_once(APP_ROOT."/data/login_data_access.php");
	include_once(APP_ROOT."/lib/validator.php");
	include_once(APP_ROOT."/app/view/header.php");
	include_once(APP_ROOT."/app/view/login.php");
	include_once(APP_ROOT."/app/view/footer.php");

?>