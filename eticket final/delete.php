<?php

$id=$_GET['bid'];
$mod=$_GET['mod'];
if($mod=='fp')
{
	$sql="delete from tbl_buspassenger where fpid='$id'";
	updateQuery($sql);
	echo "<script>alert('sucess');window.location='buspassenger.php?bid=".$_GET['bkid']."';</script>";
}