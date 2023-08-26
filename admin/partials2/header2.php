<?php

echo '<nav>
            <label class="logo2">Admin Panel</label>
                  
      </nav>   

<header>';
?>

<style>
.navbar{
    z-index: 1;
}
</style>


<?php echo '<div class="menu">
    <i class="fa-solid fa-bars"></i>
    <div class="navbar nav-first">
        <div class="navbar nav-second">
            <div class="navbar navbar-list">
                <i class="fa-solid fa-circle-xmark"></i>
                <ul>
                    <li><a href="categories.php" >Categories </a></li>
                    <li><a href="queries.php" >Threads </a></li>
                    <li><a href="comments.php" >Comments </a></li>
                    <li><a href="suggestions.php" >Suggestions </a></li>
                    <li><a href="users.php" >Users </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

</header>';

        
?>