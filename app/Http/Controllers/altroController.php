<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class altroController extends Controller
{
    public function index(){
        $teachers = DB::table('teachers')->select('name', 'surname', 'phone', 'email', 'office_address')->get();
        return view('altro')->with('teachers', $teachers);
    }
}
