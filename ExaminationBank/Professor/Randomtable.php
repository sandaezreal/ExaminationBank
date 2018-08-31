<?php

include('Connection.php');

	
$query = "SELECT *  FROM tb_question ORDER BY RAND()"; //SELECT ExamID, Year, Semester, Subject, Status,Comment FROM tb_question
$result = mysqli_query($conn, $query);

//echo "<table>";
$i=1;
	echo "<tr >	
	<td  style=' white-space: nowrap; '>Name:_______________________________________________________________________________ </td>
	<td  style='overflow:hidden; white-space: nowrap;'>Date: ___________________________________________________________</td>
	
	</tr>
	<tr>
	<td  style=' white-space: nowrap; ' >Year/Section:_______________________________________________________________________________ </td>
	<td  style='overflow:hidden; white-space: nowrap;'>Score:___________________________________________________________</td>
	
	</tr>";

while ($row = mysqli_fetch_array($result)) 
{	//Creates a loop to loop through results
	 $a=array($row["WrongAnswer1"],$row["WrongAnswer2"],$row["WrongAnswer3"],$row["CorrectAnswer"]);
	shuffle($a);	


	
echo "
<tr>
<td>&nbsp;</td>
</tr>
<tr>	 

	<td class='tdquestion'> ".$row["Question"]." </td> 
		</tr>
		<tr>
			<td class= 'tdanswer' >
			A. ".$a[0]."
			</td >
			<td class= 'tdanswer'>
			B. ".$a[1]."
			</td>
		</tr>
		<tr >
			<td class= 'tdanswer' >C. ".$a[2]."</td>	
			<td class= 'tdanswer'>D. ".$a[3]."</td>
		</tr>
		</tr>";
		


	$i++;
}

mysqli_close($conn);

?>	
