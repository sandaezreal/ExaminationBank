<?php

include('Connection.php');

	//$ExamID = $_POST['ExamID']; //$_GET["ExamID"];  dapat $_GET to ehh wla k nmn ID para s EXAM!?

	$ClassID="1";
	$ExamID ="1";
	$ProfID="1";
	$Status="1";
	$today = date("Y-m-d H:i:s");
$date = "2010-01-21 00:00:00";

	$query = "select tbl_onlineexam.ClassID,
	tblexambank.ExamID ,
	tblexambank.ProfID,
	tblexambank.Subject,
	tblexambank.Descrption,
	ScheduleStart,ScheduleEnd,ExamDuration from tbl_onlineexam

	INNER JOIN tblexambank 
	ON tbl_onlineexam.ProfID =
	tblexambank.ProfID
	WHERE
	ClassID= ".$ClassID." and
	tblexambank.ExamID = ".$ExamID." and
	tblexambank.ProfID= ".$ProfID." and
	Stat= ".$Status." and 
	ScheduleEnd > DATE(now())";
	echo $query; 

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {



	$tbl= "
	<div class='container'>
	<h2>Basic Table</h2>

	<table class='table'>
		<thead>
		<tr>
			<th>Subject</th>
			<th>Description</th>
			<th>ScheduleStart</th>
			<th>ScheduleEnd</th>
		</tr>
		</thead>
    <tbody>";

	
	while ($row = mysqli_fetch_array($result)) 
	{
	$Subject=$row['Subject'];
	$Description=$row['Descrption'];
	$ScheduleStart =$row['ScheduleStart'];
	$ScheduleEnd= $row['ScheduleEnd'];
	$tbl .="
      <tr><!--Subject-->
        <td>".$Subject."</td>
        <td>".$Description."</td>
        <td>".$ScheduleStart."</td>
        <td>".$ScheduleEnd."</td>
      </tr>"; 
	}
	$tbl .="
		</tbody>
	  </table>
	</div>
	";
	echo $tbl;
}
else {
	echo "No Result Found";
}

mysqli_close($conn);

?>