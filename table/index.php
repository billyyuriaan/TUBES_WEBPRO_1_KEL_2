<?php
include "../function/loginable.php";

$table = new Functions();

$table->checkLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/jquery/plugins/DataTables/datatables.min.css">

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
              if(isset($_SESSION['nama'])){
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
    <h1 class="text-center">Table</h1>

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <table class="table table-dark" id="test">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">NIM</th>
                  <th scope="col">Angakatan</th>
                  <th scope="col">Tanggal Ulang Tahun</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/jquery/plugins/DataTables/datatables.min.js"></script>

    <script>
      $.getJSON("http://localhost:8000/data/json/json.json", (data) => {
        var items = []
        var i = 1

        $.each(data.data, (key, val) => {
          items.push(
            "<th>" + i + "</th>"
            + "<td>" + val.nama + "</td>"
            + "<td>" + val.nim + "</td>"
            + "<td>" + val.angkatan + "</td>"
            + "<td>" + val.kelahiran + "</td>"
            
          )

          i++
        })

        for (let i = 0; i < items.length; i++) {
          $("<tr>", {
            html: items[i]
          }).appendTo("tbody")
          
        }

        $(".table").DataTable()
      })

    </script>
</body>
</html>