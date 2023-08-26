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
    <!-- Connecting to database -->
    <?php
    include 'partials/_dbconnect.php';
    ?>

    <!-- Header -->
    <?php
    include 'partials/_header.php';
    ?>

    <style>
        #form2{
            background-color: rgb(229, 229, 229);
            box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 1);
        }
    </style>





    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * from `categories` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];

    }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        //insert threads into db
        $th_title =$_POST['problem'];
        $th_desc =$_POST['elaborate'];

        $th_title = str_replace(">", "&gt", $th_title);
        $th_title = str_replace("<", "&lt", $th_title);

        $th_desc = str_replace("<", "&lt", $th_desc);
        $th_desc = str_replace(">", "&gt", $th_desc);

        $sno =$_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread _desc`, `thread_cat_id`, `thread_user_id`, `timestamp`)
         VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn ,$sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>SUCCESS ! </strong>  Your thread has been added successfully. Please wait for the community to respond. 
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>';
        }
    }
    ?>

    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to
                <?php echo $catname; ?> Forums
            </h1>
            <p class="lead">
                <?php echo $catdesc; ?>
            </p>
            <hr class="my-3">
            <p>Rules for forums -
                Do not spam.
                Do Not Bump Posts.
                Do Not Offer to Pay for Help.

            </p>
            
        </div>
    </div>


    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
        echo '<div id="form2" class="container">
            <h2 class="py-3"> Start a discussion </h2>

            <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
                <div class="form-group my-3">
                    <label for="problemTitle">Problem Title</label>
                    <input type="text" class="form-control" id="problem" name="problem" aria-describedby="emailHelp"
                        placeholder="Enter the title">
                    <small id="emailHelp" class="form-text text-muted">Keep your title as short & crisp as possible.
                    </small>
                </div>
                <input type= "hidden" name ="sno" value= "' . $_SESSION["sno"] . '
                <div class="form-group my-3 pt-1 pb-1 mx-3 ">
                    <label for="problemElaboration">Elaborate your Problem</label>
                    <textarea class="form-control" id="elaborate" name="elaborate" rows="7"></textarea>
                    
                </div>
                <div class ="text-center">
                <button type="submit" class="btn btn-success my-3">Submit</button>
                </div>
            </form>

            </div>';
        }else{
            echo'
            <div class="container">
            <h2 class="py-3"> Start a discussion </h2>
            <p class ="lead"> You are not logged in. Please log in to start a dicussion.
            </div>';

        }


    ?>


    <div class="container my-4 mb-5">
        <h2 class="py-3"> Browse Questions </h2>
        <?php
        $id = $_GET['catid'];
        $sql = "SELECT * from `threads` WHERE thread_cat_id=$id ";
        $result = mysqli_query($conn, $sql);
        $noResult = true;

        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread _desc'];
            $thread_time = $row['timestamp'];
            $thread_user_id = $row['thread_user_id'];
            $sql2 = "SELECT user_email from `users` WHERE sno='$thread_user_id'";
            $result2 = mysqli_query($conn , $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            
 

            echo '<div class="media my-3">
                    <img class="mr-4" src="img/download.png" width = "44px" alt="...">
                    <div class="media-body"> 
                        <h5 class="mt-0"><a href ="thread.php?threadid=' . $id . '">' . $title . '</a></h5>
                        ' . $desc . '
                    
                    </div>
                    <p class= "fw-bold my-3">added by ' . $row2['user_email'] . ' at ' . $thread_time . ' </p> 
                </div>';

            if ($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
                            <div class="container">
                              <p class="display-4">No Threads for this category.</p>
                              <p class="lead">Be the first person to ask a question.</p>
                            </div>  
                      </div>';
            } 


        }

        ?>


    </div>









    <!-- Footer -->
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