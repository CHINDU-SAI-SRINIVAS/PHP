<?php
include_once('db.php');
if(isset($_POST['id'])){
    $new1=$_POST['id'];
        $fn=$_POST['f_nm'];
        $ln=$_POST['l_nm'];
        $em=$_POST['email'];
        $mb=$_POST['m_num'];
        $db=$_POST['dob'];
        $gn=$_POST['gender'];
        $ql=$_POST['qln'];
        $ad=$_POST['add'];
    $new2="update japan set firstname='$fn',lastname='$ln',email='$em',mobile='$mb',dob='$db',gender='$gn',qual='$ql',addr='$ad' where sl_no=$new1";
    if($new3=mysqli_prepare($conn,$new2)){
        if(mysqli_stmt_execute($new3)){
            header("location:fetch.php");
            exit();
        }
        else echo "opps law";
    }
}
if($_GET['id']){
    $new4=$_GET['id'];
    $new5="select * from japan where sl_no='$new4'";
    if($new6=mysqli_prepare($conn,$new5)){
        if(mysqli_stmt_execute($new6)){
            $new7=mysqli_stmt_get_result($new6);
            if(mysqli_num_rows($new7)==1){
                $new8=mysqli_fetch_array($new7,MYSQLI_ASSOC);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="#" method="post" class="mt-5">
            <table>
                <tr>
                    <th><label for="f-nm" class="form-label">First name:</label></th>
                    <td><input type="text" class="form-control " name="f_nm"  value="<?php echo $new8['firstname'] ?>" ></td>
                </tr>
                <tr>
                    <th><label for="l-nm" class="form-label my-3">Last name:</label></th>
                    <td><input type="text" class="form-control " name="l_nm" value="<?php echo $new8['lastname'] ?>" ></td>
                </tr>
                <tr>
                    <th><label for="email" class="form-label my-3">Email:</label></th>
                    <td><input type="email" class="form-control " name="email" value="<?php echo $new8['email']  ?>" ></td>
                </tr>
                <tr>
                    <th><label for="m-num" class="form-label">Mobile Number:</label></th>
                    <td><input type="number" class="form-control " name="m_num" value="<?php echo $new8['mobile']  ?>" ></td>
                </tr>
                <tr>
                    <th><label for="dob" class="form-label my-3">Date-Birth:</label></th>
                    <td><input type="date" class="form-control " name="dob"value="<?php echo $new8['dob']  ?>" ></td>
                </tr>
                <tr>
                    <th><label for="gender" class="form-label my-3">Gender:</label></th>
                    <td>
                    <?php if($new8['gender']=='male'){?>
                        <label class="form-check-label">Male</label>
                        <input type="radio" class="form-check-input " name="gender" value="male" checked>
                        <label class="form-check-label">Female</label>
                        <input type="radio" class="form-check-input " name="gender" value="female">
                        <label class="form-check-label">Special</label>
                        <input type="radio" class="form-check-input " name="gender" value="special" >
                        <?php }else if($new8['gender']=='female'){?>
                        <label class="form-check-label">Male</label>
                        <input type="radio" class="form-check-input " name="gender" value="male" >
                        <label class="form-check-label">Female</label>
                        <input type="radio" class="form-check-input " name="gender" value="female" checked>
                        <label class="form-check-label">Special</label>
                        <input type="radio" class="form-check-input " name="gender" value="special" >
                        <?php }else{?>
                        <label class="form-check-label">Male</label>
                        <input type="radio" class="form-check-input " name="gender" value="male" >
                        <label class="form-check-label">Female</label>
                        <input type="radio" class="form-check-input " name="gender" value="female">
                        <label class="form-check-label">Special</label>
                        <input type="radio" class="form-check-input " name="gender" value="special" checked>
                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <th><label for="qu" class="form-label my-3" >Qualification:</label></th>
                    <td><select name="qln" id="" class="w-100">
                        <option value="" class="text-muted">--Select--qualification--</option>
                        <option value="b.tech">B.TECH</option>
                        <option value="m.tech">M.TECH</option>
                        <option value="b.sc">B.SC</option>
                        <option value="m.sc">M.SC</option>
                    </select></td>
                </tr>
                <tr>
                    <th><label for="" class="form-label">Address:</label></th>
                    <td><textarea name="add" id="" cols="30" rows="5"><?php echo $new8['addr']  ?></textarea></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="<?php echo $new4?>">
            <input type="submit" class="btn-info mt-3" style="margin-left:170px;">
        </form>
    </div>   
</body>
</html>