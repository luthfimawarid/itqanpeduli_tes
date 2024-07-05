@extends('admin.utama.index')
@section('content')
    <div class="p-4 sm:ml-80">
        <div class="header flex justify-between mt-3">
            <div class="kiri">
                <p class="text-3xl font-semibold">Dashboard</p>
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
        <div class="subheader flex text-white my-8">
            <div class="welcome bg-green-700 me-30 w-full p-5 rounded-lg h-48">
                <p class="text-2xl font-semibold m-1">Selamat Datang</p>
                <p class="text-sm text-gray-200 m-1">Silahkan menggunakan menu disamping untuk memulai</p>
                <button type="button" class="my-6 text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Lihat Statistik Terbaru
                </button>
            </div>
            <div class="selles bg-lime-500 ms-10 p-5 rounded-lg h-full">
                <p class="text-2xl font-semibold m-2">Aplikasi Mobile</p>
                <p class="text-sm text-gray-200 m-2">Get more of your customer, Dapatkan semua fitur mediaberbagi dalam satu aplikasi</p>
                <button type="button" class="my-8 text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Lihat Statistik Terbaru
                </button>
            </div>
        </div>
        <div class="statistik">
            <p class="text-2xl font-semibold">Statistik</p>
            <div class="grid grid-cols-3 bg-white p-10 p-5 rounded-lg my-5">
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Program Donasi</p>
                    <p class="my-2 text-gray-600 font-normal">14</p>
                </div>
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Donatur Hari Ini</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Donatur Bulan Ini</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Transaksi Hari Ini</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Transaksi Bulan Ini</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Dana Terkumpul Hari Ini</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Dana Terkumpul Bulan Ini</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Donasi Menunggu Pembayaran</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Dana Menunggu Pembayaran</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Donasi Offline</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
                <div class="p-3 border-gray-200 border-r border-b">
                    <p class="mt-3 text-gray-800 font-semibold">Donasi Online</p>
                    <p class="my-2 text-gray-600 font-normal">2</p>
                </div>
            </div>
        </div>
        <div class="grafik flex justify-between mt-10">
            <div class="chart-container">
                <p class="text-2xl font-semibold">Grafik Transaksi Minggu Ini</p>
                <div id="chart" class="bg-white my-5 p-4 rounded-md" style="box-shadow: 0 2px 3px 0 gray;"></div>
            </div>
            <div class="chart-container">
                <p class="text-2xl font-semibold">Grafik Donatur Bulan Ini</p>
                <div id="chart2" class="bg-white my-5 p-4 rounded-md" style="box-shadow: 0 2px 3px 0 gray;"></div>
            </div>
        </div>
        <div class="donasi my-5">
            <p class="text-2xl font-semibold">Donasi Terbaru</p>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6 bg-white p-5">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tgl Transaksi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Metode Pembayaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                $2999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                            <td class="px-6 py-4">
                                $1999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                            <td class="px-6 py-4">
                                $99
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Google Pixel Phone
                            </th>
                            <td class="px-6 py-4">
                                Gray
                            </td>
                            <td class="px-6 py-4">
                                Phone
                            </td>
                            <td class="px-6 py-4">
                                $799
                            </td>
                            <td class="px-6 py-4">
                                $799
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple Watch 5
                            </th>
                            <td class="px-6 py-4">
                                Red
                            </td>
                            <td class="px-6 py-4">
                                Wearables
                            </td>
                            <td class="px-6 py-4">
                                $999
                            </td>
                            <td class="px-6 py-4">
                                $999
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'line',
                height: 250,
                width: 400
            },
            series: [{
                name: 'Jumlah Transaksi',
                data: [120000, 180000, 240000, 360000, 180000, 270000, 150000]
            }],
            xaxis: {
                categories: ['27-06', '28-06', '29-06', '30-06', '01-07', '02-07', '03-07']
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        var options2 = {
            chart: {
                type: 'line',
                height: 250,
                width: 400
            },
            series: [{
                name: 'Jumlah Donatur',
                data: [90000, 270000, 360000, 90000]
            }],
            xaxis: {
                categories: ['2024-07-01', '2024-07-02', '2024-07-03', '2024-07-04']
            }
        };

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();
    </script>
@endsection
