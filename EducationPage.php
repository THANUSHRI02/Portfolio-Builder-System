<?php
		$CollegeName="";
		$Degree="";
        $OverallPercentage="";
        $CollegeAddress="";
	session_start();
	if(isset($_POST["CollegeName"]))
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
		$CollegeName=$_POST["CollegeName"];
		$Degree=$_POST["Degree"];
        $OverallPercentage=$_POST["OverallPercentage"];
        $CollegeAddress=$_POST["CollegeAddress"];
		$UserId=$_SESSION["UserId"];

        
		$Certificate ="";
		$target_dir = "uploads/";
		$uploadOk=1;
		$Certificate= $target_dir . basename($_FILES["Uploadfile"]["name"]);
					             
			if (move_uploaded_file($_FILES["Uploadfile"]["tmp_name"], $Certificate))
			{
					echo "The file ". basename( $_FILES["Uploadfile"]["name"]). " has been uploaded. <br>";
			}

		

		$sql="";
        //$sql="select * from  tbleducationdetails where UserId='$UserId' ";

        //echo($sql);

        //$Result=$conn->query($sql);
        if(isset($_GET["Id"]))
        {
            $Id=$_GET["Id"];
                $sql="update tbleducationdetails  set CollegeName='$CollegeName',Degree='$Degree',OverallPercentage='$OverallPercentage',CollegeAddress='$CollegeAddress' ,UploadCertificate='$Certificate' where Id='$Id'";
        }
        else 
        {
	    		$sql="Insert into tbleducationdetails (CollegeName,Degree,OverallPercentage,CollegeAddress,UserId,UploadCertificate)values('$CollegeName' ,'$Degree' ,'$OverallPercentage','$CollegeAddress','$UserId','$Certificate')";
        }	
        echo($sql);

			
		//$sql="update tblworkspage  set Title='$Title',Description='$Description',UserId='$UserId'";
		//echo $sql;

		if($conn->query($sql)===TRUE)
		{
			echo "Sucessfully Updated";
			//unset($_SESSION['Id']);
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
  <title>Education</title>
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
      <?php 

                $Flag=0;
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
                $sql="select * from  tbleducationdetails where   AdminAcceptFlag=1  and UserId='$UserId'";

                //echo($sql);

                $Result=$conn->query($sql);
                if($Result!==false && $Result->num_rows>0)
                {
                    $Flag=1;
                }
                
          
          ?>
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
          
         
          <!--<li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li> -->
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
    <form method="Post" action="<?php echo $_SERVER['REQUEST_URI']; ?>"  enctype="multipart/form-data">
    <section id="about" class="wow fadeInUp">
      <div class="container">
      <div class="row">
        <div class="col-lg-12 about-img">
              <a href="EducationPage.php">Add New</a> &nbsp; | &nbsp; <a href="EducationList.php">View List</a>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 about-img">
              <h2>Education Page Entry</h2>
          </div>

        </div>
        
<?php

$CollegeName="";
		$Degree="";
        $OverallPercentage="";
        $CollegeAddress="";
$Server="localhost";
$UserName="root";
$Password="Thanu1611";
$DbName="dynamicportfolio";


if(isset($_GET["Id"]))
{
    $Id=$_GET["Id"];
        $conn=new mysqli($Server,$UserName,$Password,$DbName);

        if($conn->connect_error)
        {
	        die("Error");
        }


        $UserId=$_SESSION["UserId"];

        //echo $UserId;
        $sql="select * from  tbleducationdetails where Id='$Id' ";

        //echo($sql);

        $Result=$conn->query($sql);
        if($Result!==false && $Result->num_rows>0)
        {
	
	        while($row=$Result->fetch_assoc())
	        {
                $CollegeName=$row["CollegeName"];
		        $Degree=$row["Degree"];
                $OverallPercentage=$row["OverallPercentage"];
                $CollegeAddress=$row["CollegeAddress"];

	        }
	
        }
        else {
	        # code...
            //echo "No Records !!";
        }
        $conn->close();
}
?>
        <div class="row">
          <div class="col-lg-6 about-img">
              Institution Name :
          </div>

          <div class="col-lg-6 content">
            <input type="text" name="CollegeName" style="width:500px;" value="<?php echo  $CollegeName; ?>" >
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img">
              Degree
          </div>
          <div class="col-lg-6 content">
            <input type="text" name="Degree" style="width:500px;" value="<?php echo  $Degree; ?>">
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-6 about-img">
              Overall Percentage
          </div>
          <div class="col-lg-6 content">
            <input type="text" name="OverallPercentage" style="width:500px;" value="<?php echo  $OverallPercentage; ?>">
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-6 about-img">
              Institution Address
          </div>
          <div class="col-lg-6 content">
            <input type="text" name="CollegeAddress" style="width:500px;" value="<?php echo  $CollegeAddress; ?>">
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-6 about-img">
              Upload Certificate :
          </div>
          <div class="col-lg-6 content">
            <input type="file" name="Uploadfile" >
          </div>
        </div>

        <div class="row">
        <div class="col-lg-6 about-img">
                
          </div>
          <div class="col-lg-6 about-img">
                <input type="Submit" name="Register" value="Update">
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
