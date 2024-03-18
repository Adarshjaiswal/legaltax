<?php
function web_header()
{
?>
    <div class="container-fluid" style="margin: 0px; padding: 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="dashhedMain">
                    <div class="usr">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>Name</p>
                    </div>
                    <div class="logt">
                        <div class="logout">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            <a href="logout.php">
                                <p style="color: #fff; text-decoration: none;">Log Out</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
<?php
function sideMenu()
{
?>
    <div class="side" style="height:100vh;">
        <ul>
            <!-- <li><a href="dashboard.php?type=myBlog">Published Blogs</a> </li> -->
            <a href="index.php?type=certificate">
                <li>All Certificates</li>
            </a>
            <a href="index.php?type=formdata">
                <li>Upload Certificate</li>
            </a>
            <a href="index.php?type=searchcertificate">
                <li>Search Certificate</li>
            </a>
        </ul>
    </div>

<?php

}


?>
<?php

function web_footer()
{
}

function web_menu()
{
}


function error_design()
{
}

// function css_include()
// {
//}
// function script_include()
// {



// }
?>