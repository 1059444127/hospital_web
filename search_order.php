<?php
include 'daconnect.php';
$name=$_POST['seller_name'];
// $name="骨科";
$sql="SELECT  * FROM `order` WHERE `d_id` =(SELECT d_id  FROM `department` WHERE `d_name` LIKE '".$name."') and `state`=0";
$q1=mysqli_query($con, $sql);

while ($e=mysqli_fetch_assoc($q1)){

	$a[]=$e;
}

echo json_encode($a);