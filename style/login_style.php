<style type="text/css">

body{
background-image: url("background.jpg") ;
background-repeat: no-repeat;
background-size: auto;
background-size: cover;
}

.container{
 display: flex;
 flex-direction: column;
 box-sizing: border-box;
 margin-left:auto;
 background-color: rgba(255, 255, 255, 0.53);
 height: 450px;
 width: 400px;
 margin-right: auto;
 margin-top: 8%;
 border-radius:5px;
 
}




img {
    display: block;
    width: 80px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 25px;
}
input[type=text]{
margin-top:20px;
margin-left:8px;
width:250px;
height:30px;
border-radius:5px;
margin-bottom:20px;
padding-left: 10px;

}


input[type=password]{
margin-top:25px;
margin-left:16px;
width:250px;
height:30px;
border-radius:5px;
margin-bottom:20px;
padding-left: 10px;

}

label{
    color:black;
    margin-left: 25px;
    font-size: 17px;
    
}

input[type=checkbox]{
margin-left:90px;
margin-bottom:20px;
font-color:#ffffff;


}

.whitecolor{
color:#ffffff;
}


input[type=submit]{
width:105px;
height:30px;
margin-left:150px;

margin-top: 20px;
}

.error{

height: 30px;
height : 30px;
width: 95%;
margin: auto;
margin-top: 30px;
border-radius: 5px;
text-align: center;
line-height: 27px;
}
/*
::placeholder{
padding: 10px;
}
*/
.saeed{
 background-color: rgba(255, 255, 255, 0.53);
width : 70%;
margin: auto;
height: 30px;
border-radius: 5px;
text-align: center;
line-height: 0px;
position: absolute;
 bottom: 10px ;
 left : 14.5%;


}

</style>


<?php
if (!$error = ""){
?>
.error{
background-color: #ff000052;
}
<?php
};


?>