<?php

namespace App\Controllers;

class Post extends BaseController
{
    public function index()
    {
        // Memanggil view daftar blog
        return view('post'); 
    }

    public function detail($id)
    {
        // Memanggil view isi artikel
        return view('post_detail'); 
    }
}