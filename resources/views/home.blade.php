@extends('layouts.mainlayout')

@section('content')
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
  <div>
    <div class="p-4 relative text-center justify-center">
        <h1 class="font-[Suez One] text-[#764507] text-[32px] font-normal">What Our Customer Says?</h1>
    </div>
    <div class="grid grid-cols-3 gap-3 p-4">
        <div class="...">
            <i class="text-8xl text-center flex justify-center text-red-500">"</i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor..</p>
            <div class="items-center flex justify-center">
                <img class="w-16 h-16 rounded-full p-2" src="https://s3-alpha-sig.figma.com/img/19b0/13a5/13a9fbb4a9546984b2629477aea16ea0?Expires=1702252800&Signature=UEaRRef0jFqllCTDAkpe~dxtviLa~OEDgFofYhdKuy0~hqFQ3x~L5VW~aV8Ddb8bEllhWO2mbIoLz9fGPt-rzrNWEeSXey97leXCppGIgq9ya1dO8gJ00HLKInH0K6Pz7H~sKyt2-6bEOvBlcLUmUMq3hHUkeNrvNoQZ9crqjKQFZxHOtp6LPlk60Sqt5NmgA0wyxjyeU9UkSAcoWRM2k1mldwQyNGTGz3Z22Kk7NbbSXHTIYf5TmdHwWDUhWcVyTjmjGEvbBYkJM334tAJm~es8XVgEt1jVBsCYnhCRym-absc7-qCWz6j432N0XWx6tCM4gTxyAhkRN8O4eb3dQA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="user photo">
            </div>
        </div>
        <div class="...">
            <i class="text-8xl text-center flex justify-center text-red-500">"</i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor..</p>
            <div class="items-center flex justify-center">
                <img class="w-16 h-16 rounded-full p-2" src="https://s3-alpha-sig.figma.com/img/19b0/13a5/13a9fbb4a9546984b2629477aea16ea0?Expires=1702252800&Signature=UEaRRef0jFqllCTDAkpe~dxtviLa~OEDgFofYhdKuy0~hqFQ3x~L5VW~aV8Ddb8bEllhWO2mbIoLz9fGPt-rzrNWEeSXey97leXCppGIgq9ya1dO8gJ00HLKInH0K6Pz7H~sKyt2-6bEOvBlcLUmUMq3hHUkeNrvNoQZ9crqjKQFZxHOtp6LPlk60Sqt5NmgA0wyxjyeU9UkSAcoWRM2k1mldwQyNGTGz3Z22Kk7NbbSXHTIYf5TmdHwWDUhWcVyTjmjGEvbBYkJM334tAJm~es8XVgEt1jVBsCYnhCRym-absc7-qCWz6j432N0XWx6tCM4gTxyAhkRN8O4eb3dQA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="user photo">
            </div>
        </div>
        <div class="...">
            <i class="text-8xl text-center flex justify-center text-red-500">"</i>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor..</p>
            <div class="items-center flex justify-center">
                <img class="w-16 h-16 rounded-full p-2" src="https://s3-alpha-sig.figma.com/img/19b0/13a5/13a9fbb4a9546984b2629477aea16ea0?Expires=1702252800&Signature=UEaRRef0jFqllCTDAkpe~dxtviLa~OEDgFofYhdKuy0~hqFQ3x~L5VW~aV8Ddb8bEllhWO2mbIoLz9fGPt-rzrNWEeSXey97leXCppGIgq9ya1dO8gJ00HLKInH0K6Pz7H~sKyt2-6bEOvBlcLUmUMq3hHUkeNrvNoQZ9crqjKQFZxHOtp6LPlk60Sqt5NmgA0wyxjyeU9UkSAcoWRM2k1mldwQyNGTGz3Z22Kk7NbbSXHTIYf5TmdHwWDUhWcVyTjmjGEvbBYkJM334tAJm~es8XVgEt1jVBsCYnhCRym-absc7-qCWz6j432N0XWx6tCM4gTxyAhkRN8O4eb3dQA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="user photo">
            </div>
        </div>
    </div>
  </div>
  {{-- End Review --}}
  {{-- Menu --}}
  <div class="p-8">
    <h1 class="text-center text-3xl text-[#764507] font-semibold">Our Menu</h1>
  </div>
  <div class="px-4 grid grid-cols-4 gap-4 p-8">
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="...">
        <div class="container flex justify-center">
            <div class="max-w-sm py-26">
              <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                <img class="rounded-t-lg" src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" alt="" />
                <div class="py-6 px-8 rounded-lg bg-white">
                  <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">I'm supper dog for you.</h1>
                  <p class="text-gray-700 tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                  <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Buy Now</button>
                </div>
                <div class="absolute top-2 right-2 py-2 px-4 bg-white rounded-lg">
                  <span class="text-md">$150</span>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
  {{-- End Menu --}}
  <div class="text-center flex justify-center p-4">
    <a class="text-blue-500 text-[24px] font-bold" href="">See all menu</a>
  </div>
  @endsection
  {{-- Start footer --}}

  {{-- End Footer --}}
  
</body>
</html>