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
  foreach (gmpcertification() as $value) {
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
            <span>GMP</span>
            <h1>Certification</h1>

            <p>
              GMP certification deals with issues like documentation, record keeping, personnel qualifications, sanitation, cleanliness, equipment verification, sanitation, complaint handling, and process validation.
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
        How to Start a GMP Registration
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
                  <a href="#2"> Purpose of a Good Manufacturing Process</a>
                </li>

                <li>
                  <a href="#3">GMP Guidelines Directs the Certification Holders</a>
                </li>

                <li>
                  <a href="#4">Benefits of GMP Registration</a>
                </li>
                <li>
                  <a href="#5">Documents Required</a>
                </li>
                <li>
                  <a href="#6">Process to get GMP Registration</a>
                </li>

                <li>
                  <a href="#7">Consequences of GMP Non-Compliance</a>
                </li>
                <li>
                  <a href="#8"> Basic Principles that GMP Guidelines Seeks to Obey</a>
                </li>
                <li>
                  <a href="#9">LegalTax Procedure for GMP Certification</a>
                </li>
                <li>
                  <a href="#10">Why to Choose Legal Tax</a>
                </li>
                <li>
                  <a href="#11">FAQs</a>
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
                <h3>GMP Certification</h3>
                <p>
                  GMP stands for Good Manufacturing Practices, and the term is used globally to describe the manufacturing, testing, and overall quality control and management of pharmaceutical products. It defines some guidelines that talk about a quality assurance approach. GMP certification ensures that the products comply with the quality standard norms.
                </p>
                <br>
                <p>
                  The Joint Commissioner is authorized by the Commissioner of Food and Drug Administration to sign and issue certificates under the WHO-GMP Certification Scheme. GMP certification deals with issues such as documentation, record keeping, personnel qualification, sanitation, cleanliness, equipment verification, sanitation, complaint handling and process verification.
                </p>
              </div>

              <div class="overview_sr " id="2">
                <h3>
                  What is the Purpose of a Good Manufacturing Process?
                </h3>
                <p>
                  The main objective of a goods manufacturing practice is to reduce the amount of risk involved in the production of pharmaceutical items. Pharmaceutical goods involve risks such as:
                </p>
                <ol style="list-style-type:lower-alpha">
                  <li>Unforeseen impurities in the product may cause serious health effects that may lead to death; </li>
                  <li>Mislabeling on containers, which means that the patient is taking the wrong medicine, </li>
                  <li>Too much active or too little ingredient, (d) ineffective treatment or adverse effects, etc.</li>
                </ol>
                <p>GMP has many rights under it such as covering all aspects of production, from starting material, details about areas and equipment to training and personal hygiene of employees. It provides complete details about the processes that produce the finished product and may affect its quality.</p>
              </div>

              <div class="overview_sr " id="3">
                <h3>
                  What does GMP Guidelines Directs the Certification Holders?
                </h3>
                <p>WHO (World Health Organization) has made some guidelines for good manufacturing practices. Many countries have defined their requirements for GMP based on the WHO GMP. Others have met their prerequisites, for example, in the Association of Southeast Asian Nations (ASEAN), the European Union, and through the Pharmaceutical Inspection Convention.</p>
                <p>GMP guidelines require a quality way to deal with manufacturing, empowering organizations to limit or eliminate contamination, misunderstandings and mistakes. It protects the consumer from buying an item that is not compelling or even risky.</p>
                <p>Most GMP prerequisites are extremely comprehensive and open-ended, allowing each manufacturer to independently choose how to best implement the required controls. This allows for a lot of customizability, yet requires that manufacturers understand the prerequisites in a way that makes sense for each individual business.</p>

              </div>



              <div class="overview_sr " id="4">
                <h3>
                  What are The Benefits of GMP Registration?
                </h3>
                <p>
                  Each drug and medical device manufacturer follows GMP rules and procedures while some have created their own guidelines that are in line with their legislation.
                </p>
                <ul>
                  <li>
                    <p>
                      Empowering certification holders to opt for great creation,
                    </p>
                  </li>
                  <li>
                    <p>
                      Timely identification of manufacturers and management issues,
                    </p>
                  </li>
                  <li>
                    <p>
                      Compliance with important laws and guidelines,
                    </p>
                  </li>
                  <li>
                    <p>
                      Improving overall credibility and public image,
                    </p>
                  </li>
                  <li>
                    <p>
                      Reduce the safety risk in product quality and safety,
                    </p>
                  </li>
                  <li>
                    <p>
                      Increases consumer confidence in its products,
                    </p>
                  </li>
                  <li>
                    <p>
                      Helps reduce operating costs due to resale and penalties due to non-compliance,
                    </p>
                  </li>
                  <li>
                    <p>
                      Helps in promoting export opportunities,
                    </p>
                  </li>
                  <li>
                    <p>Reduction in duplication of inspections</p>
                  </li>
                  <li>
                    <p>Money saving.</p>
                  </li>
                  <li>
                    <p>
                      <b>Benefits For The Manufacturer</b><br>
                      One of the primary advantages is significantly improved quality systems and quality compliance at the manufacturer. We have seen these improvements in the months leading up to GMP certification and have continued during the years immediately following GMP certification.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Benefits For The Customer</b><br>
                      Customers will typically modify their monitoring to manufacturers that have been GMP certified. Customers are aware that in order to be certified, the manufacturer must have the system in place and provide evidence that non-conformance and changes requiring customer notification are handled appropriately.This assurance is generally not achieved through the one-day supplier audits that pharma companies perform; Rather, this certification is achieved as a result of a thorough, multiple-day audit of the manufacturer as part of the audit program.
                    </p>
                  </li>
                </ul>
              </div>

              <div class="overview_sr " id="5">
                <h3>
                  Documents Required for GMP Certification?
                </h3>
                <ul>
                  <li>
                    <p>
                      Name of the applicant including address, telephone, fax, e-mail etc
                    </p>
                  </li>
                  <li>
                    <p>
                      Copy of manufacturing license.
                    </p>
                  </li>
                  <li>
                    <p>
                      List of approved products.
                    </p>
                  </li>
                  <li>
                    <p>
                      Site master file (specified under WHO TRS823).
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Data on ready formulation :-</b>
                    </p>
                    <ol>
                      <li>
                        <p>
                          Master manufacturing formula, manufacturing process.
                        </p>
                      </li>
                      <li>
                        <p>
                          Finished product specification and method of analysis.
                        </p>
                      </li>
                      <li>
                        <p>
                          3. Sustainability Study Evaluation (Quick & Real Time) for 3 batches including details Batch Size, Batch Number, Manufacture Date, Expiry Date, Sustainability Study Status (Quick / Real Time).
                        </p>
                      </li>
                      <li>
                        <p>Process verification report for 3 batches.</p>
                      </li>
                      <li>
                        <p>
                          Verification report of analytical method.
                        </p>
                      </li>
                    </ol>
                  <li>
                    <p>
                      List of technical staff, their qualifications, and experience and approval status.
                    </p>
                  </li>
                  <li>
                    <p>
                      List of tools and equipment.
                    </p>
                  </li>
                  <li>
                    <p>
                      List of SOPs and STPs.
                    </p>
                  </li>
                  <li>
                    <p>
                      Manufacturing Plant Layout.
                    </p>
                  </li>
                  <li>
                    <p>
                      Schematic diagram of the water system specifying the circulation loop and MOC.
                    </p>
                  </li>
                  <li>
                    <p>
                      Product Summary Sheet (as per Format B).
                    </p>
                  </li>
                  <li>
                    <p>
                      Proof of safety and effectiveness as per Rule 158B of the Drugs and Cosmetics Rules, 1945.
                    </p>
                  </li>

                  <li>
                    <p>The Drugs and Cosmetics Act, 1940 and the Rules thereunder, the Drugs and Magic Remedies (Objectionable Advertisements) Act, 1954 and the Rules thereunder, etc., with regard to compliance with the provisions of the Household Regulations, inter alia.</p>
                  </li>
                </ul>

              </div>


              <div class="overview_sr " id="6">
                <h3>
                  What is the process to get GMP Registration?
                </h3>
                <img src="img/process-to-get-GMP-Registration.png" alt="process-to-get-GMP-Registration">
                <p>
                  <b>Application </b>
                </p>
                <p>This is the initial step for obtaining GMP certification; The application contains some essential data of the organization. The confirmation body must record the application and requirements or keep all data on the GMP database.</p>

                <p>
                  <b>Review of Application</b>
                </p>
                <p>
                  The application will be surveyed by the group to guarantee that the continuity requirement is met.
                </p>
                <p><b>Analysis & Agreement</b></p>
                <p>After the documents are audited, give a price quote to run the gap analysis covering all the provisions of the quality guidelines and the area. Gap analysis is done by organizations to investigate the gap between the things systematically and proven things.</p>
                <p><b>Documentation Review</b></p>
                <p>Check the organization's documentation to ensure that the documentation meets the compliance condition.</p>
                <ul style="list-style-type:none">
                  <li><b>Stage-1</b>
                    <ol>
                      <li>
                        <b>Audit</b>
                        <p>
                          Fully online, paperless, and contactless platform
                        </p>
                      </li>
                      <li>
                        <b>Survey</b>
                        <p>
                          Then, review your governance framework documentation to ensure that the continuity prerequisites have been set.
                        </p>
                      </li>
                      <li>
                        <b>Restorative Activity</b>
                        <p>
                          Corrective activity is to be managed by non-equality. It will have to be made if there is non-compliance.
                        </p>
                      </li>
                      <li>
                        <b>Check</b>
                        <p>
                          Verify the documentation of the establishment as per the required standard.
                        </p>
                      </li>
                    </ol>
                  </li>
                  <li><b>Stage-2</b>
                    <ol>
                      <li>
                        <b>Audit</b>
                        <p>
                          The inspector checks that the association as indicated by its documentation and the official body's examiner distinguishes non-compliances, and finally provides the reviewer the opportunity to address the non-compliances. After that, review the execution process as per the report of the association.
                        </p>
                      </li>
                      <li>
                        <b>Restorative Action</b>
                        <p>
                          If any non-similarity happens then the remedial move has to be made.
                        </p>
                      </li>
                      <li>
                        <b>Check</b>
                        <p>
                          Verify work guidance and, then, the execution process is being followed by your representatives.
                        </p>
                      </li>
                      <li>
                        <b>Granting of Certification</b>
                        <p>
                          The certification body will give a certificate of compliance, which is enough for a long time.
                        </p>
                      </li>
                      <li>
                        <b>Surveillance Audit</b>
                        <p>
                          Monitoring review guarantees that the association meets the prerequisites of the governance framework. Observational review should be done every six months or one year from the date of issue of the certificate.
                        </p>
                      </li>
                    </ol>
                  </li>
                </ul>



              </div>

              <div class="overview_sr " id="7">
                <h3>
                  What are the Consequences of GMP Non-Compliance?
                </h3>

                <p>
                  When you work in any construction industry, compliance with good construction practices is vital to your business. Not only does it help you produce a high quality product, but it also maintains consumer and ecological health. But, what if you don't follow the GMP guidelines? Let's take a look at the results of the same.
                </p>
                <br>
                <ul>
                  <li><b>Strike To Reputation & Goodwill</b>
                    <p>For all businesses, reputation is everything. It is very important how you acquire customers, gain product loyalty, and keep people coming to you every time. When you don't follow good manufacturing practices, your reputation will be the first to suffer. Customers who don't trust a manufacturer won't take the risk of buying your products.</p>
                  </li>
                  <li><b>Failure of Consumer Confidence</b>
                    <p>Good manufacturing practices are the guiding principle to keep your customers safe. If you don't follow the guidelines, consumers will lose trust in your product without any hassle. But the penalty is more than just a business break for your company.</p>
                  </li>
                  <li><b>Criminal Prosecution</b>
                    <p>The Food and Drug Administration, which issues the certificate under the WHO-GMP certification scheme, has the ability to confiscate the drug and stop production through a court order. And, if circumstances so demand it, the Department of Justice and Health and Human Services has the ability to follow up with action against any manufacturing company that violates good manufacturing practices.</p>
                  </li>
                  <li><b>License Cancellations</b>
                    <p>When working in manufacturing, there are a substantial number of licenses that go into the curriculum. From building permits to licensed practitioners to facility licenses, you need it. If you do not succeed in following the Good Manufacturing Practices guidelines, you are putting your work, your facility and your physicians at risk for losing your license.</p>
                  </li>
                  <li><b>Allegation of Fraud</b>
                    <p>Failure to follow good manufacturing practices can also result in charges of fraud. This may be due to mislabeling material or ingredient quantity issues or by failing to advertise a product in compliance with good manufacturing practices guidelines. When a construction company is accused of fraud, the consequences can be dire.</p>
                  </li>
                </ul>
              </div>



              <div class="overview_sr " id="8">
                <h3>
                  What are the Basic Principles that GMP Guidelines Seeks to Obey?
                </h3>


                <ul>
                  <li>
                    <p>
                      The pharmaceutical assembling office should maintain its manufacturing area clean and spotless. Controlled ecological conditions must be maintained to prevent cross-contamination of a nutritional or pharmaceutical item with adulterant substances that may be hazardous to human use.
                    </p>
                  </li>
                  <li>
                    <p>
                      The manufacturing process is unmistakably characterized and controlled. Every single process must be approved to guarantee uniformity with details.
                    </p>
                  </li>
                  <li>
                    <p>
                      Manufacturing processes are controlled, and any progress in the process is evaluated. Changes affecting the nature of the drug are approved as and when required.
                    </p>
                  </li>
                  <li>
                    <p>
                      Instructions and techniques should be written clearly and clearly. Administrators must be prepared to conduct document processes.
                    </p>
                  </li>
                  <li>
                    <p>
                      During construction, records must be made, manually or by equipment, showing all the steps required for defined procedures and instructions. In addition, all deviations are to be investigated and documented.
                    </p>
                  </li>
                  <li>
                    <p>
                      Manufacture records (including delivery) are kept in an intelligible and accessible form, which enables tracing the entire history of a batch.
                    </p>
                  </li>
                  <li>
                    <p>
                      The complaints about the items are to be analyzed, where the reasons for the quality defects should be investigated and in respect of insufficient items, suitable measures should be taken to prevent further repetition.
                    </p>
                  </li>
                </ul>

              </div>
              <div class="overview_sr " id="9">
                <h3>LegalTax Procedure for GMP Certification</h3>
                <p>Please use the steps above to legally and securely integrate GMP certification and benefit in the form of better quality sales and satisfied customers. Our LegalTax experts will be at your disposal for assisting you with guidance concerning GMP Certification and its compliance for the smooth functioning of your manufacturing business in India. LegalTax professionals will assist you in planning seamlessly at the least cost, confirming and the successful conclusion of the process.</p>
                <br>
                <p>It is advisable that an attorney with “corporate certification experience” must be appointed to overwhelm many of the potential pitfalls that creep around within GMP Certification and to understand the requirement in detail. The elementary information would be mandatory from your end to start the process once all the information is provided, and the payment is received.</p>
                <br>
              </div>

              <div class="overview_sr " id="10">
                <h3>Why To Choose <a href="https://legaltax.in/" style="color:blue">LegalTax</a>?</h3>
                <p>LegalTax is one of the platforms which Coordinate to accomplish all your legal and financial requirements and connect you to Consistent professionals. Yes, our clients are satisfied with our legal service! Because of our focus in simplifying legal requirements, they have consistently regarded us highly and provide regular updates.</p>
                <br>
                <p>Our customers can also track progress on our platform at all times. If you have any questions about the GMP certification process, our experienced representatives are just a phone call away. LegalTax will ensure that your communication with professionals is engaging and seamless.</p>
                <br>
              </div>

              <div class="overview_sr " id="11">
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
                                Q1. Who issues a GMP Certificate?
                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              The Joint Commissioner is authorized by the Commissioner of Food and Drug Administration to sign and issue certificates under the WHO-GMP Certification Scheme. GMP certification is granted based on a complete GMP assessment of a manufacturer operating in accordance with GMP guidelines. Certification is given that satisfactory documents are produced on follow-up of the examination.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. What are GMP guidelines?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Application for GMP certification must be made by an approved person within the organization seeking confirmation. This is usually one with an obligation to, for example, a production manager, a quality assurance manager, a quality control manager or a managing director.

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. How can I get GMP certification?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              Application for GMP certification must be made by an approved person within the organization seeking confirmation. This is usually one with an obligation to, for example, a production manager, a quality assurance manager, a quality control manager or a managing director.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4.Is GMP Necessary, if there is a Quality Control Laboratory?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              Good quality can be assured during the manufacturing process, it is not possible to test it later. GMP protects the final product from errors that cannot be ignored through a quality product. Without GMP it is difficult to be certain that each unit of the drug is of the same quality as the units of the drug tested in the research facility


                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. What are the Benefits of GMP Certification?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                <b>There are many benefits of GMP certification which are there for the manufacturers as well as the customers, which are as follows:- </b>
                              </p>
                              <ul>
                                <li>
                                  <p>
                                    Empower delegates to choose great creations
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Identify manufacturing and management issues
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Compliance with laws and guidelines
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Increase credibility and public image
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Reduce safety risks in product quality and safety
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Increases consumer confidence in your products
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Helps reduce operating costs due to resale and penalties due to non-compliance
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Help Boost export Opportunities
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Reduced duplication of inquiry
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Cost saving
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6.What is the Objective of GMP?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              The primary objective of GMP is to reliably deliver great medicines or clinical gadgets that meet the global guidelines required for pharmaceutical services. The processes used in manufacturing are deliberately controlled, and any progress in the process must be evaluated.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What is the validity of GMP Certification?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">

                              The certification is generally valid for a time period of three years.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. What is GMP Inspection?


                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              The purpose of inspecting pharmaceutical manufacturing offices is to either enforce the Good Manufacturing Practices (GMP) continuum or to approve the manufacture of explicit pharmaceutical goods, which is usually consistent with an application for marketing approval.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. Why is GMP Important?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">

                              Unapproved quality drugs not only pose health hazards but also lead to misappropriation of cash for the two governments and individual buyers. GMP is designed to guarantee that mistakes do not happen. The execution of GMP is interested in good quality medicines.
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. What is the difference between cGMP and GMP?
                              </button>
                            </h2>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>cGMP refers to the 'Current Good Manufacturing Practice' guidelines authorized by the US Food and Drug Administration (FDA).</p><br>
                              <p>'Good Manufacturing Practices' (GMP) is a framework to guarantee that goods are reliably delivered and controlled by quality guidelines.</p>
                            </div>
                          </div>
                        </div>


                      </div>
                      <!-- accordion -->
                    </div>
                    <div class="col-lg col-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">

                      </div>
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