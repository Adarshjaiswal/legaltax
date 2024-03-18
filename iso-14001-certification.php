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
  foreach (iso14001certification() as $value) {
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
                        <span>ISO 14001 </span>
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
                How to Start ISO 14001 Certification
            </h1>
            <div class="tp_img_inf">
                <img src="img/ISO-14001-Certification-top.png" alt="ISO-14001-Certification-top">
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
                                    <a href="#2">In Short, Iso 14001 Certification Provides for,
                                    </a>
                                </li>

                                <li>
                                    <a href="#3">In This Article
                                    </a>
                                </li>

                                <li>
                                    <a href="#4">Outlining the Applicability of Iso 14001 Certification
                                    </a>
                                </li>
                                <li>
                                    <a href="#5">Public Standards of Iso 27000</a>
                                </li>
                                <li>
                                    <a href="#6">What Do You Understand About the Environmental
                                        Management System?</a>
                                </li>

                                <li>
                                    <a href="#7"> Outlining the Key Benefits of Iso 14001 Certification
                                    </a>
                                </li>
                                <li>
                                    <a href="#8">Documents Required for Iso 14001:2015 Registration
                                    </a>
                                </li>
                                <li>
                                    <a href="#9">Conclusion </a>
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
                                    What Is An ISMS ISO 14001
                                </h3>
                                <p>
                                    Large organizations often require a standard to tune their environmental
                                    performance in order to have a better reputation and growth. This is where
                                    ISO 14001:2015 comes into the picture. ISO 14001:2015 is one of the
                                    popular ISO standards used in 171 countries. This globally recognized
                                    standard sets a clear framework for organizations seeking to systematically
                                    approach their environmental responsibilities.
                                </p>

                                <br>
                                <p>
                                    ISO 14001:2015 allows organizations to adjust their environmental
                                    management systems for desired results, which adds value to the
                                    organization, the environment, and stakeholders involved. The benefits of
                                    ISO 14001 certification can be as significant as adherence to zero-defect
                                    policies or Six Sigma management. This article will highlight important facts
                                    about ISO 14001 certification and its benefits.

                                </p>
                            </div>

                            <div class="overview_sr " id="2">
                                <h3>
                                    In Short, Iso 14001 Certification Provides for,
                                </h3>
                                <ul>
                                    <li>Continuous tracking of potential environmental risks
                                    </li>
                                    <li>Implementation of appropriate course of action
                                    </li>
                                    <li>fulfillment of compliance obligations</li>
                                    <li>environmental performance amplification
                                    </li>
                                </ul>
                            </div>

                            <div class="overview_sr " id="3">
                                <h3>
                                    In This Article
                                </h3>
                                <p>
                                    Outlining the Applicability of ISO 14001
                                </p>
                                <ol>
                                    <li>Outlining the Applicability of ISO 14001</li>
                                    <li> What aspects of EMS does the ISO 14001 family cover?</li>
                                    <li>What do you understand about the Environmental Management
                                        System?</li>
                                    <li>Outlining the Key Benefits of ISO 14001 Certification</li>
                                    <li>Conclusion</li>
                                    <li>Frequently Asked Questions</li>

                                </ol>

                            </div>



                            <div class="overview_sr " id="4">
                                <h3>
                                    Outlining the Applicability of Iso 14001 Certification

                                </h3>
                                <p>
                                    ISO 14001:2015 has wide applicability. This means that any entity,
                                    irrespective of its nature, type and scope of operation, can apply for the
                                    same. The standard emphasizes the environmental aspects of its
                                    operation, products and services that require appropriate control and
                                    management.</p>
                                <p>ISO 14001:2015 is yet to outline specific environmental performance
                                    criteria. There is no compulsion to follow or implement the framework of
                                    ISO 14001:2015 on a large scale. Companies can follow parts of the
                                    standard to meet environmental goals. However, this does not translate to
                                    full fulfillment of compliance, which is essential to ensure conformity. The
                                    organization must satisfy all the requirements and incorporate the relevant
                                    changes in its EMS before claiming to conform to the standard.</p>
                            </div>

                            <div class="overview_sr " id="5">
                                <h3>
                                    What Aspects of Ems Does the Iso 14001 Family
                                    Cover?</h3>
                                <p>The standards of the ISO 14000 family are outlined by technical
                                    committees and various sub-committees of ISO. ISO 14001 sets out the
                                    requirements around <b>EMS</b>, ie <b> Environmental Management System.</b>
                                    Other standards emphasize important aspects such as audit, labeling,
                                    correspondence, life cycle analysis and environmental damages such as
                                    climate change.</p>
                            </div>


                            <div class="overview_sr " id="6">
                                <h3>
                                    What Do You Understand About the Environmental
                                    Management System?
                                </h3>
                                An environmental management system (EMS[1]) is a comprehensive
                                        approach to improving environmental performance. It is very similar to a
                                        quality or safety management system. In short, EMS gives companies;
                                <ul>
                                    
                                    
                                    <li>Identify potential bottlenecks and positives of the system
                                    </li>
                                    <li>Track and monitor important environmental impacts</li>
                                    <li>Save capital by increasing effectiveness</li>
                                    <li>Ensure compliance with environmental laws</li>
                                    <li>Set the roadmap for environmental improvement.
                                    </li>
                                    <p>An EMS can also help companies oversee resources and improve
                                        the credibility of environmental policy.
                                    </p>
                                </ul>
                            </div>

                            <div class="overview_sr " id="7">
                                <h3>
                                    Outlining the Key Benefits of Iso 14001 Certification

                                </h3>

                                <p>
                                    Following are the potential benefits of ISO 14001 certification:</p>

                                <li>Cost savings and increased productivity</li>
                                <p>ISO 14001 provides a clear framework that allows companies to
                                    identify potential bottlenecks within their environmental systems. In
                                    addition, it can extend the approach to how you use raw materials
                                    and manage waste to ensure cost savings. This is one of the major
                                    benefits of ISO 14001 certification.
                                </p>

                                <li>Amplified sales
                                </li>
                                <p>ISO 14001 certification enhances the value of an organization in a
                                    given market. It builds trust among potential customers. It ensures to
                                    the customers that the organization is following an eco-friendly
                                    framework while conducting its business operations.
                                </p>

                                <li>Strong supply chain
                                </li>
                                <p>With ISO 14001 certification, you can have strong interactions with
                                    suppliers and vendors for better efficacy and productivity. A strong
                                    supply chain is one of the frontline benefits of ISO 14001 certification.

                                </p>


                                <li>More investment opportunities</li>
                                <p>With environmental issues increasingly becoming a primary concern
                                    for consumers and organizations, investors are prioritizing a
                                    company's environmental performance when making important
                                    decisions. Attracting potential investors is one of the major benefits of
                                    ISO 14001 certification.
                                </p>
                                <p>ISO 14001 provides for the inclusion of key environmental
                                    performance indicators in business reviews. This will help investors to
                                    ensure that your company is consistently tracking and managing
                                    environmental performance.</p>


                                <li>Service and Product Innovations</li>
                                <p>Adhering to ISO 14001 standards allows you to explore untapped
                                    areas in your business with unmatched growth potential.
                                </p>
                              
                                </ul>
                            </div>



                            <div class="overview_sr " id="8">
                                <h3>
                                    Documents Required for Iso 14001:2015 Registration

                                </h3>
                                <p>Documents Required for processing ISO 14001 will differ from one organization to
                                    another.
                                    However, for your understanding we have listed below the common required documents:
                                </p>
                                <img src="img/Documents-Required-for-ISO-14001-2015-Registration.png" alt="Documents-Required-for-ISO-14001-2015-Registration.png">
                                <ul>
                                    <li>Registration Certificate
                                    </li>
                                    <li>Office Address Proof</li>
                                    <li>Scope of the work
                                    </li>
                                    <li>GST Certificate</li>
                                    <li>Cancelled Cheque</li>
                                    <li>Pollution Certificate (if any)</li>
                                    <li>Bills raised/Invoice paid</li>
                                    <li>Basic KYC of Director/Partner/Prop.</li>
                                    <ul>
                            </div>

                            <div class="overview_sr " id="9">
                                <h3>Conclusion</h3>
                                <p>There is no obligation to comply with the ISO 14001 standard, but the
                                    organization can adopt its framework to enhance its environmental performance.
                                    ISO-registered entities are more likely to garner a better customer base than
                                    non-registered ones. Also, it helps in creating a strong interaction between the
                                    suppliers and other stakeholders. Write to us if you need to know more about the
                                    benefits of ISO 14001 certification. We will be glad to assist you!
                                </p>
                                 
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
                                                            <button class="btn btn-link btn-block text-left"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapseOne" aria-expanded="true"
                                                                aria-controls="collapseOne">
                                                                Q1. What is ISO 14001 Certification ?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            ISO 14001 sets the criteria for environmental management
                                                            systems and
                                                            what can be certified. It sets a framework that a company or
                                                            organization
                                                            can follow to establish an effective environmental
                                                            management system.
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
                                                                Q2. What are the six 6 elements of ISO 14001?
                                                                ?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Here are the six main elements of EMS according to the ISO
                                                            14001
                                                            standard: Environmental Policy.
                                                            <ul>
                                                                <li>Environmental policy. Clearly outline environmental
                                                                    policy. ,</li>
                                                                <li> Plan. ,
                                                                </li>
                                                                <li>Execution. ,
                                                                </li>
                                                                <li>Study and correct. ,</li>
                                                                <li>Management Review. ,
                                                                </li>
                                                                <li>Continuous Improvement
                                                                </li>
                                                            </ul>

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
                                                                Q3. How do I get ISO 14001 Certification
                                                                ?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Stages of ISO 14001 Certification

                                                            <ol>
                                                                <li>Learn about the ISO 14001 standard.
                                                                </li>
                                                                <li>Access control</li>
                                                                <li>Perform an ISO 14001 preliminary environmental
                                                                    review and gap
                                                                    analysis.</li>
                                                                <li>Plan your ISO 14000 project.
                                                                </li>
                                                                <li>Train your organization on ISO 14001.</li>
                                                                <li>Document your ISO 14001 Environmental Management
                                                                    System</li>
                                                                <li>Implement your EMS and conduct business.</li>
                                                                <li>Audit your EMS.</li>

                                                            </ol>
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
                                                                Q4. Is ISO 14001 Certification Required?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefour" class="collapse"
                                                        aria-labelledby="headingfour" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Yes. Because ISO 14001:2015 is essentially a system designed
                                                            to help
                                                            communities and other types of organizations meet their
                                                            environmental
                                                            obligations and reduce the impact of their operations on the
                                                            environment, it
                                                            is relevant to all types of organizations.

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
                                                                Q5. Who needs ISO 14001 certification?
                                                                ?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefive" class="collapse"
                                                        aria-labelledby="headingfive" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Achievement of environmental objectives. ISO 14001:2015
                                                            applies to any
                                                            organization, regardless of size, type and nature, and
                                                            applies to the
                                                            environmental aspects of its activities, products and
                                                            services that the
                                                            organization determines from a life cycle perspective or So
                                                            can control or
                                                            influence.
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
                                                                Q6. How long does it take to get ISO 14001 certified ?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <p> 6 months to 2 years
                                                            </p>
                                                            <p> The average time taken to design, implement and certify
                                                                for
                                                                ISO 14001 can
                                                                take anywhere from 6 months to 2 years, depending on the
                                                                size and
                                                                complexity of the organization. It is therefore
                                                                essential to
                                                                have a reliable
                                                                hand guiding and recording every step of the process.

                                                            </p>
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
                                                                Q7. Which is the first step in the ISO 14001
                                                                Certification?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseseven" class="collapse"
                                                        aria-labelledby="headingseven" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <ol>
                                                                <li>Finalization of Consultant/Training Agency for ISO
                                                                    14001 2015
                                                                    Certification.</li>
                                                                <li>Take training on ISO 14001 2015 standard
                                                                    requirements.</li>
                                                                <li>Identify the deficiencies in the existing system
                                                                    against the requirements
                                                                    of ISO 14001 2015 and take necessary action to
                                                                    comply with the identified
                                                                    deficiencies.</li>
                                                            </ol>
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