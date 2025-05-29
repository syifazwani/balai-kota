<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Informasi - Biro Umum dan ASD SETDA DKI Jakarta</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full bg-fixed bg-center bg-cover" style="background-image: url('{{ asset('img/batik.jpg') }}'); font-family: 'Segoe UI', sans-serif;">
  <div class="min-h-screen flex flex-col bg-white bg-opacity-95">

    {{-- Include Navbar --}}
    @include('partials.navbar')

    <!-- Tabs Section -->
    <section class="flex-1 container  mx-auto p-6">
      <div class="flex flex-wrap justify-center gap-3 mb-6">
        <button onclick="showTab('struktur', event)" class="tab-btn bg-blue-500 text-white rounded-lg px-4 py-2 font-semibold hover:bg-blue-700 active">Struktur Organisasi</button>
        <button onclick="showTab('kebijakan', event)" class="tab-btn bg-blue-500 text-white rounded-lg px-4 py-2 font-semibold hover:bg-blue-700">Kebijakan dan Regulasi</button>
        <button onclick="showTab('renstra', event)" class="tab-btn bg-blue-500 text-white rounded-lg px-4 py-2 font-semibold hover:bg-blue-700">Renstra</button>
        <button onclick="showTab('lkip', event)" class="tab-btn bg-blue-500 text-white rounded-lg px-4 py-2 font-semibold hover:bg-blue-700">LKIP</button>
        <button onclick="showTab('laporan', event)" class="tab-btn bg-blue-500 text-white rounded-lg px-4 py-2 font-semibold hover:bg-blue-700">Laporan Keuangan</button>
      </div>

      <!-- Struktur Organisasi -->
        <div id="struktur" class="tab-content block">
            <h2 class="text-2xl font-bold mb-4">Struktur Organisasi</h2>
            @php
                $struktur = DB::table('struktur_organisasi')->latest('id')->first();
            @endphp

            @if($struktur)
                <img src="{{ asset('storage/' . $struktur->image_path) }}" alt="Struktur Organisasi" class="rounded-lg shadow-lg max-w-full" />
            @else
                <p>Belum ada gambar struktur organisasi.</p>
            @endif
        </div>


      <!-- Kebijakan -->
      <div id="kebijakan" class="tab-content hidden">
        <h3 class="text-xl font-semibold mb-4">Kebijakan dan Regulasi</h3>
        @if(Storage::disk('public')->exists('kebijakan'))
          @php $files = Storage::disk('public')->files('kebijakan'); @endphp
          @if(count($files) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
              @foreach($files as $file)
                <div class="bg-white rounded-lg shadow p-4">
                  <h4 class="text-lg mb-2">📄 {{ basename($file) }}</h4>
                  <a href="{{ asset('storage/' . $file) }}" target="_blank" class="text-blue-600 hover:underline">Lihat File</a>
                  <br />
                  <a href="{{ asset('storage/' . $file) }}" download class="inline-block mt-3 px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Unduh</a>
                </div>
              @endforeach
            </div>
          @else
            <p>Tidak ada file kebijakan yang tersedia.</p>
          @endif
        @else
          <p>Tidak ada folder kebijakan ditemukan.</p>
        @endif
      </div>

      <!-- Renstra -->
      <div id="renstra" class="tab-content hidden">
        <h3 class="text-xl font-semibold mb-4">Rencana Strategis (Renstra)</h3>
        @if(Storage::disk('public')->exists('renstra'))
          @php $files = Storage::disk('public')->files('renstra'); @endphp
          @if(count($files) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
              @foreach($files as $file)
                <div class="bg-white rounded-lg shadow p-4">
                  <h4 class="text-lg mb-2">📄 {{ basename($file) }}</h4>
                  <a href="{{ asset('storage/' . $file) }}" target="_blank" class="text-blue-600 hover:underline">Lihat File</a>
                  <br />
                  <a href="{{ asset('storage/' . $file) }}" download class="inline-block mt-3 px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Unduh</a>
                </div>
              @endforeach
            </div>
          @else
            <p>Tidak ada dokumen Renstra yang tersedia.</p>
          @endif
        @else
          <p>Tidak ada folder Renstra ditemukan.</p>
        @endif
      </div>

      <!-- LKIP -->
      <div id="lkip" class="tab-content hidden">
        <div class="bg-white rounded-lg shadow p-6 max-w-md">
          <h3 class="text-xl font-semibold mb-2">LKIP 2024</h3>
          <p class="mb-4">Laporan Kinerja Instansi Pemerintah tahun 2024.</p>
          <a href="/dokumen/lkip2024.pdf" download class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Unduh</a>
        </div>
      </div>

      <!-- Laporan -->
      <div id="laporan" class="tab-content hidden">
        <div class="bg-white rounded-lg shadow p-6 max-w-md">
          <h3 class="text-xl font-semibold mb-2">Laporan Keuangan 2024</h3>
          <p class="mb-4">Laporan keuangan tahun anggaran 2024.</p>
          <a href="/dokumen/laporan2024.pdf" download class="inline-block px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Unduh</a>
        </div>
      </div>
    </section>

    {{-- Include Footer --}}
    @include('partials.footer')

  </div>

  <script>
    function updateClock() {
      const now = new Date();
      const h = String(now.getHours()).padStart(2, '0');
      const m = String(now.getMinutes()).padStart(2, '0');
      const s = String(now.getSeconds()).padStart(2, '0');
      document.getElementById("clock").textContent = `${h}:${m}:${s}`;
    }
    setInterval(updateClock, 1000);
    updateClock();

    function showTab(tabId, event) {
      document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
      document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('block'));
      document.getElementById(tabId).classList.remove('hidden');
      document.getElementById(tabId).classList.add('block');

      document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active', 'bg-blue-700'));
      document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.add('bg-blue-500'));
      event.target.classList.add('active');
      event.target.classList.remove('bg-blue-500');
      event.target.classList.add('bg-blue-700');
    }
  </script>
</body>
</html>
