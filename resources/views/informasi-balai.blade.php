@extends('layouts.app')

@section('content')
    <h1>Informasi Balai</h1>
    @foreach($balais as $balai)
        <article>
            <h2>{{ $balai->nama_balai }}</h2>
            <p>{{ Str::limit($balai->deskripsi, 150) }}</p>
            <a href="{{ url('/balai/' . $balai->slug) }}">Detail</a>
        </article>
    @endforeach
@endsection
