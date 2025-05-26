<?php
class Logout
{
    public function index()
    {
        session_start(); // pastikan session aktif
        session_unset(); // hapus semua isi session
        session_destroy(); // hancurkan session
        header("Location: " . BASEURL . "/login");
        exit;
    }
}
