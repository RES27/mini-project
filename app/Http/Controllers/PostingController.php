<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostingController extends Controller
{
    public function show()
    {
        return view('user.posting');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'judul.required' => 'Judul harus diisi',
            'konten.required' => 'Konten harus diisi',
            'foto.required' => 'Foto harus diisi',
            'foto.image' => 'Foto harus berupa gambar',
            'foto.mimes' => 'Foto harus berformat jpeg, png, jpg, gif, svg',
            'foto.max' => 'Foto maksimal 2MB',
        ]);


        $foto = $request->file('foto');
        $foto_name = time() . "_" . $foto->getClientOriginalName();
        $path = $foto->storeAs('public/images', $foto_name);
        $fullPath = storage_path('app/' . $path);

        $destination = public_path('storage/images/' . $foto_name);
        if (!file_exists($destination)) {
            symlink($fullPath, $destination);
        };

        $user_id = auth()->id();
            $data = Post::create([
                'user_id' => $user_id,
                'judul' => $request->judul,
                'konten' => $request->konten,
                'foto' => $foto_name,
            ]);

            return redirect()->route('beranda')->with('success', 'Posting created successfully');
    }
}
