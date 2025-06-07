<x-layout>
  <x-nav-bar></x-nav-bar>

  <!-- Background Section -->
  <div class="relative h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden">
    <!-- Background Decorations -->
    <div class="absolute inset-0 -z-10">
      <div class="w-40 h-40 md:w-64 md:h-64 bg-gray-400 rounded-xl absolute top-30 left-150"></div>
      <div class="w-24 h-24 md:w-40 md:h-40 bg-gray-100 rounded-xl absolute bottom-10 right-200"></div>
      <div class="w-32 h-64 md:w-40 md:h-80 bg-gray-800 rounded-r-full absolute top-32 left-0"></div>
      <div class="w-32 h-64 md:w-40 md:h-80 bg-gray-500 rounded-l-full absolute top-60 right-0"></div>
    </div>

    <div class="flex items-center justify-center h-full text-white text-center px-6">
      <div>
        <h1 class="text-3xl md:text-4xl font-bold">Layanan Akikah & Qurban Dziqqir</h1>
        <p class="mt-2 text-lg md:text-xl">Mudah, sesuai syariah, dan terpercaya.</p>
      </div>
    </div>
  </div>

  <!-- Section Container -->
  <div class="max-w-6xl backdrop-blur bg-transparent mx-auto px-4 sm:px-6 lg:px-8 mt-10 mb-20 space-y-10">

    <!-- Layanan Akikah -->
    <section id="akikah" class="bg-white rounded-2xl shadow-md p-6 sm:p-8">
      <h2 class="text-2xl md:text-3xl font-semibold text-green-600 mb-4">🐐 Layanan Akikah</h2>
      <p class="mb-4 text-gray-700">Kami menyediakan layanan penyembelihan hewan akikah sesuai tuntunan Islam, lengkap dengan olahan dan pengiriman.</p>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>Hewan sehat, cukup umur, dan sesuai syariat.</li>
        <li>Penyembelihan sesuai sunnah.</li>
        <li>Olahan daging: gulai, sate, rendang, dll.</li>
        <li>Pengemasan nasi box siap saji.</li>
        <li>Pengiriman ke rumah atau lokasi pembagian.</li>
        <li>Sertifikat akikah atas nama anak.</li>
        <li>Dokumentasi proses (opsional).</li>
        <li>Konsultasi gratis tentang jumlah hewan dan jenis olahan.</li>
      </ul>
    </section>

    <!-- Layanan Qurban -->
    <section id="qurban" class="bg-white rounded-2xl shadow-md p-6 sm:p-8">
      <h2 class="text-2xl md:text-3xl font-semibold text-green-600 mb-4">🐄 Layanan Qurban</h2>
      <p class="mb-4 text-gray-700">Dziqqir membantu Anda menunaikan ibadah qurban dengan mudah dan tepat sasaran.</p>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>Pilihan hewan: kambing, domba, sapi (perorangan/patungan).</li>
        <li>Penyembelihan sesuai syariah pada hari tasyrik.</li>
        <li>Penyaluran daging ke wilayah yang membutuhkan.</li>
        <li>Dokumentasi penyembelihan dan distribusi.</li>
        <li>Sertifikat qurban atas nama pekurban.</li>
        <li>Bisa untuk perseorangan, keluarga, komunitas, atau instansi.</li>
      </ul>
    </section>

  </div>

  <x-footer></x-footer>
</x-layout>
