<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Binary Bloom</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Development css -->
    <link rel="stylesheet" href="src/css/style.css">

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('src/img/favicon.png') }}">
</head>

<body class="pt-20 font-sans text-base font-normal text-gray-700 dark:bg-gray-800 dark:text-gray-300">
    <!-- ========== { HEADER }==========  -->
    <header>
        <!-- Navbar -->
        <nav x-data="{ open: false }"
            class="nav-top flex flex-nowrap lg:flex-start items-center z-20 fixed top-0 left-0 right-0 bg-white dark:bg-gray-800 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
            <div class="container mx-auto px-4 xl:max-w-6xl ">
                <!-- mobile navigation -->
                <div class="flex flex-row justify-between py-3 lg:hidden">
                    <!-- logo -->
                    <a class="flex items-center py-2 ltr:mr-4 rtl:ml-4 text-xl" href="/">
                        {{-- <span class="text-4xl font-semibold dark:text-gray-100">Binary<span
                                class="text-blue-700">Bloom.</span></span> --}}
                        <img class="max-w-full h-12" src="{{ asset('assets/img/logo.PNG') }}" alt="Logo">
                    </a>

                    <!-- navbar toggler -->
                    <div class="ltr:right-0 rtl:left-0 flex items-center">
                        <!-- Mobile menu button-->
                        <button id="navbartoggle" type="button"
                            class="inline-flex items-center justify-center text-gray-800 hover:text-gray-700 dark:text-gray-200 dark:hover:text-gray-300 focus:outline-none focus:ring-0"
                            aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                            x-bind:aria-expanded="open.toString()">
                            <span class="sr-only">Mobile menu</span>
                            <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed"
                                class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>

                            <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed"
                                class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="lg:hidden fixed w-full h-full inset-0 z-40" id="mobile-menu" x-description="Mobile menu"
                    x-show="open" style="display: none;">
                    <!-- bg open -->
                    <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

                    <!-- Mobile navbar -->
                    <nav id="mobile-nav"
                        class="flex flex-col ltr:right-0 rtl:left-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-800 h-full overflow-auto z-40"
                        x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu"
                        aria-orientation="vertical" aria-labelledby="navbartoggle"
                        x-transition:enter="transform transition-transform duration-300"
                        x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition-transform duration-300"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                        <div class="mb-auto">
                            <!--logo-->
                            <div class="mh-18 text-center px-12 mb-8">
                                <a href="#" class="flex relative">
                                    {{-- <span class="text-4xl font-semibold px-4 dark:text-gray-200">Binary<span
                                            class="text-blue-700">Bloom.</span></span> --}}
                                    <img src="{{ asset('assets/img/logo.PNG') }}" class="max-w-full h-12"
                                        alt="logo">
                                    <span
                                        class="absolute -bottom-4 transform ltr:translate-x-1/2 rtl:-translate-x-1/2 w-20 h-0 border-t-2 border-opacity-50 border-blue-700 mx-auto"></span>
                                </a>
                            </div>

                            <!--navigation-->
                            <div class="mb-4">
                                <nav class="relative flex flex-wrap items-center justify-between">
                                    <ul id="side-menu" class="w-full float-none flex flex-col">
                                        <li class="relative">
                                            <a href="/"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">{{ __('message.home') }}</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/#about"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">{{ __('message.about') }}</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/#service"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">{{ __('message.service') }}</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/#portfolio"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">{{ __('message.portfolio') }}</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/blog"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">{{ __('Blog') }}</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/#contact"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">{{ __('message.contact') }}</a>
                                        </li>
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @mouseleave="open = false">
                                            <a id="dropdown-mega"
                                                class="group block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                                <span
                                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                                    :class="{ 'opacity-100': open }"></span>
                                                {{ __('message.language') }}
                                                <!-- caret -->
                                                <span class="inline-block ltr:ml-2 rtl:mr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem"
                                                        height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <!-- dropdown menu -->
                                            <div class="" style="min-width: 38rem; display:none"
                                                x-description="Dropdown menu" x-show="open" role="menu"
                                                aria-orientation="vertical" aria-labelledby="dropdown-mega"
                                                x-transition:enter="transition duration-200"
                                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                                x-transition:leave="transition translate-y-4"
                                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                                <div class="flex flex-wrap flex-row text-center">
                                                    <div class="flex-shrink w-full z-50 px-4">
                                                        <div class="py-5">
                                                            <form action="{{ route('lang') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="lang" value="fr">
                                                                <button type="submit"
                                                                    class="flex items-center w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">
                                                                    <div
                                                                        class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 rounded">
                                                                        <img class="w-8"
                                                                            src="{{ asset('assets/img/fr.png') }}"
                                                                            alt="fr">
                                                                    </div>
                                                                    <div class="">
                                                                        <p class="">Francais</p>
                                                                    </div>
                                                                </button>
                                                            </form>

                                                            <form action="{{ route('lang') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="lang" value="en">
                                                                <button type="submit"
                                                                    class="flex items-center w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">
                                                                    <div
                                                                        class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 rounded">
                                                                        <img class="w-8"
                                                                            src="{{ asset('assets/img/en.png') }}"
                                                                            alt="en">
                                                                    </div>
                                                                    <div class="">
                                                                        <p class="">English</p>
                                                                    </div>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- copyright -->
                        <div class="mt-5 text-center">
                            <p>Copyright <a href="#">BinaryBloom</a></p>
                        </div>
                    </nav>
                </div><!-- End Mobile menu -->

                <!-- desktop menu -->
                <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0"
                    id="desktp-menu">
                    <!-- logo -->
                    <a class="hidden lg:flex items-center py-2 ltr:mr-4 rtl:ml-4 text-xl" href="/">
                        {{-- <span class="text-4xl font-semibold dark:text-gray-100">Binary<span
                                class="text-blue-700">Bloom.</span></span> --}}
                        <img class="max-w-full h-12" src="{{ asset('assets/img/logo.PNG') }}" alt="Logo">
                    </a>

                    <!-- menu -->
                    <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0">
                        <!-- dropdown -->
                        <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                            @mouseleave="open = false">
                            <a id="dropdown-mega"
                                class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/" @mouseenter="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                    :class="{ 'opacity-100': open }"></span>
                                {{ __('message.home') }}
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/#about">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                {{ __('message.about') }}
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/#service">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                {{ __('message.service') }}
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/#portfolio">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                {{ __('message.portfolio') }}
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/blog">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                {{ __('Blog') }}
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/#contact">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                {{ __('message.contact') }}
                            </a>
                        </li>

                        <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                            @mouseleave="open = false">
                            <a id="dropdown-mega"
                                class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                    :class="{ 'opacity-100': open }"></span>
                                {{ __('message.language') }}
                                <!-- caret -->
                                <span class="inline-block ltr:ml-2 rtl:mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                        fill="currentColor" viewBox="0 0 512 512">
                                        <polyline points="112 184 256 328 400 184"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                    </svg>
                                </span>
                            </a>

                            <!-- dropdown menu -->
                            <div class="block absolute left-1/2 right-auto transform -translate-x-1/2 border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                                style="min-width: 38rem;display:none" x-description="Dropdown menu" x-show="open"
                                role="menu" aria-orientation="vertical" aria-labelledby="dropdown-mega"
                                x-transition:enter="transition duration-200"
                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                x-transition:leave="transition translate-y-4"
                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                <div class="flex flex-wrap flex-row text-center">
                                    <div class="flex-shrink w-64 px-4">
                                        <div class="py-5">
                                            <form action="{{ route('lang') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="lang" value="fr">
                                                <button type="submit"
                                                    class="flex items-center w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">
                                                    <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 rounded">
                                                        <img class="w-8" src="{{ asset('assets/img/fr.png') }}"
                                                            alt="fr">
                                                    </div>
                                                    <div class="drop-text">
                                                        <p class="fw-medium">Francais</p>
                                                    </div>
                                                </button>
                                            </form>

                                            <form action="{{ route('lang') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="lang" value="en">
                                                <button type="submit"
                                                    class="flex items-center w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">
                                                    <div class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 rounded">
                                                        <img class="w-8" src="{{ asset('assets/img/en.png') }}"
                                                            alt="en">
                                                    </div>
                                                    <div class="drop-text">
                                                        <p class="fw-medium">English</p>
                                                    </div>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- button -->
                    <div class="grid text-center lg:block my-4 lg:my-auto">
                        <a class="py-2 px-4 text-sm inline-block text-center rounded-md leading-normal text-gray-100 bg-blue-700 border  hover:text-white hover:bg-blue-800 hover:ring-0  focus:bg-blue-800  focus:outline-none focus:ring-0"
                            rel="noopener" href="#contact" style="background-color: #1096bd">
                            {{ __('message.devis') }}
                        </a>
                    </div>
                </div><!-- end desktop menu -->
            </div>
        </nav><!-- End Navbar -->
    </header><!-- end header -->

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- =========={ HERO }==========  -->
        <div id="hero" class="relative pt-12 pb-32 jarallax">
            <!-- background parallax -->
            <img class="jarallax-img" src="src/img-min/bg/bg-planet.jpg" alt="title">
            <!-- background overlay -->
            <div class="absolute top-0 left-0 w-full h-full opacity-90 bg-blue-700" style="z-index:-1;"></div>

            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 items-center justify-center">
                    <!-- content -->
                    <div class="max-w-full w-full lg:w-7/12 px-4">
                        <div class="mt-0 pt-6 text-center">
                            <h1 class="text-2xl md:text-3xl leading-normal mb-2 font-semibold text-white">Blog</h1>
                            <hr class="block w-12 h-0.5 mx-auto my-5 bg-yellow-300 border-yellow-300">
                        </div>
                    </div><!-- end content -->
                </div>
            </div>
        </div><!-- End hero -->

        <!-- article start -->
        <div class="relative pb-16">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg py-10 md:py-6 lg:py-12 px-12 -mt-24">
                    <div class="flex flex-wrap flex-row -mx-4 md:mt-2">
                        <div class="flex-shrink w-full max-w-full lg:w-8/12">
                            <!-- row -->
                            <div class="flex flex-wrap flex-row justify-center -mx-4">
                                <div class="flex-shrink w-full max-w-full md:w-1/2 px-3 md:px-4 lg:px-6">
                                    @if (count($posts) !== null)
                                        @foreach ($posts as $post)
                                            <!-- Card -->
                                            <div
                                                class="flex flex-col bg-white dark:bg-gray-800 mb-12 rounded overflow-hidden">
                                                <div class="relative overflow-hidden">
                                                    <a href="#">
                                                        <div
                                                            class="absolute inset-0 hover:bg-black opacity-0 transition duration-700 hover:opacity-20">
                                                        </div>
                                                        <img class="max-w-full h-auto"
                                                            src="src/img-min/blog/blog_1.jpg" alt="alt title">
                                                    </a>
                                                </div>
                                                <div class="pt-6 flex-1">
                                                    <div class="mb-2">
                                                        <h3
                                                            class="text-xl leading-normal mb-4 font-semibold text-gray-800 dark:text-gray-200">
                                                            <a href="#"
                                                                class="hover:text-blue-700 dark:hover:text-gray-100">{{ $post->title }}</a>
                                                        </h3>
                                                        <div class="text-gray-500">
                                                            <svg class="bi bi-calendar ltr:mr-2 rtl:ml-2 inline-block"
                                                                width=".8rem" height=".8rem" viewBox="0 0 16 16"
                                                                fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"
                                                                    clip-rule="evenodd"></path>
                                                                <path fill-rule="evenodd"
                                                                    d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg><span>{{ getFormattedDate($post->updated_at) }}</span>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Dolore ducimus est, excepturi nam odit
                                                        possimus.
                                                    </p>
                                                </div>
                                            </div><!-- End card -->
                                        @endforeach
                                    @else
                                        <h2>Nous travaillons pour vous offrir du contenu inédit</h2>
                                    @endif
                                </div>
                            </div><!-- end row -->

                            <div class="text-center mt-4">
                                <!-- center pagination -->
                                <nav aria-label="Page navigation">
                                    <ul x-data="{ item: '1' }" class="flex justify-center space-x-0">
                                        <li>
                                            <a :class="{ 'bg-blue-700 dark:bg-blue-700 text-gray-100': item === '1' }"
                                                @click="item = '1'"
                                                class="block relative py-3 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:text-gray-100 hover:bg-blue-700 dark:hover:bg-blue-700 -mr-0.5 ltr:rounded-l rtl:rounded-r"
                                                href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li><a :class="{ 'bg-blue-700 dark:bg-blue-700 text-gray-100': item === '2' }"
                                                @click="item = '2'"
                                                class="block relative py-3 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:text-gray-100 hover:bg-blue-700 dark:hover:bg-blue-700 -mr-0.5"
                                                href="#">1</a></li>
                                        <li><a :class="{ 'bg-blue-700 dark:bg-blue-700 text-gray-100': item === '3' }"
                                                @click="item = '3'"
                                                class="block relative py-3 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:text-gray-100 hover:bg-blue-700 dark:hover:bg-blue-700 -mr-0.5"
                                                href="#">2</a></li>
                                        <li><a :class="{ 'bg-blue-700 dark:bg-blue-700 text-gray-100': item === '4' }"
                                                @click="item = '4'"
                                                class="block relative py-3 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:text-gray-100 hover:bg-blue-700 dark:hover:bg-blue-700 -mr-0.5"
                                                href="#">3</a></li>
                                        <li>
                                            <a :class="{ 'bg-blue-700 dark:bg-blue-700 text-gray-100': item === '5' }"
                                                @click="item = '5'"
                                                class="block relative py-3 px-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 hover:text-gray-100 hover:bg-blue-700 dark:hover:bg-blue-700 -mr-0.5 ltr:rounded-r rtl:rounded-l"
                                                href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- sidebar -->
                        <div class="flex-shrink w-full max-w-full lg:w-1/3 lg:ltr:pl-16 lg:rtl:pr-16">
                            <aside class="sticky mt-12 lg:mt-0">
                                <!-- widget -->
                                <aside id="archives" class="mb-6">
                                    <h4
                                        class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">
                                        <span>Archives</span>
                                    </h4>
                                    <ul>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                September 2020
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">10</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                August 2020
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">14</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                July 2020
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">12</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                June 2020
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">11</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                May 2020
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">16</span>
                                            </a>
                                        </li>
                                    </ul>
                                </aside><!-- end widget -->

                                <!-- widget -->
                                <aside id="categories" class="widget mb-4">
                                    <h4
                                        class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">
                                        <span>Categories</span>
                                    </h4>
                                    <ul>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                Blogs
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">16</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                News
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">23</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                Update
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">15</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                Problem
                                                <span
                                                    class="text-sm py-1 px-2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20 text-blue-700 dark:text-gray-200 rounded">3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </aside><!-- end widget -->

                                <!-- widget -->
                                <aside id="meta" class="widget mb-4">
                                    <h4
                                        class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">
                                        <span>Meta</span>
                                    </h4>
                                    <ul>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                Log in
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                Entries feed
                                            </a>
                                        </li>
                                        <li>
                                            <a class="py-2 flex justify-between items-center hover:text-blue-700 dark:hover:text-gray-100"
                                                href="category.html">
                                                Comments feed
                                            </a>
                                        </li>
                                    </ul>
                                </aside><!-- end widget -->
                            </aside>
                        </div><!-- end sidebar -->
                    </div>
                </div>
            </div>
        </div><!-- End Blog -->
    </main><!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="container xl:max-w-6xl mx-auto px-4 pt-16 pb-5 lg:pb-16">
            <div class="flex flex-wrap flex-row -mx-4">
                <!-- left widget -->
                <div class="flex-shrink max-w-full w-full lg:w-1/3 px-4 mb-7 lg:mb-0">
                    <!-- Footer Content -->
                    <div class="leading-relaxed">
                        <h4 class="font-semibold text-xl mb-6 text-gray-200">{{ __('message.about') }}</h4>
                        {{-- <p class="mb-3">Tailwind template designer, we build web templates, themes and other
                            goodies, putting a lot of love in every pixel and design.</p> --}}
                        <p class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="inline-block ltr:mr-1 rtl:ml-1"
                                width="1.2rem" height="1.2rem">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Lundi - Samedi: 09:00 - 17:00
                        </p>
                        {{-- <p class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="inline-block ltr:mr-1 rtl:ml-1 transform ltr:rotate-0 rtl:-rotate-90"
                                width="1.2rem" height="1.2rem" viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M451,374c-15.88-16-54.34-39.35-73-48.76C353.7,313,351.7,312,332.6,326.19c-12.74,9.47-21.21,17.93-36.12,14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48,5.41-23.23,14.79-36c13.22-18,12.22-21,.92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9,44,119.9,47,108.83,51.6A160.15,160.15,0,0,0,83,65.37C67,76,58.12,84.83,51.91,98.1s-9,44.38,23.07,102.64,54.57,88.05,101.14,134.49S258.5,406.64,310.85,436c64.76,36.27,89.6,29.2,102.91,23s22.18-15,32.83-31a159.09,159.09,0,0,0,13.8-25.8C465,391.17,468,391.17,451,374Z"
                                    style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px">
                                </path>
                            </svg>
                            +(123) 456-7890
                        </p> --}}
                        <p class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block ltr:mr-1 rtl:ml-1"
                                width="1.2rem" height="1.2rem" viewBox="0 0 512 512">
                                <rect fill="currentColor" x="48" y="96" width="416" height="320" rx="40"
                                    ry="40"
                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                </rect>
                                <polyline fill="currentColor" points="112 160 256 272 400 160"
                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                </polyline>
                            </svg>
                            contact@binarybloom.tech
                        </p>
                    </div>
                </div>

                <!-- center widget -->
                <div class="flex-shrink max-w-full w-full lg:w-1/3 px-4 mb-7 lg:mb-0">
                    <!-- Footer Content -->
                    <div class="leading-relaxed">
                        <h4 class="font-semibold text-xl mb-6 text-gray-200">{{ __('message.link') }}</h4>
                        <div class="flex flex-wrap flex-row -mx-4">
                            <div class="flex-shrink max-w-full w-1/2 px-4">
                                <ul class="space-y-2">
                                    <li><a class="hover:text-gray-100" href="#about">{{ __('message.about') }}</a>
                                    </li>
                                    <li><a class="hover:text-gray-100" href="#contact">Contact</a></li>
                                    <li><a class="hover:text-gray-100" href="#">Privacy policy</a></li>
                                    <li><a class="hover:text-gray-100" href="#">CGU</a>
                                    </li>
                                    <li><a class="hover:text-gray-100" href="#">GDPR</a></li>
                                    {{-- <li><a class="hover:text-gray-100" href="career.html">Career</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- right widget -->
                <div class="flex-shrink max-w-full w-full lg:w-1/3 px-4 mb-7 lg:mb-0">
                    <!-- Footer Content -->
                    <div class="leading-relaxed">
                        <h4 class="font-semibold text-xl mb-6 text-gray-200">Newsletter</h4>
                        <p class="mb-6">{{ __('message.news') }}</p>
                        <!--form-->
                        <div class="mx-auto mb-7">
                            <form method="post" id="subscribe" class="relative" action="{{ route('subscribe') }}">
                                @csrf
                                <!-- input group -->
                                <div class="flex flex-wrap items-stretch w-full relative">
                                    <input type="email"
                                        class="flex-shrink flex-grow max-w-full leading-5 w-px flex-1 relative py-3 px-5 ltr:rounded-l-md rtl:rounded-r-md text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        name="email" required="" placeholder="Email"
                                        aria-label="subcribe newsletter">
                                    <div class="flex -mr-px">
                                        <button
                                            class="flex items-center py-3 px-5 -ml-1 ltr:rounded-r-md rtl:rounded-l-md leading-5 text-gray-100 bg-blue-700 border border-blue-700 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0"
                                            style="background-color: #1096bd; border-color: #1096bd"
                                            type="submit">{{ __('message.subscribe') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div><!--end form-->

                        <ul class="space-x-3">
                            <!--facebook-->
                            <li class="inline-block">
                                <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer"
                                    href="https://facebook.com/" title="Facebook">
                                    <!-- <i class="fab fa-facebook fa-2x"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <!--twitter-->
                            <li class="inline-block">
                                <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer"
                                    href="https://twitter.com/" title="Twitter">
                                    <!-- <i class="fab fa-twitter fa-2x"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <!--youtube-->
                            <li class="inline-block">
                                <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer"
                                    href="https://youtube.com/" title="Youtube">
                                    <!-- <i class="fab fa-youtube fa-2x"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M508.64,148.79c0-45-33.1-81.2-74-81.2C379.24,65,322.74,64,265,64H247c-57.6,0-114.2,1-169.6,3.6-40.8,0-73.9,36.4-73.9,81.4C1,184.59-.06,220.19,0,255.79q-.15,53.4,3.4,106.9c0,45,33.1,81.5,73.9,81.5,58.2,2.7,117.9,3.9,178.6,3.8q91.2.3,178.6-3.8c40.9,0,74-36.5,74-81.5,2.4-35.7,3.5-71.3,3.4-107Q512.24,202.29,508.64,148.79ZM207,353.89V157.39l145,98.2Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <!--VKontakte-->
                            <li class="inline-block">
                                <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer"
                                    href="https://vk.com/" title="VKontakte">
                                    <!-- <i class="fab fa-vk fa-2x"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M484.7,132c3.56-11.28,0-19.48-15.75-19.48H416.58c-13.21,0-19.31,7.18-22.87,14.86,0,0-26.94,65.6-64.56,108.13-12.2,12.3-17.79,16.4-24.4,16.4-3.56,0-8.14-4.1-8.14-15.37V131.47c0-13.32-4.06-19.47-15.25-19.47H199c-8.14,0-13.22,6.15-13.22,12.3,0,12.81,18.81,15.89,20.84,51.76V254c0,16.91-3,20-9.66,20-17.79,0-61-66.11-86.92-141.44C105,117.64,99.88,112,86.66,112H33.79C18.54,112,16,119.17,16,126.86c0,13.84,17.79,83.53,82.86,175.77,43.21,63,104.72,96.86,160.13,96.86,33.56,0,37.62-7.69,37.62-20.5V331.33c0-15.37,3.05-17.93,13.73-17.93,7.62,0,21.35,4.09,52.36,34.33C398.28,383.6,404.38,400,424.21,400h52.36c15.25,0,22.37-7.69,18.3-22.55-4.57-14.86-21.86-36.38-44.23-62-12.2-14.34-30.5-30.23-36.09-37.92-7.62-10.25-5.59-14.35,0-23.57-.51,0,63.55-91.22,70.15-122"
                                            style="fill-rule:evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <!--Linkedin-->
                            <li class="inline-block">
                                <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer"
                                    href="https://linkedin.com/" title="Linkedin">
                                    <!-- <i class="fab fa-linkedin fa-2x"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <!--instagram-->
                            <li class="inline-block">
                                <a target="_blank" class="hover:text-gray-100" rel="noopener noreferrer"
                                    href="https://instagram.com/" title="Instagram">
                                    <!-- <i class="fab fa-instagram fa-2x"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z">
                                        </path>
                                        <path fill="currentColor"
                                            d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z">
                                        </path>
                                        <path fill="currentColor"
                                            d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z">
                                        </path>
                                    </svg>
                                </a>
                            </li><!--end instagram-->
                        </ul>
                    </div><!-- End Footer Content -->
                </div><!-- end right widget -->
            </div>
        </div>
        <!-- copyright  -->
        <div class="container xl:max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap lg:flex-row -mx-4 border-t border-blue-200 border-opacity-10 py-9">
                <div class="w-full text-center">
                    <p>Copyright © BinaryBloom</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- =========={ SCROLL TO TOP }==========  -->
    <a href="#"
        class="back-top fixed p-4 rounded bg-gray-100 border border-gray-200 text-gray-500 dark:bg-gray-900 dark:border-gray-800 ltr:right-4 rtl:left-4 bottom-4 hidden"
        aria-label="Scroll To Top">
        <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd">
            </path>
            <path fill-rule="evenodd"
                d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z"
                clip-rule="evenodd"></path>
        </svg>
    </a>

    <!-- Start development js -->
    <!-- alpine js -->
    <script src="src/plugins/alpinejs/dist/cdn.min.js"></script>
    <!-- plugins js -->
    <script src="src/plugins/jarallax/dist/jarallax.min.js"></script>
    <script src="src/plugins/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="src/plugins/lightgallery.js/demo/js/lg-thumbnail.min.js"></script>
    <script src="src/plugins/lightgallery.js/demo/js/lg-video.js"></script>
    <script src="src/plugins/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="src/plugins/typed.js/lib/typed.min.js"></script>
    <script src="src/plugins/vanilla-lazyload/dist/lazyload.min.js"></script>
    <script src="src/plugins/hc-sticky/dist/hc-sticky.js"></script>
    <script src="src/plugins/wow.js/dist/wow.min.js"></script>
    <!-- theme js -->
    <script src="src/js/theme.js"></script>
    <!-- End development js -->

    <!-- Production js -->
    <!-- <script src="dist/js/scripts.js"></script> -->
</body>

<!-- Mirrored from tailpro.tailwindtemplate.net/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 14:07:53 GMT -->

</html>
