<html>
<head>
<title>
MAIL FORM
</title>
</head>
<body>
<form action="" method="post">
<fieldset title="40" style="border-width:thick">
<h1>To:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select id="user" name="to"  style="width:320">
<option selected="selected" value="-1">Select a Receiver</option>
<?php include("connect.php");
$query="Select uname from register";
$result=mysql_query($query);
while($row=mysql_fetch_assoc($result))
{
echo"<option value='".$row['uname']."'>".$row['uname']."</option>";
}
?></select>
<br>
<h1>Subject:
<input type="text" size="50" name="sub">
<br>
<h1>Msg:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea name="msg" cols="15" rows="8"></textarea><br><br>
</h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="send" value="SEND" style="background-color:#6633CC">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="draft" value="SAVE TO DRAFT" style="background-color:#6633CC">

</fieldset>
</form>

</body>
</html>
<?php
session_start();
$Receiver=$_POST['to'];
$Sender=$_SESSION['username'];
$Subject=$_POST['sub'];
$Message=$_POST['msg'];
//Connection
$con = mysql_connect("localhost", "root", "");

//Selection
$db = mysql_select_db("mailbox");

if($_POST['send'])
{

//Creation of Table
/*$con="create table InBox(uid int auto_increment,Receiver varchar(100),Sender varchar(100),Subject varchar(200),Message varchar(1000),Date datetime,primary key(uid))";
$res = mysql_query($con);*/

$ins="insert into InBox (Receiver,Sender,Subject,Message)values('$Receiver','$Sender','$Subject','$Message')";
		$res = mysql_query($ins);
		echo "<script>alert('msg send');</script>";
}
session_start();
$Receiver=$_POST['to'];
$Sender=$_SESSION['username'];
$Subject=$_POST['sub'];
$Message=$_POST['msg'];
//Connection
$con = mysql_connect("localhost", "root", "");

//Selection
$db = mysql_select_db("mailbox");

if(isset($_POST['draft']))
{

//Creation of Table
/*$con="create table Draft(uid int auto_increment,Receiver varchar(100),Sender varchar(100),Subject varchar(200),Message varchar(1000),Date datetime,primary key(uid))";
$res = mysql_query($con);*/

$ins="insert into Draft (Receiver,Sender,Subject,Message)values('$Receiver','$Sender','$Subject','$Message')";
		$res = mysql_query($ins);
		echo "<script>alert('save to draft');</script>";
}
?>