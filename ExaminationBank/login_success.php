<?php
session_start();


if(!isset($_SESSION['myusername'])){
header("Location:index.php");
}
?>

<html>
<body>
Login Successfulddddddddd
</body>
</html>