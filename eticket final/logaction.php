<?php
include('DatabaseCon.php');
$db=new DatabaseCon();
session_start();
 $uname=$_GET['nm'];
 $upass=$_GET['passwrd'];
$sql="select * from tbl_login where uname='$uname' and upass='$upass'";
$rt=$db->selectQuery($sql);
  if($rt==1)
  {
  $rs=$db->selectData($sql);
  $row=mysql_fetch_array($rs);
  $utype=$row['utype'];
  $_SESSION['uid']=$row['uid'];
 
     if($utype=="admin")
	 {
		 $_SESSION['uid']='admin';
		 echo "<script>window.location='adminhome.php';</script>";
	 }
	 else if($utype=="company")
	 {
		 $sql="select cid from company where email='$uname'";
		 $rs=$db->selectData($sql);
		 $row=mysql_fetch_array($rs);
		 $_SESSION['uid']=$row['cid'];
		 echo "<script>window.location='companyhome.php';</script>";
	 }
	 else if($utype=="cust")
	 {
		 $sql="select * from user where email='$uname'";
		   $rs=$db->selectData($sql);
		$row=mysql_fetch_array($rs);
		$_SESSION['uid']=$row['rid'];
		echo "<script>window.location='custhome.php';</script>";
	 }
	 else
	 {
		echo "<script>window.location='index.html';</script>";
	 }
  }
 else
 {
	 echo "<script>alert('login failed');window.location='index.html';</script>";
 }
 ?>
	 