@extends("web.layout.app")

@section("title", ($category->name ?? "All Products") . " - Shazé")

@section("content")
    <div class="relative z-10">
        <section
            class="relative h-screen bg-[url('{{asset($category->image ?? "assets/images/products-top.jpg")}}')] bg-no-repeat bg-cover flex items-center justify-center before:content-[''] before:absolute before:bg-[rgba(0,0,0,0.6)] before:z-0 before:w-full before:h-full before:bottom-0"
        >
            <h1 class="text-7xl text-white z-10">{{$category->name ?? "All Products"}}</h1>
        </section>

        <section
            class="px-8 py-12 grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-8 z-10 bg-white"
            data-section-white
        >
            @foreach($products as $product)
                @include("web.partials.products")
            @endforeach
        </section>

        @include("web.partials.showroom")
    </div>
@endsection

@section("js")
    {!! \App\Helpers\Helper::version("assets/js/products.js", "js") !!}
@endsection
