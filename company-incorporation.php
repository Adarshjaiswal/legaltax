<!doctype html>
 <?php
 require_once('include/connection.php');
require_once('include/model.php');
require_once('include/include-design.php');
require_once('include/constant.php');
 ?>

<!doctype html>
<html lang="en">
<head>
    
     <?php
  include_once('head.php');
  ?>
    <?php
  foreach (metacompanyincorporation() as $value) {
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

 <link rel="stylesheet" href="css/style.css">
 
 
</head>



<body>


  <main role="main">

<?php
   include_once('header.php');
   ?>
    <div class="col main_srv_bnr2">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            <span>Online </span>
            <h1>Company Registration </h1>
            <p>
              Now, getting a Private Limited Company has become quite simple. Get your company registered within the least time and @ lowest fees assured.
            </p>
            <ul>
              <li>
                Company Name Reservation with MCA
              </li>
              <li>
                DSC & DIN
              </li>
              <li>PAN & TAN</li>
              <li>
                Corporate Identification Number (CIN)
              </li>
              <li>
                Private Company Incorporation Certificate
              </li>
              <li>
                Free Consultation with Experts (CA/CS/Lawyers)
              </li>
            </ul>
          </div>
          <div class="col d-lg-inline-block d-none my-3 form_servCmp" data-aos="fade-right">
            <!-- form -->
            <?php
            include_once("banner_form.php");
            ?>
            <!-- form -->
            
          </div>
        </div>
      </div>
    </div>

    <!-- mobile form -->
    <div class="col">
      <div class="col d-inline-block d-lg-none my-3 form_serv">
        <!-- form -->
        <form>
          <h3>
            Get Started
          </h3>
          <div class="row">


            <div class="form-group col">
              <!-- <label for="exampleInputPassword1"></label> -->
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
            </div>

            <div class="form-group col-12">
              <!-- <label for="exampleInputEmail1">Email address</label> -->
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <!-- <label for="exampleInputPassword1">Phone</label> -->
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
            </div>

            <div class="form-group col-12">
              <!-- <label for="exampleInputPassword1">State</label> -->
              <select name="state" id="state" class="form-control" id="exampleInputPassword1">

                <option value="">State</option>

                <option value="Andhra Pradesh">Andhra Pradesh</option>

                <option value="Arunachal Pradesh">Arunachal Pradesh</option>

                <option value="Assam">Assam</option>

                <option value="Bihar">Bihar</option>

                <option value="Chhattisgarh">Chhattisgarh</option>

                <option value="Delhi">Delhi</option>

                <option value="Goa">Goa</option>

                <option value="Gujarat">Gujarat</option>

                <option value="Haryana">Haryana</option>

                <option value="Himachal Pradesh">Himachal Pradesh</option>

                <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>

                <option value="Jharkhand">Jharkhand</option>

                <option value="Karnataka">Karnataka</option>

                <option value="Kerala">Kerala</option>

                <option value="Madhya Pradesh">Madhya Pradesh</option>

                <option value="Maharashtra">Maharashtra</option>

                <option value="Manipur">Manipur</option>

                <option value="Meghalaya">Meghalaya</option>

                <option value="Mizoram">Mizoram</option>

                <option value="Nagaland">Nagaland</option>

                <option value="Odisha">Odisha</option>

                <option value="Punjab">Punjab</option>

                <option value="Rajasthan">Rajasthan</option>

                <option value="Sikkim">Sikkim</option>

                <option value="Tamil Nadu">Tamil Nadu</option>

                <option value="Telangana">Telangana</option>

                <option value="Tripura">Tripura</option>

                <option value="Uttarakhand">Uttarakhand</option>

                <option value="Uttar Pradesh">Uttar Pradesh</option>

                <option value="West Bengal">West Bengal</option>

                <option value="Others">Others</option>

              </select>
            </div>
            <div class="col-12"><button type="submit" class="btn bs2 text-white">Order Now</button> </div>

          </div>


        </form>
        <!-- form -->
        <div class="row hide992" bis_skin_checked="1">
          <div class="col-6 mt-4 user-details p-1" bis_skin_checked="1">
            <p class="text-black mb-0 text-center" style="font-weight: 900;font-size:22px;">2 Lakhs</p>
            <p class="text-black text-center" style="font-weight: 600;">Happy Customers</p>
          </div>
          <div class="col-6 mt-4 user-details p-1" bis_skin_checked="1">
            <p class="text-black mb-0 text-center" style="font-weight: 900;font-size:22px;">300+</p>
            <p class="text-black text-center" style="font-weight: 600;">Professionals</p>
          </div>
          <div class="col-12 mt-0 user-details text-center p-1" bis_skin_checked="1">
            <p class="text-black mb-0  text-center" style="font-weight: 900;font-size:22px;">250+</p>
            <p class="text-black text-center" style="font-weight: 600;">Partners</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    <!-- mobile form -->



    <!-- how it work -->
    <section>
      <div class="col">
        <div class="container">
          <div class="clearfix">&nbsp;</div>
          <div class="clearfix">&nbsp;</div>
          <h2 id="section4" class="text-center" class="heading1">
            Your Private Limited Company With LegalTax
          </h2>
          <p class="text-center">
            Registering a Company is quick, easy, and can be done online with LegalTax in 3 simple steps:
          </p>
          <div class="clearfix">&nbsp;</div>
          <div class="clearfix">&nbsp;</div>
          <div class="col">
            <div class="row">
              <div class="col-4 ">
                <div class="arr">

                </div>
              </div>
              <div class="col-4 ">
                <div class="arr">
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </div>
              </div>
              <div class="col-4">
                <div class="arr">
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #79BD9A;">
                  <img src="img/file.png" alt="file  icon">
                  <p>
                    We help you register your directors with the Ministry of Corporate Affairs (MCA). <br>

                    Step 1
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #F0BC5E;">
                  <img src="img/phone-call.png" alt="phone-call ">
                  <p>
                    We help you pick the right company name.<br>

                    Step 2
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #FE6663;">
                  <img src="img/draft.png" alt="draft">
                  <p>
                    We draft and file the documents required for your company registration (MoA and AoA).<br>

                    Step 3
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
      </div>

    </section>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sideMenu_serv">
              <ul>
                <li>
                  <a href="#1" class="act"> Introduction </a>
                </li>
                <li>
                  <a href="#2"> What is company registration in India?</a>
                </li>
                <li>
                  <a href="#3"> Benefits </a>
                </li>
                <li>
                  <a href="#4">Why you should register your company </a>
                </li>
                <li>
                  <a href="#5">Rules for Registration </a>
                </li>
                <li>
                  <a href="#6">How to Register a company/startup in India </a>
                </li>
                <li>
                  <a href="#7"> Documents Required </a>
                </li>
                <li>
                  <a href="#8"> Timeline </a>
                </li>
                <li>
                  <a href="#9"> FAQ's</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="laoded_cntent">
              <div class="overview_sr " id="1">
                <h3>
                  Introduction
                </h3>
                <p>
                  Private limited company is a voluntary association of two or person. It has limited liability, brand recognition and perpetual succession.
                </p>

              </div>

              <div class="overview_sr " id="2">
                <h3>
                  What is company registration in India?
                </h3>
                <p>
                  It’s a registration act of registration of your business with the government of india.For the startup of new business company registration is very important to be done. By registration of your business it will help the government that your business is not illegal and its exists legally. Those businesses which are not registered under the act will consider being illegal. Through company registration you will easily get loans and government schemes which can be very helpful for the future growth goal of the business. The owner also gets the license for running his /her business legally in the city or country in which it operates.
                </p>
              </div>
              <div class="overview_sr " id="3">
                <h3>
                  Benefits of Company Registration in India
                </h3>

                <ul>
                  <li>
                    <p>
                      You are at low risk
                    </p>
                  </li>
                  <li>
                    <p>
                      You can raise easy capital
                    </p>
                  </li>
                  <li>
                    <p>
                      Legitimacy and brand awareness
                    </p>
                  </li>
                  <li>
                    <p>
                      Builds goodwill and also supports more customer attraction
                    </p>
                  </li>
                  <li>
                    <p>
                      Gives reliable investors bank credits and good investment with ease
                    </p>
                  </li>
                  <li>
                    <p>
                      Provides cover of the responsibility to protect the company’s assets
                    </p>
                  </li>
                  <li>
                    <p>
                      Bigger commitment to wealth and greater stability
                    </p>
                  </li>
                </ul>

                <img src="img/company_reg_benfits.png" alt="company_reg_benfits">
              </div>

              <div class="overview_sr " id="4">
                <h3>
                  Reasons why you should register your company
                </h3>

                <ul>
                  <li>
                    <p>
                      Raising money
                    </p>
                  </li>
                  <li>
                    <p>
                      Goodwill
                    </p>
                  </li>
                  <li>
                    <p>
                      Better Credibility among customers
                    </p>
                  </li>
                  <li>
                    <p>
                      Limited liability of the Promoters
                    </p>
                  </li>
                  <li>
                    <p>
                      Perpetual Succession
                    </p>
                  </li>
                  <li>
                    <p>
                      No capital constraint
                    </p>
                  </li>
                </ul>
              </div>

              <div class="overview_sr " id="5">
                <h4>
                  Rules for Registering Private Limited Company
                </h4>

                <ul>
                  <li>
                    <p>
                      Minimum 2 directors and 1 shareholder are required.
                    </p>
                  </li>
                  <li>
                    <p>
                      Shareholders cannot transfer their shares as per the AOA.
                    </p>
                  </li>
                  <li>
                    <p>
                      Maximum no of shareholder is 50 limited.
                    </p>
                  </li>
                  <li>
                    <p>
                      General public cannot but share of private limited company.
                    </p>
                  </li>
                  <li>
                    <p>
                      Deposits only allowed from the members and directors.
                    </p>
                  </li>
                </ul>

              </div>

              <div class="overview_sr " id="6">
                <h4>
                  How to register a company/startup in India
                </h4>
                <p>
                  <b>
                    The following steps are required for your company registration process given below:
                  </b>
                </p>
                <ul>
                  <li>
                    <p>
                      <a href="https://legaltax.in/digital-signature-online-dsc.php" style="color: blue;"> DSC - Digital Signature Certificate</a>  this is the first step for registering a company. You acquire DSC to ensure the security and authenticity of the documents which is filed electronically.
                    </p>
                  </li>
                  <li>
                    <p>
                    <a href="https://www.mca.gov.in/MinistryV2/applyfordin.html" style="color: blue;"> Director Identification Number (DIN):</a>   This second step for registering a company. This concept is first time introduced with the insertion of sections 266 A to 266 G of Companies Act, 2006.
                    </p>
                  </li>
                  <li>
                    <p>
                      New account on MCA portal
                    </p>
                  </li>
                  <li>
                    <p>
                      Apply for the company to be registered
                    </p>
                  </li>
                </ul>


              </div>


              <div class="overview_sr " id="7">
                <h4>
                  Documents for Private Limited Company Registration
                </h4>

                <img src="img/document_req_pvt_comp_reg.png" alt="document_req_pvt_comp_reg">

                <p>
                  <b>
                    Documents required before submission of a company:
                  </b>
                </p>
                <ul>
                  <li>
                    Form-1 for incorporation of a company
                  </li>
                  <li>
                    DIN of all those directors of a proposed company
                  </li>
                  <li>
                    Original copy of formal letter issued by ROC regarding availability of Company name
                  </li>
                  <li>
                     DSC - Digital Signature Certificate
                  </li>
                  <li>
                    Form-32 for particulars of proposed directors, managers and secretary
                  </li>
                  <li>
                    Form-18 for situation or address of the proposed company
                  </li>
                </ul>

                <p>
                  <b>
                    Documents required for DSC (Digital Signature Certificate)
                  </b>
                </p>
                <p>
                  For the registration of the company, directors and partners need to use DSC to submit necessary forms to the Indian government. The documents required to get DSC will differ based on the applicants type . Some instructions should follow by the applicant before submitting the application for DSC:
                </p>
                <ul>
                  <li>
                    The applicant should sign across his/her photo in the application form.
                  </li>
                  <li>
                    The applicant should get all the supporting documents attested by Bank Manager, Gazette Officer or Postmaster.
                  </li>
                  <li>
                    The applicant’s signature must be in Blue Ink.
                  </li>
                  <li>
                    The applicant’s signature must be the same as it is in his/her Identity Proof.
                  </li>
                </ul>

                <p>
                  <b>
                    Indian Nationals will require the following documents for DSC:
                  </b>
                </p>
                <ul>
                  <li>
                    PAN Card of the Applicant
                  </li>
                  <li>
                    Bank Account Passbook
                  </li>
                  <li>
                    Address Proof
                  </li>
                  <li>
                    Passport size photo
                  </li>
                  <li>
                    Post Office ID Card
                  </li>
                  <li>
                    Aadhar Card
                  </li>
                  <li>
                    Phone number and email id
                  </li>
                </ul>


                <p>
                  <b>
                    Foreign Nationals will require the following documents for DSC:
                  </b>
                </p>
                <ul>
                  <li>
                    Attested copy of any other Address proof issued by the Government
                  </li>
                  <li>
                    Attested copy of Resident Permit certificate
                  </li>
                  <li>
                    Attested copy of Applicant Passport
                  </li>
                  <li>
                    Attested copy of VISA
                  </li>
                  <li>
                    Address Proof
                  </li>
                  <li>
                    Identity Proof
                  </li>
                  <li>
                    Attested copy of Applicant Passport
                  </li>
                </ul>

                <p>
                  For foreign nationals it’s mandatory to attest their address proof and identity proof by the following authorities are given below:
                </p>
                <ul>
                  <li>
                    Apostilled by Native Country
                  </li>
                  <li>
                    Embassy of Native Country
                  </li>
                  <li>
                    Consularized by Native Country
                  </li>
                </ul>

                <p>
                  <b>
                    Documents required for DIN (Director Identification Number)
                  </b>
                </p>
                <p>
                  Following documents are required for DIN by the Indian nationals are as given below
                </p>
                <ul>
                  <li>
                    PAN card
                  </li>
                  <li>
                    Residential Proof:
                    <ul>
                      <li>
                        Mobile bill
                      </li>
                      <li>
                        Bank statement
                      </li>
                      <li>
                        Telephone bill
                      </li>
                      <li>
                        Electricity bill
                      </li>
                    </ul>
                  </li>
                  <li>
                    Address Proof
                  </li>
                </ul>

                <p>
                  <b>
                    Foreign nationals will require the following documents for din are as given below:
                  </b>
                </p>
                <ul>
                  <li>
                    PAN card
                  </li>
                  <li>
                    Residential Proof:
                    <ul>
                      <li>
                        A government-issued form that shows address
                      </li>
                      <li>
                        Residence card
                      </li>
                      <li>
                        Bank statement
                      </li>
                      <li>
                        Driving license
                      </li>
                    </ul>
                  </li>
                  <li>
                    Address Proof
                  </li>
                </ul>
              </div>
              <div class="overview_sr " id="8">
                <div class="howToApp ">
                  <h4>Timeline for Private Ltd Company Registration</h4>
                  <div class="row">
                    <div class=" col-md-12">
                      <div class="time_line_info">
                        <img src="img/Timeline_Pvt_ltd_company.png" alt="Timeline_Pvt_ltd_company">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="overview_sr " id="9">
                <div class="howToApp ">
                  <h4>FAQ's</h4>
                  <div class="row">
                    <div class=" col-md-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Q1. What is digital signature?
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              Digital signature is an encrypted signature which is saved on pen drive. Its make the online registration process easy by signing ROC form or PDF.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. Is it safe to register my company online ?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, its safe to register the company online with the trusted company like Legaltax.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. Are two directors necessary for a private limited company registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, its necessary to have minimum 2 director for a private limited company. Maximum can be 200 members.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. Do I need to be physically present during this process?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              No, company registration is a fully online process. You would no need to present at all during the process .all the documents filed electronically.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. What documents are required to complete the process?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  Identity proof
                                </li>
                                <li>
                                  Address proof
                                </li>
                                <li>
                                  PAN card copy for Indian nationals.
                                </li>
                                <li>
                                  Passport for foreign nationals.
                                </li>
                                <li>
                                  NOC
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. How much does its cost to run a private limited company?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              You can expect to spend Rs. 40000.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What are the articles of association and memorandum of association?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              These documents contain the rules, mission and vision of your organization, and define, among other things, the exact business and the roles and responsibilities of shareholders and directors.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. Who can be the in a private limited company registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              Any individual must attain 18 and above and must have a valid PAN card.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. Can the director of a private limited company also be a salaried person ?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, a salaried person can be a director of private limited company.
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. What is the time taken by the LegalTax.in in forming a private limited company?
                              </button>
                            </h5>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              Legaltax take 15-25 days for forming the company further its depends on the documents provided by the applicants and approval of the speed of approval from the government.
                            </div>
                          </div>
                        </div>


                      </div>
                      <!-- accordion -->
                    </div>
                    <div class="col-lg col-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">

                        <div class="card">
                          <div class="card-header" id="headingeleven">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseleven">
                                Q11. Are you keen to convert an already existing partnership firm to a LLP?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                            <div class="card-body">
                              Who are willing to get converted into LLP have to apply through form 17.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading12">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Q12. What are documents required for registering a private limited company?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Form-1 for incorporation of a company</li>
                                <li>DIN of all those directors of a proposed company</li>
                                <li>Original copy of formal letter issued by ROC regarding availability of Company name</li>
                                <li>DSC - Digital Signature Certificate</li>
                                <li>Form-32 for particulars of proposed directors, managers and secretary</li>
                                <li>Form-18 for situation or address of the proposed company</li>
                              </ul>
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading13">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Q13. What are the benefits of a private limited company?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>You are at low risk</li>
                                <li>You can raise easy capital</li>
                                <li>Legitimacy and brand awareness</li>
                                <li>Builds goodwill and also supports more customer attraction</li>
                                <li>Gives reliable investors bank credits and good investment with ease.</li>
                                <li>Provides cover of the responsibility to protect the company’s assets</li>
                                <li>Bigger commitment to wealth and greater stability</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading14">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Q14. What are the reason for registering the company?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Raising money</li>
                                <li>Perceptual existence</li>
                                <li>Protection-against accidents, limited liability, reduced financial loss and unfavorable situations.</li>
                              </ul>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading15">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Q15. How to register a company/startup in India?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                            <div class="card-body">
                              The following steps are required for your company registration process given below:
                              <ul>
                                <li>Digital Signature Certificate (DSC); This is the first step for registering a company . You acquire DSC to ensure the security and authenticity of the documents which is filed electronically.</li>
                                <li>Director Identification Number (DIN): This the second step for registering a company. This concept is first time introduced with the insertion of sections 266 A to 266 G of Companies Act,2006.</li>
                                <li>New account on MCA portal </li>
                                <li>Apply for the company to be registered</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading16">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Q16. What is a company?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                            <div class="card-body">
                              It’s a registration act of registration of your business with the government of india.For the startup of new business company registration is very important to be done. By registration of your business it will help the government that your business is not illegal and its exists legally. Those businesses which are not registered under the act will considered to be illegal. Through company registration you will easily get loans and government schemes which can be very helpful for the future growth goal of the business.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading17">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Q17. What are the minimum requirements to register a private limited company?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Minimum 2 director and 1 shareholder are required.</li>
                                <li>Shareholders cannot transfer their shares as per the AOA.</li>
                                <li>Maximum no of shareholder is 50 limited.</li>
                                <li>General public cannot but shas of private limited company.</li>
                                <li>Deposits only allowed from the members and directors.</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading18">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                Q18. What are the statutory requirements to be fulfilled once private company is registered?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
                            <div class="card-body">
                              Requirements are as follows:
                              <ul>
                                <li> Appointment of a Statutory Auditor </li>
                                <li>Depositing paid-up capital as mentioned while registration </li>
                                <li>Issue and allotment of shares </li>
                                <li>
                                  The opening of the company’s current account within 30 days after receiving the PAN card.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading19">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Q19. What is Din?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
                            <div class="card-body">
                              DIN stand for director identification number.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading20">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                Q20. What is DSC?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
                            <div class="card-body">
                              DSC stand for digital signature certificate which is provided in the form of a token issued by Certified Authorities
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
            <div class="side_frm form_serv2">
              <form>
                <h4 class="text-center">
                  <small>
                    <b> Get Started </b>
                  </small>
                </h4>
                <div class="row">
                  <div class="form-group col">
                    <!-- <label for="exampleInputPassword1"></label> -->
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                  </div>
                  <div class="form-group col-12">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <!-- <label for="exampleInputPassword1">Phone</label> -->
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                  </div>
                  <div class="form-group col-12">
                    <!-- <label for="exampleInputPassword1">State</label> -->
                    <select name="state" id="state" class="form-control" id="exampleInputPassword1">
                      <option value="">State</option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="West Bengal">West Bengal</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                  <div class="col-12 text-center"><input type="submit" value="Book Now" class="pulse-button"></div>
                  <div class="col-12 text-center mt-3">
                    <p>
                      OR
                    </p>
                  </div>
                  <div class="col-12 text-center">
                    <input type="button" value="Free Consultation" class="pulse-button" onclick="PopUp()">
                  </div>
                  <div class="text-center mt-3">
                    <p>
                      Easy payment options available. No spam, No sharing. 100% confidentiality.
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-5 mb-3">
            <h4>
              <b> Types of Government Registrations</b>
            </h4>

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
            <h4>
              associated with
            </h4>
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
          <h3>
            Enquire Now
          </h3>
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