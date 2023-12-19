const handleCartProducts = () => {
    const products = document.querySelectorAll("[data-cart-product]");

    products.forEach((product) => {
        const countPanels = product.querySelectorAll("[data-count-panel]");

        countPanels.forEach((countPanel) => {
            const plus = countPanel.querySelector("[data-plus-count]");
            const minus = countPanel.querySelector("[data-minus-count]");
            const count = countPanel.querySelector("[data-count]");

            const setCount = (result) => {
                countPanels.forEach((e) => {
                    const count = e.querySelector("[data-count]");

                    count.textContent = result;
                });
            };

            plus.addEventListener("click", () => {
                const result =
                    parseInt(count.textContent) + parseInt(plus.dataset.plusCount);
                count.textContent = result;
            });

            minus.addEventListener("click", () => {
                const currentCount = parseInt(count.textContent);
                const result = currentCount - parseInt(plus.dataset.plusCount);
                if (currentCount > 1) setCount(result);
                else product.classList.add("hidden");
            });
        });
    });
};

handleCartProducts();
