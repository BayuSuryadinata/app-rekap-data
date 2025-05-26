<?php

class Admin extends Controller {
    public function index() {
        if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $this->view('/admin/kelolah_akun');
    }

    public function stok_voucher_pic() {
        if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
            header('Location: ' . BASEURL . '/login');
            exit;
        }

        $this->view('/admin/stok_voucher_pic');
    }
    
}
