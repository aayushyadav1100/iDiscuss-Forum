<?php
    
    if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']== true){
        echo '<p class ="admin"> Welcome: ' . $_SESSION['username'] . '</p>
            
        <a href = "/forums/admin/index2.php"><button type ="button" class="logout" id="admin-home" >Home</button></a>
        <a href = "adminlogout.php"><button type ="button" class="logout" id="logout"  value="Logout" >Logout</button></a>';
    }
?>