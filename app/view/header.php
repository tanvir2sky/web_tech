
<?php 
   if(!isset($isDispatchedByFrontController)){
      include_once(APP_ROOT."/app/error.php");
      die;
   }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="app/view/css/style.css">
<script type="text/javascript" src="app/view/js/main.js"></script>
</head>


<body>

<div class="wrapper"">
<img id="header_image" src="app/view/images/header.jpg" />
<?php if(isset($_SESSION['is_logged_in'])) :?>
   <ul>
  <li><a href="#home">Home</a></li>

   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="openDrowpDown1()">Manage Employee</a>
    <div class="dropdown-content" id="myDropdown1">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="openDrowpDown2()">Manage Food</a>
    <div class="dropdown-content" id="myDropdown2">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="openDrowpDown3()">POS</a>
    <div class="dropdown-content" id="myDropdown3">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </li>
  
</ul>
<?php endif; ?>


