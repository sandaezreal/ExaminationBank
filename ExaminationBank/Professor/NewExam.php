
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
	include_once ("navsideindex.html");
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Exam Bank</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-defaulwt">
                        <div class="panel-heading">
                            <?php
							if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
							echo "*Please Choose The Required Field/s";
							}
							?>
                        </div>
                        <!-- /.panel-heading -->
                        <div  class="panel-body">

	
<form name="form1" method="post" action="NewExamConn.php">
  <table action='AddQuestion.php' method=post>
    <thead>
      <tr>
        <th>ExamID</th>
        <th>Year</th>
        <th>Semester</th>
        <th>Subject</th>
      </tr>
    </thead>
    <tbody>
      <tr>
		
		<td >
	   <?php  ////////////////////////Count ng "EXAMBANK" para malaman if anong Number n-->
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		
	//	$newExamID =(mysqli_num_rows(mysqli_query($conn,"select * from tblexambank where ProfID=".$ProfID))+1);
		
		$newExamID =(mysqli_num_rows(mysqli_query($conn,"select * from tblexambank"))+1);
		echo "<input type='hidden' name='newExamID' value='".$newExamID."' />";
		//echo "<input readonly='readonly'  name='newExamID' value='" .  $newExamID. "' />";
		echo "<label>".$newExamID."<label>";
		?> <!--end of NewExamID-->
		<td>		
		
			<select name="Year" id="Year" required onchange='showUser()'>
				<option value="0" selected="selected" > -Choose-</option>
				<option value="1st"> 1st</option>
				<option value="2nd"> 2nd</option>
				<option value="3rd"> 3rd</option>
				<option value="4th"> 4th</option>
			</select>
			
		</td><!--//year-->
		<!--Year-->
		<td>
			<select name="cbxSemester" id="cbxSemester" required onchange='showUser()'>
				<option value="0" selected="selected"> -Choose-</option>
				<option value="1st"> 1st Semester</option>
				<option value="2nd"> 2nd Semester</option>
			</select>
		</td><!--//year-->
		<!--Year-->
		<td>
			
		
<script>
function showUser() {
    var yr = document.getElementById('Year').value;
	var sem = document.getElementById('cbxSemester').value;
  
if (yr=="0" && sem=="0")
  {
  document.getElementById("SubjectContainer").innerHTML="";
  return;
  }
  
  
	var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("SubjectContainer").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "abc.php?yr="+yr+"&sem="+sem, true);
  xhttp.send();
  
  
}
 </script>

 

			<div id='SubjectContainer'>Choose Year & Semester
			
			</div>
			
			 
                </form>
            </fieldset>
        </div>
		</td><!--//year-->
	</tr>
	<tr>
		<td><div>
		<input class="btn btn-lg btn-success btn-block" id="submitnewexam" type="submit" name="Submit" value="Create">
		<input class="btn btn-lg btn-success btn-block" type="Reset" name="Reset" value="Reset">
		</div></td>
	</tr>
    </tbody>
  </table>
  
 

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
