
<html>
<head>
<title>
WEB DESINING
</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/V_Menu.css">
</head>
<body>
<div id="mainbody">
<div id="wrapper">
<div id="header">
<img src="image/icon_2.jpg" width="200"></img></img>
<a href="logout.php"><img src="image/logout-button-purple-hi.png" align="right" width="100"></a></div>
<div id="center"><a href="barimage.bmp"></a>
<div class="left">
<ul class="menu">
   <li><a href="compose.php" target="a">Compose>></a></li>
   <li><a href="inbox.php" target="a">InBox</a></li>
   <li><a href="sent.php" target="a">SENT</a></li>
   <li><a href="draft.php" target="a">DRAFT</a></li>
   <li><a href="#"><img src="image/sdsss.png" width="180" height="60"></img></a></li>
 </ul>
</div>
<div class="contents" id="content">
<?php echo "Welcome ".$uname;?> 
<br>
<iframe name="a" height="500" width="500" src="inbox.php" scrolling="no" frameborder="0"></iframe>
</div>
</div>
<div id="footer"><p class="style12" align="center"><font size="+1"><b>© mailBOX.com 2013</b></font></p></div>
</div></div></img>
</body>
</html>

