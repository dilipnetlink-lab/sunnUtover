/* =========================
   DOM READY
========================= */
document.addEventListener("DOMContentLoaded", () => {
    initSliders();
    initCookieBox();
    initQuizListeners();
    initTooltips();
});

function initTooltips() {
    // Popover initialization
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

    // Close button functionality
    document.addEventListener('click', function (e) {
        if (e.target.closest('.popover-close-btn')) {
            const popoverEl = e.target.closest('.popover');
            if (popoverEl) {
                const popoverId = popoverEl.id;
                const triggerEl = document.querySelector(`[aria-describedby="${popoverId}"]`);
                if (triggerEl) {
                    const popoverInstance = bootstrap.Popover.getInstance(triggerEl);
                    if (popoverInstance) popoverInstance.hide();
                }
            }
        }
    });
}

/* slide Screen */
const slides = document.querySelectorAll(".step-slide-box-item");
const totalSlides = slides.length;
const counter = document.getElementById("slideCounter");
let current = 0;
let animating = false;
let currentSubIndex = 0;
const sliderContainer = document.querySelector(".step-slide-box-slider");

// Initialize window.REDS if it's missing to avoid TypeErrors
window.REDS = window.REDS || {
    baseUrl: "",
    locale: "no",
    csrfToken: "",
    section: 0,
    userLocation: "",
    maxSection: 0,
    exitUrl: "/no/exit",
};

// Targeted selectors for staggered animations - explicitly excluding seesaw-box to prevent double animations or layout jumps
const textSelector =
    ".step-slide-box-caption > *:not(.inner-step-box), .step-slide-box-caption > .inner-step-box.active, .step-slide-box-img > *:not(.seesaw-box), .step-slide-box-btn, .bg-img-text-con, .chackbox-list-ul, .sub-screen-tip";

/* --- Module 2 Special Hub --- */
function saveModule2WheelPart(subIdx) {
    let sectionInt = parseInt(window.REDS?.section, 10);
    if (sectionInt === 2) {
        let screenIndex = 3 + subIdx;
        let coordinate = `2.${screenIndex}`;

        // Sync with server only (server now handles the max_section check)
        const baseUrl = window.REDS?.baseUrl || "";
        const locale = window.REDS?.locale || "no";
        const csrfToken =
            document
                .querySelector('meta[name="csrf-token"]')
                ?.getAttribute("content") ||
            window.REDS?.csrfToken ||
            "";

        fetch(`${baseUrl}/${locale}/progress/update`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
            body: JSON.stringify({
                section: 2,
                screen_index: screenIndex,
                is_last_screen: false,
            }),
        }).catch((err) => console.error("[Module 2 Sync Error]:", err));
    }
}

function getModule2SpecificIndex(savedIdx) {
    // Mapping Screen Indices 3-15 to Sub-Index (Segments)
    if (savedIdx >= 3 && savedIdx <= 15) {
        currentSubIndex = savedIdx - 3;
        return 2; // Always Slide Index 2 (The Wheel)
    } else if (savedIdx > 15) {
        return savedIdx - 13; // Screens past the wheel
    }
    return -1; // Not handled here
}
/* --- End Module 2 Hub --- */

function setInitialHeight() {
    if (sliderContainer && slides[current]) {
        const h = slides[current].scrollHeight;
        gsap.set(sliderContainer, { height: h });
    }
}

function updateCounter() {
    if (!counter) return;

    const rawSection = window.REDS?.section || 0;
    const section = parseInt(rawSection, 10);
    let currentNum = current + 1;
    let totalNum = totalSlides;

    // Special grouping logic for Module 2
    if (section === 2) {
        totalNum = 20;
        if (current === 2) {
            currentNum = 3 + currentSubIndex;
        } else if (current > 2) {
            currentNum = current + 13;
        }
    }

    // Special grouping logic for Module 4
    if (section === 4) {
        totalNum = 16;
        if (current >= 10 && current <= 12) {
            currentNum = 11; // Group Athlete, Coach, and Parent tips as Step 11
        } else if (current > 12) {
            currentNum = current - 1; // Map 13->12, 14->13, 15->14
        }
    }

    // Special grouping logic for Module 5
    if (section === 5) {
        totalNum = 14;
        if (current >= 2 && current <= 4) {
            currentNum = 3; // Group Athlete, Coach, Parent (Indices 2,3,4) as Step 3
        } else if (current >= 5 && current <= 7) {
            currentNum = current - 1; // Screens 6,7,8 -> Steps 4,5,6
        } else if (current >= 8 && current <= 11) {
            currentNum = 7; // Group Specialist tips (8,9,10,11) as Step 7
        } else if (current > 11) {
            currentNum = current - 4; // Shift remaining (12,13,14 -> 8,9,10)
        }
    }

    let textTemplate = counter.dataset.template;
    if (!textTemplate) {
        textTemplate = counter.textContent.trim();
        if (textTemplate.includes("av")) {
            textTemplate = textTemplate.replace(
                /\d+ av \d+/,
                "{current} av {total}",
            );
            counter.dataset.template = textTemplate;
        } else if (textTemplate.includes("Part")) {
            textTemplate = textTemplate.replace(
                /\d+ of \d+/,
                "{current} of {total}",
            );
            counter.dataset.template = textTemplate;
        } else {
            textTemplate = "{current} / {total}";
            counter.dataset.template = textTemplate;
        }
    }

    if (textTemplate.includes("{current}")) {
        counter.textContent = textTemplate
            .replace("{current}", currentNum)
            .replace("{total}", totalNum);
    } else {
        if (window.REDS.locale === "no") {
            counter.textContent = "Del " + currentNum + " av " + totalNum;
        } else {
            counter.textContent = "Part " + currentNum + " of " + totalNum;
        }
    }

    updateHeaderTitle();
}

function updateHeaderTitle() {
    const titleEl = document.querySelector(".page-title-del-box-left h1");
    if (!titleEl) return;

    // Always query for the ACTIVE slide currently shown in the DOM
    const currentSlide = document.querySelector(".step-slide-box-item.active");
    if (!currentSlide) return;

    if (!titleEl.dataset.originalTitle) {
        titleEl.dataset.originalTitle = titleEl.innerText;
    }

    const isEn = window.REDS?.locale === "en";
    const sectionNum = parseInt(window.REDS?.section, 10) || 1;

    const isScoreSlide = currentSlide.classList.contains("quiz-result-slide-1");
    const isReviewSlide = currentSlide.classList.contains(
        "quiz-result-slide-2",
    );
    const isCongratulationsSlide = currentSlide.classList.contains(
        "quiz-result-slide-3",
    );
    const isSummarySlide = currentSlide.classList.contains(
        "quiz-result-slide-4",
    );

    if (
        isScoreSlide ||
        isReviewSlide ||
        isCongratulationsSlide ||
        isSummarySlide
    ) {
        // Module 5 specific "Sammenlagt resultat" for the final overview screens
        if (sectionNum === 5 && (isCongratulationsSlide || isSummarySlide)) {
            titleEl.innerText = isEn
                ? "Quiz - Overall result"
                : "Quiz - Sammenlagt resultat";
        } else {
            // General "Module X - Quiz result" for result/review screens
            titleEl.innerText = isEn
                ? "Module " + sectionNum + " - Quiz result"
                : "Modul " + sectionNum + " - Quiz resultat";
        }
    } else {
        // Revert to the module's main description title for standard slides
        titleEl.innerText = titleEl.dataset.originalTitle;
    }
}

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) {
        return parts.pop().split(";").shift();
    }
    return null;
}

function updateProgress(index, subIdx = -1) {
    if (!window.REDS || window.REDS.section === undefined) return;

    let sectionInt = parseInt(window.REDS.section, 10);

    // Save to sessionStorage for perfect resumption on F5 or language switch
    sessionStorage.setItem("reds_resume_sec_" + sectionInt, index);
    if (subIdx !== -1) {
        sessionStorage.setItem("reds_resume_sub_" + sectionInt, subIdx);
    }

    // Module 2 isolated logic
    if (sectionInt === 2 && index === 2 && subIdx !== -1) {
        saveModule2WheelPart(subIdx);
        return; // Hub handles saving
    }

    let screenIndex = index + 1;
    if (sectionInt === 2 && index > 2) {
        screenIndex = index + 13; // Map physical index 3 to Screen 16, 4 to 17, etc.
    }

    const isLastScreen =
        index === totalSlides - 1 ||
        (slides[index] &&
            slides[index].classList.contains("quiz-result-slide-1"));
    const location = `${sectionInt}.${screenIndex}`;

    const data = {
        section: sectionInt,
        screen_index: screenIndex,
        is_last_screen: isLastScreen,
    };

    const baseUrl = window.REDS?.baseUrl || "";
    const locale = window.REDS?.locale || "no";
    const csrfToken =
        document
            .querySelector('meta[name="csrf-token"]')
            ?.getAttribute("content") ||
        window.REDS?.csrfToken ||
        "";

    fetch(`${baseUrl}/${locale}/progress/update`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken,
        },
        body: JSON.stringify(data),
    }).catch((err) => console.error("Progress Error:", err));
}

function getSavedIndex() {
    const section = parseInt(window.REDS?.section) || 0;

    // 1. Session Storage handles F5 refresh and Language Switching perfectly.
    // If the user hasn't visited the dashboard to clear this, resume exactly where they are!
    const sessionLoc = sessionStorage.getItem("reds_resume_sec_" + section);
    if (sessionLoc !== null) {
        let savedIdx = parseInt(sessionLoc, 10);
        const sessionSub = sessionStorage.getItem("reds_resume_sub_" + section);
        if (sessionSub !== null && section === 2 && savedIdx === 2) {
            currentSubIndex = parseInt(sessionSub, 10);
        }
        return savedIdx;
    }

    const cookieLoc = getCookie("resume_loc") || "";
    const windowLoc = window.REDS?.userLocation || "";
    // Prioritize the raw cookie if it exists to avoid server lag or staleness
    const userLocation = cookieLoc || windowLoc;

    if (userLocation) {
        let parts = userLocation.split(".");
        let savedSec = parseInt(parts[0], 10);
        let savedIdx = parseInt(parts[1], 10);

        if (savedSec === section) {
            // Completed modules keep stale resume_loc at the last screen; "Try again" must start at 1
            const maxSection = parseInt(window.REDS?.maxSection, 10) || 0;
            if (section > 0 && maxSection >= section) {
                return 0;
            }
            // Check for Module 2 specific hubs first
            if (section === 2) {
                let m2Idx = getModule2SpecificIndex(savedIdx);
                if (m2Idx !== -1) return m2Idx;
            }
            let res = savedIdx - 1;
            return isNaN(res) ? 0 : res;
        }
    }
    return 0;
}

const savedIndex = getSavedIndex();
current = savedIndex >= 0 && savedIndex < totalSlides ? savedIndex : 0;

function initSliders() {
    gsap.set(slides, { display: "none" });
    if (slides.length > 0) {
        const si = getSavedIndex();
        current = si >= 0 && si < slides.length ? si : 0;
        const nextSlide = slides[current];

        // SYNC SUB-SCREEN BEFORE WE SELECT ELEMENTS TO ANIMATE
        let currentSectionInt = parseInt(window.REDS?.section, 10);
        if (currentSectionInt === 2 && current === 2) {
            updateSubSlide(nextSlide, currentSubIndex, false);
        }

        // Restrict stagger animation to only the currently visible sub-screen and global elements
        let nextElements = Array.from(nextSlide.querySelectorAll(textSelector));
        nextElements = nextElements.filter((el) => {
            const parentSub = el.closest(".sub-screen-content");
            return !parentSub || parentSub.classList.contains("active-sub");
        });

        gsap.set(nextSlide, { display: "block" });
        setInitialHeight();
        slides.forEach((s) => s.classList.remove("active"));
        nextSlide.classList.add("active");
        gsap.fromTo(
            nextElements,
            { autoAlpha: 0, y: 30 },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.6,
                stagger: 0.1,
                ease: "power2.out",
            },
        );

        updateCounter();
        toggleNextButtonAccess();
        updateQuizResults();
        restoreQuizStates();
    }
}

/**
 * Applies color feedback (red/green/flash) to a quiz question based on the selected radio.
 * @param {HTMLInputElement} radio
 * @param {boolean} triggerFlash - If true, flashes the correct answer when wrong is selected.
 */
function applyQuizFeedback(radio, triggerFlash = true) {
    if (!radio || radio.type !== "radio") return;

    const group = document.getElementsByName(radio.name);
    if (!window.REDS_CORRECT_ANSWERS_MAP) {
        window.REDS_CORRECT_ANSWERS_MAP = getCorrectAnswersMap();
    }

    const box = radio.closest(".step-slide-box-caption");
    if (!box) return;
    const qId = box.dataset.questionId;
    const correctOptId = window.REDS_CORRECT_ANSWERS_MAP[qId];

    if (correctOptId) {
        // First loop: clean up any old states that shouldn't be here anymore
        group.forEach((r) => {
            const parent = r.closest(".radio-label-grop");
            if (!parent) return;

            if (r !== radio) {
                parent.classList.remove("correct-selection");
                parent.classList.remove("flash-correct");
                parent.classList.remove("wrong-selection");
            }
        });

        const currentParent = radio.closest(".radio-label-grop");
        if (radio.value == correctOptId) {
            currentParent.classList.add("correct-selection");
            currentParent.classList.remove("wrong-selection", "flash-correct");
        } else {
            currentParent.classList.add("wrong-selection");
            currentParent.classList.remove("correct-selection");

            // Flash the correct answer ONLY if we are currently clicking/changing (not just navigating back)
            if (triggerFlash) {
                const correctRadio = Array.from(group).find(
                    (r) => r.value == correctOptId,
                );
                if (correctRadio) {
                    const cParent = correctRadio.closest(".radio-label-grop");
                    if (cParent) {
                        cParent.classList.remove("flash-correct");
                        void cParent.offsetWidth; // Trigger reflow
                        cParent.classList.add("flash-correct");
                    }
                }
            }
        }
    }
}

/**
 * Scans the current view for checked radios and applies feedback.
 */
function restoreQuizStates() {
    const checked = document.querySelectorAll(".radio-input:checked");
    checked.forEach((radio) => {
        applyQuizFeedback(radio, false);
    });
}


function changeSlide(i, dir) {
    if (animating || i < 0 || i >= slides.length) {
        if (i === slides.length) {
            // Section complete — cookies are updated/cleared via the exit route
            window.location.href = window.REDS.exitUrl;
        }
        return;
    }

    gsap.killTweensOf("*");
    animating = true;

    // Scroll to focus title on slide change
    // const titleBox = document.querySelector(".page-box-full-con");
    // if (titleBox) {
    //     titleBox.scrollIntoView({ behavior: "smooth", block: "start" });
    // } else {
    //     window.scrollTo({ top: 0, behavior: "smooth" });
    // }

    const prevSlide = slides[current];
    const nextSlide = slides[i];

    // Measure target height
    gsap.set(nextSlide, { display: "block", visibility: "hidden", position: "absolute", width: sliderContainer.offsetWidth });
    const targetHeight = nextSlide.scrollHeight;
    gsap.set(nextSlide, { display: "none", visibility: "visible", position: "relative", width: "auto" });

    // CSS state sync
    prevSlide.classList.remove("active");
    nextSlide.classList.add("active");

    if (
        nextSlide.classList.contains("quiz-result-slide-1") ||
        nextSlide.classList.contains("quiz-result-slide-2")
    ) {
        updateQuizResults();
    }

    // Fix: Ensure we save the correct sub-index if moving to the wheel
    if (nextSlide.classList.contains("nodiff-container-slide")) {
        const targetSubIdx = i > current ? 0 : 12;
        updateProgress(i, targetSubIdx);
    } else {
        updateProgress(i);
    }

    const captionSelector =
        ".step-slide-box-caption > *:not(.inner-step-box), .step-slide-box-caption > .inner-step-box.active, .step-slide-box-btn, .bg-img-text-con, .chackbox-list-ul, .sub-screen-tip";
    const imgSelector = ".step-slide-box-img > *:not(.seesaw-box):not(.seesaw-pivot-box):not(.seesaw-animation-wrapper):not(.battery-wrapper):not(.svg-wrap):not(.wheel-animate)";

    let prevCaptions, prevImages;
    if (prevSlide.classList.contains("nodiff-container-slide")) {
        const activeSub =
            prevSlide.querySelector(".sub-screen-content.active-sub") ||
            prevSlide.querySelector(
                `.sub-screen-content[data-sub-index="${currentSubIndex}"]`,
            );
        prevCaptions = activeSub
            ? activeSub.querySelectorAll(captionSelector)
            : prevSlide.querySelectorAll(captionSelector);
        prevImages = activeSub
            ? activeSub.querySelectorAll(imgSelector)
            : prevSlide.querySelectorAll(imgSelector);
    } else {
        prevCaptions = prevSlide.querySelectorAll(captionSelector);
        prevImages = prevSlide.querySelectorAll(imgSelector);
    }

    let nextCaptions, nextImages;
    if (nextSlide.classList.contains("nodiff-container-slide")) {
        const targetSubIdx = i > current ? 0 : 12; // Start at first part if forward, last if back
        updateSubSlide(nextSlide, targetSubIdx, false);
        const nextSub = nextSlide.querySelector(
            `.sub-screen-content[data-sub-index="${targetSubIdx}"]`,
        );
        nextCaptions = nextSub
            ? nextSub.querySelectorAll(captionSelector)
            : nextSlide.querySelectorAll(captionSelector);
        nextImages = nextSub
            ? nextSub.querySelectorAll(imgSelector)
            : nextSlide.querySelectorAll(imgSelector);
    } else {
        nextCaptions = nextSlide.querySelectorAll(captionSelector);
        nextImages = nextSlide.querySelectorAll(imgSelector);
    }

    const tl = gsap.timeline({
        onComplete: () => {
            animating = false;
            current = i;
            updateCounter();
            toggleNextButtonAccess(i);
            sliderContainer.style.height = "auto";
        },
    });

    // Animate height
    tl.to(sliderContainer, {
        height: targetHeight,
        duration: 0.5,
        ease: "power2.inOut"
    }, 0);

    tl.to([prevCaptions, prevImages], {
        y: dir === 1 ? -20 : 20,
        autoAlpha: 0,
        duration: 0.25,
        stagger: 0.03,
        ease: "power2.inOut",
    })
        .set(prevSlide, { display: "none" })
        .set(nextSlide, { display: "block" })
        .add(() => {
            // Seesaw Pivot Handling (Symmetric Animation or Direct for Backward)
            const nextSeesawPivot =
                nextSlide.querySelector(".seesaw-pivot-box");
            if (nextSeesawPivot) {
                const targetState =
                    nextSeesawPivot.dataset.seesawState || "balanced";
                const initialState =
                    targetState === "unbalanced" ? "balanced" : "unbalanced";

                // Fade in the whole seesaw pivot smoothly as the slide appears
                // EXCEPT when moving between Screen 4 and 5 (indices 3 and 4) to maintain continuity
                const isSeesawDirectMove =
                    (current === 3 && i === 4) || (current === 4 && i === 3);
                if (!isSeesawDirectMove) {
                    gsap.fromTo(
                        nextSeesawPivot,
                        { autoAlpha: 0 },
                        { autoAlpha: 1, duration: 0.8, ease: "power2.out" },
                    );
                }

                // If going FORWARD to a BALANCED state (Screen 3 to 4), show it instantly (direct stable)
                // If going BACKWARD to an UNBALANCED state (Screen 6 to 5), show it instantly
                if (
                    (dir === 1 && targetState === "balanced") ||
                    (dir === -1 && targetState === "unbalanced")
                ) {
                    nextSeesawPivot.classList.remove(
                        "state-balanced",
                        "state-unbalanced",
                    );
                    nextSeesawPivot.classList.add(`state-${targetState}`);
                    // Fade effect as per user request
                    gsap.fromTo(
                        nextSeesawPivot,
                        { autoAlpha: 0 },
                        { autoAlpha: 1, duration: 0.8, ease: "power2.out" },
                    );
                } else {
                    // Otherwise (Forward to Unbalanced, or Backward to Balanced), always animate for premium feel
                    nextSeesawPivot.classList.remove(
                        "state-balanced",
                        "state-unbalanced",
                    );
                    nextSeesawPivot.classList.add(`state-${initialState}`);
                    gsap.delayedCall(0.05, () => {
                        nextSeesawPivot.classList.remove(
                            `state-${initialState}`,
                        );
                        nextSeesawPivot.classList.add(`state-${targetState}`);
                    });
                }
            }
            toggleNextButtonAccess(i);
        })
        .fromTo(
            nextCaptions,
            { y: dir === 1 ? 20 : -20, autoAlpha: 0 },
            {
                y: 0,
                autoAlpha: 1,
                duration: 0.4,
                stagger: 0.08,
                ease: "power2.out",
                onComplete: () => {
                    toggleNextButtonAccess(i);
                },
            },
        )
        .fromTo(
            nextImages,
            { autoAlpha: 0, y: dir === 1 ? 20 : -20 },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.5,
                ease: "power2.out",
                onComplete: () => restoreQuizStates(),
            },
            "-=0.3",
        );
}

function updateSubSlide(container, index, animate = true) {
    if (!container || index === undefined) return;
    const prevSubIndex = currentSubIndex;
    currentSubIndex = index;

    // Scroll to focus title on sub-slide change
    // const titleBox = document.querySelector(".page-box-full-con");
    // if (titleBox) {
    //     titleBox.scrollIntoView({ behavior: "smooth", block: "start" });
    // } else {
    //     window.scrollTo({ top: 0, behavior: "smooth" });
    // }
    const contents = container.querySelectorAll(".sub-screen-content");
    const tips = container.querySelectorAll(".sub-screen-tip");
    const wheel = container.querySelector(".active-pie-wheel");
    const totalSegments = 14;
    const angleStep = 360 / totalSegments;

    const prevSub = contents[prevSubIndex];
    const nextSub = contents[index];
    const prevTip = Array.from(tips).find(
        (t) => t.dataset.subIndex == prevSubIndex,
    );
    const nextTip = Array.from(tips).find((t) => t.dataset.subIndex == index);

    let activeIndices = [index];
    let focusIndex = index;

    if (index === 0) {
        // First screen (intro): Focus on Screen 15 (Index 13), highlight both Screen 03 segments (0 & 12)
        activeIndices = [0, 12];
        focusIndex = 13;
    } else if (index === 12) {
        // Last screen (Screen 15): Focus on Screen 15 (Index 13), highlight Screen 15
        activeIndices = [13];
        focusIndex = 13;
    } else {
        // Screens 4 to 14 (sub-indices 1 to 11) map directly to indices 1 to 11
        activeIndices = [index];
        focusIndex = index;
    }

    if (prevSub && nextSub && prevSub !== nextSub && animate) {
        gsap.killTweensOf(contents);
        gsap.killTweensOf(tips);

        // Aggressive Reset: Ensure no other slides are stuck in 'active' state during rapid clicks
        contents.forEach((c) => {
            if (c !== prevSub && c !== nextSub) {
                c.classList.remove("active-sub");
                gsap.set(c, { autoAlpha: 0, y: 0 });
            }
        });

        // Measure next sub-slide height
        gsap.set(nextSub, { display: "block", visibility: "hidden", position: "absolute", width: sliderContainer.offsetWidth });
        const targetHeight = nextSub.scrollHeight;
        gsap.set(nextSub, { display: "none", visibility: "visible", position: "relative", width: "auto" });

        const tl = gsap.timeline({
            onComplete: () => {
                sliderContainer.style.height = "auto";
            }
        });

        // Animate height
        tl.to(sliderContainer, {
            height: targetHeight,
            duration: 0.5,
            ease: "power2.inOut"
        }, 0);

        // Step 1: Fade and Float UP current slide
        tl.to(prevSub, {
            autoAlpha: 0,
            y: -20,
            duration: 0.25,
            ease: "power2.inOut",
            onComplete: () => {
                prevSub.classList.remove("active-sub");
                gsap.set(prevSub, { y: 0 }); // Reset for next use
            },
        })
            // Step 2: Toggle Visibility (Next becomes relative/takes space)
            .add(() => {
                nextSub.classList.add("active-sub");
                // Highlight staggered reveals inside
                const targets = nextSub.querySelectorAll(textSelector);
                gsap.killTweensOf(targets);
                gsap.fromTo(
                    targets,
                    { autoAlpha: 0, y: 15 },
                    {
                        autoAlpha: 1,
                        duration: 0.5,
                        stagger: 0.08,
                        ease: "power2.out",
                    },
                );
            })
            // Step 3: Fade and Float UP the next slide into place
            .fromTo(
                nextSub,
                { autoAlpha: 0, y: 20 },
                { autoAlpha: 1, y: 0, duration: 0.35, ease: "power2.out" },
                "-=0.05",
            );

        if (prevTip) gsap.to(prevTip, { autoAlpha: 0, y: -15, duration: 0.3 });
        if (nextTip) {
            gsap.set(nextTip, { autoAlpha: 0, y: 15 });
            gsap.fromTo(nextTip, {
                autoAlpha: 1,
                y: 0,
                duration: 0.4,
                ease: "power3.out",
            });
        }
    } else {
        contents.forEach((c, i) => {
            if (i === index) {
                c.classList.add("active-sub");
                gsap.set(c, {
                    autoAlpha: 1,
                    position: "relative",
                    clearProps: "top,left,zIndex,width,y",
                });
            } else {
                c.classList.remove("active-sub");
                gsap.set(c, { autoAlpha: 0 });
            }
        });
        tips.forEach((t) => {
            if (t.dataset.subIndex == index)
                gsap.set(t, { display: "block", autoAlpha: 1 });
            else gsap.set(t, { display: "none", autoAlpha: 0 });
        });
    }

    if (wheel) {
        const targetRot = -focusIndex * angleStep;
        let currentRot = gsap.getProperty(wheel, "rotation") || 0;

        // Calculate shortest path
        let delta = (targetRot - currentRot) % 360;
        if (delta > 180) delta -= 360;
        if (delta < -180) delta += 360;

        gsap.to(wheel, {
            rotation: currentRot + delta,
            scale: 1.1,
            duration: animate ? 1 : 0,
            ease: "power3.out",
            overwrite: true,
        });
        updateGlobalWheelSegments(wheel, activeIndices, totalSegments);
    }
    if (animate) {
        updateProgress(current, currentSubIndex);
    }
    updateCounter();
}

function updateGlobalWheelSegments(wheel, activeIdxs, total) {
    const slices = wheel.querySelectorAll(".slice-wrap");
    const actives = Array.isArray(activeIdxs) ? activeIdxs : [activeIdxs];
    const primaryActive = actives[0];

    slices.forEach((slice, i) => {
        const seg = slice.querySelector(".segment");
        if (!seg) return;
        const isActive = actives.includes(i);
        slice.classList.toggle("active-wrap", isActive);
        seg.classList.toggle("active", isActive);
        let opacity = 1;
        let minDiff = total;
        if (isActive) {
            opacity = 1;
            minDiff = 0;
        } else {
            actives.forEach((a) => {
                const diff = Math.min(Math.abs(i - a), total - Math.abs(i - a));
                if (diff < minDiff) minDiff = diff;
            });
            if (minDiff === 1) opacity = 0.4;
            else if (minDiff > 1) opacity = 0.15;
        }
        seg.style.opacity = opacity;
        slice.style.transform = `rotate(${i * (360 / total)}deg) scale(${isActive ? 1.08 : 1})`;
        slice.style.zIndex = isActive ? 150 : 100 - minDiff;
    });
}

function getCorrectAnswersMap() {
    const map = {};
    document.querySelectorAll(".result-text-box-table-con").forEach((box) => {
        const qId = box.dataset.questionId;
        const correctRow = box.querySelector("tr.anscorrect");
        if (qId && correctRow) {
            const match = correctRow.className.match(/opt-row-(\d+)/);
            if (match) {
                map[qId] = match[1];
            }
        }
    });
    return map;
}

document.addEventListener("change", function (e) {
    if (
        e.target.classList.contains("radio-input") &&
        e.target.type === "radio"
    ) {
        applyQuizFeedback(e.target);
    }
});

document.addEventListener("click", function (e) {
    const section = parseInt(window.REDS?.section, 10);
    const downArrow =
        e.target.closest(".sliderBoxDownArrow") ||
        e.target.closest(".btn-next-icon") ||
        e.target.closest(".btn-next-cir-icon") ||
        e.target.closest(".quiz-next") ||
        e.target.closest(".go-to-quiz");
    const upArrow =
        e.target.closest(".sliderBoxUpArrow") ||
        e.target.closest(".quiz-prev") ||
        e.target.closest(".go-to-role");
    const exitBtn = e.target.closest(".btn-exit-icon");
    const downBtnSub = e.target.closest(".subSliderBoxDownArrow");
    const upBtnSub = e.target.closest(".subSliderBoxUpArrow");

    // Exit Button
    if (exitBtn) {
        e.preventDefault();
        window.location.href =
            window.REDS.exitUrl || (window.REDS.locale || "no") + "/exit";
        return;
    }

    function showValidationToast(activeQuizBox) {
        const msg =
            window.REDS?.locale === "no"
                ? "Vennligst velg et alternativ for å fortsette."
                : "Please select an option to continue.";

        // Remove any existing validation message
        const existing = document.getElementById("quiz-validation-toast");
        if (existing) existing.remove();

        // Find the .step-slide-box-caption inside the active quiz box
        const caption =
            activeQuizBox.closest(".step-slide-box-caption") || activeQuizBox;

        const toast = document.createElement("div");
        toast.id = "quiz-validation-toast";
        toast.textContent = msg;
        Object.assign(toast.style, {
            display: "block",
            background: "#bed37c",
            color: "#000",
            fontWeight: "600",
            fontSize: "14px",
            padding: "10px 20px",
            borderRadius: "6px",
            marginTop: "12px",
            opacity: "1",
            transition: "opacity 0.5s ease",
        });

        // Insert after the caption div
        caption.insertAdjacentElement("afterend", toast);

        // Scroll into view if needed
        toast.scrollIntoView({ behavior: "smooth", block: "nearest" });

        // Auto-dismiss after 3s
        setTimeout(() => {
            toast.style.opacity = "0";
            setTimeout(() => toast.remove(), 500);
        }, 3000);
    }

    function submitActiveQuiz() {
        const currentSlideEl = slides[current];
        if (!currentSlideEl) return true;

        let quizBoxes = Array.from(
            currentSlideEl.querySelectorAll("[data-question-id]"),
        );
        let activeQuizBox = quizBoxes.find(
            (box) =>
                box.offsetParent !== null &&
                box.querySelector('input[type="radio"]'),
        );

        if (activeQuizBox) {
            let selected = activeQuizBox.querySelector(
                'input[type="radio"]:checked',
            );
            if (!selected) {
                showValidationToast(activeQuizBox);
                return false; // Block navigation
            }
            const baseUrl = window.REDS?.baseUrl || "";
            const locale = window.REDS?.locale || "no";
            const csrfToken =
                document
                    .querySelector('meta[name="csrf-token"]')
                    ?.getAttribute("content") ||
                window.REDS?.csrfToken ||
                "";
            fetch(`${baseUrl}/${locale}/quiz/submit`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: JSON.stringify({
                    question_id: activeQuizBox.dataset.questionId,
                    option_id: selected.value,
                }),
            }).catch((err) => console.error("Quiz Submit Error:", err));
        }

        // Special handling for Module 4 Checklist
        let checklistBoxes = currentSlideEl.querySelectorAll(
            '.chackbox-list-ul input[type="checkbox"]',
        );
        if (checklistBoxes.length > 0) {
            let selectedArr = [];
            checklistBoxes.forEach((cb) => {
                if (cb.checked && cb.nextElementSibling) {
                    selectedArr.push(cb.nextElementSibling.innerText.trim());
                }
            });
            if (selectedArr.length > 0) {
                const baseUrl = window.REDS?.baseUrl || "";
                const locale = window.REDS?.locale || "no";
                const csrfToken =
                    document
                        .querySelector('meta[name="csrf-token"]')
                        ?.getAttribute("content") ||
                    window.REDS?.csrfToken ||
                    "";
                fetch(`${baseUrl}/${locale}/quiz/submit`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                    },
                    body: JSON.stringify({
                        question_id: 0,
                        option_id: 0,
                        prevention_answer: selectedArr,
                    }),
                }).catch((err) =>
                    console.error("Checklist Submit Error:", err),
                );
            }
        }

        return true;
    }

    // Pie Chart Sub-Nav
    const container = document.querySelector(".nodiff-container-slide");
    if (downBtnSub && container) {
        if (!submitActiveQuiz()) return;

        if (currentSubIndex < 12) {
            updateSubSlide(container, currentSubIndex + 1);
        } else {
            changeSlide(current + 1, 1);
        }
        return;
    }
    if (upBtnSub && container) {
        if (currentSubIndex > 0) {
            updateSubSlide(container, currentSubIndex - 1);
        } else {
            changeSlide(current - 1, -1);
        }
        return;
    }

    // Main Nav
    if (downArrow) {
        // Let actual links in the result screens execute natively instead of intercepting them
        let aTag = e.target.closest("a");
        if (
            aTag &&
            aTag.hasAttribute("href") &&
            aTag.getAttribute("href") !== "javascript:void(0)" &&
            aTag.closest('[class*="quiz-result-slide"]')
        ) {
            return;
        }

        if (!submitActiveQuiz()) return;

        const currentSlideEl = slides[current];
        if (!currentSlideEl) return;

        // "Box Slide" Skip Logic (Module 4/5 Path Screens)
        if (currentSlideEl.classList.contains("box-slide")) {
            // Record where we came from for back-navigation from later quiz screens
            if (section === 4 || section === 5) {
                window.REDS.lastPathIndex = current;
            }

            let nextIdx = current + 1;
            while (
                nextIdx < totalSlides &&
                slides[nextIdx].classList.contains("box-slide")
            ) {
                nextIdx++;
            }
            changeSlide(nextIdx, 1);
            return;
        }

        // Inner boxes (Module 3)
        let innerBoxes = currentSlideEl.querySelectorAll(".inner-step-box");
        if (innerBoxes.length > 0) {
            let activeIdx = Array.from(innerBoxes).findIndex((box) =>
                box.classList.contains("active"),
            );
            if (activeIdx !== -1 && activeIdx < innerBoxes.length - 1) {
                if (animating) return;
                animating = true;
                const currentBox = innerBoxes[activeIdx];
                const nextBox = innerBoxes[activeIdx + 1];

                // Measure next box height
                gsap.set(nextBox, { display: "block", visibility: "hidden", position: "absolute", width: sliderContainer.offsetWidth });
                const targetH = nextBox.scrollHeight;
                gsap.set(nextBox, { display: "none", visibility: "visible", position: "relative" });

                gsap.to(sliderContainer, { height: targetH, duration: 0.4, ease: "power2.inOut" });

                gsap.to(currentBox, {
                    y: -20,
                    autoAlpha: 0,
                    duration: 0.3,
                    ease: "power2.inOut",
                    onComplete: () => {
                        // Scroll to focus title for inner boxes
                        // const titleBox =
                        //     document.querySelector(".page-box-full-con");
                        // if (titleBox) {
                        //     titleBox.scrollIntoView({
                        //         behavior: "smooth",
                        //         block: "start",
                        //     });
                        // } else {
                        //     window.scrollTo({ top: 0, behavior: "smooth" });
                        // }

                        currentBox.classList.remove("active");
                        nextBox.classList.add("active");
                        gsap.fromTo(
                            nextBox,
                            { y: 20, autoAlpha: 0 },
                            {
                                y: 0,
                                autoAlpha: 1,
                                duration: 0.4,
                                ease: "power2.out",
                                onComplete: () => {
                                    animating = false;
                                    toggleNextButtonAccess();
                                    sliderContainer.style.height = "auto";
                                },
                            },
                        );
                    },
                });
                return;
            }
        }
        changeSlide(current + 1, 1);
    }

    if (upArrow) {
        const currentSlideEl = slides[current];
        if (!currentSlideEl) return;

        // "Box Slide" Back Logic (Module 4/5 Path Screens) -> Return to Selection Hub
        // Case 1: We are currently on a path screen. Return to the hub before it.
        if (currentSlideEl.classList.contains("box-slide")) {
            let prevIdx = current - 1;
            while (
                prevIdx >= 0 &&
                slides[prevIdx].classList.contains("box-slide")
            ) {
                prevIdx--;
            }
            changeSlide(prevIdx, -1);
            return;
        }

        // Case 2: We are on a normal screen but about to go BACK into a group of path screens.
        // We should skip back to the specific path we chose, or default to the hub.
        if (
            current > 0 &&
            slides[current - 1].classList.contains("box-slide")
        ) {
            if (
                window.REDS &&
                window.REDS.lastPathIndex !== undefined &&
                window.REDS.lastPathIndex !== -1
            ) {
                const target = window.REDS.lastPathIndex;
                window.REDS.lastPathIndex = -1; // Reset
                changeSlide(target, -1);
                return;
            }
            let prevIdx = current - 1;
            while (
                prevIdx >= 0 &&
                slides[prevIdx].classList.contains("box-slide")
            ) {
                prevIdx--;
            }
            changeSlide(prevIdx, -1);
            return;
        }

        let innerBoxes = currentSlideEl.querySelectorAll(".inner-step-box");
        if (innerBoxes.length > 0) {
            let activeIdx = Array.from(innerBoxes).findIndex((box) =>
                box.classList.contains("active"),
            );
            if (activeIdx > 0) {
                if (animating) return;
                animating = true;
                const currentBox = innerBoxes[activeIdx];
                const prevBox = innerBoxes[activeIdx - 1];

                // Measure prev box height
                gsap.set(prevBox, { display: "block", visibility: "hidden", position: "absolute", width: sliderContainer.offsetWidth });
                const targetH = prevBox.scrollHeight;
                gsap.set(prevBox, { display: "none", visibility: "visible", position: "relative" });

                gsap.to(sliderContainer, { height: targetH, duration: 0.4, ease: "power2.inOut" });

                gsap.to(currentBox, {
                    y: 20,
                    autoAlpha: 0,
                    duration: 0.3,
                    ease: "power2.inOut",
                    onComplete: () => {
                        // Scroll to focus title for inner boxes
                        // const titleBox =
                        //     document.querySelector(".page-box-full-con");
                        // if (titleBox) {
                        //     titleBox.scrollIntoView({
                        //         behavior: "smooth",
                        //         block: "start",
                        //     });
                        // } else {
                        //     window.scrollTo({ top: 0, behavior: "smooth" });
                        // }

                        currentBox.classList.remove("active");
                        prevBox.classList.add("active");
                        gsap.fromTo(
                            prevBox,
                            { y: -20, autoAlpha: 0 },
                            {
                                y: 0,
                                autoAlpha: 1,
                                duration: 0.4,
                                ease: "power2.out",
                                onComplete: () => {
                                    animating = false;
                                    toggleNextButtonAccess();
                                    sliderContainer.style.height = "auto";
                                },
                            },
                        );
                    },
                });
                return;
            }
        }
        changeSlide(current - 1, -1);
    }
});

function toggleNextButtonAccess(idx = null) {
    const slideIdx = idx !== null ? idx : current;
    const currentSlideEl = slides[slideIdx];
    if (!currentSlideEl) return;

    // Find any quiz box on the targeted slide (even if it's inside an inner-step-box)
    // and ONLY check it if it is the currently visible one AND contains radio inputs
    const quizBoxes = currentSlideEl.querySelectorAll("[data-question-id]");
    let activeQuizBox = Array.from(quizBoxes).find(
        (box) =>
            box.offsetParent !== null &&
            box.querySelector('input[type="radio"]'),
    );

    const nextBtn = currentSlideEl.querySelector(
        ".sliderBoxDownArrow, .btn-next-icon, .quiz-next, .btn-next-cir-icon",
    );
    if (!nextBtn) return;

    if (!activeQuizBox) {
        // Not a quiz slide or no sub-quiz active — ensure it's enabled
        nextBtn.removeAttribute("disabled");
        nextBtn.style.opacity = "1";
        nextBtn.style.pointerEvents = "auto";
        return;
    }

    const isSelected = !!activeQuizBox.querySelector(
        'input[type="radio"]:checked',
    );

    if (isSelected) {
        nextBtn.removeAttribute("disabled");
        nextBtn.style.opacity = "1";
        nextBtn.style.pointerEvents = "auto";
    } else {
        nextBtn.setAttribute("disabled", "disabled");
        nextBtn.style.opacity = "0.5";
        nextBtn.style.pointerEvents = "none";
    }
}

// Global listener for radio changes to instantly update button state
document.addEventListener("change", function (e) {
    if (e.target.matches('input[type="radio"]')) {
        toggleNextButtonAccess();
    }
});

document.addEventListener("DOMContentLoaded", initSliders);

/* =========================
   COOKIE BOX LOGIC
========================= */
function copyToClipboard() {
    var copyText = document.getElementById("linkInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);

    var copyBtn = document.getElementById("copyBtn");
    var originalText = copyBtn.innerHTML;
    copyBtn.innerHTML = "Kopiert!";
    setTimeout(function () {
        copyBtn.innerHTML = originalText;
    }, 2000);
}

function updateQuizResults() {
    let selectedOptions = [];
    document
        .querySelectorAll('input[type="radio"]:checked')
        .forEach((radio) => {
            selectedOptions.push(radio.value.toString());
        });

    // Also include any options already marked by PHP to ensure we do not wipe them
    document.querySelectorAll(".myans").forEach((el) => {
        let optClass = Array.from(el.classList).find((c) =>
            c.startsWith("opt-row-"),
        );
        if (optClass) {
            let id = optClass.replace("opt-row-", "");
            if (!selectedOptions.includes(id)) {
                selectedOptions.push(id.toString());
            }
        }
    });

    let resultTables = document.querySelectorAll(".result-text-box-table-con");
    if (resultTables.length === 0) return;

    let correctCount = 0;

    resultTables.forEach((box) => {
        let qHasCorrect = false;
        box.querySelectorAll("tr").forEach((tr) => {
            let optClass = Array.from(tr.classList).find((c) =>
                c.startsWith("opt-row-"),
            );
            if (optClass) {
                let optId = optClass.replace("opt-row-", "");
                if (selectedOptions.includes(optId)) {
                    tr.classList.add("myans");
                    if (tr.classList.contains("anscorrect")) {
                        qHasCorrect = true;
                    }
                } else {
                    tr.classList.remove("myans");
                }
            }
        });
        if (qHasCorrect) correctCount++;
    });

    let totalQuestions = document.querySelectorAll(
        ".step-slide-box-caption[data-question-id]",
    ).length;
    if (totalQuestions === 0) {
        totalQuestions = resultTables.length;
    }

    document
        .querySelectorAll(".correct-count")
        .forEach((el) => (el.innerText = correctCount));
    document
        .querySelectorAll(".wrong-count")
        .forEach((el) => (el.innerText = totalQuestions - correctCount));

    // Update Overall Module 5 Score if it exists
    let mod5CorrEl = document.querySelector(".mod-corr-5");
    if (mod5CorrEl) {
        mod5CorrEl.innerText = correctCount;

        let overallCorrect = 0;
        let overallTotal = 0;

        document.querySelectorAll(".mod-sum-row").forEach((row) => {
            let modId = row.dataset.mod;
            let total = parseInt(row.dataset.total);
            let score = 0;
            if (modId == "5") {
                score = correctCount;
                let m5Text = row.querySelector(".mod-corr-5");
                if (m5Text) m5Text.innerText = score;
            } else {
                score = parseInt(row.dataset.score);
            }
            overallCorrect += score;
            overallTotal += total;

            let corrSpan = row.querySelector(".mod-corr-" + modId);
            let textDiv = row.querySelector(".correct-ans-text");

            if (score === total && total > 0) {
                if (corrSpan) corrSpan.classList.add("secondaryColor");
                if (textDiv) textDiv.classList.add("secondaryColor");
            } else {
                if (corrSpan) corrSpan.classList.remove("secondaryColor");
                if (textDiv) textDiv.classList.remove("secondaryColor");
            }
        });

        document
            .querySelectorAll(".overall-correct")
            .forEach((el) => (el.innerText = overallCorrect));
        document
            .querySelectorAll(".overall-total")
            .forEach((el) => (el.innerText = overallTotal));

        // Show perfect score message if perfect
        let perfText = document.querySelector(".perf-res-text");
        if (perfText) {
            if (overallCorrect === overallTotal && overallTotal > 0) {
                perfText.style.display = "block";
            } else {
                perfText.style.display = "block";
            }
        }
    }
}

function initCookieBox() {
    const box = document.getElementById("cookieInfoBox");
    if (!box) return;

    const isClosed = localStorage.getItem("cookieBoxClosed");
    if (!isClosed) {
        setTimeout(() => {
            box.style.display = "block";
            gsap.fromTo(
                box,
                { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.6, ease: "power3.out" },
            );
        }, 1200);
    }
}

function closeCookieBox() {
    const box = document.getElementById("cookieInfoBox");
    if (!box) return;

    localStorage.setItem("cookieBoxClosed", "true");
    gsap.to(box, {
        opacity: 0,
        y: 30,
        duration: 0.4,
        ease: "power3.in",
        onComplete: () => {
            box.style.display = "none";
        },
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const rings = document.querySelectorAll(".rotate-group, .rotate-group-1");

    rings.forEach((ring) => {
        ring.classList.add("run-once");

        ring.addEventListener(
            "animationend",
            function () {
                ring.classList.remove("run-once");
            },
            { once: true }
        );
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const box = document.querySelector("#leaSvgWrap");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    box.classList.add("start");
                }
            });
        },
        { threshold: 0.45 },
    );

    if (box) observer.observe(box);
});
document.addEventListener("DOMContentLoaded", function () {
    const wheel = document.getElementById("wheelSvgWrap");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    wheel.classList.add("start");
                } else {
                    wheel.classList.remove("start");
                }
            });
        },
        { threshold: 0.45 },
    );

    if (wheel) observer.observe(wheel);
});

document.addEventListener("DOMContentLoaded", function () {
    const left = document.getElementById("leftWheel");
    const right = document.getElementById("rightWheel");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    left.classList.add("start");
                    right.classList.add("start");
                } else {
                    left.classList.remove("start");
                    right.classList.remove("start");
                }
            });
        },
        { threshold: 0.45 },
    );

    if (left) observer.observe(left);
});

/* =========================
   QUIZ LOGIC
========================= */
function initQuizListeners() {
    const radioInputs = document.querySelectorAll('.radio-input');
    radioInputs.forEach(input => {
        // Handle direct selection
        input.addEventListener('change', function () {
            const container = this.closest('.step-slide-box-caption');
            if (!container) return;

            const questionId = container.dataset.questionId;
            const optionId = this.value;
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            const locale = window.REDS?.locale || 'no';
            const baseUrl = window.REDS?.baseUrl || '';

            fetch(`${baseUrl}/${locale}/quiz/submit`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    question_id: questionId,
                    option_id: optionId
                })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        applyQuizFeedback(container, optionId, data.correct_option_id);
                    }
                })
                .catch(err => console.error('[Quiz Submit Error]:', err));
        });
    });

    // Initialize state for already-checked options (e.g. going back)
    initQuizState();
}

function initQuizState() {
    const captions = document.querySelectorAll('.step-slide-box-caption[data-question-id]');
    captions.forEach(container => {
        // Clear all first
        const groups = container.querySelectorAll('.radio-label-grop');
        groups.forEach(g => g.classList.remove('correct-selection', 'wrong-selection', 'flash-correct'));

        const checkedInput = container.querySelector('.radio-input:checked');
        const correctId = container.dataset.correctId;
        if (checkedInput && correctId) {
            applyQuizFeedback(container, checkedInput.value, correctId, true);
        }
    });
}

function applyQuizFeedback(container, selectedOptionId, correctOptionId, silent = false) {
    const groups = container.querySelectorAll('.radio-label-grop');
    const selId = String(selectedOptionId);
    const corId = String(correctOptionId);

    // CRITICAL: Clear ALL classes from ALL groups first, before doing any logic
    groups.forEach(group => {
        group.classList.remove('correct-selection', 'wrong-selection', 'flash-correct');
    });

    groups.forEach(group => {
        const input = group.querySelector('.radio-input');
        if (!input) return;
        const optId = String(input.value);

        if (optId === selId) {
            if (optId === corId) {
                group.classList.add('correct-selection');
            } else {
                group.classList.add('wrong-selection');
                // Flash the correct answer once if not silent
                if (!silent && corId && corId !== '0') {
                    const correctGroup = Array.from(groups).find(g => {
                        const i = g.querySelector('.radio-input');
                        return i && String(i.value) === corId;
                    });
                    if (correctGroup) {
                        // Small timeout to ensure the clear-classes above is fully processed before animation starts
                        setTimeout(() => {
                            correctGroup.classList.add('flash-correct');
                        }, 10);

                        setTimeout(() => {
                            correctGroup.classList.remove('flash-correct');
                        }, 1210);
                    }
                }
            }
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {

    const wheel16 = document.getElementById("wheelImg16");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                wheel16.classList.add("start");
            } else {
                wheel16.classList.remove("start");
            }
        });
    }, { threshold: 0.45 });

    if (wheel16) observer.observe(wheel16);

});

// AOS Initialization
if (typeof AOS !== 'undefined') {
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
}
