<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            "nama_kategori" => 'Baju',
            "slug" => 'baju'
        ]);

        Category::create([
            "nama_kategori" => 'Celana',
            "slug" => 'celana'
        ]);

        Category::create([
            "nama_kategori" => 'Tas',
            "slug" => 'tas'
        ]);

        Category::create([
            "nama_kategori" => 'Skincare',
            "slug" => 'skincare'
        ]);

        Barang::create([
            'nama_barang' => 'Baju 1',
            'gambar_barang' => 'baju1.jpg',
            'jumlah_barang' => 50,
            'harga_barang' => 50000,
            'keterangan_barang' => 'Ready',
            'category_id' => 1
        ]);
        Barang::create([
            'nama_barang' => 'Baju 2',
            'gambar_barang' => 'baju2.jpg',
            'jumlah_barang' => 54,
            'harga_barang' => 50000,
            'keterangan_barang' => 'Ready',
            'category_id' => 1
        ]);
        Barang::create([
            'nama_barang' => 'Baju 3',
            'gambar_barang' => 'baju3.jpg',
            'jumlah_barang' => 20,
            'harga_barang' => 70000,
            'keterangan_barang' => 'Ready',
            'category_id' => 1
        ]);
        Barang::create([
            'nama_barang' => 'Baju 4',
            'gambar_barang' => 'baju4.jpg',
            'jumlah_barang' => 20,
            'harga_barang' => 65000,
            'keterangan_barang' => 'Ready',
            'category_id' => 1
        ]);
        Barang::create([
            'nama_barang' => 'Celana 1',
            'gambar_barang' => 'celana1.jpg',
            'jumlah_barang' => 20,
            'harga_barang' => 65000,
            'keterangan_barang' => 'Ready',
            'category_id' => 2
        ]);
        Barang::create([
            'nama_barang' => 'Tas 1',
            'gambar_barang' => 'tas1.jpg',
            'jumlah_barang' => 20,
            'harga_barang' => 65000,
            'keterangan_barang' => 'Ready',
            'category_id' => 3
        ]);
        Barang::create([
            'nama_barang' => 'Skincare 1',
            'gambar_barang' => 'skincare.jpg',
            'jumlah_barang' => 20,
            'harga_barang' => 65000,
            'keterangan_barang' => 'Ready',
            'category_id' => 4
        ]);
    }
}
