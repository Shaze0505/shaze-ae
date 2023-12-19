@extends("web.layout.app")

@section("title", "About us - Shazé")

@section("content")
    <div class="z-10 relative">
        <section
            class="h-screen overflow-hidden bg-[url('./assets/images/about-bg.jpg')] bg-no-repeat bg-cover bg-center relative"
        >
            <div
                class="container flex flex-col items-center justify-center h-full text-white"
            >
                <h1 class="md:text-7xl text-4xl text-center">Our Legacy & Design</h1>

                <div class="w-[2px] h-[50%] bg-white absolute top-[65%]"></div>
            </div>
        </section>

        <section class="bg-white flex flex-col justify-center py-10 px-8 gap-10" data-section-white>
            <div class="container flex flex-col">
                <div
                    class="lg:py-32 py-12 lg:h-screen grid md:grid-cols-2 items-center lg:gap-10 gap-5"
                >
                    <img
                        src="./assets/images/category/coffee/big.jpg"
                        alt=""
                        class="h-full object-center object-cover"
                    />

                    <div class="flex flex-col gap-4 lg:px-24 md:px-8">
                        <h1 class="text-primary md:text-5xl text-2xl">
                            Our Reason To Be
                        </h1>

                        <p>
                            There’s joy in coming together. It builds connections, inspiring
                            the world around us. We have seen, so we believe, that minds
                            meet when sharing your most authentic self with another.Hosting
                            gives a chance for bonds like these to strengthen – like a
                            uniting of the unique. It’s the heartbeat of life and community.
                            For the real magic lies in the spark of every connection you
                            make. In this very moment and for this very moment – we exist.A
                            true work of design goes against the norm to surprise and stir
                            an emotion, all while elevating the experience with every
                            interaction. It shapes our design thinking. Leading to a line of
                            hosting products that are innovatively practical, in form and
                            function. Giving you the opportunity to reimagine hosting at
                            home and creating a moment in time that's just for you, and your
                            guests.
                        </p>
                    </div>
                </div>

                <div
                    class="lg:py-32 py-12 lg:h-screen grid md:grid-cols-2 items-center lg:gap-10 gap-5"
                >
                    <img
                        src="./assets/images/category/coffee/big.jpg"
                        alt=""
                        class="h-full object-center object-cover md:order-2"
                    />

                    <div class="flex flex-col gap-4 lg:px-24 md:px-8 md:order-1">
                        <h1 class="text-primary md:text-5xl text-2xl">
                            Our Reason To Be
                        </h1>

                        <p>
                            There’s joy in coming together. It builds connections, inspiring
                            the world around us. We have seen, so we believe, that minds
                            meet when sharing your most authentic self with another.Hosting
                            gives a chance for bonds like these to strengthen – like a
                            uniting of the unique. It’s the heartbeat of life and community.
                            For the real magic lies in the spark of every connection you
                            make. In this very moment and for this very moment – we exist.A
                            true work of design goes against the norm to surprise and stir
                            an emotion, all while elevating the experience with every
                            interaction. It shapes our design thinking. Leading to a line of
                            hosting products that are innovatively practical, in form and
                            function. Giving you the opportunity to reimagine hosting at
                            home and creating a moment in time that's just for you, and your
                            guests.
                        </p>
                    </div>
                </div>

                <div
                    class="lg:py-32 py-12 lg:h-screen grid md:grid-cols-2 items-center lg:gap-10 gap-5"
                >
                    <img
                        src="./assets/images/category/coffee/big.jpg"
                        alt=""
                        class="h-full object-center object-cover"
                    />

                    <div class="flex flex-col gap-4 lg:px-24 md:px-8">
                        <h1 class="text-primary md:text-5xl text-2xl">
                            Our Reason To Be
                        </h1>

                        <p>
                            There’s joy in coming together. It builds connections, inspiring
                            the world around us. We have seen, so we believe, that minds
                            meet when sharing your most authentic self with another.Hosting
                            gives a chance for bonds like these to strengthen – like a
                            uniting of the unique. It’s the heartbeat of life and community.
                            For the real magic lies in the spark of every connection you
                            make. In this very moment and for this very moment – we exist.A
                            true work of design goes against the norm to surprise and stir
                            an emotion, all while elevating the experience with every
                            interaction. It shapes our design thinking. Leading to a line of
                            hosting products that are innovatively practical, in form and
                            function. Giving you the opportunity to reimagine hosting at
                            home and creating a moment in time that's just for you, and your
                            guests.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
