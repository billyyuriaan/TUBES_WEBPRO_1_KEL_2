<?php
session_start();
if (isset($_POST['nama'])) {
    $_SESSION['nama'] = $_POST['nama'];
    header("Location: http://localhost:8000/form/");
}else {
    header("Location: http://localhost:8000/login/index.php");
}