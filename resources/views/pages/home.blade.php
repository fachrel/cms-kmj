@extends('layouts.main')

@section('tittle', 'Home')

@section('content')
<!-- Hero -->

<div class="max-w-[85rem] mx-auto sm:px-6 lg:px-8 md:mt-36">
    
    <!-- Grid -->   
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center mt-20">
      <div>
        <h1 class="mt-8 md:mt-20 md:mt-20 block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">Khitan hari ini besok main <span class="text-green-500">lagi    </span></h1>
        <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Khitan bisa kapan aja, gak perlu tunggu liburan</p>
  
        <!-- Buttons -->
        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
          <a class="inline-flex justify-center items-center gap-x-3 text-center bg-green-500 hover:bg-green-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
            Daftar Sekarang
            <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </a>
          {{-- <a class="inline-flex justify-center items-center gap-x-3.5 text-sm lg:text-base text-center border hover:border-gray-300 shadow-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:border-gray-800 dark:hover:border-gray-600 dark:shadow-slate-700/[.7] dark:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" href="#">
            Contact sales team
          </a> --}}
        </div>
        <!-- End Buttons -->
  

      </div>
      <!-- End Col -->
  
      <div class="relative ml-4 w-full max-w-lg">
        <div class="absolute top-0 -left-10 w-72 h-72 lg:w-96 lg:h-96 bg-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-50 md:opacity-70 animate-blob"></div>
        <div class="absolute top-0 -right-10 w-72 h-72 lg:w-96 lg:h-96 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 lg:w-96 lg:h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-50 animate-blob animation-delay-4000"></div>
        <img class="w-full relative w-50 h-50" src="{{url('/img/assets/mascot/mascot-kmj-1.png')}}"  alt="Image Description">
        {{-- <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div> --}}
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Hero -->
  {{-- <section class="mx-20 z-10 ">
    <div class="bg-yellow-100 p-20 rounded-lg shadow">
      <h1 class="font-bold text-3xl text-center">Telah mengkhitan 10.000+</h1>
    </div>
  </section> --}}
  <div class="md:m-20">
    <div class="md:absolute -bottom-5 bg-green-400 rounded-lg md:w-4/5 w-full m-auto left-0 right-0 bg-cover" >
      <div class="md:relative p-16 md:p-16 md:my-auto shadow-2xl" >
        <h1 class="font-bold text-3xl text-center text-gray-800">Telah mengkhitan lebih dari 10.000 pasien</h1>
      </div>
    </div>
  </div>
  <section class="bg-yellow-100 md:mt-60 md:pt-20">
    
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-6 lg:px-6">
        <dl class="grid max-w-screen-md gap-2 mx-auto text-gray-900 sm:grid-cols-2 dark:text-white">
            <div class="flex flex-col items-center justify-center">
                <img src="{{url('/img/assets/logo/logo-kmj-1.png')}}" alt="" srcset="">
                {{-- <dt class="mb-2 text-3xl md:text-4xl font-extrabold">73M+</dt>
                <dd class="font-light text-gray-500 dark:text-gray-400">developers</dd> --}}
            </div>
            <div class="flex flex-col items-center justify-center">
                <h1 class="mb-2 text-3xl md:text-4xl font-extrabold">Sekilas Tentang Khitan Modern Jogja</h1>
                <p class="text-black dark:text-gray-400">KHITAN MODERN JOGJA adalah cabang ke 3 pusat layanan khitan dengan metode-metode kekinian dan didukung oleh teknologi modern yang telah mendapat rekomendasi dari WHO (World Health Organization).
                </p>
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                  <a class="inline-flex justify-center items-center gap-x-3 text-center bg-green-500 hover:bg-green-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
                    Lihat Selengkapnya
                    <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
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

  <section class="">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="max-w-screen-md mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tinggalkan khitan tradisional/konvensional, saatnya beralih ke khitan modern </h2>
          <p class="text-gray-500 sm:text-xl dark:text-gray-400">Kenapa harus khitan modern</p>
      </div>
      <div class="md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
        <ul role="list" class="mb-5 space-y-4 text-left text-xl	 ">
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Lebih aman dan nyaman</span>
          </li>
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Tanpa jarum suntik</span>
          </li>
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Tanpa jahit</span>
          </li>
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Tanpa perban</span>
          </li>
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Tanpa alat menempel</span>
          </li>
        </ul>
        <ul role="list" class="space-y-4 text-left text-xl	 ">
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Minimal rasa sakit </span>
          </li>
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Penyembuhan luka relatif lebih cepat </span>
          </li>
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Metode yang sudah diakui <span class="font-semibold">WHO</span></span>
          </li>
          <li class="flex items-center space-x-3">
              <!-- Icon -->
              <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
              <span>Tidak perlu kontrol <span class="font-semibold">(kecuali ada keluhan)</span></span>
          </li>
        </ul>
        <div class="">
          <img src="{{url('/img/assets/mascot/mascot-kmj-2.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-green-100 bg-cover" style="background-image: url('/img/assets/backgrounds/blob-scene-fasilitas.svg')">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
      <div class="max-w-screen-md mb-8 lg:mb-16">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Fasilitas Khitan Modern Jogja</h2>
      </div>
      <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
          <div>
            <!-- component -->
            <div class="flex items-center justify-center">
              <div class="flex flex-col ml-5 items-center w-full max-w-xs p-4 bg-white rounded-3xl md:flex-row">
                  <div class="-mt-28 md:-my-16 md:-ml-32">
                  <img
                      class="w-auto h-48 bg-white rounded-full"
                      src="{{ url('img/assets/icons/medicine-background.png') }}"
                      alt=""
                  />
                </div>
                <div class="flex flex-col space-y-4">
                  <div class="flex flex-col items-center md:items-start">
                      <h2 class="text-xl font-medium">Obat paten</h2>
                      <p class="text-base font-medium text-gray-400">Klinik ini menyediakan obat paten berkualitas tinggi untuk perawatan khitan yang aman dan efektif.</p>
                  </div>
                  {{-- <div class="flex items-center justify-center space-x-3 md:justify-start">
                      <!-- Icons source => https://boxicons.com/ -->
                  </div> --}}
                  </div>
              </div>

            </div>

          </div>

          <div class="bg-white p-5 rounded-lg">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Obat paten</h3>
              <p class="text-gray-500 sm:text-xl dark:text-gray-400">Klinik ini menyediakan obat paten berkualitas tinggi untuk perawatan khitan yang aman dan efektif.</p>

          </div>
          <div class="bg-white p-5 rounded-lg">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Goodie Bag</h3>
              <p class="text-gray-500 sm:text-xl dark:text-gray-400">Setiap pasien akan mendapatkan goodie bag berisi hadiah-hadiah istimewa sebagai kenang-kenangan dari pengalaman khitan mereka.</p>
          </div>
          <div class="bg-white p-5 rounded-lg">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>                    
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Mainan</h3>
              <p class="text-gray-500 sm:text-xl dark:text-gray-400">Khusus untuk anak-anak, terdapat mainan yang disediakan untuk membuat mereka merasa nyaman dan terhibur selama proses khitan.</p>

          </div>
          <div class="bg-white p-5 rounded-lg">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Sertifikat</h3>
              <p class="text-gray-500 sm:text-xl dark:text-gray-400">Pasien akan menerima sertifikat resmi sebagai bukti pelaksanaan khitan di Klinik Khitan Modern Jogja.</p>
          </div>
          <div class="bg-white p-5 rounded-lg">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Celana Khitan</h3>
              <p class="text-gray-500 sm:text-xl dark:text-gray-400">Klinik ini menyediakan celana khitan yang nyaman dan sesuai ukuran untuk pasien.</p>
          </div>
          <div class="bg-white p-5 rounded-lg">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Foto Moment Khitan</h3>
              <p class="text-gray-500 sm:text-xl dark:text-gray-400">Untuk mengabadikan momen berharga, ada layanan foto khitan yang membuat pengalaman tersebut dapat diingat selamanya.</p>
          </div>
          <div class="bg-white p-5 rounded-lg">
              <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-green-100 lg:h-12 lg:w-12">
                  <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path></svg>
              </div>
              <h3 class="mb-2 text-xl font-bold dark:text-white">Tiket Masuk Museum Dirgantara TNI AU</h3>
              <p class="text-gray-500 sm:text-xl dark:text-gray-400">Sebagai bonus tambahan, pasien juga akan mendapatkan tiket masuk ke Museum Dirgantara TNI AU untuk 3 orang, sehingga pasien dapat mengunjungi museum tersebut setelah khitan selesai.</p>
          </div>

      </div>
  </div>
  </section>
  <section class="bg-white mb-20">
    <div class="max-w-6xl px-6 py-10 mx-auto">
        <main class="relative z-20 w-full mt-8 md:flex md:items-center xl:mt-12">
            <div class="absolute w-full bg-green-400 -z-10 md:h-96 rounded-2xl"></div>
            
            <div class="w-full p-6 bg-blue-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly">
                <img class="h-24 w-24 md:mx-6 rounded-full object-cover shadow-md md:h-[32rem] md:w-80 lg:h-[36rem] lg:w-[26rem] md:rounded-2xl" src="{{url('/img/encep.jpeg')}}" alt="client photo" />
                
                <div class="mt-2 md:mx-6">
                    <div>
                        <p class="text-xl font-medium tracking-tight text-white">dr. Encep Ivan Setiawan., MMRS</p>
                        <p class="text-green-200 ">Dokter Khitan Modern Jogja</p>
                    </div>
  
                    <p class="mt-4 text-lg leading-relaxed text-white md:text-xl"> “KHITAN bukan hanya sekedar potong kulit kulup, namun lebih jauh dari itu melibatkan 
                      proses yang sakral, dan harus dilakukan dengan aman, nyaman, serta hasil potongan yang 
                      estetis”.</p>
                    
                </div>
            </div>
        </main>
    </div>
  </section>
  <section class="bg-white md:bg-cover bg-contain" style="background-image: url('/img/circle-scatter.svg')">
    <div class="container px-6 py-8 mx-auto">
        <h2 class="text-3xl font-bold text-center text-gray-800 capitalize md:text-4xl dark:text-white mb-20">Dokter Kami</h2>

        <div class="grid mt-8 sm:grid-cols-2 md:gap-8 lg:grid-cols-3 xl:grid-cols-4">
            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/syamsul-arifin.jpeg')}}" alt="avatar" />

                <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Syamsul Arifin </h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>

            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/encep.jpeg')}}" alt="avatar" />

                <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Encep Ivan Setiawan., MMRS </h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>

            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/yayu.jpeg')}}" alt="avatar" />

                <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Yayu Silvia Tsuroya  </h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>

            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/hana.jpeg')}}" alt="avatar" />

                <div class="flex-1 mt-6 bg-green-400 rounded-full p-1">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Hana Mutiara Wahyuna</h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
