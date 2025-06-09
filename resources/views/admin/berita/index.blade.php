@extends('layouts.app')

@section('content')
<h1>Daftar Berita</h1>
<a href="{{ url('/admin/berita/create') }}" class="btn btn-primary mb-3">+ Tambah Berita</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Slug</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($beritas as $berita)
        <tr>
            <td>{{ $berita->title }}</td>
            <td>{{ $berita->slug }}</td>
            <td>
                <a href="{{ url('/admin/berita/' . $berita->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ url('/admin/berita/' . $berita->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin hapus?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="3">Belum ada berita.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
