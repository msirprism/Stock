<?php require "config.php";
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $sql = "SELECT * FROM cartouche WHERE name LIKE '{$input}%'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){?>
        <table id="" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>                                                  
                    <th>#</th>
                    <th>ID</th> 
                    <th>Date-Liv.<br>(Y-M-D)</th>
                    <th>Time<br>(h-m-s)</th>
                    <th>Machine-name</th>
                    <th>Ref.</th>
                    <th>Color</th>
                    <th>Quantity</th>     
                </tr>                             
            </thead>
        </table>
        <tbody>
            <?php
            while($row =mysqli_fetch_assoc($result)){?>
                <table id="" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th><?php echo $i;?></th>                                                                                
                            <th><?php echo $row['id'];?></th>
                            <th><?php echo $row['date'];?></th>
                            <th><?php echo $row['time'];?></th>
                            <th><?php echo $row['name'];?></th>
                            <th><?php echo $row['ref'];?></th>
                            <th><?php echo $row['color'];?></th>
                            <th><?php echo $row['quantity'];?></th>                                       
                        </tr>                             
                    </thead>
                </table><?php
            }?>
        </tbody><?php
    }
}
?>