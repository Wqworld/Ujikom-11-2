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
        <div class="grid items-center justify-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 p-10">
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
                                @if ($item->status == 'Ready')
                                    <span
                                        class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                        <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>
                                        Tersedia
                                    </span>
                                @else
                                    <span
                                        class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                        <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                        Tidak Tersedia
                                    </span>
                                @endif
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

                        <!-- From Uiverse.io by Itskrish01 -->
                        <button
                            class="relative flex items-center px-6 py-3 overflow-hidden font-medium transition-all bg-green-500 rounded-md group">
                            <span
                                class="absolute top-0 right-0 inline-block w-4 h-4 transition-all duration-500 ease-in-out bg-green-700 rounded group-hover:-mr-4 group-hover:-mt-4">
                                <span
                                    class="absolute top-0 right-0 w-5 h-5 rotate-45 translate-x-1/2 -translate-y-1/2 bg-white"></span>
                            </span>
                            <span
                                class="absolute bottom-0 rotate-180 left-0 inline-block w-4 h-4 transition-all duration-500 ease-in-out bg-green-700 rounded group-hover:-ml-4 group-hover:-mb-4">
                                <span
                                    class="absolute top-0 right-0 w-5 h-5 rotate-45 translate-x-1/2 -translate-y-1/2 bg-white"></span>
                            </span>
                            <span
                                class="absolute bottom-0 left-0 w-full h-full transition-all duration-500 ease-in-out delay-200 -translate-x-full bg-green-600 rounded-md group-hover:translate-x-0"></span>
                            <span
                                class="relative w-full text-left text-white transition-colors duration-200 ease-in-out group-hover:text-white"><a
                                    href="https://wa.me/{{ $item->penjual->nomor_hp }}"">
                                    Hubungi Penjual
                                </a></span>
                                </button>

                            </div>
                        </div>

            @endforeach


        </div>

        <x-footer></x-footer>
    </div>



</x-layout>