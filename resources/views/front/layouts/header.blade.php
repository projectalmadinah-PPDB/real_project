        <!-- navbar -->
        @if (!Route::is('user.index') && !Route::is('user.activication'))
        <nav 
        class="z-[1000] w-full bg-white backdrop-blur-md px-5 sm:px-7 md:px-10 border-b border-sekunder/20 fixed flex justify-between items-center">
        <!-- logo -->
        <a href="{{ route('front') }}"
            class="p-2 flex gap-2 items-center">
            <img id="logo" class="h-8 md:h-9" src="{{ asset('storage/' . App\Models\General::first()->school_logo) }}">
            <span class="font-extrabold text-xl hidden sm:block text-primer">{{ App\Models\General::first()->school_name }}</span>
        </a>

        <!-- pc menu -->
        <div 
            class="hidden md:block">
            <a href="{{route('front')}}" 
                class="text-sm p-2 {{Route::is('front') ? 'nav-active' : '' }}"
            >Home</a>
            @guest
                <a href="{{route('user.show')}}" 
                    class="text-sm p-2 {{Route::is('user.show') ? 'nav-active' : '' }}"
                >Daftar</a>
            @endguest
            <a href="{{route('user.informasi')}}" 
                class="text-sm p-2 {{Route::is('user.informasi.*') ? 'nav-active' : '' }}"
            >Informasi</a>
            <a href="{{route('user.about')}}" 
                class="text-sm p-2 {{Route::is('user.about') ? 'nav-active' : '' }}"
            >About</a>
            <a href="" 
                class="text-sm p-2"
            >Q&A</a>
            @auth
                @if (Auth::user()->role == 'admin')
                <a href="{{route('admin.admin.dashboard')}}" 
                    class="text-sm p-2 border-[1.5px] border-sekunder text-sekunder font-semibold ms-3 hover:bg-sekunder hover:text-white duration-200 {{Route::is('admin.admin.dashboard') ? 'nav-active' : '' }}"
                >Dashboard</a>
                @elseif (Auth::user()->role == 'user')
                <a href="{{route('user.dashboard')}}" 
                    class="text-sm p-2 border-[1.5px] border-sekunder text-sekunder font-semibold ms-3 hover:bg-sekunder hover:text-white duration-200 {{Route::is('user.dashboard') ? 'nav-active' : '' }}"
                >Dashboard</a>
                @endif
            @else
                <a href="{{route('user.index')}}" 
                    class="text-sm p-2 border-[1.5px] border-sekunder text-sekunder font-semibold ms-3 hover:bg-sekunder hover:text-white duration-200 {{Route::is('user.index') ? 'nav-active' : '' }}"
                >Login</a>
            @endauth
        </div>
        <!-- mobile menu button -->
        <label class="md:hidden pointer-events-auto" for="swapHamburger">
            <input type="checkbox" id="swapHamburger" class="hidden">
            <!-- hamburger -->
            <div id="openMenu" class=" 
            flex flex-col justify-center items-center gap-y-1 p-[.5rem] py-[.8rem] bg-emerald-300 hover:bg-emerald-500 duration-200 rounded-full">
                <div class="w-6 h-[2px] bg-white rounded-full"></div>
                <div class="w-6 h-[2px] bg-white rounded-full"></div>
                <div class="w-6 h-[2px] bg-white rounded-full"></div>
            </div>
            
            <!-- x-hamburger -->
            <!-- <div id="closeMenu" class="hidden 
            flex flex-col justify-center items-center gap-y-1 p-[.5rem] py-[1rem] bg-emerald-300 hover:bg-emerald-500 duration-200 rounded-full">
                <div class="w-6 h-[2px] bg-white rounded-full rotate-45 translate-y-[.25rem]"></div>
                <div class="w-6 h-[2px] bg-white rounded-full -rotate-45 -translate-y-[.125rem]"></div>
                <div class="w-6 h-[2px] bg-white rounded-full hidden"></div>
            </div> -->

            <!-- hamburger toggle -->
            <script type="text/javascript">
                var btnMenu = document.getElementById("swapHamburger");
                var mobileMenu = document.getElementById("mobileMenu");
                var openMenu = document.getElementById("openMenu");
                var closeMenu = document.getElementById("closeMenu");

                btnMenu.addEventListener("click", function() {
                    mobileMenu.classList.toggle('hidden');
                    openMenu.classList.toggle('hidden');
                    closeMenu.classList.toggle('hidden');
                });

            </script>
        </label>
    </nav>
        @endif