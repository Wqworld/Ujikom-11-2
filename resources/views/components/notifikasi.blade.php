@php
    $motivasi = [
        "🌟 Terima kasih sudah bergabung di Dziqqir! Setiap hewan yang kamu jual bisa jadi bagian dari ibadah orang lain. Semangat berdagang, semangat beramal!",
        "🐐 Jangan lupa update status hewanmu! Stok yang jelas, pembeli pun percaya. Daganganmu, berkahmu!",
        "💪 Hewan terbaikmu menunggu pembeli terbaik! Upload foto yang menarik dan deskripsi yang jelas ya, biar cepat laku!",
        "📈 Terus semangat, $slot! Satu hewan terjual, satu langkah menuju rezeki yang lebih berkah!",
        "💼 Dagangan yang tertata, pembeli pun percaya. Pastikan informasi hewan selalu akurat. Profesional itu keren!",
        "🤝 Setiap transaksi bukan cuma jual beli, tapi juga ladang pahala. Layanilah dengan hati, insyaAllah rezeki mengalir lancar!",
        "✨ Konsisten itu kunci. Sedikit demi sedikit, hewanmu akan dikenal dan dipercaya banyak orang.",
    ];
    $pesan = $motivasi[array_rand($motivasi)];
@endphp

<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 rounded-md shadow-md mb-4 mx-5">
    <p class="text-sm font-medium">{!! $pesan !!}</p>
</div>