const images = document.getElementsByClassName("image");
let current = 0;

function nextImage() {
    console.log(images[current]);
    const currentImg = images[current];
    const next = (current + 1) % images.length;
    const nextImg = images[next];

    currentImg.classList.remove("expend");
    nextImg.classList.add("active");

    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            nextImg.classList.add('expend');
        });
    });

    setTimeout(() => {
        currentImg.classList.remove("active");
    }, 800);

    current = next;
}