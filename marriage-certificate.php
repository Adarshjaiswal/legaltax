

<!doctype html>
 <?php
 require_once('include/connection.php');
require_once('include/model.php');
require_once('include/include-design.php');
require_once('include/constant.php');
 ?>

<!doctype html>
<html lang="en">
<!doctype html>
<html lang="en">
<head>
        <?php
  include_once('head.php');
  ?>
    <?php
  foreach (marriagecertificate() as $value) {
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

<body ng-app="myApp" ng-controller="customersCtrl" data-spy="scroll" data-target=".navbar" data-offset="50">
  <main role="main">
    <?php
    include_once('header.php');
    ?>
    <div class="col main_srv_bnrlegl">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            <span>Online
            </span>
            <h1>Marriage Registration</h1>

            <p>
              Lorem ipsum, dolor 1wsit amet consectetur adipisicing elit. Pariatur nesciunt et totam placeat tenetur odio nobis voluptas voluptate aliquam nemo, dignissimos assumenda dolorum vel asperiores explicabo vitae sed deserunt adipisci.
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

    <!-- <div class="col-md-12">
      <h1 id="section4" class="text-center pt-3">
        How to Start a Gem Registration
      </h1>
      <div class="tp_img_inf">
        <img src="img/llp_start.png" alt="llp_start">
      </div>
    </div> -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="laoded_cntent">
              <div class="overview_sr " id="1">
                <p id="h_ltx">
                  Overview
                </p>
                <p>
                  Marriage,it’s a matrimony or wedlock, is a culturally and often legally recognized union between people called
                  spouses. Its establishes rights and obligations between them, as well as their children, and their in-laws.

                </p>
                <p>
                  <b>Marriage is the beginning, the beginning of the family, and a life-long commitment to each other.</b> It also provides
                  an opportunity to grow in selflessness as you serve your wife and children. Marriage is more than a physical union; it is
                  also a spiritual and emotional union. Marriage is the process by which two people accept a relationship publicly, officially,
                  and permanently. It is the joining of two people in a bond that lasts until death.
                </p>

                <p>
                  Many of the bride, groom and their family are busier in planning of venue, Food menu, preparation compared
                  to registration of marriage. While it’s easy to forget marriage Registration because you are very busy with
                  planning the marriage ceremony and other functions. Nowadays obtaining a valid marriage registration
                  certificate plays a vital role in the aspect of getting married.

                </p>



              </div>

              <div class="overview_sr " id="2">
                <p id="h_ltx">Importance of Marriage Registration</p>
                <p>
                  Marriage registration is a necessity to validate marriage legally in India. It’s also plays an important document
                  while applying for a passport, any other kind of property purchase, for opening bank account or to apply for a
                  companion visa. It is valid proof that you both are legally married with your partner. So, you should remember
                  that getting your marriage registered is an essential step to secure your future.

                </p>
                <p id="h_ltx">
                  Eligibility of marriage registration

                </p>
                <p>
                  Every marriage that is solemnized in delhi comes under the Delhi (Compulsory Registration
                  of Marriage) Order, 2014 irrespective of caste, creed or religion of the spouses involved. But there
                  are certain pre mention conditions which have to be accepted, if a marriage is to be registered within
                  NCR. Therefore, below points makes couples eligible to apply for a marriage certificate to record
                  their marriage in Delhi.
                </p>




                <ul>
                  <li>
                    <p>One spouse should be Delhi native or has address proof within Delhi

                    </p>
                  </li>
                  <li>
                    <p>The marriage itself took place in Delhi
                    </p>
                  </li>
                  <li>
                    <p>As per the Hindu Marriage Act, both spouses have to be Hindu, Buddhist, Sikh or Jain.
                    </p>
                  </li>
                  <li>
                    <p>Neither bride nor groom should have a legal and living spouse while applying for the second
                      marriage
                    </p>
                  </li>
                  <li>
                    <p>Both must give valid consent, freely and without any external force or aggression.
                    </p>
                  </li>
                  <li>
                    <p>Age criteria of Male must be 21 and females should be at least 18 years old respectively.</p>
                  </li>

                </ul>




                <p id="h_ltx">
                  Documents required for online application:-
                </p>

                <ol>
                  <li>
                    <p>Age proof of Husband (Anyone of the following)
                    </p>
                    <ul>
                      <li>Birth Certificate</li>
                      <li>Leaving Certificate</li>
                      <li>SSC Exam Certificate</li>
                      <li>Passport
                      </li>
                      <li>Civil Surgeon Certificate</li>
                    </ul>
                  </li>

                  <li>
                    <p>Age proof of Wife (Anyone of the following)
                    </p>
                    <ul>
                      <li>Birth Certificate</li>
                      <li>Leaving Certificate</li>
                      <li>SSC /Exam Certificate
                      </li>
                      <li>Passport</li>
                      <li>Civil Surgeon Certificate</li>
                    </ul>
                  </li>

                  <li>
                    <p>Residential Proof (Anyone of the following)</p>
                    <ul>
                      <li>Election Card</li>
                      <li>Electricity Bill
                      </li>
                      <li>Registered Rent Agreement
                      </li>
                      <li>Passport</li>
                      <li>Driving License
                      </li>
                      <li>Ration Card
                      </li>
                    </ul>
                  </li>

                  <li>
                    <p>Marriage Proof
                    </p>
                    <ul>
                      <li>Marriage Invitation Card</li>
                      <li>Marriage Photo with 2 Passport size photo of husband and wife is compulsory
                      </li>
                    </ul>
                  </li>
                  <li>
                    <p>Witness (2)</p>
                    <ul>
                      <li>Aadhaar Card or Any Id Card</li>
                      <li>Passport size photo</li>
                    </ul>
                  </li>
                </ol>
                <p>
                  <b>Note :</b> The documents set of Original with one xerox copy one should carry with them for registrar
                  office visit.
                </p>

                <img src="img/Marriage-Registration-Documents.png" alt="Marriage-Registration-Documents.png">

                <p id="h_ltx">
                  Procedure for Marriage Registration under the Hindu Marriage Act

                </p>
                <p>
                  Process can be completely done online by using Delhi govt. e-district website, after the marriage is
                  solemnized and conducted as per the Hindu customs and rituals, Couples who belong to Hindu,
                  Jain, Buddhist or Sikh traditions may register under the Hindu Marriage Act. Moreover, Sikhs may
                  choose to register their marriage under the Anand Marriage Act. This process is also similar if the
                  registration takes place using the Hindu Marriage Act. Below steps to be followed by the bride and
                  groom for marriage registration while submitting the application form online.
                </p>
                <ul>
                  <li>
                    <p>Collect the list of documents required.
                    </p>
                  </li>

                  <li>
                    <p>Draft the required Affidavits in the prescribed format.</p>
                  </li>

                  <li>
                    <p>Go to e – district website
                    </p>
                  </li>

                  <li>
                    <p>Click on ‘Make Appointment with DM’.</p>
                  </li>

                  <li>
                    <p>Register on this portal.</p>
                  </li>

                  <li>
                    <p>Select your district as per geographic jurisdiction.</p>
                  </li>

                  <li>
                    <p>Fill in the details,</p>
                  </li>
                  <li>
                    <p>Select the ‘Registration of Marriage Certificate’ option.
                    </p>
                  </li>

                  <li>
                    <p>Fill in the required details.
                    </p>
                  </li>

                  <li>
                    <p>Select the date of the appointment
                    </p>
                  </li>

                  <li>
                    <p>Book an appointment for the physical appearance of both the couple and witnesses</p>
                  </li>

                  <li>
                    <p>Submit the application with necessary documents
                    </p>
                  </li>

                  <li>
                    <p>The acknowledgement page to which you will be redirected will have details regarding the
                      appointment date.
                    </p>
                  </li>


                  <li>
                    <p>Take a printout of this Acknowledgement slip.</p>
                  </li>


                  <li>
                    <p>Both should appear with witness on appointment date
                    </p>
                  </li>


                  <li>
                    <p>Collect the issued marriage certificate.</p>
                  </li>


                  <li>
                    <p>The total time required is approximately 15 days.</p>
                  </li>


                </ul>

                <p id="h_ltx">
                  Marriage registration under Special Marriage Act
                </p>
                <p>
                  If either spouse belongs to any other religion eg. Hindu, Sikh, Jain or Buddhist, then the Special
                  Marriage Act may be used to solemnize the wedding. However, it usually approximately takes 30
                  days extra. Following are the steps in this process:
                </p>
                <ol>
                  <li>
                    <p>Collect the documents required.</p>
                  </li>

                  <li>
                    <p>Draft the required Affidavits in the prescribed format.</p>
                  </li>

                  <li>
                    <p>Submit the application form with required documents to the marriage registrar office
                    </p>
                  </li>

                  <li>
                    <p>Book an appointment as per the guidelines mentioned above.
                    </p>
                  </li>

                  <li>
                    <p>On day of appointment Visit the marriage registrar office.
                    </p>
                  </li>

                  <li>
                    <p>30-day notice will be there in the registrar notice and publish in newspaper so that if someone
                      has an objection, they have to object within the particular time.
                    </p>
                  </li>

                  <li>
                    <p>After 30 days, another appointment is booked.
                    </p>
                  </li>

                  <li>
                    <p>Make sure of physical appearance on day of appointment ,</p>
                  </li>

                  <li>
                    <p>Complete the documents verification after that, the marriage is registered.</p>
                  </li>

                  <li>
                    <p>Then, you will receive your marriage certificate.</p>
                  </li>
                </ol>


                <p id="h_ltx">
                  Marriage Registrar Offices in Delhi

                </p>
                <p>According to residential address Delhi has 9 marriage registrar offices given below:-</p>


                <ol>
                  <li>
                    <p>North Delhi – 1, Kripa Narain Marg, Delhi.
                    </p>
                  </li>

                  <li>
                    <p>East Delhi – I&F Office complex, LM Bandh, Geeta Colony, Delhi
                    </p>
                  </li>

                  <li>
                    <p>South Delhi – MB Road, B.D.O.Office, Near Anupam Apartments, Saket, New DelhiTehsil Building, Mehrauli, New Delhi
                    </p>
                  </li>

                  <li>
                    <p>West Delhi – Old Middle School Building, Rampura, Lawrence Road</p>
                  </li>

                  <li>
                    <p>Central Delhi – SDM office, Karol Bagh-Jhandewalan, New Delhi</p>
                  </li>

                  <li>
                    <p>New Delhi – Jam Nagar House, Near India Gate, New Delhi</p>
                  </li>

                  <li>
                    <p>South-West Delhi – Old Terminal Tax Building, Kapashera, Delhi
                    </p>
                  </li>

                  <li>
                    <p>North-East Delhi – Weaver’s complex, Nand Nagari, Delhi</p>
                  </li>

                  <li>
                    <p>North-West Delhi – Bawana Road, Kanjhawala, Delhi</p>
                  </li>
                </ol>

                <p id="h_ltx">
                  WHY TO CHOOSE LEGALTAX FOR MARRIAGE REGISTRATION?
                </p>
                <p>
                  All the steps can be made much more simple with LEGALTAX. We make marriage
                  registration quickly, convinent and easy. Moreover, you just need do provide your basic
                  details and upload scans of your documents. We will apply on your behalf, and you’ll merely
                  be called in on the day of solemnisation for the purposes of verification only. We are ready
                  to go that extra mile to help businesses achieve their goal. We provide our best services to
                  our customers always and ready to resolve any kind of issues related to the certification
                  process. Don’t hesitate to talk to our experts to know more about the process.
                </p>
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
                                Q1. How many days after the marriage should be registered?


                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              In ordinary marriage, the time for submission of the Certificate of Marriage is within fifteen
                              (15) days following the solemnization of marriage while in marriages exempt from license
                              requirement, the prescribed time is thirty (30) days, at the place where the marriage was
                              solemnized.

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. Is there a penalty charge for late marriage registration in Delhi?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, Condonation of delay: In case of default to get the marriage registered within the
                              prescribed period of 60 days, the marriage officer shall have the power to condone the
                              delay not exceeding further 60 days subject to additional fee of Rupees Five hundred and
                              thereafter register the marriage
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. Is Gurudwara marriage certificate valid?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              The certificate given to them by the Gurudwara will be valid and they need not get the
                              marriage registered in the court as mentioned in the Registration of Births, Marriages and
                              Death Act, 1969
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4.Who can marry under special marriage?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                Any person, irrespective of religion. Hindus, Muslims, Buddhists , Sikhs, Christians, Parsis,
                                or Jews can also marriage under the Special Marriage Act, 1954. Inter-religion marriages
                                are performed under this Act.
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. How long can I get marriage certificate?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              Delivery time takes three to four working days within Metro Manila. If the recipient's address
                              is outside Metro Manila, it will take three to eight working days to deliver the document.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6.Is a certified copy the original marriage certificate?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              A certified copy is a copy of an original document with an endorsement saying that it's a
                              true copy of the original.

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What is an extract of marriage certificate?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              The extract (short) certificate contains the child's full name, gender, date of birth and place
                              of birth. The full certificate contains the same information as the extract (short) certificate
                              and also the parents' details.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. How can I check my marriage certificate online in India?


                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              To check the status of your marriage registration certificate online, you can follow the
                              instructions provided on this link –
                              <br>
                              <a href="https://www.india.gov.in/search-find-marriage-registration-data-and-apply-online-marriage-certificate" style="color: blue;">https://www.india.gov.in/search-find-marriage-registration-data-and-apply-online-marriage-certificate</a>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. Can we get a marriage certificate anywhere in India?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              For Marriage Registration under Hindu Act: You can apply at the office of the
                              Sub-Divisional Magistrate in whose jurisdiction the husband or wife resides on any working
                              day. Fill the Application form duly signed by both husband and wife.

                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q.10. Can parents be witnesses for marriage registration in India?


                              </button>
                            </h2>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, Any person such as a family member, a family friend, a colleague or a friend can be
                              a witness to a Court Marriage
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

          <div class="col-md-6">
            <div class="advocates_container">
              <div class="advo_box">
                <div class="advo_pic">
                  <img src="img/Raj warsi.jpg" alt="Raj warsi.jpg">
                </div>
                <div class="advo_disc">
                  <div class="row">
                    <div class="col-md-5" style="margin: 0px; padding: 0px;">
                      <h4><b>Adovcate Name</b></h4>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half" aria-hidden="true"></i>

                      <p> <i class="fa fa-suitcase" aria-hidden="true"></i> 15 years Experience</p>
                      <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Kailash Hills, Delhi</p>
                    </div>
                    <div class="col-md-7">
                      <p>
                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        <b>
                          Practice area & skills :
                        </b> Arbitration, Cheque Bounce, Child Custody, Criminal and more+
                      </p>
                      <button>Contact Now</button>
                    </div>
                  </div>



                </div>
              </div>

              <div class="advo_box">
                <div class="advo_pic">
                  <img src="img/Raj warsi.jpg" alt="Raj warsi.jpg">
                </div>
                <div class="advo_disc">
                  <div class="row">
                    <div class="col-md-5" style="margin: 0px; padding: 0px;">
                      <h4><b>Adovcate Name</b></h4>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half" aria-hidden="true"></i>

                      <p> <i class="fa fa-suitcase" aria-hidden="true"></i> 15 years Experience</p>
                      <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Kailash Hills, Delhi</p>
                    </div>
                    <div class="col-md-7">
                      <p>
                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        <b>
                          Practice area & skills :
                        </b> Arbitration, Cheque Bounce, Child Custody, Criminal and more+
                      </p>
                      <button>Contact Now</button>
                    </div>
                  </div>



                </div>
              </div>


              <div class="advo_box">
                <div class="advo_pic">
                  <img src="img/Raj warsi.jpg" alt="Raj warsi.jpg">
                </div>
                <div class="advo_disc">
                  <div class="row">
                    <div class="col-md-5" style="margin: 0px; padding: 0px;">
                      <h4><b>Adovcate Name</b></h4>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star-half" aria-hidden="true"></i>

                      <p> <i class="fa fa-suitcase" aria-hidden="true"></i> 15 years Experience</p>
                      <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Kailash Hills, Delhi</p>
                    </div>
                    <div class="col-md-7">
                      <p>
                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        <b>
                          Practice area & skills :
                        </b> Arbitration, Cheque Bounce, Child Custody, Criminal and more+
                      </p>
                      <button>Contact Now</button>
                    </div>
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