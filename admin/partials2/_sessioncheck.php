<?php 
   
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true){
        header("location: /forums/admin/adminlogin.php");
        
        exit;
    }
?>
