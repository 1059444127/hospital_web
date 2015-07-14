<?php
include 'daconnect.php';
 $id=$_POST['id'];
//$id=1;
$sql="SELECT count(*) FROM `order` WHERE `d_id` = '".$id."' and `state`=0";
// 		echo  $sql;
$q=mysqli_query($con, $sql);
if($e=mysqli_fetch_row($q)){
	$num=$e[0];
}
echo $num;