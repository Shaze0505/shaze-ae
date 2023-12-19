@extends("web.layout.app")

@section("title", "Profile Edit - Shazé")

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

                <form method="POST" action="{{route("profile.update")}}">
                    @csrf
                <section>
                    <div class="flex items-center justify-between">
                        <h1 class="text-5xl font-medium">Profile Details</h1>
                    </div>

                    <form class="max-w-[720px] flex flex-col gap-4 py-8">
                        <div
                            class="flex flex-col gap-2 pb-2"
                        >
                            <span class="text-xs text-neutral-500">First Name</span>

                            <input name="name" type="text" class="w-full border-b p-2 border-gray-500 outline-none" value="{{$user->name}}" required>
                            @error('name')
                            <span class="form-text text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>

                        <div
                            class="flex flex-col gap-2 pb-2"
                        >
                            <span class="text-xs text-neutral-500">Last Name</span>

                            <input name="surname" type="text" class="w-full border-b p-2 border-gray-500 outline-none" value="{{$user->surname}}" required>
                            @error('surname')
                            <span class="form-text text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>

                        <div
                            class="flex flex-col gap-2 pb-2"
                        >
                            <span class="text-xs text-neutral-500">Email</span>

                            <input name="email" type="email" class="w-full border-b p-2 border-gray-500 outline-none" value="{{$user->email}}" required>
                            @error('email')
                            <span class="form-text text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>

                        <div
                            class="flex flex-col gap-2 pb-2"
                        >
                            <span class="text-xs text-neutral-500">Mobile phone number</span>

                            <input name="phone" type="text" class="w-full border-b p-2 border-gray-500 outline-none" value="{{$user->phone}}">
                            @error('phone')
                            <span class="form-text text-danger">
                                    {{$message}}
                                </span>
                            @enderror
                        </div>
                    </form>

                    <div class="flex justify-end">
                        <button
                            class="group mt-4 text-lg bg-black rounded-full text-white hover:bg-primary flex items-center justify-center py-4 px-14 gap-2"
                        >
                            <div class="relative flex items-center gap-2 pr-5">
                                <span class="group-hover:translate-x-5 transition ease-in">Edit Profile</span>
                                <i
                                    class="iconify-inline absolute right-0 group-hover:left-0 transition ease-in"
                                    data-icon="mdi:arrow-right"
                                ></i>
                            </div>
                        </button>
                    </div>
                </section>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("js")

@endsection
