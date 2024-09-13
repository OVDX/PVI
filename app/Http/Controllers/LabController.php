<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{

    public function index()
    {
        $data = ['name' => 'Edward', 'role' => 'Student'];
        return view('welcome', $data);
    }

    public function about()
    {
        $data = ['name' => 'Edward', 'role' => 'Student', 'description' => 'Ovdeshka = Edward'];
        return view('about', $data);
    }

    public function contact()
    {
        $data = ['email' => 'ovdeshka@gmail.com', 'phone' => '+123456789'];
        return view('contact', $data);
    }
}
