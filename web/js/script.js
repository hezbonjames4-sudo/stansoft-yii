const menuToggle = document.querySelector(".menu-toggle");
const nav = document.querySelector(".nav");
const navLinks = [...document.querySelectorAll(".nav a[href^='#']")];
const filterChips = [...document.querySelectorAll(".filter-chip")];
const serviceCards = [...document.querySelectorAll(".service-card")];
const planTabs = [...document.querySelectorAll(".plan-tab")];
const planPanels = [...document.querySelectorAll(".plan-panel")];
const testimonialCards = [...document.querySelectorAll(".testimonial-card")];
const prevTestimonial = document.querySelector("#prev-testimonial");
const nextTestimonial = document.querySelector("#next-testimonial");
const newsletterForm = document.querySelector("#newsletter-form");
const newsletterFeedback = document.querySelector("#newsletter-feedback");
const contactForm = document.querySelector("#contact-form");
const contactFeedback = document.querySelector("#contact-feedback");
const whatsappLink = document.querySelector("#whatsapp-link");
const counters = [...document.querySelectorAll(".counter")];
const sections = [...document.querySelectorAll("main section[id]")];
const whatsappNumber = "254727214814";

let testimonialIndex = 0;
let countersStarted = false;

document.querySelectorAll(".service-card, .stat-card, .mini-panel, .plan-panel").forEach((node) => {
  node.setAttribute("data-reveal", "");
});

if (menuToggle && nav) {
  menuToggle.addEventListener("click", () => {
    const isOpen = nav.classList.toggle("is-open");
    menuToggle.setAttribute("aria-expanded", String(isOpen));
  });
}

navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    nav?.classList.remove("is-open");
    menuToggle?.setAttribute("aria-expanded", "false");
  });
});

filterChips.forEach((chip) => {
  chip.addEventListener("click", () => {
    const selected = chip.dataset.filter;

    filterChips.forEach((item) => item.classList.toggle("is-active", item === chip));

    serviceCards.forEach((card) => {
      const match = selected === "all" || card.dataset.category === selected;
      card.classList.toggle("is-hidden", !match);
      card.hidden = !match;
    });
  });
});

planTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const selected = tab.dataset.plan;

    planTabs.forEach((item) => item.classList.toggle("is-active", item === tab));
    planPanels.forEach((panel) => {
      panel.classList.toggle("is-active", panel.dataset.planPanel === selected);
    });
  });
});

function showTestimonial(index) {
  testimonialCards.forEach((card, cardIndex) => {
    card.classList.toggle("is-active", cardIndex === index);
  });
}

prevTestimonial?.addEventListener("click", () => {
  testimonialIndex = (testimonialIndex - 1 + testimonialCards.length) % testimonialCards.length;
  showTestimonial(testimonialIndex);
});

nextTestimonial?.addEventListener("click", () => {
  testimonialIndex = (testimonialIndex + 1) % testimonialCards.length;
  showTestimonial(testimonialIndex);
});

if (testimonialCards.length > 1) {
  window.setInterval(() => {
    testimonialIndex = (testimonialIndex + 1) % testimonialCards.length;
    showTestimonial(testimonialIndex);
  }, 5200);
}

newsletterForm?.addEventListener("submit", (event) => {
  event.preventDefault();
  const formData = new FormData(newsletterForm);
  const email = String(formData.get("email") || "").trim();

  if (!email.includes("@")) {
    newsletterFeedback.textContent = "Please enter a valid email address.";
    return;
  }

  newsletterFeedback.textContent = `Thanks. ${email} has been added for updates.`;
  newsletterForm.reset();
});

contactForm?.addEventListener("submit", (event) => {
  event.preventDefault();
  const formData = new FormData(contactForm);
  const name = String(formData.get("name") || "").trim();
  const phone = String(formData.get("phone") || "").trim();
  const email = String(formData.get("email") || "").trim();
  const message = String(formData.get("message") || "").trim();

  if (!name || !phone || !email || !message) {
    contactFeedback.textContent = "Please complete all fields before submitting.";
    return;
  }

  const whatsappMessage =
    `Hello Stansofts Solutions, my name is ${name}. ` +
    `Phone: ${phone}. Email: ${email}. ` +
    `Request: ${message}`;

  whatsappLink.href = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

  contactFeedback.textContent = "Sending your query...";

  fetch(contactForm.action, {
    method: "POST",
    body: formData,
    headers: {
      Accept: "application/json",
    },
  })
    .then(async (response) => {
      let payload = {};

      try {
        payload = await response.json();
      } catch (error) {
        payload = {};
      }

      if (!response.ok || !payload.success) {
        throw new Error(payload.message || "We could not send your query right now.");
      }

      contactForm.reset();
      contactFeedback.textContent = payload.message || "Your query has been sent successfully.";
    })
    .catch((error) => {
      contactFeedback.textContent =
        error.message || "We could not send your query right now. You can still continue on WhatsApp.";
    });
});

function animateCounter(element) {
  const target = Number(element.dataset.target || "0");
  const duration = 1400;
  const start = performance.now();

  function tick(now) {
    const progress = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - progress, 3);
    element.textContent = String(Math.round(target * eased));

    if (progress < 1) {
      requestAnimationFrame(tick);
    }
  }

  requestAnimationFrame(tick);
}

const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
      }
    });
  },
  { threshold: 0.18 }
);

document.querySelectorAll("[data-reveal]").forEach((element) => revealObserver.observe(element));

const counterObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !countersStarted) {
        countersStarted = true;
        counters.forEach(animateCounter);
      }
    });
  },
  { threshold: 0.35 }
);

const statsSection = document.querySelector("#projects");
if (statsSection) {
  counterObserver.observe(statsSection);
}

const navObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      }

      const currentId = entry.target.getAttribute("id");
      navLinks.forEach((link) => {
        const isCurrent = link.getAttribute("href") === `#${currentId}`;
        link.classList.toggle("is-current", isCurrent);
      });
    });
  },
  { threshold: 0.45 }
);

sections.forEach((section) => navObserver.observe(section));

if (window.lucide) {
  window.lucide.createIcons();
}
