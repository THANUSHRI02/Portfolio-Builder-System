<?php
	//session_start();
	if(isset($_POST["Name"]))
	{
		$Server="localhost";
		$UserName="root";
		$Password="Thanu1611";
		$DbName="DynamicPortfolio";


		$conn=new mysqli($Server,$UserName,$Password,$DbName);

		if($conn->connect_error)
		{
			die ("error ");
		}
		$Role=$_POST["Role"];
		$Name=$_POST["Name"];
		$UserName=$_POST["UserName"];
		$Password=$_POST["Password"];
		$Email=$_POST["Email"];
		$MobileNo=$_POST["MobileNo"];
		$Image1 ="";
		$target_dir = "uploads/";
		$uploadOk=1;
			$sql="Insert into tblRegister (Role,Name,UserName,Password,Email,MobileNo,CertificatePath)values('$Role' ,'$Name','$UserName','$Password','$Email','$MobileNo','$Image1')";

		if($conn->query($sql)===TRUE)
		{
			echo "Sucessfully Registered";
		}
		else
		{
			echo "Not Inserted have some issue";
		}
	   
		$conn->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>REGISTER</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="body">

 

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto" >Dynamic<span style="color:green">Portfolio</span></a>

      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
 

  <main id="main">

    <!--==========================
      Registration  Section
    ============================-->
    <form method="Post" action="index.php"  enctype="multipart/form-data">
    <section id="about" class="wow fadeInUp">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 about-img">
              Role :
          </div>
          <div class="col-lg-6 content">
           <select name="Role" >
             <!-- <option>Admin</option> -->
              <option>User</option>
           </select>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img">
              Name :
          </div>

          <div class="col-lg-6 content">
            <input type="text" name="Name">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img">
              User Name :
          </div>
          <div class="col-lg-6 content">
            <input type="text" name="UserName">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img">
              Password :
          </div>
          <div class="col-lg-6 content">
            <input type="Password" name="Password">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img">
              E-Mail :
          </div>
          <div class="col-lg-6 content">
            <input type="E-Mail" name="Email">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img">
              Mobile No :
          </div>
          <div class="col-lg-6 content">
            <input type="text" name="MobileNo">
          </div>
        </div>
       <!--  <div class="row">
          <div class="col-lg-6 about-img">
              Upload Certificate :
          </div>
          <div class="col-lg-6 content">
            <input type="file" name="Uploadfile" >
          </div>
        </div>-->
        
        <div class="row">
          <div class="col-lg-12 about-img">
                <input type="Submit" name="Register" value="Register">
          </div>
        </div>


      </div>
    </section><!-- #Registration -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by: <a href="https://bootstrapmade.com/">A.Thanushri & R.Keerthana</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
