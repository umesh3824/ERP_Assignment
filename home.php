<?php 
  session_start();
  include "php/includes/connection.php";
  include "php/includes/encryption.php";
  include "php/admin.php";

  if(!isset($_SESSION['userId'])){
    header("location: index.php");
  }
  $adminObj=new Admin($con);
  $encryptionObj=new MyEncryption();
  $indata=$adminObj->getAdminProfile($_SESSION['userId']);
  $adminData=$indata['data'][0];
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.bootstrapdash.com/demo/purple-admin-free/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 05:33:54 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Software Hub</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/vartical_column.css"> -->
    <link rel="stylesheet" href="assets/css/my_crm_cust.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

     <!-- Custom styles for this page -->
     <link href="assets/vendors/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index-2.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button> -->
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $adminData['name'];?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="?pageflag=updateAdminProfile">
                  <i class="mdi mdi-account mr-2 text-success"></i> Profile </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="template/logout.php">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="template/logout.php">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="?pageflag=home">
                <span class="menu-title">Home</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          </ul>
      </nav> -->

        <!-- partial -->
        <div class="main-panel" style="width:100%;">
          <div class="content-wrapper p-3">
          <!-- content-wrapper ends -->

          <?php
            if(isset($_GET['pageflag'])){
              $pageflag=$_GET['pageflag'];
            }else{
              $pageflag="home";
            }
            switch ($pageflag) {
              case "home":
                include "template/home.php";
                break;
              case "auserinfo":
                    include "template/a_user_info.php";
                    break;
              case "register":
                    include "register.php";
                    break;
              case "updateAdminProfile":
                    include "template/update_admin_profile.php";
                    break;
              default:
              include "template/home.php";
            }
        ?>
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 All rights reserved.</span>
              <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Designed By <a href="" target="_blank">COMPANY</a></span> -->
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
    <!-- Page level plugins -->
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/datatables-demo.js"></script>
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/purple-admin-free/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 05:34:06 GMT -->
</html>