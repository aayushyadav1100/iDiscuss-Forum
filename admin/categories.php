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

    .form4 {
        background-color: whitesmoke;
        font-size: 14px;
    }

    .table {
        font-size: 14px;
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


    <!-- Edit modal -->
    <!--
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
       Edit Modal
    </button>
    -->
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form4" action="categories.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="idEdit" id="idEdit">
                        <div class="form-group">
                            <label for="addCategoryName">Category Name</label>
                            <input type="text" class="form-control" id="categoryNameEdit" name="cat_nameEdit"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="form-group">
                            <label for="categoryDescription">Category Description</label>
                            <textarea class="form-control" id="categoryDescriptionEdit" name="cat_descEdit"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <?php
    if(isset($_GET['delete'])){
        $sno = $_GET['delete'];
        $sql = "DELETE FROM `categories` WHERE `category_id` = $sno";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> The record has been deleted successfully.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }else{
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Failed</strong> Record cannot be deleted due to " . mysqli_error($conn) . "
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['idEdit'])){
            $sno = $_POST['idEdit'];
            $catname = $_POST["cat_nameEdit"];
            $catdesc = $_POST["cat_descEdit"];

            $sql = "UPDATE `categories` SET `category_name`='$catname',`category_description`='$catdesc' WHERE `categories`.`category_id` = '$sno' ";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>Success!</strong> The record has been updated successfully.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
            }else{
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Failed</strong> The record cannot be updated due to " . mysqli_error($conn) . "
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
            }

        }else{
            $catname = $_POST["cat_name"];
            $catdesc = $_POST["cat_desc"];

            $sql = "INSERT INTO `categories`(`category_name`, `category_description`) VALUES ('$catname','$catdesc')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Success!</strong> The data has been inserted.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            } else {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Failed</strong> Data cannot be inserted due to " . mysqli_error($conn) . "
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            }
        }
    }

    ?>

    <h1 class="h1"> <em> Categories present in Database </em> </h1>

    <div class="container my-3 mb-4">

        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `categories`";
                $result = mysqli_query($conn, $sql);
                $id = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $id + 1;
                    echo "<tr>
                    <th scope='row'>" . $id . "</th>
                    <td>" . $row['category_name'] . "</td>
                    <td>" . $row['category_description'] . "</td>
                    <td>" . $row['created'] . "</td>
                    <td> <button class='edit btn btn-sm btn-primary' id =" . $row['category_id'] . ">Edit</button> 
                        <button class='delete btn btn-sm btn-danger' id =d" . $row['category_id'] . ">Delete</button> </td>
                    </tr>";

                }

                ?>
            </tbody>
        </table>

    </div>


    <h1 class="h1"> Add new categories & it's description to database </h1>

    <div class="container mt-4 mb-4 pb-3 pt-3">
        <form class="form4" action="categories.php?update=true" method="POST">
            <div class="form-group">
                <label for="addCategoryName">Category Name</label>
                <input type="text" class="form-control" id="categoryName" name="cat_name" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="categoryDescription">Category Description</label>
                <textarea class="form-control" id="categoryDescription" name="cat_desc" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Add</button>
        </form>
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
    });
    </script>
    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            tr = e.target.parentNode.parentNode;
            name = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(name, description);
            categoryNameEdit.value = name;
            categoryDescriptionEdit.value = description;
            idEdit.value = e.target.id;
            console.log(e.target.id);
            $('#editModal').modal('toggle');
        })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit", );
            sno = e.target.id.substr(1, );

            if (confirm(
                    "Are you sure that you want to delete this record!\nOnce pressed ok this record will be deleted from the database & cannot be retrived back."
                )) {
                console.log("yes");
                window.location = `/forums/admin/categories.php?delete=${sno}`;
            } else {
                colsole.log("no");
            }

        })
    })
    </script>
</body>
<script src="partials2/index2.js"> </script>

</html>