<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$bno=$_GET['bno'];

$amt=$_GET['amt'];

$sql="update tbl_bookflight set amount=$amt where bkid=$bno";
$db->insertQuery($sql);

$s="select fname,jdate from tbl_bookflight where bkid=$bno";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
$fn=$row['fname'];
$jd=$row['jdate'];

$s="select count(*) as cnt,class from tbl_flpassenger where bkid=$bno";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);
echo $cnt=$row['cnt'];
$class=$row['class'];

$s1="select bnot,fnot,enot from tbl_fshedule where fname='$fn' and fjdate='$jd'";
$rs1=$db->selectData($s1);
$row1=mysql_fetch_array($rs1);
$bnot=$row1['bnot'];
$fnot=$row1['fnot'];
$enot=$row1['enot'];

if($class=='Buissness Class')
{
echo $bnot=$bnot-$cnt;
$sql="update tbl_fshedule set bnot=$bnot where fname='$fn' and fjdate='$jd'";
$db->insertQuery($sql);
}
if($class=='First Class')
{
echo $fnot=$fnot-$cnt;
$sql="update tbl_fshedule set fnot=$fnot where fname='$fn' and fjdate='$jd'";
$db->insertQuery($sql);
}
if($class=='Economy')
{
echo $enot=$enot-$cnt;
$sql="update tbl_fshedule set enot=$enot where fname='$fn' and fjdate='$jd'";
$db->insertQuery($sql);
}



echo "<script>alert('booking successfull');window.location='custhome.php';</script>";
?>