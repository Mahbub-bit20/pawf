<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog - Haidar Arif Mahbub</title>

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    
    <style>
        /* Latar belakang meja kayu klasik */
        body {
            background: url('https://images.unsplash.com/photo-1517646287270-a5a9ca602e5c?q=80&w=2070') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto', sans-serif;
            color: #bdc3c7;
        }

        /* Overlay gelap agar teks mudah dibaca */
        .background-overlay {
            min-height: 100vh;
            background: radial-gradient(circle, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.85) 100%);
        }

        /* Panel dan Card dengan gaya gelap elegan */
        .classic-panel, .card {
            background: #1e2529 !important;
            border: 1px solid #3c4449 !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.7), inset 0 0 15px rgba(0,0,0,0.5);
        }

        /* Warna teks emas tembaga untuk judul */
        .gold-text {
            font-family: 'Playfair Display', serif;
            color: #b8860b;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }

        .text-light {
            color: #d1d1d1 !important;
        }
    </style>
</head>
<body>
    <div class="background-overlay">
        <?= $this->include('layouts/navbar'); ?>