<?php

class database
{
    public $con;
    function __construct()
    {
       $this->con=mysqli_connect("localhost","root","","proc"); 
    }

}
$db=new database();


?>