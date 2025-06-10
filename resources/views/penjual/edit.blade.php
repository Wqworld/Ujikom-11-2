<x-layout>

        <div class="relative">
        {{-- hiasan kotak di belakang --}}
        <div class="absolute inset-0 -z-10">
            <div class="ml-50 w-64 h-64 bg-gray-300 rounded-xl absolute top-10 left-10 hidden sm:block"></div>
            <div class="w-40 ml-50 h-40 bg-gray-300 rounded-xl absolute bottom-10 right-10 hidden sm:block"></div>
            <div class="w-80 ml-50 h-80 bg-gray-800 rounded-full absolute top-125 hidden sm:block"></div>
            <div class="w-40 ml-50 h-80 bg-gray-500 rounded-l-full absolute top-130 right-0 hidden sm:block"></div>
            <div class="w-80 ml-50 h-80 bg-gray-500 rounded-full absolute top-13 right-50 hidden sm:block"></div>
            <div class="w-80 ml-50 h-80 bg-gray-400 rounded-2xl absolute top-100 left-50 hidden sm:block"></div>
        </div>
    </div>
    <x-side-bar>
    <div class="max-w-3xl mx-auto mt-16 bg-white dark:bg-gray-900 shadow-md rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white text-center mb-8">Edit Profil Penjual</h2>

        <form action="{{ route('profile.update', $penjual->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div>
                <label for="nama_penjual" class="block text-sm font-medium text-gray-800 dark:text-gray-100">Nama</label>
                <input type="text" name="nama_penjual" id="nama_penjual"
                    value="{{ old('nama_penjual', $penjual->nama_penjual) }}"
                    class="w-full mt-1 p-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                @error('nama_penjual') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Umur -->
            <div>
                <label for="umur_penjual" class="block text-sm font-medium text-gray-800 dark:text-gray-100">Umur</label>
                <input type="number" name="umur_penjual" id="umur_penjual"
                    value="{{ old('umur_penjual', $penjual->umur_penjual) }}"
                    class="w-full mt-1 p-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                @error('umur_penjual') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Nomor HP -->
            <div>
                <label for="nomor_hp" class="block text-sm font-medium text-gray-800 dark:text-gray-100">Nomor HP</label>
                <input type="text" name="nomor_hp" id="nomor_hp"
                    value="{{ old('nomor_hp', $penjual->nomor_hp) }}"
                    class="w-full mt-1 p-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                @error('nomor_hp') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Alamat -->
            <div>
                <label for="alamat_penjual" class="block text-sm font-medium text-gray-800 dark:text-gray-100">Alamat</label>
                <textarea name="alamat_penjual" id="alamat_penjual" rows="3"
                    class="w-full mt-1 p-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500">{{ old('alamat_penjual', $penjual->alamat_penjual) }}</textarea>
                @error('alamat_penjual') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Username -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-800 dark:text-gray-100">Username</label>
                <input type="text" name="username" id="username"
                    value="{{ old('username', $penjual->username) }}"
                    class="w-full mt-1 p-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                @error('username') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-800 dark:text-gray-100">
                    Password <span class="text-sm text-gray-400">(Kosongkan jika tidak ingin diubah)</span>
                </label>
                <input type="password" name="password" id="password"
                    class="w-full mt-1 p-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                @error('password') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-between mt-8">
                <a href="{{ route('profile.penjual') }}"
                    class="px-5 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 transition duration-150">
                    Batal
                </a>
                <button type="submit"
                    class="px-5 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-150">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</x-side-bar>

</x-layout>
