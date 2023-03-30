<?php

namespace Database\Seeders;

use App\Models\Kategori;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Makanan',
                'deskripsi' => 'Sehat dan bergizi',

            ],
            [
                'nama' => 'Minuman',
                'deskripsi' => 'Enak dan Segar',

            ],
        ];

        foreach ($data as $item) {
            Kategori::create($item);
        }
    }
}
