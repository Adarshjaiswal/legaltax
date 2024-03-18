<?php
require_once ('include/connection.php');
require_once ('include/model.php');
require_once ('include/include-design.php');
require_once ('include/constant.php');
?>
<!doctype html>
<html lang="en">

<head>

  <title> Online Legal Consulting Services | Legal Tax </title>
  <meta name="description"
    content="Legal tax Provides Online Legal Consulting Services For Startups & SMEs in India. Get Free Legal Help For your business 24/7 Call: +91 9711939395.">
  <link rel="canonical" href="https://legaltax.in/" />
  <meta name="keyword" content="Legal Tax, GST Registration, FSSAI Registration, MSME Registration, Startup Business">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="p:domain_verify" content="992cc6d01e3fe5c8d190327166179ee1" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Legal Tax",
  "alternateName": "LegalTax",
  "url": "https://legaltax.in/",
  "logo": "https://legaltax.in/img/logoo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "9711939395",
    "contactType": "customer service",
    "contactOption": "HearingImpairedSupported",
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.facebook.com/Legaltax.in/",
    "https://www.instagram.com/legaltax.in/",
    "https://www.linkedin.com/company/legaltax.in",
    "https://twitter.com/legaltax_in"
  ]
}
</script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10809622675"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-10809622675'); </script>



  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://legaltax.in/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Online Legal Services for Startups & SMEs in New Delhi">
  <meta property="og:description"
    content="We are offering online legal services for startups and SMEs in New Delhi like - Trademark Registration, Fssai, ISO Certification, Company, GeM and more.">
  <meta property="og:image" content="https://legaltax.in/img/legal tax online.jpg">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="legaltax.in">
  <meta property="twitter:url" content="https://legaltax.in/">
  <meta name="twitter:title" content="Legal & Tax Services for SMEs & Start-ups Online | legaltax.in">
  <meta name="twitter:description"
    content="Legal & Tax Services for Start-ups in India. Company Registration | GEM & Trademark Registration | Trademark Objection & Renewal Services at very economic cost.">
  <meta name="twitter:image" content="https://legaltax.in/img/legal tax online.jpg">




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

  <link rel="stylesheet" href="css/style.css">

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KLNC84D');</script>
  <!-- End Google Tag Manager -->

  <meta name="facebook-domain-verification" content="tqk8s75ik8fozitl4m5a1qg0rzoub7" />

</head>



<body>


  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLNC84D" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <main role="main">
    <?php
    include_once ('header.php');
    ?>

    <!-- slider -->
    <!-- <div id="myCarousel" class="carousel slide hidd" data-ride="carousel" bis_skin_checked="1">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" bis_skin_checked="1">
      <div class="carousel-item" bis_skin_checked="1">
        <img src="img/banner1.webp" class="img-responsive" style="min-height: 200px;" />
        <div class="container d-none" bis_skin_checked="1">
          <div class="carousel-caption text-left" bis_skin_checked="1">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active" bis_skin_checked="1">
        <img src="img/banner2.webp" class="img-responsive" style="min-height: 200px;" />
        <div class="container d-none" bis_skin_checked="1">
          <div class="carousel-caption" bis_skin_checked="1">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" bis_skin_checked="1">
        <img src="img/banner3.webp" class="img-responsive" style="min-height: 200px;" />
        <div class="container d-none" bis_skin_checked="1">
          <div class="carousel-caption text-right" bis_skin_checked="1">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->
    <!-- slider -->


    <!-- count particles -->


    <!-- particles.js container -->
    <div id="particles-js" style="position: relative;" class="prticle_bnner">
      <div class="bannerHome">
        <div class="flexslider left">
          <ul class="slides">
            <li>
              <div class="row">
                <div class="col-md-6">
                  <div class="meta">
                    <h2>Company Registration</h2>

                    <div class="category">
                      <ul>
                        <li>
                          DIN and DSC for the Directors of the Company
                        </li>
                        <li>
                          Drafting of Memorandum of Association and Articles of Association
                        </li>
                        <li>
                          Registration fees and Stamp Duty applicable on the company
                        </li>
                        <li>
                          Company Incorporation Certificate
                        </li>
                        <li>
                          Company PAN and TAN
                        </li>
                        <li>
                          Certificate for Name Approval
                        </li>
                        <li>
                          GST process after company registration
                        </li>

                    </div>
                    <div class="bt_enq">
                      <a href="company-incorporation.php">
                        <button>
                          Enquire Now
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="img/banner-3.png" alt="banner_3">
                </div>
              </div>

            </li>

            <li>
              <div class="row">
                <div class="col-md-6">
                  <div class="meta">
                    <h2>GST Registration</h2>

                    <div class="category">
                      <ul>
                        <li>
                          Package Inclusions
                        </li>
                        <li>
                          Procedure for GST Registration
                        </li>
                        <li>
                          Documentation Advice for GST Registration
                        </li>
                        <li>
                          Online Formal GST Registration Procedure
                        </li>
                        <li>
                          GST Registration Certificate
                        </li>

                      </ul>
                    </div>
                    <div class="bt_enq">
                      <a href="gst-registration.php">
                        <button>
                          Enquire Now
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="img/banner-1.png" alt="banner_1">
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-6">
                  <div class="meta">
                    <h3>Trademark Registration</h3>

                    <div class="category">
                      <p>
                        We conduct a thorough search of the TM directory and advice you on TM classes<br>
                        Our experts will collect and verify the necessary documents and file the required forms.<br>
                        You can start using the TM symbol as soon as the application is submitted and you will<br>
                        receive updates until registration is complete.

                      </p>
                    </div>
                    <div class="bt_enq">
                      <a href="trademark-registration.php">
                        <button>
                          Enquire Now
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="img/banner-4.png" alt="banner_4">
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-6">
                  <div class="meta">
                    <h3>Income tax Return </h3>

                    <div class="category">
                      <ul>
                        <li>
                          Computing tax payable
                        </li>
                        <li>
                          Filing returns
                        </li>
                        <li>
                          Rebates and Deductions
                        </li>
                        <li>
                          Professional services in accounting procedures
                        </li>

                      </ul>
                    </div>
                    <div class="bt_enq">
                      <a href="income-tax-return.php">
                        <button>
                          Enquire Now
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="img/banner-2.png" alt="income tax">
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-6">
                  <div class="meta">
                    <h3>Mutual Consent Divorce </h3>

                    <div class="category">
                      <ul>
                        <li>
                          Verified Lawyers
                        </li>
                        <li>
                          Fixed Quotes
                        </li>
                        <li>
                          Dedicated Case Manager
                        </li>
                        <li>
                          100% Confidentiality
                        </li>
                    </div>
                    <div class="bt_enq">
                      <a href="mutual-consent-divorce.php">
                        <button>
                          Enquire Now
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="img/banner-5.png" alt="banner_5">
                </div>
              </div>

            </li>
          </ul>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js"></script>
    <script>
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false
      });
    </script>
    <!-- scripts -->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>

    <!-- stats.js -->
    <script src="js/lib/stats.js"></script>
    <script>
      var count_particles, stats, update;
      stats = new Stats;
      stats.setMode(0);
      stats.domElement.style.position = 'absolute';
      stats.domElement.style.left = '0px';
      stats.domElement.style.top = '0px';
      document.body.appendChild(stats.domElement);
      count_particles = document.querySelector('.js-count-particles');
      update = function () {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
          count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>







    <div class="container mt_cstm">
      <div class="row">
        <div class="div col-md-6">
          <div class="abt_contnt">
            <div class="headingst">

              <h1> We Provide Best
                <span style='color:#FFC700'>
                  Quality
                </span> Services
              </h1>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-3">
        <div class="card" >
        <img src="img/experience.png" alt="experience" class='w-25 px-3 mt-3'>
  <div class="card-body">
    <h2 class="card-title">GST Registration</h2>
    
    <h2 class="card-title">₹2500/ <span class="fs-6">EXCL GST.</small></span> </h2>

    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  
    <a type="button" class="btn btn-primary rounded-5"> Primary  </a>

  </div>
</div>
        </div>
      </div>
      <div class="row">
        <div class="div col-md-6">
          <div class="abt_bxs">
            <div class="bxs_cnt">
              <div class="lft">
                <img src="img/experience.png" alt="experience">
                <h4>
                  9+
                </h4>
                <p>
                  Years of Experience in consultancy services
                </p>
              </div>
              <div class="rgt">
                <img src="img/reviews.png" alt="reviews">
                <p>
                  4.9/5
                <p>
                <p>
                  Ratings on Google review
                </p>
              </div>
            </div>
          </div>
          <div class="abt_bxs">
            <div class="bxs_cnt">
              <div class="lft">
                <img src="img/legal-paper.png" alt="legal-paper">
                <h4>
                  CA, CS & Legal
                </h4>
                <p>
                  Services at One Place
                </p>
              </div>
              <div class="rgt">
                <img src="img/user.png" alt="user">
                <h4>
                  All India Services
                </h4>
                <p>
                  at Reasonable Price
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="div col-md-6">
          <div class="abt_bxs">
            <div class="bxs_cnt">
              <div class="lft">
                <img src="img/experience.png" alt="experience">
                <h4>
                  9+
                </h4>
                <p>
                  Years of Experience in consultancy services
                </p>
              </div>
              <div class="rgt">
                <img src="img/reviews.png" alt="reviews">
                <p>
                  4.9/5
                <p>
                <p>
                  Ratings on Google review
                </p>
              </div>
            </div>
          </div>
          <div class="abt_bxs">
            <div class="bxs_cnt">
              <div class="lft">
                <img src="img/legal-paper.png" alt="legal-paper">
                <h4>
                  CA, CS & Legal
                </h4>
                <p>
                  Services at One Place
                </p>
              </div>
              <div class="rgt">
                <img src="img/user.png" alt="user">
                <h4>
                  All India Services
                </h4>
                <p>
                  at Reasonable Price
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- about  -->
    <div class="container mt_cstm">
      <div class="row">
        <div class="div col-md-6">
          <div class="abt_contnt">
            <div class="headingst">

              <span>
                About
              </span>
              <h1>
                LegalTax : Legal Service, CA and CS - at very affordable cost
              </h1>
            </div>
            <p>
              Legaltax.in is technology motivated platform establishing the specialized legal services, Financial & it
              advisory services in India. We Assists entrepreneurs and startups in registering and managing their
              businesses. Whether you are small enterprises, start-up firm or a globally established business. We offer
              a wide range of services to individuals, such as Incorporation, Government Registration, & filing,
              Documentation, Property agreement, Marriage registration, and tax filings.
              <br><br> Our mission is to provide one-click access to individuals and businesses for all their legal and
              professional needs. We believe in delivering the services without compromising on time and quality.
              <br> <br>
              We support the Digital India initiative for digitizing Government activities and helping improve digital
              literarcy.
              We support the Make in India initiative that encourages and facilitates foreign investment into the
              country.
              We support the Startup India initiative that aims to accelerate entrepreneurship in the country and create
              startups.
            </p>
            <p>
              <a href="about.php">Read More...</a>
            </p>
          </div>
        </div>
        <div class="div col-md-6">
          <div class="abt_bxs">
            <div class="bxs_cnt">
              <div class="lft">
                <img src="img/experience.png" alt="experience">
                <h4>
                  9+
                </h4>
                <p>
                  Years of Experience in consultancy services
                </p>
              </div>
              <div class="rgt">
                <img src="img/reviews.png" alt="reviews">
                <p>
                  4.9/5
                <p>
                <p>
                  Ratings on Google review
                </p>
              </div>
            </div>
          </div>
          <div class="abt_bxs">
            <div class="bxs_cnt">
              <div class="lft">
                <img src="img/legal-paper.png" alt="legal-paper">
                <h4>
                  CA, CS & Legal
                </h4>
                <p>
                  Services at One Place
                </p>
              </div>
              <div class="rgt">
                <img src="img/user.png" alt="user">
                <h4>
                  All India Services
                </h4>
                <p>
                  at Reasonable Price
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services We Offer -->
    <section>
      <div class="container">
        <div class="row">
          <div class="headingst text-center">
            <span>

            </span>
            <h3>
              Services We Offer
            </h3>
          </div>
          <div class="togl_btns">
            <div class="left_togl" onclick="taxServ();">
              Tax Services
            </div>
            <div class="rigt_togl" onclick="leagalServ();">
              Legal Services
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="taxserv">
        <div class="row mySlides">
          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/company-incorporation.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/incop.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Company Incorporation
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/import-export-code-iec.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/iec.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Import Export Code (IEC)
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/gst-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/gst.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    GST Registration
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/trademark-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/trademark.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Trademark Registration
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/startup-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/interbusiness.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Startup india registration
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/fssai-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/fssai.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    FSSAI License/ State
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="row mySlides">
          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/income-tax-return.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/incometax.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Income Tax Return
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/iso-certification.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/iso.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    ISO Certification
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/partnership-firm.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/partnership.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Partnership Firm
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/shops-and-establishements-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/store.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Shops License Regi.
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/ngo-trust-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/ngo.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    NGO/Trust Registration
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>



          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/msme-ssi-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/internationatrade.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    MSME Registration
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row mySlides">
          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/section-8-company.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/pf.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Section 8 company
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/digital-signature-online-dsc.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/tradelicence.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Digital signature
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/gem-registration.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/barcode.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    GEM Registration
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="container" id="leagalserv">
        <div class="row mySlides2">
          <div class=" col-md-4 col-6">
            <a href="https://legaltax.in/property-possession-delay-rera.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/rera.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Property Posession Delay - RERA
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/nclt.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Posession Delay - NCLT
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/mutual-consent-divorce.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/mutualconsentdivorce.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Mutual Consent Divorce
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/wrongful-termination-legal-notice.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/consumermatter.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Wrongful Termination - Legal Notice
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/consumercase.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Consumer Matter - Legal Notice
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/suit-recovery-of-money.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/suitrecoveryofmoney.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Suit - Recovery of Money
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="row mySlides2">
          <div class=" col-md-4  col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/consumercase.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Consumer Case
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/marriage-certificate.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/marriagecertificate.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Marriage Certificate
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/name-change.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/namechange.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Name Change
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/legal-heir-certificate.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/legalheircertificate.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Legal Heir Certificate
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/courtmarriage.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Court Marriage
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/courtmarriage.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Cyber Crime
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>


        </div>
        <div class="row mySlides2">
          <div class=" col-md-4  col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/pf.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Partnership Dispute
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>
          <div class=" col-md-4  col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/unpaidsalarylegalnotice.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Unpaid Salary - Legal Notice
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>


          <div class=" col-md-4  col-6">
            <a href="#">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/barcode.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Criminal Cases
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/cheque-bounce-complaint.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/chequebouncecomplaint.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Cheque Bounce Complaint
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-4  col-6">
            <a href="https://legaltax.in/legal-notice.php">
              <div class="serv_card" style="border: 1px solid #ffd049; background-color: fbf9f6;">
                <div class="serv_icon">
                  <img src="img/legalnotice.svg" alt="icop icon">
                </div>
                <div class="serv_text">
                  <p>
                    Legal Notice
                  </p>
                  <p>
                    Consulation Starting from
                  </p>

                </div>
              </div>
            </a>
          </div>





        </div>

      </div>
      <div class="container">
        <div class="row">
          <div class="slid_btns" id="sldbtnlgl">
            <div class="ar">
              <i class="fa fa-chevron-left" aria-hidden="true" onclick="plusSlidesl(-1)"></i>
              <i class="fa fa-chevron-right" aria-hidden="true" onclick="plusSlidesl(1)"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="slid_btns" id="sldbtntax">
            <div class="ar">
              <i class="fa fa-chevron-left" aria-hidden="true" onclick="plusSlides(-1)"></i>
              <i class="fa fa-chevron-right" aria-hidden="true" onclick="plusSlides(1)"></i>
            </div>
          </div>
        </div>
      </div>


      <script>
        function leagalServ() {
          document.getElementById('leagalserv').style.display = "flex";
          document.getElementById('leagalserv').style.flexDirection = "row";
          document.getElementById('taxserv').style.display = "none";
          document.getElementById('sldbtntax').style.display = "none";
          document.getElementById('sldbtnlgl').style.display = "flex";
        }

        function taxServ() {
          document.getElementById('leagalserv').style.display = "none";
          document.getElementById('taxserv').style.display = "flex";
          document.getElementById('taxserv').style.flexDirection = "row";
          document.getElementById('taxserv').style.width = "100%";
          document.getElementById('sldbtntax').style.display = "flex";
          document.getElementById('sldbtnlgl').style.display = "none";
        }
      </script>

      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {
            slideIndex = 1
          }
          if (n < 1) {
            slideIndex = slides.length
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "flex";
          slides[slideIndex - 1].style.flexDirection = "row";
          dots[slideIndex - 1].className += " active";
        }
      </script>



      <script>
        var slideIndex = 1;
        showSlides2(slideIndex);

        function plusSlidesl(n) {
          showSlides2(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides2(slideIndex = n);
        }

        function showSlides2(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides2");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {
            slideIndex = 1
          }
          if (n < 1) {
            slideIndex = slides.length
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "flex";
          slides[slideIndex - 1].style.flexDirection = "row";
          dots[slideIndex - 1].className += " active";
        }
      </script>

    </section>

    <section>
      <div class="container-fluid" style="padding: 0px; margin: 0px;">
        <div class="who_we_wrk">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="headingst text-center">
                  <span>
                    Who We
                  </span>
                  <h4>
                    Work With
                  </h4>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-xs-6">
                <div class="icnbx">
                  <svg version="1.1" id="Capa_81" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" height="60px" width="60px"
                    fill="#1d13ed">
                    <g>
                      <g>
                        <path d="M351.117,288.678l-69.513-42.712c-0.847-0.521-1.821-0.874-2.804-1.028l-21.763-3.84c-4.026-0.712-7.98,2.058-8.69,6.084
                                                        s2.057,7.98,6.083,8.69l20.537,3.624l68.297,41.965c3.334,2.049,7.907,1.054,10.12-2.166
                                                        C355.758,295.839,354.686,290.873,351.117,288.678z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M509.513,291.083c-2.83-3.027-7.576-3.187-10.603-0.359l-30.409,28.42L329.163,181.662L509.161,12.974
                                                        c3.022-2.833,3.176-7.58,0.344-10.602c-2.832-3.022-7.58-3.176-10.602-0.344l-185.69,174.022
                                                        c-3.062,2.869-3.126,7.865-0.139,10.813l12.325,12.159l-3.934,3.474l-82.381-7.094c-1.271-0.108-2.592,0.111-3.752,0.647
                                                        l-65.273,29.728c-0.19-0.049-0.38-0.097-0.577-0.132l-37.546-6.626l3.036-7.761c1.501-3.838-0.374-8.168-4.2-9.697L10.756,153.555
                                                        c-3.848-1.541-8.212,0.332-9.75,4.179c-1.539,3.846,0.332,8.212,4.179,9.75l113.103,45.242L51.636,383.055l-41.162-14.579
                                                        c-3.906-1.382-8.192,0.661-9.575,4.567c-1.383,3.905,0.662,8.192,4.567,9.575l48.006,17.002c3.768,1.335,8.034-0.618,9.489-4.338
                                                        L74.1,366.816l29.187,16.356l-3.219,5.218c-9.121,14.783-4.516,34.231,10.268,43.353c7.818,4.824,17.523,5.968,26.259,3.14
                                                        c1.401,9.104,6.751,17.228,14.596,22.068c7.818,4.824,17.522,5.968,26.259,3.14c1.402,9.104,6.75,17.227,14.595,22.068
                                                        c7.842,4.839,17.496,5.978,26.261,3.149c1.404,9.1,6.751,17.22,14.594,22.059c11.399,7.033,26.487,5.982,36.762-2.63
                                                        c2.59-2.171,4.819-4.762,6.593-7.638l5.117-8.292l4.213,2.588c11.414,7.013,26.498,5.933,36.757-2.698
                                                        c2.586-2.176,4.81-4.771,6.579-7.65c3.516-5.723,4.971-12.137,4.587-18.381c2.382,0.573,4.82,0.881,7.28,0.881
                                                        c10.894,0,21.199-5.745,26.9-15.023c3.434-5.59,5.003-11.963,4.605-18.378c2.376,0.57,4.809,0.876,7.261,0.876
                                                        c10.894,0,21.2-5.745,26.9-15.023c3.437-5.594,5.005-11.971,4.604-18.391c2.402,0.572,4.841,0.871,7.269,0.871
                                                        c10.594,0,20.953-5.334,26.894-15.003c9.094-14.801,4.452-34.24-10.349-43.334l-5.14-3.158l17.239-18.012l16.125,15.91
                                                        c2.828,2.789,7.489,2.851,10.39,0.141l35.671-33.337C512.182,298.857,512.342,294.11,509.513,291.083z M140.923,413.597
                                                        c-4.779,7.743-14.966,10.155-22.71,5.379c-7.744-4.778-10.156-14.965-5.379-22.709l42.014-68.091
                                                        c4.689-7.6,14.751-10.085,22.434-5.546c7.95,4.7,10.144,15.599,5.371,23.336L140.923,413.597z M181.776,438.805
                                                        c-4.777,7.743-14.965,10.156-22.708,5.379c-7.65-4.721-10.107-15.047-5.379-22.709l33.61-54.473
                                                        c4.689-7.599,14.751-10.085,22.434-5.546c7.95,4.7,10.144,15.599,5.37,23.336L181.776,438.805z M222.634,464.013
                                                        c-2.316,3.751-5.954,6.377-10.242,7.393c-4.291,1.017-8.718,0.3-12.469-2.014c-7.649-4.721-10.106-15.048-5.378-22.709
                                                        l25.208-40.855c4.689-7.6,14.752-10.085,22.434-5.546c7.95,4.7,10.144,15.599,5.371,23.336L222.634,464.013z M280.01,462.446
                                                        l-16.522,26.776c-4.721,7.65-15.047,10.105-22.71,5.378c-7.649-4.72-10.105-15.048-5.378-22.709l16.805-27.236
                                                        c4.689-7.598,14.752-10.087,22.434-5.545C282.589,443.809,284.783,454.709,280.01,462.446z M416.654,328.948l-37.182-22.847
                                                        c-3.448-2.119-8.199-0.984-10.317,2.464c-2.119,3.448-0.984,8.199,2.464,10.317l55.397,34.039
                                                        c7.752,4.764,10.184,14.946,5.421,22.699c-4.764,7.752-14.947,10.184-22.7,5.421l-59.413-36.508
                                                        c-3.529-2.17-8.149-1.065-10.317,2.464c-2.168,3.529-1.065,8.149,2.464,10.317l45.78,28.13
                                                        c7.659,4.706,10.134,15.029,5.421,22.699c-4.706,7.659-15.029,10.133-22.699,5.421l-41.488-25.493
                                                        c-3.53-2.169-8.149-1.065-10.317,2.464c-2.168,3.529-1.065,8.149,2.464,10.317l27.854,17.115
                                                        c7.658,4.707,10.134,15.028,5.421,22.699c-4.706,7.658-15.029,10.134-22.699,5.421c0,0-24.496-15.037-24.725-15.147
                                                        c-3.425-1.654-7.613-0.477-9.645,2.831c-2.168,3.529-1.065,8.149,2.464,10.317l10.419,6.402
                                                        c7.752,4.764,10.183,14.946,5.42,22.699c-4.706,7.659-15.029,10.133-22.699,5.421l-4.188-2.574l3.527-5.717
                                                        c4.509-7.308,5.908-16.308,3.838-24.692c-2.042-8.274-7.136-15.176-14.341-19.435c-5.622-3.322-11.911-4.668-18.035-4.255
                                                        c1.15-4.94,1.156-10.146-0.076-15.137c-2.042-8.274-7.136-15.176-14.341-19.435c-5.622-3.323-11.911-4.669-18.035-4.256
                                                        c3.093-13.288-2.601-27.585-14.417-34.571c-5.622-3.322-11.911-4.668-18.035-4.256c3.093-13.288-2.601-27.585-14.417-34.571
                                                        c-14.669-8.671-33.884-3.922-42.834,10.582l-30.91,50.096L79.62,352.711l46.738-119.442l25.448,4.491
                                                        c-7.238,8.99-9.273,21.647-4.173,32.848c5.278,11.588,16.744,18.445,28.718,18.444c4.361,0,8.79-0.91,13.011-2.832l43.928-20.008
                                                        c3.72-1.694,5.412-6.215,3.717-9.935c-1.694-3.719-6.215-5.413-9.935-3.717l-43.929,20.007
                                                        c-8.279,3.772-18.086,0.103-21.858-8.178c-3.771-8.281-0.103-18.086,8.178-21.858l70.294-32.015l83.618,7.201
                                                        c0.215,0.019,0.43,0.028,0.644,0.028c1.82,0,3.587-0.663,4.964-1.877l7.118-6.285l100.186,98.849L416.654,328.948z">
                        </path>
                      </g>
                    </g>
                  </svg>
                  <h4>Start Up Business</h4>
                  <p>
                    You have taken the big step yourself. We are here to get your Business off the ground
                  </p>
                </div>
              </div>

              <div class="col-md-3 col-xs-6">
                <div class="icnbx">
                  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512" xml:space="preserve" height="60px" width="60px"
                    fill="#4caf50">
                    <g>
                      <g>
                        <path
                          d="M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492
                                                    h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204
                                                    c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10
                                                    s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204
                                                    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825
                                                    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536
                                                    c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path
                          d="M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904
                                                    C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28
                                                    c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143
                                                    c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0
                                                    L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <circle cx="75.64" cy="303.31" r="10"></circle>
                      </g>
                    </g>
                  </svg>
                  <h4>Small & Medium Business</h4>
                  <p>
                    Every small decision will prove vital for your future years. Lets get together and enhance your
                    Business
                  </p>
                </div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="icnbx">
                  <svg version="1.1" id="Capa_82" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480"
                    style="enable-background:new 0 0 480 480" xml:space="preserve" height="60px" width="60px"
                    fill="#cb1ac5">
                    <g>
                      <g>
                        <rect x="168" y="160" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="168" y="192" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="168" y="224" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="168" y="256" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="200" y="160" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="200" y="192" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="200" y="224" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="200" y="256" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="232" y="160" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="232" y="192" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="232" y="224" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="232" y="256" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="264" y="160" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="200" y="128" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="232" y="128" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="264" y="128" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="264" y="192" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="264" y="224" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="264" y="256" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="296" y="160" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="296" y="192" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="296" y="224" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="296" y="256" width="16" height="16"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M472.009,120c-0.003,0-0.006,0-0.009,0H352V8c0.003-4.416-3.575-7.997-7.991-8c-0.003,0-0.006,0-0.009,0H136
                                                c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v112H8c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v288
                                                c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h16.723c-0.464,2.642-0.706,5.318-0.723,8v40
                                                c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h416c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009v-40
                                                c-0.016-2.682-0.258-5.358-0.723-8H472c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009V128
                                                C480.003,123.584,476.425,120.003,472.009,120z M344,344c0,8.837-7.163,16-16,16s-16-7.163-16-16s7.163-16,16-16
                                                C336.832,328.011,343.989,335.168,344,344z M152,328c8.837,0,16,7.163,16,16s-7.163,16-16,16s-16-7.163-16-16
                                                C136.011,335.168,143.168,328.011,152,328z M104,464H40v-32c0-17.673,14.327-32,32-32s32,14.327,32,32V464z M56,368
                                                c0-8.837,7.163-16,16-16s16,7.163,16,16s-7.163,16-16,16C63.168,383.989,56.011,376.832,56,368z M105.212,397.425
                                                c-3.017-2.91-6.4-5.414-10.064-7.449c12.202-12.784,11.731-33.04-1.053-45.243s-33.04-11.731-45.243,1.053
                                                c-11.803,12.365-11.803,31.824,0,44.189c-7.636,4.238-13.98,10.467-18.358,18.024H16V136h112v187.056
                                                c-10.986,12.327-10.615,31.039,0.852,42.92C116.852,372.613,108.253,384.053,105.212,397.425z M184,464h-64v-56
                                                c0-17.673,14.327-32,32-32s32,14.327,32,32V464z M280,464h-80v-56c0-22.091,17.909-40,40-40c22.091,0,40,17.909,40,40V464z
                                                M216,328c0-13.255,10.745-24,24-24s24,10.745,24,24s-10.745,24-24,24C226.751,351.986,216.014,341.249,216,328z M288.722,380.495
                                                c-5.357-9.444-13.327-17.139-22.953-22.16c16.897-14.232,19.057-39.467,4.826-56.364c-14.232-16.897-39.467-19.057-56.364-4.826
                                                c-16.897,14.232-19.057,39.467-4.826,56.364c1.468,1.743,3.082,3.357,4.826,4.826c-9.626,5.021-17.596,12.716-22.953,22.16
                                                c-4.206-6-9.722-10.965-16.13-14.519c12.265-12.547,12.037-32.662-0.511-44.927c-8.079-7.898-19.744-10.91-30.637-7.913V16h192
                                                v297.136c-2.607-0.719-5.296-1.101-8-1.136c-17.626-0.047-31.953,14.204-32,31.831c-0.022,8.248,3.151,16.185,8.852,22.145
                                                C298.444,369.53,292.928,374.495,288.722,380.495z M360,432v32h-64v-56c0-17.673,14.327-32,32-32c17.673,0,32,14.327,32,32V432z
                                                M440,464h-64v-32c0-17.673,14.327-32,32-32c17.673,0,32,14.327,32,32V464z M392,368c0-8.837,7.163-16,16-16s16,7.163,16,16
                                                s-7.163,16-16,16C399.168,383.989,392.011,376.832,392,368z M464,408h-14.494c-4.378-7.557-10.722-13.786-18.358-18.024
                                                c12.202-12.784,11.731-33.04-1.053-45.243c-12.784-12.202-33.04-11.731-45.243,1.053c-11.803,12.365-11.803,31.824,0,44.189
                                                c-3.664,2.035-7.048,4.539-10.064,7.449c-3.04-13.372-11.64-24.812-23.64-31.449c11.467-11.881,11.839-30.593,0.853-42.92V136h112
                                                V408z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="376" y="184" width="16" height="128"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="424" y="184" width="16" height="128"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="40" y="184" width="16" height="128"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <rect x="88" y="184" width="16" height="128"></rect>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M288.009,32c-0.003,0-0.006,0-0.009,0h-96c-4.416-0.003-7.997,3.575-8,7.991c0,0.003,0,0.006,0,0.009v64
                                                c-0.003,4.416,3.575,7.997,7.991,8c0.003,0,0.006,0,0.009,0h96c4.416,0.003,7.997-3.575,8-7.991c0-0.003,0-0.006,0-0.009V40
                                                C296.003,35.584,292.425,32.003,288.009,32z M280,96h-80V48h80V96z">
                        </path>
                      </g>
                    </g>
                  </svg>
                  <h4>Enterprise</h4>
                  <p>
                    We have the will and the skills that you are eyeing for. You have a crown and we are the best
                    polishers
                  </p>
                </div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="icnbx">
                  <svg version="1.1" id="Capa_83" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480"
                    style="enable-background:new 0 0 480 480" xml:space="preserve" height="60px" width="60px"
                    fill="#ff9800">
                    <g>
                      <g>
                        <path d="M72.004,120c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C80.001,123.583,76.421,120.001,72.004,120z M64,152H48v-16h16V152z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M168.004,120c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C176.001,123.583,172.421,120.001,168.004,120z M160,152h-16v-16h16V152z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M264.004,120c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C272.001,123.583,268.421,120.001,264.004,120z M256,152h-16v-16h16V152z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M72.004,208c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C80.001,211.583,76.421,208.001,72.004,208z M64,240H48v-16h16V240z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M168.004,208c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C176.001,211.583,172.421,208.001,168.004,208z M160,240h-16v-16h16V240z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M264.004,208c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C272.001,211.583,268.421,208.001,264.004,208z M256,240h-16v-16h16V240z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M72.004,296c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C80.001,299.583,76.421,296.001,72.004,296z M64,328H48v-16h16V328z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M168.004,296c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C176.001,299.583,172.421,296.001,168.004,296z M160,328h-16v-16h16V328z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M264.004,296c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C272.001,299.583,268.421,296.001,264.004,296z M256,328h-16v-16h16V328z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M72.004,384c-0.001,0-0.003,0-0.004,0H40c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C80.001,387.583,76.421,384.001,72.004,384z M64,416H48v-16h16V416z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M264.004,384c-0.001,0-0.003,0-0.004,0h-32c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v32
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h32c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-32
                                            C272.001,387.583,268.421,384.001,264.004,384z M256,416h-16v-16h16V416z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M472.004,200c-0.001,0-0.003,0-0.004,0h-80v-40.047c7.235,4.076,15.31,6.436,23.602,6.898
                                            c0.84,0.047,1.68,0.062,2.512,0.062c13.377-0.028,26.183-5.427,35.542-14.984c3.124-3.122,3.125-8.186,0.003-11.309
                                            c-0.001-0.001-0.002-0.002-0.003-0.003l-27.48-27.48l19.48-19.481l-11.312-11.312l-19.481,19.48l-27.48-27.48
                                            c-3.174-3-8.138-3-11.312,0c-19.92,20.148-19.952,52.564-0.07,72.75V200h-72V96c0.001-4.417-3.579-7.999-7.996-8
                                            c-0.001,0-0.003,0-0.004,0h-8V64c0.001-4.417-3.579-7.999-7.996-8c-0.001,0-0.003,0-0.004,0h-24V8
                                            c0.001-4.417-3.579-7.999-7.996-8c-0.001,0-0.003,0-0.004,0H56c-4.417-0.001-7.999,3.579-8,7.996C48,7.997,48,7.999,48,8v48H24
                                            c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v24H8c-4.417-0.001-7.999,3.579-8,7.996C0,95.997,0,95.999,0,96v376
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h464c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004V208
                                            C480.001,203.583,476.421,200.001,472.004,200z M64,16h176v40H64V16z M32,72h240v16H32V72z M144,464h-32v-57.539
                                            c0.007-7.982,6.475-14.452,14.457-14.461H144V464z M192,464h-32v-72h17.543c7.982,0.009,14.45,6.479,14.457,14.461V464z M288,464
                                            h-80v-57.539c-0.018-16.814-13.643-30.441-30.457-30.461h-51.086c-16.814,0.02-30.439,13.647-30.457,30.461V464H16V104h272V464z
                                            M382.336,91.922l53.754,53.758c-5.847,3.777-12.743,5.596-19.691,5.195c-10.16-0.716-19.691-5.182-26.742-12.531
                                            C376.352,126.653,373.275,107.139,382.336,91.922z M408,464h-48v-43.305c0.009-7.009,5.69-12.689,12.699-12.695h22.602
                                            c7.009,0.006,12.691,5.686,12.699,12.695V464z M464,464h-40v-43.305c-0.02-15.841-12.858-28.677-28.699-28.695h-22.602
                                            c-15.841,0.018-28.679,12.854-28.699,28.695V464h-40V216h160V464z"></path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M408.004,232c-0.001,0-0.003,0-0.004,0h-48c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v48
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h48c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-48
                                            C416.001,235.583,412.421,232.001,408.004,232z M400,280h-32v-32h32V280z">
                        </path>
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M408.004,312c-0.001,0-0.003,0-0.004,0h-48c-4.417-0.001-7.999,3.579-8,7.996c0,0.001,0,0.003,0,0.004v48
                                            c-0.001,4.417,3.579,7.999,7.996,8c0.001,0,0.003,0,0.004,0h48c4.417,0.001,7.999-3.579,8-7.996c0-0.001,0-0.003,0-0.004v-48
                                            C416.001,315.583,412.421,312.001,408.004,312z M400,360h-32v-32h32V360z">
                        </path>
                      </g>
                    </g>
                  </svg>
                  <h4>Agencies</h4>
                  <p>
                    Yes of course, you! Get in touch and find out for yourself. You will be amazed
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section>
      <div class="headingst text-center mt_cstm" style="text-align: center;">
        <span>
          Industries
        </span>
        <h4>
          We Serve
        </h4>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Layer_2" x="0px" y="0px" viewBox="0 0 512.005 512.005"
                style="enable-background:new 0 0 512.005 512.005" xml:space="preserve" width="60px" height="60px"
                fill="#1094f1">
                <g>
                  <path
                    d="M307.204,255.997c17.237,0,31.394-12.894,33.664-29.525l31.189-23.381c3.772-2.825,4.54-8.175,1.707-11.947     c-2.825-3.772-8.175-4.548-11.947-1.707l-21.751,16.316c-3.251-10.402-12.86-18.022-24.328-18.022h-34.133     c-14.114,0-25.6,11.486-25.6,25.6c0-14.114-11.486-25.6-25.6-25.6H196.27c-11.469,0-21.077,7.62-24.329,18.022l-21.751-16.316     c-3.763-2.825-9.122-2.057-11.947,1.707c-2.833,3.772-2.065,9.122,1.707,11.947l31.189,23.381     c2.27,16.631,16.418,29.525,33.664,29.525h17.067c18.825,0,34.133-15.309,34.133-34.133c0,18.825,15.309,34.133,34.133,34.133     H307.204z M238.937,221.864c0,9.412-7.663,17.067-17.067,17.067h-17.067c-9.404,0-17.067-7.654-17.067-17.067v-8.533     c0-4.702,3.823-8.533,8.533-8.533h34.133c4.71,0,8.533,3.831,8.533,8.533V221.864z M273.07,221.864v-8.533     c0-4.702,3.823-8.533,8.533-8.533h34.133c4.71,0,8.533,3.831,8.533,8.533v8.533c0,9.412-7.663,17.067-17.067,17.067h-17.067     C280.733,238.93,273.07,231.276,273.07,221.864z">
                  </path>
                  <path
                    d="M511.748,501.39l-8.721-34.756c-4.378-13.158-30.285-55.484-178.756-56.636v-8.934c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v17.067c0,0.06,0.034,0.111,0.034,0.171c0,0.051-0.034,0.094-0.034,0.154     c-0.034,5.205-1.749,50.876-51.2,50.876c-49.451,0-51.166-45.986-51.2-51.2v-17.067c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533v8.619C77.162,410.553,21.789,428.2,8.793,467.257L0.26,501.39c-1.152,4.574,1.638,9.207,6.212,10.351     c4.557,1.161,9.199-1.638,10.342-6.204l8.346-33.51c9.916-29.739,63.317-44.595,163.14-45.338     c3.098,24.431,19.703,59.708,67.703,59.708c47.974,0,64.589-35.063,67.703-59.366c116.958,0.862,157.619,28.467,162.953,44.373     l8.533,34.133c0.973,3.874,4.446,6.46,8.269,6.46c0.683,0,1.382-0.077,2.074-0.256     C510.109,510.597,512.891,505.964,511.748,501.39z">
                  </path>
                  <path
                    d="M58.636,42.595l196.267,25.6c0.367,0.043,0.734,0.068,1.101,0.068s0.734-0.026,1.101-0.068L443.737,43.85v29.628     c-5.35,6.016-17.067,21.026-17.067,37.453c0,18.782,15.309,25.6,25.6,25.6s25.6-6.818,25.6-25.6     c0-16.427-11.716-31.437-17.067-37.453V34.13c0-1.126-0.239-2.193-0.64-3.183c-0.145-0.35-0.393-0.623-0.58-0.947     c-0.333-0.597-0.666-1.186-1.126-1.681c-0.299-0.316-0.657-0.529-0.998-0.785c-0.486-0.393-0.964-0.768-1.527-1.041     c-0.418-0.205-0.862-0.29-1.314-0.418c-0.418-0.128-0.794-0.35-1.246-0.41l-196.267-25.6c-0.734-0.085-1.468-0.085-2.202,0     l-196.267,25.6c-4.25,0.555-7.432,4.181-7.432,8.465C51.204,38.414,54.387,42.041,58.636,42.595z M460.804,110.93     c0,6.81-4.617,8.405-8.533,8.533c-3.917-0.128-8.533-1.724-8.533-8.533c0-7.083,4.352-14.985,8.533-20.813     C456.452,95.946,460.804,103.848,460.804,110.93z M256.004,17.132L386.299,34.13L256.004,51.129L125.708,34.13L256.004,17.132z">
                  </path>
                  <path
                    d="M275.673,309.603c-0.273,0.247-6.707,6.127-19.669,6.127c-12.774,0-19.209-5.709-19.652-6.118     c-3.319-3.251-8.67-3.226-11.981,0.085c-3.337,3.337-3.337,8.73,0,12.066c1.126,1.126,11.605,11.034,31.633,11.034     s30.507-9.907,31.633-11.034c3.294-3.294,3.285-8.567,0.051-11.913C284.437,306.506,279.078,306.412,275.673,309.603z">
                  </path>
                  <path
                    d="M119.47,172.123c-9.933,3.524-17.067,13.013-17.067,24.141v34.133c0,11.904,8.166,21.939,19.2,24.789     c4.565,13.466,17.178,49.98,24.371,64.358c13.551,27.11,51.977,72.986,110.029,72.986c58.052,0,96.478-45.875,110.029-72.986     c7.194-14.379,19.806-50.893,24.371-64.358c11.034-2.85,19.2-12.885,19.2-24.789v-34.133c0-11.127-7.134-20.617-17.067-24.141     v-9.992c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v17.067c0,4.71,3.814,8.533,8.533,8.533     c4.71,0,8.533,3.831,8.533,8.533v34.133c0,4.702-3.823,8.533-8.533,8.533c-3.678,0-6.938,2.347-8.09,5.837     c-0.179,0.503-16.981,50.816-25.139,67.149c-1.306,2.594-32.495,63.548-94.771,63.548s-93.466-60.954-94.771-63.548     c-8.166-16.333-24.96-66.645-25.139-67.149c-1.161-3.49-4.412-5.837-8.09-5.837c-4.71,0-8.533-3.831-8.533-8.533v-34.133     c0-4.702,3.823-8.533,8.533-8.533c4.719,0,8.533-3.823,8.533-8.533V162.13c0-4.71-3.814-8.533-8.533-8.533     s-8.533,3.823-8.533,8.533V172.123z">
                  </path>
                  <path
                    d="M128.004,59.73c-4.719,0-8.533,3.823-8.533,8.533v59.733c0,3.234,1.826,6.187,4.719,7.637     c2.167,1.075,53.896,26.496,131.814,26.496s129.647-25.421,131.814-26.496c2.893-1.451,4.719-4.403,4.719-7.637V68.264     c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v54.212c-14.114,5.982-58.778,22.588-119.467,22.588     s-105.353-16.606-119.467-22.588V68.264C136.537,63.553,132.723,59.73,128.004,59.73z">
                  </path>
                </g>
              </svg>

              <p>Education & e-learning</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Capa_11" x="0px" y="0px" viewBox="0 0 496 496" style="enable-background:new 0 0 496 496"
                xml:space="preserve" width="60px" height="60px" fill="#a4c639">
                <g>
                  <g>
                    <path
                      d="M488,56H8c-4.418,0-8,3.582-8,8v320c0,4.418,3.582,8,8,8h169.056l-23.712,35.56c-2.452,3.675-1.461,8.643,2.215,11.095    c1.315,0.877,2.86,1.345,4.441,1.345h160c4.418,0.001,8.001-3.581,8.001-7.999c0-1.581-0.468-3.126-1.345-4.441L302.944,392H488    c4.418,0,8-3.582,8-8V64C496,59.582,492.418,56,488,56z M305.056,424H174.944l21.336-32h87.44L305.056,424z M480,376H16v-32h464 V376z M480,328H16V72h464V328z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M264,104H56c-4.418,0.003-7.997,3.587-7.994,8.006c0.001,0.931,0.164,1.855,0.482,2.73l32,88    c1.15,3.159,4.151,5.262,7.512,5.264h120v16H64c-4.418,0-8,3.582-8,8s3.582,8,8,8h11.056    c-13.362,11.567-14.817,31.776-3.25,45.138c11.567,13.362,31.776,14.817,45.138,3.25c13.362-11.567,14.817-31.776,3.25-45.138    c-1.004-1.16-2.09-2.246-3.25-3.25h62.112c-13.361,11.568-14.814,31.777-3.246,45.138c11.568,13.361,31.777,14.814,45.138,3.246    s14.814-31.777,3.246-45.138c-1.355-1.565-2.859-2.995-4.49-4.27c2.618-1.345,4.273-4.033,4.296-6.976V120h32v24    c0,4.418,3.582,8,8,8s8-3.582,8-8v-32C272,107.582,268.418,104,264,104z M96,280c-8.837,0-16-7.163-16-16s7.163-16,16-16    s16,7.163,16,16S104.837,280,96,280z M93.6,192l-26.176-72H208v16H104c-4.418,0-8,3.582-8,8s3.582,8,8,8h104v40H93.6z M200,280    c-8.837,0-16-7.163-16-16s7.163-16,16-16s16,7.163,16,16S208.837,280,200,280z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M440,96H328c-4.418,0-8,3.582-8,8v48c0,4.418,3.582,8,8,8h112c4.418,0,8-3.582,8-8v-48C448,99.582,444.418,96,440,96z     M432,144h-96v-32h96V144z">
                    </path>
                  </g>
                  <g>
                    <rect x="272" y="256" width="16" height="16"></rect>
                  </g>
                  <g>
                    <rect x="304" y="256" width="48" height="16"></rect>
                  </g>
                  <g>
                    <rect x="272" y="224" width="80" height="16"></rect>
                  </g>
                  <g>
                    <rect x="272" y="192" width="16" height="16"></rect>
                  </g>
                  <g>
                    <rect x="304" y="192" width="48" height="16"></rect>
                  </g>
                  <g>
                    <path
                      d="M440,240h-40v-16h40c4.418,0,8-3.582,8-8s-3.582-8-8-8h-16v-8c0-4.418-3.582-8-8-8s-8,3.582-8,8v8h-16    c-4.418,0-8,3.582-8,8v32c0,4.418,3.582,8,8,8h40v16h-40c-4.418,0-8,3.582-8,8s3.582,8,8,8h16v8c0,4.418,3.582,8,8,8s8-3.582,8-8    v-8h16c4.418,0,8-3.582,8-8v-32C448,243.582,444.418,240,440,240z">
                    </path>
                  </g>
                </g>
              </svg>
              <p>Retail, Ecommerce</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Capa_12" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480"
                xml:space="preserve" width="60px" height="60px" fill="#dc2d3c">
                <g>
                  <g>
                    <path
                      d="M346.349,285.891c-2.961-2.945-6.264-5.526-9.837-7.688l-0.016-0.032c-20.485-12.399-46.796-9.156-63.656,7.848    l-1.2,1.208l-1.16-1.176c-20.237-20.377-53.161-20.491-73.539-0.254c-3.112,3.091-5.821,6.563-8.061,10.334    c-12.301,20.616-9.039,46.952,7.92,63.944l69.184,69.6c3.116,3.133,8.181,3.146,11.314,0.03c0.01-0.01,0.02-0.02,0.03-0.03    l69.224-69.6C366.981,339.533,366.891,306.32,346.349,285.891z M340.552,341.951c-1.505,2.486-3.302,4.784-5.352,6.844    l-63.552,63.888l-63.52-63.888c-11.788-11.846-14.029-30.184-5.44-44.52c10.184-17.076,32.282-22.664,49.358-12.481    c2.585,1.542,4.967,3.402,7.09,5.537l6.832,6.88c3.116,3.133,8.181,3.146,11.314,0.03c0.01-0.01,0.02-0.02,0.03-0.03l6.872-6.904    c11.666-11.773,29.88-14.019,44.056-5.432C345.468,302.303,350.981,324.723,340.552,341.951z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M472,199.995c-33.789-0.133-65.496,16.307-84.856,44c-35.427-18.839-75.022-28.467-115.144-28    c-44.36-0.638-87.991,11.315-125.832,34.472l-4.928-17.24c-8.294-29.044-6.707-60.02,4.512-88.064l3.664-9.168H232    c3.272,0.003,6.215-1.987,7.432-5.024l32-80c1.644-4.101-0.349-8.758-4.45-10.402c-0.082-0.033-0.164-0.064-0.246-0.094l-88-32    c-2.794-1.017-5.921-0.401-8.12,1.6l-88,80c-1.054,0.959-1.833,2.183-2.256,3.544l-75.608,243.2    c-3.15,9.156-4.756,18.773-4.752,28.456v58.72c-0.001,3.445,2.204,6.503,5.472,7.592c32.606,10.879,66.755,16.419,101.128,16.408    h57.888c33.508,16.182,70.304,24.396,107.512,24c69.768,0,133.36-27.4,164.392-70.312c11.404,4.187,23.459,6.324,35.608,6.312    c4.418,0,8-3.582,8-8v-192C480,203.576,476.418,199.995,472,199.995z M464,391.635c-9.45-0.866-18.697-3.266-27.376-7.104    c-3.61-1.586-7.837-0.306-9.96,3.016c-26.56,41.584-87.272,68.448-154.664,68.448c-35.33,0.422-70.26-7.5-101.952-23.12    c-1.129-0.578-2.379-0.88-3.648-0.88h-59.8c-30.726,0.01-61.275-4.651-90.6-13.824v-52.896c0.016-7.99,1.368-15.92,4-23.464    l75.032-241.36l82.776-75.288l44.856,16.312l-19.936,46.52H184v16h24c3.2,0,6.091-1.907,7.352-4.848l22.4-52.192l15.784,5.736    l-26.952,67.304H144c-3.272-0.003-6.215,1.987-7.432,5.024l-5.68,14.2c-12.527,31.338-14.297,65.948-5.032,98.4l8,27.88    c-1.6,1.96-3.112,4-4.52,6.12c-5.858,8.739-9.935,18.548-12,28.864l-5.176,25.912c-0.884,4.329,1.908,8.555,6.237,9.439    c0.001,0,0.002,0,0.003,0.001c0.526,0.11,1.063,0.164,1.6,0.16c3.799-0.003,7.072-2.678,7.832-6.4l5.192-25.936    c3.358-16.773,13.24-31.526,27.472-41.016l11.936-7.96c0.485-0.384,0.923-0.824,1.304-1.312    c30.761-14.334,64.328-21.636,98.264-21.376c39.819-0.609,79.054,9.623,113.504,29.6c3.767,2.309,8.692,1.127,11.001-2.64    c0.013-0.021,0.026-0.042,0.039-0.064c14.317-24.222,39.429-40.06,67.456-42.544V391.635z">
                    </path>
                  </g>
                </g>
              </svg>
              <p>Healthcare & Fitness</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Capa_13" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480"
                xml:space="preserve" width="60px" height="60px" fill="#1d13ed">
                <g>
                  <g>
                    <path
                      d="M458.504,401.912C461.968,396.8,464,390.632,464,384c0-17.648-14.352-32-32-32s-32,14.352-32,32    c0,6.632,2.032,12.8,5.496,17.912c-9.168,3.216-16.376,10.416-19.584,19.584c-2.264-1.536-4.784-2.664-7.416-3.584    C381.968,412.8,384,406.632,384,400c0-17.648-14.352-32-32-32s-32,14.352-32,32c0,6.632,2.032,12.8,5.496,17.912    c-2.624,0.92-5.152,2.048-7.416,3.584c-3.216-9.168-10.416-16.376-19.584-19.584C301.968,396.8,304,390.632,304,384    c0-17.648-14.352-32-32-32s-32,14.352-32,32c0,6.632,2.032,12.8,5.496,17.912C233.024,406.288,224,418.048,224,432v24    c0,4.424,3.576,8,8,8h72v8c0,4.424,3.576,8,8,8h80c4.424,0,8-3.576,8-8v-8h72c4.424,0,8-3.576,8-8v-24    C480,418.048,470.976,406.288,458.504,401.912z M272,368c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16c-8.824,0-16-7.176-16-16    C256,375.176,263.176,368,272,368z M304,448h-64v-16c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16V448z M352,384    c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16c-8.824,0-16-7.176-16-16C336,391.176,343.176,384,352,384z M384,456v8h-64v-8v-8    c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16V456z M432,368c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16    c-8.824,0-16-7.176-16-16C416,375.176,423.176,368,432,368z M464,448h-64v-16c0-8.824,7.176-16,16-16h32c8.824,0,16,7.176,16,16    V448z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M245.656,258.344l-40-40C204.16,216.84,202.128,216,200,216h-40v-40c0-4.424-3.576-8-8-8H8c-4.424,0-8,3.576-8,8v104v56    c0,4.424,3.576,8,8,8h25.136c3.576,13.768,15.992,24,30.864,24s27.288-10.232,30.864-24h66.272c3.576,13.768,15.992,24,30.864,24    s27.288-10.232,30.864-24H240c4.424,0,8-3.576,8-8v-72C248,261.872,247.16,259.84,245.656,258.344z M16,184h128v40v48H16V184z     M64,352c-8.824,0-16-7.176-16-16c0-8.824,7.176-16,16-16s16,7.176,16,16C80,344.824,72.824,352,64,352z M192,352    c-8.824,0-16-7.176-16-16c0-8.824,7.176-16,16-16c8.824,0,16,7.176,16,16C208,344.824,200.824,352,192,352z M232,328h-9.016    c-0.28-1.088-0.712-2.112-1.104-3.16c-0.192-0.512-0.32-1.04-0.536-1.544c-0.768-1.76-1.672-3.448-2.728-5.024    c-0.232-0.352-0.528-0.656-0.784-1c-0.872-1.208-1.8-2.36-2.832-3.432c-0.472-0.488-0.984-0.912-1.48-1.368    c-0.92-0.84-1.856-1.64-2.872-2.368c-0.592-0.432-1.2-0.824-1.824-1.208c-1.032-0.64-2.096-1.216-3.208-1.744    c-0.656-0.312-1.304-0.624-1.992-0.896c-1.224-0.48-2.496-0.848-3.784-1.176c-0.624-0.16-1.216-0.36-1.848-0.48    c-1.944-0.368-3.936-0.6-5.992-0.6c-2.056,0-4.048,0.232-6,0.608c-0.632,0.12-1.232,0.328-1.848,0.48    c-1.296,0.328-2.56,0.696-3.784,1.176c-0.68,0.272-1.328,0.584-1.992,0.896c-1.104,0.528-2.176,1.096-3.208,1.744    c-0.624,0.392-1.232,0.776-1.824,1.208c-1.008,0.728-1.952,1.528-2.872,2.368c-0.496,0.456-1.008,0.88-1.48,1.368    c-1.032,1.072-1.96,2.224-2.832,3.432c-0.248,0.344-0.544,0.648-0.784,1c-1.056,1.584-1.968,3.264-2.728,5.024    c-0.216,0.496-0.344,1.032-0.536,1.544c-0.392,1.04-0.824,2.064-1.104,3.16H94.976c-0.28-1.088-0.712-2.112-1.104-3.16    c-0.192-0.512-0.32-1.04-0.536-1.544c-0.768-1.76-1.672-3.448-2.728-5.024c-0.232-0.352-0.528-0.656-0.784-1    c-0.872-1.208-1.8-2.36-2.832-3.432c-0.472-0.488-0.984-0.912-1.48-1.368c-0.92-0.84-1.856-1.64-2.872-2.368    c-0.592-0.432-1.2-0.824-1.824-1.208c-1.032-0.64-2.096-1.216-3.208-1.744c-0.656-0.312-1.304-0.624-1.992-0.896    c-1.224-0.48-2.496-0.848-3.784-1.176c-0.624-0.16-1.216-0.36-1.848-0.48C68.048,304.232,66.056,304,64,304    c-2.056,0-4.048,0.232-6,0.608c-0.632,0.12-1.232,0.328-1.848,0.48c-1.296,0.328-2.56,0.696-3.784,1.176    c-0.68,0.272-1.328,0.584-1.992,0.896c-1.104,0.528-2.176,1.096-3.208,1.744c-0.624,0.392-1.232,0.776-1.824,1.208    c-1.008,0.728-1.952,1.528-2.872,2.368c-0.496,0.456-1.008,0.88-1.48,1.368c-1.032,1.072-1.96,2.224-2.832,3.432    c-0.248,0.344-0.544,0.648-0.784,1c-1.056,1.584-1.968,3.264-2.728,5.024c-0.216,0.496-0.344,1.032-0.536,1.544    c-0.384,1.04-0.816,2.064-1.096,3.152H16v-40h136c4.424,0,8-3.576,8-8v-48h36.688L232,267.312V328z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M472,0h-48c-4.424,0-8,3.576-8,8v91.568l-48,30V104c0-2.904-1.576-5.584-4.128-7c-2.528-1.4-5.648-1.336-8.12,0.216    L304,129.568V104c0-2.904-1.576-5.584-4.128-7c-2.536-1.4-5.648-1.336-8.12,0.216l-64,40C225.424,138.68,224,141.24,224,144v64    c0,4.424,3.576,8,8,8h64h64h64h48c4.424,0,8-3.576,8-8v-80V8C480,3.576,476.424,0,472,0z M288,144v56h-48v-51.56l48-30V144z     M352,144v56h-48v-51.56l48-30V144z M416,128v72h-48v-51.56l48-30V128z M464,200h-32v-64h32V200z M464,120h-32v-16V16h32V120z">
                    </path>
                  </g>
                  <g>
                    <rect x="320" y="160" width="16" height="24"></rect>
                  </g>
                  <g>
                    <rect x="384" y="160" width="16" height="24"></rect>
                  </g>
                  <g>
                    <rect x="256" y="160" width="16" height="24"></rect>
                  </g>
                  <g>
                    <path
                      d="M429.56,262.608c-0.8,5.056-1.824,10.128-3.032,15.048l15.544,3.8c1.304-5.344,2.408-10.832,3.288-16.304L429.56,262.608z    ">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M432,232c0,5.152-0.2,10.312-0.608,15.344l15.952,1.28C447.784,243.168,448,237.568,448,232H432z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M410.344,320.672c-2.344,4.512-4.912,8.992-7.64,13.32l13.544,8.512c2.952-4.696,5.744-9.544,8.28-14.44L410.344,320.672z    ">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M422.296,292.416c-1.608,4.84-3.432,9.672-5.416,14.368l14.736,6.232c2.152-5.08,4.128-10.32,5.864-15.568    L422.296,292.416z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M103.568,82.992c-4.176,3.64-8.248,7.48-12.096,11.4l11.424,11.2c3.552-3.624,7.312-7.168,11.184-10.536L103.568,82.992z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M306.296,42.792L301.2,57.96c4.816,1.608,9.632,3.456,14.336,5.472l6.312-14.704    C316.736,46.544,311.504,44.544,306.296,42.792z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M130.32,63.232c-4.672,2.904-9.304,6.048-13.776,9.344l9.512,12.872c4.12-3.048,8.392-5.952,12.696-8.624L130.32,63.232z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M61.104,133.84c-2.784,4.664-5.456,9.592-7.936,14.632l14.36,7.064c2.288-4.648,4.752-9.192,7.312-13.496L61.104,133.84z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M80.312,106.72c-3.576,4.28-6.992,8.712-10.152,13.176l13.064,9.248c2.92-4.136,6.072-8.224,9.368-12.176L80.312,106.72z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M240.904,32l-0.064,16c5.144,0.024,10.304,0.248,15.344,0.672l1.344-15.936C252.072,32.272,246.48,32.024,240.904,32z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M274.032,34.776l-2.608,15.784c5.08,0.84,10.136,1.88,15.032,3.112l3.872-15.528    C285.008,36.816,279.528,35.68,274.032,34.776z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M336.864,55.888l-7.472,14.16c4.488,2.36,8.96,4.952,13.296,7.704l8.56-13.512    C346.56,61.256,341.72,58.456,336.864,55.888z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M224.288,32.576c-5.544,0.424-11.104,1.064-16.512,1.896l2.456,15.816c5.008-0.784,10.144-1.368,15.264-1.76    L224.288,32.576z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M159.84,48.008c-5.08,2.128-10.152,4.496-15.072,7.032l7.328,14.216c4.544-2.344,9.232-4.52,13.912-6.48L159.84,48.008z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M191.456,37.696c-5.352,1.272-10.744,2.8-16.024,4.52l4.968,15.2c4.864-1.584,9.832-2.992,14.76-4.168L191.456,37.696z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M166.96,419.768l-5.64,14.968c5.176,1.952,10.496,3.72,15.808,5.232l4.408-15.376    C176.648,423.184,171.744,421.56,166.96,419.768z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M139.224,406.672l-7.968,13.872c4.816,2.76,9.776,5.344,14.752,7.696l6.832-14.472    C148.24,411.6,143.656,409.216,139.224,406.672z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M196.456,428.224l-3.16,15.688c5.44,1.096,10.96,1.984,16.424,2.64l1.904-15.888    C206.584,430.064,201.488,429.24,196.456,428.224z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M93.864,370.56l-11.736,10.872c2.96,3.2,6.04,6.312,9.2,9.328l11.032-11.592C99.44,376.392,96.608,373.512,93.864,370.56z    ">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M113.904,389.304l-10.064,12.44c4.328,3.504,8.808,6.848,13.328,9.944l9.048-13.184    C122.056,395.632,117.904,392.544,113.904,389.304z">
                    </path>
                  </g>
                </g>
              </svg>
              <p>Logistics & Distribution</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Layer_3" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                xml:space="preserve" width="60px" height="60px" fill="#0caec1">
                <g>
                  <g>
                    <path
                      d="M113.057,41.398c-0.001,4.669-0.982,7.974-2.918,9.821c-4.088,3.9-26.873,2.828-29.196,2.828v16.168h21.996v17.723    c0,7.974-6.488,14.462-14.462,14.462h-0.18c-7.973,0-14.461-6.488-14.461-14.462V71.253H57.667v16.685    c0,16.89,13.741,30.631,30.631,30.631h0.18c16.89,0,30.631-13.741,30.631-30.63V64.751c0.755-0.564,1.491-1.165,2.194-1.836    c5.258-5.015,7.924-12.256,7.924-21.518H113.057z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M88.926,0C39.892,0,0,39.893,0,88.926s39.892,88.926,88.926,88.926s88.926-39.893,88.926-88.926S137.961,0,88.926,0z     M143.744,136.687l-24.024-22.022l-10.926,11.918l22.999,21.083c-12.031,8.804-26.848,14.019-42.867,14.019    s-30.835-5.215-42.867-14.019l22.999-21.083l-10.926-11.918l-24.024,22.022c-11.158-12.791-17.94-29.493-17.94-47.76    c0-40.119,32.639-72.758,72.758-72.758s72.758,32.639,72.758,72.758C161.684,107.193,154.902,123.895,143.744,136.687z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M447.203,375.546c0,4.668-0.981,7.973-2.917,9.82c-4.088,3.9-26.873,2.828-29.196,2.828v16.337h21.996v17.556    c0,7.974-6.488,14.462-14.462,14.462h-0.18c-7.974,0-14.462-6.488-14.462-14.462v-16.685h-16.168v16.685    c0,16.89,13.741,30.631,30.631,30.631h0.18c16.89,0,30.631-13.741,30.631-30.631V398.9c0.755-0.564,1.491-1.165,2.193-1.836    c5.258-5.015,7.924-12.256,7.924-21.518H447.203z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M423.074,334.147c-49.034,0-88.926,39.893-88.926,88.926c0,49.033,39.892,88.926,88.926,88.926S512,472.107,512,423.074    C512,374.04,472.108,334.147,423.074,334.147z M477.891,470.834l-24.024-22.022l-10.925,11.918l22.999,21.083    c-12.031,8.804-26.848,14.019-42.867,14.019c-16.019,0-30.835-5.215-42.867-14.019l22.999-21.083l-10.926-11.918l-24.024,22.022    c-11.158-12.791-17.94-29.493-17.94-47.76c0-40.119,32.639-72.758,72.758-72.758c40.119,0,72.758,32.639,72.758,72.758    C495.832,441.341,489.049,458.043,477.891,470.834z">
                    </path>
                  </g>
                  <g>
                    <rect x="165.368" y="169.208" transform="matrix(0.6859 -0.7277 0.7277 0.6859 -74.5337 181.9086)"
                      width="16.168" height="16.168"></rect>
                  </g>
                  <g>
                    <rect x="205.085" y="206.634" transform="matrix(0.6859 -0.7277 0.7277 0.6859 -89.2933 222.5665)"
                      width="16.168" height="16.168"></rect>
                  </g>
                  <g>
                    <rect x="249.349" y="248.354" transform="matrix(0.6859 -0.7277 0.7277 0.6859 -105.7495 267.8814)"
                      width="16.168" height="16.168"></rect>
                  </g>
                  <g>
                    <rect x="337.862" y="331.81" transform="matrix(0.6859 -0.7277 0.7277 0.6859 -138.6779 358.5056)"
                      width="16.169" height="16.168"></rect>
                  </g>
                  <g>
                    <rect x="294.682" y="291.13" transform="matrix(0.686 -0.7276 0.7276 0.686 -122.6402 314.2463)"
                      width="16.167" height="16.167"></rect>
                  </g>
                  <g>
                    <path
                      d="M318.251,453.981c-20.089,6.312-41.032,9.513-62.251,9.513c-17.675,0-34.84-2.227-51.232-6.406    c-12.188-16.892-22.546-39.048-30.611-64.735h135.738v-16.168H169.518c-8.847-33.644-14.022-72.143-14.639-112.101h70.733v-16.168    h-70.736c0.285-18.853,1.563-37.517,3.813-55.591l-16.044-1.996c-2.331,18.731-3.651,38.066-3.937,57.588H48.662    c0.709-18.449,3.848-36.633,9.357-54.165l-15.425-4.848C35.788,210.561,32.337,233.136,32.337,256    c0,123.328,100.335,223.663,223.663,223.663c22.863,0,45.439-3.45,67.099-10.257L318.251,453.981z M86.947,376.185    c-22.731-31.881-36.665-70.437-38.27-112.101h90.028c0.577,40.091,5.449,78.287,13.95,112.101H86.947z M99.732,392.354h57.358    c6.383,21.333,14.31,40.562,23.587,56.986C149.267,437.06,121.561,417.339,99.732,392.354z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M256,32.337c-22.863,0-45.439,3.45-67.097,10.255l4.846,15.426c20.089-6.312,41.032-9.512,62.251-9.512    c17.675,0,34.84,2.227,51.232,6.406c12.188,16.892,22.546,39.048,30.611,64.735H202.105v16.168h140.376    c8.847,33.644,14.022,72.143,14.639,112.101h-68.784v16.168h68.787c-0.285,18.841-1.565,37.503-3.817,55.589l16.044,1.998    c2.334-18.744,3.655-38.079,3.942-57.588h90.046c-0.708,18.463-3.842,36.648-9.344,54.167l15.426,4.844    c6.796-21.639,10.242-44.213,10.242-67.096C479.663,132.672,379.328,32.337,256,32.337z M354.91,119.646    c-6.382-21.333-14.309-40.562-23.586-56.986c31.41,12.279,59.116,32,80.945,56.986H354.91z M373.295,247.916    c-0.578-40.091-5.45-78.287-13.951-112.101h65.71c22.731,31.881,36.665,70.437,38.27,112.101H373.295z">
                    </path>
                  </g>
                </g>
              </svg>
              <p>Social Networking</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Capa_14" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                xml:space="preserve" width="60px" height="60px" fill="#cb1ac5">
                <g>
                  <path
                    d="M506.552,317.933c-9.739-14.312-29.351-18.1-43.707-8.452l-65.34,43.728l-0.19-136.11l22.7,21.265    c4.827,4.521,11.121,7.009,17.729,7.009c0.012,0,0.026,0,0.039,0c7.134-0.01,14.022-3,18.898-8.205    c4.737-5.057,7.222-11.655,6.996-18.581c-0.226-6.926-3.136-13.349-8.193-18.086l-43.035-40.314    c-2.946-2.76-7.571-2.609-10.33,0.337c-2.759,2.946-2.608,7.57,0.337,10.33l43.035,40.314c2.208,2.068,3.478,4.872,3.577,7.895    c0.098,3.023-0.986,5.904-3.055,8.111c-2.16,2.306-5.09,3.578-8.252,3.582c-0.006,0-0.011,0-0.017,0    c-2.883,0-5.63-1.086-7.737-3.06c-0.001-0.001-0.001-0.001-0.001-0.001L259.124,67.616c-2.816-2.637-7.198-2.633-10.007,0.014    L78.679,228.188c-2.201,2.074-5.079,3.16-8.103,3.076c-3.024-0.09-5.831-1.353-7.905-3.556c-2.074-2.201-3.167-5.079-3.076-8.102    c0.09-3.024,1.353-5.831,3.554-7.905L246.326,39.143c4.342-4.091,11.154-4.101,15.507-0.021L369,139.514    c2.945,2.759,7.57,2.609,10.33-0.337c2.759-2.946,2.608-7.57-0.337-10.33L271.827,28.455c-9.973-9.344-25.576-9.323-35.523,0.049    l-58.639,55.24l-0.016-9.853c-0.004-3.106-1.218-6.024-3.417-8.216c-2.195-2.189-5.109-3.394-8.209-3.394    c-0.006,0-0.011,0-0.017,0l-41.947,0.059c-3.106,0.004-6.023,1.218-8.216,3.417c-2.192,2.199-3.398,5.12-3.393,8.227l0.116,71.087    l-59.439,55.993c-5.044,4.751-7.935,11.182-8.142,18.108c-0.207,6.926,2.296,13.518,7.047,18.56    c4.75,5.044,11.181,7.936,18.108,8.143c0.265,0.008,0.53,0.012,0.795,0.012c6.635,0,12.918-2.49,17.767-7.06l22.649-21.336    l0.09,64.291c-7.328-1.067-14.742-1.627-22.19-1.627H76.746v-4.382c0-14.711-11.969-26.68-26.68-26.68H26.68    C11.969,249.092,0,261.06,0,275.772V390.29c0,4.036,3.272,7.308,7.308,7.308s7.308-3.272,7.308-7.308V275.772    c0-6.652,5.412-12.064,12.064-12.064h23.385c6.652,0,12.064,5.412,12.064,12.064v11.69v149.796v11.575    c0,6.652-5.412,12.064-12.064,12.064H26.68c-6.652,0-12.064-5.412-12.064-12.064v-12.788c0-4.036-3.272-7.308-7.308-7.308    S0,432.009,0,436.045v12.788c0,14.711,11.969,26.68,26.68,26.68h23.385c14.711,0,26.68-11.968,26.68-26.68v-0.993l107.024,40.528    c0.198,0.075,0.399,0.141,0.603,0.198c4.653,1.314,9.304,1.973,13.896,1.973c2.484,0,4.951-0.193,7.393-0.579l157.281-22.672    c0.037-0.005,0.073-0.011,0.11-0.017c13.372-2.135,25.987-7.788,36.48-16.346c0.091-0.074,0.181-0.151,0.268-0.23l101.611-91.388    C513.244,348.802,515.453,331.015,506.552,317.933z M163.037,76.902l0.034,20.59l-35.912,33.83l-0.089-54.371L163.037,76.902z     M254.141,82.976l128.538,120.412l0.223,159.593l-20.691,13.848L340.3,375.6l-0.579-5.82    c-2.039-20.498-17.171-36.987-37.18-40.922l-0.132-94.945c-0.01-7.286-5.942-13.207-13.227-13.207c-0.006,0-0.011,0-0.018,0    l-69.654,0.098c-3.533,0.005-6.853,1.385-9.347,3.887c-2.495,2.501-3.866,5.825-3.861,9.357l0.116,82.781    c-13.797-3.154-26.971-8.363-39.288-15.568c-1.537-0.899-3.089-1.767-4.654-2.611c-0.61-0.329-1.23-0.638-1.845-0.959    c-0.952-0.497-1.902-0.997-2.864-1.474c-0.766-0.38-1.541-0.74-2.313-1.107c-0.819-0.389-1.637-0.782-2.462-1.157    c-0.84-0.381-1.687-0.744-2.533-1.11c-0.773-0.334-1.546-0.67-2.324-0.991c-0.87-0.359-1.745-0.704-2.621-1.047    c-0.777-0.304-1.555-0.606-2.336-0.898c-0.867-0.324-1.738-0.637-2.611-0.944c-0.819-0.289-1.639-0.571-2.463-0.846    c-0.836-0.279-1.674-0.552-2.516-0.817c-0.897-0.283-1.798-0.553-2.7-0.82c-0.775-0.228-1.549-0.456-2.328-0.672    c-1.017-0.283-2.039-0.548-3.062-0.81c-0.479-0.123-0.955-0.262-1.437-0.381l-0.113-80.878L254.141,82.976z M287.923,327.029    l-61.125-7.037l-5.759-0.663l-0.118-83.911l66.874-0.094L287.923,327.029z M491.673,348.41l-101.511,91.298    c-8.459,6.859-18.606,11.396-29.361,13.122l-157.213,22.662c-0.033,0.005-0.065,0.01-0.098,0.015l-0.109,0.017    c-4.763,0.754-9.723,0.436-14.744-0.942L76.746,432.21V294.77h12.505c10.645,0,21.218,1.229,31.514,3.616    c0.383,0.089,0.765,0.18,1.147,0.272c1.265,0.305,2.527,0.619,3.783,0.959c0.11,0.03,0.219,0.062,0.329,0.092    c1.259,0.344,2.513,0.707,3.763,1.086c0.224,0.068,0.449,0.135,0.672,0.204c1.33,0.411,2.654,0.84,3.971,1.29    c0.136,0.047,0.271,0.095,0.407,0.142c2.743,0.947,5.459,1.98,8.141,3.098c0.146,0.061,0.292,0.122,0.438,0.184    c1.337,0.562,2.666,1.143,3.986,1.747c0.035,0.016,0.071,0.033,0.106,0.05c1.276,0.586,2.543,1.194,3.802,1.819    c0.148,0.073,0.297,0.145,0.445,0.219c1.23,0.615,2.45,1.252,3.663,1.904c0.229,0.123,0.457,0.249,0.686,0.373    c1.224,0.667,2.441,1.347,3.646,2.052c17.391,10.173,36.323,16.762,56.271,19.585c0.063,0.009,0.125,0.017,0.188,0.024    l81.881,9.427c0.453,0.065,0.903,0.14,1.35,0.224c12.054,2.264,21.568,11.171,24.751,22.77c0.472,1.718,0.804,3.496,0.986,5.319    l0.325,3.27l-153.46-13.445c-4.018-0.351-7.566,2.622-7.918,6.642c-0.353,4.021,2.622,7.566,6.642,7.918l162.242,14.215    c0.039,0.003,0.077,0.002,0.115,0.005c0.038,0.003,0.075,0.009,0.114,0.012l30.597,1.717c0.137,0.008,0.273,0.011,0.409,0.011    c0.145,0,0.288-0.023,0.432-0.032c0.163-0.01,0.326-0.016,0.488-0.036c0.218-0.028,0.431-0.075,0.645-0.122    c0.153-0.034,0.307-0.059,0.457-0.103c0.234-0.067,0.459-0.158,0.686-0.249c0.122-0.049,0.248-0.086,0.368-0.142    c0.341-0.158,0.673-0.34,0.989-0.552l25.972-17.381c0.001-0.001,0.002-0.002,0.003-0.003l76.702-51.332    c7.717-5.187,18.251-3.152,23.482,4.536C499.249,333.181,498.062,342.736,491.673,348.41z">
                  </path>
                </g>
              </svg>
              <p>Real Estate</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Capa_15" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                style="enable-background:new 0 0 511.999 511.999" xml:space="preserve" width="60px" height="60px"
                fill="#a241bb">
                <g>
                  <g>
                    <path
                      d="M125.768,153.902c-69.22,0-125.535,56.315-125.535,125.535c0,42.977,20.444,89.185,60.765,137.341    c5.991,7.155,11.961,13.785,17.69,19.834c-26.034,7.106-41.665,19.873-41.665,34.774c0,26.379,45.722,40.613,88.741,40.613    c43.02,0,88.741-14.235,88.741-40.613c0-14.889-15.626-27.659-41.643-34.768c10.394-10.973,21.578-23.883,32.19-38.283    c2.46-3.339,1.748-8.038-1.59-10.498c-3.336-2.457-8.038-1.747-10.498,1.591c-12.812,17.387-26.68,32.667-38.781,44.804    c-1.387,0.708-2.547,1.832-3.274,3.249c-10.84,10.653-19.962,18.556-25.138,22.874c-5.119-4.276-14.102-12.072-24.803-22.586    c-0.768-1.683-2.117-3.003-3.763-3.739c-34.007-34.205-81.957-93.301-81.957-154.591c0-60.94,49.579-110.519,110.519-110.519    s110.519,49.579,110.519,110.519c0,26.613-9.068,55.353-26.952,85.422c-2.119,3.565-0.949,8.172,2.615,10.291    s8.172,0.949,10.291-2.615c19.284-32.424,29.062-63.746,29.062-93.098C251.303,210.217,194.988,153.902,125.768,153.902z     M121.173,475.971c1.352,1.047,2.974,1.57,4.595,1.57c1.621,0,3.242-0.523,4.595-1.57c0.921-0.713,13.467-10.497,30.19-26.848    c25.322,5.164,38.938,15.107,38.938,22.264c0,5.345-7.326,11.651-19.119,16.456c-14.464,5.895-33.857,9.142-54.607,9.142    c-45.006,0-73.726-15.162-73.726-25.598c0-7.167,13.62-17.105,38.956-22.269C107.811,465.566,120.375,475.353,121.173,475.971z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M125.768,224.854c-11.875,0-23.167,3.749-32.655,10.842c-3.32,2.483-4,7.188-1.518,10.509    c2.484,3.32,7.189,3.999,10.509,1.518c6.871-5.137,15.054-7.853,23.663-7.853c21.817,0,39.566,17.749,39.566,39.567    c0,21.817-17.749,39.566-39.566,39.566s-39.566-17.75-39.566-39.566c0-3.723,0.515-7.404,1.53-10.938    c1.144-3.985-1.159-8.143-5.144-9.288c-3.984-1.14-8.143,1.16-9.288,5.145c-1.401,4.883-2.112,9.956-2.112,15.081    c0,30.096,24.485,54.582,54.582,54.582c30.096,0,54.582-24.485,54.582-54.582C180.35,249.34,155.864,224.854,125.768,224.854z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M452.958,218.121c3.82-4.099,7.755-8.515,11.701-13.229c31.258-37.333,47.107-73.222,47.107-106.673    C511.766,44.062,467.705,0,413.547,0c-39.563,0-75.086,23.546-90.497,59.986c-1.616,3.819,0.171,8.225,3.989,9.839    c3.818,1.614,8.225-0.171,9.839-3.989c13.058-30.872,43.152-50.821,76.669-50.821c45.879,0,83.204,37.326,83.204,83.205    c0,62.043-65.138,121.484-83.207,136.775c-3.982-3.365-10.25-8.873-17.599-16.077c-0.733-1.453-1.917-2.605-3.339-3.318    c-25.923-26.101-62.263-70.968-62.263-117.38c0-4.147-3.36-7.508-7.508-7.508c-4.146,0-7.508,3.361-7.508,7.508    c0,33.45,15.849,69.339,47.108,106.673c3.945,4.711,7.877,9.125,11.695,13.223c-19.354,5.815-30.527,15.713-30.527,27.632    c0,10.052,8.154,18.911,22.962,24.944c12.67,5.163,29.355,8.007,46.981,8.007c17.625,0,34.31-2.844,46.981-8.007    c14.805-6.034,22.959-14.893,22.959-24.945C483.485,233.85,472.304,223.943,452.958,218.121z M413.545,263.682    c-35.539,0-54.926-11.848-54.926-17.936c0-3.966,8.819-11.224,27.651-15.228c12.671,12.329,22.076,19.655,22.683,20.126    c1.353,1.047,2.974,1.57,4.595,1.57c1.621,0,3.241-0.523,4.595-1.57c0.607-0.469,10.01-7.796,22.681-20.124    c8.39,1.789,15.658,4.41,20.744,7.506c4.323,2.634,6.904,5.52,6.904,7.72C468.47,251.834,449.083,263.682,413.545,263.682z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M413.547,54.532c-24.089,0-43.688,19.598-43.688,43.689c0,24.089,19.598,43.687,43.688,43.687    s43.688-19.597,43.688-43.687C457.235,74.131,437.637,54.532,413.547,54.532z M413.548,126.892    c-15.812,0-28.673-12.862-28.673-28.672c0-15.81,12.862-28.673,28.673-28.673c15.81,0,28.673,12.862,28.673,28.673    C442.22,114.03,429.358,126.892,413.548,126.892z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M316.157,238.239h-3.428c-2.496,0-5.004,0.165-7.458,0.492c-4.109,0.547-6.998,4.321-6.452,8.433    c0.503,3.775,3.727,6.519,7.433,6.519c0.33,0,0.664-0.021,1-0.066c1.799-0.239,3.642-0.36,5.478-0.36h3.427v-0.001    c4.147,0,7.508-3.36,7.508-7.508S320.304,238.239,316.157,238.239z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M291.336,463.496c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.019-7.492,3.396-7.474,7.542    c0.018,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542    C298.825,466.834,295.467,463.496,291.336,463.496z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M325.066,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.36,7.508,7.508,7.508h9.916    c4.147,0,7.508-3.36,7.508-7.508C332.574,338.851,329.214,335.489,325.066,335.489z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M285.284,253.536c-2.811-3.046-7.559-3.238-10.609-0.428c-2.799,2.581-5.345,5.458-7.567,8.552    c-2.419,3.369-1.649,8.06,1.719,10.479c1.325,0.952,2.857,1.41,4.374,1.41c2.335,0,4.637-1.087,6.104-3.129    c1.63-2.269,3.498-4.381,5.551-6.275C287.904,261.334,288.095,256.584,285.284,253.536z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M331.002,463.314c-0.012,0-0.023,0-0.035,0l-9.915,0.045c-4.146,0.018-7.492,3.396-7.474,7.542    c0.018,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.915-0.045c4.146-0.018,7.492-3.396,7.474-7.542    C338.49,466.653,335.132,463.314,331.002,463.314z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M251.671,463.675c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.019-7.492,3.396-7.474,7.542    c0.019,4.135,3.375,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542    C259.16,467.013,255.802,463.675,251.671,463.675z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M290.829,329.178c-2.359-1.488-4.578-3.226-6.593-5.163c-2.989-2.875-7.743-2.78-10.616,0.206    c-2.875,2.988-2.782,7.741,0.206,10.615c2.748,2.643,5.773,5.012,8.991,7.042c1.244,0.785,2.629,1.159,3.999,1.159    c2.492,0,4.929-1.239,6.358-3.504C295.387,336.027,294.336,331.39,290.829,329.178z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M272.373,302.287c-0.504-2.588-0.76-5.25-0.76-7.914l0.002-0.417c0.049-4.146-3.273-7.546-7.42-7.594    c-0.029-0.001-0.059-0.001-0.089-0.001c-4.106,0-7.458,3.304-7.506,7.421l-0.003,0.592c0,3.626,0.349,7.255,1.037,10.786    c0.698,3.585,3.84,6.072,7.361,6.072c0.475,0,0.959-0.045,1.443-0.14C270.509,310.299,273.165,306.357,272.373,302.287z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M364.733,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.361,7.508,7.508,7.508h9.916    c4.147,0,7.508-3.36,7.508-7.508C372.241,338.851,368.88,335.489,364.733,335.489z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M485.274,350.775c-2.893-2.283-5.985-4.357-9.192-6.162c-3.609-2.036-8.19-0.757-10.226,2.856    c-2.035,3.612-0.757,8.192,2.856,10.226c2.53,1.427,4.972,3.063,7.255,4.866c1.38,1.089,3.018,1.616,4.648,1.616    c2.218,0,4.416-0.98,5.898-2.856C489.083,358.066,488.529,353.344,485.274,350.775z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M457.405,468.694c-0.57-4.107-4.366-6.982-8.465-6.41c-2.459,0.34-4.977,0.519-7.488,0.529l-1.405,0.007    c-4.147,0.021-7.492,3.399-7.472,7.544c0.021,4.134,3.378,7.472,7.507,7.472c0.013,0,0.025,0,0.037,0l1.402-0.007    c3.171-0.014,6.359-0.239,9.474-0.67C455.104,476.591,457.973,472.8,457.405,468.694z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M490.54,447.581c-2.861-3.004-7.614-3.119-10.614-0.258c-2.107,2.007-4.387,3.865-6.778,5.523    c-3.407,2.362-4.254,7.04-1.893,10.449c1.459,2.103,3.798,3.231,6.177,3.231c1.476,0,2.966-0.434,4.271-1.338    c3.026-2.099,5.913-4.451,8.58-6.992C493.286,455.335,493.4,450.582,490.54,447.581z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M505.152,411.118c-4.069-0.767-7.999,1.913-8.767,5.988c-0.539,2.857-1.305,5.692-2.28,8.428    c-1.392,3.905,0.645,8.2,4.551,9.593c0.833,0.297,1.685,0.438,2.522,0.438c3.084,0,5.976-1.916,7.072-4.988    c1.237-3.47,2.21-7.067,2.893-10.692C511.908,415.81,509.226,411.884,505.152,411.118z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M509.612,386.984c-1.018-3.545-2.324-7.037-3.886-10.384c-1.754-3.758-6.218-5.382-9.979-3.63    c-3.757,1.754-5.382,6.221-3.629,9.979c1.23,2.635,2.26,5.387,3.061,8.177c0.945,3.293,3.949,5.439,7.213,5.439    c0.687,0,1.383-0.095,2.075-0.293C508.452,395.127,510.755,390.969,509.612,386.984z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M404.399,335.489h-9.916c-4.147,0-7.508,3.362-7.508,7.508c0,4.147,3.36,7.508,7.508,7.508h9.916    c4.147,0,7.508-3.36,7.508-7.508C411.907,338.851,408.546,335.489,404.399,335.489z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M370.668,463.134c-0.012,0-0.023,0-0.035,0l-9.916,0.045c-4.146,0.018-7.492,3.396-7.474,7.542    c0.019,4.135,3.377,7.474,7.507,7.474c0.012,0,0.023,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542    C378.157,466.473,374.798,463.134,370.668,463.134z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M444.395,335.561c-1.062-0.048-2.138-0.071-3.196-0.071h-7.051c-4.147,0-7.508,3.362-7.508,7.508    c0,4.147,3.36,7.508,7.508,7.508h7.051v-0.001c0.849,0,1.693,0.019,2.532,0.056c0.113,0.006,0.226,0.008,0.338,0.008    c3.993,0,7.317-3.146,7.494-7.175C451.746,339.25,448.537,335.744,444.395,335.561z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M410.333,462.955c-0.012,0-0.023,0-0.035,0L400.382,463c-4.146,0.018-7.492,3.396-7.474,7.542    c0.019,4.135,3.377,7.474,7.507,7.474c0.012,0,0.024,0,0.035,0l9.916-0.045c4.146-0.019,7.492-3.396,7.474-7.542    C417.822,466.293,414.464,462.955,410.333,462.955z">
                    </path>
                  </g>
                </g>
              </svg>
              <p>Travel & Hospitality</p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="serv">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Capa_16" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480"
                xml:space="preserve" width="60px" height="60px" fill="#faca0a">
                <g>
                  <g>
                    <path
                      d="M339.904,161.776l-5.136-16.904c-6.524-19.202-27.379-29.479-46.581-22.955c-10.802,3.67-19.285,12.153-22.955,22.955    l-5.136,16.904c-4.322,14.256-5.229,29.329-2.648,44c2.354,12.352,10.196,22.964,21.312,28.84L273.008,363.2    c-0.77,7.177,1.558,14.342,6.4,19.696c10.413,11.39,28.089,12.182,39.479,1.769c0.616-0.563,1.206-1.153,1.769-1.769    c4.734-5.202,7.058-12.157,6.4-19.16L321.272,234.6c11.101-5.879,18.93-16.484,21.28-28.824    C345.133,191.105,344.226,176.032,339.904,161.776z M326.792,202.992c-1.732,8.874-8.056,16.155-16.6,19.112    c-3.243,1.219-5.332,4.387-5.176,7.848L311.096,365c0.28,2.649-0.594,5.29-2.4,7.248c-4.817,4.769-12.575,4.769-17.392,0    c-1.896-2.116-2.757-4.964-2.352-7.776l6.032-134.52c0.156-3.461-1.933-6.629-5.176-7.848c-8.544-2.957-14.868-10.238-16.6-19.112    c-2.14-12.18-1.386-24.693,2.2-36.528l5.136-16.912c3.974-10.745,15.906-16.234,26.652-12.26c5.681,2.101,10.159,6.58,12.26,12.26    l5.136,16.912C328.174,178.3,328.928,190.812,326.792,202.992z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M216,120c-4.418,0-8,3.582-8,8v68.688l-21.656,21.656c-1.602,1.596-2.454,3.797-2.344,6.056l7,140    c0.167,3.019-0.929,5.972-3.024,8.152c-4.379,4.418-11.511,4.45-15.93,0.07c-0.024-0.023-0.047-0.047-0.07-0.07    c-2.096-2.18-3.191-5.133-3.024-8.152l7.048-140c0.112-2.258-0.737-4.458-2.336-6.056L152,196.688V128c0-4.418-3.582-8-8-8    s-8,3.582-8,8v72c0,2.122,0.844,4.156,2.344,5.656l21.488,21.496l-6.824,136.472c-0.726,14.907,10.77,27.581,25.677,28.307    c14.907,0.726,27.581-10.77,28.307-25.677c0.043-0.876,0.043-1.753,0-2.629l-6.824-136.472l21.488-21.496    c1.5-1.5,2.344-3.534,2.344-5.656v-72C224,123.582,220.418,120,216,120z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M168,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C176,123.582,172.418,120,168,120z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M192,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C200,123.582,196.418,120,192,120z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M240,0C107.452,0,0,107.452,0,240s107.452,240,240,240s240-107.452,240-240C479.85,107.514,372.486,0.15,240,0z M240,464    C116.288,464,16,363.712,16,240S116.288,16,240,16s224,100.288,224,224C463.859,363.653,363.653,463.859,240,464z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M265.969,390.172c-0.429-4.397-4.342-7.614-8.74-7.185c-0.103,0.01-0.206,0.022-0.309,0.036l0.032-0.008    c-11.263,1.308-22.641,1.308-33.904,0c-4.39-0.515-8.365,2.626-8.88,7.016c-0.515,4.39,2.626,8.365,7.016,8.88    c12.491,1.459,25.109,1.459,37.6,0C263.181,398.483,266.398,394.57,265.969,390.172z">
                    </path>
                  </g>
                  <g>
                    <path
                      d="M362.4,136.912c-2.839-3.385-7.885-3.828-11.27-0.988c-0.011,0.009-0.022,0.019-0.034,0.028    c-3.377,2.848-3.807,7.894-0.96,11.272c48.235,57.26,44.545,141.929-8.488,194.776c-3.13,3.119-3.139,8.186-0.02,11.316    c3.119,3.13,8.186,3.139,11.316,0.02C411.881,294.623,415.991,200.541,362.4,136.912z">
                    </path>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M186.392,105.744c-0.005,0-0.01-0.001-0.015-0.001c-0.008,0-0.016,0.001-0.025,0.001H186.392z">
                      </path>
                      <path
                        d="M277.736,84.472c-31.265-7.493-64.055-5.479-94.168,5.784c-4.136,1.555-6.227,6.169-4.672,10.304     c1.172,3.117,4.152,5.18,7.481,5.183c0.957-0.005,1.905-0.18,2.799-0.519c27.118-10.141,56.646-11.952,84.8-5.2     c4.295,1.038,8.618-1.601,9.656-5.896C284.67,89.833,282.031,85.51,277.736,84.472z">
                      </path>
                    </g>
                  </g>
                  <g>
                    <path
                      d="M137.992,341.6C111.023,314.677,95.908,278.108,96,240c-0.079-30.446,9.565-60.122,27.528-84.704    c2.655-3.532,1.944-8.547-1.588-11.202s-8.547-1.944-11.202,1.588c-0.047,0.063-0.093,0.126-0.138,0.19    c-46.253,63.588-39.447,151.359,16.056,207.056c3.128,3.13,8.202,3.132,11.332,0.004C141.118,349.804,141.12,344.73,137.992,341.6    z">
                    </path>
                  </g>
                </g>
              </svg>
              <p>Food & Restaurant</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="headingst mt_cstm">
              <span>
                Business Trusting
              </span>
              <h5>
                Our Services
              </h5>
            </div>
          </div>
          <div class="col-md-9">
            <div class="trstpartner_slider">

              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">


                  <div class="item active">

                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/DA VINCI BEARD.jpg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/DYAWS.jpg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/BOXO MACHINES.jpg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/NH POLY.jpg" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>


                  <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c5.jpg" alt="c5" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c6.jpg" alt="c6" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c7.jpg" alt="c7" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c8.jpg" alt="c8" style="width:100%;">
                      </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/FIT-X1.jpg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/Fanbois Collectors.jpg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/desla trademark.jpg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/IGNEUS SCIENTIFIC.jpg" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/gont.png" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/desire.png" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/keyaseth.png" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/aarogya_logo_1.png" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/AD AUSWAVE DEVELOPERS.jpg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c3.jpg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c1.jpg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c2.jpg" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>
                  <div class="item">

                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/jft trademark legaltax.jpg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c4.jpg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/OBELLO LUXURY SALON.jpg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/topfur trademark legal tax.jpg" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>
                  <div class="item">

                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c9.jpeg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c10.jpeg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c11.jpeg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c12.jpeg" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>

                  <div class="item">

                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c13.jpeg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c14.jpeg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c15.jpeg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c16.jpeg" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>

                  <div class="item">

                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c17.jpeg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c18.jpeg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c19.jpeg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c20.jpeg" alt="c4" style="width:100%;">
                      </div>
                    </div>
                  </div>
                  <div class="item">

                    <div class="row">
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c21.jpeg" alt="c1" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c22.jpeg" alt="c2" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c23.jpeg" alt="c3" style="width:100%;">
                      </div>
                      <div class="col-md-3 col-sm-6 col-xs-6">
                        <img src="img/c24.jpeg" alt="c4" style="width:100%;">
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
      </div>
    </section>
    <section class="why_chs_us">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="headingst">
              <span>
                Why Choose
              </span>
              <h5>
                LegalTax?
              </h5>
              <p>
                Our primary focus is towards assisting the clients with navigating the legal and the regulatory
                requirements that are related to business. With this purpose, our primary goal is to become the
                â€œpartner of choiceâ€ for the assistance related to company registration and business management in
                India.
              </p>
            </div>
            <div class="why_img">
              <img src="img/why_choose.png" alt="why_choose">
            </div>
          </div>
          <div class="col-md-7">

            <div class="row">
              <div class="col-md-6">
                <div class="wc_containr" style="border-top: 5px solid #ff0072;">
                  <div class="wc_lft">
                    <img src="img/price.svg" alt="price">
                  </div>
                  <div class="wc_rgt">
                    <p>No Hidden Fees</p>
                    <p>
                      Everything is explained to you with no hidden charges or conditions.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="wc_containr" style="border-top: 5px solid #0c95ff;">
                  <div class="wc_lft">
                    <img src="img/expert.svg" alt="expert">
                  </div>
                  <div class="wc_rgt">
                    <p>Expert CA/CS/Advocate Assistance</p>
                    <p>
                      Prompt response from our in-house expert professionals.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="wc_containr" style="border-top: 5px solid #056400;">
                  <div class="wc_lft">
                    <img src="img/support.svg" alt="support">
                  </div>
                  <div class="wc_rgt">
                    <p>Guaranteed Satisfaction</p>
                    <p>
                      We make sure that you stay 100% satisfied with our offered services.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="wc_containr" style="border-top: 5px solid #00ff8a;">
                  <div class="wc_lft">
                    <img src="img/shield.png" alt="price">
                  </div>
                  <div class="wc_rgt">
                    <p>Confidential & Safe</p>
                    <p>
                      All your private information is safe with us and no shared with anyone.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="wc_containr" style="border-top: 5px solid #83d7f9;">
                  <div class="wc_lft">
                    <img src="img/time.png" alt="price">
                  </div>
                  <div class="wc_rgt">
                    <p>Ontime Services</p>
                    <p>
                      We try to provide our customer ontime services everytime.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="wc_containr" style="border-top: 5px solid #e9ff2f;">
                  <div class="wc_lft">
                    <img src="img/payment-method.png" alt="price">
                  </div>
                  <div class="wc_rgt">
                    <p>Flexible Payments</p>
                    <p>
                      We provide our customers options to make payments flexibly.
                    </p>
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
      include_once ('blog_section.php');
      ?>
    </section>


    <section>
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="headingst text-center">
            <span>
              We are
            </span>
            <h5>
              associated with
            </h5>
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
    <section>
      <?php
      include_once ("testimonials.php");
      ?>
    </section>

    <!--<nav class="social">-->
    <!--  <ul>-->
    <!--    <li class="facebook"><a href="tel:+91 9711939395">Call Us<i class="fa fa-phone" aria-hidden="true"></i></a></li>-->
    <!--    <li class="facebook"><a href="mailto:info@legaltax.in">Mail<i class="fa fa-envelope" aria-hidden="true"></i></a></li>-->
    <!--    <li class="facebook"><a href="https://api.whatsapp.com/send?phone=919313454647&text=Contact%20Us%20on%20WhatsApp" target="_blank">Chat<i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>-->
    <!--  </ul>-->
    <!--</nav>-->






  </main>

  <!-- footer -->
  <?php
  include_once ('footer.php');
  ?>
  <!-- footer -->
  <!-- GetButton.io widget
  <script type="text/javascript">
    (function() {
      var options = {
        whatsapp: "+91 9711939395", // WhatsApp number
        call_to_action: "Message us", // Call to action
        position: "left", // Position may be 'right' or 'left'
      };
      var proto = document.location.protocol,
        host = "getbutton.io",
        url = proto + "//static." + host;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = url + '/widget-send-button/js/init.js';
      s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);
      };
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    })();
  </script>
   -->
  <!-- /GetButton.io widget -->

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5bc35b5361d0b770925136e4/1h3e75am7';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="js/custom.js" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>

</body>

</html>