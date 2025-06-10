<x-layout>
    <x-side-bar>
        <div class="relative">
            {{-- Dekorasi latar belakang --}}
            <div class="absolute inset-0 -z-10">
                <div class="w-64 h-64 bg-gray-300 rounded-xl absolute top-10 left-10 hidden sm:block"></div>
                <div class="w-40 h-40 bg-gray-300 rounded-xl absolute bottom-10 right-10 hidden sm:block"></div>
                <div class="w-80 h-80 bg-gray-800 rounded-full absolute top-[500px] hidden sm:block"></div>
                <div class="w-80 h-80 bg-gray-500 rounded-full absolute top-20 right-60 hidden sm:block"></div>
                <div class="w-80 h-80 bg-gray-400 rounded-2xl absolute top-[400px] left-60 hidden sm:block"></div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto mt-20 bg-white dark:bg-gray-900 shadow-lg rounded-2xl overflow-hidden">
            <div class="flex flex-col md:flex-row items-center md:items-start p-8 gap-6">
                <!-- Avatar -->
                <div class="w-48 h-48 rounded-full bg-gray-300 flex items-center justify-center text-6xl text-white font-extrabold shadow-inner">
                    {{ strtoupper(substr($penjual->nama_penjual, 0, 1)) }}
                </div>

                <!-- Info Penjual -->
                <div class="flex-1 text-center md:text-left">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-white">{{ $penjual->nama_penjual }}</h2>
                    <p class="text-gray-500 dark:text-gray-300 mt-1">Username: <span class="font-semibold">{{ $penjual->username }}</span></p>

                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6 text-sm text-gray-700 dark:text-gray-200">
                        <div>
                            <p class="text-gray-500">Umur</p>
                            <p class="font-medium text-lg">{{ $penjual->umur_penjual }} tahun</p>
                        </div>
                        <div>
                            <p class="text-gray-500">Nomor HP</p>
                            <p class="font-medium text-lg">{{ $penjual->nomor_hp }}</p>
                        </div>
                        <div class="sm:col-span-2">
                            <p class="text-gray-500">Alamat</p>
                            <p class="font-medium text-lg">{{ $penjual->alamat_penjual }}</p>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="{{ route('profile.edit', $penjual->id) }}"
                            class="px-5 py-2.5 bg-blue-600 text-white text-sm font-semibold rounded-md hover:bg-blue-700 transition duration-200 shadow-md">
                            Edit Profil
                        </a>
                        <a href="{{ route('beranda.penjual') }}"
                            class="px-5 py-2.5 bg-gray-500 text-white text-sm font-semibold rounded-md hover:bg-gray-600 transition duration-200 shadow-md">
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-side-bar>
</x-layout>
