<?php
include 'daconnect.php';
$name=$_POST['name'];
$passw=$_POST['password'];
$q=mysqli_query($con, "SELECT * FROM user where u_name='".$name."'"."and u_pass='".$passw."'");
if ($e=mysqli_fetch_row($q)) {
	print_r("Yes");
}
else {
	print_r("sorry");
}