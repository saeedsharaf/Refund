<?php
session_start();
if(empty($_SESSION['username'])){
?>
<script>
window.location.href='../../../index.php' 
</script>
<?php
}

error_reporting(0);

include_once'../../style/style.php';
include_once'../../style/header.php';
include_once'../../style/table_style.php';
    include'../index.php';

include'../../config/connect.php';

/*
if($connt->connect_error){
    die("connection falid" .$connt->connect_error);
} else {

    echo "connection successful" ;
}

*/

$super = $_SESSION['super'];
$supers = $_POST['supers'];
$suspend = $_POST['suspend'];
$up_id = $_POST['id'];
$user = $_SESSION['username'];
/*
$submit = $_POST['submit'];
$reject = $_POST['reject'];
*/


if ($_POST['assign']){
$sql = "UPDATE es_srs SET assign_to='$supers' , last_modified = '$user' WHERE sr = '$up_id'";
if ($connt->query($sql) === true && $super == true ){ 
?>
       <script>
                                 
  document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='sv.php'
     }                      
 setTimeout(redirect, 1000);

</script> <?php  
  
 
}

     


} else if ($_POST['suspend']){
		
    $sql = "UPDATE es_srs SET status='Suspend' , assign_to='$user'  WHERE sr = '$up_id'";
	
	if ($connt->query($sql) === true && $super == true ){ 


		$sql1 = "SELECT * FROM es_srs WHERE sr ='$up_id' "; 
		$result1 =$connt->query($sql1);
		if ($result1->num_rows > 0){
    while ($row = $result1->fetch_assoc()){
		
            ?>

		 <script>
            document.getElementById("omer").innerHTML = 
   '<div class="more_color">' +           
        '<table class="more" style="margin: auto; margin-bottom: 20px; width:auto; ">'+
        '<tr class="more">'+
		'<td class="column10"><label> SR </label></td>'+
		'<td class="column11"><div class="saeed"><span><?php echo $row['sr'];?><span></div></td>'+
		
		'<td class="column12"><label>CST Name</label></td>'+
		'<td class="column13"><div class="saeed"><span><?php echo $row['name'];?></span></div></td>'+
		
		'<td class="column12"><label>Modified by</label></td>'+
		'<td class="column13"><div class="saeed"><span><?php echo $row['last_modified'];?></span></div></td>'+
		
		
		'<td class="column14"><label>Date</label></td>'+
		'<td class="column15"><div class="saeed"><span><?php echo $row['created_date'];?></span></div></td>'+
	'</tr>'+	
	
	
	'<tr class="more">'+
		'<td><label>Dial</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['dial'];?></span></div></td>'+
                
		'<td><label >Created BY</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['created_by'];?></span></div></td>'+
		
		'<td><label>Assign To</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['assign_to'];?></span></div></td>'+
                
		'<td><label>SLA</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['sla'];?></span></div></td>'+
	'</tr>'+	
	
		'<td><label>Type</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['type'];?></span></div></td>'+
		
		'<td><label >Status</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['status'];?></span></div></td>'+
		
		'<td><label >Handled By</label></td>'+
		'<td><div class="saeed" ><span></span></div></td>'+

		'<td><label >Handled Time</label></td>'+
		'<td><div class="saeed" ><span></span></div></td>'+
	'</tr>'+
	'</table>'+

	
	
	'<table class="more" style="margin: auto; margin-bottom: 20px; width: auto;">'+	
		'<tr class="more">'+
			'<td class="column16"><label>Description</label></td>'+
			'<td td class="column17"><textarea class="des" style=" background-color:#e6e6e6b3;" placeholder="<?php echo $row['description'];?>" readonly ></textarea></td>'+
		'</tr>'+

		'<tr class="more">'+
				'<td class="column7"><label>FeedBack</label></td>'+
				'<td><form action ="update.php" method="post">'+
				'<textarea class="column18" name="updated" required ></textarea><br>'+
				'<input type="hidden" name="id" value="<?php echo $row['sr'];?>">'+
				'<input type="submit" class="submit" value="Close" name ="submit" style="margin-left: -17%; margin-top: 10px;">'+
				'<input type="submit" class="cancel" value="Cancel" name="cancel" style="margin-left: 30px; margin-right: 30px;" formnovalidate>'+
				'<input type="submit" class="reject" value="Reject" name="reject" >'+
								   
				'</form></td>'+
		'</tr>'+
	'</table>'+
'</div>';
</script>


<?php	
	}
}
	
}	
		/*
    
         ?>
<script>
                                 
  document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='more_detail.php'
     }                      
 setTimeout(redirect, 1000);

</script> 
 <?php  
 */
    
    
 } else if ($_POST['cancel'] and $super == true){
    ?>
<script>
    window.location.href="sv.php"
    </script>
    <?php
    
    

} else { 
    ?>
<script>
    window.location.href="query.php"
    </script>
    <?php
    

}
 /*
if ($connt->query($sql) === true && $super == true ){ 
/*
        
 ?> <script>window.location.href='sv.php'</script><?php  
 
}
*/


mysqli_close($connt);

?>