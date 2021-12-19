<?php
include "php/includes/connection.php";
include "php/a_users.php";
include "php/manage_activity.php";

$userObj=new Users($con);
$manageActivity=new ManageActivites($con);
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $emailId=$_POST['emailId'];
    $contactNo=$_POST['contactNo'];
    $password=$encryptionObj->getMyEncryption($_POST['password']);
    $role="USER";

    $activity=$_POST['activity'];
    $subActivity=$_POST['subActivity'];
    $plant=$_POST['plant'];
    $location=$_POST['location'];

    $floor=$_POST['floor'];
    $department=$_POST['department'];
    $assignto=$_POST['assignto'];
    $a_date=$_POST['a_date'];
    $status=$_POST['status'];
    $reason=$_POST['reason'];
    $followup=$_POST['followup'];
    $close_date=$_POST['close_date'];
    $quantity=$_POST['quantity'];
    $remark=$_POST['remark'];
    

    $indata=$userObj->registerUser($name,$emailId,$contactNo,$password,$role,$activity,$subActivity,$plant,$location,$floor,$department, $assignto,$a_date,$status,$reason,$followup,$close_date,$quantity,$remark);

    echo "<script> alert('".$indata['message']."'); </script>";
  }
  $indata=$manageActivity->getActivites();
  $allActivities=$indata['data'];
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
  include "php/includes/connection.php";
  //  error_reporting(0);
  ?>
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
  <body class="footer">
    <div class="container-scroller">
    <div class="row justify-content-center">
            <div class="card col-lg-8 border-left-info border-info shadow lead-card">
                <form action="<?php echo (isset($_GET['pageflag']) && $_GET['pageflag']=="register")? "?pageflag=register":" "; ?>" method="POST">
                    <h1 class="h3 mb-0 text-gray-600 text-center mt-3">Registration</h1>
                    <div class="row mt-3">
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Enter your name <span class="required-icon">*</span></label>
                            <input type="text" class="form-control form-control-sm" name="name"  placeholder="Enter your name" required>
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Enter Email  <span class="required-icon">*</span></label>
                            <input type="email" class="form-control form-control-sm" name="emailId" id="emailId" placeholder="Enter email id" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Enter contact No <span class="required-icon">*</span></label>
                            <input type="number" class="form-control form-control-sm" name="contactNo"  id="contactNo" placeholder="Enter contact number"  required>
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Enter password  <span class="required-icon">*</span></label>
                            <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Enter password" required>
                        </div>
                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Select Activity <span class="required-icon">*</span></label>
                            <select class="form-control form-control-sm"  name="activity" id="activity" required>
                            <?php 
                                foreach($allActivities as $activity){
                                    echo "<option value=".$activity['id'].">".$activity['title']."</option>";
                                }
                            ?>                     
                            </select>
                        </div>
                        <div class="form-group col-sm">
                        <label for="exampleInputEmail1">Select Sub-Activity <span class="required-icon">*</span></label>
                            <select class="form-control form-control-sm"  name="subActivity" id="subactivity" required>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Select Plant <span class="required-icon">*</span></label><br>
                            <select class="form-control form-control-sm" id="plant" name="plant" required>
                                <option value="Plant 1">Plant 1</option>
                                <option value="Plant 2">Plant 2</option>
                                <option value="Plant 3">Plant 3</option>
                            </select>
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Select Floor <span class="required-icon">*</span></label><br>
                            <select class="form-control form-control-sm" id="floor" name="floor" required>
                                <option value="Floor 1">Floor 1</option>
                                <option value="Floor 2">Floor 2</option>
                                <option value="Floor 3">Floor 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Select Location <span class="required-icon">*</span></label><br>
                            <select class="form-control form-control-sm" id="location" name="location" required>
                                <option value="Location 1">Location 1</option>
                                <option value="Location 1">Location 2</option>
                                <option value="Location 1">Location 3</option>
                            </select>
                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Department Name <span class="required-icon">*</span></label>
                            <input type="text" class="form-control form-control-sm" name="department"  placeholder="Enter department name" required>                            
                        </div>
                        <div class="form-group col-md">
                            <label for="exampleInputEmail1">Assign to <span class="required-icon">*</span></label>
                            <select class="form-control form-control-sm" name="assignto" required>
                                <option value="User 1">User 1</option>
                                <option value="User 2">User 2</option>
                                <option value="User 3">User 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm">
                           <label for="exampleInputEmail1">Date <span class="required-icon">*</span></label>
                           <input type="date" class="form-control form-control-sm" name="a_date">                            
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Status <span class="required-icon">*</span></label>
                            <select class="form-control form-control-sm" name="status" required>
                                <option value="Status 1">Status 1</option>
                                <option value="Status 2">Status 2</option>
                                <option value="Status 3">Status 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Reason for open <span class="required-icon">*</span></label>
                            <select class="form-control form-control-sm" name="reason" required>
                                <option value="Reason 1">Reason 1</option>
                                <option value="Reason 2">Reason 2</option>
                                <option value="Reason 3">Reason 3</option>
                            </select>
                        </div>
                        <div class="form-group col-md">
                            <label for="exampleInputEmail1">Follow Up for Activity <span class="required-icon">*</span></label>
                            <select class="form-control form-control-sm" name="followup" required>
                                <option value="Follow Up Activity 1">Follow Up Activity 1</option>
                                <option value="Follow Up Activity 2">Follow Up Activity 2</option>
                                <option value="Follow Up Activity 3">Follow Up Activity 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm">
                           <label for="exampleInputEmail1">Close Date <span class="required-icon">*</span></label>
                           <input type="date" class="form-control form-control-sm" name="close_date" required>                            
                        </div>
                        <div class="form-group col-sm">
                            <label for="exampleInputEmail1">Quantity</label>
                            <select class="form-control form-control-sm" name="quantity" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Remark <span class="required-icon">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="remark"  placeholder="Enter remark" required>
                    </div>
                    <div class="text-center mb-3">
                        <a href="<?php echo (isset($_GET['pageflag']) && $_GET['pageflag']=="register")? "?":"index.php"; ?>" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">cancel</a>
                        <button type="submit" class="btn btn-sm  btn-success" name="add" id="subbtn">Save</button>
                    </div>
                </form>
            </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
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
    <script>
      $('form').on('keypress', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) { 
      e.preventDefault();
      return false;
    }
  });

  function submitFormHome(){
    document.getElementById("formSearch").submit();
  }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#activity").change(function(){
    $.post("php/api/get_subactivity.php",{activityId : document.getElementById("activity").value},function(data, status){
        indata=JSON.parse(data);
        $('#subactivity').empty();
        for(activity of indata.data){
            $('#subactivity').append(`<option value="${activity.id}"> 
                                       ${activity.title} 
                                  </option>`); 
        }
    });
  });
});
</script>
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/purple-admin-free/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 05:34:06 GMT -->
</html>