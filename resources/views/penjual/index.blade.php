<x-layout>
    <x-side-bar>

        <div class="relative">
            {{-- hiasan kotak d belakang --}}
            <div class="absolute inset-0 -z-10">
                {{-- <div class="w-64 h-64 bg-gray-300 rounded-xl absolute right-0"></div> --}}
            </div>
        </div>


        {{-- backdrop-blur bg-transparent --}}
        <div class="m-5">
            <p class="text-gray-500 text-xl sm:text-lg">Selamat Datang</p>
            <h1 class="font-bold text-gray-600 xl:text-5xl text-3xl sm:text-2xl">
                {{ $penjual->nama_penjual }}
            </h1>
            {{-- Notifikasi Buat Supaya Tidak Kosong aja --}}

        </div>

        <x-notifikasi>{{ $penjual->nama_penjual }}</x-notifikasi>

        <!-- Dari Uiverse.io by uctteam jumlah hewan -->
        <div class="grid xl:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-2 max-[500px]:grid-cols-1 px-3">
            <div
                class="group w-full rounded-lg bg-[rgb(41,49,79)]  p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#605e80]">
                <p class="text-white text-xl ">Jumlah Hewan</p>
                <p class="text-white text-[30px]">{{ $jumlahHewan }}</p>
                <svg accesskey="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512"
                    y="0" x="0" height="36" width="36" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path class="" data-original="#000000" opacity="1" fill="#ffffff"
                            d="M16.44 309.74c-2.44 11.52-2.82 21.72-1.14 30.61 2.57 13.13 9.94 29.4 25.12 29.08 1.13-.03 5.08-.63 7.58-1.43 0 26.51 10.75 50.51 28.12 67.88 24.77 24.77 61.13 34.06 94.65 24.34C187.28 491.97 220.02 512 256 512c35.98 0 68.72-20.03 85.23-51.78 33.52 9.72 69.88.43 94.65-24.34C453.25 418.51 464 394.51 464 368c2.5.8 6.45 1.4 7.58 1.43 15.18.32 22.55-15.95 25.12-29.08 1.68-8.89 1.3-19.09-1.14-30.61C506.33 293.83 512 275.21 512 256c0-35.98-20.03-68.72-51.78-85.23 9.71-33.52.44-69.87-24.34-94.65-24.77-24.78-61.12-34.05-94.65-24.34C324.72 20.03 291.97 0 256 0c-35.97 0-68.72 20.03-85.23 51.78-33.53-9.71-69.88-.44-94.65 24.34-24.78 24.78-34.05 61.13-24.34 94.65C20.03 187.28 0 220.02 0 256c0 19.21 5.67 37.83 16.44 53.74zM256 480c-34.46 0-61.85-26.98-63.88-60.02l-7.02-2.91c-24.94 20.91-62.54 20.01-86.36-3.81C87.16 401.68 80 385.67 80 368c0-5.84.79-11.51 2.25-16.88 3.9-2.84 7.26-5.96 10.07-9.36 13.24-16.01 18.13-20.42 15.82-41.15-4.79-12.3-6.07-36.94-5.81-53.6.26-16.66.64-25.63 6.8-38.79 1.37-2.75-21.6 7.52-24.51 9.37-22.59 14.4-34.88 32.69-50.56 54.59A64.403 64.403 0 0 1 32 256c0-34.17 27-61.79 60.02-63.87l2.92-7.02c-20.89-24.87-20.09-62.47 3.8-86.37 23.9-23.89 61.49-24.69 86.36-3.81l7.02-2.91C194.15 58.98 221.53 32 256 32s61.85 26.98 63.88 60.02l7.02 2.91c24.87-20.88 62.46-20.08 86.36 3.81 23.89 23.9 24.69 61.5 3.8 86.37l2.92 7.02C453 194.21 480 221.83 480 256c0 5.59-.72 11.01-2.06 16.18-15.68-21.9-27.97-40.19-50.56-54.59-2.91-1.85-25.88-12.12-24.51-9.37 6.16 13.16 6.54 22.13 6.8 38.79.26 16.66-1.02 41.3-5.81 53.6-2.31 20.73 2.58 25.14 15.82 41.15 2.81 3.4 6.17 6.52 10.07 9.36A64.32 64.32 0 0 1 432 368c0 17.67-7.16 33.68-18.74 45.26-23.82 23.82-61.42 24.72-86.36 3.81l-7.02 2.91C317.85 453.02 290.46 480 256 480zM145.75 196.32c-7 20.16-10.51 39.72-10.51 58.69 0 26.31 3.46 50.23 10.38 71.76C162.49 379.24 197 421 256 421c59.32 0 93.38-41.36 110.16-94.23 6.83-21.53 10.25-45.45 10.25-71.76 0-14.35-1.71-28.36-5.13-42.03-10.42 0-19.94-3.89-28.57-11.66-8.63-7.78-14.05-16.96-16.28-27.56-4.61 5.3-10.08 9.74-16.4 13.33-6.32 3.59-12.64 5.38-18.96 5.38-10.43 0-21.79-6.49-34.09-19.47-2.05 9.56-6.75 17.89-14.1 24.98-7.34 7.09-15.72 10.64-25.11 10.64-7.35 0-14.4-2.86-21.15-8.59-6.75-5.72-11.83-12.34-15.24-19.86-7.19 7.19-14.92 16.66-27.94 16.66-2.4 0-5.34-.01-7.69-.51zm73.68 68.82c0 15.15-12.28 27.43-27.43 27.43s-27.43-12.28-27.43-27.43c0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42zM320 292.57c-15.15 0-27.43-12.28-27.43-27.43 0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42c0 15.15-12.28 27.43-27.43 27.43z">
                        </path>
                    </g>
                </svg>
            </div>
            <div
                class="group w-full rounded-lg bg-[rgb(41,49,79)]  p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_#48c924]">
                <p class="text-white text-xl">Hewan Tersedia</p>
                <p class="text-white text-[30px]">{{ $jumlahHewanReady }}</p>
                <svg accesskey="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512"
                    y="0" x="0" height="36" width="36" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path class="" data-original="#000000" opacity="1" fill="#ffffff"
                            d="M16.44 309.74c-2.44 11.52-2.82 21.72-1.14 30.61 2.57 13.13 9.94 29.4 25.12 29.08 1.13-.03 5.08-.63 7.58-1.43 0 26.51 10.75 50.51 28.12 67.88 24.77 24.77 61.13 34.06 94.65 24.34C187.28 491.97 220.02 512 256 512c35.98 0 68.72-20.03 85.23-51.78 33.52 9.72 69.88.43 94.65-24.34C453.25 418.51 464 394.51 464 368c2.5.8 6.45 1.4 7.58 1.43 15.18.32 22.55-15.95 25.12-29.08 1.68-8.89 1.3-19.09-1.14-30.61C506.33 293.83 512 275.21 512 256c0-35.98-20.03-68.72-51.78-85.23 9.71-33.52.44-69.87-24.34-94.65-24.77-24.78-61.12-34.05-94.65-24.34C324.72 20.03 291.97 0 256 0c-35.97 0-68.72 20.03-85.23 51.78-33.53-9.71-69.88-.44-94.65 24.34-24.78 24.78-34.05 61.13-24.34 94.65C20.03 187.28 0 220.02 0 256c0 19.21 5.67 37.83 16.44 53.74zM256 480c-34.46 0-61.85-26.98-63.88-60.02l-7.02-2.91c-24.94 20.91-62.54 20.01-86.36-3.81C87.16 401.68 80 385.67 80 368c0-5.84.79-11.51 2.25-16.88 3.9-2.84 7.26-5.96 10.07-9.36 13.24-16.01 18.13-20.42 15.82-41.15-4.79-12.3-6.07-36.94-5.81-53.6.26-16.66.64-25.63 6.8-38.79 1.37-2.75-21.6 7.52-24.51 9.37-22.59 14.4-34.88 32.69-50.56 54.59A64.403 64.403 0 0 1 32 256c0-34.17 27-61.79 60.02-63.87l2.92-7.02c-20.89-24.87-20.09-62.47 3.8-86.37 23.9-23.89 61.49-24.69 86.36-3.81l7.02-2.91C194.15 58.98 221.53 32 256 32s61.85 26.98 63.88 60.02l7.02 2.91c24.87-20.88 62.46-20.08 86.36 3.81 23.89 23.9 24.69 61.5 3.8 86.37l2.92 7.02C453 194.21 480 221.83 480 256c0 5.59-.72 11.01-2.06 16.18-15.68-21.9-27.97-40.19-50.56-54.59-2.91-1.85-25.88-12.12-24.51-9.37 6.16 13.16 6.54 22.13 6.8 38.79.26 16.66-1.02 41.3-5.81 53.6-2.31 20.73 2.58 25.14 15.82 41.15 2.81 3.4 6.17 6.52 10.07 9.36A64.32 64.32 0 0 1 432 368c0 17.67-7.16 33.68-18.74 45.26-23.82 23.82-61.42 24.72-86.36 3.81l-7.02 2.91C317.85 453.02 290.46 480 256 480zM145.75 196.32c-7 20.16-10.51 39.72-10.51 58.69 0 26.31 3.46 50.23 10.38 71.76C162.49 379.24 197 421 256 421c59.32 0 93.38-41.36 110.16-94.23 6.83-21.53 10.25-45.45 10.25-71.76 0-14.35-1.71-28.36-5.13-42.03-10.42 0-19.94-3.89-28.57-11.66-8.63-7.78-14.05-16.96-16.28-27.56-4.61 5.3-10.08 9.74-16.4 13.33-6.32 3.59-12.64 5.38-18.96 5.38-10.43 0-21.79-6.49-34.09-19.47-2.05 9.56-6.75 17.89-14.1 24.98-7.34 7.09-15.72 10.64-25.11 10.64-7.35 0-14.4-2.86-21.15-8.59-6.75-5.72-11.83-12.34-15.24-19.86-7.19 7.19-14.92 16.66-27.94 16.66-2.4 0-5.34-.01-7.69-.51zm73.68 68.82c0 15.15-12.28 27.43-27.43 27.43s-27.43-12.28-27.43-27.43c0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42zM320 292.57c-15.15 0-27.43-12.28-27.43-27.43 0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42c0 15.15-12.28 27.43-27.43 27.43z">
                        </path>
                    </g>
                </svg>
            </div>
            <div
                class="group w-full rounded-lg bg-[rgb(41,49,79)] p-5 transition relative duration-300 cursor-pointer hover:translate-y-[3px] hover:shadow-[0_-8px_0px_0px_rgb(244,67,54)]">
                <p class="text-white  text-xl">Hewan Tidak Tersedia</p>
                <p class="text-white text-[30px]">{{ $jumlahHewanTidakReady }}</p>

                {{-- <svg
                    class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300"
                    xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 405.333 405.333" y="0"
                    x="0" height="36" width="36" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path class="" data-original="#000000" opacity="1" fill="#ffffff"
                            d="M202.667 0C117.333 0 32 10.667 32 85.333V288c0 41.173 33.493 74.667 74.667 74.667l-32 32v10.667h47.573l42.667-42.667h80.427L288 405.333h42.667v-10.667l-32-32c41.173 0 74.667-33.493 74.667-74.667V85.333C373.333 10.667 296.96 0 202.667 0zm-96 320c-17.707 0-32-14.293-32-32s14.293-32 32-32 32 14.293 32 32-14.294 32-32 32zm74.666-149.333H74.667V85.333h106.667v85.334zM298.667 320c-17.707 0-32-14.293-32-32s14.293-32 32-32 32 14.293 32 32-14.294 32-32 32zm32-149.333H224V85.333h106.667v85.334z">
                        </path>
                    </g>
                </svg> --}}

                <svg accesskey="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512"
                    y="0" x="0" height="36" width="36" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    class="group-hover:opacity-100 absolute right-[10%] top-[50%] translate-y-[-50%] opacity-20 transition group-hover:scale-110 duration-300">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path class="" data-original="#000000" opacity="1" fill="#ffffff"
                            d="M16.44 309.74c-2.44 11.52-2.82 21.72-1.14 30.61 2.57 13.13 9.94 29.4 25.12 29.08 1.13-.03 5.08-.63 7.58-1.43 0 26.51 10.75 50.51 28.12 67.88 24.77 24.77 61.13 34.06 94.65 24.34C187.28 491.97 220.02 512 256 512c35.98 0 68.72-20.03 85.23-51.78 33.52 9.72 69.88.43 94.65-24.34C453.25 418.51 464 394.51 464 368c2.5.8 6.45 1.4 7.58 1.43 15.18.32 22.55-15.95 25.12-29.08 1.68-8.89 1.3-19.09-1.14-30.61C506.33 293.83 512 275.21 512 256c0-35.98-20.03-68.72-51.78-85.23 9.71-33.52.44-69.87-24.34-94.65-24.77-24.78-61.12-34.05-94.65-24.34C324.72 20.03 291.97 0 256 0c-35.97 0-68.72 20.03-85.23 51.78-33.53-9.71-69.88-.44-94.65 24.34-24.78 24.78-34.05 61.13-24.34 94.65C20.03 187.28 0 220.02 0 256c0 19.21 5.67 37.83 16.44 53.74zM256 480c-34.46 0-61.85-26.98-63.88-60.02l-7.02-2.91c-24.94 20.91-62.54 20.01-86.36-3.81C87.16 401.68 80 385.67 80 368c0-5.84.79-11.51 2.25-16.88 3.9-2.84 7.26-5.96 10.07-9.36 13.24-16.01 18.13-20.42 15.82-41.15-4.79-12.3-6.07-36.94-5.81-53.6.26-16.66.64-25.63 6.8-38.79 1.37-2.75-21.6 7.52-24.51 9.37-22.59 14.4-34.88 32.69-50.56 54.59A64.403 64.403 0 0 1 32 256c0-34.17 27-61.79 60.02-63.87l2.92-7.02c-20.89-24.87-20.09-62.47 3.8-86.37 23.9-23.89 61.49-24.69 86.36-3.81l7.02-2.91C194.15 58.98 221.53 32 256 32s61.85 26.98 63.88 60.02l7.02 2.91c24.87-20.88 62.46-20.08 86.36 3.81 23.89 23.9 24.69 61.5 3.8 86.37l2.92 7.02C453 194.21 480 221.83 480 256c0 5.59-.72 11.01-2.06 16.18-15.68-21.9-27.97-40.19-50.56-54.59-2.91-1.85-25.88-12.12-24.51-9.37 6.16 13.16 6.54 22.13 6.8 38.79.26 16.66-1.02 41.3-5.81 53.6-2.31 20.73 2.58 25.14 15.82 41.15 2.81 3.4 6.17 6.52 10.07 9.36A64.32 64.32 0 0 1 432 368c0 17.67-7.16 33.68-18.74 45.26-23.82 23.82-61.42 24.72-86.36 3.81l-7.02 2.91C317.85 453.02 290.46 480 256 480zM145.75 196.32c-7 20.16-10.51 39.72-10.51 58.69 0 26.31 3.46 50.23 10.38 71.76C162.49 379.24 197 421 256 421c59.32 0 93.38-41.36 110.16-94.23 6.83-21.53 10.25-45.45 10.25-71.76 0-14.35-1.71-28.36-5.13-42.03-10.42 0-19.94-3.89-28.57-11.66-8.63-7.78-14.05-16.96-16.28-27.56-4.61 5.3-10.08 9.74-16.4 13.33-6.32 3.59-12.64 5.38-18.96 5.38-10.43 0-21.79-6.49-34.09-19.47-2.05 9.56-6.75 17.89-14.1 24.98-7.34 7.09-15.72 10.64-25.11 10.64-7.35 0-14.4-2.86-21.15-8.59-6.75-5.72-11.83-12.34-15.24-19.86-7.19 7.19-14.92 16.66-27.94 16.66-2.4 0-5.34-.01-7.69-.51zm73.68 68.82c0 15.15-12.28 27.43-27.43 27.43s-27.43-12.28-27.43-27.43c0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42zM320 292.57c-15.15 0-27.43-12.28-27.43-27.43 0-15.14 12.28-27.42 27.43-27.42s27.43 12.28 27.43 27.42c0 15.15-12.28 27.43-27.43 27.43z">
                        </path>
                    </g>
                </svg>
            </div>
        </div>


        <h1 class="font-bold text-gray-600 xl:text-5xl text-3xl sm:text-2xl text-center mt-5">
            Hewan Terbaru Di tambahkan
        </h1>

        <!-- Dari Uiverse.io by Yaya12085 Hewan terbaru -->
        <div class="grid xl:grid-cols-4 md:grid-cols-2 justify-center items-center gap-2 max-[500px]:grid-cols-1 px-3">
            @foreach ($hewanTerbaru as $item)

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
                        <button data-ripple-light="true" type="button"
                            class="select-none rounded-lg bg-gray-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg hover:shadow-gray-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            Read More
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- From Uiverse.io by Mubashir222 -->
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
                <span class="relative text-base font-semibold">Lebih Lanjut</span>
            </a>

    </x-side-bar>
</x-layout>