<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "2041720091/Kevin Natanael Wijaya/2B";
    }

    public function articles($id){
        return "Ini merupakan halaman artikel dengan id " . $id;
    }

}
