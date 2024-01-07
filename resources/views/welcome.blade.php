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
                                    <img src="{{ asset('assets/img/logo.PNG') }}" class="max-w-full h-12" alt="logo">
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
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Accueil</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/#about"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">A Propos</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/#portfolio"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Portfolio</a>
                                        </li>
                                        <li class="relative">
                                            <a href="/#contact"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Contact</a>
                                        </li>
                                        {{-- <li class="relative">
                                            <a href="snippets//"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Snippets</a>
                                        </li> --}}

                                        <!-- dropdown with submenu-->
                                        {{-- <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @click.away="open = false">
                                            <a id="mobiledrop-04"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                                Pages
                                                <!-- caret -->
                                                <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="transform transition duration-300"
                                                        :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"
                                                        width=".8rem" height=".8rem" fill="currentColor"
                                                        viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <!-- dropdown menu -->
                                            <ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 mb-4"
                                                style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="mobiledrop-04">
                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="sidemenu-01"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="javascript:;" @click="open = !open"
                                                        aria-haspopup="true" x-bind:aria-expanded="open"
                                                        :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                                        Pages
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform transition duration-300"
                                                                :class="{
                                                                    'rotate-0': open,
                                                                    'ltr:-rotate-90 rtl:rotate-90': !
                                                                        open
                                                                }"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="112 184 256 328 400 184"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block rounded rounded-t-none top-full z-50 ltr:ml-3 rtl:mr-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="sidemenu-01">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="{{ route('about') }}">About</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="career.html">Career</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="contact.html">Contact</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="fax.html">Fax</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="portfolio.html">Portfolio</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="pricing.html">Pricing</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="services.html">Services</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="coming-soon.html">Coming soon</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="404.html">404</a></li>
                                                    </ul>
                                                </li><!--end submenu-->

                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="sidemenu-02"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="javascript:;" @click="open = !open"
                                                        aria-haspopup="true" x-bind:aria-expanded="open"
                                                        :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                                        Blogs
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform transition duration-300"
                                                                :class="{
                                                                    'rotate-0': open,
                                                                    'ltr:-rotate-90 rtl:rotate-90': !
                                                                        open
                                                                }"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="112 184 256 328 400 184"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block rounded rounded-t-none top-full z-50 ltr:ml-3 rtl:mr-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="sidemenu-02">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="category.html">Category</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="category-list.html">Category list</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="search.html">Search</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="author.html">Author</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="single-post.html">Single post</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="full-width-post.html">Full width</a></li>
                                                    </ul>
                                                </li><!--end submenu-->

                                                <!--submenu-->
                                                <li class="relative" x-data="{ open: false }"
                                                    @keydown.escape.stop="open = false" @click.away="open = false">
                                                    <a id="sidemenu-03"
                                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="javascript:;" @click="open = !open"
                                                        aria-haspopup="true" x-bind:aria-expanded="open"
                                                        :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                                        Users
                                                        <!-- caret -->
                                                        <span
                                                            class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="transform transition duration-300"
                                                                :class="{
                                                                    'rotate-0': open,
                                                                    'ltr:-rotate-90 rtl:rotate-90': !
                                                                        open
                                                                }"
                                                                width=".8rem" height=".8rem" fill="currentColor"
                                                                viewBox="0 0 512 512">
                                                                <polyline points="112 184 256 328 400 184"
                                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                    <!--dropdown submenu-->
                                                    <ul class="block rounded rounded-t-none top-full z-50 ltr:ml-3 rtl:mr-3 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800"
                                                        style="min-width: 12rem" x-description="Dropdown menu"
                                                        x-show="open" role="menu" aria-orientation="vertical"
                                                        aria-labelledby="sidemenu-03">
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="user-login.html">Login</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="user-register.html">Register</a></li>
                                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                                href="user-forgot.html">Forgot password</a></li>
                                                    </ul>
                                                </li><!--end submenu-->
                                            </ul>
                                        </li>

                                        <!-- dropdown -->
                                        <li class="relative" x-data="{ open: false }"
                                            @keydown.escape.stop="open = false" @click.away="open = false">
                                            <a id="mobiledrop-03"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="javascript:;" @click="open = !open" aria-haspopup="true"
                                                x-bind:aria-expanded="open"
                                                :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                                Docs
                                                <!-- caret -->
                                                <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="transform transition duration-300"
                                                        :class="{ 'rotate-0': open, 'ltr:-rotate-90 rtl:rotate-90': !open }"
                                                        width=".8rem" height=".8rem" fill="currentColor"
                                                        viewBox="0 0 512 512">
                                                        <polyline points="112 184 256 328 400 184"
                                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                                    </svg>
                                                </span>
                                            </a>

                                            <!-- dropdown menu -->
                                            <ul class="block rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 mb-4"
                                                style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                                role="menu" aria-orientation="vertical"
                                                aria-labelledby="mobiledrop-03">
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="docs//">Documentation</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="docs/components/alerts.html">Components</a>
                                                </li>
                                                <li class="relative">
                                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                        href="docs/started/changelog.html">Changelog</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="relative">
                                            <a href="docs/support.html"
                                                class="block py-3 px-4 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100">Support</a>
                                        </li> --}}
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
                                Accueil
                                <!-- caret -->
                                {{-- <span class="inline-block ltr:ml-2 rtl:mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                        fill="currentColor" viewBox="0 0 512 512">
                                        <polyline points="112 184 256 328 400 184"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                    </svg>
                                </span> --}}
                            </a>

                            <!-- dropdown menu -->
                            {{-- <div class="block absolute left-1/2 right-auto transform -translate-x-1/2 border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                                style="min-width: 38rem;display:none" x-description="Dropdown menu" x-show="open"
                                role="menu" aria-orientation="vertical" aria-labelledby="dropdown-mega"
                                x-transition:enter="transition duration-200"
                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                x-transition:leave="transition translate-y-4"
                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                <div class="flex flex-wrap flex-row text-center">
                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4">
                                        <div class="py-5">
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-advertising.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1rem"
                                                        height="1rem" fill="currentColor" class="bi bi-megaphone"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975l1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Advertising</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-branding.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-briefcase"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Branding</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-creative.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-lightbulb"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Creative</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-digital.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-laptop"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z">
                                                        </path>
                                                        <path
                                                            d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Digital</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-graphic.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-palette"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                                                        </path>
                                                        <path
                                                            d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Graphic</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-shrink w-full max-w-full md:w-1/2 px-4 bg-gray-50 dark:bg-gray-900">
                                        <div class="py-5">
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-marketing.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-bar-chart"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Marketing</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-mobile-app.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-app-indicator" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                                        </path>
                                                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Mobile App</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-seo.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-search"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">SEO</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-social-media.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-share"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Social Media</p>
                                                </div>
                                            </a>
                                            <a class="flex w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="index-web-design.html">
                                                <div
                                                    class="self-center ltr:mr-3 rtl:ml-3 py-2 px-3 bg-blue-700 text-white rounded">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-globe2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="drop-text">
                                                    <p class="fw-medium">Web Design</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-shrink w-full px-4 text-center border-t border-gray-200 dark:border-gray-900 dark:bg-opacity-40">
                                        <div class="p-4 text-sm">Pre-build landing pages for your professional Agency.
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </li>
                        {{-- <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="snippets//">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                Snippets
                            </a>
                        </li> --}}

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/#about">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                A Propos
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/#portfolio">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                Portfolio
                            </a>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="/#contact">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                Contact
                            </a>
                        </li>

                        <!-- dropdown with submenu-->
                        {{-- <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                            @mouseleave="open = false">
                            <a id="dropdown-02"
                                class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                    :class="{ 'opacity-100': open }"></span>
                                Pages
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
                            <ul class="block absolute left-1/2 right-auto transform -translate-x-1/2 border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                                style="min-width: 12rem;display:none" x-description="Dropdown menu" x-show="open"
                                role="menu" aria-orientation="vertical" aria-labelledby="dropdown-02"
                                x-transition:enter="transition duration-200"
                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                x-transition:leave="transition translate-y-4"
                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                <!--submenu-->
                                <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                    @mouseleave="open = false">
                                    <a id="submenu-01"
                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                        href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                        x-bind:aria-expanded="open"
                                        :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                        Pages
                                        <!-- caret -->
                                        <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="transform ltr:-rotate-90 rtl:rotate-90" width=".8rem"
                                                height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                                <polyline points="112 184 256 328 400 184"
                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                            </svg>
                                        </span>
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="block absolute ltr:left-full ltr:right-auto rtl:right-full rtl:left-auto transform border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                        style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                        role="menu" aria-orientation="vertical" aria-labelledby="submenu-01"
                                        x-transition:enter="transition duration-200"
                                        x-transition:enter-start="transform opacity-0 translate-y-4"
                                        x-transition:enter-end="transform opacity-100 translate-y-0"
                                        x-transition:leave="transition translate-y-4"
                                        x-transition:leave-start="transform opacity-100 translate-y-0"
                                        x-transition:leave-end="transform opacity-0 translate-y-4">
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="{{ route('about') }}">About</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="career.html">Career</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="contact.html">Contact</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="fax.html">Fax</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="portfolio.html">Portfolio</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="pricing.html">Pricing</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="services.html">Services</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="coming-soon.html">Coming soon</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="404.html">404</a></li>
                                    </ul>
                                </li><!--end submenu-->

                                <!--submenu-->
                                <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                    @mouseleave="open = false">
                                    <a id="submenu-02"
                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                        href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                        x-bind:aria-expanded="open"
                                        :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                        Blogs
                                        <!-- caret -->
                                        <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="transform ltr:-rotate-90 rtl:rotate-90" width=".8rem"
                                                height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                                <polyline points="112 184 256 328 400 184"
                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                            </svg>
                                        </span>
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="block absolute ltr:left-full ltr:right-auto rtl:right-full rtl:left-auto transform border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                        style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                        role="menu" aria-orientation="vertical" aria-labelledby="submenu-02"
                                        x-transition:enter="transition duration-200"
                                        x-transition:enter-start="transform opacity-0 translate-y-4"
                                        x-transition:enter-end="transform opacity-100 translate-y-0"
                                        x-transition:leave="transition translate-y-4"
                                        x-transition:leave-start="transform opacity-100 translate-y-0"
                                        x-transition:leave-end="transform opacity-0 translate-y-4">
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="category.html">Category</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="category-list.html">Category list</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="search.html">Search</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="author.html">Author</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="single-post.html">Single post</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="full-width-post.html">Full width</a></li>
                                    </ul>
                                </li><!--end submenu-->

                                <!--submenu-->
                                <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                                    @mouseleave="open = false">
                                    <a id="submenu-03"
                                        class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                        href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                        x-bind:aria-expanded="open"
                                        :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                        Users
                                        <!-- caret -->
                                        <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="transform ltr:-rotate-90 rtl:rotate-90" width=".8rem"
                                                height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                                <polyline points="112 184 256 328 400 184"
                                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                            </svg>
                                        </span>
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="block absolute ltr:left-full ltr:right-auto rtl:right-full rtl:left-auto transform border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right -mt-11 ml-0 mr-0 bg-white dark:bg-gray-800 shadow-md"
                                        style="min-width: 12rem" x-description="Dropdown menu" x-show="open"
                                        role="menu" aria-orientation="vertical" aria-labelledby="submenu-03"
                                        x-transition:enter="transition duration-200"
                                        x-transition:enter-start="transform opacity-0 translate-y-4"
                                        x-transition:enter-end="transform opacity-100 translate-y-0"
                                        x-transition:leave="transition translate-y-4"
                                        x-transition:leave-start="transform opacity-100 translate-y-0"
                                        x-transition:leave-end="transform opacity-0 translate-y-4">
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="user-login.html">Login</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="user-register.html">Register</a></li>
                                        <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                                href="user-forgot.html">Forgot password</a></li>
                                    </ul>
                                </li><!--end submenu-->
                            </ul>
                        </li>

                        <!-- dropdown -->
                        <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                            @mouseleave="open = false">
                            <a id="dropdown-01"
                                class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="javascript:;" @mouseenter="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open" :class="{ 'text-blue-700 dark:text-gray-100': open }">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"
                                    :class="{ 'opacity-100': open }"></span>
                                Docs
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
                            <ul class="block absolute left-1/2 right-auto transform -translate-x-1/2 border-t-2 border-blue-700 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white dark:bg-gray-800 shadow-md"
                                style="min-width: 12rem;display:none" x-description="Dropdown menu" x-show="open"
                                role="menu" aria-orientation="vertical" aria-labelledby="dropdown-01"
                                x-transition:enter="transition duration-200"
                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                x-transition:leave="transition translate-y-4"
                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                <li class="relative">
                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                        href="docs//">Documentation</a>
                                </li>
                                <li class="relative">
                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                        href="docs/components/alerts.html">Components</a>
                                </li>
                                <li class="relative">
                                    <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                        href="docs/started/changelog.html">Changelog</a>
                                </li>
                            </ul>
                        </li>

                        <li class="relative">
                            <a class="group block py-3 lg:py-7 px-6 hover:text-blue-700 focus:text-blue-700 dark:hover:text-gray-100 dark:focus:text-gray-100"
                                href="docs/support.html">
                                <span
                                    class="absolute bottom-4 ltr:left-1/2 rtl:right-1/2 transform ltr:-translate-x-1/2 rtl:translate-x-1/2 w-6 h-0.5 bg-blue-700 transition duration-700 ease-in-out opacity-0 group-hover:opacity-100"></span>
                                Support
                            </a>
                        </li> --}}
                    </ul>

                    <!-- button -->
                    <div class="grid text-center lg:block my-4 lg:my-auto">
                        <a class="py-2 px-4 text-sm inline-block text-center rounded-md leading-normal text-gray-100 bg-blue-700 border  hover:text-white hover:bg-blue-800 hover:ring-0  focus:bg-blue-800  focus:outline-none focus:ring-0"
                            rel="noopener" href="#contact" style="background-color: #1096bd">
                            Obtenir un devis
                        </a>
                    </div>
                </div><!-- end desktop menu -->
            </div>
        </nav><!-- End Navbar -->
    </header><!-- end header -->

    <!-- =========={ MAIN }==========  -->
    <main id="content">
        <!-- =========={ HERO }==========  -->
        <div id="hero" class="relative z-0 py-16 md:py-20">
            <!-- bg wrapper -->
            <div class="absolute inset-y-0 ltr:right-auto ltr:left-0 rtl:left-auto rtl:right-0 hidden lg:block w-1/3 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20"
                style="z-index:-1"></div>
            <div class="absolute inset-x-0 bottom-auto top-0 block lg:hidden h-full w-1/2 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20"
                style="z-index:-1"></div>
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <!-- content -->
                    <div class="flex-shrink max-w-full px-4 w-full sm:w-9/12 lg:w-1/2 self-center">
                        <img src="src/img-min/svg/creative.svg" class="w-full max-w-full h-auto"
                            alt="creative agency">
                    </div><!-- end content -->

                    <!-- text -->
                    <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
                        <div class="text-center lg:ltr:text-left lg:rtl:text-right mt-6 lg:mt-0">
                            <div class="mb-12">
                                <h1
                                    class="text-4xl leading-normal capitalize text-gray-800 dark:text-gray-100 font-semibold mb-4">
                                    Nous sommes <span class="font-bold text-blue-700" style="color: #1096bd">une agence digitale</span>
                                    spécialisée dans
                                    <span data-toggle="typed"
                                        data-options='{"strings": ["le design de logos", "le design web", "les applications mobiles"]}'></span>
                                </h1>
                                <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Nous vous
                                    guiderons vers un horizon d'idées illimité et propulserons votre marque au cœur d'un
                                    panorama global en constante évolution.</p>
                            </div>
                            <a class="mt-2 py-3 px-5 inline-block text-center rounded-md leading-normal text-gray-100 bg-blue-700 border border-blue-700 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0 ltr:mr-4 rtl:ml-4" style="background-color: #1096bd; border-color: #1096bd"
                                href="#service">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem"
                                    height="1.5rem" fill="currentColor" viewBox="0 0 512 512">
                                    <rect x="64" y="176" width="384" height="256" rx="28.87" ry="28.87"
                                        style="fill:none;stroke:currentColor;stroke-linejoin:round;stroke-width:32px">
                                    </rect>
                                    <line x1="144" y1="80" x2="368" y2="80"
                                        style="stroke:currentColor;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px">
                                    </line>
                                    <line x1="112" y1="128" x2="400" y2="128"
                                        style="stroke:currentColor;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px">
                                    </line>
                                </svg>
                                Nos Services
                            </a>

                            <a class="mt-2 py-3 px-5 inline-block text-center rounded-md leading-normal text-gray-800 bg-gray-100 border border-gray-100 hover:text-gray-900 hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0"
                                href="#portfolio">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-1" width="1.5rem"
                                    height="1.5rem" fill="currentColor" viewBox="0 0 512 512">
                                    <path
                                        d="M304,384V360c0-29,31.54-56.43,52-76,28.84-27.57,44-64.61,44-108,0-80-63.73-144-144-144A143.6,143.6,0,0,0,112,176c0,41.84,15.81,81.39,44,108,20.35,19.21,52,46.7,52,76v24"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="224" y1="480" x2="288" y2="480"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="208" y1="432" x2="304" y2="432"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="256" y1="384" x2="256" y2="256"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <path d="M294,240s-21.51,16-38,16-38-16-38-16"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                </svg>
                                Nos projets récents
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end Hero -->

        <!-- =========={ ABOUT}==========  -->
        <div id="about" class="relative z-0 py-20 lg:py-24 bg-white dark:bg-gray-800">
            <!-- bg wrapper -->
            <div class="absolute inset-y-0 ltr:left-auto ltr:right-0 rtl:right-auto rtl:left-0 hidden lg:block w-1/3 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20"
                style="z-index:-1"></div>
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row">
                    <!-- img block -->
                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 lg:order-2">
                        <img src="src/img-min/svg/creative-content.svg" class="w-full max-w-full h-auto"
                            alt="creative agency">
                    </div>

                    <!-- content block -->
                    <div class="flex-shrink max-w-full px-4 w-full lg:w-1/2 lg:order-1 my-auto">
                        <div
                            class="p-6 md:p-12 lg:p-16 lg:ltr:pl-0 text-center lg:ltr:text-left lg:rtl:pr-0 lg:rtl:text-right">
                            <h2 class="text-4xl leading-normal mb-4 font-semibold text-gray-800 dark:text-gray-100">
                                <span class="text-blue-700" style="color: #1096bd">Transformez vos idées en réalité
                                    digitale</span>
                            </h2>
                            <p class="text-gray-500 leading-relaxed font-light text-md mx-auto pb-2 text-justify"
                                style="text-align: justify;">
                                Chez BinaryBloom, nous sommes passionnés par l'innovation digitale et dédiés à offrir
                                des solutions sur mesure pour répondre à vos besoins spécifiques. Fort de ses 7 ans
                                d'expérience, Binary Bloom est une équipe dynamique de professionnels spécialisés dans
                                le développement web, mobile et le marketing digital.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end about -->

        <!-- =========={ Brand }==========  -->
        <div id="partner-brand" class="relative bg-white dark:bg-gray-800 py-12">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <div class="w-full px-4">
                        <!-- slider brand -->
                        <div class="nav-dark-button nav-primary-button nav-slider-hover"
                            data-flickity='{ "cellAlign": "left", "wrapAround": true, "adaptiveHeight": true, "pageDots": false, "imagesLoaded": true }'>
                            <div class="w-full sm:1-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-6 lg:px-8 text-center">
                                <a href="#" target="_blank">
                                    <img class="brands-image max-w-full h-auto" src="src/img-min/brand/img1.png"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:1-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-6 lg:px-8 text-center">
                                <a href="#" target="_blank">
                                    <img class="brands-image max-w-full h-auto" src="src/img-min/brand/img2.png"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:1-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-6 lg:px-8 text-center">
                                <a href="#" target="_blank">
                                    <img class="brands-image max-w-full h-auto" src="src/img-min/brand/img3.png"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:1-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-6 lg:px-8 text-center">
                                <a href="#" target="_blank">
                                    <img class="brands-image max-w-full h-auto" src="src/img-min/brand/img4.png"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:1-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-6 lg:px-8 text-center">
                                <a href="#" target="_blank">
                                    <img class="brands-image max-w-full h-auto" src="src/img-min/brand/img5.png"
                                        alt="Image Description">
                                </a>
                            </div>
                            <div class="w-full sm:1-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 px-6 lg:px-8 text-center">
                                <a href="#" target="_blank">
                                    <img class="brands-image max-w-full h-auto" src="src/img-min/brand/img6.png"
                                        alt="Image Description">
                                </a>
                            </div>
                        </div><!-- end slider brand -->
                    </div>
                </div>
            </div>
        </div><!-- End brand-->

        <!-- =========={ SERVICES }==========  -->
        <div id="service"
            class="relative pt-16 md:pt-24 pb-6 md:pb-12 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl md:text-3xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100">
                        <span class="font-light">Nos</span> Services
                    </h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-blue-700 border-blue-700">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">
                        Nous offrons un service de qualité supérieure pour répondre efficacement à vos besoins
                    </p>
                </header><!-- end section header -->

                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3">
                        <!-- service block -->
                        <div class="py-8 px-6 mb-12 shadow rounded bg-white dark:bg-gray-800 hover:shadow-xl transform transition duration-300 ease-in-out hover:-translate-y-2 wow fadeInUp"
                            data-wow-duration="1s">
                            <div class="text-blue-700 mb-6">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                    <path
                                        d="M419.1,337.45a3.94,3.94,0,0,0-6.1,0c-10.5,12.4-45,46.55-45,77.66,0,27,21.5,48.89,48,48.89h0c26.5,0,48-22,48-48.89C464,384,429.7,349.85,419.1,337.45Z"
                                        style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px" />
                                    <path
                                        d="M387,287.9,155.61,58.36a36,36,0,0,0-51,0l-5.15,5.15a36,36,0,0,0,0,51l52.89,52.89,57-57L56.33,263.2a28,28,0,0,0,.3,40l131.2,126a28.05,28.05,0,0,0,38.9-.1c37.8-36.6,118.3-114.5,126.7-122.9,5.8-5.8,18.2-7.1,28.7-7.1h.3A6.53,6.53,0,0,0,387,287.9Z"
                                        style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">Logo
                                Design</h3>
                            <p>Optez pour une identité visuelle distinctive et mémorable</p>
                        </div>
                        <!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3">
                        <!-- service block -->
                        <div class="py-8 px-6 mb-12 shadow rounded bg-white dark:bg-gray-800 hover:shadow-xl transform transition duration-300 ease-in-out hover:-translate-y-2 wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="text-blue-700 mb-6">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                    <rect x="48" y="96" width="416" height="304" rx="32.14" ry="32.14"
                                        style="fill:none;stroke:currentColor;stroke-linejoin:round;stroke-width:32px" />
                                    <line x1="16" y1="416" x2="496" y2="416"
                                        style="stroke:currentColor;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">Web
                                Design</h3>
                            <p>Optimisez votre présence en ligne avec un site internet</p>
                        </div>
                        <!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3">
                        <!-- service block -->
                        <div class="py-8 px-6 mb-12 shadow rounded bg-white dark:bg-gray-800 hover:shadow-xl transform transition duration-300 ease-in-out hover:-translate-y-2 wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="text-blue-700 mb-6">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                    <rect x="128" y="16" width="256" height="480" rx="48" ry="48"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                    <path
                                        d="M176,16h24a8,8,0,0,1,8,8h0a16,16,0,0,0,16,16h64a16,16,0,0,0,16-16h0a8,8,0,0,1,8-8h24"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px" />
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">App
                                Design</h3>
                            <p>Améliorez l'engagement des utilisateurs et facilitez l'accès aux services</p>
                        </div>
                        <!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3">
                        <!-- service block -->
                        <div class="py-8 px-6 mb-12 shadow rounded bg-white dark:bg-gray-800 hover:shadow-xl transform transition duration-300 ease-in-out hover:-translate-y-2 wow fadeInUp"
                            data-wow-duration="1s">
                            <div class="text-blue-700 mb-6">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                    <path d="M221.09,64A157.09,157.09,0,1,0,378.18,221.09,157.1,157.1,0,0,0,221.09,64Z"
                                        style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px" />
                                    <line x1="338.29" y1="338.29" x2="448" y2="448"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px" />
                                </svg>

                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">
                                Marketing Digitale</h3>
                            <p>Ciblez éfficacement votre audience et en générez une croissance stratégique</p>
                        </div>
                        <!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3">
                        <!-- service block -->
                        <div class="py-8 px-6 mb-12 shadow rounded bg-white dark:bg-gray-800 hover:shadow-xl transform transition duration-300 ease-in-out hover:-translate-y-2 wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="text-blue-700 mb-6">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                    <path
                                        d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z" />
                                    <path d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z" />
                                    <path
                                        d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z" />
                                </svg>

                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">
                                Communication Digitale</h3>
                            <p>Amplifiez votre visibilité et renforcez l'engagement de vos clients</p>
                        </div>
                        <!-- end service block -->
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3">
                        <!-- service block -->
                        <div class="py-8 px-6 mb-12 shadow rounded bg-white dark:bg-gray-800 hover:shadow-xl transform transition duration-300 ease-in-out hover:-translate-y-2 wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="text-blue-700 mb-6">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem"
                                    class="inline-block" fill="currentColor" viewBox="0 0 512 512">
                                    <path
                                        d="M430.11,347.9c-6.6-6.1-16.3-7.6-24.6-9-11.5-1.9-15.9-4-22.6-10-14.3-12.7-14.3-31.1,0-43.8l30.3-26.9c46.4-41,46.4-108.2,0-149.2-34.2-30.1-80.1-45-127.8-45-55.7,0-113.9,20.3-158.8,60.1-83.5,73.8-83.5,194.7,0,268.5,41.5,36.7,97.5,55,152.9,55.4h1.7c55.4,0,110-17.9,148.8-52.4C444.41,382.9,442,359,430.11,347.9Z"
                                        style="fill:none;stroke:currentColor;stroke-miterlimit:10;stroke-width:32px" />
                                    <circle cx="144" cy="208" r="32" />
                                    <circle cx="152" cy="311" r="32" />
                                    <circle cx="224" cy="144" r="32" />
                                    <circle cx="256" cy="367" r="48" />
                                    <circle cx="328" cy="144" r="32" />
                                </svg>

                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">
                                Graphic Design</h3>
                            <p>Renforcez l'impact visuel et la reconnaissance de votre marque</p>
                        </div>
                        <!-- end service block -->
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- End services -->

        <!-- =========={ PORTFOLIO }==========  -->
        <div id="portfolio" class="relative py-20 md:py-24 bg-white dark:bg-gray-800">
            <div x-data="{ tab: 'all' }" class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl md:text-3xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100">
                        <span class="font-light">Nos</span> Projets
                    </h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-blue-700 border-blue-700">
                </header><!-- end section header -->

                <!-- navigation -->
                <div class="space-x-5 text-center">
                    <button @click.prevent="tab = 'all'" :class="{ 'text-blue-700': tab === 'all' }"
                        class="inline-block  bg-transparent border-0 outline-none mb-6 md:mb-12 focus:text-blue-700 focus:ring-0 focus:outline-none text-blue-700">
                        Tout
                    </button>

                    <button @click.prevent="tab = 'web'" :class="{ 'text-blue-700': tab === 'web' }"
                        class="inline-block  bg-transparent border-0 outline-none mb-6 md:mb-12 focus:text-blue-700 focus:ring-0 focus:outline-none">
                        Web
                    </button>

                    <button @click.prevent="tab = 'graphic'" :class="{ 'text-blue-700': tab === 'graphic' }"
                        class="inline-block  bg-transparent border-0 outline-none mb-6 md:mb-12 focus:text-blue-700 focus:ring-0 focus:outline-none">
                        Graphic
                    </button>

                    <button @click.prevent="tab = 'mobile'" :class="{ 'text-blue-700': tab === 'mobile' }"
                        class="inline-block  bg-transparent border-0 outline-none mb-6 md:mb-12 focus:text-blue-700 focus:ring-0 focus:outline-none">
                        Mobile App
                    </button>
                </div><!-- end navigation -->

                <!-- Portfolio Content -->
                <div class="flex flex-wrap flex-row -mx-4 lightgallery-thumbnail">
                    <figure x-show="tab === 'web' || tab === 'all'"
                        data-src="{{ asset('assets/img/portfolio/ndoumbi.PNG') }}"
                        class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 group"
                        data-sub-html="title images">
                        <div class="relative h-48 overflow-hidden cursor-pointer mb-6">
                            <img class="block w-full h-auto transform duration-500 hover:scale-125"
                                src="{{ asset('assets/img/portfolio/ndoumbi.PNG') }}" alt="Image Description">
                            <figcaption
                                class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-blue-700 text-center" style="background-color: #1096bd;">
                                <h3 class="text-base leading-normal font-semibold my-1 text-gray-100">Ndoumbi - Conseil
                                    numérique</h3>
                                <small class="d-block"> <a href="https://ndoumbi.com/">Voir le site</a> </small>
                            </figcaption>
                        </div>
                    </figure>

                    <figure x-show="tab === 'web' || tab === 'all'"
                        data-src="{{ asset('assets/img/portfolio/traiteurlocal.PNG') }}"
                        class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 group"
                        data-sub-html="title images">
                        <div class="relative h-48 overflow-hidden cursor-pointer mb-6">
                            <img class="block w-full h-auto transform duration-500 hover:scale-125"
                                src="{{ asset('assets/img/portfolio/traiteurlocal.PNG') }}" alt="Image Description">
                            <figcaption
                                class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-blue-700 text-center" style="background-color: #1096bd;">
                                <h3 class="text-base leading-normal font-semibold my-1 text-gray-100">Traiteur Local -
                                    Plateforme culinaire
                                </h3>
                                <small class="d-block"> <a href="https://traiteurlocal.fr/">Voir le site</a> </small>
                            </figcaption>
                        </div>
                    </figure>

                    <figure x-show="tab === 'web' || tab === 'all'"
                        data-src="{{ asset('assets/img/portfolio/motemaxx.PNG') }}"
                        class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 group"
                        data-sub-html="title images">
                        <div class="relative h-48 overflow-hidden cursor-pointer mb-6">
                            <img class="block w-full h-auto transform duration-500 hover:scale-125"
                                src="{{ asset('assets/img/portfolio/motemaxx.PNG') }}" alt="Image Description">
                            <figcaption
                                class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-blue-700 text-center" style="background-color: #1096bd;">
                                <h3 class="text-base leading-normal font-semibold my-1 text-gray-100">Institut de
                                    beauté Motemaxx
                                </h3>
                                <small class="d-block"> <a href="https://institut-motemaxx.com/">Voir le site</a>
                                </small>
                            </figcaption>
                        </div>
                    </figure>

                    <figure x-show="tab === 'photo' || tab === 'all'"
                        data-src="{{ asset('assets/img/portfolio/avisclient.PNG') }}"
                        class="flex-shrink max-w-full px-4 w-full sm:w-1/2 lg:w-1/3 group"
                        data-sub-html="title images">
                        <div class="relative h-48 overflow-hidden cursor-pointer mb-6">
                            <img class="block w-full h-auto transform duration-500 hover:scale-125"
                                src="{{ asset('assets/img/portfolio/avisclient.PNG') }}" alt="Image Description">
                            <figcaption
                                class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-blue-700 text-center" style="background-color: #1096bd;">
                                <h3 class="text-base leading-normal font-semibold my-1 text-gray-100">Avis Client Pro
                                </h3>
                                <small class="d-block"> <a href="https://avisclientpro.com/">Voir le site</a> </small>
                            </figcaption>
                        </div>
                    </figure>

                    <figure x-show="tab === 'mobile' || tab === 'all'"
                        data-src="{{ asset('assets/img/portfolio/brain.jpg') }}"
                        class="flex-shrink max-w-full h-full px-4 w-full sm:w-1/2 lg:w-1/3 group"
                        data-sub-html="title images">
                        <div class="relative h-48 overflow-hidden cursor-pointer mb-6">
                            <img class="block h-full mx-auto w-autotransform duration-500 hover:scale-125"
                                src="{{ asset('assets/img/portfolio/brain.jpg') }}" alt="Image Description">
                            <figcaption
                                class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-blue-700 text-center" style="background-color: #1096bd;">
                                <h3 class="text-base leading-normal font-semibold my-1 text-gray-100">Brain - AI Search
                                </h3>
                                <small class="d-block"> <a href="">Télécharger l'application</a> </small>
                            </figcaption>
                        </div>
                    </figure>

                    <figure x-show="tab === 'mobile' || tab === 'all'"
                        data-src="{{ asset('assets/img/portfolio/plonge.jpg') }}"
                        class="flex-shrink max-w-full h-full px-4 w-full sm:w-1/2 lg:w-1/3 group"
                        data-sub-html="title images">
                        <div class="relative h-48 overflow-hidden cursor-pointer mb-6">
                            <img class="block h-full mx-auto w-autotransform duration-500 hover:scale-125"
                                src="{{ asset('assets/img/portfolio/plonge.jpg') }}" alt="Image Description">
                            <figcaption
                                class="absolute inset-x-0 bottom-0 h-20 transition-opacity duration-500 ease-in opacity-0 group-hover:opacity-100 overflow-hidden px-4 py-2 text-gray-100 bg-blue-700 text-center" style="background-color: #1096bd;">
                                <h3 class="text-base leading-normal font-semibold my-1 text-gray-100">Plongée Sous
                                    Marine
                                </h3>
                                <small class="d-block"> <a href="">Télécharger l'application</a> </small>
                            </figcaption>
                        </div>
                    </figure>

                </div>
            </div>

            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="w-full px-4 text-center mt-6">
                        <a href="#"
                            class="py-3 px-5 inline-block text-center rounded-md leading-normal text-gray-100 bg-blue-700 border border-blue-700 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0" style="background-color: #1096bd; border-color: #1096bd">Voir
                            tous nos projets</a>
                    </div>
                </div>
            </div>
        </div><!-- End portfolio -->

        <!-- =========={ REVIEWS }==========  -->
        <div id="reviews" class="relative py-16 md:py-24 bg-gray-50 dark:bg-gray-900 dark:bg-opacity-20">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl md:text-3xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-100">
                        <span class="font-light">Témoignages</span> Clients
                    </h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-blue-700 border-blue-700" style="background-color: #1096bd; border-color: #1096bd">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Ne croyez pas nos paroles,
                        regardez ce que les gens disent!</p>
                </header><!-- end section header -->

                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <div class="max-w-full px-4 w-11/12 md:w-full">
                        <!-- review slider -->
                        <div class="nav-dark-button"
                            data-flickity='{ "cellAlign": "left", "wrapAround": true, "adaptiveHeight": true, "pageDots": false }'>
                            <!-- item -->
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:px-12">
                                <!-- Reviews -->
                                <div class="mb-12 md:mb-2">
                                    <div class="w-full text-center">
                                        <div class="relative -mb-6 z-10">
                                            <img class="w-14 h-14 bg-white dark:bg-gray-800 border border-gray-200 rounded-full mx-auto"
                                                src="src/img-min/avatar/img1-small.jpg" alt="Image description">
                                        </div>
                                    </div>
                                    <div
                                        class="relative p-10 bg-white dark:bg-gray-800 shadow text-center rounded pt-12">
                                        <p class="mb-0">
                                            <span class="text-base font-semibold">Rafael Ezo</span>
                                        </p>
                                        {{-- <p class="mb-0"><span class="text-sm text-gray-500 ml-2">CEO One
                                                Company</span></p> --}}
                                        <blockquote>
                                            <ul class="flex my-2 mx-auto justify-center">
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                            </ul>
                                            <p class="text-gray-500">BinaryBloom a développé des fonctionnalités
                                                fantastiques.
                                                Ils soutiennent notre marque, réduisent le temps de production des
                                                travaux écrits et sont super.</p>
                                        </blockquote>
                                    </div>
                                </div><!-- End Reviews -->
                            </div>

                            <!-- item -->
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:px-12">
                                <!-- Reviews -->
                                <div class="mb-12 md:mb-2">
                                    <div class="w-full text-center">
                                        <div class="relative -mb-6 z-10">
                                            <img class="w-14 h-14 bg-white dark:bg-gray-800 border border-gray-200 rounded-full mx-auto"
                                                src="src/img-min/avatar/img2-small.jpg" alt="Image description">
                                        </div>
                                    </div>
                                    <div
                                        class="relative p-10 bg-white dark:bg-gray-800 shadow text-center rounded pt-12">
                                        <p class="mb-0">
                                            <span class="text-base font-semibold">Jessica Ramos</span>
                                        </p>
                                        {{-- <p class="mb-0"><span class="text-sm text-gray-500 ml-2">CEO Two
                                                Company</span></p> --}}
                                        <blockquote>
                                            <ul class="flex my-2 mx-auto justify-center">
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                            </ul>
                                            <p class="text-gray-500">
                                                Excellente équipe avec qui travailler, très accessible et toujours en
                                                mesure de répondre à toutes nos questions concernant le travail du
                                                projet.
                                            </p>
                                        </blockquote>
                                    </div>
                                </div><!-- End Reviews -->
                            </div>

                            <!-- item -->
                            <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 lg:px-12">
                                <!-- Reviews -->
                                <div class="mb-12 md:mb-2">
                                    <div class="w-full text-center">
                                        <div class="relative -mb-6 z-10">
                                            <img class="w-14 h-14 bg-white dark:bg-gray-800 border border-gray-200 rounded-full mx-auto"
                                                src="src/img-min/avatar/img3-small.jpg" alt="Image description">
                                        </div>
                                    </div>
                                    <div
                                        class="relative p-10 bg-white dark:bg-gray-800 shadow text-center rounded pt-12">
                                        <p class="mb-0">
                                            <span class="text-base font-semibold">Demian Berbaza</span>
                                        </p>
                                        {{-- <p class="mb-0"><span class="text-sm text-gray-500 ml-2">CEO Three
                                                Company</span></p> --}}
                                        <blockquote>
                                            <ul class="flex my-2 mx-auto justify-center">
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                                <li class="mr-3 text-yellow-300">
                                                    <!-- icon -->
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='18'
                                                        height='18' fill="currentColor" viewBox='0 0 512 512'>
                                                        <path class="rating-svg"
                                                            d='M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z' />
                                                    </svg>
                                                    <!-- <i class="fa fa-star"></i> -->
                                                </li>
                                            </ul>
                                            <p class="text-gray-500">Merci beaucoup pour votre travail sur la
                                                conception de notre logo
                                                et le développement de notre site Web. Ils nous ont vraiment aidés à
                                                arriver là où il faut.
                                            </p>
                                        </blockquote>
                                    </div>
                                </div><!-- End Reviews -->
                            </div>
                        </div><!-- end review slider -->
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- End Reviews -->

        <!-- =========={ CONTACT }==========  -->
        <div id="contact" class="relative py-16 bg-white dark:bg-gray-800">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full">
                        <div class="contact-area w-100 p-4">
                            <h3
                                class="text-2xl leading-normal font-semibold text-gray-800 dark:text-gray-100 mb-12 text-center">
                                Contactez Nous</h3>
                            <!-- contact form -->
                            <form action="{{ route('contact.store') }}" method="post">
                                @csrf
                                <div class="flex flex-wrap flex-row -mx-4">
                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
                                        <label class="inline-block mb-2" for="name">Nom</label>
                                        <input type="text" name="name" required
                                            class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            id="name">
                                        <div class="validate"></div>
                                    </div>
                                    <div class="flex-shrink w-full max-w-full md:w-1/2 px-4 mb-6">
                                        <label class="inline-block mb-2" for="email">Email</label>
                                        <input type="email" required
                                            class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                            name="email" id="email">
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label class="inline-block mb-2" for="subject">Objet</label>
                                    <input type="text" required
                                        class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        name="subject" id="subject">
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-6">
                                    <label class="inline-block mb-2" for="messages">Message</label>
                                    <textarea required
                                        class="w-full leading-5 relative py-3 px-5 rounded text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                        name="message" rows="10" id="messages"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="text-center mb-6">
                                    <button
                                        class="py-3 px-5 inline-block text-center rounded-md leading-normal text-gray-100 bg-blue-700 border border-blue-700 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0" style="background-color: #1096bd; border-color: #1096bd"
                                        type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem"
                                            fill="currentColor"
                                            class="ltr:mr-2 rtl:ml-2 inline-block transform ltr:rotate-0 rtl:-rotate-90"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="M53.12,199.94l400-151.39a8,8,0,0,1,10.33,10.33l-151.39,400a8,8,0,0,1-15-.34L229.66,292.45a16,16,0,0,0-10.11-10.11L53.46,215A8,8,0,0,1,53.12,199.94Z"
                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </path>
                                            <line x1="460" y1="52" x2="227" y2="285"
                                                style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                            </line>
                                        </svg>
                                        Envoyer
                                    </button>
                                </div>
                            </form><!-- end contact form -->
                        </div>
                    </div>

                    {{-- <div class="flex-shrink max-w-full px-4 w-full">
                        <div class="p-6">
                            <h3 class="text-2xl leading-normal font-semibold text-gray-800 mb-12 text-center">Our Maps
                            </h3>
                            <!-- maps responsive -->
                            <div class="relative overflow-hidden mb-6" style="padding-bottom: 75%">
                                <iframe class="absolute top-0 left-0 w-full h-full lazy"
                                    data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537389.2000627194!2d-105.93786665117793!3d41.18442046635789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sid!4v1585008753367!5m2!1sen!2sid"
                                    aria-label="Google maps" width="800" height="600" style="border:0;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div><!-- end maps responsive -->
                            <p class="mb-4"><b>Horaires</b>: Lundi - Samedi: 09:00 - 17:00 </p>
                            <p class="mb-4"><b>Phone Number</b>: +1 234 5678 90</p>
                            <p class="mb-4"><b>Email</b>: contact@binarybloom.tech</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div><!-- End contact -->
    </main><!-- end main -->

    <!-- =========={ FOOTER }==========  -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="container xl:max-w-6xl mx-auto px-4 pt-16 pb-5 lg:pb-16">
            <div class="flex flex-wrap flex-row -mx-4">
                <!-- left widget -->
                <div class="flex-shrink max-w-full w-full lg:w-1/3 px-4 mb-7 lg:mb-0">
                    <!-- Footer Content -->
                    <div class="leading-relaxed">
                        <h4 class="font-semibold text-xl mb-6 text-gray-200">A Propos</h4>
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
                        <h4 class="font-semibold text-xl mb-6 text-gray-200">Liens</h4>
                        <div class="flex flex-wrap flex-row -mx-4">
                            <div class="flex-shrink max-w-full w-1/2 px-4">
                                <ul class="space-y-2">
                                    <li><a class="hover:text-gray-100" href="#about">A propos</a>
                                    </li>
                                    <li><a class="hover:text-gray-100" href="#contact">Contact</a></li>
                                    <li><a class="hover:text-gray-100" href="#">Privacy policy</a></li>
                                    <li><a class="hover:text-gray-100" href="#">Conditions d'utilisation</a>
                                    </li>
                                    <li><a class="hover:text-gray-100" href="#">GDPR</a></li>
                                    {{-- <li><a class="hover:text-gray-100" href="career.html">Career</a></li> --}}
                                </ul>
                            </div>
                            {{-- <div class="flex-shrink max-w-full w-1/2 px-4">
                                <ul class="space-y-2">
                                    <li><a class="hover:text-gray-100" href="#">Latest post</a></li>
                                    <li><a class="hover:text-gray-100" href="#">Popular post</a></li>
                                    <li><a class="hover:text-gray-100" href="#">Blogs</a></li>
                                    <li><a class="hover:text-gray-100" href="#">Events</a></li>
                                    <li><a class="hover:text-gray-100" href="fax.html">Fax</a></li>
                                    <li><a class="hover:text-gray-100" href="category.html">Category</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- right widget -->
                <div class="flex-shrink max-w-full w-full lg:w-1/3 px-4 mb-7 lg:mb-0">
                    <!-- Footer Content -->
                    <div class="leading-relaxed">
                        <h4 class="font-semibold text-xl mb-6 text-gray-200">Newsletter</h4>
                        <p class="mb-6">Abonnez-vous à notre liste de diffusion pour recevoir des mises à jour
                            quotidiennes directement sur votre
                            boîte de réception !</p>
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
                                            class="flex items-center py-3 px-5 -ml-1 ltr:rounded-r-md rtl:rounded-l-md leading-5 text-gray-100 bg-blue-700 border border-blue-700 hover:text-white hover:bg-blue-800 hover:ring-0 hover:border-blue-800 focus:bg-blue-800 focus:border-blue-800 focus:outline-none focus:ring-0" style="background-color: #1096bd; border-color: #1096bd"
                                            type="submit">Souscrire</button>
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
    @include('sweetalert::alert')

    <!-- Production js -->
    <!-- <script src="dist/js/scripts.js"></script> -->
</body>

</html>
