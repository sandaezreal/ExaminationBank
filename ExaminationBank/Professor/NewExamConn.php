
<?php
require_once('Connection.php');
	$newExamID = $_POST["newExamID"]; 
	$Year = $_POST["Year"]; 
	$Semester= $_POST["Semester"];
	$Subject=$_POST["Subject"];
	echo $Semester;
		
if ($Year =="0" or $Semester =="0" or $Subject=="0")
{
	header("Location:NewExam.php?msg=failed");
}
	else{
		$sql ="INSERT into tblexambank (ExamID,Year,Semester,Subject,Status)
				values('$newExamID','$Year','$Semester','$Subject','Draft	')";
		if (mysqli_query($conn, $sql)) {
			$_POST["newExamID"]+=1;
		   header("Location:AddQuestions.php?examid=".$newExamID);
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				//header("Location:NewExam.php?msg=failed");
			exit();
			
		}
		mysqli_close($conn);
	}

	
?>

	