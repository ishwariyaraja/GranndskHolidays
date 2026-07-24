<?php
$SK_PAGE_ASSETS = [
    "<script src=\"script.js\"></script>",
];
include __DIR__ . '/../header.php';
?>
<!-- <button class="testimonial-btn" onclick="window.location.href = "/testimonials.html"">
    Testimonials
</button> -->

<!-- ===== CONTENT ===== -->
<!-- <div style="height:100vh; padding:50px;">
  <h1>honeymoonðŸ‘</h1>
</div> -->
 <!-- Premium Hero Section -->
        <header class="premium-hero-section">
            <div class="hero-background">
                <div class="gradient-overlay"></div>
                <div class="luxury-particles"></div>
            </div>
            <div class="hero-content">
                <div class="luxury-badge">
                    <i class="fas fa-crown"></i>
                    <span>Premium Honeymoon Experiences</span>
                </div>
                <h1 class="luxury-title">
                    <span class="title-line-1">Dream Honeymoon</span>
                    <span class="title-line-2">Destinations</span>
                    <span class="title-accent">Crafted for Love</span>
                </h1>
                <p class="luxury-subtitle">Experience the world's most romantic destinations with our curated luxury packages designed to create unforgettable memories for your perfect honeymoon</p>
                <div class="romantic-features">
                    <div class="feature-item">
                        <i class="fas fa-heart"></i>
                        <span>Day 2 Flower Bed & Candle Light Dinner</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-star"></i>
                        <span>5-Star Luxury Resorts & Villas</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-concierge-bell"></i>
                        <span>24/7 Concierge Service</span>
                    </div>
                </div>
                <div class="hero-cta-group">
                    <button class="luxury-cta primary">
                        <i class="fas fa-plane"></i>
                        Explore Destinations
                    </button>
                    <button class="luxury-cta secondary">
                        <i class="fas fa-phone"></i>
                        Speak to Expert
                    </button>
                </div>
            </div>
        </header>

        <!-- Premium Features Bar -->
        <section class="premium-features-bar">
            <div class="features-container">
                <div class="feature-highlight">
                    <i class="fas fa-shield-alt"></i>
                    <div class="feature-text">
                        <h4>100% Safe</h4>
                        <p>COVID-19 Safety Protocols</p>
                    </div>
                </div>
                <div class="feature-highlight">
                    <i class="fas fa-medal"></i>
                    <div class="feature-text">
                        <h4>Award Winning</h4>
                        <p>Best Travel Agency 2024</p>
                    </div>
                </div>
                <div class="feature-highlight">
                    <i class="fas fa-clock"></i>
                    <div class="feature-text">
                        <h4>24/7 Support</h4>
                        <p>Round the Clock Assistance</p>
                    </div>
                </div>
                <div class="feature-highlight">
                    <i class="fas fa-money-bill-wave"></i>
                    <div class="feature-text">
                        <h4>Best Price</h4>
                        <p>Guaranteed Lowest Rates</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Destinations Grid -->
        <main class="destinations-section">
            
            <!-- Domestic Destinations -->
            <section class="destination-category" id="domestic">
                <div class="section-header">
                    <h2 class="section-title">
                        <i class="fas fa-home"></i>
                        Domestic Paradises
                    </h2>
                    <p class="section-subtitle">Discover India's most romantic destinations perfect for your dream honeymoon</p>
                </div>
                <div class="destinations-grid">
                    <div class="destination-card premium-card" data-destination="kerala">
                        <div class="card-badge">Best Seller</div>
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                                <img src="Honeymoon_photo/Wayanad.jpg" alt="">
                            </div>
                            <div class="image-overlay">
                                <div class="quick-info">
                                    <span class="rating"><i class="fas fa-star"></i> 4.8/5</span>
                                    <span class="reviews">2,450 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-header">
                                <h3>Kerala (Wayanad)</h3>
                                <!-- <div class="price-range">â‚¹60,000 - â‚¹1,50,000</div> -->
                            </div>
                            <!-- <div class="card-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-ship"></i>
                                    <span>Luxury Houseboat Stays</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-spa"></i>
                                    <span>Ayurvedic Couple's Spa</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-leaf"></i>
                                    <span>Spice Garden Tours</span>
                                </div>
                            </div>
                            <div class="card-features">
                                <span><i class="fas fa-clock"></i> 4-7 Days</span>
                                <span><i class="fas fa-calendar"></i> Year Round</span>
                                <span><i class="fas fa-thermometer-half"></i> 24-32Â°C</span>
                            </div> -->
                            <br>
                              <a href="Domestic_Honeymoon/Kerala.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
                        
                    </div>

                    <div class="destination-card" data-destination="goa">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">️
                                        <img src="Honeymoon_photo/Goa.jpg" alt="">
                                      </div>
                            <div class="image-overlay">
                                <div class="quick-info">
                                    <span class="rating"><i class="fas fa-star"></i> 4.6/5</span>
                                    <span class="reviews">3,200 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-header">
                                <h3>Goa</h3>
                                <!-- <div class="price-range">â‚¹40,000 - â‚¹1,20,000</div> -->
                            </div>
                            <!-- <div class="card-highlights">
                                <div class="highlight-item">
                                    <i class="fas fa-umbrella-beach"></i>
                                    <span>Private Beach Resorts</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-ship"></i>
                                    <span>Sunset Cruises</span>
                                </div>
                                <div class="highlight-item">
                                    <i class="fas fa-cocktail"></i>
                                    <span>Beach-side Dining</span>
                                </div>
                            </div>
                            <div class="card-features">
                                <span><i class="fas fa-clock"></i> 3-6 Days</span>
                                <span><i class="fas fa-calendar"></i> Oct-Mar</span>
                                <span><i class="fas fa-thermometer-half"></i> 20-32Â°C</span>
                            </div> -->
                             <br>
                              <a href="Domestic_Honeymoon/Goa.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
                    </div>

                    <div class="destination-card" data-destination="sikkim">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                                  <img src="Honeymoon_photo/Sikkim.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Sikkim (Gangtok & Darjeeling)</h3>
                            <br>
                              <a href="Domestic_Honeymoon/Sikkim.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
                    </div>

                    <!--<div class="destination-card" data-destination="shimla-manali">-->
                    <!--    <div class="card-image">-->
                    <!--        <div class="placeholder-image domestic-bg">ðŸ”ï¸</div>-->
                    <!--    </div>-->
                    <!--    <div class="card-content">-->
                    <!--        <h3>Shimla & Manali</h3>-->
                    <!--        <p>-->
                    <!--        <div class="card-features">-->
                    <!--            <span><i class="fas fa-mountain"></i> Mountains</span>-->
                    <!--            <span><i class="fas fa-snowflake"></i> Adventure</span>-->
                    <!--        </div>-->
                    <!--        <br>-->
                    <!--          <button class="package-cta">View Details</button>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="destination-card" data-destination="andaman">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                                <img src="Honeymoon_photo/Andaman.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Andaman</h3>
                            <br>
                               <a href="Domestic_Honeymoon/Andaman.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
          </div>



                    <!--<div class="destination-card" data-destination="kashmir">-->
                    <!--    <div class="card-image">-->
                    <!--        <div class="placeholder-image domestic-bg">🌸</div>-->
                    <!--    </div>-->
                    <!--    <div class="card-content">-->
                    <!--        <h3>Kashmir</h3>-->
                    <!--        <p>-->
                    <!--        <div class="card-features">-->
                    <!--            <span><i class="fas fa-pray"></i> Spiritual</span>-->
                    <!--            <span><i class="fas fa-tree"></i> Nature</span>-->
                    <!--        </div>-->
                    <!--        <br>-->
                    <!--          <button class="package-cta">View Details</button>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="destination-card" data-destination="ladakh">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">️
                            <img src="Honeymoon_photo/Ladakh.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Ladakh</h3>
                            <br>
                             <a href="Domestic_Honeymoon/Ladakh.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
                    </div>
                    
                    
                      <div class="destination-card" data-destination="manali">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                               <img src="Honeymoon_photo/manali.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Manali</h3>
                            <br>
                              <a href="Domestic_Honeymoon/Manali.php">
                              <button class="package-cta">View Details</button>
                              </a>
                        </div>
                    </div>

                     <div class="destination-card" data-destination="shimla">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                               <img src="Honeymoon_photo/Shimla.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Shimla</h3>
                            <br>
                            <a href="Domestic_Honeymoon/Shimla.php">
                              <button class="package-cta">View Details</button>
                              </a>
                        </div>
                    </div>

                     <div class="destination-card" data-destination="Golden_triangle">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                               <img src="Honeymoon_photo/Golden_triangle.png" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Goldentriangle</h3>
                            <br>
                             <a href="Domestic_Honeymoon/Goldentriangle.php">                   
                              <button class="package-cta">View Details</button>
                              </a>
                        </div>
                    </div>
                    
                      <div class="destination-card" data-destination="kashmir">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                              <img src="Honeymoon_photo/Kashmir.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Kashmir</h3>
                            <br>
                             <a href="Domestic_Honeymoon/Kashmir.php">  
                              <button class="package-cta">View Details</button>
                              </a>
                        </div>
                    </div>

                    <div class="destination-card" data-destination="uttarakhand">
                        <div class="card-image">
                            <div class="placeholder-image domestic-bg">
                               <img src="Honeymoon_photo/uttarkand.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Uttarakhand</h3>
                            <br>
                            <a href="Domestic_Honeymoon/Uttarakhand.php">
                              <button class="package-cta">View Details</button>
                              </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- International Destinations -->
            <section class="destination-category" id="international">
                <div class="section-header">
                    <h2 class="section-title">
                        <i class="fas fa-globe"></i>
                        International Escapes
                    </h2>
                    <p class="section-subtitle">Explore the world's most romantic international destinations with luxury accommodations and exclusive experiences</p>
                </div>
                <div class="destinations-grid">
                    <div class="destination-card international premium-card" data-destination="maldives">
                        <div class="card-badge luxury">Ultra Luxury</div>
                        <div class="card-image">
                            <div class="placeholder-image international-bg">
                                <img src="Honeymoon_photo/maldives.jpg" alt="">
                            </div>
                            <div class="image-overlay">
                                <div class="quick-info">
                                    <span class="rating"><i class="fas fa-star"></i> 4.9/5</span>
                                    <span class="reviews">5,670 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Maldives</h3>
                             <br>
                            <a href="International_Honeymoon/Maldives.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
                    </div>                    <div class="destination-card international" data-destination="dubai">
                        <div class="card-image">
                            <div class="placeholder-image international-bg">️
                              <img src="Honeymoon_photo/Dubai.jpg" alt="">
                              </div>
                        </div>
                        <div class="card-content">
                            <h3>Dubai</h3>
                             <br>
                             <a href="International_Honeymoon/Dubai.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
                    </div>

                    <div class="destination-card international" data-destination="thailand">
                        <div class="card-image">
                            <div class="placeholder-image international-bg">
                               <img src="Honeymoon_photo/Thailand.jpg" alt="">
                            </div>
                        </div>
                        <div class="card-content">
                            <h3>Thailand</h3>
                             <br>
                              <a href="International_Honeymoon/Thailand.php">
                              <button class="package-cta">View Details</button>
                             </a>
                        </div>
                    </div>

                    <div class="destination-card international" data-destination="Malaysia">
                      <div class="card-image">
                          <div class="placeholder-image international-bg">
                             <img src="Honeymoon_photo/Malaysia.jpg" alt="">
                          </div>
                     </div>
                      <div class="card-content">
                          <h3>Malaysia</h3>
                          <br>
                           <a href="International_Honeymoon/Malaysia.php">
                           <button class="package-cta">View Details</button>
                           </a>
                       </div>
                    </div>

                    <div class="destination-card international" data-destination="vietnam">
                       <div class="card-image">
                           <div class="placeholder-image international-bg">
                            <img src="Honeymoon_photo/vietnam.jpg" alt="">
                           </div>
                       </div>
                       <div class="card-content">
                           <h3>Vietnam</h3>
                            <br>
                             <a href="International_Honeymoon/Vietnam.php">
                             <button class="package-cta">View Details</button>
                             </a>
                       </div>
                    </div>

                    <div class="destination-card international" data-destination="bali">
                       <div class="card-image">
                           <div class="placeholder-image international-bg">
                            <img src="Honeymoon_photo/Bali.jpg" alt="">
                           </div>
                       </div>
                       <div class="card-content">
                           <h3>Bali</h3>
                            <br>
                             <a href="International_Honeymoon/Bali.php">
                             <button class="package-cta">View Details</button>
                             </a>
                       </div>
                   </div>

                    <div class="destination-card international" data-destination="Nepal">
                       <div class="card-image">
                           <div class="placeholder-image international-bg">
                            <img src="Honeymoon_photo/Nepal.jpg" alt="">
                           </div>
                       </div>
                       <div class="card-content">
                           <h3>Nepal</h3>
                            <br>
                             <a href="International_Honeymoon/Nepal.php">
                             <button class="package-cta">View Details</button>
                             </a>
                       </div>
                    </div> 
                </div>
            </section>
        </main>

        <!-- Testimonials Section -->
        <!-- <section class="testimonials-section" id="testimonials">
            <div class="section-header">
                <h2 class="section-title">What Our Happy Couples Say</h2>
                <p class="section-subtitle">Real stories from couples who experienced their dream honeymoon with us</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">"</div>
                        <p>"Our Maldives honeymoon was absolutely magical! The overwater villa, private dinners, and exceptional service made it the perfect start to our married life. Paradise Travels made every moment special."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">ðŸ‘°ðŸ¤µ</div>
                        <div class="author-info">
                            <h4>Priya & Rajesh</h4>
                            <span>Maldives Honeymoon</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">"</div>
                        <p>"Kerala backwaters exceeded our expectations! The houseboat experience, Ayurvedic treatments, and the romantic ambiance created memories we'll cherish forever. Highly recommended!"</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">ðŸ‘°ðŸ¤µ</div>
                        <div class="author-info">
                            <h4>Meera & Arjun</h4>
                            <span>Kerala Package</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <div class="quote-icon">"</div>
                        <p>"Bali was a dream come true! The private villa, temple tours, and couple's yoga sessions were perfectly planned. Thank you for making our honeymoon so special and stress-free."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">ðŸ‘°ðŸ¤µ</div>
                        <div class="author-info">
                            <h4>Sakshi & Vikram</h4>
                            <span>Bali Paradise</span>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Luxury Services Section -->
        <section class="luxury-services">
            <div class="section-header">
                <h2 class="section-title">Exclusive Luxury Services</h2>
                <p class="section-subtitle">Premium amenities and personalized services for an unforgettable experience</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <h3>Personal Concierge</h3>
                    <p>Dedicated concierge service available 24/7 to assist with reservations, activities, and special requests</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Luxury Transfers</h3>
                    <p>Private luxury vehicles, helicopter transfers, and yacht charters for seamless transportation</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Professional Photography</h3>
                    <p>Capture your precious moments with professional photographers and videographers</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Private Dining</h3>
                    <p>Exclusive dining experiences including beach dinners, rooftop meals, and in-villa chef services</p>
                </div>
            </div>
        </section>

        <!-- Premium CTA Section -->
        <section class="premium-cta-section" id="contact">
            <div class="cta-background">
                <div class="cta-overlay"></div>
            </div>
            <div class="cta-content">
                <div class="cta-badge">
                    <i class="fas fa-crown"></i>
                    <span>Premium Honeymoon Specialists</span>
                </div>
                <h2>Ready to Begin Your Love Story?</h2>
                <p>Let our expert travel consultants create a bespoke honeymoon experience tailored exclusively for you. Contact us for a complimentary consultation and personalized quote.</p>
                <!-- <div class="cta-stats">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Happy Couples</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Destinations</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">15</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div> -->
  <div class="cta-buttons">
    <button class="luxury-cta primary large">
      <i class="fas fa-heart"></i> Plan My Dream Honeymoon
    </button>
    <button class="luxury-cta secondary large">
      <i class="fas fa-phone"></i> Call +91 7200449904
    </button>
  </div>
                <div class="trust-indicators">
                    <div class="trust-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>100% Secure Booking</span>
                    </div>
                    <!-- <div class="trust-item">
                        <i class="fas fa-undo"></i>
                        <span>Free Cancellation</span>
                    </div>
                    <div class="trust-item">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Support</span>
                    </div> -->
                </div>
            </div>
        </section>

   
<script>
  // Select all custom dropdowns
  const customDropdowns = document.querySelectorAll(".custom-dropdown");
  const groupDropdown = document.getElementById("groupDropdown");

  // Travel Support dropdown
  customDropdowns.forEach(drop => {
    drop.addEventListener("click", function (e) {
      e.stopPropagation();
      this.classList.toggle("active");
    });
  });

  // Group dropdown toggle
  if (groupDropdown) {
    groupDropdown.addEventListener("click", function (e) {
      e.stopPropagation();
      this.classList.toggle("active");
    });
  }

  // Close when clicking outside
  document.addEventListener("click", () => {
    customDropdowns.forEach(drop => drop.classList.remove("active"));
    if (groupDropdown) groupDropdown.classList.remove("active");
  });
</script>

<?php include __DIR__ . '/../footer.php'; ?>
