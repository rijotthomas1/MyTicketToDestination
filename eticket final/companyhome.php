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



                              <!-- <li class="last"><a href="#"><img src="images/search-icon.png" alt="icon"></a></li>-->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->        
    <!--banner start -->
    <div class="banner-main">
    	<div class="container">
           <div id="main_slider" class="carousel slide" data-ride="carousel">  
           <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
    		    <div class="titlepage-h1">
    	        <h1 class="bnner_title">Welcome <?php include('DatabaseCon.php');
												session_start();
												$cid=$_SESSION['uid'];
												$db=new DatabaseCon();
												$s="select * from company where cid=".$cid;
												$rs=$db->selectData($s);
												$row=mysql_fetch_array($rs);
												echo $row['name'];
												?>
												<br>
    	       </div>
    		   
        </div>
 
  </div> 
       
    </div>
</div>
</div>
<!--banner end -->
    <!--services start -->
    <div class="services_main">
    	<div class="container">
    		<div class="creative_taital">
    			<h1 class="creative_text">MY TICKET TO DESTINATION</h1>
    			<!--<p style="color: #050000; text-align: center;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infanc</p>
    		-->
    		</div>
    		   <!-- <div class="section_service_2">
    		    	<h1 class="service_text">Our Service</h1>
    		    </div>
    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><img src="images/like-icon.png"></div>
    		    					<h1 class="written_text">Written with Love</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><img src="images/fast-forword-icon.png"></div>
    		    					<h1 class="written_text">Fast Turnaround</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    		</div>
    		    	</div>
    		    </div>
    		    <div class="service_main">
    		    	<div class="container">
    		    		<div class="row">
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    					<div class="like_icon"><img src="images/design-icon.png"></div>
    		    					<h1 class="written_text">Up to Date</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    			<div class="col-md-6">
    		    				<div class="written_text">
    		    				  <div class="like_icon"><img src="images/writing-icon.png"></div>
    		    					<h1 class="written_text">Premium Content</h1>
    		    					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
    		    				</div>
    		    			</div>
    		    		</div>
    		    	</div>
    		    </div>-->
    	</div>	  
	</div>
    <!--services end -->

 

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text">© 2020 All Rights Reserved. </p>
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


