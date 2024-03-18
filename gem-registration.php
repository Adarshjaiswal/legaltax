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
  foreach (metaGEMRegistration() as $value) {
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
<meta itemprop="name" content="GEM Online Registration Fees and Process | Legal Tax">
<meta itemprop="description" content="GeM Portal Online Registration Process: Go to the legaltax.in Create Your Account Now Login to GeM Portal. GeM Registration Fees Starting From Rs. 5000/-">
<meta itemprop="image" content="https://legaltax.in/img/Guidelines-to-Apply-on-Gem-Portal.png">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://legaltax.in/gem-registration.php">
<meta property="og:type" content="website">
<meta property="og:title" content="GEM Online Registration Fees and Process | Legal Tax">
<meta property="og:description" content="GeM Portal Online Registration Process: Go to the legaltax.in Create Your Account Now Login to GeM Portal. GeM Registration Fees Starting From Rs. 5000/-">
<meta property="og:image" content="https://legaltax.in/img/Guidelines-to-Apply-on-Gem-Portal.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="GEM Online Registration Fees and Process | Legal Tax">
<meta name="twitter:description" content="GeM Portal Online Registration Process: Go to the legaltax.in Create Your Account Now Login to GeM Portal. GeM Registration Fees Starting From Rs. 5000/-">
<meta name="twitter:image" content="https://legaltax.in/img/Guidelines-to-Apply-on-Gem-Portal.png">
</head>



<body>
  
  <main>
      <?php
   include_once('header.php');
   ?>
    <div class="col main_srv_bnrGST">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            
            <h1><span>Gem Registration </span> </h1>

            <p>
          <ul>
              <li>
              Free Expert Guidance by CA,CS, lawyer
              </li>
              <li>
              Money-Back Guarantèe
              </li>
              <li>
              Complete Digital Process
              </li>
              <li>Easy EMI options available</li>
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
      <h2 id="section4" class="text-center pt-3">
        How to Start a Gem Registration
      </h2>
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
                  <a href="#2">Why We Should Opt for Gem Registration </a>
                </li>

                <li>
                  <a href="#3">Process</a>
                </li>

                <li>
                  <a href="#4"> Documents Required</a>
                </li>
                <li>
                  <a href="#5">Guidelines to Apply</a>
                </li>
                <li>
                  <a href="#6">Benefits</a>
                </li>

                <li>
                  <a href="#7">Vendor Assessment </a>
                </li>
                <li>
                  <a href="#8">Types of Listing on Gem Portal</a>
                </li>
                <li>
                  <a href="#9">Why to Choose Legal Tax</a>
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
                  Overview about gem registration
                </h3>
                <p>
                  GeM portal (Government e-Marketplace) is an online portal launched by the government through which government issues tenders for various day to day needs of different government organizations, public sector undertaking and departments. The main motive to introduce GeM portal is to enhance transparency, efficiency speed in public procurement as well as employment. By registering through this portal, the seller as well as buyer can buy or sell their products to the Government. Government e-marketplace, commonly known as GeM, is a platform hosted by DGS&D for procurement of goods and services by the Government department. Public procurement has always been an essential part of the government activities. The government intention behind introducing GeM was to enhance transparency, efficiency and speed in public procurement. GeM provides the tools of e-bidding, reverse e-auction and demand aggregation to facilitate the government users achieve the best value for their money.

                </p>

                <br>
                <p>
                  The list of entities who can register their business on the GeM portal is <b>Proprietorship, Partnership, Limited Liability Partnership, Private Limited Company, Public Limited Company, Foreign Subsidiary Company etc.</b>
                </p>
                <br>
                <p>
                  <b>GeM PORTAL: </b> It is an e-commerce portal to facilitate and enable easy online procurement of consumer goods and services required by several government departments, associations and public sector undertakings in India. The sole purpose of this online portal is to enhance transparency, efficiency and speed in public procurement along with the inclusion. To avail all the benefits of the GeM, one needs to register themselves as a buyer or seller on the online GeM portal.
                </p>
                <p>
                  <b>
                    Important Points:
                  </b>
                </p>
                <ul>
                  <li>
                    <p>
                      To act as a Reseller, an Authorization letter (From OEM) is required for a particular category of products
                    </p>
                  </li>
                  <li>
                    <p>
                      OEM's are classified into 5 Types:
                    </p>
                    <ol>
                      <li>
                        <p>Manufacturers </p>
                      </li>
                      <li>
                        <p>Brand Owners & Third-Party Manufacturing </p>
                      </li>
                      <li>
                        <p>Importer & Authorized Sellers</p>
                      </li>
                      <li>
                        <p>Service Provider </p>
                      </li>
                      <li>
                        <p>Assemblers </p>
                      </li>
                    </ol>
                  </li>
                </ul>
              </div>

              <div class="overview_sr " id="2">
                <h4>
                  Why We Should Opt for Gem Registration?
                </h4>
                <p>
                  GEM registration helps to authorize the manufacturer, small dealers and service providers to enter the wide and interactive online platform, where they can directly sell their products & services to various buyers from the government departments, organizations and PSUs. It enables the authorized governments to buy the goods and services directly from the private traders and manufacturers instantly and hassle-free.
                </p>


              </div>
              <div class="overview_sr " id="3">
                <h4>
                  Gem Process Registration
                </h4>
                <ul>
                  <li>
                    <p>
                      <b>Step1 </b>
                      Creation of ID and completion of profile.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step2 </b>
                      Bidder can be a reseller or an OEM
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step3 </b>
                      To get the OEM Certificate, manufactures are required to go through GeM Vendor Assessment.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step4 </b>
                      Once a Bidder is registered as a reseller or as an OEM then product listing is required.
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step5 </b>
                      Products are on approval mode from the GeM admin department.
                    </p>
                  </li>
                </ul>


                <h3>
                  Process of Gem Registration as a Seller:
                </h3>

                <ul>
                  <li>
                    <p>
                      <b>Step1 </b>
                      Creation of ID
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step2 </b>
                      Completion of profile
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step3 </b>
                      Money Payment caution
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step4 </b>
                      OEM Panel Application/Vendor Assessment (Mandatory for manufacturers)
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step5 </b>
                      Listing of brands
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Step6 </b>
                      Listing of Product
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Step7 </b>
                      Bid participation
                    </p>
                  </li>

                </ul>

                <h3>
                  Process of Gem Registration as a Buyer:
                </h3>
                <ul>
                  <li>
                    <p>
                      <b>Step1 </b>
                      Aadhar authentication
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step2 </b>
                      Form filing and completion
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step3 </b>
                      GeM Inspection
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Step4 </b>
                      GeM Approval
                    </p>
                  </li>

                </ul>

              </div>



              <div class="overview_sr " id="4">
                <h3>
                  Documents Required for Gem Registration:
                </h3>
                <p>
                  <b>Documents required for Proprietorship Registration: </b>
                </p>
                <ul>
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
                      GST Certificate
                    </p>
                  </li>
                  <li>
                    <p>
                      Email Id
                    </p>
                  </li>
                  <li>
                    <p>
                      Mobile Number
                    </p>
                  </li>
                  <li>
                    <p>
                      Bank Account Details
                    </p>
                  </li>
                  <li>
                    <p>
                      ITR Form last three years (if company is more than 2 yrs old)
                    </p>
                  </li>
                  <li>
                    <p>
                      UDYAM Certificate (if have)
                    </p>
                  </li>
                </ul>







                <p>
                  <b>Documents required for the registration of Partnership firm: </b>
                </p>
                <ul>
                  <li>
                    <p>
                      Company PAN
                    </p>
                  </li>
                  <li>
                    <p>
                      Director PAN Card (key person)
                    </p>
                  </li>
                  <li>
                    <p>
                      Aadhar Card (key person)
                    </p>
                  </li>
                  <li>
                    <p>
                      GST Certificate
                    </p>
                  </li>
                  <li>
                    <p>
                      Email id
                    </p>
                  </li>
                  <li>
                    <p>
                      Mobile Number
                    </p>
                  </li>
                  <li>
                    <p>
                      Bank Account Details
                    </p>
                  </li>
                  <li>
                    <p>
                      ITR Form last three years (if company is more than 2 yrs old)
                    </p>
                  </li>
                  <li>
                    <p>UDYAM Certificate (if have) </p>
                  </li>
                </ul>







                <p>
                  <b>Documents required for the registration of Company: </b>
                </p>
                <ul>
                  <li>
                    <p>
                      Company PAN
                    </p>
                  </li>
                  <li>
                    <p>
                      Director PAN Card (key person)
                    </p>
                  </li>
                  <li>
                    <p>
                      Aadhar Card (key person)
                    </p>
                  </li>
                  <li>
                    <p>
                      GST Certificate
                    </p>
                  </li>
                  <li>
                    <p>
                      Email id
                    </p>
                  </li>
                  <li>
                    <p>
                      Mobile Number
                    </p>
                  </li>
                  <li>
                    <p>
                      Bank Account Details
                    </p>
                  </li>
                  <li>
                    <p>
                      CIN Number
                    </p>
                  </li>
                  <li>
                    <p>ITR Form last three years (if company is more than 2 yr old) </p>
                  </li>
                  <li>
                    <p>
                      UDYAM Certificate (if have)
                    </p>
                  </li>
                </ul>

                <p>
                  <b>
                    Documents required for registration of Trust/Society:
                  </b>
                </p>
                <ul>
                  <li>
                    <p>
                      Company PAN
                    </p>
                  </li>
                  <li>
                    <p>
                      Director PAN Card (key person)
                    </p>
                  </li>
                  <li>
                    <p>
                      Aadhar Card (key person)
                    </p>
                  </li>
                  <li>
                    <p>
                      GST Certificate
                    </p>
                  </li>
                  <li>
                    <p>
                      Email id
                    </p>
                  </li>
                  <li>
                    <p>
                      Mobile Number
                    </p>
                  </li>
                  <li>
                    <p>
                      Bank Account Details
                    </p>
                  </li>

                  <li>
                    <p>ITR Form last three years (if company is more than 2 yr old) </p>
                  </li>
                  <li>
                    <p>
                      UDYAM Certificate (if have)
                    </p>
                  </li>
                </ul>


              </div>

              <div class="overview_sr " id="5">
                <h3>
                  Guidelines to Apply on Gem Portal:
                </h3>
<img src="img/Guidelines-to-Apply-on-Gem-Portal.png" alt="Guidelines-to-Apply-on-Gem-Portal">
                <ol>
                  <li>
                    <p>
                      <b>Organization Name: </b>
                      Enter the name of the Organizations/Business as per PAN Card.
                    </p>
                  </li>



                  <li>
                    <p>
                      <b>Type of Organization:</b>
                      Select type of organization of your business.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Email ID: </b>
                      Enter a valid email address Authorized person, our executive will call to verify Email OTP.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Mobile Number: </b>
                      Enter a valid 10 Digit mobile number of Authorized person, our executive will call to verify mobile OTP.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Aadhar Number of authorised person: </b>
                      Enter Aadhar Card number of Owner or Director.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>PAN Number of authorised person: </b>
                      Enter PAN Card number of Authorised person or company 9if available).
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>GST: </b>
                      Select whether you have GST or not, if yes enter GST number.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Did you filed Income Tax Return?: </b>
                      Select whether you have filled income tax for last year.
                    </p>
                  </li>



                </ol>


                <i>
                  <b>
                    After Completion, Submit Form & Verify Details. Make a Payment to Complete Registration. After Payment, You will receive your username & password within 24 hours upon activation. Tracking ID will be shared on email address for tracking of registration form.
                  </b>
                </i>



              </div>


              <div class="overview_sr " id="6">
                <h3>
                  Benefits of Registering on Gem Portal:
                </h3>

                <p>
                  <b>Advantage of GeM Registration for sellers: </b>
                </p>

                <ul>
                  <li>
                    <p>
                      Access to National Public Procurement market
                    </p>
                  </li>

                  <li>
                    <p>
                      Special provisions and sections for startups,MSMEs, and Emporium products
                    </p>
                  </li>

                  <li>
                    <p>
                      Fully online, paperless, and contactless platform
                    </p>
                  </li>

                  <li>
                    <p>
                      Multiple invoices for a single order
                    </p>
                  </li>

                  <li>
                    <p>
                      Easy access to participate in bids/reverse auction
                    </p>
                  </li>

                  <li>
                    <p>
                      The clock has been enabled in RA to display the remaining time for seller participation
                    </p>
                  </li>

                  <li>
                    <p>
                      All sellers will be shown reasons for rejection
                    </p>
                  </li>

                  <li>
                    <p>
                      Seller friendly dashboard for monitoring supplies & payments
                    </p>
                  </li>

                  <li>
                    <p>
                      Seller belonging to North-East states and J & K are exempted from ITR at the time of bid participation
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Dynamic Pricing-</b> Price can be changed based on market conditions
                    </p>
                  </li>
                  <li>
                    <p>
                      Direct access to Government departments and their organizations
                    </p>
                  </li>

                </ul>



                <p>
                  <b>Advantage of GeM Registration for Buyers: </b>
                </p>

                <ul>
                  <li>
                    <p>
                      It provides proper transparency and ease of buying
                    </p>
                  </li>

                  <li>
                    <p>
                      There is direct purchase for the amounts up to ₹25,000.
                    </p>
                  </li>

                  <li>
                    <p>
                      L1 purchase for amounts greater than ₹25,000 and less than 5 Lacs.
                    </p>
                  </li>

                  <li>
                    <p>
                      We can get a price trends and price comparison from multiple suppliers.
                    </p>
                  </li>

                  <li>
                    <p>
                      There is direct notification to sellers and integrated payment system.
                    </p>
                  </li>

                  <li>
                    <p>
                      Multiple consignees can be selected for the services
                    </p>
                  </li>

                  <li>
                    <p>
                      Buyers get the option to cancel the Product contracts even if the invoice has been generated by seller provided 15 days have expired from the delivery period.
                    </p>
                  </li>


                  <li>
                    <p>
                      To improve fair participation in Bid/RA, GeM now ensures that at least 3 sellers have participated and offered products from at least 2 different OEMs. In case a buyer want to proceed with less than 3 resellers or two OEMs/Brands, they have to upload approval from the Competent Authority.
                    </p>
                  </li>

                </ul>









              </div>










              <div class="overview_sr " id="7">
                <h3>
                  Vendor Assessment
                </h3>

                <p>
                  Vendor assessment is basically performed to determine the quality of a product or service. This assessment will basically put into the GeM ratings, and after that the product/service will then be designated verified, It is a filterable parameter that the buyer may utilize in their selection process. This will help buyers to make better decisions for themselves. Vendor assessment is mandatory for all the GeM sellers, It is necessary for certain vendors to get vendor validation. A seller must be firstly registered on the GeM Portal, after that listing of products and set up of an OEM to claim ownership of the products and services they offer is done.
                </p>

                <br>
                <p>
                  Non manufacturing OEMs, who are brand owners but do not have self owned manufacturing of the products can still claim OEM status if they are having contract manufacturing arrangements with some other manufacturers. During vendor assessment, Such OEM has to provide the contract / agreement between the OEM and the Contract Manufacturer to the assessing agency. This will be used to derive information about Ownership of Manufacturing Site (of the Contract Manufacturer), Manufacturing Capacity (Agreement should indicate to what extent it is committed to the OEM), Product Quality concerns (Both Contract Manufacturer and the OEM have to indicate their own quality control plans) and Availability of Raw Material etc.
                </p>
                <p>
                  From August 1, 2017, it was made necessary to get a Vendor Assessment of the company's profile and the products that are registered on GeM for offering/sale. It is an important step for evaluating the credentials and quality standards of the seller. <br> <br>

                  Vendor Assessment is performed to determine the quality of a product or service. The assessment will be put into GeM ratings, and the product/service will then be designated verified, which is a filterable parameter that the buyer may utilize in their selection process. This will help buyers make better decisions. <br> <br>

                  It is a requirement for all GeM sellers. Vendor Assessment, which is necessary for certain vendors, is one aspect of vendor validation. A seller must first register on the GeM portal, then list products and then set up an OEM to claim ownership of the product and services they offer. <br> <br>

                  Non manufacturing OEMs, who are brand owners but do not have self owned manufacturing of the products can still claim OEM status if they are having contract manufacturing arrangements with some other manufacturers. During vendor assessment, Such OEM has to provide the contract / agreement between the OEM and the Contract Manufacturer to the assessing agency. This will be used to derive information about Ownership of Manufacturing Site (of the Contract Manufacturer), Manufacturing Capacity (Agreement should indicate to what extent it is committed to the OEM), Product Quality concerns (Both Contract Manufacturer and the OEM have to indicate their own quality control plans) and Availability of Raw Material etc.
                  <br> <br>
                  From August 1, 2017, it was made necessary to get a Vendor Assessment of the company's profile and the products that are registered on GeM for offering/sale. It is an important step for evaluating the credentials and quality standards of the seller.
                </p>
              </div>



              <div class="overview_sr " id="8">
                <h3>
                  Types of Listing on Gem Portal:
                </h3>


                <ol>
                  <li>
                    <p>
                      <b>Brand Listing </b>
                    </p>
                  </li>
                  <li>
                    <p>
                      <b>Product and Service Listing </b>
                    </p>
                  </li>
                </ol>

                <h3>
                  Listing of Brands on Gem
                </h3>
                <p>
                  Applicant can list their brand on the GeM portal easily whether:
                </p>
                <ul>
                  <li>
                    <p>
                      Trademark registered
                    </p>
                  </li>
                  <li>
                    <p>
                      Brand Owner but trademark not registered
                    </p>
                  </li>
                  <li>
                    <p>
                      Unbranded products
                    </p>
                  </li>
                </ul>

                <p>
                  <b>Product And Service Listing On Gem </b>
                </p>
                <p>
                  As the process of GeM registration process finished, the dealers, manufacturers, and service providers have to list their products and services on the GeM portal. This process is called product listing on Government e-Marketplace. The products and services of the sellers/vendors will go live on the GeM website after the listing is approved by the GeM authority.
                </p>

                <p>
                  <b>
                    Government Fees for Gem Registration:
                  </b>
                </p>
                <table class="table table-bordered table-hover table-striped">
                  <tr>
                    <th>Caution Money Deposit </th>
                    <th> Fees </th>
                  </tr>
                  <tr>
                    <td>Seller Turnover less than 1 Crore  </td>
                    <td> Rs. 5000/- </td>
                  </tr>

                  <tr>
                    <td>Seller Turnover in between 1 Crore and 10 Crores</td>
                    <td> Rs. 10,000/- </td>
                  </tr>

                  <tr>
                    <td>Seller turnover more than 10 Crores   </td>
                    <td>Rs. 25,000/- </td>
                  </tr>

                  <tr>
                    <td>Vendor Assessment Fee   </td>
                    <td>Rs. 11,200+GST </td>
                  </tr>
                </table>

                <h3>
                  How Gem Policy Maintain High Standards of Conduct?
                </h3>
                <p>
                  <b>
                    High Standards of Conduct
                  </b>
                </p>
                <p>
                  The highest standards of conduct are expected from both buyers and sellers as far as the Terms and Conditions of the GeM are concerned. Following policy is being laid out, for dealing with deviations from Terms and Conditions. Sellers and buyers who are violating GeM Terms and Conditions will be notified through two lists:
                </p>

                <p>
                  <b>Watch list </b> <br>
                  Whenever an instance of deviation is brought to the attention of the GeM authorities by any stakeholder, the concerned buyer/seller will be issued a show-cause notice through registered email. During the pendency of the reply and subsequent administrative action, the buyer/seller's name will be put under the watch list. <br> <br>

                  The buyer/seller whose name is on the watch list, will not be prevented from doing any GeM transactions. But whenever such seller/buyer is making any transaction, such as getting selected for direct purchase, L1, quoting in bids, reverse auction, placing an order, an alert shall be made visible to the buyer/seller indicating that the seller is in the watch list.
                </p>

                <p>
                  <b>
                    Defaulter list
                  </b>
                  <br>
                  A buyer/seller name will be in the default list, if
                <ul>
                  <li>
                    <p>
                      If he fails to reply to the e-mail within the stipulated time.
                    </p>
                  </li>
                  <li>
                    <p>
                      If the competent authority decides that, he has made deliberate attempts to breach the terms and conditions of GeM.
                    </p>
                  </li>
                </ul>
                </p>
                <p>
                  Once in the default list, the seller shall be disabled from transacting on GeM for a period ranging from 15 days to one year depending on the seriousness of the lapse. If a seller is disabled for three different occasions, a fourth such event will lead to permanent debarment on GeM.
                </p>





                <p>
                  <b>Buyers Default: </b>
                </p>
                <p>
                  The following shall be considered as Buyer defaults:
                </p>
                <ol>
                  <li>
                    <p>
                      Refusing to accept the goods without giving any reasons.
                    </p>
                  </li>

                  <li>
                    <p>
                      Rejecting, received goods (in full or in part) without giving any reason.
                    </p>
                  </li>

                  <li>
                    <p>
                      Refusing to issue CRAC even after the stipulated time.
                    </p>
                  </li>

                  <li>
                    <p>
                      Not making payments within the stipulated time.
                    </p>
                  </li>
                </ol>

                <h3>
                  How Gem Policy Maintain Buyers and Sellers Default:
                </h3>
                <p>The following procedure will be followed in dealing with violation of Terms and Conditions: </p>
                <p>
                  <b>a) Sellers</b>
                </p>
                <ol>
                  <li>
                    <p>
                      On detection of the potential default, the seller will be issued a show-cause notice through his registered email, requiring him to file a reply within a maximum period of 7 days. The email shall require him to explain why he shall not be treated as a defaulter for alleged violation of GeM Terms and Conditions.
                    </p>
                  </li>

                  <li>
                    <p>
                      Pending the reply, the buyer/seller will be put under the watch list.
                    </p>
                  </li>

                  <li>
                    <p>
                      If no reply is filed within the stipulated period, his name will be taken to the defaulter list indefinitely, leading to the deactivation of the account.
                    </p>
                  </li>

                  <li>
                    <p>
                      On receipt of the reply, the competent authority will be deciding whether the default is deliberate, if so, his name will be put in the default list for an appropriate time, ranging from 15 days to one year. This administrative action shall be completed within 48 hrs of receipt of reply.
                    </p>
                  </li>



                </ol>

                <p>
                  <b>b) Buyers </b>
                </p>
                <ol>
                  <li>
                    <p>
                      On receipt of a representation from the seller, the buyer will be issued an email, seeking clarification or appropriate action on the alleged default. Pending the reply, the buyer/seller will be put under the watch list.
                    </p>
                  </li>
                  <li>
                    <p>
                      If reply is filed within the stipulated period, the buyer will be notified under the watch list, till necessary action is taken by the buyer for completing the transaction online.
                    </p>
                  </li>
                </ol>

                <h3>
                  Who Is the Competent Authority Who Tackel Such Defaults?
                </h3>
                <p>
                  All officers of GeM of the rank of Deputy Secretary and above shall be the competent authority for the issue of notices and receiving responses in the specific sectors allotted to them. Five Sectors for this purposes is being notified as below:
                </p>
                <ol>
                  <li>
                    <p>
                      Electronics and Electricals, including software.
                    </p>
                  </li>

                  <li>
                    <p>
                      Automobiles and Taxi Services
                    </p>
                  </li>

                  <li>
                    <p>
                      Paper Products and Office supplies (excluding Electronic items)
                    </p>
                  </li>

                  <li>
                    <p>
                      Structural goods, Heavy goods, and machinery
                    </p>
                  </li>

                  <li>
                    <p>
                      All services except Taxi services.
                    </p>
                  </li>
                </ol>
                <h3>
                  What Is the Impact of T&c on Ratings?
                </h3>
                <p>
                  Performance of the buyer/seller in adhering to the Terms and conditions will form part of the rating of the buyer/seller.
                </p>
              </div>

              <div class="overview_sr " id="9">
                <h3>Why to Choose Legal Tax for Gem (Government E- Marketplace) </h3>
                <ul>
                  <li>
                    <p>Our Professional Team work with all the ethics and professionally with a good team work. </p>
                  </li>
                  <li>
                    <p>We communicate with the Departments. </p>
                  </li>
                  <li>
                    <p>We provide you proper assistance for around 1 year. </p>
                  </li>
                  <li>
                    <p>
                      We provide you accurate information.
                    </p>
                  </li>

                  <li>
                    <p>
                      Due to our most efficient professional team we help you to save your time by providing all the services on proper time.
                    </p>
                  </li>

                  <li>
                    <p>
                      We constantly follow up with you people or with your team.
                    </p>
                  </li>

                  <li>
                    <p>
                      Upload products and getting approvals.
                    </p>
                  </li>

                  <li>
                    <p>
                      We always guide you to maintain your ratings.
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
                                Q1. Give an Overview of GeM
                              </button>
                            </h5>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              FSSAI (Food Safety and Standards Authority of India) is a premier government body that underpins standards for the selling, packaging, or storage of food items in India. To ensure utmost food safety, the FSSAI has mandated every food GeM portal (Government e-Marketplace) is an online portal launched by the government through which government issues tenders for various day to day needs of different government organizations, public sector undertaking and departments. The main motive to introduce GeM portal is to enhance transperancy, efficiency speed in public procurement as well as employment. By registering through this portal, the seller as well as buyer can buy or sell their products to the goovernment.Government e-marketplace, commonly known as GeM, is a platform hosted by DGS&D for procurement of goods and services by the Government department. Public procurement has always been an essential part of the government activities. The government intention behind introducing GeM was to enhance transperancy, efficiency and speed in public procurement. GeM provides he tools of e-bidding, reverse e-auction and demand aggregation to facilitate the government users achiee the best value for theirmoney. <br><br>

                              The list of entities who can register their business on the GeM portal is <b>Proprietorship, Partnership, Limited Liability Partnership, Private Limited Company, Public Limited Company, Foreign Subsidiary Company etc. </b>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. What is the process for GeM registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  <p>
                                    <b>Step1: </b>
                                    Creation of ID and completion of profile.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b> Step2:</b>
                                    Bidder can be a reseller or an OEM
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step3: </b>
                                    To get the OEM Certificate, manufactures are required to go through GeM Vendor Assessment.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step4: </b>
                                    Once a Bidder is registered as a reseller or as an OEM then product listing is required.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step5: </b>
                                    Products are on approval mode from the GeM admin department.
                                  </p>
                                </li>


                              </ul>

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. What is the process for GeM registration for buyer?
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  <p>
                                    <b>Step1: </b>
                                    Aadhar authentication
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b> Step2:</b>
                                    Form filing and completion
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step3: </b>
                                    GeM Inspection
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step4: </b>
                                    GeM Approval
                                  </p>
                                </li>



                              </ul>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. What is the process for GeM registration for seller?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  <p>
                                    <b>Step1: </b>
                                    Creation of ID
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b> Step2:</b>
                                    Completion of profile
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step3: </b>
                                    Money Payment caution
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step4: </b>
                                    OEM Panel Application/Vendor Assessment (Mandatory for manufacturers)
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step5: </b>
                                    Listing of brands
                                  </p>
                                </li>


                                <li>
                                  <p>
                                    <b>Step6: </b>
                                    Listing of Product
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    <b>Step7: </b>
                                    Bid participation
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
                                Q5. What are the documents required for GeM registration?
                              </button>
                            </h5>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">
                              <p>
                                <b>Documents required for Proprietorship Registration: </b>
                              </p>
                              <ul>
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
                                    GST Certificate
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Email Id
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Mobile Number
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Bank Account Details
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    ITR Form last three years (if company is more than 2 yrs old)
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    UDYAM Certificate (if have)
                                  </p>
                                </li>
                              </ul>







                              <p>
                                <b>Documents required for the registration of Partnership firm: </b>
                              </p>
                              <ul>
                                <li>
                                  <p>
                                    Company PAN
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Director PAN Card (key person)
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Aadhar Card (key person)
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    GST Certificate
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Email id
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Mobile Number
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Bank Account Details
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    ITR Form last three years (if company is more than 2 yrs old)
                                  </p>
                                </li>
                                <li>
                                  <p>UDYAM Certificate (if have) </p>
                                </li>
                              </ul>







                              <p>
                                <b>Documents required for the registration of Company: </b>
                              </p>
                              <ul>
                                <li>
                                  <p>
                                    Company PAN
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Director PAN Card (key person)
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Aadhar Card (key person)
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    GST Certificate
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Email id
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Mobile Number
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Bank Account Details
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    CIN Number
                                  </p>
                                </li>
                                <li>
                                  <p>ITR Form last three years (if company is more than 2 yr old) </p>
                                </li>
                                <li>
                                  <p>
                                    UDYAM Certificate (if have)
                                  </p>
                                </li>
                              </ul>

                              <p>
                                <b>
                                  Documents required for registration of Trust/Society:
                                </b>
                              </p>
                              <ul>
                                <li>
                                  <p>
                                    Company PAN
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Director PAN Card (key person)
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Aadhar Card (key person)
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    GST Certificate
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Email id
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Mobile Number
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    Bank Account Details
                                  </p>
                                </li>

                                <li>
                                  <p>ITR Form last three years (if company is more than 2 yr old) </p>
                                </li>
                                <li>
                                  <p>
                                    UDYAM Certificate (if have)
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
                              Q6. What is the government fee for GeM registration? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">

                            <table class="table table-bordered table-hover table-striped">
                  <tr>
                    <th>Caution Money Deposit </th>
                    <th> Fees </th>
                  </tr>
                  <tr>
                    <td>Seller Turnover less than 1 Crore  </td>
                    <td> Rs. 5000/- </td>
                  </tr>

                  <tr>
                    <td>Seller Turnover in between 1 Crore and 10 Crores</td>
                    <td> Rs. 10,000/- </td>
                  </tr>

                  <tr>
                    <td>Seller turnover more than 10 Crores   </td>
                    <td>Rs. 25,000/- </td>
                  </tr>

                  <tr>
                    <td>Vendor Assessment Fee   </td>
                    <td>Rs. 11,200+GST </td>
                  </tr>
                </table>
                             

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What are the benefits of GeM registration for sellers? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">
                              
                            <p>
                  <b>Advantage of GeM Registration for sellers: </b>
                </p>

                <ul>
                  <li>
                    <p>
                      Access to National Public Procurement market
                    </p>
                  </li>

                  <li>
                    <p>
                      Special provisions and sections for startups, MSMEs, and Emporium products
                    </p>
                  </li>

                  <li>
                    <p>
                      Fully online, paperless, and contactless platform
                    </p>
                  </li>

                  <li>
                    <p>
                      Multiple invoices for a single order
                    </p>
                  </li>

                  <li>
                    <p>
                      Easy access to participate in bids/reverse auction
                    </p>
                  </li>

                  <li>
                    <p>
                      The clock has been enabled in RA to display the remaining time for seller participation
                    </p>
                  </li>

                  <li>
                    <p>
                      All sellers will be shown reasons for rejection
                    </p>
                  </li>

                  <li>
                    <p>
                      Seller friendly dashboard for monitoring supplies & payments
                    </p>
                  </li>

                  <li>
                    <p>
                      Seller belonging to North-East states and J & K are exempted from ITR at the time of bid participation
                    </p>
                  </li>

                  

                </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. What are the benefits of GeM registration for buyers? 

                               
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">
                            <p>
                  <b>Advantage of GeM Registration for Buyers: </b>
                </p>

                <ul>
                  <li>
                    <p>
                      It provides proper transparency and ease of buying
                    </p>
                  </li>

                  <li>
                    <p>
                      There is direct purchase for the amounts up to ₹25,000.
                    </p>
                  </li>

                  <li>
                    <p>
                      L1 purchase for amounts greater than ₹25,000 and less than 5 Lacs.
                    </p>
                  </li>

                  <li>
                    <p>
                      We can get a price trends and price comparison from multiple suppliers.
                    </p>
                  </li>

                  <li>
                    <p>
                      There is direct notification to sellers and integrated payment system.
                    </p>
                  </li>

                  <li>
                    <p>
                      Multiple consignees can be selected for the services
                    </p>
                  </li>

                  <li>
                    <p>
                      Buyers get the option to cancel the Product contracts even if the invoice has been generated by seller provided 15 days have expired from the delivery period.
                    </p>
                  </li>


                  <li>
                    <p>
                      To improve fair participation in Bid/RA, GeM now ensures that at least 3 sellers have participated and offered products from at least 2 different OEMs. In case a buyer want to proceed with less than 3 resellers or two OEMs/Brands, they have to upload approval from the Competent Authority.
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
                                Q9.  Why to choose Legal tax for GeM registration? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">
                              
                            <ul>
                  <li>
                    <p>Our Professional Team work with all the ethics and professionally with a good team work. </p>
                  </li>
                  <li>
                    <p>We communicate with the Departments. </p>
                  </li>
                  <li>
                    <p>We provide you proper assistance for around 1 year. </p>
                  </li>
                  <li>
                    <p>
                      We provide you accurate information.
                    </p>
                  </li>

                  <li>
                    <p>
                      Due to our most efficient professional team we help you to save your time by providing all the services on proper time.
                    </p>
                  </li>

                  <li>
                    <p>
                      We constantly follow up with you people or with your team.
                    </p>
                  </li>

                  <li>
                    <p>
                      Upload products and getting approvals.
                    </p>
                  </li>

                  <li>
                    <p>
                      We always guide you to maintain your ratings.
                    </p>
                  </li>
                </ul>
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. Is it safe to buy or sell goods through this portal? 
                              </button>
                            </h5>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                            GeM is a completely secure platform and all the information with documents on GeM is signed electronically at numerous phases by the buyers and sellers. 
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
                                Q11. Is it helpful or beneficial for the vendors sell the products through this portal? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                            <div class="card-body">
                            It is very much beneficial for selling and buying goods through this portal without any mediator directly to government. 
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading12">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Q12. How to accept orders on GeM portal? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                            <div class="card-body">
                            A seller can accept orders on GeM portal through: 
                            <ul>
                              <li>
                                <p>
                                e Sign Verification 
                                </p>
                              </li>
                              <li>
                                <p>
                                DSC Verification 
                                </p>
                              </li>
                            </ul>
<p>
  <b>Accepting orders on GeM through eSign verification: </b>
  In order to accept orders on the GeM portal, an eSign account is required which is generated by completing the KYC steps. There are three ways of generating eSign - Aadhar, PAN Card and account creation on eMudhra. Once the eSign is activated, the “eSign verification” method can be used to accept the order on the GeM portal. 
</p>
<br>
<p>
  <b>
  Accepting orders on GeM through DSC verification: 
  </b>
  The second option to accept orders on the GeM portal is “DSC verification”. Organization-based DSC is required to accept the orders on the GeM portal. 
</p>
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading13">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Q13. What is Make in India (MII) certificate for OEMs? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                            <div class="card-body">
                            The Government has released circular no. P-45021/2/2017-PP (BE-II) stating the preferences to Make in India or MII certified OEMs for public procurement on GeM. It is the policy of the Government of India to encourage ‘Make in India’ or MII and promote manufacturing & production of goods and services in India with a view to enhancing income and employment. 

<br>
<br>

All those who possess the Make in India certificate get preference in the L1 Bidding of the tenders. Not only this but other preferences for local suppliers are available on GeM if they possess a Make in India Certificate. L1 means the lowest tender or lowest bid received in a tender or bidding process. 
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading14">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Q14. How we can direct purchase on GeM? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                            <div class="card-body">
                            Direct Purchase mode is allowed for low-value transactions, allowing the buyer to directly obtain from any available seller on GeM who satisfies the buyer's requisite quality, specification, and delivery time. 

                            <br>
<br>
<b>GFR rule 149</b> allows direct online purchases on GeM up to Rs. 50,000/- through any of the available suppliers on the GeM, meeting the requisite quality, specification, and delivery period. However, GeM being a dynamic online marketplace, this is subject to procuring authorities convinced about the reasonability of rates. 


                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading15">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Q15. What is OEM in GeM? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                            <div class="card-body">
                            Original Equipment Manufacturers are termed as OEM in GeM portal. These OEMs are basically divided into four categories under GeM: 
                            <ol>
                              <li>
                                <p>
                                Manufacturer 
                                </p>
                              </li>

                              <li>
                                <p>
                                Brand Owner & Third Party Manufacturer 
                                </p>
                              </li>

                              <li>
                                <p>
                                Imported Products & Authorized Sellers in India 
                                </p>
                              </li>

                              <li>
                                <p>
                                Service Provider 
                                </p>
                              </li>
                            </ol>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading16">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Q16. What are the concessions on GST? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                            <div class="card-body">
                            Certain Buyer organizations are eligible for concession on GST if goods for which bids have been invited fall under classifications for eligibility of concession are met by the institution. 
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading17">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Q17. What is RA in GeM portal? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
                            <div class="card-body">
                            RA stands for Running Account, which is generally used in contractual invoices where work is completely in multiple phases. 
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading18">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                Q18. What could be the reasons for the variation in prices between GeM and other Marketplaces? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
                            <div class="card-body">
                            The variation in retail price and GeM Price of a product could be due to under mentioned factors: 
                            <ol>
                              <li>
                                <p>
                                The prices offered on GeM are inclusive of all taxes. 
                                </p>
                              </li>

                              <li>
                                <p>
                                Products on GeM may have different warranty periods. 
                                </p>
                              </li>

                              <li>
                                <p>
                                Onsite warranty is offered for some products on GeM. 
                                </p>
                              </li>

                              <li>
                                <p>
                                Prices could also vary due to Payment Terms of the transaction. 
                                </p>
                              </li>
                            </ol>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading19">
                            <h5 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Q19. Can we request for a change in specification of an existing category? 
                              </button>
                            </h5>
                          </div>
                          <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
                            <div class="card-body">
                            Buyers can request for change in the existing category from Request Management available in their Dashboard. All such requests would be evaluated by GeM. 
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