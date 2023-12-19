<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield("title", "Shazé - A stunning experience in hosting")</title>

    {!! \App\Helpers\Helper::version("assets/js/iconify.min.js", "js") !!}
    {!! \App\Helpers\Helper::version("assets/js/gsap.min.js", "js") !!}
    {!! \App\Helpers\Helper::version("assets/js/ScrollTrigger.min.js", "js") !!}
    {!! \App\Helpers\Helper::version("assets/js/splide.min.js", "js") !!}
    {!! \App\Helpers\Helper::version("assets/styles/splide.min.css", "css") !!}
    {!! \App\Helpers\Helper::version("assets/js/tailwindcss.min.js", "js") !!}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "rgb(255, 130, 0)",
                        "image-overlay": "rgba(255, 130, 0, 0.4)",
                        "card-fill": "rgb(250, 250, 250)",
                    },
                    backgroundImage: {
                        "section-overlay":
                            "linear-gradient(0deg, rgb(0, 0, 0) 10%, rgba(0, 0, 0, 0.8) 25%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.1) 100%);",
                    },
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .container {
                @apply max-w-7xl w-full mx-auto px-2;
            }
        }
        @media only screen and (max-width: 600px) {
            #hero-video {
                height: 100%;
                width: auto;
            }
        }
    </style>
    {!! \App\Helpers\Helper::version("assets/styles/main.css", "css") !!}
    @yield("css")
</head>
<body class="relative overflow-x-hidden">
<div>
    <div
        data-menu="shop"
        role="menu"
        aria-expanded="false"
        class="opacity-0 fixed right-0 bottom-0 top-0 left-0 backdrop-blur-[30px] h-screen w-screen text-white transition duration-300 ease-in overflow-auto"
    >
        <div
            class="md:h-[90vh] bg-neutral-500 md:px-12 md:pt-[150px] p-4 -translate-y-full duration-300 ease-in"
        >
            <div class="flex justify-between md:hidden">
                <button
                    class="flex items-center gap-2"
                    data-close-menu-button="shop"
                >
                    <i
                        class="iconify inline-iconify text-xl"
                        data-icon="mdi:chevron-left"
                    ></i>

                    <span>Shop</span>
                </button>

                <button class="flex items-center gap-2" data-close-sidebar>
                    <span>Close</span>

                    <i
                        class="iconify inline-iconify text-xl"
                        data-icon="mdi:close"
                    ></i>
                </button>
            </div>

            <div class="grid md:grid-cols-2 md:m-0 mt-20 gap-10">
                <div class="flex md:flex-row flex-col md:gap-20 gap-10">
                    <div class="flex flex-col md:gap-16 gap-4" data-mobile-section>
                        <h3
                            class="md:text-4xl text-2xl flex items-center justify-between"
                        >
                            <span>Hosting</span>

                            <i
                                data-open-button
                                class="iconify inline-iconify md:hidden"
                                data-icon="mdi:plus"
                            ></i>

                            <i
                                data-close-button
                                class="iconify inline-iconify md:hidden hidden"
                                data-icon="mdi:minus"
                            ></i>
                        </h3>

                        <ul
                            role="menu"
                            aria-expanded="false"
                            class="md:flex md:max-h-full md:overflow-unset max-h-0 overflow-hidden flex flex-col gap-4 transition-all ease-in"
                        >
                            @foreach(\App\Models\Category::all() as $category)
                                <li>
                                    <a href="{{route("products", ["category" => $category->slug])}}" class="md:text-white text-gray-300">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    @foreach(\App\Models\Product::where("home_visible", 1)->take(2)->get() as $item)
                        <div class="flex flex-col gap-2">
                            <img
                                src="{{asset($item->cover_1)}}"
                                class="w-full h-[325px] object-cover object-center"
                            />

                            <a href="{{route("products.show", $item->slug)}}" class="flex flex-col text-lg">
                                <h3 class="text-primary font-semibold">{{$item->name}}</h3>

                                <p class="font-semibold">AED {{number_format($item->price, 2)}}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div
        data-menu="art"
        role="menu"
        aria-expanded="false"
        class="opacity-0 fixed right-0 bottom-0 top-0 left-0 backdrop-blur-[30px] h-screen w-screen text-white transition duration-300 ease-in overflow-auto"
    >
        <div
            class="md:h-[90vh] bg-neutral-500 md:px-12 md:pt-[150px] p-4 -translate-y-full duration-300 ease-in"
        >
            <div class="flex justify-between md:hidden">
                <button
                    class="flex items-center gap-2"
                    data-close-menu-button="art"
                >
                    <i
                        class="iconify inline-iconify text-xl"
                        data-icon="mdi:chevron-left"
                    ></i>

                    <span>Art of Hosting</span>
                </button>

                <button class="flex items-center gap-2" data-close-sidebar>
                    <span>Close</span>

                    <i
                        class="iconify inline-iconify text-xl"
                        data-icon="mdi:close"
                    ></i>
                </button>
            </div>

            <div class="grid md:grid-cols-2 md:m-0 mt-20 gap-10">
                <div class="flex md:flex-row flex-col md:gap-20 gap-10">
                    <div class="flex flex-col md:gap-16 gap-4" data-mobile-section>
                        <h3
                            class="md:text-4xl text-2xl flex items-center justify-between"
                        >
                            <span>Learn</span>

                            <i
                                data-open-button
                                class="iconify inline-iconify md:hidden"
                                data-icon="mdi:plus"
                            ></i>

                            <i
                                data-close-button
                                class="iconify inline-iconify md:hidden hidden"
                                data-icon="mdi:minus"
                            ></i>
                        </h3>

                        <ul
                            role="menu"
                            aria-expanded="false"
                            class="md:flex md:max-h-full md:overflow-unset max-h-0 overflow-hidden flex flex-col gap-4 transition-all ease-in"
                        >
                            <li>
                                <a href="#" class="md:text-white text-gray-300">How we do it</a>
                            </li>

                            <li>
                                <a href="#" class="md:text-white text-gray-300">How masters in action</a>
                            </li>

                            <li>
                                <a href="#" class="md:text-white text-gray-300">Trends in talk</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <img
                            src="https://d39rnfirskapn3.cloudfront.net/images/coffee-blog-banner-1700x765.jpg"
                            class="w-full h-[325px] object-cover object-center"
                        />

                        <div class="flex flex-col text-lg">
                            <h3 class="text-primary font-semibold">Awakening Wonders: Coffee Facts That Never Cease To Amaze</h3>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <img
                            src="https://d39rnfirskapn3.cloudfront.net/images/food-blog-images-1500x1000-04_0.jpg"
                            class="w-full h-[325px] object-cover object-center"
                        />

                        <div class="flex flex-col text-lg">
                            <h3 class="text-primary font-semibold">Culture Chronicles – Cheese; The Culinary Ambassador</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        id="search"
        class="fixed top-0 bottom-0 left-0 right-0 z-0 opacity-0 backdrop-blur-[30px] transition ease-in"
    >
        <section
            class="md:h-[90vh] fixed transition ease-in text-white w-full h-full left-0 p-4 bg-neutral-500 overflow-auto"
        >
            <div class="md:max-w-[85%] max-w-full mx-auto relative h-full">
                <div class="flex justify-end">
                    <button class="flex items-center gap-2" data-close-search>
                        <span>Close</span>

                        <i
                            class="iconify iconify-inline text-xl"
                            data-icon="mdi:close"
                        ></i>
                    </button>
                </div>

                <div class="flex items-center gap-2 border-b border-white relative">
                    <i
                        class="iconify-inline inline text-xl"
                        data-icon="mdi:search"
                    ></i>

                    <div class="flex items-center relative w-full flex-1">
                        <input
                            type="text"
                            class="w-full bg-transparent p-2 outline-none placeholder:text-white"
                            placeholder="Search"
                            data-search-modal-trigger
                            data-search-modal-input
                        />
                        <input type="hidden" id="searchUrl" value="{{route("products.search")}}">

                        <ul
                            id="spin-words"
                            class="gap-1 absolute left-16 overflow-hidden max-h-full h-[70px] pt-[10px]"
                        >
                            <li class="h-[70px] animate-[spinWords_10s_infinite]">
                                Brewmaster
                            </li>
                            <li class="h-[70px] animate-[spinWords_10s_infinite]">
                                Caffeinator
                            </li>
                            <li class="h-[70px] animate-[spinWords_10s_infinite]">
                                Dripper
                            </li>
                            <li class="h-[70px] animate-[spinWords_10s_infinite]">
                                Steamcatcher
                            </li>
                            <li class="h-[70px] animate-[spinWords_10s_infinite]">
                                Cups
                            </li>
                            <li class="h-[70px] animate-[spinWords_10s_infinite]">
                                Lavo
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    class="md:hidden flex gap-4 mt-14 text-sm overflow-x-auto whitespace-nowrap pb-2"
                >
              <span
                  data-mobile-search-section-button="suggestions"
                  class="block border-b-2 border-white p-1"
              >
                Trending Suggestions
              </span>

                    <span
                        data-mobile-search-section-button="products"
                        class="block border-white p-1"
                    >
                Featured Products
              </span>

                    <span
                        data-mobile-search-section-button="articles"
                        class="block border-white p-1"
                    >
                Top Videos & Articles</span
                    >
                </div>

                <div
                    data-mobile-search-content
                    class="mt-6 relative flex flex-col gap-10"
                >
                    <div class="flex flex-col gap-6">
                        <h2 class="md:block hidden text-3xl font-bold">
                            Trending Suggestions
                        </h2>

                        <div
                            data-mobile-search-section="suggestions"
                            class="opacity-100 flex flex-wrap gap-x-2 gap-y-4 top-0 w-full md:relative absolute"
                        >
                        @foreach(\App\Models\Product::take(8)->get() as $pop)
                            <span class="block rounded-full border border-white py-2 px-6">
                                {{\App\Helpers\Helper::getLongestWord($pop->name)}}
                            </span>
                        @endforeach
                        </div>
                    </div>

                    <div class="flex md:flex-row flex-col gap-10">
                        <div class="w-full flex flex-col gap-6">
                            <h2 class="md:block hidden text-3xl font-bold">
                                Featured Products
                            </h2>

                            <div
                                data-mobile-search-section="products"
                                class="md:opacity-100 opacity-0 grid md:grid-cols-3 grid-cols-2 gap-4 transition ease-in md:relative absolute top-0 w-full"
                            >
                                @foreach(\App\Models\Product::take(6)->get() as $feat)
                                    <a href="{{route("products.show", $feat->slug)}}" class="flex flex-col items-center gap-2">
                                        <img
                                            src="{{asset($feat->cover_1)}}"
                                            class="w-full h-auto"
                                        />

                                        <p>{{$feat->name}}</p>
                                    </a>
                                @endforeach

                            </div>
                        </div>

                        <div class="w-full flex flex-col gap-6">
                            <h2 class="md:block hidden text-3xl font-bold">
                                Top Articles & Videos
                            </h2>

                            <div
                                data-mobile-search-section="articles"
                                class="md:opacity-100 opacity-0 grid md:grid-cols-2 grid-cols-1 gap-4 md:relative absolute top-0 w-full"
                            >
                                <div class="flex flex-col items-center gap-2">
                                    <img
                                        src="{{asset("assets/images/blogs/1.png")}}"
                                        class="w-full h-auto"
                                    />

                                    <p class="line-clamp-1">
                                        Awakening Wonders: Coffee Facts That Never Cease To Amaze
                                    </p>
                                </div>

                                <div class="flex flex-col items-center gap-2">
                                    <img
                                        src="{{asset("assets/images/blogs/2.png")}}"
                                        class="w-full h-auto"
                                    />

                                    <p class="line-clamp-1">
                                        Culture Chronicles – Cheese; The Culinary Ambassador
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-search-results class="absolute top-[80px] w-full h-full z-0 opacity-0 bg-neutral-500 hidden" id="searchResult">

                </div>
            </div>
        </section>
    </div>

    <div
        id="sidebar"
        class="opacity-0 fixed top-0 bottom-0 right-0 left-0 bg-[rgba(0,0,0,0.5)] h-screen w-screen z-0 transition ease-in"
        role="menu"
        aria-expanded="false"
    >
        <aside class="h-full w-full bg-neutral-500 text-white py-4">
            <div class="flex justify-end mx-4">
                <button data-close-sidebar class="flex items-center gap-2">
                    <span>Close</span>

                    <i
                        class="iconify-inline inline text-xl"
                        data-icon="mdi:close"
                    ></i>
                </button>
            </div>

            <div class="flex items-center gap-2 border-b border-white mx-4">
                <i
                    class="iconify-inline inline md:hidden text-xl"
                    data-icon="mdi:search"
                ></i>

                <input
                    type="text"
                    class="w-full bg-transparent p-2 outline-none placeholder:text-white"
                    placeholder="Search Tea"
                    data-search-modal-trigger
                />
            </div>

            <section class="absolute left-0 w-full h-full bg-neutral-500">
                <ul class="flex flex-col gap-4 mt-10 px-4">
                    <li data-menu-button="shop">
                        <a href="javascript:void(0)" class="text-white font-bold text-3xl"> Shop </a>
                    </li>

                    <li data-menu-button="art">
                        <a class="text-white font-bold text-3xl"> Art of Hosting</a>
                    </li>

                    <li>
                        <a class="text-white font-bold text-3xl" href="{{route("experts")}}">
                            Experts' Circle
                        </a>
                    </li>

                    <li>
                        <a class="text-white font-bold text-3xl" href="{{route("about")}}">
                            About Us
                        </a>
                    </li>
                </ul>


                @guest()
                <div data-modal="account"
                    class="rounded-xl bg-neutral-400 flex items-center gap-4 justify-center p-4 my-6"
                >
                    <button data-modal-button="account"
                        class="rounded-full border border-white py-2 w-full max-w-[150px]"
                    >
                        Sign in
                    </button>

                    <button data-modal-button="account"
                        class="rounded-full border border-transparent bg-black py-2 w-full max-w-[150px]"
                    >
                        Sign up
                    </button>
                </div>

                @endguest

                <ul class="flex flex-col gap-6 px-4">
                    <li>
                        <a class="flex items-center gap-2">
                            <i
                                class="iconify iconify-inline text-2xl"
                                data-icon="mdi:search"
                            ></i>
                            <span>Search</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route("wishlist")}}" class="flex items-center gap-2">
                            <i
                                class="iconify iconify-inline text-2xl"
                                data-icon="mdi:heart-outline"
                            ></i>
                            <span>Wishlist</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route("cart")}}" class="flex items-center gap-2">
                            <i
                                class="iconify iconify-inline text-2xl"
                                data-icon="mdi:cart-outline"
                            ></i>
                            <span>Cart</span>
                        </a>
                    </li>

                    @auth()
                    <li>
                        <a href="{{route("profile.index")}}" class="flex items-center gap-2">
                            <i
                                class="iconify iconify-inline text-2xl"
                                data-icon="mdi:account-outline"
                            ></i>
                            <span>My Account</span>
                        </a>
                    </li>
                    @endauth
                </ul>
            </section>
        </aside>
    </div>

    <div
        aria-expanded="false"
        data-modal-element="account"
        class="opacity-0 fixed top-0 bottom-0 left-0 right-0 backdrop-blur-[30px] w-full h-full z-0 transition ease-in"
    >
        <div
            data-modal-element-content="account"
            class="fixed right-0 top-0 bottom-0 bg-white p-4 flex flex-col gap-10 registration-modal"
        >
            <div class="flex justify-end items-center">
                <button
                    class="flex items-center gap-2 text-xl"
                    data-modal-close="account"
                >
                    <span>Close</span>

                    <i class="iconify iconify-inline" data-icon="mdi:close"></i>
                </button>
            </div>

            <div class="flex flex-col items-center registration-modal-form" id="signInForm">
                <h1 class="text-3xl">Sign in</h1>

                <form class="flex flex-col items-center gap-8 w-full" method="POST" action="{{route("login")}}">
                    @csrf
                    <div class="flex flex-col items-center gap-6 w-full">
                        <input
                            type="email"
                            name="email"
                            class="w-full border-b p-2 border-gray-500 outline-none text-xl"
                            placeholder="Email Address"
                            required
                        />

                        <input
                            class="w-full border-b p-2 border-gray-500 outline-none text-xl"
                            placeholder="Password"
                            type="password"
                            name="password"
                            required
                        />

{{--                        <div class="flex justify-between items-center w-full">--}}
{{--                            <span>Remember me</span>--}}

{{--                            <a href="#" class="text-primary font-medium"--}}
{{--                            >Forgot password?</a--}}
{{--                            >--}}
{{--                        </div>--}}

                        <button
                            type="submit"
                            class="flex items-center justify-center gap-2 text-2xl text-white bg-black rounded-full py-4 px-16 hover:bg-primary"
                        >
                            <span>Sign in</span>

                            <i
                                class="iconify iconify-inline"
                                data-icon="mdi:arrow-right"
                            ></i>
                        </button>
                    </div>

                    <p class="text-2xl">Don't have Shaze account yet?</p>

                    <button id="signupButton"
                        class="flex items-center justify-center gap-2 text-2xl text-black bg-white border border-black rounded-full py-4 px-16 hover:bg-primary hover:text-white hover:border-white"
                    >
                        <span>Sign up</span>

                        <i
                            class="iconify iconify-inline"
                            data-icon="mdi:arrow-right"
                        ></i>
                    </button>
                </form>
            </div>
            <div class="flex flex-col items-center registration-modal-form hidden" id="signUpForm">
                <h1 class="text-3xl">Register</h1>

                <form class="flex flex-col items-center gap-8 w-full" method="POST" action="{{route("register")}}">
                    @csrf
                    <div class="flex flex-col items-center gap-6 w-full">
                        <input
                            type="text"
                            name="name"
                            class="w-full border-b p-2 border-gray-500 outline-none text-xl"
                            placeholder="Enter Name"
                            required
                        />

                        <input
                            type="text"
                            name="surname"
                            class="w-full border-b p-2 border-gray-500 outline-none text-xl"
                            placeholder="Enter Surname"
                            required
                        />

                        <input
                            type="email"
                            name="email"
                            class="w-full border-b p-2 border-gray-500 outline-none text-xl"
                            placeholder="Email Address"
                            required
                        />

                        <input
                            type="password"
                            name="password"
                            class="w-full border-b p-2 border-gray-500 outline-none text-xl"
                            placeholder="Password"
                            required
                            minlength="8"
                        />
                        <input
                            type="password"
                            name="password_confirmation"
                            class="w-full border-b p-2 border-gray-500 outline-none text-xl"
                            placeholder="Password Confirmation"
                            required
                            minlength="8"
                        />

                        <button
                            type="submit"
                            class="flex items-center justify-center gap-2 text-2xl text-white bg-black rounded-full py-4 px-16 hover:bg-primary"
                        >
                            <span>Sign up</span>

                            <i
                                class="iconify iconify-inline"
                                data-icon="mdi:arrow-right"
                            ></i>
                        </button>
                    </div>

                    <p class="text-2xl">Already have account?</p>

                    <button id="signinButton"
                        class="flex items-center justify-center gap-2 text-2xl text-black bg-white border border-black rounded-full py-4 px-16 hover:bg-primary hover:text-white hover:border-white"
                    >
                        <span>Sign in</span>

                        <i
                            class="iconify iconify-inline"
                            data-icon="mdi:arrow-right"
                        ></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <header
        class="fixed right-0 left-0 w-full md:z-40 z-20 bg-transparent text-white transition ease-in backdrop-blur-[30px] md:h-[110px] h-auto"
    >
        <div
            data-modal-element="cart"
            aria-expanded="false"
            class="absolute right-0 md:top-[40%] top-[80%] bg-white w-[300px] h-fit text-black p-4 rounded-3xl text-center flex flex-col gap-4 items-center opacity-0 hidden transition ease-in z-30"
        >
            <p class="text-3xl">Cart</p>

            <p>Cart is empty</p>
        </div>

        <div
            data-modal-element="wishlist"
            aria-expanded="false"
            class="absolute right-0 md:top-[40%] top-[80%] bg-white w-[300px] h-fit text-black p-4 rounded-3xl text-center flex flex-col gap-4 items-center opacity-0 hidden transition ease-in z-30"
        >
            <p class="text-3xl">Wishlist</p>

            <p>Wishlist is empty</p>

            <button
                class="rounded-3xl bg-primary py-2 px-4 text-white w-fit flex items-center gap-1"
            >
                <span>Sign in</span>

                <i class="iconify iconify-inline" data-icon="mdi:arrow-right"></i>
            </button>
        </div>

        <div class="container">
            <div
                class="flex md:flex-col justify-between items-center gap-2 fill-white w-full md:py-0 md:pt-4 py-8"
            >
                <div id="hamburger">
                    <i
                        class="iconify-inline inline md:hidden text-xl"
                        data-icon="mdi:menu"
                    ></i>
                </div>

                <a href="{{route("index")}}"
                ><img
                        id="header-logo"
                        src="{{asset("assets/images/logo-white.png")}}"
                        class="w-[95px]"
                    /></a>

                <a href="{{route("cart")}}">
                    <i
                        class="iconify-inline inline md:hidden text-xl"
                        data-icon="mdi:cart-outline"
                    ></i>
                </a>

                <ul class="md:flex hidden items-center gap-8 text-lg" style="font-weight: 500;">
                    <li data-menu-button="shop" class="pb-5 border-white" style="font-size: 16px;">
                        <a href="javascript:void(0)" class="hover:opacity-60 transition ease-in">
                            Shop
                        </a>
                    </li>

                    <li data-menu-button="art" class="pb-5 border-white" style="font-size: 16px;">
                        <a href="#" class="hover:opacity-60 transition ease-in">
                            Art of Hosting
                        </a>
                    </li>

                    <li class="pb-5">
                        <a href="{{route("experts")}}" class="hover:opacity-60 transition ease-in" style="font-size: 16px;">
                            Experts' Circle
                        </a
                        >
                    </li>

                    <li class="pb-5">
                        <a href="{{route("about")}}" class="hover:opacity-60 transition ease-in" style="font-size: 16px;"
                        >About Us</a
                        >
                    </li>
                </ul>

                <ul
                    class="md:flex hidden items-center gap-12 absolute right-[20px] top-6"
                >
                    <li>
                        <button data-search-modal-trigger>
                            <i
                                class="iconify iconify-inline"
                                data-icon="clarity:search-line"
                            >
                            </i>
                        </button>
                    </li>

                    <li>
                        <a href="{{route("wishlist")}}">
                            <button class="relative" id="wishlistIcon">
                                <i class="iconify iconify-inline" data-icon="clarity:heart-line" ></i>
                            </button>
                        </a>
                    </li>

                    <li data-modal="cart">
                        <a href="{{route("cart")}}">
                            <button class="relative" id="cartIcon">
                                <i class="iconify iconify-inline" data-icon="clarity:shopping-cart-line" > </i>
                            </button>
                        </a>
                    </li>

                    @guest()
                    <li data-modal="account">
                        <button data-modal-button="account">
                            <i
                                class="iconify iconify-inline"
                                data-icon="clarity:user-line"
                            >
                            </i>
                        </button>
                    </li>
                    @endguest
                    @auth()
                        <li>
                            <a href="{{route("profile.index")}}">
                                <i
                                    class="iconify iconify-inline"
                                    data-icon="clarity:user-line"
                                >
                                </i>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </header>
</div>

@yield("content")

<footer class="bg-black z-10 relative text-white pt-8 flex flex-col gap-6">
    <div class="px-10 pt-11 flex flex-col">
        <div class="bg-white w-full h-[1px]"></div>

        <div class="mt-8 flex md:gap-[165px] gap-10 md:flex-row flex-col">
            <div
                class="flex flex-col justify-between h-full md:border-0 border-b border-white py-3 pr-10"
            >
                <div class="flex flex-col">
                    <a href="{{route("index")}}" class="hover:opacity-60 transition ease-in">
                        <img src="{{asset("assets/images/logo-primary.png")}}" class="w-[120px]" />
                    </a>

                    <div class="flex flex-col gap-4 mt-[60px]">
                        <p>Follow Us</p>

                        <div class="flex items-center gap-3 text-2xl">
                            <a href="https://www.facebook.com/shazeUAE" target="_blank">
                                <i class="iconify-inline hover:opacity-60 transition ease-in cursor-pointer" data-icon="mdi:facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/shazeuae/" target="_blank">
                                <i class="iconify-inline hover:opacity-60 transition ease-in cursor-pointer" data-icon="ri:instagram-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/shazeuae/" target="_blank">
                                <i class="iconify-inline hover:opacity-60 transition ease-in cursor-pointer" data-icon="ri:snapchat-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/shazeuae/" target="_blank">
                                <i class="iconify-inline hover:opacity-60 transition ease-in cursor-pointer" data-icon="ic:baseline-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between w-full md:flex-row flex-col gap-4">
                <div
                    class="flex flex-col gap-5 py-1 group flex-1"
                    data-footer-menu-section
                >
                    <a class="flex justify-between items-center">
                        <h3 class="text-lg">Shop</h3>

                        <div class="block md:hidden">
                            <i
                                class="group-[.is-active]:hidden block iconify-inline inline text-2xl"
                                data-icon="mdi:plus"
                            ></i>

                            <i
                                class="group-[.is-active]:block hidden iconify-inline inline text-2xl"
                                data-icon="mdi:minus"
                            ></i>
                        </div>
                    </a>

                    <ul class="md:flex hidden flex-col gap-2 group-[.is-active]:flex">
                        @foreach(\App\Models\Category::all() as $category)
                            <li>
                                <a href="{{route("products", ["category" => $category->slug])}}" class="opacity-60 text-sm hover:opacity-100 transition ease-in" >{{$category->name}}</a
                                >
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div
                    class="flex flex-col gap-5 py-1 group flex-1"
                    data-footer-menu-section
                >
                    <a class="flex justify-between items-center">
                        <h3 class="text-lg">Art of Shopping</h3>

                        <div class="block md:hidden">
                            <i
                                class="group-[.is-active]:hidden block iconify-inline inline text-2xl"
                                data-icon="mdi:plus"
                            ></i>

                            <i
                                class="group-[.is-active]:block hidden iconify-inline inline text-2xl"
                                data-icon="mdi:minus"
                            ></i>
                        </div>
                    </a>

                    <ul class="md:flex hidden flex-col gap-2 group-[.is-active]:flex">
                        <li>
                            <a
                                href="#"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >How We Do It</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >The Masters in Action</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >Trends in Talk</a
                            >
                        </li>
                    </ul>
                </div>

                <div
                    class="flex flex-col gap-5 py-1 group flex-1"
                    data-footer-menu-section
                >
                    <a class="flex justify-between items-center">
                        <h3 class="text-lg">About us</h3>

                        <div class="block md:hidden">
                            <i
                                class="group-[.is-active]:hidden block iconify-inline inline text-2xl"
                                data-icon="mdi:plus"
                            ></i>

                            <i
                                class="group-[.is-active]:block hidden iconify-inline inline text-2xl"
                                data-icon="mdi:minus"
                            ></i>
                        </div>
                    </a>

                    <ul class="md:flex hidden flex-col gap-2 group-[.is-active]:flex">
                        <li>
                            <a
                                href="{{route("experts")}}"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >Experts</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route("about")}}"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >About Us</a
                            >
                        </li>
                    </ul>
                </div>

                <div
                    class="flex flex-col gap-5 py-1 group flex-1"
                    data-footer-menu-section
                >
                    <a class="flex justify-between items-center">
                        <h3 class="text-lg">Policies</h3>

                        <div class="block md:hidden">
                            <i
                                class="group-[.is-active]:hidden block iconify-inline inline text-2xl"
                                data-icon="mdi:plus"
                            ></i>

                            <i
                                class="group-[.is-active]:block hidden iconify-inline inline text-2xl"
                                data-icon="mdi:minus"
                            ></i>
                        </div>
                    </a>

                    <ul class="md:flex hidden flex-col gap-2 group-[.is-active]:flex">
                        <li>
                            <a
                                href="{{route("privacy")}}"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >Privacy Policy</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route("paymentPolicy")}}"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >Payment Policy</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route("shippingPolicy")}}"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >Shipping Policy</a
                            >
                        </li>
                        <li>
                            <a
                                href="{{route("delightPolicy")}}"
                                class="opacity-60 text-sm hover:opacity-100 transition ease-in"
                            >LifeTime Delight Policy</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-16 flex items-center flex-wrap gap-4" style="justify-content: center;">
            <div class="flex items-center flex-wrap gap-2">
                <img src="{{asset("assets/images/carts/visa.png")}}" style="height: 20px; width: auto;"/>
                <img src="{{asset("assets/images/carts/master.png")}}" style="height: 20px; width: auto;"/>
{{--                <img src="{{asset("assets/images/carts/esaad.jpg")}}" style="height: 20px; width: auto;"/>--}}
            </div>
        </div>

        <div class="mt-8 bg-white w-full h-[1px]"></div>
    </div>

    <p class="text-center opacity-60 text-xs pb-8">@Shaze Copyright 2023</p>
</footer>

<a target="_blank" href="https://api.whatsapp.com/send?phone=+971557070288&text=Hello, I'm writing from shaze.ae website." class="whatsapp-button">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z"/></svg>
</a>

<script>
    const LIGHT_LOGO = "{{asset("assets/images/logo-white.png")}}";
    const DARK_LOGO = "{{asset("assets/images/logo-black.png")}}";
</script>

{!! \App\Helpers\Helper::version("assets/js/cookie.min.js", "js") !!}
{!! \App\Helpers\Helper::version("assets/js/sweetalert.min.js", "js") !!}
{!! \App\Helpers\Helper::version("assets/js/main.js", "js") !!}
{!! \App\Helpers\Helper::version("assets/js/header.js", "js") !!}
{!! \App\Helpers\Helper::version("assets/js/footer.js", "js") !!}

@yield("js")

</body>
</html>
