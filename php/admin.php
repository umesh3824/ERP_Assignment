<?php
  
class Admin {
    private $con;
    function __construct($con) {
        $this->con = $con;
    }
    function updateAdminProfile($id,$name,$emailId,$contactNo,$password) {
        $sql = "UPDATE activity SET name='$name',emailId='$emailId',contactNo='$contactNo',password='$password' WHERE id='$id'";
        if ($this->con->query($sql) === TRUE) {
                $returnData['status']=TRUE;
                $returnData['message']="Profile successfully Updated .";
        } else {
            $returnData['status']=FALSE;
            $returnData['message']="Something went wrong.";
        }
        return $returnData;
    }
    function getAdminProfile($id) {
        $result = mysqli_query($this->con, "SELECT * FROM activity WHERE id='$id'");
        if (mysqli_num_rows($result) > 0) {
            $userData=[];
            while($row = mysqli_fetch_assoc($result)) {
               $userdata[]=$row;
            }
            $returnData['status']=TRUE;
            $returnData['data']=$userdata;
            $returnData['message']="Admin profile is ....";
        } else {
            $returnData['status']=FALSE;
            $returnData['message']="Somthing went wrong.";
        }
        return $returnData;
    }
    function getAdminLogin($emailId,$password) {
        $result = mysqli_query($this->con, "SELECT * FROM activity WHERE emailId='$emailId' AND password='$password'");
        if (mysqli_num_rows($result) > 0) {
            $userData=[];
            while($row = mysqli_fetch_assoc($result)) {
               $userdata[]=$row;
            }
            $returnData['status']=FALSE;
            if($userdata[0]['emailId']==$emailId && $userdata[0]['password']==$password){
                $_SESSION['userId']=$userdata[0]['id'];
                $returnData['status']=TRUE;
                $returnData['data']=$userdata;
                $returnData['message']="User Successfully Login....";
            }else{
                $returnData['status']=FALSE;
                $returnData['message']="Incorrect Password OR Email.";
            }
        } else {
            $returnData['status']=FALSE;
            $returnData['message']="Incorrect Password OR Email.";
        }
        return $returnData;
    }
}
?>