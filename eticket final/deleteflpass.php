<?php
include('DatabaseCon.php');
	$db=new DatabaseCon();
	$mod=$_GET['mod'];
	if($mod=="flpa")
	{
		$fpid=$_GET['bid'];
		$s="delete from tbl_flpassenger where fpid=".$fpid;
		$db->updateQuery($s);
		echo "<script>window.location='flightpassenger.php?bid=".$_GET['zid']."';</script>";
	} else if($mod=="bpa")
	{
		$bpid=$_GET['bpid'];
		$s="delete from tbl_buspassenger where bpid=".$bpid;
		$db->updateQuery($s);
		echo "<script>window.location='buspassenger.php?bkid=".$_GET['zid']."&bid=".$_GET['bid']."';</script>";
	} else if($mod=="debu")
	{
		$bid=$_GET['bid'];
		$s="delete from tbl_bus where bid=".$bid;
		$db->updateQuery($s);
		$s="delete from tbl_shedule where bid=".$bid;
		$db->updateQuery($s);
		$s="delete from tbl_stop where bid=".$bid;
		$db->updateQuery($s);
		echo "<script>window.location='addbus.php';</script>";
	}else if($mod=="debush")
	{
		$bid=$_GET['bid'];
		$s="delete from tbl_shedule where scid=".$bid;
		$db->updateQuery($s);
		echo "<script>window.location='addbus.php';</script>";
	} else if($mod=="defl")
	{
	$bid=$_GET['bid'];
	$s="delete from tbl_flight where fid=$bid";
	$db->updateQuery($s);
	echo "<script>window.location='addflight.php';</script>";
	}else if($mod=="decom")
	{
		$cid=$_GET['cid'];
		$s="select email from company where cid=$cid";
		$rs=$db->selectData($s);
		$row=mysql_fetch_array($rs);
		$email=$row['email'];
		$ss="delete from tbl_login where uname='$email'";
		$db->updateQuery($ss);
		$p="delete  from company where cid=$cid";
		$db->updateQuery($p);
		echo "<script>window.location='viewcom.php';</script>";
	} else if($mod=="deus")
	{
		$rid=$_GET['rid'];
		$s="select email from user where rid=$rid";
		$rs=$db->selectData($s);
		$row=mysql_fetch_array($rs);
		$email=$row['email'];
		$ss="delete from tbl_login where uname='$email'";
		$db->updateQuery($ss);
		$s="delete from user where rid=$rid";
		$db->updateQuery($s);
		echo "<script>window.location='viewuser.php';</script>";
	} else if($mod=="bcan")
	{
		$bkid=$_GET['bkid'];
		$ss="update  tbl_bookbus set amount=0 where bkid=".$bkid;
		$db->updateQuery($ss);
		echo("<script>window.location='vbbook.php';</script>");
	}else if($mod=="fcan")
	{
		$bkid=$_GET['bkid'];
		$ss="update  tbl_bookflight set amount=0 where bkid=".$bkid;
		$db->updateQuery($ss);
		echo("<script>window.location='vfbook.php';</script>");
	}
	?>