

	<!DOCTYPE html>
<html lang="en">

											
<head>
	

	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProfessorDashBoard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body ng-app="myApp" ng-controller="userCtrl">

<?php
include("navheader.html");
include("navsideindex.html");
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
			
                </div>
				
				<table class="w3-table w3-bordered w3-striped">
  <tr>
    <th>Edit</th>
    <th>First Name</th>
    <th>Last Name</th>
  </tr>
  <tr ng-repeat="user in users" method=post>
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
    <td>
      <button class="w3-btn w3-ripple" ng-click="editUser(user.id)">&#9998; Edit</button>
    </td>
    <td>{{ user.fName }}</td>
    <td>{{ user.lName }}</td>
  </tr>
</table>
<br>
<button class="w3-btn w3-green w3-ripple" ng-click="editUser('new')">&#9998; Create New User</button>

<form ng-hide="hideform">
  <h3 ng-show="edit">Create New Student:</h3>
  <h3 ng-hide="edit">Edit User:</h3>
    <label>First Name:</label>
  <br>
		<input class="w3-input w3-border" type="text" ng-model="fName" ng-disabled="!edit" placeholder="First Name">
    <label>Last Name:</label>
    <input class="w3-input w3-border" type="text" ng-model="lName" ng-disabled="!edit" placeholder="Last Name">
  <br>
    <label>Password:</label>
    <input class="w3-input w3-border" type="password" ng-model="passw1" placeholder="Password">
  <br>
    <label>Repeat:</label>
    <input class="w3-input w3-border" type="password" ng-model="passw2" placeholder="Repeat Password">
  <br>
  <button class="w3-btn w3-green w3-ripple" ng-disabled="error || incomplete">&#10004; Save Changes</button>
</form>

</div>

<script src= "myUsers.js"></script>

				
				
           
                        
                 
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->	

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
