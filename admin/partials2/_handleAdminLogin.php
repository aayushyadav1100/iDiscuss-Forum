<?php 
$showError = false;
$login = false;
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        include '_dbconnect.php';
        $adminname= $_POST['admin'];
        $adminpass= $_POST['adminpass'];
        $sql = "SELECT * FROM `admin` WHERE `admin_name`= '$adminname' AND `admin_pass` = '$adminpass' ";
        $result = mysqli_query($conn, $sql);
        $numrows = mysqli_num_rows($result);
        if($numrows== 1){
            $row = mysqli_fetch_assoc($result);
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $adminname;
            $_SESSION['sno'] = $row['index_no'];
            header("location: /forums/admin/index2.php");
        }else {
            $showError = true;
            header("location: /forums/admin/adminlogin.php?adminlogin=false&error=$showError");
        }

            
    }

?>