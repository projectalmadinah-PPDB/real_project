<!-- Header Start -->
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
                        <li class="group">
                            <a href="{{route('user.profile')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Profile</a>
                        </li>
                        <li class="group">
                            <a href="{{route('user.logout')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Logout</a>
                        </li>
                        @if (Auth::user()->role == 'admin')
                            <li class="group">
                                <a href="{{route('admin.admin.dashboard')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Dashboard</a>
                            </li>
                            <li class="group">
                                <a href="{{route('admin.logout')}}" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Logout</a>
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
<!-- Header End -->