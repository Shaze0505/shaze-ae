@extends("web.layout.app")

@section("title", "My Profile - Shazé")

@section("content")
    <div class="relative z-10">
        <section class="pt-[200px] py-20" data-section-white>
            <div class="md:px-16 px-4 flex flex-col gap-8">
                <div class="flex justify-between items-start">
                    <div class="flex flex-col gap-4">
                        <p class="md:text-2xl text-2xl">Hi, {{ucfirst($user->name)}} {{ucfirst($user->surname)}}!</p>

                        <h1 class="md:text-5xl text-4xl">Account overview</h1>
                    </div>

                    <form method="POST" action="{{route("logout")}}">
                        @csrf
                    <button type="submit" class="flex items-center text-2xl gap-1">
                        <span>Log Out</span>

                        <i class="iconify-inline" data-icon="mdi:arrow-right"></i>
                    </button>
                    </form>
                </div>

                <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-4">
                    <div
                        class="flex flex-col gap-4 bg-neutral-100 p-5 group cursor-pointer hover:bg-primary-light"
                    >
                        <i
                            class="iconify iconify-inline text-gray-600 text-4xl"
                            data-icon="mdi:instagram"
                        ></i>

                        <div class="flex flex-col gap-2">
                            <h3 class="text-xl">Account Overview</h3>
                        </div>

                        <div class="flex overflow-hidden">
                            <i
                                class="iconify iconify-inline text-2xl -translate-x-full group-hover:translate-x-0 group-hover:text-primary transition ease-in"
                                data-icon="mdi:arrow-right"
                            ></i>
                        </div>
                    </div>

                    <a
                        href="{{route("profile.orders.index")}}"
                        class="flex flex-col gap-4 bg-neutral-100 p-4 group cursor-pointer hover:bg-primary-light"
                    >
                        <i
                            class="iconify iconify-inline text-gray-600 text-4xl"
                            data-icon="uil:cart"
                        ></i>

                        <div class="flex flex-col gap-1">
                            <h3 class="text-xl">Orders</h3>

                            <p class="text-sm">Check your order status</p>
                        </div>

                        <div class="flex overflow-hidden">
                            <i
                                class="iconify iconify-inline text-2xl -translate-x-full group-hover:translate-x-0 group-hover:text-primary transition ease-in"
                                data-icon="mdi:arrow-right"
                            ></i>
                        </div>
                    </a>
                    <a
                        href="{{route("wishlist")}}"
                        class="flex flex-col gap-3 bg-neutral-100 p-6 group cursor-pointer hover:bg-primary-light"
                    >
                        <i
                            class="iconify iconify-inline text-gray-600 text-4xl"
                            data-icon="mdi:heart-outline"
                        ></i>

                        <div class="flex flex-col gap-1">
                            <h3 class="text-xl">Wishlist</h3>

                            <p class="text-sm">Check your wishlist</p>
                        </div>

                        <div class="flex overflow-hidden">
                            <i
                                class="iconify iconify-inline text-2xl -translate-x-full group-hover:translate-x-0 group-hover:text-primary transition ease-in"
                                data-icon="mdi:arrow-right"
                            ></i>
                        </div>
                    </a>
                    <a
                        href="{{route("profile.addresses.index")}}"
                        class="flex flex-col gap-4 bg-neutral-100 p-6 group cursor-pointer hover:bg-primary-light"
                    >
                        <i
                            class="iconify iconify-inline text-gray-600 text-4xl"
                            data-icon="mdi:address-marker-outline"
                        ></i>

                        <div class="flex flex-col gap-1">
                            <h3 class="text-xl">Addresses</h3>

                            <p class="text-sm">Check your addresses</p>
                        </div>

                        <div class="flex overflow-hidden">
                            <i
                                class="iconify iconify-inline text-2xl -translate-x-full group-hover:translate-x-0 group-hover:text-primary transition ease-in"
                                data-icon="mdi:arrow-right"
                            ></i>
                        </div>
                    </a>
                    <a
                        href="{{route("profile.edit")}}"
                        class="flex flex-col gap-4 bg-neutral-100 p-6 group cursor-pointer hover:bg-primary-light"
                    >
                        <i
                            class="iconify iconify-inline text-gray-600 text-4xl"
                            data-icon="solar:user-linear"
                        ></i>

                        <div class="flex flex-col gap-1">
                            <h3 class="text-xl">Profile Details</h3>

                            <p class="text-sm">Change your profile details & password</p>
                        </div>

                        <div class="flex overflow-hidden">
                            <i
                                class="iconify iconify-inline text-2xl -translate-x-full group-hover:translate-x-0 group-hover:text-primary transition ease-in"
                                data-icon="mdi:arrow-right"
                            ></i>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection

@section("js")

@endsection
