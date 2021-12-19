<?php
include "php/includes/connection.php";
include "php/a_users.php";
include "php/manage_activity.php";
$userObj=new Users($con);
$manageActivity=new ManageActivites($con);
$indata=$userObj->getUserInfo($encryptionObj->getMyDecryption($_GET['id']));
$userData=$indata['data'][0];
?>  
<div class="page-header m-0">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-format-list-bulleted"></i>
        </span> User Information
    </h3>
    <nav aria-label="breadcrumb">
        <a href="?pageflag=home" class="btn btn-primary btm-sm btn-rounded"><i class="mdi mdi-step-backward"></i> Back</a>
    </nav>
</div>
<div class="container-fluid" style="padding: 10px 0px;">
    <div class="row justify-content-center">
        <div class="col-sm-10">
                <div class="p-3 table-responsive card">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th colspan="2"><h4>User Information</h4></th>
                        </tr>
                        <tr>
                            <th scope="row">Name</th>
                            <td><?php echo $userData['name']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Contact No.</th>
                            <td><?php echo $userData['contactNo']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Email Id.</th>
                            <td><?php echo $userData['emailId']; ?></td>
                        <tr>
                      </tbody>
                    </table>

                    <table class="table table-bordered mt-5">
                      <tbody>
                        <tr>
                          <th colspan="2"><h4>Others Information</h4></th>
                        </tr>
                        <tr>
                            <th scope="row">Activity Name</th>
                            <td><?php echo $manageActivity->getActivityTitle($userData['activity_name']); ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Sub Activity</th>
                            <td><?php echo $manageActivity->getSubActivityTitle($userData['subActivity']); ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Plant</th>
                            <td><?php echo $userData['plant']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Location</th>
                            <td><?php echo $userData['location']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">floor</th>
                            <td><?php echo $userData['floor']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Department</th>
                            <td><?php echo $userData['department']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Assign to</th>
                            <td><?php echo $userData['assignto']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Date</th>
                            <td><?php echo $userData['a_date']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td><?php echo $userData['status']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Reason For Open</th>
                            <td><?php echo $userData['reason']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Follow up for OPEN Activity</th>
                            <td><?php echo $userData['followup']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Close Date</th>
                            <td><?php echo $userData['close_date']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Quantity</th>
                            <td><?php echo $userData['quantity']; ?></td>
                        <tr>
                        <tr>
                            <th scope="row">Remark</th>
                            <td><?php echo $userData['remark']; ?></td>
                        <tr>
                      </tbody>
                    </table>

                  </div>
        </div>  
    </div>
</div>