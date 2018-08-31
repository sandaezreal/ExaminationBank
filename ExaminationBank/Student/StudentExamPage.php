
	<!DOCTYPE html>
<html lang="en">

											
<head>
	

	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Section</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Bootstrap Core CSS -->
    <link href="../Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../Bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../Bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
include("navheader.html");
include("navsideindex.html");
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><strong>Information Technology Online Examination And Bank Generator with Android Application</strong></h1>
                </div>
				
				
				
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <!-- /.table-responsive ---->
								
								<?php 
					
					require ("connection.php");
								$ExamID = 1;
								$query = "SELECT * FROM tb_question ORDER BY RAND()"; //SELECT ExamID, Year, Semester, Subject, Status,Comment FROM 
								$QuestionNo ="1";
								$result = mysqli_query($conn, $query);
								 if (mysqli_num_rows($result) > 0) {								
										while ($row = mysqli_fetch_array($result)) 
									{	//Creates a loop to loop through results
										$Options = array($row['CorrectAnswer'],$row['WrongAnswer1'],$row['WrongAnswer2'],$row['WrongAnswer3']);
										shuffle($Options);
									echo "<tr id=QuestionNo".$QuestionNo.">
										<td colspan='4'>
										<span class='badge'>".$QuestionNo."</span><label class=''>".$row['Question']."
										</label>
										</td>
										</tr>
										<tr>							
										
									<td >
									<label class='btn btn-primary active'>
									<input type='radio' id='OptOne".$QuestionNo."' name=".$QuestionNo.">  "
									.$Options[1]."</label>

									<br>
									<label class='btn btn-primary active'>
									<input type='radio' id='OptTwo".$QuestionNo."' name=".$QuestionNo.">  "
									.$Options[1]."</label>
									<br>
									<label class='btn btn-primary active'>
									<input type='radio' id='OptThree".$QuestionNo."' name=".$QuestionNo.">  "
									.$Options[2]."</label>
									<br>
									<label class='btn btn-primary active'>
									<input type='radio' id='OptFour".$QuestionNo."' name=".$QuestionNo.">  "
									.$Options[3]."</label>
									</div>
									</td> \n 
									
										</tr> \n";
										$QuestionNo ++;
									}
											mysqli_close($conn);
									}
								//else {										
								//echo "No Result Found";	}
								?>
								
                                </tbody>
                            </table>
							<button >Submit!!!!!!!!!!!</button>
							<br><br><br>
                        
                 
                </div>
                <!-- /.col-lg-4 -->
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
    <script src="./Bootstrap./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../Bootstrap/vendor/raphael/raphael.min.js"></script>
    <script src="../Bootstrap/vendor/morrisjs/morris.min.js"></script>
    <script src="../Bootstrap/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../Bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
