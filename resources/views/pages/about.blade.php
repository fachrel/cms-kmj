@extends('layouts.main')

@section('tittle', 'Tentang Kami')

@section('content')
<div class="p bg-white">  
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
          <div class="md:5/12 lg:w-5/12">
            <img src="{{url('/img/logo-kmj-original.png')}}" alt="image" loading="lazy" width="" height="">
          </div>
          <div class="md:7/12 lg:w-6/12">
            <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Tentang Khitan Modern Jogja</h2>
            <p class="mt-6 text-gray-600">KHITAN MODERN JOGJA adalah cabang ke 3 pusat layanan khitan dengan metode-metode
              kekinian dan didukung oleh teknologi modern yang telah mendapat rekomendasi dari WHO
              (World Health Organization). Didirikan pertama kali pada tahun 2012 di kota Bandung,
              dengan nama Bale Khitan Bandung yang saat ini telah berganti nama menjadi Rocket Khitan
              Bandung, cabang ke 2 dengan nama Khitan Karapitan Bandung. Kami telah terpercaya lebih
              dari 11 tahun dan telah mengkhitan lebih dari 10.000 pasien. </p>
          </div>
        </div>
    </div>
  </div>
<div class="bg-white">  
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
          <div class="md:7/12 lg:w-6/12">
            <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Dokter-dokter Kami</h2>
            <p class="mt-6 text-gray-600">KHITAN MODERN JOGJA memiliki dokter-dokter profesional yang tersertifikasi dan kompten
              sebagai ahli khitan. Kami memiliki beberapa pilihan metode khitan kekinian dengan
              teknologi modern. Konsultasikan dengan dokter kami metode apa yang paling tepat untuk
              buah hati ayah dan bunda. Kami yakin ayah dan bunda akan pilih tempat dan metode khitan
              terbaik untuk buah hati tercinta. Dengan dilengkapi play ground dan design interior yang
              ramah anak menambah kenyamanan bagi buah hati anda ketika akan menjalani proses
              khitan sehingga jauh dari kesan takut atau mengerikan.
              </p>
          </div>
          <div class="md:5/12 lg:w-5/12">
            {{-- <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#22C55E" d="M55.5,-15.4C63.7,7.5,56.7,38,37.8,51.7C18.8,65.4,-12.1,62.3,-35.6,46C-59,29.7,-74.9,0.1,-67.8,-21.3C-60.6,-42.7,-30.3,-55.9,-3.4,-54.8C23.6,-53.8,47.2,-38.4,55.5,-15.4Z" transform="translate(100 100)" />
            </svg> --}}
            <img src="{{ url("img/assets/dokter/doctor-with-mascot-cloud.png") }}" class="z-20" alt="image" loading="lazy" width="" height="">
          </div>
        </div>
    </div>
  </div>

  <section class="bg-white bg-cover sm:bg-contain" style="background-image: url('/img/circle-scatter.svg')">
    <div class="container px-6 py-8 mx-auto">
        <h2 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Dokter Kami</h2>

        <div class="grid mt-8 sm:grid-cols-2 md:gap-8 lg:grid-cols-3 xl:grid-cols-4">
            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/syamsul-arifin.jpeg')}}" alt="avatar" />

                <div class="flex-1 p-6">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Syamsul Arifin </h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>

            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/encep.jpeg')}}" alt="avatar" />

                <div class="flex-1 p-6">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Encep Ivan Setiawan., MMRS </h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>

            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/yayu.jpeg')}}" alt="avatar" />

                <div class="flex-1 p-6">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Yayu Silvia Tsuroya  </h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>

            <div class="w-full max-w-xs text-center">
                <img class="w-full h-3/4 object-cover mx-auto rounded-lg" src="{{url('/img/hana.jpeg')}}" alt="avatar" />

                <div class="flex-1 p-6">
                    <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">dr. Hana Mutiara Wahyuna</h3>
                    <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Dokter</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center mt-20">
        <h2 class="max-w-2xl mx-auto text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
            Kepuasan pelanggan adalah yang <span class="text-green-500">pertama.</span>
        </h2>

        <p class="max-w-4xl mt-6 text-center text-gray-500 dark:text-gray-300">
          Kepuasan ayah dan bunda terhadap pelayanan kami adalah penyemangat bagi kami untuk 
          dapat melayani jauh lebih baik lagi. Kami sangat senang telah dipercaya menjadi bagian dari 
          moment membahagiakan ini. Teriring do’a dari kami semoga ananda menjadi anak yang 
          soleh, banyak rejeki, dimudahkan menggapai segala cita-citanya dan dan menjadi 
          kebanggaan orang tua, agama, bangsa dan negara aamiin yaa rabbal aalamiin.  
        </p>


    </div>
</section>

<section class="bg-white mb-20">
  <div class="max-w-6xl px-6 py-10 mx-auto">
      <main class="relative z-20 w-full mt-8 md:flex md:items-center xl:mt-12">
          <div class="absolute w-full bg-green-500 -z-10 md:h-96 rounded-2xl"></div>
          
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
@endsection