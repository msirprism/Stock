<?php include "header.php"; require "config.php";
session_start();
$sql = "SELECT * FROM machine";
$sql2 = "SELECT * FROM clients";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-info</title>
    <link rel= "stylesheet" href="/stockosio/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link href="/stockosio/img/s-fab.png" rel="icon" type="image/x-icon" />
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</head>
<body>
<div class="container">
    <div class="card">
    <h1><img src="/stockosio/img/client.svg" style="width: 35px !important;">Client</h1>
        <div class="col">
        <?php $sql3 =mysqli_query($conn, "SELECT * from clients"); $sql4 =mysqli_query($conn, "SELECT * from machine");
            while($row3=mysqli_fetch_array($sql3)){
                if($row3['name']==$_SESSION['varname']){?>
            <diV class="left">
                <h1><img src="/stockosio/img/eurobatsud_L.png"></h1>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Details</th>
                        </tr>
                        <?php $row = $result2->fetch_array()?>
                        <tr>
                            <th><?php echo "ID";?></th>
                            <td><?php echo $_SESSION['varid'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "NAME";?></th>
                            <td><?php echo $_SESSION['varname'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "Ph.";?></th>
                            <td><?php echo $_SESSION['varphone'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "Add.";?></th>
                            <td><?php echo $_SESSION['varaddress'];?></td>
                        </tr>
                    </thead>
                </table>
            </diV>
            <div class="right">
                <h1><img src="/stockosio/img/info.svg" style="width: 35px !important;">About</h1>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th>Machine</th>
                            <th>Type</th>
                        </tr>
                        <?php $row2 = $result->fetch_array()?>
                        <tr>
                            <th><?php echo "NAME";?></th>
                            <td><?php echo $_SESSION['varmach'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "Type";?></th>
                            <td><?php echo $row2['type'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "INK";?></th>
                            <td><?php echo $row2['ink'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "Ref.";?></th>
                            <td><?php echo $row['ref'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "COLOR";?></th>
                            <td><?php echo $row['color'];?></td>
                        </tr>
                        <tr>
                            <th><?php echo "NB.";?></th>
                            <td><?php echo $row['nb'];?></td>
                        </tr>
                    </thead>
                </table>
            </div>
            <?php }}?>
        </div>
    </div>
</div>

</body>
</html>