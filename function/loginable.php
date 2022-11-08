<?php

class Functions{
    public function checkLogin()
    {
        if (!isset($_SESSION['nama'])) {
            header("Location: http://localhost:8000/");
        }
    }
}