@extends('admin.utama.index')
@section('content')
    <div class="p-4 sm:ml-80">
        <div class="header flex justify-between mt-3">
            <div class="kiri">
                <p class="text-2xl font-semibold">Dana Terkumpul</p>
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
            <div class="welcome flex justify-between bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
                <div class="kiri my-auto">
                    <p class="text-2xl font-semibold">Notifikasi Email</p>
                    <p class="text-sm text-gray-300 mt-2 font-normal">kirim email blast ke daftar email donatur aktif</p>
                </div>
                <div class="kanan my-auto">
                    <a type="button" href="#" class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Buat Notifikasi
                    </a>
                </div>
            </div>
        </div>
        <div class="program">
            <p class="text-2xl font-semibold">Program Instan</p>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Sedekah</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Tidak Terikat</p>
                    <div class="duit flex justify-between mt-5">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Wakaf</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Tidak Terikat</p>
                    <div class="duit flex justify-between mt-5">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">/a>
                    <p class="text-sm font-normal ms-3 text-green-600">Tidak Terikat</p>
                    <div class="duit flex justify-between mt-5">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="terikat">
            <p class="text-2xl font-semibold">Program Terikat</p>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold text-gray-800">Agar Tenang, Tunaikan Sekarang!</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Wakaf Al-Qur'an Plus</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Donasi Semeru</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Beasiswa Paket C</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Awali Hari Dengan Sedekah, Insyaallah Berkah...</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Buka Pintu Rezeki Dengan Berinfaq Dhuha</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Berbagi Berkah FIdyah Untuk Yatim & Dhuafa</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Sedekah Sarana Masjid Di Plosok</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Itqan Quranic Center</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="#" class="text-2xl font-semibold ms-3 text-gray-800">Pray For Bogor</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <ul class="flex items-center -space-x-px h-8 text-sm my-10">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight active-page bg-green-600 border border-gray-300">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
