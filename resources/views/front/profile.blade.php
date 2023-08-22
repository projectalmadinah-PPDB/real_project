@extends('front.layouts.parent')

@section('title','Profile')

@section('content')
<main class="px-5 md:px-32 py-5 pt-20 md:py-20 flex flex-col gap-y-8">
  <!-- alert -->
  @if(session('success'))
  <div role="alert"
  id="alertMessage" class="section shadow-inner mb-0 py-3 px-10 flex justify-between items-center bg-emerald-500">
  <p class="text-md font-light tracking-[.5px] text-white leading-5">
      {{session('success')}}
  </p>
  <button id="btnAlert">
      <i class="bi bi-x-circle-fill text-2xl text-white hover:text-slate-200 duration-200"></i>
  </button>

  <script type="text/javascript">
      const btnAlert = document.getElementById("btnAlert");
      var alertMessage = document.getElementById("alertMessage");
       btnAlert.addEventListener("click", function(e) {
          alertMessage.classList.add('hidden');
       });
  </script>
</div>
  @endif
  <!-- profil peserta -->
  @if(Auth::user()->pendaftaran == NULL)
  <div class="block">
    <div role="alert"
    id="alertMessage" class="section shadow-inner mb-0 py-3 px-10 flex justify-between items-center bg-emerald-500">
    <a id="" class="text-md font-light tracking-[.5px] text-white leading-5">
        Lengkapi Data Anda
    </a>
    <button id="btnAlert">
        <i class="bi bi-x-circle-fill text-2xl text-white hover:text-slate-200 duration-200"></i>
    </button>

    <script type="text/javascript">
        const btnAlert = document.getElementById("btnAlert");
        var alertMessage = document.getElementById("alertMessage");
        btnAlert.addEventListener("click", function(e) {
            alertMessage.classList.add('hidden');
        });
    </script>
  </div>
  </div>
  @else

  @endif
  <section 
      class="section shadow-lg bg-emerald-50/20 dark:bg-slate-800 border border-emerald-400 py-16 px-10 flex flex-col justify-start items-center">
      
      <div class="flex justify-between items-center w-full mb-10">
          <h1 class="font-bold text-3xl md:text-4xl dark:text-slate-100">Profil Peserta</h1>
          <div class="flex justify-center gap-x-2">
              <a href="{{route('user.setting.index')}}" class="py-1 px-3 text-sm rounded-[2rem] bg-emerald-600 dark:bg-slate-900 text-slate-100 border border-emerald-400 hover:bg-slate-950 hover:text-slate-300 duration-300">Edit</a>
              <a href="{{route('user.setting.change.password')}}" class="py-1 px-3 text-sm rounded-[2rem] bg-emerald-600 dark:bg-slate-900 text-slate-100 border border-emerald-400 hover:bg-slate-950 hover:text-slate-300 duration-300">Ganti Password</a>
          </div>
      </div>
      <div class="flex flex-col md:flex-row justify-between w-full px-5 md:px-10 relative">
          <div class="md:w-[50%]">
              <h1 class="text-lg font-semibold mb-3 dark:text-slate-200">Data Peserta</h1>
              <div class="mb-3">
                  <label class="text-sm mb-2 dark:text-slate-300">Nama Lengkap</label>
                  <input value="{{Auth::user()->name}}" type="text" class="border-2 border-dark rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
              </div>
              <div class="mb-3">
                  <label class="text-sm mb-2 dark:text-slate-300">Nomor Telepon</label>
                  <input value="{{Auth::user()->nomor}}" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
              </div>
              <div class="mb-3">
                  <label class="text-sm mb-2 dark:text-slate-300">NIK</label>
                  <input value="NIK kamu" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
              </div>
              <div class="mb-3">
                  <label class="text-sm mb-2 dark:text-slate-300">Tanggal Lahir</label>
                  <input value="{{Auth::user()->tanggal_lahir}}" type="text" class="border-2 rounded-full shadow-inner w-full py-2 px-3" disabled>
              </div>
          </div>
          <div class="divider bg-black/30 divider-horizontal"></div>
          <div class="md:w-[50%]">
            
              <h1 class="text-lg font-semibold mb-3 dark:text-slate-200">Data Orang Tua / Wali</h1>
            @if (Auth::user()->pendaftaran)
            <div class="mb-3">
                <label class="text-sm mb-2 dark:text-slate-300">Nama Ayah Kandung</label>
                <input value="{{Auth::user()->pendaftaran->nama_ayah}}" type="text" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
            </div>
            <div class="mb-3">
                <label class="text-sm mb-2 dark:text-slate-300">Nomor HP Ayah Kandung</label>
                <input value="{{Auth::user()->pendaftaran->no_ayah}}" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
            </div>
            <div class="mb-3">
                <label class="text-sm mb-2 dark:text-slate-300">Nama Ibu Kandung</label>
                <input value="{{Auth::user()->pendaftaran->nama_ibu}}" type="text" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
            </div>
            <div class="mb-3">
                <label class="text-sm mb-2 dark:text-slate-300">Nomor HP Ibu Kandung</label>
                <input value="{{Auth::user()->pendaftaran->no_ibu}}" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
            </div>
            <details class="mx-auto w-full px-10 mb-7 mt-2 dark:text-slate-100">
              <summary>Alamat</summary>
                <textarea name="" id="" cols="10" rows="5" class="w-full border-2 rounded-lg px-2" disabled>{{Auth::user()->pendaftaran->alamat}}</textarea>
            </details>
        </div>
        </div>
        @else
        <div class="mb-3">
            <label class="text-sm mb-2 dark:text-slate-300">Nama Ayah Kandung</label>
            <input value="Nama Ayah Kamu" type="text" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
        </div>
        <div class="mb-3">
            <label class="text-sm mb-2 dark:text-slate-300">Nomor HP Ayah Kandung</label>
            <input value="Nomor Ayah Kamu" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
        </div>
        <div class="mb-3">
            <label class="text-sm mb-2 dark:text-slate-300">Nama Ibu Kandung</label>
            <input value="Nama Ibu Kamu" type="text" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
        </div>
        <div class="mb-3">
            <label class="text-sm mb-2 dark:text-slate-300">Nomor HP Ibu Kandung</label>
            <input value="Nomor Ibu Kamu" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
        </div>
        <details class="mx-auto w-full px-10 mb-7 mt-2 dark:text-slate-100">
            <summary>Alamat</summary>
              <textarea name="" id="" cols="10" rows="5" class="w-full border-2 rounded-lg px-2" disabled>Alamat Kamu</textarea>
          </details>
        </div>
    
    </div>
    @endif
              
  </section>

  <!-- link buat upload dokumen -->
  <div 
      id="alertMessage" class="section shadow-inner py-3 px-10 bg-emerald-500">
      <div class="text-md font-light tracking-[.5px] text-white leading-5 mx-auto text-center w-1/2">
          <h1 class="text-3xl font-bold uppercase">Lanjut Pendaftaran?</h1>
          <p>
              Klik 
              <a href="{{route('user.document.index')}}">
                  <kbd class="py-0 px-1 rounded-lg bg-emerald-100 border border-emerald-600 text-emerald-900 shadow-inner">disini</kbd>
              </a>
               untuk melanjutkan proses pendaftaran berupa upload dokumen.
          </p>
      </div>
  </div>
  
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
                  <p class="leading-none">
                      <strong class="block font-medium"> Tunggu </strong>
                      <small class="mt-1"> pengumuman dan konfirmasi </small>
                  </p>
              </li>
          </ol>
      </div>
  </section>
  <!-- formulir pendaftaran -->
  @if(Auth::user()->pendaftaran == NULL)
  <section class="relative section flex-col shadow-lg bg-[#23AA8A]/70 mx-20 md:mx-32 mt-10 overflow-hidden py-8">
    <div 
        class="bg-image-logo absolute top-0 left-0 w-full h-full opacity-10" 
        style="background-image: url('images/logo_only_white.svg');
        background-position: -70px -70px;
        background-size: 80%;
        background-repeat: no-repeat;">
    </div>
    <div class="mx-auto text-center my-10 relative">
        <h2 class="text-3xl font-bold text-gray-900 md:text-4xl">Formulir Kelengkapan</h2>
        <p class="mt-2 text-lg leading-3 text-white">Isi formulir dibawah ini untuk melengkapi data peserta.</p>
    </div>
    <form action="{{route('user.kelengkapan.process')}}" method="post" class="flex flex-col md:flex-row justify-between w-full px-5 pb-7 md:px-10 relative w-full">
      @csrf
      @method('post')
        <div class="md:w-[50%]">
            <h1 class="text-lg font-semibold mb-3">Data Peserta</h1>
            <div class="mb-2">
                <label for="nik" class="text-sm mb-2">NIK</label>
                <input placeholder="NIK kamu" type="tel" id="nik" name="nik" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" autocomplete="off">
            </div>
            <div class="mb-2">
                <label for="name" class="text-sm mb-2">Nama Lengkap</label>
                <input value="{{Auth::user()->name}}" type="text" id="name" class="border-0 rounded-full py-2 px-3 bg-emerald-100 shadow-inner w-full placeholder:text-sm" autocomplete="off" disabled>
            </div>
            <div class="mb-2">
                <label for="phone" class="text-sm mb-2">Nomor Telepon</label>
                <input value="{{Auth::user()->nomor}}" type="tel" id="phone" class="border-0 rounded-full py-2 px-3 bg-emerald-100 shadow-inner w-full placeholder:text-sm" autocomplete="off" disabled>
            </div>
            <div class="mb-2">
                <label for="birth" class="text-sm mb-2">Tanggal Lahir</label>
                <input value="{{Auth::user()->tanggal_lahir}}" type="date" id="birth" class="border-0 rounded-full py-2 px-3 bg-emerald-100 shadow-inner w-full">
            </div>
            <div class="mb-2">
                <label for="gender" class="text-sm mb-2">Jenis Kelamin</label>
                <select id="gender" class="border-0 rounded-full py-2 px-3 bg-emerald-100 shadow-inner w-full">
                    <option class="text-sm " disabled selected>Pilih Jenis Kelamin mu</option>
                    <option class="text-sm " value="{{Auth::user()->jenis_kelamin = 'Laki-Laki' ? 'selected' : ''}}" >Laki-Laki</option>
                    <option class="text-sm " value="{{Auth::user()->jenis_kelamin = 'Perempuan' ? 'selected' : ''}}">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="divider bg-black/30 divider-horizontal"></div>
        <div class="md:w-[50%]">
            <h1 class="text-lg font-semibold mb-3">Data Orang Tua / Wali</h1>
            <div class="mb-2">
                <label for="father_name" class="text-sm mb-2">Nama Ayah Kandung</label>
                <input placeholder="nama ayah kamu" type="text" name="nama_ayah" id="father_name" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" autocomplete="off">
            </div>
            <div class="mb-2">
                <label for="father_phone" class="text-sm mb-2">Nomor HP Ayah Kandung</label>
                <input placeholder="nomor ayah kamu" type="tel" name="no_ayah" id="father_phone" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" autocomplete="off">
            </div>
            <div class="mb-2">
                <label for="mother_name" class="text-sm mb-2">Nama Ibu Kandung</label>
                <input placeholder="nama ibu kamu" type="text" name="nama_ibu" id="mother_name" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" autocomplete="off">
            </div>
            <div class="mb-2">
                <label for="mother_phone" class="text-sm mb-2">Nomor HP Ibu Kandung</label>
                <input placeholder="nomor ibu kamu" type="tel" name="no_ibu" id="mother_phone" class="border-0 rounded-full py-2 px-3 shadow-inner w-full placeholder:text-sm" autocomplete="off">
            </div>
            <div class="mb-2">
                <label for="address" class="text-sm mb-2">Alamat</label>
                <textarea placeholder="alamat rumah kamu" name="alamat" id="address" rows="4" style="min-height: 40px!important; max-height: 150px!important;" class="py-2 px-3 border-0 rounded-[30px] shadow-inner w-full placeholder:text-sm"></textarea>
            </div>
        </div>
        <button type="submit" class="absolute right-10 -bottom-3 p-2 bg-[#0A4A3B] hover:bg-emerald-300 border-0 px-9 text-white hover:text-emerald-950 font-medium tracking-wide rounded-[30px] duration-200 uppercase">
            Daftar
        </button>
    </form>
  </section>
  @else

  @endif
</main>
@endsection