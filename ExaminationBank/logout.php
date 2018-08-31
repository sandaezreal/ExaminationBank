<?php
    setcookie('OLUserID',"", time() -3600,'/');
    unset($_COOKIE['OLUserID']);
    setcookie('OLVerified',"", time() -3600,'/');
    unset($_COOKIE['OLVerified']);
	header("location:index.php");
?>