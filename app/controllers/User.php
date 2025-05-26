<?php

class User extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['login']) || $_SESSION['role'] != 'user') {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $this->view('/user/stok_voucher');
    }

    public function penjualan_voucher()
    {
        if (!isset($_SESSION['login']) || $_SESSION['role'] != 'user') {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $this->view('/user/penjualan_voucher');
    }

    public function komisi()
    {
        if (!isset($_SESSION['login']) || $_SESSION['role'] != 'user') {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $this->view('/user/komisi');
    }

}