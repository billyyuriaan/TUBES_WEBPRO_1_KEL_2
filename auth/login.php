<?php
if (!isset($_POST['nama']) || !isset($_POST['password'])) {
    header("Location: http://localhost:8000/login/index.php");
}else {
    $_SESSION['nama'] = $_POST['nama'];
    header("Location: http://localhost/form/");
}