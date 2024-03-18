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
    include_once('head.php')
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="<?= $bootstrap_min; ?>">
    <link rel="stylesheet" href="<?= $my_css; ?>">
    <link rel="stylesheet" href="<?= $responsive_css; ?>">
    <script src="<?= $jquery_min; ?>"></script>
    <script src="<?= $boot_js; ?>"></script>
     
     <link rel="stylesheet" href="css/style.css">


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
        include_once('header.php')
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="privacyP">
                       

                        <h1>PRIVACY POLICY</h1>

                        <p>
                            Legal tax privacy terms - Please read this Privacy Policy carefully by using the Website, you indicate that you understand, agree and consent to this Privacy Policy. <b></b>. <br><br>
                            This Privacy Policy is an electronic record in the form of an electronic contract formed under the
                            Information Technology Act, 2000 and the rules made thereunder and the amended provisions
                            pertaining to electronic documents / records in various statutes as amended by the Information
                            Technology Act, 2000. This Privacy Policy does not require any physical, electronic or digital signature.
                            This Privacy Policy is a legally binding document between you and <b>LEGALTAX</b>. The terms of this
                            Privacy Policy will be effective upon your acceptance of the same (directly or indirectly in electronic
                            form, by clicking on <b>I accept</b> tab or by use of the website or by other means) and will govern the
                            relationship between you and <b>LEGALTAX</b> for your use of the website <b>“Website”</b> (defined below).
                            This document is published and shall be construed in accordance with the provisions of the Information
                            Technology (reasonable security practices and procedures and sensitive personal data of information)
                            rules, 2011 under Information Technology Act, 2000; that require publishing of the Privacy Policy for
                            collection, use, storage and transfer of sensitive personal data or information. <br><br>
                            Please read this Privacy Policy carefully by using the Website, you indicate that you understand, agree
                            and consent to this Privacy Policy. If you do not agree with the terms of this Privacy Policy, please do
                            not use this Website. <br><br>
                            By providing us your Information or by making use of the facilities provided by the Website, You hereby
                            consent to the collection, storage, processing and transfer of any or all of Your Personal Information
                            and Non-Personal Information by us as specified under this Privacy Policy. You further agree that
                            such collection, use, storage and transfer of Your Information shall not cause any loss or wrongful gain
                            to you or any other person.
                        </p>

                        <h2>
                            USER INFORMATION
                        </h2>

                        <p>
                            To avail certain services on our Websites, users are required to provide certain information for the
                            registration process namely: – a) Your name, b) Email address, c) Sex, d) age, e) PIN code, f) credit
                            card or debit card details g) medical records and history h) sexual orientation, i) biometric information,
                            j) password etc., and / or your occupation, interests, and the like. The Information as supplied by the
                            users enables us to improve our sites and provide you the most user-friendly experience. <br><br>
                            All required information is service dependent and we may use the above said user information to,
                            maintain, protect, and improve its services (including advertising services) and for developing new
                            services
                            Such information will not be considered as sensitive if it is freely available and accessible in the public
                            domain or is furnished under the Right to Information Act, 2005 or any other law for the time being in
                            force. <br><br>
                            The visitor, who is expressing interest in our service by filling up our service form, is asked for
                            agreement to be contacted by any available means of communication, such as SMS/email/telephonic
                            calls.
                        </p>

                        <h1>COOKIES</h1>
                        <p>
                            To improve the responsiveness of the sites for our users, we may use “cookies”, or similar electronic
                            tools to collect information to assign each visitor a unique, random number as a User Identification
                            (User ID) to understand the user’s individual interests using the Identified Computer. Unless you
                            voluntarily identify yourself (through registration, for example), we will have no way of knowing who
                            you are, even if we assign a cookie to your computer. The only personal information a cookie can
                            contain is information you supply (an example of this is when you ask for our Personalized Horoscope).
                            A cookie cannot read data off your hard drive. Our advertisers may also assign their own cookies to
                            your browser (if you click on their ads), a process that we do not control.<br><br>
                            Our web servers automatically collect limited information about your computer’s connection to the
                            Internet, including your IP address, when you visit our site. (Your IP address is a number that lets
                            computers attached to the Internet know where to send you data — such as the web pages you view.)
                            Your IP address does not identify you personally. We use this information to deliver our web pages to
                            you upon request, to tailor our site to the interests of our users, to measure traffic within our site and
                            let advertisers know the geographic locations from where our visitors come.

                        </p>

                        <h2>LINKS TO THE OTHER SITES
                        </h2>

                        <p>
                            Our policy discloses the privacy practices for our own web site only. Our site provides links to other
                            websites also that are beyond our control. We shall in no way be responsible in way for your use of
                            such sites.

                        </p>

                        <h2>
                            INFORMATION SHARING

                        </h2>
                        <i>
                            We shares the sensitive personal information to any third party without obtaining the prior consent of
                            the user in the following limited circumstances:
                        </i>
                        <ul>
                            <li>
                                <p>
                                    When it is requested or required by law or by any court or governmental agency or authority to
                                    disclose, for the purpose of verification of identity, or for the prevention, detection, investigation
                                    including cyber incidents, or for prosecution and punishment of offences. These disclosures are made
                                    in good faith and belief that such disclosure is reasonably necessary for enforcing these Terms; for
                                    complying with the applicable laws and regulations.

                                </p>
                            </li>

                            <li>
                                <p>
                                    We propose to share such information within its group companies and officers and employees of
                                    such group companies for the purpose of processing personal information on its behalf. We also
                                    ensure that these recipients of such information agree to process such information based on our
                                    instructions and in compliance with this Privacy Policy and any other appropriate confidentiality and
                                    security measures.

                                </p>
                            </li>
                        </ul>

                        <h2>INFORMATION SECURITY</h2>
                        <p>
                            We take appropriate security measures to protect against unauthorized access to or unauthorized
                            alteration, disclosure or destruction of data. These include internal reviews of our data collection,
                            storage and processing practices and security measures, including appropriate encryption and
                            physical security measures to guard against unauthorized access to systems where we store personal
                            data. <br><br>
                            All information gathered on our Website is securely stored within our controlled database. The
                            database is stored on servers secured behind a firewall; access to the servers is password-protected
                            and is strictly limited. However, as effective as our security measures are, no security system is
                            impenetrable. We cannot guarantee the security of our database, nor can we guarantee that
                            information you supply will not be intercepted while being transmitted to us over the Internet. And, of
                            course, any information you include in a posting to the discussion areas is available to anyone with
                            Internet access.<br><br>
                            However, the internet is an ever-evolving medium. We may change our Privacy Policy from time to
                            time to incorporate necessary future changes. Of course, our use of any information we gather will
                            always be consistent with the policy under which the information was collected, regardless of what the
                            new policy may be.

                        </p>

                        <h1>TERMS AND CONDITIONS</h1>

                        <p>
                            LEGALTAX is operated by <b>Plot no. 44 Pocket B/10, Dwarka Sector 13, 110075, India.</b> By visiting
                            our website and accessing the information, resources, services, products, and tools we provide, you
                            understand and agree to accept and adhere to the following terms and conditions as stated in this
                            policy (hereafter referred to as ‘User Agreement’), along with the terms and conditions as stated in our
                            Privacy Policy (please refer to the Privacy Policy section below for more information). <br><br>
                            We reserve the right to change this User Agreement from time to time without notice. You acknowledge
                            and agree that it is your responsibility to review this User Agreement periodically to be familiar yourself
                            with any modifications. Your continued use of this site after such modifications will constitute
                            acknowledgment and agreement of the modified terms and conditions.

                        </p>

                        <h2>RESPONSIBLE USE AND CONDUCT</h2>

                        <ul>
                            <li>
                                <p>
                                    In order to access our Resources, you may be required to provide certain information about yourself
                                    (such as identification, email, phone number, contact details, etc.) as part of the registration process,
                                    or as part of your ability to use the Resources. You agree that any information you provide will always
                                    be accurate, correct, and up to date.
                                </p>
                            </li>

                            <li>
                                <p>
                                    You are responsible for maintaining the confidentiality of any login information associated with any
                                    account you use to access our Resources. Accordingly, you are responsible for all activities that occur
                                    under your accounts.

                                </p>
                            </li>

                            <li>
                                <p>
                                    Accessing (or attempting to access) any of our Resources by any means other than through the means
                                    we provide, is strictly prohibited. You specifically agree not to access (or attempt to access) any of our
                                    Resources through any automated, unethical or unconventional means.

                                </p>
                            </li>

                            <li>
                                <p>
                                    Engaging in any activity that disrupts or interferes with our Resources, including the servers and/or
                                    networks to which our Resources are located or connected, is strictly prohibited.

                                </p>
                            </li>

                            <li>
                                <p>
                                    Attempting to copy, duplicate, reproduce, sell, trade, or resell our resources is strictly prohibited.
                                </p>
                            </li>

                            <li>
                                <p>
                                    You are solely responsible any consequences, losses, or damages that we may directly or indirectly
                                    incur or suffer due to any unauthorized activities conducted by you, as explained above, and may incur
                                    criminal or civil liability.

                                </p>
                            </li>

                            <li>
                                <p>
                                    We may provide various open communication tools on our website, such as blog comments, blog
                                    posts, public chat, forums, message boards, newsgroups, product ratings and reviews, various social
                                    media services, etc. You understand that generally we do not pre-screen or monitor the content posted
                                    by users of these various communication tools, which means that if you choose to use these tools to
                                    submit any type of content to our website, then it is your personal responsibility to use these tools in a
                                    responsible and ethical manner. By posting information or otherwise using any open communication
                                    tools as mentioned, you agree that you will not upload, post, share, or otherwise distribute any content
                                    that:
                                </p>
                            </li>

                            <li>
                                <p>
                                    is illegal, threatening, defamatory, abusive, harassing, degrading, intimidating, fraudulent, deceptive,
                                    invasive, racist, or contains any type of suggestive, inappropriate, or explicit language;

                                </p>
                            </li>

                            <li>
                                <p>
                                    Infringes on any trademark, patent, trade secret, copyright, or other proprietary right of any party;

                                </p>
                            </li>

                            <li>
                                <p>
                                    Contains any type of unauthorized or unsolicited advertising;

                                </p>
                            </li>

                            <li>
                                <p>
                                    We have the right at our sole discretion to remove any content that, we feel in our judgment does not
                                    comply with this User Agreement, along with any content that we feel is otherwise objectionable,
                                    offensive, inaccurate, harmful, or violates any 3rd party copyrights or trademarks. We are not
                                    responsible for any delay or failure in removing such content. If you post content that we choose to
                                    remove, you hereby consent to such removal, and consent to waive any claim against us.
                                </p>
                            </li>

                            <li>
                                <p>
                                    We do not assume any liability for any content posted by you or any other 3rd party users of our
                                    website. However, any content posted by you using any open communication tools on our website,
                                    provided that it doesn’t violate or infringe on any 3rd party copyrights or trademarks, becomes the
                                    property of <a href="www.legaltax.in">www.legaltax.in</a>, and as such, gives us a perpetual, irrevocable, worldwide, royalty-free,
                                    exclusive license to reproduce, modify, adapt, translate, publish, publicly display and/or distribute as
                                    we see fit. This only refers and applies to content posted via open communication tools as described,
                                    and does not refer to information that is provided as part of the registration process, necessary in order
                                    to use our Resources. All information provided as part of our registration process is covered by our
                                    Privacy Policy.

                                </p>
                            </li>

                            <li>
                                <p>
                                    You agree to indemnify and hold harmless legaltax.in, a digital property of <b>LEGALTAX</b> Services and
                                    affiliates, and their directors, officers, managers, employees, donors, agents, and licensors, from and
                                    against all losses, expenses, damages and costs, including reasonable attorneys’ fees, resulting from
                                    any violation of this User Agreement or the failure to fulfill any obligations relating to your account
                                    incurred by you or any other person using your account. We reserve the right to take over the exclusive
                                    defense of any claim for which we are entitled to indemnification under this User Agreement. In such
                                    event, you shall provide us with such cooperation as is reasonably requested by us.

                                </p>
                            </li>


                        </ul>

                        <h2>PRIVACY</h2>

                        <ul>
                            <li>
                                <p>
                                    Your privacy is very important to us, which is why we’ve created a separate Privacy Policy in order to
                                    explain in detail how we collect, manage, process, secure, and store your private information. Our
                                    privacy policy is included under the scope of this User Agreement.
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>LIMITATION OF WARRANTIES <br>
                                    </b>
                                    By using our website, you understand and agree that all Resources we provide are “as is” and “as
                                    available”. This means that we do not represent or warrant to you that:
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        LIMITATION OF LIABILITY
                                    </b>
                                    <br>
                                    In conjunction with the Limitation of Warranties as explained above, you expressly understand and
                                    agree that any claim against us shall be limited to the amount you paid, if any, for use of products
                                    and/or services. www.legaltax.in will not be liable for any direct, indirect, incidental,
                                    consequential or exemplary loss or damages which may be incurred by you as a result of using our
                                    Resources, or as a result of any changes, data loss or corruption, cancellation, loss of access, or
                                    downtime to the full extent that applicable limitation of liability laws apply.

                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        COPYRIGHTS / TRADEMARKS
                                    </b>
                                    <br>
                                    All content and materials available on wwwlegaltax.in, including but not limited to text,
                                    graphics, website name, code, images and logos are the intellectual property of LEGALTAX, and are
                                    protected by applicable copyright and trademark law. Any inappropriate use, including but not limited
                                    to the reproduction, distribution, display or transmission of any content on this site is strictly prohibited,
                                    unless specifically authorized by LEGALTAX.

                                </p>
                            </li>

                            <li>
                                <p>
                                    TAT of the services provided by us: We follow first come first serve model.

                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        TERMINATION OF USE
                                    </b>
                                    <br>
                                    You agree that we may, at our sole discretion, suspend or terminate your access to all or part of our
                                    website and Resources with or without notice and for any reason, including, without limitation, breach
                                    of this User Agreement. Any suspected illegal, fraudulent or abusive activity may be grounds for
                                    terminating your relationship and may be referred to appropriate law enforcement authorities. Upon
                                    suspension or termination, your right to use the resources we provide will immediately cease, and we
                                    reserve the right to remove or delete any information that you may have on file with us, including any
                                    account or login information.
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        GOVERNING LAW
                                    </b>
                                    <br>
                                    This website is controlled by LEGALTAX from our office located in the state of DELHI, India. It can be
                                    accessed by most countries around the world. As each country has laws that may differ from those of
                                    Delhi, India by accessing our website, you agree that the statutes and laws of Delhi, India without
                                    regard to the conflict of laws and the United Nations Convention on the International Sales of Goods,
                                    will apply to all matters relating to the use of this website and the purchase of any products or services
                                    through this site.
                                </p>
                            </li>

                            <li>
                                <p>
                                    Furthermore, any action to enforce this User Agreement shall be brought in the state courts located in
                                    Delhi, India. You hereby agree to personal jurisdiction by such courts, and waive any jurisdictional,
                                    venue, or inconvenient forum objections to such courts.
                                </p>
                            </li>

                            <li>
                                <p>
                                    Priority Service: If you have any urgency then you can take our priority service by paying only Rs.499/-
                                    extra + GST with the service fee. Our average respond time of priority service is only 10 Minutes to 24
                                    business hours.
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        CONSUMER COMPLAINT SERVICE

                                    </b>
                                    <br>
                                    No one can give 100% guarantee that the complaint will be resolved as it depends on the situation of
                                    the company but we will try our level best to solve the matter to the last extent. In maximum cases we
                                    have resolved but in some conditions we cannot provide the guarantee to the consumer. But most of
                                    the companies try to solve the issues. If the company still on that note does not look into the issue
                                    then in that case we will give you the prepared draft of the complaint and you can approach to the
                                    nearest consumer forum for filing of the complaint.
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        CANCELLATION AND REFUND
                                    </b>
                                    <br>
                                    Cancellation of order is not possible once the payment has been made. No refunds will be given except
                                    in the event of cancellation or non-performance of service by <b>LEGALTAX</b>. For further information,
                                    refer to the Cancellation and Refund Policy.
                                </p>
                            </li>

                            <li>
                                <p>
                                    Udyog Aadhaar <br>
                                    <b>Declaration:</b> We are not a Govt. body or portal, however, we provide legal services, GST Registration
                                    & filing, Consumer Complaint.
                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        GUARANTEE
                                    </b>
                                    <br>
                                    Unless otherwise expressed, <a href="www.legaltax.in">www.legaltax.in</a> expressly disclaims all warranties and conditions of
                                    any kind, whether express or implied, including, but not limited to the implied warranties and conditions
                                    of merchantability, fitness for a particular purpose and non-infringement.

                                </p>
                            </li>

                            <li>
                                <p>
                                    <b>
                                        CONTACT INFORMATION

                                    </b>
                                    <br>
                                    If you have any questions or comments about these our Terms of Service as outlined above, you can
                                    contact us:
                                    <br>
                                    LEGALTAX,
                                    Plot no. 44 Pocket B/10, Dwarka Sector 13, 110075, India
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
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