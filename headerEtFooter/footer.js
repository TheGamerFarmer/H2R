function onLoadFooter() {
    const image = document.querySelector("footer > img");

    image.style.transform = "translateX(calc(100vw - 30em))";

    setInterval(() =>
        image.style.transform = "translateX(calc(100vw - 30em))"
    , 30000);

    setTimeout(() => {
        image.style.transform = "translateX(0)";

        setInterval(() =>
            image.style.transform = "translateX(0)"
        , 30000);
    }, 15000)
}