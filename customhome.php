<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>

<title>Customize</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>
<style>
    .shadowed-div {
        width: 100%; 
  background-color: #fff; /* Set the background color of your div */
  border-radius: 8px; /* Add rounded corners for a smoother look */
  box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2); /* Add the subtle and blurred shadow */
  transition: transform 0.3s ease-in-out; /* Add a smooth transition effect */
  margin-top: 7%;
}

.shadowed-div:hover {
  transform: scale(1.05); /* Scale the element slightly on hover */
}

.car-info-box:hover {
  transform: scale(1.05); /* Scale the element slightly on hover */
  border-radius: 12px; 
  background-color: #aaa;
  
}
.car-title-m:hover {
  transform: scale(1.02); /* Scale the element slightly on hover */
  border-radius: 12px; 
}
.imgrvrt{
    padding-top: 10px;padding-bottom: 10px;
}
.imgrvrt:hover {
    transition: transform 0.3s ease-in-out;
  transform: scale(1.21); /* Scale the element slightly on hover */
  border-radius: 12px; 
  box-shadow: 0.3px 4px 20px rgba(0, 0, 0, 0);
}
    </style>
<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>&nbsp;</h1>
            <p>&nbsp; </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Customise Your Car  |  <span>Make it yours!</span></h2>
      <p>You can choose from the below the car you want to Customise. As of now the options are limited. More models are coming... Stay tuned...</p>
    </div>
    <div class="row" style="margin-top:120px;"> 

    <table style="border: 0px">
    <tr>
      <td>
    <div class="shadowed-div" >
            <div class="recent-car-list" >
            <div class="car-info-box" > 
                <ul>
                <li class="imgrvrt" ><a href="custompsc1.php"><img src="images/psc1/carwhite.jpg" class="img-responsive" alt="image"></a></li>
                    </ul>
            </div>
            <div class="car-title-m">
                <h6 style="padding-left:35%"><a href="custompsc1.php"> 911 Carrera</a></h6>
            <span class="price"> </span> 
            </div>
            </div>
            </div>
            </td>
            <td>
    <div class="shadowed-div" >
            <div class="recent-car-list" >
            <div class="car-info-box" style="display: flex;
            justify-content: center;
            align-items: center;" > 
                <ul>
                <li class="imgrvrt"  style="margin-left:5%;max-width: 90%;"><a href="customttc1.php" ><img src="images/ttc1/carblack.jpg" class="img-responsive" alt="image"></a></li>
                    </ul>
            </div>
            <div class="car-title-m">
                <h6 style="padding-left:35%"><a href="customttc1.php"> Taycan Turbo S</a></h6>
            <span class="price"> </span> 
            </div>
            </div>
            </div>
            </td>
            <td>
    <div class="shadowed-div" >
            <div class="recent-car-list" >
            <div class="car-info-box" style="min-width: 145px;" > 
                <ul>
                <li class="imgrvrt" ><a href="customccc1.php"><img src="images/ccc1/carred.jpg" class="img-responsive" alt="image"></a></li>
                    </ul>
            </div>
            <div class="car-title-m">
                <h6 style="padding-left:35%"><a href="customccc1.php"> Cayenne</a></h6>
            <span class="price"> </span> 
            </div>
            </div>
            </div>
            </td>
            </div>






<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>