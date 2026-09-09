<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Informasi; // <--- Add this line!

class InformasiSeeder extends Seeder
{
    public function run(): void
    {
        Informasi::create([
            'kategori_id' => 1,
            'judul'       => 'Pengenalan Framework Laravel',
            'ringkasan'   => 'Penjelasan singkat tentang framework PHP Laravel.',
            'isi'         => 'Laravel adalah framework aplikasi web berbasis PHP yang menggunakan pola MVC.',
            'sumber'      => 'Dokumentasi Resmi',
            'status'      => 'Published',
        ]);
    }
}