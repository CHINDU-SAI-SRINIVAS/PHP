<?php
include_once('db.php');
if(isset($_GET['id'])){
    $new1=$_GET['id'];
    $ck="delete from japan where sl_no=$new1";
    if(mysqli_query($conn,$ck)){
        header("location:fetch.php");
    }
    else{
        echo "error";
    }
}
?>