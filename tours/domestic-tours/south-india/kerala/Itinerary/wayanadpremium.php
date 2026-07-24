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
          <div class="carousel-item active"><img src="../../../../itinerary-placeholder-tour.svg" class="d-block w-100" alt="Wayanad"></div>
          <div class="carousel-item"><img src="../../../../itinerary-placeholder-tour.svg" class="d-block w-100" alt="Wayanad"></div>
          <div class="carousel-item"><img src="../../../../itinerary-placeholder-tour.svg" class="d-block w-100" alt="Wayanad"></div>
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
            <li><b>DAY 1: Arrival and Sightseeing</b></li>
            <p>Begin your journey with a visit to Thusharagiri Waterfalls, where cascading streams and lush greenery create a refreshing start to your trip. Continue to Lakkidi View Point, one of the most scenic viewpoints in Wayanad, offering breathtaking views of the winding mountain roads and mist-covered valleys. Next, explore En Ooru, Kerala's first tribal heritage village, where you can experience the rich culture, traditions, and handicrafts of the indigenous communities. Later, unwind at the serene Pookode Lake, a picturesque freshwater lake surrounded by forests, ideal for a peaceful stroll or boating. In the evening, check in to your hotel, enjoy a delicious dinner, and relax with an overnight stay.</p>
            <li><b>DAY 2: Adventure and Nature Exploration</b></li>
            <p>After breakfast at the hotel, set out to visit Karapuzha Dam, one of the largest earth dams in India, known for its scenic surroundings and tranquil atmosphere. Proceed to the charming Kanthanpara Waterfalls, a hidden gem nestled amidst lush plantations, perfect for nature lovers and photography enthusiasts. Continue your adventure with a visit to the historic Edakkal Caves, famous for their ancient rock engravings and panoramic views after a short trek. Later, head to 900 Kandi, where you can experience the thrilling Glass Bridge suspended amidst breathtaking landscapes. Return to the hotel in the evening for dinner and enjoy a comfortable overnight stay.</p>
            <li><b>DAY 3: Scenic Farewell</b></li>
            <p>After breakfast, check out from the hotel and begin your final day by visiting the magnificent Banasura Sagar Dam, the largest earth dam in India, surrounded by majestic hills and picturesque views. Continue to Karlad Lake, a peaceful destination offering beautiful landscapes and optional adventure activities. Next, visit the spectacular Meenmutty Waterfalls, one of Wayanad's tallest waterfalls, where a short trek rewards you with stunning natural beauty. Before concluding your tour, stop at a scenic tea plantation to enjoy the refreshing ambience, learn about tea cultivation, and capture memorable photographs amidst the lush green estates. With wonderful memories of Wayanad's waterfalls, viewpoints, heritage, and natural beauty, your journey comes to an end.</p>
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
            <h3 class="card-title">Wayanad</h3>
            <p class="card-text"><b>2 Nights / 3 Days</b></p>
            <nav class="container" aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="../index.php">Home</a></li><li class="breadcrumb-item active" aria-current="page">Wayanad</li></ol></nav>
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
