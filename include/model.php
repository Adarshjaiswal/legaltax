<?php
require_once('connection.php');
function cur_date()
{
    return date('Y-m-d h:i:s');
}


function signup()
{
    global $con;
    $date = cur_date();
    $name = $_POST['firstname'];
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO lt_login(name,email,password,date) VALUES('$name','$email','$password','$date')";
    if ($con->query($sql)) {
        return true;
    } else {
        return false;
    }
}


function login()
{
    global $con;
    $res = array();
    $email  = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $sql = "SELECT * FROM lt_login WHERE email='$email' AND password='$password'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res['name'] = $data['name'];
            $res['message'] = "success";
            $res['status'] = 1;
        }
        return $res;
    } else {
        $res['message'] = "Incorrect username and password";
        $res['status'] = 0;
        return $res;
    }
}
function createNewblog()
{
    global $con;
    $date = cur_date();
    $b_id = $_POST['b_id'];
    $btitle = $_POST['btitle'];
    $file_name = $_FILES['bimg']['name'];
    $blogbody  = $_POST['blogbody'];
    $ext = strtolower(pathinfo(basename($file_name), PATHINFO_EXTENSION));
    if ($ext == 'png' || $ext == "jpg" || $ext == "jpeg") {
        $upload_file_name = "IMG" . date('Ymdhis') . "." . $ext;
        $upload_url = "../uploads/" . $upload_file_name;
        move_uploaded_file($_FILES['bimg']['tmp_name'], $upload_url);
        $sql = "INSERT INTO blogtable(b_id,btitle,blogbody,bimg,Blogdate) VALUES($b_id,'$btitle','$upload_file_name','$blogbody','$date')";
        if ($con->query($sql)) {
            return array("message" => "Blog Created Successfully", "status" => true);
        } else {
            return array("message" => "Something Wrong", "status" => false);
        }
    } else {
        return array("message" => "image is not correct", "status" => false);
    }
}
function change_password()
{
}

function list_blog()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogtable where blog_status = 1";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something went wrong";
        $res['status'] = 0;
        return $res;
    }
}
function list_blogtitle()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogtable where blog_status = 1";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something went wrong";
        $res['status'] = 0;
        return $res;
    }
}

function list_blog_by_id($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogtable where id = $id";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something went wrong";
        $res['status'] = 0;
        return $res;
    }
}
function list_category()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM category";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Incorrect username and password";
        $res['status'] = 0;
        return $res;
    }
}

function list_Banner()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM ec_bannner";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Incorrect username and password";
        $res['status'] = 0;
        return $res;
    }
}


function createNewcatagory()
{
    global $con;
    $date = cur_date();
    $b_id = $_POST['b_id'];
}

//list all blogs
function listallblog($idp)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where id = $idp";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog category Business
function listblogsubCat()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 1";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog category Intellectual Property
function listblogIntellectualProperty()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 2";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//list blog category Running a Business
function listblogRunningaBusiness()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 3";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog category Personal Services
function listblogPersonalServices()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 4";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog category Personal Taxation
function listblogTaxation()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 5";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog category Licenses & Documentation
function listblogLicensesDocumentation()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 6";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog category Legal Services
function listblogLegalServices()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 7";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog category Legal Advice
function listblogLegalAdvice()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where cat_id = 8";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//list blog by category id

function list_blog_by_cat_id($idp)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat where id = $idp";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something went wrong";
        $res['status'] = 0;
        return $res;
    }
}


//list latest blogs
function listblogletest()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogdata  ORDER BY id DESC limit 3";
    $row = $con->query($sql);
    if (isset($_POST['submit']) || isset($_POST[''])) {
        global $con;
        $blogSearch = mysqli_real_escape_string($con, $_POST['blogSearch']);
        $sql = "SELECT * FROM blogdata WHERE blogtitle LIKE '%$blogSearch%' OR blogbody LIKE '%$blogSearch%'";
        $row = $con->query($sql);
        if ($row->num_rows > 0) {
            while ($data = $row->fetch_assoc()) {
                $res[] = $data;
            }
            return $res;
        } else {
            $res['message'] = "Something  wrong";
            $res['status'] = 0;
            return $res;;
        }
    }
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;;
    }
}

function insertMetaData()
{
    global $con;
    $date = cur_date();
    $metaurl = $_POST['metaurl'];
    $metatitle = $_POST['metatitle'];
    $keywords = addslashes($_POST['keywords']);
    $discription = addslashes($_POST['discription']);
    $robots = $_POST['robots'];
    $canonical = $_POST['canonical'];
    $ogtitle = $_POST['ogtitle'];
    $fbogimageurl = $_POST['fbogimageurl'];
    $ogsitename = $_POST['ogsitename'];
    $fbogdescription = $_POST['fbogdescription'];
    $twittersite = $_POST['twittersite'];
    $twitterogimage = $_POST['twitterogimage'];
    $twogdescription = $_POST['twogdescription'];
    $twitterimageurl = $_POST['twitterimageurl'];
    $sql = "INSERT INTO metatags(metaurl,metatitle,keywords,discription,robots,canonical,ogtitle,fbogimageurl,ogsitename,fbogdescription,twittersite,twitterogimage,twogdescription,twitterimageurl,metadate) VALUES('$metaurl','$metatitle','$keywords','$discription','$robots','$canonical','$ogtitle','$fbogimageurl','$ogsitename','$fbogdescription','$twittersite','$twitterogimage','$twogdescription','$twitterimageurl','$date')";
    if ($con->query($sql)) {
        echo '<script>
        alert("tags added succesfully");
        window.location="addmetadata.php?type=metatagstable";
        </script>';
    } else {
        return array("message" => "Something Wrong", "status" => false);
    }
}



function listmetas()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


function listmetaupdt($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags where id = $id";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something wrong";
        $res['status'] = 0;
        return $res;
    }
}

function updatemetas($id)
{
    global $con;
    $res = array();
    $id = $_POST['id'];
    $metaurl = $_POST['metaurl'];
    $metatitle = $_POST['metatitle'];
    $keywords = addslashes($_POST['keywords']);
    $discription = addslashes($_POST['discription']);
    $robots = $_POST['robots'];
    $canonical = $_POST['canonical'];
    $ogtitle = $_POST['ogtitle'];
    $fbogimageurl = $_POST['fbogimageurl'];
    $ogsitename = $_POST['ogsitename'];
    $fbogdescription = $_POST['fbogdescription'];
    $twittersite = $_POST['twittersite'];
    $twitterogimage = $_POST['twitterogimage'];
    $twogdescription = $_POST['twogdescription'];
    $twitterimageurl = $_POST['twitterimageurl'];
    $sql = "UPDATE metatags SET metaurl = '$metaurl', metatitle='$metatitle', keywords='$keywords', discription='$discription', robots='$robots', canonical='$canonical', ogtitle='$ogtitle',fbogimageurl='$fbogimageurl', ogsitename='$ogsitename', fbogdescription='$fbogdescription',twittersite='$twittersite', twitterogimage='$twitterogimage', twogdescription='$twogdescription',twitterimageurl='$twitterimageurl' where id = $id";
    $row = $con->query($sql);
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}




function metaindex()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'index.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

function dltemetas($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM metatags where id=$id";
    $con->query($sql);
}


//proprietorship_registration.php

function metaproprietorship_registration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'proprietorship-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//partnership-firm 

function metapartnershipfirm()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'partnership-firm.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}



//llp_registration 

function metallpregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'llp-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//company-incorporation.php

function metacompanyincorporation()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'company-incorporation.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//Section_8_company.php

function metaSection_8_company()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Section-8-company.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

// ngotrustregistration.php

function metangotrustregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'ngo-trust-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

// gst-registration.php

function metagstregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'gst-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


// msme-ssi-registration.php

function metamsmessiregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'msme-ssi-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//Startup_registration.php

function metaStartupregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Startup-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//GEM-Registration.php

function metaGEMRegistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'GEM-Registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//shops-and-establishements-registration.php

function Metshopsandestablishementsregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'shops-and-establishements-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//import-export-code-iec.php

function Metimportexportcode()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'import-export-code-iec.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}



//iso-certification.php

function MetisocertiFication()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'iso-certification.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//FSSI_Registration.php

function MetFSSI_Registration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'FSSI-Registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//PASARA_LICENSE.php

function MetPASARA_LICENSE()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'PASARA-LICENSE.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//trademark-registration.php

function Mettrademarkregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'trademark-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//trademark-registration.php

function designregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'design-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//digitalsignatureonline

function digitalsignatureonline()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'digital-signature-online-dsc.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//nsic

function nsic()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'nsic-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//fssai-state-license.php

function fssaistatelicense()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'fssai-state-license.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//fssai-central-license.php

function fssaicentrallicense()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'fssai-central-license.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//psara-license.php

function psaralicense()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'psara-license.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//trademark_objection.php

function trademarkobjection()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'trademark-objection.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}




//Trademark_Opposition.php

function metaTrademark_Opposition()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Trademark-Opposition.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//Trademark_Renewal.php

function metaTrademarkRenewal()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Trademark-Renewal.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}



//Trademark_Assignmant.php

function metaTrademarkAssignmant()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Trademark-Assignmant.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//Trademark_infringement.php

function metaTrademarkinfringement()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Trademark-infringement.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//mutual-consent-divorce.php

function metmtldvrce()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'mutual-consent-divorce.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//metatrademarkhearing

function metatrademarkhearing()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Trademark-Hearing.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

//incometax

function metaincometax()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'income-tax-return.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}



//one-person-company

function metaonepersoncompanyregistration()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'one-person-company-registration.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}
//psara-license.php

function metpsara()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'psara-license.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


//Copyright-Objection-Reply.php

function CopyrightObjRply()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'Copyright-Objection-Reply.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}
//Copyright-Objection-Reply.php

function ChequeBounceCase()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'cheque-bounce-complaint.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

function mutualconsentdivorce()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'mutual-consent-divorce.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

function marriagecertificate()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'marriage-certificate.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


function divorcenotice()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'divorce-notice.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


function legalheircertificate()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'legal-heir-certificate.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

function namechange()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'name-change.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

function childcustody()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'child-custody.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


function propertypossessiondelayrera()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'property-possession-delay-rera.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

function wrongfulterminationlegalnotice()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'wrongful-termination-legal-notice.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}


function legalnotice()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'legal-notice.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}

function suitrecoveryofmoney()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'suit-recovery-of-money.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
}
    
function addorremoveadirector()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'add-or-remove-a-director.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
}  
    
    
    
function addorremoveapartner()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'add-or-remove-a-partner.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 

function changebusinessactivity()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'change-business-activity.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 
    
function increaseauthorisedsharecapital()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'increase-authorised-share-capital.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


    
function changecompanyname()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'change-company-name.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 



    
function changeregisteredoffice()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'change-registered-office.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 
    
function annualfilingofdirectorkyc()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'annual-filing-of-director-kyc.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function proprietorshiptopvt()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'proprietorship-to-pvt.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


 

function proprietorshiptoopc()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'proprietorship-to-opc.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 

function properietorshiptopartnership()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'properietorship-to-partnership.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 

function proprietorshiptollp()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'proprietorship-to-llp.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 

function opctoprivatelimited()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'opc-to-private-limited.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 
function privatelimitedtopubliclimited()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'private-limited-to-public-limited.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 
function partnershiptoprivatelimited()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'partnership-to-private-limited.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function gmpcertification()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'gmp-certification.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function iso22000certification()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'iso-22000-certification.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function iso90012015()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'iso-9001-2015.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function iso14001certification()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'iso-14001-certification.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function iso13485certification()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'iso-13485-certification.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function cecertification()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'ce-certification.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 



function chequebouncecomplaint()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'cheque-bounce-complaint.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 

function iso27001certification()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'iso-27001-certification.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 
 
function partnershiptollp()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'partnership-to-llp.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 


function onlinetdsreturn()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM metatags WHERE metaurl = 'online-tds-return.php'";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        $res['message'] = "Something  wrong";
        $res['status'] = 0;
        return $res;
    }
    
} 