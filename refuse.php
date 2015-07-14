<?php
include 'daconnect.php';
$name=$_POST['name'];
$sql="UPDATE `hospital`.`order` SET `state` = '-1' WHERE `order`.`s_name` = '".$name."'";
$q=mysqli_query($con, $sql);
if(mysqli_affected_rows($con)>0){
	echo "Yes";
}