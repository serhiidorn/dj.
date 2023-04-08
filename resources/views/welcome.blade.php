<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
              rel="stylesheet">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/favicon.ico') }}">

        <title>Джин для пошуку роботи (/◔ ◡ ◔)/</title>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/welcome/page.js'])
    </head>
    <body class="antialiased">
        <header class="text-white bg-[#0d5bcb]">
            <div class="container flex flex-col min-h-[373px]">
                {{-- Header Navigation --}}
                <nav class="flex justify-between items-center py-6 px-4">
                    <a href="{{ route('welcome') }}">
                        {{-- Logo Dj. --}}
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65px"
                             height="24px" viewBox="0 0 65 24">
                            <title>logo</title>
                            <g id="logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="logo_text" transform="translate(-36.000000, 0.000000)" fill="#fff"
                                   fill-rule="nonzero">
                                    <path
                                        d="M48.6861093,5.71509649 L48.6874605,5.71509649 L48.6874605,18.9564758 L45.2115984,18.9564758 L44.9136674,17.8144068 L44.814357,17.8144068 C44.3840101,18.2447538 43.8874633,18.5923365 43.3247019,18.8571655 C42.7619404,19.1219944 42.215739,19.2544068 41.6860812,19.2544068 C40.6598692,19.2544068 39.766085,18.9895819 39.0047019,18.4599241 C38.2433188,17.9302663 37.6557384,17.1771703 37.2419433,16.2006137 C36.8281481,15.2240571 36.6212536,14.0737238 36.6212536,12.7495793 C36.6212536,11.4419865 36.8612512,10.2957911 37.3412536,9.31095856 C37.821256,8.32612605 38.4502152,7.56889224 39.2281501,7.03923442 C40.0060851,6.5095766 40.8253872,6.24475166 41.6860812,6.24475166 C42.3150498,6.24475166 42.8488376,6.34819891 43.2874605,6.55509649 C43.6731629,6.73703161 44.0492614,6.99895532 44.4157645,7.34087397 L44.4157645,3.95628855 C44.5531669,2.41791493 45.9765942,1.64872813 48.6860465,1.64872813 L48.6861093,1.64872813 L48.6861093,5.71509649 Z M44.4171157,14.0496018 L44.4157645,14.0496018 L44.4157645,10.3152757 C43.9690827,9.9188324 43.4067801,9.72061373 42.7288398,9.72061373 C42.2322856,9.72061373 41.8184966,9.96061133 41.4874605,10.4406137 C41.1564244,10.9206161 40.9909088,11.6737121 40.9909088,12.6999241 C40.9909088,13.7757915 41.1481486,14.5578527 41.4626329,15.046131 C41.7771172,15.5344093 42.2322851,15.7785448 42.8281501,15.7785448 C43.1757381,15.7785448 43.4736661,15.7123385 43.7219433,15.5799241 C43.9702204,15.4475096 44.2019422,15.2157878 44.4171157,14.8847517 L44.4171157,14.0496018 Z M49.1349344,23.2740508 L49.136903,23.2732752 C51.0808208,22.5071082 52.0399322,20.9191061 52.0142373,18.5092691 C52.0142975,18.4929219 52.0143571,18.4764825 52.0143571,18.4599241 L52.0640122,6.5426827 L56.3343571,6.5426827 L56.2847019,18.3109586 C56.2847019,19.8833802 55.9122918,21.1619881 55.1674605,22.1468206 C54.4226292,23.1316531 53.1895381,23.624062 51.4681502,23.624062 C50.541249,23.624062 49.7633257,23.5082011 49.1343571,23.2764758 L49.1349344,23.2740508 Z M100.328777,18.9435563 C97.6193247,18.9435563 96.1958974,18.1743695 96.058495,16.6359959 L96.058495,6.5426827 L100.32884,6.5426827 L100.32884,18.9435563 L100.328777,18.9435563 Z M54.2048203,5.00337235 C53.5427481,5.00337235 52.9965466,4.80475365 52.5661997,4.40751029 C52.1358527,4.01026692 51.9206824,3.4971686 51.9206824,2.86819994 C51.9206824,2.23923128 52.1358527,1.72613296 52.5661997,1.3288896 C52.9965466,0.93164623 53.5427481,0.733027527 54.2048203,0.733027527 C54.8668926,0.733027527 55.4130941,0.93164623 55.843441,1.3288896 C56.273788,1.72613296 56.4889583,2.23923128 56.4889583,2.86819994 C56.4889583,3.4971686 56.273788,4.01026692 55.843441,4.40751029 C55.4130941,4.80475365 54.8668926,5.00337235 54.2048203,5.00337235 Z M59.2640122,6.5426827 L63.5343571,6.5426827 L63.5343571,18.9564758 L59.2640122,18.9564758 L59.2640122,6.5426827 Z M61.3991847,5.00337235 C60.7371124,5.00337235 60.1909109,4.80475365 59.760564,4.40751029 C59.330217,4.01026692 59.1150467,3.4971686 59.1150467,2.86819994 C59.1150467,2.23923128 59.330217,1.72613296 59.760564,1.3288896 C60.1909109,0.93164623 60.7371124,0.733027527 61.3991847,0.733027527 C62.0612569,0.733027527 62.6074584,0.93164623 63.0378053,1.3288896 C63.4681523,1.72613296 63.6833226,2.23923128 63.6833226,2.86819994 C63.6833226,3.4971686 63.4681523,4.01026692 63.0378053,4.40751029 C62.6074584,4.80475365 62.0612569,5.00337235 61.3991847,5.00337235 Z M66.6626329,6.5426827 L70.138495,6.5426827 L70.436426,8.03233787 L70.5357364,8.03233787 C71.1150496,7.48612824 71.7191815,7.05164983 72.3481502,6.7288896 C72.9771188,6.40612936 73.6805601,6.24475166 74.458495,6.24475166 C75.7826396,6.24475166 76.7591815,6.68750586 77.3881502,7.57302753 C78.0171188,8.4585492 78.3315985,9.70405398 78.3315985,11.3095793 L78.3315985,18.9564758 L74.0612536,18.9564758 L74.0612536,11.8557861 C74.0612536,11.094403 73.9660822,10.5730289 73.7757364,10.2916482 C73.5853906,10.0102675 73.2667731,9.86957925 72.8198743,9.86957925 C72.4557346,9.86957925 72.141255,9.93992338 71.876426,10.0806137 C71.6115971,10.2213041 71.2971175,10.4654396 70.9329778,10.8130275 L70.9329778,18.9564758 L66.6626329,18.9564758 L66.6626329,6.5426827 Z M81.360564,6.5426827 L84.8364261,6.5426827 L85.1343571,8.03233787 L85.2336674,8.03233787 C85.8129807,7.48612824 86.4171126,7.05164983 87.0460812,6.7288896 C87.6750499,6.40612936 88.3784911,6.24475166 89.1564261,6.24475166 C90.4805706,6.24475166 91.4571126,6.68750586 92.0860812,7.57302753 C92.7150499,8.4585492 93.0295295,9.70405398 93.0295295,11.3095793 L93.0295295,18.9564758 L88.7591847,18.9564758 L88.7591847,11.8557861 C88.7591847,11.094403 88.6640132,10.5730289 88.4736674,10.2916482 C88.2833217,10.0102675 87.9647041,9.86957925 87.5178054,9.86957925 C87.1536656,9.86957925 86.839186,9.93992338 86.5743571,10.0806137 C86.3095282,10.2213041 85.9950486,10.4654396 85.6309088,10.8130275 L85.6309088,18.9564758 L81.360564,18.9564758 L81.360564,6.5426827 Z M98.1936674,5.00337235 C97.5315952,5.00337235 96.9853937,4.80475365 96.5550467,4.40751029 C96.1246998,4.01026692 95.9095295,3.4971686 95.9095295,2.86819994 C95.9095295,2.23923128 96.1246998,1.72613296 96.5550467,1.3288896 C96.9853937,0.93164623 97.5315952,0.733027527 98.1936674,0.733027527 C98.8557397,0.733027527 99.4019411,0.93164623 99.8322881,1.3288896 C100.262635,1.72613296 100.477805,2.23923128 100.477805,2.86819994 C100.477805,3.4971686 100.262635,4.01026692 99.8322881,4.40751029 C99.4019411,4.80475365 98.8557397,5.00337235 98.1936674,5.00337235 Z"
                                        id="logo"/>
                                </g>
                            </g>
                        </svg>
                    </a>

                    <div>
                        <x-welcome.header-nav-button route="login" class="mr-2">
                            {{ __('Sign In') }}
                        </x-welcome.header-nav-button>
                        <x-welcome.header-nav-button route="register">
                            {{ __('Sign Up') }}
                        </x-welcome.header-nav-button>
                    </div>
                </nav>

                <div class="grid place-items-center grow text-center content-center">
                    <div class="relative">
                        <img src="{{ asset('storage/inbox@2x.png') }}"
                             alt="letter"
                             width="55"
                             height="45"
                        >
                        <img class="absolute animate-fade-in-down-400 opacity-0 min-w-[65px] -top-14 -right-4"
                             src="{{ asset('storage/inbox-magic-1@2x.png') }}"
                             alt="magic-star"
                             width="65"
                             height="73"
                        >
                        <img class="absolute animate-fade-in-down-800 opacity-0 min-w-[31px] -top-4"
                             src="{{ asset('storage/inbox-magic-2@2x.png') }}"
                             alt="magic-star"
                             width="31"
                             height="34"
                        >
                        <img class="absolute animate-fade-in-down-1200 opacity-0 min-w-[26px] -top-14 -left-3"
                             src="{{ asset('storage/inbox-magic-3@2x.png') }}"
                             alt="magic-star"
                             width="26"
                             height="37"
                        >
                    </div>

                    <div class="text-3xl font-bold mb-3 lg:text-5xl">
                        {{ __('Anonymous job search with Djinni') }}
                    </div>

                    <div>
                        <span id="typed" class="lg:text-xl inline-flex"></span>
                    </div>
                </div>
            </div>
            <div class="py-7 bg-[#0544ab] grid place-items-center">
                <a class="pt-1.5 pb-2 px-4 bg-[#0cb349] border border-theme-blue rounded-lg text-xl font-semibold
                hover:bg-[#0254b0]"
                   href="#">
                    {{ __('Get Started') }}
                    <span>--></span>
                </a>
            </div>
        </header>

        {{-- Main Page Content --}}
        <main>
            <div class="container text-lg pt-12 pb-2.5 lg:pt-20 lg:pb-12 text-center text-[#212529] max-w-[720px]
            lg:text-3xl lg:leading-[38px]">
                {{ __('You describe your work experience and what you\'re looking for in a job and let companies send you their
                offers. Only you decide who and when to open contacts.') }}
            </div>

            {{-- Section --}}
            <div class="pt-5 pb-9 lg:pb-14 border-b border-[#eee]">
                <h2 class="uppercase text-center text-[#777] font-bold text-[11px] tracking-[3.3px] leading-[13px] mb-6">
                    {{ __('Hiring on Djinni:') }}
                </h2>
                <div class="container grid grid-cols-2 con justify-items-center lg:flex lg:justify-between gap-5">
                    @foreach(range(1,6) as $item)
                        <div>
                            <img src="{{ asset('storage/globallogic@2x.png') }}"
                                 alt="company-logo"
                                 height="30"
                                 width="165"
                            >
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Section --}}
            <div class="pt-10 border-b border-[#eee]">
                <div class="container text-center md:text-left flex flex-col md:flex-row gap-5">
                    <x-welcome.faq path="storage/emoji-magic@2x.png">
                        <x-slot:title>{{ __('Why Djinni?') }}</x-slot:title>

                        {{ __('Djinni gives you the opportunity to do a passive and anonymous search - when recruiters
                              are looking for you. This reflects the realities of the labour market, where experienced
                              professionals are in constant demand.') }}
                    </x-welcome.faq>

                    <x-welcome.faq path="storage/emoji-dice@2x.png">
                        <x-slot:title>{{ __('How many offers will I get?') }}</x-slot:title>

                        {{ __('It strongly depends on your level, salary expectations and the city. Every week more
                              than 50,000 propositions pass through Djinni.') }}
                    </x-welcome.faq>

                    <x-welcome.faq path="storage/emoji-blinker@2x.png">
                        <x-slot:title>{{ __('Can my employer find me at Djinni?') }}</x-slot:title>

                        {{ __('No. All profiles are anonymous. You can decline a job without revealing your identity.') }}
                    </x-welcome.faq>
                </div>
            </div>

            {{-- Slider --}}
            <div class="splide py-9 md:py-20 flex justify-center" aria-labelledby="carousel-heading">
                <div class="relative w-screen max-w-screen-lg">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev absolute top-1/4 z-10">
                            <img class="object-contain h-9"
                                 src="{{ asset('storage/arrow-left@2x.png') }}"
                                 alt="arrow-left"
                                 width="35"
                                 height="35"
                            >
                        </button>
                        <button class="splide__arrow splide__arrow--next absolute right-0 top-1/4 z-10">
                            <img class="object-contain h-9"
                                 src="{{ asset('storage/arrow-right@2x.png') }}"
                                 alt="arrow-right"
                                 width="35"
                                 height="35"
                            >
                        </button>
                    </div>

                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach(range(1, 5) as $item)
                                <li class="splide__slide flex flex-col px-10">
                                    <blockquote class="jobs-push-reviews__quote text-center lg:text-xl">
                                        «Я вже двічі знаходив роботу на Джині і кожного разу все краще :) Так тримати!»
                                    </blockquote>
                                    <div class="flex justify-center mt-3">
                                        <img class="mr-2" src="{{ asset('storage/nikita.jpg') }}"
                                             alt="reviewer-photo"
                                             width="24"
                                        >
                                        <span class="text-sm lg:text-base text-[#555]">
                                            Дені Ординський, Product Designer
                                        </span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Section --}}
            <div class="py-12 lg:py-20 bg-[#481e98]">
                <div class="container flex flex-col items-center gap-y-4">
                    <img src="{{ asset('storage/emoji-hat@2x.png') }}"
                         alt="hat"
                         width="63"
                         height="53"
                    >
                    <h2 class="text-white font-medium text-[27px]">{{ __('Hire with Djinni') }}</h2>
                    <p class="text-white text-center max-w-screen-sm lg:text-lg">
                        {{ __('You pay 30% of the candidate\'s one-month salary, if you made a hire. That\'s it.
                                You also get a one-month guarantee – if the candidate was fired or quit after working
                                less than a month, our hiring bonus is cancelled, you pay nothing. ') }}
                    </p>
                    <a class="bg-none border border-white/50 text-xl text-white pt-1.5 pb-2 px-4 rounded-xl mt-6"
                       href="#">
                        {{ __('Start hiring') }}
                    </a>
                </div>
            </div>
        </main>

        {{-- Footer --}}
        <footer class="py-10">
            <div class="container">
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-7">
                    <div>
                        <h5 class="mb-2">
                            <a class="text-sm text-[#333] font-bold"
                               href="mailto:magic@djinni.co">magic@djinni.co</a>
                        </h5>

                        <ul class="grid gap-2 text-theme-blue text-sm">
                            <li>
                                <a href="/salaries">{{ __('Salaries') }}</a>
                            </li>
                            <li>
                                <a href="/pricing">{{ __('Terms of Use') }}</a>
                            </li>
                            <li>
                                <a href="/help/privacy">{{ __('Privacy') }}</a>
                            </li>
                            <li>
                                <a href="https://guide.djinni.co/?from=website" target="_blank">
                                    {{ __('Guide') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="mb-2 text-sm text-[#333] font-bold">
                            {{ __('Jobs by location') }}
                        </h5>

                        <ul class="grid gap-2 text-theme-blue text-sm">
                            <li>
                                <a href="/salaries">{{ __('Kyiv') }}</a>
                            </li>
                            <li>
                                <a href="/pricing">{{ __('Kharkiv') }}</a>
                            </li>
                            <li>
                                <a href="/help/privacy">{{ __('Lviv') }}</a>
                            </li>
                            <li>
                                <a href="/help/privacy">{{ __('Odesa') }}</a>
                            </li>
                            <li>
                                <a href="/help/privacy">{{ __('Dnipro') }}</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="mb-2 text-sm text-[#333] font-bold">
                            {{ __('By job title') }}
                        </h5>

                        <div class="flex gap-2">
                            <ul class="grid gap-2 text-theme-blue text-sm">
                                <li>
                                    <a href="/salaries">iOS</a>
                                </li>
                                <li>
                                    <a href="/pricing">Android</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">C++</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">Java</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">.NET</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">Project Manager</a>
                                </li>
                            </ul>

                            <ul class="grid gap-2 text-theme-blue text-sm">
                                <li>
                                    <a href="/salaries">Javascript</a>
                                </li>
                                <li>
                                    <a href="/pricing">PHP</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">Python</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">QA</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">Ruby</a>
                                </li>
                                <li>
                                    <a href="/help/privacy">DevOps</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex my-5 gap-x-2">
                    <img src="{{ asset('storage/logo_short.svg') }}" alt="djinni-logo" width="28">
                    <img src="{{ asset('storage/telegram.svg') }}" alt="icon-telegram" width="25">
                    <img src="{{ asset('storage/linkedin.svg') }}" alt="icon-linkedin" width="25">
                </div>

                <div class="flex">
                    <a class="mr-5 text-theme-blue text-sm" href="">English</a>
                    <span class="text-sm text-[#999]">© 2023 Djinni.co</span>
                </div>
            </div>
        </footer>
    </body>
</html>
