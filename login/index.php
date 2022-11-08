<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/jquery/plugins/ui/jquery-ui.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container justify-content-end">
        <a class="navbar-brand" href="http://localhost:8000/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost:8000/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/form/index.php">Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/table/index.php">Table</a>
            </li>
            <?php 
              if(isset($_SESSION['name'])){
                echo "<li class='nav-item'>
                <a class='nav-link' href='http://localhost:8000/auth/logout.php'>Logout</a>
              </li>";
              }else{
                echo "<li class='nav-item'>
                <a class='nav-link' href='http://localhost:8000/login/index.php'>Login</a>
              </li>";
              }

              ?>
        </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4 mb-4">
                <h1 class="text-center">LOGIN</h1>
                <form action="http://localhost:8000/auth/login.php" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Username</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery/jquery.min.js"></script>
</body>
</html>