<?php
require "config.php";
$result = mysqli_query($conn,"SELECT * FROM cartouche");
$show= mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta name = "viewport" content = "with=device-width, initial scale = 1.0">
    <title>Update-List</title>
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
    <link href="/stockosio/img/s-fab.png" rel="icon" type="image/x-icon" />
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
</meta>
</head>
<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form action="" method= "POST">
            <div class="content"><img src="/stockosio/img/s-fab.png"></div>
            <h1>Select-Machine</h1>
            <div class="show">
                <?php if ($result->num_rows==0){?>
                    <div class="txt">
                        <h1>No data yet</h1>
                    </div><?php
                    }
                    else{
                    $i=0;
                    while($row = $result->fetch_array()){
                        echo htmlentities ($row['name'].", ");
                        $i++;
                    }
                }?>
            </div>
            <div class="content">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <?php
                        $a=1;
                        while($row = $result->fetch_array()){
                            ?><?php echo htmlentities ($a.$row['ref']);
                            $a++;
                        }
                    ?>
                    </option>
                </select>
                <div class="input-field">
                    <label>Cartouche-ref</label>
                    <input type="name" name="ref" placeholder="Cartouche-ref" autocomplete="nope">
                </div>
                <div class="input-field">
                    <label>Color</label>
                    <input type="name" name="color" placeholder="C-M-Y-K" autocomplete="nope">
                </div>
                <div class="input-field">
                    <label>Quantity</label>
                    <input type="number" name="quantity" placeholder="6" autocomplete="nope">
                </div>
            </div>
            <div class="action">
                <button type = "submit" name="submit">Upload</button>
                <button href="/stockosio/php/update.php" style ="text-decoration:none; color: white;">Update</button>
            </div>
        </form>
    </div>
    <!-- partial -->
    <script  src="./script.js"></script>                                                                                                     
</body>
</html>