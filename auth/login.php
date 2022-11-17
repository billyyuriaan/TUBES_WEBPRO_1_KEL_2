<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    // $str_name = $_POST['email'];
    // $_SESSION['nama'] = strtok($str_name, '@');
    header("Location: http://localhost/");
}else {
    header("Location: http://localhost/login");
}