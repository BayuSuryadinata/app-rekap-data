<?php

class Login extends Controller
{
    public function index() {
        // Kalau udah login, langsung redirect ke dashboard sesuai role
        if (isset($_SESSION['login'])) {
            if ($_SESSION['role'] == 'admin') {
                header('Location: ' . BASEURL . '/admin/kelolah_akun');
                exit;
            } elseif ($_SESSION['role'] == 'user') {
                header('Location: ' . BASEURL . '/user/stok-voucher');
                exit;
            }
        }

        $this->view('/login/index');
    }

    public function auth()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['usernameLogin'];
            $password = $_POST['passwordLogin'];

            //contoh hardcore
            if ($username === 'admin' && $password === 'admin123') {
                $_SESSION['login'] = true;
                $_SESSION['role'] = 'admin';
                header('Location: ' . BASEURL . '/admin/kelolah-akun');
                exit;
            } elseif ($username === 'user' && $password === 'user123') {
                $_SESSION['login'] = true;
                $_SESSION['role'] = 'user';
                header('Location: ' . BASEURL . '/user/stok-voucher');
                exit;
            } else {
                //gagal Login
                $data['error'] = 'Username atau password salah!';
                $this->view('/login/index', $data);
            }
        } else {
            header('Location: ' . BASEURL . '/login');
        }
    }
}