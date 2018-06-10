<?php
session_start();
if(empty($_SESSION['username'])){
?>
<script>
window.location.href='../../../index.php' 
</script>
<?php
}

include_once'../../style/style.php';
include_once'../../style/header.php';
include_once'../../style/table_style.php';
    include'../index.php';
    
    error_reporting(0);
    
// below variables form form
$name = $_POST['name'];
$dial = $_POST['dial'];
$des = $_POST['des'];
$bss = $_POST['bss'];
$submit = $_POST['submit'];
$cancel = $_POST['cancel'];


include'../../config/connect.php';



$cr = $_SESSION['username'];// gloabla variable to check user name 
$super = $_SESSION['super']; // global variable for super

$time = date("d/m/y - h:i A ", strtotime('+1 hour'));
$cur_time = date("d/m/y - h:i A ");
$date = date('y-m-d');

if ($submit){ 	
    
		$sql = "INSERT INTO re_srs (sr, dial, created_date, status, name, bss_sr, description, created_by, handled_by, sla, feedback, handled_time , date) VALUES (NULL, '$dial', '$cur_time', 'Pending' , '$name', '$bss', '$des', '$cr', '', '$time' , '', '','$date')";




	} else if ($cancel && $super == true){ 
			?>
			<script>
				window.location.href='sv.php'
			</script>
			<?php

	} else {
				?>
					<script>
						window.location.href='query.php'
					</script>
				<?php
	}

// below code to make sure the new submited created seccessfuly

if ($connt->query($sql) === TRUE){ // case to excute the update to data base 

		if($super == true ){ // if super 

		?>
			<script>
			  document.getElementById("omer").innerHTML=
			  '<div class="result">Successfully </div>' ;
				function redirect(){
					window.location.href='sv.php'
				 }                      
			 setTimeout(redirect, 1000);

			</script> 
		<?php 
		} else if($super == false) { //if false will driect to agent view
			?>

				<script>												 
				 document.getElementById("omer").innerHTML=
				  '<div class="result">Successfully </div>' ;
					 function redirect(){
						 window.location.href='query.php'
					 }                      
				 setTimeout(redirect, 1000);
				</script> 
			<?php 
			 
		}else {
		echo "error : " . $sql . $connt->error ;	
	}


}


/*

if ($connt->query($sql) === TRUE && $super == true ){ // if true will driect to sv page 
     ?>
<script>
                                 
  document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='sv.php'
     }                      
 setTimeout(redirect, 1000);

</script> <?php 
 
   
            
    } else if ($connt->query($sql) === true && $super == false ){ //if true will driect to agent view
			?>

<script>
                                 
 document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='query.php'
     }                      
 setTimeout(redirect, 1000);

</script> <?php 
 
}   else {
    
    echo "error : " . $sql . $connt->error ;
    
}
*/
mysqli_close($connt);

?>
