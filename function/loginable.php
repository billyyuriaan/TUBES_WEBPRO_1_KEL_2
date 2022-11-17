<?php

class Functions{
    public function checkLogin()
    {
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: http://localhost/");
        }
    }
}