@extends("web.layout.app")

@section("title", "Shipping Policy - Shazé")

@section("content")
    <div class="z-10 relative">
        <section
            class="h-screen overflow-hidden bg-[url('{{asset("assets/images/other-banner.jpg")}}')] bg-no-repeat bg-cover bg-center relative"
        >
            <div
                class="container flex flex-col items-center justify-center h-full text-white"
            >
                <h1 class="md:text-7xl text-4xl text-center">Shipping Policy</h1>

                <div class="w-[2px] h-[50%] bg-white absolute top-[65%]"></div>
            </div>
        </section>

        <section class="bg-white flex flex-col justify-center py-10 px-8 gap-10 mb-20" data-section-white>
            <div class="container flex flex-col">
                <div class="flex flex-col gap-4 lg:px-24 md:px-8 text-xl">
                    <h1 class="text-primary md:text-5xl text-2xl w-[100%] text-center mb-10">
                        The Shipping Policy
                    </h1>

                    <p>
                        All Shazé products are dispatched within 24 hours of order confirmation.
                    </p>
                    <p>
                        Your shipment will be delivered within 2-7 business days from order confirmation.
                    </p>
                    <p>
                        Your order can be tracked through the tracking link sent via email.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
