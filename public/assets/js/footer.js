document.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth < 778) {
    const footerSections = document.querySelectorAll(
      "footer div[data-footer-menu-section]"
    );

    for (const section of footerSections) {
      const link = section.children[0];

      link.addEventListener("click", () => {
        section.classList.toggle("is-active");
      });
    }
  }
});
