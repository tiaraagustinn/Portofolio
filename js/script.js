/* ================================
   HAMBURGER MENU
   ================================ */
function toggleMenu() {
  const menu = document.getElementById("mobile-menu");
  const icon = document.getElementById("hamburger-icon-btn");
  menu.classList.toggle("open");
  icon.classList.toggle("open");
}

// Close menu when clicking outside
document.addEventListener("click", function (e) {
  const hamburger = document.querySelector(".hamburger-menu");
  const menu = document.getElementById("mobile-menu");
  const icon = document.getElementById("hamburger-icon-btn");
  if (hamburger && !hamburger.contains(e.target)) {
    menu.classList.remove("open");
    icon.classList.remove("open");
  }
});

/* ================================
   NAVBAR: SCROLL EFFECT + ACTIVE LINK
   ================================ */
const desktopNav = document.getElementById("desktop-nav");
const hamburgerNav = document.getElementById("hamburger-nav");
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll(".nav-links li a");

window.addEventListener("scroll", function () {
  // Navbar background on scroll
  const scrolled = window.scrollY > 20;
  if (desktopNav) desktopNav.classList.toggle("scrolled", scrolled);
  if (hamburgerNav) hamburgerNav.classList.toggle("scrolled", scrolled);

  // Active nav link
  let currentSection = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop - 120;
    if (window.scrollY >= sectionTop) {
      currentSection = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href") === "#" + currentSection) {
      link.classList.add("active");
    }
  });
});

/* ================================
   SCROLL REVEAL ANIMATIONS
   ================================ */
const revealElements = document.querySelectorAll(".reveal, .reveal-left, .reveal-right");

const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        // Add stagger for siblings
        const siblings = entry.target.parentElement.querySelectorAll(
          ".reveal, .reveal-left, .reveal-right"
        );
        siblings.forEach((sibling, index) => {
          sibling.style.transitionDelay = `${index * 0.1}s`;
        });
      }
    });
  },
  {
    threshold: 0.12,
    rootMargin: "0px 0px -50px 0px",
  }
);

revealElements.forEach((el) => revealObserver.observe(el));

/* ================================
   TYPING ANIMATION
   ================================ */
const typedTextEl = document.getElementById("typed-text");
const textOptions = [
  "Mahasiswi Informatika 2022",
  "Frontend Developer",
  "Web Enthusiast",
  "Tech Explorer",
];

let textIndex = 0;
let charIndex = 0;
let isDeleting = false;
let typingTimeout;

function typeEffect() {
  const currentText = textOptions[textIndex];

  if (isDeleting) {
    typedTextEl.textContent = currentText.substring(0, charIndex - 1);
    charIndex--;
  } else {
    typedTextEl.textContent = currentText.substring(0, charIndex + 1);
    charIndex++;
  }

  let speed = isDeleting ? 60 : 100;

  if (!isDeleting && charIndex === currentText.length) {
    // Pause at end
    speed = 2000;
    isDeleting = true;
  } else if (isDeleting && charIndex === 0) {
    isDeleting = false;
    textIndex = (textIndex + 1) % textOptions.length;
    speed = 400;
  }

  typingTimeout = setTimeout(typeEffect, speed);
}

// Start typing after slight delay
setTimeout(typeEffect, 800);

/* ================================
   SKILL ITEMS: STAGGER ON REVEAL
   ================================ */
const skillItems = document.querySelectorAll(".skill-item");
const skillObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const items = entry.target.querySelectorAll(".skill-item");
        items.forEach((item, i) => {
          setTimeout(() => {
            item.style.opacity = "1";
            item.style.transform = "translateX(0)";
          }, i * 80);
        });
      }
    });
  },
  { threshold: 0.2 }
);

document.querySelectorAll(".skill-category").forEach((cat) => {
  const items = cat.querySelectorAll(".skill-item");
  items.forEach((item) => {
    item.style.opacity = "0";
    item.style.transform = "translateX(-20px)";
    item.style.transition = "opacity 0.4s ease, transform 0.4s ease";
  });
  skillObserver.observe(cat);
});

/* ================================
   PROJECT CARDS: STAGGER REVEAL
   ================================ */
const projectCards = document.querySelectorAll(".project-card");
const projectObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const cards = document.querySelectorAll(".project-card");
        cards.forEach((card, i) => {
          setTimeout(() => {
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
          }, i * 120);
        });
        projectObserver.disconnect();
      }
    });
  },
  { threshold: 0.1 }
);

if (projectCards.length) {
  projectCards.forEach((card) => {
    card.style.opacity = "0";
    card.style.transform = "translateY(30px)";
    card.style.transition = "opacity 0.5s ease, transform 0.5s ease, border-color 0.3s ease, box-shadow 0.3s ease";
  });
  projectObserver.observe(projectCards[0]);
}

/* ================================
   SMOOTH SCROLL FOR ANCHOR LINKS
   ================================ */
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });
});