<script type="text/javascript">
	function swap()
	{
	var src= document.getElemenyById("src").value;
	document.getElemenyById("src").value = document.getElemenyById("dest").value;
	document.getElemenyById("dest").value = src;
	}
	</script>
<body>
<center>
<br/>

<h1>E-Ticketing</h1>


<hr/>
<a href="uviewcom.php">View Company</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="index.php">Logout</a>
<hr/>
<h1><Center>SEARCH</h1>
<form action='#'method="get">
<table>

<tr> <td> <input type="text" id="src" name="src" required > </td>
<td> <input type="button" onclick="swap();" value="swap"></td> 
<td> <input type="text" id="dest" name="dest" required > </td></tr>
<tr><th></th><td><input type="submit" value="SEARCH"></td></tr>
</form>
</table>

<br/><br/>
</center>
</body>