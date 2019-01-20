<?php
class calldata
{
    public $uemail;public $upass;public $uname;public $ucontact;public $ucity;public $uage;
    public $ugender;
    
    public function create_user()
    {
        global $db;
        mysqli_query($db->con,"insert into `logins`(`email`,`password`) values 
        ('".$this->uemail."','".$this->upass."')");
        $last_id = mysqli_insert_id($db->con);
        mysqli_query($db->con,"insert into `details`(`login_id`,`uname`,`contact`,`city`,`gender`,`age`)
         values('".$last_id."','".$this->uname."','".$this->ucontact."','".$this->ucity."','".$this->ugender."','".$this->uage."')");
    
        return "User Created Successfully";    
    }
    
    
    public function check_login()
    {
        global $db;global $session;
        $query=mysqli_query($db->con,"SELECT * FROM `logins` WHERE `email`='".$this->uemail."' and `password`='".$this->upass."'"); 
        if(mysqli_num_rows($query) == 1)
        {
            $session->user_create();
            echo"<script>location.href='home.php';</script>";
        }
        else
        {
             echo"<script>alert('User Invalid');location.href='index.php';</script>";
        }
   }
    
}
$calldata=new calldata();

?>