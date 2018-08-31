<?php
/*
$password = "asdasd";
	$options = [
	    'salt' => "Sandapakasdfghjklzxcvb", //write your own code to generate a suitable salt
	    'cost' => 12 // the default cost is 10
	];
	$hash = password_hash($password, PASSWORD_DEFAULT, $options);
	echo $hash;
//	echo "asdasd";
*/

/*

Password Verify!!!
if (password_verify("$password", $hash)) {
    // Success!
    return true;
}
else {
	//Failed!
    return false
}

*/
//	$AccessLevel0 = cfcd208495d565ef66e7dff9f98764da;
//	$AccessLevel1 = c4ca4238a0b923820dcc509a6f75849b;
//	$Accesslevel2 = c81e728d9d4c2f636f067f89cc14862c;

function SandaHash($HashPwd)
{

	$options = [
	    'salt' => "Sandapakasdfghjklzxcvb", //write your own code to generate a suitable salt
	    'cost' => 12 // the default cost is 10
	];
	$hash = password_hash($HashPwd, PASSWORD_DEFAULT, $options);
	return $hash;
}
// username and password sent from form 
$ProfUsername=$_POST['Username']; 
$ProfPassword=SandaHash($_POST['Password']); 
$Access= $_POST['Access'];
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test";// $db_name="db_bankexamination"; // Database name //
$tbl_name="tbl_user";// $tbl_name="tbl_user"; // Table name //


//---------------startttttttttttttt
$conn = mysqli_connect($host, $username, '', $db_name);


//test if connection occured
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()	
        . ")");
}


//$con = new mysqli($host, $username, $password);



$sql="SELECT * FROM $tbl_name WHERE _Username='$ProfUsername' and _Password='$ProfPassword' and _AccessLevel= '$Access'";	
$result = mysqli_query($conn, $sql);
//---------------------------------end oofff
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $ProfUsername and $ProfPassword, tasble row must be 1 row
if($count==1){

// Register $ProfUsername, $ProfPassword and redirect to file "login_success.php"
$session_register['ProfUsername']= "$ProfUsername";
$session_register['ProfPassword']= "$ProfPassword";

	//Cookies for UserID
	$row = mysqli_fetch_assoc($result);
	$UserID =$row['_UsernameID'];// UsernameID (from DataBase)
	$cookie_name = "OLUserID";
	$cookie_value = $UserID;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // expire when browser close
	//Cookies for Username
	$cookie_name = "OLExamUserName";
	$cookie_value = $ProfUsername;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	//Set Cookies for Remember If ProfRememberPwd is Checked!
	//If Not Delete Cookies
	$cookie_name = "OLExamPassword";
	$cookie_value = $ProfPassword;
	if (isset($_POST['ProfRememberPwd']))
	{
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
	else
	{ 
		setcookie($cookie_name, $cookie_value, time()-36000);	
	}
	$cookie_name = "OLExamAccess";
	$cookie_value = md5($Access);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

		switch ($Access) {
		    case 0: //Dean OR Admin
		header('Location:Dean');
		        break;
		    case 1: //Prof
		header('Location:Professor');
		        break;
		    case 2: //Student OR Quest
		header('Location:Student');
		        break;
		    default:
		        //Just to Make sure
		        header("location:index.php?msg=failed");
			}

exit();
}
else { 
	header("location:index.php?msg=failed");
exit(); 
}


?>
