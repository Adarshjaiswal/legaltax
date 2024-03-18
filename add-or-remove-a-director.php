<?php

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
 
    <?php
  foreach (addorremoveadirector() as $value) {
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
            <span>Add or Remove
            </span>
            <h1> a Director (Company)</h1>

            <p>
              Get Finest Directors on Board With Change of Directors.
            </p>
            <ul>
              <li> <b>6000+ </b> Business Served </li>
              <li><b>9.6/10 </b> Unfiltered Customer Rating </li>
              <li><b>100% </b> Satisfaction Guaranteed</li>
            </ul>

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
        How to Start Add or Remove a Director (Company)
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
                  <a href="#2">Why Change in Directors is Required?</a>
                </li>

                <li>
                  <a href="#3">Documents Required</a>
                </li>

                <li>
                  <a href="#4">Minimum Number of Directors?</a>
                </li>
                <li>
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
                  Directors are the mind behind the setup of a company or we can say they are the
                  brain of the company. They are the person who manage, control and administer the
                  operations of the company. The rotation of the directors takes place in one or the
                  various ways- either by the appointment of new director or resignation of the existing
                  one. Aim to carry out change of directors is always to ensure optimum combination
                  of experts on board for the company’s interest. The authority to appoint a director
                  must be made through consent of shareholders whereas the authority to approve the
                  resignation of the director lies with the members of BoD. Whether it is an
                  appointment, resignation or removal, the intimation is made to Ministry of Corporate
                  affairs for the change to come in effect.

                </p>

              </div>

              <div class="overview_sr " id="2">
                <h3>
                  Why Change in Directors is Required?


                </h3>
                <ul>
                  <li>
                    <p> <strong> On board hiring a new talent: </strong> with the emergence of growth of business,
                      strategies and alliances are developed, it basically requires inputs or
                      contribution of each department for effective planning. Also, with the addition
                      of new product line or department, an expert to lead the team can be hired in
                      a managerial position being the director of the company. This benefits the
                      company with focused efforts and specialization.</p>
                  </li>
                  <li>
                    <p> <strong> Inability to work by existing directors: </strong> The present director may not be able
                      to serve the company after a certain period due to retirement or other personal
                      reasons. Whether it is his death or resignation by the director, the company
                      must needs to make sure that the work is unaffected. It needs to process for
                      both appointment of a new director if any or discontinuations.</p>
                  </li>
                  <li>
                    <p><strong> Without dilution ownership assign operational responsibility: </strong> for day to
                      day operations Directors are responsible. With the appointment of an
                      additional director, the shareholder can assign the responsibilities related to
                      operations to director for keeping strategic control in hand. Here, a director
                      does not requires to subscribing to share capital, hence, voting rights and
                      ownerships of shareholders does not dilute with a new person on board.
                    </p>
                  </li>
                  <li>
                    <p> <strong>Number of director’s fall under statutory limit:</strong> the minimum number of
                      directors in the company has been described by The Companies Act, which is
                      2 and 3 for Private and Public company respectively. At any time during the
                      existence of the company, the number of directors shall not reduce below the
                      limit. The company must appoint a new director(s) within 6 months if there is
                      reduction in the number below 2/3.</p>
                  </li>

                </ul>



              </div>
              <div class="overview_sr " id="3">
                <h3>
                  What Are the Mandatory Documents Required for
                  Addition or Removal of Director?

                </h3>
                <img src="img/Documents-Required-For-Addition-Or-Removal-Of-Director.png" alt="Documents-Required-For-Addition-Or-Removal-Of-Director">
                <ul>
                  <li>
                    <p>
                      Digital Signature Certificate
                    </p>
                  </li>
                  <li>
                    <p>
                      PAN Card </p>
                  </li>
                  <li>
                    <p>
                      Photograph
                    </p>
                  </li>
                  <li>
                    <p>
                      Proof of residence
                    </p>
                  </li>
                </ul>


              


              </div>
              <div class="overview_sr " id="4">
                <h3>
                  What Is the Minimum Number of Directors?
                </h3>

                <img src="img/Number of directors.png" alt="Number of directors">
                <!-- <ul type="1">
                  <b>
                    <li>Public Company:
                    </li>
                  </b>
                  <p>A minimum of 3 Directors Are Required for All Time.
                  </p>

                  <b>
                    <li>Private Company:</li>
                  </b>
                  <p> Minimum of 2 Directors Are Required for All Time.
                  </p>


                  <b>
                    <li>
                      One Person Company: </li>
                  </b>
                  <p>
                    Minimum 1 Director Is Required for All
                    Time.</p>

                </ul> -->
              </div>

              <section>

                <div class="">
                  <div class="row">
                    <div class="col-md-6" style="padding: 0px; margin: 0px;">
                      <div class="left-side-box">
                        <p><b>Change Directors in 3 Easy Steps </b></p>

                        <ol>
                          <li>Answer Quick Questions
                            <ul>
                              <li>Pick a Package that best fits your requirements</li>
                              <li>Fill in our questionnaires that take less than 10 minutes</li>
                              <li>Provide basic details & documents required for registration</li>
                              <li>Make payment through secured payment gateways</li>
                            </ul>
                          </li>

                          <li>Experts are Here to Help
                            <ul>
                              <li>Assigned Relationship Manager
                              </li>
                              <li>Preparation of necessary documents
                              </li>
                              <li>Preparation and fling of Application
                              </li>
                              <li>Updated MCA master data with modifed details</li>
                          </li>
                          </ul>

                          <li>Director is Added or Removed
                            <ul>
                              <li>All it takes is 5-7working days*</li>
                            </ul>
                        </ol>
                        <p>Subject to Government processing time </p>
                      </div>
                    </div>


                    <div class="col-md-6" style="padding: 0px; margin: 0px;">
                      <div class="right-side-box">
                        <p class="text-white"><b>Process for Addition or Removal of
                            Directorss</b></p>

                        <ol>
                          <li>Day 1
                            <ul>
                              <li>Consultancy for requirement of change of directors
                              </li>
                              <li>Collection of basic Information & documents
                              </li>
                              <li>Application for DSC (for director to be appointed)</li>

                            </ul>
                          </li>

                          <li>Day 2-4
                            <ul>
                              <li>Drafting necessary resolutions and documents

                              </li>
                              <li>Provide documents required provided after signature
                              </li>

                          </li>
                          </ul>

                          <li>Day 5-7
                            <ul>
                              <li>Preparation of online application
                              </li>
                              <li>Filing of application for changing directors

                              </li>
                              <li>Sharing master data from MCA with updated information
                              </li>
                            </ul>
                        </ol>



                      </div>
                    </div>
                  </div>
              </section>





              <div class="overview_sr " id="10">
                <div class="howToApp ">
                  <h3>Frequently Asked Questions (FAQs)

                  </h3>
                  <div class="row">
                    <div class=" col-md-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Q1. Is It Necessary for the Director to Subscribe Shares for His Appointment?
                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              There is no as such requirement to subscribe the shares by the director. If the Articles
                              (AoA) of the company prescribe for any such subscription, it must be fulfilled as a
                              condition for his appointment.

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. What Can Be Done if the Number of Director(S) in Any Company is Less Than
                                2/3?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              If the total number of director is less than the prescribed number, the company must
                              direct a director(s) in the company to fulfill the requirement within 6 month for
                              resignation/removal/death of the concerned director.



                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. Can a Director Resign Himself From the Company?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, a director can resign voluntarily/himself. The notice of resignation must be
                              served to company stating reason of resignation. The resigning director must need
                              to file.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. If I Already Have Din, Do I Have to Apply for Another Din?


                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              No, if you already have DIN you don’t required to obtain another DIN. It is allotted
                              permanently and can be used for a person’s subsequent appointment in any
                              company/LLP.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. What Should Be Done to Remove a Director From a Company?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">

                              For the removal of the director from the company, the directors shall conduct a
                              meeting of members for their consent after serving special notice in this regard. The
                              present director must be given an opportunity to represent his grounds.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. What should be done if the director has filed their resignation?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              Once the director has filed his resignation with the MCA and the company, now it
                              is the responsibility of the company to intimate the change to MCA. Within 30 days
                              from the resignation the requisite e-form is required to be filed. Further, the vacancy
                              of the director is required to be filled as per the requirement.

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. Is It Required by the Director to Sale/transfer While Ending Tenure a Director
                                In a Company?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              No, even after the end of the tenure as a director, a person can still holds the share
                              in the company. However, if the shares are subscribed in the company as a condition
                              provided by AoA, the shares are also required to be disposed of in the manner
                              provided in AoA.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. While changing the director in the company how transfer of shares can be
                                done?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              By executing the Share Transfer deed the shares of the company shall be transferred
                              and also be affixing the stamps as per the rates mentioned in the Stamp Act of the
                              concerned State after the change.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. Can a Body Corporate Be Appointed as Director in the Company?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              Only an individual can act as a director in the company. Hence, if any LLP or
                              Company is interested to be added as a director in the company, only its
                              representative may act as the director.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. Is it possible for the appointment of a director in a Private Company if they are
                                NRIs/Foreign Nationals?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, an NRI or Foreign National can be a Director of a Private Limited Company
                              after obtaining Director Identification Number. At least, one on board director must
                              be resident of Indian any time after incorporation of company.
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