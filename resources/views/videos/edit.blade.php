@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Video</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videos.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul Video</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $video->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="video_url" class="form-label">URL Video</label>
            <input type="url" name="video_url" id="video_url" class="form-control" value="{{ old('video_url', $video->video_url) }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $video->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('videos.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
