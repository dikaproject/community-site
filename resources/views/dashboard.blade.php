<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> {{--FontAwesome --}}
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex bg-gray-100 text-gray-900">  {{-- sidebar --}}
        <aside class="flex h-screen w-20 flex-col items-center border-r border-gray-200 bg-white">
            <div class="flex h-[4.5rem] w-full items-center justify-center border-b border-gray-200 p-2">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThsapwuIZ2JPUVRaWSoX_xoEIOHWxneY7EupS8gsFriA&s" />
            </div>
            <nav class="flex flex-1 flex-col gap-y-4 pt-10">
                <a href="#" class="group relative rounded-xl bg-gray-100 p-2 text-blue-600 hover:bg-gray-50">
                    <svg class="h-6 w-6 stroke-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 9V15M9 12H15H9Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                        <div
                            class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-white"></div>
                            </div>
                            Layouts <span class="text-gray-400">(Y)</span>
                        </div>
                    </div>
                </a>
                <a href="" class="text-gary-400 group relative rounded-xl p-2 hover:bg-gray-50">
                    <i class="fa-solid fa-droplet text-2xl"></i>

                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                        <div
                            class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-white"></div>
                            </div>
                            Color Scheme <span class="text-gray-400">(Y)</span>
                        </div>
                    </div>
                </a>
                <a href="{{ route('chatify') }}" class="text-gary-400 group relative rounded-xl p-2 hover:bg-gray-50">    {{-- Icon & links --}}
                    <i class="fa-regular fa-comment-dots text-2xl"></i>
                    <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                        <div
                            class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                            <div class="absolute inset-0 -left-1 flex items-center">
                                <div class="h-2 w-2 rotate-45 bg-white"></div>
                            </div>
                            Chat<span class="text-gray-400">(Y)</span>
                        </div>
                    </div>
                </a>
            </nav>

            <div class="flex flex-col items-center gap-y-4 py-10">
                <button class="group relative rounded-xl p-2 text-gray-400 hover:bg-gray-100">
                    <svg width="24" height="24" class="h-6 w-6 stroke-current" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16H12.01M12 8V12V8Z" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <a href="{{ route('profile.edit') }}" class="text-gray-400 group relative rounded-xl p-2 hover:bg-gray-50">    {{-- Icon & links --}}
                <button class="mb-8 rounded-full bg-gray-100">
                    <img class="h-10 w-10 rounded-full" src="https://avatars.githubusercontent.com/u/35387401?v=4"alt="" />
                </button>
                <div class="absolute inset-y-0 left-12 hidden items-center group-hover:flex">
                    <div
                        class="relative whitespace-nowrap rounded-md bg-white px-4 py-2 text-sm font-semibold text-gray-900 drop-shadow-lg">
                        <div class="absolute inset-0 -left-1 flex items-center">
                            <div class="h-2 w-2 rotate-45 bg-white"></div>
                        </div>
                        {{ Auth::user()->name }}
                        <span class="text-gray-400">(Y)</span>
                    </div>
                </div>
            </a>
        </aside>
    </div>
</body>
