<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        $barangModel = model('App\Models\BarangModel');
        helper('date');
        $data = [
            "judul_halaman" => "skmshoes",
            "halaman_aktif" => "home",
        ];

        $dataBarang['dataBarang'] = $barangModel->findAll();

        echo view('template/header.php', $data);
        echo view('template/body.php', $dataBarang);
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

    public function delete()
    {
        $barangModel = model('App\Models\BarangModel');
        helper('date');
        $data = [
            "judul_halaman" => "skmshoes",
            "halaman_aktif" => "home",
        ];

        $dataBarang['dataBarang'] = $barangModel->delete();

        echo view('template/header.php', $data);
        echo view('template/body.php', $dataBarang);
        echo view('template/footer.php');
    }
}
