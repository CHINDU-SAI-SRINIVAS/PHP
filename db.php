<?php
$servername="localhost";
$user="root";
$psw="";
$db="1st_try";
$conn=mysqli_connect($servername,$user,$psw,$db);
if(!$conn){
    echo "error";
}
else{
    echo "";
}
?>