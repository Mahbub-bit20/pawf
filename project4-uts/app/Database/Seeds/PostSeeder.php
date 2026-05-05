<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
         // membuat data
        $posts_data = [
        [
            'title' => 'Mulai Nyobain Codeigniter',
            'slug' => 'codeigniter-starter',
            'content' => 'Eksplorasi pertama saya menggunakan framework CodeIgniter untuk mempercepat proses pengembangan web. Di sini saya membahas bagaimana struktur MVC (Model-View-Controller) sangat membantu dalam merancang sistem backend yang rapi dan mudah di-maintenance, terutama saat mengelola logika database yang kompleks.'
        ],
        [
            'title' => 'Cara Mudah Buat Hello World',
            'slug' => 'hello-world',
            'content' => 'Tidak hanya sekadar mencetak teks ke layar, saya membagikan langkah-langkah efisien memulai proyek web menggunakan PHP dan Python. Artikel ini membahas persiapan lingkungan pengembangan (environment) hingga menjalankan skrip pertama Anda dengan konfigurasi server yang optimal.'
        ],
        [
            'title' => 'Meetup Komunitas Kelas Koding',
            'slug' => 'meetup-comunity',
            'content' => 'Berbagi pengalaman saat berdiskusi dengan sesama pengembang di komunitas. Saya percaya bahwa belajar pemrograman tidak hanya soal kode, tapi juga soal bertukar ide tentang tren teknologi terbaru, performa hardware smartphone, hingga bagaimana sistem database skala besar dikelola di dunia industri.'
        ]
        ];
        foreach($posts_data as $data){
        // insert semua data ke tabel posts
        $this->db->table('posts')->insert($data);
        }
    }
}
