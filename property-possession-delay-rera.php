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
  foreach (propertypossessiondelayrera() as $value) {
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
            <span>Property
            </span>
            <h1>Possession Delay-Rera</h1>

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
                  RERA (Real Estate Regulatory Authority) is an act for the regulation and promotion
                  of the real estate sector to ensure the sale of apartment, plot or building in an efficient
                  and transparent manner. It is a dedicated court for the real estate sector and has a fast
                  case-resolution rate. RERA exists to protect the interests of home-Buyers in India.
                  Under the Real Estate Law in India, one of the most common grievance of
                  homebuyers is delayed possession of flats or allotment by the developer or promoter.
                  There are numerous complaints and cases which have been lodged across several
                  judicial and quasi-judicial authorities in India with respect to delay possession of
                  flats to homebuyers. To tackle this and provide relief to the homebuyer the RERA
                  Act provides for Filing of Complaint with the Authority or the Adjudicating Officer
                  under Section 31.


                </p>
                <p>
                  Section 31. (1) Any aggrieved person may file a complaint with the Authority or the
                  adjudicating officer, as the case may be, for any violation or contravention of the
                  provisions of this Act or the rules and regulations made there under against any
                  promoter allottee or real estate agent, as the case may be.
                </p>

                <p>
                  As per the Real Estate (Regulation and Development) Act (RERA), complaints can
                  be filed against developers, builder, and agents with the regulatory authority or the
                  adjudicating officer. Note: All complaints filed under RERA must be in the form
                  prescribed under RERA norms.
                </p>

                <p>
                  Every State have different complaint format. For example, complaint in the State of
                  Maharashtra, the aggrieved person can visit the MahaRERA website and register the
                  prescribed format. case of complaint in the State of Karnataka 'Form N' has to be fill
                  up which is provided at their website.

                </p>

              </div>

              <div class="overview_sr " id="2">
                <p id="h_ltx">Sample File of Rera Complaint</p>
                <img src="img/sample_property-posession-delay-form.png" alt="sample_property-posession-delay-form">

                <p id="h_ltx">
                  Steps involved in a RERA complaint
                </p>
                <ol>
                  <li>
                    <p>
                      <b>DOCUMENT VERIFICATION: </b> You will be required to share scanned copies of
                      documents related to the property for verification by a lawyer.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>COMPLAINT DRAFTING:</b> Within 10 days of receiving your documents, the
                      lawyer will draft and share the complaint copy for your review.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>FILING OF COMPLAINT:</b>The complaint will be filed in RERA within 3 days of
                      approval of the draft.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>REPLY:</b> The builder will file a reply to your complaint.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>HEARING AND ARGUMENTS: </b>RERA will conduct hearings in the matter.
                      Legaltax will update you after every hearing.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>JUDGMENT: </b>RERA will deliver judgment in the matter.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>EXECUTION: </b>In case of non-compliance of judgment by the builder, execution
                      proceedings will be initiated for attachment of builder’s assets.
                    </p>
                  </li>



                </ol>




                <p id="h_ltx">
                  REQUIRED DOCUMENTS
                </p>

                <ul>
                  <li>
                    <p>Application for buying of property in the Project
                    </p>
                  </li>
                  <li>
                    <p>Builder-Buyer Agreement
                    </p>
                  </li>
                  <li>
                    <p>Receipts/Proof of payments made to the builder
                    </p>
                  </li>
                  <li>
                    <p>Letters/ email correspondences between the Buyer and the Builder
                    </p>
                  </li>
                  <li>
                    <p>Brochure of the Project</p>
                  </li>
                  <li>
                    <p>Letter of Allotment </p>
                  </li>

                </ul>




                <p id="h_ltx">
                  WHAT ARE THE ASSURANCE GIVEN BY LEGALTAX?
                </p>

                <p>
                  <b>Verified Lawyers: </b> All the lawyers are thoroughly vetted with valid Bar Council ID

                </p>

                <p>
                  <b>Fixed Quotes: </b> No price-hassles later

                </p>

                <p>
                  <b>Dedicated Case Manager: </b> A personally-assigned Case Manager for timely updates of your
                  case proceedings

                </p>

                <p>
                  <b>100% Confidentiality: </b> Your personal details are kept absolutely confidential

                </p>

                <p id="h_ltx">
                  PAYMENT STRUCTURE
                </p>


                <p id="s_ltx">
                  WITHOUT EXECUTION
                </p>
                <ul>
                  <li>
                    <p>
                      You are required to pay 60% of the case fee to start the work
                    </p>
                  </li>
                  <li>
                    <p>
                      40% is payable after getting the final order
                    </p>
                  </li>
                </ul>


                <p id="s_ltx">
                  WITH EXECUTION

                </p>

                <ul>
                  <li>
                    <p>You are required to pay 60% of the case fee to start the work </p>
                  </li>

                  <li>
                    <p>20% upon getting the final order </p>
                  </li>

                  <li>
                    <p>20% upon receiving RC (Recovery Certificate)</p>
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
                                Q1. What is RERA?

                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              RERA Stands for Real Estate (Regulation and Development) Act, 2016. The word
                              RERA is also used to denote the Real Estate Regulatory Authority. As per the act,
                              every state and union territory in India has to set up a RERA authority. It’s an
                              initiative by the Indian Government in the real estate sector. The Act aims to set up
                              a Real Estate Regulatory Authority (hereafter, ‘RERA’) to ensure speedy justice to
                              home buyers. The Act is designed to ensure timely recovery of money or possession
                              of the property to the buyers, against the builder.

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. Why is RERA made? What are the objectives?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              RERA or Real estate development act 2016 was the need of the hour. In the absence
                              <p>
                                of a sector-specific law, the Indian real estate sector suffered from corruption and a
                                lack of transparency.
                              </p>
                              <p>
                                RERA takes care of consumer interests and brings discipline in the real estate sector.
                                RERA has the following broad objectives
                              </p>
                              <ul>
                                <li>
                                  <p>Bring transparency in the real estate sector.</p>
                                </li>

                                <li>
                                  <p>Protect consumer interest by ensuring the time-bound delivery of real estate
                                    projects.</p>
                                </li>

                                <li>
                                  <p>Single forum to handle real estate disputes.</p>
                                </li>

                                <li>
                                  <p>Bring standardization in the real estate sector</p>
                                </li>

                              </ul>
                              <p>Ensuring accountability of the builders /developers /Agents /promoters.</p>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. Where RERA is applicable?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              The Real Estate Act 2016 applies to all commercial and residential projects where-
                              <ul>
                                <li>
                                  <p>The land is over 500 square meters, </p>
                                </li>

                                <li>
                                  <p>More than eight apartments are to be developed</p>
                                </li>

                                <li>
                                  <p>Ongoing projects which have not received completion certificate on the date of
                                    commencement of the RERA Act. </p>
                                </li>

                                <li>
                                  <p>If a real estate developer fails to register a project within three months, the RERA
                                    authority </p>
                                  <p>
                                    -can impose a penalty of 10% of the project cost or

                                  </p>
                                  <p>
                                    -can award a three years' imprisonment Once you register as a promoter, you will
                                    receive a login ID, password and a unique registration number.
                                  </p>
                                  <p>
                                    You can update your project details after login into the RERA portal of your state.
                                  </p>
                                </li>

                                <li>
                                  <p></p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. Is RERA applicable to both purchase and rental transactions?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              No, RERA is not applicable to rental projects. It only covers the purchase and sale
                              of real estate projects.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. Is RERA applicable on commercial projects?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              RERA is applicable to both residential and commercial projects, including shops,
                              offices, and buildings.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. Will RERA be applicable to existing projects also or only to the future ones
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              The RERA act applies to ongoing/existing projects. All real estate projects which
                              have not received occupation or completion certificate will come under RERA.
                              All existing/ongoing projects must register under RERA within three months of
                              implementation of the RERA Act.

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. Where to file a RERA complaints?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                <b>File RERA complaints: Step-by-Step guide </b>
                              </p>
                              <p>
                                <b>Step 1 –</b> To file a complaint with RERA authority you need to visit your state's official
                                RERA portal. For example, to file a complaint with Haryana RERA you need to visit
                                the portal <a href="https://haryanarera.gov.in/">https://haryanarera.gov.in/</a> and click on Registration of Complaint with
                                HRERA Authority to start
                              </p>

                              <p>
                                <b>Step 2 –</b> Once you click on the above link, the online
                                RERA complain form will appear.
                              </p>

                              <p>
                                <b>Step 3 – </b>You need to submit your name, address, Contact details, and project details.
                                Attach supporting documents such as builder-buyer agreement, project
                                advertisement, brochure, etc.
                              </p>
                              <p>
                                <b>Step 4 – </b> After filling up the form, you need to pay a sum of INR 1000 for filing a
                                complaint before RERA. If you are filling complain before adjudicating officer, the
                                fee would be INR 5000. You can pay the complaint fee online or via check.
                              </p>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. What is the right to file a complaint?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              The complaint can be filed as soon as there is an apprehension that the builder will
                              not be able to deliver the property within the stipulated time period. In any manner,
                              it is best to file a complaint as soon as the term of the agreement expires.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. Can an association of persons file a single complaint under RERA?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, an association of persons (eg. a Welfare Association of Home Buyers) may file
                              a case against the builder. The following are the requirements for filing a complaint
                              as an association:
                              <ul>
                                <li>The association may be registered or unregistered. </li>
                                <li>All the members of the association must be allottees of the same project. </li>
                                <li>All the members must seek the same/similar relief. </li>
                                <li>The association may file a complaint in case of delayed possession, possession
                                  offered but without amenities, etc. </li>
                              </ul>
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10.Will RERA increase property prices?

                              </button>
                            </h2>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                Will RERA increase property prices?
                              </p>
                              <p>
                                The act will surely have an upward impact on the prices for residential properties,
                                but not in the short-term.
                              </p>
                              <p>
                                With so much inventory lying withing existing projects, a market correction will
                                take 3-4 years. Here are some impacts or RERA which we will see in the next five
                                years.
                              </p>
                              <ul>
                                <li>Small players will be wiped out. </li>
                                <li>Market will consolidate</li>
                                <li>The RERA Act makes it mandatory to sell on the carpet area. The Indian real estate
                                  market has been transacting on the super-built-up area, which is 25-30 percent
                                  higher. The per square fit rate adjustments will happen in the coming years.</li>
                                <li>Once the current inventory is sold, there will be limited supply. </li>
                                <li>The builders will have pressure to complete in time, the focus will shift to
                                  completing the projects from launching a new one. </li>
                                <li>The burden of Structural Defects shifted on developers, they will add this cost to
                                  project prices.</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeleven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                Q11. What are the various places where RERA office are situated?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                            <div class="card-body">
                              <table class="table table-bordered table-hover  ">
                                <tbody>
                                  <tr>
                                    <th>Place</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                  </tr>

                                  <tr>
                                    <td>RERA Office in Mumbai</td>
                                    <td>Maharashtra Real Estate
                                      Regulatory Authority
                                      3rd Floor, A-Wing,
                                      Slum Rehabilitation
                                      Authority,
                                      Administrative
                                      Building, Anant
                                      Kanekar Marg, Bandra
                                      (E), Mumbai 400051
                                      Phone No. 022
                                      68111600</td>
                                    <td>022 68111600 </td>
                                    <td> <a href="mailto:helpdesk@maharera.ma"> helpdesk@maharera.ma</a>

                                      haonline.gov.in
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>RERA office in
                                      Bangalore </td>
                                    <td>Real Estate Regulatory
                                      Authority Karnataka 2nd
                                      floor, Silver Jubli Block,
                                      Unity Building, CSI
                                      Compound 3rd Cross,
                                      Misson Road Bengaluru,
                                      Karnataka 560027 </td>
                                    <td>080 -
                                      22249798,22249799 </td>
                                    <td><a href="mailto:info.rera@karnataka.gov
.in "></a>nfo.rera@karnataka.gov
                                      .in </td>
                                  </tr>

                                  <tr>
                                    <td>RERA office in Pune </td>
                                    <td>Maharashtra Real Estate
                                      Regulatory Authority
                                      109 to 113, First Floor,
                                      Sayajirao Gaikwad
                                      Udyog Bhavan, Aundh,
                                      Pune -411 007</td>
                                    <td>020 29806545</td>
                                    <td> <a href="mailto:helpdesk@maharera.ma"> helpdesk@maharera.ma</a>

                                      haonline.gov.in
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>RERA office in Nagpur </td>
                                    <td>Maharashtra Real Estate
                                      Regulatory Authority
                                      Administrative
                                      Building No.1, 1st
                                      Floor, Adjacent to
                                      Udyog Bhavan, Civil
                                      Line, Nagpur – 440001.
                                      Tel. No. : 0712 2551400</td>
                                    <td>0712 2551400</td>
                                    <td> <a href="mailto:helpdesk@maharera.ma"> helpdesk@maharera.ma</a>

                                      haonline.gov.in
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>RERA office in Nagpur </td>
                                    <td>Deputy Secretary
                                      U.P. Real Estate
                                      Regulatory Authority
                                      Phone No (Gr. Noida
                                      office) - 0120-2326104</td>
                                    <td>0120-2326104</td>
                                    <td><a href="mailto:contactuprera@up-rera.in">contactuprera@up-rera.in</a></td>
                                  </tr>

                                </tbody>
                              </table>
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