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
include'../../config/connect.php';
?>


<script>/*
			document.getElementById("right").innerHTML=
			'<form class="query" action="export.php"  method ="post" >'+
			'<input type="date" data-date-format="yyyy-mm-dd" name="st_date"  required > TO'+
			'<input type="date" data-date-format="yyyy-mm-dd" name="end_date" required >';
	*/		
</script>	

<?php





?>
<script>
	document.getElementById("declare").innerHTML =
		'<form class="query" action="export.php"  method ="post" >'+
		'<input type="date" data-date-format="yyyy-mm-dd" name="st_date" style="margin-bottom: 30px; margin-right: 10px; border: 1px solid black; border-radius: 3px; height: 25px; text-align: center;" required > TO'+
		'<input type="date" data-date-format="yyyy-mm-dd" name="end_date" style="margin-bottom: 30px; margin-left: 10px; border: 1px solid black; border-radius: 3px; height: 25px; text-align: center;" required > <br>'+
		'<input type="checkbox" style="margin-top: 10px;" name="pending" value="Pending" > Pending '+
		'<input type="checkbox" style="margin-left: 20px;" name="closed" value="Closed" > Closed '+
		'<input type="checkbox" style="margin-left: 20px;" name="reject" value="Reject" > Reject '+
		'<input type="submit"  class="query" name="query" value="Query" >'+
		'</from>';// this code will print the total
</script>




 


  



