<?php
include 'daconnect.php';
$s_name=$_POST['id'];
$sql="SELECT * FROM `old_order` WHERE `s_name` LIKE '".$s_name."'";
$q=mysqli_query($con, $sql);
while ($e=mysqli_fetch_row($q)){
	echo $e[3].":   "."患者曾在".$e[1]."进行了检查"."\\n";

}