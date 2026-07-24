        // Navigation scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.luxury-nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        // const hamburger = document.getElementById('hamburger');
        // const navLinks = document.querySelector('.nav-links');
        
        // hamburger.addEventListener('click', function() {
        //     navLinks.classList.toggle('active');
            
        //     const icon = hamburger.querySelector('i');
        //     if (navLinks.classList.contains('active')) {
        //         icon.classList.remove('fa-bars');
        //         icon.classList.add('fa-times');
        //     } else {
        //         icon.classList.remove('fa-times');
        //         icon.classList.add('fa-bars');
        //     }
        // });

        // Smooth scrolling for anchor links
        // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        //     anchor.addEventListener('click', function(e) {
        //         e.preventDefault();
                
        //         const targetId = this.getAttribute('href');
        //         if (targetId === '#') return;
                
        //         const targetElement = document.querySelector(targetId);
        //         if (targetElement) {
                    // Close mobile menu if open
        //             if (navLinks.classList.contains('active')) {
        //                 navLinks.classList.remove('active');
        //                 const icon = hamburger.querySelector('i');
        //                 icon.classList.remove('fa-times');
        //                 icon.classList.add('fa-bars');
        //             }
                    
        //             window.scrollTo({
        //                 top: targetElement.offsetTop - 80,
        //                 behavior: 'smooth'
        //             });
        //         }
        //     });
        // });

        // Package card hover animation
        const packageCards = document.querySelectorAll('.package-card');
        packageCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.1)';
            });
        });

        // Destination card hover animation
        const destinationCards = document.querySelectorAll('.destination-card');
        destinationCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.1)';
            });
        });

        // Testimonial card hover animation
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        testimonialCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.1)';
            });
        });

        // Service card hover animation
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.1)';
            });
        });

        // CTA button hover effects
        const ctaButtons = document.querySelectorAll('.luxury-cta');
        ctaButtons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.15)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.1)';
            });
        });

        // Initialize animations when page loads
        document.addEventListener('DOMContentLoaded', function() {
            // Animate elements on scroll
            const animatedElements = document.querySelectorAll('.package-card, .destination-card, .testimonial-card, .service-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            animatedElements.forEach(element => {
                element.style.opacity = 0;
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(element);
            });
        });

    const messages = [
      "Find me where the ocean meets the sky.",
      "Welcome to Cruise World",
      "Sailing through life one port at a time.",
    ];

    let i = 0;      // index for message
    let j = 0;      // index for character
    let isDeleting = false;
    const speed = 100;
    const pause = 1500;
    const typingText = document.getElementById('typingText');

    function type() {
      const currentMessage = messages[i];
      if (isDeleting) {
        typingText.textContent = currentMessage.substring(0, j--);
      } else {
        typingText.textContent = currentMessage.substring(0, j++);
      }

      if (!isDeleting && j === currentMessage.length + 1) {
        isDeleting = true;
        setTimeout(type, pause);
      } else if (isDeleting && j === 0) {
        isDeleting = false;
        i = (i + 1) % messages.length;
        setTimeout(type, 500);
      } else {
        setTimeout(type, isDeleting ? speed / 2 : speed);
      }
    }

    type();
 
   document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('carouselTrackx');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    let currentIndex = 0;
    const totalItems = track.children.length;
    let itemsToShow = 6; // Default items to show
    let autoInterval;
    
    // Update items to show based on screen size
    function updateItemsToShow() {
        const width = window.innerWidth;
        if (width <= 480) {
            itemsToShow = 2;
        } else if (width <= 768) {
            itemsToShow = 3;
        } else if (width <= 1200) {
            itemsToShow = 4;
        } else {
            itemsToShow = 6;
        }
    }
    
    // Update carousel position
    function updateCarousel() {
        const itemWidth = 100 / itemsToShow;
        const translateX = -currentIndex * itemWidth;
        track.style.transform = `translateX(${translateX}%)`;
        
        // Update button states
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= totalItems - itemsToShow;
    }
    
    // Move to next item
    function nextSlide() {
        if (currentIndex < totalItems - itemsToShow) {
            currentIndex++;
            updateCarousel();
        } else {
            // Loop back to beginning
            currentIndex = 0;
            updateCarousel();
        }
    }
    
    // Move to previous item
    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        } else {
            // Loop to end
            currentIndex = Math.max(0, totalItems - itemsToShow);
            updateCarousel();
        }
    }
    
    // Start auto-run functionality
    function startAutoRun() {
        autoInterval = setInterval(function() {
            nextSlide();
        }, 4000); // Move every 4 seconds (medium speed)
    }
    
    // Stop auto-run functionality
    function stopAutoRun() {
        if (autoInterval) {
            clearInterval(autoInterval);
            autoInterval = null;
        }
    }
    
    // Restart auto-run functionality
    function restartAutoRun() {
        stopAutoRun();
        startAutoRun();
    }
    
    // Event listeners for navigation buttons
    nextBtn.addEventListener('click', function() {
        nextSlide();
        restartAutoRun(); // Restart auto-run after manual interaction
    });
    
    prevBtn.addEventListener('click', function() {
        prevSlide();
        restartAutoRun(); // Restart auto-run after manual interaction
    });
    
    // Pause auto-run on hover
    track.addEventListener('mouseenter', function() {
        stopAutoRun();
    });
    
    // Resume auto-run when mouse leaves
    track.addEventListener('mouseleave', function() {
        startAutoRun();
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        updateItemsToShow();
        // Reset to first item on resize to avoid display issues
        currentIndex = 0;
        updateCarousel();
        restartAutoRun();
    });
    
    // Handle visibility change (pause when tab is not active)
    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            stopAutoRun();
        } else {
            startAutoRun();
        }
    });
    
    // Initialize carousel
    function initCarousel() {
        updateItemsToShow();
        updateCarousel();
        startAutoRun();
    }
    
    // Start the carousel
    initCarousel();
    
    // Touch/Swipe support for mobile devices
    let startX = 0;
    let endX = 0;
    let startY = 0;
    let endY = 0;
    
    track.addEventListener('touchstart', function(e) {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
        stopAutoRun(); // Stop auto-run during touch
    });
    
    track.addEventListener('touchmove', function(e) {
        e.preventDefault(); // Prevent scrolling while swiping
    });
    
    track.addEventListener('touchend', function(e) {
        endX = e.changedTouches[0].clientX;
        endY = e.changedTouches[0].clientY;
        
        const deltaX = startX - endX;
        const deltaY = startY - endY;
        const threshold = 50; // Minimum swipe distance
        
        // Check if horizontal swipe is more significant than vertical
        if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > threshold) {
            if (deltaX > 0) {
                // Swipe left - go to next
                nextSlide();
            } else {
                // Swipe right - go to previous
                prevSlide();
            }
        }
        
        startAutoRun(); // Resume auto-run after touch
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        // Only handle keyboard events when carousel is in focus
        if (document.activeElement === track || track.contains(document.activeElement)) {
            switch(e.key) {
                case 'ArrowLeft':
                    e.preventDefault();
                    prevSlide();
                    restartAutoRun();
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    nextSlide();
                    restartAutoRun();
                    break;
                case ' ': // Spacebar
                    e.preventDefault();
                    if (autoInterval) {
                        stopAutoRun();
                    } else {
                        startAutoRun();
                    }
                    break;
            }
        }
    });
    
    // Make carousel focusable for keyboard navigation
    track.setAttribute('tabindex', '0');
    
    // Add focus styles
    track.addEventListener('focus', function() {
        track.style.outline = '2px solid #4CAA85';
        track.style.outlineOffset = '2px';
    });
    
    track.addEventListener('blur', function() {
        track.style.outline = 'none';
    });
    
    // Smooth scroll behavior for better UX
    track.style.scrollBehavior = 'smooth';
    
    // Performance optimization: Use requestAnimationFrame for smooth animations
    function smoothUpdateCarousel() {
        requestAnimationFrame(function() {
            updateCarousel();
        });
    }
    
    // Debug information (remove in production)
    console.log('Carousel initialized with', totalItems, 'items');
    console.log('Items to show:', itemsToShow);
    console.log('Auto-run interval: 4 seconds (medium speed)');
});

// heart

document.addEventListener('mousemove', function(e) {
    if (Math.random() > 0.98) { 
        createHeartTrail(e.clientX, e.clientY);
    }
});

function createHeartTrail(x, y) {
    const heart = document.createElement('div');
    heart.innerHTML = '💕';
    heart.style.position = 'fixed';
    heart.style.left = x + 'px';
    heart.style.top = y + 'px';
    heart.style.fontSize = '12px';
    heart.style.pointerEvents = 'none';
    heart.style.zIndex = '999';
    heart.style.opacity = '0.7';
    heart.style.transition = 'all 2s ease-out';
    
    document.body.appendChild(heart);
    
    setTimeout(() => {
        heart.style.transform = 'translateY(-50px)';
        heart.style.opacity = '0';
    }, 50);
    
    setTimeout(() => {
        heart.remove();
    }, 2000);
}

    document.addEventListener('DOMContentLoaded', function() {
      initPremiumCTAButtons();
    });

    // ---- Popup (Romantic Modal with Form) ----
    function showRomanticPopup(data) {
      const popup = document.createElement('div');
      popup.className = 'romantic-popup';
      popup.innerHTML = `
        <div class="popup-overlay"></div>
        <div class="popup-content">
          <button class="popup-close">&times;</button>
          <div class="popup-emoji">${data.emoji || '💕'}</div>
          <h2>${data.title}</h2>
          <p>${data.description}</p>
          <form class="popup-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <input type="tel" placeholder="Your Phone" required>
            <textarea placeholder="Tell us about your dream trip..." rows="3" required></textarea>
            <button type="submit">Submit</button>
          </form>
        </div>
      `;
      
      document.body.appendChild(popup);

      popup.querySelector('.popup-close').addEventListener('click', closePopup);
      popup.querySelector('.popup-overlay').addEventListener('click', closePopup);

      popup.querySelector('.popup-form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('💌 Thank you! We will contact you soon 📞');
        closePopup();
      });

      setTimeout(() => popup.classList.add('show'), 10);
    }

    function closePopup() {
      const popup = document.querySelector('.romantic-popup');
      if (popup) {
        popup.classList.remove('show');
        setTimeout(() => popup.remove(), 300);
      }
    }

    // ---- CTA Buttons ----

    function initPremiumCTAButtons() {
      const ctaButtons = document.querySelectorAll('.cta-buttons .luxury-cta');
      ctaButtons.forEach(btn => {
        if (btn.classList.contains('primary')) {
          btn.addEventListener('click', function() {
            showRomanticPopup({
              title: 'Plan Your Dream Honeymoon',
              description: 'Fill in the details and we will create the perfect honeymoon package for you!',
              emoji: '💕'
            });
          });
        } else if (btn.classList.contains('secondary')) {
          btn.addEventListener('click', function() {
            showRomanticPopup({
              title: 'Call Us Now',
              description: 'Leave your details and our travel expert will call you shortly!',
              emoji: '📞'
            });
          });
        }
      });
    }

       function showLocation(place) {
      const popup = document.getElementById('locationModal');
      const text = document.getElementById('locationText');

      if (place === 'trichy') {
        text.innerHTML = `
          <strong>Trichy Office:</strong><br>
          NO: 103, FIRST FLOOR, ST PAUL COMPLEX,<br>
          BHARATHIYAR SALAI, OPPOSITE HEAD POST OFFICE,<br>
          TRICHY - 620001
        `;
      } else if (place === 'perambalur') {
        text.innerHTML = `
          <strong>Perambalur Office:</strong><br>
          2nd Floor, Vallalar Complex,<br>
          Kamarajar Signal,<br>
          Perambalur - 621212
        `;
      } else if (place === 'thuraiyur') {
        text.innerHTML = `
          <strong>Thuraiyur Office:</strong><br>
          NO: 210, FIRST FLOOR, SRINIVASA COMPLEX,<br>
           TRICHY ROAD,<br>
            THURAIYUR - 621110
        `;
      }

      popup.style.display = 'flex';
    }

    function closeLocationPopup() {
      document.getElementById('locationModal').style.display = 'none';
    }

    // Close popup if user clicks outside it
    window.onclick = function(event) {
      const popup = document.getElementById('locationModal');
      if (event.target === popup) {
        popup.style.display = 'none';
      }
    }
