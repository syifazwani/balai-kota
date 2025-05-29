<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Informasi Biro Umum dan ASD DKI Jakarta</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-black flex flex-col min-h-screen font-sans">

 @include('partials.navbar')

<main class="flex-grow max-w-5xl mx-auto px-5 py-10 space-y-16">

    <!-- Hero Section with Background Slider -->
    <section class="relative rounded-3xl overflow-hidden shadow-lg h-[300px] md:h-[400px] mb-16" data-aos="fade-down">
      <div class="swiper heroSwiper h-full w-full">
       <div class="swiper-wrapper">
       <div class="swiper-slide" style="background-image: url('{{ asset('img/DJI_0135.jpg') }}');"></div>
      <div class="swiper-slide" style="background-image: url('{{ asset('img/DJI_0119.jpg') }}');"></div>
      <div class="swiper-slide" style="background-image: url('{{ asset('img/DJI_0135.jpg') }}');"></div>
    </div>
      </div>
      <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center px-6">
        <h1 class="text-3xl md:text-5xl font-bold mb-2">Biro Umum dan Administrasi Sekretariat Daerah</h1>
        <p class="text-lg md:text-xl max-w-2xl">Menangani layanan umum, tata usaha pimpinan, serta administrasi kepegawaian di lingkungan Sekretariat Daerah Provinsi DKI Jakarta.</p>
      </div>
    </section>

    <!-- Visi dan Misi -->
    <section class="space-y-16">
      <div class="md:flex items-center gap-10" data-aos="fade-right">
        <div class="md:w-1/2">
          <h2 class="text-2xl font-semibold text-[#0077b6] mb-3">Visi</h2>
          <p>Menjadi biro yang profesional, akuntabel, dan berorientasi pelayanan prima di lingkungan Pemerintah Provinsi DKI Jakarta.</p>
        </div>
        <div class="md:w-1/2">
          <img src="https://source.unsplash.com/600x400/?office" alt="Visi" class="rounded-xl shadow-lg">
        </div>
      </div>

      <div class="md:flex items-center gap-10 flex-row-reverse" data-aos="fade-left">
        <div class="md:w-1/2">
          <h2 class="text-2xl font-semibold text-[#0077b6] mb-3">Misi</h2>
          <ul class="list-disc pl-5 space-y-2">
            <li>Menyelenggarakan layanan administrasi umum yang efisien dan efektif.</li>
            <li>Menunjang kinerja pimpinan melalui layanan tata usaha yang optimal.</li>
            <li>Meningkatkan kapasitas dan kualitas sumber daya manusia biro.</li>
          </ul>
        </div>
        <div class="md:w-1/2">
          <img src="https://source.unsplash.com/600x400/?mission" alt="Misi" class="rounded-xl shadow-lg">
        </div>
      </div>
    </section>

    <!-- Tombol Video Profil -->
    <div class="text-center" data-aos="zoom-in">
      <button onclick="toggleModal()" class="bg-[#0077b6] text-white px-6 py-3 rounded-full shadow-md hover:bg-[#005f87] transition">
        🎥 Lihat Video Profil
      </button>
    </div>

    <!-- Fungsi dan Tugas -->
    <section data-aos="zoom-in-up" class="bg-white p-10 rounded-2xl shadow-lg">
      <h2 class="text-2xl font-semibold text-[#0077b6] mb-6 text-center">Fungsi dan Tugas</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-[#f0fbfd] p-6 rounded-xl shadow hover:shadow-lg transition duration-300" data-aos="flip-left">
          <h3 class="text-xl font-semibold mb-2">Fungsi</h3>
          <p>Mengelola dan menyelenggarakan urusan tata usaha, layanan umum, kepegawaian, serta pengelolaan rumah tangga Sekretariat Daerah.</p>
        </div>
        <div class="bg-[#f0fbfd] p-6 rounded-xl shadow hover:shadow-lg transition duration-300" data-aos="flip-right">
          <h3 class="text-xl font-semibold mb-2">Tugas</h3>
          <p>Melaksanakan penyiapan bahan kebijakan, koordinasi, monitoring, dan evaluasi pelaksanaan tugas-tugas Sekretariat Daerah sesuai bidangnya.</p>
        </div>
      </div>
    </section>

    <!-- Kontak -->
    <section data-aos="fade-up" class="bg-[#a1e3f9] p-8 md:p-10 rounded-3xl text-center shadow-lg">
      <h2 class="text-2xl font-semibold text-[#0077b6] mb-4">Hubungi Kami</h2>
      <div class="space-y-2 text-base">
        <p><strong>Alamat:</strong> Jl. Medan Merdeka Selatan No.8-9, Jakarta Pusat, DKI Jakarta</p>
        <p><strong>Telepon:</strong> (021) 12345678</p>
        <p><strong>Email:</strong> biro.umum@jakarta.go.id</p>
      </div>
    </section>
  </main>

  <!-- Video Modal -->
  <div id="videoModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70 hidden">
    <div class="bg-white rounded-2xl overflow-hidden w-full max-w-3xl shadow-lg transform transition-all scale-95">
      <div class="flex justify-end p-2">
        <button onclick="toggleModal()" class="text-gray-700 hover:text-red-500 text-2xl font-bold px-4">&times;</button>
      </div>
      <div class="p-4">
        <div class="relative w-full" style="padding-top: 56.25%;">
          <iframe class="absolute top-0 left-0 w-full h-full rounded-xl" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

@include('partials.footer')

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  // Clock update
  function updateClock() {
    const now = new Date();
    const h = String(now.getHours()).padStart(2, '0');
    const m = String(now.getMinutes()).padStart(2, '0');
    const s = String(now.getSeconds()).padStart(2, '0');
    document.getElementById("clock").textContent = `${h}:${m}:${s}`;
  }
  setInterval(updateClock, 1000);
  updateClock();

  // Hamburger toggle
  const hamburger = document.getElementById("hamburger");
  const navMenu = document.getElementById("nav-menu");

  hamburger.addEventListener("click", () => {
    navMenu.classList.toggle("hidden");
  });

 AOS.init({ duration: 800, once: true });

    var heroSwiper = new Swiper(".heroSwiper", {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      effect: 'fade',
    });

    function toggleModal() {
      const modal = document.getElementById('videoModal');
      const iframe = modal.querySelector('iframe');
      if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      } else {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        iframe.src = iframe.src;
      }
    }
</script>

</body>
</html>
