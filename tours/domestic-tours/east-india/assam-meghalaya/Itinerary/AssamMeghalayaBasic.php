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
  <div class="sk-contact-header">
    <button class="sk-close-btn" id="skCloseBtn">&times;</button>
    <h2>GRAND SK Holidays Pvt Ltd</h2>
    <p>Your trusted travel companion for unforgettable journeys and amazing experiences worldwide.</p>
  </div>
  <div class="sk-contact-body">
    <div class="sk-info-box">
      <i class="fa-solid fa-location-dot"></i>
      <div class="sk-info-text">
        <h4>Our Branches</h4>
        <p>Trichy | Perambalur | Thuraiyur</p>
      </div>
    </div>
    <div class="sk-info-box">
      <i class="fa-solid fa-phone"></i>
      <div class="sk-info-text">
        <h4>Call Us</h4>
        <a href="tel:+917200449904">+91 72004 49904</a>
      </div>
    </div>
    <div class="sk-info-box">
      <i class="fa-solid fa-envelope"></i>
      <div class="sk-info-text">
        <h4>Email</h4>
        <a href="mailto:info@grandskholidays.com">info@grandskholidays.com</a>
      </div>
    </div>
    <a href="<?php echo $SK_ROOT_PREFIX; ?>bookingform.php" class="sk-contact-btn">Book Your Trip Now</a>
  </div>
</div>

<div class="container package p-0">
  <div class="row pack_mobile">
    <div class="col-lg-12 pic p-0">
      <div id="carouselExampleSlidesOnly" class="carousel slide d-flex" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../7-sisters/7_sisters.png" class="d-block w-100" alt="Assam and Meghalaya">
          </div>
          <div class="carousel-item">
            <img src="../../7-sisters/7_sisters.png" class="d-block w-100" alt="Assam and Meghalaya">
          </div>
          <div class="carousel-item">
            <img src="../../7-sisters/7_sisters.png" class="d-block w-100" alt="Assam and Meghalaya">
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-7 d-flex cont">
      <nav id="navbar-example2" class="navbars bg-body-tertiary px-3 mb-3 justify-content-center">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading1">Itinerary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading2">Inclusion &amp; Exclusion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#scrollspyHeading3">Terms &amp; Condition</a>
          </li>
        </ul>
      </nav>

      <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0" style="border: 1px solid navajowhite;">
        <div class="itinerary_list">
          <h4 id="scrollspyHeading1">Itinerary:</h4>
          <ul style="text-align: justify;">
            <li><b>DAY 1: GUWAHATI - ARRIVAL AND CHECK IN</b></li>
            <p>Upon arrival at Lokpriya Gopinath Bordoloi International Airport, you will be warmly received and transferred to your hotel in Guwahati. After check-in, relax and unwind after your journey. In the evening, enjoy a delicious dinner at the hotel followed by a comfortable overnight stay in Guwahati.</p>
            <li><b>DAY 2: JUNGLE SAFARI AT KAZIRANGA NATIONAL PARK</b></li>
            <p>After breakfast, check out and proceed to Kaziranga National Park, a UNESCO World Heritage Site famous for its one-horned rhinoceroses. Begin your wildlife adventure with an early morning elephant safari. Later in the afternoon, enjoy a jeep safari through different zones of the park, where you may spot rhinos, wild elephants, deer, and a variety of bird species. Return to your resort for dinner and overnight stay in Kaziranga.</p>
            <li><b>DAY 3: KAZIRANGA - SHILLONG</b></li>
            <p>After breakfast, check out and drive towards Shillong, popularly known as the "Scotland of the East." En route, stop at the picturesque Umiam Lake for scenic views or a speed boat ride. Upon arrival in Shillong, check into your hotel. In the evening, explore Police Bazaar or relax at Ward's Lake. Overnight stay at Shillong.</p>
            <li><b>DAY 4: MAWLYNNONG &amp; DAWKI</b></li>
            <p>After breakfast, travel to Dawki and the "cleanest village in Asia." Visit Mawlynnong Village, the Single Decker Living Root Bridge, Sky View Point, and Balancing Rock. Later proceed to Dawki and enjoy a boat ride in the crystal-clear waters of the Umngot River. You can also see the India-Bangladesh border. Return to Shillong for an overnight stay.</p>
            <li><b>DAY 5: CHERRAPUNJI</b></li>
            <p>After breakfast, drive to Cherrapunji, one of the wettest places on earth. En route, stop at Elephant Falls and Shillong Peak for a bird's eye view of the city. Pass through the Mawkdok Dympep Valley viewpoint. In Cherrapunji, visit Nohkalikai Falls, Seven Sisters Falls, and return back to Shillong for an overnight stay.</p>
            <li><b>DAY 6: GUWAHATI</b></li>
            <p>After breakfast, check out and proceed to Guwahati. Spend the afternoon visiting local attractions such as the ancient Kamakhya Temple located atop Nilachal Hill, and perhaps take a relaxing evening river cruise on the Brahmaputra River. Overnight stay in Guwahati.</p>
            <li><b>DAY 7: DEPARTURE</b></li>
            <p>Early morning at around 5:00 AM, check out from the hotel and transfer to Lokpriya Gopinath Bordoloi International Airport for your onward journey, carrying wonderful memories of your North East tour.</p>
          </ul>
        </div>
        <hr>

        <div class="inc_exc" id="scrollspyHeading2">
          <h4>Package Inclusion &amp; Exclusion:</h4>
          <div class="row">
            <div class="col-12 col-md-6 mb-3">
              <div style="padding: 10px; border-radius: 5px;">
                <h5>Inclusion:</h5>
                <hr>
                <ul>
                  <li>Air Ticket</li>
                  <li>Airport pickup &amp; drop</li>
                  <li>3 Star Hotel - Standard Room</li>
                  <li>Meals (Breakfast Only)</li>
                  <li>A/C private Vehicle for sightseeing</li>
                  <li>Tour guide</li>
                  <li>Travel Insurance</li>
                </ul>
              </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
              <div style="padding: 10px; border-radius: 5px;">
                <h5>Exclusion:</h5>
                <hr>
                <ul>
                  <li>All Entrance Fees</li>
                  <li>Adventure Expenses</li>
                  <li>Meal Other than specified</li>
                  <li>Any Personal Expenses</li>
                  <li>Camera &amp; Video Charges</li>
                  <li>Hotel Early Check In &amp; Late Check-out</li>
                </ul>
              </div>
            </div>
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
      <h4>Basic Package Details:</h4>
      <div class="col">
        <div class="card text-center mb-3 package-card">
          <div class="card-body">
            <h3 class="card-title">Assam &amp; Meghalaya</h3>
            <p class="card-text"><b>6 Nights / 7 Days</b></p>
            <nav class="container" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Assam &amp; Meghalaya</li>
              </ol>
            </nav>
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

<button class="scroll-top" id="scrollTop">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
  const skOpenBtn = document.getElementById("skOpenBtn");
  const skCloseBtn = document.getElementById("skCloseBtn");
  const skContactCard = document.getElementById("skContactCard");
  skOpenBtn.addEventListener("click", function() {
    skContactCard.classList.add("sk-active");
  });
  skCloseBtn.addEventListener("click", function() {
    skContactCard.classList.remove("sk-active");
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
