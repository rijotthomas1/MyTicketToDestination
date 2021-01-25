<body>
<h1><center>shedule list</h1></center>
<table border="1">
<tr>
<th>shedule id</th>
<th>bus reg no</th>
<th>start time</th>
<th>journey date</th>
<th>status</th>
</tr>
<?php include('DatabaseCon.php');
	$db=new DatabaseCon();
	$s="select * from tbl_shedule";
	$rs=$db->selectData($s);
	while($row=mysql_fetch_array($rs)){
		?>
		<tr>
		<td><?php echo $row['scid']; ?> </td>
		<td><?php echo $row['bregno']; ?> </td>
		<td><?php echo $row['stime']; ?> </td>
		<td><?php echo $row['jdate']; ?> </td>
		<td><?php echo $row['status']; ?> </td>
		</tr>
	<?php } ?>
	</table>
	</body>