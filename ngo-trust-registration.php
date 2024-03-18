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
  foreach (metangotrustregistration() as $value) {
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


    
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'AW-475873523');
</script>
</head>
<!-- HTML Meta Tags -->
<title>Online NGO/Trust Registration in 30 Days </title>
<meta name="description" content="Registration Process of NGO/Trust ; Choose an Appropriate Name for the Trust; Formulate Trust Deed; Submit the Trust Deed with The Registrar ; Accounts Book">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="Online NGO/Trust Registration in 30 Days ">
<meta itemprop="description" content="Registration Process of NGO/Trust ; Choose an Appropriate Name for the Trust; Formulate Trust Deed; Submit the Trust Deed with The Registrar ; Accounts Book">
<meta itemprop="image" content="https://legaltax.in/img/NGO-Registration.png">

<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://legaltax.in/ngo-trust-registration.php">
<meta property="og:type" content="website">
<meta property="og:title" content="Online NGO/Trust Registration in 30 Days ">
<meta property="og:description" content="Registration Process of NGO/Trust ; Choose an Appropriate Name for the Trust; Formulate Trust Deed; Submit the Trust Deed with The Registrar ; Accounts Book">
<meta property="og:image" content="https://legaltax.in/img/NGO-Registration.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Online NGO/Trust Registration in 30 Days ">
<meta name="twitter:description" content="Registration Process of NGO/Trust ; Choose an Appropriate Name for the Trust; Formulate Trust Deed; Submit the Trust Deed with The Registrar ; Accounts Book">
<meta name="twitter:image" content="https://legaltax.in/img/NGO-Registration.png">
<body ng-app="myApp" ng-controller="customersCtrl" data-spy="scroll" data-target=".navbar" data-offset="50">
  <main role="main">
      
      <?php
      
      include_once('header.php');
      ?>
      
      
    <div class="col main_srv_bnrngo">
      <span style="position: absolute;width: 100%;height: 100%;background: rgb(9 9 9 / 0.25);top:0;left: 0;">&nbsp;</span>
      <div class="container">
        <div class="row">
          <div class="col my-auto mr-2 serv_bnr">
            <span>NGO / Trust </span>
            <h1>Registration </h1>

            <p>
              To avail of the benefits of Trust in India, it is compulsory to get Trust Registration Certificate. Contact us & get the Trust Registration done. We will help you from the advisory to guidance on compliance regarding Trust Registration.
            </p>
            <p>
              Package Inclusion : -
            </p>
            <ul>
              <li>Screening of client's requirement related to the Trust set up in India</li>
              <li>Name selection for the Trust</li>
              <li>Documentation</li>
              <li>Insertion of applicable clauses in the Trust Deed</li>
              <li>End-to-end support</li>
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
        How to Start a NGO Registration
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
                  <a href="#2">How to Start an NGO in India?</a>
                </li>

                <li>
                  <a href="#3">Objectives in India for Ngo Registration</a>
                </li>

                <li>
                  <a href="#4"> Trust </a>
                </li>
                <li>
                  <a href="#5">Societies</a>
                </li>

                <li>
                  <a href="#6">Section 8 Companies </a>
                </li>
                <li>
                  <a href="#7">Procedure for the NGO Registration as a Trust</a>
                </li>
                <li>
                  <a href="#8">Procedure for the NGO Registration as a Society</a>
                </li>
                <li>
                  <a href="#9">Procedure for the NGO Registration as a Section 8 Company</a>
                </li>
                <li>
                  <a href="#10">Why Choose Legaltax </a>
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
                <p>
                  An NGO is a non- government organisation with a charitable purpose, for the progress of
                  society worldwide. NGO Registration is mandatory for the organisation which is planning to
                  work for the welfare of the society. <br><br>
                  It can be started as a Trust, a Society or Section 8 Company (a Non-Profit Company )
                  depending on the project you want to undertake. NGOs could have a broad variety of
                  interests of society in mind.<br><br>
                  NGOs work for so many good causes like human and/or animal rights, improving the health
                  and welfare of children, expansion work and it can also involve raising awareness regarding
                  some causes or activities of social importance. In India, NGO is a term for all non-profit
                  organizations involving Trust, Society and Section 8 Company. Other titles for such
                  not-for-profit organizations are “Sangathan”, “Sangh”, “Sangam”. Income tax exemption is
                  open for all non-profit NGOs. These are sometimes mixed with non-profitable companies,
                  which refers to a regular business not making a profit.


                </p>


                <p>
                  In India, work in the social sector is anchored by non-governmental organisations (NGOs). These
                  organisations are crucial to supporting the poorer classes of society and weaker aspects of our
                  economy that are often neglected by the government. Therefore, it is often said that NGOs do
                  work that a wealthy welfare state would take up. In India, on the other hand, NGOs, more often
                  known as charitable organisations, survive on the donations made by the wealthier sections of
                  society. <br><br>
                  NGOs and nonprofits in India play a vital role in the development and upliftment of the
                  weaker sections of society. Majority of the Indian population is below the poverty line, with
                  most people not having access to basic needs of food, water, and shelter. In fact, for people of
                  lesser means, even access to education is considered a luxury rather than a necessity. Despite
                  Government funding, we are still not able to tackle problems of poverty, unemployment,
                  hunger, or provide shelter, sanitation, clean water, and electricity, in all parts of India.
                  It is the selfless operations of nonprofits and NGOs that are undertaking necessary
                  development projects to further our country’s growth story. This is why their role in the
                  progress of the country is indisputable.<br><br>
                  That said, the question of how to start an NGO in India is what plagues most people.
                  Hopefully, this article will uncover everything you need to know about how to start an NGO,
                  documents required for NGO registration, and NGO registration fees, and FCRA registration.
                  NGO Registration is mandatory for the organization which is planning to work for the
                  welfare of society. An NGO is a non-government organization with a charitable purpose, for
                  the progress of society worldwide. It can be started as a Trust, a Society or Section 8
                  Company (a Non-Profit Company ) depending on the project you want to undertake. NGO’s
                  could have a broad variety of interests of society in mind.<br><br>
                  This could add Environmental causes, human and/or animal rights, improving the health and
                  welfare of children, expansion work and could even involve raising awareness regarding
                  some causes or activities of social importance.<br><br>
                  In India, NGO is a <b> term for all non-profit organizations involving Trust, Society and
                    Section 8 Company. Other titles for such not-for-profit organizations are “Sangathan”,
                    “Sangh”, “Sangam".</b> Income tax exemption is open for all non-profit NGOs. These are
                  sometimes mixed with non-profitable companies, which refers to a regular business not
                  making a profit.

                </p>


              </div>

              <div class="overview_sr " id="2">
                <h3>
                  How to Start an NGO in India
                </h3>
                <p>
                  To register an NGO in India there are three acts: Indian Trust Act, 1882, Societies
                  Registration Act, 1862 and Companies Act, 2013. Before commencing the registration
                  process, one needs to know about some basic points related to NGO.
                </p>
                <ol>
                  <li>
                    <p>
                      One must formulate the mission and vision of the NGO. Just as you would require for
                      a company, an NGO needs to have goals and a mode for achieving those goals.
                    </p>
                  </li>
                  <li>
                    <p>
                      Forming a governing body, which is one of the first steps in the NGO start-up process.
                    </p>
                  </li>
                </ol>
                <b>
                  Get in touch with <a href="legaltax.in">our experts</a> to know more about how to commence an NGO in
                  India.
                </b>
                <h4>
                  <b>
                    What Are the Laws Governing in India for NGO Registration?
                  </b>
                </h4>
                <p>
                  There are three possible methods by which we can get listed NGOs in India:

                </p>
                <ul>
                  <li>
                    <p>
                      Society Registration
                    </p>
                  </li>

                  <li>
                    <p>
                      Trust Registration
                    </p>
                  </li>

                  <li>
                    <p>
                      Section 8 Company Registration
                    </p>
                  </li>
                </ul> <br>

                <b>
                  Governing Laws in India for NGO Registration are as follows:

                </b>
                <img src="img/NGO-Registration.png" alt="NGO-Registration">
              </div>
              <div class="overview_sr " id="3">
                <h3>
                  What Are the Objectives in India for NGO Registration?
                </h3>
                <p>
                  If someone desires to serve society and help the people of the country then their ultimate goal
                  must be to opt for NGO Registration.
                </p>
                <p>
                  <i>Several reasons for NGO Registration in India are as follows:</i>
                </p>
                <p>
                  <b>
                    <u>Self-governing Organization: </u> These are the bodies that specifically aim towards needy
                    people and the betterment of society by helping the deprived ones.
                  </b>
                </p>


                <p>
                  <b>
                    <u>Opportunity for growth: </u> The definitive goal of an NGO is to help the people who are
                    disadvantaged and provide them with chances for growth and prospect.
                  </b>
                </p>


                <p>
                  <b>
                    <u>Several Benefits: </u> You can go ahead with an NGO registration; once you have a distinct
                    list of NGOs. There are several benefits that NGOs appreciate and will discuss onward.
                  </b>
                </p>



              </div>



              <div class="overview_sr " id="4">
                <h3>
                  Trust
                </h3>

                <p>
                  The first way to register an NGO is Trust or more commonly called Charitable trust. Trust is
                  a legal entity formed by the “trustor” or “settlor” who shifts the assets to the second party or
                  “trustee” for the profit of the third party or “beneficiary”. Trusts are created to assist and
                  encourage the seized sections of society. Any group of individuals can register a trust and in
                  India, as such there are no particular laws to administer the public trust, though some states
                  like Maharashtra and Tamil Nadu have their own Public Trust Act.
                </p>



                <p>
                  <b>
                    Benefits of Trust Registration
                  </b>
                </p>



                <ul>
                  <li>
                    <p>
                      Trusts can get land from the government Agencies

                    </p>
                  </li>
                  <li>
                    <p>
                      In a maximum of the states, there’s no law that governs Public Charitable Trusts in
                      India. However, many states such as Madhya Pradesh, Maharashtra, Gujarat, and
                      Rajasthan do have Public Trusts Act.
                    </p>
                  </li>
                  <li>
                    <p>
                      An NGO registered under the Trusts Act can practice the word “Govt. Regd.” or
                      ‘Regd.’
                    </p>
                  </li>
                  <li>
                    <p>
                      They get quite a few tax benefits such as Income Tax, etc.

                    </p>
                  </li>
                  <li>
                    <p>
                      80G certificate advantage under the Income Tax Act.
                    </p>
                  </li>
                  <li>
                    <p>
                      Trust can get White capital for Building construction.
                    </p>
                  </li>
                  <li>
                    <p>
                      Benefits in Entertainment Tax and Service Tax, etc.
                    </p>
                  </li>

                </ul>



              </div>

              <div class="overview_sr " id="5">
                <h3>
                  Societies
                </h3>
                <p>
                  A society is an entity that can be formed by a group of individuals united in their cause for
                  developing science, arts, literature, social welfare, and useful information. Also, societies
                  work for building military orphan funds, maintaining public museums and libraries.
                  Societies are administered by the Societies Registration Act, 1860. They must be listed with
                  the respective state Registrar of Societies to be eligible for tax exemption.
                </p>

                <p>
                  <b>
                    Benefits under Society Registration
                  </b>
                </p>
                <p>
                  NGOs registering under the Society Registration Act, 1860 can avail the following benefits:-

                </p>



                <ul>
                  <li>
                    <p>
                      <b>Exemption from income tax :</b>
                      Society registration is a kind of NGO registration
                      where the firm is saved from paying income taxes, and Income Tax exemption is
                      something everybody desperately seeks for.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Separate legal identity:</b>
                      NGO is a separate legal entity in the eyes of the law,
                      which is one of the significant advantages that come with society registration. Each
                      member of this society is accountable for their actions only. The members of such
                      NGOs are responsible only for the activity undertaken by them and not by other
                      members because of the distinction given.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Limited Liability:</b>
                      Society NGO is a separate legal entity from its members. Thus
                      the liability of the members is limited to their share only. That means, in no
                      circumstances, the members’ assets cannot be utilized to pay the firm’s liabilities.
                      Since society NGOs are a separate legal identity, members’ responsibility is limited to
                      their share only.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>Legal protection: </b>
                      You will be provided with legal protection, once you have
                      registered your society under the Society Registration Act, 1860. It indicates that no
                      other company or people can use your company name, your assets, etc. Anybody
                      would be subject to punishment if found liable for any violation.
                    </p>
                  </li>
                </ul>

                <img src="img/ben_sosiety.png" alt="ben_sosiety.png">


              </div>


              <div class="overview_sr " id="6">
                <h3>
                  Section 8 Companies

                </h3>

                <p>
                  A Section 8 company is related to trust and society. The purposes of Section 8 Companies are
                  to better arts, science, commerce, sports, social welfare, religion, charity, and environmental
                  protection. They are registered under the Companies Act, 2013 for a charitable purpose. They
                  have bigger credibility amongst government bodies, donors and other stakeholders.
                </p>


                <p>
                  <b>Benefits of Section 8 company registration</b>
                </p>

                <p>
                  NGOs registering themselves under Section 8 company registration can gain various
                  advantages from it.
                  <br>
                  Those are as follows:-
                </p>

                <ul>
                  <li>
                    <p>
                      <b>
                        No minimum capital requirement:
                      </b>
                      There is no minimum capital requirement
                      for creating an NGO as per section 8 company. Unlike other existences such as public
                      limited companies, section 8 companies have no prescribed limit for any minimum
                      capital necessities. However, the capital structure of the firm can be modified at any
                      stage, which may be needed for the growth of the business.
                    </p>
                  </li>



                  <li>
                    <p>
                      <b>
                        Separate legal entity:
                      </b>
                      Comparable to the trust, a Section 8 company also gets the
                      special recognition of a ‘separate legal entity.’ Like Private Limited and other limited
                      companies, a Section 8 company, too, continues its own identity and possesses its
                      separate legal entity from its members. Furthermore, Section 8 Company has
                      continued survival.
                    </p>
                  </li>


                  <li>
                    <p>
                      <b>
                        Tax exemption:
                      </b>
                      One of the advantages that every NGO receives is the benefit of
                      tax. Aside from the stakeholders, the NGOs’ contributors can also receive tax
                      exemption for the donation given to the NGO. It’s one of the most significant
                      advantages that NGOs registering under Section 8 Companies are presented with,
                      especially those subscribing to section 8 companies. Even the contributors can claim
                      the tax exemption upon the donation made to this pattern of NGO.
                    </p>
                  </li>


                  <li>
                    <p>
                      <b>
                        No stamp duty payable:
                      </b>
                      NGOs are exempted from stamp duty formalities,
                      which is unless applicable for the registration process. Such NGOs are also exempted
                      from the payment of stamp duty appropriate for registration as fitting for record
                      comparable to the one applicable in public limited companies or private limited.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>
                        No title needed:
                      </b>
                      There is no title demand. Moreover, section 8 companies do not
                      need to use a suffix to its name, which the public limited or private limited company
                      has to apply. Unlike in the case of the private limited and public limited company,
                      where names and titles are obligations, a section 8 company doesn’t require to use a
                      suffix next to its title.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>
                        Better reliability as compared to others:
                      </b>
                      There is better reliability. If it is
                      compared with any other NGO structure, a Section 8 company is more reliable. The
                      central government does not administer section 8 company, and hence the MOA
                      (Memorandum of Association) and AOA (Article of Association) remain blessed. It is
                      thus making its legal structure more dependable as correlated to trust or society
                      NGOs.
                    </p>
                  </li>

                  <li>
                    <p>
                      <b>
                        Security of ownership or title transfer:
                      </b>
                      Secure transfer of ownership is
                      something that Section 8 Company appreciates. As per Section 8 of the Income Tax
                      Act of 1961, people can transfer the ownership of both moveable and immobile assets
                      externally with no restrictions. Apart from the above-described advantages, there are
                      many other advantages of section 8 company registrations, such as exemptions from
                      income tax act, attending general meetings under a short notice period, which is
                      within 14 days rather than 21 days, and many more.
                    </p>
                  </li>
                </ul>











              </div>










              <div class="overview_sr " id="7">
                <h3>
                  What is the Procedure for the NGO Registration as a Trust?

                </h3>

                <p>
                  Before we go through the registration procedure, let’s have a look at the Documents required
                  for the Trust Registration.
                </p>
                <p>
                  <b>
                    Documents required for the Trust Registration
                  </b>
                </p>

                <ul>
                  <li>
                    <p>
                      Personal details of the Trustee such as the Name, age, residential address, Contact
                      number etc.
                    </p>
                  </li>

                  <li>
                    <p>
                      Address proof such as Voter Id, Driving licence or passport of the Trustee and the
                      settlers.
                    </p>
                  </li>

                  <li>
                    <p>
                      Ownership proof of the property such as Electricity Bill or House Tax receipt.

                    </p>
                  </li>

                  <li>
                    <p>
                      A rent Deed duly notarized with rent receipts and No Objection certificate from
                      Landlord on an INR10 stamp paper
                    </p>
                  </li>
                </ul>
                <p>
                  <b>
                    Procedure for the Trust Registration
                  </b>
                </p>
                <p>
                  Some of the states in India have their own trusts act while some do not have any. These states
                  follow the Indian Trust Act, 1882 for their Trust Registration.
                </p>

                <ol>
                  <li>
                    <p>
                      At first, you need to draft the Trust Deed in which the following details are to be
                      mentioned.

                    </p>
                  </li>

                  <li>
                    <p>
                      Name and Address of the Trustees

                    </p>
                  </li>

                  <li>
                    <p>
                      Name of the Trust (You can give a minimum of three preferences).

                    </p>
                  </li>

                  <li>
                    <p>
                      Address of the registered office of the Trust
                    </p>
                  </li>

                  <li>
                    <p>
                      Objectives and the Beneficiaries of the Trust.

                    </p>
                  </li>

                  <li>
                    <p>
                      Rules and Regulations that are to be followed by the Trust.

                    </p>
                  </li>

                  <li>
                    <p>
                      Tenure of the Trustee varies from 1 year to 5 years.

                    </p>
                  </li>

                  <li>
                    <p>80G and 12A Certificate application
                    </p>
                  </li>

                  <li>
                    <p>
                      Submit the Trust deed to the local Registrar along with one photocopy of the trust
                      Registration. (Also the settler needs to be physically present at the time of registration
                      along with the Original Id Proofs.)

                    </p>
                  </li>

                  <li>
                    <p>
                      Now, the Registrar will retain the photocopy, and you will get the photocopy of the
                      Trust Deed.

                    </p>
                  </li>
                </ol>

              </div>



              <div class="overview_sr " id="8">
                <h3>
                  What is the Procedure for the NGO Registration as a Society?
                </h3>
                <p>
                  Before we go through the registration procedure, let’s have a look at the Documents required
                  for theSociety Registration.
                </p>
                <p>
                  <b>
                    Documents required for the Society Registration

                  </b>
                </p>



                <ul>
                  <li>
                    <p>
                      First, you need to send a covering letter to register the society under the law.

                    </p>
                  </li>
                  <li>
                    <p>
                      MOA (Memorandum of Association).

                    </p>
                  </li>
                  <li>
                    <p>
                      Rules and Regulations of the Society.
                    </p>
                  </li>

                  <li>
                    <p>
                      A list containing the members of the society.
                    </p>
                  </li>

                  <li>
                    <p>
                      Affidavits of the office bearers
                    </p>
                  </li>

                  <li>
                    <p>
                      Address proof of the registered office and NOC from the Landlord.
                    </p>
                  </li>
                </ul>

                <p>
                  <b>Procedure for Society Registration </b>
                </p>







                <ul>
                  <li>
                    <p>
                      First, you need to select the Name of the society for the NGO Registration.

                    </p>
                  </li>
                  <li>
                    <p>
                      The state government will look after the Security registration. You need to submit all
                      the documents with the requisite fees to the Registrar of the societies.
                    </p>
                  </li>

                  <li>
                    <p>
                      After the documents verification an Incorporation certificate with an NGO registration
                      is allotted.
                    </p>
                  </li>

                  <li>
                    <p>
                      It takes about one month for the issuance of the Incorporation certificate.

                    </p>
                  </li>
                </ul>
                </p>




              </div>

              <div class="overview_sr " id="9">
                <h3>What is the Procedure for the NGO Registration as a Section
                  8 Company? </h3>
                <p>
                  Before we go through the registration procedure, let’s have a look at the Documents required
                  for the Section 8 Company Registration.
                </p>
                <p>
                  <b>
                    Documents required for the Section 8 Company Registration
                  </b>
                </p>
                <ul>
                  <li>
                    <p>Id proofs such as PAN Card or Aadhar Card of the Directors.</p>
                  </li>
                  <li>
                    <p>Address proof of the registered offic</p>
                  </li>
                  <li>
                    <p>Passport size photograph of the Directors. </p>
                  </li>
                  <li>
                    <p>
                      Rent agreement of the Registered Office.
                    </p>
                  </li>

                  <li>
                    <p>
                      NOC from the owner (in case of the registered office)
                    </p>
                  </li>

                  <li>
                    <p>
                      Utility bills such as telephone bills etc.

                    </p>
                  </li>

                  <li>
                    <p>
                      Assent to work as a Director in Form DIR-2
                    </p>
                  </li>


                </ul>


                <p>
                  <b>
                    Procedure for the Section 8 Company registration

                  </b>
                </p>

                <ol>
                  <li>
                    <p>Firstly, you need to apply for the DSC of the proposed Directors.
                    </p>
                  </li>

                  <li>
                    <p>After this, you need to select a name for the Section 8 Company which should be in
                      accordance with the rules mentioned.</p>
                  </li>

                  <li>
                    <p>Draft MOA and AOA.
                    </p>
                  </li>

                  <li>
                    <p>You need to file an incorporation application for the Section 8 company incorporation.
                      Now, licences can also be applied through filing of an incorporation form.</p>
                  </li>

                  <li>
                    <p>After all the verification of the documents, the Registrar of the Companies will issue
                      the Certificate of Incorporation along with the licence</p>
                  </li>
                </ol>

                <h3>
                  Recent Update
                </h3>
                <p>
                  According to the bill passed in the Lok Sabha, the Foreign Contribution Regulation Act
                  (FCRA) was amended for the NGO office-bearers to compulsorily submit their Aadhaar
                  numbers while registration.
                </p>

              </div>
              <div class="overview_sr " id="10">
                <h3>
                  Why Choose Legaltax?
                </h3>
                <ul>
                  <li>
                    <p><a href="https://legaltax.in" style="color: blue;">Legal Tax</a> is a great service providing organisation and all its experts work very
                      efficiently.
                    </p>
                  </li>

                  <li>
                    <p><a href="https://legaltax.in" style="color: blue;">Legal Tax</a> does the NGO/TRUST registration process in a very sophisticated
                      manner without any hassle and complications.</p>
                  </li>

                  <li>
                    <p>They provide very good services to their clients. The reviews from the clients are
                      very satisfactory</p>
                  </li>
                </ul>
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
                                Q1. What do you mean by Provision 35ac?

                              </button>
                            </h2>
                          </div>

                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              There is a special provision as per which if donors donate to those NGOs having 35ac registration, they get
                              100% tax rebate
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Q2. When will an NGO become eligible for government funding?

                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                              An NGO gets eligible for Government funding after three years. However, in some exceptional cases, an
                              NGO can get Government funding even after one year if its project gets approved.

                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Q3. What benefits can NGO get after registration?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                              The term "benefits" include Exposure, Credibility, Status of Legal Entity and Financial Resources.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                Q4. What is the procedure to register an NGO?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
                            <div class="card-body">
                              First, you would need to pick a name, then check to see if it is already registered. If the desired name
                              doesn’t exist yet, you can proceed to apply with the Registrar for a Certificate of Incorporation. The easiest
                              way of registering your Non-Government Organisation is by doing it with Legaltax. We do all the work for
                              you and you don’t have to bother about the running process.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingfive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                Q5. What is the procedure to start an NGO?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                            <div class="card-body">



                              Besides having the willingness to work for the welfare of society, legally, there are some procedures to
                              follow, these are:- <br>
                              First, lay down the mission of your NGO, this means what cause you would like to take up. <br><br>
                              Form a governing body, this body ensures the smooth running of the NGO.<br><br>
                              Finally, register your NGO with the government authorities. This step can be long and painful.
                              But, for a seamless experience, you can contact Legaltax. Our experts will help you at every stage of the
                              registration process.

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingsix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Q6. How many members are required for an NGO registration?
                              </button>
                            </h2>
                          </div>
                          <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                            <div class="card-body">

                              For Trust, minimum 3 members are required; for Society, minimum 7 members are required, and 8
                              members are required from different states if the society is registered on national level; for Section 8
                              Company, minimum 2 members are essential for NGO Registration.



                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="headingseven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Q7. What are the differences between a society, trust and section 8 company?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                            <div class="card-body">

                              <p>
                                The sole differences lie within the Governing Law and Body, Ease of Set up, and Management
                                Requirement.
                              </p>


                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingeight">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Q8. What is the eligibility to start an NGO?


                              </button>
                            </h2>
                          </div>
                          <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                            <div class="card-body">


                              <ul>
                                <li>
                                  <p>
                                    No fee is charged, if registering as an NGO
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Minimum 2 directors required, if NGO is to be incorporated as a private limited company.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    No member limit in case of public limited company.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Maximum number of members is 200, in case of a private limited company
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Minimum of 3 directors required, in case of incorporation as a public limited company

                                  </p>
                                </li>



                              </ul>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="headingnine">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                Q9. What are the three legal possible ways for an NGO registration in India?

                              </button>
                            </h2>
                          </div>
                          <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
                            <div class="card-body">

                              <ul>
                                <li>
                                  <p>Section 8 company registration under "the companies act,2013" </p>
                                </li>
                                <li>
                                  <p>Trust registration under "the Indian trust act,1882"</p>
                                </li>
                                <li>
                                  <p>Society registration under "societies registration act, 1860"
                                  </p>
                                </li>



                              </ul>
                            </div>
                          </div>
                        </div>



                        <div class="card">
                          <div class="card-header" id="headingten">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                Q10. What is the procedure for Trust registration?
                              </button>
                            </h2>
                          </div>

                          <div id="collapseten" class="collapse " aria-labelledby="headingten" data-parent="#accordionExample">
                            <div class="card-body">
                              Some of the states in India have their own trusts act while some do not have any. These states follow
                              the Indian Trust Act, 1882 for their Trust Registration

                              <ol>
                                <li>At first, you need to draft the Trust Deed in which the following details are to be mentioned.</li>
                                <li>Name and Address of the Trustees</li>
                                <li>Name of the Trust (You can give a minimum of three preferences).</li>
                                <li>Name of the Trust (You can give a minimum of three preferences).</li>
                                <li>Objectives and the Beneficiaries of the Trust.</li>
                                <li>Rules and Regulations that are to be followed by the Trust.</li>
                                <li> Tenure of the Trustee varies from 1 year to 5 years.</li>
                                <li>80G and 12A Certificate application
                                </li>
                                <li>Submit the Trust deed to the local Registrar along with one photocopy of the trust
                                  Registration. (Also the settler needs to be physically present at the time of registration along
                                  with the Original Id Proofs.)</li>
                                <li>Now, the Registrar will retain the photocopy, and you will get the photocopy of the Trust
                                  Deed.</li>
                              </ol>
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
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseleven">
                                Q11. What is the procedure for the registration of Society?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>First, you need to select the Name of the society for the NGO Registration.</li>
                                <li>The state government will look after the Security registration. You need to submit all
                                  the documents with the requisite fees to the Registrar of the societies.</li>
                                <li>After the documents verification an Incorporation certificate with an NGO registration
                                  is allotted.</li>
                                <li>It takes about one month for the issuance of the Incorporation certificate.</li>
                              </ul>
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading12">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Q12. What is the procedure for the registration of Section 8 Company?
                              </button>
                            </h2>
                          </div>
                          <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                            <div class="card-body">

                              <ul>
                                <li>
                                  <p>
                                    First, you need to select the Name of the society for the NGO Registration.
                                  </p>
                                </li>
                                <li>
                                  <p>
                                    The state government will look after the Security registration. You need to submit all
                                    the documents with the requisite fees to the Registrar of the societies.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    After the documents verification an Incorporation certificate with an NGO registration
                                    is allotted.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    It takes about one month for the issuance of the Incorporation certificate.
                                  </p>
                                </li>
                              </ul>

                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" id="heading13">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Q13.What are the documents required for Trust registration?
                              </button>
                            </h2>
                          </div>
                          <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>Personal details of the Trustee such as the Name, age, residential address, Contact
                                  number etc.</li>
                                <li>Address proof such as Voter Id, Driving licence or passport of the Trustee and the
                                  settlers.</li>
                                <li>Ownership proof of the property such as Electricity Bill or House Tax receipt.
                                </li>
                                <li>A rent Deed duly notarized with rent receipts and No Objection certificate from
                                  Landlord on an INR10 stamp paper.</li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading14">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Q14. What are the documents required for Society Registration?
                              </button>
                            </h2>
                          </div>
                          <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>First, you need to send a covering letter to register the society under the law.</li>
                                <li>MOA (Memorandum of Association).</li>
                                <li>Rules and Regulations of the Society.</li>
                                <li>A list containing the members of the society.</li>
                                <li>Affidavits of the office bearers</li>
                                <li>Address proof of the registered office and NOC from the Landlord.</li>
                              </ul>

                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading15">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Q15. What are the documents required for Section 8 company registration?
                              </button>
                            </h2>
                          </div>
                          <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                            <div class="card-body">

                              <ol>
                                <li>
                                  <p>
                                    Id proofs such as PAN Card or Aadhar Card of the Directors.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Address proof of the registered office.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Passport size photograph of the Directors.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Rent agreement of the Registered Office.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    NOC from the owner (in case of the registered office)
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Utility bills such as telephone bills etc.
                                  </p>
                                </li>

                                <li>
                                  <p>
                                    Assent to work as a Director in Form DIR-2
                                  </p>
                                </li>
                              </ol>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header" id="heading16">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Q16. Why choose Legaltax?
                              </button>
                            </h2>
                          </div>
                          <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                <li>
                                  <p><a href="legaltax.in" style="color: blue;">Legal Tax</a> is a great service providing organisation and all its experts work very
                                    efficiently.
                                  </p>
                                </li>

                                <li>
                                  <p><a href="legaltax.in" style="color: blue;">Legal Tax</a> does the NGO/TRUST registration process in a very sophisticated
                                    manner without any hassle and complications.</p>
                                </li>

                                <li>
                                  <p>They provide very good services to their clients. The reviews from the clients are
                                    very satisfactory</p>
                                </li>
                              </ul>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/custom.js" crossorigin="anonymous"></script>
</body>

</html>