<?php

$start = 1;
$servername = "localhost";
$username = "root";
$dbname = "test";
$dbname = "test";
$conn = mysqli_connect($servername, $username, '', $dbname);
$ExamID = 0; //$_GET["name"];  
$query = "SELECT ExamID, Question, WrongAnswer1, WrongAnswer2, WrongAnswer3, CorrectAnswer FROM tb_question Where ExamID='$ExamID'";


//test if connection occured
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()	
        . ")");
}
$result = mysqli_query($conn, $query);




while ($row = mysqli_fetch_array($result)) 
{	//Creates a loop to loop through results

	echo "<tr id='".$row['ExamID']."'>
	<td>".$row['Question']."</td>
	<td>".$row['WrongAnswer1']."</td>
	<td>".$row['WrongAnswer2']."</td><td></td>
	<td>".$row['WrongAnswer3']."</td>
	<td>".$row['CorrectAnswer']."</td> \n";

echo "</tr> \n";
	
}


mysqli_close($conn);

?>
