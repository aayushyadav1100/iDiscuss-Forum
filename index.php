<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forum</title>
  </head>
 

  <body>
    <!-- Connecting to database -->
    <?php
    include 'partials/_dbconnect.php';
    ?>

    <!-- Header -->
    <?php 
    include 'partials/_header.php';
    ?>

    <style>
        body{
            min-height: 100vh;
        }

    </style>



    <!-- Slider starts here -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://source.unsplash.com/random/300×800/?coding,microsoft" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://source.unsplash.com/random/300×800/?programming,apple" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://source.unsplash.com/random/300×800/?algorithms,google" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <!-- Categories starts here -->

    <div class="container my-3">
    <h2 class ="text-center">iDiscuss-Browse Categories</h2>
        <div class="row my-3" >

        <!-- Fetch all categories  -->
        <?php 
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['category_id'];
            $cat =$row['category_name'];
            $desc =$row['category_description'];

            echo 
                '<div class="col-md-4 my-2">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/random/500×400/?' . $cat . ',coding" class="card-img-top" alt=" ' . $cat . 'programming">
                        <div class="card-body">
                            <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                            <p class="card-text">' . substr($desc, 0, 49) . '...    </p>
                            <a href="threadlist.php?catid =' . $id . '" class="btn btn-primary">Explore Thread</a>
                        </div>
                    </div>
                </div>';

        }   
        ?>

        </div>
    </div>



    <!-- Footer -->
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