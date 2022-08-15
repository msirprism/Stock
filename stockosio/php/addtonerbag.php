<?php 
require "config.php";
include "header.php";
$sql="SELECT * FROM tonerbag";
$sql2 = "SELECT * From machine";
$img =mysqli_query($conn,$sql);
$result = $conn->query($sql2);
$result2 = $conn->query($sql);
$count_ton=0;
while($row=mysqli_fetch_array($img)){
    $count_ton=$count_ton+$row["quantity"];
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta name = "viewport" content = "with=device-width, initial scale = 1.0">
    <title>ADD-Tonerbag</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400&display=swap" rel="stylesheet">           
    <link rel= "stylesheet" href="/stockosio/css/style_adminpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <link href="/stockosio/img/s-fab.png" rel="icon" type="image/x-icon" />
</meta>
</head>
<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
    <div class="container"><img src="/stockosio/img/s-fab.png"></div>
        <form action="" method= "POST">
            <h1>ADD-Tonerbag</h1>
            <div class="show">
                <?php echo htmlentities("Total: ".$count_ton);?>
            </div>
            <div class="content">
                <div class="input-field">
                    <label>Machine-Name</label>
                    <select name="name">
                        <?php while($row = $result->fetch_array()){?>
                        <option value="name" name="name"><?php echo $row['name'];}?></option>
                    </select>
                </div>
                <div class="input-field">
                    <label>Tonerbag-ref</label>
                    <select name="ref">
                        <?php while($row = $result2->fetch_array()){?>
                        <option name="ref"><?php echo $row['ref'];}?></option>
                    </select>
                </div>
                <div name="input-field">
                    <label>Quantity</label>
                    <input type="number" name="quantity" placeholder="6" autocomplete="nope">
                </div>
            </div>
            <div class="action">
                <button type = "submit" name="submit">Update</button>
            </div>
        </form>
    </div>
    <!-- partial -->                                                                                               
</body>

<?php
$i=0; $t=0;
if(isset($_POST['submit'])){
    $date = date('d-m-y');
    $time = date("H:i:s");
    $name =$_POST['name'];
    $ref =$_POST['ref'];
    $quantity =$_POST['quantity'];
    if(empty($name) ||empty($ref)|| empty($quantity)){
        ?><script>swal.fire("Attention", "All feilds required", "warning")</script><?php
        mysqli_close($conn);
    }
    else{
        $sql =mysqli_query($conn, "SELECT ref from tonerbag");
        while($row=mysqli_fetch_array($sql)){
            $st_id=$row["id"];
            if($row["ref"]==$ref and $quantity>0){
                #echo htmlentities($row["ref"]);
                $t=$quantity+$row["quantity"];
                $update_tb= "UPDATE tonerbag SET quantity='$t' WHERE id=$st_id";
                $run_upate = mysqli_query($conn,$update_tb);
                $i++;
                break;
            }
        }
        if($i==0){
            $query ="insert into tonerbag(date,time,name,ref,quantity) values('$date','$time','$name','$ref','$quantity')";
            $run = mysqli_query($conn,$query);
            ?><script>swal.fire("Perfect", "added", "success")</script><?php
        }else{
            ?><script>swal.fire("Desole", "Already Exits", "warning")</script><?php
        }
    }
}
?>
</html>