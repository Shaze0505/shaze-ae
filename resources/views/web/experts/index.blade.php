@extends("web.layout.app")

@section("title", "Experts - Shazé")

@section("content")
    <div class="relative z-10">
        <section
            class="h-screen overflow-hidden bg-[url('{{asset("assets/images/experts-bg.jpg")}}')] bg-no-repeat bg-cover bg-center relative"
        >
            <div
                class="container flex flex-col items-center justify-center h-full text-white"
            >
                <h1 class="md:text-7xl text-4xl text-center">Experts' circle</h1>
            </div>
        </section>

        <section class="bg-white py-24 px-8" data-section-white>
            <div class="container flex flex-col gap-32">
                <p class="md:px-24 text-lg">
                    Shazé’s circle of experts share with you a wealth of knowledge on
                    their subjects of interest. With all-that’s-new in whisky, wine,
                    coffee, tea, food and lifestyle, so you host your best for your
                    bests.
                </p>

                <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-14">
                    @foreach($experts as $expert)
                        <div class="flex flex-col gap-4">
                            <img
                                src="{{asset($expert->image)}}"
                                alt="{{$expert->name}}"
                            />

                            <h2 class="text-2xl">{{$expert->name}}</h2>

                            <p class="opacity-60">
                                {{$expert->position}}
                            </p>

                            <a href="{{route("experts.show", $expert->slug)}}" class="w-fit group flex items-center gap-2 md:text-lg text-lg md:text-primary md:hover:text-primary relative mr-16 md:bg-transparent md:p-0 md:rounded-none rounded-full text-white py-4 px-8 bg-primary relative" >
                                <span class="md:pr-[50px] transition ease-in md:group-hover:pl-[50px] group-hover:pr-0">
                                    <span class="md:block hidden">Know More</span>

                                  <span class="md:hidden block">Know More</span>
                                </span>
                                <i class="iconify-inline md:block md:text-primary text-white absolute right-4 group-hover:left-4 hidden" data-icon="mdi:arrow-right" ></i>
                                <div class="w-full h-[2px] bg-primary hidden md:group-hover:block absolute -bottom-[6px] transition ease-in" ></div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
