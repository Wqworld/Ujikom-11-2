<x-layout>
    <x-nav-bar></x-nav-bar>
    <div class="relative bg-gray-800 h-90">
        {{-- hiasan kotak d belakang --}}
        <div class="absolute inset-0 -z-10">
            <div class="w-64 h-64 bg-blue-100 rounded-xl absolute top-10 left-10"></div>
            <div class="w-40 h-40 bg-pink-100 rounded-xl absolute bottom-10 right-10"></div>
            <div class="w-80 h-80 bg-gray-800 rounded-full absolute top-155"></div>
            <div class="w-40 h-80 bg-gray-500 rounded-l-full absolute xl:top-250 sm:top-300 top-330 right-0"></div>
            <div class="w-80 h-80 bg-gray-400 rounded-2xl absolute xl:top-250 sm:top-300 top-400 left-20"></div>  
            {{-- <div class="w-80 h-80 bg-gray-300 rounded-2xl absolute xl:top-200  sm:top-300 left-260"></div>   --}}

        </div>
    </div>
    <div class="bg-gray-400 bottom-50 relative xl:mx-20 sm:mx-3 md:mx-10 mx-2 rounded-2xl shadow-2xl
{{-- buat matok aja itumahh --}}
">
        {{-- Header Content --}}
        <div class="flex flex-col-reverse xl:flex-row items-center px-6 py-10 lg:px-30 lg:py-24">
            <div class="text-center lg:text-left">
                <h1 class="font-bold text-white text-4xl sm:text-5xl lg:text-6xl" data-aos="fade-right" 
                    data-aos-duration="1000">Dziqqir Aqiqah & Qurban</h1>
                <p class="my-5 text-lg sm:text-xl lg:text-2xl font-extralight text-white" data-aos="fade-right" data-aos-duration="1200">
                    Selamat Datang di Dziqqir website - Layanan Akikah dan Qurban Terpercaya.
                    Kami Hadir untuk memberikan layanan Akikah dan Qurban yang aman, mudah, dan sesuai dengan syariat
                    Islam.
                    Melalui platform kami, Anda dapat melaksanakan ibadah Akikah dan Qurban dengan cara praktis,
                    mulai dari pemesanan hingga pengiriman daging kepada yang berhak.
                </p>
            </div>
            <div class="lg:w-1/2 mb-8 lg:mb-0 flex justify-center">
                <img src="{{ asset('assets/logoDomba.png') }}" alt="logoDomba"
                    class="w-2/3 sm:w-1/2 lg:w-full  max-w-sm" data-aos="flip-down">
            </div>
        </div>


    </div>

    {{-- Layanan --}}
    <div class="mx-10 xl:my-30 my-10">
        {{-- judul layanan --}}
        <h1 class="text-center font-bold xl:text-5xl md:text-4xl text-3xl  hover:text-gray-500 xl:backdrop-blur xl:bg-transparent bg-gray-400 rounded-2xl"
            data-aos="fade-down">
            Layanan-Layanan Kami
        </h1>

        {{-- Container Card --}}
        <div class="flex flex-wrap justify-center items-stretch gap-5 m-5">

            {{-- Card 1 --}}
            <a href="#" class="w-full sm:w-1/2 lg:w-1/3 block p-6 bg-white border border-gray-200 rounded-lg shadow-sm
              hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
              opacity-0 animate-fade-up card-delay-1" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="840">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Layanan Akikah:</h5>
                <p class="text-gray-700 text-2 dark:text-gray-400">
                    Pilihan jenis kambing dan harga<br><br>
                    Sertifikat akikah dan dokumentasi</p>
            </a>

            {{-- Card 2 --}}
            <a href="#" class="w-full sm:w-1/2 lg:w-1/3 block p-6 bg-white border border-gray-200 rounded-lg shadow-sm
              hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
              opacity-0 animate-fade-up card-delay-2" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="840">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Layanan Qurban:</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Qurban perorangan & patungan (sapi/kambing)<br><br>

                    Penyaluran qurban ke daerah yang membutuhkan<br><br>

                    Laporan distribusi
                </p>
            </a>

            {{-- Card 3 --}}
            <a href="#" class="w-full sm:w-1/2 lg:w-1/3 block p-6 bg-white border border-gray-200 rounded-lg shadow-sm
              hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
              opacity-0 animate-fade-up card-delay-3" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="840">

                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Catering syukuran
                    akikah</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    Pengiriman makanan ke rumah/domisili <br><br>

                    Konsultasi syariah
                </p>
            </a>
        </div>
    </div>


    <div class="relative">
        <div class="absolute inset-0 z-10">
            <div class="w-100 h-15 bg-gray-700 rounded-r-full absolute xl:top-13 md:top-33 top-33">
                <img src="{{ asset('assets/Dziqqir Logo.png ') }}" class="xl:w-70 w-70 mx-2" alt="">
            </div>
        </div>
    </div>

    {{-- Container deks akikah --}}
    <div class="relative">

        {{-- Hiasan Belakang deks --}}
        <div class="w-30 h-30 bg-gray-600 rounded-xl absolute bottom-10 right-10 "></div>
        <div class="w-40 h-40 bg-gray-600 rounded-full absolute top-20"></div>
        <div class="w-40 h-40 bg-gray-600 rounded-xl absolute top-50 xl:right-80 right-30"></div>
        <div class="w-40 h-40 bg-gray-600 rounded-xl absolute bottom-35 left-40"></div>

        <div class="bg-gray-500 mt-50 flex border-b-4 pb-15">
            <div class="xl:px-40 px-10 pt-20 backdrop-blur xl:bg-transparent">
                <h1 class="font-bold xl:text-7xl md:text-6xl text-4xl text-white m-4" >Aqiqah Dziqqir</h1>
                <p class="xl:text-2xl" >Akikah adalah sunnah yang dianjurkan untuk dilakukan oleh orang tua ketika bayi
                    lahir. Proses akikah
                    meliputi
                    penyembelihan hewan (biasanya Kambing atau domba) sebagai tanda syukur atas kelahiran anak,
                    sekaligus
                    untuk
                    mendoakan anak agar tumbuh sehat dan berkah. kami menyediakan layanan akikah yang mudah,aman dan
                    sesuai
                    dengan ketentuan syariat islam </p>
                <a href="https://www.detik.com/hikmah/khazanah/d-7551232/aqiqah-pengertian-dalil-dan-syaratnya" >
                    <button
                    
                        class="inline-block cursor-pointer items-center justify-center rounded-xl border-[1.58px] mt-5   border-zinc-600 bg-zinc-950 px-5 py-3 font-medium text-slate-200 shadow-md transition-all duration-300 hover:[transform:translateY(-.335rem)] hover:shadow-xl">
                        Lebih lanjut
                        <span class="text-slate-300/85">--Aqiqah</span>
                    </button>
                </a>

            </div>
        </div>


        <div class="bg-gray-500 flex justify-end pb-15 ">
            {{-- Container deks akikah --}}
            <div class="xl:px-40 px-10 pt-20  text-right backdrop-blur bg-transparent">
                <h1 class="font-bold xl:text-7xl md:text-6xl text-4xl text-white m-4" >Qurban Dziqqir</h1>
                <p class="xl:text-2xl" >
                    Qurban (atau kurban dalam Bahasa Indonesia) adalah ibadah menyembelih hewan ternak tertentu pada
                    hari raya Idul Adha sebagai bentuk mendekatkan diri kepada Allah SWT. Ibadah ini sangat dianjurkan
                    bagi umat Islam sebagai bentuk syukur atas nikmat yang diberikan Allah SWT
                </p>
                <a href="https://www.detik.com/hikmah/khazanah/d-7551232/aqiqah-pengertian-dalil-dan-syaratnya">
                    <button 
                        class="inline-block cursor-pointer items-center justify-center rounded-xl border-[1.58px] mt-5 border-zinc-600 bg-zinc-950 px-5 py-3 font-medium text-slate-200 shadow-md transition-all duration-300 hover:[transform:translateY(-.335rem)] hover:shadow-xl">
                        Lebih lanjut
                        <span class="text-slate-300/85">--Aqiqah</span>
                    </button>
                </a>
            </div>
        </div>
    </div>


    {{-- Dokumentasi atau Galeri --}}
    <div class="relative xl:h-340" id="galeri">
        {{-- Judul Galeri --}}
        <h1
            class="text-center font-bold xl:text-5xl md:text-4xl text-3xl hover:text-gray-500 backdrop-blur bg-transparent  rounded-2xl m-1 pt-10">
            dokumentasi 📸</h1>
        {{-- hiasan kotak d belakang --}}
        <div class="absolute inset-0 -z-10">
            <div class="w-64 h-64 bg-gray-600 rounded-xl absolute top-10 left-10"></div>
            <div class="w-40 h-40 bg-gray-500 rounded-xl absolute bottom-20 right-10"></div>
            <div class="w-40 h-40 bg-gray-500 rounded-xl absolute  right-10"></div>
            <div class="w-70 h-70 bg-gray-500 rounded-xl absolute bottom-90 right-140"></div>
            <div class="w-70 h-70 bg-gray-500 rounded-xl absolute bottom-20 left-10"></div>
            <div class="w-60 h-60 bg-gray-600 rounded-xl absolute top-50 left-40"></div>
            {{-- <div class="w-40 h-80 bg-gray-800 rounded-r-full absolute top-155"></div>
            <div class="w-40 h-80 bg-gray-500 rounded-l-full absolute xl:top-250 sm:top-300 top-330 right-0"></div> --}}
        </div>

        <div class="flex justify-center items-center m-5">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-400">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg transform transition-transform duration-300 hover:scale-105"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <x-footer></x-footer>
</x-layout>