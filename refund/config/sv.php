<?php
session_start();

if(empty($_SESSION['username'])){
?>
<script>
window.location.href='../../index.php' 
</script>
<?php
}

error_reporting(0);

include_once'../../style/style.php';
include_once'../../style/header.php';
include_once'../../style/table_style.php';

    include'../index.php';
	/*
error_reporting(0);

*/

?>


<script>
			document.getElementById("right").innerHTML=
			'<form class="query" action="sv1.php"  method ="post" >'+
			'<input type="submit" class="query" name="download" value="Query" > ';
</script>	

<?php

include'../../config/connect.php';

$user = $_SESSION['username'];


$sql1 = "SELECT * FROM re_srs "; //to select whole table re_srs to use it in super view 
$sql2 = "SELECT super FROM member WHERE user_name ='$user' "; // select member table to query about S.V



$result1 = $connt->query($sql1); // query for re_srs 

$result2 = $connt->query($sql2);  // query for s.v

$total = "SELECT status FROM re_srs WHERE status = 'Pending' or status = 'Suspend' "; // select the rows of pending to get total of result 

$re_total = $connt->query ($total);

$num_rows = $re_total->num_rows;

?>
<script>
	document.getElementById("declare").innerHTML = 
		'<span> total : <?php echo $num_rows ?> </span> '; // this code will print the total
</script>



<?php

  if ($result2->num_rows > 0 ) {
		$row2 = $result2->fetch_assoc();// fetch re_srs table 
		
		 $super  = $row2['super'];
		 
		while ($row1 = $result1->fetch_assoc()) { // fetch member table where user = login
		 $id1 = $row1['sr'] ;
		
		
		if ($super == true and $row1['status'] == 'Pending' or $row1['status'] == 'Suspend'){ 
			
		
		?>
		
			
				<tr>
					<td class="column1"><a href="more_detail.php?id=<?php echo $id1; ?>"> <?php echo $id1 ?></a></td>
					<td class="column2"><?php echo $row1['dial']; ?> </td>
					<td class="column3"><?php echo $row1['created_date']; ?> </td>
					<td class="column4"><?php echo $row1['status']; ?> </td>
					<td class="column5"><?php echo $row1['created_by']; ?> </td>
					<td class="column6"><?php echo $row1['handled_by']; ?> </td>
					<td class="column7"><?php echo $row1['sla'] ?></td>
					<td class="column7"><?php echo $row1['assign_to'] ?></td>
					<td class="column8"><?php echo $row1['handled_time'] ?></td>
				</tr> 
		
				
				<?php
		}
	
		}	

		
}



		
	 
	 
	
	

 

mysqli_close($connt);
  



?>