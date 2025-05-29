@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Update Struktur Organisasi</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.organisasi.upload') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" class="mb-3" required>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Upload</button>
    </form>

    @if($image)
        <h2 class="text-lg font-semibold mt-6">Gambar Saat Ini:</h2>
        <img src="{{ asset('storage/' . $image->image_path) }}" class="max-w-xl mt-2 rounded shadow">
    @endif
</div>
@endsection
