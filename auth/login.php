<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $str_name = $_POST['email'];
    $_SESSION['name'] = strtok($str_name, '@');
    header("Location: http://localhost/");
}else {
    header("Location: http://localhost/login");
}