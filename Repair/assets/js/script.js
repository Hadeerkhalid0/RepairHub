document.addEventListener("DOMContentLoaded", function () {
    const btns = document.querySelectorAll(".btn");
    btns.forEach(btn => {
        btn.addEventListener("mouseover", () => {
            btn.style.transform = "scale(1.1)";
        });
        btn.addEventListener("mouseout", () => {
            btn.style.transform = "scale(1)";
        });
    });
});
