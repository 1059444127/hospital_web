<?php
include 'daconnect.php';
$s_name=$_POST['id'];
// $s_name='张三';
$sql="SELECT * FROM `order`,`department`,`doctor` where order.d_id=department.d_id and order.s_name LIKE '".$s_name."' and doctor.dc_id=order.dc_id";
$q=mysqli_query($con, $sql);
while ($e=mysqli_fetch_row($q)){
	echo $e[5].$e[9].":".$e[12]."\\n";
	
}