const handleSummaryMobile = () => {
    const button = document.querySelector("*[data-summary-open]");
    const summary = document.querySelector("*[data-summary]");

    button.addEventListener("click", () => {
        summary.classList.toggle("!max-h-full");
    });
};

handleSummaryMobile();
