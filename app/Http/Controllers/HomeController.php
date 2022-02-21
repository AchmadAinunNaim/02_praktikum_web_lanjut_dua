<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index(){
        return 'Selamat Datang';
    }

    public function  nama(){
        return 'NIM : 2041720164  Nama : Achmad Ainun Naim';
    }
    
    public function  id($id){
        return 'Halaman Artikel dengan ID ' .$id;
    }
}    
