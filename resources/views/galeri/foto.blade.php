{{-- resources/views/galeri/foto.blade.php --}}

@extends('layouts.app') {{-- Atau layout lain yang kamu pakai --}}

@section('content')
<div class="container mx-auto p-5">
    <!-- Album View -->
    <div id="album" class="tab-content block p-5">
  <div id="albumGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
    @foreach ($albums as $album)
      <div onclick="openAlbum('album{{ $album->id }}')" class="album-card bg-white rounded-xl overflow-hidden shadow-md cursor-pointer hover:scale-105 transition-transform">
        <img src="{{ asset('storage/' . $album->cover_image) }}" alt="{{ $album->title }}" class="w-full h-40 object-cover" />
        <div class="title p-3 text-center font-semibold">{{ $album->title }}</div>
      </div>
    @endforeach
  </div>
   @foreach ($albums as $album)
    <div id="album{{ $album->id }}" class="album-detail hidden mt-6">
      <h2 class="text-xl font-bold mb-4">{{ $album->title }}</h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($album->photos as $photo)
          <div class="photo-card rounded overflow-hidden shadow-md">
            <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="Photo {{ $loop->iteration }}" class="w-full h-32 object-cover" />
          </div>
        @endforeach
      </div>
      <button onclick="closeAlbum()" class="mt-4 bg-cyan-600 text-white px-6 py-2 rounded-lg">← Kembali ke Album</button>
    </div>
  @endforeach
</div>

        <!-- Tombol Kembali -->
        <button id="backBtn" onclick="closeAlbum()"
                class="hidden mt-6 bg-cyan-600 text-white px-6 py-2 rounded-lg">← Kembali ke Album</button>

        <!-- Detail Album -->
        <div id="albumDetail" class="hidden mt-6">
            <!-- Konten detail album bisa diisi via JS/Ajax -->
        </div>
    </div>
</div>

<script>
    function openAlbum(albumId) {
        // Contoh sederhana, sembunyikan grid album dan tampilkan detail
        document.getElementById('albumGrid').style.display = 'none';
        document.getElementById('backBtn').classList.remove('hidden');
        document.getElementById('albumDetail').classList.remove('hidden');

        // Isi detail album bisa kamu fetch via AJAX atau tampilkan konten statis
        document.getElementById('albumDetail').innerHTML = '<p>Detail untuk ' + albumId + '</p>';
    }

    function closeAlbum() {
        document.getElementById('albumGrid').style.display = 'grid';
        document.getElementById('backBtn').classList.add('hidden');
        document.getElementById('albumDetail').classList.add('hidden');
        document.getElementById('albumDetail').innerHTML = '';
    }
</script>

<script>
function openAlbum(id) {
  document.getElementById('albumGrid').classList.add('hidden');
  document.querySelectorAll('.album-detail').forEach(el => el.classList.add('hidden'));
  document.getElementById(id).classList.remove('hidden');
}

function closeAlbum() {
  document.getElementById('albumGrid').classList.remove('hidden');
  document.querySelectorAll('.album-detail').forEach(el => el.classList.add('hidden'));
}
</script>
@endsection
