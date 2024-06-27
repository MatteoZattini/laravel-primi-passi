<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class altroController extends BaseController
{
    public function home() {
        return view('home');
    }
};