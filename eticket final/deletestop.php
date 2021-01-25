<?php
include('DatabaseCon.php');
	$db=new DatabaseCon();
    $id=$_GET['stid'];
	 $bid=$_GET['bid'];
	$sql="delete from tbl_stop where stid='$id'";
	$db->insertQuery($sql);
	
	echo "<script>alert('sucess');window.location='addbusstop.php?bid=".$bid."';</script>";
?>