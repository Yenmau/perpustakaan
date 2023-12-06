@extends('layout.menu')
@section('content')


    @if (Auth::check())
        <!-- Content -->
        <html>

        <body>
            <div class="container ">
                <div class="text-center mr-5 flex items-center justify-center mt-3">
                    @if (session('success'))
                        <div class=" flex bg-green-500 w-[300px] lg:w-[400px] lg:py-3 py-1 rounded-xl text-center text-lg lg:text-xl font-semibold text-white justify-center gap-1 "
                            id="success-message">
                            {{ session('success') }}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" width="30px" height="30px" class="">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </div>
                    @endif
                </div>
                <div class="lg:my-10 my-5 flex flex-wrap gap-8 items-center place-content-center ">
                    <!-- Buku -->
                    <div
                        class="w-[270px] h-[140px] lg:w-[350px] lg:h-[200px] bg-white rounded-xl border-2 hover:bg-red-600/90 hover:text-white duration-500 hover:scale-95 shadow-md">
                        <div class="flex relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="lg:ml-6 lg:mt-2 mt-1 ml-5 w-[60px] h-[60px] lg:w-[80px] lg:h-[80px]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <h1 class="text-4xl font-semibold absolute top-3 right-8 lg:top-5 lg:right-8">
                                {{ $jml_buku }}</h1>
                        </div>
                        <h2 class="text-xl lg:text-3xl font-semibold ml-6 mb-2 lg:ml-7 lg:mb-6">Buku</h2>
                        <hr class="text-white lg:mt-5 mt-2" />
                        <h2
                            class="text-lg lg:text-2xl font-semibold py-1 lg:py-2 flex place-content-center items-center gap-1">
                            More Info
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="25px" height="25px" class="">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <!-- Anggota -->
                    <div
                        class="w-[270px] h-[140px] lg:w-[350px] lg:h-[200px] bg-white rounded-xl border-2 hover:bg-red-600/90 hover:text-white duration-500 hover:scale-95 shadow-md">
                        <div class="flex relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="lg:ml-6 lg:mt-2 mt-1 ml-5 w-[60px] h-[60px] lg:w-[80px] lg:h-[80px]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                            <h1 class="text-4xl font-semibold absolute top-3 right-8 lg:top-5 lg:right-8">
                                {{ $jml_anggota }}</h1>
                        </div>
                        <h2 class="text-xl lg:text-3xl font-semibold ml-6 mb-2 lg:ml-7 lg:mb-6">Anggota</h2>
                        <hr class="text-white lg:mt-5 mt-2" />
                        <h2
                            class="text-lg lg:text-2xl font-semibold py-1 lg:py-2 flex place-content-center items-center gap-1">
                            More Info
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="25px" height="25px" class="">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </h2>
                    </div>
                    <!-- Laporan -->

                    <div
                        class="w-[270px] h-[140px] lg:w-[350px] lg:h-[200px] bg-white rounded-xl border-2 hover:bg-red-600/90 hover:text-white duration-500 hover:scale-95 shadow-md">
                        <div class="flex relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="lg:ml-6 lg:mt-2 mt-1 ml-5 w-[60px] h-[60px] lg:w-[80px] lg:h-[80px]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                            </svg>
                            <h1 class="text-4xl font-semibold absolute top-3 right-8 lg:top-5 lg:right-8">
                                {{ $jml_pinjam }}</h1>
                        </div>
                        <h2 class="text-xl lg:text-3xl font-semibold ml-6 mb-2 lg:ml-7 lg:mb-6">Peminjaman</h2>
                        <hr class="text-white lg:mt-5 mt-2" />
                        <h2
                            class="text-lg lg:text-2xl font-semibold py-1 lg:py-2 flex place-content-center items-center gap-1">
                            More Info
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="25px" height="25px" class="">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </h2>
                    </div>

                </div>
                <!-- End Content -->
        </body>

        </html>
    @endif

    <script>
        setTimeout(function() {
            var successMessage = document.getElementById("success-message");
            if (successMessage) {
                successMessage.style.display = "none";
            }
        }, 2500); // Pesan akan hilang setelah 2,5 detik (2500 milidetik)
    </script>
@endsection
