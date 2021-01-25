<?php
include('DatabaseCon.php');
	$db=new DatabaseCon();
    $id=$_GET['fscid'];
	 $bid=$_GET['bid'];
    $sql="delete from tbl_fshedule where fscid='$id'";
	$db->insertQuery($sql);
	
	echo "<script>alert('sucess');window.location='fshedule.php?bid=".$bid."';</script>";
?>