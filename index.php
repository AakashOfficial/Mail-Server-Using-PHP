<!DOCTYPE html>
<head>
<title>Mail Box</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
   <div id="mainBody">
	  <div id="wrapper">
	      <div id="header">  
		         <div class="headertext">
		         <table border="3" style="border-color:#FF0000;" align="left" width="300" cellspacing=0>
	               <tr  align="center" rowspan=4><td colspan=10>
		              <h1><i>mail</i><font size="+5" color="#FF0033">BOX</font></h1>
		           </td></tr>
                 </table>
		         </div>
			     <div id="headerlink">
			       <div id="login">
			        &nbsp; <br> <br> <br>					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="account.php"><input type="submit" name="sign in" value="Sign In" style="background-color:#CCCCCC; font-size:25px"></a>
			        </div>
			     </div>
		   </div>
		  <div id="content">
         	    <div class="content">
			         <div class="contup">
			              <img src="images/mail1.jpg" height="70px" width="150px">
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                  <font size="+3">Email by mailBOX</font>
	                 </div>
			         <div class="contdown">
					      <br><br>
						   <img src="images/mail.jpg" height="40px" width="70px">
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						   <font size="+2">Fast And Easy</font>
						   <br><br>
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                    An Useful And Efficient Email Service By 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Mailbox Faster And Early Assesible
							Emails
							
							 <br><br>
						   <img src="images/mail2.jpg" height="40px" width="70px">
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						   <font size="+2">Secured Emails</font>
						   <br><br>
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                     All Your Mail Secured With Mailbox
							 	 	 <br><br> <br><br> <br><br>
	 	                    <font color="#CC0033" size="+1">About Your Mailbox
		       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                     Create An Account
		       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                     About Us
							 </font>
	   
					 </div>
			    </div>
			   <div class="right">   
			     
			  <form action="" method="post" > 
				<table align="center" cellspacing="0"  border="0" bgcolor="#CCCCCC" width="487px" height="500px">
				<br /> <br />
				  <tr>
					<td colspan="2"> <h2>&nbsp; &nbsp; &nbsp; &nbsp; Login</h2></td>
				   </tr>
				   
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Enter Username  &nbsp; &nbsp; &nbsp; </td>
					  <td><input type="text" name="username" required /></td>
				   </tr>
				   <tr>
					   <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Enter Password &nbsp; &nbsp; &nbsp; </td>
					   <td><input type="password" name="password" required /></td>
				   </tr>	 
				   	
				  
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="login" value="Login"  height="40px" width="60px" /></td>
				   </tr>		 
				 </table>		
				</form>
					  
			   </div>
		  </div>
		  <div id="footer">   </div>
	  </div>
	</div>
</body>
</html>
<?php

if($_POST["login"])
{
session_start();
$con=mysqli_connect("localhost","root","");
mysqli_query($con,"create database emailserver");
mysqli_select_db($con,"emailserver");
 $c = "create table employee(firstname varchar(30),lastname varchar(30),username varchar(30),password varchar(30),dob date,gender varchar(6),mob varchar(20),country varchar(30))";
  $res = mysqli_query($con,$c);
$_SESSION["uname"]=$_POST['username'];
$_SESSION["upass"]=$_POST['password'];
$un = $_POST['username'];
$pa = $_POST['password'];
$q="select * from employee where username = '$un' and password = '$pa' ";
$res=mysqli_query($con,$q);
$c=mysqli_num_rows($res);
if($c!=0)
{
   header("location:account.php");
}
else
{
   echo "<h3><font face=castellar color=blue>Invalid username & password...</font></h3>";
}
}
?>