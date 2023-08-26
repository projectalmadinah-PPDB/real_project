@extends('front.layouts.parent')

@section('title','User | Login')

@section('content')
<!-- component -->
{{-- <div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="w-full sm:max-w-md p-5 mx-auto shadow-lg">
      <div class="flex items-center justify-center">
        <img src="../dist/img/Vector.svg" class="items-center justify-center mb-12" >
      </div>
      <form action="{{route('user.login')}}" method="POST">
        @csrf
        <div class="mb-4">
          <label class="block mb-1" for="number">Email Anda</label>
          <input id="number" type="email" name="email" class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
          @error('email')
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
        <div class="mb-4">
          <label class="block mb-1" for="password">Password</label>
          <input id="password" type="password" name="password" class="py-2 px-3 border border-gray-300 focus:border-red-300 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" />
          @error('password')
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
        <div class="mt-6 flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="border border-gray-300 text-red-600 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50" />
            <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900"> Remember me </label>
          </div>
          <a href="#" class="text-sm"> Forgot your password? </a>
        </div>
        <div class="mt-6">
          <button class="w-full inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold capitalize text-white hover:bg-red-700 active:bg-red-700 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 disabled:opacity-25 transition" type="submit">Sign In</button>
        </div>
        <div class="mt-6 text-center">
          <a href="#" class="underline">Sign up for an account</a>
        </div>
      </form>
    </div>
  </div>
  </section> --}}
  <div class="bg-gradient-to-br from-dasar via-sky-50 to-sky-200 w-full h-auto font-poppins caret-sekunder accent-primer">
    <img src="/dists/images/logo_only_currentColor.svg" draggable="false" class="fixed w-[70rem] opacity-20 -bottom-52">
    <main class="w-full h-screen flex justify-center items-center">
        <!-- formulir pendaftaran -->
        <section 
            class="relative w-full flex justify-center items-center py-7">
            <div class="bg-gradient-to-t from-primer to-sky-900 flex flex-col justify-center items-center gap-y-3 px-10 md:px-16 py-16 rounded-3xl text-dasar">
                <a href="{{ route('front') }}" title="Back to Home" class="py-[16px] px-[14px] rounded-full absolute z-999 top-0 bg-dasar shadow-2xl">
                    <img src="/dists/images/logo_only.svg" alt="" class="w-10">
                </a>
                <h1 class="text-4xl font-bold text-center leading-none">Login.</h1>
                <p class="text-sm tracking-wide font-light text-gray-400">
                    Selamat datang peserta.
                </p>
                <form class="mt-4 w-full" action="{{route('user.login')}}" method="post">
                  @csrf
                  @method('post')
                    <div class="mb-3">
                        <label for="" class="text-sm">Nomor Handphone</label>
                        <input 
                            type="tel" name="nomor"
                            placeholder="62896XXXXXXXX"
                            class="shadow-inner rounded-full w-full py-2 px-4 outline-none placeholder:opacity-100 focus:placeholder:opacity-0 placeholder:transition-all placeholder:duration-200 placeholder:italic text-sm placeholder:text-gray-500 bg-white/10"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-sm">Password</label>
                        <input 
                            type="password" name="password"
                            placeholder="••••••••"
                            class="shadow-inner rounded-full w-full py-2 px-4 outline-none placeholder:opacity-100 focus:placeholder:opacity-0 placeholder:transition-all placeholder:duration-200 placeholder:italic text-sm placeholder:text-gray-500 bg-white/10"
                        >
                    </div>
                    <div class="mb-6 flex justify-between items-center">
                        <a href="{{route('user.show')}}" class="text-sm text-slate-400 hover:text-sky-300 duration-150">Belum daftar?</a>
                        <a href="" class="text-sm text-slate-400 hover:text-sky-300 duration-150">Lupa Password?</a>
                    </div>
                    <button type="submit" 
                        class="w-full py-2 px-4 border-2 rounded-full font-semibold tracking-wider border-sekunder bg-sekunder hover:bg-sekunder/50 duration-200 ease-in-out">
                        Masuk
                    </button>
                </form>
            </div>
        </section>

        <footer
            class="py-4 text-center text-xs bg-slate-900 fixed bottom-0 w-full text-dasar">
            © 2023 - 
            <a class="tracking-wide" href="https://tailwind-elements.com/"
                >Sekolah Ar-Romusha</a
            >
        </footer>
    </main>
</div>
@endsection