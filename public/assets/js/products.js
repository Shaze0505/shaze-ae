const handleProducts = () => {
  const products = document.querySelectorAll("[data-product]");

  products.forEach((product) => {
    const colors = product.querySelectorAll("[data-product-variant]");
    const deleteButton = product.querySelector("[data-product-delete]");

    if (deleteButton)
      deleteButton.addEventListener("click", () => {
        product.classList.add("hidden");
      });

    colors.forEach((color) => {
      const image = product.querySelector("[data-product-image]");
      const imageHover = product.querySelector("[data-product-image-hover]");

      color.addEventListener("click", () => {
        colors.forEach((e) => e.classList.remove("is-active"));

        color.classList.add("is-active");

        image.src = `./assets/images/products/${color.dataset.productVariant}.jpg`;
        imageHover.src = `./assets/images/products/${color.dataset.productVariant}-hover.jpg`;
      });
    });
  });
};

document.addEventListener("DOMContentLoaded", () => {
  handleProducts();
});
