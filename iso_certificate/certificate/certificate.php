<?php
require_once('./include/model.php');
require_once('./include/include-design.php');
require_once('./include/constant.php');
require_once('./include/connection.php');



$type = isset($_GET['type']) ? $_GET['type'] : '';

if ($type == 'insertData') {
    $message = certicatedata();
    if ($message['status']) {
        header('Location:index.php?type=certificate&message=' . $message['message']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iso Certificate</title>
    <link rel="stylesheet" href="<?= $bootstrap_min; ?>">
    <link rel="stylesheet" href="<?= $my_css; ?>">
    <link rel="stylesheet" href="<?= $font_awes; ?>">
    <script src="<?= $boot_js; ?>"></script>
    <script src="<?= $jquery_min; ?>"></script>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>
    <?php
    foreach (listformdata($_GET['id']) as $value) {
    ?>
        <div class="certificate">
            <div class="side_img"></div>
            <div class="right_content">

                <div class="top_logo">
                    <img src="Images/logo.png" alt="logo">
                </div>

                <h1>Certificate Of Registration</h1>
                <span>This is to certify that</span>

                <h3 id="businesname"><?= $value['businesname'] ?></h3>
                <p id="adres" style="font-size: 20px ;"><?= $value['iaddress'] ?></p>

                <p>has been independently assessed by QRO <br>
                    and is compliant with the requirement of</p>


                <p id="isot"><?= $value['isotype'] ?></p>

                <p>Quaity Management System</p>

                <p>
                    <b>
                        For the following scope of activities:
                    </b>
                </p>

                <p class="indusinfo">
                    <?= $value['activities']; ?>
                </p>
<div class="datesection">


                <div class="row"  >
                    <div class="col-md-6">
                        <p>
                            Date of certification :<br> <span>
                                <?php
                                $date = strtotime($value['curtdate']);
                                ?>
                               <?= date('d', $date) ?> <?= date('M', $date) ?> <?= date('Y', $date) ?>
                            </span>
                        </p>
                        <p>
                            1st serveillance audit due : <br> <span>
                                <?php
                                $date = strtotime($value['fstdate']);
                                ?>
                               <?= date('d', $date) ?> <?= date('M', $date) ?> <?= date('Y', $date) ?>
                            </span>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            1st serveillance audit due : <br> <span>
                                <?php
                                $date = strtotime($value['ssdate']);
                                ?>
                              <?= date('d', $date) ?> <?= date('M', $date) ?> <?= date('Y', $date) ?>
                            </span>
                        </p>
                        <p>
                            certifiacate expiry : <br><span>
                                <?php
                                $date = strtotime($value['expdate']);
                                ?>
                               <?= date('d', $date) ?> <?= date('M', $date) ?> <?= date('Y', $date) ?>
                            </span>
                        </p>
                    </div>
                </div>
                </div>
                <p><?= $value['cernumber'] ?></p>


                <div class="btm_content">
                    <img src="Images/btm-img.png" alt="" class="img-responsive" width="80%">

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam eligendi itaque molestiae ipsam quos dolores quis tenetur eius unde.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam eligendi itaque molestiae ipsam quos dolores quis
                    </p>
                </div>


            </div>
        </div>
    <?php
    }
    ?>

</body>

</html>