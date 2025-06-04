<x-layout>
    <x-nav-bar></x-nav-bar>
        <div class="relative bg-gray-800 h-90">
        {{-- hiasan kotak d belakang --}}
        <div class="absolute inset-0 -z-10">
            <div class="w-64 h-64 bg-blue-100 rounded-xl absolute top-10 left-10"></div>
            <div class="w-40 h-40 bg-pink-100 rounded-xl absolute bottom-10 right-10"></div>
            <div class="w-40 h-80 bg-gray-800 rounded-r-full absolute top-105"></div>
            <div class="w-40 h-80 bg-gray-500 rounded-l-full absolute top-180 right-0"></div>
        </div>
    </div>

    <!-- Layanan Akikah -->
    <section id="akikah" class="bg-white rounded-2xl shadow-md p-6 mx-10 bottom-40 relative">
      <h2 class="text-2xl font-semibold text-green-600 mb-4">🐐 Layanan Akikah</h2>
      <p class="mb-4">Kami menyediakan layanan penyembelihan hewan akikah sesuai tuntunan Islam, lengkap dengan olahan dan pengiriman.</p>
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
    <section id="qurban" class="bg-white rounded-2xl shadow-md p-6 mx-10 bottom-30 relative">
      <h2 class="text-2xl font-semibold text-green-600 mb-4">🐄 Layanan Qurban</h2>
      <p class="mb-4">Dziqqir membantu Anda menunaikan ibadah qurban dengan mudah dan tepat sasaran.</p>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>Pilihan hewan: kambing, domba, sapi (perorangan/patungan).</li>
        <li>Penyembelihan sesuai syariah pada hari tasyrik.</li>
        <li>Penyaluran daging ke wilayah yang membutuhkan.</li>
        <li>Dokumentasi penyembelihan dan distribusi.</li>
        <li>Sertifikat qurban atas nama pekurban.</li>
        <li>Bisa untuk perseorangan, keluarga, komunitas, atau instansi.</li>
      </ul>
    </section>

    <x-footer></x-footer>
    
</x-layout>