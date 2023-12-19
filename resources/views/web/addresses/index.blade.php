@extends("web.layout.app")

@section("title", "My Addresses - Shazé")

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

                <section>
                    <div class="flex items-center justify-between">
                        <h1 class="text-5xl font-medium">Addresses</h1>

                        <button
                            class="group mt-4 text-sm bg-black rounded-full text-white hover:bg-primary flex items-center justify-center py-2 px-4 gap-2"
                        >
                            <div class="relative flex items-center gap-2 pr-5">
                                <span class="group-hover:translate-x-5 transition ease-in">Add New Address</span>

                                <i
                                    class="iconify-inline absolute right-0 group-hover:left-0 transition ease-in"
                                    data-icon="mdi:arrow-right"
                                ></i>
                            </div>
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section("js")

@endsection
