
	<?php
include('Connection.php');

$query = "SELECT * FROM tblexambank WHERE Year='4th'";
 //SELECT ExamID, Year, Semester, Subject, Status,Comment FROM tb_question
$result = mysqli_query($conn, $query);



while ($row = mysqli_fetch_array($result)) 
{	//Creates a loop to loop through results
//bakit may extra n <TD> s gitna ng table mo? ====================================================
	echo "<tr id='".$row['ExamID']."'>
	<td><a href=exambanklink.php?examid=".$row['ExamID'].">".$row['ExamID']."</a></td>
	<td><a href=exambanklink.php?examid=".$row['ExamID'].">".$row['Year']."</a></td>
	<td><a href=exambanklink.php?examid=".$row['ExamID'].">".$row['Semester']."</a></td>
	<td><a href=exambanklink.php?examid=".$row['ExamID'].">".$row['Subject']."</a></td>
	<td><a href=exambanklink.php?examid=".$row['ExamID'].">".$row['Status']."</a></td>
	<td><a href='#'/>".$row['Comment']."</td> \n </a>";

echo "</tr> \n";
	
}


mysqli_close($conn);

?>