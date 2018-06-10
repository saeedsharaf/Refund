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

$super = $_SESSION['super'];

		if ($super == true){  // if user is S.V will directed to S.V page 
                ?>
            <script>window.location.href='sv.php'</script>
                <?php
            } else  { // if not will directed to user page 
						   
					?>
            <script>window.location.href='query.php'</script>
                    <?php
		} 


    
	?>
