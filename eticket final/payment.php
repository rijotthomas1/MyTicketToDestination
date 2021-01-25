<body>
<?php include('DatabaseCon.php');
	$db=new DatabaseCon();
	$bid=$_GET['bid'];
	$s="select bregno from tbl_bus where bid='$bid'";
	$rs=$db->selectData($s);
	$row=mysql_fetch_array($rs);
	$bregno=$row['bregno'];
	?>
<center>
<br/>

<h1>My Ticket to Destination</h1>

<hr/>
<h1><Center>payment</h1>
<form action="payaction.php" method="get">
<table>

<tr> <th>Amount</th> <td> <input type="text" name="bcn" value="<?php echo $bregno; ?> " required readonly> </td> </tr>

<tr> <th>Debit card no:</th> <td> <input type="text" name="bcn" value="<?php echo $bregno; ?> " required readonly> </td> </tr>

<tr> <th>CVV</th> <td><input type="text" name="cvv" required> </td> </tr>

<tr><th></th><td><input type="submit" value="PAY" required></td> </tr>

</table>
<input type="hidden" name="bid" value="<?php echo $bid; ?>">
</form>