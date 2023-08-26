<?php
        include 'partials2/_sessioncheck.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="partials2/style2.css">
    <link rel="stylesheet" href="partials2/stylebutton.css">
    <style>
    .row{
        margin-left: 30px;
        margin-right: 30px;
        padding: 15px 15px;
    }
    .card{
        font-size: 2.4rem;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        background-color: whitesmoke;

    }
    .card-title{
        font-size: 2.1rem;
        font-style: unset;
    }
    .card-text{
        font-style: italic;
    }
    .btn{
        font-size: 12px;
        
    }
    </style>
</head>

<body>
    <?php
        include 'partials2/_dbconnect.php';
    ?>

    <?php 
        include 'partials2/header2.php';
    ?>

    <?php
            include 'partials2/_button.php';
    ?>

    <br>
    <hr>
    <br>

    <div class="container-fluid mb-3 mt-3 pb-3 pt-3 mx-3">
        <div class="row">
            <div class="col-sm-6 mb-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <p class="card-text">This databse holds the categories present in the forum.</p>
                        <a href="categories.php" class="btn btn-primary">Explore Database</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Threads</h5>
                        <p class="card-text">This databse holds the questions asked by users.</p>
                        <a href="queries.php" class="btn btn-primary">Explore Database</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-6 mb-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comments</h5>
                        <p class="card-text">This databse holds the comments made by users.</p>
                        <a href="comments.php" class="btn btn-primary">Explore Database</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Suggestions</h5>
                        <p class="card-text">This databse contains the suggestions provided by users.</p>
                        <a href="suggestions.php" class="btn btn-primary">Explore Database</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-6 mb-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users</h5>
                        <p class="card-text">This databse contains the list of forum users.</p>
                        <a href="users.php" class="btn btn-primary">Explore Database</a>
                    </div>
                </div>
            </div>

        </div>

    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>


</body>
<script defer src="partials2/index2.js"> </script>

</html>