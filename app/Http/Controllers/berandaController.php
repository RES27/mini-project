<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class berandaController extends Controller
{
    public function index()
    {
        $data = POST::all();
        return view('user.beranda', compact('data'));
    }

    public function show()
    {
        $data = DB::table('posts')->get();
        return view('layout.index', compact('data'));
    }

}
