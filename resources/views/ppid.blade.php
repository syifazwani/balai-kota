<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PPID Biro Umum & ASD DKI Jakarta</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-100 text-gray-900 flex flex-col min-h-screen transition-colors duration-400">

 @include('partials.navbar')

  <main class="flex-1 py-10 px-5 bg-gray-100">
    <section class="max-w-6xl mx-auto">
      <h2 class="text-2xl font-semibold text-[#03045e] mb-5">Berita Terbaru</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

        <!-- Berita 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:scale-105 transition-transform">
          <img src="https://via.placeholder.com/400x200" alt="Berita 1" class="w-full h-52 object-cover">
          <div class="p-5">
            <h3 class="text-lg font-semibold text-[#023e8a] mb-2">Judul Berita 1</h3>
            <p class="text-sm text-gray-600">Ini adalah deskripsi singkat dari berita pertama yang menarik perhatian pembaca.</p>
            <a href="/berita/1" class="inline-block mt-3 text-[#0077b6] font-bold hover:underline">Baca Selengkapnya →</a>
          </div>
        </div>

        <!-- Berita 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:scale-105 transition-transform">
          <img src="https://via.placeholder.com/400x200" alt="Berita 2" class="w-full h-52 object-cover">
          <div class="p-5">
            <h3 class="text-lg font-semibold text-[#023e8a] mb-2">Judul Berita 2</h3>
            <p class="text-sm text-gray-600">Deskripsi singkat berita kedua yang memberikan informasi terbaru kepada masyarakat.</p>
            <a href="/berita/2" class="inline-block mt-3 text-[#0077b6] font-bold hover:underline">Baca Selengkapnya →</a>
          </div>
        </div>

        <!-- Berita 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md hover:scale-105 transition-transform">
          <img src="https://via.placeholder.com/400x200" alt="Berita 3" class="w-full h-52 object-cover">
          <div class="p-5">
            <h3 class="text-lg font-semibold text-[#023e8a] mb-2">Judul Berita 3</h3>
            <p class="text-sm text-gray-600">Deskripsi berita ketiga yang berisi perkembangan dan kegiatan di lingkungan pemerintahan.</p>
            <a href="/berita/3" class="inline-block mt-3 text-[#0077b6] font-bold hover:underline">Baca Selengkapnya →</a>
          </div>
        </div>

      </div>
    </section>
  </main>

  <footer class="bg-[#03045e] text-white text-center py-5 mt-auto">
    <p>© 2025 Biro Umum & ASD DKI Jakarta</p>
    <p>All rights reserved.</p>
  </footer>

  <script>
    // Hamburger Toggle
    document.getElementById("hamburger").addEventListener("click", function () {
      const nav = document.getElementById("nav-menu");
      nav.classList.toggle("hidden");
      nav.classList.toggle("flex");
      nav.classList.toggle("flex-col");
      nav.classList.toggle("absolute");
      nav.classList.toggle("top-20");
      nav.classList.toggle("right-5");
      nav.classList.toggle("bg-[#03045e]");
      nav.classList.toggle("rounded-lg");
      nav.classList.toggle("p-4");
      nav.classList.toggle("shadow-lg");
    });

    // Clock
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
