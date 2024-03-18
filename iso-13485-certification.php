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
  foreach (iso13485certification() as $value) {
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
            <span
                style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
            <div class="container">
                <div class="row">
                    <div class="col my-auto mr-2 serv_bnr">
                        <span>ISO 13485</span>
                        <h1>Certification</h1><p>
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
                How to Start ISO 13485 Certification
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
                                    <a href="#2">Advantages and Benefits of Getting ISO 13485
                                        Certification
                                    </a>
                                </li>

                                <li>
                                    <a href="#3">Pre - Requisites for ISO 13485 Certification

                                    </a>
                                </li>

                                <li>
                                    <a href="#4">Documents Required for ISO 13485 Certification

                                    </a>
                                </li>
                                <li>
                                    <a href="#5">Process to Achieve ISO 13485 Certification
                                    </a>
                                </li>
                                <li>
                                    <a href="#6">Legaltax Assistance in Achieving Certification of ISO 13485</a>
                                </li>

                                <li>
                                    <a href="#7">FAQs </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="laoded_cntent">
                            <div class="overview_sr " id="1">
                                <h3>
                                    What Is An ISMS ISO 13485
                                </h3>
                                <p>
                                    Safety and quality are not negotiated in the case of medical devices, and so is a
                                    requirement of ISO 13485, which specifies the need for a quality management
                                    system, where an organization must maintain its capabilities to meet medical
                                    devices and related services. needs to be shown. applicable regulatory
                                    requirements. These organizations are involved in one or more life-cycle phases
                                    such as design, storage and distribution, production, development, installation or
                                    servicing of medical equipment and design and development or provision of any
                                    associated activities/services. This ISO 13485 is also used by suppliers or
                                    external parties to provide a product with services related to the quality
                                    management system to organizations.
                                </p>


                                <p>
                                    <b>ISO 13485</b> aligns with the earlier version of ISO 9001, the internationally
                                    recognized standard for quality management systems established by ISO. The
                                    requirements set by ISO are recognized worldwide for implementing a quality
                                    management system. Although the ISO 13485 standard emerged after a major
                                    update to ISO 9001, it does not align with a new revision of ISO 9001, as it was
                                    determined that the most recent changes to ISO 9001 were unnecessary for
                                    medical devices.
                                </p>

                                <p>ISO 13485 is the medical device organization that accepts most international
                                    standards for quality management. Third-party certification of ISO 13485 is
                                    necessary to prove that the organization is complying with the requirements of
                                    the standard as it issues the International Organization for Standardization (ISO),
                                    which meets the broad requirements for quality management systems in
                                    medicine. is an effective solution. Equipment organization.
                                </p>

                                <p>ISO 13485 is divided into eight sections; The first three are introductory, and the
                                    last five are mandatory requirements for a quality management system (QMS),
                                    which are quality management system, management responsibility, resource
                                    management, product receipt and measurement, analysis and improvement.
                                </p>

                                <ul>
                                    <p>Important amendments to the ISO 13485 standard are as follows:</p>
                                    <li>ISO 13485:2016 has replaced ISO 13485:2003 and 13485:2012</li>
                                    <li>Revised ISO 13485:2016 Published 1 March 2016</li>
                                    <li>ISO 13485:2016 compliant with ISO 9001:2008 and not with <u>ISO
                                            9001:2015</u></li>
                                    <li>Changes are managed by ISO Technical Committee 210, ensuring that the
                                        Quality Management System (QMS) standard is maintained.
                                    </li>

                                </ul>
                            </div>

                            <div class="overview_sr " id="2">
                                <h3>
                                    Advantages and Benefits of Getting ISO 13485
                                    Certification

                                </h3>
                                <ul>
                                    <p>Following are benefits of getting ISO certification are as follows:
                                    </p>
                                    <li>Contains an internationally recognized EN ISO 13485 certified Quality
                                        Management System (QMS)

                                    </li>
                                    <li>more product opportunities
                                    </li>
                                    <li>broad market access approval</li>
                                    <li>Medical device manufacturers or other subcontractors have the chance to
                                        take advantage of their certified Quality Management System (QMS) status
                                        for a smooth and seamless transition into specialty certification.

                                    </li>
                                    <li>Meaningful Feedback on the Effectiveness of the Quality Management
                                        System (QMS)
                                    </li>
                                    <li>confidence in compliance with the rules
                                    </li>
                                    <li>Identification of areas needing attention</li>
                                    <li>Identification of areas of non-compliance and risk</li>
                                    <li>future growth and expansion</li>
                                    <li>Valuable and recognized reporting and certification</li>
                                    <li>more opportunities</li>
                                    <li>clear understanding of equipment</li>
                                </ul>
                                
                            </div>

                            <div class="overview_sr " id="3">
                                <h3>
                                    Pre - Requisites for ISO 13485 Certification

                                </h3>
                                <p>
                                    The list of pre - requisites required to get ISO 13485 Certification is as follows
                                </p>

                                <p><br> Common requirements </br>include the need to comply with the standard, the
                                    need to document documents, maintain the written procedures required by the
                                    organization and ensure the effectiveness of a system that the organization
                                    implements, considering risk factors in all activities, Initiate steps to reduce
                                    identified risk and target not to cause catastrophic events, identify how things
                                    should be done and stick to procedures to generate medical equipment, Tracking
                                    activities, collecting any process failures or oversights and producing records to
                                    show all activities, determining requirements that the organization is legally
                                    bound to and ensuring accountability is maintained even in the case of
                                    outsourcing work And also ensuring that the manufacturing processes are in
                                    place and working effectively.
                                </p>
                                <p><br> Documentation requirements </br>include quality manuals, commitments with
                                    policy or purpose statements, specific requirements for both medical device
                                    manufacturing processes and records, including its file, product specifications
                                    and guidelines on intended use, planning plans and control records. </p>
                                <p><br> Management responsibility </br>is where the organization's management shows
                                    and is committed that they can be held accountable or accountable for
                                    operations within the organization and must ensure that their focus does not
                                    constrain the needs of consumers. It also ensures that the management is
                                    following the proper laws in the manufacturing process. Management has full
                                    responsibility for supporting the quality policy, proper alignment with the laws of
                                    the country of work and for the objectives of the employees. </p>
                                <p><br> Resource Management </br>includes the management’s responsibility to assure
                                    that the Quality Management System (QMS) is compliant with ISO 13485 and
                                    other regulatory requirements. The management must assure adequate
                                    resources are available to perform the Organisation’s promised work. Provide
                                    personnel, infrastructure, consumables, equipment, succession planning, etc. </p>
                                <p><br> Product Realization </br> means a plan for a journey from conceptualisation to
                                    implementation. It includes developing a process for documenting how products
                                    are initiated and verified, and products are designed, verified, developed,
                                    designed, and validated to ISO 13485 requirements.</p>
                                <p>Measure, analyze and improve, i.e. the product of the organization is created and
                                    released for general use. This includes handling complaints, reporting incidents
                                    to regulatory authorities, conducting internal assessment through auditing,
                                    internally continuous process and product evaluation, identifying and controlling
                                    products that do not meet original design requirements, and analyzing generated
                                    data. and continuous improvement in the process. </p>
                            </div>



                            <div class="overview_sr " id="4">
                                <h3>
                                    Documents Required for ISO 13485 Certification


                                </h3>
                                <ul>
                                    <p>
                                        Essential Documents needed for compliance with ISO 13485 are related to
                                        the following:</p>
                                    <li>Roles that the organization performs under applicable regulatory
                                        requirements</li>
                                    <li>quality manual</li>
                                    <li>medical equipment file</li>
                                    <li>Records for verification of application of computer software
                                    </li>
                                    <li>process for document control</li>
                                    <li> process for record control
                                    </li>
                                    <li>quality policy</li>
                                    <li>quality objectives</li>
                                    <li> Responsibilities and Officers</li>
                                    <li>Procedure and records for management review</li>
                                    <li>training process</li>
                                    <li>Requirements for infrastructure and maintenance activities</li>
                                    <li>Arrangements for the control of contaminated or potentially contaminated
                                        product</li>
                                    <li>product procurement plan results</li>
                                    <li> work environment requirements</li>
                                    <li>Records the results of a review of customer requirements and actions
                                        arising therefrom</li>
                                    <li>communication with customers</li>
                                    <li> process for design and development
                                    </li>
                                    <li> Risk management process in product receipt</li>
                                    <li>design and development plan</li>
                                    <li>Design and Development Output</li>
                                    <li>Design and development review records</li>
                                    <li>Design Verification Plan, Results and Conclusions</li>
                                    <li>Design Verification Plan, Results and Conclusions</li>
                                    <li>Process for transfer of design and development output to manufacturing</li>
                                    <li>Process and records for control of design and development changes</li>
                                    <li>design and development file</li>
                                    <li> procurement process</li>
                                    <li>Criteria and records for evaluation and selection of suppliers</li>
                                    <li> Record of verification of purchased product</li>
                                    <li>Record for medical device or batch that provides traceability</li>
                                    <li> Product cleaning requirements</li>
                                    <li>Requirements for medical device installation and verification of installation
                                    </li>
                                    <li> Procedures and records for servicing medical equipment</li>
                                    <li>record of sterilization procedure</li>
                                    <li>Process and production records as well as service provision process
                                        verification</li>
                                    <li>Procedure and Records for the Verification of a Process for Sterilization
                                        and Sterilization Barrier Systems</li>
                                    <li>Process for product identification</li>
                                    <li>Process for Traceability</li>
                                    <li>Record of traceability with the name and address of the shipping package
                                        consignee</li>
                                    <li>Report on changes in customer assets</li>
                                    <li> Procedure for maintaining product conformity</li>
                                    <li>Monitoring and Measuring Process
                                    </li>
                                    <li> record of calibration</li>
                                    <li>Procedure and records for verification of application of computer software
                                        used to monitor and measure</li>
                                    <li> Process for customer feedback</li>
                                    <li>Procedure and records for handling complaints</li>
                                    <li> Records for reporting to regulatory authorities
                                    </li>
                                    <li>internal audit process</li>
                                    <li>Audit records and their result</li>
                                    <li> Identification of the person authorizing the release of the product</li>
                                    <li> Control procedures and records of non-conforming product </li>
                                    <li> resume work record
                                    </li>
                                    <li>Process and records for data analysis</li>
                                    <li> Procedure and record for corrective action</li>
                                    <li>Procedure and records for a preventive</li>

                                </ul>
                            </div>

                            <div class="overview_sr " id="5">
                                <h3>
                                    Process to Achieve ISO 13485 Certification
                                </h3>
                                
                                <ul>
                                    <p>There are four essentials steps to be followed to get ISO 13485
                                        certification:
                                    </p>
                                    <li><b>Optional preliminary audit</b>
                                        <p>Voluntary site inspections are conducted, and quality management
                                            documents are reviewed, assessing the organization's readiness for full
                                            scale I and II auditing phases.
                                        </p>
                                    </li>

                                    <li><b>Audit: Stage I</b>

                                        <p>Eligibility for certification is determined by the results of on-site
                                            auditing,
                                            business assessment and quality management document analysis.</p>
                                    </li>

                                    <li><b>Audit: Stage II</b>
                                        <p>On-site assessment of Quality Management System (QMS) for excellence
                                            in the areas of applied practice and competencies.
                                        </p>
                                    </li>

                                    <li><b>Certification </b>
                                        <p>Official confirmation certifies the integrity of your quality management
                                            system and compliance with standards.</p>
                                    </li>



                                </ul>
                            </div>


                            <div class="overview_sr " id="6">
                                <h3>
                                    Legaltax Assistance in Achieving Certification of ISO 13485
                                </h3>

                                <ul>


                                    <li>Buy a plan for Expert Assistance
                                    </li>
                                    <li>Add Queries Regarding ISO 13485</li>
                                    <li>Provide required Documents to Legaltax Expert</li>
                                    <li> Complete all Admissibility Criteria for Preliminary Screening</li>
                                    <li>Finish all Procedural Actions
                                    </li>
                                    <p>Get your work done!
                                    </p>
                                </ul>
                            </div>

                            <div class="overview_sr " id="7">
                                <div class="howToApp ">
                                    <h3>Frequently Asked Questions</h3>
                                    <div class="row">
                                        <div class=" col-md-12">
                                            <!-- accordion -->
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" id="headingOne">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Q1. What is ISO 13485:2016?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO 13485:2016 is the third edition of ISO 13485 standards
                                                            titled Medical Device:
                                                            Quality Management Systems: Requirements for regulatory
                                                            purposes.

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Q2. What is ISO ?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO is a short form for International Organization for
                                                            Standardisation, a worldwide
                                                            federation of national standards bodies.

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Q3. What is the purpose of ISO 13485?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            THe ISO 13485 is adapted to provide a practical foundation
                                                            for manufacturer to address
                                                            the EU Medical Device Directive, EU Medical Device
                                                            Regulation and other regulations,
                                                            as well as to commit to the security and quality of medical
                                                            devices


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingfour">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapsefour" aria-expanded="false"
                                                                aria-controls="collapsefour">
                                                                Q4. What does the ISO 13485 require?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefour" class="collapse"
                                                        aria-labelledby="headingfour" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO 13485 requires the organization to identify the role
                                                            under the regulatory
                                                            requirements and regulatory requirements applicable to
                                                            activities under the roles and
                                                            incorporate these regulatory requirements within the quality
                                                            management system.


                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingfive">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapsefive" aria-expanded="false"
                                                                aria-controls="collapsefive">
                                                                Q5. What is the latest version of ISO 13485?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefive" class="collapse"
                                                        aria-labelledby="headingfive" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            The latest version of ISO 13485 is ISO 13485:2016, which was
                                                            adopted in march 2016.

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header" id="headingsix">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapsesix" aria-expanded="false"
                                                                aria-controls="collapsesix">
                                                                Q6. Who is eligible to be Certified under ISO 13485?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Designers, manufacturers and distributors of medical devices
                                                            are eligible to be certified
                                                            under ISO 13485

                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-header" id="headingseven">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseseven" aria-expanded="false"
                                                                aria-controls="collapseseven">
                                                                Q7. Does ISO provide the certification under ISO 13485?



                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseseven" class="collapse"
                                                        aria-labelledby="headingseven" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            The ISO 13485 certification is not done under ISO; rather,
                                                            by a third party, an
                                                            organization can achieve such certification.

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header" id="headingeight">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseeight" aria-expanded="false"
                                                                aria-controls="collapseeight">
                                                                Q8. ISO 13485 vs 9001 ?




                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseeight" class="collapse"
                                                        aria-labelledby="headingeight" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO 9001 is the international standard which provides
                                                            specifications for a quality
                                                            management system which can be applied at any organization
                                                            regardless of industry,
                                                            product or service, or company size. ISO 13485 is a
                                                            comprehensive management
                                                            system specifically for the manufacture of medical devices.


                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header" id="headingnine">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapsenine" aria-expanded="false"
                                                                aria-controls="collapsenine">
                                                                Q7. iso 13485 certification requirements




                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsenine" class="collapse"
                                                        aria-labelledby="headingnine" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Abstract. ISO 13485:2016 specifies requirements for a
                                                            quality management system
                                                            where an organization needs to demonstrate its ability to
                                                            provide medical devices and
                                                            related services that consistently meet customer and
                                                            applicable regulatory
                                                            requirements.


                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header" id="headingten">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseten" aria-expanded="false"
                                                                aria-controls="collapseten">
                                                                Q7. iso 13485 certification cost?




                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseten" class="collapse" aria-labelledby="headingten"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO 13485 Certification cost is approx @ Rs: 4999/- (For 3
                                                            Years)

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <b>
                                                <p>To know More about ISMS ISO 27001 click<a
                                                        href="https://en.wikipedia.org/wiki/ISO/IEC_27001"
                                                        style="color:blue"> Detailed ISMS 27001</a></p>
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