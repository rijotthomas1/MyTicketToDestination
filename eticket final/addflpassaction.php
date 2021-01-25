<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$passnme=$_GET['pn'];
$gen=$_GET['gen'];
$age=$_GET['age'];
$phone=$_GET['ph'];
$nat=$_GET['nat'];
$cls=$_GET['cls'];
$sql="select * from tbl_bookflight where bkid=(select max(bkid) as bkid from tbl_bookflight)";
$rs=$db->selectData($sql);
$row=mysql_fetch_array($rs);
$bkid=$row['bkid'];
$fn=$row['fname'];

$sql="select * from tbl_flight where fname='$fn'";
$rs=$db->selectData($sql);
$row=mysql_fetch_array($rs);
if($cls=="Buissness Class")
$amt=$row['bcticket'];
else if($cls=="First Class")
$amt=$row['fcticket'];
else if($cls=="Economy")
$amt=$row['ecticket'];



$sql="insert into tbl_flpassenger(bkid,pname,gender,age,phno,nation,class,amt)
	  values('$bkid','$passnme','$gen','$age','$phone','$nat','$cls',$amt)";
$db->insertQuery($sql);

echo "<script>alert('sucess');window.location='flightpassenger.php?bid=".$bkid."';</script>";
?>