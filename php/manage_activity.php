
<?php
  class ManageActivites {
      private $con;
      function __construct($con) {
          $this->con = $con;
      }
      function getActivites() {
          $result = mysqli_query($this->con, "SELECT * FROM manage_activity");
          if (mysqli_num_rows($result) > 0) {
              $userData=[];
              while($row = mysqli_fetch_assoc($result)) {
                 $userdata[]=$row;
              }
              $returnData['status']=TRUE;
              $returnData['data']=$userdata;
              $returnData['message']="selected rows ....";
          } else {
              $returnData['status']=FALSE;
              $returnData['message']="Somthing went wrong.";
          }
          return $returnData;
      }
      function getSubActivites($id) {
        $result = mysqli_query($this->con, "SELECT * FROM subactivity WHERE activityId='$id'");
        if (mysqli_num_rows($result) > 0) {
            $userData=[];
            while($row = mysqli_fetch_assoc($result)) {
               $userdata[]=$row;
            }
            $returnData['status']=TRUE;
            $returnData['data']=$userdata;
            $returnData['message']="selected rows ....";
        } else {
            $returnData['status']=FALSE;
            $returnData['message']="Somthing went wrong.";
        }
        return $returnData;
    }
    function getSubActivityTitle($id) {
        $result = mysqli_query($this->con, "SELECT * FROM subactivity WHERE id='$id'");
        $row = mysqli_fetch_assoc($result);
        return $row['title'];
    }
    function getActivityTitle($id) {
        $result = mysqli_query($this->con, "SELECT * FROM manage_activity WHERE id='$id'");
        $row = mysqli_fetch_assoc($result);
        return $row['title'];
    }
  }
  ?>