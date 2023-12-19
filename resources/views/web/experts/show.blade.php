@extends("web.layout.app")

@section("title", "$expert->name - Shazé")

@section("content")
    <div class="z-10 relative">
        <section
            class="h-screen overflow-hidden bg-[url('{{asset($expert->banner)}}')] bg-no-repeat bg-cover bg-center relative"
        >
            <div
                class="container flex flex-col items-left justify-center h-full text-white"
            >
                <h1 class="md:text-7xl text-4xl text-left mb-5">{{$expert->name}}</h1>
                <h1 class="md:text-lg text-lg text-left">{{$expert->position}}</h1>
            </div>
        </section>

        <section class="bg-white flex flex-col justify-center py-10 px-8 gap-10 mb-20" data-section-white>
            <div class="container flex flex-col">
                <div class="flex flex-col gap-4 lg:px-24 md:px-8 text-xl">
                    <h1 class="text-primary md:text-5xl text-2xl w-[100%] text-center mb-10">
                        {{$expert->name}}
                    </h1>

                    <p>
                        {{$expert->description}}
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
