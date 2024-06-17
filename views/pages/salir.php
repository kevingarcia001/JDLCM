<?php
// session_start();
session_destroy();

if(headers_sent()){
    echo "<script>window.location.href='index.php?pagina=login.php' </script>";
}else{
    header("Location: index.php?pagina=login.php");
}
exit();
?>
