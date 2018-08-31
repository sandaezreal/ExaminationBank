<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname)or die('Could not connect: ' . mysql_error()); 
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}	

/////////////////////////////////////
//Standard Echo
/////////////////////////////////////
// $query = "select * from tbl_user";
// $result = mysqli_query($conn, $query);
// if (mysqli_num_rows($result) > 0) {
	// $row = mysqli_fetch_assoc($result);
		// echo $row["_Suffix"]." ". $row["_LastName"];
	// }
// else {
	// echo "No Result Found";
// }

// mysqli_close($conn);
?>