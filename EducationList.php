

<?php
session_start();
$Server="localhost";
$UserName="root";
$Password="Thanu1611";
$DbName="dynamicportfolio";

$conn=new mysqli($Server,$UserName,$Password,$DbName);

if(isset($_GET["Id"]))
{
	//  -------------- Coding for file upload---------------

	$Id=$_GET["Id"];
	$Flag=$_GET["Flag"];
	$UserId=$_SESSION["UserId"];
	$OTP=rand ( 10000 , 99999 );
	$sql="Delete  from tbleducationdetails   where ID='$Id' ";
	  echo($sql);
	  if($conn->query($sql)===TRUE)
		{
									  
			echo "Deleted Successfully!! ";
			unset($_SESSION['Id']);
									 
		}
	  else
		{
			echo "Try again. Error occured";
		}
							
												  
				  
	$conn->close();


}

?>          


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Education list</title>
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

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

 

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto" >Dynamic<span style="color:green">Portfolio</span></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="HomePage.php">Home</a></li>
          <li class="menu-active"><a href="AboutPage.php">About</a></li>
         <!-- <li class="menu-active"><a href="ResumePage.php">Resume</a></li> -->
           <li class="menu-active"><a href="EducationPage.php">Education</a></li>
          <li class="menu-active"><a href="WorkPage.php">Works</a></li>

          <li class="menu-active"><a href="TestimonialsPage.php">Testimonials</a></li>
          
          <li class="menu-active"><a href="ContactPage.php">Contact</a></li> 
          <li class="menu-active"><a href="template/preview.php">
          <?php if($Flag=1) echo "Launch Website"   ?> </a></li> 
          
          <li><a href="Index.php">Logout</a></li>
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
  <!-- action="<?php echo $_SERVER["PHP_SELF"];?>"  -->


    <form method="Post"  action="ApproveCertificate.php" enctype="multipart/form-data">
    <section id="about" class="wow fadeInUp">
      <div class="container">
      <div class="row">
        <div class="col-lg-12 about-img">
              <a href="EducationPage.php">Add New</a>
          </div>
      </div>
       <div class="row">
          <div class="col-lg-12 about-img">
              <h2>Education List</h2>
          </div>

        </div>
<?php

$Server="localhost";
$UserName="root";
$Password="Thanu1611";
$DbName="dynamicportfolio";

$conn=new mysqli($Server,$UserName,$Password,$DbName);

if($conn->connect_error)
{
	die("Error");
}


$UserId=$_SESSION["UserId"];
//echo $UserId;
$sql="select * from  tbleducationdetails where UserId='$UserId' ";

//echo($sql);

$Result=$conn->query($sql);
if($Result!==false && $Result->num_rows>0)
{
	echo "<table style='border:solid 2px gray;padding:10px; width:100%;'>

						<tr style='background-color:orange;height=50px;padding:10px;'>
			<th > Id </th>
			<th> CollegeName </th> 
			<th> Degree</th>
			<th> OverallPercentage </th> 
             <th> CollegeAddress</th> 
            <th> Certificate</th> 
			<th>Status </th> 
            <th>Action</th> 
			  
			</tr>";
	while($row=$Result->fetch_assoc())
	{
        $lStatuss="";        
        if ($row["AdminAcceptFlag"]==1)
        {
            $lStatuss="Approved";
        }  
        else if ($row["AdminAcceptFlag"]==2)
        {
            $lStatuss="Declained";
        }
        else 
        {
	         $lStatuss="In Process";
        }

		echo " <tr style='border-bottom:solid 1px gray;padding:10px;line-height:25px;'> 
					<td> ". $row["Id"]." </td> 
					<td> ". $row["CollegeName"]." </td> 
					<td> ". $row["Degree"]." </td>
					<td> ". $row["OverallPercentage"]." </td>
                    <td> ". $row["CollegeAddress"]." </td>
                    <td> <img src='". $row["UploadCertificate"]."' width='100px' height='100px' > </td>
					<td> ". $lStatuss . "</td>
		<td> <a href='EducationPage.php?Id=".$row["Id"]."&Flag=Edit'>Edit</a> &nbsp;
					 <a href='EducationList.php?Id=".$row["Id"]."&Flag=Delete'>Delete</a></td>
					
				</tr>";
					 

	}

	echo "</table>";
}
else {
	# code...
    echo "No Records !!";
}
$conn->close();
?>

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
