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
 /*  
$error = "";
*/
include'../../config/connect.php';


//ceheck conntion 
/*
if($connt->connect_error){
    die("connection falid" .$connt->connect_error);
} else {

    echo "connection successful" ;
}
*/



$user = $_SESSION['username'];
$ser = $_GET['id'];
 //connect with tow table memebr & sr


 

$sql = "SELECT * FROM es_srs WHERE sr ='$ser' "; 


$sql1 = "select super from member where user_name ='$user' "; // select row super from member table 


$result = $connt->query($sql); //query about tables

$result1 =$connt->query($sql1);
 



//below code to get result
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){ // this code to fetch all our tabels query
        $rows = $result1->fetch_assoc();
            $super = $rows['super'];
			
							
          
        if($row['status'] == "Pending" and $super == true){
		
		
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
                
		'<td><label>Created BY</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['created_by'];?></span></div></td>'+
		
		'<td><label>Assign To</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['assign_to'];?></span></div></td>'+
		
                
		'<td><label>SLA</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['sla'];?></span></div></td>'+
	'</tr>'+	
	'<tr class="more">'+
		'<td><label>Type</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['type'];?></span></div></td>'+
		
		'<td><label>Status</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['status'];?></span></div></td>'+
		
		'<td><label>Handled By</label></td>'+
		'<td><div class="saeed"><span></span></div></td>'+

		'<td><label>Handled Time</label></td>'+
		'<td><div class="saeed"><span></span></div></td>'+
	'</tr>'+
	'</table>'+

	
	
	'<table class="more" >'+	
		'<tr class="more">'+
			'<td class="column16"><label>Description</label></td>'+
			'<td td class="column17"><textarea class="des" style=" background-color:#e6e6e6b3;" placeholder="<?php echo $row['description'];?>" readonly ></textarea></td>'+
		'</tr>'+

		'<tr class="more">'+
				'<td class="column7"><label>FeedBack</label></td>'+
				'<td><form action ="update_1.php" method="post">'+
				'<textarea class="column18" name="updated"  ></textarea><br>'+
				'<input type="hidden" name="id" value="<?php echo $row['sr'];?>" required>'+
				
				
				
  
				'<select name="supers" style=" height:27px; margin-left: -100px; margin-right: 15px;">'+
					'<option value="" style="color : silver;">Select Super</option>'+
					'<option value="XCC.Ahmed.Shaaban">XCC.Ahmed.Shaaban</option>'+
					'<option value="XCC.Khaled.Mansour">XCC.Khaled.Mansour</option>'+
					'<option value="XCC.Mohtady.Said">XCC.Khaled.Mansour</option>'+
					'<option value="XCC.mohamed.saeed">XCC.mohamed.saeed</option>'+
					'<option value="XCC.Dalia.Sallam">XCC.Dalia.Sallam</option>'+
					'<option value="XCC.Maged.Amer">XCC.Maged.Amer</option>'+
					'<option value="XCC.Tamer.Kassem">XCC.Tamer.Kassem</option>'+
					'<option value="XCC.Dalia.ibrahim">XCC.Dalia.ibrahim</option>'+
					'<option value="XCC.Essam.Embarak">XCC.Essam.Embarak</option>'+
					'<option value="XCC.alaa.elashmawy">XCC.alaa.elashmawy</option>'+
					'<option value="XCC.Alia.Elgohary">XCC.Alia.Elgohary</option>'+
					'<option value="XCC.Ahmed.hamed">XCC.Ahmed.hamed</option>'+
					'<option value="XCC.amira.wassem">XCC.amira.wassem</option>'+
					'<option value="XCC.David.Soliman">XCC.David.Soliman</option>'+
					'<option value="XCC.Hossam.Hegazy">XCC.Hossam.Hegazy</option>'+
					'<option value="XCC.mohamed.ismail">XCC.mohamed.ismail</option>'+
					'<option value="XCC.Karim.Ibrahim">XCC.Karim.Ibrahim</option>'+
					'<option value="XCC.Mayada.ELDesouky">XCC.Mayada.ELDesouky</option>'+
					'<option value="XCC.Hatem.AbdelAal">XCC.Hatem.AbdelAal</option>'+
					'<option value="XCC.Mohamed.Hosny ">XCC.Mohamed.Hosny </option>'+
					'<option value="XCC.Ahmed.Atteya">XCC.Ahmed.Atteya</option>'+
					'<option value="XCC.Ghada.Mohamed">XCC.Ghada.Mohamed</option>'+
					'<option value="XCC.Abdel.Hamed">XCC.Abdel.Hamed</option>'+
					'<option value="XCC.Islam.AbdelAziz">XCC.Islam.AbdelAziz</option>'+
					'<option value="XCC.mohamed.morsy">XCC.mohamed.morsy</option>'+
					'<option value="XCC.mostafa.magdy">XCC.mostafa.magdy</option>'+
					'<option value="XCC.sabry.elkomaty">XCC.sabry.elkomaty</option>'+
					'<option value="XCC.mahmoud.elaioty">XCC.mahmoud.elaioty</option>'+
					'<option value="XCC.mohamed.hosny">XCC.mohamed.hosny</option>'+
					
					'</select>'+
					
				'<input type="submit" class="submit" value="Assign" name ="assign" style=" margin-top: 10px;">'+
				'<input type="submit" class="cancel" value="Cancel" name="cancel" style="margin-left: 30px; margin-right: 30px;" formnovalidate>'+
				'<input type="submit" class="reject" value="Suspend" name="suspend" formnovalidate >'+
								   
				'</form></td>'+
		'</tr>'+
	'</table>'+
'</div>';
</script>

		
	
            <?php
			
		} else if($row['status'] == "Suspend" and $super == true){
		
		
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
				'<input type="submit" class="submit" value="Submit" name ="submit" style="margin-left: -17%; margin-top: 10px;">'+
				'<input type="submit" class="cancel" value="Cancel" name="cancel" style="margin-left: 30px; margin-right: 30px;" formnovalidate>'+
				'<input type="submit" class="reject" value="Reject" name="reject" >'+
								   
				'</form></td>'+
		'</tr>'+
	'</table>'+
'</div>';
</script>

<?php	
        } else if ( $row['status'] == "Pending" and $row['created_by'] == $user){
		
		
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
                
		'<td><label>Created BY</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['created_by'];?></span></div></td>'+
		
		'<td><label>Assign To</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['assign_to'];?></span></div></td>'+
                
		'<td><label>SLA</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['sla'];?></span></div></td>'+
	'</tr>'+	
	
		
		'<td><label>Status</label></td>'+
		'<td><div class="saeed" ><span><?php echo $row['status'];?></span></div></td>'+
		
		'<td><label >Handled By</label></td>'+
		'<td><div class="saeed" ><span></span></div></td>'+

		'<td><label>Handled Time</label></td>'+
		'<td><div class="saeed" ><span></span></div></td>'+
	'</tr>'+
	'</table>'+

	
	'<form action ="update.php" method="post">'+
	'<table class="more" style="margin: auto; margin-bottom: 20px; width: auto;">'+	
	
		'<tr class="more">'+
			'<td class="column16"><label>Description</label></td>'+
			
			'<td  class="column17"><textarea class="des" name="description" > <?php echo $row['description'];?></textarea></td>'+
			
		'</tr>'+

		'<tr class="more">'+
				'<td class="column7"><label>FeedBack</label></td>'+
				
				'<td><textarea class="column18" name="updated"  style=" background-color:#e6e6e6b3;"  readonly ></textarea><br>'+
				
				'<input type="hidden" name="id" value="<?php echo $row['sr'];?>">'+
				'<input type="submit" class="submit" value="Submit"   name="submit_user" style="margin-left: -17%; margin-top: 10px;">'+
				'<input type="submit" class="cancel" value="Cancel"   name="cancel" style="margin-left: 30px; margin-right: 30px;">'+
				
				'</td>'+
				
			
				
		'</tr>'+
			
	'</table>'+
	'</form>'+
'</div>';
</script>

<?php
} else {

		?>
        
        <script>
		
		
            document.getElementById("omer").innerHTML = 
    '<div class="more_color">'+                
        '<table class="more" style="margin: auto; margin-bottom: 20px; width: auto; margin-left:27px;">'+
        '<tr class="more">'+
		'<td class="column10"><label> SR </label></td>'+
		'<td class="column11"><div class="saeed"><span><?php echo $row['sr'];?><span></div></td>'+
		
		'<td class="column12"><label>Name</label></td>'+
		'<td class="column13"><div class="saeed"><span><?php echo $row['name'];?></span></div></td>'+
		'<td class="column14"><label>Date</label></td>'+
		'<td class="column15"><div class="saeed"><span><?php echo $row['created_date'];?></span></div></td>'+
	'</tr>'+	
	
	
	'<tr class="more">'+
		'<td><label>Dial</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['dial'];?></span></div></td>'+
                
		'<td><label>Created BY</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['created_by'];?></span></div></td>'+
                
		'<td><label>SLA</label></td>'+
		'<td><div class="saeed"><span><?php echo $row['sla'];?></span></div></td>'+
	'</tr>'+	
	
	'<tr class="more">'+
		
		
		'<td><label style="min-width:95px; margin-left: -120px;">Status</label></td>'+
		'<td><div class="saeed" style="margin-left: -385px; min-width:95px;"><span><?php echo $row['status'];?></span></div></td>'+
		
		'<td><label style="margin-left:-590px;">Handled By</label></td>'+
		'<td><div class="saeed" style="margin-left: -595px;"><span><?php echo $row['handled_by'];?></span></div></td>'+

		'<td><label style="margin-left:-520px; ">Handled Time</label></td>'+
		'<td><div class="saeed" style="margin-left: -295px; min-width: 165px;"><span><?php echo $row['handled_time'];?></span></div></td>'+
	'</tr>'+
	'</table>'+

	
	
	'<table class="more" style="margin: auto; margin-bottom: 20px; width: auto;">'+	
		'<tr class="more">'+
			'<td class="column16"><label>Description</label></td>'+
			'<td class="column17"><textarea  style=" background-color:#e6e6e6b3;" class="des" placeholder="<?php echo $row['description'];?>" readonly ></textarea></td>'+
		'</tr>'+

		'<tr class="more">'+
				'<td class="column7"> <label> FeedBack </label> </td>'+
				'<td><form action ="update.php" method="post">'+
				'<textarea id="textarea" style=" background-color:#e6e6e6b3;" class="column18" placeholder="<?php echo $row['feedback']; ?>" readonly ></textarea><br>'+
				'<input class="close" type="submit" name="close" value="Close" >'+
								   
				'</form></td>'+
		'</tr>'+
		
	'</table>'+
    '</div>';    
	
</script>
       
	
<?php

}
}
}
mysqli_close($connt);

?>
