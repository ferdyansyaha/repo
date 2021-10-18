<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "judul_halaman" => "skmshoes",
            "halaman_aktif" => "home",
        ];
        echo view('template/header.php', $data);
        echo view('template/body.php');
        echo view('template/footer.php');
    }

    public function about()
    {
        $data = [
            "judul_halaman" => "skmshoes",
            "halaman_aktif" => "about",
        ];
        echo view('template/header.php', $data);
        echo view('template/about.php');
        echo view('template/footer.php');
    }
}
