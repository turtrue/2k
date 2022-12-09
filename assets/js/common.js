document.addEventListener("DOMContentLoaded", function () {
    // NAV

    const nav = document.querySelector("#nav");
    const listItems = [...nav.getElementsByTagName("li")];

    listItems.forEach((item) => {
        if (item.children.length > 1) {
            item.classList.add("has-children");
        }
    });

    // HEADER BURGER

    const burgerBtn = document.querySelector("#header__burger-btn");
    const header = document.querySelector("#header");

    burgerBtn.addEventListener("click", (event) => {
        event.preventDefault();
        header.classList.toggle("show");
    });

    // SWIPER CASES

    new Swiper(".swiper-cases", {
        direction: "horizontal",
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        speed: 700,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });

    // SWIPER SERVICE PAGE MENU LIST

    new Swiper(".swiper-service-page__menu-list", {
        direction: "horizontal",
        slidesPerView: 2,
        spaceBetween: 15,
        effect: "slide",
        speed: 700,
        loop: true,
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev"
        // },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });

    // CASES

    const cards = document.querySelectorAll(".card");
    const cardsInfo = document.querySelectorAll(".cases__item-info");

    cards.forEach((card, index) => {
        card.addEventListener("click", function () {
            this.classList.toggle("details");
            cardsInfo[index].classList.toggle("show");
        });
    });

    // FRAMES

    const frames = document.querySelectorAll(".frames__item");
    const frameLines = document.querySelectorAll(".frames__line-item");
    let index = 0;
    let isScrollTop = true;
    let isScrollDown = true;

    function removingСlasses(array, cls) {
        array.forEach((node) => {
            node.classList.remove(cls);
        });
    }

    window.addEventListener("wheel", function () {
        const deltaY = window.event.deltaY;

        if (deltaY === 100 && index <= frames.length - 2 && isScrollDown) {
            removingСlasses(frames, "show");

            frames[index].classList.add("hide");
            frames[++index].classList.add("show");
            frameLines[index].classList.add("active");

            isScrollDown = false;
            setTimeout(() => (isScrollDown = true), 700);
        } else if (deltaY === -100 && index >= 1 && isScrollTop) {
            removingСlasses(frames, "show");

            frameLines[index].classList.remove("active");
            frames[--index].classList.remove("hide");
            frames[index].classList.add("show");

            isScrollTop = false;
            setTimeout(() => (isScrollTop = true), 700);
        }
    });
});
