<x-layout>

    <x-nav-bar></x-nav-bar>
    <div class="relative bg-gray-800 h-90">
        {{-- hiasan kotak d belakang --}}
        <div class="absolute inset-0 -z-10">
            <div class="w-64 h-64 bg-blue-100 rounded-xl absolute top-10 left-10"></div>
            <div class="w-40 h-40 bg-pink-100 rounded-xl absolute bottom-10 right-10"></div>
            <div class="w-40 h-80 bg-gray-800 rounded-r-full absolute top-155"></div>
            <div class="w-40 h-80 bg-gray-500 rounded-l-full absolute xl:top-250 sm:top-300 top-330 right-0"></div>
        </div>
        {{-- <a href="{{ route('detail.produk', ['id']) }}">

        </a> --}}
<div class="grid items-center justify-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 p-10">
    @foreach ($hewan as $item)
        <a href="{{ route('detail.produk', $item->id) }}" class="block w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-lg transition dark:bg-gray-900 dark:border-gray-300 cursor-pointer">
            <div class="w-full aspect-[4/3] overflow-hidden rounded-t-lg">
                <img class="w-full h-full object-cover" src="{{ asset('storage/foto_Hewan/' . $item->gambar) }}" alt="Gambar Hewan" />
            </div>
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $item->jenis }}
                    @if ($item->status == 'Ready')
                        <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                            Tersedia
                        </span>
                    @else
                        <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                            <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                            Tidak Tersedia
                        </span>
                    @endif
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Penjual: {{ $item->penjual->nama_penjual }}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Umur Hewan: {{ $item->umur_hewan }} Tahun</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Berat Hewan: {{ $item->berat_hewan }} Kg</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Harga Hewan: Rp {{ number_format($item->harga_hewan, 2, ',', '.') }}</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tanggal Upload: {{ $item->created_at->format('d M Y') }}</p>
                <div class=" mt-3">
                    <span class="inline-block px-4 py-2 text-sm text-white bg-green-500 rounded hover:bg-green-600">Lihat Detail</span>
                </div>
            </div>
        </a>
    @endforeach
</div>

        <x-footer></x-footer>
    </div>



</x-layout>