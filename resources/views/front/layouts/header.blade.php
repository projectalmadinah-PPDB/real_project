{{-- <!-- Header Start -->
<header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex item-center justify-between relative">
            <div class="px-4">
                <img src="{{asset('dist/img/Vector.svg')}}" class="py-3" alt="">
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-slate-500 lg:dark:bg-transparent">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="#beranda" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="#panduan" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Informasi</a>
                        </li>
                        <li class="group">
                            <a href="#skill" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Qna/Faq</a>
                        </li>
                        <li class="group">
                            <a href="#hobby" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Contact us</a>
                        </li>
                        @if (Auth::check())
                        @if (Auth::user()->role == 'admin')
                            <li class="group">
                                <a href="{{route('admin.admin.dashboard')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Dashboard</a>
                            </li>
                            <li class="group">
                                <a href="{{route('admin.logout')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Logout</a>
                            </li>
                        @else
                        <li class="group">
                            <a href="{{route('user.profile')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Profile</a>
                        </li>
                        <li class="group">
                            <a href="{{route('user.logout')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Logout</a>
                        </li>
                        @endif
                        @else
                        <li class="group">
                            <a href="{{route('user.show')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Daftar</a>
                        </li>
                        <li class="group">
                            <a href="{{route('user.index')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Login</a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End --> --}}

<nav 
            class="bg-white/20 dark:bg-slate-900/30 backdrop-blur-md px-5 sm:px-10 py-2 shadow-md z-[1000] flex justify-between items-center fixed w-full">
            
            <!-- logo -->
            <div class="flex text-slate-900">
                <a href="index.html" 
                    class="p-1 flex gap-2 items-center dark:text-white">
                    <img id="logo" class="h-8 md:h-10">
                    <span class="font-extrabold text-2xl hidden sm:block">AR-ROMUSHA</span>
                </a>
            </div>

            <!-- pc menu -->
            <div 
                class="flex justify-center items-center gap-x-2 hidden md:block">
                <a href="#top" 
                    class="text-[15px] font-poppins dark:text-slate-300 text-slate-900 hover:text-white hover:bg-emerald-400 py-0 px-2 duration-100 rounded-[15px]"
                >home</a>
                <a href="#announcement" 
                    class="text-[15px] font-poppins dark:text-slate-300 text-slate-900 hover:text-white hover:bg-emerald-400 py-0 px-2 duration-100 rounded-[15px]"
                >pengumuman</a>
                <a href="#information" 
                    class="text-[15px] font-poppins dark:text-slate-300 text-slate-900 hover:text-white hover:bg-emerald-400 py-0 px-2 duration-100 rounded-[15px]"
                >informasi</a>
                <a href="#contact" 
                    class="text-[15px] font-poppins dark:text-slate-300 text-slate-900 hover:text-white hover:bg-emerald-400 py-0 px-2 duration-100 rounded-[15px]"
                >kontak</a>
                <a href="#questionAndAnswer" 
                    class="text-[15px] font-poppins dark:text-slate-300 text-slate-900 hover:text-white hover:bg-emerald-400 py-0 px-2 duration-100 rounded-[15px]"
                >Q&A</a>
                @if(Auth::check())
                <a href="{{route('user.profile')}}" 
                    class="text-[15px] font-poppins text-slate-900 hover:text-white bg-emerald-300 hover:bg-emerald-400 py-1 px-3 duration-100 rounded-[15px] shadow-inner">
                    profil
                </a>
                <a href="{{route('user.logout')}}" 
                    class="text-[15px] font-poppins text-slate-900 hover:text-white bg-emerald-300 hover:bg-emerald-400 py-1 px-3 duration-100 rounded-[15px] shadow-inner">
                    Logout
                </a>
                @else
                <a href="{{route('user.show')}}" 
                    class="text-[15px] font-poppins dark:text-slate-300 text-slate-900 hover:text-white hover:bg-emerald-400 py-0 px-2 duration-100 rounded-[15px]"
                >daftar</a>
                <a href="{{route('user.index')}}" 
                    class="text-[15px] font-poppins dark:text-slate-300 text-slate-900 hover:text-white hover:bg-emerald-400 py-0 px-2 duration-100 rounded-[15px]"
                >login</a>
                @endif
            </div>

            <!-- mobile menu -->
            <div id="mobileMenu" class="hidden 
                 absolute top-[3.5rem] right-5 sm:right-10 rounded-[10px] border border-emerald-400 bg-white/20 dark:bg-slate-900/80 p-2 flex justify-start items-end gap-y-2 flex-col shadow-md min-w-[10rem] z-[10000]">
                <a href="#top" 
                    class="text-sm ps-2 font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                    home
                </a>
                <a href="#announcement" 
                    class="text-sm ps-2 font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                    pengumuman
                </a>
                <a href="#information" 
                    class="text-sm ps-2 font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                    informasi
                </a>
                <a href="#contact" 
                    class="text-sm ps-2 font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                    kontak
                </a>
                <a href="#questionAndAnswer" 
                    class="text-sm ps-2 font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                    Q&A
                </a>
                @if(Auth::check())
                <a href="profile.html" 
                    class="text-sm ps-2 font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                    profil
                </a>
                @else
                <div class="border-y py-2 border-emerald-400 flex justify-between w-full gap-x-1">
                    <a href="#registration" 
                        class="text-sm text-center font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                        daftar
                    </a>
                    <a href="" 
                        class="text-sm text-center font-poppins dark:text-slate-200 font-light text-slate-900 hover:text-white hover:bg-emerald-400 py-1 w-full duration-100 rounded-15px">
                        login
                    </a>
                </div>
                @endif
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
                <div id="closeMenu" class="hidden 
                flex flex-col justify-center items-center gap-y-1 p-[.5rem] py-[1rem] bg-emerald-300 hover:bg-emerald-500 duration-200 rounded-full">
                    <div class="w-6 h-[2px] bg-white rounded-full rotate-45 translate-y-[.25rem]"></div>
                    <div class="w-6 h-[2px] bg-white rounded-full -rotate-45 -translate-y-[.125rem]"></div>
                    <div class="w-6 h-[2px] bg-white rounded-full hidden"></div>
                </div>

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