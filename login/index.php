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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost:8000/">Home</a>
                    </li>
                    <?php 
              if(isset($_SESSION['nama'])){
                echo "<li class='nav-item'>
                <a class='nav-link' href='http://localhost:8000/form/index.php'>Form</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='http://localhost:8000/table/index.php'>Table</a>
              </li>";
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
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <div class="card shadow-lg">
                            <div class="card-body p-5">
                                <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                                <form action="http://localhost:8000/auth/login.php" method="POST">
                                    <div class="mb-3">
                                        <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" value=""
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Email is invalid
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="mb-2 w-100">
                                            <label class="text-muted" for="password">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            required>
                                        <div class="invalid-feedback">
                                            Password is required
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Login
                                    </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery/jquery.min.js"></script>
</body>

</html>