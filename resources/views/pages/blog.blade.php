@extends('layouts.main')

@section('tittle', 'Artikel')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">{{ $pageTitle }}<h1>

            {{-- <button class="focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 transition-colors duration-300 transform dark:text-gray-400 hover:text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button> --}}
        </div>

        <hr class="my-8 border-gray-200 dark:border-gray-700">

        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($posts as $post)                
            <div>
                <img class="object-cover object-center w-full h-64 rounded-lg lg:h-80" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                <div class="mt-8">
                    <a href="/artikel/kategori/{{ $post->category->slug }}" class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ $post->category->name }}</a>
                    <h1 class="mt-4 text-xl font-semibold text-gray-800 dark:text-white">
                        {{ $post->title }}
                    </h1>

                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                        {{ $post->excerpt }}
                    </p>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <a href="/artikel/user/{{ $post->user->slug }}" class="text-lg font-medium text-gray-700 dark:text-gray-300 hover:underline hover:text-gray-500">
                                {{ $post->user->name }}
                            </a>

                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $post->created_at }}</p>
                        </div>

                        <a href="/artikel/{{ $post->slug }}" class="inline-block text-green-500 underline hover:text-green-400">Baca Selengkapnya</a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection