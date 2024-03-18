<!doctype html>
 <?php
 require_once('include/connection.php');
require_once('include/model.php');
require_once('include/include-design.php');
require_once('include/constant.php');
 ?>

<!doctype html>
<html lang="en">
<head>
    
     <?php
  include_once('head.php');
  ?>
    <?php
  foreach (Metimportexportcode() as $value) {
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
 <!-- Google / Search Engine Tags -->
<meta itemprop="name" content="IEC Registration Online - Online IEC Registration India">
<meta itemprop="description" content="Legaltax.in - start your online IEC process with just an online form and get complete service of expert assistance through our team of professionals">
<meta itemprop="image" content="https://legaltax.in/img/doc_IEC.png">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://legaltax.in/import-export-code-iec.php">
<meta property="og:type" content="website">
<meta property="og:title" content="IEC Registration Online - Online IEC Registration India">
<meta property="og:description" content="Legaltax.in - start your online IEC process with just an online form and get complete service of expert assistance through our team of professionals">
<meta property="og:image" content="https://legaltax.in/img/doc_IEC.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="IEC Registration Online - Online IEC Registration India">
<meta name="twitter:description" content="Legaltax.in - start your online IEC process with just an online form and get complete service of expert assistance through our team of professionals">
<meta name="twitter:image" content="https://legaltax.in/img/doc_IEC.png">
</head>





<body>
  <main role="main">
      
      
<?php
   include_once('header.php');
   ?>

    <div class="col main_srv_bnr2">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            <span>IEC </span>
            <h1>Get your IEC register </h1>
            <ul>
              <li>
                Expert Assistance
              </li>
              <li>
                Complete Online Process
              </li>
              <li>
                End-to-end Compliance Solutions
              </li>
              <li>
                Track Application Status
              </li>
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
    <!-- how it work -->
    <section>
      <div class="col">
        <div class="container">
          <div class="clearfix">&nbsp;</div>
          <div class="clearfix">&nbsp;</div>
          <h3 id="section4" class="text-center" class="heading1">
            We will help you get your IEC in just 3 days
          </h3>

          <div class="clearfix">&nbsp;</div>
          <div class="clearfix">&nbsp;</div>
          <div class="col">
            <div class="row">
              <div class="col-4 ">
                <div class="arr">

                </div>
              </div>
              <div class="col-4 ">
                <div class="arr">
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </div>
              </div>
              <div class="col-4">
                <div class="arr">
                  <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #79BD9A;">
                  <img src="img/basic_info.png" alt="basic_info">
                  <p>
                    We collect all the basic details

                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #F0BC5E;">
                  <img src="img/submit.png" alt="submit">
                  <p>
                    We ask you to submit the supporting documents
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ser_wrks" style="border-top: 5px solid #FE6663;">
                  <img src="img/guide.png" alt="guide">
                  <p>
                    We also follow up with the DGFT until your code is issued.

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>

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
                  <a href="#2"> Documents Required </a>
                </li>
                <li>
                  <a href="#4">Process </a>
                </li>
                <li>
                  <a href="#5">Why IEC Code LICENSE is mandatory for Export Service Provider? </a>
                </li>
                <li>
                  <a href="#6">Import Export Code Exemption</a>
                </li>
                <li>
                  <a href="#7">Certificate Of Origin (Co)</a>
                </li>
                <li>
                  <a href="#8">Benefits </a>
                </li>
                <li>
                  <a href="#9">Why to Choose Legal Tax for Import Export Registration?</a>
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
                  An Overview
                </h3>
                <p>
                 <a href="hhttps://www.dgft.gov.in/CP/" style="color: blue;"> Import export code </a> is a 10 digit unique code assigned to an individual/company and is required for every import/export operation. For expanding the business in abroad the first and the foremost step is to export and import products and services. The government has prioritize trade facilitation in order to reduce transaction cost and time. Trading not only helps the business personnel individually but also provide benefits to the country. Import Export Code is issued by DGFT. The purpose of Import Export License Certificate is to regulate and monitor the foreign trade activities in India. IEC is also known as the passport of import and export business. No import or export shall be made by any person without obtaining an IEC.

                </p>
                <p>
                  <b>Import Export Code</b>
                </p>
                <ul>
                  <li>
                    <p>
                      Import Export Code is a 10- digit code that an individual or a business needs for the goods and services to get import or export. This code is allotted by the Director General of Foreign Trade (DGFT), Ministry of Commerce and Industries, Government of India.
                    </p>
                  </li>
                  <li>
                    <p>
                      The valid period for this code is lifetime. It basically means that there is no need for the IEC code holder to apply for its renewal. Hence, the company having IEC is able to perform all requirements concerning import-export and related issues.
                    </p>
                  </li>
                  <li>
                    <p>
                      A period of 12-15 working days is required for the generation of IEC code. Once all the required documents are submitted and all the particular corrections are made. Further, having an IEC is mandatory for very commercial importer and exporter in India. Hence, the business not having IEC is not qualified to undertake the category of import and export.
                    </p>
                  </li>
                  <li>
                    <p>
                      Unlike other government licenses, the Import Export Code does not need to be renewed on a regular basis. However, one needs to update the status of IEC license on DGFT portal on a yearly basis.
                    </p>
                  </li>
                </ul>
              </div>

              <div class="overview_sr " id="2">
                <h3>
                  Documents Required for Obtaining IEC License
                </h3>
                <p>
                  First we must have the information regarding the documents needed to get the Import Export license online in India before proceeding to the process of registration. The nature of the firm obtaining an IEC are as follows- “Proprietorship, Partnership, LLP, Pvt & Public Limited Company, Trust, HUF and Society.”
                </p>
                <p>
                  <b>
                    The documents that would be required are as follows:
                  </b>
                </p>
                <img src="img/doc_IEC.png" alt="doc_IEC">
              </div>
              <div class="overview_sr " id="3">
                <h3>
                  
                </h3>

              </div>

              <div class="overview_sr " id="4">
                <h3>
                  IEC Registration Process
                </h3>
                <ul>
                  <li>
                    <p>
                      The very first step for obtaining an Import Export License online is the registration process. One can register online through the government portal of DGFT.
                    </p>
                  </li>
                  <li>
                    <p>
                      The second step is to upload the required documents and information to our web portal.
                    </p>
                  </li>

                  <li>
                    <p>
                      The third step is the preparation of the application in prescribed format for Import Export Code.
                    </p>
                  </li>

                  <li>
                    <p>
                      The fourth step is the attachment of the applicant’s digital signature and file online application before DGFT.
                    </p>
                  </li>

                  <li>
                    <p>
                      The fifth step is the verification step where the DGFT officials will verify and process the application within a week.
                    </p>
                  </li>

                  <li>
                    <p>
                      After successful verification provides Import Export Code certificate over the email. This is the last and the final step.
                      <b>
                        (IN LEGALTAX THE FEE CHARGED FOR IMPORT EXPORT REGISTRATION IS Rs. 1999/- ONLY.)
                      </b>

                    </p>
                  </li>
                </ul>
                <p>
                  <b>
                    IEC Validity And Renewal
                  </b>
                </p>
                <p>
                  Unlike other government licenses, the Import Export Code earlier was not needed to renew on a regular basis. However, after the amendments in Import Export Code related provisions under Chapter 1 and 2 of Foreign Trade Policy on 12th February, 2021 Import Export Code now has to be renewed each and every year. This amendment made the update of IEC code details mandatory for all IEC or e-IEC holders on DGFT portal each year. Even if there are no updates in IEC, the same has to be confirmed online.
                </p>
              </div>

              <div class="overview_sr " id="5">
                <h3>
                  Why IEC Code License Is Mandatory For Export Service Provider?
                </h3>
                <p>
                  Import Export Code license is a key business identification number which is mandatory for Export and Import in India. No business is licensed to make any Import or Export without an IEC Code Number granted by DGFT. <br><br>
                  In case of if you’re doing import or export of services or technology transfer, the IEC Code shall be required only when the service provider or technology provider is seeking benefits under the Foreign Trade Policy or is dealing with specified services or technologies under Section 7 of Foreign Trade (Development & Regulation) Amendment Act, 2010.
                </p>
                <ul>
                  <li>
                    <p>
                      The Director General of Foreign Trade (DGFT), Ministry of Commerce and Industries, issue IEC registration. It is mandatory for the Indian companies to have IEC registration if companies want to expand their business via export and import. Without having IEC license no business can involve import export activity. If any business wants to entertain the benefits provided by the government then getting IEC registration is compulsory. Reserve Bank of India has made it compulsory for all the traders to provide their Import Export during any payment transfer.
                    </p>
                  </li>
                </ul>
                <p>
                  Various provisions of the Foreign Trade Policy and measures taken by the government in the direction of trade facilitation have been consolidated for the purposes of Import and Export trade. The most important aspect of company’s success is growth. Expansion of business globally could be the very first step towards this. Import Export Code Renewal every year is mandatory now for the IEC License holders.
                </p>
                <p>
                  In the present era of ever growing competition in business in order to survive in the market there are various substitutes available in the domestic market, which are stepping out of their local presence. With back to back innovation and the generation of the new ideas in business, the emergence of e-commerce, business operating in local limit finds it important to operate globally by stepping abroad.
                </p>
                <p>
                  There are several methods to go beyond the domestic level, such as amalgamation for foreign brands, opening franchisee abroad, starting subsidiary or branch office abroad, or through import-export business. Doing business at the global level is not that easy as it sounds. Import Export Code (IEC) once gave can be utilized by the entity all through its existence and it doesn’t necessarily need any kind of renewal. When the organization has gotten IEC, at that point the organization can involve in import export necessities with no issues.
                </p>

                <p>
                  With the rapid upsurge in globalization, nowadays, the opportunity of having a cross border business is also increased. Moreover, an IEC Registration also assists an individual in unlocking the growth opportunities of the international business. Further, every individual who wants to expand his business on a global platform by dealing with the Import and Export business is mandatorily required to obtain IEC Registration.Hence, having an IEC (Import and Export Code) is one of the basic the global level. Moreover, an IEC has various advantages annexed to it. One such benefit of an IEC Code is that it not only assists in unlocking the international market but also helps in increasing the business's growth level.
                </p>

              </div>

              <div class="overview_sr " id="6">
                <h3>
                  Import Export Code Exemption
                </h3>
                <p>
                  There are some stakeholders that are exempted from Import Export Code these are as follows:
                </p>

                <ul>
                  <li>
                    <p>
                      Central and State Government ministries or departments.
                    </p>
                  </li>
                  <li>
                    <p>
                      Import or export of certain items for personal use that are unrelated to trade, manufacturing or agriculture.
                    </p>
                  </li>
                  <li>
                    <p>
                      Individuals importing or exporting product from or to Nepal, Myanmar via Indo-Myanmar border areas or China providing the CIF value of a single consignment does not exceed Rs. 25000. The relevant exemption ceiling for Nathula port is Rs. 1 lakh.
                    </p>
                  </li>
                </ul>
                </p>
                <p>
                  <b>
                    Requirement Of<a href="https://legaltax.in/digital-signature-online-dsc.php" style="color: blue;"> Digital Signature </a> For Import Export Code
                  </b>
                </p>

                <ul>
                  <li>
                    <p>
                      Importers and Exporters can apply for Import Export code online. So the need of Digital Signature of business owner/director for import export code arises.
                    </p>
                  </li>
                  <li>
                    <p>
                      To apply for the online IEC code application Digital Signature (DSC) are the most preferred way.
                    </p>
                  </li>
                  <li>
                    <p>
                      The DGFT has a one of a kind Digital signature Certificate that if issued to organization who already have an IEC Code for export and import. Using this one of a kind DSC, applicants can save up to 50% on license fee.
                    </p>
                  </li>
                </ul>







              </div>


              <div class="overview_sr " id="7">
                <h3>
                  Certificate Of Origin (CO)
                </h3>

                <ul>
                  <li>
                    <p>
                      A Certificate of Origin (CO) is an important international business document. The Certificate of Origin verifies that the products in an export cargo were entirely obtained, produced, manufactured, or processed in a certain country.
                    </p>
                  </li>

                  <li>
                    <p>
                      In other words, the Certification of Origin declares the product's "nationality" and also acts as a statement by the exporter to meet customs or trade regulations.
                    </p>
                  </li>

                  <li>
                    <p>
                      Customs, banks, private parties, and importers all require CoOs for a numerous of reasons. Also, Almost every country in the globe requires CO for customs clearance operations, thus IEC Code License holders also need to apply for Certificate of Origin if he/she planning to export outside India.
                    </p>
                  </li>

                  <li>
                    <p>
                      A Certificate of Origin is issued by both the  Indian Chamber of Commerce as well as <a href="https://www.tpci.in/" style="color: Green;"> Trade Promotion Council of India. </a>  Moreover, Import Export Code License Holders can two types of Certificate of Origin.
                    </p>
                  </li>

                </ul>
                <p>
                  Non-preferential Certificate of Origin specifies that the products being exported/imported do not get preferential tariff treatment and that the applicable charges must be imposed on the items being transported.
                </p>
                <p>
                  Preferential Certificates of Origin are issued to products that are subject to preferential tariff treatment in the payments of tariffs. Preferential COs help in verifying commodities that are subject to lower taxes or allowances when exported to countries that provide these benefits. These COs are frequently linked to Regional Trade Agreements.
                </p>
              </div>
              <div class="overview_sr " id="8">
                <div class="howToApp ">
                  <h3>Benefits Of Import Export Registration </h3>
                  <div class="row">
                    <div class=" col-md-12">
                      <div class="time_line_info">
                        <p>
                          The IEC code registration is the first thing that the business need to export or import any item from India to some other nation. IEC registration paves the way for many new opportunities for business personnel.
                        </p>
                        <ul>
                          <li>
                            <p>
                              <b>BUSINESS EXPANSION: </b> with the help of IEC registration business can be expanded globally. IEC provides the opportunity to business to export its goods and products outside the nation’s territory and create a name for oneself in the International market.
                            </p>
                          </li>

                          <li>
                            <p>
                              IEC registration also helps in availing several other benefits given by <b> Export Promotion </b> Council, DGFT and Customs.
                            </p>
                          </li>

                          <li>
                            <p>
                              There is <b>no need of return filing In IEC.</b> Once IEC is allocated there isn’t any necessity to follow any kind of procedure for supporting its legitimacy. In any event, of export transaction, DGFT doesn’t order for filing any return.
                            </p>
                          </li>
                          <li>
                            <p>
                              <b>Hassle free processing:</b> getting IEC from DGFT is simple and can be gotten within a time of 10-15 days in the wake of presenting the application. No evidence of export or import is required subsequent to getting IEC registration.
                            </p>
                          </li>
                          <li>
                            <p>
                              <b> The validity of IEC is for lifetime.</b> You can enjoy its validity for lifetime. It also does not need any kind of renewal.
                            </p>
                          </li>
                          <li>
                            <p>
                              <b> Import Export code is government identity</b> which is issued by DGFT. At the time of clearance of shipment once can show this identity number.
                            </p>
                          </li>
                        </ul>
                      </div>
                      <img src="img/benefites_IEC.png" alt="benefites_IEC">



                    </div>
                  </div>
                </div>
              </div>
              <div class="overview_sr " id="9">
                <h3>
                  Why To Choose Legal Tax For Import Export Registration?
                </h3>
                <ul>
                  <li>
                    <p>
                      Legal tax is a great service providing organization and all its experts work very efficiently.
                    </p>
                  </li>

                  <li>
                    <p>
                      Legal tax does the import export registration process in a very sophisticated manner without any hassle and complications.
                    </p>
                  </li>

                  <li>
                    <p>
                      They provide very good services to their clients. The review from the clients are very satisfactory.
                    </p>
                  </li>

                  <li>
                    <p>
                      Legal tax provide the IEC registration certificate in very low fee just for Rs. 1999/- only which is very low price from other organization providing the IEC certificate.
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
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Q1. Who are exempted from obtaining IEC registration?
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              Following is the exception for IEC registration:

                              <ul>
                                <li>
                                  <p>
                                    IEC is not an obligation for the traders registered under Goods & Service Tax (GST)
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    If there is export or import of any product merely for personal consumption and not for commercial purpose, there will be no need to obtain IEC Registration
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    There is no requirement to obtain IEC Registration in case the import or export is done on behalf of the Government of India by any department, ministry, or notified charitable institute.
                                  </p>
                                </li>


                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. Is there any tax on IEC code?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              Import Export code is not a tax registration, however depending upon the product, certain custom duty can be imposed.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. Without getting a License import export can be made?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              No, any individual, company or sole proprietor engaged in the business of import-export needs to obtain an IEC license. It is the necessary recognition provided by the Government to exporters and importer of goods or services. However, if the value of the good transacted is too low, the authority may permit first export after imposing nominal charges.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. What are the documents required for IEC registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              The documents that would be required are as follows:
                              <ul>
                                <li>
                                  <p>
                                    PAN of the business entity
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Address Proof of the applicant’s entity (electricity bill)
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Registration/Certification Number
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Bank account details of the entity with Cancelled Cheque
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Identity proof (Aadhaar Card, Voter Id Card, Passport)
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Passport size photograph
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. What are the steps to be followed for IEC registration process?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">

                              <ul>
                                <li>
                                  <p>
                                    The very first step for obtaining an Import Export License online is the registration process. One can register online through the government portal of DGFT.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    The second step is to upload the required documents and information to our web portal.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    The third step is the preparation of the application in prescribed format for Import Export Code.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    The fourth step is the attachment of the applicant’s digital signature and file online application before DGFT.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    The fifth step is the verification step where the DGFT officials will verify and process the application within a week.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    After successful verification provides Import Export Code certificate over the email. This is the last and the final step.
                                  </p>
                                </li>

                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. What are the benefits of IEC registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                The IEC code registration is the first thing that the business need to export or import any item from India to some other nation. IEC registration paves the way for many new opportunities for business personnel.
                              </p>
                              <ul>
                                <li>
                                  <p>
                                    BUSINESS EXPANSION: with the help of IEC registration business can be expanded globally. IEC provides the opportunity to business to export its goods and products outside the nation’s territory and create a name for oneself in the International market.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    IEC registration also helps in availing several other benefits given by Export Promotion Council, DGFT and Customs.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    There is no need of return filing In IEC. Once IEC is allocated there isn’t any necessity to follow any kind of procedure for supporting its legitimacy. In any event, of export transaction, DGFT doesn’t order for filing any return.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Hassle free processing: getting IEC from DGFT is simple and can be gotten within a time of 10-15 days in the wake of presenting the application. No evidence of export or import is required subsequent to getting IEC registration.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    The validity of IEC is for lifetime. You can enjoy its validity for lifetime. It also does not need any kind of renewal.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Import Export code is government identity which is issued by DGFT. At the time of clearance of shipment once can show this identity number.
                                  </p>
                                </li>
                              </ul>






                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What is the fee charged by Legal Tax for the Import Export Code (IEC) registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              The fee charged by legal tax for the Import Export Code registration is only Rs. 1999/-.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. Why to choose Legal tax for the Import Export Code (IEC) registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  <p>
                                    Legal tax is a great service providing organization and all its experts work very efficiently.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Legal tax does the import export registration process in a very sophisticated manner without any hassle and complications.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    They provide very good services to their clients. The review from the clients are very satisfactory.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Legal tax provide the IEC registration certificate in very low fee just for Rs. 1999/- only which is very low price from other organization providing the IEC certificate.
                                  </p>
                                </li>


                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. Can we modify our IEC application?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              Yes you can modify your application numerous time before it is submitted to the next department.
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. Why there is requirement of Digital signature for Import Export Code?
                              </button>
                            </h5>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              Importers and Exporters can apply for Import Export code online. So the need of Digital Signature of business owner/director for import export code arises.
                              <br><br>
                              To apply for the online IEC code application Digital Signature (DSC) are the most preferred way. <br><br>
                              The DGFT has a one of a kind Digital signature Certificate that if issued to organization who already have an IEC Code for export and import. Using this one of a kind DSC, applicants can save up to 50% on license fee.


                            </div>
                          </div>
                        </div>


                      </div>
                      <!-- accordion -->
                    </div>
                    <div class="col-lg col-12">
                      <!-- accordion -->
                      <div class="accordion" id="accordionExample">

                        <div class="card">
                          <div class="card-header" id="headingeleven">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseleven">
                                Q11. Is it necessary to provide PAN Card?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                Yes It is mandatory to provide the PAN Card. You need to furnish the self-attested copy of your PAN Card along with the application.
                              </p>

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading12">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Q12.Is there is any need to revalidate the IEC?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                            <div class="card-body">
                              No, the validity of the IEC registration is for lifetime. Therefore, there is no requirement to revalidate it.
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading13">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Q13. What does an exporter needs to do if he wants to cancel the allotted IEC?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                            <div class="card-body">
                              Cancellation of the allotted IEC can be done by surrendering the same.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading14">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Q14. IS the IEC registration is item based?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                            <div class="card-body">
                              No, Import Export code is a Permanent document and it is not based on any item.


                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading15">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Q15. How to obtain new or amended IEC?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                            <div class="card-body">
                              You need to check the status of your BIN or Business Identification Number on the official website.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading16">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Q16. What is an Import Export Code?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  <p>
                                    Import Export Code is a 10- digit code that an individual or a business needs for the goods and services to get import or export. This code is allotted by the Director General of Foreign Trade (DGFT), Ministry of Commerce and Industries, Government of India.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    The valid period for this code is lifetime. It basically means that there is no need for the IEC code holder to apply for its renewal
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Hence, the company having IEC is able to perform all requirements concerning import-export and related issues.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    A period of 12-15 working days is required for the generation of IEC code. Once all the required documents are submitted and all the particular corrections are made. Further, having an IEC is mandatory for very commercial importer and exporter in India. Hence, the business not having IEC is not qualified to undertake the category of import and export.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Unlike other government licenses, the Import Export Code does not need to be renewed on a regular basis. However, one needs to update the status of IEC license on DGFT portal on a yearly basis.
                                  </p>
                                </li>
                              </ul>

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading17">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Q17. Why the registration of IEC required on DGFT website?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
                            <div class="card-body">
                              It enables you to have your own user profile. It helps to Apply / Link IEC and View IEC Dashboard under a single window as well as Apply and track applications easily. It also enables you to receive notifications over the dashboard, mobile and email.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading18">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                Q18. How long does it take to issue new online IEC Certificate?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
                            <div class="card-body">
                              The normal time to receive is immediate from successfully submission of the IEC application.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading19">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Q19. Does the foreign director of the PAN is mandatory?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
                            <div class="card-body">
                              NO. The foreign director the PAN are not mandatory for the application.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading20">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                Q20. What is Certificate of Origin (CO)?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  <p>
                                    A Certificate of Origin (CO) is an important international business document. The Certificate of Origin verifies that the products in an export cargo were entirely obtained, produced, manufactured, or processed in a certain country.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    In other words, the Certification of Origin declares the product's "nationality" and also acts as a statement by the exporter to meet customs or trade regulations.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Customs, banks, private parties, and importers all require CoOs for a numerous of reasons. Also, Almost every country in the globe requires CO for customs clearance operations, thus IEC Code License holders also need to apply for Certificate of Origin if he/she planning to export outside India.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    A Certificate of Origin is issued by both the Indian Chamber of Commerce as well as Trade Promotion Council of India. Moreover, Import Export Code License Holders can two types of Certificate of Origin.
                                  </p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading21">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                Q21. What is non-preferential Certificate of Origin?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionExample">
                            <div class="card-body">
                              Non-preferential Certificate of Origin specifies that the products being exported/imported do not get preferential tariff treatment and that the applicable charges must be imposed on the items being transported.
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading22">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                Q22. What is preferential Certificate of Origin?
                              </button>
                            </h5>
                          </div>
                          <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample">
                            <div class="card-body">
                              Preferential Certificates of Origin are issued to products that are subject to preferential tariff treatment in the payments of tariffs. Preferential COs help in verifying commodities that are subject to lower taxes or allowances when exported to countries that provide these benefits. These COs are frequently linked to Regional Trade Agreements.
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
            <h3>
              associated with
            </h3>
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
          <h3>
            Enquire Now
          </h3>
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