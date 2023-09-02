@extends('front.layouts.parent')

@section('title','Edit Profile')

@section('content')
<main class="px-5 md:px-32 py-5 pt-20 md:py-20 flex flex-col gap-y-8">
<section class="section shadow-lg bg-emerald-50/20 dark:bg-slate-800 border border-emerald-400 py-16 px-10 flex flex-col justify-start items-center">
    <div class="flex justify-between items-center w-full mb-10">
        <h1 class="font-bold text-3xl md:text-4xl dark:text-slate-100">Profil Peserta</h1>
        <div class="flex justify-center gap-x-2">
            <a href="{{route('user.profile')}}" class="py-1 px-3 text-sm rounded-[2rem] bg-emerald-600 dark:bg-slate-900 text-slate-100 border border-emerald-400 hover:bg-slate-950 hover:text-slate-300 duration-300">Back</a>
        </div>
    </div>
    <form action="{{route('user.setting.update')}}" class="w-full" method="POST">
        @csrf
        @method('POST')
        <div class="flex flex-col md:flex-row justify-between w-full px-5 md:px-10 relative">
            <div class="@if(!$user->pendaftaran) md:w-[100%] @else md:w-[50%]  @endif">
                <h1 class="text-lg font-semibold mb-3 dark:text-slate-200">Data Peserta</h1>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Nama Lengkap</label>
                    <input value="{{$user->name}}" type="text" name="name" class="border-2 border-dark rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Email</label>
                    <input value="{{$user->email}}" type="email" name="email" class="border-2 rounded-full shadow-inner w-full py-2 px-3">
                </div>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Nomor Telepon</label>
                    <input value="{{$user->nomor}}" type="number" name="nomor" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Jenis Kelamin</label>
                    <select value="{{$user->jenis_kelamin}}" name="jenis_kelamin" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Tanggal Lahir</label>
                    <input value="{{$user->tanggal_lahir}}" type="date" name="tanggal_lahir" class="border-2 rounded-full shadow-inner w-full py-2 px-3">
                </div>
            </div>
            @if(!$user->pendaftaran)
            @else
            <div class="divider bg-black/30 divider-horizontal"></div>
            <div class="md:w-[50%]">
                <h1 class="text-lg font-semibold mb-3 dark:text-slate-200">Data Orang Tua / Wali</h1>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Nama Ayah Kandung</label>
                    <input value="{{$user->pendaftaran->nama_ayah}}" type="text" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
                </div>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Nomor HP Ayah Kandung</label>
                    <input value="{{$user->pendaftaran->no_ayah}}" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
                </div>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Nama Ibu Kandung</label>
                    <input value="{{$user->pendaftaran->nama_ibu}}" type="text" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
                </div>
                <div class="mb-3">
                    <label class="text-sm mb-2 dark:text-slate-300">Nomor HP Ibu Kandung</label>
                    <input value="{{$user->pendaftaran->no_ibu}}" type="tel" class="border-2 rounded-full shadow-inner w-full placeholder:text-sm py-2 px-3" autocomplete="off" disabled>
                </div>
            </div>
            <details class="mx-auto w-full px-10 mb-7 mt-2 dark:text-slate-100">
                <textarea class="border-2 shadow-inner w-full placeholder:text-sm py-2 px-3" disabled>{{$user->pendaftaran->alamat}}</textarea>
            </details>
            @endif
        </div>
        <button type="submit" class="py-2 px-20 bg-emerald-300 rounded-full ms-10 font-bold text-white">Edit</button>
    </form>
    </section>
</main>
@endsection