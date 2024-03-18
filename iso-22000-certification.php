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
  foreach (iso22000certification() as $value) {
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
                        <span>ISO 22000 </span>
                        <h1>FSMS Certification</h1>

                        <p>
                            Customer is the king, and let your business be the preferred choice of their highness. How
                            to make that a reality and make your business grow exponentially? The answer is simple, by
                            gaining trust. The best way to portray the worthiness of the business and the efficiency of
                            the product or services and showcase you possess quality on par with the market.
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
                How to Start ISO 22000 Certification
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
                                    <a href="#2">ISO 22000 FSMS Certification
                                    </a>
                                </li>

                                <li>
                                    <a href="#3">Components of ISO 22000 FSMS
                                    </a>
                                </li>

                                <li>
                                    <a href="#4">ISO 22000 FSMS Benefits
                                    </a>
                                </li>
                                <li>
                                    <a href="#5">Documents Required for ISO 22000 FSMS Certification</a>
                                </li>
                                <li>
                                    <a href="#6">Required Procedure for ISO 22000 FSMS Certification</a>
                                </li>

                                <li>
                                    <a href="#7">Legal Tax Assistance for ISO 22000 FSMS</a>
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
                                    What Is An ISMS ISO 22000
                                </h3>
                                <p>
                                    Food safety is a global concern so regardless of its size or product, all food
                                    producers
                                    are responsible for managing the safety of their products and the better health of
                                    their
                                    consumers.ISO 22000 provides requirements for food safety management systems.
                                    ISO 22000 is a standard introduced by the International Organization for
                                    Standardization relating to food safety. Food safety is linked to the presence of
                                    food
                                    security occurring at any stage of the food chain, so it is important to have
                                    adequate
                                    control, and this requires a concerted effort on the part of all parties throughout
                                    the food
                                    chain.

                                </p>


                                <p>
                                    ISO 22000 FSMS defines the needs for Food Safety Management System that involves
                                    the following elements: </p>
                                <ul>
                                    <li>Interactive communication</li>
                                    <li>System management</li>
                                    <li>Prerequisites programs</li>
                                    <li>Threat analysis and Critical Control Point principles
                                    </li>
                                </ul>

                                <p>ISO 22000 is aligned with ISO 9001 to enhance the compatibility of both of them. ISO
                                    22000 is implemented independently of other management system standards or
                                    integrated with existing management system requirements. It consolidates the
                                    principles
                                    of Hazard Analysis and Critical Control Point (HACCP) systems, and through auditable
                                    requirements, it combines Hazard Analysis and Critical Control Point (HACCP)
                                    planning
                                    with basic programs. Hazard analysis is an essential key to an effective food safety
                                    management system as conducting a risk analysis helps to organize the knowledge
                                    needed to establish an effective control measure. ISO 22000 requires that hazards
                                    potentially occurring in the food chain, especially those associated with the types
                                    of
                                    processes and facilities used, are identified and assessed. And hence, it provides a
                                    list
                                    of threats that need to be controlled by a particular organization and also those
                                    threats
                                    which do not need to be controlled. It also provided a reason for such
                                    discrimination .
                                    During the hazard analysis, the organization defines a strategy to control such
                                    threats
                                    by combining prerequisite programs and Hazard analysis and critical control point
                                    (HACCP) planning.
                                    Food Security 22000 is a Global Food Security Initiative (GFSI) approved scheme. And
                                    it is also used in the Food Safety System Certification (FSSC) Scheme Fs22000. Food
                                    Safety System Certification provides a certification scheme for the audit and
                                    certification
                                    of Food Safety Management Systems (FSMS). Certification is also awarded for
                                    combined FSMS and QMS, i.e. FSSC 22000-Quality. The scheme uses international
                                    and independent standards for sector-specific pre-requisite programs (PRPs).
                                </p>
                            </div>

                            <div class="overview_sr " id="2">
                                <h3>
                                    ISO 22000 FSMS Certification

                                </h3>
                                <p>ISO 22000 FSMS certification is a process to verify that all specific principles of
                                    food
                                    safety apply throughout the food chain to ensure food safety and the suitability of
                                    such
                                    food for human consumption. Such certification is obtained for the following
                                    reasons:
                                </p>
                                <ul>
                                    <li>Helps to build trust between the consumers and producers.
                                    </li>
                                    <li>It ensures the integrity of the food supply chain.
                                    </li>
                                    <li>Helps the consumer identify trusted food products</li>
                                    <li>It is considered an important marketing tool.</li>
                                    <li>Helps in getting comparatively a better price</li>
                                </ul>

                                <h3>Helps in getting comparatively a better price</h3>
                                <p>The ISO 22000 Series consist of the following specifications:</p>
                                <ul>
                                    <li><br> ISO 22000 - </br> Food safety Management (FSMS)- Requirements for any
                                        organization in a food chain. </li>
                                    <li><br>ISO 22001 - </br>All guidelines on the application of ISO 9001:2000 for the
                                        industries/organizations related to food and drink.
                                    </li>
                                    <li><br> ISO/TS 22002 - </br>Prerequisite programmes on Food Safety.
                                    </li>
                                    <li><br> ISO TS 22003 - </br>- Food Safety Management system for bodies providing
                                        audit
                                        and certification of food safety management systems. </li>
                                    <li><br>ISO TS 22004 - </br> Food Safety Management System 9FSMS)- Guidance on the
                                        Application of ISO 22000:2005. </li>
                                    <li><br> ISO 22005 - </br> Traceability in the feed and food chain - general
                                        principles and
                                        basic system design and implementation requirements. </li>
                                    <li><br> ISO 22006 - </br> Quality Management System (QMS) - Guidance on the
                                        application
                                        of ISO 9002:2000 to crop production.</li>
                                </ul>
                            </div>


                            <div class="overview_sr " id="3">
                                <h3>
                                    Components of ISO 22000 FSMS

                                </h3>
                                <p>
                                    The Components of ISO 22000 FSMS are written below :

                                </p>
                                <ul>

                                    <li>Scope</li>
                                    <p>Procedures and appropriate control measures are in place to meet the legal
                                        requirements for food safety.
                                    </P>
                                    <li>Normative Reference</li>
                                    <p>Document on terms and phrases mentioned under ISO standard.</P>
                                    <li>Terms</li>
                                    <p>Provides many definitions from iso 9001 for ensuring consistency and continuity
                                    </P>
                                    <li>Management System For Food Safety</li>
                                    <p>Implementation, documentation and maintenance of management systems for food
                                        safety including processes for effective development.
                                    </P>
                                    <li>Responsibility of the Management</li>
                                    <p>Commitment to the implementation and maintenance of management systems for food
                                        safety, indicating regular management evaluations for responsible individuals,
                                        food
                                        Safety groups, effective internal and external communication processes, conduct,
                                        goals,
                                        contingency plans, responsibilities and troubleshooting and information.
                                    </P>
                                    <li>Management of Resources</li>
                                    <p>Resources, budget and personnel management, periodic training, employee
                                        appraisal,
                                        safe work environment and infrastructure.</P>
                                    <li> Validation, Verification And Improvement of the Management System</li>
                                    <p>Scientific principles used in management systems, routine planning,
                                        implementation
                                        and documentation of tests performed on system components for system evaluation.
                                    </P>
                                    <li>Planning And Realization of Safe Products
                                    </li>
                                    <p>Good Manufacturing Practices (GMP) and Hazard Analysis and Critical Control Point
                                        (HACCP) systems, training, legal requirements, hygiene, maintenance,
                                        traceability,
                                        supplier evaluation, control of defective products and preventive recall
                                        procedures for
                                        production program (PRP) Safe and Healthy Eating.</P>
                                    <li>Pre - requisites for ISO 22000 FSMS</li>
                                    <p>A comprehensive set of pre - requisites for ISO 22000 Food Management System are
                                        :
                                        <li>Hygiene and Housekeeping Management</li>
                                        <li>Management of pest control</li>
                                        <li> Maintenance</li>
                                        <li>Control of contractors and visitors</li>
                                        <li>Maintenance</li>
                                        <li>Despatch and distribution
                                        </li>
                                        <li>Management of cleaning</li>
                                        <li>Hygiene Policy</li>
                                        <li>Glass Policy</li>
                                        <li>Ingredients Foreign Body Control Policy
                                        </li>
                                        <li>Glass and Brittle Material Breakage Procedure</li>
                                        <li>Nut handling procedure</li>
                                        <li>Control of knives</li>
                                        <li>Control of Brittle Materials</li>
                                        <li>Storage</li>
                                        <li>HACCP Pre - requisites</li>
                                        <li>Allergen Control Procedure</li>
                                        <li>Control of First Aid Dressings</li>
                                        <li>Food Defense System</li>

                                    </P>
                                </ul>
                            </div>



                            <div class="overview_sr " id="4">
                                <h3>
                                    ISO 22000 FSMS Benefits

                                </h3>
                                <img src="img/ISO-22000-FSMS-Benefits.png" alt="ISO-22000-FSMS-Benefits">

                                <h3>Benefits of Implementation of ISO 22000 and obtaining
                                    ISO 22000 FSMS Certification are as follows:
                                </h3>

                                <ul>
                                    <li>Understand the core principle of ISo 22000 FSMS.
                                    </li>
                                    <li>Assurance of quality, safety and reliability.</li>
                                    <li>Ensuring that the organization is compliant with ISO 22000 FSMS requirements.
                                    </li>
                                    <li>Enabling organization to achieve food security objectives better management.

                                    </li>
                                    <li>Define controls (safety measures) and other mitigation methods to meet
                                        identified requirements and handle risks;Deduct the cost from the withdrawal or
                                        recall.</li>
                                    <li>Support and guide organizations in their performance in food security.
                                    </li>
                                    <li>Help understand best practices for food safety.
                                    </li>
                                    <li>Helps in understanding the adequate control required in the food chain
                                    </li>
                                    <li>Less food borne diseases</li>
                                    <li>belief in disclosure</li>
                                    <li>Better quality and safer jobs in the food industry</li>
                                    <li>Increased use of resources</li>
                                    <li>Efficient Food Safety Hazard Control</li>
                                    <li> Help organization prevent and reduce the risk of contaminants in their food
                                        products and work environments</li>
                                    <li>More systematic management of pre - requisite programs</li>
                                    <li>Relevant basis for decision making</li>
                                    <li>Saves resources by reducing duplication
                                    </li>
                                    <li>Control focuses on priorities</li>
                                    <li>Help the organization set up a traceability system</li>
                                    <li>Support the organization in creating and protecting value
                                    </li>
                                    <li>Better planning, thus less post-process verification
                                    </li>
                                    <li>Development of Food Safety Management System (FSMS)</li>
                                    <li>Gives organization advantage</li>

                                </ul>

                            </div>

                            <div class="overview_sr " id="5">
                                <h3>
                                    Documents Required for ISO 22000 FSMS Certification

                                </h3>
                                
                                <p>Documents required for obtaining ISO 22000 FSMS
                                    Certificates are as follows:
                                </p>
                                <ul>
                                    <li>
                                        Business Registration Proof
                                    </li>

                                    <li>
                                        Letterhead including address

                                    </li>
                                    <li>
                                        Sale and Purchase invoice or GST Registration Certificate

                                    </li>
                                    <li>
                                        Description of business
                                    </li>

                                    <li>
                                        Desired Scope

                                    </li>

                                    <li>
                                        Name and address of the organization
                                    </li>

                                    <li>
                                        Process and operations, including legal obligations of the organization

                                    </li>

                                    <li>
                                        Information related to the organization's activities

                                    </li>

                                    <li>
                                        Human and technical resources

                                    </li>
                                    <li>
                                        Functions of the organization
                                    </li>
                                    <li>Relationship in a larger corporation, if any</li>
                                    <li>Information of all outsourced processes used by the organization that affects
                                        the
                                        conformity to requirements
                                    </li>
                                    <li>Information regarding the use of consultancy related to the management system.
                                    </li>
                                    <li>Standards or other requirements</li>


                                </ul>
                            </div>


                            <div class="overview_sr " id="6">
                                <h3>
                                    Required Procedure for ISO 22000 FSMS Certification

                                </h3>
                                  <p> Here are some important benefits of Required procedure for Certification
                                        according to the FSSC 22000 standard for
                                        food safety is as follows: 
                                        </p>
                                        <ul>
                                            <li>
                                                <b>Stage 1 Audit</b>
                                                <p>In the organization, an audit is carried out to assess whether the
                                                    food safety
                                                    management system conforms to all the requirements of ISO 22000
                                                    standards.
                                                    Audits are also performed to verify that the food safety management
                                                    system is
                                                    designed to achieve the food safety policy and objectives and to
                                                    reach the
                                                    capabilities of the food safety management system in managing
                                                    compliance with
                                                    statutory, regulatory and contractual requirements. Its purpose is
                                                    to check the
                                                    headlines of the organization’s management system. This includes
                                                    verification of
                                                    the scope of management systems and certification, management system
                                                    design, document review, applicable legal and other requirements,
                                                    internal audit
                                                    and management review processes.

                                                </p>
                                                <p>Before the stage 2 audit, the organization must make all necessary
                                                    clarifications.
                                                    The interval between phase 1 and phase 2 audits cannot exceed six
                                                    months.
                                                </p>
                                            </li>
                                            <li>
                                                <b>Stage 2 Audit</b>
                                                <p>It is also called certification audit. This is done to verify the
                                                    organization’s
                                                    implementation of the Food Safety Management System and its
                                                    effectiveness in
                                                    all requirements of the ISO 22000 FSMS. This is also done to verify
                                                    that the
                                                    information and proof of conformity have been obtained in accordance
                                                    with all
                                                    requirements of the Food Safety Management System Standards. During
                                                    this
                                                    audit, the ability of the food safety management system to perform
                                                    key
                                                    responsibilities and comply with statutory, regulatory and legal
                                                    requirements is
                                                    assessed. This audit is conducted to confirm that the organization’s
                                                    food safety
                                                    management system is effective and achieving food safety goals,
                                                    policies and
                                                    objectives.
                                                </p>
                                            </li>
                                            <li>
                                                <b>Certification</b>
                                                <p>After the completion of both audits, the audit report is forwarded to
                                                    the reviewer
                                                    for further review, and if he allows for certification based on the
                                                    audit findings and
                                                    the recommendation of the audit team, the report is sent to the
                                                    Chief Executive
                                                    Officer or Director. Which is the singing authority to ultimately
                                                    grant the
                                                    certification</p>
                                            </li>

                                        </ul>
                            </div>

                            <div class="overview_sr " id="7">
                                <h3>
                                    Legal Tax Assistance for ISO 22000 Fsms

                                </h3>
                                <ul>
                                    <li>Visit to our official website LegalTax.in
                                    </li>
                                    <li>Fill out our ISO Certification.
                                    </li>
                                    <li>We collect all the required information
                                    </li>
                                    <li>We ask you to submit the necessary documents
                                    </li>
                                    <li>We guide you through the process until you get the ISO certificate</li>
                                </ul>

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
                                                                Q1.What is the full form of ISO?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO Stands for international organization for Standards.

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingTwo">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Q2. Is ISO an independent organization?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Yes, ISO is an independent non-government organization.

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingThree">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Q3. What is ISO 22000 FSMS?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO 22000 FSMS is an international standard that provides
                                                            specific requirements
                                                            for food safety management systems. It provides a framework
                                                            for approaches
                                                            and mechanisms for managing the safety of food products and
                                                            services to their
                                                            producers.

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingfour">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                                Q4. What is the purpose of implementing ISO 22000 FSMS?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO 22000 FSMS is beneficial in many ways, such as ensuring
                                                            food security,
                                                            reducing food borne diseases, better utilization of
                                                            resources, increasing profits,
                                                            efficient validation and documentation of techniques, etc.

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="headingfive">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                Q5. What are the components of the ISO 22000 FSMS
                                                                standard?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            The extracts from the components of the ISO 22000 FSMS
                                                            standard are as
                                                            follows:
                                                            <ul>
                                                                <li>To plan, operate, implement, maintain and update a
                                                                    food safety
                                                                    management system that provides safe products and
                                                                    services</li>
                                                                <li>To demonstrate compliance with statutory and
                                                                    regulatory food safety
                                                                    requirements</li>
                                                                <li>To evaluate and assess food safety requirements</li>
                                                                <li>To effectively communicate to interested parties on
                                                                    issues of food security
                                                                </li>
                                                                <li>To ensure that the organization is compliant with
                                                                    food security policy
                                                                </li>
                                                                <li>To demonstrate conformity to relevant interested
                                                                    parties
                                                                </li>
                                                                <li>To get certification or registration or registration
                                                                    of your FSMS.</li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-header" id="headingsix">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                                Q6. What are the primary documents required for ISO -
                                                                22000 FSMS
                                                                Certification?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Primary documents required for ISO 22000 FSMS Certification
                                                            are as follows;

                                                            <ul>
                                                                <li>Business Registration proof</li>
                                                                <li>Letter head or visiting card (including address)
                                                                </li>
                                                                <li>Sale and purchase Invoice / receipt or GST
                                                                    Registration Certificate</li>
                                                                <li>Scope of Business
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-header" id="headingseven">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                                Q7. What are Hazard Analysis Critical Control Points
                                                                (HACCP)?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Hazard Analysis Critical Control Points (HACCP) is a
                                                            globally Accepted method
                                                            for the identification and management of food safety risks
                                                            or hazards. It is a
                                                            management system where food safety of an organization is
                                                            addressed through
                                                            the analysis and control of any biological, chemical and
                                                            physical risks or hazards,
                                                            from the production, procurement and handling of raw
                                                            materials to the
                                                            manufacture. Distribution and consumption of final food
                                                            products. Is done.

                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-header" id="headingeight">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                                Q8. What are the Three Types of ISO?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                                                        <div class="card-body">

                                                            <ul>
                                                                <li>ISO 9001:2015, a standard for general organizational
                                                                    quality management
                                                                    systems (QMS), including vendor management. ...
                                                                </li>
                                                                <li>ISO 27001:2013, a standard for Information Security
                                                                    Management
                                                                    Systems (ISMS)
                                                                </li>
                                                                <li>ISO 14001:2015, a standard for Environmental
                                                                    Management Systems.</li>

                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="card">
                                                    <div class="card-header" id="headingnine">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                                                Q9. Is ISO 22000 better than HACCP?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            HACCP is a food safety management system that businesses can use whilst ISO
                                                            22000 is a food safety management standard businesses need to meet.

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