<?php

use function PHPSTORM_META\type;

require_once('include/connection.php');
require_once('include/constant.php');
require_once('include/model.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>
  <?php
  include_once('head.php');
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="<?= $bootstrap_min; ?>">
  <link rel="stylesheet" href="<?= $my_css; ?>">
  <link rel="stylesheet" href="<?= $responsive_css; ?>">
  <script src="<?= $jquery_min; ?>"></script>
  <script src="<?= $boot_js; ?>"></script>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/site.webmanifest">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body ng-app="myApp" ng-controller="customersCtrl" data-spy="scroll" data-target=".navbar" data-offset="50">
  <main role="main">
    <?php
    include_once('header.php');
    ?>
    <div class="col main_srv_bncntact">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            <span> Contact US </span>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="container contact_datails">
        <div class="row">
          <div class="col-md-4">
            <div class="cnt_indiv">
              <div class="icn_cn">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="text_cn">
                <p>
                  Location
                </p>
                <span>
                  Plot No-44, Block B-10, Pocket-II, Sector-13, Dwarka, New Delhi, Delhi 110075
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt_indiv">
              <div class="icn_cn">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="text_cn">
                <p>
                  Call Us
                </p>
                <span>
                  <a href="+9109711939395">+91 09711939395</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="cnt_indiv">
              <div class="icn_cn">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <div class="text_cn">
                <p>
                  E-Mail Us
                </p>
                <span>
                  <a href="mailto:info@legaltax.in">info@legaltax.in</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cnt-form-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contct_form">
              <form action="contact_mail.php" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="firstname" placeholder="Your Name" class="form-control" required>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="lastname" placeholder="Your Last Name" class="form-control" required>
                  </div>
                  <div class="col-md-6">
                    <input type="Number" name="pnumber" placeholder="Number" class="form-control" min="0" pattern="[6789][0-9]{9}" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" name="cemail" placeholder="Your Email" class="form-control" required>
                  </div>
                  <div class="col-md-12">
                    <textarea  class="form-control" name="msghere" required></textarea>
                  </div>
                  <div class="col-md-12 text-center mt-5">
                    <div class="bt_enq text-center">
<div class="g-recaptcha" data-sitekey="6Lffn-MoAAAAANvd-ueiMvcqLqsw8DXExi1Fpcqk"></div>
                      <center>
                        <button type="submit">
                          Enquire Now
                        </button>
                      </center>

                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section>
      <div class="cnt_map">
        <div class="mapouter">
          <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Plot%20No-44,%20Block%20B-10,%20Pocket-II,%20Sector-13,%20Dwarka,%20New%20Delhi,%20Pocket%202,%20Delhi,%20110075&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 100%;
              }
            </style>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 100%;
              }
            </style>
          </div>
        </div>
      </div>
    </section>








    <div class="form_container_pb" style="display:none" id="ac-wrapper">
      <div class="form_mn">
        <form>
          <div class="frm_top">
            <i class="fa fa-times" aria-hidden="true" onclick="cls();"></i>
          </div>
          <h2>
            Enquire Now
          </h2>
          <p>
            Please fill your details below and we will get in touch with you shortly
          </p>
          <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
          <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
          <input type="Number" name="number" placeholder="Enter Your Number" class="form-control" min="0">
          <input type="submit" name="submit" value="Submit" class="form-control">
        </form>
      </div>
    </div>

    <script type="text/javascript">
      function PopUp() {
        document.getElementById("ac-wrapper").style.display = "block";
      }

      function cls() {
        document.getElementById("ac-wrapper").style.display = "none";
      }
    </script>
    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bc35b5361d0b770925136e4/1h3e75am7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <?php
    include_once('footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/custom.js" crossorigin="anonymous"></script>
</body>




</html>