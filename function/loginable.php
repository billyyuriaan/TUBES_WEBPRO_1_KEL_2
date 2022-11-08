<?php

class Functions{
    public function checkLogin()
    {
        session_start();
        if (!isset($_SESSION['nama'])) {
            header("Location: http://localhost:8000/");
        }
    }
}