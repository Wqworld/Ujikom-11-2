<x-layout>
    <x-side-bar>
        <div class="m-5">
            <p class="text-gray-500 text-xl sm:text-lg">Hewan Hewan Kamu</p>
            <h1 class="font-bold text-gray-600 xl:text-5xl text-3xl sm:text-2xl">
                {{ $penjual->nama_penjual }}
            </h1>
            
        <!-- Dari Uiverse.io by Yaya12085 Hewan terbaru -->
        <div class="grid xl:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-6 px-4 py-8">
            @foreach ($hewan as $item)
                <div class="flex flex-col rounded-xl bg-white text-gray-700 shadow-md overflow-hidden w-full max-w-sm mx-auto">
                    <div class="relative w-full aspect-[4/3]">
                        <img src="{{ asset('storage/foto_Hewan/' . $item->gambar) }}"
                            alt="Gambar Hewan"
                            class="object-cover w-full h-full rounded-t-xl">
                    </div>
                    <div class="p-4">
                        <h5 class="mb-2 text-xl font-semibold text-blue-gray-900">
                            {{ $item->jenis }}
                            @if ($item->status == 'Ready')
                                <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">
                                    <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span> Tersedia
                                </span>
                            @else
                                <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">
                                    <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span> Tidak Tersedia
                                </span>
                            @endif
                        </h5>

                        <p class="text-base text-gray-600 mb-1">{{ $item->deks_Hewan }}</p>
                        <p class="text-base text-gray-800 font-medium mb-1">Harga: Rp {{ number_format($item->harga_hewan, 2, ',', '.') }}</p>
                        <p class="text-base text-gray-800 mb-1">Umur: {{ $item->umur_hewan }} Tahun</p>
                        <p class="text-base text-gray-800">Berat: {{ $item->berat_hewan }} Kg</p>
                        <div class="mt-5">
                            <a data-ripple-light="true" type="button"
                                href="{{ route('hewan.detail',$item->id ) }}"
                                class="select-none rounded-lg bg-gray-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-gray-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                    Lebih Lanjut
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </x-side-bar>
</x-layout>