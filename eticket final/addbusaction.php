<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();

$cid=$_SESSION['uid'];
$bre=$_GET['br'];
$src=$_GET['so'];
$dest=$_GET['de'];
$seatc=$_GET['sc'];
$bust=$_GET['bt'];

$sql="select bregno from tbl_bus where bregno='$bre'";
$rs=$db->SelectData($sql);
if(mysql_num_rows($rs) > 0)
{
	echo "<script>alert('This bus with reg no: $bre is already registered update on shedule'); window.location='addbus.php';</script>";
} else if($src==$dest)
{
	echo "<script>alert('Source and destination are same'); window.location='addbus.php';</script>";
} else
{
$sql="insert into tbl_bus(bregno,src,dest,seat_capacity,bus_type,cid)
	  values('$bre','$src','$dest','$seatc','$bust',$cid)";
$db->insertQuery($sql);
echo "<script>alert('sucess');window.location='addbus.php';</script>";
}
?>