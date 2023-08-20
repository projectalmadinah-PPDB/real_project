@extends('front.layouts.parent')

@section('title','Pendaftaran')

@section('content')
    {{-- <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="sm:w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-[#176B9B] md:text-xl lg:text-2xl">Selamat Datang 
                        di Pendaftaran<span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">Pondok Al-Madinah</span> </h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Ahli Di Bidang <span class="text-dark">| Tekni Informatika </span></h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed ">Menjadi Orang Yang Dapat Berguna
                        Di masa Depan
                    </p>

                    <a href="#contact" class="text-[#176B9B] border border-[#176B9B] font-semibold py-3 px-8 rounded-full hover:shaddow-lg hover:opacity-80 transition duratiron-300 ease-in-out hover:bg-[#176B9B] hover:text-slate-50">Hubungi Kami</a>
                    <a href="#contact" class="text-[#176B9B] border border-[#176B9B] font-semibold py-3 px-8 rounded-full hover:shaddow-lg hover:bg-[#176B9B] hover:text-slate-50 transition duratiron-300 ease-in-out">Pendaftaran</a>
                </div>
                <div class="sm:w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="dist/img/read.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Hero Section End -->

<!-- Portfolio Section Start -->
    <section id="Pendaftaran" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
        <div class="container ">
            <h1 class="text-center text-5xl font-bold dark:text-white">Alur Pendaftaran</h1>
            <h5 class="text-xl text-center font-bold dark:text-white">Calon Siswa</h5>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Panduan Pendaftaran</h4>
                    <h2 class="font-bold text-dark text-xl max-w-md lg:text-lg dark:text-white"><a href="{{route('register')}}">&#9900; Isi Formulir</a></h2>
                    <p class="font-mendium text-base text-secondary max-w-xl dark:text-white ml-5">Isi Formulir Terlebih Dahulu Silahkan Click Yang Di Atas / Disini <a href="{{route('register')}}" class="font-bold text-primary">Formulir</a></p>
                    <h2 class="font-bold text-dark text-xl max-w-md lg:text-lg dark:text-white">&#9900; Setiap Pendaftaran Ada Biaya Sebesar 100K</h2>
                    <p class="font-mendium text-base text-secondary max-w-xl dark:text-white ml-5">Pembayaran Bisa Dengan ATM / Payment Getway</p> 
                </div>
                <div class="mb-12 p-4 md:w-1/2 dark:bg-stone-300">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">Panduan Lanjut Pendaftaran</h4>
                    <h2 class="font-bold text-dark text-xl max-w-md lg:text-lg dark:text-white">&#9900; Menekan Tombol Lanjut Pendaftaran</h2>
                    <p class="font-mendium text-base text-secondary max-w-xl dark:text-white ml-5">Tombol Lanjut Pendaftaran Berada Di Menu Calon Siswa</p>
                    <h2 class="font-bold text-dark text-xl max-w-md lg:text-lg dark:text-white">&#9900; Siapkan Data Pribadi Calon Siswa</h2>
                    <p class="font-mendium text-base text-secondary max-w-xl dark:text-white ml-5">Seperti Kartu Keluarga , Kartu KTP/Pelajar</p>         
                </div>
            </div> 
        </div>        
    </section>
<!-- Portfolio Section End -->

<!-- Hobby Section Start -->
    <section id="hobby" class="pt-30 pb-32 bg-slate-100 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">INFORMASI</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Informasi Terbaru</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                @foreach ($article as $index)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overvlow-hidden mb-10 dark:bg-slate-800">
                        <img src="{{ asset('storage/' . $index['image'])}}" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">{{$index['title']}}</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">{{$index['desc']}}</p>
                            <a href="https://pondokinformatika.com/" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
<!-- Hobby Section End -->

<!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Hubungi Kami</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Tinggalkan pesan</p>
                </div>
            </div>
            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama</label>
                        <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
                    </div> 
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">Email</label>
                        <input type="text" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
                    </div> 
                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base font-bold text-primary">Pesan</label>
                        <input type="text" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32" />
                    </div>
                    <div class="w-full px-4">
                        <button class="tex-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                    </div>
                </div>
            </form>            
        </div>
    </section>
<!-- Contact Section End --> --}}

<!-- theme and to top -->
<div 
class="fixed bottom-16 right-16 flex flex-col-reverse gap-y-2 z-[100]">
<!-- dark theme -->
<label 
    class="p-3 rounded-full bg-[#0A4A3B] dark:bg-[#23AA8A] border border-[#0A4A3B] text-white hover:bg-white hover:text-[#0A4A3B] shadow-inner" for="toggleDark" >
    <!-- this hidden checkbox controls the state -->
    <input type="checkbox" class="hidden" id="toggleDark" />
    <!-- sun icon -->
    <svg id="light" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"/></svg>

    <!-- moon icon -->
    <svg id="dark" class="hidden fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"/></svg>
    
</label>
<script type="text/javascript">

    const btnTheme = document.getElementById("toggleDark");
    var lightTheme = document.getElementById("light");
    var darkTheme = document.getElementById("dark");
    const html = document.querySelector("html");

    window.onload = function() {
        document.getElementById('logo').src = 'dist/images/logo_only.svg';
    }

    btnTheme.addEventListener("click", function() {
        lightTheme.classList.toggle('hidden');
        darkTheme.classList.toggle('hidden');
        document.getElementById("logo").removeAttribute("src");

        if (btnTheme.checked) {
            html.classList.add('dark');
            document.getElementById('logo').src = 'dist/images/logo_only_white.svg';
            localStorage.theme = 'dark';
        } else {
            html.classList.remove('dark');
            document.getElementById('logo').src = 'dist/images/logo_only.svg';
            localStorage.theme = 'light';
        }
    });
    
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.getElementById('logo').src = 'dist/images/logo_only_white.svg';
        btnTheme.checked = true;
    } else {
        document.getElementById('logo').src = 'dist/images/logo_only.svg';
        btnTheme.checked = false;
    }
    
</script>
<a href="#top"
    class="p-3 py-2 rounded-full text-white bg-[#0A4A3B] dark:bg-[#23AA8A] border border-[#0A4A3B] hover:bg-white hover:text-[#0A4A3B] bi bi-caret-up-fill text-lg shadow-inner"
></a>
</div>

<main class="px-5 md:px-32 py-5 pt-20 md:py-20 flex flex-col gap-y-8">

<!-- hero section -->
<section 
    class="w-[100%] flex flex-col-reverse md:flex-row items-center justify-start gap-y-8 md:justify-between pt-0 pb-5 md:py-5">
    <div class="w-full md:w-5/12 text-slate-900 dark:text-white">
        <h1 class="text-5xl font-extrabold mb-2 sm:mb-7">PPDB <span class="font-normal">Online!</span></h1>
        <p class="text-clip text-base mb-2 sm:mb-9">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa iusto ducimus, quae ab consequuntur aut officiis impedit necessitatibus autem alias molestias quos ratione saepe? Nam architecto aliquam similique dicta eius.
        </p>
        <div class="flex gap-x-2">
            <a href="#flowSystem" class="py-3 px-4 border border-[#176b9b] bg-[#176b9b] text-white rounded-full hover:bg-white hover:text-[#176b9b]">
                Alur Pendaftaran
            </a>
            <a href="#registration" class="py-3 px-4 border bg-transparent text-[#176b9b] border-[#176b9b] hover:bg-[#176b9b] hover:text-white rounded-full">
                Daftar
            </a>
        </div>
    </div>
    <div class="w-9/12 md:w-auto ms-0 md:ms-5">
        <img src="dist/images/read.jpg" class="rounded-full" width="700px">
    </div>
    <p id="flowSystem"></p>
</section>

<!-- alur pendaftaran -->
<section 
    class="dark:bg-slate-800 py-7">
    <h2 class="text-center text-3xl md:text-4xl mb-5 font-semibold dark:text-emerald-50">Alur Pendaftaran</h2>

    <div>
        <ol
            class="grid grid-cols-1 divide-x divide-gray-100 overflow-hidden rounded-lg border border-gray-100 dark:border-slate-800 shadow-lg text-sm text-gray-500 sm:grid-cols-4"
        >
            <li 
                class="flex items-center justify-center gap-2 p-4 py-6 text-base bg-white dark:bg-slate-900">
                <svg
                    class="h-7 w-7 shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"
                    />
                </svg>
        
                <p class="leading-none">
                    <strong class="block font-medium"> Daftar Akun </strong>
                    <small class="mt-1"> dan mengisi formulir pendaftaran </small>
                </p>
            </li>
    
            <li
                class="relative flex items-center justify-center gap-2 bg-gray-100 p-4 py-6 text-base"
                >
                <span
                    class="absolute -left-3 top-1/2 hidden h-5 w-5 -translate-y-1/2 rotate-45 border border-white dark:border-slate-900 sm:block bg-white dark:bg-slate-900"
                ></span>
                <span
                    class="absolute -right-[.6rem] top-1/2 hidden h-5 w-5 -translate-y-1/2 rotate-45 border border-gray-100 sm:block bg-gray-100 z-[300]"
                ></span>
                <svg
                    class="h-7 w-7 shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                    />
                </svg>
                <!-- <svg
                    class="h-7 w-7 shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                    />
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                </svg> -->
                <p class="leading-none">
                    <strong class="block font-medium"> Membayar </strong>
                    <small class="mt-1"> biaya administrasi </small>
                </p>
            </li>
    
            <li 
                class="relative flex items-center justify-center gap-2 p-4 py-6 text-base bg-white dark:bg-slate-900">
                <span
                    class="absolute -right-[.6rem] top-1/2 hidden h-5 w-5 -translate-y-1/2 rotate-45 border border-white dark:border-slate-900 sm:block bg-white dark:bg-slate-900"
                ></span>
                <svg 
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cloud-upload" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z" stroke="slategray" stroke-width=".5" />
                    <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z" stroke="slategray" stroke-width=".5" />
                </svg>
                <!-- <svg
                    class="h-7 w-7 shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                    />
                </svg> -->
                <p class="leading-none">
                    <strong class="block font-medium"> Upload </strong>
                    <small class="mt-1"> dokumen yang dibutuhkan </small>
                </p>
            </li>
    
            <li 
                class="flex items-center justify-center gap-2 p-4 py-6 text-base bg-gray-100">
                <svg 
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" stroke="slategray" stroke-width="2" />
                    <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z" stroke="slategray" stroke-width=".5" />
                </svg>
                <!-- <svg
                    class="h-7 w-7 shrink-0"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
                    />
                </svg> -->
                <p class="leading-none">
                    <strong class="block font-medium"> Tunggu </strong>
                    <small class="mt-1"> pengumuman dan konfirmasi </small>
                </p>
            </li>
        </ol>
    </div>
</section>

<p id="registration"></p>
<!-- formulir pendaftaran -->
@if (Auth::check())
@else
<section
class="relative section flex-col shadow-lg bg-[#23AA8A]/70 mx-20 md:mx-32 mt-10">
<div 
    class="bg-image-logo absolute top-0 left-0 w-full h-full opacity-10" 
    style="background-image: url('images/logo_only_white.svg');
    background-position: -70px -70px;
    background-size: 80%;
    background-repeat: no-repeat;">
</div>
<div class="mx-auto text-center my-10 relative">
    <h2 class="text-3xl font-bold text-gray-900 md:text-4xl">Formulir Pendaftaran</h2>
    <p class="mt-2 text-lg leading-3 text-white">Mohon isi formulir pendaftaran dengan lengkap dan benar.</p>
</div>
<form action="{{route('user.register.proses')}}" method="POST" class="flex flex-col justify-between items-center w-full px-5 pb-7 md:px-10 relative">
    @csrf
    @method('POST')
    <div class="sm:10/12 md:w-3/4">
        <div class="mb-2">
            <label for="name" class="text-sm mb-2">Nama Lengkap</label>
            <input placeholder="nama kamu" type="text" id="name"  name="name" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" >
            @error('name')
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                 <span class="font-medium">{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="email" class="text-sm mb-2">Email Kamu</label>
            <input placeholder="Email Kamu" type="email" id="email"  name="email" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" >
            @error('email')
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                 <span class="font-medium">{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="phone" class="text-sm mb-2">Nomor Telepon</label>
            <input placeholder="nomor telepon kamu" type="number" id="phone" name="nomor" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" >
            @error('nomor')
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{$message}}</span>
            </div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="gender" class="text-sm mb-2">Jenis Kelamin</label>
            <select id="gender" name="jenis_kelamin" class="border-0 rounded-full py-2 px-3 appearance-none shadow-inner w-full">
                <option class="text-sm" disabled selected>Pilih Jenis Kelamin mu</option>
                <option class="text-sm" value="laki">Laki-Laki</option>
                <option class="text-sm" value="perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="birth" class="text-sm mb-2">Tanggal Lahir</label>
            <input type="date" id="birth" name="tanggal_lahir" class="border-0 rounded-full py-2 px-3 shadow-inner w-full">
            @error('tanggal_lahir')
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="password" class="text-sm mb-2">Password</label>
            <input placeholder="••••••••••" name="password" type="password" id="password" class="border-0 rounded-full py-2 px-3 shadow-inner w-full" >
            @error('password')
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="password_corfirmation" class="text-sm mb-2">Konfirmasi Password</label>
            <input placeholder="••••••••••" name="password_again" type="password" id="password_corfirmation" class="border-0 rounded-full py-2 px-3 shadow-inner w-full" >
            @error('password_again')
            <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">{{$message}}
            </div>
            @enderror
        </div>
    </div>
    <button type="submit" class="mt-8 w-3/4 p-2 bg-[#0A4A3B] hover:bg-emerald-300 border-0 text-white hover:text-emerald-950 font-medium tracking-wide rounded-[30px] duration-200 uppercase">
        Daftar
    </button>
</form>
</section>
<section class="section shadow-lg">
    
</section>
@endif

<p id="announcement"></p>
<!-- pengumuman -->


<p id="information"></p>
<!-- informasi -->
<section 
    class="dark:bg-slate-800 py-10 sm:py-16 rounded-[30px]">
    <div class="mx-auto px-6 lg:px-8">
        <div class="mx-auto text-center lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-slate-50 sm:text-4xl">
                Informasi
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-600 dark:text-gray-300">
                Learn how to grow your business with our expert advice.
            </p>
        </div>
        <div class="swiper border-t border-gray-500 dark:border-gray-400 mt-10 pt-0">
            <div class="swiper-wrapper mx-auto mt-10 pt-10 lg:mx-0 lg:max-w-none w-full">
                @foreach ($article as $index => $item)
                    
                <article class="swiper-slide flex max-w-xl flex-col items-start justify-between hover:bg-white/10 py-2 px-3 rounded-[1.5rem] dark:hover:shadow-lg duration-300 border border-slate-900 dark:border-emerald-100">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#" class="relative z-10 rounded-full bg-emerald-200 px-3 py-1.5 font-medium text-gray-600 dark:text-gray-900 hover:bg-emerald-700 hover:text-gray-100 duration-200">Marketing</a>
                    </div>
                    <div class="group relative">
                        <img src="{{ asset('storage/' . $item['image'])}}" alt="" class="border border-emerald-300 mt-3 w-full h-[15rem] object-none object-center rounded-[1rem]">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-50 group-hover:text-gray-600 dark:text-gray-400 dark:group-hover:text-gray-400">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                {{$item->title}}
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">{{$item->desc}}</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https:/dist/images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                        <div class="text-sm leading-6">
                        <p class="font-semibold text-gray-900 dark:text-slate-50">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            {{$item->user->name}}
                            </a>
                        </p>
                        <p class="text-gray-600 dark:text-gray-400">{{$item->user->role}}</p>
                        </div>
                    </div>
                </article>
                @endforeach
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
            <div class="swiper-button-prev py-6 px-6 bg-emerald-100 font-bold border border-emerald-400 text-emerald-900 shadow-sm hover:shadow-md duration-200 ease-in-out rounded-full"></div>
            <div class="swiper-button-next py-6 px-6 bg-emerald-100 font-bold border border-emerald-400 text-emerald-900 shadow-sm hover:shadow-md duration-200 ease-in-out rounded-full"></div>
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
                scrollbar: false,
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
        <!-- <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <article class="flex max-w-xl flex-col items-start justify-between hover:bg-white/10 py-2 px-3 rounded-[1.5rem] dark:hover:shadow-lg hover:scale-105 duration-300 border border-slate-900 dark:border-emerald-100">
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    <a href="#" class="relative z-10 rounded-full bg-emerald-200 px-3 py-1.5 font-medium text-gray-600 dark:text-gray-900 hover:bg-emerald-700 hover:text-gray-100 duration-200">Marketing</a>
                </div>
                <div class="group relative">
                    <img src="dist/images/logo_only_white.svg" alt="" class="border border-emerald-300 mt-3 w-full h-[15rem] object-none object-center rounded-[1rem]">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-50 group-hover:text-gray-600 dark:text-gray-400 dark:group-hover:text-gray-400">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate
                        </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https:/dist/images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                    <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900 dark:text-slate-50">
                        <a href="#">
                        <span class="absolute inset-0"></span>
                        Michael Foster
                        </a>
                    </p>
                    <p class="text-gray-600 dark:text-gray-400">Co-Founder / CTO</p>
                    </div>
                </div>
            </article>
            <article class="flex max-w-xl flex-col items-start justify-between hover:bg-white/10 py-2 px-3 rounded-[1.5rem] dark:hover:shadow-lg hover:scale-105 duration-300 border border-slate-900 dark:border-emerald-100">
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    <a href="#" class="relative z-10 rounded-full bg-emerald-200 px-3 py-1.5 font-medium text-gray-600 dark:text-gray-900 hover:bg-emerald-700 hover:text-gray-100 duration-200">Marketing</a>
                </div>
                <div class="group relative">
                    <img src="dist/images/logo_only_white.svg" alt="" class="border border-emerald-300 mt-3 w-full h-[15rem] object-none object-center rounded-[1rem]">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-50 group-hover:text-gray-600 dark:text-gray-400 dark:group-hover:text-gray-400">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate
                        </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https:/dist/images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                    <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900 dark:text-slate-50">
                        <a href="#">
                        <span class="absolute inset-0"></span>
                        Michael Foster
                        </a>
                    </p>
                    <p class="text-gray-600 dark:text-gray-400">Co-Founder / CTO</p>
                    </div>
                </div>
            </article>
            <article class="flex max-w-xl flex-col items-start justify-between hover:bg-white/10 py-2 px-3 rounded-[1.5rem] dark:hover:shadow-lg hover:scale-105 duration-300 border border-slate-900 dark:border-emerald-100">
                <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    <a href="#" class="relative z-10 rounded-full bg-emerald-200 px-3 py-1.5 font-medium text-gray-600 dark:text-gray-900 hover:bg-emerald-700 hover:text-gray-100 duration-200">Marketing</a>
                </div>
                <div class="group relative">
                    <img src="dist/images/logo_only_white.svg" alt="" class="border border-emerald-300 mt-3 w-full h-[15rem] object-none object-center rounded-[1rem]">
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 dark:text-slate-50 group-hover:text-gray-600 dark:text-gray-400 dark:group-hover:text-gray-400">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate
                        </a>
                    </h3>
                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https:/dist/images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                    <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900 dark:text-slate-50">
                        <a href="#">
                        <span class="absolute inset-0"></span>
                        Michael Foster
                        </a>
                    </p>
                    <p class="text-gray-600 dark:text-gray-400">Co-Founder / CTO</p>
                    </div>
                </div>
            </article>
        </div> -->
    </div>
</section>

<p id="contact"></p>
<!-- kotak bantuan -->
<section 
    class="bg-emerald-50/20 dark:bg-slate-900 section px-10 md:px-20 flex flex-col justify-start py-16 shadow-lg border border-emerald-300">
    <div class="mx-auto text-center w-7/12 mb-8">
        <h1 class="mt-2 text-3xl sm:text-4xl font-bold dark:text-slate-100">Kotak Bantuan</h1>
        <p class="mt-2 text-md leading-8 text-gray-600 dark:text-gray-300">
            Kirim pertanyaan dan komentar kamu melalui form dibawah ini.
        </p>
    </div>

    <div class="mx-auto w-7/12">
        <form class="space-y-2" action="#" method="POST">
            <div class="mb-2">
                <label for="name" class="text-sm mb-2 dark:text-white">Nama Kamu</label>
                <input placeholder="nama kamu" type="text" id="name" class="border-0 py-2 px-3 rounded-full shadow-inner w-full placeholder:text-sm" >
            </div>
    
            <div class="mb-2">
                <label for="email" class="text-sm mb-2 dark:text-white">Email Kamu</label>
                <input placeholder="email kamu" type="email" id="email" class="border-0 py-2 px-3 rounded-full shadow-inner w-full placeholder:text-sm" >
            </div>
    
            <div class="mb-2">
                <label for="message" class="text-sm mb-2 dark:text-white">Pesan Kamu</label>
                <textarea placeholder="pesan kamu" id="message" rows="4" 
                    style="min-height: 40px!important; max-height: 150px!important;" class="border-0 py-2 px-3 rounded-[30px] shadow-inner w-full placeholder:text-sm"
                ></textarea>
            </div>
    
            <div>
                <button type="submit" class="w-full mt-5 p-2 bg-emerald-500 hover:bg-emerald-300 border text-white hover:text-emerald-950 font-medium tracking-wide rounded-[30px] hover:-translate-y-1 shadow-sm hover:shadow-md hover:border-slate-900 dark:hover:border-emerald-200 dark:border-slate-900 duration-200 uppercase">Kirim</button>
            </div>
        </form>
    
        <p class="mt-7 text-center text-sm text-gray-500">
            kami berterima kasih atas masukan yang kamu berikan.
        </p>
    </div>
</section>

<p id="questionAndAnswer"></p>
<!-- Q&A -->
<section 
    class="bg-white dark:bg-slate-900 py-10 px-20 flex flex-col justify-start items-center rounded-[3rem]">
    <div class="text-center w-full mb-8">
        <span class="inline-flex items-center rounded-[3rem] bg-emerald-300 px-2 py-1 text-xs font-medium text-emerald-700 ring-1 ring-inset ring-emerald-700">Q.&.A</span>
        <h1 class="mt-2 text-3xl sm:text-4xl font-bold dark:text-slate-100">Question and Answer</h1>
        <p class="mt-2 text-lg leading-8 text-gray-600 dark:text-gray-300">
            Temukan berbagai pertanyaan seputar pendaftaran Sekolah Ar-Romusha dibawah ini.
        </p>
    </div>

    <style>
        div.toggle-question {
            width: 1.4rem; height: 1.4rem;
            overflow: hidden;
        }

        #btnQuestion {
            translate: 0 .9rem;
            rotate: 90deg;
        }

        .show #btnQuestion {
            translate: 0 -.9rem;
        }
    </style>

    <div class="flex flex-col justify-start items-center gap-y-2 w-full px-10 sm:px-18 md:px-32 dark:text-slate-100">
        <div class="dropdown w-full shadow-md rounded-[20px] border border-emerald-400">
            <div class="dropdown-title font-semibold p-5 px-7 text-xl flex justify-between items-center">
                <p class="tracking-wide">sdfasdlfkja?</p>
                <div class="toggle-question flex justify-center items-center rounded-full">
                    <button id="btnQuestion" class="flex duration-200">
                        <i class="bi bi-plus-circle text-xl hover:bg-slate-200 px-1 rounded-full"></i>
                        <i class="bi bi-dash-circle text-xl hover:bg-slate-200 px-1 rounded-full rotate-90"></i>
                    </button>
                </div>
            </div>
            <div class="dropdown-content pb-5 px-7 tracking-[.4px] hidden duration-200">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, est aspernatur delectus, quisquam dolore quis quidem cupiditate vitae officia nihil possimus cumque perferendis, quibusdam laudantium quo magnam. Ratione, sed repudiandae?
            </div>
        </div>
    </div>
    
</section>

</main>
@endsection

@push('my-script')
<script>
    // accordion question
        const ItemHeaders = document.querySelectorAll('div.dropdown-title');
        
        ItemHeaders.forEach(ItemHeader => {
            ItemHeader.addEventListener('click', event => {
                ItemHeader.classList.toggle('show');
                
                const ItemBody = ItemHeader.nextElementSibling;
                
                if(ItemHeader.classList.contains('show')) {
                    ItemBody.classList.remove('hidden');
                } else {
                    ItemBody.classList.add('hidden');
                }
            })
        })
</script>
@endpush