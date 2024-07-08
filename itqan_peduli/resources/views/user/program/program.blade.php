@extends('user.home.index')

@section('content')
    <style>
            /* Untuk browser Webkit (Chrome, Safari, dll.) */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

            /* Untuk Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE 10+ */
            scrollbar-width: none;  /* Firefox */
        }
    </style>

    <div class="bungkus bg-white min-h-screen overflow-hidden overflow-auto">
        <div class="relative">
            <div class="absolute flex justify-center items-center inset-0">
                <div class="bg-green-700 h-[350px] w-[750px] max-w-screen-lg rounded-b-full -mx-[256px] z-0"></div>
            </div>
        </div>
        <div class="teks z-50 relative ms-10 mt-12 text-white">
            <p class="font-bold">Tempat Investasi Akhirat</p>
            <p> Ada <b>123 tempat</b> untuk investasi akhirat</p>
        </div>
        <div class="subheader mt-12">
            <form class="max-w-md mx-auto">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <input type="search" id="default-search" class="block w-full p-3 bg-gray-50 text-sm text-gray-900 rounded-lg border-none" style="box-shadow: 0 1px 3px 0 gray;" placeholder="Cari Donasi..." required />
                    <div class="absolute inset-y-0 end-3 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                </div>
            </form>
        </div>
        <div class="konten mx-auto mt-10">
            <p class="font-bold ms-7">Berdasarkan Kategori</p>
            <div class="konten mt-3">
                <div class="overflow-x-scroll no-scrollbar h-18 mt-2 whitespace-nowrap ">
                    <div class="semu inline-block text-center">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Semua</p>
                    </div>
                    <div class="semu inline-block text-center">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Kesehatan</p>
                    </div>
                    <div class="semu inline-block text-center">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Infrastruktur</p>
                    </div>
                    <div class="semu inline-block text-center">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Pendidikan</p>
                    </div>
                    <div class="semu inline-block text-center">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Kemanusiaan</p>
                    </div>
                    <div class="semu inline-block text-center">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Wirausaha</p>
                    </div>
                </div>
            </div>
            <div class="konten1 max-w-md mx-auto">
                <div class="kotak flex my-5 p-2 rounded-md" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                        </div>
                        <div class="flex justify-between">
                            <div class="kiri text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
                            </div>
                            <div class="kanan text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kotak flex my-5 p-2 rounded-md" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                        </div>
                        <div class="flex justify-between">
                            <div class="kiri text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
                            </div>
                            <div class="kanan text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kotak flex my-5 p-2 mb-12 rounded-md" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                        </div>
                        <div class="flex justify-between">
                            <div class="kiri text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
                            </div>
                            <div class="kanan text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection