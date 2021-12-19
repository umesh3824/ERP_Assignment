<?php 
include "includes/connection.php";
class Users {
    private $con;
    function __construct($con) {
        $this->con = $con;
    }
    function registerUser($name,$emailId,$contactNo,$password,$role,$activity_name,$subActivity,$plant,$location,$floor,$department, $assignto,$a_date,$status,$reason,$followup,$close_date,$quantity,$remark) {
        $sql = "INSERT INTO activity(name,emailId,contactNo,password,role,activity_name,subActivity,plant,location,floor,department, assignto,a_date,status,reason,followup,close_date,quantity,remark) VALUES ('$name','$emailId','$contactNo','$password','$role','$activity_name','$subActivity','$plant','$location','$floor','$department', '$assignto','$a_date','$status','$reason','$followup','$close_date','$quantity','$remark')";
        if ($this->con->query($sql) === TRUE) {
            $id=$this->con->insert_id;
            $result = mysqli_query($this->con, "SELECT * FROM users WHERE id='$id'");
                $userData=[];
                while($row = mysqli_fetch_assoc($result)) {
                $userData[]=$row;
                }
                $returnData['status']=TRUE;
                $returnData['data']=$userData;
                $returnData['message']="User successfully Added .";
        } else {
            $returnData['status']=FALSE;
            $returnData['message']="Something went wrong.";
        }
        return $returnData;
    }
    function getAllusers() {
        $result = mysqli_query($this->con, "SELECT * FROM activity WHERE role='USER'");
        if (mysqli_num_rows($result) > 0) {
            $userData=[];
            while($row = mysqli_fetch_assoc($result)) {
               $userdata[]=$row;
            }
            $returnData['status']=TRUE;
            $returnData['data']=$userdata;
            $returnData['message']="Selected Row is...";
        } else {
            $returnData['status']=FALSE;
            $returnData['message']="Something went wrong.";
        }
        return $returnData;
    }
    function getUserInfo($id) {
        $result = mysqli_query($this->con, "SELECT * FROM activity WHERE id='$id'");
        if (mysqli_num_rows($result) > 0) {
            $userData=[];
            while($row = mysqli_fetch_assoc($result)) {
               $userdata[]=$row;
            }
            $returnData['status']=TRUE;
            $returnData['data']=$userdata;
            $returnData['message']="Selected Row is...";
        } else {
            $returnData['status']=FALSE;
            $returnData['message']="Something went wrong.";
        }
        return $returnData;
    }
    
}
?>