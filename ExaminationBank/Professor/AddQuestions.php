
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Add Question</title>

    <!-- Bootstrap Core CSS -->
    <link href="../Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../Bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../Bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<?php
	include_once ("navheader.html");
	include_once ("navsideindex.html");
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><strong>
					     <?php  
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "test";
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							$NewExamID = mysqli_num_rows(mysqli_query($conn,"select * from tblexambank "));
							echo "Exam ID ".$NewExamID;
							mysqli_close($conn);
							?>
					</strong></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->	
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<form action="AddQuestion.php" method=post>
						   <?php  
						   $servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "test";
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							$NewExamID = mysqli_num_rows(mysqli_query($conn,"select * from tblexambank "));
							$NewQuestionNo = mysqli_num_rows(mysqli_query($conn,"select * from tb_question where ExamID='$NewExamID'"))+1;
							echo "<input name='ExamID' id='ExamID' value='$NewExamID' hidden='true'>";							
							echo "<input name='QuestionNumber' id='QuestionNumber' value ='$NewQuestionNo' hidden='true'>";
							echo "Question No. ".$NewQuestionNo;
							mysqli_close($conn);
							?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                   
                                        <div class="form-group">
                                            <label>Question</label>
											<input class="form-control" name="Question" id="Question" placeholder="Question">
                                        </div>
										    <div class="form-group">
                                            <label>Wrong Answer 1 </label>
                                            <input class="form-control" name='WrongAnswer1' id='WrongAnswer1' placeholder="Wrong Answer 1 " required>
                                        </div>
										
										 <div class="form-group">
                                            <label>Wrong Answer 2 </label>
                                            <input class="form-control" name='WrongAnswer2' id='WrongAnswer2' placeholder="Wrong Answer 2 "required>
                                        </div>
										 <div class="form-group">
                                            <label>Wrong Answer 3 </label>
                                            <input class="form-control" name='WrongAnswer3' id='WrongAnswer3'  placeholder="Wrong Answer 3 " required>
                                        </div>
										
										 <div class="form-group">
                                            <label>Correct Answer</label>
                                            <input class="form-control"name='CorrectAnswer' id='CorrectAnswer' placeholder="Correct Answer" required>	
									
                                        </div>
                                    
                                        <button type="submit" name='submit' id="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" name='reset' id='reset' class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                             
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../Bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../Bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../Bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
