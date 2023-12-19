@extends("web.layout.app")

@section("title", "My orders - Shazé")

@section("content")
    <div class="relative z-10" data-section-white>
        <div class="md:px-12 px-6 py-32 flex flex-col gap-4">
            <div>
                <i
                    class="iconify-inline md:hidden text-2xl"
                    data-icon="mdi:arrow-left"
                ></i>
            </div>

            <div class="grid md:grid-cols-[480px_1fr] items-start h-screen">
                @include("web.partials.profile-aside")

                <section class="sticky top-0 overflow-hidden">
                    <div class="flex flex-col gap-4">
                        <h1 class="text-5xl font-medium">Orders</h1>
                    </div>

                    <div class="flex flex-col items-center text-center gap-4 pt-32">
                        <i
                            class="iconify-inline text-6xl"
                            data-icon="clarity:shopping-cart-line"
                        ></i>

                        <h1 class="text-3xl">You don't have purchases</h1>

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
        </div>
    </div>
@endsection

@section("js")

@endsection
