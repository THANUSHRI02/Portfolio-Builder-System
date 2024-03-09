<?php
		$Title="";
		$Description="";
        $WorkImage="";
        
	session_start();
	if(isset($_POST["Title"]))
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
		$Title=$_POST["Title"];
		$Description=$_POST["Description"];
        $WorkImage= "";//$_POST["WorkImage"];
        
		$UserId=$_SESSION["UserId"];

        
		$WorkImage ="";
		$target_dir = "uploads/";
		$uploadOk=1;
		$WorkImage= $target_dir . basename($_FILES["Uploadfile"]["name"]);
					             
			if (move_uploaded_file($_FILES["Uploadfile"]["tmp_name"], $WorkImage))
			{
					echo "The file ". basename( $_FILES["Uploadfile"]["name"]). " has been uploaded. <br>";
			}

		

		$sql="";
        //$sql="select * from  tblworkspage where UserId='$UserId' ";

        //echo($sql);

        //$Result=$conn->query($sql);
        if(isset($_GET["Id"]))
        {
            $Id=$_GET["Id"];
                $sql="update tblworkspage  set Title='$Title',Description='$Description',WorkImage='$WorkImage'  where Id='$Id'";
        }
        else 
        {
	    		$sql="Insert into tblworkspage (Title,Description,UserId,WorkImage)values('$Title' ,'$Description','$UserId','$WorkImage')";
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
  <title>WORKS/PROJECT</title>
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
                $sql="select * from  tblworkspage where   UserId='$UserId'";

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
              <a href="WorkPage.php">Add New</a> &nbsp; | &nbsp; <a href="WorkList.php">View List</a>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 about-img">
              <h2>Project or works Page Entry</h2>
          </div>

        </div>
        
<?php

$Title="";
		$Description="";
        $WorkImage="";
        
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
        $sql="select * from  tblworkspage where Id='$Id' ";

        //echo($sql);

        $Result=$conn->query($sql);
        if($Result!==false && $Result->num_rows>0)
        {
	
	        while($row=$Result->fetch_assoc())
	        {
                $Title=$row["Title"];
		        $Description=$row["Description"];
                $WorkImage=$row["WorkImage"];
         

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
             Project Title
          </div>

          <div class="col-lg-6 content">
            <input type="text" name="Title" style="width:500px;" value="<?php echo  $Title; ?>" >
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img">
              Description
          </div>
          <div class="col-lg-6 content">
            <input type="text" name="Description" style="width:500px;" value="<?php echo  $Description; ?>">
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-6 about-img">
              Project Image :
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
