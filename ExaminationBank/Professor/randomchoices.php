	
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Professor Table </title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
td a {display: block;
text-decoration:none;
color:black;}
td a:hover{
color:black;
text-decoration:none;
}
	</style>
</head>

<body>	

<?php
	include_once ("navheader.html");
	include_once ("navsideindex.html");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
					<?php
							include('connection.php');
							/////////////////////////////////////
							//Standard Echo
							/////////////////////////////////////
							$ExamID = $_GET['examid'];
							$query = "select * from tblexambank where ExamID='$ExamID'" ;
							$result = mysqli_query($conn, $query);
							if (mysqli_num_rows($result) > 0) {
								$row = mysqli_fetch_assoc($result);
									echo $row["Subject"] ;
								}
							else {
								echo "No Result Found";
							}

							mysqli_close($conn);
							?>
					
					></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-defaul">
                        <div class="panel-heading">
                            <h2>Examination With AnswerKey</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>QuestionNumber</th> 
                                        <th>Question </th>
										<th>WrongAnswer1</th>
										<th>WrongAnswer2</th>
										<th>WrongAnswer3</th>
										<th>CorrectAnswer</th><!--Correct Answer -->	
										
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  <!-- /.table-responsive -->
								
								<?php 
								require ("connection.php");
								$ExamID = $_GET['examid'];
								$query = "SELECT * FROM tb_question "; //SELECT ExamID, Year, Semester, Subject, Status,Comment FROM tb_question
								$result = mysqli_query($conn, $query);
								 if (mysqli_num_rows($result) > 0) {								
										while ($row = mysqli_fetch_array($result)) 
									{	//Creates a loop to loop through results

									echo 	
										"<tr id='".$row['ExamID']."'>	
										<td>".$row['QuestionNumber']."</td>
										<td>".$row['Question']."</td>
										<td>".$row['WrongAnswer1']."</td>
										<td>".$row['WrongAnswer2']."</td>
										<td>".$row['WrongAnswer3']."</td>
										<td>".$row['CorrectAnswer']."</td> \n </a>"; 
										echo "</tr> \n";
									}
											mysqli_close($conn);
									}
								//else {	
								//echo "No Result Found";	}
								?>
								
                                </tbody>
                            </table>
								<a href="
								<?php echo "publish.php?examid=".$_GET['examid'];?>
								">
								<button type="button" class="btn btn-primary">Randomize</button>
								</a>	
								<button type="button" class="btn btn-primary" onclick="myFunction()" >Print</button>
								

								  <a class="btn btn btn-primary" href="answerkey.php" target="_blank">Answer Key</a>
								
								<button type="button" class="btn btn-primary">Update</button>

				
				<!--Printer print -->
					<script>
					function myFunction() {
						window.print();
					}
					</script>
												
                     
                     
					
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
                <!-- /.col-lg-12 -->
            </div>
         	
								
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
