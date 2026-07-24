
  
// Global variables
let currentCarouselIndex = {
    international: 0,
    domestic: 0
};

// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    initializeSearchForm();
    initializeCarousels();
    initializeScrollEffects();
    initializeAnimations();
    initializeContactSidebar();
    initializeTourDropdowns();
});

function initializeContactSidebar() {
    const openBtn = document.getElementById('skOpenBtn');
    const closeBtn = document.getElementById('skCloseBtn');
    const contactCard = document.getElementById('skContactCard');

    if (!openBtn || !closeBtn || !contactCard) {
        return;
    }

    openBtn.addEventListener('click', function() {
        contactCard.classList.add('sk-active');
    });

    closeBtn.addEventListener('click', function() {
        contactCard.classList.remove('sk-active');
    });
}

function initializeTourDropdowns() {
    if (window.__skTourDropdownBound) {
        return;
    }

    const dropdownItems = Array.from(document.querySelectorAll('.nav-item.dropdown'));

    if (!dropdownItems.length) {
        return;
    }

    const closeAll = () => {
        dropdownItems.forEach(item => item.classList.remove('active'));
        dropdownItems.forEach(item => {
            const menu = item.querySelector('.dropdown-menu');
            const toggle = item.querySelector('.nav-link.dropdown-toggle');
            if (menu) {
                menu.classList.remove('show');
                menu.style.display = '';
            }
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    };

    dropdownItems.forEach(item => {
        const toggle = item.querySelector('.nav-link.dropdown-toggle');

        if (!toggle) {
            return;
        }

        toggle.addEventListener('click', function(event) {
            event.preventDefault();
            const shouldOpen = !item.classList.contains('active');
            closeAll();
            if (shouldOpen) {
                item.classList.add('active');
                const menu = item.querySelector('.dropdown-menu');
                if (menu) {
                    menu.classList.add('show');
                    menu.style.display = 'block';
                }
                toggle.setAttribute('aria-expanded', 'true');
            }
        });
    });

    window.__skTourDropdownBound = true;

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.nav-item.dropdown')) {
            closeAll();
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeAll();
        }
    });
}

// Search form functionality
function initializeSearchForm() {
    const searchForm = document.getElementById('searchForm');
    const fromDate = document.getElementById('fromDate');
    const toDate = document.getElementById('toDate');
    
    const today = new Date().toISOString().split('T')[0];
    if (fromDate) fromDate.min = today;
    if (toDate) toDate.min = today;
    
    if (fromDate && toDate) {
        fromDate.addEventListener('change', function() {
            toDate.min = this.value || today;
            if (toDate.value && toDate.value < this.value) {
                toDate.value = this.value;
            }
        });
    }
    
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            handleSearchSubmission();
        });
    }
}

// Handle search form submission
function handleSearchSubmission() {
    const formData = new FormData(document.getElementById('searchForm'));
    const searchData = Object.fromEntries(formData.entries());
    const searchBtn = document.querySelector('.search-btn');
    const originalText = searchBtn.innerHTML;
    searchBtn.innerHTML = '<span class="loading"></span> Searching...';
    searchBtn.disabled = true;
    
    setTimeout(() => {
        searchBtn.innerHTML = originalText;
        searchBtn.disabled = false;
        showSearchResults(searchData);
    }, 2000);
}

// Show search results
function showSearchResults(data) {
    alert(`Searching for packages to ${data.destination || 'your destination'}...\nFrom: ${data.from}\nTo: ${data.to}\nTravelers: ${data.travelers}`);
}

// Counter
function changeCount(delta) {
    const input = document.getElementById('travelers');
    if (input) {
        const currentValue = parseInt(input.value) || 2;
        const newValue = Math.max(1, Math.min(20, currentValue + delta));
        input.value = newValue;
    }
}
// Carousel
function initializeCarousels() {
    setInterval(() => {
        slideCarousel('internationalCarousel', 1);
    }, 5000);
    
    setTimeout(() => {
        setInterval(() => {
            slideCarousel('domesticCarousel', 1);
        }, 5000);
    }, 2500);
}

function slideCarousel(carouselId, direction) {
    const carousel = document.getElementById(carouselId);
    if (!carousel) return;
    
    const track = carousel.querySelector('.carousel-track');
    const cards = track.querySelectorAll('.package-card');
    const cardWidth = cards[0].offsetWidth + 20;
    const visibleCards = Math.floor(carousel.offsetWidth / cardWidth);
    const maxIndex = Math.max(0, cards.length - visibleCards);
    
    const type = carouselId === 'internationalCarousel' ? 'international' : 'domestic';
    
    currentCarouselIndex[type] += direction;
    
    if (currentCarouselIndex[type] > maxIndex) currentCarouselIndex[type] = 0;
    else if (currentCarouselIndex[type] < 0) currentCarouselIndex[type] = maxIndex;
    
    const translateX = -currentCarouselIndex[type] * cardWidth;
    track.style.transform = `translateX(${translateX}px)`;
}

// Scroll effects (navbar removed)
// function initializeScrollEffects() {
//     const scrollTopBtn = document.getElementById('scrollTop');
    
//     if (scrollTopBtn) {
//         window.addEventListener('scroll', function() {
//             if (window.pageYOffset > 300) {
//                 scrollTopBtn.classList.add('show');
//             } else {
//                 scrollTopBtn.classList.remove('show');
//             }
//         });
        
//         scrollTopBtn.addEventListener('click', function() {
//             window.scrollTo({ top: 0, behavior: 'smooth' });
//         });
//     }
// }
// Scroll effects
function initializeScrollEffects() {
    // Scroll to top button
    const scrollTopBtn = document.getElementById('scrollTop');
    
    if (scrollTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });
        
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Navbar background on scroll
    const navbar = document.querySelector('.luxury-navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = 'none';
            }
        });
    }
}

// Animations
// function initializeAnimations() {
//     const observer = new IntersectionObserver(entries => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 entry.target.style.opacity = '1';
//                 entry.target.style.transform = 'translateY(0)';
//             }
//         });
//     });

//     document.querySelectorAll('.trust-item, .package-card, .featured-card, .testimonial-card, .section-header')
//         .forEach(el => {
//             el.style.opacity = '0';
//             el.style.transform = 'translateY(30px)';
//             observer.observe(el);
//         });
// }
// Intersection Observer for animations
function initializeAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                
                // Add stagger effect for grid items
                if (entry.target.classList.contains('trust-item') || 
                    entry.target.classList.contains('package-card') ||
                    entry.target.classList.contains('featured-card') ||
                    entry.target.classList.contains('testimonial-card')) {
                    
                    const siblings = entry.target.parentElement.children;
                    const index = Array.from(siblings).indexOf(entry.target);
                    entry.target.style.animationDelay = `${index * 0.1}s`;
                }
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll(
        '.trust-item, .package-card, .featured-card, .testimonial-card, .section-header'
    );
    
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// Ø¨code unchanged ðŸ‘‡

// Popup
// const popup = document.getElementById("popup");
// const closeBtn = document.querySelector(".popup-close");
// const moreBtn = document.getElementById("moreBtn");

// moreBtn.addEventListener("click", () => popup.style.display = "block");
// closeBtn.onclick = () => popup.style.display = "none";

// window.onclick = e => { if(e.target == popup) popup.style.display = "none"; };

// Filter
// function filterSelection(category) {
//   const items = document.querySelectorAll('.destination-item');
//   const buttons = document.querySelectorAll('.filter-btn');
  
//   buttons.forEach(btn => btn.classList.remove('active'));
//   event.target.classList.add('active');
  
//   items.forEach(item => {
//     item.style.display = 'none';
//     item.classList.remove('show');
//   });
  
//   document.querySelectorAll(`.destination-item.${category}`)
//     .forEach((item, index) => {
//       item.style.display = 'block';
//       setTimeout(() => item.classList.add('show'), index * 100);
//     });
// }

// Location popup same as before...

function bookPackage(packageName) {
    const modal = createBookingModal(packageName);
    document.body.appendChild(modal);
    modal.style.display = 'flex';
    
    // Animate modal in
    setTimeout(() => {
        modal.style.opacity = '1';
        modal.querySelector('.modal-content').style.transform = 'scale(1)';
    }, 10);
}
// Create booking modal
function createBookingModal(packageName) {
    const modal = document.createElement('div');
    modal.className = 'booking-modal';
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10000;
        opacity: 0;
        transition: opacity 0.3s ease;
    `;
    
    modal.innerHTML = `
        <div class="modal-content" style="
            background: white;
            padding: 40px;
            border-radius: 20px;
            max-width: 500px;
            width: 90%;
            text-align: center;
            transform: scale(0.9);
            transition: transform 0.3s ease;
        ">
            <h3 style="color: var(--primary-color); margin-bottom: 20px;">Book ${packageName}</h3>
            <p style="margin-bottom: 30px; color: var(--text-light);">
                Thank you for your interest! Our travel experts will contact you shortly with the best deals and customized itinerary.
            </p>
            <div style="display: flex; gap: 15px; justify-content: center;">
                <button onclick="closeModal(this)" style="
                    background: var(--gradient-primary);
                    color: white;
                    border: none;
                    padding: 12px 25px;
                    border-radius: 10px;
                    cursor: pointer;
                    font-weight: 600;
                ">Close</button>
                <a href="tel:+919750526684" style="
                    background: var(--secondary-color);
                    color: white;
                    text-decoration: none;
                    padding: 12px 25px;
                    border-radius: 10px;
                    font-weight: 600;
                ">Call Now</a>
            </div>
        </div>
    `;
    
    // Close modal on backdrop click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal(modal.querySelector('button'));
        }
    });
    
    return modal;
}

// Close modal
function closeModal(button) {
    const modal = button.closest('.booking-modal');
    modal.style.opacity = '0';
    modal.querySelector('.modal-content').style.transform = 'scale(0.9)';
    
    setTimeout(() => {
        modal.remove();
    }, 300);
}

// Add event listeners for book buttons
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('book-btn')) {
        const packageName = e.target.closest('.featured-card').querySelector('h3').textContent;
        bookPackage(packageName);
    }
});

// Newsletter subscription
function subscribeNewsletter(email) {
    if (!email || !email.includes('@')) {
        alert('Please enter a valid email address');
        return;
    }
    
    // Simulate subscription
    alert('Thank you for subscribing! You will receive the latest travel deals and updates.');
}

// Add newsletter form functionality
document.addEventListener('click', function(e) {
    if (e.target.closest('.newsletter-form button')) {
        const input = e.target.closest('.newsletter-form').querySelector('input');
        subscribeNewsletter(input.value);
        input.value = '';
    }
});

// Smooth reveal animation for elements
function revealOnScroll() {
    const reveals = document.querySelectorAll('.reveal');
    
    reveals.forEach(reveal => {
        const windowHeight = window.innerHeight;
        const revealTop = reveal.getBoundingClientRect().top;
        const revealPoint = 150;
        
        if (revealTop < windowHeight - revealPoint) {
            reveal.classList.add('active');
        }
    });
}

// Add reveal class to elements that should animate
window.addEventListener('scroll', revealOnScroll);

// Typing effect for hero subtitle (if needed)
function typeWriter(element, text, speed = 50) {
    let i = 0;
    element.textContent = '';
    
    function type() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }
    
    type();
}

// Parallax effect for hero section
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelector('.hero-video');
    
    if (parallax) {
        const speed = scrolled * 0.5;
        parallax.style.transform = `translateY(${speed}px)`;
    }
});

// Preloader (if needed)
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }
});

// Touch/swipe support for carousels
function addTouchSupport() {
    const carousels = document.querySelectorAll('.carousel-container');
    
    carousels.forEach(carousel => {
        let startX = 0;
        let currentX = 0;
        let isDragging = false;
        
        carousel.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
            isDragging = true;
        });
        
        carousel.addEventListener('touchmove', function(e) {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        });
        
        carousel.addEventListener('touchend', function() {
            if (!isDragging) return;
            isDragging = false;
            
            const diffX = startX - currentX;
            if (Math.abs(diffX) > 50) {
                const direction = diffX > 0 ? 1 : -1;
                slideCarousel(carousel.id, direction);
            }
        });
    });
}

// Initialize touch support
addTouchSupport();


  



