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
                                <a class="nav-link" href="index.html">HOME<span class="sr-only">(current)</span></a> </li>
                            
                             <!--   <li class="nav-item">
                                <a class="nav-link" href="service.html">SERVICES</a></li>
                               <li class="#" href="#">
      	                        <a class="nav-link" href="blog.html">BLOG</a></li> -->
                               <li class="last" href="#">
      	                        <a class="nav-link" href="login.php">LOGIN</a></li></ul>
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
            <h1 class="touch_text">USER
                 REGISTRATION</h1>
        </div>
    </div>

    <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <center>
                
                    <div class="input_main">
                       <div class="container">
                                                  
                       <form action="usrregaction.php" onsubmit="return check();" method="get">
<table>

<tr> <th>Name</th> <td> <input type="text" name="nm" id="nm" required class="email-bt"> </td> </tr>

<tr> <th>Address</th> <td><textarea  name="add" rows="6" cols="12" required class="email-bt"> </textarea> </td> </tr>

<tr> <th>phone</><td> <input type="text" name="ph" id="ph" maxlength="10" required class="email-bt"> </td> </tr>

<tr> <th>Email Id</th> <td><input type="email" name="em" required class="email-bt"> </td> </tr>

<tr> <th>Date of birth</th> <td> <input type="date"  name="da" required class="email-bt"> </td> </tr>

<tr> <th>Nationality</th> <td> <select name="nationality" required class="email-bt">
								<option value="ind">India</option>
								<option value="ban">Bangladesh</option>
								<option value="chi">China</option>
								</select>
<tr> <th>password</th><td><input type="password" name="passwrd" id="passwrd" maxlength="12" required class="email-bt"> </td> </tr>

<tr><th></th><td><input type="submit" value="Register" style="background: #ce4109;
    border: none;
    color: #fff;
    width: 150px;
    height: 50px;
    border-radius: 5px;
    font-size: 22px;"></td></tr>

</table>
</form>
                        
                       </div> 
                                 
                    </div>
                  
                      </center>  </div>
               
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
<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    function check()
    {
        if(!document.getElementById("nm").value.match(letters))
        {
              
            alert('Please input alphabet characters only,enter Company name');
            return false;
        }
        else if(!document.getElementById("ph").value.match(numbers))
        {
            alert('Please input numeric characters only,enter company phone number');
            return false;
        }
     else if(document.getElementById("passwrd").value.length<8)
        {
            alert('Enter password with minimum length of 12 characters');
            return false;
        }
        else
        {
            return true;
        }
    }

   
</script>