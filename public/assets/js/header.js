"use strict";

class Header {
  constructor() {
    this.wrapper = document.querySelector("header");
    this.logo = document.getElementById("header-logo");

    this.whiteSections = document.querySelectorAll("*[data-section-white]");
    this.whitePoints = {};
    this.logos = {
      white: LIGHT_LOGO,
      black: DARK_LOGO,
    };

    this.prevScrollPosition = window.pageYOffset;
    this.currentScrollPosition = window.pageYOffset;
    this.sidebar = document.getElementById("sidebar");
    this.search = document.getElementById("search");
    this.searchSpinWords = document.getElementById("spin-words");
    this.modals = document.querySelectorAll("*[data-modal]");
  }

  detectWhitePoints() {
    for (const section of this.whiteSections) {
      this.whitePoints[section.offsetTop] =
        section.offsetTop + section.clientHeight;
    }
  }

  clientInWhiteSection() {
    return Object.entries(this.whitePoints).some(
      ([key, value]) => window.pageYOffset >= key && window.pageYOffset < value
    );
  }

  turnHeaderBlack() {
    this.logo.src = this.logos.black;
    this.wrapper.classList.add("!text-black");
  }

  turnHeaderWhite() {
    this.logo.src = this.logos.white;
    this.wrapper.classList.remove("!text-black");
  }

  handleHeaderPosition() {
    this.currentScrollPosition = window.pageYOffset;

    if (this.prevScrollPosition > this.currentScrollPosition) {
      this.wrapper.classList.remove("-translate-y-full");
    } else {
      this.wrapper.classList.add("-translate-y-full");
    }

    this.prevScrollPosition = this.currentScrollPosition;
  }

  handleHeaderMenuButtons() {
    const menuButtons = document.querySelectorAll("*[data-menu-button]");

    menuButtons.forEach((button) => {
      const id = button.dataset.menuButton;

      const menu = document.querySelector(`div[data-menu=${id}]`);

      this.detectClickOutside(menu.children[0], () => {
        if (menu.ariaExpanded === "true") this.closeMenu(id);
      });

      button.addEventListener("click", () => {
        this.handleHeaderMenuButtonClick(menu, id);
      });
    });
  }

  detectClickOutside(element, callback) {
    document.addEventListener("click", (event) => {
      const isClickInside = element.contains(event.target);

      if (!isClickInside) {
        callback();
      }
    });
  }

  handleHeaderMenuButtonClick(menu, id) {
    if (!menu) return;

    if (menu.ariaExpanded === "false") {
      this.openMenu(id);
    } else {
      this.closeMenu(id);
    }
  }

  closeAllMenus() {
    const menus = document.querySelectorAll("div[data-menu]");

    menus.forEach((menu) => {
      this.closeMenu(menu.dataset.menu);
    });
  }

  openMenu(id) {
    const buttons = document.querySelectorAll(`li[data-menu-button=${id}]`);
    const menu = document.querySelector(`div[data-menu=${id}]`);

    setTimeout(() => {
      buttons.forEach((e) => e.classList.add("border-b-[3px]"));

      menu.classList.add("opacity-100");

      menu.children[0].classList.add("translate-y-0");

      menu.ariaExpanded = "true";

      this.disableScroll();

      menu.classList.add("z-40");
    }, 50);
  }

  closeMenu(id) {
    const buttons = document.querySelectorAll(`li[data-menu-button=${id}]`);
    const menu = document.querySelector(`div[data-menu=${id}]`);

    buttons.forEach((e) => e.classList.remove("border-b-[3px]"));

    menu.classList.remove("opacity-100");
    menu.classList.add("opacity-0");

    menu.children[0].classList.remove("translate-y-0");
    menu.children[0].classList.add("-translate-y-full");

    menu.ariaExpanded = "false";

    this.enableScroll();

    setTimeout(() => {
      menu.classList.remove("z-40");
    }, 300);
  }

  handleMobileContent() {
    this.handleSidebar();
    this.handleSidebarSearchContent();

    const sections = document.querySelectorAll("*[data-mobile-section]");
    const closeButtons = document.querySelectorAll("*[data-close-menu-button]");

    closeButtons.forEach((button) => {
      button.addEventListener("click", () => {
        this.closeMenu(button.dataset.closeMenuButton);
      });
    });

    sections.forEach((section) => {
      section.querySelector("h3").addEventListener("click", () => {
        const list = section.querySelector("ul");
        const closeButton = section.querySelector("*[data-close-button]");
        const openButton = section.querySelector("*[data-open-button]");

        if (list.ariaExpanded === "false") {
          list.classList.add("max-h-full");
          list.classList.add("overflow-unset");
          list.ariaExpanded = "true";

          openButton.classList.toggle("hidden");
          closeButton.classList.toggle("hidden");
        } else {
          list.classList.remove("max-h-full");
          list.classList.remove("overflow-unset");

          openButton.classList.toggle("hidden");
          closeButton.classList.toggle("hidden");

          list.ariaExpanded = "false";
        }
      });
    });
  }

  handleSearch() {
    const triggers = document.querySelectorAll("*[data-search-modal-trigger]");
    const closeButtons = document.querySelectorAll("*[data-close-search]");

    const input = this.search.querySelector("input[data-search-modal-input]");
    const searchResults = this.search.querySelector("[data-search-results]");

    const openSearchDropdown = (q) => {
        let myHeaders = new Headers();
        myHeaders.append("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]').content);
        let requestOptions = {
            method: 'GET',
            headers: myHeaders,
            redirect: 'follow'
        };

        fetch(document.getElementById("searchUrl").value + "/" + q, requestOptions)
            .then(response => response.text())
            .then(result => {
                searchResults.classList.remove("hidden");
                searchResults.classList.add("opacity-100");
                searchResults.classList.add("z-50");
                searchResults.classList.remove("opacity-0");
                searchResults.classList.remove("z-0");
                document.getElementById("searchResult").innerHTML = result;
            })
    };

    const closeSearchDropdown = () => {
      searchResults.classList.add("hidden");
      searchResults.classList.remove("opacity-100");
      searchResults.classList.remove("z-50");
      searchResults.classList.add("opacity-0");
      searchResults.classList.add("z-0");
    };

    if (!input) return;

    input.addEventListener("input", (e) => {
      if (e.target.value) {
        this.searchSpinWords.classList.add("hidden");
        if (e.target.value.length > 2){
            openSearchDropdown(e.target.value);
        }
      } else {
        this.searchSpinWords.classList.remove("hidden");
        closeSearchDropdown();
      }
    });

    this.detectClickOutside(this.search.children[0], () => {
      if (this.search.classList.contains("opacity-100")) this.closeSearch();
    });

    triggers.forEach((trigger) => {
      trigger.addEventListener("click", () => {
        this.openSearch();
      });
    });

    closeButtons.forEach((button) => {
      button.addEventListener("click", () => {
        this.closeSearch();
      });
    });
  }

  handleSidebar() {
    const hamburger = document.getElementById("hamburger");
    const closeButtons = document.querySelectorAll("*[data-close-sidebar]");

    hamburger.addEventListener("click", () => {
      this.openSidebar();
    });

    closeButtons.forEach((e) => {
      e.addEventListener("click", () => {
        if (this.search.classList.contains("opacity-100"))
          return this.closeSearch();

        this.closeSidebar();
        this.closeAllMenus();
      });
    });
  }

  handleSidebarSearchContent() {
    const buttons = document.querySelectorAll(
      "*[data-mobile-search-section-button]"
    );
    const wrapper = document.querySelector("*[data-mobile-search-content]");
    const sections = document.querySelectorAll("*[data-mobile-search-section]");

    buttons.forEach((button) => {
      button.addEventListener("click", () => {
        const section = wrapper.querySelector(
          `*[data-mobile-search-section="${button.dataset.mobileSearchSectionButton}"`
        );

        for (let i = 0; i < sections.length; i++) {
          sections[i].classList.add("opacity-0");
          sections[i].classList.remove("opacity-100");
          buttons[i].classList.remove("border-b-2");
        }

        section.classList.remove("opacity-0");
        section.classList.add("opacity-100");
        button.classList.add("border-b-2");
      });
    });
  }

  openSidebar() {
    this.sidebar.classList.remove("opacity-0");
    this.sidebar.classList.add("opacity-100");

    this.sidebar.classList.add("z-30");

    this.sidebar.classList.remove("z-0");

    this.disableScroll();
  }

  closeSidebar() {
    this.sidebar.classList.add("opacity-0");
    this.sidebar.classList.remove("opacity-100");

    this.enableScroll();

    setTimeout(() => {
      this.sidebar.classList.remove("z-30");
      this.sidebar.classList.add("z-0");
    }, 100);
  }

  openSearch() {
    setTimeout(() => {
      this.search.classList.add("opacity-100");
      this.search.classList.add("z-50");

      this.disableScroll();
    }, 50);
  }

  closeSearch() {
    this.search.classList.remove("opacity-100");
    this.search.classList.remove("z-50");

    this.enableScroll();
  }

  enableScroll() {
    document.body.classList.remove("overflow-hidden");
  }

  disableScroll() {
    document.body.classList.add("overflow-hidden");
  }

  handleModals() {
    this.modals.forEach((modal) => {
      const id = modal.dataset.modal;

      const buttons = document.querySelectorAll(
        `button[data-modal-button=${id}]`
      );

      const closeButton = document.querySelector(`*[data-modal-close=${id}]`);

      const element = document.querySelector(`*[data-modal-element=${id}]`);

      const clickOutsideElement = document.querySelector(
        `*[data-modal-element-content=${id}]`
      );

      this.detectClickOutside(clickOutsideElement || element, () => {
        if (element.ariaExpanded === "true") this.closeModal(element);
      });

      if (closeButton)
        closeButton.addEventListener("click", () => {
          this.closeModal(element);
        });

      for (const button of buttons) {
        button.addEventListener("click", () => {
          if (element.ariaExpanded === "false") {
            this.openModal(element);
          } else {
            this.closeModal(element);
          }
        });
      }
    });
  }

  openModal(element) {
    setTimeout(() => {
      element.classList.add("opacity-100");
      element.classList.add("z-50");
      element.classList.remove("opacity-0");
      element.classList.remove("hidden");
      element.ariaExpanded = "true";
    }, 50);
  }

  closeModal(element) {
    element.classList.remove("opacity-100");
    element.classList.add("opacity-0");
    element.classList.add("hidden");
    element.classList.remove("z-50");

    element.ariaExpanded = "false";
  }

  handleHeaderTheme() {
    if (this.clientInWhiteSection()) {
      this.turnHeaderBlack();
    } else {
      this.turnHeaderWhite();
    }
  }

  init() {
    this.detectWhitePoints();
    this.handleHeaderMenuButtons();
    this.handleMobileContent();
    this.handleSearch();
    this.handleModals();

    this.handleHeaderTheme();
    addNumbersToIcons();

    window.addEventListener("scroll", () => {
      this.handleHeaderPosition();

      this.handleHeaderTheme();
    });
  }
}

document.addEventListener("DOMContentLoaded", () => {
  new Header().init();
});

document.getElementById("signupButton").onclick = function(event){
    event.preventDefault();
    document.getElementById("signUpForm").classList.remove("hidden");
    document.getElementById("signInForm").classList.add("hidden");
}
document.getElementById("signinButton").onclick = function(event){
    event.preventDefault();
    document.getElementById("signUpForm").classList.add("hidden");
    document.getElementById("signInForm").classList.remove("hidden");
}
