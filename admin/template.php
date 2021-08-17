<?php 
    include("class/adminback.php");
    $obj= new adminback();

    session_start();
    $admin_id = $_SESSION['admin_id'];
    $admin_email = $_SESSION['admin_email'];
    if($admin_id==null){
        header("location:index.php");
    }

    if(isset($_GET['adminLogout'])){
        if($_GET['adminLogout']=="logout"){
            $obj->admin_logout();
        }
    }
?>

<?php 
    include ("includes/head.php")
?>

  <body>
  <body>
	  <div class="fixed-button">
		<a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	  </div>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

         <?php include_once ("includes/headernav.php") ?>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                   
                <?php include_once ("includes/sidenav.php") ?>


                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                     
        
                                <?php 
                                    if($views){
                                        if($views=="dashborad"){
                                            include ('views/dashborad_view.php');
                                        }elseif($views=="add-cata"){
                                            include ("views/add_cata_view.php");
                                        }elseif($views=="manage-cata"){
                                            include ("views/manage_cata_view.php");
                                        }elseif($views=="add-product"){
                                            include ("views/add_product_view.php");
                                        }elseif($views=="manage-product"){
                                            include ("views/manage_product_view.php");
                                        }elseif($views=="add-user"){
                                            include ("views/add_user_view.php");
                                        }elseif($views=="manage-user"){
                                            include ("views/manage_user_view.php");
                                        }elseif($views=="edit_cata"){
                                            include ("views/edit_cata_view.php");
                                        }elseif($views=="edit_product"){
                                            include ("views/edit_product_view.php");
                                        }

                                    }
                                ?>


                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->

<?php 
    include ("includes/script.php")
?>