<?php
include("mySQLConnect.php");
if(isset($_POST['sending'])){
$data = mysql_real_escape_string($_POST['sending']);
if(!empty($data)){
	echo $data;
}
}
?>
