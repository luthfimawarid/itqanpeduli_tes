@extends('admin.utama.index')
@section('content')
    <div class="p-4 sm:ml-80">
        <div class="header flex justify-between mt-3">
            <div class="kiri">
                <p class="text-2xl font-semibold">Hak Lembaga</p>
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
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
                <div class="kanan my-auto">
                    <a type="button" href="#"
                        class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Kembali
                    </a>
                </div>
            </div>
            <form class="px-8 mt-6 bg-white rounded-lg">
                <div class=" pt-4">
                    <div class="max-w-full mx-auto">
                        <label for="program"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program</label>
                        <select id="program"
                            class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Program</option>
                            <option value="US">Program Instant Zakat</option>
                            <option value="CA">Program Instant Wakaf</option>
                            <option value="FR">Program Instant Sedekah</option>
                            <option value="DE">Program Berbagi</option>
                        </select>
                    </div>
                </div>
                <div class=" pt-4">
                    <label for="nominal"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                    <div class="flex">
                        <p class="bg-gray-200 border w-10 py-1.5 rounded-l-md text-center border-gray-300 text-black">Rp</p>
                        <input type="number" id="nominal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" value="0" required />
                    </div>
                </div>
                <div class="pt-4">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder=""></textarea>
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
