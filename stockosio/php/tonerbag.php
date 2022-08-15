<?php require ("config.php");
include "header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products-Management</title>
    <link rel= "stylesheet" href="/stockosio/css/dash.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link href="/stockosio/img/s-fab.png" rel="icon" type="image/x-icon" />
</head>
<body>
</html>
<div class="btn">
    <button><img src="/stockosio/img/plus.svg" style="width: 15px !important;"><a href="/stockosio/php/addtonerbag.php">Tonerbag</a></button>
</div>
<?php
    $sql = "SELECT id, date, time, name, ref, quantity FROM tonerbag";
    $result = $conn->query($sql);
    if ($result->num_rows==0){?>
        <div class="txt">
            <h1>No data yet</h1>
        </div><?php
    }
    else{?>
        <section class="content-header">
        <h1>Toner-Bag</h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-body table-responsive">
                            <table id="" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>                                                  
                                        <th>#</th>
                                        <th>ID</th> 
                                        <th>Date(Y-M-D) /<br>
                                            Time(h-m-s)</th>
                                        <th>Machine-name</th>
                                        <th>Ref.</th>
                                        <th>Quantity</th>          
                                    </tr>                             
                                </thead>    
                            </table>
                        </diV>
                    </diV>
                </diV>
            </diV>
        </section>
        <?php $i=1;
        while($row = $result->fetch_array()){
        ?>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-body table-responsive">
                                <table id="" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><?php echo $i;?></th>                                                                                
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['date'];?><br>
                                                <?php echo $row['time'];?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['ref'];?></td>
                                            <td><?php echo $row['quantity'];?></td>                                       
                                        </tr>                             
                                    </thead>
                                </table>
                            </diV>
                        </diV>
                    </diV>
                </diV>
            </section>
        <?php
        $i++; //while loop
    }
}    
?> 
</body>