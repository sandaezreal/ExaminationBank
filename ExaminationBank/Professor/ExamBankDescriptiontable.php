<?php
include('Connection.php');

	
	$ProfID = $_GET['profid'];
	$ExamID = $_GET['examid'];
	$query = "select * from tblexambank
inner join tbl_user
on tblexambank.ProfID = tbl_user._UsernameID where ExamID = ".$ExamID." and ProfID=".$ProfID.""	;
/* 	echo $query; */


	$result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
	$NumDecimal = 4; //Variable for 	Decimal on ExamCode!!
	$ExamCode = str_pad($ProfID , $NumDecimal, '0', STR_PAD_LEFT). "-" . str_pad($ExamID , $NumDecimal, '0', STR_PAD_LEFT);
	$Subject =$row['Subject'];
	$Year =$row['Year'];
	$Author=$row["_Suffix"]." ".$row["_FirstName"]." ".$row["_LastName"];
	$Description = $row['Descrption'];
	$Comment =$row['Comment'];

	if (mysqli_num_rows($result) == 0) {
	$Page = "ERROR 404:
	No ".$ExamCode." ExamCode found";
	  }
	else {  
	
	$Page = "<div class='panel-body'>
			<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>
			<thead >
				<th colspan='2'> \n".$Subject."</th>
			</thead>										
				<tr>
					<td >Exam Code</td>
					<td>".$ExamCode."</td>
				</tr>
				<tr>
					<td>Subject</td>
					<td>".$Subject."</td>
				</tr>
			<tr>
		
			<tr>
					<td>Year</td>
					<td>".$Year."</td>
				</tr>
			<tr>
			
					<td>Author</td>
					<td>".$Author."</td>
				</tr>	
			<tbody>
			  <!-- /.table-responsive -->

			</tbody>
		</table>
		<!-- /.table-responsive -->

	<div id='exTab2' >	
	<ul class='nav nav-tabs' width=200'>
				<li class='active'>
			<a  href='#1' data-toggle='tab'>Description</a>
				</li>
				<li><a href='#2' data-toggle='tab'>Comment</a>
				</li>
				<li><a href='#3' data-toggle='tab'>Statistic</a>
				</li>
			</ul>

				<div class='tab-content ' width='200'>
				  <div class='tab-pane active' id='1' width='222'>
			  <h3>".$Description."</h3>
					</div>
					<div class='tab-pane' id='2'>
			  <h3>Notice the gap between the content and tab after applying a background color</h3>
					</div>
			<div class='tab-pane' id='3'>
			  <h3>add clearfix to tab-content (see the css)</h3>
					</div>
				</div>
	  </div>  ";
	
	}
	  echo $Page;
  ?>