<?php
require("classes/init.php");
$session->check_user();
echo"Hi ".$_SESSION['uemailid'];
?>