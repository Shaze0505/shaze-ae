@extends("web.layout.app")

@section("content")
    <div class="relative z-10">
        <section class="relative h-screen">
            <video
                data-video="hero-video"
                class="absolute w-full object-cover"
                id="hero-video"
                muted=""
                playsinline=""
                loop=""
                preload="none"
                poster="{{asset("assets/videos/banner-new.jpg")}}"
                autoplay
            >
                <source src="{{asset("assets/videos/banner-new.mp4")}}" />
            </video>

            <div
                class="absolute bottom-4 right-4 text-white flex items-center z-20"
            >
                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700"
                    data-video-button="hero-video"
                    data-video-button-action="pause"
                >
                    <i class="iconify-inline" data-icon="mdi:pause"></i>
                </button>

                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700 hidden"
                    data-video-button="hero-video"
                    data-video-button-action="play"
                >
                    <i class="iconify-inline" data-icon="mdi:play"></i>
                </button>

                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700"
                    data-video-button="hero-video"
                    data-video-button-action="unmute"
                >
                    <i class="iconify-inline" data-icon="mdi:mute"></i>
                </button>
                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700 hidden"
                    data-video-button="hero-video"
                    data-video-button-action="mute"
                >
                    <i class="iconify-inline" data-icon="mdi:volume"></i>
                </button>
            </div>

            <div
                class="flex flex-col justify-center items-center h-full gap-4 relative z-10 text-white"
            >
                <div class="flex flex-col gap-6 items-center text-center">
                    <p class="md:text-[51px] text-2xl -tracking-[1.28px]">
                        Welcome to the world of
                    </p>

                    <img
                        src="{{"assets/images/logo-white.png"}}"
                        class="md:w-[480px] w-full px-10"
                    />
                </div>
            </div>
        </section>

        <section class="text-white relative z-10 h-full bg-black transition-all">
            <div
                class="z-10 absolute top-0 w-full h-full z-5 bg-section-overlay pointer-events-none select-none"
            ></div>

            <img
                data-category-bg
                class="h-full w-full bg-black transition-all object-cover object-center absolute top-0 duration-300 opacity-100"
                src=""
            />

            <div class="h-full relative z-10 md:px-[116px] md:pt-[210px]">
                <div class="flex flex-col justify-between px-[8px] py-1 gap-10">
                    <div
                        class="flex md:flex-row flex-col w-full justify-between mt-[85px]"
                    >
                        <h1
                            class="md:text-6xl text-5xl font-medium flex flex-col gap-1 mb-[55px] md:w-1/2 md:leading-[1.2]"
                            style="font-size: 62px; font-weight: 400;"
                        >
                            Host Extraordinary Experiences
                        </h1>

                        <div
                            class="flex flex-col md:w-[35%] relative md:bottom-4 md:pl-8"
                        >
                            <div class="flex flex-col gap-6">
                                <h2 data-category-name class="text-3xl" style="font-size: 28px;">Wake Up and Smell the Coffee
                                </h2>

                                <p data-category-description class="text-md">
                                    Coffee brewing techniques • Choosing coffee grind • Coffee-making rituals
                                </p>
                            </div>

                            <button
                                class="w-fit group flex items-center text-3xl hover:text-primary relative mt-[28px] pr-[40px]"
                            >
                  <span
                      class="transition-all ease-in group-hover:translate-x-[40px]"
                  >Know More</span
                  >
                                <i
                                    class="iconify-inline transition-all ease-in absolute right-0 group-hover:right-[calc(100%-30px)]"
                                    data-icon="mdi:arrow-right"
                                ></i>

                                <div
                                    class="w-full h-[2px] bg-primary opacity-0 group-hover:opacity-100 absolute -bottom-[6px] transition-all ease-in"
                                ></div>
                            </button>
                        </div>
                    </div>

                    <section
                        id="drink-slider"
                        class="splide mt-[30px] pb-5 overflow-hidden splide--slide splide--ltr splide--draggable is-active is-initialized"
                        aria-roledescription="carousel"
                    >
                        <div
                            class="splide__track pb-4 splide__track--slide splide__track--ltr splide__track--draggable"
                            id="drink-slider-track"
                            style="padding-left: 0px; padding-right: 0px"
                            aria-live="polite"
                            aria-atomic="true"
                        >
                            <ul
                                class="splide__list items-end md:h-[300px] h-[150px]"
                                id="drink-slider-list"
                                role="presentation"
                            ></ul>
                        </div>

                        <div class="splide__arrows splide__arrows--ltr">
                            <button
                                class="splide__arrow splide__arrow--prev absolute -left-14 text-2xl text-white"
                                type="button"
                                disabled=""
                                aria-label="Previous slide"
                                aria-controls="drink-slider-track"
                            >
                  <span>
                    <i class="iconify-inline" data-icon="mdi:arrow-right"></i>
                  </span>
                            </button>
                            <button
                                class="splide__arrow splide__arrow--next absolute -right-14 text-2xl text-white"
                                type="button"
                                disabled=""
                                aria-label="Next slide"
                                aria-controls="drink-slider-track"
                            >
                  <span>
                    <i class="iconify-inline" data-icon="mdi:arrow-right"></i>
                  </span>
                            </button>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section
            class="h-screen relative z-5 bg-[url('./assets/images/home-caffeinator.jpg')] bg-no-repeat bg-cover bg-center pt-32"
        >
            <div
                class="container relative flex flex-col justify-end md:h-full md:pt-0 md:pb-20 pt-[240px] !px-10"
            >
                <div
                    class="flex items-center justify-between md:flex-row flex-col text-white pb-14 gap-4 text-center"
                >
                    <h1 class="md:text-7xl text-5xl leading-[1.4]">The Caffeinator</h1>

                    <a href="{{route("products.show", \App\Models\Product::find(2)->slug)}}" class="w-fit group flex items-center gap-2 md:text-3xl text-xl hover:text-primary relative" >
                        <span class="pr-[35px] transition ease-in group-hover:pr-0 group-hover:pl-[35px] text-3xl">Order now</span>
                        <i class="iconify-inline inline absolute right-0 w-[30px] group-hover:left-0 transition ease-in text-4xl" data-icon="mdi:arrow-right" ></i>
                        <div
                            class="w-full h-[2px] bg-primary hidden group-hover:block absolute -bottom-[6px]"
                        ></div>
                    </a>
                </div>
            </div>
        </section>

        <section
            class="h-screen relative z-5 bg-[url('./assets/images/home-brew.jpg')] bg-no-repeat bg-cover bg-center"
        >
            <div class="container h-full flex flex-col justify-end">
                <div
                    class="flex flex-col gap-8 text-white py-12 px-6 md:text-left text-center pb-28"
                >
                    <p class="md:text-3xl text-lg">Engineered for Style</p>

                    <h1 class="md:text-7xl text-5xl font-medium">The Brewmaster</h1>
                </div>
            </div>
        </section>

        <section
            class="lg:h-screen h-full relative z-5 bg-white lg:py-0"
            data-section-white
        >
            <div
                class="grid lg:grid-cols-[35%_65%] items-center grid-cols-1 h-full md:gap-20 lg:pr-0 md:px-12 px-4 py-16"
            >
                <div class="w-full flex flex-col gap-14 md:mt-[40px]">
                    <div class="flex flex-col gap-7">
                        <h1 class="md:text-5xl text-3xl leading-normal -tracking-[1.9px]">
                            Master the Art of Hosting
                        </h1>

                        <p class="opacity-60 text-lg mb-4">
                            Hosting nuances transform an experience. Dramatic fanfare
                            tempered with confident sophistry and ergonomic attention to
                            detail is a must. Add in masterful expertise and you’ll ace the
                            hosting game with Shazé.
                        </p>
                    </div>

                    <button
                        class="w-fit text-primary group flex items-center gap-2 text-2xl relative"
                    >
              <span
                  class="pr-[35px] transition ease-in group-hover:pr-0 group-hover:pl-[35px]"
              >More Videos & Articles</span
              >
                        <i
                            class="iconify-inline inline absolute right-0 w-[30px] group-hover:left-0 transition ease-in"
                            data-icon="mdi:arrow-right"
                        ></i>
                        <div
                            class="w-full h-[2px] bg-primary hidden group-hover:block absolute -bottom-[6px]"
                        ></div>
                    </button>
                </div>

                <div class="py-5 w-full overflow-hidden mt-24">
                    <section
                        id="employers-slider"
                        class="splide splide--slide splide--ltr splide--draggable is-active is-overflow is-initialized"
                        aria-roledescription="carousel"
                    >
                        <div class="splide__arrows splide__arrows--ltr">
                            <button
                                class="splide__arrow splide__arrow--prev"
                                type="button"
                                aria-label="Previous slide"
                                aria-controls="employers-slider-track"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 40 40"
                                    width="40"
                                    height="40"
                                    focusable="false"
                                >
                                    <path
                                        d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"
                                    ></path>
                                </svg></button
                            ><button
                                class="splide__arrow splide__arrow--next"
                                type="button"
                                aria-label="Next slide"
                                aria-controls="employers-slider-track"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 40 40"
                                    width="40"
                                    height="40"
                                    focusable="false"
                                >
                                    <path
                                        d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <div
                            class="splide__track md:h-[600px] h-[400px] splide__track--slide splide__track--ltr splide__track--draggable"
                            id="employers-slider-track"
                            style="padding-left: 0px; padding-right: 0px"
                            aria-live="polite"
                            aria-atomic="true"
                            aria-busy="false"
                        >
                            <ul
                                class="splide__list items-center"
                                id="employers-slider-list"
                                role="presentation"
                                style="transform: translateX(-930px)"
                            >
                                @foreach($masters as $master)
                                    <li
                                        class="splide__slide transition ease-in group lg:w-[290px] w-[200px] h-max aspect-[5/4]"
                                        id="employers-slider-slide01"
                                        role="group"
                                        aria-roledescription="slide"
                                        aria-label="1 of 11"
                                        style="margin-right: 20px"
                                        aria-hidden="true"
                                    >
                                        <div class="transition ease-in flex flex-col bg-card-fill md:pb-20 pb-10">
                                            <img
                                                src="{{asset($master->image)}}"
                                                class="aspect-[10/8] h-auto w-auto object-cover object-center group-[.is-active]:aspect-[9/10] transition-all ease-in"
                                            />

                                            <div class="flex flex-col gap-2 p-3">
                                                <h2 class="group text-lg  hover:text-primary transition ease-in cursor-pointer">
                                                    {{$master->title}}
                                                    <i class="iconify-inline inline" data-icon="mdi:chevron-right" ></i>
                                                </h2>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div
                            class="pagination flex gap-8 items-center justify-center text-xl mt-5"
                        >
                            <button class="text-4xl pagination__prev">
                                <i class="iconify-inline" data-icon="mdi:chevron-left"></i>
                            </button>

                            <div class="flex gap-1">
                                <span class="pagination__current">1</span>

                                <span>/</span>

                                <span class="pagination__total">{{$masters->count()}}</span>
                            </div>
                            <button class="text-4xl pagination__next">
                                <i class="iconify-inline" data-icon="mdi:chevron-right"></i>
                            </button>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="h-screen relative z-5" data-section-white>
            <video
                class="w-full h-full object-cover absolute"
                preload="none"
                playsinline
                muted
                autoplay
                loop
                data-video="doctor-video"
            >
                <source src="{{asset("assets/videos/doctor-video.mp4")}}" />
            </video>

            <div
                class="absolute bottom-4 right-4 text-white flex items-center z-10"
            >
                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700"
                    data-video-button="doctor-video"
                    data-video-button-action="pause"
                >
                    <i class="iconify-inline" data-icon="mdi:pause"></i>
                </button>

                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700 hidden"
                    data-video-button="doctor-video"
                    data-video-button-action="play"
                >
                    <i class="iconify-inline" data-icon="mdi:play"></i>
                </button>

                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700"
                    data-video-button="doctor-video"
                    data-video-button-action="unmute"
                >
                    <i class="iconify-inline" data-icon="mdi:mute"></i>
                </button>
                <button
                    class="cursor-pointer p-2 rounded-full transition ease-in hover:bg-neutral-700 hidden"
                    data-video-button="doctor-video"
                    data-video-button-action="mute"
                >
                    <i class="iconify-inline" data-icon="mdi:volume"></i>
                </button>
            </div>

            <div
                class="container relative flex flex-col md:justify-center justify-end h-full py-14"
            >
                <h1
                    class="md:text-4xl md:text-2xl w-full md:text-center md:font-bold text-white drop-shadow-lg shadow-black text-md pl-4"
                >
                    Our Design Philosophy
                </h1>
            </div>
        </section>

        <section
            class="relative z-5 bg-white flex flex-col gap-8 overflow-hidden"
            data-section-white
        >
            <div class="flex md:items-center justify-between md:flex-row flex-col flex-wrap gap-5 py-7 px-4" style="padding-top: 50px;">
                <h1 class="md:text-6xl text-4xl leading-[1.3]">Featured Products</h1>

                <button
                    class="w-fit group flex items-center gap-2 md:text-2xl text-lg md:text-primary md:hover:text-primary relative mr-16 md:bg-transparent md:p-0 md:rounded-none rounded-full text-white py-4 px-8 bg-primary relative"
                >
            <span
                class="md:pr-[50px] transition ease-in md:group-hover:pl-[50px] group-hover:pr-0"
            >
              <a href="{{route("products")}}" class="md:block hidden">View all products</a>

              <a href="{{route("products")}}" class="md:hidden block">View all products</a>
            </span>
                    <i
                        class="iconify-inline md:block md:text-primary text-white absolute right-4 group-hover:left-4 hidden"
                        data-icon="mdi:arrow-right"
                    ></i>
                    <div
                        class="w-full h-[2px] bg-primary hidden md:group-hover:block absolute -bottom-[6px] transition ease-in"
                    ></div>
                </button>
            </div>

            <section class="px-8 py-12 grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-8" data-section-white>
                @foreach($products as $product)
                    @include("web.partials.products")
                @endforeach
            </section>

        </section>

        @include("web.partials.showroom")
    </div>
@endsection

@section("js")
    <script>
        const categories = @json($categories);
    </script>
    {!! \App\Helpers\Helper::version("assets/js/home.js", "js") !!}
    {!! \App\Helpers\Helper::version("assets/js/products.js", "js") !!}
@endsection
