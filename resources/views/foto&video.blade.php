<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Galeri Foto & Video</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800 font-sans">

  @include('partials.navbar')

  <h1 class="text-center text-2xl font-bold m-6">Galeri Biro Umum dan ASD</h1>

  <!-- Tab Navigation -->
  <div class="flex justify-center gap-4 mb-8">
    <button class="tab-btn bg-blue-900 text-white font-semibold px-5 py-2 rounded-full active" data-tab="album">Album</button>
    <button class="tab-btn bg-blue-900 text-white font-semibold px-5 py-2 rounded-full" data-tab="video">Video</button>
  </div>

  <!-- Album View -->
  <div id="album" class="tab-content block p-5">
    <!-- Album Cards -->
    <div id="albumGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
      <div onclick="openAlbum('album1')" class="album-card bg-white rounded-xl overflow-hidden shadow-md cursor-pointer hover:scale-105 transition-transform">
        <img src="/img/foto1.jpg" alt="Kegiatan 2025" class="w-full h-40 object-cover">
        <div class="title p-3 text-center font-semibold">Kegiatan 2025</div>
      </div>
      <div onclick="openAlbum('album2')" class="album-card bg-white rounded-xl overflow-hidden shadow-md cursor-pointer hover:scale-105 transition-transform">
        <img src="/img/foto4.jpg" alt="Rapat Koordinasi" class="w-full h-40 object-cover">
        <div class="title p-3 text-center font-semibold">Rapat Koordinasi</div>
      </div>
    </div>

    <!-- Back Button -->
    <button id="backBtn" onclick="closeAlbum()" class="hidden mt-6 bg-cyan-600 text-white px-6 py-2 rounded-lg">← Kembali ke Album</button>

    <!-- Album 1 Detail -->
    <div id="album1" class="media-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6 hidden">
      <img src="/img/foto1.jpg" class="w-full rounded-lg object-cover" alt="">
      <img src="/img/foto2.jpg" class="w-full rounded-lg object-cover" alt="">
      <img src="/img/foto3.jpg" class="w-full rounded-lg object-cover" alt="">
    </div>

    <!-- Album 2 Detail -->
    <div id="album2" class="media-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6 hidden">
      <img src="/img/foto4.jpg" class="w-full rounded-lg object-cover" alt="">
      <img src="/img/foto5.jpg" class="w-full rounded-lg object-cover" alt="">
      <img src="/img/foto6.jpg" class="w-full rounded-lg object-cover" alt="">
    </div>
  </div>

  <!-- Video View -->
  <div id="video" class="tab-content hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-6">
      <video src="/video/video1.mp4" controls class="w-full rounded-lg object-cover"></video>
      <video src="/video/video2.mp4" controls class="w-full rounded-lg object-cover"></video>
    </div>
  </div>

  @include('partials.footer')

  <!-- Script -->
  <script>
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    const backBtn = document.getElementById('backBtn');

    tabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        // Aktifkan tombol yang ditekan dan nonaktifkan lainnya
        tabButtons.forEach(b => b.classList.remove('bg-cyan-500', 'active'));
        btn.classList.add('bg-cyan-500', 'active');

        // Tampilkan konten tab sesuai yang dipilih
        tabContents.forEach(c => c.classList.add('hidden'));
        document.getElementById(btn.dataset.tab).classList.remove('hidden');

        // Tutup album jika sebelumnya sedang dibuka
        closeAlbum();
      });
    });

    function openAlbum(albumId) {
      document.getElementById('albumGrid').classList.add('hidden');
      backBtn.classList.remove('hidden');
      document.querySelectorAll('.media-grid').forEach(g => g.classList.add('hidden'));
      document.getElementById(albumId).classList.remove('hidden');
    }

    function closeAlbum() {
      document.getElementById('albumGrid').classList.remove('hidden');
      backBtn.classList.add('hidden');
      document.querySelectorAll('.media-grid').forEach(g => g.classList.add('hidden'));
    }

    function updateClock() {
      const now = new Date();
      const time = now.toLocaleTimeString('id-ID', { hour12: false });
      document.getElementById('clock').textContent = time;
    }
    setInterval(updateClock, 1000);
    updateClock();
  </script>

</body>
</html>
