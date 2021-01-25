<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();

$uid=$_SESSION['uid'];
$fn=$_GET['fn'];
$src=$_GET['src'];
$dest=$_GET['dest'];
$jdate=$_GET['jdate'];
$bdate= date("Y-m-d");

$sql="insert into tbl_bookflight(fname,src,dest,jdate,bdate,uid)
	  values('$fn','$src','$dest','$jdate','$bdate','$uid')";
$db->insertQuery($sql);
$sql="select max(bkid) as bkid from tbl_bookflight";
$rs=$db->selectData($sql);
$row=mysql_fetch_array($rs);
$bkid=$row['bkid'];
echo "<script>alert('sucess'); window.location='flightpassenger.php?bid=".$bkid."';</script>";
?>