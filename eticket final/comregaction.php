<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$name=$_GET['nm'];
$addr=$_GET['add'];
$phn=$_GET['ph'];
$email=$_GET['em'];
$on=$_GET['on'];
$lic=$_GET['li'];
$oe=$_GET['oe'];
$op=$_GET['op'];
$pass=$_GET['passwrd'];

$sql="select uname from tbl_login where uname='$email'";
$rs=$db->SelectData($sql);
if(mysql_num_rows($rs) > 0)
{
	echo "<script>alert('This $email is already registered'); window.location='comreg.php';</script>";
} else
{
	
	$sql="insert into company(name,address,phone,email,licence_no,owner_name,owner_email,owner_phone)
			values('$name','$addr','$phn','$email','$lic','$on','$oe','$op')";
	$db->insertQuery($sql);

	$s="select max(cid) as cid from company";
	$rs=$db->selectData($s);
	$row=mysql_fetch_array($rs);
	$uid=$row['cid'];

	$sql1="insert into tbl_login values($uid,'$email','$pass','company')";
	$db->insertQuery($sql1);
	echo "<script>alert('sucess'); window.location='index.html';</script>";
}
?>
