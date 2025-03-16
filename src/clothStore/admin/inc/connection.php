<?php
$con= new mysqli("172.31.6.194","tarun","redhat","dm");
if($con->connect_error)
{
    echo $con->connect_error;
    exit;
}
?>