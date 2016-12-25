
<?php 
	$error_email = "";
	$error_password = "";
   $login_error= "";
   $e_email="";
   
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$e_email = $_POST['e_email'];
		$password = $_POST['password'];
      if(!validate_email($e_email)){
         $error_email = "Not a valid email.";
      }
      if($password == ""){
             $error_password = "Password can't be empty";
      }
      if(validate_email($e_email) && !empty($password)){
     $login_info = array("e_email"=>$e_email,"password"=>$password);
     $data = check_if_user_exists($login_info);
     if(mysqli_num_rows($data) == 1){
         while ($row=mysqli_fetch_row($data))
          {
            $_SESSION['e_id'] = $row[0];
             $_SESSION['e_name'] = $row[1];
              $_SESSION['e_email'] = $row[2];
                $_SESSION['e_role'] = $row[4];
                 

          }
        ///setting session and other things//
         $_SESSION['is_logged_in'] = true;
         //redirecting to home page
         header("Location: /web_tech/?home_show");
         die();

     }
     else {
         $login_error= "Email and Password didn't match. Please try again.";
     }
  }

	}

?>


<div class="login_form">
   <center>
      <form method="post">
         <table class="beautyfultable" align="center" >
            <span class="error"><?= $login_error; ?></span>
            <tr align="center">
               <td >
                  <font size=6>Email </font>
               </td>
               <td>
                  <input type="text" value="<?= $e_email; ?>" name="e_email" size=45/> <br/><span class="error"><?php echo $error_email; ?></span>

               </td>
            </tr>
            <tr align="center">
               <td>
                  <font size=6>	Password </font>
               </td>
               <td>
                  <input type="password" name="password" size=45/><span class="error"><?php echo $error_password; ?></span>
               </td>
            </tr>
            <tr align="center">
               <td colspan="2" align="right">
                 <button type="submit" class="button">LOG IN</button>
               </td>
            </tr>
         </table>
      </form>
   </center>
</div>