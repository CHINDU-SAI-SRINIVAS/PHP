<html>
<head>
</head>
<body>
    <table border="1">
    <tr>
    <th>s.no</th>
    <th>first name</th>
    <th>last name</th>
    <th>email</th>
    <th>mobile number</th>
    <th>date of birth</th>
    <th>gender</th>
    <th>qualification</th>
    <th>address</th>
    <th>changes</th>
    </tr>
<?php
include_once('db.php');
$ck="select * from japan";
if($out=mysqli_query($conn,$ck)){
    if(mysqli_num_rows($out)>0){
        while($row=mysqli_fetch_array($out)){
            echo "<tr>";
            echo "<td>".$row['sl_no']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['lastname']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['mobile']."</td>";
            echo "<td>".$row['dob']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['qual']."</td>";
            echo "<td>".$row['addr']."</td>";
            echo '<td><a href="read.php?id='.$row['sl_no'].'">read</a></td>';
            echo '<td><a href="update.php?id='.$row['sl_no'].'">update</a></td>';
            echo '<td><a href="delete.php?id='.$row['sl_no'].'">delete</a></td>';
            echo "</tr>";
        }
    }
}
?>
</table>
</body>
</html>