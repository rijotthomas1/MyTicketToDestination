<html>
<head>

</head>
<body>
<center>
<div style="width:500px;margin-top:150px">
<?php
include('DatabaseCon.php');
$db=new DatabaseCon();

$bkid=$_GET['bkid'];
$s="select * from tbl_bookbus where bkid=$bkid";
$rs=$db->selectData($s);
$row=mysql_fetch_array($rs);

$ss="select * from tbl_bus where bid=".$row['bid'];
$rss=$db->selectData($ss);
$rows=mysql_fetch_array($rss);
?>
<table style="width:100%;height:20%;text-align:center" border="1" >
<tr>
<th bgcolor="grey" colspan="2">Bus No</th><td colspan="2"><?php echo $rows['bregno'];?><br>  <?php echo "booking id: $bkid"; ?></td>
</tr>
<tr>
<th bgcolor="grey">Journey Date</th><td><?php echo $row['jdate'];?></td>

<?php

$s1="select * from tbl_shedule where bid='".$row['bid']."'";
$rs1=$db->selectData($s1);
$row1=mysql_fetch_array($rs1);


?>
<th bgcolor="grey">Starting Point Time </th><td><?php echo $row1['stime'];?></td>
</tr>

<tr>
<th bgcolor="grey">Source</th><td><?php echo $row['src'];?></td>

<th bgcolor="grey">Destination</th><td><?php echo $row['dest'];?></td>
</tr>

</table>
<br/>
<table style="width:100%;height:20%;text-align:center" border="1">
<tr>
<th colspan="5" bgcolor="grey">Passenger Lists</th></tr>
<tr bgcolor="grey">
<th>Passenger Name</th>
<th>Gender</th>
<th>Age</th>

<?php

$s1="select * from tbl_buspassenger where bkid='$bkid'";
$rs1=$db->selectData($s1);
while($row1=mysql_fetch_array($rs1))
{
?>
<tr>
<td><?php echo $row1['pname'];?></td>
<td><?php echo $row1['gender'];?></td>
<td><?php echo $row1['age'];?></td>

</tr>
<?php } ?>
</table>
<?php

$s1="select * from company where cid=(select cid from tbl_bus where bregno='".$rows['bregno']."')";
$rs1=$db->selectData($s1);
$row1=mysql_fetch_array($rs1);
?>
<br/>
<table style="width:100%;text-align:center">

<tr>
<th bgcolor="grey">Travels Incharge</th>
<td><?php echo $row1['name'];?></td>
</tr>
</table>
</center>
</div>
</body>
</html>