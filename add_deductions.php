<?php
	
		require("db.php");
		
		$id 			= $_POST['deduction_id'];
		$insHealth 	= $_POST['insHealth'];
		$taxes         = $_POST['taxes'];
		$gsis 			= $_POST['gsis'];
		@$abs 			= $_POST['abs'];
		$loans 		= $_POST['loans'];


		$sql = mysql_query("UPDATE deductions SET taxes='$taxes', gsis='$gsis', abs='$abs', loans='$loans', $insHealth='$$insHealth' WHERE deduction_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Deductions successfully updated...');
		            window.location.href='home_deductions.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>