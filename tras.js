document.addEventListener("DOMContentLoaded", () => {
    const page = document.querySelector(".page");
    page.classList.add("show");

    const links = document.querySelectorAll("a.link");
    links.forEach(link => {
        link.addEventListener("click", event => {
            event.preventDefault();
            const href = link.getAttribute("href");
            page.classList.remove("show");

            setTimeout(() => {
                window.location.href = href;
            }, 500); // Tempo da transição deve coincidir com o tempo do CSS
        });
    });
});
