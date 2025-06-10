<x-layout>
    <div class="relative">
        {{-- hiasan kotak di belakang --}}
        <div class="absolute inset-0 -z-10">
            <div class="w-64 h-64 bg-gray-300 rounded-xl absolute top-10 left-10 hidden sm:block"></div>
            <div class="w-40 h-40 bg-gray-300 rounded-xl absolute bottom-10 right-10 hidden sm:block"></div>
            <div class="w-80 h-80 bg-gray-800 rounded-full absolute top-125 hidden sm:block"></div>
            <div class="w-40 h-80 bg-gray-500 rounded-l-full absolute top-130 right-0 hidden sm:block"></div>
            <div class="w-80 h-80 bg-gray-500 rounded-full absolute top-13 right-50 hidden sm:block"></div>
            <div class="w-80 h-80 bg-gray-400 rounded-2xl absolute top-100 left-50 hidden sm:block"></div>
        </div>
    </div>


    <div class="max-w-7xl mx-auto p-6 m-30 bg-white dark:bg-gray-900 rounded-lg shadow-md">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Gambar -->
            <div class="md:w-1/2">
          <img src="{{ asset('storage/foto_Hewan/' . $hewan->gambar) }}" alt="Gambar Hewan"
                    class="rounded-lg shadow-md w-full object-cover">
            </div>

            <!-- Detail Hewan -->
            <div class="md:w-1/2">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">{{ $hewan->jenis }}</h1>

                <p class="mb-2 text-gray-700 dark:text-gray-300">Status:
                    @if ($hewan->status == 'Ready')
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
                </p>

                <p class="mb-2 text-gray-700 dark:text-gray-300">Penjual: {{ $hewan->penjual->nama_penjual }}</p>
                <p class="mb-2 text-gray-700 dark:text-gray-300">Nomor HP: {{ $hewan->penjual->nomor_hp }}</p>
                <p class="mb-2 text-gray-700 dark:text-gray-300">Umur: {{ $hewan->umur_hewan }} Tahun</p>
                <p class="mb-2 text-gray-700 dark:text-gray-300">Berat: {{ $hewan->berat_hewan }} Kg</p>
                <p class="mb-2 text-gray-700 dark:text-gray-300">Harga: <strong>Rp {{ number_format($hewan->harga_hewan, 2, ',', '.') }}</strong></p>
                <p class="mb-2 text-gray-700 dark:text-gray-300">Tanggal Upload:
                    {{ $hewan->created_at->format('d M Y') }}
                </p>
                <p class="mb-2 text-gray-700 dark:text-gray-300">Deskripsi : {{ $hewan->deks_Hewan }}</p>

                <!-- From Uiverse.io by Mubashir222 -->
                <a href="{{ route('hewan.edit' , $hewan->id) }}"
                    class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter mb-1 mt-2 text-white bg-gray-800 rounded-md group">
                    <span
                        class="absolute w-0 h-0 transition-all duration-500 ease-out bg-green-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute bottom-0 left-0 h-full -ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-full opacity-100 object-stretch"
                            viewBox="0 0 487 487">
                            <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                                d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z">
                            </path>
                        </svg>
                    </span>
                    <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="object-cover w-full h-full"
                            viewBox="0 0 487 487">
                            <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                                d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z">
                            </path>
                        </svg>
                    </span>
                    <span
                        class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"></span>
                    <span class="relative text-base font-semibold">Update</span>
                </a>

                <!-- From Uiverse.io by Mubashir222 -->                
                <a href="{{ route('hewan.delete', $hewan->id) }}" data-confirm-delete="true"
                    class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter mb-10 mt-2 text-white bg-gray-800 rounded-md group">
                    
                     <span
                        class="absolute w-0 h-0 transition-all duration-500 ease-out bg-red-500 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute bottom-0 left-0 h-full -ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-full opacity-100 object-stretch"
                            viewBox="0 0 487 487">
                            <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                                d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z">
                            </path>
                        </svg>
                    </span>
                    <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="object-cover w-full h-full"
                            viewBox="0 0 487 487">
                            <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                                d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z">
                            </path>
                        </svg>
                    </span>
                    <span
                        class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"></span>
                    <span class="relative text-base font-semibold">Delete</span></a>
                <br>


                
                
                 <a href="{{ route('hewan.penjual') }}" class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter mt-2 text-white bg-gray-800 rounded-md group">
                    <span
                        class="absolute w-0 h-0 transition-all duration-500 ease-out bg-blue-600 rounded-full group-hover:w-56 group-hover:h-56"></span>
                    <span class="absolute bottom-0 left-0 h-full -ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-full opacity-100 object-stretch"
                            viewBox="0 0 487 487">
                            <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                                d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z">
                            </path>
                        </svg>
                    </span>
                    <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="object-cover w-full h-full" viewBox="0 0 487 487">
                            <path fill-opacity=".1" fill-rule="nonzero" fill="#FFF"
                                d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z">
                            </path>
                        </svg>
                    </span>
                    <span
                        class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-gray-200"></span>
                    <span class="relative text-base font-semibold">Kembali</span>
                </a>
            </div>
        </div>
    </div>
</x-layout>

