<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
$br=$_GET['br'];
$st=$_GET['st'];
$jd=$_GET['jd'];

$s="select * from tbl_bus where bid='$br'";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
$bnot=$row['seat_capacity'];
$sql="insert into tbl_shedule(bid,stime,jdate,status,bnot)
	  values('$br','$st','$jd','Not Started','$bnot')";
$db->insertQuery($sql);
echo "<script>alert('sucess'); window.location='addbus.php';</script>";
?>