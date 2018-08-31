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
$Username=$_POST['Username'];

if (!isset($_COOKIE['OLExamPassword']))
{ 
	$Password=SandaHash($_POST['Password']);
}
else
{
	if ($_POST['Password']!=$_COOKIE['OLExamPassword'])
	{
	$Password=SandaHash($_POST['Password']);
	}
	else{ 
	$Password=$_POST['Password'];
	}
}
 //print( "\n".SandaHash("123"));
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


echo $Password;
$sql="SELECT * FROM $tbl_name WHERE _Username='$Username' and _Password='$Password' and _AccessLevel= '$Access'";	
$result = mysqli_query($conn, $sql);
//---------------------------------end oofff
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $ProfUsername and $ProfPassword, tasble row must be 1 row
if($count==1){

// Register $ProfUsername, $ProfPassword and redirect to file "login_success.php"
$session_register['Username']= "$Username";
$session_register['Password']= "$Password";

	//Cookies for VerifiedLogin
	$cookie_name = "OLVerified";
	$cookie_value = "True";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 12), "/");
	//Cookies for UserID
	$row = mysqli_fetch_assoc($result);
	$UserID =$row['_UsernameID'];// UsernameID (from DataBase)
	$cookie_name = "OLUserID";
	$cookie_value = $UserID;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 12), "/"); 
	//Cookies for Username
	$cookie_name = "OLExamUserName";
	$cookie_value = $Username;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 12), "/"); 
	//Set Cookies for Remember If ProfRememberPwd is Checked!
	//If Not Delete Cookies
	$cookie_name = "OLExamPassword";
	$cookie_value = $Password;
	if (isset($_POST['RememberPwd']))
	{
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 12), "/"); 
		setcookie("OLExamRemPwd", "Checked", time() + (86400 * 30 * 12), "/"); 
	}
	else
	{ 
		setcookie($cookie_name, $cookie_value, time()-36000,"/");	
		unset($_COOKIE[$cookie_name]);
		setcookie("OLExamRemPwd", "", time() + (86400 * 30 * 12), "/");
		unset($_COOKIE[$OLExamRemPwd]);
	}
	$cookie_name = "OLExamAccess";
	$cookie_value = md5($Access);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 12), "/"); 
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
