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
  foreach (changecompanyname() as $value) {
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
            <span>Change </span>
            <h1>Company Name</h1>

            <p>
             Enhance brand value with company name change.
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
        How to Start Change Company Name
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
                  <a href="#2">WHY TO CHANGE COMPANY NAME?</a>
                </li>

                <li>
                  <a href="#3">Documents Required</a>
                </li>

                <li>
                  <a href="#4">FEATURES</a>
                </li>
                <li>
                  <a href="#5">WHAT IS THE PROCESS FOR ADDITION OR REMOVAL OF
                    DIRECTORS?</a>
                </li>


                <li>
                  <a href="#7"> Procedure to obtain the NSIC Certificate</a>
                </li>
                <li>
                  <a href="#8">Benefits</a>
                </li>
                <li>
                  <a href="#9">Why to Choose Legal Tax</a>
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
                  After incorporation a company name can be changed any time. It is an entity which is regulated by law, specific process has to be followed provided by the Companies Act, 2013. The process include conduction of meeting of board members for their respective consent, which will be followed by reservation of name and approval from Central Government for the said change. After updating the Register of Companies, Fresh Certificate of Incorporation will be issued by RoC in new name. The existence of the company has not been impacted by the change in name of the Company, which leaves all the assets and liabilities unaffected.
                </p>

              </div>

              <div class="overview_sr " id="2" style="background-color: #797e9d; color: #fff; padding: 10px;">


                 
                  <h3 class="text-center">WHY TO CHANGE COMPANY NAME?</h3>
                  <div class="row">
                    <div class="col-md-6" >
                      <h3 style="color:orange">Voluntary Changes</h3>
                      <p>The directors or the shareholders may voluntarily decide to change the business name mutually for any justified reason. Name can be used to reflect the vision or any characteristic of the company. To make the name relatable and easy for the consumer can also be a reason to change business.</p>
                    </div>
                    <div class="col-md-6" >
                      <h3 style="color:orange">Change in Business Objective</h3>
                      <p>Change in the name may be required due to change of business objective. If the name does not truly reflect the altered objective, it can be changed in line with the objective. The company must apply for a change if the Register has directed to do so in such case.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <h3 style="color:orange">Enhance Brand Value <br>(Rebranding)</h3>
                      <p>Name assumes the brand value of the company and intention to improve the brand value is often a reason to change the name. Also, industries where trends change over a period of time, an approprite name can be chosen to be in line with the trend and create a distinct identity. Change of name can prove to be a good marketing strategy to enhance brand value.</p>
                    </div>
                    <div class="col-md-6">
                      <h3 style="color:orange">Discard boundaries assumed by name</h3>
                      <p>By use of words representing geographical region or offrings, the name defines the boundary of operations. Expansion by capturing wide market includes demands removing boundaries assumed by the name. Further, if the name has become irrelevant to products or services offered it must be changed to target the right audience.</p>
                    </div>
                  </div>
 
              </div>
              <div class="overview_sr " id="3">
                <h3>
                  WHAT ARE THE MANDATORY DOCUMENTS REQUIRED TO CHANGE THE LIMITED COMPANY NAME
                </h3>

                <p>
                  The documents that are required to change the limited company name are mentioned below:
                </p>

                <ol>
                  <li>
                    <p> <b>MoA & AoA: </b>
                      A latest copy of amended MoA and AoA of the company.
                    </p>
                  </li>
                  <li>
                    <p> <b>COI (Certificate of Incorporation): </b>
                      Company to be provided Certificate of Incorporation.
                    </p>
                  </li>
                  <li>
                    <p> <b>PAN Card: </b>
                      Copy of the PAN card of the company to be provided.
                    </p>
                  </li>
                  <li>
                    <p> <b>DSC (Digital Signature Certificate):</b>
                      One of the authorized director to be provided DSC.
                    </p>
                  </li>
                </ol>
                <img src="img/change-limited-company-name.png" alt="change-limited-company-name">
              </div>
              <div class="overview_sr " id="4">
                <h3>
                  FEATURES TO BE PRESENT IN THE COMPANY’S NEW NAME
                </h3>
                <ol>
                  <li><b>UNIQUE NAME: </b>Mainly it builds the brand of the company and preferably be a coined word.</li>
                  <li><b>OBJECT OF THE BUSINESS: </b>Second part of the name should suggest the business related activity of the company.</li>
                  <li><b>CONSTITUTION TYPE: </b>The company name must end with “Private Limited” or “Limited” as suffix.</li>
                  <div class="container-fluid mt-5 mb-5" style="background-color:#797e9d; color: #fff;">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="cy">
                          <h3>UNIQUE NAME</h3>
                          <p>Mainly it builds the company brand and preferably be a coined word</p>
                        </div>
                      </div>

                      <div class="col-md-4 ">
                        <div class="cy">
                          <h3>OBJECT OF THE BUSINESS</h3>
                          <p>Second part of name should suggest the business activity of the company</p>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="cy">
                          <h3>CONSTITUTION TYPE</h3>
                          <p>Name of the company must end with"Private Limited" or "Limited" as suffix</p>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="cx">
                    <h4><strong>Change company name in 3 Easy Steps</strong></h4>
                    <ol>
                      <li>Answer quick questions
                        <ul>
                          <li>
                            <p>Fill in our questionnaires that take less than 10 minutes </p>
                          </li>
                          <li>
                            <p>Provide basic details & documents required for registration </p>
                          </li>
                          <li>
                            <p>Make payment through secured payment gateways</p>
                          </li>
                        </ul>
                      </li>
                      <li>Experts are Here to Help
                        <ul>
                          <li>
                            <p>Assigned Relationship Manager </p>
                          </li>
                          <li>
                            <p>Search report on name availability</p>
                          </li>
                          <li>
                            <p>Application for Name Reservation </p>
                          </li>
                          <li>
                            <p>Drafting of necessary resolution and documents </p>
                          </li>
                          <li>
                            <p>Alteration of MoA and AoA</p>
                          </li>
                          <li>
                            <p>Filling application for name change</p>
                          </li>
                          <li>
                            <p>Fresh Certificate of Incorporation</p>
                          </li>
                          <li>
                            <p>Updated MCA master data with modified details</p>
                          </li>
                        </ul>
                      </li>
                      <li>Use new name now
                        <ul>
                          <li>
                            <p>All it takes is 10-12 working days</p>
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
                  <h3 style="color:white">
                    Process to change company name online
                  </h3>
                  <ol style="list-style-type:none">
                    <li>
                      <b>DAY 1-4</b>
                      <ul>
                        <li> Collection of basic Information & documents</li>
                        <li> Conducting Board Meeting and passing a resolution </li>
                        <li>Checking company name availability</li>
                        <li>Reservation of name through "RUN"</li>
                      </ul>
                    </li>
                    <li>
                      <b>DAY 5-6</b>
                      <ul>
                        <li>Conducting meeting of members amd passing a resolution</li>
                        <li>Preparation of documents relating to the application of change</li>
                        <li>Provide documents prepared after signature</li>
                      </ul>
                    </li>
                    <li>
                      <b>DAY 7-8</b>
                      <ul>
                        <li> Preparation and filling application with MCA</li>
                      </ul>
                    </li>
                    <li>
                      <b>DAY 8 onwards</b>
                      <ul>
                        <li>Government processing time</li>
                        <li>Issuance of fresh Col with a new name</li>
                      </ul>
                    </li>
                  </ol>
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
                                Q1. What are the approvals which are required for change in name of the company?

                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              <b> To effect the change in name, some consent has to be obtain by the company for approval:</b>
                              <ol>
                                <li>Consent of the board</li>
                                <li>Approval from concerned RoC</li>
                                <li>Approval from Central Government</li>
                                <li>Consent from the members of the company</li>
                              </ol>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. How we can reserve a new name for the company?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              A web form “RUN” (Reserve Unique Name) has been introduced by Ministry for reservation of new name of existing companies. A company can apply with 2 different name with its significance. The names should be unique and in accordance with the provisions.


                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. To change a limited company name is there is any restriction?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              For the name change of the private limited company there is no restriction provided, which may be the case for a Public company. The names chosen for application must be in conformity with the prescribed rules.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. Is it required to altered MoA & AoA?


                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, both MoA and AoA must be altered with the new name. The copy of the proposed alteration is filed in INC-24.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. When will be the new name of company be effective?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              It will be effective only after issuance of a fresh Certificate of Incorporation. The concerned officer on his satisfaction of application made will issue a fresh Certificate of Incorporation with a new name.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. Whether change of object can be processed simultaneously?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              If the change of name is made due to change in the main object, both the procedures can be carried on simultaneously. As the Government approval is involved, the period can vary based on the response and time take by RoC.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What will be the effect of changing company name?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              After the name change, the company has to update its name with all the ministries it is registered with. All the stationaries i.e. Business cards, letterheads, display board, etc. must be updated with a new name. An important change is ratification of contracts entered in the previous name. The parties to contract must ratify said contracts after adopting a new name.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. For PAN change when should the application be made?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              Company’s new name can be updated in PAN or any other registration after fresh Certificate of Incorporation is issued.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q9. When the change for application should be made?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              Within 30 days of obtaining the consent of members in General Meeting (held after reservation of name) the application for name change must be made. Intimation of resolution is made in form MGT-14 whereas the application for the change of the name made in form INC-24.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q10. Is it necessary to display the old name with the new name of the company?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes. For a period of two years from change, wherever the company’s name has been displayed, the previous must also be displayed.
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