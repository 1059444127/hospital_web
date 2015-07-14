<?php
include 'daconnect.php';
$name=$_POST['name'];
$de=$_POST['de'];
// $name='张三';
$sql="UPDATE `hospital`.`order` SET `state` = '1' WHERE `order`.`s_name` = '".$name."' and d_id=(SELECT `d_id` FROM `department` WHERE `d_name` LIKE '".$de."')";
$q=mysqli_query($con, $sql);
if(mysqli_affected_rows($con)>0){
	echo "Yes";
}
