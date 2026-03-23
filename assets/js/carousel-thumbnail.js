document.addEventListener("DOMContentLoaded", () => {
  const thumbnails = Array.from(document.querySelectorAll(".thumbnail"));
  const slides = Array.from(document.querySelectorAll("[data-carousel-item]"));

  if (!thumbnails.length || !slides.length) return;

  function setActiveThumb(index) {
    thumbnails.forEach((t, i) => {
      if (i === index) {
        t.classList.remove("border-gray-300");
        t.classList.add("border-blue-500");
        t.classList.add("scale-105", "shadow-lg");
      } else {
        t.classList.remove("border-blue-500");
        t.classList.add("border-gray-300");
        t.classList.remove("scale-105", "shadow-lg");
      }
    });
  }

  thumbnails.forEach((t, i) => {
    if (!t.classList.contains("border-gray-300") && !t.classList.contains("border-blue-500")) {
      t.classList.add(i === 0 ? "border-blue-500" : "border-gray-300");
    }
  });

  const carouselRoot = slides[0].closest("[data-carousel]") || document;

  function buildThresholdList() {
    const thresholds = [];
    for (let i = 0; i <= 1.0; i += 0.05) thresholds.push(i);
    return thresholds;
  }

  const visibilityMap = new Map();

  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const idx = slides.indexOf(entry.target);
      if (idx >= 0) {
        visibilityMap.set(idx, entry.intersectionRatio || 0);
      }
    });

    let bestIndex = -1;
    let bestRatio = 0;
    visibilityMap.forEach((ratio, i) => {
      if (ratio > bestRatio) {
        bestRatio = ratio;
        bestIndex = i;
      }
    });

    if (bestIndex >= 0 && bestRatio > 0.05) {
      setActiveThumb(bestIndex);
    }
  }, {
    root: carouselRoot === document ? null : carouselRoot,
    rootMargin: "0px",
    threshold: buildThresholdList()
  });

  slides.forEach(s => {
    visibilityMap.set(slides.indexOf(s), 0);
    io.observe(s);
  });

  const mo = new MutationObserver(() => {
    for (let i = 0; i < slides.length; i++) {
      if (slides[i].getAttribute("aria-hidden") === "false") {
        setActiveThumb(i);
        return;
      }
    }
    for (let i = 0; i < slides.length; i++) {
      if (!slides[i].classList.contains("hidden")) {
        setActiveThumb(i);
        return;
      }
    }
  });

  slides.forEach(s => {
    mo.observe(s, { attributes: true, attributeFilter: ["class", "aria-hidden", "style"] });
  });

  setTimeout(() => {
    let found = false;
    for (let i = 0; i < slides.length; i++) {
      if (slides[i].getAttribute("aria-hidden") === "false") {
        setActiveThumb(i);
        found = true;
        break;
      }
    }
    if (!found) setActiveThumb(0);
  }, 100);

  thumbnails.forEach((thumb, idx) => {
    thumb.addEventListener("click", () => {
      setTimeout(() => setActiveThumb(idx), 120);
    });
  });

  window.addEventListener("beforeunload", () => {
    io.disconnect();
    mo.disconnect();
  });
});
