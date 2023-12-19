@extends("web.layout.app")

@section("title", "Lifetime Delight Policy - Shazé")

@section("content")
    <div class="z-10 relative">
        <section
            class="h-screen overflow-hidden bg-[url('{{asset("assets/images/other-banner.jpg")}}')] bg-no-repeat bg-cover bg-center relative"
        >
            <div
                class="container flex flex-col items-center justify-center h-full text-white"
            >
                <h1 class="md:text-7xl text-4xl text-center">Lifetime Delight Policy</h1>

                <div class="w-[2px] h-[50%] bg-white absolute top-[65%]"></div>
            </div>
        </section>

        <section class="bg-white flex flex-col justify-center py-10 px-8 gap-10 mb-20" data-section-white>
            <div class="container flex flex-col">
                <div class="flex flex-col gap-4 lg:px-24 md:px-8 text-xl">
                    <h1 class="text-primary md:text-5xl text-2xl w-[100%] text-center mb-10">
                        Lifetime Delight Policy
                    </h1>

                    <p class="mb-10">
                        At Shazé, customer delight is paramount. Our Lifetime Delight Policy is an extension of our incessant attempt to stay progressive and add value to our customers’ experience.
                    </p>
                    <p class="font-bold mt-10">
                        Terms of Exchange
                    </p>
                    <p>
                        We stand by the high-quality craftsmanship and material of every Shazé piece created.  Hard-engineered to perfection, every function and form is carefully inspected through a detailed quality-control-check.
                    </p>
                    <p>
                        Extending this is our assurance with the Shazé Lifetime Delight Policy - allowing you to request a replacement for the Hosting Collection at any point in time. Now, you can delight in great design, well, for a lifetime. We understand that every requisite is unique, thus treat each request on a case to case basis.
                    </p>
                    <p>
                        In case of unavailability of the product a store credit will be issued, which is redeemable at any Shazé store.
                    </p>
                    <p class="font-bold mt-10">
                        Exchange Preclude
                    </p>
                    <p>
                        Pieces from the Hosting Collection that have gone through breakage, and other products outside the line are not eligible for the terms of the policy.
                    </p>

                    <p class="font-bold mt-10">
                        Initiating your exchange
                    </p>
                    <p>
                        You are welcome to bring the purchased-piece to the store and avail your exchange.
                    </p>

                    <p class="font-bold mt-10">
                        Initiating your exchange
                    </p>
                    <p>
                        You are welcome to bring the purchased-piece to the store, or write to us at info@shaze.ae to schedule a pick-up.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
