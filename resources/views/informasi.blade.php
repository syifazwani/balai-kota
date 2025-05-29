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

  <main class="flex-grow max-w-3xl mx-auto px-5 py-8">
    <section class="bg-white rounded-xl shadow-md p-8">
      <h2 class="text-center text-[#0077b6] text-2xl font-semibold mb-6">Hubungi Kami</h2>
      <div class="mb-6 space-y-3 text-base">
        <p><strong>Alamat:</strong> Jl. Medan Merdeka Selatan No.8-9, Jakarta Pusat, DKI Jakarta</p>
        <p><strong>Telepon:</strong> (021) 12345678</p>
        <p><strong>Email:</strong> biro.umum@jakarta.go.id</p>
      </div>

      <form class="space-y-5">
        <div>
          <label for="nama" class="block font-semibold mb-1">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0077b6]" />
        </div>

        <div>
          <label for="email" class="block font-semibold mb-1">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email Anda" class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0077b6]" />
        </div>

        <div>
          <label for="pesan" class="block font-semibold mb-1">Pesan</label>
          <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda di sini..." class="w-full px-3 py-2 border rounded-md border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#0077b6] resize-none"></textarea>
        </div>

        <button type="submit" class="bg-[#0077b6] text-white font-bold rounded-lg px-6 py-3 hover:bg-[#0096c7] transition">Kirim Pesan</button>
      </form>
    </section>
  </main>

@include('partials.footer')

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
</script>

</body>
</html>
