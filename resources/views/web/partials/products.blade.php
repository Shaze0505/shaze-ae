<div
    class="group/item cursor-pointer flex flex-col gap-6"
    data-product="1"
>
    <div class="relative product-div-img">

        <a class="" href="{{route("products.show", $product->slug)}}">
            <img
            data-product-image
            src="{{asset($product->cover_1)}}"
            class="absolute h-full w-full opacity-100 transition ease-in group-hover/item:opacity-0 object-cover object-center"
            alt="Shaze {{$product->name}} "
            />


            <img
                data-product-image-hover
                src="{{asset($product->cover_2)}}"
                class="absolute h-full w-full opacity-0 group-hover/item:opacity-100 transition ease-in object-cover object-center"
                alt="Shaze {{$product->name}} "
            />
        </a>
    </div>

    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-1">
            <p>{{$product->name}}</p>

            <p>AED {{number_format($product->price, 2)}}</p>
        </div>

        <div class="flex items-center justify-between">
            {{--                                <div class="flex items-center gap-2">--}}
            {{--                                    <div--}}
            {{--                                        class="w-3 h-3 rounded-full bg-[rgb(245_199_106)] border [&.is-active]:border-primary is-active"--}}
            {{--                                        data-product-variant="1"--}}
            {{--                                    ></div>--}}

            {{--                                    <div--}}
            {{--                                        class="w-3 h-3 rounded-full bg-[rgb(190_154_144)] border [&.is-active]:border-primary"--}}
            {{--                                        data-product-variant="2"--}}
            {{--                                    ></div>--}}
            {{--                                </div>--}}

            <a href="{{route("products.show", $product->slug)}}" class="flex items-center gap-1 border-black border px-4 py-2 rounded-full group-hover/item:opacity-100 hover:bg-primary hover:text-white hover:border-transparent transition ease-in group/button relative pr-10 transition ease-in" >
                                    <span class="block group-hover/button:translate-x-6">
                                      Know More
                                    </span>

                <i
                    class="iconify-inline inline absolute left-unset right-4 group-hover/button:left-4"
                    data-icon="mdi:arrow-right"
                ></i>
            </a>
        </div>
    </div>
</div>
