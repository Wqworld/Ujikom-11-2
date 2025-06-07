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

        {{-- container card Hewan --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 p-10">
            @foreach ($hewan as $item)

                <div
                    class="w-full max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-900 dark:border-gray-300 ">
                    <a href="#">
                        <div class="w-full aspect-[4/3] overflow-hidden rounded-t-lg">
                            <img class="w-full h-full object-cover" src="{{ asset('storage/foto_Hewan/' . $item->gambar) }}"
                                alt="Gambar Hewan" />
                        </div>
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $item->jenis }}
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 max-w-100">
                            {{ $item->deks_Hewan }}
                        </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 max-w-100">
                            Penjual : {{ $item->penjual->nama_penjual }}
                        </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 max-w-100">
                            umur Hewan : {{ $item->umur_hewan  }} Tahun
                        </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 max-w-100">
                            Berat Hewan : {{ $item->berat_hewan  }} Kg
                        </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 max-w-100">
                            Harga Hewan : Rp {{ number_format($item->harga_hewan, 2, ',', '.') }}
                        </p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 max-w-100">
                            Tanggal upload : {{ Str::limit($item->created_at, 11)  }}
                        </p>
                        <a href="https://wa.me/{{ $item->penjual->nomor_hp }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Hubungi Penjual
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>

            @endforeach


        </div>

        <x-footer></x-footer>
    </div>



</x-layout>