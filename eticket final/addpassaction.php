<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$passnme=$_GET['pn'];
$gen=$_GET['gen'];
$age=$_GET['age'];
$phone=$_GET['ph'];
$sql="select * from tbl_bookbus where bkid=(select max(bkid) from tbl_bookbus)";
$rs=$db->selectData($sql);
$row=mysql_fetch_array($rs);
$bkid=$row['bkid'];
$bid=$row['bid'];
$src=$row['src'];
$dest=$row['dest'];

$sq="select * from tbl_stop where stop='$dest' and bid=$bid";
$rs1=$db->selectData($sq);
$row1=mysql_fetch_array($rs1);
$tp=$row1['tprice'];
$sql="insert into tbl_buspassenger(bkid,pname,gender,age,phno,amt)
	  values('$bkid','$passnme','$gen','$age','$phone',$tp)";
$db->insertQuery($sql);
echo "<script>alert('success');window.location='buspassenger.php?bkid=".$bkid."&bid=".$_GET['bid']."';</script>";
?>