<?php

use function PHPSTORM_META\type;

require_once('include/connection.php');
require_once('include/constant.php');
require_once('include/model.php');
?>
<!doctype html>
<html lang="en">

<head>
  <?php
  include_once('head.php');
  ?>
    <?php
  foreach (digitalsignatureonline() as $value) {
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
            <span>Digital </span>
            <h1> Signature Certificate </h1>

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
        How to Start Digital Signature Certificate
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
                  <a href="#2">Importance </a>
                </li>

                <li>
                  <a href="#3">Digital Signature Certificate Classes</a>
                </li>

                <li>
                  <a href="#4"> Documents Required</a>
                </li>
                <li>
                  <a href="#5">Benefits</a>
                </li>
                <li>
                  <a href="#6">Why Legaltax</a>
                </li>
                <li>
                  <a href="#7">FAQs</a>
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
                  Digital Signature Certificate is a digital key which is secure (USB e-token) which is
                  issued by certain certifying authorities who validate and verify the identity or detail
                  of the person holding this digital signature certificate. Public encryption key is being
                  used to create the signatures and signature is being saved in digital format. <br> <br>
                  Digital Signature Certificate stores information regarding the user’s name, country,
                  email address, pin code, certifying authority name, date of issuance of the certificate.

                </p>


              </div>

              <div class="overview_sr " id="2">
                <h3>
                  Importance of Digital Signature Certificate
                </h3>
                <p>
When is Digital Signature is required?
                </p>
                <img src="img/IMPORTANCE OF DIGITAL SIGNATURE CERTIFICATE.png" alt="IMPORTANCE OF DIGITAL SIGNATURE CERTIFICATE">
                <h3>
                  Who require a Digital Signature Certificate?

                </h3>
                <p>
                  MCA has mandated Digital Signature for the following
                </p>

                <img src="img/who-required-digital-signature.png" alt="who-required-digital-signature">
              </div>
              <div class="overview_sr " id="3">
                <h3>
                  Digital Signature Certificate Classes
                </h3>
                <p>
                  <b>Certifying authorities issue three types of Digital Signature Certificates:</b>
                </p>
                <ol>
                  <li>
                    <p>
                      <b>Class 1 DSC: </b>
                      Class 1 DSC is basically for individual subscribers or issued to
                      individual subscribers and it is used to confirm that the user name and email
                      contact detail of the subject lie within the database of the authority who have
                      issue the digital signature certificate.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Class 2 DSC: </b>
                      Class 2 DSC is basically for the director and the signatory
                      authority of the companies for e filing with the Registrar of the Companies
                      (ROC). Class 2 DSC is important for the individual who have to sign
                      documents manually while return filing with ROC. Recently from 1st Jan
                      2021, the Controller of Certifying Authority has instructed or given the
                      guideline to discontinue Class 2 DSC. From now, Class 3 DSC will be issued
                      in place of Class 3 DSC.

                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Class 3 DSC: </b>
                      Class 3 DSC is issued basically to the Directors/authorized
                      signatories of Companies, Professional etc., for digitally signing the
                      document. The vendors who are involved in online tenders also must have a
                      Class 3 DSC.

                    </p>
                  </li>
                </ol>



              </div>



              <div class="overview_sr " id="4">

                <h3>
                  Documents Required for Digital Signature Certificate, Dsc (Individual)
                </h3>


                <ul>
                  <li>
                    <p>
                      Passport Size photo
                    </p>
                  </li>
                  <li>
                    <p>
                      PAN Card
                    </p>
                  </li>
                  <li>
                    <p>
                      Aadhar Card
                    </p>
                  </li>
                  <li>
                    <p>
                      Mobile number
                    </p>
                  </li>
                  <li>
                    <p>
                      Email Address
                    </p>
                  </li>
                </ul>


                <p>
                  <b>Mandatory Documents Required for Issuance of Dsc for
                    Authorized Signatory (Organization) </b>
                </p>
                <p style="text-align: center;">
                  <b>With GST Verification</b>
                </p>
                <table class="table table-bordered">
                  <tr>
                    <th>PARTNERSHIP FIRM</th>
                    <th>PROPRIETORSHIP FIRM</th>
                    <th>LLP</th>
                    <th>AOP</th>
                    <th>NGO/TRUST</th>
                    <th>CORPORATE ENTITIES</th>
                  </tr>
                  <tr>
                    <td>Applicant
                      PAN
                      Card/Aadhar
                      Card</td>
                    <td>Applicant PAN
                      Card/Aadhar
                      Card</td>
                    <td>Applicant PAN
                      Card/Aadhar
                      Card</td>
                    <td>Applicant PAN
                      Card/Aadhar
                      Card</td>
                    <td>Applicant
                      PAN
                      Card/Aadhar Card</td>
                    <td>Applicant
                      PAN
                      Card/Aadhar
                      Card</td>
                  </tr>

                  <tr>
                    <td>Authorized
                      Signatory
                      letter.
                    </td>
                    <td>GSTR 3b filing copy
                      not older than 3
                      months/Bank statement</td>
                    <td>Authorized
                      Signatory
                      letter.</td>
                    <td>Authorized
                      Signatory
                      letter.
                    </td>
                    <td>Authorized
                      Signatory
                      letter.
                    </td>
                    <td>Authorized
                      Signatory letter</td>
                  </tr>

                  <tr>
                    <td>Partnership
                      deed</td>
                    <td></td>
                    <td>Partnership
                      deed</td>
                    <td>Signatory
                      list</td>
                    <td>Signatory list</td>
                    <td>Signatory
                      list</td>
                  </tr>

                  <tr>
                    <td>Authorizing
                      person signed
                      id proof</td>
                    <td></td>
                    <td>Authorizing
                      person
                      signed
                      id proof</td>
                    <td>Authori
                      zing
                      person
                      signed
                      id proof</td>
                    <td>Authorizing person
                      signed id
                      proof</td>
                    <td>Authorizing
                      person signed id
                      proof</td>
                  </tr>

                  <tr>
                    <td>GSTR 3b
                      filing copy not
                      older than 3
                      months/Bank
                      statement</td>
                    <td></td>
                    <td>GSTR
                      3b filing
                      copy not
                      older
                      than 3
                      months/
                      Bank
                      stateme
                      nt</td>
                    <td>GSTR
                      3b filing
                      copy not
                      older
                      than 3
                      months/
                      Bank
                      stateme
                      nt</td>
                    <td> GSTR
                      3b filing
                      copy not
                      older than
                      3
                      months/Bank
                      statement</td>
                    <td>GSTR 3b filing
                      copy not older than
                      3 months/Bank
                      statement</td>
                  </tr>
                </table>

                <p style="text-align: center;">
                  <b>Without Gst Verification
                  </b>
                </p>

                <table class="table table-bordered">
                  <tr>
                    <th>PARTNERSH
                      IP FIRM</th>
                    <th>PROPRIETOR
                      SHIP FIRM</th>
                    <th>LLP </th>
                    <th>AOP</th>
                    <th>NGO/TR
                      UST</th>
                    <th>CORPOR
                      ATE
                      ENTITIES
                    </th>
                  </tr>

                  <tr>
                    <td>Applica
                      nt PAN
                      Card/Aadhar
                      Card</td>
                    <td>Applicant
                      PAN
                      Card/Aadhar Card
                    </td>
                    <td>Applica
                      nt PAN
                      Card/Aadhar
                      Card
                    </td>
                    <td>Applicant
                      PAN
                      Card/Aadhar Card</td>
                    <td>Applicant
                      PAN
                      Card/Aadhar Card</td>
                    <td>Applicant
                      PAN
                      Card/Aadhar Card</td>
                  </tr>

                  <tr>
                    <td>Authorized
                      Signatory letter.
                    </td>
                    <td>Organization Bank
                      Statement</td>
                    <td>Authorized
                      Signatory
                      letter/Board
                      resolution</td>
                    <td>Authorized
                      Signatory letter/Board
                      resolution</td>
                    <td>Authorized
                      Signatory
                      letter/Board
                      resolution</td>
                    <td>Authorized
                      Signatory
                      letter/Board
                      resolution</td>
                  </tr>

                  <tr>
                    <td>Organization
                      Bank
                      Statemen</td>
                    <td>Organization
                      registration copy
                    </td>
                    <td>Organization
                      Bank
                      Statement</td>
                    <td>Organization Bank
                      Statement</td>
                    <td>Organization Bank
                      Statement</td>
                    <td>Organization Bank
                      Statement
                    </td>
                  </tr>

                  <tr>
                    <td>Organization
                      registration copy</td>
                    <td></td>
                    <td>Certificate of
                      incorpor
                      ation</td>
                    <td>Organization
                      registration copy</td>
                    <td>Organization
                      registration
                      copy</td>
                    <td>Certificate
                      of
                      incorporation</td>

                  </tr>

                  <tr>
                    <td>Organization PAN
                      Card</td>
                    <td></td>
                    <td>Organization PAN
                      card</td>
                    <td>Organization PAN
                      card</td>
                    <td>Organization PAN
                      card</td>
                    <td>Organization PAN
                      card</td>
                  </tr>

                  <tr>
                    <td>Partnership deed</td>
                    <td></td>
                    <td>MCA
                      Signatory list</td>
                    <td>Signatory
                      member
                      list</td>
                    <td>Signatory
                      member list</td>
                    <td>MCA
                      Signatory
                      list</td>
                  </tr>

                  <tr>
                    <td>Authorizing
                      person
                      signed id
                      proof</td>
                    <td></td>
                    <td>Authorizing
                      person
                      sign id
                      proof</td>
                    <td>Authorizing person
                      sign id
                      proof</td>
                    <td>Authorizing
                      person sign
                      id proof</td>
                    <td>Authorizing
                      person sign
                      id proof</td>
                  </tr>




                </table>




              </div>

              <div class="overview_sr " id="5">
                <h3>
                  Benefits of Digital Signature Certificate
                </h3>
                <p>
                  <b>Time Taken for the Issuance of Dsc and Cost</b>
                </p>

                <p>
                  It hardly take around 1-2 days for the issuance of digital signature certificate. <br><br>
                  For individual, the cost of obtaining DSC is Rs. 1500/- only, and the cost for
                  obtaining DSC for the authorized signatory is 2500/-.

                </p>




              </div>


              <div class="overview_sr " id="6">
                <h3>
                  Why Legaltax?
                </h3>





              </div>










              <div class="overview_sr " id="7">
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
                                Q1. What is the process to add DSC in Trademark Application?

                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              The process to add DSC in Trademark Application is as follows:
                              <ul>
                                <li>Add <a href="https://ipindia.gov.in/">https://ipindia.gov.in/</a> to trusted websites on your internet browser</li>
                                <li>Visit <a href="https://ipindiaonline.gov.in/trademarkefiling/user/frmLoginNew.asp">https://ipindiaonline.gov.in/trademarkefiling/user/frmLoginNew.asp</a></li>
                                <li>Click on the ‘New User? Sign Up’ option</li>
                                <li>Procure a class III or II digital signature from any of the Indian Certifying Authorities and
                                  install the same on your computer</li>
                                <li>Download and install the <a href="https://ipindiaonline.gov.in/trademarkefiling/UsefullDownloads/capicom.zip"> Signing Component</a> as per the instructions given in the <a href="https://ipindiaonline.gov.in/trademarkefiling/UsefullDownloads/DSCManual.pdf"> ‘Digital
                                    Signature Manual’</a>
                                </li>
                                <li>Click ‘Proceed for Registration’
                                </li>
                                <li>Fill in the necessary details in the next step
                                </li>
                                <li>After which you will be allowed to sign the application with a digital signature certificate.
                                  The Installation of or registration of capicom.dll (Signing Component) varies according to your
                                  computer’s Windows bit version. To check your windows bit version, right-click on My Computer
                                  and choose property. The bit version of your computer will be displayed.
                                </li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. Why do I need a DSC for my Trademark Application?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              To apply under the online trademark application system, you must have a valid digital signature
                              certificate, as the Information Technology (IT) Act of 2000 requires the use of digital signatures
                              on electronic documents to ensure its legitimacy and privacy.
                              Obtaining a Class 3 Digital Signature Certificate is a must under the e-filing system. As a result,
                              before registering a trademark, it is advised that one must obtain/have a Class 3 DSC.

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. What are the benefits of Digital Signature Certificate?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                There are several advantages that come along with the usage of a DSC but the most important ones
                                include:
                              </p>
                              <ul>
                                <li>
                                  <p>
                                    High level of security since it is encrypted.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    It can be verified and is unalterable.

                                  </p>
                                </li>

                                <li>
                                  <p>
                                    It advances more conviction and confidence amongst the users.

                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Privacy and protection are achieved while exchanging confidential information on the
                                    internet.
                                  </p>
                                </li>

                                <li>
                                  <p>Establishes ownership of domain.</p>
                                </li>

                                <li>
                                  <p>Digital signature certificates are legally valid.</p>
                                </li>


                                <li>
                                  <p>Digital Signature Certificate save time during e-filing and are also economical.</p>
                                </li>

                                <li>
                                  <p>Digital Signature Certificate reduces the risk of duplication or alteration of the document
                                    itself.</p>
                                </li>





                              </ul>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. Why to choose Legaltax services?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              <b> Legaltax</b> can help you obtain a valid digital signature certificate to meet your e-filing needs, as
                              well as check trademark availability at the professional level. Our team of experts will also
                              safeguard your company’s identity and logo by registering it as a trademark, preventing others
                              from using it illegally without authorization.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. Can we have two Digital Signatures for trademark registration?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                Yes, a document can have multiple Digital Signatures.
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. Why it is important to have Digital Signature Certificate?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">

                              A Digital Signature Certificate <b>authenticates your identity electronically.</b> It also provides you
                              with a high level of security for your online transactions by ensuring absolute privacy of the
                              information exchanged using a Digital Signature Certificate.


                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What are the three uses of Digital Signatures?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">

                              <p>
                                Uses of digital signatures are:
                              </p>

                              <ul>
                                <li>
                                  <p>
                                    Integrity
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Authentication

                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Non-repudiation
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. What is the difference between digital certificate and digital signature?



                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                So, technically speaking the difference between a digital signature and digital certificate is that a
                                certificate binds <b>a digital signature to an entity,</b> whereas a digital signature is to ensure that a
                                data/information remain secure from the point it was issued.

                              </p>



                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. What if the digital signature is lost?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              A copy of the complaint is to be given to the RCC Admin within 24 hours of the employees
                              reporting the loss to prevent unauthorized usage of DSC. The User, who has lost/misplaced his
                              token will not be able to sign any document in the ITBA/HRMS application. Officer will re-apply
                              in ITBA for new DSC.

                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. Who are the certifying authorities for digital signature in India?
                              </button>
                            </h2>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              <b>The Controller of Certifying Authorities (CCA)</b> has established the Root Certifying Authority
                              (RCAI) of India under section 18(b) of the IT Act to digitally sign the public keys of Certifying
                              Authorities (CA) in the country. The RCAI is operated as per the standards laid down under the
                              Act.
                            </div>
                          </div>
                        </div>


                      </div>
                      <!-- accordion -->
                    </div>
                    <div class="col-lg col-12">
                      <!-- accordion -->

                      <!-- accordion -->



                      <?php
                      include_once('info_lnks.php');
                      ?>


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
      <div class="container-fluid on_proc_bg">
        <div class="row">
          <div class="col-3" style="margin: 0px; padding: 0px;">
            <div class="onl_prcs">
              <img src="img/on_form.png" alt="on_form">
              <h2>
                Fill Up Application Form
              </h2>
            </div>
          </div>
          <div class="col-3" style="margin: 0px; padding: 0px;">
            <div class="onl_prcs">
              <img src="img/on_paymt.png" alt="on_form">
              <h2>
                Make Online Payment
              </h2>
            </div>
          </div>
          <div class="col-3" style="margin: 0px; padding: 0px;">
            <div class="onl_prcs">
              <img src="img/on_process.png" alt="on_process">
              <h2>
                Executive will Process Application
              </h2>
            </div>
          </div>
          <div class="col-3" style="margin: 0px; padding: 0px;">
            <div class="onl_prcs" style=" border-right: none;">
              <img src="img/on_confirmation.png" alt="on_confirmation">
              <h2>
                Get Confirmation on Mail
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="headingst text-center">
            <span>
              Read Our
            </span>
            <h2>
              Latest Blogs
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="blog-posts">
              <div class="post">
                <img src="https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80" alt="" class="post-img">
                <div class="post-content">
                  <div class="bdate">
                    <p>10</p>
                    <p>DEC</p>
                  </div>
                  <div class="btitle">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, soluta?</h3>
                  </div>
                </div>
              </div>

              <div class="post">
                <img src="https://images.unsplash.com/photo-1423592707957-3b212afa6733?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" alt="" class="post-img">
                <div class="post-content">
                  <div class="bdate">
                    <p>10</p>
                    <p>DEC</p>
                  </div>
                  <div class="btitle">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, soluta?</h3>
                  </div>
                </div>
              </div>

              <div class="post">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" class="post-img">
                <div class="post-content">
                  <div class="bdate">
                    <p>10</p>
                    <p>DEC</p>
                  </div>
                  <div class="btitle">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, soluta?</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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