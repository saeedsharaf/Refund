<?php

session_start();


include'../../config/connect.php';
error_reporting(0);


//ceheck conntion 
/*
if($connt->connect_error){
    die("connection falid" .$connt->connect_error);
} else {

    echo "connection successful" ;
}
*/

$st_date =  $_SESSION['st_date'];
$end_date =  $_SESSION['end_date'];
 /*
 $_POST['date'] = $date1;
 */

if($_GET['export']){ 
if($_SESSION['ex'] == 'pc'){
	$sql = "select * from es_srs where date >= '$st_date' and date <= '$end_date' and status in ('Pending','Closed')";
	
	
$output = "";
$result = $connt->query($sql); // query for dial in es_srs

if(isset($_GET['export'])){

	if ($result->num_rows > 0 ){

	/* below code the header of sheet that will be exported */
			$output .= '
			<table >
				<tr>
				<td > sr </td>
				<td > Bss sr </td>
				<td > Dial </td>
				<td > Created date</td>
				<td > Status</td>
				<td > Name </td>			
				<td > Description </td>
				<td > Created by </td>
				<td > Handled by </td>
				<td > Feedback </td>
				<td > Assign to </td>
				<td > Last modified </td>
				<td > sla </td>
				<td > handled time </td>
				</tr>
				';

		while ( $row = $result->fetch_array()){
		
			$output .=
		
			/* below code for rows */
		
				'

					<tr>
						<td class="column2">' .$row['sr'] . '</td> 
						<td class="column2">' .$row['bss_sr'] . '</td>
						<td class="column2">' .$row['dial'] . '</td>
						<td class="column3">' .$row['created_date']  .'</td>
						<td class="column4">' .$row['status'].  '</td>
						<td class="column5">' .$row['name'].  '</td>
						<td class="column6">' .$row['description'].  '</td>
						<td class="column6">' .$row['created_by'].  '</td>
						<td class="column7">' .$row['handled_by']. '</td>
						<td class="column8">' .$row['feedback'].'</td>
						<td class="column8">' .$row['assign_to'].'</td>
						<td class="column8">' .$row['last_modified'].'</td>
						<td class="column8">' .$row['sla'].'</td>
						<td class="column8">' .$row['handled_time'].'</td>
					</tr>  ';			
					
					
		}
$output .= '
</table>';


	
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=download.xls") ; 
	}		echo $output;				
	} 
	}
	else if ($_SESSION['ex'] == 'pr'){
		$sql = "select * from es_srs where date >= '$st_date' and date <= '$end_date' and status in ('Pending','Rejected')";
		
		
$output = "";
$result = $connt->query($sql); // query for dial in es_srs

if(isset($_GET['export'])){

	if ($result->num_rows > 0 ){

	/* below code the header of sheet that will be exported */
			$output .= '
			<table >
				<tr>
				<td > sr </td>
				<td > Bss sr </td>
				<td > Dial </td>
				<td > Created date</td>
				<td > Status</td>
				<td > Name </td>			
				<td > Description </td>
				<td > Created by </td>
				<td > Handled by </td>
				<td > Feedback </td>
				<td > Assign to </td>
				<td > Last modified </td>
				<td > sla </td>
				<td > handled time </td>
				</tr>
				';

		while ( $row = $result->fetch_array()){
		
			$output .=
		
			/* below code for rows */
		
				'

					<tr>
						<td class="column2">' .$row['sr'] . '</td> 
						<td class="column2">' .$row['bss_sr'] . '</td>
						<td class="column2">' .$row['dial'] . '</td>
						<td class="column3">' .$row['created_date']  .'</td>
						<td class="column4">' .$row['status'].  '</td>
						<td class="column5">' .$row['name'].  '</td>
						<td class="column6">' .$row['description'].  '</td>
						<td class="column6">' .$row['created_by'].  '</td>
						<td class="column7">' .$row['handled_by']. '</td>
						<td class="column8">' .$row['feedback'].'</td>
						<td class="column8">' .$row['assign_to'].'</td>
						<td class="column8">' .$row['last_modified'].'</td>
						<td class="column8">' .$row['sla'].'</td>
						<td class="column8">' .$row['handled_time'].'</td>
					</tr>  ';			
					
					
		}
$output .= '
</table>';


	
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=download.xls") ; 
			echo $output;				
	}
	}
	}
	else if ($_SESSION['ex'] == 'cr'){
		$sql = "select * from es_srs where date >= '$st_date' and date <= '$end_date' and status in ('Closed','Rejected') ";
		
		
$output = "";
$result = $connt->query($sql); // query for dial in es_srs

if(isset($_GET['export'])){

	if ($result->num_rows > 0 ){

	/* below code the header of sheet that will be exported */
			$output .= '
			<table >
				<tr>
				<td > sr </td>
				<td > Bss sr </td>
				<td > Dial </td>
				<td > Created date</td>
				<td > Status</td>
				<td > Name </td>			
				<td > Description </td>
				<td > Created by </td>
				<td > Handled by </td>
				<td > Feedback </td>
				<td > Assign to </td>
				<td > Last modified </td>
				<td > sla </td>
				<td > handled time </td>
				</tr>
				';

		while ( $row = $result->fetch_array()){
		
			$output .=
		
			/* below code for rows */
		
				'

					<tr>
						<td class="column2">' .$row['sr'] . '</td> 
						<td class="column2">' .$row['bss_sr'] . '</td>
						<td class="column2">' .$row['dial'] . '</td>
						<td class="column3">' .$row['created_date']  .'</td>
						<td class="column4">' .$row['status'].  '</td>
						<td class="column5">' .$row['name'].  '</td>
						<td class="column6">' .$row['description'].  '</td>
						<td class="column6">' .$row['created_by'].  '</td>
						<td class="column7">' .$row['handled_by']. '</td>
						<td class="column8">' .$row['feedback'].'</td>
						<td class="column8">' .$row['assign_to'].'</td>
						<td class="column8">' .$row['last_modified'].'</td>
						<td class="column8">' .$row['sla'].'</td>
						<td class="column8">' .$row['handled_time'].'</td>
					</tr>  ';			
					
					
		}
$output .= '
</table>';


	
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=download.xls") ; 
			echo $output;				
	}
	}
	}
	else if ($_SESSION['ex'] == 'p'){
		$sql = "select * from es_srs where date >= '$st_date' and date <= '$end_date' and status ='Pending'";
		
$output = "";
$result = $connt->query($sql); // query for dial in es_srs

if(isset($_GET['export'])){

	if ($result->num_rows > 0 ){

	/* below code the header of sheet that will be exported */
			$output .= '
			<table >
				<tr>
				<td > sr </td>
				<td > Bss sr </td>
				<td > Dial </td>
				<td > Created date</td>
				<td > Status</td>
				<td > Name </td>			
				<td > Description </td>
				<td > Created by </td>
				<td > Handled by </td>
				<td > Feedback </td>
				<td > Assign to </td>
				<td > Last modified </td>
				<td > sla </td>
				<td > handled time </td>
				</tr>
				';

		while ( $row = $result->fetch_array()){
		
			$output .=
		
			/* below code for rows */
		
				'

					<tr>
						<td class="column2">' .$row['sr'] . '</td> 
						<td class="column2">' .$row['bss_sr'] . '</td>
						<td class="column2">' .$row['dial'] . '</td>
						<td class="column3">' .$row['created_date']  .'</td>
						<td class="column4">' .$row['status'].  '</td>
						<td class="column5">' .$row['name'].  '</td>
						<td class="column6">' .$row['description'].  '</td>
						<td class="column6">' .$row['created_by'].  '</td>
						<td class="column7">' .$row['handled_by']. '</td>
						<td class="column8">' .$row['feedback'].'</td>
						<td class="column8">' .$row['assign_to'].'</td>
						<td class="column8">' .$row['last_modified'].'</td>
						<td class="column8">' .$row['sla'].'</td>
						<td class="column8">' .$row['handled_time'].'</td>
					</tr>  ';			
					
					
		}
$output .= '
</table>';


	
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=download.xls") ; 
			echo $output;				
	}
	}
	}
	else if ($_SESSION['ex'] == 'c'){
		$sql= "select * from es_srs where date >= '$st_date' and date <= '$end_date' and status = 'Closed'";
			
			
$output = "";
$result = $connt->query($sql); // query for dial in es_srs

if(isset($_GET['export'])){

	if ($result->num_rows > 0 ){

	/* below code the header of sheet that will be exported */
			$output .= '
			<table >
				<tr>
				<td > sr </td>
				<td > Bss sr </td>
				<td > Dial </td>
				<td > Created date</td>
				<td > Status</td>
				<td > Name </td>			
				<td > Description </td>
				<td > Created by </td>
				<td > Handled by </td>
				<td > Feedback </td>
				<td > Assign to </td>
				<td > Last modified </td>
				<td > sla </td>
				<td > handled time </td>
				</tr>
				';

		while ( $row = $result->fetch_array()){
		
			$output .=
		
			/* below code for rows */
		
				'

					<tr>
						<td class="column2">' .$row['sr'] . '</td> 
						<td class="column2">' .$row['bss_sr'] . '</td>
						<td class="column2">' .$row['dial'] . '</td>
						<td class="column3">' .$row['created_date']  .'</td>
						<td class="column4">' .$row['status'].  '</td>
						<td class="column5">' .$row['name'].  '</td>
						<td class="column6">' .$row['description'].  '</td>
						<td class="column6">' .$row['created_by'].  '</td>
						<td class="column7">' .$row['handled_by']. '</td>
						<td class="column8">' .$row['feedback'].'</td>
						<td class="column8">' .$row['assign_to'].'</td>
						<td class="column8">' .$row['last_modified'].'</td>
						<td class="column8">' .$row['sla'].'</td>
						<td class="column8">' .$row['handled_time'].'</td>
					</tr>  ';			
					
					
		}
$output .= '
</table>';


	
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=download.xls") ; 
			echo $output;				
	}
	}
	}
	else if ($_SESSION['ex'] == 'r'){
		$sql = "select * from es_srs where date >= '$st_date' and date <= '$end_date' and status = 'Rejected'";
		
		
$output = "";
$result = $connt->query($sql); // query for dial in es_srs

if(isset($_GET['export'])){

	if ($result->num_rows > 0 ){

	/* below code the header of sheet that will be exported */
			$output .= '
			<table >
				<tr>
				<td > sr </td>
				<td > Bss sr </td>
				<td > Dial </td>
				<td > Created date</td>
				<td > Status</td>
				<td > Name </td>			
				<td > Description </td>
				<td > Created by </td>
				<td > Handled by </td>
				<td > Feedback </td>
				<td > Assign to </td>
				<td > Last modified </td>
				<td > sla </td>
				<td > handled time </td>
				</tr>
				';

		while ( $row = $result->fetch_array()){
		
			$output .=
		
			/* below code for rows */
		
				'

					<tr>
						<td class="column2">' .$row['sr'] . '</td> 
						<td class="column2">' .$row['bss_sr'] . '</td>
						<td class="column2">' .$row['dial'] . '</td>
						<td class="column3">' .$row['created_date']  .'</td>
						<td class="column4">' .$row['status'].  '</td>
						<td class="column5">' .$row['name'].  '</td>
						<td class="column6">' .$row['description'].  '</td>
						<td class="column6">' .$row['created_by'].  '</td>
						<td class="column7">' .$row['handled_by']. '</td>
						<td class="column8">' .$row['feedback'].'</td>
						<td class="column8">' .$row['assign_to'].'</td>
						<td class="column8">' .$row['last_modified'].'</td>
						<td class="column8">' .$row['sla'].'</td>
						<td class="column8">' .$row['handled_time'].'</td>
					</tr>  ';			
					
					
		}
$output .= '
</table>';


	
			header("content-type: application/'xls");
			header("content-disposition:attachement; filename=download.xls") ; 
			echo $output;				
	}
	}
	}
	else {
	
		$sql = "SELECT * FROM es_srs where date >= '$st_date' and date <= '$end_date' and status != 'Suspend'";



		$output = "";
		$result = $connt->query($sql); // query for dial in es_srs

		if(isset($_GET['export'])){

			if ($result->num_rows > 0 ){

			/* below code the header of sheet that will be exported */
					$output .= '
					<table >
						<tr>
						<td > sr </td>
						<td > Bss sr </td>
						<td > Dial </td>
						<td > Created date</td>
						<td > Status</td>
						<td > Name </td>			
						<td > Description </td>
						<td > Created by </td>
						<td > Handled by </td>
						<td > Feedback </td>
						<td > Assign to </td>
						<td > Last modified </td>
						<td > sla </td>
						<td > handled time </td>
						</tr>
						';

				while ( $row = $result->fetch_array()){
				
					$output .=
				
					/* below code for rows */
				
						'

							<tr>
								<td class="column2">' .$row['sr'] . '</td> 
								<td class="column2">' .$row['bss_sr'] . '</td>
								<td class="column2">' .$row['dial'] . '</td>
								<td class="column3">' .$row['created_date']  .'</td>
								<td class="column4">' .$row['status'].  '</td>
								<td class="column5">' .$row['name'].  '</td>
								<td class="column6">' .$row['description'].  '</td>
								<td class="column6">' .$row['created_by'].  '</td>
								<td class="column7">' .$row['handled_by']. '</td>
								<td class="column8">' .$row['feedback'].'</td>
								<td class="column8">' .$row['assign_to'].'</td>
								<td class="column8">' .$row['last_modified'].'</td>
								<td class="column8">' .$row['sla'].'</td>
								<td class="column8">' .$row['handled_time'].'</td>
							</tr>  ';			
							
							
				}
		$output .= '
		</table>';


			
					header("content-type: application/'xls");
					header("content-disposition:attachement; filename=download.xls") ; 
					echo $output;				
			}
} 
}
}

if($_GET['cancel']){

?>
<script>
    window.location.href="sv.php" 
    </script>
    <?php
    
}

mysqli_close($connt);


?>