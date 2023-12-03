<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>
<body>


  {{-- Start Nav --}}
    <nav class="bg-[#EDDBC7] dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://s3-alpha-sig.figma.com/img/5159/0119/7705ac05438414f10f19ec41ce5a05bd?Expires=1702252800&Signature=LIm19O3XCwQpNkvbjy3QCMlofUX6ZaPdcUhCmW5MZpI6~A57ZCseouKx4M2WtCfZ8oVBw7-OTNTw4NBftwM8TGbEZQtnLkZiQmcKJkPLyHCXAKzl-8mj02bRBvX9Y8ch5agFzxyOKh9pN~ELYJsWyVOj~WRSnl-9xIgmWPFkYg9laP-At~awemvXnlAeQ7DK0NG4ItauVbwR0-CjIKbXlwbZEb1PlgqwRQ~50fegS7M8qotktlrNhiDNw8CbuZxzspHTtlZ9neAvWzFsB~DmtyEFhdU7Vh4-7Q2AxoefjvPEjMGUROWmWT3WL~4hCoigWeN3letCTBy-F0sA-6PW3w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Angelica Cafe</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 mx-auto">
            <li>
                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
  {{-- End Nav --}}
  {{-- StartCarousel --}}
    <div id="default-carousel" class="relative w-full bg-gray-600" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://s3-alpha-sig.figma.com/img/19b0/13a5/13a9fbb4a9546984b2629477aea16ea0?Expires=1702252800&Signature=UEaRRef0jFqllCTDAkpe~dxtviLa~OEDgFofYhdKuy0~hqFQ3x~L5VW~aV8Ddb8bEllhWO2mbIoLz9fGPt-rzrNWEeSXey97leXCppGIgq9ya1dO8gJ00HLKInH0K6Pz7H~sKyt2-6bEOvBlcLUmUMq3hHUkeNrvNoQZ9crqjKQFZxHOtp6LPlk60Sqt5NmgA0wyxjyeU9UkSAcoWRM2k1mldwQyNGTGz3Z22Kk7NbbSXHTIYf5TmdHwWDUhWcVyTjmjGEvbBYkJM334tAJm~es8XVgEt1jVBsCYnhCRym-absc7-qCWz6j432N0XWx6tCM4gTxyAhkRN8O4eb3dQA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://s3-alpha-sig.figma.com/img/19b0/13a5/13a9fbb4a9546984b2629477aea16ea0?Expires=1702252800&Signature=UEaRRef0jFqllCTDAkpe~dxtviLa~OEDgFofYhdKuy0~hqFQ3x~L5VW~aV8Ddb8bEllhWO2mbIoLz9fGPt-rzrNWEeSXey97leXCppGIgq9ya1dO8gJ00HLKInH0K6Pz7H~sKyt2-6bEOvBlcLUmUMq3hHUkeNrvNoQZ9crqjKQFZxHOtp6LPlk60Sqt5NmgA0wyxjyeU9UkSAcoWRM2k1mldwQyNGTGz3Z22Kk7NbbSXHTIYf5TmdHwWDUhWcVyTjmjGEvbBYkJM334tAJm~es8XVgEt1jVBsCYnhCRym-absc7-qCWz6j432N0XWx6tCM4gTxyAhkRN8O4eb3dQA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://s3-alpha-sig.figma.com/img/19b0/13a5/13a9fbb4a9546984b2629477aea16ea0?Expires=1702252800&Signature=UEaRRef0jFqllCTDAkpe~dxtviLa~OEDgFofYhdKuy0~hqFQ3x~L5VW~aV8Ddb8bEllhWO2mbIoLz9fGPt-rzrNWEeSXey97leXCppGIgq9ya1dO8gJ00HLKInH0K6Pz7H~sKyt2-6bEOvBlcLUmUMq3hHUkeNrvNoQZ9crqjKQFZxHOtp6LPlk60Sqt5NmgA0wyxjyeU9UkSAcoWRM2k1mldwQyNGTGz3Z22Kk7NbbSXHTIYf5TmdHwWDUhWcVyTjmjGEvbBYkJM334tAJm~es8XVgEt1jVBsCYnhCRym-absc7-qCWz6j432N0XWx6tCM4gTxyAhkRN8O4eb3dQA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://s3-alpha-sig.figma.com/img/19b0/13a5/13a9fbb4a9546984b2629477aea16ea0?Expires=1702252800&Signature=UEaRRef0jFqllCTDAkpe~dxtviLa~OEDgFofYhdKuy0~hqFQ3x~L5VW~aV8Ddb8bEllhWO2mbIoLz9fGPt-rzrNWEeSXey97leXCppGIgq9ya1dO8gJ00HLKInH0K6Pz7H~sKyt2-6bEOvBlcLUmUMq3hHUkeNrvNoQZ9crqjKQFZxHOtp6LPlk60Sqt5NmgA0wyxjyeU9UkSAcoWRM2k1mldwQyNGTGz3Z22Kk7NbbSXHTIYf5TmdHwWDUhWcVyTjmjGEvbBYkJM334tAJm~es8XVgEt1jVBsCYnhCRym-absc7-qCWz6j432N0XWx6tCM4gTxyAhkRN8O4eb3dQA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
  {{-- End Carousel --}}
  {{-- Start Review --}}
  {{-- End Review --}}
  
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
  
</body>
</html>