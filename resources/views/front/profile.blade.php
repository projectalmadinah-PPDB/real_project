@extends('front.layouts.parent')

@section('title','Profile')

@section('content')
<div class="pt-36 py-36 flex items-center justify-center">
    <div class="flex items-center justify-center">
    <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 w-max">
        <div class="p-6">
            <div class="w-full max-w-xs">
                <form class="">
                    <div class="flex">
                      <div class="">
                          <div class="mb-2">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                  Nama Lengkap
                              </label>
                              <input disabled class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="{{Auth::user()->name}}">
                          </div>
                      </div>
                      <div class="ms-2">
                          <div class="mb-2">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                  Jenis Kelamin
                              </label>
                              <input disabled class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="{{Auth::user()->jenis_kelamin}}">
                          </div>
                      </div>
                    </div>
                      <div class="flex">
                        <div class="">
                          <div class="mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                              Tanggal Lahir
                            </label>
                            <input disabled class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="{{Auth::user()->tanggal_lahir}}">
                          </div>
                        </div>
                        <div class="ms-2">
                          <div class="mb-2">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                  Nik
                              </label>
                              <input disabled class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="231241421412">
                          </div>
                        </div>
                      </div>
                      <div class="flex">
                        <div class="">
                          <div class="mb-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                              Alamat
                            </label>
                            <textarea rows="5" cols="18" disabled class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="date" placeholder="18-12-06"></textarea>      
                          </div>
                        </div>
                        <div class="ms-2">
                            <div class="mb-2">
                              <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Tanggal Lahir
                              </label>
                              <input disabled class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="date" placeholder="18-12-06">
                            </div>
                          </div>
                          
                      </div>
                  </div>
                </form>
        </div>
        </div>
    </div>
</div>
@endsection