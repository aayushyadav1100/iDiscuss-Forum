<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/forums">i Discuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/forums">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';

          $sql = "SELECT category_name, category_id FROM `categories` LIMIT 3";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){

            echo '<li><a class="dropdown-item" href="threadlist.php?catid=' . $row['category_id'] . '">' . $row['category_name'] . '</a></li>';
            
            
          }

        echo '</ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacts.php">Contacts</a>
        </li>
      </ul>
      <div class="row mx-2">';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo '<form class="d-flex" action ="search.php"  method ="get">
        <input class="form-control me-2" name ="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success mx-2" type="submit">Search</button>
        <p class ="text-light my-0 mx-2"> Welcome: ' . $_SESSION['useremail'] . '</p>
        <a type ="button" class="btn btn-outline-success ml-2 nav-link" id="logout"  value="Logout" href ="logout.php">Logout</a></form>';
      }else{
        echo '<form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-success mx-2" type="submit">Search</button>
                  
                  <a type ="button" class="btn btn-outline-success ml-2 nav-link" id="login"  value="Login" href ="login.php">Login</a>
                  <a type ="button" class="btn btn-outline-success mx-2 nav-link" id="signup" value="Signup" href ="signup.php">Signup</a>
              </form>
            </div>';
      }
    echo '</div>
        </div>
      </nav>';

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>SUCCESS!</strong> You can now login.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
}else{
  if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']== "false"){
    echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            <strong>FAILURE!</strong> Signup failed . Please Signup again. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }      
}

?>