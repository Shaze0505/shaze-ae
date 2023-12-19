@extends("web.layout.app")

@section("title", "Privacy Policy - Shazé")

@section("content")
    <div class="z-10 relative">
        <section
            class="h-screen overflow-hidden bg-[url('{{asset("assets/images/other-banner.jpg")}}')] bg-no-repeat bg-cover bg-center relative"
        >
            <div
                class="container flex flex-col items-center justify-center h-full text-white"
            >
                <h1 class="md:text-7xl text-4xl text-center">Privacy Policy</h1>

                <div class="w-[2px] h-[50%] bg-white absolute top-[65%]"></div>
            </div>
        </section>

        <section class="bg-white flex flex-col justify-center py-10 px-8 gap-10 mb-20" data-section-white>
            <div class="container flex flex-col">
                <div class="flex flex-col gap-4 lg:px-24 md:px-8 text-xl">
                    <h1 class="text-primary md:text-5xl text-2xl w-[100%] text-center mb-10">
                        The Privacy Policy
                    </h1>

                    <p class="font-bold">
                        The Privacy Policy Covers:
                    </p>
                    <p>
                        What information is collected and the purpose behind it.
                    </p>
                    <p>
                        How the information is used.
                    </p>
                    <p>
                        The choices offered, include how to access and update information.
                    </p>

                    <p class="font-bold mt-5">
                        The Information We Collect:
                    </p>

                    <p>
                        This notice applies to all information collected or submitted on the Shazé website. Some of our pages require you to register with personal information to place an order for our products, make requests, and opt to receive communication. The personal information we collect from these pages are:
                    </p>
                    <p>Name</p>
                    <p>Email Address</p>
                    <p>Address (should you mention shipping & billing address)</p>
                    <p>Phone number</p>

                    <p class="font-bold mt-5">
                        How Do We Use This Information:
                    </p>

                    <p>
                        Your details are only used for internal, shipping, and communication purposes.
                        We do not share collected information with any 3rd party platform.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
