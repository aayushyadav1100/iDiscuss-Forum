<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="partials/_signupstyle.css">

    <title>Welcome to iDiscuss - Signup To Continue</title>
    <style>
        div{text-align:center;}
        </style>
  </head>
  <body>
    

    <div class="container my-4">
         
        <form class="mx-auto" action="partials/_handleSignup.php" method ="post">
        <h2 class="text-center" my-3 > Signup to iDiscuss </h2>

          <div class="form-group my-4 col-md-12 ">
            <label for="email" class="form-label"></label>
            <input type="text" class="form-control" id="signupEmail" name="signupemail" aria-describedby="emailHelp" placeholder="Enter Username">
            <small id="emailHelp" class="form-text text-muted">We will never share your username with anyone else.</small>
          </div>

          <div class="form-group my-4 col-md-12">
            <label for="password" class="form-label"></label>
            <input type="password" class="form-control" id="signupPassword" name="signuppassword" placeholder="Password">
          </div>

          <div class="form-group my-4 col-md-12">
            <label for="confirmPassword" class="form-label"></label>
            <input type="password" class="form-control" id="signupcPassword" name="signupcpassword" placeholder="Password">
          </div>
          
          <button type="submit" class="btn btn-primary mt-4 mb-3">Submit</button>
        </form>
        
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
  </body>
</html>


















