document.addEventListener("DOMContentLoaded", function () {
  const itineraryRoot = document.querySelector(".scrollspy-example, .itinerary_list, #navbar-example2");
  if (!itineraryRoot) {
    return;
  }

  document.body.classList.add("itinerary-page");

  const keepFirst = function (selector) {
    const nodes = Array.from(document.querySelectorAll(selector));
    nodes.slice(1).forEach(function (node) {
      node.remove();
    });
    return nodes[0] || null;
  };

  const normalizeHeroMedia = function () {
    const titleNode = document.querySelector(".package-card .card-title, .basic_pack .card-title, .card-title");
    const subtitleNode = document.querySelector(".package-card .card-text, .basic_pack .card-text, .card-text");
    const title = titleNode ? titleNode.textContent.trim() : "Travel Itinerary";
    const subtitle = subtitleNode ? subtitleNode.textContent.trim() : "Explore the full package details below";

    document.querySelectorAll(".pic .carousel-item, .pic").forEach(function (container) {
      const video = container.querySelector("video, iframe");
      if (!video) {
        return;
      }

      container.querySelectorAll("video, iframe").forEach(function (media) {
        media.remove();
      });

      if (!container.querySelector(".itinerary-hero-fallback")) {
        const fallback = document.createElement("div");
        fallback.className = "itinerary-hero-fallback";
        fallback.innerHTML =
          '<div class="itinerary-hero-fallback__content">' +
          '<span class="itinerary-hero-fallback__label">Grand SK Holidays</span>' +
          "<h2>" + title + "</h2>" +
          "<p>" + subtitle + "</p>" +
          "</div>";
        container.appendChild(fallback);
      }
    });
  };

  const bindItineraryAnchors = function () {
    const scrollspy = document.querySelector(".scrollspy-example");
    const navLinks = Array.from(document.querySelectorAll('#navbar-example2 .nav-link[href^="#scrollspyHeading"]'));
    if (!scrollspy || !navLinks.length) {
      return;
    }

    const itinerarySection = scrollspy.querySelector(".itinerary_list");
    const inclusionSection = scrollspy.querySelector(".inc_exc");
    const contentSections = Array.from(scrollspy.children).filter(function (child) {
      return child.nodeType === 1 && child.tagName !== "HR";
    });

    const termsSection =
      contentSections.find(function (section) {
        if (section === itinerarySection || section === inclusionSection) {
          return false;
        }

        const heading = section.querySelector("h4");
        return heading && /terms/i.test(heading.textContent || "");
      }) ||
      contentSections[contentSections.length - 1] ||
      null;

    const sectionMap = {
      scrollspyHeading1: itinerarySection,
      scrollspyHeading2: inclusionSection,
      scrollspyHeading3: termsSection
    };

    Object.entries(sectionMap).forEach(function (entry) {
      const id = entry[0];
      const target = entry[1];
      const matches = Array.from(document.querySelectorAll("#" + id));

      matches.forEach(function (node) {
        if (node !== target) {
          node.removeAttribute("id");
        }
      });

      if (target) {
        target.id = id;
      }
    });

    navLinks.forEach(function (link) {
      const hash = (link.getAttribute("href") || "").replace("#", "");
      const target = sectionMap[hash];
      if (!target || link.dataset.itineraryBound === "true") {
        return;
      }

      link.dataset.itineraryBound = "true";
      link.addEventListener("click", function (event) {
        event.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });

        if (window.history && window.history.replaceState) {
          window.history.replaceState(null, "", "#" + hash);
        }
      });
    });

    if (window.bootstrap && window.bootstrap.ScrollSpy) {
      window.bootstrap.ScrollSpy.getOrCreateInstance(scrollspy).refresh();
    }
  };

  const initScrollTop = function () {
    const scrollTopBtn = keepFirst(".scroll-top");
    if (!scrollTopBtn) {
      return;
    }

    const syncScrollTop = function () {
      scrollTopBtn.classList.toggle("show", window.scrollY > 240);
    };

    scrollTopBtn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

    window.addEventListener("scroll", syncScrollTop, { passive: true });
    syncScrollTop();
  };

  const initContactCard = function () {
    const openBtn = keepFirst(".sk-open-btn");
    const contactCard = keepFirst(".sk-contact-side");
    const closeBtn = contactCard ? contactCard.querySelector(".sk-close-btn") : null;

    if (!openBtn || !contactCard || !closeBtn) {
      return;
    }

    const openCard = function () {
      contactCard.classList.add("sk-active");
    };

    const closeCard = function () {
      contactCard.classList.remove("sk-active");
    };

    closeCard();

    openBtn.addEventListener("click", function () {
      openCard();
    });

    closeBtn.addEventListener("click", function () {
      closeCard();
    });

    contactCard.addEventListener("click", function (event) {
      event.stopPropagation();
    });

    document.addEventListener("click", function (event) {
      if (!contactCard.contains(event.target) && event.target !== openBtn) {
        closeCard();
      }
    });

    document.addEventListener("keydown", function (event) {
      if (event.key === "Escape") {
        closeCard();
      }
    });
  };

  normalizeHeroMedia();
  bindItineraryAnchors();
  initScrollTop();
  initContactCard();
});
