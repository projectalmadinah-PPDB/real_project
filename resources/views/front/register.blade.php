@extends('front.layouts.parent')

@section('title','User | Register')

@section('content')
{{-- <section class="bg-gray-50 dark:bg-gray-900 p-36">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-86 h-16 mr-2" src="../dist/img/Vector.svg" alt="logo">   
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Daftar Formulir
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('user.register.proses')}}" method="post">
                    @csrf
                        <div class="me-2">
                            <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anda</label>
                            <input type="text" name="name" id="Nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Agus" >
                            @error('name')
                                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="sr-only">Info</span>
                                <div>
                                <span class="font-medium">{{$message}}
                                </div>
                            </div>
                            @enderror
                        </div>
                        <div class="me-2">
                            <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Anda</label>
                            <input type="text" name="email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name@gmail.com" >
                            @error('email')
                                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="sr-only">Info</span>
                                <div>
                                <span class="font-medium">{{$message}}
                                </div>
                            </div>
                            @enderror
                        </div>
                    <div>
                        <label for="Tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lahir</label>
                        <input type="date" name="tanggal_lahir" id="Tanggal_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        @error('tanggal_lahir')
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                            <span class="font-medium">{{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div>
                        <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Hp</label>
                        <input type="number" name="nomor" id="nomor_hp" placeholder="+62" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        @error('nomor')
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                            <span class="font-medium">{{$message}}
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="flex">
                        <div class="me-2">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            @error('password')
                                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="sr-only">Info</span>
                                <div>
                                <span class="font-medium">{{$message}}
                                </div>
                            </div>
                            @enderror
                        </div>
                        <div class="me-2">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                            <input type="password" name="password_again" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                            @error('password_again')
                                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="sr-only">Info</span>
                                <div>
                                <span class="font-medium">{{$message}}
                                </div>
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" name="jenis_kelamin" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" value="Laki-Laki">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300"><a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Laki-Laki</a></label>
                            @error('jenis_kelamin')
                                <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <span class="sr-only">Info</span>
                                <div>
                                <span class="font-medium">{{$message}}
                                </div>
                            </div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" name="jenis_kelamin" value="Perempuan">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300"><a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Perempuan</a></label>
                            <div class="block">
                                @error('jenis_kelamin')
                                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                    <span class="sr-only">Info</span>
                                    <div>
                                    <span class="font-medium">{{$message}}
                                    </div>
                                </div>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <button class="bg-emerald-300 px-20 py-1 rounded-full font-base text-white" type="submit">Daftar</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="{{route('user.index')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section> --}}
  <main class="w-full pt-14">
    <!-- alur pendaftaran -->
    <section>
        
    </section>

    <!-- formulir pendaftaran -->
    <section 
        class="w-full flex justify-center items-center py-7">
        <div class="bg-gradient-to-t from-primer to-sky-900 flex flex-col justify-center items-center gap-y-3 px-5 md:px-16 py-16 rounded-3xl text-dasar">
            <h1 class="text-3xl font-semibold text-center title">Formulir Pendaftaran.</h1>
            <p class="text-sm tracking-wide font-light text-gray-400">
                Mohon isi formulir pendaftaran dengan lengkap dan benar.
            </p>
            <form class="mt-5 w-full" action="{{route('user.register.proses')}}" method="POST">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="" class="text-sm">Nama Lengkap</label>
                    <input 
                        type="text" name="name"
                        placeholder="nama lengkap"
                        class="shadow-inner rounded-full w-full py-2 px-4 outline-none placeholder:opacity-100 focus:placeholder:opacity-0 placeholder:transition-all placeholder:duration-200 placeholder:italic text-sm placeholder:text-gray-500 bg-white/10 @error('name')
                        shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline
                        @enderror" value="{{old('name')}}"
                    >
                    @error('name')
                    <p class="text-red-500 text-xs italic">{{$message}}.</p>  
                    @enderror
                </div>
                <div class="flex justify-between gap-x-3">
                    <div class="mb-3 w-1/2">
                        <label for="" class="text-sm">Tanggal Lahir</label>
                        <input 
                            type="date" name="tanggal_lahir"
                            placeholder="62896XXXXXXXX"
                            class="shadow-inner rounded-full w-full py-2 px-4 outline-none placeholder:opacity-100 focus:placeholder:opacity-0 placeholder:transition-all placeholder:duration-200 placeholder:italic text-sm placeholder:text-gray-500 bg-white/10 @error('tanggal_lahir')
                            shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline
                            @enderror" value="{{old('tanggal_lahir')}}"
                        >
                        @error('tanggal_lahir')
                    <p class="text-red-500 text-xs italic">{{$message}}.</p>  
                    @enderror
                    </div>
                    <div class="mb-3 w-1/2">
                        <span class="text-sm">Jenis Kelamin</span>
                        <div class="flex justify-start items-center gap-x-5 py-1">
                            <div>
                                <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki" class="accent-sekunder">
                                <label for="laki" class="text-sm">
                                    Laki - Laki
                                </label>
                                @error('jenis_kelamin')
                                <p class="text-red-500 text-xs italic">{{$message}}.</p>  
                                @enderror
                            </div>
                            <div>
                                <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" class="accent-sekunder">
                                <label for="perempuan" class="text-sm">
                                    Perempuan
                                </label>
                                @error('jenis_kelamin')
                                <p class="text-red-500 text-xs italic">{{$message}}.</p>  
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="text-sm">Nomor Handphone</label>
                    <input 
                        type="tel" name="nomor"
                        placeholder="62896XXXXXXXX"
                        class="shadow-inner rounded-full w-full py-2 px-4 outline-none placeholder:opacity-100 focus:placeholder:opacity-0 placeholder:transition-all placeholder:duration-200 placeholder:italic text-sm placeholder:text-gray-500 bg-white/10 @error('nomor')
                        shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline
                        @enderror" value="{{old('nomor')}}"
                    >
                    @error('nomor')
                    <p class="text-red-500 text-xs italic">{{$message}}.</p>  
                    @enderror
                </div>
                <div class="flex justify-between gap-x-3 mb-3">
                    <div class="mb-3 w-1/2">
                        <label for="" class="text-sm">Password</label>
                        <span class="text-xs block text-slate-500 mb-1">Password minimal 8 - 12 karakter</span>
                        <input 
                            type="password" name="password"
                            placeholder="••••••••"
                            class="shadow-inner rounded-full w-full py-2 px-4 outline-none placeholder:opacity-100 focus:placeholder:opacity-0 placeholder:transition-all placeholder:duration-200 placeholder:italic text-sm placeholder:text-gray-500 bg-white/10 @error('password')
                            shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline
                            @enderror" value="{{old('password')}}"
                        >
                        @error('password')
                        <p class="text-red-500 text-xs italic">{{$message}}.</p>  
                        @enderror
                    </div>
                    <div class="mb-3 w-1/2">
                        <label for="" class="text-sm">Konfirmasi Password</label>
                        <span class="text-xs block text-slate-500 mb-1">Password minimal 8 - 12 karakter</span>
                        <input 
                            type="password" name="password_again"
                            placeholder="••••••••"
                            class="shadow-inner rounded-full w-full py-2 px-4 outline-none placeholder:opacity-100 focus:placeholder:opacity-0 placeholder:transition-all placeholder:duration-200 placeholder:italic text-sm placeholder:text-gray-500 bg-white/10 @error('password_again')
                            shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline
                            @enderror" value="{{old('password_again')}}"
                        >
                        @error('password_again')
                        <p class="text-red-500 text-xs italic">{{$message}}.</p>  
                        @enderror
                    </div>
                </div>
                <button type="submit" 
                    class="w-full py-2 px-4 border-2 rounded-full font-semibold tracking-wider border-sekunder bg-sekunder hover:bg-sekunder/50 duration-200 ease-in-out">
                    Daftar
                </button>
            </form>
        </div>
    </section>

    <!-- informasi -->
    <section 
        class="bg-dasar py-16 px-20 flex flex-col items-center justify-center gap-y-2">
        <span class="inline-flex items-center rounded-[3rem] bg-emerald-200 px-2 py-1 text-xs font-medium text-emerald-700 ring-1 ring-inset ring-emerald-700">B.L.O.G</span>
        <h1 class="text-3xl font-bold title">Information.</h1>
        <p class="mt-2 mb-7 text-sm text-gray-700 tracking-wide">
            Baca beragam artikel terkait Pendaftaran Online Sekolah Ar-Romusha dibawah ini.
        </p>
        <div class="swiper w-full">
            <div class="swiper-wrapper mx-auto w-full">
                <!-- foreach here -->
                <a href="" class="swiper-slide md:w-52 h-48 bg-dasar py-5 px-8">
                    <article>
                        <h1 class="text-xl mb-2 font-bold text-slate-950 tracking-wide truncate">Judul Artikel</h1>
                        <p class="line-clamp-3 leading-relaxed tracking-wide">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, necessitatibus quod eos, consectetur voluptate officiis, aut omnis laboriosam dolor beatae consequatur! Exercitationem totam, corrupti consequatur suscipit cum sunt dolorum quia!
                        </p>
                        <div class="flex justify-start items-center gap-x-2 mt-3">
                            <span class="italic ring-1 ring-sekunder bg-dasar rounded-full py-1 px-2 text-xs font-medium">Kategori</span>
                            <span class="ring-1 ring-sekunder bg-dasar py-1 px-3 text-xs font-semibold">
                                Date : <span class="font-medium">12/02/2022</span>
                            </span>
                        </div>
                    </article>
                </a>
                <!-- endforeach here -->
                <a href="" class="swiper-slide md:w-52 h-48 bg-dasar py-5 px-8">
                    <article>
                        <h1 class="text-xl mb-2 font-bold text-slate-950 tracking-wide truncate">Judul Artikel</h1>
                        <p class="line-clamp-3 leading-relaxed tracking-wide">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, necessitatibus quod eos, consectetur voluptate officiis, aut omnis laboriosam dolor beatae consequatur! Exercitationem totam, corrupti consequatur suscipit cum sunt dolorum quia!
                        </p>
                        <div class="flex justify-start items-center gap-x-2 mt-3">
                            <span class="italic ring-1 ring-sekunder bg-dasar rounded-full py-1 px-2 text-xs font-medium">Kategori</span>
                            <span class="ring-1 ring-sekunder bg-dasar py-1 px-3 text-xs font-semibold">
                                Date : <span class="font-medium">12/02/2022</span>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="" class="swiper-slide md:w-52 h-48 bg-dasar py-5 px-8">
                    <article>
                        <h1 class="text-xl mb-2 font-bold text-slate-950 tracking-wide truncate">Judul Artikel</h1>
                        <p class="line-clamp-3 leading-relaxed tracking-wide">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, necessitatibus quod eos, consectetur voluptate officiis, aut omnis laboriosam dolor beatae consequatur! Exercitationem totam, corrupti consequatur suscipit cum sunt dolorum quia!
                        </p>
                        <div class="flex justify-start items-center gap-x-2 mt-3">
                            <span class="italic ring-1 ring-sekunder bg-dasar rounded-full py-1 px-2 text-xs font-medium">Kategori</span>
                            <span class="ring-1 ring-sekunder bg-dasar py-1 px-3 text-xs font-semibold">
                                Date : <span class="font-medium">12/02/2022</span>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="" class="swiper-slide md:w-52 h-48 bg-dasar py-5 px-8">
                    <article>
                        <h1 class="text-xl mb-2 font-bold text-slate-950 tracking-wide truncate">Judul Artikel</h1>
                        <p class="line-clamp-3 leading-relaxed tracking-wide">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, necessitatibus quod eos, consectetur voluptate officiis, aut omnis laboriosam dolor beatae consequatur! Exercitationem totam, corrupti consequatur suscipit cum sunt dolorum quia!
                        </p>
                        <div class="flex justify-start items-center gap-x-2 mt-3">
                            <span class="italic ring-1 ring-sekunder bg-dasar rounded-full py-1 px-2 text-xs font-medium">Kategori</span>
                            <span class="ring-1 ring-sekunder bg-dasar py-1 px-3 text-xs font-semibold">
                                Date : <span class="font-medium">12/02/2022</span>
                            </span>
                        </div>
                    </article>
                </a>
                <a href="" class="swiper-slide md:w-52 h-48 bg-dasar py-5 px-8">
                    <article>
                        <h1 class="text-xl mb-2 font-bold text-slate-950 tracking-wide truncate">Judul Artikel</h1>
                        <p class="line-clamp-3 leading-relaxed tracking-wide">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, necessitatibus quod eos, consectetur voluptate officiis, aut omnis laboriosam dolor beatae consequatur! Exercitationem totam, corrupti consequatur suscipit cum sunt dolorum quia!
                        </p>
                        <div class="flex justify-start items-center gap-x-2 mt-3">
                            <span class="italic ring-1 ring-sekunder bg-dasar rounded-full py-1 px-2 text-xs font-medium">Kategori</span>
                            <span class="ring-1 ring-sekunder bg-dasar py-1 px-3 text-xs font-semibold">
                                Date : <span class="font-medium">12/02/2022</span>
                            </span>
                        </div>
                    </article>
                </a>
            </div>
            
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <style>
                :root {
                --swiper-navigation-size: 1.2rem;
                --swiper-navigation-top-offset: 50%;
                --swiper-navigation-sides-offset: 10px;

                --swiper-pagination-color: #0d8b6a;
                --swiper-pagination-bottom: -5px;
                }

                /* .swiper-button-prev, .swiper-button-next {
                    padding: 20px;
                    border-radius: 50%;
                    background-color: aqua;
                } */

                .swiper {
                    padding-bottom: 30px;
                }
            </style>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev py-6 px-6 bg-sekunder font-bold text-white rounded-full"></div>
            <div class="swiper-button-next py-6 px-6 bg-sekunder font-bold text-white rounded-full"></div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script type="module">
            const swiper = new Swiper('.swiper', {
                a11y: {
                    prevSlideMessage: 'Informasi Sebelumnya',
                    nextSlideMessage: 'Informasi Selanjutnya',
                },
                // Optional parameters
                direction: 'horizontal',
                autoHeight: false,
                loop: true,
                speed: 400,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // autoplay
                autoplay: {
                    delay: 2000,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: true,
                breakpoints: {
                    // 320px
                    // 320: {
                    //     slidesPerView: 1,
                    //     spaceBetween: 20,
                    // },
                    // 480px
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    // 640px
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    // 789px
                    789: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    }
                },
            });
        </script>
    </section>


    <!--Footer container-->
    <footer class="w-full bg-primer text-center text-white">
        <div class="px-6">
            <div class="w-5/12 mx-auto flex justify-center items-center bg-dasar py-6 rounded-t-full">
                <!-- facebook -->
                <a
                href="#!"
                type="button"
                class="m-1 h-9 w-9 rounded-full border-2 border-sekunder uppercase leading-normal text-sekunder transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                data-te-ripple-init
                data-te-ripple-color="light">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto h-full w-4"
                    fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                </svg>
                </a>
        
                <!-- twitter -->
                <a
                href="#!"
                type="button"
                class="m-1 h-9 w-9 rounded-full border-2 border-sekunder uppercase leading-normal text-sekunder transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                data-te-ripple-init
                data-te-ripple-color="light">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto h-full w-4"
                    fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg>
                </a>
        
                <!-- google -->
                <a
                href="#!"
                type="button"
                class="m-1 h-9 w-9 rounded-full border-2 border-sekunder uppercase leading-normal text-sekunder transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                data-te-ripple-init
                data-te-ripple-color="light">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto h-full w-4"
                    fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                    d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                    fill-rule="evenodd"
                    clip-rule="evenodd" />
                </svg>
                </a>

                <a href="#" class="w-20 mx-8">
                    <img src="/dists/images/logo_only_currentColor.svg">
                </a>
        
                <!-- isntagram -->
                <a
                href="#!"
                type="button"
                class="m-1 h-9 w-9 rounded-full border-2 border-sekunder uppercase leading-normal text-sekunder transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                data-te-ripple-init
                data-te-ripple-color="light">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto h-full w-4"
                    fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
                </a>
        
                <!-- linkedin -->
                <a
                href="#!"
                type="button"
                class="m-1 h-9 w-9 rounded-full border-2 border-sekunder uppercase leading-normal text-sekunder transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                data-te-ripple-init
                data-te-ripple-color="light">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto h-full w-4"
                    fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                </svg>
                </a>
        
                <!-- github -->
                <a
                href="#!"
                type="button"
                class="m-1 h-9 w-9 rounded-full border-2 border-sekunder uppercase leading-normal text-sekunder transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                data-te-ripple-init
                data-te-ripple-color="light">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="mx-auto h-full w-4"
                    fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                </svg>
                </a>
            </div>
        </div>
    
        <!--Copyright section-->
        <div
            class="p-4 text-center text-xs bg-black/50">
            © 2023 - 
            <a class="text-white tracking-wide" href="https://tailwind-elements.com/"
                >Sekolah Ar-Romusha</a
            >
        </div>
    </footer>
</main>
@endsection