<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file_pointer=$uriSegments[1];
if (!file_exists($file_pointer)) {
   header('Location: /404.php');
   exit;
}
//print_r($uriSegments[1]);
//die;
use function PHPSTORM_META\type;

require_once('./include/connection.php');
require_once('./include/constant.php');
require_once('./include/model.php');
?>
 

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <?php
  include_once('head.php');
  ?>
  <link rel="stylesheet" href="<?= $bootstrap_min; ?>">
  <link rel="stylesheet" href="<?= $my_css; ?>">
  <link rel="stylesheet" href="<?= $responsive_css; ?>">
  <script src="<?= $jquery_min; ?>"></script>
  <script src="<?= $boot_js; ?>"></script>
  
  <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10809622675"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-10809622675'); </script>
  
 <!-- Event snippet for Page view conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-10809622675/4qliCO-ynq8DEJOBt6Io'}); </script>


  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/site.webmanifest">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
  <style>
    .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{			 
	color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
</style>




</head>



<body>
      <?php
    include_once('header.php');
    ?>
    
    <section class="page_404">
	  <div class="thnks_bggg">
    <div class=" text-center thks">
      <h1 class="display-3" style="color: #000;">Thank You!</h1> <br>
      <p class="lead"><strong>Thank you for showing interest</strong> with us we will contact you soon...</p>
      <hr>

      <p class="lead">
        <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
      </p>
    </div>

  </div>
</section>




	
	   <?php
    include_once('footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/custom.js" crossorigin="anonymous"></script>
    
</body>

