<?php

class Functions{
    public function checkLogin()
    {
        session_start();
        if (!isset($_SESSION['name'])) {
            header("Location: http://localhost/");
        }
    }
}