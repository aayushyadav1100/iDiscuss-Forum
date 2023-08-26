<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="partials2/_adminloginstyle.css">

    <title>Welcome to Admin-Login</title>
    <style>
        
    </style>

</head>


<body>

    <div class="container mb-3 mt-3 pb-3 pt-3">
        <form class ="mx-auto" action="partials2/_handleAdminLogin.php" method="POST" >
            <h2 class="text-center" my-3 > Admin-Login </h2>
            <div class="form-group">
                <label for="adminUsername" class="form-label" ></label>
                <input type="text" class="form-control" id="adminuser" name = "admin" aria-describedby="emailHelp" placeholder="Enter username of admin">
            </div>
                
            <div class="form-group">
                <label for="adminPassword" class="form-label"></label>
                <input type="password" class="form-control" id="adminpass"  name = "adminpass" placeholder="Enter Admin-Password">
            </div>
            
            <button type="submit" class="btn btn-success mt-4">Enter</button>
        </form>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>