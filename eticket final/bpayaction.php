<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$bno=$_GET['bno'];

$bid=$_GET['bid'];
$amt=$_GET['amt'];

$sql="update tbl_bookbus set amount=$amt where bkid=$bno";
$db->insertQuery($sql);

$s="select count(*) as cnt from tbl_buspassenger where bkid=$bno";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
echo $cnt=$row['cnt'];

$s1="select bnot from tbl_shedule where bid=$bid";
$rs1=$db->selectData($s1);
$row1=mysql_fetch_array($rs1);
$cnt1=$row1['bnot'];

echo $not=$cnt1-$cnt;

$sql="update tbl_shedule set bnot=$not where bid=$bid";
$db->insertQuery($sql);


echo "<script>alert('Passenger Added');window.location='custhome.php';</script>";
?>