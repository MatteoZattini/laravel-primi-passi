<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'Matteo',
                'age' => 29,
            ],
            [
                'name' => 'Roberto',
                'age' => 50,
            ]
        ];

        return view(
            'home',
            [
                'users' => $users
            ]
    );
    }
}
