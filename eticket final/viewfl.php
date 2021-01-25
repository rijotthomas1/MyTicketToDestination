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
                                <a class="nav-link" href="custhome.php">HOME<span class="sr-only">(current)</span></a> </li>
                               
								<li class="nav-item">
                                <a class="nav-link" href="uviewcom.php">TRAVELS</a></li>

<li class="nav-item">
                                <a class="nav-link" href="vfbook.php">FLIGHT BOOKINGS</a></li>

<li class="nav-item">
                                <a class="nav-link" href="vbbook.php">BUS BOOKINGS</a></li>
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
            <h1 class="touch_text">PACKAGE LIST</h1>
        </div>
    </div>

    <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                          <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="input_main">
                       <div class="container">
                          
						<table border="1" style="width:100%;text-align:center;color:black">


<tr>
<th>Flight Name</th>
<th>Source</th>
<th>destination</th>
<th>First class seat</th>
<th>First class Ticket price</th>
<th>Buissness class seat</th>
<th>Buissness class Ticket price</th>
<th>economy class seat</th>
<th>economy class Ticket price</th>
</tr>
<?php include('DatabaseCon.php');
	$db=new DatabaseCon();
	$cid=$_GET['cid'];
	$s="select * from tbl_flight where cid=$cid";
	$rs=$db->selectData($s);
	while($row=mysql_fetch_array($rs)){
		?>
		<tr>
		<td><?php echo $row['fname']; ?> </td>
		<td><?php echo $row['fsrc']; ?> </td>
		<td><?php echo $row['fdest']; ?> </td>
		<td><?php echo $row['fcseat']; ?> </td>
		<td><?php echo $row['fcticket']; ?> </td>
		<td><?php echo $row['bcticket']; ?> </td>
		<td><?php echo $row['bcticket']; ?> </td>
		<td><?php echo $row['ecseat']; ?> </td>
		<td><?php echo $row['ecticket']; ?> </td>
		<tH><a href="bookflight.php?bid=<?php echo $row['fid']; ?>" style="color:green">Book</a></tH>
		</tr>
	
	<?php } ?>
	</table></div>
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

