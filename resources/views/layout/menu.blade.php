<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIJAMBU</title>
    <link rel="icon" href="img/logosmktelkom.png">
    <script src="https://cdn.tailwindcss.com"></script>
   <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


</head>

<body class="flex bg-gray-200/50">
    <!-- Button to toggle sidebars -->

    <div class="">

        <!-- Sidebar 1 -->
        <div id="sidebar1" class="sidebar hidden fixed z-10">
            <!-- ... (Sidebar 1 content) ... -->
            <button onclick="toggleSidebar()"
                class="fixed z-10 top-[340px] left-[297px] bg-red-600 text-black p-2 text-white rounded-full hover:bg-white hover:text-black duration-500"><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            </button>
            <div class="sidebar duration-1000 p-2 w-[320px] text-center bg-red-600 shadow h-screen">
                <div class="font-semibold text-xl">
                    <div class="content-center my-1">
                        <img class="mx-auto my-2 bg-white rounded-full" src="/img/logosmktelkom.png" width="120px"
                            alt="Logo" />
                    </div>
                    <h1 class="text-2xl text-white font-semibold text-center">SMK Telkom <br>Banjarbaru</h1>
                    <hr class="text-white my-3" />

                    <div class="p-2.5 mt-4 py-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('dashboard.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </div>

                    <div class="p-2.5 mt-4 py-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('buku.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <span class="ml-4">Buku</span>
                    </div>

                    <div class="p-2.5 mt-4 py-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('anggota.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <span class="ml-4">Anggota</span>
                    </div>

                    <div class="p-2.5 mt-4 py-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('pinjam.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                        </svg>

                        <span class="ml-4">Peminjaman</span>
                    </div>

                    <hr class="text-white mt-[80px]" />
                    <div class="p-2.5 my-[10px]  py-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:text-black hover:bg-white text-white"
                        onclick="window.location='/logout'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                        <span class="ml-4">Logout</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar 2 -->
        <div id="sidebar2" class="sidebar fixed z-10">
            <!-- ... (Sidebar 2 content) ... -->
            <button onclick="toggleSidebar()"
                class=" lg:w-auto lg:h-auto w-0 h-0 fixed z-10 top-[340px] left-[80px] bg-red-600 hover:bg-white hover:text-black lg:p-2 rounded-full duration-500 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-0 h-0 lg:w-6 lg:h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
            </svg>
            <div class="sidebar duration-1000 p-2 w-[65px] lg:w-[100px] text-center bg-red-600 shadow  lg:h-screen">
                <div class="font-semibold text-xl">
                    <div class="content-center my-1">
                        <img class="mx-auto my-4 bg-white rounded-full" src="/img/logosmktelkom.png" width="1000px"
                            alt="Logo" />
                    </div>
                    <hr class="text-white mt-6" />

                    {{-- Dasboard --}}
                    <div class="lg:p-2.5 p-1 mt-9 py-1 lg:py-3 flex items-center rounded-full px-1 lg:px-6 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('dashboard.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                        </svg>
                    </div>

                    {{-- Buku --}}
                    <div class="lg:p-2.5 p-1 mt-9 py-1 lg:py-3 flex items-center rounded-full px-1 lg:px-6 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('buku.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>

                    </div>

                    {{-- Anggota --}}
                    <div class="lg:p-2.5 p-1 mt-9 py-1 lg:py-3 flex items-center rounded-full px-1 lg:px-6 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('anggota.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                    </div>

                    {{-- pinjam --}}
                    <div class="lg:p-2.5 p-1 mt-9 py-1 lg:py-3 flex items-center rounded-full px-1 lg:px-6 duration-300 cursor-pointer hover:text-black hover:bg-white/90 text-white"
                        onclick="window.location='{{ route('pinjam.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                        </svg>

                    </div>

                    {{-- Log Out --}}
                    <hr class="text-white mt-[130px] lg:mt-[80px]" />
                    <div class=" my-[15px] py-1 lg:py-3 flex items-center rounded-full px-1 lg:px-6  duration-300 cursor-pointer hover:text-black hover:bg-white text-white"
                        onclick="window.location='/logout'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your content goes here -->
    <div id="content" class="ml-[70px] lg:ml-[250px] transition-transform duration-500 ease-in-out">
        @yield('content')
    </div>

    <div id="content2" class="transition-transform duration-500 ease-in-out">
        @yield('content2')
    </div>

    <script>
        // Function to toggle the sidebar and sidebar2
        function toggleSidebar() {
            var sidebar1 = document.getElementById('sidebar1');
            var sidebar2 = document.getElementById('sidebar2');
            var content = document.getElementById('content');
            // Check if sidebar1 is hidden
            var isHidden = sidebar1.classList.contains('hidden');

            // Hide or show sidebar1 based on its current state
            sidebar1.classList.toggle('hidden', !isHidden);

            // Show or hide sidebar2 based on its current state
            sidebar2.classList.toggle('hidden', isHidden);

            // Apply Tailwind classes using add and remove
            if (isHidden) {
                content.classList.remove('lg:ml-[150px]');
                content.classList.add('lg:ml-[350px]');
            } else {
                content.classList.remove('lg:ml-[350px]');
                content.classList.add('lg:ml-[250px]');
            }


        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>
