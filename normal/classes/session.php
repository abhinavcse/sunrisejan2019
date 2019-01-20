<?php
class session
{
    
    function __construct()
    {
        session_start();   
    }
    function user_create()
    {
        global $calldata;
        $_SESSION['uemailid']=$calldata->uemail;
        
    }
    function unset_user()
    {
        if(isset($_SESSION['uemailid']))
            {
        unset($_SESSION['uemailid']);
            }
    }
    function check_user()
    {
        if(!isset($_SESSION['uemailid']))
        {
            echo"<script>location.href='index.php';</script>";
        }
    }
    
}
$session=new session();

?>