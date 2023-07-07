<?php
$server="localhost";
$user="root";
$pas="";
$db="districts";
$my=mysqli_connect($server,$user,$pas,$db);
if(!$my){
    echo "error";
}
?>