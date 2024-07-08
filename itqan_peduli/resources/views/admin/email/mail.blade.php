@extends('admin.utama.index')
@section('content')
    <div class="p-4 sm:ml-80">
        <div class="header flex justify-between mt-3">
            <div class="kiri">
                <p class="text-2xl font-semibold">Mail Setting</p>
            </div>
            <div class="kanan">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    <div class="relative me-4 my-auto">
                        <img class="w-10 h-10 rounded-full" src="/images/dts.jpg" alt="profile image">
                        <span class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
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
                <p class="text-2xl font-semibold">Mail Setting</p>
                <p class="text-sm text-gray-300 mt-2 font-medium">atur mail server anda</p>
            </div>
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Mailer</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Host</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Port</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Username</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Password</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Encryption</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail From Address</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail From Name</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="ms-auto flex flex-row-reverse">
            <a type="button" href="#" class="text-green-500 bg-white p-10 border border-green-500 focus:outline-none hover:bg-green-700 hover:text-white focus:ring-4 focus:ring-gray-100 font-normal rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Simpan
            </a>
        </div>
    </div>
@endsection
