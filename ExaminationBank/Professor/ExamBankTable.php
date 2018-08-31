
	<?php
include('Connection.php');

$query = "SELECT * FROM tblexambank"; //SELECT ExamID, Year, Semester, Subject, Status,Comment FROM tb_question
$result = mysqli_query($conn, $query);



while ($row = mysqli_fetch_array($result)) 
{	//Creates a loop to loop through results
//bakit may extra n <TD> s gitna ng table mo? ====================================================
	echo "<tr id='".$row['ExamID']."'>
	<td><a href=exambankDescription.php?examid=".$row['ExamID']."&profid=".$row['ProfID'].">".$row['ExamID']."</a></td>
	<td><a href=exambankDescription.php?examid=".$row['ExamID']."&profid=".$row['ProfID'].">".$row['Year']."</a></td>
	<td><a href=exambankDescription.php?examid=".$row['ExamID']."&profid=".$row['ProfID'].">".$row['Subject']."</a></td>
	<td><a href=exambankDescription.php?examid=".$row['ExamID']."&profid=".$row['ProfID'].">".$row['Status']."</a></td>
	<td><a href='#'/>".$row['Comment']."</td> \n </a>";

echo "</tr> \n";
	
}


mysqli_close($conn);

?>