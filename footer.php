<?php
if (!function_exists('sk_resolve_root_prefix')) {
    function sk_resolve_root_prefix() {
        $scriptFile = $_SERVER['SCRIPT_FILENAME'] ?? '';
        if ($scriptFile !== '') {
            $scriptDir = str_replace('\\', '/', dirname(realpath($scriptFile) ?: $scriptFile));
            $footerDir = str_replace('\\', '/', __DIR__);
            $scriptParts = array_values(array_filter(explode('/', $scriptDir), 'strlen'));
            $footerParts = array_values(array_filter(explode('/', $footerDir), 'strlen'));

            while (!empty($scriptParts) && !empty($footerParts) && strcasecmp($scriptParts[0], $footerParts[0]) === 0) {
                array_shift($scriptParts);
                array_shift($footerParts);
            }

            return str_repeat('../', count($scriptParts));
        }

        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $callerFile = $trace[1]['file'] ?? null;
        if (!$callerFile) {
            return '';
        }

        $callerDir = str_replace('\\', '/', dirname(realpath($callerFile) ?: $callerFile));
        $footerDir = str_replace('\\', '/', __DIR__);
        $callerParts = array_values(array_filter(explode('/', $callerDir), 'strlen'));
        $footerParts = array_values(array_filter(explode('/', $footerDir), 'strlen'));

        while (!empty($callerParts) && !empty($footerParts) && strcasecmp($callerParts[0], $footerParts[0]) === 0) {
            array_shift($callerParts);
            array_shift($footerParts);
        }

        return str_repeat('../', count($callerParts));
    }
}

if (!isset($SK_ROOT_PREFIX) || $SK_ROOT_PREFIX === '') {
    $SK_ROOT_PREFIX = sk_resolve_root_prefix();
}

if (!empty($SK_INCLUDE_FRAGMENT)) {
    $content = file_get_contents(__FILE__);
    $start = strpos($content, '<!-- Footer -->');
    if ($start !== false) {
        $scriptPos = strpos($content, '<script', $start);
        if ($scriptPos !== false) {
            echo substr($content, $start, $scriptPos - $start);
        } else {
            echo substr($content, $start);
        }
    }
    return;
}
?><!-- Footer -->
<footer class="site-footer">
  <div class="footer-accent-bar" aria-hidden="true"></div>

  <div class="footer-top">
    <div class="footer-container">
      <div class="footer-grid">

        <section class="footer-col footer-col--brand">
          <a href="<?php echo $SK_ROOT_PREFIX; ?>./" class="footer-brand" aria-label="GRAND SK Holidays home">
            <img src="<?php echo $SK_ROOT_PREFIX; ?>SK.png" alt="GRAND SK Holidays" class="footer-brand__logo">
          </a>
          <p class="footer-company-name">GRAND SK Holidays Travel Pvt Ltd</p>
          <p class="footer-tagline">Crafting honeymoon, spiritual and cruise journeys across South India and beyond.</p>

          <div class="social-links" aria-label="Follow us on social media">
            <a href="https://www.facebook.com/grandsk" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/grandsk.holidays/" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/917200449904" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="WhatsApp">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>
        </section>

        <section class="footer-col">
          <h3 class="footer-heading">Quick Links</h3>
          <ul class="footer-links">
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>honeymoon-tour/index.php">Honeymoon</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>spiritual/index.php">Spiritual</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>cruise/index.php">Cruise</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>testimonial/index.php">Testimonials</a></li>
            <li><a href="mailto:sales@grandskholidays.com">Contact Us</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>group-tour/new/">Group Tours</a></li>
          </ul>
        </section>

        <section class="footer-col">
          <h3 class="footer-heading">Policies</h3>
          <ul class="footer-links">
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>policy/policy.php">Policy Home</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>policy/privacy-policy.php">Privacy Policy</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>policy/terms-and-conditions.php">Terms &amp; Conditions</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>policy/refund-policy.php">Refund Policy</a></li>
            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>policy/cancellation-policy.php">Cancellation Policy</a></li>
          </ul>
        </section>

        <section class="footer-col">
          <h3 class="footer-heading">Our Offices</h3>
          <ul class="footer-offices">
            <li class="footer-office">
              <i class="fas fa-map-marker-alt footer-office__icon" aria-hidden="true"></i>
              <div>
                <strong>Trichy</strong>
                <p>No: 103, First Floor, St Paul Complex, Bharathiyar Salai, Opposite Head Post Office, Trichy - 620001</p>
              </div>
            </li>
            <li class="footer-office">
              <i class="fas fa-map-marker-alt footer-office__icon" aria-hidden="true"></i>
              <div>
                <strong>Perambalur</strong>
                <p>2nd Floor, Vallalar Complex, Kamarajar Signal, Perambalur - 621212</p>
              </div>
            </li>
            <li class="footer-office">
              <i class="fas fa-map-marker-alt footer-office__icon" aria-hidden="true"></i>
              <div>
                <strong>Thuraiyur</strong>
                <p>No: 210, First Floor, Srinivasa Complex, Trichy Road, Thuraiyur - 621110</p>
              </div>
            </li>
          </ul>
        </section>

        <section class="footer-col">
          <h3 class="footer-heading">Get in Touch</h3>
          <ul class="footer-contact-list">
            <li>
              <i class="fas fa-phone-alt footer-contact-icon" aria-hidden="true"></i>
              <a href="tel:+917200449904" class="footer-contact-link">+91 72004 49904</a>
            </li>
            <li>
              <i class="fas fa-envelope footer-contact-icon" aria-hidden="true"></i>
              <a href="mailto:sales@grandskholidays.com" class="footer-contact-link">sales@grandskholidays.com</a>
            </li>
          </ul>
          <a href="<?php echo $SK_ROOT_PREFIX; ?>bookingform.php" class="footer-cta">
            Plan My Trip <i class="fas fa-arrow-right" aria-hidden="true"></i>
          </a>
        </section>

      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="footer-container footer-bottom__inner">
      <p class="footer-copyright">&copy; <?php echo date('Y'); ?> GRAND SK Holidays Pvt Ltd. All rights reserved.</p>
      <div class="footer-legal-links">
        <a href="<?php echo $SK_ROOT_PREFIX; ?>policy/privacy-policy.php">Privacy Policy</a>
        <span class="footer-legal-divider" aria-hidden="true">|</span>
        <a href="<?php echo $SK_ROOT_PREFIX; ?>policy/terms-and-conditions.php">Terms &amp; Conditions</a>
        <span class="footer-legal-divider" aria-hidden="true">|</span>
        <a href="<?php echo $SK_ROOT_PREFIX; ?>policy/refund-policy.php">Refund Policy</a>
        <span class="footer-legal-divider" aria-hidden="true">|</span>
        <a href="<?php echo $SK_ROOT_PREFIX; ?>policy/cancellation-policy.php">Cancellation Policy</a>
      </div>
      <p class="footer-powered">Powered by Gurushasta Innotech</p>
    </div>
  </div>
</footer>

<button class="sk-footer-scroll-top" id="skFooterScrollTop" aria-label="Scroll to top">
  <i class="fas fa-arrow-up"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');

if (next && prev) {
  next.addEventListener('click', function() {
    const items = document.querySelectorAll('.items');
    const slides = document.querySelector('.slides');
    if (items.length && slides) {
      slides.appendChild(items[0]);
    }
  });

  prev.addEventListener('click', function() {
    const items = document.querySelectorAll('.items');
    const slides = document.querySelector('.slides');
    if (items.length && slides) {
      slides.prepend(items[items.length - 1]);
    }
  });
}

document.addEventListener('DOMContentLoaded', function() {
  function initCarousel(trackId, prevBtnId, nextBtnId) {
    const track = document.getElementById(trackId);
    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);
    if (!track || !prevBtn || !nextBtn) return;

    let currentIndex = 0;
    const totalItems = track.children.length;
    let itemsToShow = 5;
    let autoInterval;

    function updateItemsToShow() {
      const width = window.innerWidth;
      itemsToShow = width <= 768 ? 1 : width <= 992 ? 3 : width <= 1200 ? 4 : 5;
    }

    function updateCarousel() {
      currentIndex = Math.min(currentIndex, Math.max(0, totalItems - itemsToShow));
      const currentSlide = track.children[currentIndex];
      const translateX = currentSlide ? -currentSlide.offsetLeft : 0;
      track.style.transform = `translateX(${translateX}px)`;
      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex >= totalItems - itemsToShow;
    }

    function nextSlide() {
      currentIndex = currentIndex < totalItems - itemsToShow ? currentIndex + 1 : 0;
      updateCarousel();
    }

    function prevSlide() {
      currentIndex = currentIndex > 0 ? currentIndex - 1 : Math.max(0, totalItems - itemsToShow);
      updateCarousel();
    }

    function startAutoRun() {
      if (autoInterval) return;
      autoInterval = setInterval(nextSlide, 6000);
    }

    function stopAutoRun() {
      clearInterval(autoInterval);
      autoInterval = null;
    }

    function restartAutoRun() {
      stopAutoRun();
      startAutoRun();
    }

    nextBtn.addEventListener('click', () => { nextSlide(); restartAutoRun(); });
    prevBtn.addEventListener('click', () => { prevSlide(); restartAutoRun(); });
    track.addEventListener('mouseenter', stopAutoRun);
    track.addEventListener('mouseleave', startAutoRun);
    window.addEventListener('resize', () => {
      updateItemsToShow();
      currentIndex = 0;
      updateCarousel();
      restartAutoRun();
    });
    document.addEventListener('visibilitychange', () => {
      document.hidden ? stopAutoRun() : startAutoRun();
    });

    updateItemsToShow();
    updateCarousel();
    startAutoRun();
  }

  initCarousel('carouselTrackx', 'prevBtn', 'nextBtn');
  initCarousel('carouselTrackx2', 'prevBtn2', 'nextBtn2');

  const allItems = document.querySelectorAll('.destination-item');
  allItems.forEach(item => {
    if (!item.classList.contains('nature')) {
      item.style.display = 'none';
    }
  });

  const natureItems = document.querySelectorAll('.destination-item.nature');
  natureItems.forEach((item, index) => {
    item.style.display = 'block';
    setTimeout(() => item.classList.add('show'), index * 100);
  });
});

document.addEventListener('error', function(e) {
  if (e.target.tagName === 'IMG') {
    e.target.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZGRkIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxOCIgZmlsbD0iIzk5OSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkltYWdlIE5vdCBGb3VuZDwvdGV4dD48L3N2Zz4=';
  }
}, true);

function lazyLoadImages() {
  const images = document.querySelectorAll('img[data-src]');
  const imageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
        imageObserver.unobserve(img);
      }
    });
  });

  images.forEach(img => imageObserver.observe(img));
}

lazyLoadImages();

const popup = document.getElementById('popup');
const closeBtn = document.querySelector('.popup-close');
const moreBtn = document.getElementById('moreBtn');

if (popup && closeBtn && moreBtn) {
  moreBtn.addEventListener('click', () => {
    popup.style.display = 'block';
  });

  closeBtn.addEventListener('click', () => {
    popup.style.display = 'none';
  });

  window.addEventListener('click', (e) => {
    if (e.target === popup) {
      popup.style.display = 'none';
    }
  });
}

function filterSelection(category) {
  const items = document.querySelectorAll('.destination-item');
  const buttons = document.querySelectorAll('.filter-btn');

  buttons.forEach(btn => btn.classList.remove('active'));
  if (window.event && window.event.target) {
    window.event.target.classList.add('active');
  }

  items.forEach(item => {
    item.style.display = 'none';
    item.classList.remove('show');
  });

  const targetItems = document.querySelectorAll(`.destination-item.${category}`);
  targetItems.forEach((item, index) => {
    item.style.display = 'block';
    setTimeout(() => item.classList.add('show'), index * 100);
  });
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const keepFirst = function(selector) {
    const nodes = Array.from(document.querySelectorAll(selector));
    nodes.slice(1).forEach(function(node) {
      node.remove();
    });
    return nodes[0] || null;
  };

  const normalizeItineraryMedia = function() {
    const itineraryRoot = document.querySelector('.scrollspy-example, .itinerary_list, #navbar-example2');
    if (!itineraryRoot) {
      return;
    }

    const titleNode = document.querySelector('.package-card .card-title, .basic_pack .card-title, .card-title');
    const subtitleNode = document.querySelector('.package-card .card-text, .basic_pack .card-text, .card-text');
    const title = titleNode ? titleNode.textContent.trim() : 'Travel Itinerary';
    const subtitle = subtitleNode ? subtitleNode.textContent.trim() : 'Explore the full package details below';

    const pickPlaceholder = function() {
      const path = (window.location.pathname || '').toLowerCase();
      if (path.indexOf('/spiritual/') !== -1) {
        return '<?php echo $SK_ROOT_PREFIX; ?>tours/itinerary-placeholder-spiritual.svg';
      }

      if (path.indexOf('/honeymoon-tour/') !== -1) {
        return '<?php echo $SK_ROOT_PREFIX; ?>tours/itinerary-placeholder-honeymoon.svg';
      }

      return '<?php echo $SK_ROOT_PREFIX; ?>tours/itinerary-placeholder-tour.svg';
    };

    const placeholderSrc = pickPlaceholder();

    document.querySelectorAll('.itinerary-hero-placeholder').forEach(function(image) {
      if (!image.getAttribute('src') || image.getAttribute('src').indexOf('itinerary-placeholder') !== -1) {
        image.setAttribute('src', placeholderSrc);
      }
    });

    document.querySelectorAll('.pic .carousel-item, .pic').forEach(function(container) {
      const video = container.querySelector('video, iframe');
      if (!video) {
        const hasImage = container.querySelector('img');
        if (!hasImage || container.querySelector('.itinerary-hero-copy, .itinerary-hero-fallback')) {
          return;
        }

        const overlay = document.createElement('div');
        overlay.className = 'itinerary-hero-copy';
        overlay.innerHTML =
          '<span class="itinerary-hero-copy__label">Grand SK Holidays</span>' +
          '<h2>' + title + '</h2>' +
          '<p>' + subtitle + '</p>';
        container.appendChild(overlay);
        return;
      }

      container.querySelectorAll('video, iframe').forEach(function(media) {
        media.remove();
      });

      if (!container.querySelector('.itinerary-hero-fallback')) {
        const fallback = document.createElement('div');
        fallback.className = 'itinerary-hero-fallback';
        fallback.innerHTML =
          '<div class="itinerary-hero-fallback__content">' +
          '<span class="itinerary-hero-fallback__label">Grand SK Holidays</span>' +
          '<h2>' + title + '</h2>' +
          '<p>' + subtitle + '</p>' +
          '</div>';
        container.appendChild(fallback);
      }
    });
  };

  const normalizeLegacyItineraryCards = function() {
    const itinerarySection = document.querySelector('.itinerary_list');
    if (!itinerarySection || itinerarySection.querySelector('.itinerary-card')) {
      return;
    }

    const heading = itinerarySection.querySelector(':scope > h4');
    const nodes = Array.from(itinerarySection.querySelectorAll('li, p'))
      .filter(function(node) {
        return !node.closest('.itinerary-card') && node.textContent && node.textContent.trim() !== '';
      });

    if (!nodes.length) {
      return;
    }

    const fragment = document.createDocumentFragment();
    if (heading) {
      fragment.appendChild(heading.cloneNode(true));
    }

    let currentCard = null;
    let currentBody = null;

    nodes.forEach(function(node) {
      const text = node.textContent.replace(/\s+/g, ' ').trim();
      const isHeadingNode = node.tagName === 'LI' && (
        !!node.querySelector('b, strong') ||
        /^day[\s:-]/i.test(text) ||
        text.length <= 120
      );

      if (isHeadingNode) {
        currentCard = document.createElement('div');
        currentCard.className = 'itinerary-card';

        const title = document.createElement('h3');
        title.innerHTML = node.innerHTML.trim();
        currentCard.appendChild(title);

        currentBody = null;
        fragment.appendChild(currentCard);
        return;
      }

      if (!currentCard) {
        currentCard = document.createElement('div');
        currentCard.className = 'itinerary-card';

        const title = document.createElement('h3');
        title.textContent = 'Day Plan';
        currentCard.appendChild(title);
        fragment.appendChild(currentCard);
      }

      const paragraph = document.createElement('p');
      paragraph.innerHTML = node.innerHTML.trim();
      currentCard.appendChild(paragraph);
      currentBody = paragraph;
    });

    if (fragment.childElementCount > (heading ? 1 : 0)) {
      itinerarySection.innerHTML = '';
      itinerarySection.appendChild(fragment);
    }
  };

  const bindItineraryAnchors = function() {
    const scrollspy = document.querySelector('.scrollspy-example');
    const navLinks = Array.from(document.querySelectorAll('#navbar-example2 .nav-link[href^="#scrollspyHeading"]'));
    if (!scrollspy || !navLinks.length) {
      return;
    }

    const itinerarySection = scrollspy.querySelector('.itinerary_list');
    const inclusionSection = scrollspy.querySelector('.inc_exc');
    const contentSections = Array.from(scrollspy.children).filter(function(child) {
      return child.nodeType === 1 && child.tagName !== 'HR';
    });
    const termsSection = contentSections.find(function(section) {
      if (section === itinerarySection || section === inclusionSection) {
        return false;
      }

      const heading = section.querySelector('h4');
      return heading && /terms/i.test(heading.textContent || '');
    }) || contentSections[contentSections.length - 1] || null;

    const sectionMap = {
      scrollspyHeading1: itinerarySection,
      scrollspyHeading2: inclusionSection,
      scrollspyHeading3: termsSection
    };

    Object.entries(sectionMap).forEach(function(entry) {
      const id = entry[0];
      const target = entry[1];
      const matches = Array.from(document.querySelectorAll('#' + id));

      matches.forEach(function(node) {
        if (node !== target) {
          node.removeAttribute('id');
        }
      });

      if (target) {
        target.id = id;
      }
    });

    navLinks.forEach(function(link) {
      const hash = (link.getAttribute('href') || '').replace('#', '');
      const target = sectionMap[hash];
      if (!target) {
        return;
      }

      link.addEventListener('click', function(event) {
        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });

        if (window.history && window.history.replaceState) {
          window.history.replaceState(null, '', '#' + hash);
        }
      });
    });

    if (window.bootstrap && window.bootstrap.ScrollSpy) {
      window.bootstrap.ScrollSpy.getOrCreateInstance(scrollspy).refresh();
    }
  };

  document.querySelectorAll('button.scroll-top, #scrollTop').forEach(function(node) {
    node.remove();
  });

  const scrollTopBtn = document.getElementById('skFooterScrollTop');
  if (scrollTopBtn) {
    const syncScrollTop = () => {
      scrollTopBtn.classList.toggle('show', window.scrollY > 240);
    };

    scrollTopBtn.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('scroll', syncScrollTop, { passive: true });
    syncScrollTop();
  }

  normalizeItineraryMedia();
  normalizeLegacyItineraryCards();
  bindItineraryAnchors();
});
</script>
</body>
</html>
