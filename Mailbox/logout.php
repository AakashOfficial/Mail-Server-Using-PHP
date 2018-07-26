<?php
session_start();
//destroy session
session_destroy();
//unset cookie
setcookie("username","",time()-7200);
header("Location:index.php");
?>