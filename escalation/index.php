<?php 

 $log_name = $_SESSION['username'];
 ?>

<!doctype html>
<html>
<head>
    

<!--
<script src="java.js" > </scrript>
-->
<title> Escalation</title>
<link rel="shortcut icon" href="../../style/icon.png" />
<script src="sorttable.js"></script>
</head>

<body>
 
   
<div class="container"> <!-- this div it's main -->
	<div class="header"> <!-- div for header telcom egypt -->
            
		<span class="headtext">telecom<span class="bold">egypt</span></span>
                <div id="welcom_user" class="welcom_user" style="color:white; float:right; margin-right: 70px; line-height: 20px; font-size: 14px;">
                    <!--
                    <span class="drbutton" > Welcome <?php echo $log_name;?></span>
                    <div class="drcontact" >
                        <a href="" >Change Password</a>
                        <a href="">Log Out</a>
                    </div>
                -->
                
                <div class="dropdown">
                    <button class="dropbtn">Welcome <?php echo $log_name;?> &#x25BE;</button>
                    <div class="dropdown-content">
                        <a href="../../config/change_pass.php">Change Password</a>
                        <a href="../../config/logout.php">Log Out</a>
                    </div>
                </div>
                
                
                </div>
	</div> 
	<div class="menu"> <!-- div for refund & esclation -->
		<div class="refund">
                    <a href="../../refund/config/redirect_page.php">compensation </a>
		</div>
		<div class="escalation">
                    <a class="active" href="redirect_page.php">escalation </a>
		</div>
		
	</div>


	<div class="search"> <!-- div for search & new button -->
            <form action="query.php" method="post" >
			<input type="text" name="search" id="searchfield" placeholder="Search.."> 
                        
                        <input type="submit" name="se" value="Search" class="button"> 
                    </form>
			<button class="onclick" onclick="saeed()">New </button>
			<!-- this S.V view-->
                        
			<div id="right">
				
			</div>
                        
		</div>
		<div id="omer">
		
		</div>
		
	
	<div id="declare"> <!-- code to explain the number of tt-->
	<!-- S.V view -->
	
		
		
	</div>
	<div>
		<table id="query" class="sortable" >
			<thead>
				<tr>
					<th class="column1">SR &#x25BE;</th>
					<th class="column2">Dial &#x25BE;</th>
					<th class="column3">Created Date &#x25BE;</th>
					<th class="column4">Status &#x25BE;</th>
					<th class="column5">Created by &#x25BE; </th>
					<th class="column6">Handle By &#x25BE;</th>
					<th class="column7">SLA &#x25BE;</th>
					<th class="column7">Assign To &#x25BE;</th>
                    <th class="column8">Handled Time &#x25BE;</th>
				</tr>
			</thead>
		
			
				
	
</div>
</div>



<script>

function saeed(){
    document.getElementById("omer").innerHTML = 
'<div class="new">'+           
'<form action="create.php" method="post" class="form-style-7">'+
	'<ul style="display: inline-flex;">'+
		'<li style="margin-right: 196px;">'+
			'<label for="name">Cst Name</label>'+
			'<input type="text" name="name" maxlength="30" required >'+
			'<span>Please write Name Here</span>'+
			
			
			
		'</li>'+
		
		
		
		'<li style="margin-right: 196px;">'+
			'<label for="dial">Dial NO</label>'+
			'<input type="text" name="dial" maxlength="12" pattern="[0-9]+" title="please write number only" required >'+
			'<span>Write A contact Number</span>'+
		'</li>'+
		
		'<li style="font-size: 13px;">'+
			'<label for="name">Escalation Type</label>'+
			'<input type="radio" value="On Spot" style="margin-left: -100px;" name="type" required> On Spot '+
			'<input type="radio" value="Not on Spot" style="margin-left: 30px; margin-bottom: 9px; margin-top: 7px;" name="type" > Not On Spot '+
			
			
			
			'<span>Please write Type Here</span>'+
			
			
			
		'</li>'+
		
		
		
	'</ul>'+
	'<ul class="new">'+
		'<li>'+
			'<label for="bio">Description</label>'+
			'<textarea name="des" onkeyup="adjust_textarea(this)" required >'+
			'</textarea>'+
			'<span>Write full Description</span>'+
		'</li>'+
		'<li>'+
			'<input type="submit" class="submit" value="Submit" name="submit">'+
                        
                       
			'<input type="submit" class="cancel" value="Cancel" name="cancel" formnovalidate >'+
                      
		'</li>'+
	'</ul>'+ 
	'</form>'+
'</div>';

        
        
};

</script>





</body>
</html>