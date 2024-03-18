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
  foreach (cecertification() as $value) {
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
                        <span>CE</span>
                        <h1>Certification</h1>
                        <p>
                            Before a product may be sold in the European Union, it must first receive European
                            Conformity Certification. The CE Certificate indicates that a product has been tested by the
                            manufacturer and found to comply with EU safety, health, and environmental protection
                            standards. So, what exactly are you waiting for? Obtain CE certification for your product by
                            contacting legaltax.in
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
                CE Certification
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
                            <div class="sideMenu_serv">
              <ul>
                <li>
                  <a href="#1" class="act"> Overview </a>
                </li>
                <li>
                  <a href="#2">Nations That Requires The CE Marking</a>
                </li>

                <li>
                  <a href="#3">Documents Required</a>
                </li>

                <li>
                  <a href="#4">Procedural approach to secure CE certification in India</a>
                </li>
                <li>
                  <a href="#5">Important Functions performed by the Notified Body</a>
                </li>
                 <li>
                  <a href="#6">General Traits of CE marking </a>
                </li>
                 <li>
                  <a href="#7">Why Choose LegalTax</a>
                </li>
                
                <li>
                  <a href="#8">FAQs</a>
                </li>
              </ul>
            </div>
                               
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="laoded_cntent">
                            <div class="overview_sr " id="1">
                                 <h3>CE Certification</h3>
                             
                                    
                                    <p>The term “CE” means that the manufacturer or importer is compliant with European
                                        health,safety and environmental protection standards. Keep in mind that CE is
                                        not a quality certification mark. CE marking is mandatory for products sold in
                                        the European Economic Area, ie EEA, but also affixed to products sold elsewhere,
                                        produced in accordance with EEA standards. The CE mark means the goods can be
                                        sold without hassle in any part of the EEA, regardless of its country of origin
                                        This includes the CE logo and, If applicable, a four-digit code of the
                                        certifying body involved in the conformity assessment process. CE stands for
                                        “Conformity European”, which is a french word for “European conformity”.</p>
                               
                                    <p>In general, the CE marking serves as a passport for a product to be sold in the
                                        European market. This implies that the product concerned complies with the
                                        essential health and safety requirements of all directives applicable to the
                                        products.</p>
                                        
                                        
                               
                                    


                            </div>

                            <div class="overview_sr " id="2">
                                         
                                <h3>
                                    Nations That Requires the CE Marking
                                </h3>
                                 
                                        <p>The CE marking is a legal obligation for some products intended for sale in
                                            the European Union Free Trade Association, ie EFTA, and Turkey. Manufactured
                                            within these nations, and the importers of items made in other nations,
                                            affirm that CE-marked goods are produced per EU standards.</p>
                                    
                                        <p>Following Brexit, the United Kingdom government launched the UKCA marking as
                                            its equivalent conformity indicator and it is mandatory for goods sold in
                                            Great Britain - although goods with the CE marking can still be used as of
                                            january 1 2023. could . As Northern Ireland remains in line with the
                                            European Single Market under the Northern Ireland remains in line with the
                                            European Single Market under the Northern Ireland Protocol, the CE mark
                                            remains a legal requirement for products sold in that market. However, the
                                            UKCA notation can be used in tandem; It is not mandatory. Goods for sale in
                                            the UK may have both marks.</p>
                                   
                                        <p>As of 2019, CE marking was not mandatory for countries under the Central
                                            European Free Trade Agreement (CEFTA), but members of Serbia, Albania,
                                            Montenegro, North Macedonia have applied for EU membership and many of its
                                            members within its law. standards (as were most of the former Central
                                            European member states of CEFTA that joined the EU before joining.</p>
                                            
                                            
                               

                            </div>

                            <div class="overview_sr " id="3">
                                
                                 <h3>
                                    Types of Documents Which Are Required to Secure CE Marking

                                </h3>
                                <ol>
                                    <li><b>Technical File</b>

                                        <p>The technical file is a set of documents that demonstrate the conformity of
                                            the product with the CE-marking law. Documentation should reflect applicable
                                            product safety requirements and cover the design, manufacture and operation
                                            of the product. In addition, it must be available for inspection by the
                                            relevant market monitoring authorities immediately after the product is
                                            placed on a market located in the territory of the European Union.Sometimes,
                                            the documentation may also need to be submitted to the notified body for
                                            review.</p>
                                    </li>

                                    <li><b>Technical Documentation Generally Covers The Following Aspects:</b>
                                        <ul>
                                            <li>Technical description</li>
                                            <li>Circuit diagrams, drawings & photos</li>
                                            <li>Materials' bills</li>
                                            <li>Specifications and their applicability, EU declaration of conformity for
                                                critical components used</li>
                                            <li>Details pertaining to design calculations</li>
                                            <li>Test assessment or reports. </li>
                                            <li>EU declaration of conformity</li>
                                            <li>Instructions</li>
                                        </ul>
                                        <p>Technical documentation can be prepared in any format (electronic or paper) &
                                            Construction must be conducted for a period of up to ten years after the
                                            last unit and, in most scenarios, remain in the EEA.</p>
                                    </li>
                                </ol>
                                
                                
                               
                            </div>



                            <div class="overview_sr " id="4">
                                 <h3>
                                    Procedural Approach to Secure CE Certification in India

                                </h3>
                                <p>
                                    Depending on the severity of the product's risk, CE marking is applied by the
                                    manufacturer, who is required to ensure that their product conforms to the CE
                                    marking standards. In some scenarios, if a product has a low risk, it can be
                                    self-certified, showing a declaration of conformity and affixing the CE mark to
                                    their product.
                                </p>
                                <p><b>Self-certification is used only for those items that have a low risk of use, and
                                        this is of course predefined in the instruction according to the product
                                        "category". To obtain certification, the manufacturer must do the following:</b>
                                </p>
                                <ul>
                                    <li>Inspect if the item requires CE marking. The product must conform to all
                                        instructions that apply to the product. </li>
                                    <li>Choice of conformity assessment procedure from a module called for by the
                                        product’s instruction according to each category (severity of risk) involved.
                                        There are many modules related to conformity assessment processes, but only a
                                        few include self-certification. Most of these processes demand a “type approval”
                                        and a production conformity assessment by the notified body - the common module
                                        of the certificate as shown below. A product typically seeks more than one
                                        process to implement</li>
                                </ul>
                                <ol>
                                    <li>Module A - Internal production control.</li>
                                    <li>Module B - EC type-examination.</li>
                                    <li>Module C - Conformity to type.</li>
                                    <li>Module D - Production quality assurance.</li>
                                    <li>Module E - product quality assurance.</li>
                                    <li>Module F - Product verification.</li>
                                    <li>Module G - Unit verification.</li>
                                    <li>Module H - Full quality assurance.</li>
                                </ol>
                                
                                <img src="img/Procedural-approach-to-secure-CE-certification-in-India.png" alt="Procedural-approach-to-secure-CE-certification-in-India">
                                
                                <p>The Severity of the risk is specified by the category of each device. The higher the
                                    category, the higher the risk after specifying the category, the manufacturer shall,
                                    in order to secure certification, apply the procedure applicable to the
                                    manufacturer, after verifying that the applicable modules for the product category
                                    have been implemented, and the name of the notified agency involved in the
                                    certification processes and the certification processes and the certification number
                                    (model).</p>
                                <p>Notified bodies involved in the certification processes are the agencies assigned by
                                    a member state (in accordance with the accreditation process) and notified through
                                    the European Commision. These bodies function as an autonomous inspection agency and
                                    follow the procedure listed in the applicable modules as per relevant instructions.
                                    A producer may opt for any such body in any member state of the European Union. In
                                    fact, the self-certification process involves the given steps.</p>
                                <p><b>Stage 1: Identifying the applicable Directive (S)</b> </p>
                                <p>The first step is to determine whether the item requires CE marking. Not all products
                                    normally demand CE marking, and only items that fall within at least one of the
                                    sectoral directives are required to affix such marking.</p>
                                <p>Currently, more than twenty regional directives demand the CE marking cover, but are
                                    not limited to, items such as machines, electrical items, medical devices, pressure
                                    equipment, toys, PPE, construction products and wireless equipment.</p>
                                <p>Indicating which directives can be applied, as more than one may exist, is a direct
                                    exercise of reading the scope of such directives to determine which one applies to
                                    the product (such as "less than Voltage Directive," 2014/35/EU).</p>
                                <p>If the product does not comply with any regional directive, such product need not be
                                    affixed with CE marking.</p>

                                <p><b>Stage 2: Pinpoint the relevant requirements of the Directive (S)
                                    </b></p>
                                <p>Each directive contains different ways of disclosing conformity depending on the
                                    product's classification and its intended use. Each directive contains various
                                    'essential requirements' that the product must comply with before it can be sold in
                                    the market.</p>
                                <p>The most favorable way to express that such requirements have been complied with is
                                    by meeting the requirements of a relevant 'harmonious standard', which presents an
                                    estimate of conformity to these requirements, although the use of standards is
                                    usually voluntary. . The harmonized standards can be indicated by identifying the
                                    'official journal' on the official website of the European Union or by visiting the
                                    New Approach website launched by the EFTA and the European Commission with European
                                    standardization organizations.</p>
                                <p><b>Stage 3: Determine an apt route to conformity</b></p>
                                <p>In addition to the self-declaration process, there are several 'verification routes'
                                    to ensure conformity based on the product's instruction and classification. Many
                                    products such as fire alarms, invasive medical equipment, and pressure equipment,
                                    extinguishing systems, elevators, etc. have a mandatory requirement for the
                                    involvement of a third party, i.e. notified body.</p>
                                <p><b>Here are the different verification routes as shown below:</b>
                                <ul>
                                    <li>Product evaluation by manufacturer</li>
                                    <li>Evaluation of the product by the manufacturer along with the supplementary
                                        requirement for the mandatory audit of production control of the factory to be
                                        carried out by the notified body.</li>
                                    <li>Evaluation by the notified body, for example, EC type testing, with the
                                        requirement of production control audit of the factory to be done by the
                                        notified body.</li>
                                    <li></li>
                                </ul>
                                </p>

                                <p><b>Stage 4: Conduct conformity assessment</b></p>
                                <p>When all required items have been identified, it is necessary to assess the
                                    conformity of the product to the essential requirements of the directive. This
                                    typically includes evaluation and/or testing and may include a conformance
                                    assessment of the product to the harmonized standard(s) indicated in Step 2.</p>
                                <p><b>Stage 5: Prepare the technical file or documentation</b></p>
                                <p>The technical document or technical file is one of the basic prerequisites for the
                                    manufacturer to secure the CE marking. It needs to be prepared in line with EU
                                    directives and should include the details mentioned above.</p>
                                <p><b>Stage 6 : Make a declaration & affix the CE mark on the product </b></p>
                                <p>When the authorized representative is satisfied with the conformity assessment of the
                                    product, the EU Declaration of Conformity under the Machinery Directive must be
                                    completed. This also applies to partially completed machinery.</p>
                                <p><b>EU Declaration of Conformity Generally Manifests The Following Details:</b>
                                <ul>
                                    <li>Manufacturer name and address</li>
                                    <li>List of products with their description and serial number</li>
                                    <li>List of relevant regional directives that have been implemented</li>
                                    <li>A statement indicating that the product concerned complies with applicable
                                        requirements.</li>
                                    <li>Name, designation and signature of the person in charge
                                        authorized person's signature
                                    </li>
                                    <li>Details relating to the authorized representative with the EEA (where
                                        applicable)</li>
                                    <li>Additional Instructions</li>

                                </ul>
                                </p>
                                <p><b>The final step is to mark the product with the CE marking, after the EU
                                        Declaration of Conformity is completed.</b></p>
                                
                                
                                
                                
                              
                            </div>

                            <div class="overview_sr " id="5">
                                  
                                <h3>
                                    Important Functions Performed by the Notified Body
                                </h3>
                                <p>Conformity assessment provides service to manufacturers of products in areas of
                                    public interest. European nations are Obliged to Notify conformity assessment bodies
                                    located in their jurisdiction in accordance with the principles cited in Decision
                                    768/2008/EC Notified Bodies:</p>
                                <ul> <b>In general, Notified Bodies;</b>
                                    <li>are free to facilitate their conformity assessment services to any operator
                                        inside or outside the EU</li>
                                    <li>Others may perform these ventures in the territory of EU countries or non-EU
                                        countries.</li>
                                    <li>Must work in a transparent, non-discriminatory, autonomous and fair manner</li>
                                    <li>Must employ qualified person to conduct conformity assessment in accordance with
                                        the law in question</li>
                                    <li>Appropriate measures should be taken to ensure the confidentiality of the
                                        protected information during the conformity assessment</li>
                                    <li>Must have suitable insurance to cover their professional undertakings, unless
                                        the liability is assured in accordance with the national law of the notified EU
                                        nation</li>
                                    <li>Should facilitate the details to its notification authority, market monitoring
                                        agencies and other notified bodies</li>


                                </ul>
                                
                                
                                
                                
                              
                            </div>


                            <div class="overview_sr " id="6">
                                
                                  <h3>
                                    General Traits of CE marking
                                </h3>
                                 
                                <ul>
                                    <li>The CE marking must be clearly, clearly and permanently affixed to the product
                                        by the manufacturer or its authorized representative in the European Union in
                                        accordance with its legal format.</li>
                                    <li>When a manufacturer places the CE mark on a product, it indicates that it
                                        complies with the requirements required from all directives applicable to its
                                        product.</li>

                                </ul>
                                <ul>
                                    <p>For example, for a machine, machinery instructions come into play, but often
                                        also;</p>
                                    <li>low voltage Directive</li>
                                    <li>EMC instructions</li>
                                    <li>ATEX instructions</li>
                                    <li>other legal requirements</li>
                                    <li>When the machine manufacturer affixes the CE marking, it assures that it has
                                        completed all necessary assessments on the products in conformity with all the
                                        requirements of the applicable directives.</li>
                                    <li>CE Marking as amended by Council Directive 93/68/EEC of 22/07/1993 Directive
                                        88/378/EEC (Safety of Toys), 87/404/EEC (Ordinary Pressure Vessels), 89/106/EEC
                                        (Construction Products) , 88/378/EEC (Toy Safety), 90/385/EEC (Active
                                        Implantable Medical Devices, 91/263/EEC (Telecommunication Terminal Equipment,
                                        93/42/EEC (Medical Devices), 89/392/EEC ( machinery), 92/42/EEC (new hot fuels
                                        powered by liquid or gaseous fuels </li>
                                    <li>CE marking has the initial "CE", both letters must follow the same vertical
                                        dimension, not less than 5 mm.</li>
                                    <li>If the appearance of the product does not allow the CE mark to be affixed to the
                                        product itself, the same marking must be applied to the packaging or related
                                        documents.</li>
                                    <p>If a directive seeks the participation of a third party, i.e. notified body, in
                                        the conformity assessment process, its identification code should be affixed on
                                        the reverse of the CE logo.</p>
                                </ul>
                                
                                
                                
                                
                             
                                
                            </div>
                            
                            
                            <div class="overview_sr " id="7">
                                   <h3>
                                    LegalTax Experts can Help The Client To;
                                </h3>

                            </div>

                            <div class="overview_sr " id="8">
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
                                                                Q1. What does CE certification mean?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            The CE marking indicates that the manufacturer assumes
                                                            responsibility for product compliance with all relevant
                                                            European health, safety, performance and environmental
                                                            requirements.

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
                                                                Q2. What is CE compliance Certification?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            CE marking enables a person to legally sell their product in
                                                            the European market and declare that your product complies
                                                            with the relevant European Directives and Regulations

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
                                                                Q3. What is CE and FDA certified?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                        aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            FDA approval means that the device is approved for use in
                                                            all parts of the world, while there are restrictions on the
                                                            CE mark, sometimes even within the European Union. ... It is
                                                            also possible that the FDA's strictures are considered safe
                                                            for consumers.


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
                                                                Q4. Is CE Mark accepted In India?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefour" class="collapse"
                                                        aria-labelledby="headingfour" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            CE marking compliance refers to the legal requirements in
                                                            the countries of the European Economic Area. CE marked
                                                            products are allowed to be sold in India, but they need to
                                                            comply with local standards such as BIS or ISI.


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
                                                                Q5. Do medical devices need CE marking?

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsefive" class="collapse"
                                                        aria-labelledby="headingfive" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Medical devices sold in the EU market must have CE marking.
                                                            The inclusion of such marking confirms that the medical
                                                            device complies with applicable EU Directives and enables
                                                            commercialization of the product in 32 European countries.

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
                                                                Q6. Does machinery have to be CE marked?


                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix"
                                                        data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Machines that must be sold in the European or UK market must
                                                            have CE marking under the Machinery Directive before they
                                                            can be functional. The Directive applies to equipment and
                                                            machines that are news and includes machines that have been
                                                            modified.

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
                                                                Q7. What is the declaration of Conformity?
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseseven" class="collapse"
                                                        aria-labelledby="headingseven" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            The Declaration of Conformity serves as a formal declaration
                                                            made by the representative of the manufacturer to ensure
                                                            that the product meets all the implied requirements of the
                                                            safety directives enshrined by law.

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
                                                                Q8. What is Minimal Risk?




                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseeight" class="collapse"
                                                        aria-labelledby="headingeight" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Under CE certification, products that comply with minimum
                                                            risk are required to self-certify where the manufacturer
                                                            prepares a declaration of Conformity and affixes the CE mark
                                                            to its Product(S)


                                                        </div>
                                                    </div>
                                                </div>


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
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous">
        </script>
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="js/custom.js" crossorigin="anonymous"></script>
</body>

</html>