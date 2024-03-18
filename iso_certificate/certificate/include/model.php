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

function certicatedata()
{
    global $con;
    $date = cur_date();
    $businesname = $_POST['businesname'];
    $iaddress = $_POST['iaddress'];
    $isotype = $_POST['isotype'];
    $activities = $_POST['activities'];
    $curtdate = $_POST['curtdate'];
    $fstdate = $_POST['fstdate'];
    $ssdate = $_POST['ssdate'];
    $expdate = $_POST['expdate'];
    $cernumber = $_POST['cernumber'];
    $sql = "INSERT INTO certifiacatedataiso(businesname,iaddress,isotype,activities,curtdate,fstdate,ssdate,expdate,cernumber,certificatedate) VALUES('$businesname','$iaddress','$isotype','$curtdate','$fstdate','$ssdate','$activities','$expdate','$cernumber','$date')";
    if ($con->query($sql)) {
        return array("message" => "Certificate Created Successfully", "status" => true);
    } else {
        return array("message" => "Something Wrong", "status" => false);
    }
}

function listform($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM certifiacatedataiso where id=$id";
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

function listformdata($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM certifiacatedataiso where id=$id";
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




function leastserchcerticate()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM certifiacatedataiso";
    $row = $con->query($sql);
    if (isset($_POST['submit']) || isset($_POST[''])) {
        global $con;
        $blogSearch = mysqli_real_escape_string($con, $_POST['blogSearch']);
        $sql = "SELECT * FROM certifiacatedataiso WHERE cernumber LIKE '%$blogSearch%'";
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
function Createcat()
{
    global $con;
    $date = cur_date();
    $cattitle = $_POST['btitle'];
    $sql = "INSERT INTO cattable(cattitle,cdate) VALUES('$cattitle', '$date')";
    if ($con->query($sql)) {
        return array("message" => "Category Created Successfully", "status" => true);
    } else {
        return array("message" => "Something Wrong", "status" => false);
    }
}



//listing category
function listcat()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM cattable";
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

//listing category for update
function listcatupdt($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM cattable WHERE id =$id";
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

//delete Category

function delete_cat($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM cattable where id=$id";
    $con->query($sql);
}

//update Category

// function ($cattitle, $id)
// {
//     global $con;
//     $res = array();
//     $sql = "UPDATE cattable SET cattitle=$cattitle WHERE id = $id";
//     $con->query($sql);
// }
function update_cat($cattitle, $id)
{
    global $con;
    $sql = "UPDATE `cattable` SET `cattitle`='[$cattitle]' WHERE id= $id";
    if ($con->query($sql)) {
        return array("message" => "Category Updated Successfully", "status" => true);
    } else {
        return array("message" => "Something Wrong", "status" => false);
    }
}

//create subcategry
function creatsubcat()
{
    global $con;
    $date = cur_date();
    $catname = $_POST['catname'];
    $subcat = $_POST['subcat'];
    $sql = "INSERT INTO subcattable(catname,subcat,scdate) VALUES('$catname', '$subcat', '$date')";
    if ($con->query($sql)) {
        return array("message" => "Sub Category Created Successfully", "status" => true);
    } else {
        return array("message" => "Something Wrong", "status" => false);
    }
}


//listing subcategory
function listsubcat()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM subcattable";
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


//delete subcategory
function deletesubcat($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM subcattable where id=$id";
    $con->query($sql);
}


//list subcat for selecting value
function list_Subcategory($id = "")
{
    global $con;
    $res = array();
    if ($id == "")
        $sql = "SELECT * FROM subcattable";
    else
        $sql = "SELECT * FROM subcattable where catname	 = $id";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        return $res;
    }
}



//create sub subcategry
function creatsubsubcat()
{
    global $con;
    $date = cur_date();
    $cat_id = $_POST['cat_id'];
    $sub_cat_id = $_POST['sub_cat_id'];
    $sub_sub_catname = $_POST['sub_sub_catname'];
    $sql = "INSERT INTO subsubcattable(cat_id,sub_cat_id,sub_sub_catname,sscdate) VALUES('$cat_id', '$sub_cat_id','$sub_sub_catname', '$date')";
    if ($con->query($sql)) {
        return array("message" => "Sub Sub-Category Created Successfully", "status" => true);
    } else {
        return array("message" => "Something Wrong", "status" => false);
    }
}


//listing sub subcategory
function listsubsubcat()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM subsubcattable";
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




//delete sub subcategory
function deletesubsubcat($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM subsubcattable where id=$id";
    $con->query($sql);
}

//list subsubcat for selecting value
function list_Subsubcategory($id = "")
{
    global $con;
    $res = array();
    if ($id == "")
        $sql = "SELECT * FROM subsubcattable";
    else
        $sql = "SELECT * FROM subsubcattable where cat_id = $id";
    $row = $con->query($sql);
    if ($row->num_rows > 0) {
        while ($data = $row->fetch_assoc()) {
            $res[] = $data;
        }
        return $res;
    } else {
        return $res;
    }
}


//creting blog

function CreateNewBlog()
{
    global $con;
    $date = cur_date();
    $bcat_id = $_POST['bcat_id'];
    $bsubcat_id = $_POST['bsubcat_id'];
    $bsub_subcat = $_POST['bsub_subcat'];
    $blogtitle = $_POST['blogtitle'];
    $slug_url = $_POST['slug_url'];
    $slug_url = strtolower($blogtitle);
    $slug_url = str_replace(' ', '-', $blogtitle);
    $blogdiscription = $_POST['blogdiscription'];
    $file_name = $_FILES['blogimg']['name'];
    $blogbody = $_POST['blogbody'];
    $ext = strtolower(pathinfo(basename($file_name), PATHINFO_EXTENSION));
    if ($ext == 'png' || $ext == "jpg" || $ext == "jpeg") {
        $upload_file_name = "IMG" . date('Ymdhis') . "." . $ext;
        $upload_url = "uploads/" . $upload_file_name;
        move_uploaded_file($_FILES['blogimg']['tmp_name'], $upload_url);
        $sql = "INSERT INTO blogdata(bcat_id,bsubcat_id,bsub_subcat,blogtitle,slug_url,blogdiscription,blogimg,blogbody,blog_date) VALUES('$bcat_id','$bsubcat_id','$bsub_subcat','$blogtitle', '$slug_url','$blogdiscription','$upload_file_name','$blogbody','$date')";
        if ($con->query($sql)) {
            return array("message" => "Blog Created Successfully", "status" => true);
        } else {
            return array("message" => "Something Wrong", "status" => false);
        }
    } else {
        return array("message" => "image is not correct", "status" => false);
    }
}




//listing blog data dashboard

function listblog()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogdata";
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



//list comment

function listcomment()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogcomments";
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

//listing blog data by id

function blogbyidforupdate($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogdata where id = $id";
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

//UPDATE blog data by id

// function blogbyidforupdate($id)
// {
//     global $con;
//     $res = array();
//     $sql = "SELECT * FROM blogdata where id = $id";
//     $row = $con->query($sql);
//     if ($row->num_rows > 0) {
//         while ($data = $row->fetch_assoc()) {
//             $res[] = $data;
//         }
//         return $res;
//     } else {
//         $res['message'] = "Something  wrong";
//         $res['status'] = 0;
//         return $res;
//     }
// }



//delete  blog
function deleteblog($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM blogdata WHERE id=$id";
    $con->query($sql);
}


//delete  comment
function deletecomment($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM blogcomments WHERE id=$id";
    $con->query($sql);
}



//list blog by id 

function listblogbyid($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogdata WHERE id = $id";
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

















// create blog catagory

function createNewBlogcat()
{
    global $con;
    $date = cur_date();
    $catagory_name = $_POST['catagory_name'];
    $sql = "INSERT INTO blog_category(catagory_name, blog_date) VALUES('$catagory_name', '$date')";
    if ($con->query($sql)) {
        return array("message" => "Blog Created Successfully", "status" => true);
    } else {
        return array("message" => "Something Wrong", "status" => false);
    }
}

function createNewBlogsubcat()
{
    global $con;
    $date = cur_date();
    $cat_id = $_POST['cat_id'];
    $cat_nme = $_POST['cat_nme'];
    $subcatagory_name = $_POST['sub_cat_name'];
    $blogdiscr = $_POST['blogbody'];

    $file_name = $_FILES['blogimage']['name'];
    $ext = strtolower(pathinfo(basename($file_name), PATHINFO_EXTENSION));
    if ($ext == 'png' || $ext == "jpg" || $ext == "jpeg") {
        $upload_file_name = "IMG" . date('Ymdhis') . "." . $ext;
        $upload_url = "uploads/" . $upload_file_name;
        move_uploaded_file($_FILES['blogimage']['tmp_name'], $upload_url);
        $sql = "INSERT INTO blogsubcat(cat_id,cat_nme,sub_cat_name,blogimage,blogbody,subcatdate) VALUES('$cat_id','$cat_nme','$subcatagory_name','$upload_file_name','$blogdiscr','$date')";
        if ($con->query($sql)) {
            return array("message" => "Blog Created Successfully", "status" => true);
        } else {
            return array("message" => "Something Wrong", "status" => false);
        }
    } else {
        return array("message" => "image is not correct", "status" => false);
    }
}






//list blog categories
function listblogCat()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blog_category";
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
//list blog categories
function listblogsubCat()
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogsubcat";
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
//update blog status
function Update_blog_satus($status, $id)
{
    global $con;
    $sql = "UPDATE blogtable SET blog_status=$status where id=$id";
    if ($con->query($sql)) {
        return array("message" => "Blog Updated Successfully", "status" => true);
    } else {
        return array("message" => "Something Wrong", "status" => false);
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

//extract data for blog page
function extractMaindata($id)
{
    global $con;
    $sql = "SELECT * FROM blogtable where id=$id";
    if ($con->query($sql)) {
        return array("message" => "legaltax blog page");
    } else {
        return array("message" => "Something Wrong");
    }
}

//listing in update form
function fetch_blog_update($id)
{
    global $con;
    $res = array();
    $sql = "SELECT * FROM blogtable WHERE id = $id";
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

//update blog
// function UpdateBlogdata()
// {
//     global $con;
//     $btitle = $_POST['btitle'];
//     $file_name = $_FILES['bimg']['name'];
//     $blogbody  = $_POST['blogbody'];
//     $ext = strtolower(pathinfo(basename($file_name), PATHINFO_EXTENSION));
//     if ($ext == 'png' || $ext == "jpg" || $ext == "jpeg") {
//         $upload_file_name = "IMG" . date('Ymdhis') . "." . $ext;
//         $upload_url = "uploads/" . $upload_file_name;
//         move_uploaded_file($_FILES['bimg']['tmp_name'], $upload_url);
//         $sql = "UPDATE blogdata SET (btitle,bimg,blogbody) VALUES('$btitle','$upload_file_name','$blogbody')";
//         if ($con->query($sql)) {
//             return array("message" => "Blog Updated Successfully", "status" => true);
//         } else {
//             return array("message" => "Something Wrong", "status" => false);
//         }
//     } else {
//         return array("message" => "image is not correct", "status" => false);
//     }
// }



function UpdateBlogdata()
{
    print_r($_POST);
    global $con;
    $date = cur_date();
    $bcat_id = $_POST['bcat_id'];
    $bsubcat_id = $_POST['bsubcat_id'];
    $bsub_subcat = $_POST['bsub_subcat'];
    $blogtitle = $_POST['blogtitle'];
    $slug_url = $_POST['slug_url'];
    $id = $_POST['id'];
    $slug_url = strtolower($blogtitle);
    $slug_url = str_replace(' ', '-', $blogtitle);
    $blogdiscription = $_POST['blogdiscription'];
    $file_name = $_FILES['blogimg']['name'];
    $blogbody = $_POST['blogbody'];
    $ext = strtolower(pathinfo(basename($file_name), PATHINFO_EXTENSION));
    if ($ext == 'png' || $ext == "jpg" || $ext == "jpeg") {
        $upload_file_name = "IMG" . date('Ymdhis') . "." . $ext;
        $upload_url = "uploads/" . $upload_file_name;
        move_uploaded_file($_FILES['blogimg']['tmp_name'], $upload_url);
        $sql = "UPDATE blogdata SET bcat_id='$bcat_id',bsubcat_id='$bsubcat_id', bsub_subcat= '$bsub_subcat', blogtitle='$blogtitle', slug_url= '$slug_url',blogdiscription= '$blogdiscription', blogimg='$upload_file_name',  blogbody= '$blogbody', blog_date= '$date' WHERE id=$id";
        if ($con->query($sql) == True) {
            return array("message" => "Blog updated Successfully", "status" => true);
        } else {
            return array("message" => "Something Wrong", "status" => false);
        }
    } else {
        return array("message" => "image is not correct", "status" => false);
    }
}




//deleting blog category
function delete_blog_cat($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM blog_category where id=$id";
    $con->query($sql);
}


//deleting blog category
function delete_blog_subcat($id)
{
    global $con;
    $res = array();
    $sql = "DELETE FROM blogsubcat where id=$id";
    $con->query($sql);
}
