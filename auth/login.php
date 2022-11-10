<?php
session_start();
if (isset($_POST['email'])) {
    $str_name = $_POST['email'];
    $_SESSION['nama'] = strtok($str_name, '@');
    header("Location: http://localhost:8000/form/");
}else {
    header("Location: http://localhost:8000/login/index.php");
}