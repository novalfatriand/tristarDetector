<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS Link -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/preline@latest/dist/preline.js"></script>

        <title>Testimoni | TRISTAR</title>

        <!-- Add Icon URL Bar -->
        <link rel="icon" href="assets/img/logo-url-new.png" type="image/icon type">

        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.0/css/all.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            inter: ['Inter+Tight'],
                            montserrat: ['Montserrat'],
                            poppins: ['Poppins'],
                            roboto: ['Roboto']
                        },
                    },
                },
            };
        </script>
    </head>
    
    <body>
         <!-- Navbar Start -->
            <nav class="bg-white border-gray-200 shadow-lg font-poppins sticky top-0 z-50">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 md:p-6">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="assets/img/BIG TEXT.png" class="h-11 md:h-14 ml-4 md:-mt-2" alt="Tristar Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-dropdown" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-dropdown" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                        <ul
                            class="flex flex-col font-light p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                            <li>
                                <a href="/tristarDetector/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Home</a>
                            </li>
                            <li>
                                <a href="/tristarDetector/product" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Product</a>
                            </li>
                            <li>
                                <a href="/tristarDetector/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                            </li>
                            <li>
                                <a href="#home" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0"
                                    aria-current="page">Testimonials</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="z-30 relative">
                    <div class="fixed right-7 bottom-5 bg-gradient-to-br from-green-700 to-green-500 h-12 w-36 lg:h-14 lg:w-40 rounded-xl shadow-lg flex items-center">
                        <a href="https://wa.me/+6285190060033" class="flex items-center justify-center gap-3 text-white text-sm lg:text-base font-light px-4 w-full h-full mx-auto animate-pulse">
                            <img src="assets/img/phone_11433243.png" alt="Direct Link" class="w-6 h-6 lg:w-8 lg:h-8">
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

        <section class="bg-[#f7fcff] font-poppins py-20">

            <div class="headerTestimoni mb-16 px-44">
                <p class="font-medium text-sm text-blue-500 bg-blue-100 px-4 py-2 w-36 text-center rounded-full uppercase">Testimonials</p>
                <h1 class="mt-7 font-bold text-5xl text-[#112f4a] tracking-tight">Don't take our word for it, <br> See what our client say</h1>
                <h3 class="mt-7 text-lg font-light pb-10 text-[#898892] w-[800px]">Client satisfaction is our top priority. We deliver professional, responsive, and reliable services that help clients achieve real results. Every testimonial reflects our commitment to quality, trust, and long-term partnerships.</h3>
            </div>

            <div class="px-4 lg:px-20">
            <!-- Slider -->
            <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer",
            "slidesQty": {
                "xs": 1,
                "lg": 3
            },
            "isDraggable": true
            }' class="relative">
            <div class="hs-carousel w-full overflow-hidden px-5 lg:px-0 pb-10 relative">
                  <!-- Gradient fade left -->
            <div class="pointer-events-none absolute top-0 left-0 h-full w-12 bg-gradient-to-r from-[#f7fcff] to-transparent z-10"></div>
            <div class="pointer-events-none absolute top-0 right-0 h-full w-12 bg-gradient-to-l from-[#f7fcff] to-transparent z-10"></div>

                <div class="relative min-h-72 -ml-1 md:-mx-1">
                    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 cursor-grab transition-transform duration-700 hs-carousel-dragging:transition-none hs-carousel-dragging:cursor-grabbing">
                        
                        <div class="hs-carousel-slide p-4 md:p-0 px-3">
                            <div class="flex flex-col bg-white shadow-sm rounded-lg w-[300px] md:w-[450px] h-64 overflow-hidden transform transition duration-300 hover:scale-[1.02] hover:shadow-md">
                                <div class="p-7 md:p-10 flex flex-col justify-between h-full">
                                    <div>
                                        <h3 class="text-xl font-semibold text-[#112f4a]">
                                            <i class="fa fa-quote-right mr-2"></i>
                                            First Testimoni
                                        </h3>
                                        <p class="mt-3 font-light text-gray-500 line-clamp-3">
                                            With supporting text below as a natural lead-in to additional content. This is an extended version of the content to show how it behaves with long text.
                                        </p>
                                    </div>
                                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-hidden focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                        Card link
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="hs-carousel-slide p-4 md:p-0 px-3">
                            <div class="flex flex-col bg-white shadow-sm rounded-lg w-[300px] md:w-[450px] h-64 overflow-hidden transform transition duration-300 hover:scale-[1.02] hover:shadow-md">
                                <div class="p-7 md:p-10 flex flex-col justify-between h-full">
                                    <div>
                                        <h3 class="text-xl font-semibold text-[#112f4a]">
                                            <i class="fa fa-quote-right mr-2"></i>
                                            Second Testimoni
                                        </h3>
                                        <p class="mt-3 font-light text-gray-500 line-clamp-3">
                                            With supporting text below as a natural lead-in to additional content. This is an extended version of the content to show how it behaves with long text.
                                        </p>
                                    </div>
                                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-hidden focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                        Card link
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="hs-carousel-slide p-4 md:p-0 px-3">
                            <div class="flex flex-col bg-white shadow-sm rounded-xl w-[300px] md:w-[450px] h-64 overflow-hidden transform transition duration-300 hover:scale-[1.02] hover:shadow-md">
                                <div class="p-7 md:p-10 flex flex-col justify-between h-full">
                                    <div>
                                        <h3 class="text-xl font-semibold text-[#112f4a]">
                                            <i class="fa fa-quote-right mr-2"></i>
                                            Third Testimoni
                                        </h3>
                                        <p class="mt-3 font-light text-gray-500 line-clamp-3">
                                            With supporting text below as a natural lead-in to additional content. This is an extended version of the content to show how it behaves with long text.
                                        </p>
                                    </div>
                                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-hidden focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                        Card link
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="hs-carousel-slide p-4 md:p-0 px-3">
                            <div class="flex flex-col bg-white shadow-sm rounded-xl w-[300px] md:w-[450px] h-64 overflow-hidden transform transition duration-300 hover:scale-[1.02] hover:shadow-md">
                                <div class="p-7 md:p-10 flex flex-col justify-between h-full">
                                    <div>
                                        <h3 class="text-xl font-semibold text-[#112f4a]">
                                            <i class="fa fa-quote-right mr-2"></i>
                                            Fourth Testimoni
                                        </h3>
                                        <p class="mt-3 font-light text-gray-500 line-clamp-3">
                                            With supporting text below as a natural lead-in to additional content. This is an extended version of the content to show how it behaves with long text.
                                        </p>
                                    </div>
                                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-hidden focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                        Card link
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="hs-carousel-slide p-4 md:p-0 px-3">
                            <div class="flex flex-col bg-white shadow-sm rounded-xl w-[300px] md:w-[450px] h-64 overflow-hidden transform transition duration-300 hover:scale-[1.02] hover:shadow-md">
                                <div class="p-7 md:p-10 flex flex-col justify-between h-full">
                                    <div>
                                        <h3 class="text-xl font-semibold text-[#112f4a]">
                                            <i class="fa fa-quote-right mr-2"></i>
                                            Fifth Testimoni
                                        </h3>
                                        <p class="mt-3 font-light text-gray-500 line-clamp-3">
                                            With supporting text below as a natural lead-in to additional content. This is an extended version of the content to show how it behaves with long text.
                                        </p>
                                    </div>
                                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:underline focus:outline-hidden focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                        Card link
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 rounded-s-lg">
                <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 rounded-e-lg">
                <span class="sr-only">Next</span>
                <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
                </span>
            </button>
            </div>
            </div>
        </section>
    </body>
</html>