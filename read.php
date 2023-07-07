<html>
    <head>

    </head>
    <body>
        <?php
        include_once('db.php');
        if(isset($_GET['id'])){
            $ass=$_GET['id'];
            $kc="select * from japan where sl_no='$ass'";
            if($new1=mysqli_prepare($conn,$kc)){
                if(mysqli_execute($new1)){
                    $result=mysqli_stmt_get_result($new1);
                    if(mysqli_num_rows($result)==1){
                        $new2=mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $fn=$new2['firstname'];
                        $ln=$new2['lastname'];
                        $em=$new2['email'];
                        $mb=$new2['mobile'];
                        $db=$new2['dob'];
                        $gn=$new2['gender'];
                        $ql=$new2['qual'];
                        $ad=$new2['addr'];
                    }
                }

            }
        }
        ?>
        <table border="1">
            <tr>
                <th>column name</th>
                <th>details</th>
            </tr>
            <tr>
                <th>first name</th>
                <td><?php echo $fn ?></td>
            </tr>
            <tr>
                <th>last name</th>
                <td><?php echo $ln ?></td>
            </tr>
            <tr>
                <th>email</th>
                <td><?php echo $em ?></td>
            </tr>
            <tr>
                <th>mobile number</th>
                <td><?php echo $mb ?></td>
            </tr>
            <tr>
                <th>dob</th>
                <td><?php echo $db ?></td>
            </tr>
            <tr>
                <th>gender</th>
                <td><?php echo $gn ?></td>
            </tr>
            <tr>
                <th>qualification</th>
                <td><?php echo $ql ?></td>
            </tr>
            <tr>
                <th>address</th>
                <td><?php echo $ad ?></td>
            </tr>
        </table>
        
    </body>
</html>