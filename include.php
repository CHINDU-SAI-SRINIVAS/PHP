<?php
include_once("db.php");
$fname=$_POST['f_nm'];
$lname=$_POST['l_nm'];
$email=$_POST['email'];
$num=$_POST['m_num'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$qua=$_POST['qln'];
$add=$_POST['add'];
$sql="insert into japan (firstname,lastname,email,mobile,dob,gender,qual,addr) values ('$fname','$lname','$email','$num','$dob','$gender','$qua','$add')"; 
if(mysqli_query($conn,$sql)){
    echo "success";
}
else{
    echo "failed";
}
?>