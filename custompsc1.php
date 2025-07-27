<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['request']))
{
$model=$_POST['model'];
$wheel=$_POST['alloy-wheel']; 
$email=$_SESSION['login'];
$color=$_POST['car-color'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:no,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$model,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':no',$wheel,PDO::PARAM_STR);
$query->bindParam(':message',$color,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Request Sent. We will contact you shortly";?>
<script>
    alert("Request Sent. We will contact you shortly");
    window.location.href="./index.php";
    </script>
<?php
}
else 
{
$error="Something went wrong. Please try again";
?>
<script>
    alert("Something went wrong. Please try again");
    </script>
<?php
}

}

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .customization {
            display: flex;
            justify-content: center;
            min-width: 110%;
            min-height: 100%;
        }

        .color-options, .wheel-options {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-left: 100px;
            margin-right: 100px;
         

        }

        .color-options label, .wheel-options label {
            display: block;
            margin: 10px;
            cursor: pointer;
            margin-left:20px;
            margin-right:20px;
        }

        .color-options img, .wheel-options img {
            width: 100px;
            height: 100px;
            border: 3px solid transparent;
            transition: border 0.5s ease-in-out;
            margin-left:20px;
            margin-right:20px;  
        }

        .color-options img:hover, .wheel-options img:hover {
            
            scale:120%;
            transition:all 0.5s ease-in-out;
            mix-blend-mode: multiply;
        }
        .wheel-options img:hover {
            
            scale:120%;
            rotate: 569deg;
            transition:all 0.7s ease-in-out;
            mix-blend-mode: multiply;
        }

        .car-preview {
            margin-top: 78px;
            text-align: center;
            min-height:80%;
            margin-left:70px;
            margin-right:70px;
        }

        .car-preview img {
            width: 563px;
            
           scale: 150%;
        }
        .car-preview img:hover {
            width: 563px;
           scale: 155%;
           transition: scale 0.5s ease-in-out;
        }
        input[type="radio"] {
            display: none;
        }
        h2{
            text-align: center;
            font-family: 'Gabriola', Arial, sans-serif;
        }
    </style>
    <title>Car Customization</title>
</head>
<body>
<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Lets Customise your Car </h2>
      
    </div>
    <form name="carcust" method="Post" action="#">
    <input type="text" style="display:none" name ="model" value="911">
    <div style="margin-left:-40px;" class="customization">
        <div class="color-options">
            <h2>Car Color</h2>
            <label>
                <input type="radio" name="car-color" value="white" checked>
                <img src="images/psc1/white.png" alt="White">
            </label>
            <label>
                <input type="radio" name="car-color" value="black">
                <img src="images/psc1/black.png" alt="Black">
            </label>
            <label>
                <input type="radio" name="car-color" value="red">
                <img src="images/psc1/red.png" alt="Red">
            </label>
        </div>

        <div class="car-preview">
        <img src="images/psc1/carwhite.jpg" alt="Car Preview">
        </div>

     <div class="wheel-options">
            <h2>Alloy Wheels</h2>
            <label>
                <input type="radio" name="alloy-wheel" value="1">
                <img src="images/psc1/wheel1.jpg" alt="Alloy Wheel 1">
            </label>
            <label>
                <input type="radio" name="alloy-wheel" value="2">
                <img src="images/psc1/wheel2.jpg" alt="Alloy Wheel 2">
            </label>
            <label>
                <input type="radio" name="alloy-wheel" value="3">
                <img src="images/psc1/wheel3.jpg" alt="Alloy Wheel 3">
            </label>
        </div>
    </div>


<div style="align-items: center; justify-content: center; display: flex;margin-top:5%;">
    <?php if(isset($_SESSION['login']))
              {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="request" value="request">
              </div>
              <?php } else { ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="model">Login For Requesting</a>

              <?php } ?>

              </div>
          </form>
   
    <script>
        // JavaScript code
        const carColorRadios = document.getElementsByName('car-color');
        const alloyWheelRadios = document.getElementsByName('alloy-wheel');
        const carPreview = document.querySelector('.car-preview img');

        function updateCarPreview() {
            let selectedColor;
            let selectedWheel;

            for (const radio of carColorRadios) {
                if (radio.checked) {
                    selectedColor = radio.value;
                    break;
                }
            }

            for (const radio of alloyWheelRadios) {
                if (radio.checked) {
                    selectedWheel = radio.value;
                    break;
                }
            }

            // Construct the correct car image URL based on selected color and wheel
            let carImageUrl = `images/psc1/carwhite.jpg`; // Default white car image

            if (selectedColor !== 'white' && selectedWheel) {
                carImageUrl = `images/psc1/car${selectedColor}wheel${selectedWheel}.jpg`;
            }
            else if (selectedColor == 'white' && selectedWheel) {
                carImageUrl = `images/psc1/car${selectedColor}wheel${selectedWheel}.jpg`;
            }
            else if(selectedColor !== 'white')
            {
                carImageUrl = `images/psc1/car${selectedColor}.jpg`;
            }

            // Set the car preview image source
            carPreview.src = carImageUrl;
        }

        for (const radio of carColorRadios) {
            radio.addEventListener('change', updateCarPreview);
        }

        for (const radio of alloyWheelRadios) {
            radio.addEventListener('change', updateCarPreview);
        }

        updateCarPreview();
    </script>
</div>
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


<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>
