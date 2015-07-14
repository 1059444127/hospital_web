<?php
include 'daconnect.php';
$s_name=$_POST['id'];
// $s_name="骨科";
$sql="SELECT count(*) FROM `order`,`department` where order.d_id=department.d_id and department.d_name LIKE '".$s_name."'";
$q=mysqli_query($con, $sql);
while ($e=mysqli_fetch_row($q)){
	$a= $e[0];
}
$sql2="SELECT count(*) FROM `order`,`department` where order.d_id=department.d_id and department.d_name LIKE '".$s_name."'and order.state=1";
$q2=mysqli_query($con, $sql2);
while ($e2=mysqli_fetch_row($q2)){
	$b= $e2[0];
}
echo $b."/".$a;
$sql_day="SELECT count(*) FROM `order`,`department` where order.d_id=department.d_id and department.d_name LIKE '".$s_name."' and order.state=1 and date_format(time,'%Y-%m')=date_format(now(),'%Y-%m')";
$q_day=mysqli_query($con, $sql_day);
while ($e_day=mysqli_fetch_row($q_day)){
	$d=$e_day[0];
}
$sql_day2="SELECT count(*) FROM `order`,`department` where order.d_id=department.d_id and department.d_name LIKE '".$s_name."'  and date_format(time,'%Y-%m')=date_format(now(),'%Y-%m')";
$q_day2=mysqli_query($con, $sql_day2);
while ($e_day2=mysqli_fetch_row($q_day2)){
	$d2=$e_day2[0];
}
echo  $d."/".$d2;