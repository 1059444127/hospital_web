<?php
include 'daconnect.php';
$time=$_POST['time'];
if ($time=='all'){
$sql="SELECT * FROM `order`,`department` where department.d_id=order.d_id ORDER BY abs(DATEDIFF(DATE_FORMAT(now(),'%Y-%m-%d'),time))";
$q1=mysqli_query($con, $sql);

while ($e=mysqli_fetch_assoc($q1)){

	$a[]=$e;
}
}
if ($time=='now') {
	$sql="SELECT * FROM `order`,`department`,`doctor` where DATEDIFF(DATE_FORMAT(now(),'%Y-%m-%d'),time)=0 and department.d_id=order.d_id and order.dc_id=doctor.dc_id";
	$q1=mysqli_query($con, $sql);
	
	while ($e=mysqli_fetch_assoc($q1)){
	
		$a[]=$e;
	}
}
echo json_encode($a);