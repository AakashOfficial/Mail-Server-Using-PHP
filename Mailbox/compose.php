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
