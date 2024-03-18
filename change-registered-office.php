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
  <?php
  include_once('head.php');
  ?>
      <?php
  foreach (changeregisteredoffice() as $value) {
  ?>
   <meta name="google-site-verification" content="8Ija_tfkCl3bth3cU3KnmgeZ2Wfea6dYCfzF4JNEOqM" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $value['metatitle'] ?></title>
    <meta name="description" content="<?= $value['discription'] ?>">
    <meta name="keyword" content="<?= $value['keywords'] ?>">
    <meta name="author" content="legal tax">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="canonical" href="<?= $value['canonical'] ?>" />
    
      <!--facebook-->
      <meta property="og:url" content="<?= $value['ogsitename'] ?>">
      <meta property="og:type" content="website">
      <meta property="og:title" content="<?= $value['ogtitle'] ?>">
      <meta property="og:description" content="<?= $value['fbogdescription'] ?>">
      <meta property="og:image" content="<?= $value['fbogimageurl'] ?>">
      
      <!--twitter-->
      <meta name="twitter:card" content="summary_large_image">
      <meta property="twitter:domain" content="legaltax.in">
      <meta property="twitter:url" content="<?= $value['twittersite'] ?>">
      <meta name="twitter:title" content="<?= $value['twitterogimage'] ?>">
      <meta name="twitter:description" content="<?= $value['twogdescription'] ?>">
      <meta name="twitter:image" content="<?= $value['twitterogimage'] ?>">
  <?php
  }
  ?>
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
<link rel="stylesheet" href="style.css">



</head>

<body ng-app="myApp" ng-controller="customersCtrl" data-spy="scroll" data-target=".navbar" data-offset="50">
  <main role="main">
      <?php
      include_once('header.php');
      ?>
    <div class="col main_srv_bnrGST">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            <span>Change  </span>
            <h1>Registered Office</h1>

            <p>
             Easily update your registered office address with MCA.
            </p>

          </div>
          <div class="col-md-5 col-lg-5 col-sm-12  my-3 form_serv" data-aos="fade-right">
            <?php
            include_once('banner_form.php');
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <h1 id="section4" class="text-center pt-3">
        Change Registered Office
      </h1>
      <div class="tp_img_inf">
        <img src="img/llp_start.png" alt="llp_start">
      </div>
    </div>
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sideMenu_serv">
              <ul>
                <li>
                  <a href="#1" class="act"> Overview </a>
                </li>
                <li>
                  <a href="#3">Documents Required</a>
                </li>
                <li>
                  <a href="#5">PROCESS OF CHANGE IN REGISTERED OFFICE</a>
                </li>
                <li>
                  <a href="#6">Change company address</a>
                </li>
                <li>
                  <a href="#10">FAQs</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="laoded_cntent">
              <div class="overview_sr " id="1">
                <h3>
                  Overview
                </h3>
                <p>
                Company registered office is an official address where a company is registered or incorporated. The official communications made to the company are addressed to the registered office which is also displayed in the master data of the company. In case there is any change in address, there must be an update with the MCA, although within the same city the office is changed. As prescribed by the Companies Act to change the address a specified process must be followed. The change in registered office process depends on where the office is shifted to i.e. within the city, within the jurisdiction of RoC or to other State. In all cases, the approval from the concerned RoC and consent from shareholders is compulsory.
                </p>

              </div>

              <div class="overview_sr " id="3">
                  <h3>
                WHAT ARE THE MANDATORY DOCUMENTS REQUIRED TO CHANGE COMPANY ADDRESS ?
                </h3>

                <p>
                  The documents that are required  to change company address are mentioned below:
                </p>

                <ol>
                 <li>
                     <p> <b>Rent Agreement:  </b>
                     Conveyance deed or Rent Agreement of the registered office.
                     </p>
                     </li>
                     <li>
                    <p> <b>Business Address Proof</b>
                    Telephone bill/Electricity bill/ Gas bill of the new address
                         </p>
                     </li>
                     <li>
                    <p>  <b>NOC from owner: </b>
                    No Objection Certificate to be obtained from the owner of registered office.
                         </p>
                     </li>
                   <li>
                    <p>  <b>Digital Signature Certificate: </b>
                    DSC of one of the authorized director to be provided.
                       </p>
                     </li>
                  </ol>
                  
                    <img src="img/CHANGE-COMPANY-ADDRESS.png" alt="CHANGE-COMPANY-ADDRESS.png">
                    
                 <img src="img/documents-required-for-change-address-of-another-state.png" alt="documents-required-for-change-address-of-another-state.png">
                <!--<h3 class="mb-5 text-center">-->
                <!--Documents required to change company address-->
                <!--</h3>-->
<!--                  <div class="row">-->
<!--                    <div class="col-md-3">-->
<!--                      <div class="bdr">-->
<!--                        <h3 style="color:orange">Digital Signature Certificate</h3>-->
<!--                        <p style="color:rgb(95,95,167)">DSC of one of authorised director to be provided</p>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-md-3">-->
<!--                      <div class="bdr">-->
<!--                        <h3 style="color:orange">Business Address Proof</h3>-->
<!--                        <p style="color:rgb(95,95,167)">Electricity Bill/ Telephone Bill/Gas Bill of the new address</p>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-md-3">-->
<!--                      <div class="bdr">-->
<!--                        <h3 style="color:orange">NOC from owner</h3>-->
<!--                        <p style="color:rgb(95,95,167)">No Objection Certificate to be obtained from the ower of registered office</p>-->
<!--</div>-->
<!--</div>-->
<!--<div class="col-md-3">-->
<!--                      <div class="bdr">-->
<!--                        <h3 style="color:orange">Rent Agreement</h3>-->
<!--                        <p style="color:rgb(95,95,167)">Rent Agreement or conveyance deed of the registered office</p>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

 
              </div>
              <div class="overview_sr " id="5">
                  <div class="cz mt-5">
                <h3>
               Process of Change in Registered Office
                </h3>
                <ol>
                  <li>
                    <b>DAY 1</b>
                      <ul>
                      <li>Consulting for a change of official address</li>
                       <li>Collection of basic documents and information</li>
                      </ul>
                  </li>
                  <li>
                   <b>DAY 2-3</b>
                      <ul>
                      <li>Drafting of necessary documents and resolutions</li>
                           <li>Provide required documents drafted after signature</li>
                      </ul>
                  </li>
                     <li>
                   <b>DAY 4-5</b>
                      <ul>
                        <li>Preparation of application for business update address</li>
                      <li>Filing of application for approval of MCA</li>
                      </ul>
                  </li>
                  <li>
                   <b>DAY 5 onwards</b>
                      <ul>
                      <li>Government processing time</li>
                      </ul>
                  </li>
                </ol>
</div>
                  </div>
                  <div class="overview_sr" id="6">
                  <div class="cx">
                  <h3>Change company address in 3 Easy Steps</h3>
                      <ol>
                      <li>Answer quick questions
                          <ul>
                           <li><p>Pick a Package that best fits your requirements </p></li>
                          <li><p>Fill in our questionnaires that take less than 10 minutes</p></li>
                          <li><p>Provide basic details & documents required for registration</p></li>
                          <li><p>Make payment through secured payment gateways</p></li>
                          </ul>
                          </li>
                       <li>Experts are Here to Help
                          <ul>
                          <li><p>Assigned Relationship Manager </p></li>
                          <li><p>Drafting of new object clause of MoA</p></li>
                           <li><p>Preparation of other necessary documents</p></li>
                          <li><p>Drafting of necessary resolution and documents </p></li>
                          <li><p>Preparation and filling of Application</p></li>
                          <li><p>Updated MCA master data with modified details</p></li>
                          </ul>
                          </li>
                          <li>Your Company is Registered
                          <ul>
                              <li>
                              <p>All it takes is 5-7 working days</p>
                              </li>
                              </ul>
                          
                          </li>
                      </ol>
                      <small><p style="color:grey">*Subject to Government processing time</p></small>
                  
                  </div>
</div>

              <div class="overview_sr " id="10">
                <div class="howToApp ">
                  <h3>FAQ's</h3>
                  <div class="row">
                    <div class=" col-md-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q1. Can a residential property be a registered office?

                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            Yes, for a registered office to be a commercial property there is no compulsion. A commercial or residential address can be provided.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Q2. Is there is need of alteration of MoA required for change in office?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            There is no requirement of alteration of MoA while changing your business address, as far as the proposed registered office is situated within the same state. If the office is shifted to some other state, situation clause that refers to State must be altered.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Q3. When should the Change in registered office be informed to RoC?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            Within 30 days of a change of premises RoC must be notified of the change in registered office by filing the appropriate documents. If the office is shifted to some other State, prior approval of RoC and RD must be obtained. 
                          </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                              Q4. Is it possible to have registered office outside India?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                            No it is not possible to have registered office situated outside India.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                              Q5. At the registered office what records must be maintained?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                            At the registered office of the company all books of accounts must be kept. But if they are kept at any other place in India as decided by the Board of Directors, To the Registrar of that place the company must send a notice, mentioning the full address of the place where the account books are kept.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                              Q6. Can two companies have same registered address?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                            Yes 
                          </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                              Q7.What is registered office of the company?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                            The registered office of a company is counted as a place where all the official connections related to the company is sent
                          </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                              Q8. How long does it take to change registered office address?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                            There is no charge to change your registered address, and it usually takes around two working days for your application form to be processed. 
                          </div>
                          </div>
                        </div>
    <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                              Q9. Is it mandatory to alter MOA and AOA as per the Companies Act 2013?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                            It isn't fundamental, however prudent that at whatever points an organization amends its articles, it ought to guarantee that ensuing to the amendment, the AOA is according to the format indicated under the Companies Act, 2013.
                          </div>
                        </div></div>
                    <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                              Q10. Is registered office same as head office?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                            Each business element has a chief place of business which characterizes the personality of the substance and its place of home. On account of an organization, this chief place of business is called registered office and if there should arise an occurrence of partnership or different business form it is call its head office. 
                          </div>
                          </div>
                        </div>        
                      </div>
                      <!-- accordion -->
                    </div>

                  </div>



                </div>


              </div>


















            </div>
          </div>














          <div class="col-md-3">
            <?php
            include_once('small_screen_form.php');
            ?>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-5 mb-3">
            <h3>
              <b> Types of Government Registrations</b>
            </h3>

          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-5">
            <div class="price_box ">
              <h4>BUSINESS</h4>

              <ul>
                <li>
                  Recommended For
                </li>
                <li>
                  Ease of Accommodating Investment
                </li>
                <li>
                  Limited Liability Protection
                </li>
                <li>
                  Tax Advantages
                </li>
                <li>
                  Perpetual Existence
                </li>
                <li>
                  Statutory Compliances
                </li>
              </ul>

              <div class="back_btn">
                <a href="#"> <button>Read More</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-9 mb-5">
            <div class="trstpartner_slider2">

              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->


                <!-- Wrapper for slides -->
                <div class="carousel-inner">


                  <div class="item active">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="price_box mn_ctr">
                          <h4> Private Limited Company </h4>

                          <ul>
                            <li>
                              Start-ups and growing companies
                            </li>
                            <li>
                              Very easy to accommodate
                            </li>
                            <li>
                              Yes
                            </li>
                            <li>
                              Few benefits
                            </li>
                            <li>
                              Yes
                            </li>
                            <li>
                              High
                            </li>
                          </ul>

                          <div class="back_btn">
                            <a href="#"> <button>Read More</button></a>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="price_box">
                          <h4> Limited Liability Partnership </h4>

                          <ul>
                            <li>
                              Professional services firms
                            </li>
                            <li>
                              Possible, but unlikely
                            </li>
                            <li>
                              Yes
                            </li>
                            <li>
                              Most efficient
                            </li>
                            <li>
                              Yes
                            </li>
                            <li>
                              Low
                            </li>
                          </ul>

                          <div class="back_btn">
                            <a href="#"> <button>Read More</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="price_box">
                          <h4> One Person Company </h4>

                          <ul>
                            <li>
                              Sole promoters
                            </li>
                            <li>
                              Possible, but severely unlikely
                            </li>
                            <li>
                              Yes
                            </li>
                            <li>
                              Few benefits
                            </li>
                            <li>
                              Yes
                            </li>
                            <li>
                              High
                            </li>
                          </ul>

                          <div class="back_btn">
                            <a href="#"> <button>Read More</button></a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>



                  <div class="item">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="price_box ">
                          <h4> Partnership Firm </h4>

                          <ul>
                            <li>
                              Home businesses
                            </li>
                            <li>
                              Almost impossible
                            </li>
                            <li>
                              No
                            </li>
                            <li>
                              Minimal
                            </li>
                            <li>
                              No
                            </li>
                            <li>
                              Minimal
                            </li>
                          </ul>

                          <div class="back_btn">
                            <a href="#"> <button>Read More</button></a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="price_box">
                          <h4> Sole Proprietorship </h4>

                          <ul>
                            <li>
                              Small traders and manufacturers
                            </li>
                            <li>
                              Impossible
                            </li>
                            <li>
                              No
                            </li>
                            <li>
                              Minimal
                            </li>
                            <li>
                              No
                            </li>
                            <li>
                              Minimal
                            </li>
                          </ul>

                          <div class="back_btn">
                            <a href="#"> <button>Read More</button></a>
                          </div>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section>
      <?php
      include_once("process.php");
      ?>
    </section>

    <section>
      <?php
      include_once('blog_section.php');
      ?>
    </section>

 <section>
         <?php
   include_once("testimonials.php");
   ?>
      
    </section>

    <section>
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="headingst text-center">
            <span>
              We are
            </span>
            <h2>
              associated with
            </h2>
          </div>
        </div>
        <div class="row icn_img">
          <div class="col-md-1 col-sm-1"> </div>
          <div class="col-sm-2 col-xs-2">
            <img src="img/icici.png" alt="icici">
          </div>
          <div class="col-sm-2 col-xs-2">
            <img src="img/paytm.png" alt="icici">
          </div>
          <div class="col-sm-2 col-xs-2">
            <img src="img/google.png" alt="icici">
          </div>
          <div class="col-sm-2 col-xs-2">
            <img src="img/instamojo.png" alt="icici">
          </div>
          <div class="col-sm-2 col-xs-2">
            <img src="img/zoho.png" alt="icici">
          </div>
          <div class="col-md-1 col-sm-1"> </div>

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
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function() {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5bc35b5361d0b770925136e4/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
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