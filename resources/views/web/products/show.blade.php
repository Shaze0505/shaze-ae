@extends("web.layout.app")

@section("title", "$product->name - Shazé")

@section("content")
    <div class="z-10 relative">
        <section
            class="relative h-screen bg-black bg-[url('{{asset($product->banner ?? $product->cover_1)}}')] bg-cover bg-no-repeat before:content-[''] before:absolute before:bg-[rgba(0,0,0,0.6)] before:z-0 before:w-full before:h-full before:bottom-0"
        >
            <div class="lg:mx-40 mx-10 flex flex-col justify-center h-full z-10">
                <div class="flex flex-col gap-8 text-white lg:w-[550px]">
                    <h1 class="md:text-6xl text-4xl z-10">{{$product->name}}</h1>

                    <p class="md:text-xl text-xl z-10">
                        @if($product->banner_text)
                            {{$product->banner_text}}
                        @else
                            Tea time is a sacred ritual for which no ordinary brew ware will do. The Brewmaster is our dramatic take on a teapot with its hard-engineered base, contoured glass, a metal infuser, and an in-built timer.
                        @endif
                    </p>
                </div>
            </div>
        </section>

        <section
            data-section-white=""
            class="flex flex-col gap-20 md:py-32 py-16"
        >
            <h1 class="md:text-6xl text-4xl text-center">
                @if($product->slider_text)
                    {{$product->slider_text}}
                @else
                    A Gold Standard Quartet
                @endif
            </h1>


            <section id="drink-slider" class="splide py-5 flex flex-col gap-16">
                <div class="splide__track">
                    <ul class="splide__list"></ul>
                </div>

                <div
                    class="pagination flex gap-8 items-center justify-center text-xl mt-5"
                >
                    <button class="text-4xl pagination__prev">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true"
                            role="img"
                            class="iconify iconify--mdi iconify-inline"
                            width="1em"
                            height="1em"
                            preserveAspectRatio="xMidYMid meet"
                            viewBox="0 0 24 24"
                            style="vertical-align: -0.125em"
                            data-icon="mdi:chevron-left"
                        >
                            <path
                                fill="currentColor"
                                d="M15.41 16.58L10.83 12l4.58-4.59L14 6l-6 6l6 6l1.41-1.42Z"
                            ></path>
                        </svg>
                    </button>

                    <div class="flex gap-1">
                        <span class="pagination__current">1</span>

                        <span>/</span>

                        <span class="pagination__total">3</span>
                    </div>
                    <button class="text-4xl pagination__next">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            aria-hidden="true"
                            role="img"
                            class="iconify iconify--mdi iconify-inline"
                            width="1em"
                            height="1em"
                            preserveAspectRatio="xMidYMid meet"
                            viewBox="0 0 24 24"
                            style="vertical-align: -0.125em"
                            data-icon="mdi:chevron-right"
                        >
                            <path
                                fill="currentColor"
                                d="M8.59 16.58L13.17 12L8.59 7.41L10 6l6 6l-6 6l-1.41-1.42Z"
                            ></path>
                        </svg>
                    </button>
                </div>
            </section>
        </section>

        <section class="py-20" data-section-white="">
            <div class="container flex flex-col gap-14 px-20">
                <h1 class="md:text-5xl text-4xl">
                    Product Material & Manufacturing Brilliance
                </h1>

                <div class="grid md:grid-cols-2 gap-[10%] items-center">
                    <img src="{{asset($product->content_image ?? $product->cover_1)}}" class="h-auto object-cover" />

                    <div class="flex flex-col gap-10">
                        <h2 class="md:text-5xl text-4xl text-primary">
                            {{$product->content_header ?? $product->name}}
                        </h2>

                        <p class="text-xl">
                            @if($product->content_text)
                                {{$product->content_text}}
                            @else
                                The crystal set comprises of two glasses and two goblets, each
                                of which own distinctive shapes. Simply because inadvertently
                                someone drinks the other’s lager when their own ale is the way
                                to go.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section
            data-section-white=""
            class="grid md:grid-cols-[10fr_8fr] gap-[5%] items-start lg:py-20 lg:px-10 px-2 py-2"
        >
            <div class="flex flex-col gap-20">
                <section id="product-slider" class="splide py-5">
                    <div class="splide__track">
                        <ul class="splide__list"></ul>
                    </div>
                    <div
                        class="splide__arrows splide__arrows--ltr absolute w-full top-1/2 -translate-y-[50%]"
                    >
                        <button
                            class="splide__arrow splide__arrow--prev absolute text-2xl text-white rounded-r-full left-0 backdrop-filter-[10px] lg:w-[5rem] lg:h-[10rem] hover:w-[6rem] transition-all duration-300 bg-black/60 lg:pr-4"
                            type="button"
                            disabled=""
                            aria-label="Previous slide"
                            aria-controls="drink-slider-track"
                        >
                <span>
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      aria-hidden="true"
                      role="img"
                      class="iconify iconify--mdi iconify-inline"
                      width="1em"
                      height="1em"
                      preserveAspectRatio="xMidYMid meet"
                      viewBox="0 0 24 24"
                      style="vertical-align: -0.125em"
                      data-icon="mdi:arrow-right"
                  >
                    <path
                        fill="currentColor"
                        d="M4 11v2h12l-5.5 5.5l1.42 1.42L19.84 12l-7.92-7.92L10.5 5.5L16 11H4Z"
                    ></path>
                  </svg>
                </span>
                        </button>
                        <button
                            class="splide__arrow splide__arrow--next absolute text-2xl text-white rounded-l-full right-0 backdrop-filter-[10px] lg:w-[5rem] lg:h-[10rem] hover:w-[6rem] transition-all duration-300 bg-black/60 lg:pl-4"
                            type="button"
                            disabled=""
                            aria-label="Next slide"
                            aria-controls="drink-slider-track"
                        >
                <span>
                  <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      aria-hidden="true"
                      role="img"
                      class="iconify iconify--mdi iconify-inline"
                      width="1em"
                      height="1em"
                      preserveAspectRatio="xMidYMid meet"
                      viewBox="0 0 24 24"
                      style="vertical-align: -0.125em"
                      data-icon="mdi:arrow-right"
                  >
                    <path
                        fill="currentColor"
                        d="M4 11v2h12l-5.5 5.5l1.42 1.42L19.84 12l-7.92-7.92L10.5 5.5L16 11H4Z"
                    ></path>
                  </svg>
                </span>
                        </button>
                    </div>
                </section>

                @if($product->color || $product->material || $product->capacity || $product->height || $product->width || $product->length)
                    <div data-accordion class="text-2xl p-8 bg-gray-100 group">
                        <button
                            data-accordion-toggler
                            class="flex items-center justify-between w-full relative"
                        >
                            <span class="font-semibold text-3xl">Specifications</span>
                            <i
                                class="iconify iconify-inline opacity-100 group-[.is-active]:opacity-0 transition-all duration-300 absolute right-0"
                                data-icon="mdi:plus"
                            ></i>
                            <i
                                class="iconify iconify-inline opacity-0 group-[.is-active]:opacity-100 transition-all duration-300 absolute right-0"
                                data-icon="mdi:minus"
                            ></i>
                        </button>

                        <div
                            data-accordion-content
                            class="mt-0 flex flex-col gap-4 text-neutral-500 max-h-0 overflow-hidden transition-all duration-400"
                        >
                            @if($product->color)
                                <div class="flex items-center justify-between">
                                    <p>Color</p>
                                    <p>{{$product->color}}</p>
                                </div>
                            @endif
                            @if($product->material)
                                <div class="flex items-center justify-between">
                                    <p>Capacity</p>
                                    <p>{{$product->material}}</p>
                                </div>
                            @endif
                            @if($product->capacity)
                                <div class="flex items-center justify-between">
                                    <p>Capacity</p>
                                    <p>{{$product->capacity}}</p>
                                </div>
                            @endif
                            @if($product->height)
                                <div class="flex items-center justify-between">
                                    <p>Height</p>
                                    <p>{{$product->height}}</p>
                                </div>
                            @endif
                            @if($product->width)
                                <div class="flex items-center justify-between">
                                    <p>Width</p>
                                    <p>{{$product->width}}</p>
                                </div>
                            @endif
                            @if($product->length)
                                <div class="flex items-center justify-between">
                                    <p>Length</p>
                                    <p>{{$product->length}}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            <div class="flex flex-col gap-8 sticky top-[150px] select-none">
                <div
                    class="px-4 py-8 border-b-2 border-neutral-400 flex items-center gap-4 justify-center flex-wrap"
                >
                    <h2 class="text-4xl text-primary font-bold">AED {{number_format($product->price, 2)}}</h2>

                    <span>(Inclusive of all taxes)</span>
                </div>

                <div class="flex items-center justify-between">
                    @if($product->variants->count() > 0)
                        <div
                            data-select
                            class="relative min-w-[200px] border border-black rounded-full"
                        >
                            <div
                                data-select-placeholder
                                class="flex justify-between items-center w-full py-2 px-4 cursor-pointer"
                            >
                                <div data-select-placeholder-content></div>
                                <i class="iconify-inline" data-icon="mdi:chevron-down"></i>
                            </div>

                            <div
                                data-select-dropdown
                                class="absolute w-full left-0 top-[calc(100%+5px)] shadow rounded-full hidden overflow-hidden"
                            ></div>
                        </div>
                    @endif

                    <div
                        data-count
                        class="flex items-center text-2xl gap-8 justify-center mx-auto"
                    >
                        <div
                            data-minus
                            class="rounded-full w-10 h-10 border border-black flex items-center justify-center hover:text-primary hover:border-primary cursor-pointer"
                        >
                            <i class="iconify iconify-inline" data-icon="mdi:minus"></i>
                        </div>

                        <span data-value id="quantity">1</span>

                        <div
                            data-plus
                            class="rounded-full w-10 h-10 border border-black flex items-center justify-center hover:text-primary hover:border-primary cursor-pointer"
                        >
                            <i class="iconify iconify-inline" data-icon="mdi:plus"></i>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4 border-b-2 border-neutral-400 pb-10">
                    <button id="addToCard"
                        class="group py-2 border border-black text-black bg-white flex items-center justify-center gap-2 rounded-full hover:text-white hover:bg-primary hover:border-primary"
                    >
              <span class="flex items-center relative">
                <span
                    class="transition-all pr-[20px] group-hover:pl-[20px] group-hover:pr-0"
                >
                  Add to Cart
                </span>

                <i
                    class="iconify iconify-inline absolute right-0 transition-all group-hover:right-[calc(100%-15px)]"
                    data-icon="mdi:arrow-right"
                ></i>
              </span>
                    </button>

                    <button id="buyNow"
                        class="group py-2 border border-black text-white bg-black flex items-center justify-center gap-2 rounded-full hover:text-white hover:bg-primary hover:border-primary"
                    >
              <span class="flex items-center relative">
                <span
                    class="transition-all pr-[20px] group-hover:pl-[20px] group-hover:pr-0"
                >
                  Buy now
                </span>

                <i
                    class="iconify iconify-inline absolute right-0 transition-all group-hover:right-[calc(100%-15px)]"
                    data-icon="mdi:arrow-right"
                ></i>
              </span>
                    </button>
                </div>
                <button id="addToWishlist" class="group py-2 border border-black text-white bg-black flex items-center justify-center gap-2 rounded-full hover:text-white hover:bg-primary hover:border-primary" >
                        <span class="flex items-center relative">
                            <span id="addToWishlistText" class="transition-all pr-[20px] group-hover:pl-[20px] group-hover:pr-0" >
                              Add to wishlist
                            </span>
                            <i class="iconify iconify-inline absolute right-0 transition-all group-hover:right-[calc(100%-15px)]" data-icon="mdi:arrow-right" ></i>
                        </span>
                </button>
            </div>
        </section>
    </div>

@endsection

@section("js")
    <script>
        let product_id = {{$product->id}};
        const main_sliders = [
            "{{asset($product->slider_1 ?? $product->cover_1)}}",
            "{{asset($product->slider_2 ?? $product->cover_2)}}",
            "{{asset($product->slider_3 ?? $product->cover_1)}}",
        ]
        const variants = @json($variants);
    </script>
    {!! \App\Helpers\Helper::version("assets/js/product.js", "js") !!}
    <script>
        document.getElementById("addToCard").onclick = function() {
            let quantity = document.getElementById('quantity').innerHTML;
            addItemToCard(product_id, quantity);
        };
        document.getElementById("addToWishlist").onclick = function() {
            addOrRemoveItemToWishlist(product_id);
        };
        document.getElementById("buyNow").onclick = function() {
            let quantity = document.getElementById('quantity').innerHTML;
            location.href = "{{route("checkout")}}" + "?type=buyNow&product=" + product_id + "&quantity=" + quantity;
        };
        window.addEventListener('load', function () {
            changeWishlistText(product_id);
        });
    </script>
@endsection
