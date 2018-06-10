<?php

session_start();
if(empty($_SESSION['username'])){
?>
<script>
window.location.href='../../user.php' 
</script>
<?php
}

error_reporting(0);

include_once'../../style/style.php';
include_once'../../style/header.php';
include_once'../../style/table_style.php';
include_once'../../style/export_style.php';
  include'../index.php';

include'../../config/connect.php';


//ceheck conntion 
/*
if($connt->connect_error){
    die("connection falid" .$connt->connect_error);
} else {

    echo "connection successful" ;
}


$pending = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Pending' "; // select pending fro mre_srs 
$closed = "SELECT status FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Closed' "; // slect cloased 
$reject = "SELECT status FROM re_srs where date >= '$st_date' AND date<= '$end_date' AND status = 'Rejected' "; //select reject


$result_pending = $connt->query($pending);
$result_closed = $connt->query($closed); 
$result_reject = $connt->query($reject);  



<script>
document.getElementById("right").innerHTML=
	' <?php echo "Pending : " 	. $result_pending->num_rows ."<br>"; ?>'+ // to print the num_rows of pending 
	' <?php echo "Closed : "	. $result_closed->num_rows ."<br>"; ?>'+	// to print num_rows of closed
	' <?php echo "Rejected : " 	. $result_reject->num_rows 	."<br>"; ?>'+
	' <?php echo "All : " 		. $result->num_rows ."<br>";  ?>';	// to print num_rows of reject
</script>
*/

///////////////////////////////////////////////////

$pending = $_POST['pending'];
$closed = $_POST['closed'];
$reject = $_POST['reject'];


$_SESSION['ex'] = '';

$st_date = $_POST['st_date'];
$end_date = $_POST['end_date'];

$_SESSION['st_date'] = $_POST['st_date'] ; 
$_SESSION['end_date'] = $_POST['end_date']; 
 

if($pending && $closed){
	
	$_SESSION['ex'] = 'pc';
	


	$sql = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status in ('Pending','Closed') "; // select pending & closed from mre_srs 
	$pending = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Pending' "; // select pending fro mre_srs 
	$closed = "SELECT status FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Closed' "; // slect cloased 
	
	
	$result = $connt->query($sql);
	$result_pending = $connt->query($pending);
	$result_closed = $connt->query($closed); 
	
	?>
	<script>
document.getElementById("right").innerHTML=
	' <?php echo "Pending : " 	. $result_pending->num_rows ."<br>"; ?>'+ // to print the num_rows of pending 
	' <?php echo "Closed : "	. $result_closed->num_rows ."<br>"; ?>'+	// to print num_rows of closed	
	' <?php echo "All : " 		. $result->num_rows ."<br>";  ?>';	// to print num_rows of reject
</script>
	
	<?php
	
	/*
	$closed = "SELECT status FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Closed' "; // slect cloased 
*/
	
	
	
	if($result->num_rows > 0 ){
			while($row = $result->fetch_assoc()){
			?>
				<tr>
					<td class="column1"><a href="more_detail.php?id=<?php echo $row['sr']; ?>"> <?php echo $row['sr'] ?></a></td>
					<td class="column2"><?php echo $row['dial']; ?> </td>
					<td class="column3"><?php echo $row['created_date']; ?> </td>
					<td class="column4"><?php echo $row['status']; ?> </td>
					<td class="column5"><?php echo $row['created_by']; ?> </td>
					<td class="column6"><?php echo $row['handled_by']; ?> </td>
					<td class="column7"><?php echo $row['sla'] ?></td>
					<td class="column7"><?php echo $row['assign_to'] ?></td>
					<td class="column8"><?php echo $row['handled_time'] ?></td>
				</tr>  
			<?php
			}	
	}
}
 
 else if($pending && $reject){
 
	$_SESSION['ex'] = 'pr';
	
	
 
		$sql = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status in ('Pending','Rejected') "; // select pending & closed from mre_srs 
		$pending = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Pending' "; // select pending fro mre_srs 
		$reject = "SELECT status FROM re_srs where date >= '$st_date' AND date<= '$end_date' AND status = 'Rejected' "; //select reject
	
		$result = $connt->query($sql);
		$result_pending = $connt->query($pending);
		$result_reject = $connt->query($reject);  
		
		?>
		<script>
	document.getElementById("right").innerHTML=
	' <?php echo "Pending : " 	. $result_pending->num_rows ."<br>"; ?>'+ // to print the num_rows of pending 	
	' <?php echo "Rejected : " 	. $result_reject->num_rows 	."<br>"; ?>'+
	' <?php echo "All : " 		. $result->num_rows ."<br>";  ?>';	// to print num_rows of reject
</script>
		<?php
	
		
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
				?>
					<tr>
							<td class="column1"><a href="more_detail.php?id=<?php echo $row['sr']; ?>"> <?php echo $row['sr'] ?></a></td>
							<td class="column2"><?php echo $row['dial']; ?> </td>
							<td class="column3"><?php echo $row['created_date']; ?> </td>
							<td class="column4"><?php echo $row['status']; ?> </td>
							<td class="column5"><?php echo $row['created_by']; ?> </td>
							<td class="column6"><?php echo $row['handled_by']; ?> </td>
							<td class="column7"><?php echo $row['sla'] ?></td>
							<td class="column7"><?php echo $row['assign_to'] ?></td>
							<td class="column8"><?php echo $row['handled_time'] ?></td>
						</tr> 
				<?php		
			}
		}	
	} else if ($closed && $reject){
	
		$_SESSION['ex'] = 'cr';
		
		
			$sql = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status in ('Closed','Rejected') "; // select pending & closed from mre_srs
			$reject = "SELECT status FROM re_srs where date >= '$st_date' AND date<= '$end_date' AND status = 'Rejected' "; //select reject
			$closed = "SELECT status FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Closed' "; // slect cloased 
			
			$result = $connt->query($sql);
			$result_reject = $connt->query($reject); 
			$result_closed = $connt->query($closed); 
			
			?>
			<script>
document.getElementById("right").innerHTML=
	
	' <?php echo "Closed : "	. $result_closed->num_rows ."<br>"; ?>'+	// to print num_rows of closed
	' <?php echo "Rejected : " 	. $result_reject->num_rows 	."<br>"; ?>'+
	' <?php echo "All : " 		. $result->num_rows ."<br>";  ?>';	// to print num_rows of reject
</script>
		<?php	
			
			
				if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
				?>
					<tr>
							<td class="column1"><a href="more_detail.php?id=<?php echo $row['sr']; ?>"> <?php echo $row['sr']; ?></a></td>
							<td class="column2"><?php echo $row['dial']; ?> </td>
							<td class="column3"><?php echo $row['created_date']; ?> </td>
							<td class="column4"><?php echo $row['status']; ?> </td>
							<td class="column5"><?php echo $row['created_by']; ?> </td>
							<td class="column6"><?php echo $row['handled_by']; ?> </td>
							<td class="column7"><?php echo $row['sla'] ?></td>
							<td class="column7"><?php echo $row['assign_to'] ?></td>
							<td class="column8"><?php echo $row['handled_time'] ?></td>
						</tr> 
				<?php		
			}
		}
	} 
	
	else if ($pending){
	
	$_SESSION['ex'] = 'p';

	
	$pending = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Pending' "; // select pending fro mre_srs 
		$result_pending = $connt->query($pending);
		?>
		
		<script>
document.getElementById("right").innerHTML=
	' <?php echo "Pending : " 	. $result_pending->num_rows ."<br>"; ?>'; // to print the num_rows of pending 
</script>
		
	<?php	
		if($result_pending->num_rows > 0){
			while($row = $result_pending->fetch_assoc()){
				?>
					<tr>
							<td class="column1"><a href="more_detail.php?id=<?php echo $row['sr']; ?>"> <?php echo $row['sr']; ?></a></td>
							<td class="column2"><?php echo $row['dial']; ?> </td>
							<td class="column3"><?php echo $row['created_date']; ?> </td>
							<td class="column4"><?php echo $row['status']; ?> </td>
							<td class="column5"><?php echo $row['created_by']; ?> </td>
							<td class="column6"><?php echo $row['handled_by']; ?> </td>
							<td class="column7"><?php echo $row['sla'] ?></td>
							<td class="column7"><?php echo $row['assign_to'] ?></td>
							<td class="column8"><?php echo $row['handled_time'] ?></td>
						</tr> 
				<?php		
			}
		}
	
	}
	else if ($closed){
	
	
	$_SESSION['ex'] = 'c';
	

	
	$closed = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Closed' "; // slect cloased 
		$result_closed = $connt->query($closed); 
		?>
		<script>
document.getElementById("right").innerHTML=
	
	' <?php echo "Closed : "	. $result_closed->num_rows ."<br>"; ?>';	// to print num_rows of closed
</script>
	<?php	
		
		if($result_closed->num_rows > 0){
			while($row = $result_closed->fetch_assoc()){
				?>
					<tr>
							<td class="column1"><a href="more_detail.php?id=<?php echo $row['sr']; ?>"> <?php echo $row['sr']; ?></a></td>
							<td class="column2"><?php echo $row['dial']; ?> </td>
							<td class="column3"><?php echo $row['created_date']; ?> </td>
							<td class="column4"><?php echo $row['status']; ?> </td>
							<td class="column5"><?php echo $row['created_by']; ?> </td>
							<td class="column6"><?php echo $row['handled_by']; ?> </td>
							<td class="column7"><?php echo $row['sla'] ?></td>
							<td class="column7"><?php echo $row['assign_to'] ?></td>
							<td class="column8"><?php echo $row['handled_time'] ?></td>
						</tr> 
				<?php		
			}
		}
	
	}
	else if ($reject){
	
			
			$_SESSION['ex'] = 'r';
	
	
				$reject = "SELECT * FROM re_srs where date >= '$st_date' AND date<= '$end_date' AND status = 'Rejected' "; //select reject
				$result_reject = $connt->query($reject);  
			?>	
				<script>
document.getElementById("right").innerHTML=
	' <?php echo "Rejected : " 	. $result_reject->num_rows 	."<br>"; ?>';
	
</script>
	<?php			
					if($result_reject->num_rows > 0){
				while($row = $result_reject->fetch_assoc()){
				?>
					<tr>
							<td class="column1"><a href="more_detail.php?id=<?php echo $row['sr']; ?>"> <?php echo $row['sr']; ?></a></td>
							<td class="column2"><?php echo $row['dial']; ?> </td>
							<td class="column3"><?php echo $row['created_date']; ?> </td>
							<td class="column4"><?php echo $row['status']; ?> </td>
							<td class="column5"><?php echo $row['created_by']; ?> </td>
							<td class="column6"><?php echo $row['handled_by']; ?> </td>
							<td class="column7"><?php echo $row['sla'] ?></td>
							<td class="column7"><?php echo $row['assign_to'] ?></td>
							<td class="column8"><?php echo $row['handled_time'] ?></td>
						</tr> 
				<?php		
			}
		}
	} else {
	

	
		$sql = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' And status != 'Suspend'"; // slect cloased 
		$pending = "SELECT * FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Pending' "; // select pending fro mre_srs 
		$closed = "SELECT status FROM re_srs where date >= '$st_date' AND date <= '$end_date' AND status = 'Closed' "; // slect cloased 
		$reject = "SELECT status FROM re_srs where date >= '$st_date' AND date<= '$end_date' AND status = 'Rejected' "; //select reject


		$result_pending = $connt->query($pending);
		$result_closed = $connt->query($closed); 
		$result_reject = $connt->query($reject); 
		$result = $connt->query($sql);

		?>
		<script>
document.getElementById("right").innerHTML=
	' <?php echo "Pending : " 	. $result_pending->num_rows ."<br>"; ?>'+ // to print the num_rows of pending 
	' <?php echo "Closed : "	. $result_closed->num_rows ."<br>"; ?>'+	// to print num_rows of closed
	' <?php echo "Rejected : " 	. $result_reject->num_rows 	."<br>"; ?>'+
	' <?php echo "All : " 		. $result->num_rows ."<br>";  ?>';	// to print num_rows of reject
</script>


		<?php
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
				?>
					<tr>
							<td class="column1"><a href="more_detail.php?id=<?php echo $row['sr']; ?>"> <?php echo $row['sr']; ?></a></td>
							<td class="column2"><?php echo $row['dial']; ?> </td>
							<td class="column3"><?php echo $row['created_date']; ?> </td>
							<td class="column4"><?php echo $row['status']; ?> </td>
							<td class="column5"><?php echo $row['created_by']; ?> </td>
							<td class="column6"><?php echo $row['handled_by']; ?> </td>
							<td class="column7"><?php echo $row['sla'] ?></td>
							<td class="column7"><?php echo $row['assign_to'] ?></td>
							<td class="column8"><?php echo $row['handled_time'] ?></td>
						</tr> 
				<?php		
			}
		}
	}
	
	?>





<form action ="f_export.php" method="get">
<input type="submit" class="ex_red"  name="cancel" value="Cancel">
<input type="submit" class="ex_green" type="submit"  name="export" value="Export">
</form>
	<?php

mysqli_close($connt);
	
?>





