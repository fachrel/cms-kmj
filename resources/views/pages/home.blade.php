@extends('layouts.main')

@section('tittle', 'Home')

@section('content')
    <!-- Hero -->

    <div class="max-w-[85rem] mx-auto sm:px-6 lg:px-8 md:mt-48">

        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center mt-20">
            <div class="p-3">
                <h1
                    class="mt-8 md:mt-20 md:mt-20 block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                    Khitan hari ini besok main <span class="text-green-500">lagi </span></h1>
                    <p>Khitan tanpa tunggu liburan!</p>

                <!-- Buttons -->
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a class="inline-flex justify-center items-center gap-x-3 text-center bg-green-500 hover:bg-green-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
                        href="#">
                        Daftar Sekarang
                        <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </a>
                    {{-- <a class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" href="#">
            Contact sales team
          </a> --}}
                </div>
                <!-- End Buttons -->


            </div>
            <!-- End Col -->

            <div class="relative w-full">
                <div
                    class="absolute top-0 -left-10 w-60 h-60 lg:w-96 lg:h-96 bg-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-50 md:opacity-70 animate-blob">
                </div>
                <div
                    class="absolute top-0  -right-0 md:-right-10 w-60 h-72 lg:w-96 lg:h-96 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-blob animation-delay-2000">
                </div>
                <div
                    class="absolute -bottom-8 left-20 w-60 h-60 lg:w-96 lg:h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-blob animation-delay-4000">
                </div>
                <img class="w-full relative w-50 h-50" src="{{ url('/img/assets/mascot/mascot-kmj-1.png') }}"
                    alt="Image Description">
                {{-- <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div> --}}
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>

    <section class="bg-yellow-100 md:mt-60 md:pt-20">
        <div class="max-w-screen-xl md:relative px-4 py-8 mx-auto lg:py-6 lg:px-6">
            <div class="md:absolute md:-top-40 bg-green-400 md:rounded-lg md:w-4/5 w-full m-auto left-0 right-0 bg-cover">
                <div class="md:relative p-16 md:my-auto shadow-2xl">
                    <h1 class="font-bold text-3xl text-center text-gray-800">Telah mengkhitan lebih dari 10.000 pasien</h1>
                </div>
            </div>
            <dl class="grid max-w-screen-md gap-2 mx-auto text-gray-900 sm:grid-cols-2 dark:text-white">
                <div class="flex flex-col items-center justify-center">
                    <img src="{{ url('/img/assets/logo/logo-kmj-1.png') }}" alt="" srcset="">
                    {{-- <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">developers</dd> --}}
                </div>
                <div class="flex flex-col items-center justify-center">
                    <h1 class="mb-2 text-3xl md:text-4xl font-extrabold">Sekilas Tentang Khitan Modern Jogja</h1>
                    <p class="text-black dark:text-gray-400">KHITAN MODERN JOGJA adalah cabang ke 3 pusat layanan khitan
                        dengan metode-metode kekinian dan didukung oleh teknologi modern yang telah mendapat rekomendasi
                        dari WHO (World Health Organization).
                    </p>
                    <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                        <a class="inline-flex justify-center items-center gap-x-3 text-center bg-green-500 hover:bg-green-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800"
                            href="/tentang">
                            Lihat Selengkapnya
                            <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </a>
                        {{-- <a class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" href="#">
                    Contact sales team
                  </a> --}}
                    </div>
                </div>
            </dl>
        </div>
    </section>

    <section class="p-2 pr-3 px-16 md:p-20">
        <div class="py-8 px-4 mx-auto sm:py-16 lg:px-6">
            <div class="mb-8 lg:mb-16">
                <h1 class="mb-2 text-2xl md:text-4xl font-extrabold">Tinggalkan khitan tradisional/konvensional, saatnya
                    beralih ke khitan modern </h1>

                {{-- <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white"></h2> --}}
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Kenapa harus khitan modern</p>
            </div>
            <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <ul role="list" class="mb-5 space-y-4 text-left text-xl	 ">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Lebih aman dan nyaman</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Tanpa jarum suntik</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Tanpa jahit</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Tanpa perban</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Tanpa alat menempel</span>
                    </li>
                </ul>
                <ul role="list" class="space-y-4 text-left text-xl	 ">
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Minimal rasa sakit </span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Penyembuhan luka relatif lebih cepat </span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Metode yang sudah diakui <span class="font-semibold">WHO</span></span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Tidak perlu kontrol <span class="font-semibold">(kecuali ada keluhan)</span></span>
                    </li>
                </ul>
                <div class="">
                    <img src="{{ url('/img/assets/mascot/mascot-kmj-2.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-green-300 bg-repeat bg-opacity-80 py-10"
        style="background-image: url('/img/assets/backgrounds/doodle-kmj-ps.png'); background-attachment: fixed;">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 bg-yellow-100 rounded-3xl border-red-500 border-8 bg-repeat">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white-500">Fasilitas Khitan Modern Jogja</h2>
            </div>

            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div class="bg-white p-5 rounded-xl ">
                    <div class="flex justify-center items-center mb-4 w-15 h-15 rounded-full bg-green-100 lg:h-12 lg:w-12 border-red-500 border-8">
                        <img src="{{ url('/img/assets/icons/obat-paten.png') }}" alt="" srcset="" >
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Obat paten</h3>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Klinik ini menyediakan obat paten berkualitas
                        tinggi untuk perawatan khitan yang aman dan efektif.</p>

                </div>
                <div class="bg-white p-5 rounded-xl">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                        <img src="{{ url('/img/assets/icons/goodie-bag.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Goodie Bag</h3>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Setiap pasien akan mendapatkan goodie bag berisi
                        hadiah-hadiah istimewa sebagai kenang-kenangan dari pengalaman khitan mereka.</p>
                </div>
                <div class="bg-white p-5 rounded-xl">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                        <img src="{{ url('/img/assets/icons/water-gun.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Mainan</h3>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Khusus untuk anak-anak, terdapat mainan yang
                        disediakan untuk membuat mereka merasa nyaman dan terhibur selama proses khitan.</p>

                </div>
                <div class="bg-white p-5 rounded-xl">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                        <img src="{{ url('/img/assets/icons/certificate.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Sertifikat</h3>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Pasien akan menerima sertifikat resmi sebagai
                        bukti pelaksanaan khitan di Klinik Khitan Modern Jogja.</p>
                </div>
                <div class="bg-white p-5 rounded-xl">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                        <img src="{{ url('/img/assets/icons/shorts.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Celana Khitan</h3>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Klinik ini menyediakan celana khitan yang nyaman
                        dan sesuai ukuran untuk pasien.</p>
                </div>
                <div class="bg-white p-5 rounded-xl">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                        <img src="{{ url('/img/assets/icons/camera.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Foto Moment Khitan</h3>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Untuk mengabadikan momen berharga, ada layanan
                        foto khitan yang membuat pengalaman tersebut dapat diingat selamanya.</p>
                </div>
                <div class="bg-white p-5 rounded-xl">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                        <img src="{{ url('/img/assets/icons/jet-plane.png') }}" alt="" srcset="">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Tiket Masuk Museum Dirgantara TNI AU</h3>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Sebagai bonus tambahan, pasien juga akan
                        mendapatkan tiket masuk ke Museum Dirgantara TNI AU untuk 3 orang, sehingga pasien dapat mengunjungi
                        museum tersebut setelah khitan selesai.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-yellow-100 pb-20 pt-6">
        <div class="container flex px-6 py-10 mb-10">
            <h1 class="text-4xl font-bold mx-auto">Layanan Khitan Modern Jogja</h1>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 bg-green-300 rounded-3xl border-red-500 border-8 bg-repeat" style="background-image: url('/img/assets/backgrounds/doodle-kmj-50.png')">
            <div class="grid grid-cols-1 gap-12 text-center sm:grid-cols-2 md:grid-cols-3 lg:gap-y-16 mb-6">
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="150" height="150" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <img src="{{ url("img/assets/icons/bayi.png") }}" alt="" class="w-16 h-16 absolute">
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Sunat bayi</h3>
                
                </div>
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="150" height="150" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <img src="{{ url("img/assets/icons/anak.png") }}" alt="" class="w-16 h-16 absolute">
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Sunat anak</h3>
                
                </div>
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="150" height="150" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <img src="{{ url("img/assets/icons/dewasa.png") }}" alt="" class="w-16 h-16 absolute">
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Sunat dewasa</h3>
                
                </div>
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="150" height="150" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <img src="{{ url("img/assets/icons/revisi.png") }}" alt="" class="w-16 h-16 absolute">
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Sunat perbaikan/revisi</h3>
                
                </div>
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="150" height="150" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <img src="{{ url("img/assets/icons/fimosis.png") }}" alt="" class="w-16 h-16 absolute">
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Sunat fimosis</h3>
                
                </div>
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="150" height="150" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <img src="{{ url("img/assets/icons/gemuk.png") }}" alt="" class="w-16 h-16 absolute">
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Sunat gemuk</h3>
                
                </div>
                <div>
                    <div class="relative flex items-center justify-center mx-auto">
                        <svg class="text-blue-100" width="150" height="150" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                        </svg>
                        <img src="{{ url("img/assets/icons/autistic.png") }}" alt="" class="w-16 h-16 absolute">
                    </div>
                    <h3 class="mt-8 text-lg font-semibold text-black">Sunat autis </h3>
                
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="bg-repeat bg-opacity-80 bg-green-300"
        style="background-image: url('/img/assets/backgrounds/doodle-kmj-ps.png')">
        <div class="container px-6 py-8 mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800 capitalize md:text-4xl dark:text-white mb-20">Dokter
                Kami</h2>

            <div class="grid mt-8 sm:grid-cols-2 md:gap-8 lg:grid-cols-3 xl:grid-cols-4">
                <div class="w-full max-w-xs text-center">
                    <img class="w-full h-3/4 object-cover mx-auto rounded-lg"
                        src="{{ url('/img/assets/dokter/dr-syamsul.png') }}" alt="avatar" />

                    <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Syamsul Arifin </h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{ url('/img/assets/dokter/dr-encep.png') }}"
                        alt="avatar" />

                    <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Encep Ivan Setiawan., MMRS
                        </h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{ url('/img/assets/dokter/dr-yayu.png') }}"
                        alt="avatar" />

                    <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Yayu Silvia Tsuroya </h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{ url('/img/assets/dokter/dr-hana.png') }}"
                        alt="avatar" />

                    <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Hana Mutiara Wahyuna</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="bg-repeat" style="background-image: url('/img/assets/backgrounds/doodle-kmj-ps.png')">
  <div class="h-100">
    <p class="opacity-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, et. Laudantium doloremque ex quo in illum ducimus ut quaerat ratione sapiente cumque! Excepturi quod quae vitae, nisi nulla amet eligendi sed, tempora atque quisquam exercitationem voluptatem, non error earum iste est facilis dolore iure aut voluptas! Eaque deserunt illo, non libero eos adipisci consequatur suscipit sapiente mollitia. Consectetur similique dolorum expedita explicabo accusantium? Est quis repellendus exercitationem! Excepturi hic nihil et recusandae in provident fuga laboriosam autem incidunt voluptatum quibusdam voluptatem sint inventore voluptas esse sit, dolor nulla tempore? Facilis, aliquam similique. Tenetur possimus tempore ducimus, excepturi ab rem assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque possimus cum animi ad, fuga eius rerum recusandae magni fugiat ratione voluptates sapiente libero, unde, laudantium molestias a veniam porro! Hic, ea. Error tempora corrupti corporis. Porro iusto beatae soluta unde animi necessitatibus laboriosam fugiat repellat! Quam pariatur beatae doloribus aliquid placeat, tenetur fugit ea quod modi nemo vitae voluptates culpa molestias omnis laudantium veritatis soluta. Laborum aliquid magni voluptates aliquam deserunt, magnam amet mollitia beatae veritatis quasi dolorum esse corrupti ducimus qui consequuntur quis laboriosam nulla at vitae culpa, inventore rem! Corporis ducimus optio temporibus! A cupiditate eaque expedita dolore architecto temporibus unde exercitationem reprehenderit dolorem placeat ducimus quaerat porro pariatur itaque molestiae debitis libero cumque delectus nulla magnam, deleniti eveniet animi. Voluptatem unde minima facilis doloribus possimus distinctio, provident reiciendis ea ex quia hic delectus error dolorem voluptatum vel tempore modi. Fugit eveniet hic quasi numquam voluptate, laudantium optio, perspiciatis sed soluta nobis non deserunt incidunt voluptatum totam quidem! Sint tempore necessitatibus repellat architecto expedita! Velit iusto cum obcaecati exercitationem ipsam illum odio nesciunt ex a provident sequi beatae quis accusamus dolor ipsum, voluptatem sapiente debitis, corporis saepe nobis molestias unde culpa! Laudantium atque, repudiandae sequi adipisci ad omnis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, ipsa doloribus magnam sed unde quaerat minus odio quod nostrum ut beatae eaque minima voluptate numquam molestiae ipsam illum. Natus sunt vel dolores numquam ipsam, rerum odio reprehenderit ab debitis qui distinctio veniam asperiores nobis quod sit suscipit cupiditate laudantium soluta nemo commodi autem unde. Debitis ducimus impedit nihil dignissimos aliquam qui laborum provident deleniti sapiente. Dolorum quia odio fuga repellendus cumque! Recusandae ea optio excepturi ipsum dicta blanditiis doloremque temporibus aut, at, ratione ducimus laudantium fugit eum corrupti in, velit ipsam repellendus maiores nobis tempore natus consectetur cumque! Eaque, velit nemo, dignissimos, voluptatibus voluptate ab repudiandae architecto quo enim possimus est. Aliquid repellat animi iusto quam nam voluptatibus commodi ut ab minus beatae! Doloremque saepe sit harum laborum blanditiis recusandae quos vitae illo officia! Quibusdam placeat quam, vitae corrupti nihil nisi quo temporibus at earum maxime magnam, repellendus esse obcaecati dicta quisquam aspernatur quia ducimus? Corporis aut ut quod! Aperiam illum ipsa ex, soluta distinctio deserunt itaque ducimus assumenda ratione autem, quam adipisci tempora tempore excepturi sunt aliquam eaque expedita illo perspiciatis. Nobis, ipsam nihil. Aperiam, magni nobis. Omnis, repudiandae reprehenderit fuga dolor cum aut odit nesciunt molestias quasi modi vero ipsum eveniet sunt assumenda, error eum perferendis. Optio laborum officiis ipsam impedit eius, sunt dolor exercitationem illo, consectetur magnam laboriosam porro explicabo iusto? Ratione suscipit nisi exercitationem quaerat! Libero amet, corrupti excepturi vel, veritatis quas commodi reiciendis expedita consequatur nesciunt aperiam, neque voluptas. Repellendus aliquam autem neque dolorem unde eius quaerat cum quia, nemo voluptatem repudiandae libero officiis totam placeat voluptatibus. Enim expedita officia temporibus voluptatem natus eius laboriosam harum adipisci! Saepe quos ipsa perspiciatis placeat ipsum impedit laboriosam obcaecati. Perspiciatis natus sunt officia provident voluptates sit mollitia architecto quas molestias sapiente perferendis tenetur dolorum, repudiandae possimus quos dolorem cumque inventore, doloribus eos tempora ipsum obcaecati consectetur. Libero, soluta exercitationem. Et molestiae dolor deserunt explicabo fugiat quas quod distinctio! Ipsum magnam, sint corrupti rerum unde quaerat ratione, architecto, ipsa officiis ad nobis sapiente animi? Perferendis maxime tenetur modi, molestiae deleniti quae assumenda incidunt quidem voluptate quisquam eligendi, quod dignissimos cumque, accusamus iusto. Ad voluptate ex inventore. Explicabo molestias nisi commodi alias sit consectetur aliquid veniam unde et molestiae beatae nihil accusantium aliquam corporis vitae tempore qui, tempora, magnam, impedit inventore atque nesciunt! Neque nulla aperiam at! Hic debitis voluptas ut facilis voluptates itaque esse, non mollitia reiciendis eos! Veritatis voluptate reiciendis modi perferendis delectus? Animi similique aut esse sit autem accusamus sunt optio quia? Excepturi, accusantium tempore. Delectus incidunt maiores pariatur. Excepturi distinctio esse consequuntur, harum vero similique molestias et ducimus architecto modi odio non debitis laboriosam ipsam minus atque, culpa fuga delectus, eaque illum quod reprehenderit! Voluptas rerum pariatur delectus eos excepturi deserunt natus, porro repudiandae enim, sunt blanditiis impedit quos aliquid cupiditate saepe incidunt? Unde vero voluptatum cumque nulla perspiciatis laboriosam distinctio atque, pariatur assumenda eveniet odio voluptas velit repellendus error nisi corrupti ducimus sit tenetur impedit quod explicabo minus. Expedita molestiae alias tempore deleniti, quo nulla.rem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, et. Laudantium doloremque ex quo in illum ducimus ut quaerat ratione sapiente cumque! Excepturi quod quae vitae, nisi nulla amet eligendi sed, tempora atque quisquam exercitationem voluptatem, non error earum iste est facilis dolore iure aut voluptas! Eaque deserunt illo, non libero eos adipisci consequatur suscipit sapiente mollitia. Consectetur similique dolorum expedita explicabo accusantium? Est quis repellendus exercitationem! Excepturi hic nihil et recusandae in provident fuga laboriosam autem incidunt voluptatum quibusdam voluptatem sint inventore voluptas esse sit, dolor nulla tempore? Facilis, aliquam similique. Tenetur possimus tempore ducimus, excepturi ab rem assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque possimus cum animi ad, fuga eius rerum recusandae magni fugiat ratione voluptates sapiente libero, unde, laudantium molestias a veniam porro! Hic, ea. Error tempora corrupti corporis. Porro iusto beatae soluta unde animi necessitatibus laboriosam fugiat repellat! Quam pariatur beatae doloribus aliquid placeat, tenetur fugit ea quod modi nemo vitae voluptates culpa molestias omnis laudantium veritatis soluta. Laborum aliquid magni voluptates aliquam deserunt, magnam amet mollitia beatae veritatis quasi dolorum esse corrupti ducimus qui consequuntur quis laboriosam nulla at vitae culpa, inventore rem! Corporis ducimus optio temporibus! A cupiditate eaque expedita dolore architecto temporibus unde exercitationem reprehenderit dolorem placeat ducimus quaerat porro pariatur itaque molestiae debitis libero cumque delectus nulla magnam, deleniti eveniet animi. Voluptatem unde minima facilis doloribus possimus distinctio, provident reiciendis ea ex quia hic delectus error dolorem voluptatum vel tempore modi. Fugit eveniet hic quasi numquam voluptate, laudantium optio, perspiciatis sed soluta nobis non deserunt incidunt voluptatum totam quidem! Sint tempore necessitatibus repellat architecto expedita! Velit iusto cum obcaecati exercitationem ipsam illum odio nesciunt ex a provident sequi beatae quis accusamus dolor ipsum, voluptatem sapiente debitis, corporis saepe nobis molestias unde culpa! Laudantium atque, repudiandae sequi adipisci ad omnis. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates, ipsa doloribus magnam sed unde quaerat minus odio quod nostrum ut beatae eaque minima voluptate numquam molestiae ipsam illum. Natus sunt vel dolores numquam ipsam, rerum odio reprehenderit ab debitis qui distinctio veniam asperiores nobis quod sit suscipit cupiditate laudantium soluta nemo commodi autem unde. Debitis ducimus impedit nihil dignissimos aliquam qui laborum provident deleniti sapiente. Dolorum quia odio fuga repellendus cumque! Recusandae ea optio excepturi ipsum dicta blanditiis doloremque temporibus aut, at, ratione ducimus laudantium fugit eum corrupti in, velit ipsam repellendus maiores nobis tempore natus consectetur cumque! Eaque, velit nemo, dignissimos, voluptatibus voluptate ab repudiandae architecto quo enim possimus est. Aliquid repellat animi iusto quam nam voluptatibus commodi ut ab minus beatae! Doloremque saepe sit harum laborum blanditiis recusandae quos vitae illo officia! Quibusdam placeat quam, vitae corrupti nihil nisi quo temporibus at earum maxime magnam, repellendus esse obcaecati dicta quisquam aspernatur quia ducimus? Corporis aut ut quod! Aperiam illum ipsa ex, soluta distinctio deserunt itaque ducimus assumenda ratione autem, quam adipisci tempora tempore excepturi sunt aliquam eaque expedita illo perspiciatis. Nobis, ipsam nihil. Aperiam, magni nobis. Omnis, repudiandae reprehenderit fuga dolor cum aut odit nesciunt molestias quasi modi vero ipsum eveniet sunt assumenda, error eum perferendis. Optio laborum officiis ipsam impedit eius, sunt dolor exercitationem illo, consectetur magnam laboriosam porro explicabo iusto? Ratione suscipit nisi exercitationem quaerat! Libero amet, corrupti excepturi vel, veritatis quas commodi reiciendis expedita consequatur nesciunt aperiam, neque voluptas. Repellendus aliquam autem neque dolorem unde eius quaerat cum quia, nemo voluptatem repudiandae libero officiis totam placeat voluptatibus. Enim expedita officia temporibus voluptatem natus eius laboriosam harum adipisci! Saepe quos ipsa perspiciatis placeat ipsum impedit laboriosam obcaecati. Perspiciatis natus sunt officia provident voluptates sit mollitia architecto quas molestias sapiente perferendis tenetur dolorum, repudiandae possimus quos dolorem cumque inventore, doloribus eos tempora ipsum obcaecati consectetur. Libero, soluta exercitationem. Et molestiae dolor deserunt explicabo fugiat quas quod distinctio! Ipsum magnam, sint corrupti rerum unde quaerat ratione, architecto, ipsa officiis ad nobis sapiente animi? Perferendis maxime tenetur modi, molestiae deleniti quae assumenda incidunt quidem voluptate quisquam eligendi, quod dignissimos cumque, accusamus iusto. Ad voluptate ex inventore. Explicabo molestias nisi commodi alias sit consectetur aliquid veniam unde et molestiae beatae nihil accusantium aliquam corporis vitae tempore qui, tempora, magnam, impedit inventore atque nesciunt! Neque nulla aperiam at! Hic debitis voluptas ut facilis voluptates itaque esse, non mollitia reiciendis eos! Veritatis voluptate reiciendis modi perferendis delectus? Animi similique aut esse sit autem accusamus sunt optio quia? Excepturi, accusantium tempore. Delectus incidunt maiores pariatur. Excepturi distinctio esse consequuntur, harum vero similique molestias et ducimus architecto modi odio non debitis laboriosam ipsam minus atque, culpa fuga delectus, eaque illum quod reprehenderit! Voluptas rerum pariatur delectus eos excepturi deserunt natus, porro repudiandae enim, sunt blanditiis impedit quos aliquid cupiditate saepe incidunt? Unde vero voluptatum cumque nulla perspiciatis laboriosam distinctio atque, pariatur assumenda eveniet odio voluptas velit repellendus error nisi corrupti ducimus sit tenetur impedit quod explicabo minus. Expedita molestiae alias tempore deleniti, quo nulla.</p>
  </div>
</section> --}}

@endsection
