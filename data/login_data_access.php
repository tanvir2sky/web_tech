<?php require_once(APP_ROOT."/lib/data_access_helper.php") ?>
<?php

	function check_if_user_exists($login_info){
			$query = "SELECT * FROM employee WHERE e_email='$login_info[e_email]' AND e_password='$login_info[password]'";

			return executeNonQuery($query);

	}



?>