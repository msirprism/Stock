<?php include "header.php"; require "config.php";
$sql = "SELECT * FROM machine";
$sql2 = "SELECT * FROM clients";       
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
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
            <img src="/stockosio/img/eurobatsud_L.png" style="width: 35px !important;">
            <h1><img src="/stockosio/img/info.svg" style="width: 35px !important;">About</h1>
        </div>
        <diV class="left">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Details</th>
                    </tr>
                    <?php $row = $result2->fetch_array()?>
                    <tr>
                        <td><?php echo "NAME";?></td>
                        <td><?php echo $row['name'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Ph.";?></td>
                        <td><?php echo $row['phone'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Add.";?></td>
                        <td><?php echo $row['address'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Ref.";?></td>
                        <td><?php echo $row['ref'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "COLOR";?></td>
                        <td><?php echo $row['color'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "NB.";?></td>
                        <td><?php echo $row['nb'];?></td>
                    </tr>
                </thead>
            </table>
        </diV>
        <div class="vertical"></div>
        <div class="right">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Machine</th>
                        <th>Type</th>
                    </tr>
                    <?php $row = $result->fetch_array()?>
                    <tr>
                        <td><?php echo "NAME";?></td>
                        <td><?php echo $row['name'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "Type";?></td>
                        <td><?php echo $row['type'];?></td>
                    </tr>
                    <tr>
                        <td><?php echo "INK";?></td>
                        <td><?php echo $row['ink'];?></td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

</body>
</html>