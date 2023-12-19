@extends("web.layout.app")

@section("title", "My Wishlist - Shazé")

@section("content")
    <div class="relative z-10">
        <section
            class="relative h-screen bg-[url('{{asset($category->image ?? "assets/images/products-top.jpg")}}')] bg-no-repeat bg-cover flex items-center justify-center before:content-[''] before:absolute before:bg-[rgba(0,0,0,0.6)] before:z-0 before:w-full before:h-full before:bottom-0"
        >
            <h1 class="text-7xl text-white z-10">Wishlist</h1>
        </section>
        @if(count($products) > 0)
            <section
                class="px-8 py-12 grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-8 z-10 bg-white"
                data-section-white
            >
                @forelse($products as $product)
                    @include("web.partials.products")
                @empty

                @endforelse
            </section>

        @else
            <section>
                <div class="flex flex-col items-center text-center gap-4 pt-32">
                    <i
                        class="iconify-inline text-6xl"
                        data-icon="clarity:heart-line"
                    ></i>

                    <h1 class="text-3xl">Your wishlist is empty</h1>

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
        @endif
        @include("web.partials.showroom")
    </div>
@endsection

@section("js")

@endsection
