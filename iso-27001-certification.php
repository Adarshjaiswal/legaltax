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
  foreach (iso27001certification() as $value) {
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
  <link rel="stylesheet" href="/assests/css/style.css">
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
            <span>ISO 27001 </span>
            <h1>Certification</h1>

            

            <p>
              Customer is the king, and let your business be the preferred choice of their highness. How to make that a reality and make your business grow exponentially? The answer is simple, by gaining trust. The best way to portray the worthiness of the business and the efficiency of the product or services and showcase you possess quality on par with the market.
            </p>
            <ul>
              <li>Expert assistance</li>
              <li>Complete online Process</li>
              <li>End To End Compliances solutions</li>
              <li>Track Application Status</li>
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
        How to Start ISO 27001 Certification
      </h1>
      <div class="tp_img_inf">
        <img src="img/iso-27001-certification-top.png" alt="iso-27001-certification-top">
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
                  <a href="#2">ISO 27001 ISMS Certificate</a>
                </li>

                <li>
                  <a href="#3">Why Is ISMS ISO 27001 Certification Important?</a>
                </li>

                <li>
                  <a href="#4"> Meaning of ISMS </a>
                </li>
                <li>
                  <a href="#5">Public Standards of ISO 27000</a>
                </li>
                <li>
                  <a href="#6">Benefits of ISO 27001 ISMS Certification</a>
                </li>

                <li>
                  <a href="#7">Document Required</a>
                </li>
                <li>
                  <a href="#8">Get Your Certification ISMS ISO 27001 With Legaltax </a>
                </li>
                <li>
                  <a href="#9">What We Provide </a>
                </li>

                <li>
                  <a href="#10">FAQs </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="laoded_cntent">
              <div class="overview_sr " id="1">
                <h3>
                  What Is An ISMS ISO 27001
                </h3>
                <p>
                  The ISO/IEC 27000 is a part of the ISO/IEC growing family of Information Security Management System Standards, which is the ‘ISO/IEC 27000 Series’. ISO/IEC 27000 is an international standard labeled as information technology - Security Technology - information Security Management System which mainly defines the overview and terminology of information Security Management Systems. ISO 27000 is published, prompted and advanced by the International Organization for Standardization Electrotechnical commission (IEC)
                </p>

                <br>
                <p>
                  ISO/IEC 27000:2018, as amended, focuses on information technologies and information Security management standard includes an overview and terminology used by the ISO 27000 series standards. Also, it serves as a general introduction to the more general ISO/IEC 27001;2013 also known as ISO 27001. The ISO/IEC 27000:2018 standard is the one that provides for information security management systems (ISMS). In addition to ISMS, ISO 27000:2018, which has been recently revised, produces more commonly used rules descriptions in the ISMS family of standards. ISO 27000:2018 also applies to all sizes of organization and types of organizations. ISO 27000:2018 is suitable for organizations such as commercial enterprises government firms, non-profit organizations (NGOs)
                </p>
              </div>

              <div class="overview_sr " id="2">
                <h3>
                  ISO 27001 ISMS Certificate
                </h3>
                <p>ISO 27001 ISMS Certificate is basic for any organization that plans to enlarge, nurture, or authorize an information security management system to accommodate with its established information security & policy. ISO 27001 ISMS certification includes a risk assessment process, organizational structure, information classification, access control mechanism, physical and technical safeguards, procedures, monitoring, information security policies & reporting guidelines.</p>
                <br>
                <p>The ISO framework is a combination of policies and procedures for the organization to use. ISO 27001 provides a framework to assist organizations of any size or any industry to protect their information in a systematic and cost-effective manner through the adoption of ISMS (Information Security Management system)</p>
              </div>

              <div class="overview_sr " id="3">
                <h3>
                  Why Is ISMS ISO 27001 Certification Important?
                </h3>
                <p>
                  ISO 27001 ISMS certification assures customers, partners and other stakeholders that your company's information security infrastructure meets their expectations. This certification is a globally recognized best practice framework for ISMS and one of the most popular information security management standards worldwide.
                </p>
                
                <p>
                  The cost of not having an effective ISMS can be high - both prestige and financially. Standards are an important component in any organization's risk management strategy, and have become an important part of many organizations' IT Governance, Risk and Compliance (GRC) programs.
                </p>

              </div>



              <div class="overview_sr " id="4">
                <h3>
                  What is the Meaning of ISMS ?
                </h3>
                <p><b>
                    ISMS or Information Security Management System is a set of rules that a company needs to establish
                  </b>
                </p>

                <ul>
                  <li>Identify what risks exist to the information;</li>
                  <li> Continuously measure if the controls implemented as expected;</li>
                  <li>Make continuous improvements to improve the overall ISMS function;</li>
                  <li>Set clear objectives on what needs to be achieved with information security;</li>
                  <li>Define controls (safety measures) and other mitigation methods to meet identified requirements and handle risks;</li>
                  <li>Identifying stakeholders and their expectations of the Company with regard to information security;</li>
                  <li>Implement all control and other exposure treatment methods.</li>
                </ul>

              </div>

              <div class="overview_sr " id="5">
                <h3>
                  What Are The Public Standards of ISO 27000?
                </h3>
                <b>The published ISO 27000 standards that pertain to “Information Technology - Security Technologies” are :</b>
                <ul>
                  <li>
                    ISO/IEC 27000 deals with information security management systems providing an overview and terminology of information security management systems.
                  </li>

                  <li>
                    ISO/IEC 27001 deals with information technology, security technologies, part of the information security management system which provides the requirements of the same. The 2013 release of the standard, it specifies an information security management system i.e. ISO 27000 in the same formal, structured and concise manner as the management systems of other ISO standards.
                  </li>
                  <li>
                    ISO/IEC 27002 deals with the Code of Practice for Information Security Controls which essentially provides a comprehensive list of information security controls that can be managed through ISMS.
                  </li>
                  <li>
                    ISO/IEC 27003 pertains to the Information Security Management System which provides information on the implementation guidance of ISMS.
                  </li>

                  <li>
                    ISO/IEC 27004 deals with information security management and helps in monitoring, measuring, analyzing and evaluating information processed.
                  </li>

                  <li>
                    ISO/IEC 27005 deals with information security risk management.
                  </li>

                  <li>
                    ISO/IEC 27006 deals with the requirements of bodies providing audit and certification of information security management systems.
                  </li>

                  <li>
                    ISO/IEC 27007 deals with guidelines for information security management systems, specifically on auditing which focuses on auditing management systems.
                  </li>

                  <li>
                    ISO/IEC TR 27008 is related to the Guidance for Auditors on ISMS Controls which focuses on the audit of information security controls.
                  </li>
                  <li>
                    ISO/IEC 2709 is essentially an internal document for sector/industry-specific forms of committee development or implementation guidelines for ISO 27000 standards as a whole.
                  </li>
                  <li>ISO/IEC 27010 deals with information security management for inter-sector and inter-organizational communication.</li>
                  <li>ISO/IEC 27011 deals with information security management guidelines for telecommunications organizations based on ISO/IEC 27002.</li>
                  <li>ISO/IEC 27013 deals with the Guidelines on Integrated Implementation of ISO/IEC 27001 and ISO/IEC 20000-1.</li>
                  <li>ISO/IEC 27014 pertains to the Information Security Administration.</li>
                  <li>ISO/IEC TR 27015 deals with information security management guidelines for financial services, which has now been withdrawn.</li>
                  <li>ISO/IEC TR 27016 moves forward with information security economics</li>
                  <li>ISO/IEC 27017 deals with the Code of Practice for Control of Information Security for Cloud Services based on ISO/IEC 27002</li>
                  <li> ISO/IEC 27018 deals with the code of practice for the protection of Personally Identifiable Information (PII) in public clouds that act as PII processors.</li>
                  <li>ISO/IEC TR 27019 deals with information security for process control in the energy industry.</li>
                  <li>ISO/IEC 27031 deals with guidelines for the preparation of information and communication technologies for business continuity.</li>
                  <li> ISO/IEC 27032 deals with the guidelines for cyber security.</li>
                  <li>ISO/IEC 27033-1 deals with network security - Part 1 where it presents the overview and concepts.</li>
                  <li> ISO/IEC 27033-2 proceeds with network security - Part 2 where it presents guidelines for the design and implementation of network security.</li>
                  <li>ISO/IEC 27033-3 deals with network security - Part 3 where it anticipates context networking scenarios such as threats, design techniques and control issues.</li>
                  <li>ISO/IEC 27033-4 deals with network security - part 4 where it indicates secure communication between networks using security gateways.</li>
                  <li>ISO/IEC 27033-5 deals with network security - Part 5 where secure communication takes place in a network using a Virtual Private Network (VPN).</li>
                  <li>ISO/IEC 27033-6 deals with network security - Part 6 of Secure Wireless IP Network Access.</li>
                  <li>ISO/IEC 27034-1 deals with application security - Part 1 which lays out guidelines for application security.</li>
                  <li>ISO/IEC 27034-2 deals with application security - Part 2 which explains the standard framework of the organization.</li>
                  <li>ISO/IEC 27034-6 deals with application security - Part 6 containing case studies.</li>
                  <li>ISO/IEC 27035-1 deals with information security incident management - Part 1 containing the principles of incident management.</li>
                  <li>ISO/IEC 27035-2 deals with the information security incident management - part 2 holding the guidelines to plan and prepare for incident response</li>
                  <li>ISO/IEC 27036-1 deals with the information security for supplier relationship- Part 1 which has the overview and concepts explained in there.</li>
                  <li>ISO/IEC 27036-2 Related to Information Security for Supplier Relations - Part 2 Requirements Briefing</li>
                  <li>ISO/IEC 27036-3 deals with information security for supplier relationships - Part 3 contains guidelines for information and communications technology supply chain security.</li>
                  <li>ISO/IEC 27036-4 deals with information security for supplier relationships - Part 4 contains guidelines for the security of cloud services.</li>
                  <li>ISO/IEC 27037 deals with guidelines for the identification, collection, acquisition and protection of digital evidence.</li>
                  <li>ISO/IEC 27038 deals with the specification for digital reduction on digital documents of the same.</li>
                  <li>ISO/IEC 27039 Projects Intrusion Prevention.</li>
                  <li>ISO/IEC 27040 explains storage security.</li>
                  <li>ISO/IEC 27041 describes test assurance.</li>
                  <li>The analysis of digital evidence is a factor in ISO/IEC 27042.</li>
                  <li>ISO/IEC 27043 explains the investigation of the incident.</li>
                  <li>ISO/IEC 27050-1 has Part 1 of the Electronic Discovery which explains the overview and concepts</li>
                  <li>ISO/IEC 27050-2 covers electronic discovery - Part 2 contains guidance for the governance and management of electronic discovery</li>
                  <li>ISO/IEC 27701 gets the information security management system of Information Technology - Security Technology - Privacy Information Management System (PIMS).</li>
                  <li>ISO 27799 covers Information Security Management in Health using ISO/IEC 27002 which helps guide health industry organizations on how to protect personal health information using ISO/IEC 27002.</li>

                </ul>
              </div>


              <div class="overview_sr " id="6">
                <h3>
                  Benefits of ISO 27001 ISMS Certification
                </h3>
                <h3>Here are some important benefits of<a href="https://en.wikipedia.org/wiki/ISO/IEC_27001" style="color:blue"> ISMS ISO 27001</a> Certification:</h3>
                <img src="img/Benefits-of-ISO-27001.png" alt="Benefits-of-ISO-27001">
                <ul>
                  <li>
                    <p><b>Help you reduce information security and privacy risks: </b>
                      Information security threats are ever-increasing, so more and more organizations realize that bad infosec can be costly, regardless of their own/their customers' confidential information. be infringed. That's why so many organizations or companies are making ISO 27001-certified ISMS.
                    </p>
                  </li>
                  <li>
                    <p><b>Save Money and Time:</b>With ISO 27001 ISMS certification, you will have all your information security incident management plans and systems installed and ready to go. It is the most cost-effective way to secure or protect your information assets.</p>
                  </li>
                  <li>
                    <p><b>Boost a reputation & build a trust in the organization: </b>It's bad enough having your system hacked & your customer information exposed and exploited. It can do serious damage to your reputation & with it your bottom line. With an ISO 27001 ISMS Certification, you’ll have carried out a strong risk assessment and created a thorough, practical risk treatment plan. So you will be in a good position to classify breach risks & prevent them before they happen.</p>
                  </li>
                  <li>
                    <p><b>Achieve competitive Advantage: </b>you may have a benefit over them in the eyes of those customers who are sensitive about keeping their information safe, If your company or organizations gets certified & your competitors do not.</p>
                  </li>
                  <li>
                    <p><b>Comply with Legal Requirements: </b>There are an increasing number of laws, regulations and contractual requirements regarding information security and most of them can be resolved by applying ISO 27001 certification – this standard gives you the ideal methodology to comply with them all.</p>
                  </li>
                </ul>
              </div>

              <div class="overview_sr " id="7">
                <h3>
                  Essential documents Required for ISO 27001 ISMS Certification
                </h3>

                <p>
                  ISO 27001 defines a minimum set of policies, plans, procedures, records and other documented information that are required to become compliant. ISO 27001 ISMS certification requires the following documents to be written;
                </p>
                <br>
                <ul>
                  <li>
                    Scope of the ISMS
                  </li>
                  <li>
                    Information security policy and objectives;
                  </li>
                  <li>
                    Risk treatment Plan;
                  </li>
                  <li>
                    Risk assessment report
                  </li>
                  <li>
                    Risk assessment and risk treatment methodology;
                  </li>
                  <li>
                    Risk treatment plan;
                  </li>
                  <li>
                    Incident management procedure
                  </li>
                  <li>
                    Statutory, contractual Requirements & Regulatory;
                  </li>
                  <li>
                    Secure System Engineering principles;
                  </li>
                  <li>
                    Definition of security roles & responsibilities;
                  </li>
                  <li>
                    Inventory of Assets;
                  </li>
                  <li>
                    Supplier security Policy;
                  </li>
                  <li>Business Continuity Procedures</li>
                  <li>Statement of Applicability;</li>
                  <li>Secure System Engineering Principles (SSEP)</li>
                  <li>Operating Procedures for IT Management</li>
                  <ul>
                    <h3>Following are the Compulsory Records</h3>
                    <ul>
                      <li>Monitoring and measurement results;</li>
                      <li>Results of management reviews;</li>
                      <li>Records of training, skills, qualifications and experience;</li>
                      <li>Logs of user activities, expectations and security events;</li>
                      <li>Internal audit program;</li>
                      <li>Consequences of corrective actions;</li>
                      <li>Internal audit results.</li>


                    </ul>
              </div>



              <div class="overview_sr " id="8">
                <h3>
                  Get Your Certification<a href="https://legaltax.in/iso-certification.php" style="color:blue"> ISMS ISO 27001 With Legaltax</a>
                </h3>
                <ol style="list-style-type:none">
                  <li>
                    <p>
                      <b>Step 1 : Documentation: </b>
                      Legaltax evaluates your documentation and company records
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step 2 : On-site Audit: </b>
                      Then Legaltax reviews the conformity of your actual activities to ISO 27001 requirements and company records.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step 3 : Close The Gap: </b>
                      Your organization analyzes and implements measures to correct the root cause of any non - conformance identified by the Audit.
                    </p>
                  </li>
                  <li>
                    <p><b>Step 4 : Issuance of ISO 27001 ISMS Certification: </b>After all the above steps, you will get ISO 27001 ISMS Certification and certification mark</p>
                  <li>
                  <li>
                    <p><b>Step 5 : Surveillance Audits: </b>Annual Audit is mandatory to manage certification validity.</p>
                  <li>
                </ol>

                <h3>
                  The company Certification Process Is Further Diving Into 2 Different Stages:
                </h3>
                <ol style="list-style-type:none">
                  <li>
                    <b>Stage 1 (Documentation Review) : </b>
                    <p>
                      The auditors from your chosen certification body will check to confirm your documents meet the ISO 9001 2015 requirements.
                    </p>
                  </li>
                  <li>
                    <b>Stage 2 (Main Audit) : </b>
                    <p>
                      In this stage, the certification body auditors will check whether your activities are observed with both ISO 9001 & your documentation by checking documents, company practices & records.
                    </p>
                  </li>
                  <li>
                    <b>
                      Legaltax Support for ISO 9001 2015
                    </b>
                    <ul>
                      <li>Purchase a plan for Expert Assistance </li>
                      <li>Add queries Regarding ISO 9001 2015 </li>
                      <li>Provide required Documents to Legaltax Expert </li>
                      <li>Complete all Procedural Actions</li>
                      <li>Get your work done!</li>
                    </ul>
                  </li>
                </ol>
                <p>Click this to get a quick online ISO certification <a href="https://legaltax.in/iso-certification.php" style="color:blue">legaltax.in</a></p>
              </div>

              <div class="overview_sr " id="9">
                <h3>What We Provide? </h3>
                <ol>
                  <li><a href="" style="color:blue">ISO 9001:2015 Certification</a> for Government Tenders @ Rs: 3,999/-(For 3 Years) </li>
                  <li><a href="" style="color:blue">HACCP Certification</a> @ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue">WHO-GMP Certification</a> @ Rs: 4999/- (For 3 Years)</a></li>
                  <li>BIFMA Certification @ Rs: 4999/- (For 3 Years)</li>
                  <li>ROHS Certification @ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue">CE Marketing </a>@ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue">ISO 14001 Certification </a>@ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue"> ISO 45001 Certification </a>@ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue"> ISO 22000 Certification </a>@ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue">ISO 27001 Certification </a>@ Rs: 4999/- (For 3 Years)</li>
                  <li>ISO 50001 Certification @ Rs: 4999/- (For 3 Years)</li>
                  <li>- ISO 13485 Certification @ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue">ISO 20000 Certification </a>@ Rs: 4999/- (For 3 Years)</li>
                  <li>ISO 10002 Certification @ Rs: 4999/- (For 3 Years)</li>
                  <li> ISO 16603 Certification @ Rs: 4999/- (For 3 Years)</li>
                  <li>ISO 22609 Certification @ Rs: 4999/- (For 3 Years)</li>
                  <li><a href="" style="color:blue">HALAL Certification</a> @ RS: 4999/- (For 3 Years)</li>

                </ol>
              </div>

              <div class="overview_sr " id="10">
                <div class="howToApp ">
                  <h3>Frequently Asked Questions</h3>
                  <div class="row">
                    <div class=" col-md-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Q1.What is ISMS?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              It stands for Information Security Management System and is a document management system that includes a set of security controls that protect the availability, integrity and confidentiality of assets from threats and vulnerabilities.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. What is the difference between ISMS and ISO 27001?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Iso 27001 is a certification for Information Security Management System. ISMS is a framework that includes a set of procedures and policies, including the technical, legal and physical controls involved in an organization’s information risk management process

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3.What are the Domains of ISO Certification?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              Domains of ISo 27001 Certification:
                              <ul>
                                <li>Company security policy</li>
                                <li>Access control</li>
                                <li>Incident management</li>
                                <li>Asset Management</li>
                                <li>Physical and environmental protection</li>
                                <li>Regulatory compliance.</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. Is ISO 27001 worth it?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes, it is absolutely worth it.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. What are ISO 27001 Standards?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              It is a specification for an ISMS and an ISMS is a framework of policies and procedures that includes all physical, legal and technical controls involved in an organization’s information risk management processes.
                            </div>
                          </div>
                        </div>

                      </div>
                      <b>
                        <p>To know More about ISMS ISO 27001 click<a href="https://en.wikipedia.org/wiki/ISO/IEC_27001" style="color:blue"> Detailed ISMS 27001</a></p>
                      </b>
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
      (function () {
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