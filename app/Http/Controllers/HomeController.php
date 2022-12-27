<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $products = array(
        array (
            'title' => 'Tolak Angin',
            'pricing' => '20000',
            'description' => 'Orang pintar minum Tolak Angin'
        ),
        array (
            'title' => 'Tamida Angin',
            'pricing' => '120000',
            'description' => 'Orang aring minum Tolak Angin'
        ));

        $data = array (
            'products' => $products
        );
        return view('welcome', $data);
    }
}
