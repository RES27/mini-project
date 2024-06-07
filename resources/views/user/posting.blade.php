@extends('layout_user.index')
@section('content')
<div class="container">
    <div class="page-wrapper">
        <div class="page-content">
            <div class="container mt-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posting.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                        <div class="col-md-6 offset-3 bg-danger rounded px-3 py-2 text-white my-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <textarea class="form-control" id="judul" name="judul" rows="3"></textarea>
                                @error('judul')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi Postingan</label>
                                <textarea class="form-control" id="description" name="konten" rows="3"></textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Gambar</label>
                                <input type="file" class="form-control" id="image" name="foto">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
