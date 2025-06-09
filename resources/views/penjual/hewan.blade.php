<x-layout>
    <x-side-bar>
        <div class="m-5">
            <p class="text-gray-500 text-xl sm:text-lg">Hewan Hewan Kamu</p>
            <h1 class="font-bold text-gray-600 xl:text-5xl text-3xl sm:text-2xl">
                {{ $penjual->nama_penjual }}
            </h1>
            
            <!-- Dari Uiverse.io by Yaya12085 Hewan terbaru -->
        <div class="grid xl:grid-cols-4 md:grid-cols-2 justify-center items-center gap-2 max-[500px]:grid-cols-1 px-3">
            @foreach ($hewan as $item)

                <div
                    class="relative flex w-80 h-120 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md mx-5 mt-20">
                    <div>
                    </div>

                    <img src="{{ asset('storage/foto_Hewan/' . $item->gambar) }}" alt="Gambar Hewan"
                        class="relative mx-4 -mt-6 h-auto overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                    <div class="p-6">
                        <h5
                            class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Tailwind card
                        </h5>
                        <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc felis ligula.
                        </p>
                    </div>
                    <div class="p-6 pt-0">
                        <a data-ripple-light="true" type="button"
                        href="{{ route('hewan.detail',['id' => $item->id ]) }}"
                            class="select-none rounded-lg bg-gray-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-gray-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            Lebih Lanjut
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
    </x-side-bar>
</x-layout>