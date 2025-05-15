<?php

class About
{
    public function index($nama = 'naruto', $pekerjaan = 'pelajar', $umur ='17')
    {
        echo "Saya $nama, berprofesi sebagai $pekerjaan, dan berumur $umur tahun.";
    }
    public function page()
    {
        echo "About";
    }
}
