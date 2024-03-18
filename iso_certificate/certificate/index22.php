<?php
require_once('./include/model.php');
require_once('./include/include-design.php');



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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Iso Certificate</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 ">
                <a href="?type=formdata"><button class="btn btn-primary mb-5">Form</button></a>
                <a href="?type=certificate"><button class="btn btn-primary mb-5">Certificate</button></a>
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
                            <select name="isotype"  class="form-control">
                                <option value="iso1">ISO 1</option>
                                <option value="iso2">ISO 2</option>
                                <option value="iso3">ISO 3</option>
                                <option value="iso4">ISO 4</option>
                                <option value="iso5">ISO 5</option>
                                <option value="iso6">ISO 6</option>
                            </select>

                            <label for="name">Certificate Number</label>
                            <input type="number" name="cernumber" id="" class="form-control" placeholder="enter certificate number">
                            <button class="btn btn-success mt-3" type="submit">Submit</button>

                        </form>
                    </div>

                <?php
                } elseif ($type == "certificate") {
                ?>



                    <?php
                    foreach (listformdata('id') as $value) {
                    ?>

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

                                <div class="row">
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
                    <?php
                    }
                    ?>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>