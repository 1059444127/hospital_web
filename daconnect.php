<?php
$con = mysqli_connect("localhost","css","css","hospital");

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
else {
	mysqli_query($con,"set names utf8");

}


//mysql_close($con);
