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
    
    <div class="max-w-2xl mx-auto mt-10 bg-white dark:bg-gray-800 shadow-lg rounded-xl p-8">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6 text-center">Form Tambah Hewan</h2>

        <form class="space-y-4" action="{{ route('store.hewan') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Jenis --}}
            <div>
                <label for="jenis" class="block text-sm font-medium text-gray-700 dark:text-white">Jenis</label>
                <select id="jenis" name="jenis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Kambing" {{ old('jenis') == 'Kambing' ? 'selected' : '' }}>Kambing</option>
                    <option value="Sapi" {{ old('jenis') == 'Sapi' ? 'selected' : '' }}>Sapi</option>
                    <option value="Domba" {{ old('jenis') == 'Domba' ? 'selected' : '' }}>Domba</option>
                </select>
                @error('jenis') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Status --}}
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-white">Status</label>
                <select id="status" name="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <option value="">-- Pilih Status --</option>
                    <option value="Ready" {{ old('status') == 'Ready' ? 'selected' : '' }}>Ready</option>
                    <option value="Tidak Ready" {{ old('status') == 'Tidak Ready' ? 'selected' : '' }}>Tidak Ready
                    </option>
                </select>
                @error('status') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Deskripsi --}}
            <div>
                <label for="deks_hewan" class="block text-sm font-medium text-gray-700 dark:text-white">Deskripsi
                    Hewan</label>
                <input type="text" id="deks_hewan" name="deks_hewan" value="{{ old('deks_hewan') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                @error('deks_hewan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Gambar --}}
            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-700 dark:text-white">Upload
                    Gambar</label>
                <input type="file" id="gambar" name="gambar"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600" />
                @error('gambar') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Umur --}}
            <div>
                <label for="umur_hewan" class="block text-sm font-medium text-gray-700 dark:text-white">Umur</label>
                <input type="number" id="umur_hewan" name="umur_hewan" value="{{ old('umur_hewan') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                @error('umur_hewan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Kesehatan --}}
            <div>
                <label for="kesehatan" class="block text-sm font-medium text-gray-700 dark:text-white">Kesehatan</label>
                <input type="text" id="kesehatan" name="kesehatan" value="{{ old('kesehatan') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                @error('kesehatan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Harga --}}
            <div>
                <label for="harga_hewan" class="block text-sm font-medium text-gray-700 dark:text-white">Harga</label>
                <input type="text" id="harga_hewan" x-data x-mask:dynamic="(val) => val.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, '.')"
                    name="harga_hewan" value="{{ old('harga_hewan') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                @error('harga_hewan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Berat --}}
            <div>
                <label for="berat_hewan" class="block text-sm font-medium text-gray-700 dark:text-white">Berat</label>
                <input type="number" id="berat_hewan" name="berat_hewan" value="{{ old('berat_hewan') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                @error('berat_hewan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- Harga DP --}}
            <div>
                <label for="hargadp_hewan" class="block text-sm font-medium text-gray-700 dark:text-white">Harga
                    DP</label>
                <input type="number" id="hargadp_hewan" name="hargadp_hewan" value="{{ old('hargadp_hewan') }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
                @error('hargadp_hewan') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            {{-- ID Penjual --}}
            <input type="hidden" name="id_penjual" value="{{ session('penjual')->id }}" />
            @error('id_penjual') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

            <div class="flex gap-2">

                <a type="button" href="{{ route('beranda.penjual') }}"
                    class="w-full mt-4 py-2.5 bg-gray-500 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-200 text-center">
                    Kembali
                </a>
                <button type="submit"
                    class="w-full mt-4 py-2.5 bg-gray-500 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-200">
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-layout>