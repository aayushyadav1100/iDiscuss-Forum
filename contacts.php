<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Welcome to iDiscuss - Coding Forum</title>
  </head>
  <body>
    <?php 
    include 'partials/_dbconnect.php';
    ?>

    <?php 
    include 'partials/_header.php';
    ?>
  <style>
    body{
            min-height: 100vh;
      }
    
    h2{text-align: center;
      color: darkslategray;
    }
    h3{text-align: center;
      font-size: 20px;
      color: darkcyan;
    }
    h4{
      text-align:center;
      color: darkblue;
    }
    #div{
      background-position: center;
      height: 450px;
      opacity: 1;
      background-repeat: no-repeat;
      background-image: url(img/customer.jpg);
      background-size: 1500px 1200px;
    }
    #form{
      background-color: whitesmoke;
    }

    .social-icon{
      position: sticky;
      margin-bottom: 100px;
    }
    .social-icon ul{
      position: absolute ;
      top: 85%;
      left: 50%;
      
      transform: translate(-50%,-50%);
      display: flex;
    }
    .social-icon ul li{
      list-style: none;
      margin: 0 15px;
    }
    .social-icon ul li .fab{
      font-size: 35px;
      line-height: 60px;
      transition: 0.2s;
      color: rgb(29, 29, 29);
    }

    .social-icon ul li .fab:hover{
      color: rgb(225, 225, 225);

    }
    .social-icon ul li a{
      position: relative;
      display: block;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: rgb(199, 195, 195);
      text-align: center;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 2);
      transition: .3s;
    }

    .social-icon ul li a:hover{
      transform: translate(0,-10%);

    }

    .social-icon ul li:nth-child(1) a:hover{
      background-color: rgb(50, 123, 157);
    }
    .social-icon ul li:nth-child(2) a:hover{
      background-color: rgb(255, 60, 60);
    }
    .social-icon ul li:nth-child(3) a:hover{
      background-color: rgb(132, 215, 254);
    }
    .social-icon ul li:nth-child(4) a:hover{
      background-color: rgb(41, 58, 169);
    }
    .social-icon ul li:nth-child(5) a:hover{
      background-color: rgb(15, 15, 15);
    }
  

  </style>

<?php 
    if (isset($_GET['suggestions']) && $_GET['suggestions'] == "true") {
      echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>SUCCESS!</strong> Your suggestions have been submitted successfully!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
    }else{
      if(isset($_GET['suggestions']) && $_GET['suggestions']== "false"){
        echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
                <strong>FAILURE!</strong> Your suggestion cannot be submitted! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
        }      
    }
?>


  <div>
    <div id="div" class="p-3 mb-2 bg-secondary text-dark bg-opacity-35 ">
      
    </div>


    <div class="container mt-3 mb-3">
    <h2> We would like to hear from you </h2>
    </div>

    <div class="container text-center-dark p-4 mb-6">
      
      <h3><em> For any type of suggestions, issues or feedback kindly email us at- </em> <br> 
        <a text-center href = https://mail.google.com?#inbox?compose=new>idiscuss@gmail.com</a> <br>
       <em>Or simply just fill the form</em>  
    </div>

    <div id ="form" class="container p-3 mb-2 bg-opacity-70">
      <h4> Share Your Opinion</h4>

    <form action="partials/_suggestions.php" method="post">
        <div class="mb-3">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" name ="name" id="name" placeholder="Name" >
          
        </div>
        <div class="mb-3">
          <label for="Email1" class="form-label">Email</label>
          <input type="email" class="form-control" name ="email1" id="email1" aria-describedby="emailHelp" placeholder="Email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="Phone Number" class="form-label">Phone Number</label>
          <input type="number" class="form-control" name ="phoneNumber" id="phoneNumber" placeholder="Phone Number">
        </div>
        <div class="form-floating">
          <label for="suggestion"></label>
          <textarea class="form-control" name = "suggestions" id="suggestions" placeholder="Leave your suggestions here" style="height: 100px"></textarea>
          
        </div>
      
        <button type="submit" class="btn btn-success my-3">Submit</button>
      </form>


    </div>

  </div>  

  <div class="container pb-4 mt-1 text-center">
    <h4> Connect with us on other social media platforms </h4>

  </div>

  
  <div class="social-icon mt-1 pb-2">
      <ul>
        <li> <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook"></i></a> </li>
        <li> <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a> </li>
        <li> <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a> </li>
        <li> <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a> </li>
        <li> <a href="https://www.github.com/" target="_blank"><i class="fab fa-github"></i></a> </li>
      </ul>

  </div>




    <?php
    include 'partials/_footers.php';
    ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://kit.fontawesome.com/d652b41484.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>