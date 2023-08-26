<?php
        include 'partials2/_sessioncheck.php';
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="partials2/style2.css">
    <link rel="stylesheet" href="partials2/stylebutton.css">

    <style>
    .h1 {
        color: navy;
        text-align: center;
        text-decoration-line: underline;
        font-size: 26px;
        font-weight: bold;

    }

    .table {
        font-size: 16px;
        background-color: whitesmoke;
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

    <?php
    if(isset($_GET['delete'])){
        $sno = $_GET['delete'];
        $sql = "DELETE FROM `users` WHERE `sno` = $sno";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong>The User has been removed successfully.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }else{
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Failed</strong> The user cannot be removed due to " . mysqli_error($conn) . "
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }
    }

    ?>



    <h1 class="h1 my-3 mb-3 pb-3 pt-3"> <em> Users of forum website </em> </h1>

    <div class="container my-3 mb-4 pb-3 pt-3">

        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Sno </th>
                    <th scope="col">User_Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `users`";
                $result = mysqli_query($conn, $sql);
                $id = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $id + 1;
                    echo "<tr>
                    <th scope='row'>" . $id . "</th>
                    <td>" . $row['sno'] . "</td>
                    <td>" . $row['user_email'] . "</td>
                    <td> <button class='delete btn btn-sm btn-danger' id =d" . $row['sno'] . ">Delete</button> </td>
                    </tr>";

                }

                ?>
            </tbody>
        </table>

    </div>



    <hr>






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
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    })
    </script>
    <script>
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            sno = e.target.id.substr(1, );

            if (confirm(
                    "Are you sure that you want to delete this record!\nOnce pressed ok this record will be deleted from the database & cannot be retrived back."
                )) {
                console.log("yes");
                window.location = `/forums/admin/users.php?delete=${sno}`;
            } else {
                colsole.log("no");
            }

        })
    })
    </script>
</body>
<script defer src="partials2/index2.js"> </script>

</html>