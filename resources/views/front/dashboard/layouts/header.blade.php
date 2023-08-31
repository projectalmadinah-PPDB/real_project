<nav 
    class="z-[1000] w-full bg-primer backdrop-blur-md px-5 sm:px-7 md:px-10 md:border-b md:border-sekunder/20 fixed flex justify-between items-center">
    <!-- logo -->
    <a href="index.html"
        class="p-2 flex gap-2 items-center">
        <img id="logo" class="h-8 md:h-9" src="/dists/images/logo_only_white.svg">
        <span class="font-extrabold text-xl hidden sm:block text-primer">AR-ROMUSHA</span>
    </a>
    <div class="flex justify-center items-center">
        <a href="{{ route('user.dashboard') }}" class="py-2 px-10 text-white hover:text-primer duration-200 hover:bg-white">Dashboard</a>
        <a href="{{ route('user.profile') }}" class="py-2 px-10 text-white hover:text-primer duration-200 hover:bg-white">Profile</a>
        <a href="{{ route('user.informasi') }}" class="py-2 px-10 text-white hover:text-primer duration-200 hover:bg-white">Informasi</a>
        <a href="" class="py-2 px-10 text-white hover:text-primer duration-200 hover:bg-white">QnA</a>
    </div>
    <div class="flex justify-end items-center gap-x-2">
        <a href="{{route('user.logout')}}" 
            class="text-sm p-2 tracking-wide border-[1.5px] border-larangan text-larangan font-semibold ms-3 hover:bg-larangan hover:text-white duration-200"
        >Logout</a>
        <div role="button" class="group md:hidden flex flex-col justify-center items-center gap-y-1 cursor-pointer py-2 px-4 border border-dasar duration-200 hover:bg-dasar rounded-full hover:-rotate-90" id="barMobile">
            <div class="w-1 h-1 rounded-full bg-dasar group-hover:bg-primer"></div>
            <div class="w-1 h-1 rounded-full bg-dasar group-hover:bg-primer"></div>
            <div class="w-1 h-1 rounded-full bg-dasar group-hover:bg-primer"></div>
        </div>
    </div>
</nav>