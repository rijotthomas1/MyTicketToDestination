<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();

$uid=$_SESSION['uid'];
$br=$_GET['bid'];
$src=$_GET['src'];
$dest=$_GET['dest'];
$jdate=$_GET['jdate'];
$bdate= date("Y-m-d");
if($src==$dest)
{
	echo "<script>alert('both source and destination are same'); window.location='busbooking.php?bid=$br';</script>";
}else
{
$sql="insert into tbl_bookbus(bid,src,dest,jdate,bdate,uid)
	  values('$br','$src','$dest','$jdate','$bdate','$uid')";
$db->insertQuery($sql);
$sql="select max(bkid) as bkid from tbl_bookbus";
$rs=$db->selectData($sql);
$row=mysql_fetch_array($rs);
$bkid=$row['bkid'];
echo "<script>alert('sucess'); window.location='buspassenger.php?bkid=".$bkid."&bid=".$br."';</script>";
}
?>