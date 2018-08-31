<?php

include('Connection.php');

	
$query = "SELECT row FROM tb_question ORDER BY RAND()"; //SELECT ExamID, Year, Semester, Subject, Status,Comment FROM tb_question
$result = mysqli_query($conn, $query);

//echo "<table>";
$i=1;
while ($row = mysqli_fetch_array($result)) 
{	//Creates a loop to loop through results

	echo "<tr id='".$row['ExamID']."'>
	
	<td>".$i."</a></td>
	<td>".$row['Question']."</a></td>
	<td>".$row['WrongAnswer1']."</a></td>
	<td>".$row['WrongAnswer2']."</a></td>
	<td>".$row['WrongAnswer3']."</a></td>
	<td>".$row['CorrectAnswer']."</td> \n </a>";

echo "</tr> \n ";
	$i++;
}
//echo "</table>";

mysqli_close($conn);

?>
