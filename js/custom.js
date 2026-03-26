/* slide Screen */
const slides = document.querySelectorAll(".step-slide-box-item");
const totalSlides = slides.length;
const counter = document.getElementById("slideCounter");
let current = 0;
let animating = false;

const slideContent = document.querySelectorAll(".step-slide-box-item > .row");

function updateCounter() {
    if (counter) {
        let total = totalSlides;
        let currentNum = current + 1;

        let textTemplate = counter.dataset.template;

        if (!textTemplate) {
            textTemplate = counter.textContent;
            counter.dataset.template = textTemplate;
        }

        let finalText = textTemplate.replace("{current}", currentNum).replace("{total}", total);

        counter.textContent = finalText;
    }
}

gsap.set(slides, { display: "none" });
gsap.set(slideContent, { autoAlpha: 0, y: 40 });

gsap.set(slides[0], { display: "block" });
gsap.set(slideContent[0], { autoAlpha: 1, y: 0 });
updateCounter();

function changeSlide(i, dir) {
    if (i < 0 || i >= slides.length || animating) return;

    animating = true;

    const currentContent = slideContent[current];
    const nextContent = slideContent[i];

    const currentSlide = slides[current];
    const nextSlide = slides[i];

    const tl = gsap.timeline({
        onComplete: () => {
            animating = false;
            updateCounter();
        },
    });

    tl.to(currentContent, {
        y: dir === 1 ? -60 : 60,
        autoAlpha: 0,
        duration: 0.4,
        ease: "power2.inOut",
    });

    tl.set(currentSlide, { display: "none" });

    tl.set(nextSlide, { display: "block" });

    tl.fromTo(
        nextContent,
        {
            y: dir === 1 ? 60 : -60,
            autoAlpha: 0,
        },
        {
            y: 0,
            autoAlpha: 1,
            duration: 0.5,
            ease: "power2.out",
        }
    );

    current = i;
}

document.addEventListener("click", function (e) {
    if (e.target.closest(".sliderBoxDownArrow") || e.target.closest(".btn-next-icon")) {
        changeSlide(current + 1, 1);
    }

    if (e.target.closest(".sliderBoxUpArrow")) {
        changeSlide(current - 1, -1);
    }
});

/* end-slide Screen */

/* Language-Logo */
$(function () {
    $("#languageDropdown").click(function () {
        var img = $(this).find("img");
        if (!img.length) return; // element na male to stop
        var src = img.attr("src");
        if (src.includes("language-norwegian-icon")) {
            img.attr("src", "images/language-english-icon.svg");
            img.attr("alt", "English");
        } else {
            img.attr("src", "images/language-norwegian-icon.svg");
            img.attr("alt", "Norwegian");
        }
    });
});
/* End-Language-Logo */
