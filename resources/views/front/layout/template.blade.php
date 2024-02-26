
<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adhen Leo, Fariz Rachman A, Varel Stephen M">
    @stack('meta')
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico') }}" />

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('front/css/tiny-slider.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('front/fonts/lineicons/font-css/LineIcons.css') }}">

    <!--====== Tailwind CSS ======-->
    <link rel="stylesheet" href="{{ asset('front/css/tailwindcss.css') }}">
    @vite('resources/css/app.css')
    {{-- @stack('css') --}}

</head>

<body>
           {{-- panggil sidebar menu --}}
            {{-- include memecah bagian --}}
            @include('front.layout.navbar')
            {{-- panggil section content --}}
            @yield('content')

            {{-- footer --}}
            <!--====== FOOTER PART START ======-->

<footer id="footer" class="footer_area bg-black relative z-10">
    <div class="shape absolute left-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
        <img src="assets/images/footer-shape-left.png" alt="">
    </div>
    <div class="shape absolute right-0 top-0 opacity-5 h-full overflow-hidden w-1/3">
        <img src="assets/images/footer-shape-right.png" alt="">
    </div>
    <div class="container">
        <div class="footer_widget pt-18 pb-120">
            <div class="row justify-center">
                <div class="w-full md:w-1/2 lg:w-3/12">
                    <div class="footer_about mt-13 mx-3">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ asset('img/img-front/logofr.webp') }}" alt=""></a>
                        </div>
                        <div class="footer_content mt-8">
                            <p class="text-white">FR.Fortuna Pratama Konsultan Indonesia yang berlokasi di Gapura Office GDC, Komplek V Rukoerbena, Jl. Boulevard Grand Depok City No.09 Kota Depok , Jawa Barat 16412. Dengan Brand FR Consultant Indonesia, Siap memberikan solusi bisnis untuk seluruh perusahaan di Indonesia. <br> <br> Kantor Operasional : Bandung - co & co Space, Semarang - Collabox Creative Hub, Surabaya - Urban Office, Bali - Bali Bustle</p>
                        </div>
                    </div> <!-- footer about -->
                </div>
                <div class="w-full md:w-1/2 lg:w-5/12">
                    <div class="footer_link_wrapper flex flex-wrap mx-3">
                        <div class="footer_link w-3/5 md:pl-13 mt-13 flex justify-between">
                            <h2 class="footer_title text-xl font-semibold text-white">Layanan</h2>
                            <ul class="link pt-4">
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">Company</a></li>
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">Privacy Policy</a></li>
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">About</a></li>
                            </ul>
                            <ul class="link pt-4">
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">Company</a></li>
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">Privacy Policy</a></li>
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">About</a></li>
                            </ul>
                        </div> <!-- footer link -->
                        {{-- <div class="footer_link w-1/2 md:pl-13 mt-13">
                            <h2 class="footer_title text-xl font-semibold text-white">Resources</h2>
                            <ul class="link pt-4">
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">Support</a></li>
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">Contact</a></li>
                                <li><a href="#" class="text-white mt-4 hover:text-theme-color">Terms</a></li>
                            </ul>
                        </div> <!-- footer link --> --}}
                    </div> <!-- footer link wrapper -->
                </div>
                <div class="w-full md:w-2/3 lg:w-4/12">
                    <div class="footer_subscribe mt-13 mx-3">
                        <h2 class="footer_title text-xl font-semibold text-white">Newsletter</h2>
                        <div class="subscribe_form text-right mt-9 relative">
                            <form action="#">
                                <input type="text" placeholder="Enter email" class="w-full py-5 px-6 bg-white text-black rounded-full border-none">
                                <button class="main-btn subscribe-btn">Subscribe</button>
                            </form>
                        </div>
                    </div> <!-- footer subscribe -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="footer_copyright pt-3 pb-6 border-t-2 border-solid border-white border-opacity-10 sm:flex justify-between">
            <div class="footer_social pt-4 mx-3 text-center">
                <ul class="social flex justify-center sm:justify-start">
                    <li class="mr-3"><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                    <li class="mr-3"><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-filled"></i></a></li>
                    <li class="mr-3"><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                    <li class="mr-3"><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                </ul>
            </div> <!-- footer social -->
            <div class="footer_copyright_content pt-4 text-center">
                <p class="text-white">Designed and Developed by <a href="https://uideck.com" rel="nofollow" class="text-white hover:text-theme-color">UIdeck</a> and <a href="https://tailwindtemplates.co" rel="nofollow" class="text-white hover:text-theme-color">Tailwind Templates</a></p>
            </div> <!-- footer copyright content -->
        </div> <!-- footer copyright -->
    </div> <!-- container -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="scroll-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->


    <!--====== Tiny Slider js ======-->
    <script src="{{ asset('front/js/tiny-slider.js') }}"></script>

    <!--====== Wow js ======-->
    <script src="{{ asset('front/js/wow.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('front/js/main.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('front/js/script.js') }}"></script>
    {{-- @stack('js') --}}

    <script>
        function menua(target) {
            let target = document.getElementById('dropdownMenutarget')
            target.classList.remove('hidden');
            target.classList.add('block');
        }
    </script>
</body>

</html>
