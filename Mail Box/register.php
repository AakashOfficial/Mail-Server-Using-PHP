<!DOCTYPE html>
<head>
<title>Mail Box</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
   <div id="mainBody">
	  <div id="wrapper">
	      <div id="header">  
		      <div>
			    <h1><i>mail</i><font size="+4">Box</font></h1>
			  </div>
		   </div>
		  <div id="content">
		       <div class="content"> 
			    Contact Us
			   </div>
			   <div class="right">   
			     
			  <form action="" method="post" > 
				<table><br /> <br />
				  <tr>
					<td colspan="2"> <h2>&nbsp; &nbsp; &nbsp; &nbsp; Enter Your Details</h2></td>
				   </tr>
				   <tr>
				     <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Enter First Name &nbsp; &nbsp; &nbsp;</td>
					 <td><input type="text" name="first_name" required /> </td>
				   </tr>
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Enter Last Name &nbsp; &nbsp; &nbsp;</td>
					  <td><input type="text" name="last_name" required /></td>
				   </tr>
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Choose Your Username  &nbsp; &nbsp; &nbsp; </td>
					  <td><input type="text" name="username" required /></td>
				   </tr>
				   <tr>
					   <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Create A Password &nbsp; &nbsp; &nbsp; </td>
					   <td><input type="password" name="password" required /></td>
				   </tr>	 
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Confirm Your Password &nbsp; &nbsp; &nbsp; &nbsp; </td>
					  <td><input type="password" name="con_password" required /></td>
				   </tr>
				   <tr>
				       <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Birthday &nbsp; &nbsp; &nbsp;</td>
					   <td> <input type="date" name="dob" required /></td>
				   </tr>						 
				   <tr>
					    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Gender &nbsp; &nbsp; &nbsp; </td>
						<td><input type="radio" name="gender" value="Male" required />Male
						    <input type="radio" name="gender" value="Female" required />Female</td>
				   </tr>
				   <tr>
				       <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mobile Phone &nbsp; &nbsp; &nbsp;</td>
					   <td> <input type="text" name="mobile" required /></td>
				   </tr>	
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Country</td>
					  <td><select name="country">
                          <option>India</option> 
                          <option>Nepal</option> 
                          <option>Japan</option> 
                          <option>Russia</option> 
						  <option>England</option>   
                          </select>
					  </td>
				   </tr>  
				   <tr>
				      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" name="registerbtn" value="Create Account"  height="40px" width="60px" /></td>
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
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$passwordConfirm = $_POST['con_password'];
$date_of_birth = $_POST['dob'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];

$con = mysqli_connect("localhost","root","") or die("Not connected to mysql database");
  $c = "create database emailserver";
  $res = mysqli_query($con,$c);

  $db = mysqli_select_db($con,"emailserver");

  $c = "create table employee(firstname varchar(30),lastname varchar(30),username varchar(30),password varchar(30),dob date,gender varchar(6),mob varchar(20),country varchar(30))";
  $res = mysqli_query($con,$c);

if($_POST['registerbtn']){
  if(empty($firstname) || empty($lastname) || empty($username) || empty($password) || empty($date_of_birth) || empty($gender) || empty($mobile) || empty($country)){
     echo "<script> alert('All the Fields Are Not Filled. Please Fill and Try Again Later');</script>";
  }else{
     if($password === $passwordConfirm){
     $insert_Query = "insert into employee values('$firstname','$lastname','$username','$password','$date_of_birth','$gender','$mobile','$country')";
	 $res = mysqli_query($con,$insert_Query);
	 echo "<script>alert('Record Inserted');</script>";
	 } else{
	   echo "<script>alert('Password and Confirm is Not Same');</script>";
	 }
  }
}
?>