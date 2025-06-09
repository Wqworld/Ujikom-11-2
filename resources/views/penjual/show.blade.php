<x-layout>
    <x-side-bar>
        <div class="m-5">
            <p class="text-gray-500 text-xl sm:text-lg">Detail Hewan</p>
            <h1 class="font-bold text-gray-600 xl:text-5xl text-3xl sm:text-2xl">
                Milik {{ $hewan->penjual->nama_penjual }}
            </h1>

            {{-- Card detail hewan --}}
            <div class="flex justify-center mt-10">
                <div
                    class="flex flex-col md:flex-row bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden w-full max-w-8xl dark:bg-gray-800 dark:border-gray-700">
                    <img class="object-cover w-full h-auto md:h-auto md:w-1/3"
                    src="{{ asset('storage/foto_Hewan/' . $hewan->gambar) }}" alt="Gambar hewan">
                    <div class="p-6 flex flex-col justify-between">
                        <div>
                            <h2 class="text-3xlgithub font-bold text-gray-800 dark:text-white mb-2">
                                Harga  : Rp {{ number_format($hewan->harga_hewan, 0, ',', '.') }} 
                            </h2>
                            
                            <p class="text-gray-600 dark:text-gray-300 text-2xl mb-4">
                                Jenis  : {{ $hewan->jenis }} <br>
                                Umur   : {{ $hewan->umur_hewan }} tahun <br>
                                Berat  : {{ $hewan->berat_hewan }} kg <br>
                                Upload : {{ $hewan->created_at }} <br>
                                deskripsi : <br>
                                <p class="text-gray-600 dark:text-gray-300 text-xl mb-4">
                                    {{ $hewan->deks_Hewan }} 
                                </p>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
             <a href="{{ route('hewan.penjual') }}" class="relative inline-flex items-center justify-center px-8 py-2.5 overflow-hidden tracking-tighter mx-8 my-10 text-white bg-gray-800 rounded-md group">
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
    </x-side-bar>
</x-layout>
