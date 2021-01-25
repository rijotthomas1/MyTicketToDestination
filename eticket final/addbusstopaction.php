<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$bid=$_GET['bid'];
$src=$_GET['so'];
$stop=$_GET['sn'];
$ticketp=$_GET['tp'];
if(isset($bid)){
$sql="insert into tbl_stop(bid,src,stop,tprice)
	  values('$bid','$src','$stop','$ticketp')";
$db->insertQuery($sql);
echo "<script>alert('sucess'); window.location='addbusstop.php?bid=".$bid."';</script>";
} else
{
	echo "<script>alert('failed');</script>";
}
?>