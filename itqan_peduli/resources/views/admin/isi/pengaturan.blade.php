@extends('admin.utama.index')
@section('content')
    <div class="p-4 sm:ml-80">
        <div class="header flex justify-between mt-3">
            <div class="kiri">
                <p class="text-2xl font-semibold">Pengaturan</p>
            </div>
            <div class="kanan">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="flex text-white font-normal rounded-lg text-sm px-5 py-2.5 text-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    <div class="relative me-4 my-auto">
                        <img class="w-10 h-10 rounded-full" src="/images/dts.jpg" alt="profile image">
                        <span
                            class="top-0 start-7 absolute w-3.5 h-3.5 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></span>
                    </div>
                    <div class="teks text-left">
                        <p class="text-xl text-gray-600 font-semibold">Admin</p>
                        <p class="text-gray-400 text-xs font-normal">Admin@gmail.com</p>
                    </div>
                    <svg class="w-2.5 h-2.5 ms-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown"
                    class="border border-gray-400 border-1 z-10 hidden bg-white p-10 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                        </li>
                        <hr>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LogOut</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="subheader text-white my-8">
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-2 rounded-xl">
                <div class="kanan ">
                    <p class="text-white px-2 text-2xl font-semibold">Pengaturan</p>
                    <p class="text-gray-300 px-2 text-lg">kustom website</p>
                </div>
            </div>
            <form class="px-8 pb-2 mt-6 bg-white rounded-lg">
                <div class=" pt-4">
                    <label for="emas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                        Emas</label>
                    <input type="text" id="emas"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" value="0" required />
                </div>
                <div class=" pt-4">
                    <label for="silver" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga
                        Silver</label>
                    <input type="text" id="silver"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" value="0" required />
                </div>

                <div class="pt-4 flex justify-end">
                    <a type="button" href="#"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Simpan
                    </a>
                </div>
            </form>

            <form class="px-8 mt-6 pb-2 bg-white rounded-lg">
                <div class="grid grid-cols-4 gap-4 pt-4">
                    <div class="flex flex-col items-start space-y-2">
                        <label for="colorPicker1" class="text-gray-700 font-normal">Primary</label>
                        <input id="colorPicker1" type="color" class="w-48 h-12 p-0  rounded cursor-pointer  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div class="flex flex-col items-start space-y-2">
                        <label for="colorPicker2" class="text-gray-700 font-normal">Secondary</label>
                        <input id="colorPicker2" type="color" class="w-48 h-12 p-0  rounded cursor-pointer  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div class="flex flex-col items-start space-y-2">
                        <label for="colorPicker3" class="text-gray-700 font-normal">Failed</label>
                        <input id="colorPicker3" type="color" class="w-48 h-12 p-0 b rounded cursor-pointer  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div class="flex flex-col items-start space-y-2">
                        <label for="colorPicker4" class="text-gray-700 font-normal">Soft Primary</label>
                        <input id="colorPicker4" type="color" class="w-48 h-12 p-0  rounded cursor-pointer  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    <div class="flex flex-col items-start space-y-2">
                        <label for="colorPicker4" class="text-gray-700 font-normal">Soft Secondary</label>
                        <input id="colorPicker4" type="color" class="w-48 h-12 p-0  rounded cursor-pointer  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
                <div class="pt-4 flex justify-end">
                    <a type="button" href="#"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Simpan
                    </a>
                </div>
            </form>

            <form class="px-8 mt-6 pb-2 bg-white rounded-lg">
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black dark:text-white"
                        for="file_input">Logo
                        <p class="text-yellow-500">logo image recommendation 130x50px</p>
                    </label>
                    <img class="w-36 h-auto py-2" src="/images/dts.jpg" alt="">
                    <input
                        class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">
                </div>
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black dark:text-white"
                        for="file_input">Icon
                        <p class="text-yellow-500">logo image recommendation 64x64px</p>
                    </label>
                    <img class="w-36 h-auto py-2" src="/images/dts.jpg" alt="">
                    <input
                        class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">
                </div>

                <div class=" pt-4">
                    <label for="nama_lembaga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lembaga</label>
                    <input type="text" id="nama_lembaga"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nama Lembaga" required />
                </div>

                <div class="pt-4 flex justify-end">
                    <a type="button" href="#"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Simpan
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
