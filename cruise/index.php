<?php
$SK_PAGE_TITLE = 'Cruise Holidays | GRAND SK Holidays Travel Pvt Ltd';
$SK_META_DESCRIPTION = 'Explore premium cruise holidays with GRAND SK Holidays. Discover luxury ocean voyages, iconic cruise brands, Indian sailings and international cruise escapes.';
include __DIR__ . '/../header.php';
?>

<header class="cruise-hero">
  <div class="cruise-hero__media">
    <img src="Cruise.jpg" alt="Luxury cruise sailing across the ocean">
  </div>
  <div class="cruise-hero__overlay"></div>
  <div class="cruise-hero__content">
    <span class="cruise-eyebrow">Ocean Voyages</span>
    <h1>Curated Cruise Escapes Across India And Beyond</h1>
    <p>Step into a slower, richer style of travel with handpicked cruise holidays that blend premium stays, striking coastlines, and seamless planning from boarding to shore excursions.</p>
    <div class="cruise-hero__actions">
      <a class="cruise-btn" href="#brands">Explore Brands</a>
      <a class="cruise-btn cruise-btn--secondary" href="#featured-sailings">View Featured Sailings</a>
    </div>
  </div>
</header>

<main class="cruise-page">
  <div class="cruise-shell">
    <section class="cruise-intro" aria-label="Cruise highlights">
      <article class="cruise-stat">
        <strong>Global Cruise Partners</strong>
        <p>Browse celebrated cruise lines known for family adventures, refined luxury, immersive shore programs, and world-class hospitality.</p>
      </article>
      <article class="cruise-stat">
        <strong>India To International Routes</strong>
        <p>Choose from Indian coastal sailings, island loops, and international itineraries designed for both first-time cruisers and returning guests.</p>
      </article>
      <article class="cruise-stat">
        <strong>Planned Like A Package Holiday</strong>
        <p>We shape your cruise journey with transparent guidance, destination planning, and pre- and post-cruise support for a smoother experience.</p>
      </article>
    </section>

    <section class="cruise-section" id="brands">
      <div class="section-header">
        <h2 class="section-title">Popular Cruise Brands</h2>
        <p class="section-subtitle">Each cruise line offers its own personality, from high-energy entertainment to intimate luxury voyages. Explore the brands that fit your style of travel.</p>
      </div>

      <div class="cruise-brand-grid">
        <article class="cruise-card">
          <div class="cruise-card__media">
            <img src="cruiseRC.png" alt="Royal Caribbean cruise ship">
            <img class="cruise-card__logo" src="logo/RClogo.png" alt="Royal Caribbean">
          </div>
          <div class="cruise-card__body">
            <h3>Royal Caribbean</h3>
            <p>Dynamic cruises built for families and groups with big-ship entertainment, varied dining, and action-packed onboard experiences.</p>
            <div class="cruise-tags">
              <span>Family Friendly</span>
              <span>Large Ships</span>
              <span>Entertainment</span>
            </div>
            <a class="cruise-btn" href="mailto:sales@grandskholidays.com?subject=Royal%20Caribbean%20Cruise%20Enquiry">Enquire Now</a>
          </div>
        </article>

        <article class="cruise-card">
          <div class="cruise-card__media">
            <img src="CruiseCC.png" alt="Celebrity Cruises ship at sea">
            <img class="cruise-card__logo" src="logo/CClogo.png" alt="Celebrity Cruises">
          </div>
          <div class="cruise-card__body">
            <h3>Celebrity Cruises</h3>
            <p>Modern premium cruising with elegant spaces, destination-rich sailings, and a polished onboard atmosphere for relaxed luxury.</p>
            <div class="cruise-tags">
              <span>Premium</span>
              <span>Modern Luxury</span>
              <span>Couples</span>
            </div>
            <a class="cruise-btn" href="mailto:sales@grandskholidays.com?subject=Celebrity%20Cruises%20Enquiry">Enquire Now</a>
          </div>
        </article>

        <article class="cruise-card">
          <div class="cruise-card__media">
            <img src="CruiseSS.jpg" alt="Silversea luxury cruise">
            <img class="cruise-card__logo" src="logo/SSlogo.png" alt="Silversea">
          </div>
          <div class="cruise-card__body">
            <h3>Silversea</h3>
            <p>Ultra-luxury voyages with intimate ships, attentive service, and refined itineraries tailored for travelers seeking a quieter pace.</p>
            <div class="cruise-tags">
              <span>Ultra Luxury</span>
              <span>Small Ships</span>
              <span>Bespoke</span>
            </div>
            <a class="cruise-btn" href="mailto:sales@grandskholidays.com?subject=Silversea%20Cruise%20Enquiry">Enquire Now</a>
          </div>
        </article>

        <article class="cruise-card">
          <div class="cruise-card__media">
            <img src="CruiseAZ.jpg" alt="Azamara cruise destination sailing">
            <img class="cruise-card__logo" src="logo/AZlogo.png" alt="Azamara">
          </div>
          <div class="cruise-card__body">
            <h3>Azamara</h3>
            <p>Destination-focused cruising known for longer stays in port, deeper cultural experiences, and thoughtfully paced itineraries.</p>
            <div class="cruise-tags">
              <span>Cultural Depth</span>
              <span>Longer Port Stays</span>
              <span>Immersive</span>
            </div>
            <a class="cruise-btn" href="mailto:sales@grandskholidays.com?subject=Azamara%20Cruise%20Enquiry">Enquire Now</a>
          </div>
        </article>
      </div>
    </section>

    <section class="cruise-section">
      <div class="section-header">
        <h2 class="section-title">Explore More Than 800 Destinations</h2>
        <p class="section-subtitle">From tropical beaches to icy expedition landscapes, cruise itineraries open the door to multiple regions in one seamless journey.</p>
      </div>

      <div class="cruise-zone-grid">
        <article class="cruise-zone-card">
          <h3>Tropical Islands</h3>
          <p>Easygoing waters, sunny coastlines, and resort-style days at sea.</p>
          <ul>
            <li>Bahamas</li>
            <li>Caribbean</li>
            <li>Bermuda</li>
          </ul>
        </article>

        <article class="cruise-zone-card">
          <h3>South Pacific</h3>
          <p>Island scenery and long-horizon ocean routes across the Pacific.</p>
          <ul>
            <li>New Zealand</li>
            <li>South Pacific</li>
            <li>Australia</li>
          </ul>
        </article>

        <article class="cruise-zone-card">
          <h3>Europe</h3>
          <p>Historic ports, dramatic coastlines, and refined Mediterranean sailings.</p>
          <ul>
            <li>Mediterranean</li>
            <li>Fjords</li>
            <li>Southern Europe</li>
          </ul>
        </article>

        <article class="cruise-zone-card">
          <h3>Americas</h3>
          <p>Nature-led itineraries and scenic coast-to-coast explorations.</p>
          <ul>
            <li>Alaska</li>
            <li>South America</li>
            <li>Canada</li>
          </ul>
        </article>

        <article class="cruise-zone-card">
          <h3>Icy Landscapes</h3>
          <p>Remote expedition regions for travelers drawn to dramatic contrasts.</p>
          <ul>
            <li>Antarctica</li>
            <li>Galapagos</li>
            <li>Arctic</li>
          </ul>
        </article>

        <article class="cruise-zone-card">
          <h3>Asia</h3>
          <p>Modern ports, island breaks, and vibrant city-to-city cruise journeys.</p>
          <ul>
            <li>Singapore</li>
            <li>Hong Kong</li>
            <li>Japan</li>
            <li>Thailand</li>
          </ul>
        </article>
      </div>
    </section>

    <section class="cruise-section" id="featured-sailings">
      <div class="section-header">
        <h2 class="section-title">Featured Cruise Sailings</h2>
        <p class="section-subtitle">Start with Indian coastal cruising or step into nearby international routes with itineraries that balance onboard comfort and destination time.</p>
      </div>

      <div class="cruise-route-grid">
        <article class="cruise-route-card">
          <div class="cruise-route-card__media">
            <img src="Cordelia.png" alt="Cordelia cruise in India">
          </div>
          <div class="cruise-route-card__body">
            <h3>Cordelia India Sailings</h3>
            <p>Stylish Indian cruising with coastal routes, island escapes, and a familiar onboard atmosphere designed for travelers from India.</p>
            <ul class="cruise-route-list">
              <li><strong>Ports:</strong> Mumbai, Goa, Kochi, Chennai, Puducherry, Visakhapatnam</li>
              <li><strong>Island Focus:</strong> Lakshadweep itineraries and short leisure sailings</li>
              <li><strong>Best For:</strong> First-time cruisers, couples, families, festive getaways</li>
            </ul>
            <div class="cruise-route-card__actions">
              <a class="cruise-btn" href="mailto:sales@grandskholidays.com?subject=Cordelia%20Cruise%20Enquiry">Plan This Cruise</a>
            </div>
          </div>
        </article>

        <article class="cruise-route-card">
          <div class="cruise-route-card__media">
            <img src="Cruiseinternational.png" alt="International cruise destinations">
          </div>
          <div class="cruise-route-card__body">
            <h3>International Short-Haul Cruise Escapes</h3>
            <p>Perfect for travelers looking to combine cruise comfort with nearby international destinations and easier travel planning from India.</p>
            <ul class="cruise-route-list">
              <li><strong>Popular Stops:</strong> Sri Lanka, Singapore, Malaysia, Thailand</li>
              <li><strong>Travel Style:</strong> Multi-country cruise experience with one booking flow</li>
              <li><strong>Best For:</strong> Honeymooners, premium leisure trips, first overseas cruises</li>
            </ul>
            <div class="cruise-route-card__actions">
              <a class="cruise-btn" href="mailto:sales@grandskholidays.com?subject=International%20Cruise%20Enquiry">Plan This Cruise</a>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section class="cruise-support" aria-label="Cruise planning support">
      <div class="cruise-support__grid">
        <article class="cruise-support__item">
          <strong>Brand Matching</strong>
          <p>We help narrow the right cruise line based on budget, travel style, cabin category, and onboard atmosphere.</p>
        </article>
        <article class="cruise-support__item">
          <strong>Shore Planning</strong>
          <p>Balance sea days and port days with destination guidance, add-on stays, and practical itinerary advice.</p>
        </article>
        <article class="cruise-support__item">
          <strong>Travel Coordination</strong>
          <p>Get support around pre-cruise stays, documentation, and the planning steps that make boarding day easier.</p>
        </article>
      </div>
    </section>
  </div>
</main>

<?php include __DIR__ . '/../footer.php'; ?>
