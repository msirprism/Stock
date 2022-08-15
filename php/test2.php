<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php 
session_start();
require "config.php";
echo "Client name:". $_SESSION['varname']; 
?>