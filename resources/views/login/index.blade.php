<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="bg-gray-100 ">

    <section
        class="bg-[url('/img/sekolah.jpeg')] bg-blend-soft-light bg-center bg-cover bg-zinc-600 lg:h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-white lg:flex rounded-lg shadow-md">
            <!-- image -->
            <div class="mt-[120px] lg:mt-0 lg:w-0 lg:h-0"></div>
            <div class="block lg:my-12 lg:mx-12 text-center  ">
                <img class="inline-block w-0 h-0 lg:w-auto lg:h-auto" src="{{ asset('img/logoskatel.png') }}"
                    alt="Logo">
                <img class="inline-block w-[70%] h[70%] lg:w-0 lg:h-0 " src="{{ asset('img/logoskatel2.png') }}"
                    alt="Logo">
            </div>

            <!-- form -->
            <div class="h-screen md:w-screen lg:w-[400px] lg:h-[370px] lg:pl-12 ">
                <div class="text-center lg:mr-5 ">
                    @if (session('error'))
                        <div>
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="relative">
                            @foreach ($errors->all() as $error)
                                <h3
                                    class="font-bold text-lg lg:text-xl text-black bg-red-400 rounded absolute top-2 right-[60px] ">
                                    {{ $error }}</h3>
                            @endforeach
                        </div>
                    @endif
                </div>
                <h2
                    class="hidden lg:block font-bold mt-3 lg:mt-0 mx-[170px] text-3xl lg:text-4xl lg:text-4xl text-[black] lg:mt-[60px] lg:ml-[90px]">
                    Login</h2>
                <form action="/login/proses" method="POST" class="flex flex-col gap-5">
                    @csrf
                    <input class="p-2 mt-6 rounded-xl border lg:mr-[80px] mr-[55px] ml-[60px] lg:ml-0 " id="email"
                        type="email" name="email" placeholder="Email">
                    <div class="relative">
                        <input class="p-2 rounded-xl border lg:mr-[80px] lg:pr-[80px] pr-[85px] ml-[60px] lg:ml-0"
                            id="password" type="password" name="password" placeholder="Password">
                        <svg id="password-toggle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5  absolute top-1/2 right-[70px] lg:right-[100px] -translate-y-1/2 cursor-pointer text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>



                    </div>
                    <button
                        class="mt-4 bg-[#D71313] rounded-xl text-white py-2 hover:scale-105 duration-300 ml-[60px] mr-[55px] lg:ml-0 lg:mr-[80px]">Login</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        const passwordInput = document.getElementById("password");
        const passwordToggle = document.getElementById("password-toggle");

        passwordToggle.addEventListener("click", () => {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggle.innerHTML = `
                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.8" stroke="currentColor"
                            class="w-5 h-5  absolute top-1/2 right-[70px] lg:right-[100px] -translate-y-1/2 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>`;
            } else {
                passwordInput.type = "password";
                passwordToggle.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-5 h-5  absolute top-1/2 right-[70px] lg:right-[100px] -translate-y-1/2 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>`;
            }
        });
    </script>

</body>

</html>
