@extends('admin.utama.index')
@section('content')
    <div class="p-4 sm:ml-80">
        <div class="header flex justify-between mt-3">
            <div class="kiri">
                <p class="text-2xl font-semibold">Dana Terkumpul</p>
            </div>
            <div class="kanan">
                    
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    <div class="teks text-left">
                        <p class="text-xl text-gray-600 font-semibold">Admin</p> 
                        <p class="text-gray-400 text-xs font-normal">Admin@gmail.com</p> 
                    </div>
                    <svg class="w-2.5 h-2.5 ms-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown" class="border border-gray-400 border-1 z-10 hidden bg-white p-10 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>
                    <hr>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LogOut</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 me-30 w-full p-5 rounded-lg">
                <p class="text-2xl font-semibold">Dana Terkumpul</p>
                <p class="text-sm text-gray-300 mt-2 font-medium">Pantau progress donasi campaign aktif</p>
            </div>
        </div>
        <div class="program">
            <p class="text-2xl font-semibold">Program Instan</p>
            <div class="sedekah bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-20 h-20 my-auto" >
                <div class="teks w-full">
                    <p class="text-2xl font-semibold ms-3 text-gray-800">Sedekah</p>
                    <p class="text-sm font-normal ms-3 text-green-600">Tidak Terikat</p>
                    <div class="duit flex justify-between mt-3">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
