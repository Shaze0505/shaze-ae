const initMainSlider = () => {
    const slider = document.getElementById("drink-slider");
    const pagination = slider.querySelector(".pagination");
    const current = pagination.querySelector(".pagination__current");
    const total = pagination.querySelector(".pagination__total");

    const next = pagination.querySelector(".pagination__next");
    const prev = pagination.querySelector(".pagination__prev");

    const COUNT = main_sliders.length;

    for (let i = 0; i < COUNT; i++) {
        slider.querySelector(".splide__list").innerHTML += `<li class="splide__slide group">
                  <div class="w-full h-full md:scale-[0.8] md:group-[.is-active]:scale-[1] transition-all duration-300">
                    <img src="`+main_sliders[i]+`" class="w-full h-full" />
                  </div>
                </li>`;
    }

    const splide = new Splide(slider, {
        padding: {
            left: "26%",
            right: "26%",
        },
        type: "loop",
        gap: "20%",
        breakpoints: {
            768: {
                padding: 0,
            },
        },
    }).mount();

    splide.on("mounted", () => {
        total.textContent = COUNT;
        current.textContent = 1;
    });

    next.addEventListener("click", (e) => {
        splide.go(">");
        current.textContent = splide.index + 1;
    });

    prev.addEventListener("click", (e) => {
        splide.go("<");
        current.textContent = splide.index + 1;
    });

    splide.on("move", () => {
        current.textContent = splide.index + 1;
    });
};

const initProductSlider = (productId = null) => {
    const slider = document.getElementById("product-slider");

    const slide = (url) => {
        return `<li class="splide__slide group">
              <div class="w-full h-full object-cover">
                <img src="${url}" class="w-full h-full" />
              </div>
            </li>`;
    };

    const list = slider.querySelector(".splide__list");
    list.innerHTML = "";

    if (!productId){
        variants[0].images.forEach(function (item) {
            list.innerHTML += slide(item);
        });
    }else{
        variants.forEach(function (item){
            if (parseInt(item.id) === parseInt(productId)){
                item.images.forEach(function (image) {
                    list.innerHTML += slide(image);
                });
            }
        });
    }

    new Splide(slider, {
        type: "loop",
        breakpoints: {
            768: {
                padding: 0,
            },
        },
        pagination: false,
    }).mount();
};

const handleCountPanel = () => {
    const panel = document.querySelector("[data-count]");
    const minus = panel.querySelector("[data-minus]");
    const plus = panel.querySelector("[data-plus]");
    const value = panel.querySelector("[data-value]");

    minus.addEventListener("click", () => {
        if (value.textContent > 1) value.textContent -= 1;
    });

    plus.addEventListener("click", () => {
        value.textContent = parseInt(value.textContent) + 1;
    });
};

const handleAccordions = () => {
    const accordions = document.querySelectorAll("[data-accordion]");

    accordions.forEach((e) => {
        const toggle = e.querySelector("[data-accordion-toggler]");
        const content = e.querySelector("[data-accordion-content]");

        toggle.addEventListener("click", () => {
            e.classList.toggle("is-active");

            content.classList.toggle("!max-h-[999px]");
            content.classList.toggle("!mt-10");
        });
    });
};

const handleSelects = () => {

    if (variants.length === 1){
        return;
    }
    const returnActiveItem = () => {
        return variants.find((e) => e.active);
    };

    const returnSelectPlaceholderTemplate = ({ title, color }) => {
        return `
      <div class="flex gap-2 items-center">
        <div
          class="h-[20px] w-[20px] ratio-square rounded-full bg-[${color}]"
        ></div>
        <span>${title}</span>
      </div>
    `;
    };

    const returnSelectItemTemplate = ({ id, title, color }, { hidden }) => {
        return `
      <div data-select-item="${id}" class="py-2 px-4 bg-white cursor-pointer ${
            hidden ? "hidden" : ""
        }">
        <div class="flex gap-2 items-center">
          <div
            data-select-color
            class="h-[20px] w-[20px] ratio-square rounded-full bg-[${color}]"
          ></div>
          <span>${title}</span>
        </div>
      </div>
    `;
    };

    const selects = document.querySelectorAll("[data-select]");
    selects.forEach((e) => {
        const placeholder = e.querySelector("[data-select-placeholder]");
        const dropdown = e.querySelector("[data-select-dropdown]");
        const placeholderContent = placeholder.querySelector(
            "[data-select-placeholder-content]"
        );

        const setPlaceholder = () => {
            const activeItem = returnActiveItem();
            placeholderContent.innerHTML =
                returnSelectPlaceholderTemplate(activeItem);
        };

        const setDropdownItems = () => {
            dropdown.innerHTML = "";

            for (let i = 0; i < variants.length; i++) {
                let hidden = false;

                if (variants[i].active) hidden = true;

                dropdown.innerHTML += returnSelectItemTemplate(variants[i], {
                    hidden,
                });
            }

            const dropdownItems = dropdown.querySelectorAll("[data-select-item]");
            dropdownItems.forEach((e) => {
                e.addEventListener("click", () => {
                    const id = e.dataset.selectItem;
                    product_id = parseInt(id);
                    const activeIndex = variants.findIndex((e) => parseInt(e.id) === parseInt(id));
                    variants.forEach((e) => (e.active = false));
                    variants[activeIndex].active = true;
                    setPlaceholder();
                    setDropdownItems();
                    initProductSlider(id);
                });
            });
        };

        setDropdownItems();
        setPlaceholder();

        placeholder.addEventListener("click", (event) => {
            dropdown.classList.toggle("hidden");
        });

        document.addEventListener("click", (event) => {
            if (!e.contains(event.target)) dropdown.classList.add("hidden");
        });
    });
};

document.addEventListener("DOMContentLoaded", () => {
    initMainSlider();
    initProductSlider();
    handleCountPanel();
    handleAccordions();
    handleSelects();
});
