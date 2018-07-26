<?php
session_start();
$uname=$_SESSION['username'];
include("connect.php");
$res=mysql_query("select * from InBox where Receiver='$uname'");
?>
<br />
<table border="2" align="center" cellpadding="20" cellspacing="5">
<tr>
<th>From</th>
<th>Subject</th>
<th>Message</th>
<th>Date & Time</th>
</tr>
<?php
while($row=mysql_fetch_array($res))
{
 echo "<tr><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
}
echo "</table>";
?>