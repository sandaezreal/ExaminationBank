
	<?php
require_once('Connection.php');


	$ExamID = $_POST['ExamID'];
	$QuestionNumber= $_POST['QuestionNumber'];
	$Question=$_POST['Question'];	
	$WrongAnswer1=$_POST['WrongAnswer1'];
	$WrongAnswer2=$_POST['WrongAnswer2'];
	$WrongAnswer3=$_POST['WrongAnswer3'];
	$CorrectAnswer=$_POST['CorrectAnswer'];

//para lang mkuha yng QuestionNumber

$sql ="INSERT into tb_question  (ExamID, QuestionNumber, Question,WrongAnswer1,WrongAnswer2,WrongAnswer3,CorrectAnswer)
		values('$ExamID','$QuestionNumber','$Question','$WrongAnswer1','$WrongAnswer2','$WrongAnswer3','$CorrectAnswer')";

if (mysqli_query($conn, $sql)) {
   header('Location:AddQuestions.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>