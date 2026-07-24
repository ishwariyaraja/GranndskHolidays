<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<script src=\"../../../../../scricpt.js\"></script>",
];
include __DIR__ . '/../../../../../header.php';
?>
<button class="sk-open-btn" id="skOpenBtn">Contact Us</button>
<div class="sk-contact-side" id="skContactCard">
  <div class="sk-contact-header"><button class="sk-close-btn" id="skCloseBtn">&times;</button><h2>GRAND SK Holidays Pvt Ltd</h2><p>Your trusted travel companion for unforgettable journeys and amazing experiences worldwide.</p></div>
  <div class="sk-contact-body">
    <div class="sk-info-box"><i class="fa-solid fa-location-dot"></i><div class="sk-info-text"><h4>Our Branches</h4><p>Trichy | Perambalur | Thuraiyur</p></div></div>
    <div class="sk-info-box"><i class="fa-solid fa-phone"></i><div class="sk-info-text"><h4>Call Us</h4><a href="tel:+917200449904">+91 72004 49904</a></div></div>
    <div class="sk-info-box"><i class="fa-solid fa-envelope"></i><div class="sk-info-text"><h4>Email</h4><a href="mailto:info@grandskholidays.com">info@grandskholidays.com</a></div></div>
    <a href="<?php echo $SK_ROOT_PREFIX; ?>bookingform.php" class="sk-contact-btn">Book Your Trip Now</a>
  </div>
</div>

<div class="container package p-0">
  <div class="row pack_mobile">
    <div class="col-lg-12 pic p-0">
      <div id="carouselExampleSlidesOnly" class="carousel slide d-flex" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active"><img src="../../../../itinerary-placeholder-tour.svg" class="d-block w-100" alt="Vagaman"></div>
          <div class="carousel-item"><img src="../../../../itinerary-placeholder-tour.svg" class="d-block w-100" alt="Vagaman"></div>
          <div class="carousel-item"><img src="../../../../itinerary-placeholder-tour.svg" class="d-block w-100" alt="Vagaman"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 d-flex cont">
      <nav id="navbar-example2" class="navbars bg-body-tertiary px-3 mb-3 justify-content-center">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link" href="#scrollspyHeading1">Itinerary</a></li>
          <li class="nav-item"><a class="nav-link" href="#scrollspyHeading2">Inclusion &amp; Exclusion</a></li>
          <li class="nav-item"><a class="nav-link" href="#scrollspyHeading3">Terms &amp; Condition</a></li>
        </ul>
      </nav>
      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0" style="border: 1px solid navajowhite;">
        <div class="itinerary_list">
          <h4 id="scrollspyHeading1">Itinerary:</h4>
          <ul style="text-align: justify;">
            <li><b>DAY 1: Ernakulam to Vagamon</b></li>
            <p>Pick up from Ernakulam Railway station. After breakfast, drive to Vagamon and check in to the hotel. After leisure, begin your day in the magical land surrounded by rolling hills and lush meadows, where morning mist drifts gently over sprawling tea plantations. Stroll along winding paths lined with wildflowers and pause midday to sip freshly brewed tea while overlooking endless green valleys. As dusk approaches, gather in the central meadow for a captivating evening light show that transforms the serene landscape into a dazzling spectacle under the stars.</p>
            <li><b>DAY 2: Vagamon to Alleppey Boat House</b></li>
            <p>After breakfast, check out from the hotel and proceed to Alleppey. Check in at the boat house at 12.30 PM, where panoramic views of vast paddy fields unfold along the serene backwaters and winding canals. As your boat glides through palm-fringed waterways, watch village life come alive on the banks, enjoy freshly prepared local cuisine on deck, and soak in the exotic natural surroundings. In the evening, anchor by a quiet stretch of water and witness a golden sunset reflecting across the tranquil backwaters. Overnight in the boat house.</p>
            <li><b>DAY 3: Boat House to Kochi</b></li>
            <p>After breakfast, check out from the boat house and drive to Kochi. Begin your day exploring the historic Jewish Synagogue, with its antique chandeliers and hand-painted tiles. Walk to St. Francis Church, one of the oldest European churches in India, then visit Mattancherry Palace to admire its murals and royal artifacts. Continue to Santa Cruz Cathedral Basilica and the iconic Chinese fishing nets, and conclude the trip with a sunset stroll at Marine Drive and shopping at LuLu Mall. Proceed to the railway station drop at 08:00 PM.</p>
          </ul>
        </div>
        <hr>
        <div class="inc_exc" id="scrollspyHeading2">
          <h4>Package Inclusion &amp; Exclusion:</h4>
          <div class="row">
            <div class="col-12 col-md-6 mb-3"><div style="padding: 10px; border-radius: 5px;"><h5>Inclusion:</h5><hr><ul><li>Air Ticket</li><li>Airport pickup &amp; drop</li><li>4 Star Hotel - Premium Room</li><li>Meals (Breakfast &amp; Dinner)</li><li>A/C private Vehicle for sightseeing</li><li>Tour guide</li><li>Travel Insurance</li></ul></div></div>
            <div class="col-12 col-md-6 mb-3"><div style="padding: 10px; border-radius: 5px;"><h5>Exclusion:</h5><hr><ul><li>All Entrance Fees</li><li>Adventure Expenses</li><li>Meal Other than specified</li><li>Any Personal Expenses</li><li>Camera &amp; Video Charges</li><li>Hotel Early Check In &amp; Late Check-out</li></ul></div></div>
          </div>
        </div>
        <hr>
        <div id="scrollspyHeading3">
          <h4>Terms &amp; Conditions</h4>
          <ul>
            <li>Booking Confirmation: Bookings are confirmed only upon receipt of a deposit.</li>
            <li>Cancellation Policy: Cancellations are subject to fees based on the time of cancellation.</li>
            <li>Itinerary Changes: The itinerary may be modified due to unforeseen circumstances.</li>
            <li>Refund Policy: Refunds are processed based on the terms of our cancellation policy.</li>
            <li>Liability: The agency is not responsible for delays, losses, or accidents beyond our control.</li>
            <li>Documentation: Passports, visas, and other documents are the customer's responsibility.</li>
            <li>Payment Terms: Full payment is required prior to departure.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 d-flex align-items-center basic_pack">
      <h4>Premium Package Details:</h4>
      <div class="col">
        <div class="card text-center mb-3 package-card">
          <div class="card-body">
            <h3 class="card-title">Vagaman</h3>
            <p class="card-text"><b>2 Nights / 3 Days</b></p>
            <nav class="container" aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="../index.php">Home</a></li><li class="breadcrumb-item active" aria-current="page">Vagaman</li></ol></nav>
          </div>
        </div>
      </div>
      <div class="col d-flex align-items-center justify-content-center">
        <h5><b>Need Help</b></h5>
        <p>Call: +91 72004 49904</p>
        <p>Email: Info@grandskholidays.com</p>
      </div>
    </div>
  </div>
</div>
<button class="scroll-top" id="scrollTop"><i class="fas fa-arrow-up"></i></button>
<script>const skOpenBtn=document.getElementById("skOpenBtn");const skCloseBtn=document.getElementById("skCloseBtn");const skContactCard=document.getElementById("skContactCard");skOpenBtn.addEventListener("click",function(){skContactCard.classList.add("sk-active")});skCloseBtn.addEventListener("click",function(){skContactCard.classList.remove("sk-active")});</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/../../../../../footer.php'; ?>
