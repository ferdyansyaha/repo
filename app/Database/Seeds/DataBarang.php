<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBarang extends Seeder
{
    public function run()
    {
            $data = [
                'barang_title'          => 'Sepatu Sneaker Ventela 70s LC Gum Sol Natural/Gum',
                'barang_description'    => 'selama masih bisa di order barang ready.
                                                silahkan cek langsung ketersediaan stok.
                                                barang berkualitas insole empuk dan tidak licin.
                                                100% original.',
                'barang_harga'          => '249.800',
                'barang_stok'           => '58',
                'barang_img'            => 'item-1.jpg'
            ];

            $data = [
                'barang_title'          => 'Sepatu Sneaker Ventela BTS 70s Low Glossy Cream/Natural',
                'barang_description'    => 'midsole berwarna natural / putih tulang.
                                           selama masih bisa di order barang ready.
                                           silahkan cek langsung ketersediaan stok.
                                           barang berkualitas insole empuk dan tidak licin.
                                           100% original.',
                'barang_harga'          => '239.800',
                'barang_stok'           => '100',
                'barang_img'            => 'item-2.jpg'
           ];

           $data = [
                'barang_title'          => 'Sepatu Sneaker by Ventela BTS 70s Low Glossy White/Natural',
                'barang_description'    => 'midsole berwarna natural / putih tulang.
                                        selama masih bisa di order barang ready.
                                        silahkan cek langsung ketersediaan stok.
                                        barang berkualitas insole empuk dan tidak licin.
                                        100% original.',
                'barang_harga'          => '239.800',
                'barang_stok'           => '107',
                'barang_img'            => 'item-3.jpg'
        ];

        $data = [
                'barang_title'          => 'Sepatu Sneaker by Ventela BTS 70’s LC Glossy Black/White',
                'barang_description'    => 'midsole berwarna natural / putih tulang.
                                        white / putih bersih
                                        selama masih bisa di order barang ready.
                                        silahkan cek langsung ketersediaan stok.
                                        barang berkualitas insole empuk dan tidak licin.
                                        100% original.',
                'barang_harga'          => '239.800',
                'barang_stok'           => '37',
                'barang_img'            => 'item-4.jpg'
        ];

        
        $data = [
            'barang_title'          => 'Sepatu Sneaker by Ventela Basic Low Black/Natural',
            'barang_description'    => 'beda dengan seri public
                                        seri ini tidak memiliki stripe di pinggir nya seperti seri public
                                        overall hampir mirip seri public ada stripe di belakang
                                        rekomen nih karena harga yang berbeda jauh namun bahan hampir sama dengan seri public
                                        lebih murah
                                        bahan nyaman dan empuk
                                        artikel;
                                        black/natural ; putih tulang
                                        black/white ; putih bersih
                                        
                                        size chart:

                                        36 ; 23,1 cm
                                        37 ; 23.8 cm
                                        38 ; 24.7 cm
                                        39 ; 25.2 cm
                                        40; 26.1 cm
                                        41 ; 26.5 cm
                                        42 ; 27.4 cm
                                        43 ; 28.3 cm
                                        44 ; 28.8 cm

                                        stok sesuai ketersediaan barang.
                                        langsung order ya ka. terima kasih!',
            'barang_harga'          => '189.800',
            'barang_stok'           => '125',
            'barang_img'            => 'item-5.jpg'
    ];

            // Simple Queries
        //     $this->db->query("INSERT INTO barang (barang_title, barang_description, barang_harga, barang_stok, barang_img) 
        //     VALUES(:barang_title:, :barang_description:, :barang_harga:, :barang_stok: ,:barang_img:)", $data);

            // Using Query Builder
            $this->db->table('barang')->insert($data);
        
    }
}
