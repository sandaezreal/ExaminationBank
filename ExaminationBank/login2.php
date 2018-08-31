<?php
	session_start();
	require_once("database.php");
	$username = $_POST['user'];
	$password = $_POST['password'];
	$query="SELECT * FROM tbl_user WHERE _Username='$username' AND _PASSWORD='$password'";

	if($_username<0){
	
?>
		<script type="text/javascript">
			alert("YOUR USERNAME OR PASSWORD MIGHT BE WRONG. PLEASE LOGIN AGAIN TO VERIFY!");
			window.location='/Admin/pages/index.html';
		</script>
	