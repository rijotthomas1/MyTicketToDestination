<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>MTD</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->
<body>
	<div class="header_main">
		<div class="container">
			<div class="logo"><a href="#"><img src="images/logo1.png"></a></div>
		</div>
	</div>
	</div>
	<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                       <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                                <a class="nav-link" href="companyhome.php">HOME<span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item">
                                <a class="nav-link" href="addbus.php">BUS</a></li>
                                <li class="nav-item">
                                <a class="nav-link"  href="addflight.php">FLIGHT</a></li>
                                <li class="nav-item">
                                <a class="nav-link"  href="vfbook1.php">FLIGHT BOOKINGS</a></li>
                                <li class="nav-item">
                                <a class="nav-link"  href="vbbook1.php">BUS BOOKINGS</a></li>
                                <li class="#" href="#">
      	                        <a class="nav-link" href="index.html">LOGOUT</a></li>
</ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->
    <div class="contact_main">
    <!--touch_section start -->

    <div class="touch_section">
        <div class="container">
            <h1 class="touch_text">BUS</h1>
        </div>
    </div>

    <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="input_main">
                       <div class="container">
                 
<form action="addbusaction.php">


<tr> <th>Bus Regno:</th> <td> <input type="text" name="br" required class="email-bt"> </td> </tr>

<tr> <th>Source</><td> <input type="text" name="so" required class="email-bt"> </td> </tr>

<tr> <th>Destination</th> <td><input type="text" name="de" required class="email-bt"> </td> </tr>

<tr> <th>Seat Capacity</th> <td><input type="number" min="20" max="100" name="sc" required class="email-bt"> </td> </tr>

<tr> <th>Bus Type</th> <td> <select name="bt" required class="email-bt"> 
							<option value="sleeper with A/C">Sleeper with A/c</option>
							<option value="sleeper non a/c">Sleeper non A/C</option>
							<option value="coach bus with A/c">coach bus with A/c</option>
							<option value="coach bus non A/c">coach bus non A/c</option></td> <br/></tr>

<tr><th><br/>&nbsp;</th><td><input type="submit" value="ADD" style="background: #ce4109;
    border: none;
    color: #fff;
    width: 150px;
    height: 50px;
    border-radius: 5px;
    font-size: 22px;"></td></tr>


</form>               
                    </div>
                </div>
				</DIV>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12">
                        <div class="input_main">
                       <div class="container">
                          
						<table border="1" style="width:100%;text-align:center;color:black">
<tr>
<th>Bus No:</th>
<th>Source</th>
<th>Destination</th>
<th>Seat Capacity</th>
<th>Bus Type</th>
<th colspan="3">Actions</th>
</tr>
<?php include('DatabaseCon.php');
	session_start();
	$cid=$_SESSION['uid'];
	$db=new DatabaseCon();
	$s="select * from tbl_bus where cid=".$cid;
	$rs=$db->selectData($s);
	while($row=mysql_fetch_array($rs)){
		?>
		<tr>
		<td><?php echo $row['bregno']; ?> </td>
		<td><?php echo $row['src']; ?> </td>
		<td><?php echo $row['dest']; ?> </td>
		<td><?php echo $row['seat_capacity']; ?> </td>
		<td><?php echo $row['bus_type']; ?> </td>
		<th><a href="addbusstop.php?bid=<?php echo $row['bid']; ?>&src=<?php echo $row['src']; ?>" style="color:blue"> Stops</th>
		<th><a href="shedule.php?bid=<?php echo $row['bid']; ?>" style="color:green">Schedule </th>
		<th><a href="deleteflpass.php?bid=<?php echo $row['bid']; ?>&mod=debu" style="color:red">Delete </a></th>
		</tr>
	<?php } ?>
	</table>    </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--touch_section end -->
  <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">© 2019 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

