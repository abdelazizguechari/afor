const heroSlider = document.querySelector("[data-hero-slider]");
const heroSliderItems = document.querySelectorAll("[data-hero-slider-item]");
const heroSliderPrevBtn = document.querySelector("[data-prev-btn]");
const heroSliderNextBtn = document.querySelector("[data-next-btn]");

let currentSlidePos = 0;
let lastActiveSliderItem = heroSliderItems[0];

const updateSliderPos = function () {
    lastActiveSliderItem.classList.remove("active");
    heroSliderItems[currentSlidePos].classList.add("active");
    lastActiveSliderItem = heroSliderItems[currentSlidePos];
};

const slideNext = function () {
    if (currentSlidePos >= heroSliderItems.length - 1) {
        currentSlidePos = 0;
    } else {
        currentSlidePos++;
    }
    updateSliderPos();
};

const slidePrev = function () {
    if (currentSlidePos <= 0) {
        currentSlidePos = heroSliderItems.length - 1;
    } else {
        currentSlidePos--;
    }
    updateSliderPos();
};

heroSliderNextBtn.addEventListener("click", slideNext);
heroSliderPrevBtn.addEventListener("click", slidePrev);

// Auto slide functionality
let autoSlideInterval = setInterval(slideNext, 7000);

// Pause auto-slide on hover over buttons
heroSliderPrevBtn.addEventListener("mouseover", () =>
    clearInterval(autoSlideInterval)
);
heroSliderNextBtn.addEventListener("mouseover", () =>
    clearInterval(autoSlideInterval)
);

// Resume auto-slide when not hovering over buttons
heroSliderPrevBtn.addEventListener(
    "mouseout",
    () => (autoSlideInterval = setInterval(slideNext, 7000))
);
heroSliderNextBtn.addEventListener(
    "mouseout",
    () => (autoSlideInterval = setInterval(slideNext, 7000))
);

/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        968: {
            slidesPerView: 3,
        },
    },
});

// Toggle Language Dropdown
function toggleLanguageDropdown() {
    closeAllDropdowns();
    document.getElementById("language-dropdown-menu").classList.toggle("show");
}

// Toggle Login Dropdown
function toggleLoginDropdown() {
    closeAllDropdowns();
    document.getElementById("login-dropdown-menu").classList.toggle("show");
}

// Close All Dropdowns
function closeAllDropdowns() {
    const dropdowns = document.querySelectorAll(".dropdown-content");
    dropdowns.forEach((dropdown) => dropdown.classList.remove("show"));
}

// Toggle Mobile Menu
function toggleMobileMenu() {
    const navMenu = document.querySelector("header nav ul");
    const menuContainer = document.querySelector("header .menu");
    const menuToggle = document.querySelector(".menu-toggle");

    // Toggle menu display
    navMenu.classList.toggle("active");
    menuContainer.classList.toggle("active");
    menuToggle.classList.toggle("active");
}

// Close dropdowns on outside click
window.onclick = function (event) {
    if (
        !event.target.closest(".language-dropdown") &&
        !event.target.closest(".menu-toggle")
    ) {
        closeAllDropdowns();
    }
};

// Handle Language Change
function changeLanguage(languageCode) {
    console.log("Changing language to: " + languageCode);
    // Language change logic here
}

// Handle Login Navigation
function handleLogin() {
    console.log("Navigating to login page...");
    // Add your login functionality or redirect here
}

// Handle Sign-Up Navigation
function handleSignUp() {
    console.log("Navigating to sign up page...");
    // Add your sign-up functionality or redirect here
}

// Add event listener for mobile menu toggle button
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    menuToggle.addEventListener("click", toggleMobileMenu);
});

const swiper = new Swiper(".swiper-container", {
    loop: true, // Enables looping of slides
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    centeredSlides: true, // Center the active slide
    slidesPerView: 1.2, // Show one full slide and a part of the next slide
    spaceBetween: 30, // Space between slides
});

const slides = document.querySelectorAll(".slide"); // Select all slides
let currentIndex = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove("activer"); // Hide all slides
        slide.classList.add("inactive"); // Mark all as inactive
        const textContainer = slide.querySelector(".text-container");
        if (i === index) {
            slide.classList.add("activer"); // Show the current slide
            slide.classList.remove("inactive"); // Make it visible
            textContainer.style.animationDelay = "0s"; // Start animation immediately
            textContainer.style.opacity = "1"; // Ensure text is visible
        } else {
            textContainer.style.animationDelay = "0.5s"; // Delay for non-active text
            textContainer.style.opacity = "0"; // Keep text hidden
        }
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length; // Loop back to first slide
    showSlide(currentIndex);
}

setInterval(nextSlide, 5000); // Change slide every 5 seconds

const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
        cards.forEach((c) => {
            if (c !== card) {
                c.style.width = "30%"; // Keep other cards at original size
            }
        });
        card.style.flexGrow = "1"; // Expand the hovered card
        card.style.width = "35%"; // Slightly larger width for hovered card
    });

    card.addEventListener("mouseleave", () => {
        cards.forEach((c) => {
            c.style.width = "30%"; // Reset all cards to original size
            c.style.flexGrow = "0"; // Reset flex-grow
        });
    });
});

// Function to filter job listings based on the selected category
function filterJobs(category) {
    const jobCards = document.querySelectorAll(".job-card");

    jobCards.forEach((card) => {
        if (category === "all" || card.classList.contains(category)) {
            card.classList.remove("hidden");
        } else {
            card.classList.add("hidden");
        }
    });

    document.querySelectorAll(".filter-button").forEach((button) => {
        button.addEventListener("click", () => {
            const category = button.id; // Get the ID of the clicked button

            // Highlight the selected filter button
            document.querySelectorAll(".filter-button").forEach((btn) => {
                // Reset styles for all buttons
                btn.classList.remove("bg-purple-950", "text-white");
                btn.classList.add("bg-white", "text-gray-800"); // Set default styles
            });

            // Set styles for the selected button
            const selectedButton =
                category === "allJobs"
                    ? document.getElementById("allJobs")
                    : document.getElementById(category);
            selectedButton.classList.add("bg-purple-950", "text-white"); // Highlight selected button
        });
    });
}

{
    flatpickr("#trip-dates", {
        mode: "range",
        dateFormat: "Y-m-d",
        placeholder: "Select Dates",
        onClose: function (selectedDates, dateStr, instance) {
            if (selectedDates.length === 2) {
                const startDate = selectedDates[0].toISOString().split("T")[0];
                const endDate = selectedDates[1].toISOString().split("T")[0];
                instance.input.value = `${startDate} - ${endDate}`;
            }
        },
    });
}

// Event listeners for filter buttons
document
    .getElementById("allJobs")
    .addEventListener("click", () => filterJobs("all"));
document
    .getElementById("category1")
    .addEventListener("click", () => filterJobs("category1"));
document
    .getElementById("category2")
    .addEventListener("click", () => filterJobs("category2"));
document
    .getElementById("category3")
    .addEventListener("click", () => filterJobs("category3"));

// Initially show all jobs
filterJobs("all");

function showPopup(jobId) {
    const jobDetails = {
        job1: {
            title: "Directeur Général Adjoint",
            description: `
                        <strong>Description du Poste :</strong> Nous recherchons un Directeur Général Adjoint passionné et expérimenté pour rejoindre notre compagnie aérienne en pleine croissance. Vous jouerez un rôle clé dans le développement et la mise en œuvre de notre stratégie opérationnelle, tout en veillant à ce que nous maintenions les normes les plus élevées en matière de sécurité et de service à la clientèle.<br><br>
                        <strong>Missions :</strong><br>
                        - Assister le Directeur Général dans la gestion quotidienne de l’entreprise.<br>
                        - Contribuer à la définition et à la mise en œuvre de la stratégie de l'entreprise.<br>
                        - Superviser les opérations aériennes, la maintenance, et les services au sol.<br>
                        - Analyser les performances financières et opérationnelles et proposer des améliorations.<br>
                        - Diriger et motiver les équipes pour atteindre les objectifs de l’entreprise.<br>
                        - Représenter l'entreprise auprès des partenaires, des autorités de régulation et des clients.<br><br>
                        <strong>Profil Recherché :</strong><br>
                        - Diplôme supérieur en gestion, aviation, ou domaine connexe.<br>
                        - Expérience significative (au moins 5 ans) dans un poste de direction au sein d’une compagnie aérienne ou d’un secteur connexe.<br>
                        - Solides compétences en leadership et en gestion d’équipe.<br>
                        - Excellente capacité d’analyse et de prise de décision.<br>
                        - Maîtrise des réglementations aéronautiques et des enjeux de l'industrie.<br>
                        - Excellentes compétences en communication, à l’oral comme à l’écrit.<br><br>
                        <strong>Conditions :</strong><br>
                        - Mobilité pour des déplacements fréquents.<br>
                        - Langues : maîtrise de l’anglais, la connaissance d’autres langues est un plus.
                    `,
        },
        job2: {
            title: "COO (Directeur des Opérations)",
            description: `
                        <strong>Description du Poste :</strong> Nous recherchons un COO (Directeur des Opérations) stratégique et dynamique pour rejoindre notre compagnie aérienne. Vous serez responsable de l’ensemble des opérations aériennes, garantissant efficacité, sécurité et qualité de service.<br><br>
                        <strong>Missions :</strong><br>
                        - Développer et mettre en œuvre la stratégie opérationnelle de l'entreprise.<br>
                        - Superviser les opérations de vol, la maintenance, et les services au sol.<br>
                        - Assurer le respect des normes de sécurité et de réglementation.<br>
                        - Optimiser les processus pour améliorer l'efficacité opérationnelle et réduire les coûts.<br>
                        - Collaborer avec les autres départements pour garantir une expérience client exceptionnelle.<br>
                        - Analyser les performances opérationnelles et mettre en place des plans d'action pour atteindre les objectifs.<br><br>
                        <strong>Profil Recherché :</strong><br>
                        - Diplôme supérieur en gestion, aviation, ou domaine connexe.<br>
                        - Expérience significative (au moins 7 ans) dans un poste de direction dans l'aviation ou un secteur connexe.<br>
                        - Excellentes compétences en leadership et gestion d’équipe.<br>
                        - Forte capacité analytique et sens de la résolution de problèmes.<br>
                        - Maîtrise des réglementations aéronautiques et des normes de sécurité.<br>
                        - Excellentes compétences en communication, à l’oral comme à l’écrit.<br><br>
                        <strong>Conditions :</strong><br>
                        - Mobilité pour des déplacements fréquents.<br>
                        - Langues : maîtrise de l’anglais, la connaissance d'autres langues est un plus.
                    `,
        },

        job4: {
            title: "Responsable des Opérations de Vol",
            description: `
                    <strong>Description du Poste :</strong> nbr airways, acteur majeur du secteur aérien, recherche un Responsable des Opérations de Vol pour garantir l’efficacité et la sécurité de nos opérations. Ce poste clé est crucial pour assurer une expérience client de qualité et le bon fonctionnement de nos vols.<br><br>
                    <strong>Missions :</strong><br>
                    - Superviser l’ensemble des opérations de vol, en veillant au respect des horaires et des procédures de sécurité.<br>
                    - Coordonner les équipes au sol et en vol pour optimiser les performances.<br>
                    - Gérer les situations d’urgence et résoudre les problèmes opérationnels de manière proactive.<br>
                    - Collaborer avec les départements de maintenance, de sécurité et de service client.<br>
                    - Analyser les performances opérationnelles et proposer des améliorations.<br><br>
                    <strong>Profil recherché :</strong><br>
                    - Diplôme en aviation, gestion des opérations ou domaine connexe.<br>
                    - Expérience significative dans un poste similaire au sein d'une compagnie aérienne.<br>
                    - Excellentes compétences en leadership et en communication.<br>
                    - Maîtrise des réglementations aéronautiques et des normes de sécurité.<br>
                    - Capacité à travailler sous pression et à prendre des décisions rapides.<br><br>
                    <strong>Pourquoi nous rejoindre ?</strong><br>
                    - Travailler dans un environnement dynamique et stimulant.<br>
                    - Participer activement à l'amélioration des opérations aériennes.<br>
                    - Opportunités de développement professionnel dans une entreprise en pleine expansion.
                `,
        },

        job7: {
            title: "Directeur de Maintenance",
            description: `
                        <strong>Description du Poste :</strong> Nous, nbr Airways, leader dans le secteur aérien, recherchons un Directeur de Maintenance passionné et expérimenté pour rejoindre notre équipe. Ce poste clé est essentiel pour garantir la sécurité et la fiabilité de notre flotte.<br><br>
                        <strong>Missions :</strong><br>
                        - Superviser l'ensemble des opérations de maintenance de la flotte.<br>
                        - Assurer la conformité avec les réglementations de l'aviation civile.<br>
                        - Élaborer et mettre en œuvre des programmes de maintenance préventive et corrective.<br>
                        - Gérer une équipe de techniciens et d'ingénieurs, en favorisant leur développement professionnel.<br>
                        - Collaborer avec d'autres départements pour optimiser les performances de la flotte.<br><br>
                        <strong>Profil recherché :</strong><br>
                        - Diplôme en ingénierie aéronautique ou domaine connexe.<br>
                        - Expérience significative dans un rôle de gestion de maintenance au sein d'une compagnie aérienne.<br>
                        - Excellentes compétences en leadership et en gestion d'équipe.<br>
                        - Bonne connaissance des normes de sécurité et de maintenance aéronautique.<br>
                        - Capacité à travailler sous pression et à prendre des décisions stratégiques.<br><br>
                        <strong>Pourquoi nous rejoindre ?</strong><br>
                        - Intégrer une équipe dynamique et innovante.<br>
                        - Opportunités de développement professionnel dans un environnement en pleine croissance.<br>
                        - Participer à la sécurité et à l'efficacité de l'aviation.
                    `,
        },
    };

    const job = jobDetails[jobId];
    if (job) {
        document.getElementById("popup-title").innerText = job.title;
        document.getElementById("popup-description").innerHTML =
            job.description; // Use innerHTML for formatted content
        document.getElementById("job-popup").classList.remove("hidden");
        // Prevent body from scrolling when the popup is open
        document.body.style.overflow = "hidden";
    }
}

function closePopup() {
    document.getElementById("job-popup").classList.add("hidden");
    // Allow body to scroll again when the popup is closed
    document.body.style.overflow = "auto";
}
// The existing filter function and event listeners remain the same.

// The existing filter function and event listeners remain the same.

{
    document.addEventListener("DOMContentLoaded", function () {
        const swiper = new Swiper(".swiper-container", {
            // Optional parameters
            loop: true, // Enables continuous loop mode
            autoplay: {
                delay: 3000, // Automatically changes slides every 3 seconds
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // Pagination
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            // Additional configurations
            slidesPerView: 1, // Shows one slide at a time
            spaceBetween: 10, // Space between slides
            effect: "slide", // Can change to 'fade', 'cube', etc. for different transitions
        });
    });
}
