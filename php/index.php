<?php
session_start();
require "config.php";
include "header.php";
$comp =mysqli_query($conn,"SELECT color,nb From clients");
$car =mysqli_query($conn,"SELECT quantity FROM cartouche");
$ton =mysqli_query($conn,"SELECT quantity FROM tonerbag");
$img =mysqli_query($conn,"SELECT quantity FROM imageunit");
$cl =mysqli_query($conn,"SELECT * FROM clients");
$count_car=0; $count_ton=0; $count_img=0; $c=0; $counter_mach=0;
while($row=mysqli_fetch_array($car)){
    $count_car=$count_car+$row["quantity"];
}
while($row=mysqli_fetch_array($ton)){
    $count_ton=$count_ton+$row["quantity"];
}
while($row=mysqli_fetch_array($img)){
    $count_img=$count_img+$row["quantity"];
}
while($row=mysqli_fetch_array($cl)){
    $c++;
}
while($row=mysqli_fetch_array($comp)){
    $counter_mach=$counter_mach+$row["color"]+$row["nb"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dash</title>
    <link rel="stylesheet" href="/stockosio/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="/stockosio/img/s-fab.png" rel="icon" type="image/x-icon" />
</head>

<body>
    <div class="container">

        <div class="dash">
            <h1><img src="/stockosio/img/view.svg" style="width: 35px !important;">View</h1>
            <div class="action">
                <button><a href="/stockosio/php/cartouche.php">Cartouche</a></button>
                <button><a href="/stockosio/php/tonerbag.php">Toner-bag</a></button>
                <button><a href="/stockosio/php/unitimage.php">Unit-Image</a></button>
                <button><img src="/stockosio/img/client.svg" style="width: 20px !important;"><a href="/stockosio/php/client.php">Client-Info</a></button>
                <button><img src="/stockosio/img/cart.svg" style="width: 20px !important;"><a href="/stockosio/php/livrasion_list.php">Livrasion</a></button>
                <button><img src="/stockosio/img/printer.svg" style="width: 20px !important;"><a href="/stockosio/php/machine.php">Machine</a></button>
                <button><img src="/stockosio/img/counter.svg" style="width: 20px !important;"><a href="/stockosio/php/addcounter.php">compteur</a></button>
                <button><img src="/stockosio/img/gear.svg" style="width: 20px !important;"><a href="/stockosio/php/addintervension.php">Intervension</a></button>
            </div>
        </div>

        <div class="dash">
            <div class="show">
                <h1><img src="/stockosio/img/view.svg" style="width: 35px !important;">Total Stock</h1>
            </div>
            <div class="show">
                <?php echo htmlentities("Cartouche: ".$count_car);?><br>
                <?php echo htmlentities("Toner-bags: ".$count_ton);?><br>
                <?php echo htmlentities("Image-unit: ".$count_img);?><br>
                <?php echo htmlentities("Total-Clients: ".$c);?><br>
                <?php echo htmlentities("Total-Compter: ".$counter_mach);?>
            </div>
        </div>
    </div>
</body>
</html>