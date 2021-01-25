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
            <h1 class="touch_text">ADD PASSENGER</h1>
        </div>
    </div>

     <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="input_main">
                       <div class="container">


<?php include('DatabaseCon.php');
	$db=new DatabaseCon();
	$bkid=$_GET['bkid'];
	$bid=$_GET['bid'];
	$s="select * from tbl_buspassenger where bkid=".$bkid;
	?>

<form action='addpassaction.php'method="get">


<tr> <th>passenger name</th> <td> <input type="text" name="pn" required class="email-bt" > </td> </tr>


<tr> <th>gender<br/></th><td>male <input type="radio" name="gen" value="male" required> female<input type="radio" name="gen" value="female"> </td> </tr>
	
	
	
	
	

<tr> <th><BR/>Age</th> <td><input type="number" min="0" max="112" name="age" required class="email-bt"></td> </tr>
	
	
	
<tr> <th>phone number</th> <td><input type="text" name="ph" maxlength="10"required class="email-bt"></td> </tr>
<input type="hidden" name="bid" value="<?php echo $bid ?>">

<tr><th></th><td><input type="submit" value="ADD" style="background: #ce4109;
    border: none;
    color: #fff;
    width: 150px;
    height: 50px;
    border-radius: 5px;
    font-size: 22px;"></td></tr>
</form>        </div>
                </div>
				</DIV>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="input_main">
                       <div class="container">
                          
						<table border="1" style="width:100%;text-align:center;color:black">
<tr>
<th>passenger name</th>
<th>gender</th>
<th>Age</th>
<th>Phone number</th>
</tr>
<?php
	$rs=$db->selectData($s);
	while($row=mysql_fetch_array($rs)){
		?>
		<tr>
		<td><?php echo $row['pname']; ?> </td>
		<td><?php echo $row['gender'];?> </td>
		<td><?php echo $row['age']; ?> </td>
		<td><?php echo $row['phno']; $bpid=$row['bpid']; ?> </td>
		<th> <a href="deleteflpass.php?bpid=<?php echo $row['bpid'] ?>&zid=<?php echo $row['bkid'] ?>&mod=bpa&bid=<?php echo $bid; ?>" style="color:red">Delete</a></th>
			</tr>
	<?php } ?>
	
</table> <a href="<?php if(isset($bpid)){
		echo "buspaycalaction.php?bkid=".$bkid."&bid=".$bid; } else {
		echo "#";}?>" style="color:green">PAY HERE for Booking Confirmation</a> </div>
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

