<?php

session_start();
error_reporting(0);

if(empty($_SESSION['username'])){
?>
<script>
window.location.href='../../index.php' 
</script>
<?php
}

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
*/


$user_name = $_SESSION['username'];

 
$sql = "SELECT * FROM es_srs where created_by = '$user_name' order by date_time  desc  "; // select re_srs table and sort by date to show the new first 





$result= $connt->query($sql);

if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()){
	
		        $id = $row['sr']; ?> 
				<div class="overflow">	
				<tr>
					<td class="column1"><a href="more_detail.php?id=<?php echo $id; ?>"> <?php echo $id ?></a></td>
					<td class="column2"><?php echo $row['dial']; ?> </td>
					<td class="column3"><?php echo $row['created_date']; ?> </td>
					<td class="column4"><?php echo $row['status']; ?> </td>
					<td class="column5"><?php echo $row['created_by']; ?> </td>
					<td class="column6"><?php echo $row['handled_by']; ?> </td>
					<td class="column7"><?php echo $row['sla'] ?></td>
					<td class="column7"><?php echo $row['assign_to'] ?></td>
					<td class="column8"><?php echo $row['handled_time'] ?></td>
				</tr>   
				</div>
                                    <?php
									
		}
	} else {
				?>
		
				  <script>
                                 
                               document.getElementById("omer").innerHTML=
                                       '<div class="result">No Ressult Found </div>' ;
									   function redirect(){
									   window.location.href="query.php"
									   }
									   setTimeout(redirect, 500);
                            </script> <?php ;
                                
            }
	

mysqli_close($connt);

?>





