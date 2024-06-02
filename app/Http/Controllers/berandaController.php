<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class berandaController extends Controller
{
    public function index()
    {
        $data = POST::all();
        return view('user.beranda', compact('data'));
    }

}
