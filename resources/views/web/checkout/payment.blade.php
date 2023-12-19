@extends("web.layout.app")

@section("title", "Checkout - Shazé")

@section("content")
    <form id="paymentForm" action="{{route("purchase")}}" method="POST">
        @csrf
        <div class="relative z-10" data-section-white>
            <section class="py-32">
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
                            <p class="absolute top-full">Payment</p>
                        </div>

                        <div class="relative flex flex-col items-center flex-1">
                            <div
                                class="h-[2px] bg-primary w-full absolute left-[calc(-50%+0.5rem)] right-[calc(50%+0.5rem)] top-[1rem]"
                            ></div>

                            <div class="relative flex flex-col items-center gap-2">
                                <div
                                    class="flex before:content-[''] before:absolute before:w-full before:h-full before:border-[2px] before:border-primary before:rounded-full shrink-1"
                                >
                                    <div
                                        class="relative w-[1rem] h-[1rem] bg-primary rounded-full m-[0.5rem] min-h-[1rem] border-[2px] border-primary"
                                    ></div>
                                </div>
                            </div>

                            <p class="absolute top-full">Shipping Information</p>
                        </div>

                        <div class="relative flex flex-col items-center flex-1">
                            <div
                                class="h-[2px] bg-primary w-full absolute left-[calc(-50%+0.5rem)] right-[calc(50%+0.5rem)] top-[1rem]"
                            ></div>

                            <div class="relative flex flex-col items-center gap-2">
                                <div
                                    class="flex before:content-[''] before:absolute before:w-full before:h-full before:border-[2px] before:border-primary before:rounded-full shrink-1"
                                >
                                    <div
                                        class="relative w-[1rem] h-[1rem] bg-primary rounded-full m-[0.5rem] min-h-[1rem] border-[2px] border-primary"
                                    ></div>
                                </div>
                            </div>

                            <p class="absolute top-full">Payment</p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-[3fr_2fr] items-start gap-10">
                        <div class="flex flex-col gap-8">
                            <div class="flex flex-col gap-3">
                                <h2 class="text-sm font-semibold">Payment method</h2>

                                <input type="hidden" name="details" value="" id="details">
                                <input type="hidden" name="type" value="{{request()->get("type")}}">
                                <input type="hidden" name="product" value="{{request()->get("product")}}">
                                <input type="hidden" name="quantity" value="{{request()->get("quantity")}}">
                                <div class="flex flex-col gap-1 py-2">
                                    <div class="flex items-center mb-4">
                                        <div class="payment-radio-item">
                                            <input id="paymentMethodCod" type="radio" value="online" name="payment_method" class="w-4 h-4" checked>
                                            <label for="paymentMethodCod" class="ml-2">Debit/Credit card</label>
                                        </div>
                                    </div>
                                    <div class="flex items-center mb-2">
                                        <div class="payment-radio-item">
                                            <input id="paymentMethodOnline" type="radio" value="cod" name="payment_method" class="w-4 h-4">
                                            <label for="paymentMethodOnline" class="ml-2">Cash on delivery</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:flex hidden flex-col gap-4 bg-neutral-100 p-8 text-sm">
                            @foreach($products as $product)
                                <div class="flex justify-between items-center">
                                    <div class="flex gap-4">
                                        <img src="{{asset($product->cover_1)}}" class="w-[80px]" />

                                        <div class="flex flex-col justify-between">
                                            <h3>{{$product->name}}</h3>

                                            <p>{{$product->quantity}} Qty.</p>
                                        </div>
                                    </div>

                                    <p>AED {{number_format(($product->price * $product->quantity), 2)}}</p>
                                </div>

                                <div class="w-full h-[1px] bg-neutral-300"></div>
                            @endforeach

                            <div class="flex flex-col gap-2 text-neutral-600">
                                <div class="flex justify-between">
                                    <p>Shipping</p>

                                    <p>AED 0.00</p>
                                </div>

                                <div class="flex justify-between">
                                    <p>Discount</p>

                                    <p>AED {{number_format($discount, 2)}}</p>
                                </div>
                            </div>

                            <div class="w-full h-[1px] bg-neutral-300"></div>

                            <div class="flex flex-col items-center text-lg">
                                <div class="flex justify-between font-semibold flex-1 w-full">
                                    <p>Total:</p>

                                    <p>AED {{number_format($total, 2)}}</p>
                                </div>
                            </div>
                            <button type="submit"
                                class="group mt-4 text-sm bg-black rounded-full text-white hover:bg-primary flex items-center justify-center py-2 px-4 gap-2 w-[100%]"
                            >
                                <div class="relative flex items-center gap-2 pr-5">
                                    <span class="group-hover:translate-x-5 transition ease-in">
                                      Purchase
                                    </span>

                                    <i
                                        class="iconify-inline absolute right-0 group-hover:left-0 transition ease-in"
                                        data-icon="mdi:arrow-right"
                                    ></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div
            class="md:hidden block fixed bottom-0 bg-white w-full shadow-inner z-20"
        >
            <div class="bg-neutral-100 p-4 flex flex-col gap-4">
                <div class="flex justify-between items-center" data-summary-open>
                    <p>Order Summary</p>

                    <i class="iconify-inline text-2xl" data-icon="mdi:chevron-down"></i>
                </div>

                <div
                    data-summary
                    class="max-h-0 overflow-hidden flex flex-col gap-4 transition ease-in"
                >
                    @foreach($products as $product)
                        <div class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img src="{{asset($product->cover_1)}}" class="w-[80px]" />

                                <div class="flex flex-col justify-between">
                                    <h3>{{$product->name}}</h3>

                                    <p>{{$product->quantity}} Qty.</p>
                                </div>
                            </div>

                            <p>AED {{number_format(($product->price * $product->quantity), 2)}}</p>
                        </div>

                        <div class="w-full h-[1px] bg-neutral-300"></div>
                    @endforeach


                    <div class="flex flex-col gap-2 text-neutral-600">
                        <div class="flex justify-between">
                            <p>Shipping</p>

                            <p>AED 0.00</p>
                        </div>

                        <div class="flex justify-between">
                            <p>Discount</p>

                            <p>AED {{number_format($discount, 2)}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center p-4">
                <p>Total: AED {{number_format($total, 2)}}</p>
            </div>
            <button type="submit"
                class="group text-sm bg-black rounded-full text-white hover:bg-primary flex items-center justify-center py-2 px-4 gap-2 w-[100%]"
            >
                <div class="relative flex items-center gap-2 pr-5">
                <span class="group-hover:translate-x-5 transition ease-in">
                  Purchase
                </span>

                    <i
                        class="iconify-inline absolute right-0 group-hover:left-0 transition ease-in"
                        data-icon="mdi:arrow-right"
                    ></i>
                </div>
            </button>
        </div>
    </form>
@endsection

@section("js")
    <script src="{{asset("assets/js/cart.js")}}"></script>
    <script src="{{asset("assets/js/checkout.js")}}"></script>
    <script>
        window.addEventListener('load', function () {
            document.getElementById("details").value = Cookies.get("checkoutDetails");
        })
    </script>
@endsection
