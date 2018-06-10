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
include'../index.php';

error_reporting(0);

$error = ""; 
$super = $_SESSION['super']; // variable hold if user super or not 
include'../../config/connect.php';
//ceheck conntion 
/*
if($connt->connect_error){
    die("connection falid" .$connt->connect_error);
} else {

    echo "connection successful" ;
}
*/
$ser = $_POST['search']; 
$submit = $_POST['se'];
$user = $_SESSION['username'];
 
$sql = "SELECT * FROM es_srs WHERE dial = $ser order by date_time desc"; // select re_srs table and sort by date to show the new first 
$result = $connt->query($sql); // query for dial in re_srs
/*
$_SESSION['search'] = $result; 
*/
// below code to query and validated the serach 

if ($super == false ){
?>
<script>
			document.getElementById("right").innerHTML=
			'<form class="query" action="my_histroy.php"  method ="post" >'+
			
			'<input type="submit" class="query" name="histroy" value="My History" > ';
</script>	
<?php
}
	if(isset($_POST['se'])){		
		  
		if (empty($ser)){
     
		?>
         <script>
                                 
            document.getElementById("omer").innerHTML=
            '<div class="result">No Ressult Found </div>' ;
         </script> <?php ;  
		}else if ($result->num_rows > 0  ){
			while ($row = $result->fetch_assoc()){
			/*
			   $date = $row['created_date'];
				$dt = new DateTime($date);
				$dt->modify('+1 hour');
				
				
				$cdate = strtotime($row['created_date']); 
				$new_cdate = date("h:i A d/m/y ", $cdate);
				$hdate = strtotime($row['handled_time']); 
				$new_hdate = date("h:i A d/m/y ", $hdate);
			*/
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
		}											
		else { 
			?>
			<script>
			   document.getElementById("omer").innerHTML=
			   '<div class="result">No Ressult Found </div>' ;
			</script> 
			<?php ;	
		}
	}                    
mysqli_close($connt);  
?>

	
	
	
	


 
