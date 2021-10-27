<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataBarang extends Seeder
{
    public function run()
    {
            $data = [
                    'barang_title' => 'Patrobas',
                    'barang_description'    => 'Price and Benefit',
                    'barang_harga'    => '269.000',
                    'barang_stok'    => '56'
            ];

            // Simple Queries
            $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

            // Using Query Builder
            $this->db->table('barang')->insert($data);
        
    }
}
