<?php

use function PHPSTORM_META\type;

require_once('include/connection.php');
require_once('include/constant.php');
require_once('include/model.php');
?>
<!doctype html>
<html lang="en">

<?php
  include_once('head.php');
  ?>
    <?php
  foreach (nsic() as $value) {
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
            <span>NSIC </span>
            <h1> Registration</h1>

            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur nesciunt et totam placeat tenetur odio nobis voluptas voluptate aliquam nemo, dignissimos assumenda dolorum vel asperiores explicabo vitae sed deserunt adipisci.
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
        How to Start a NSIC
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
                  <a href="#2">Eligibility</a>
                </li>

                <li>
                  <a href="#3">Schemes Available under NSIC Registration</a>
                </li>

                <li>
                  <a href="#4">Objectives of NSIC Registration</a>
                </li>
                <li>
                  <a href="#5">Types of Applications</a>
                </li>
                <li>
                  <a href="#6">Documents Required </a>
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
                  Now a competition world, Indian Government is promoting growth of MSME business by
                  launching various schemes such as Single point registration,Performance and Credit
                  rating Scheme,Marketing Assistance Scheme all such schemes are comes under NSIC
                  (National Industries Corporation) NSIC is a Government enterprises and falls under the
                  Ministry of Micro, Small and Medium Enterprises (MSME) .

                </p>

                <h3>Development of NSIC</h3>
                <p>NSIC is a certified Government of India Enterprises comes under the Ministry of Micro,
                  Small and Medium Enterprises (MSME).NSIC has been working to promote and aid the
                  growth of SMEs enterprises in the country.
                  <br>
                  <br>
                  1. NSIC has also been treated as a MINI RATNA PSU set up by the Government of
                  India since 1955.
                  2. The mission of NSIC is to Support and Promote the Micro, Small & Medium
                  Enterprises (MSMEs) for providing integrated support services encompassing
                  Marketing,Financing, Technology and other services.</p>



              </div>

              <div class="overview_sr " id="2">
                <h3>
                  Eligibility Criteria for NSIC Registration

                </h3>
                <ul>
                  <li>
                    <p>Every Micro business whose investment in- Plant & machinery is up to INR
                      25 lakhs and In-service sector up to INR 10 Lakhs</p>
                  </li>
                  <li>
                    <p>Every Small business whose investment in Plant & machinery is up to INR 5
                      Crore and In-service sector up to INR 2 crores, OR</p>
                  </li>
                  <li>
                    <p>Holding an MSME Certificate is a must .</p>
                  </li>
                  <li>
                    <p>Completed one year of business commencement is necessary</p>
                  </li>

                </ul>

                <p> <b>Note-</b> The Provisional Registration Certificate will be issued to the MSMEs under
                  the Single Point Registration scheme(NSIC), if business has not completed one
                  year of business commencement.
                </p>
                <p> <b>
                    Validity of NSIC Registration</b>
                </p>
                <p>NSIC registration under Single Point Registration Scheme will be valid only for 2
                  Years. This will be renewed every 2 years after verification of Commercial and
                  Technical Competence (CTC) of the registered MSEs.</p>

                <p><b>Note:</b> Provisional NSIC Registration will be valid for 1 year from the date of the
                  issue of NSIC application.</p>


                  <img src="img/NSIC-CERTIFICATE-SAMPLE.png" alt="NSIC-CERTIFICATE-SAMPLE">




              </div>
              <div class="overview_sr " id="3">
                <h3>
                  Schemes Available under NSIC Registration

                </h3>

                <ul>
                  <li>
                    <p>
                      Consortia & Tender Marketing
                    </p>
                  </li>
                  <li>
                    <p>
                      Marketing Intelligence
                    </p>
                  </li>
                  <li>
                    <p>
                      Raw Material Assistance Scheme
                    </p>
                  </li>
                  <li>
                    <p>
                      Procurement and Marketing Assistance Scheme

                    </p>
                  </li>

                  <li>
                    <p>Procurement Marketing Scheme
                    </p>
                  </li>

                  <li>
                    <p>
                      Single Point Registration Scheme
                    </p>
                  </li>

                  <li>
                    <p> Performance and Credit Rating Scheme
                    </p>
                  </li>
                  <li>
                    <p>Bill Discounting Scheme</p>
                  </li>
                  <li>
                    <p> Skill Development Service
                    </p>
                  </li>
                  <li>
                    <p> Credit Facilitation by Banks</p>
                  </li>
                  <li>
                    <p> Infomediary Services
                    </p>
                  </li>
                </ul>



              </div>



              <div class="overview_sr " id="4">
                <h3>
                  Objectives of NSIC Registration
                </h3>
                <ol type="1">
                  <b>
                    <li>Assistance to SSI and MSME</li>
                  </b>
                  <p>One of the main focuses of NSIC registration is to provide different types
                    of allied benefits to MSME and SSI. Any MSME or SSI can easily claim
                    different forms of incentives and schemes by enrolling itself in this
                    registration.
                  </p>

                  <b>
                    <li> Provide Machinery </li>
                  </b>
                  <p>After registering under the NSIC, MSMEs can avail benefits to secure
                    its machinery such as equipment that is based on hire purchase. This
                    system can be carried out with minimum formalities by the NSIC
                    registration
                  </p>


                  <b>
                    <li>
                      Government Tenders </li>
                  </b>
                  <p>
                    By using the SPRS, MSME can secure government purchases and
                    tenders. Additionaly from this, MSMEs would be notified regarding any
                    tender. </p>

                  <b>
                    <li>
                      Free of cost Participation</li>
                  </b>
                  <p>
                    After enrolling in this scheme, MSMEs can participate freely in
                    government contracts and tenders.

                  </p>


                  <b>
                    <li>
                      Supply of Raw Materials </li>
                  </b>

                  <p>
                    To promoting the Small-scale Industrial sector currently NSIC has
                    reserved 358 items for purchase particularly only from SSIs.

                  </p>

                  <b>
                    <li>
                      International Conventions </li>
                  </b>
                  <p>MSMEs registered under NSIC receive the benefits of taking part in
                    International trade and various forms of conventions of the
                    government. Small Scale Industries also be notified the same</p>

                  <b>
                    <li>
                      Exempted from Earnest Money Deposit Scheme (EMD) </li>
                  </b>
                  <p>All MSME/ SSI registered under this scheme are exempted from the
                    requirement of depositing form of earnest money.
                  </p>

                </ol>

                <p>Hence it is profitable to register under National Small Industries
                  Corporation(NSIC).
                </p>
              </div>

              <div class="overview_sr " id="5">
                <h3>
                  What Are the Types of Applications for Design
                  Registration?


                </h3>
                <p>
                  There are 2 types of Design Application:
                </p>
                <ol>
                  <li>
                    <p>
                      <b>Ordinary Application:</b> An ordinary application does not claim priority.
                    </p>
                  </li>



                  <li>
                    <p>
                      <b>Reciprocity Application: </b> A reciprocity application claims priority of an
                      application filed previously in a convention country. Such an application shall
                      be filed in India within 6 months from the date of filing in the convention
                      country. The period of 6 months is not extendable.

                    </p>
                  </li>
                </ol>



              </div>


              <div class="overview_sr " id="6">
                <h3>
                  Documents are required for NSIC Registration

                </h3>

                <p>
                  The documents that are required to register a design in India are mentioned below:
                </p>

                <ol>
                   
                    <li>
                      <p> For Proprietorship.</p>
                    </li>
                  
                  <ul>
                    <li>Pan Card Of Proprietor</li>
                    <li>Uam/Udyam Registration</li>
                    <li>Details Of Plant & Machinery</li>
                    <li>Copy Of Ownership/Rent Agreement With Noc</li>
                    <li> Latest Electricity Copy Of Bill</li>
                    <li>Details Of Testion Facility Available In Work Premises</li>
                    <li> Financial Details For Last 3 Years, Authorised By Chartered Accountant</li>
                  </ul>
                  <ul type="none">
                    <li>Audited Balance Sheet</li>
                    <li>Profit & Loss A/C</li>
                    <li>Schedule Of Revenue From Operations & Fixed Assets</li>
                  </ul>
                  <ul>
                    <li>Declaration Signed By The Applicant Mse Unit Accepting Registration Condition</li>
                  </ul>

                  <li>
                    <p>Identity and address proof of the authorized person/entity.
                    </p>
                  </li>

                  <li>
                    <p>Acknowledgement or certificate copy of of MSME registration</p>
                  </li>
                  <li>
                    <p>A self- attested copy of PAN, Udyog Aadhaar Memorandum (UAM) Number</p>
                  </li>

                  <li>
                    <p>A self- attested copy of ownership documents of the business location (CoI),</p>
                  </li>

                  <li>
                    <p>Self- attested Copy of sales deed, if any</p>
                  </li>
                  <li>
                    Consent letter from the Directors, Partners, or Sole proprietor that whether or not they have any link with large scale Unit(s).
                  </li>

                  
                    <li>
                      List of testing facility and quality control equipment available in factory
                    </li>
                  

                 
                    <li>
                      Copy of type test report from standard Independent lab .

                    </li>
                  

                   
                    <li>
                      Business existence certificates for a minimum of 3 years along with the ownership documents of raw materials, plant/machinery,equipment, and tools.

                    </li>
                   
                  
                    <li>
                      Professional details of employees involved in production and services.

                    </li>
                

                 
                    <li>
                      Detailed information of having MSME Data Bank.
                    </li>
                  

                   
                    <li>
                      Memorandum as per application’s Proforma ‘Annexure-F.

                    </li>
                

               
                    <li>
                      Audited balance sheet and P&L for the last 3 years.
                    </li>
                  

                
                    <li>
                      Banker’s Certificate.

                    </li>
          

                   
                    <li>

                      Duplicate Copy of BIS license, if applicable.

                    </li>
                

                  
                    <li>
                      Duplicate Copy of ISO 9000 (not obligatory).

                    </li>
                 

                </ol>
              </div>










              <div class="overview_sr " id="7">
                <h3>
                  Procedure to obtain the NSIC Certificate
                </h3>

                <p>
                  Businesses that are registered under MSME or having Udyog Aadhar
                  Registration are eligible to get registered under NSIC. Registered
                  MSME with Udyog Aadhar Registration can apply online for NSIC
                  Registration. To obtain the NSIC certificate, all MSMEs are required to
                  fill the application form and submit it along with required documents
                  to the respective NSIC’s zonal or branch offices located nearest to the
                  unit.
                </p>


                <p><b>Online steps for NSIC registration are as follows :-</b>
                </p>
                <img src="img/Online-steps-for-NSIC.png" alt="Online-steps-for-NSIC">
                <ul>
                  <b>
                    <li>Step 1 </li>
                  </b>
                  <p>Log in to the portal the official website www.nsicspronline.com
                  </p>

                  <b>
                    <li>Step 2</li>
                  </b>
                  <p>Register it self in MSME Data Bank using UAM No. and PAN.
                  </p>


                  <b>
                    <li>Step 3</li>
                  </b>
                  <p>Fill in the details asked in the application form using PAN and UAM numbers.</p>


                  <b>
                    <li>Step 4</li>
                  </b>
                  <p>Submit the application form, with all required documents.</p>


                  <b>
                    <li>Step 5</li>
                  </b>
                  <p>Pay the fee.</p>


                  <b>
                    <li>Step 6</li>
                  </b>
                  <p>Wait for confirmation and documents verified by the authority,
                    You will get your NSIC certificate by post. </p>
                </ul>
                <p><b>Offline Procedure for NSIC registration are as follows :-</b></p>
                <img src="img/offline-nsic-steps.png" alt="offline-nsic-steps.png">
                <ol>

                  <li>
                    <p>Download application Copy of NSIC Form</p>
                  </li>
                  <li>
                    <p>File the Form</p>
                  </li>
                  <li>
                    <p>Submit Form Along with Reports</p>
                  </li>
                  <li>
                    <p>Certificate granted by NSIC</p>
                  </li>
                </ol>

                
              </div>



              <div class="overview_sr " id="8">
                <h3>
                  What Are the Benefits Related to Industrial Design
                  Registration?
                </h3>


                <ul>
                  <li>
                    <p>The registration of a design confers upon the certified proprietor the private
                      right to apply a design to the article in the class in which the design has been
                      registered.</p>
                  </li>

                  <li>
                    <p>A registered owner of the design is called to a better protection of his
                      intellectual property.
                    </p>
                  </li>

                  <li>
                    <p>He can sue for infringement, if his right is infringed by any person.
                    </p>
                  </li>

                  <li>
                    <p>He/she can licence or sell his design as legal property for a fee or royalty.
                    </p>
                  </li>

                  <li>
                    <p>Registration originally gives this right for 10 years from the date of registration.</p>
                  </li>

                  <li>
                    <p>If the fee for size is not paid for the further period of registration within the
                      period of first registration, this benefit will stop.
                    </p>
                  </li>

                  <li>
                    <p>There is provision for the return is filed within 1 year from the date of cessation
                      in the designated manner.
                    </p>
                  </li>

                  <li>
                    <p>A design is registered by the Patent Office so that competitors can be warned
                      about its creation
                    </p>
                  </li>

                  <li>
                    <p>The ten-year exclusive right to use a registered design is extended for five
                      years by adding an addition to the ten years
                    </p>
                  </li>

                  <li>
                    <p>If a design is copied or used in a way that violates its copyright, the owner of
                      the registered design may seek legal redress under the Designs Act
                    </p>
                  </li>

                  <li>
                    <p>An amount not exceeding ₹25,000 can be recovered against anyone’s design
                      subject to a maximum of ₹50,000 if the design is illegally copied</p>
                  </li>

                  <li>
                    <p>Design registration provides legal protection against infringement.
                    </p>
                  </li>

                </ul>





              </div>

              <div class="overview_sr " id="9">
                <h3>Why to Choose Legaltax?</h3>
                <ul>
                  <li>
                    <p>At <a href="legaltax.in">Legal Tax,</a> we want to make sure you have all the legal hassle-free to
                      focus on your business.
                    </p>
                  </li>

                  <li>
                    <p> We’ll take care of the rest. Our experts will get your design registered in 2-4
                      months.</p>
                  </li>

                  <li>
                    <p>Experts at <a href="legaltax.in" style="color: blue;">Legal Tax </a> will prepare your design registration with minimal
                      effort. Once the registration application is prepared, a power of attorney will
                      be sent to allow us to file it on your behalf.</p>
                  </li>
                  <li>
                    <p>
                      We will file your registration with the relevant authorities, including the
                      design Wing of the patent office, and you will receive a design number. Your
                      application will be filed with the design wing of the Patent Office and will
                      be tracked using the design number. If you are looking for experts to register
                      your design then definitely <a href="legaltax.in" style="color: blue;">Legal Tax </a> is the best option.
                    </p>
                  </li>
                </ul>
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
                                Q1. How much Monetary Limit fixed in Provisional Registration under SPRS?
                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              INR 5 LAKH
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. Whether manufacturers of drugs & medicines can also get NSIC registration?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              As such NSIC will not allow registration any units engaged in the manufacturing of drug & medicines.


                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. Whether traders can be registered under SPRS?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              NSIC does not register the traders in SPRS.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. Whether traders can be registered under SPRS?


                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              No.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. Do you provide this service in my town?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">

                              Yes, Legal tax is providing service all over india.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. When the Government of India launched the Central Government Stores Purchase Programme?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              The Government of India launched the Central Government Stores Purchase Programme in 1955.

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. Who is eligible to get registered with NSIC under Single Point Registration Scheme?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              Micro & Small Enterprises both are eligible to get registered with NSIC under SPRS.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. What is the prescribed limit for investment in equipment for small service industry?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              More than Rs. 10 lac but does not exceed Rs. 2 crore




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