<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();

$cid=$_SESSION['uid'];
$fn=$_GET['fn'];
$src=$_GET['so'];
$dest=$_GET['de'];
$fcs=$_GET['fcs'];
$fct=$_GET['fct'];
$bcs=$_GET['bcs'];
$bct=$_GET['bct'];
$ecs=$_GET['ecs'];
$ect=$_GET['ect'];


$sql="select fname from tbl_flight where fname='$fn'";
$rs=$db->SelectData($sql);
if(mysql_num_rows($rs) > 0)
{
	echo "<script>alert('This Flight $fn is already registered Change on shedule'); window.location='addflight.php';</script>";
} else if($src==$dest)
{
	echo "<script>alert('source and destination are same'); window.location='addflight.php';</script>";
}else
{
	$sql="insert into tbl_flight(fname,fsrc,fdest,fcseat,fcticket,bcseat,bcticket,ecseat,ecticket,cid)
		values('$fn','$src','$dest',$fcs,$fct,$bcs,$bct,$ecs,$ect,$cid)";
	$db->insertQuery($sql);
	echo "<script>alert('sucess');window.location='addflight.php';</script>";
}
?>