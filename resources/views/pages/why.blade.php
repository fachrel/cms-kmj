@extends('layouts.main')

@section('tittle', 'Kenapa Harus Khitan Modern Jogja?')

@section('content')
<section class="py-10 sm:py-16 lg:py-24 bg-repeat bg-opacity-80 bg-green-300"  style="background-image: url('/img/assets/backgrounds/doodle-kmj-ps.png'); background-attachment: fixed;">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 bg-white p-10 rounded-lg rounded-3xl border-red-500 border-8">
        <div class="container flex px-6 py-10 mb-10">
            <h1 class="text-4xl font-bold mx-auto">Kenapa harus Khitan Modern Jogja?</h1>
        </div>
        <div class="w-full">
            <img src="{{ url('/img/assets/mascot/mascot-kmj-5.png') }}" alt="" srcset="" class="w-[500px] mx-auto mb-18">

        </div>
        <div class="grid grid-cols-1 gap-12 text-center sm:grid-cols-2 md:grid-cols-3 lg:gap-y-16 mb-6">
            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-blue-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/berpengalaman.png') }}" alt="" class="w-14 h-14 absolute">
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Dokter Berpengalaman</h3>
                <p class="mt-4 text-base text-gray-600">Kami memiliki dokter yang sangat berpengalaman dan tersertifikasi.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-green-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/kepercayaan.png') }}" alt="" class="w-14 h-14 absolute">
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Kepercayaan Selama Lebih dari 11 Tahun</h3>
                <p class="mt-4 text-base text-gray-600">Kami telah menjadi pilihan yang terpercaya selama lebih dari 11 tahun.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-orange-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/cabang.png') }}" alt="" class="w-14 h-14 absolute">
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Jaringan Cabang</h3>
                <p class="mt-4 text-base text-gray-600">Kami telah membuka 3 cabang, termasuk 2 cabang di Bandung.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-purple-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/reputasi.png') }}" alt="" class="w-14 h-14 absolute">
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Reputasi Terbaik</h3>
                <p class="mt-4 text-base text-gray-600">Telah mengkhitan lebih dari 10 ribu pasien dengan reputasi terbaik.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-gray-100" width="65" height="70" viewBox="0 0 65 70" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M64.5 26C64.5 46.4345 56.4345 70 36 70C15.5655 70 0 53.9345 0 33.5C0 13.0655 13.0655 0 33.5 0C53.9345 0 64.5 5.56546 64.5 26Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/strategis.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Lokasi Strategis</h3>
                <p class="mt-4 text-base text-gray-600">Kami terletak dekat dengan pusat kota Jogja, memudahkan akses.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-yellow-100" width="78" height="78" viewBox="0 0 78 78" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.49996 28.0002C4.09993 47.9554 14.1313 66.7885 35.5 71.5002C56.8688 76.2119 68.0999 58.4553 72.5 38.5001C76.9 18.5449 68.3688 12.711 47 7.99931C25.6312 3.28759 12.9 8.04499 8.49996 28.0002Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/terjangkau.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Harga Terjangkau</h3>
                <p class="mt-4 text-base text-gray-600">Kami menawarkan harga yang terjangkau untuk layanan khitan.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-gray-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z"></path>
                    </svg>
                    <img src="{{ url('img/assets/icons/kenyamanan.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Kenyamanan</h3>
                <p class="mt-4 text-base text-gray-600">Tempat kami didesain untuk kenyamanan pasien dan keluarga.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-rose-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/konsultasi.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Konsultasi Dokter Gratis</h3>
                <p class="mt-4 text-base text-gray-600">Kami memberikan konsultasi dokter gratis.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-lime-100" width="62" height="65" viewBox="0 0 62 65" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 13.0264C0 33.4609 8.06546 64.0264 28.5 64.0264C48.9345 64.0264 62 50.4604 62 30.0259C62 9.59135 59.4345 4.0256 39 4.0256C18.5655 4.0256 0 -7.40819 0 13.0264Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/pendaftaran.png') }}" alt="" class="w-14 h-14 absolute">
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Biaya Pendaftaran Gratis</h3>
                <p class="mt-4 text-base text-gray-600">Tidak ada biaya pendaftaran yang harus dibayar.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-green-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z"></path>
                    </svg>
                    <img src="{{ url('img/assets/icons/museum.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Bonus Tiket Museum</h3>
                <p class="mt-4 text-base text-gray-600">Kami memberikan tiket masuk gratis ke Museum Dirgantara TNI AU untuk 3 orang.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-lime-100" width="62" height="65" viewBox="0 0 62 65" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 13.0264C0 33.4609 8.06546 64.0264 28.5 64.0264C48.9345 64.0264 62 50.4604 62 30.0259C62 9.59135 59.4345 4.0256 39 4.0256C18.5655 4.0256 0 -7.40819 0 13.0264Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/nyaman.png') }}" alt="" class="w-14 h-14 absolute">
                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Fasilitas Lengkap</h3>
                <p class="mt-4 text-base text-gray-600">Kami menyediakan obat paten, goody bag, sertifikat, mainan, celana khitan, dan foto eksklusif.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-blue-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/playground.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Play Ground</h3>
                <p class="mt-4 text-base text-gray-600">Tersedia area bermain untuk anak-anak.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-purple-100" width="66" height="68" viewBox="0 0 66 68" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M65.5 30C65.5 50.4345 46.4345 68 26 68C5.56546 68 0 50.4345 0 30C0 9.56546 12.5655 0 33 0C53.4345 0 65.5 9.56546 65.5 30Z" />
                    </svg>

                    <img src="{{ url('img/assets/icons/perawatan.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Perawatan Sempurna</h3>
                <p class="mt-4 text-base text-gray-600">Kami merawat pasien hingga sembuh dengan perhatian khusus.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-rose-100" width="72" height="75" viewBox="0 0 72 75" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M63.6911 28.8569C68.0911 48.8121 74.6037 61.2674 53.2349 65.9792C31.8661 70.6909 11.6224 61.2632 7.22232 41.308C2.82229 21.3528 3.6607 12.3967 25.0295 7.68503C46.3982 2.97331 59.2911 8.90171 63.6911 28.8569Z" />
                    </svg>

                    <img src="{{ url('img/assets/icons/vr.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Khitan dengan VR</h3>
                <p class="mt-4 text-base text-gray-600">Anda dapat mengkhitan sambil menikmati pengalaman VR.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-orange-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z" />
                    </svg>
                    <img src="{{ url('img/assets/icons/semua-usia.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Melayani Semua Usia</h3>
                <p class="mt-4 text-base text-gray-600">Kami melayani khitan untuk berbagai usia.</p>
            </div>

            <div>
                <div class="relative flex items-center justify-center mx-auto">
                    <svg class="text-blue-100" width="62" height="64" viewBox="0 0 62 64" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M62 13.001C62 33.4355 53.9345 64.001 33.5 64.001C13.0655 64.001 0 50.435 0 30.0005C0 9.56596 2.56546 4.00021 23 4.00021C43.4345 4.00021 62 -7.43358 62 13.001Z"></path>
                    </svg>

                    <img src="{{ url('img/assets/icons/kondisi-khusus.png') }}" alt="" class="w-14 h-14 absolute">

                </div>
                <h3 class="mt-8 text-lg font-semibold text-black">Kondisi Khusus</h3>
                <p class="mt-4 text-base text-gray-600">Kami juga melayani khitan untuk kondisi khusus seperti fimosis, gemuk, dan autis.</p>
            </div>
        </div>
    </div>
</section>

@endsection