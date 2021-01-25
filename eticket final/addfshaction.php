<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$br=$_GET['fn'];
$st=$_GET['st'];
$jd=$_GET['jd'];

$s="select * from tbl_flight where fname='$br'";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);

$fnot=$row['fcseat'];
$bnot=$row['bcseat'];
$enot=$row['ecseat'];

$sql="insert into tbl_fshedule(fname,fstime,fjdate,fnot,bnot,enot)
	  values('$br','$st','$jd','$fnot','$bnot','$enot')";
$db->insertQuery($sql);
echo "<script>alert('sucess'); window.location='addflight.php';</script>";
?>