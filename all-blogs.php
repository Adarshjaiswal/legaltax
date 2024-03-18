<?php

use function PHPSTORM_META\type;

require_once('./include/model.php');
require_once('./include/include-design.php');
require_once('./include/constant.php');

?>
<!doctype html>
<html lang="en">
<?php
include_once('header.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 ">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="serch_bx">
                                <div class="input-group">
                                    <div class=" d-flex">
                                        <input type="text" class="form-control" style="margin: 0px; width: 100%" placeholder="Search this blog">
                                        <button class="btn btn-secondary" type="button" style="margin: 0px;">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="blg_cat">
                                <h3>All Blogs</h3>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach (listallblog('id') as $value) {
                        ?>
                            <div class="col-md-4">
                                <a href="?id=<?php echo $value['id'] ?>" style="text-decoration: none; color: #000;">
                                    <div class="blog_bxs">
                                        <div class="b_img_fx">
                                            <img src="<?= $global_upload_image . "" . $value['blogimage'] ?>" height="auto" alt="legaltax">
                                        </div>
                                        <div class="bbxstext">
                                            <span> <b>Updated:</b> <?= $value['subcatdate'] ?> </span>
                                            <h4><?= $value['sub_cat_name'] ?></h4>

                                            <button class="btn btn-primary" style="background-color: #2a3362;">Read More &raquo; </button> <span style="background-color: #293462; color: #fff; padding: 5px; border-radius: 8px; font-size: 9px;"> 
                                            <?= $value['cat_nme'] ?> </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="cat_btn">
                        <!-- <p> <i class="fa fa-bars" aria-hidden="true"></i></p> -->
                        <div class="blog_cat_list">
                            <ul>
                                <a href="all-blogs.php" style="color: #293462;">
                                    <li>&raquo; All</li>
                                </a>
                                <a href="Starting-a-Business.php" style="color: #293462;">
                                    <li>Starting a Business</li>
                                </a>
                                <a href="Intellectual-Property.php">
                                    <li> Intellectual Property</li>
                                </a>
                                <a href="Running-a-Business.php">
                                    <li> Running a Business</li>
                                </a>
                                <a href="Personal-Services.php">
                                    <li>Personal Services</li>
                                </a>
                                <a href="Taxation.php">
                                    <li>Taxation</li>
                                </a>
                                <a href="Licenses-&-Documentation.php">
                                    <li>Licenses & Documentation</li>
                                </a>
                                <a href="Legal-Services.php">
                                    <li>Legal Services</li>
                                </a>
                                <a href="Legal-Advice.php">
                                    <li>Legal Advice</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <?php
    include_once('footer.php');
    ?>

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="js/custom.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>


</body>

</html>