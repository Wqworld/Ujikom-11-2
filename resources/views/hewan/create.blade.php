<x-layout>
    <form class="max-w-sm mx-auto" action="{{ route('store.hewan') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Jenis --}}
        <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis</label>
        <select id="jenis" name="jenis"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <option value="">-- Pilih Jenis --</option>
            <option value="Kambing" {{ old('jenis') == 'Kambing' ? 'selected' : '' }}>Kambing</option>
            <option value="Sapi" {{ old('jenis') == 'Sapi' ? 'selected' : '' }}>Sapi</option>
            <option value="Domba" {{ old('jenis') == 'Domba' ? 'selected' : '' }}>Domba</option>
        </select>
        @error('jenis')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Status --}}
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Status</label>
        <select id="status" name="status"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <option value="">-- Pilih Status --</option>
            <option value="Ready" {{ old('status') == 'Ready' ? 'selected' : '' }}>Ready</option>
            <option value="Tidak Ready" {{ old('status') == 'Tidak Ready' ? 'selected' : '' }}>Tidak Ready</option>
        </select>
        @error('status')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Deskripsi --}}
        <label for="deks_hewan" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Hewan</label>
        <input type="text" id="deks_hewan" name="deks_hewan" value="{{ old('deks_hewan') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
        @error('deks_hewan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Gambar --}}
        <label for="gambar" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Upload Gambar</label>
        <input type="file" id="gambar" name="gambar"
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600" />
        @error('gambar')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Umur --}}
        <label for="umur_hewan" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Umur</label>
        <input type="number" id="umur_hewan" name="umur_hewan" value="{{ old('umur_hewan') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
        @error('umur_hewan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Kesehatan --}}
        <label for="kesehatan" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Kesehatan</label>
        <input type="text" id="kesehatan" name="kesehatan" value="{{ old('kesehatan') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
        @error('kesehatan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Harga --}}
        <label for="harga_hewan" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
        <input type="number" id="harga_hewan" name="harga_hewan" value="{{ old('harga_hewan') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
        @error('harga_hewan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Berat --}}
        <label for="berat_hewan" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Berat</label>
        <input type="number" id="berat_hewan" name="berat_hewan" value="{{ old('berat_hewan') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
        @error('berat_hewan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- Harga DP --}}
        <label for="hargadp_hewan" class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Harga DP</label>
        <input type="number" id="hargadp_hewan" name="hargadp_hewan" value="{{ old('hargadp_hewan') }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:text-white" />
        @error('hargadp_hewan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

        {{-- ID Penjual --}}
        {{-- <input type="hidden" name="id_penjual" value="{{ $penjual->id }}" />
        @error('id_penjual')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror --}}

        <button type="submit"
            class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</x-layout>
