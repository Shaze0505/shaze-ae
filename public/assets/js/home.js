"use strict";

const initCategories = () => {
  const slider = document.getElementById("drink-slider");
  const list = slider.querySelector(".splide__list");
  const bg = document.querySelector("[data-category-bg]");
  const name = document.querySelector("[data-category-name]");
  const description = document.querySelector("[data-category-description]");


  for (let i = 0; i < categories.length; i++) {
    list.innerHTML += `<li class="splide__slide">
    <div class="h-full flex flex-col items-center gap-2 group " data-category="${i}">
      <div
    data-category-image
        class="relative after:content-[''] after:w-full after:h-full after:block after:absolute after:top-0 after:left-0 cursor-pointer after:bg-transparent after:hover:bg-image-overlay transition ease-in after:group-[.is-active]:bg-image-overlay "
      >
        <img
          src="${categories[i].image}"
          class="h-full w-full object-cover object-center cursor-pointer aspect-[3/2] group-[.is-active]:aspect-[2/1.5] transition-all"
        />
      </div>

      <a href="${categories[i].url}"
        class="w-fit h-fit group/button flex items-center hover:text-primary relative pr-[20px]"
      >
        <span
          class="transition-all  text-lg ease-in group-hover/button:translate-x-[20px]"
          >${categories[i].title}</span
        >
        <i
          class="iconify-inline transition-all ease-in absolute right-0 group-hover/button:right-[calc(100%-15px)]"
          data-icon="mdi:arrow-right"
        ></i>

        <div
          class="w-full h-[1px] opacity-0 bg-primary group-hover/button:opacity-100 absolute -bottom-[6px] transition-all ease-in"
        ></div>
      </a>
    </div>
  </li>`;
  }

  const splide = new Splide(slider, {
    perPage: 5,
    gap: 20,
    pagination: false,
    perMove: 1,
    breakpoints: {
      768: {
        perPage: 3,
      },
    },
  });

  const slides = slider.querySelectorAll("[data-category]");

  slides.forEach((slide) => {
    const index = parseInt(slide.dataset.category);
    const image = slide.querySelector("[data-category-image]");
    image.addEventListener("click", (event) => {
      bg.classList.remove("opacity-100");
      bg.classList.add("opacity-0");

      slides.forEach((e) => e.classList.remove("is-active"));
      slides[index].classList.add("is-active");

      setTimeout(() => {
        bg.src = categories[index].bg;
        name.textContent = categories[index].name;
        description.textContent = categories[index].description;

        bg.classList.add("opacity-100");
        bg.classList.remove("opacity-0");
      }, 200);
    });
  });

  splide.on("mounted", () => {
    slides[0].classList.add("is-active");
    bg.classList.remove("opacity-100");
    bg.classList.add("opacity-0");
    setTimeout(() => {
      bg.src = categories[0].bg;
      bg.classList.add("opacity-100");
      bg.classList.remove("opacity-0");
    }, 1000);
  });

  splide.mount();
};

const initEmployers = () => {
  const slider = document.getElementById("employers-slider");
  const pagination = slider.querySelector(".pagination");
  const current = pagination.querySelector(".pagination__current");
  const total = pagination.querySelector(".pagination__total");

  const next = pagination.querySelector(".pagination__next");
  const prev = pagination.querySelector(".pagination__prev");

  const EMPLOYER_COUNT = 11;

  const splide = new Splide(slider, {
    gap: 20,
    autoWidth: true,
    pagination: false,
    breakpoints: {
      992: {
        type: "loop",
        focus: "center",
        trimSpace: false,
        perPage: 3,
      },
    },
  });

  splide.on("mounted", () => {
    total.textContent = EMPLOYER_COUNT;
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

  splide.mount();
};

const initVideos = () => {
  const videos = document.querySelectorAll("video[data-video]");

  videos.forEach((video) => {
    const id = video.getAttribute("data-video");
    const play = document.querySelector(
      `button[data-video-button-action="play"][data-video-button=${id}]`
    );
    const pause = document.querySelector(
      `button[data-video-button-action="pause"][data-video-button=${id}]`
    );
    const mute = document.querySelector(
      `button[data-video-button-action="mute"][data-video-button=${id}]`
    );
    const unmute = document.querySelector(
      `button[data-video-button-action="unmute"][data-video-button=${id}]`
    );

    const handlePause = () => {
      const pauseVideo = () => {
        video.pause();
        play.classList.remove("hidden");
        pause.classList.add("hidden");
      };

      video.addEventListener("pause", () => {
        pauseVideo();
      });

      pause.addEventListener("click", () => {
        pauseVideo();
      });
    };

    const handlePlay = () => {
      const playVideo = () => {
        video.play();
        play.classList.add("hidden");
        pause.classList.remove("hidden");
      };

      video.addEventListener("play", () => {
        playVideo();
      });

      play.addEventListener("click", () => {
        playVideo();
      });
    };

    const handleUnmute = () => {
      const unmuteVideo = () => {
        video.muted = false;
        mute.classList.remove("hidden");
        unmute.classList.add("hidden");
      };

      unmute.addEventListener("click", () => {
        unmuteVideo();
      });
    };

    const handleMute = () => {
      const muteVideo = () => {
        video.muted = true;
        mute.classList.add("hidden");
        unmute.classList.remove("hidden");
      };

      mute.addEventListener("click", () => {
        muteVideo();
      });
    };

    handlePause();
    handlePlay();
    handleUnmute();
    handleMute();
  });
};

document.addEventListener("DOMContentLoaded", () => {
  initCategories();
  initEmployers();
  initVideos();
});
