<?php
include "php/includes/connection.php";

$adminObj=new Admin($con);

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $emailId=$_POST['emailId'];
    $contactNo=$_POST['contactNo'];
    $password=$encryptionObj->getMyEncryption($_POST['password']);

    $indata=$adminObj->updateAdminProfile($id,$name,$emailId,$contactNo,$password);
    echo "<script> alert('".$indata['message']."'); </script>";
  }

  $indata=$adminObj->getAdminProfile($_SESSION['userId']);
  $adminData=$indata['data'][0];
?>
<div class="page-header m-0">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-account-multiple"></i>
        </span> Profile
    </h3>
</div>
<div class="container mt-2">
        <div class="row justify-content-center">
            <div class="card col-lg-6 border-left-info border-info shadow lead-card">
            `   <form action="home.php?pageflag=updateAdminProfile" method="post">
                    <h1 class="h3 mb-0 text-gray-600 text-center mt-3">Profile</h1>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="invisible" name="id" value="<?php echo $_SESSION['userId']; ?>"> 
                        <input type="text" class="form-control form-control-sm" name="name" value="<?php echo $adminData['name']; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Id</label>
                        <input type="email" class="form-control form-control-sm" name="emailId" value="<?php echo $adminData['emailId']; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="number" class="form-control form-control-sm" name="contactNo" value="<?php echo $adminData['contactNo']; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control form-control-sm" name="password" value="<?php echo $encryptionObj->getMyDecryption($adminData['password']); ?>"> 
                    </div>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="text-center mb-4">
                        <a href="?pageflag=staffhome" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm">cancel</a>
                        <button type="submit" class="btn btn-sm  btn-success" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>