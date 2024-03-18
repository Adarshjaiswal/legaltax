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
    <?= web_header() ?>
    <section>
        <div class="container-fluid" style="margin: 0px; padding: 0px;">
            <div class="row ">
                <div class="col-md-3">
                    <?= sideMenu() ?>
                </div>
                <div class="col-md-9">
                    <div class="dsh_content">
                        <?php
                        if ($type == "formdata") {
                        ?>

                            <div class="certificate_details jumbotron">

                                <h2 class="text-center">Certificate Details</h2>
                                <span class="badge badge-danger"><?= @$_GET['message'] ?></span>
                                <form action="?type=insertData" method="post">
                                    <label for="name">Business Name</label>
                                    <input type="text" name="businesname" id="" class="form-control" placeholder="enter business name">

                                    <label for="address">Address</label>
                                    <input type="text" name="iaddress" id="" class="form-control" placeholder="enter address">

                                    <label for="iso">Select ISO</label>
                                    <select name="isotype" class="form-control">
                                        <option value="iso1">ISO 1</option>
                                        <option value="iso2">ISO 2</option>
                                        <option value="iso3">ISO 3</option>
                                        <option value="iso4">ISO 4</option>
                                        <option value="iso5">ISO 5</option>
                                        <option value="iso6">ISO 6</option>
                                    </select>



                                    <label for="name">Scop Of Activities</label>
                                    <input type="text" name="activities" class="form-control" placeholder="Enter scope of activities">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name">Date of certification</label>
                                            <input type="date" name="curtdate" id="" class="form-control" placeholder="Enter date">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="name">1st serveillance audit due</label>
                                            <input type="date" name="fstdate" id="" class="form-control" placeholder="Enter date">
                                        </div>


                                        <div class="col-md-6">
                                            <label for="name">2nd serveillance audit due</label>
                                            <input type="date" name="ssdate" id="" class="form-control" placeholder="Enter date">
                                        </div>


                                        <div class="col-md-6">
                                            <label for="name">Certificate expiry</label>
                                            <input type="date" name="expdate" id="" class="form-control" placeholder="Enter date">
                                        </div>
                                    </div>

                                    <label for="name">Certificate Number</label>
                                    <input type="number" name="cernumber" id="" class="form-control" placeholder="Enter certificate number">

                                    <button class="btn btn-success mt-3" type="submit">Submit</button>

                                </form>
                            </div>

                        <?php
                        } elseif ($type == "certificate") {
                        ?>


                            <div class="row">
                                <?php
                                foreach (listform('id') as $value) {
                                ?>

                                    <div class="col-md-4 mt-5">
                                        <a href="certificate.php?id='<?= $value['id'] ?>'">
                                            <div class="certificate_boxes">
                                                <div class="certificatee">
                                                    <div class="right_content">
                                                        <h3 id="businesname"><?= $value['businesname'] ?></h3>
                                                        <p id="adres" style="font-size: 40px ;"><?= $value['iaddress'] ?></p>
                                                    </div>

                                                    <div class="dateofreg">
                                                        <?php
                                                        $date = strtotime($value['certificatedate']);
                                                        ?>
                                                        <p><?= date('d', $date) ?> <?= date('M', $date) ?> <?= date('Y', $date) ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </a>
                            </div>
                        <?php
                                }
                        ?>
                    </div>
                <?php
                        } elseif ($type == "searchcertificate") {


                ?>
                    <div class="serc_cer jumbotron">
                        <form action="?type=serch" method="post">
                            <label for="ser">Search by certificate number</label>
                            <input type="number" placeholder="enter certificate number" class="form-control" name="blogSearch" min='0'>

                            <input type="submit" value="submit" class="btn btn-primary mt-3" name="submit">

                        </form>
                    </div>

                <?php
                        }
                ?>



                <div class="row">
                    <?php
                    foreach (leastserchcerticate('id') as $value) {
                    ?>

                        <div class="col-md-4 mt-5">
                            <a href="certificate.php?id='<?= $value['id'] ?>'">
                                <div class="certificate_boxes">
                                    <div class="certificate">
                                        <div class="side_img"></div>
                                        <div class="right_content">

                                            <div class="top_logo">
                                                <img src="Images/logo.jpg" alt="" class="float-right">
                                            </div>

                                            <h1>Certificate Of Registration</h1>
                                            <span>This is to certify that</span>

                                            <h3 id="businesname"><?= $value['businesname'] ?></h3>
                                            <p id="adres" style="font-size: 40px ;"><?= $value['iaddress'] ?></p>

                                            <p>has been independently assessed by QRO <br>
                                                and is compliant with the requirement of</p>


                                            <p><?= $value['isotype'] ?></p>

                                            <p>Quaity Management System</p>

                                            <p>
                                                <b>
                                                    For the following scope of activities:
                                                </b>
                                            </p>

                                            <p class="">
                                                IT Functions of Information Technology Department at its Corporate Office, 6 Circle
                                                offices together with one Division Office and one ERO office for each Circle
                                            </p>

                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <p>
                                                        Date of certification : <span>ssdsf</span>
                                                    </p>
                                                    <p>
                                                        1st serveillance audit due : <span>ssdsf</span>
                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        1st serveillance audit due : <span>ssdsf</span>
                                                    </p>
                                                    <p>
                                                        certifiacate expiry : <span></span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p><?= $value['cernumber'] ?></p>


                                            <div class="btm_content">
                                                <img src="Images/btm-img.jpg" alt="" class="img-responsive" width="80%">

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam eligendi itaque molestiae ipsam quos dolores quis tenetur eius unde.
                                                </p>

                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error laboriosam eligendi itaque molestiae ipsam quos dolores quis
                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                    <?php
                    }
                    ?>
                </div>


                </div>
            </div>



        </div>
        </div>











    </section>



</body>

</html>