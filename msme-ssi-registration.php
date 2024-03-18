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
  foreach (metamsmessiregistration() as $value) {
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

    <div class="col main_srv_bnr">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            
            <h1><span>Msme Registration online  </span></h1>
            <p>
              MSME/SSI Registration is mandatory for small business entities. It will help them in availing subsidies, incentives, concessional rate loans and other registration benefits offered by the government. The eligibility criteria to obtain the MSME/Udyam/Udyog Aadhaar registration certificate differs on the basis of the investment in plant and machinery..
            </p>
            <p>
              <b>
                Package Inclusions:-
              </b>
            </p>
            <ul>
              <li>
                On phone discussion about a registration
              </li>
              <li>
                Application fill
              </li>
              <li>
                Turnaround time 2 Working days.
              </li>
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

    <!-- mobile form -->
    <div class="col">
      <div class="col d-inline-block d-lg-none my-3 form_serv">
        <!-- form -->
        <form>
          <h5>
            Get Started
          </h5>
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



    <section>
      <div class="col">
        <div class="container">
          <div class="clearfix">&nbsp;</div>
          <div class="clearfix">&nbsp;</div>
          <h2 id="section4" class="text-center" class="heading1">
          Enjoy great benefits and subsidies by registering your business as an MSME

          </h2>
         
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
                  <img src="img/clect-data.png" alt="file  icon">
                  <p>
                    We collect all the basic details
                    <br>

                    Step 1
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #F0BC5E;">
                  <img src="img/suprt_doc.png" alt="suprt_doc ">
                  <p>
                    We ask you to submit the supporting documents<br>

                    Step 2
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #FE6663;">
                  <img src="img/certificate-icn.png" alt="certificate-icn">
                  <p>
                    We get you your MSME registration certificate<br>

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
                  <a href="#1" class="act">What Is Msme Registration</a>
                </li>
                <li>
                  <a href="#2"> Benefits</a>
                </li>
                <li>
                  <a href="#3">Eligiblity</a>
                </li>
                <li>
                  <a href="#4">Catagories </a>
                </li>
                <li>
                  <a href="#5"> Documents Required </a>
                </li>
                <li>
                  <a href="#6"> Registration Procedure </a>
                </li>
                <li>
                  <a href="#7"> How to Check Status </a>
                </li>
                <li>
                  <a href="#8"> FAQ's </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="laoded_cntent">
              <div class="overview_sr " id="1">
                <h3>
                  What Is Msme Registration?
                </h3>
                <p>
                  <a href="https://msme.gov.in/" style="color: blue;"> MSME registration </a>stands for the micro small and medium enterprises registration. THE Government of India launched MSME act to support the MSME through various schemes, incentives and subsidies. The Ministry of Micro, Small and Medium Enterprises, a branch of government of India. Banks provides loans at lower rate of interests with MSME registration. In country’s economic growth MSME play an important role.
                </p>
              </div>

              <div class="overview_sr " id="2">
                <h3>
                  Benefits Of Msme/ssi Registration
                </h3>

                <p>
                  <b>
                    Benefits of MSME/SSI registration are as follows:
                  </b>
                </p>
                <ul>
                  <li>
                    <p>
                      <b> Cheaper infrastructure: </b> For MSME/SSI registered company charges are very lower.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b> Pre-defined object or period: </b> A partnership can be formed within a specified period or to complete a specific project or object. Once the same is completed, the partnership will automatically stand dissolved.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b> Quicker approvals from state and central government bodies: </b> Business which are registered under MSME/SSI get higher preference.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b> Access to tenders: </b>This is one of the benefits in which the various government tenders open to MSME/SSI to promote small business in India.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b> MSME market development assistance for micro and small enterprises: </b>this is another important benefit given in which the government has promised to buy products from these MSMEs.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b> Cheaper bank loans: </b>MSME/SSI registered company get lowerrate of interest on loan.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b> Easy access to credit : </b>This is the another benefits which provides loans to MSME/SSI without collaterals. PM modi provides or introduced the mudhra loan scheme which is very beneficial.
                    </p>
                  </li>
                  <li>
                    <p>
                      Concession in trademark registration.
                    </p>
                  </li>
                  <li>
                    <p>
                      Concession in patent registration.
                    </p>
                  </li>
                </ul>
              </div>
              <div class="overview_sr " id="3">
                <h3>
                  Who all are Eligible for MSME Registration?
                </h3>
                <p>
                  <b>
                    The Below-mentioned entities are eligible for MSME Registration-
                  </b>
                </p>
                <p>
                  All the micro, small and medium level business entities falling in the prescribed parameter, can apply for MSME registration in India. Apart from Micro, small, and medium level enterprises-
                </p>
                <ul>
                  <li>
                    <p>
                    <a href="https://legaltax.in/llp-registration.php" style="color: blue;">  Limited liability partnerships (LLP)</a> 
                    </p>
                  </li>
                  <li>
                    <p>
                     <a href="https://legaltax.in/company-incorporation.php" style="color: blue;">  A private limited company (Pvt. Ltd.),</a> 
                    </p>
                  </li>
                  <li>
                    <p>
                     <a href="https://legaltax.in/one-person-company-registration.php" style="color: blue;">  One-person companies (OPC),</a>   
                    </p>
                  </li>
                  <li>
                    <p>
                      <a href="https://legaltax.in/proprietorship-registration.php" style="color: blue;"> Proprietorship firms</a>  
                    </p>
                  </li>
                  <li>
                    <p>
                      Public companies can also apply for MSME registration.
                    </p>
                  </li>
                </ul>
                <p>
                  Also, if the Company is in the manufacturing or the service sector can go for MSME Registration.
                  Any entity having a valid Aadhar Number can apply for MSME Registration. As Aadhaar Number is mandatory for issuance of MSME Certificate.

                </p>
              </div>

              <div class="overview_sr " id="4">
                <h3>
                  What Businesses Are Categorised Under The Msme Scheme?

                </h3>
                <p>
                  <b>
                    For Manufacturing Sector Amount Invested In Assests
                  </b>
                </p>
                <img src="img/ManufacturingSector.png" alt="Manufacturing Sector infographic">
                <p>
                  <b>
                    For Service Sector Amount Invested In Equipments
                  </b>
                </p>
                <img src="img/ServiceSector.png" alt="Service Sector infographic">
              </div>

              <div class="overview_sr " id="5">
                <h3>
                  Document Required
                </h3>
                <p>

                  For MSME registration requires few documents, details about the individual, personal details. Aadhar Card is compulsory in the registration of MSME.

                </p>
                <p>
                  <b>
                    The following are the documents required for the registration process.
                  </b>
                </p>
                <ul>
                  <li>
                    Aadhar number of the applicant
                  </li>
                  <li>
                    Bank account number and IFSC code
                  </li>
                  <li>
                    The basic business activity of the enterprise
                  </li>
                  <li>
                    NIC 2 digit code Investment in plant and machinery/equipment
                  </li>
                  <li>
                    MOA and AOA
                  </li>
                  <li>
                    Copies of Sales Bill and Purchase Bill
                  </li>
                  <li>
                    Name, gender, PAN number, email id and mobile number of the applicant.
                  </li>
                  <li>
                    PAN, location, and address of the organization.
                  </li>
                  <li>
                    A number of employees and the date, you are planning to start your business.
                  </li>
                </ul>

              </div>



              <div class="overview_sr " id="6">
                <h3>
                  Registration Process
                </h3>
                <ul>
                  <li>
                    <p>
                      <b>
                        Fill Application Form:
                      </b>
                      This is first step in which you have to fill necessary documents or details related to the individual or business.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>
                        Enter Personal Details:
                      </b>
                      In this step you have to fill all your personal details such as name, address, bank account details, pan card.
                    </p>

                  </li>
                  <li>
                    <p>
                      <b>
                        Executive Will Process Application:
                      </b>
                      In this step, executive will review your application. If there is any error ,will be notified soon.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>
                        Receive Certificate of Mail:
                      </b>
                      In this step ,after filing the complete form you will get the certificate for MSME Registration. You will get the virtual certificate for MSME Registration as the Ministry will not issue you any hardcopy for it.
                    </p>
                  </li>
                </ul>
                <img src="img/msmeProsess.png" alt="msmeProsess" width="50%" style="margin: auto; width: 70% !important; display:block;">
              </div>
              <div class="overview_sr " id="7">
                <h3>
                  How can an Applicant Check MSME Registration Status?
                </h3>
                <p>
                  An applicant can check the MSME Registration status by reference number and name by following the below-mentioned steps-
                </p>
                <ul>
                  <li>
                    <p>
                      <b>
                        Step-1
                      </b>
                      To check the status, an applicant can visit the MSME Registration portal.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>
                        Step-2
                      </b>
                      Enter 12-digit UAM number followed by a verification code as mentioned in the Captcha image.
                    </p>

                  </li>
                  <li>
                    <p>
                      <b>
                        Step-3
                      </b>
                      After entering the 12-digit UAM number, click on the ‘Verify’ button.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>
                        Step-4
                      </b>
                      An applicant can check the status of MSME Registration.
                    </p>
                  </li>
                </ul>
              </div>


              <div class="overview_sr " id="8">
                <div class="howToApp ">
                  <h3>FAQ's</h3>
                  <div class="row">
                    <div class=" col-md-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h3 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Q1. What is MSME Registration?
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              MSME registration stands for the micro small and medium enterprises registration. THE Government of India launched MSME act to support the MSME through various schemes, incentives and subsidies. The Ministry of Micro, Small and Medium Enterprises, a branch of government of India.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. What is MSME full form?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              MSME stand for Micro, small and medium enterprises are known as MSME.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. What are the fees for MSME Registration in India?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              At legaltax you can get MSME registration in just Rs 999.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. What are the documents required for MSME registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  Aadhar number of the applicant
                                </li>
                                <li>
                                  Bank account number and IFSC code
                                </li>
                                <li>
                                  The basic business activity of the enterprise
                                </li>
                                <li>
                                  NIC 2 digit code Investment in plant and machinery/equipment
                                </li>
                                <li>
                                  MOA and AOA
                                </li>
                                <li>
                                  Copies of Sales Bill and Purchase Bill
                                </li>
                                <li>
                                  Name, gender, PAN number, email id and mobile number of the applicant.
                                </li>
                                <li>
                                  PAN, location, and address of the organization.
                                </li>
                                <li>
                                  A number of employees and the date, you are planning to start your business.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. GST mandatory for MSME companies?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, GST is mandatory for MSME companies.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. What are MSME benefits?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  Cheaper infrastructure
                                </li>
                                <li>
                                  Quicker approvals from state and central government bodies
                                </li>
                                <li>
                                  Access to tenders.
                                </li>
                                <li>
                                  MSME market development assistance for micro and small enterprises Cheaper bank loans
                                </li>
                                <li>
                                  Easy access to credit.
                                </li>
                                <li>
                                  Concession in trademark registration.
                                </li>
                                <li>
                                  Concession in patent registration.
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What is Micro industry?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              Small business having 9 people or fewer and having the turnover less than the certain amount and have balance sheet.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. What is the validity of MSME certificate?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              MSME certificate validity is for 5 years.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. What is SSI registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              SSI is the registration of MSME from the ministry.
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. Can we register MSME online?
                              </button>
                            </h5>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, Legaltax will help you to register MSME easily with simple process.
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
                                Q11. What is MSME databank?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                            <div class="card-body">
                              MSME databank is a comprehensive database in India.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading12">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Q12. What is MSME registration number?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                            <div class="card-body">
                              The no provided by the government during the time of registration is called as MSME registration number.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading13">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Q13. What is MSME development forum?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                            <div class="card-body">
                              It’s a non-profit organization.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading14">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Q14. What is Udyog Aadhar Memorandum?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                            <div class="card-body">
                              It’s a self declaration format under the MSME with self certify its existence, bank details, owner Aadhar details and the other information which is required.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading15">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Q15. What is the difference between MSME,SSI &Udyog Aadhar?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                            <div class="card-body">
                              There is n difference between MSME,SSI& Udyog Aadhar.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading16">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Q16. What is MSME?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                            <div class="card-body">
                              MSME stand for Micro,small and medium enterprises defined under MSME development Act 2006.

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading17">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Q17. In which cities does LegalTax provides MSME registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
                            <div class="card-body">
                              Legal Tax provides MSME application services in all over India.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading18">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                Q18. How is the value of plant and machinery computed for SSI registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
                            <div class="card-body">
                              Only original value is to be taken into the account as per the MSME notification.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading19">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Q19. What is the eligibility criteria for MSME /SSI registration in india?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                <b>
                                  For Manufacturing Sector Amount Invested In Assests
                                </b>
                              </p>
                              <ul>
                                <li>
                                  <p>
                                    Micro enterprises-Enterprises who is investing less than Rs 25 lakhs in assets.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Small enterprises-Enterprises who is investing between Rs 25 lakhs and Rs 5 cr in assets.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Medium enterprises-Enterprises investing between Rs 5 crores and Rs 10 crores in assets.
                                  </p>
                                </li>
                              </ul>



                              <p>
                                <b>
                                  For Service Sector Amount Invested In Equipments
                                </b>
                              </p>

                              <ul>
                                <li>
                                  <p>
                                    Micro enterprises-Enterprises who is investing less than Rs 10 lakhs
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Small enterprises-Enterprises who is investing more than Rs 10 lakhs but less than Rs 2 crores
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Medium enterprises-Enterprises who is investing Rs 2 crores but less than Rs 5 crores.
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading20">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                Q20. How many items are reserved for manufacture in SSI sector?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
                            <div class="card-body">
                              20 items are reserved for manufacturer In SSI sector.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="heading21">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                Q21. What is an MSME loan?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse21" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
                            <div class="card-body">
                              This loan is provided to Micro, Small and Medium enterprises.
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
                        <div class="price_box">
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