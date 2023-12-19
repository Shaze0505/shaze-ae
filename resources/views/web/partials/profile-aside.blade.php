<aside class="sticky top-0 md:block hidden">
    <div class="flex flex-col gap-4">
        <a
            href="{{route("profile.index")}}"
            class="flex items-center gap-3 text-xl cursor-pointer"
        >
            <i
                class="iconify-inline text-4xl"
                data-icon="ph:instagram-logo-light"
            ></i>

            <span>Account Overview</span>
        </a>

        <a
            href="{{route("profile.orders.index")}}"
            class="flex items-center gap-3 text-xl cursor-pointer"
        >
            <i
                class="iconify-inline text-4xl"
                data-icon="clarity:shopping-cart-line"
            ></i>

            <span>Orders</span>
        </a>

        <a
            href="{{route("profile.addresses.index")}}"
            class="flex items-center gap-3 text-xl cursor-pointer"
        >
            <i
                class="iconify-inline text-4xl"
                data-icon="clarity:map-marker-line"
            ></i>

            <span>Addresses</span>
        </a>

        <a
            href="{{route("profile.edit")}}"
            class="flex items-center gap-3 text-xl cursor-pointer"
        >
            <i
                class="iconify-inline text-4xl"
                data-icon="clarity:user-line"
            ></i>

            <span>Profile Details</span>
        </a>
    </div>
</aside>
