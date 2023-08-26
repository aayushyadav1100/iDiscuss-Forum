<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    h1 {
      font-size: 60px;
      text-align: center;
      color: darkcyan;
    }

    #div {
      background-position: center;
      height: 450px;
      opacity: 1;
      background-repeat: no-repeat;
      background-image: url(img/about.jpg);
      background-size: 1500px 1200px;
    }

    #div1 {
      background-color: cornsilk;
      text-align: center;
      margin: 20px;
      width: 45%;
      height: 408px;
      float: left;
    }

    #div2 {
      margin: 20px;
      width: 45%;
      float: right;
    }

  </style>

  <div id="div" class="container-fluid p-3 mb-2 bg-secondary text-center-dark bg-opacity-40">

  </div>
  <div class="container my-3 mb-2 ">
    <h1> About Us </h1>
  </div>

  <div class=flex-container>

    <div id="div1" class="jumbotron mb-5 my-3">

      <p>
      <h3><b> Why iDiscuss? </b></h3>
      </p>

      <p><em>iDiscuss</em> is a forum website dedicated to different types of coding languages & recent
        technological gatherings.
        This website aims to provide a dedicated space to the learners and developers to ask their problems
        related to their language, reply to the queries posted by other users
        & comment down the solution on the page.<br>
      </p>
      <p>
      <h3><b> Gather around various question</b></h3>
      <em>
        The heart of iDiscuss is threads — threads that affect the world, threads that explain recent
        technological events, threads that
        guide important skills, and threads that provide insights into why other people think differently.
        iDiscuss is a place
        where you can ask threads that matter to you and get answers from people who have been there and done
        that.
      </em>
      </p>
      <div class="lead text-center">
        <a class="btn btn-success btn-lg" href="https://en.wikipedia.org/wiki/Internet_forum" target="_blank"
          role="button">Learn more about forums</a>
      </div>
    </div>

    <div id="div2" class="container mb-5">
      <img src="img/about2.jpg" alt="A Commercial Building">
    </div>

  </div>


    





  <?php
  include 'partials/_footers.php';
  ?>
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>