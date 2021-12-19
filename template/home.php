<?php
include "php/includes/connection.php";
include "php/a_users.php";

$userObj=new Users($con);
?>  
<div class="page-header m-0">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-format-list-bulleted"></i>
        </span> Users
    </h3>
    <nav aria-label="breadcrumb">
        <a href="?pageflag=register" class="btn btn-primary btm-sm btn-rounded"><i class="mdi mdi-plus"></i> Add New</a>
    </nav>
</div>
<div class="container-fluid" style="padding: 10px 0px;">
      <div class="card">
                  <div class="p-3 table-responsive">
                    <table class="table table-bordered" id="dataTable1">
                      <thead>
                        <tr>
                          <th> Sr. No </th>
                          <th> User Name </th>
                          <th> Contact No </th>
                          <th> Email Id </th>
                          <th> Details</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                            $counter=0;
                            $data=$userObj->getAllusers();
                            foreach($data['data'] as  $user){
                            ?>
                        <tr>
                            <td><?php echo ++$counter; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['contactNo']; ?></td>
                            <td><?php echo $user['emailId']; ?></td>
                            <td><a href="?pageflag=auserinfo&id=<?php  echo $encryptionObj->getMyEncryption($user['id'].""); ?>" class="h3 text-success"><i class="mdi mdi-eye"></i></a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
</div>
</div>