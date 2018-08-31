
<!DOCTYPE html>
<html lang="en">

<head>
<style>

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 0px 0px;
}


</style>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
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
                    <h1 class="page-header">Exam Repository</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-defaulwt">
                        <div class="panel-heading">
                           
                        </div>
                        <!-- /.panel-heading -->
						<?php 
						$ProfID = $_GET['profid'];
						$ExamID = $_GET['examid'];
                        echo "<a href=exambanklink.php?examid=".$ExamID."&profid=".$ProfID.
						" ><button type='button' class='btn btn-primary	'>Test Questionnaire</button></a>";

						echo "<button href=exambankDescription.php?
						examid=".$ExamID.
						"&profid=".$ProfID.
						"type='button' class='btn btn-danger'>Make Online Exam</button>";

						echo "<button href=exambankDescription.php?
						examid=".$ExamID.
						"&profid=".$ProfID.
						"type='button' class='btn btn-info'>Default</button>"?>						
                        </div>
                        <!-- /.panel-body -->

                        <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
*
						
						<?php include_once ("ExamBankDescriptionTable.php"); ?>


                    </div>
			
                    <!-- /.panel -->
                </div>
		
                <!-- /.col-lg-12 -->
            </div>
	


<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 
         
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


</body>

</html>
