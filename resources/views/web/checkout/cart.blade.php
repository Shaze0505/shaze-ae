@extends("web.layout.app")

@section("title", "Cart - Shazé")

@section("content")
    <div class="relative z-10" data-section-white>
        @if(count($products) > 0)
            <section class="h-screen bg-neutral-100 pt-32">
                <div class="container flex flex-col gap-16">
                    <div
                        class="max-w-[500px] w-full mx-auto flex relative items-center md:text-sm text-xs text-center"
                    >
                        <div class="flex flex-col items-center flex-1 relative">
                            <div class="relative flex flex-col items-center gap-2">
                                <div
                                    class="flex before:content-[''] before:absolute before:w-full before:h-full before:border-[2px] before:border-primary before:rounded-full shrink-1"
                                >
                                    <div
                                        class="relative w-[1rem] h-[1rem] bg-primary rounded-full m-[0.5rem] min-h-[1rem] border-[2px] border-primary"
                                    ></div>
                                </div>
                            </div>
                            <p class="absolute top-full">Cart</p>
                        </div>

                        <div class="relative flex flex-col items-center flex-1">
                            <div
                                class="h-[2px] bg-primary w-full absolute left-[calc(-50%+0.5rem)] right-[calc(50%+0.5rem)] top-[1rem]"
                            ></div>

                            <div class="relative flex flex-col items-center gap-2">
                                <div class="flex shrink-1">
                                    <div
                                        class="relative w-[1rem] h-[1rem] bg-neutral-100 rounded-full m-[0.5rem] min-h-[1rem] border-[2px] border-primary"
                                    ></div>
                                </div>
                            </div>

                            <p class="absolute top-full">Shipping Information</p>
                        </div>

                        <div class="relative flex flex-col items-center flex-1 w-fit">
                            <div
                                class="h-[2px] bg-primary w-full absolute left-[calc(-50%+0.5rem)] right-[calc(50%+0.5rem)] translate-y-[1rem]"
                            ></div>

                            <div class="relative flex flex-col items-center gap-2">
                                <div class="flex shrink-1">
                                    <div
                                        class="relative w-[1rem] h-[1rem] bg-neutral-100 rounded-full m-[0.5rem] min-h-[1rem] border-[2px] border-primary"
                                    ></div>
                                </div>
                            </div>
                            <p class="absolute top-full">Payment</p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-[3fr_1fr] gap-8">
                        <div class="flex flex-col gap-4">
                            <div class="md:flex hidden gap-4">
                                <span class="w-[calc(((100%-80px)*3)/2)]">Product</span>
                                <span class="w-[calc(((100%-80px)*3)/6)]">Price</span>
                                <span class="w-[calc(((100%-80px)*3)/6)]">Quantity</span>
                                <span class="w-[calc(((100%-80px)*3)/6)]">Sub Total</span>
                            </div>

                            <div class="flex flex-col gap-4">
                                <div data-cart-product="1">
                                    @foreach($products as $product)
                                        <div
                                            class="sm:flex hidden items-center h-[100px] bg-white w-full rounded mb-5"
                                        >
                                            <div
                                                class="flex items-center gap-2 h-full w-[calc(((100%-80px)*3)/2)]"
                                            >
                                                <img class="h-full w-[100px] object-cover object-center" src="{{asset($product->cover_1)}}"
                                                />

                                                <p class="text-lg">{{$product->name}}</p>
                                            </div>

                                            <p class="w-[calc(((100%-80px)*3)/6)]">AED {{number_format($product->price, 2)}}</p>

                                            <div class="w-[calc(((100%-80px)*3)/6)]">
                                                <div
                                                    data-count-panel
                                                    class="w-fit flex items-center justify-center border border-black gap-4 rounded"
                                                >
                                                    <div class="cursor-pointer" data-minus-count="1">
                                                        <i
                                                            class="iconify-inline text-neutral-500"
                                                            data-icon="mdi:minus"
                                                        ></i>
                                                    </div>

                                                    <p data-count>{{$product->quantity}}</p>

                                                    <div class="cursor-pointer" data-plus-count="1">
                                                        <i
                                                            class="iconify-inline text-neutral-500"
                                                            data-icon="mdi:plus"
                                                        ></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="w-[calc(((100%-80px)*3)/6)]">AED {{number_format(($product->price * $product->quantity), 2)}}</p>
                                        </div>

                                        <div class="sm:hidden flex flex-col gap-2">
                                            <p>Product:</p>

                                            <div class="sm:hidden flex flex-col bg-white">
                                                <div class="flex gap-4 py-2 pr-4">
                                                    <img
                                                        src="{{asset($product->cover_1)}}"
                                                        class="w-[80px] h-[100px] object-cover object-center"
                                                    />

                                                    <div class="flex flex-col justify-between w-full">
                                                        <p>{{$product->name}}</p>

                                                        <div class="flex items-center justify-between">
                                                            <p>AED {{number_format($product->price, 2)}}</p>

                                                            <div
                                                                class="w-fit flex items-center justify-center border border-black gap-4 rounded"
                                                                data-count-panel
                                                            >
                                                                <div class="cursor-pointer" data-minus-count="1">
                                                                    <i
                                                                        class="iconify-inline text-neutral-500"
                                                                        data-icon="mdi:minus"
                                                                    ></i>
                                                                </div>

                                                                <p data-count>{{$product->quantity}}</p>

                                                                <div class="cursor-pointer" data-plus-count="1">
                                                                    <i
                                                                        class="iconify-inline text-neutral-500"
                                                                        data-icon="mdi:plus"
                                                                    ></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex p-4 border-t border-neutral-300">
                                                    <p>Subtotal: AED {{number_format(($product->price * $product->quantity), 2)}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <p>Summary</p>

                            <div class="bg-white rounded p-4 text-lg flex flex-col gap-4">
                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex items-center justify-between text-neutral-600"
                                    >
                                        <p>Shipping</p>

                                        <p>AED 0.00</p>
                                    </div>

                                    <div
                                        class="flex items-center justify-between text-neutral-600"
                                    >
                                        <p>Discount</p>

                                        <p>AED {{number_format($discount, 2)}}</p>
                                    </div>

                                    <div
                                        class="flex items-center justify-between text-black font-medium"
                                    >
                                        <p>Total:</p>

                                        <p>AED {{number_format($total, 2)}}</p>
                                    </div>

                                    <a href="{{route("checkout")}}"
                                        class="group mt-4 text-sm bg-black rounded-full text-white hover:bg-primary flex items-center justify-center py-2 px-4 gap-2"
                                    >
                                        <div class="relative flex items-center gap-2 pr-5">
                                          <span class="group-hover:translate-x-5 transition ease-in" >
                                            Checkout
                                          </span>

                                            <i
                                                class="iconify-inline absolute right-0 group-hover:left-0 transition ease-in"
                                                data-icon="mdi:arrow-right"
                                            ></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <div class="md:px-12 px-6 py-32 flex flex-col gap-4">
                <section class="sticky top-0 overflow-hidden">

                    <div class="flex flex-col items-center text-center gap-4 pt-32">
                        <i
                            class="iconify-inline text-6xl"
                            data-icon="clarity:shopping-cart-line"
                        ></i>

                        <h1 class="text-3xl">Your bag is empty</h1>

                        <p>Looks like you haven’t made your choice yet</p>

                        <a href="{{route("index")}}"
                           class="group mt-4 text-sm bg-black rounded-full text-white hover:bg-primary flex items-center justify-center py-2 px-4 gap-2"
                        >
                            <div class="relative flex items-center gap-2 pr-5">
                                <span class="group-hover:translate-x-5 transition ease-in">Start Shopping</span>

                                <i class="iconify-inline absolute right-0 group-hover:left-0 transition ease-in" data-icon="mdi:arrow-right" ></i>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        @endif
    </div>
@endsection

@section("js")
    <script src="{{asset("assets/js/cart.js")}}"></script>
@endsection
