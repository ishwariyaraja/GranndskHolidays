<?php
$SK_PAGE_ASSETS = ['  <link rel="stylesheet" href="index.css">'];
include __DIR__ . '/header.php';
?>
<!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <video autoplay muted loop class="hero-video">
                <source src="./4791166-uhd_3840_2160_30fps.mp4" type="video/mp4">
            </video>
        </div>
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <!-- <span class="hero-badge">
                        <i class="fas fa-star"></i>
                        Trusted by 3k+ Travelers
                    </span> -->
                    <h1 class="hero-title">
                        Find Your Next
                        <span class="highlight">Perfect</span>
                        Holiday
                    </h1>
                    <p class="hero-subtitle">
                        Curated itineraries, luxury stays, and local experiences“ bundled into stres‘free packages.
                    </p>
                    
                  <!-- âœ¨ Booking Button -->
                <div class="hero-button">
                    <a href="./bookingform.php" class="book-btn">
                        <i class="fas fa-plane-departure"></i>
                    </a>
                </div>
                   
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section class="trust-section">
        <div class="container-fluid">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="trust-content">
                        <h4>100% Secure</h4>
                        <p>Safe & trusted bookings</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="trust-content">
                        <h4>24/7 Support</h4>
                        <p>Always here to help</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="trust-content">
                        <h4>Best Prices</h4>
                        <p>Guaranteed lowest rates</p>
                    </div>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="trust-content">
                        <h4>500+ Successful Tours</h4>
                        <p>4.9customer rating</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- international packages  -->
<h2 class="homepage-section-title international section-title">International Packages</h2>
  <div class="carousel-container" id="internationals">
  <!-- Navigation Buttons -->
  <div class="carousel-buttons-news">
    <button id="prevBtn">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <button id="nextBtn">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
  </div>
  <div class="carousel-track" id="carouselTrackx">
    <div class="carousel-imagex">
      <img src="./International-Packages/Australia.png"/>
      <a href="./tours/international-tours/australia/australia/index.php">
        <button>
          <h4>Australia</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/egypt.png" />
      <a href="./tours/international-tours/europe/egypt/index.php">
        <button>
          <h4>Egypt</h4>
        </button>
      </a>
    </div>
    <!-- <div class="carousel-imagex">
      <img src="./International-Packages/iceland1.png" />
      <a href="#">
        <button>
          <h4>Iceland</h4>
        </button>
      </a>
    </div> -->
    <div class="carousel-imagex">
      <img src="./International-Packages/dubai.png" />
     <a href="./tours/international-tours/asia/dubai-UAF/index.php">
        <button>
          <h4>Dubai</h4>
        </button>
      </a>
    </div>
    <!-- <div class="carousel-imagex">
       <img src="./International-Packages/israel.png" />
      <a href="#">
        <button>
          <h4>Israel</h4>
        </button>
      </a>
    </div> -->
    <div class="carousel-imagex">
      <img src="./International-Packages/europe1.jpg" />
   <a href="./tours/international-tours/europe/europe/index.php">
        <button>
          <h4>Europe</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/hongkong.png" />
      <a href="./tours/international-tours/asia/hong-kong/index.php">
        <button>
          <h4>Hong Kong</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/newsland.png" />
      <a href="./tours/international-tours/australia/newzland/index.php">
        <button>
          <h4>New Zealand</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/9.png" />
      <a href="./tours/international-tours/asia/kazakhstan/index.php">
        <button>
          <h4>Kazhakasthan</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/14.png" />
        <a href="./tours/international-tours/asia/maldives/index.php">
        <button>
          <h4>Maldives</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/11.png" />
      <a href="./tours/international-tours/Africa/seychelles/index.php">
        <button>
          <h4>Seychelles</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./Bestselling/mauritius1.png" />
      <a href="./tours/international-tours/Africa/mauritius/index.php">
        <button>
          <h4>Mauritius</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/azerbaijan.png" />
      <a href="./tours/international-tours/asia/azerbaijan/index.php">
        <button>
          <h4>Azerbaijan</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/Singapore.jpg" />
      <a href="./tours/international-tours/asia/singapore/index.php">
        <button>
          <h4>Singapore</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/malaysia1.png" />
        <a href="./tours/international-tours/asia/malaysia/index.php">
        <button>
          <h4>Malaysia</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/16.png" />
      <a href="./tours/international-tours/asia/sri-lanka/index.php">
        <button>
          <h4>Sri Lanka</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="./International-Packages/Thailandgolden.png" />
      <a href="./tours/international-tours/asia/thailand/index.php">
        <button>
          <h4>Thailand</h4>
        </button>
      </a>
    </div>
    <!--<div class="carousel-imagex">-->
    <!--  <img src="./International-Packages/18.png" />-->
    <!--  <a href="./tours/domestic-tours/north-india/amritsar/index.php">-->
    <!--    <button>-->
    <!--      <h4>Vietnam</h4>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--</div>-->
    <!--<div class="carousel-imagex">-->
    <!--  <img src="./International-Packages/19.png" />-->
    <!--  <a href="./tours/domestic-tours/north-india/amritsar/index.php">-->
    <!--    <button>-->
    <!--      <h4>Vietnam & Cambodia</h4>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--</div>-->
    <div class="carousel-imagex">
      <img src="./International-Packages/unitedstates.png" />
      <a href="./tours/international-tours/north-america/united/index.php">
        <button>
          <h4>United States</h4>
        </button>
      </a>
    </div>
    <!--<div class="carousel-imagex">-->
    <!--  <img src="./International-Packages/21.png" />-->
    <!--  <a href="./tours/domestic-tours/north-india/amritsar/index.php">-->
    <!--    <button>-->
    <!--      <h4>London</h4>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--</div>-->
    <!--<div class="carousel-imagex">-->
    <!--  <img src="./International-Packages/22.png" />-->
    <!--  <a href="./tours/domestic-tours/north-india/amritsar/index.php">-->
    <!--    <button>-->
    <!--      <h4>Canada</h4>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--</div>-->
    <div class="carousel-imagex">
      <img src="./International-Packages/23.png" />
      <a href="./tours/international-tours/asia/russia/index.php">
        <button>
          <h4>Russia</h4>
        </button>
      </a>
    </div>
  </div>
</div>


  <!-- carouselindia -->
<h2 class="homepage-section-title section-title domestic">Domestic Packages</h2>
  <div class="carousel-container" id="domestics">
  <!-- Navigation Buttons -->
  <div class="carousel-buttons-news">
    <button id="prevBtn2">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <button id="nextBtn2">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
  </div>

  <div class="carousel-track" id="carouselTrackx2">
    <div class="carousel-imagex">
      <img src="image_45/Amritsar.jpg" />
       <a href="./tours/domestic-tours/north-india/amritsar/index.php">
        <button>
           <h4>Amristar</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
     <img src="image_45/Andaman_and_Nicobar_Islands.jpg" />
      <a href="./tours/domestic-tours/south-india/andaman/index.php">
      <button>
        <h4>Andaman</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
       <img src="image_45/Goa.jpg" />
        <a href="./tours/domestic-tours/west-india/goa/index.php">
        <button>
          <h4>Goa</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
       <img src="image_45/Kerala.jpg" />
          <a href="./tours/domestic-tours/south-india/kerala/index.php">
          <button>
            <h4>Kerala</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
       <img src="image_45/Kolkata.jpg" />
            <a href="./tours/domestic-tours/east-india/kolkata/index.php">
            <button>
              <h4>Kolkata</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="image_45/coorg.jpg" />
          <a href="./tours/domestic-tours/south-india/coorg/index.php">
          <button>
              <h4>Coorg & Mysore</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
     <img src="image_45/Kashmir.jpg" />
       <a href="./tours/domestic-tours/north-india/jammu-and-kashmir/index.php">
            <button>
                  <h4>Jammu Kashmir</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
     <img src="image_45/darjeeling1.png" />
            <a href="./tours/domestic-tours/east-india/darjeeling-and-sikkim/index.php">
                  <button>
                    <h4>Gangtok Darjeeling</h4>
        </button>
      </a>
    </div>
    <!--<div class="carousel-imagex">-->
    <!--   <img src="./image_45/jaipurr..jpg" />-->
    <!--          <a href="./tours/domestic-tours/north-india/jaipur/index.php">-->
    <!--                  <button>-->
    <!--                    <h4>Jaipur</h4>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--</div>-->
    <!--<div class="carousel-imagex">-->
    <!--  <img src="image_45/Jaisalmer.jpg" />-->
    <!--        <a href="./tours/domestic-tours/north-india/jaisalmer/index.php">-->
    <!--              <button>-->
    <!--                 <h4>Jaisalmer</h4>-->
    <!--    </button>-->
    <!--  </a>-->
    <!--</div>-->
    <div class="carousel-imagex">
       <img src="image_45/Leh_Ladakh.jpg" />
              <a href="./tours/domestic-tours/north-india/leh-ladakh/index.php">
                  <button>
                     <h4>Leh Ladakh </h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="image_45/Rajasthan.jpg" />
                <a href="./tours/domestic-tours/north-india/rajasthan/index.php">
                      <button>
                         <h4>Rajasthan</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="image_45/Mussorie.jpg" />
              <a href="./tours/domestic-tours/north-india/golden-triangle/index.php">
                  <button>
                  <h4>Golden Triangle</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
      <img src="image_45/sevensisters.jpg" />
                 <a href="./tours/domestic-tours/east-india/7-sisters/index.php">
                        <button>
                   <h4>7 Sisters</h4>
        </button>
      </a>
    </div>
    <div class="carousel-imagex">
        <img src="image_45/Delhi & agra.png" />
                        <a href="./tours/domestic-tours/north-india/delhi-and-agra/index.php">
                       <button>
                      <h4>Delhi & Agra</h4>
        </button>
      </a>
    </div>
  </div>
</div>
</div>
<!-- Popular Packages -->
<section class="featured-section">
  <div class="container-fluid featured-section-container">
    <div class="section-header">
      <h2 class="section-title">Popular Packages</h2>
      <p class="section-subtitle">Hand-picked trips with stays, transfers, breakfast & guided experiences</p>
    </div>
    
    <div class="featured-grid">
      <!-- Card 1 -->
      <div class="featured-card">
        <div class="featured-image">
          <img src="Bestselling/singapore.png" alt="Singapore">
          <!-- <div class="featured-badge">Best Seller</div> -->
        </div>
        <div class="featured-content">
          <h3>Singapore</h3>
          <div class="featured-meta">
            <span><i class="fas fa-utensils"></i> Breakfast & Transfers</span>
            <span><i class="fas fa-ship"></i> Sunset Cruise</span>
          </div>
          <div class="featured-price">
           <a href="./tours/international-tours/asia/singapore/index.php">
           </a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="featured-card">
        <div class="featured-image">
          <img src="Bestselling/dubai.jpg" alt="Dubai">
        </div>
        <div class="featured-content">
          <h3>Dubai Dazzle</h3>
          <div class="featured-meta">
            <span><i class="fas fa-utensils"></i> Breakfast & Transfers</span>
            <span><i class="fas fa-ship"></i> Sunset Cruise</span>
          </div>
          <div class="featured-price">
            <a href="./tours/international-tours/asia/dubai-UAF/index.php">
           </a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="featured-card">
        <div class="featured-image">
          <img src="Bestselling/Demestic/kerala.jpeg" alt="Kerala">
        </div>
        <div class="featured-content">
          <h3>Kerala</h3>
             <div class="featured-meta">
            <span><i class="fas fa-utensils"></i> Breakfast & Transfers</span>
            <span><i class="fas fa-ship"></i> Sunset Cruise</span>
          </div>
          <div class="featured-price">
            <a href="./tours/domestic-tours/south-india/kerala/index.php">
           </a>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="featured-card">
        <div class="featured-image">
          <img src="Bestselling/Demestic/Andaman.jpg" alt="Andaman">
        </div>
        <div class="featured-content">
          <h3>Andaman</h3>
            <div class="featured-meta">
            <span><i class="fas fa-utensils"></i> Breakfast & Transfers</span>
            <span><i class="fas fa-ship"></i> Sunset Cruise</span>
          </div>
          <div class="featured-price">
             <a href="./tours/domestic-tours/south-india/andaman/index.php">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- More Packages Button (outside grid) -->
<div class="more-packages-wrapper">
  <button id="moreBtn">More Packages</button>
</div>

  </div>
</section>

<!-- Travel support services -->
<section class="travel-services" id="travel-services">
  <div class="travel-services__inner">
    <div class="travel-services__heading">
      <div>
        <span class="travel-services__eyebrow">Travel support services</span>
        <h2>Air Tickets, Passport Support And Visiting Visa Assistance In One Trusted Place</h2>
        <p>GRAND SK Holidays Pvt. Ltd. provides fast, reliable and professional support for domestic and international air ticket booking, passport processing and visitor visa applications. Each service below now reflects the content from your original documents with a cleaner, modern layout for every screen size.</p>
        <div class="travel-services__actions">
          <a href="./bookingform.php" class="travel-services__button travel-services__button--primary">Start your enquiry <i class="fa-solid fa-arrow-right"></i></a>
          <a href="tel:+917200449904" class="travel-services__button travel-services__button--secondary">Call travel support</a>
        </div>
      </div>
      <div class="travel-services__promise">
        <strong>Hassle-free travel documentation and booking support</strong>
        We help travellers compare flights, verify documents, schedule appointments, prepare applications and stay supported before and after the journey.
      </div>
    </div>

    <div class="travel-services__stats">
      <div class="travel-stat">
        <strong>3 Core Services</strong>
        <span>Air ticket booking, passport services and visiting visa assistance are now organized into clear service cards with direct actions.</span>
      </div>
      <div class="travel-stat">
        <strong>End-to-End Guidance</strong>
        <span>From documentation review to booking confirmation and application tracking, the section explains the full process for visitors.</span>
      </div>
      <div class="travel-stat">
        <strong>Responsive By Design</strong>
        <span>Expandable details, balanced spacing and stacked mobile layouts keep the page readable across desktop, tablet and phone screens.</span>
      </div>
    </div>

    <div class="travel-services__grid">
      <article class="travel-service-card">
        <div class="travel-service-card__top">
          <span class="travel-service-card__icon"><i class="fa-solid fa-plane-departure" aria-hidden="true"></i></span>
          <h3>Air Ticket Booking</h3>
          <!--<p class="travel-service-card__lead">Fast, reliable and affordable domestic and international flight booking for business, leisure, education, pilgrimage and family travel.</p>-->
          <div class="travel-service-card__meta">
            <span>Domestic</span>
            <span>International</span>
            <span>Competitive Fares</span>
          </div>
          <div class="travel-service-card__highlight">
            <strong>Fly with confidence</strong>
            <span>We compare schedules, fares, baggage allowances and travel times so you can choose the best option with confidence.</span>
          </div>
        </div>
        <div class="travel-service-card__body">
          <div class="travel-service-card__block">
            <h4>Our Air Ticket Services</h4>
            <div class="travel-service-card__columns">
              <ul>
                <li>Domestic flight bookings</li>
                <li>International flight bookings</li>
                <li>One-way, round-trip and multi-city reservations</li>
                <li>Student air tickets</li>
                <li>Corporate travel bookings</li>
                <li>Group flight reservations</li>
              </ul>
              <ul>
                <li>Family travel bookings</li>
                <li>Pilgrimage tour flight bookings</li>
                <li>Senior citizen flight bookings</li>
                <li>Army and defence personnel air tickets</li>
                <li>Last-minute flight reservations</li>
                <li>Low-cost and full-service airline bookings</li>
              </ul>
            </div>
          </div>
          <div class="travel-service-card__block">
            <h4>Airlines We Book</h4>
            <p>We assist with bookings across leading domestic and international airlines, offering flexible travel options to destinations worldwide with support before and after your journey.</p>
          </div>
          <details>
            <summary>Post-booking &amp; travel assistance</summary>
            <ul>
              <li>Flight date change assistance</li>
              <li>Ticket cancellation support</li>
              <li>Flight rescheduling</li>
              <li>Boarding pass assistance</li>
              <li>Extra baggage booking</li>
              <li>Meal and seat selection</li>
              <li>Travel insurance, visa assistance, holiday packages and airport transfer arrangements</li>
            </ul>
          </details>
          <details>
            <summary>Why choose GRAND SK Holidays?</summary>
            <ul>
              <li>Best available airfares</li>
              <li>Wide choice of domestic and international airlines</li>
              <li>Quick and secure ticket confirmation</li>
              <li>Transparent pricing with no hidden charges</li>
              <li>Dedicated customer support</li>
              <li>Assistance before and after your journey</li>
              <li>Personalized travel solutions for individuals, families and groups</li>
            </ul>
          </details>
          <details>
            <summary>How booking works</summary>
            <ol>
              <li>Share your travel destination and preferred dates.</li>
              <li>Receive the best available flight options and fares.</li>
              <li>Confirm your preferred itinerary.</li>
              <li>Complete the booking securely.</li>
              <li>Receive your e-ticket and travel details.</li>
              <li>Get ongoing support for changes, cancellations or travel-related assistance.</li>
            </ol>
          </details>
          <a href="./bookingform.php" class="travel-service-card__cta">Start flight enquiry <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </article>

      <article class="travel-service-card">
        <div class="travel-service-card__top">
          <span class="travel-service-card__icon"><i class="fa-solid fa-passport" aria-hidden="true"></i></span>
          <h3>Passport Services</h3>
          <!--<p class="travel-service-card__lead">Reliable and professional passport assistance for new applications, renewals, Tatkal, reissue requests and personal detail updates.</p>-->
          <div class="travel-service-card__meta">
            <span>New</span>
            <span>Renewal</span>
            <span>Tatkal</span>
          </div>
          <div class="travel-service-card__highlight">
            <strong>Accurate documentation</strong>
            <span>We guide you through every step with document verification, appointment planning and support designed to reduce delays and rejections.</span>
          </div>
        </div>
        <div class="travel-service-card__body">
          <div class="travel-service-card__block">
            <h4>Our Passport Services</h4>
            <div class="travel-service-card__columns">
              <ul>
                <li>New passport application</li>
                <li>Passport renewal</li>
                <li>Tatkal passport assistance</li>
                <li>Lost or damaged passport reissue</li>
                <li>Address change in passport</li>
                <li>Name change or surname change</li>
              </ul>
              <ul>
                <li>Spouse name addition or deletion</li>
                <li>Date of birth correction</li>
                <li>ECNR assistance</li>
                <li>Minor passport application</li>
                <li>Passport status tracking</li>
                <li>Appointment booking and document guidance</li>
              </ul>
            </div>
          </div>
          <details>
            <summary>Why choose GRAND SK Holidays?</summary>
            <ul>
              <li>Experienced passport consultants</li>
              <li>End-to-end documentation support</li>
              <li>Quick appointment scheduling</li>
              <li>Transparent service charges</li>
              <li>Fast and reliable assistance</li>
              <li>Personalized customer support</li>
              <li>Guidance throughout the entire process</li>
            </ul>
          </details>
          <details>
            <summary>Documents generally required</summary>
            <ul>
              <li>Aadhaar Card</li>
              <li>PAN Card</li>
              <li>Voter ID or driving licence</li>
              <li>Birth certificate where applicable</li>
              <li>Proof of address</li>
              <li>Passport-size photographs if required</li>
              <li>Existing passport for renewal or reissue</li>
              <li>Marriage certificate for spouse name addition where applicable</li>
            </ul>
          </details>
          <details>
            <summary>Our application process</summary>
            <ol>
              <li>Contact our passport experts.</li>
              <li>Receive a checklist of required documents.</li>
              <li>Submit your documents for verification.</li>
              <li>Get assistance with online application and appointment booking.</li>
              <li>Attend Passport Seva Kendra for biometric verification.</li>
              <li>Track your application until passport delivery.</li>
            </ol>
          </details>
          <p class="travel-service-card__note">Document requirements may vary by passport service type. Our team helps identify the exact checklist for your application before submission.</p>
          <a href="./bookingform.php" class="travel-service-card__cta">Get passport assistance <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </article>

      <article class="travel-service-card">
        <div class="travel-service-card__top">
          <span class="travel-service-card__icon"><i class="fa-solid fa-earth-americas" aria-hidden="true"></i></span>
          <h3>Visiting Visa Services</h3>
          <!--<p class="travel-service-card__lead">Professional and reliable visitor visa assistance for tourists, family visits, business travel and short-term international stays.</p>-->
          <div class="travel-service-card__meta">
            <span>Tourist</span>
            <span>Business</span>
            <span>Family Visit</span>
          </div>
          <div class="travel-service-card__highlight">
            <strong>Trusted visa guidance</strong>
            <span>Our consultants guide every stage of the application with accurate documentation and timely submission support.</span>
          </div>
        </div>
        <div class="travel-service-card__body">
          <div class="travel-service-card__block">
            <h4>Our Visiting Visa Services</h4>
            <div class="travel-service-card__columns">
              <ul>
                <li>Tourist visa assistance</li>
                <li>Family visit visa</li>
                <li>Business visit visa</li>
                <li>Short-term travel visa</li>
                <li>Single-entry and multiple-entry visa assistance</li>
                <li>Visa application form filling</li>
              </ul>
              <ul>
                <li>Document verification</li>
                <li>Appointment scheduling</li>
                <li>Cover letter and travel itinerary preparation</li>
                <li>Travel insurance assistance</li>
                <li>Flight and hotel reservation support</li>
                <li>Visa status tracking</li>
              </ul>
            </div>
          </div>
          <details>
            <summary>Destinations we assist with</summary>
            <p>We provide visitor visa assistance for Singapore, Malaysia, Thailand, Indonesia (Bali), Vietnam, Sri Lanka, Dubai (UAE), the United Kingdom, Schengen countries, Australia, New Zealand, Canada, the United States, Japan, South Korea, Maldives and many more destinations worldwide.</p>
          </details>
          <details>
            <summary>Why choose GRAND SK Holidays?</summary>
            <ul>
              <li>Experienced visa consultants</li>
              <li>Complete documentation guidance</li>
              <li>Accurate application preparation</li>
              <li>Quick appointment assistance</li>
              <li>Transparent service charges</li>
              <li>Personalized support throughout the process</li>
              <li>Fast, reliable and professional service</li>
            </ul>
          </details>
          <details>
            <summary>Documents generally required</summary>
            <ul>
              <li>Valid passport</li>
              <li>Passport-size photographs</li>
              <li>Completed visa application form</li>
              <li>Bank statements</li>
              <li>Employment or business proof</li>
              <li>Income tax returns where applicable</li>
              <li>Flight itinerary and hotel booking confirmation</li>
              <li>Travel insurance, invitation letter and supporting financial documents where required</li>
            </ul>
          </details>
          <details>
            <summary>Visa application process</summary>
            <ol>
              <li>Contact our visa consultants with your travel plans.</li>
              <li>Receive a personalized document checklist.</li>
              <li>Submit your documents for verification.</li>
              <li>We prepare and submit your visa application.</li>
              <li>Attend biometric appointment or interview if required.</li>
              <li>Track your application until your passport is returned.</li>
            </ol>
          </details>
          <p class="travel-service-card__note">Visa requirements vary by country and visa type. Final approval is solely at the discretion of the respective embassy or immigration authority.</p>
          <a href="./bookingform.php" class="travel-service-card__cta">Plan your visa process <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </article>
    </div>
  </div>
</section>
<!-- Modal Popup -->

<div id="popup" class="popup">
  <div class="popup-content">
    <span class="popup-close">&times;</span>
    <h2>More Packages</h2>
   <!-- imagegallery -->
  <div class="bestselling-section">
  <div class="container">
    <!-- Header Section -->
    <div class="section-header">
      <h2 class="section-title">Best Selling</h2>
      <p class="section-subtitle">"Exclusive destinations, unbeatable deals â€“ discover the world with SK Holidays Travel!"</p>
    </div>

    <!-- Filter Buttons -->
    <div class="filter-buttons">
      <button class="filter-btn active" onclick="filterSelection('nature')">
        <!-- <span class="btn-icon">ðŸŒ</span> -->
        International
      </button>
      <button class="filter-btn" onclick="filterSelection('cars')">
        <!-- <span class="btn-icon">ðŸ </span> -->
        Domestic
      </button>
    </div>

    <!-- Destinations Grid -->
    <div class="destinations-container">
          <a href="./tours/international-tours/asia/azerbaijan/index.php" class="destination-link">
      <!-- International Destinations -->
      <div class="destination-item nature show">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="./Bestselling/azebaijan.jpg" alt="Azerbaijan">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Azerbaijan</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
        </div>
      </div>

      <div class="destination-item nature show">
          <a href="./honeymoon-tour/International_Honeymoon/Bali.php" class="destination-link">

        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Bali.jpg" alt="Bali">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Bali</h3>
            </div>
            <span class="destination-tag">International</span>
          </div>
        </div>
      </div> 

      <div class="destination-item nature show">
          <a href="./tours/international-tours/asia/dubai-UAF/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/dubai.jpg" alt="Dubai">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Dubai</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
        </div>
        </a>
      </div>

      <div class="destination-item nature show">
          <a href="./tours/international-tours/asia/hong-kong/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/hongkong.jpg" alt="Hong Kong">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Hong Kong</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
          </a>
        </div>
        </div>

      <div class="destination-item nature show">
           <a href="./tours/international-tours/asia/singapore/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/singapore.png" alt="Singapore">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Singapore</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
        </div>
        </a>
      </div>

      <div class="destination-item nature show">
         <a href="./tours/international-tours/asia/malaysia/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/malaysia.png" alt="Malaysia">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Malaysia</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
        </div>
        </a>
      </div>

       <div class="destination-item nature show">
          <a href="./honeymoon-tour/International_Honeymoon/Vietnam.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/vietnam.JPG" alt="Vietnam">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Vietnam</h3>
            </div>
            <span class="destination-tag">International</span>
          </div>
        </div>
        </a>
      </div>  

      <div class="destination-item nature show">
          <a href="./tours/international-tours/asia/maldives/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/maldives.jpg" alt="Maldives">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Maldives</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
        </div>
        </a>
      </div>

      <div class="destination-item nature show">
          <a href="./tours/international-tours/asia/sri-lanka/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/srilanka.png" alt="Sri Lanka">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Sri Lanka</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
        </div>
        </a>
      </div>

      <div class="destination-item nature show">
          <a href="./tours/international-tours/asia/thailand/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Thailandgoldentemple .png" alt="Thailand">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Thailand</h3>
            </div>
            <!--<span class="destination-tag">International</span>-->
          </div>
        </div>
        </a>
      </div>

      <!-- <div class="destination-item nature show">
          <a href="./tours/international-tours/asia/dubai-UAF/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/nepal.jpg" alt="Nepal">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Nepal</h3>
            </div>
            <span class="destination-tag">International</span>
          </div>
        </div>
        </a>
      </div>  -->

      <!-- Domestic Destinations -->
      <div class="destination-item cars">
      <a href="./tours/domestic-tours/south-india/andaman/index.php" class="destination-link">
          <div class="destination-card">
            <div class="image-wrapper">
              <img src="Bestselling/Demestic/Andaman.jpg" alt="Andaman">
              <div class="image-overlay">
                <span class="view-text">View Details</span>
              </div>
            </div>
            <div class="card-info">
              <div class="featured-content">
          <h3>Andaman</h3>
            </div>
              <!--<span class="destination-tag domestic">Domestic</span>-->
            </div>
          </div>
        </a>
      </div>

    
      <div class="destination-item cars">
          <a href="./tours/domestic-tours/west-india/goa/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Demestic/goa.jpg" alt="Goa">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Goa</h3>
            </div>
            <!--<span class="destination-tag domestic">Domestic</span>-->
          </div>
        </div>
        </a>
      </div>

      <div class="destination-item cars">
       <a href="./tours/domestic-tours/north-india/jammu-and-kashmir/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Demestic/kashmir.jpg" alt="Kashmir">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Jammu</h3>
            </div>
            <!--<span class="destination-tag domestic">Domestic</span>-->
          </div>
        </div>
        </a>
      </div>

      <div class="destination-item cars">
           <a href="./tours/domestic-tours/south-india/kerala/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Demestic/kerala.jpeg" alt="Kerala">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Kerala</h3>
            </div>
            <!--<span class="destination-tag domestic">Domestic</span>-->
          </div>
        </div>
      </div>

      <div class="destination-item cars">
          
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Demestic/shimla&manali.jpg" alt="Shimla & Manali">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
            <h3>Shimla & Manali</h3>
            </div>
            <!--<span class="destination-tag domestic">Domestic</span>-->
          </div>
        </div>
      </div>
        <div class="destination-item cars">
         <a href="./tours/domestic-tours/north-india/golden-triangle/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Demestic/Darjeeling.jpg" alt="Golden Triangle">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
          <h3>Golden Triangle</h3>
            </div>
            <!--<span class="destination-tag domestic">Domestic</span>-->
          </div>
        </div>
        </a>
      </div>

      <div class="destination-item cars">
        <a href="./tours/domestic-tours/east-india/darjeeling-and-sikkim/index.php" class="destination-link">
        <div class="destination-card">
          <div class="image-wrapper">
            <img src="Bestselling/Demestic/sikkim.jpg" alt="Darjeeling">
            <div class="image-overlay">
              <span class="view-text">View Details</span>
            </div>
          </div>
          <div class="card-info">
            <div class="featured-content">
            <h3>Darjeeling</h3>
            </div>
            <!--<span class="destination-tag domestic">Domestic</span>-->
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>
  </div>
</div>

</div>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Book Your Dream Holiday?</h2>
                <p>Get exclusive deals and personalized recommendations from our travel experts</p>
                <div class="cta-buttons">
                    <!--<button class="btn-primary">Explore Packages</button>-->
                    <!-- <button class="btn-secondary">Talk to Expert</button> -->
                </div>
            </div>
        </div>
    </section>
<?php include __DIR__ . '/footer.php'; ?>
