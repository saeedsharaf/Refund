<style type="text/css" >
body{
margin:0px;
}

/* below code for heading */
.header{
background-color:#36304a;
height:45px;
width: 100% ;
min-width: 1366px;

}

.headtext{
color:white;
font-size:25px;
padding:1px;
margin-left: 30px;
font-family:"Helvetica","Myriad","Arial";
}

.bold{
font-weight:bold;
font-size:30px;

}
 
/* below code for menu */
.menu{
display:flex;
box-sizing: border-box; 
margin-bottom: 10px;
}

a{
text-decoration: none;
padding: 5px;

}

a:hover, a.selected{
color: red;
border-bottom: 1px solid red;

}

a:active{
color: red;
}


.active{
color : red;
border-bottom: 1px solid red;
box-shadow: 0px 11px 13px -8px #d63939;
}

.refund, .escalation{
width: 170px;
height:40px;
text-align:center;
margin: 10px;
margin-left:5px;
font-size:19px;
border-right: 1px solid black;
text-transform: capitalize;

}

/* sv submit style */
/*
.svsub input{
    
        height:30px;
        width: 90px;
        
    }
    
    .svsub{
        margin-bottom: 10px;
    }   
    textarea{
            
    height: 90px;
    margin-bottom: 10px;
    width: 80%;
    resize: none;
    }


/* below code for new */
.form-style-7{
	max-width:1150px;
	/*
    
	margin-left:50px;
	*/
    margin:0px auto;
	
    background:#fff;
    border-radius:2px;
    padding:20px;
    font-family: Georgia, "Times New Roman", Times, serif;
}


.form-style-7 ul{
    list-style:none;
    padding:0;
    margin:0;  
	display : inline-block;

}

.form-style-7 li{
    display: block;
    padding: 9px;
    border:1px solid #a6a6a6;
    margin-bottom: 25px;
    border-radius: 3px;
	
}

.form-style-7 .new li:last-child{
    border:none;
    margin-bottom: 0px;
    text-align: center;
	
}

.form-style-7 li > label{
    display: block;
		
    float: left;
    margin-top: -19px;
    background: #FFFFFF;
    height: 14px;
    padding: 2px 5px 2px 5px;
    color: #737373;
    font-size: 14px;
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
}

.form-style-7 input[type="text"],
.form-style-7 textarea,
.form-style-7 select 

{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    display: block;
    outline: none;
    border: none;
    height: 25px;
    line-height: 25px;
    font-size: 14px;
    padding: 0;
    font-family: Georgia, "Times New Roman", Times, serif;
}

.form-style-7 li > span{
    background: #e6e6e6;
    display: block;
    padding: 3px;
    margin: 0 -9px -9px -9px;
    text-align: center;
    color: #595959;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;
	
}

.form-style-7 textarea{
    resize:none;
	
	height : 100px;
}

.form-style-7 input[type="submit"].submit
{
     border: none;
    color: white;
    padding: 6px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
    margin: auto;
    border-radius: 6px;
    background-color: #42b52bdb;
    margin-right: 50px;
	
}

.form-style-7 input[type="submit"].submit:hover
{
    background-color: #3a9e25;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	
}
       


ul.new{
margin-top:20px;
width:100%;

}

/* below code for search */
.search {
display : flex;
 box-sizing: border-box;
min-width: 1366px;

width: 100%;
/*
margin-bottom: 16px;
*/
}

.search input[type=text]{

margin-left:70px;
height:25px;
width:150px;
margin-right: 20px;
border: 2px solid gray;
 border-radius: 6px;
 padding-left: 7px;
 outline: none;
}

input[type=button], button{

width: 80px;
height:25px;

}

.button{
margin-right: 15px;
    width: 80px;
    height: 25px;
}



/* date right div */


#right{
width: 33%;
margin-left: 35%;
}

/* new assign SR's*/


/*
code for no result
*/
.result{
        height: 50px;
        background-color: #dadada91;
        width : 90%;
        margin: auto;
        border-radius: 10px;
    text-align: center;
    font-size: 17px;
    line-height: 50px;
}

/* code for number of TT */
#declare{
float:right;
margin-right:50px;
margin-bottom:5px;
text-transform:capitalize;

}

/*        style for query in sv.php  */


.query input[type=date]{
    margin-right: 10px;
    margin-left: 10px;
    height: 20px;
    font-size: 12px;
    width: 120px;
    margin-top: 10px;
}

input.query{
    
     border: none;
    color: white;
    padding: 6px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    float: right;
    border-radius: 6px;
    margin-left: 20px;
    margin-right: 31px;
    margin-bottom: 15px;
    background-color: #2589c1;
}

input.query:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    background-color: #255ec1;
}

/* style for search button && new */
input[type=submit].button{
     border: none;
    color: white;
    
    text-align: center;
    text-decoration: none;
    display: inline-block;
  
    
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    float: right;
    border-radius: 3px;
   
    background-color: #5f25c1c2;
}

input.button[type=submit]:hover{
    transform: rotateX(360deg);
    
}


button.onclick{
     border: none;
    color: white;
    text-align: center;
    
    background-color: #ff4081;
    border-radius: 3px;
}

button.onclick:hover{
   padding-right: 1px;
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
