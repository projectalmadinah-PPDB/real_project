@extends('front.layouts.parent')

@section('title','Pendaftaran')

@section('content')
    <!-- Hero Section Start -->
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
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overvlow-hidden mb-10 dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Programming</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Mencoba beberapa bahasa program untuk membandingkan minat atau passion kita berada dimana?</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overvlow-hidden mb-10 dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?mountain" alt="mountain" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Traveling</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Mengexplore luasnya negeri ini dengan berkendara ataupun naik angkutan umum, menjadi suatu keseruan tersendiri yang hanya bisa di nikmati dengan cara Traveling. Dengan bonus mencoba kenikmatan wisata kuliner khas lokal.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overvlow-hidden mb-10 dark:bg-slate-800">
                        <img src="https://source.unsplash.com/360x200?sport" alt="sport" class="w-full">
                        <div class="py-8 px-6">
                            <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Olahraga</a></h3>
                            <p class="font-medium text-base text-secondary mb-6">Menyempatkan waktu Untuk berolahraga walaupun hanya 2 kali dalam sepekan untuk menjaga stamina tetap bugar dan sehat adalah keharusan.</p>
                            <a href="#" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
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
<!-- Contact Section End -->
@endsection

@push('my-script')
<script>
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
@endpush