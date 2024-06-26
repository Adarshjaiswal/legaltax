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
  foreach (addorremoveapartner() as $value) {
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
    
    
 
  




  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://legaltax.in/add-or-remove-a-partner.php">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<br />
<b>Notice</b>:  Trying to access array offset on value of type int in <b>/home/u736935735/domains/legaltax.in/public_html/add-or-remove-a-partner.php</b> on line <b>36</b><br />
">
  <meta property="og:description" content="<br />
<b>Notice</b>:  Trying to access array offset on value of type int in <b>/home/u736935735/domains/legaltax.in/public_html/add-or-remove-a-partner.php</b> on line <b>37</b><br />
">
  <meta property="og:image" content="	https://legaltax.in/img/addintion-removal-director.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="legaltax.in">
  <meta property="twitter:url" content="https://legaltax.in/add-or-remove-a-partner.php">
  <meta name="twitter:title" content="<br />
<b>Notice</b>:  Trying to access array offset on value of type int in <b>/home/u736935735/domains/legaltax.in/public_html/add-or-remove-a-partner.php</b> on line <b>36</b><br />
">
  <meta name="twitter:description" content="<br />
<b>Notice</b>:  Trying to access array offset on value of type int in <b>/home/u736935735/domains/legaltax.in/public_html/add-or-remove-a-partner.php</b> on line <b>37</b><br />
">
  <meta name="twitter:image" content="	https://legaltax.in/img/addintion-removal-director.png">

  <!-- Meta Tags Generated via https://www.opengraph.xyz -->
        
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
            <span>ADD OR
            </span>
            <h1>REMOVE A PARTNER (LLP)</h1>

            <p>
             Assure you are fully complied for change in LLP partners.
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
How to Start Add or Remove a Partner (LLP)
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
                  <a href="#2">WHY IS THE CHANGE OF PARTNERS REQUIRED?</a>
                </li>

                <li>
                  <a href="#3">Documents Required</a>
                </li>

                <li>
                  <a href="#4">WHAT ARE THE MINIMUM NUMBER OF PARTNERS?</a>
                </li>
                <li>
                  <a href="#5">PROCESS FOR ADDITION OR REMOVAL OF PARTNERS</a>
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
                  It is the partner who run a Limited Liability Partnership firm. From its management to the
                  operation, the partners helps the LLP towards their goals and vision. New partners are added or
                  the existing one leave. It mainly does not affect the status of the LLP, but it will definitely impacts
                  the growth of the business as well as responsibilities of other partners. Only after the approval
                  from the Ministry of Corporate Affairs the change in partners and their details can be affected.
                  The consent of other partners must be obtained to add or remove a partner from LLP, It is followed
                  by a change in the Agreement of LLP and application to MCA approve the changes. The
                  application to MCA must be filed within 30 days of effective date of the change.
                </p>

              </div>

              <div class="overview_sr " id="2">
                <h3>WHY IS THE CHANGE OF PARTNERS REQUIRED?</h3>
                <ul>
                  <li>
                    <p> <b> Expertise with additional Capital: </b> A partner is either appointed for the need of the
                      expertise or capital. With capital increase, the borrowing power of the firm increases with
                      the opportunities of loan. Admission of a partner not only benefits the capital form but it
                      also enhances the knowledge and skill. The knowledge diversity and goodwill base helps
                      the business to grow far</p>
                  </li>

                  <li>
                    <p><b> Inability of the existing Partner: </b>After a certain period of time the existing partner of the
                      LLP may not be able to contribute his full time, due to retirement or various other reasons.
                      Although the existence of LLP may not be affected by the exit of one partner, it must be
                      dealt with intimation to MCA and also the appointment of new partner, if required.</p>
                  </li>

                  <li>
                    <p><b> Change in terms of Partnership:</b> There is an agreement between the partners, the terms
                      can be changed mutually at any time. There might be an impact on the willingness of one
                      or other partner</p>
                  </li>

                  <li>
                    <p><b>Number of Designated Partners:</b> There is a minimum requirement of 2 Designated
                      partners all time to maintain every LLP. If there is reduction of partner below 2 due to
                      resignation of a designated partner from LLP, the LLP must appoint a new designated
                      Partner or the existing Partner position (status) must be changed by appointing a new
                      designate Partner.
                    </p>
                  </li>
                </ul>
              </div>
              <div class="overview_sr " id="3">
                <h3>
                  WHAT ARE THE MANDATORY DOCUMENTS REQUIRED FOR
                  ADDITION OR REMOVAL OF DIRECTOR?

                </h3>

                <p>
                  The documents that are required for addition or removal of partner are mentioned below:
                </p>

                <ul>
                  <li>
                    <p> <b> LLP Agreement</b>

                    </p>
                  </li>
                  <li>
                    <p> <b> Residence Proof</b>

                    </p>
                  </li>
                  <li>
                    <p> <b> Photograph</b>
                    </p>
                  </li>
                  <li>
                    <p> <b> PAN Card</b>
                    </p>
                  </li>
                </ul>

                <img src="img/addintion-removal-director.png" alt="addintion-removal-director">
              </div>



              <div class="overview_sr " id="4">
                <center>
                  <h3>
                    WHAT ARE THE MINIMUM NUMBER OF PARTNERS?

                  </h3>
                </center>
                <div class="container-fluid" style="background-color:#2a3362">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="cy">
                        <h3>DESIGNATED PARTNERS</h3>
                        <p>Minimum 2 designated partners <br>all time</p>
                      </div>
                    </div>

                    <div class="col-md-6 ">
                      <div class="cy">
                        <h3>OTHER PARTNERS</h3>
                        <p>LLP may run without other types of partner</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cx mt-5">
                  <h4><strong>Change Partners in 3 Easy Steps:</strong></h4>
                  <ol>
                    <li>Answer quick questions
                      <ul>
                        <li>
                          <p>Pick a Package that best fits your requirements</p>
                        </li>
                        <li>
                          <p>Spare less than 10 minutes to fill in our Questionnaires</p>
                        </li>
                        <li>
                          <p>Provide basic details & documents required for change</p>
                        </li>
                        <li>
                          <p>Make payment through secured payment gateways</p>
                        </li>
                      </ul>
                    </li>
                    <li>Experts are Here to help
                      <ul>
                        <li>
                          <p>Assigned Relationship Manager </p>
                        </li>
                        <li>
                          <p>Supplementary agreement for a change of partners</p>
                        </li>
                        <li>
                          <p>Preparation of other necessary documents </p>
                        </li>
                        <li>
                          <p>Preparation and filling of Application</p>
                        </li>
                        <li>
                          <p>Updated MCA master data with modified details</p>
                        </li>
                      </ul>
                    </li>
                    <li>Partner is Added or Removed
                      <ul>
                        <li>
                          <p>All it takes is 7-10 working days</p>
                        </li>
                      </ul>

                    </li>
                  </ol>
                  <small>
                    <p style="color:grey">*Subject to Government processing time</p>
                  </small>

                </div>
              </div>

              <div class="overview_sr " id="5">
                <div class="cz">
                  <h3 >
                    WHAT IS THE PROCESS FOR ADDITION OR REMOVAL OF PARTNERS?
                  </h3>
                  <ol style="list-style-type:none">
                    <li>
                      <b>DAY 1:</b>
                      <ul>
                        <li> Consultancy for the requirement of change of partners</li>
                        <li>Collection of basic information & documents</li>
                        <li>Application for DSC(for partner to be appointed)</li>
                      </ul>
                    </li>
                    <li>
                      <b>DAY 2-3:</b>
                      <ul>
                        <li>Drafting of necessary Resolutions and Documents</li>
                        <li>Drafting of Supplementary Agreement</li>
                        <li>Provide documents required provided after signature</li>
                      </ul>
                    </li>
                    <li>
                      <b>DAY 4-7:</b>
                      <ul>
                        <li>Payment of stamp duty on the supplementary agreement</li>
                        <li>Preparation of online application</li>
                        <li>Filling of application for change</li>
                      </ul>
                    </li>
                  </ol>

                </div>

              </div>


             








 

              <div class="overview_sr " id="9">
                <h3>Why to Choose Legaltax?</h3>
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
                                Q1.If the Partner exiting from LLP what are their rights and liabilities?


                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              In the original LLP Agreement the rights and liability of the existing partner will be prescribed.
                              Also, the rights and restrictions can be specifically mentioned in the Agreement of Supplement
                              with any amount of capital to be reimbursed and mode of payment
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. If I am a partner in Limited Liability Partnership can I resign myself?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              The partner must intimate about their intention to resign to the LLP and remaining partner, in order
                              to resign from LLP. For the stated purpose, at least 30 days’ notice is required to be served by the
                              resigning partner.

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. Is it necessary for a designated partner to contribute capital?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              It is not mandatory to bring capital to the LLP. But, while addition one may contribute the amount
                              agreed by and between all the Partners including the present, in any form whether tangible or
                              intangible.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. If I already have one DIN, do I need to apply for another?



                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              DIN is basically unique number assigned by MCA to individuals that allows one to become a
                              Designated Partner or Director of the company of any LLP. DIN is allotted permanently and it can
                              be used for subsequent appointment in another LLP or company..
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. Is it required to pay Stamp duty on Supplementary Deed?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              As per the rate prescribed by the respective state, the stamp duty shall be paid according to the
                              added capital in the LLP. Where there is the addition of capital while addition or removal, the
                              Supplementary Agreement shall be executed by payment of Rs 100/- as stamp duty.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. What is the main difference between a Partner and a designated partner?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              The most important difference between both types of Partners is the accountability. Here, the
                              partner is himself responsible for the acts and omissions, the designated partners are mostly and
                              additionally responsible towards compliance and operational matters of the LLP, including penal
                              provisions.

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. When we shall file the Supplementary deed with MCA?


                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              Within 30 days the Supplementary Deed must be filed from effective date of change or from the
                              execution date (whichever falls earlier). The delay in filing may cause you additional fee of Rs
                              100 per day till the date of filing.
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