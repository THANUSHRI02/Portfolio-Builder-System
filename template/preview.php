

<!DOCTYPE html>
<html lang="zh">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>Profile Page</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-space-dynamic.css">
<link rel="stylesheet" href="assets/css/animated.css">
<link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>

<body lang="ta">



<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
<div class="preloader-inner">
<span class="dot"></span>
<div class="dots">
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">



<div class="container">

<div class="row">

<div class="col-12">
<nav class="main-nav">
<!-- ***** Logo Start ***** -->
<a href="index.html" class="logo">
<h4>Dynamic<span>Portfolio</span></h4>

</a>

<!-- ***** Logo End ***** -->
<!-- ***** Menu Start ***** -->
<ul class="nav">
<li class="scroll-to-section"><a href="../HomePage.php" class="active"><i class="fa-thin fa-pen-nib" ></i>Edit</a></li>
<li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
<li class="scroll-to-section"><a href="#about">About Us</a></li>
<!--<li class="scroll-to-section"><a href="#services">Resume</a></li>-->
<li class="scroll-to-section"><a href="#Education">Education</a></li>
<li class="scroll-to-section"><a href="#services">Works</a></li> 
<li class="scroll-to-section"><a href="#blog">Testimonials</a></li> 
<li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 


</ul>        
<a class='menu-trigger'>
<span>Menu</span>
</a>
<!-- ***** Menu End ***** -->
</nav>
</div>
</div>
</div>
<div id="google_translate_element"></div>
</header>
<!-- ***** Header Area End ***** -->

<?php

$Title="";
$Description="";
$HomeImage="";
session_start();
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
$sql="select * from  tblhomepage where UserId='$UserId' ";

//echo($sql);

$Result=$conn->query($sql);
if($Result!==false && $Result->num_rows>0)
{

while($row=$Result->fetch_assoc())
{
$Title=$row["Title"];
$Description=$row["Description"];
$HomeImage=$row["HomeImage"];

}

}
else {
# code...
//echo "No Records !!";
}
$conn->close();
?>
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6 align-self-center">
<div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
<!--<h6>Welcome to Space Dynamic</h6>-->
<h2><?php echo $Title; ?></h2>
<p><?php echo $Description; ?>.</p>
<img src="<?php echo "../".$HomeImage; ?>" width="50px" height="500px">
<!--<form id="search" action="#" method="GET">
<fieldset>
<input type="address" name="address" class="email" placeholder="Your website URL..." autocomplete="on" required>
</fieldset>
<fieldset>
<button type="submit" class="main-button">Analyze Site</button>
</fieldset>
</form>-->
</div>
</div>
<div class="col-lg-6">
<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
<img src="assets/images/banner-right-image.png" alt="team meeting">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php

$Title="";
$Description="";

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
$sql="select * from  tblaboutpage where UserId='$UserId' ";

//echo($sql);

$Result=$conn->query($sql);
if($Result!==false && $Result->num_rows>0)
{

while($row=$Result->fetch_assoc())
{
$Title=$row["Title"];
$Description=$row["Description"];


}

}
else {
# code...
//echo "No Records !!";
}
$conn->close();
?>
<div id="about" class="about-us section">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
<img src="assets/images/about-left-image.png" alt="person graphic">
</div>
</div>
<div class="col-lg-8 align-self-center">
<div class="services">
<div class="row">
<div class="col-lg-6">
<div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
<div class="icon">
<img src="assets/images/service-icon-01.png" alt="reporting">
</div>
<div class="right-text">

<h4><?php echo $Title; ?></h4>
<p><?php echo $Description; ?>.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="services" class="our-services section">
<div class="container">
<div class="row">
<div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
<div class="left-image">
<img src="assets/images/services-left-image.png" alt="">
</div>
</div>
<div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
<div class="section-heading">
<h2>Project Works</h2>
<hr>
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
$sql="select * from  tblworkspage where UserId='$UserId' ";

//echo($sql);

$Result=$conn->query($sql);
if($Result!==false && $Result->num_rows>0)
{
echo "<table style='border:solid 2px gray;padding:10px; width:100%;'>
<tr style='background-color:gray;height=50px;padding:10px;color:white;'>
<th> Title </th> 
<th> Description</th>

<th> Project Image</th> 


</tr>";
while($row=$Result->fetch_assoc())
{
echo " <tr style='border-bottom:solid 1px gray;padding:10px;line-height:25px;'> 
<td> ". $row["Title"]." </td> 
<td> ". $row["Description"]." </td>
<td> <img src='../". $row["WorkImage"]."' width='100px' height='100px' > </td>


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

</div>
</div>
</div>
</div>





<!--Education start-->

<div id="Education" class="our-services section">
<div class="container">
<div class="row">
<div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
<div class="left-image">
<img src="assets/images/blog-dec.png" alt="">
</div>
</div>
<div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
<div class="section-heading">
<h2>Education</h2>
<hr>
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

<tr style='background-color:Gray;height=50px;padding:10px;color:white;'>
<th> College Name </th> 
<th> Degree</th>
<th> Percentage </th> 
<th> Address</th> 
<th> Certificate</th> 


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
<td> ". $row["CollegeName"]." </td> 
<td> ". $row["Degree"]." </td>
<td> ". $row["OverallPercentage"]." </td>
<td> ". $row["CollegeAddress"]." </td>
<td> <img src='../". $row["UploadCertificate"]."' width='100px' height='100px' > </td>

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

</div>
</div>
</div>
</div>

<!--Education End-->





<?php

$Title="";
$Description="";

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
$sql="select * from  tbltestimonials where UserId='$UserId' ";

//echo($sql);

$Result=$conn->query($sql);
if($Result!==false && $Result->num_rows>0)
{

while($row=$Result->fetch_assoc())
{
$Title=$row["Title"];
$Description=$row["Description"];


}

}
else {
# code...
//echo "No Records !!";
}
$conn->close();
?>

<div id="blog" class="our-blog section">
<div class="container">
<div class="row">
<div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
<div class="section-heading">
<h2><?php echo $Title; ?></h2>
<p><?php echo $Description; ?>.</p>
</div>
</div>
<div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
<div class="top-dec">
<img src="assets/images/blog-dec.png" alt="">
</div>
</div>
</div>

</div>
</div>


<?php

$Address="";
$MobileNo="";
$Facebook="";

$WhatsUp="";
$Instagram="";
$LinkedIn="";
$Githup="";

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
$sql="select * from  tblcontactpage where UserId='$UserId' ";

//echo($sql);

$Result=$conn->query($sql);
if($Result!==false && $Result->num_rows>0)
{

while($row=$Result->fetch_assoc())
{
$Address=$row["Address"];
$MobileNo=$row["MobileNo"];
$Facebook=$row["Facebook"];

$WhatsUp=$row["WhatsUp"];
$Instagram=$row["Instagram"];
$LinkedIn=$row["LinkedIn"];
$Githup=$row["Githup"];


}

}
else {
# code...
//echo "No Records !!";
}
$conn->close();
?>

<div id="contact" class="contact-us section">
<div class="container">
<div class="row">
<div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
<div class="section-heading">
<h2>Contact</h2>
<p><?php echo $Address; ?>.</p>
<p><?php echo $MobileNo; ?>.</p>
<p><?php echo $Facebook; ?>.</p>

<p>Whatsapp : <a href="https://www.whatsapp.com" style="color:black;" class=social-icon whatsup""><?php echo $WhatsUp; ?></a> </p>
<p>Instagram : <a href="https://ig.me/m/<?php echo $Instagram; ?>" style="color:black;" class=social-icon whatsup""><?php echo $Instagram; ?></a> </p>
<p>LinkedIn : <a href="https://www.linkedin.com" style="color:black;" class=social-icon whatsup""><?php echo $LinkedIn; ?></a> </p>
<p>Github : <a href="https://github.com" style="color:black;" class=social-icon whatsup""><?php echo $Githup; ?></a> </p>


</div>
</div>

</div>
</div>
</div>

<footer>
<div class="container">
<div class="row">
<div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
<p>© Copyright. All Rights Reserved. 

<br>Designed by: <a rel="nofollow" href="https://templatemo.com">A.Thanushri & R.Keerthana</a></p>
</div>
</div>
</div>
</footer>
<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/animation.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/templatemo-custom.js"></script>

</body>
</html>