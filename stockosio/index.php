<?php
    $email = "admin@admin.fr"; 
    $password = "123456";
?>
<!DOCTYPE html>
<html lang="en" >
<head>  
    <meta name = "viewport" content = "with=device-width, initial scale = 1.0">
        <title>Admin-Panel</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400&display=swap" rel="stylesheet">           
        <link rel= "stylesheet" href="/stockosio/css/style_adminpage.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <form action="" method= "POST">
        <div class="content">
          <div class="logo">
            <img src="/stockosio/img/s-fab.png"><h1>Admin-login</h1>
          </div>
          <div class="input-field">
              <input type="email" name="email" placeholder="email-id" autocomplete="nope">
          </div>
          <div class="input-field">
              <input type="password" name="password" placeholder="password" autocomplete="new-password">
          </div>
          </div>
          <div class="action">
              <button  type = "submit" name="submit" style="background: yeallow;">Login</button>
          </div>
          <p><img src="/stockosio/img/lock.svg" width=20px;>Secured by osionetworks</p>
        </div>
    </form>
</div>
<!-- local validation -->
<?php
if(isset($_POST['submit'])){
    $em = $_POST['email'];
    $pwd = $_POST['password'];
    if($em==$email and $pwd==$password){
        ?><script>swal.fire("Bonjour", "Welcome admin", "success")</script><?php
        header("location: /stockosio/php/index.php");
        $_SESSION["newsession"]=$value;
    }
    else{
        ?><script>swal.fire("Desole", "Invalid Credintials", "error")</script><?php
    }
}
?>                                                                         
</body>
</html>