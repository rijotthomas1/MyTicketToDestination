<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$name=$_GET['nm'];
$addr=$_GET['add'];
$phn=$_GET['ph'];
$email=$_GET['em'];
$nat=$_GET['nationality'];
$dob=$_GET['da'];
$pass=$_GET['passwrd'];

$sql="select uname from tbl_login where uname='$email'";
$rs=$db->SelectData($sql);
if(mysql_num_rows($rs) > 0)
{
	echo "<script>alert('This $email is already registered'); window.location='usrreg.php';</script>";
} else
{
	$sql="insert into user (name,address,phone,email,dob,nationality)
		values('$name','$addr','$phn','$email','$dob','$nat')";
	$db->insertQuery($sql);

	$s="select max(rid) as rid from user";
	$rs=$db->selectData($s);
	$row=mysql_fetch_array($rs);
	$uid=$row['rid'];

	$sql1="insert into tbl_login values($uid,'$email','$pass','cust')";
	$db->insertQuery($sql1);

	echo "<script>alert('sucess'); window.location='index.html';</script>";
}
?>
