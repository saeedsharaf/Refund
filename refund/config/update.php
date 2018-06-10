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

include'../../config/connect.php';

/*
if($connt->connect_error){
    die("connection falid" .$connt->connect_error);
} else {

    echo "connection successful" ;
}

*/

$super = $_SESSION['super'];
 $updated = $_POST['updated'];
$up_id = $_POST['id'];
$user = $_SESSION['username'];
$description = $_POST['description'];



/*
$submit = $_POST['submit'];
$reject = $_POST['reject'];
*/
$time = date("d/m/y - h:i A"); 

if ($_POST['submit']){
$sql = "UPDATE re_srs SET feedback='$updated', handled_by='$user', status='Closed', handled_time = '$time' WHERE sr = '$up_id'";

     ?>
<script>

  document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='sv.php'
     }                      
 setTimeout(redirect, 500);

</script> <?php 

} else if ($_POST['reject']){
    $sql = "UPDATE re_srs SET feedback='$updated', handled_by='$user',status='Rejected',handled_time = '$time' WHERE sr = '$up_id'";
	
	         ?>
<script>
                                 
  document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='sv.php'
     }                      
 setTimeout(redirect, 500);

</script> <?php 
       

/*
		$sql1 = "select * from re_srs where sr = '$up_id'";
		$result = $connt->query($sql1);
		$row = $result->fetch_assoc();
		
		
		$msg = 'cst dial :' . $row['dial'] . "\n"
			. 'SR : ' . $row['sr'] . "\n"
			. 'Status' . $row['status'];
			
			$mail = $row['created_by'] . '@te.eg' ;
			echo $mail;
			mail('$mail', 'test' ,$msg);
			

    */
   
}  else if($_POST['submit_user']){
		$sql = "UPDATE re_srs SET description='$description'  WHERE sr = '$up_id'";
		
	?>
<script>
 document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='query.php'
     }                      
 setTimeout(redirect, 500);

</script> <?php 



}else if ($_POST['cancel'] and $super == true){
    ?>
<script>
    window.location.href="sv.php"
    </script>
    <?php
    
    
} else if ($_POST['close'] and $super == true) { 
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
 
 if ($connt->query($sql) === true && $super == true ){ 
        ?>
<script>
                                 
  document.getElementById("omer").innerHTML=
  '<div class="result">Successfully </div>' ;
     function redirect(){
         window.location.href='sv.php'
     }                      
 setTimeout(redirect, 500);

</script> <?php

} 


    


mysqli_close($connt);

?>