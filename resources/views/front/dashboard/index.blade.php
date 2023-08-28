@extends('front.dashboard.layouts.parent')

@section('title','Dashboard')

@section('content')
<main class="w-full min-h-screen h-auto pt-12 md:pt-24">
    <!-- section one -->
    <section class="w-full py-7 px-10 lg:px-60 bg-gradient-to-b from-primer to-sky-900 flex flex-col justify-center items-center gap-4">
        <!-- status pendaftaran -->
        <div class="flex flex-col gap-3 justify-center items-center w-full py-7 md:py-10 px-7 md:px-12 bg-primer text-dasar rounded-lg">
            <h1 class="text-2xl md:text-4xl tracking-wide font-semibold text-center">Selamat Datang Budi!</h1>
            <p class="text-dasar tracking-wide text-xs md:text-sm text-center">Lengkapi Data diri kamu untuk melanjutkan proses pendaftaran, melalui tombol dibawah ini.</p>
            <a href="" class=" text-xs md:text-sm py-3 px-7 rounded-3xl border border-sekunder bg-sekunder hover:bg-sekunder/20 duration-200 text-dasar">
                Lengkapi Data Diri
            </a>
        </div>

        <!-- cta ikuti tes -->
        <div class="flex flex-col justify-center items-center gap-4">
        </div>

        <!-- alur pendaftaran dan status -->
    </section>

    <!-- pengumuman -->
    <section 
        class="py-16 px-5 md:px-10 lg:px-20 flex flex-col justify-start items-center">
        <h1 class="mt-2 text-3xl mb-8 font-bold title">Pengumuman.</h1>
        <div class="flex flex-col justify-start items-center gap-y-2 w-full px-10 sm:px-18 md:px-32">
            <!-- foreach here -->
            <div class="dropdown w-full shadow-md rounded-[20px] border border-emerald-400">
                <div class="dropdown-title font-medium p-3 px-7 text-xl flex justify-between items-center">
                    <p class="tracking-wide">Judul Pengumuman</p>
                </div>
                <div class="dropdown-content pb-5 px-7 tracking-wide hidden">
                    dilakukan pada tanggal 5 - 12 juli
                </div>
            </div>
            <!-- endforeach here -->
        </div>

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
    </section>

    <!-- list article -->
    <section class="w-full pt-10 pb-16 px:10 md:px-20 flex flex-col justify-start items-center">
        <h1 class="text-3xl font-bold title">Artikel Terbaru.</h1>
        <p class="mt-2 mb-14 text-sm text-gray-700 tracking-wide">
            Baca beragam artikel terkait Sekolah Ar-Romusha dibawah ini.
        </p>
        <div class="flex justify-start items-start flex-wrap w-full gap-4 relative pb-10">
            <!-- if -->
            <button class="absolute bottom-2 left-1/2 -translate-x-1/2 bg-sekunder ring-2 ring-sekunder ring-offset-2 hover:ring-offset-4 py-2 px-4 text-sm duration-200 text-dasar font-semibold tracking-wide">Lebih Banyak</button>
            <!-- endif -->
            <!-- foreach here -->
            <a href="../detail_article.html" class="group w-[19rem] ring-1 ring-sekunder flex flex-col items-center justify-start hover:rounded-2xl transition-all duration-200 hover:ring-offset-4">
                <img src="../images/bg-hero.jpg" alt="" class="group-hover:rounded-2xl transition-all duration-200">
                <div class="py-5 px-3 w-full">
                    <div class="flex justify-between items-center mb-3 gap-2">
                        <h1 class="text-lg font-semibold tracking-normal truncate group-hover:text-sky-800 transition-all duration-200">Judul Artikel</h1>
                        <span class="ring-1 ring-sekunder py-0.5 px-2 italic rounded-full text-sekunder bg-dasar text-xs group-hover:bg-emerald-400 group-hover:text-dasar transition-all duration-200 hover:ring-offset-2">Kategori</span>
                    </div>
                    <p class="line-clamp-4 tracking-tight text-sm">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, veritatis commodi, voluptate dolor cupiditate velit voluptates aliquid alias, eius distinctio ullam unde perferendis vitae corrupti quos consequatur quibusdam nisi asperiores.
                    </p>
                </div>
            </a>
            <!-- endforeach here -->
        </div>
    </section>

    <!-- footer -->
    <footer
        class="py-1 px-3 text-end text-xs bg-transparent fixed bottom-0 w-full text-primer">
        © 2023 - 
        <a class="tracking-wide" href="https://tailwind-elements.com/"
            >Sekolah Ar-Romusha</a
        >
    </footer>
</main>
@endsection