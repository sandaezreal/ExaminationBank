<?php
include("connection.php");
$q = $_GET['yr'];
$w = $_GET['sem'];
// $w= "1st";
// $q="1st";

	$query = "SELECT * FROM tbl_Subjects where Semester='$w' and Year='$q'"  ;
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
		$cbxsubject ="<select name='Subject'>
		<option value='0' selected='selected' required> -Choose-</option>";
//$i=0;
		
		//#cbxsubject "\n<option value='".$row['Subject']."'>".$row['Subject']."</option> ";
				while($row=mysqli_fetch_array($result)){                                                   
			   $cbxsubject =$cbxsubject."\n<option value='".$row['Subject']."'>".$row['Subject']."</option> ";
			   //$temp++;
			//   echo $i;
			 //  $i++;
			}
		
			
			$cbxsubject =$cbxsubject."</select>";
		
	

		echo $cbxsubject;
			
		}else if ($q=='0' and $w=='0')
		{
			echo "Choice Year and Semester";
			return;
		}
		else if ($q=='0')
		{
		echo "Required Year";				
		}
		else if ($w	=='0')
		{
		echo "Required Semester";	
		}
		else if(mysqli_num_rows($result)==0)
		{
		echo "<SELECT name='Subject'>;
		<option value='0'>- Choose-</option>
		</select>";
		return;
		}
			

	mysqli_close($conn);
?>

    