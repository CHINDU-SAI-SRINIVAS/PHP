<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <label>STATES:</label><form action="#" method="post">
    <select id="state" name="state">
        <option value="" class="text-muted">--Select--state--</option>
        <option value="1">Andhra Pradesh</option>
        <option value="2">Telangana</option>
        <option value="3">Tamil Nadu</option>
        <option value="4">Kerla</option>
    </select>
    <input type="submit" value="submit"/>
    </form>
    <?php
    include_once('dbstate.php');
    if(isset($_POST['state'])){
        $new=$_POST['state'];
        echo "<br><label>DISTRICTS:</label><br>";
        echo '<select name="dist" id="dist"><option>-select dist--</option>';
        $sql="select * from dist where state_code=$new";
        if($re=mysqli_query($my,$sql)){
            if(mysqli_num_rows($re)>0){
                while($row=mysqli_fetch_array($re)){
                    echo '<option value="'.$row["dist_code"].'">'.$row["dist_name"].'</option>';
                }
            }
        }
    echo '</select>';    
    }
    ?>
</body>
</html>