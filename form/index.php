<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/jquery/plugins/ui/jquery-ui.css">

</head>
<body>
  <!-- Modal -->
  <div class="container" id="modal">
    <div class="row">
      <div class="col-md-6">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Angkatan</th>
              <th scope="col">Tanggal Lahir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" id="table_nama"></th>
              <td id="table_nim"></td>
              <td id="table_angkatan"></td>
              <td colspan="2" id="table_tgl"></td>
          </tbody>
        </table>
      </div>
    </div>
  </div>


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
            <a class="nav-link" href="http://localhost:8000/form/index.html">Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8000/table/index.html">Table</a>
          </li>
      </div>
    </div>
  </nav>

  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1 class="text-center" style="text-align: center;">Form</h1>
        <form>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim">
              </div>
              <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan</label>
                <select name="angkatan" id="angkatan">
                  <option value="2022" selected>2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tgl" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tgl">
              </div>
              <button type="submit" class="btn btn-primary" id="test">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/jquery/plugins/ui/jquery-ui.min.js"></script>
    <script src="../assets/sweetalert2/sweetalert2.all.min.js"></script>

    <script type="module">
        $("#angkatan").selectmenu()
        $("#tgl").datepicker()
        $("#modal").dialog({
          autoOpen : false,
          show: {
            effect: "blind",
            duration: 1000
          },
          hide: {
            effect: "explode",
            duration: 1000
          },
          width: 600,
          height: 450
        })

        
        $("#test").on("click", (e) => {
          e.preventDefault()

          Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: "Data Ini akan Di simpan?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya Yakin!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Berhasil!',
                'Data Anda Telah Berhasil di input.',
                'success'
              )

              $("#table_nama").html($("#nama").val())
              $("#table_nim").html($("#nim").val())
              $("#table_angkatan").html($("#angkatan").val())
              $("#table_tgl").html($("#tgl").val())

              $("#modal").dialog("open")
            }
          })
        })        
    </script>

</body>
</html>