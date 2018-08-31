
	<?php
	session_start();
	$connection = mysql_connect("localhost","root");

	if($connection==false)
	{//begin oof if $connection
		echomsql_errno().".".mysql_error()."<BR>";
		exit;
	}// end of $connection	
		mysql_select_db("db_bankexamination",$connection);
		
		?>
		
		