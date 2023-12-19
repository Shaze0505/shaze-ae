@extends("web.layout.app")

@section("title", "Order complete - Shazé")

@section("content")
    <div class="relative z-10" data-section-white>
        <div class="md:px-12 px-6 py-32 flex flex-col gap-4">
            <section class="sticky top-0 overflow-hidden">

                <div class="flex flex-col items-center text-center gap-4 pt-32">
                    <i
                        class="iconify-inline text-6xl"
                        data-icon="clarity:shopping-cart-line"
                    ></i>

                    @if($success)
                        <h1 class="text-3xl">Thank you for your purchase</h1>
                    @else
                        <h1 class="text-3xl">Sorry, we couldn't process your order.</h1>
                    @endif

                    @if(isset($message) && strlen($message) > 0)
                        <p>{{$message}}</p>
                    @endif
                    @if($order)
                        <p>Your order number: {{$order->order_number ?? "000000"}}</p>
                    @endif

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
    </div>
@endsection

@section("js")
    <script src="{{asset("assets/js/cart.js")}}"></script>
@endsection
