<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
];
$SK_IS_ITINERARY_PAGE = true;
include __DIR__ . '/../../header.php';
?>
<!-- ===== CONTENT ===== -->
    <div class="container package p-0">
        <div class="row pack_mobile">

          <div class="col-lg-12 pic p-0">            
      <!-- car -->
      <div id="carouselExampleSlidesOnly" class="carousel slide d-flex" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Honeymoon_photo/Dubai.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>    
        </div>

          <div class="col-lg-7 d-flex cont">
            <nav id="navbar-example2" class="navbars bg-body-tertiary px-3 mb-3 justify-content-center">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <ul class="nav nav-pills">
                <li class="nav-item">
                     <a class="nav-link" href="#scrollspyHeading1">Itinerary</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading2">Inclusion Exclusion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading3">Terms  Condition</a>
                </li>                
              </ul>
            </nav>

            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0" style="border: 1px solid navajowhite;">
            <div class="itinerary_list">
  <h4>Itinerary:</h4>

  <div class="itinerary-card">
    <h3>DAY 1: ARRIVAL IN BALI  TANAH LOT TEMPLE</h3>
    <p>
      Arrive at <b>Ngurah Rai International Airport (Denpasar)</b> and transfer to your hotel. After check-in, visit the iconic <b>Tanah Lot Temple</b> â€” a beautiful sea temple offering a stunning sunset view. Enjoy a relaxing evening at leisure. Overnight stay at your Bali hotel.
    </p>
    <div class="special-highlights">
      <span>Sunset View at Tanah Lot</span>
      <span> Beachside Leisure</span>
    </div>
  </div>

  <div class="itinerary-card">
    <h3>DAY 2: UBUD  KINTAMANI VOLCANO TOUR</h3>
    <p>
      After breakfast, proceed for a full-day excursion to <b>Ubud and Kintamani</b>. Visit <b>Celuk Village</b> (famous for silver jewelry), <b>Mas Village</b> (wood carving center), and the <b>Tegallalang Rice Terraces</b>. Continue to <b>Kintamani Volcano</b> to enjoy panoramic views of <b>Mount Batur</b> and <b>Lake Batur</b>. Overnight stay in Bali.
    </p>
    <div class="special-highlights">
      <span> Mount Batur View</span>
      <span> Tegallalang Rice Terrace</span>
      <span>Cultural Village Visit</span>
    </div>
  </div>

  <div class="itinerary-card">
    <h3>DAY 3: NUSA DUA WATER SPORTS & ULUWATU TEMPLE</h3>
    <p>
      After breakfast, head to <b>Nusa Dua Beach</b> for exciting water activities such as <b>jet skiing</b>, <b>banana boat rides</b>, and <b>parasailing</b> (optional). Later, visit <b>Uluwatu Temple</b> a clifftop temple with breathtaking ocean views. Enjoy the traditional <b>Kecak Dance performance</b> at sunset. Overnight stay in Bali.
    </p>
    <div class="special-highlights">
      <span> Water Sports</span>
      <span> Kecak Fire Dance</span>
      <span> Cliffside Sunset</span>
    </div>
  </div>

  <div class="itinerary-card">
    <h3>DAY 4: DEPARTURE FROM BALI</h3>
    <p>
      Enjoy breakfast at your hotel and spend some leisure time shopping for souvenirs at <b>Kuta Market</b> or <b>Seminyak Street</b>. Later, transfer to <b>Ngurah Rai International Airport</b> for your return flight with unforgettable memories of Bali.
    </p>
  </div>

</div>
<hr>


              <div class="inc_exc">
                <!-- <h4 id="scrollspyHeading2">Second heading</h4> -->
              <h4>Package Inclusion & Exclusion:</h4>
                  <div class="row d-flex p-0">
                      <!-- <div class="col-6">Hotel Details</div> -->
                      <div class="col d-flex p-0">
                        <div class="col-5">
                          <h5>Inclusion:</h5><hr>
                          <ul>
                            <li>Air Tickets</li>
                            <li>3* Hotel</li>
                            <li>No Meal</li>
                            <li>Transport</li>
                            <li>Sight Seeing</li>
                            <li>Travel Insurance</li>
                            <li>Travel Bag</li>
                            <li>Tour Guide</li>
                          </ul>
                        </div>
                        <div class="col-5">
                          <h5>Exclusion:</h5><hr>
                          <ul>
                            <li>All Entrance Fees</li>
                            <li>Any Adventure Expenses</li>
                            <li>Any Meal Other than specified</li>
                            <li>Any Personal Expenses</li>
                            <li>Camera & Video Charges</li>
                            <li>Hotel Early CheckIn</li>
                            <li>Late CheckOut</li>
                          </ul>
                        </div>
                      </div>
                      </div>                      
                      <div id="scrollspyHeading2"></div>
            </div><hr>

            <div>
              <h4>Terms & Conditions</h4>
                  <div>
                      <ul>
                        <li>Booking Confirmation: Bookings are confirmed only upon receipt of a deposit.</li>
                        <li>Cancellation Policy: Cancellations are subject to fees based on the time of cancellation.</li>
                        <li>Itinerary Changes: The itinerary may be modified due to unforeseen circumstances.</li>
                        <li>Refund Policy: Refunds are processed based on the terms of our cancellation policy.</li>
                        <li>Liability: The agency is not responsible for delays, losses, or accidents beyond our control.</li>
                        <li>Documentation: Passports, visas, and other documents are the customer responsibility.</li>
                        <li>Payment Terms: Full payment is required prior to departure.</li>
                      </ul>
                </div>  
                <div id="scrollspyHeading3"></div>              
            </div> 
            </div>
          </div>
<div class="col-lg-4 d-flex align-items-center basic_pack">

  <h4>Basic Package Details:</h4>

  <!-- Package Card -->
  <div class="col">
    <div class="card text-center mb-3 package-card">
      <div class="card-body">
        <h3 class="card-title">Bali</h3>
        <p class="card-text"><b>3 Nights / 4 Days</b></p>
        <!-- row -->
        <nav class="container" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bali</li>
          </ol>
        </nav>
        <!--<p class="card-text"></p>-->
      </div>
    </div>
  </div>

  <!-- Special Add-ons Card -->
 <div class="col">
    <div class="card text-center mb-3">
      <div class="card-body">
        <h4 class="card-title">Special Add-ons</h4>
        <ul class="list-unstyled">
          <li> Candle Light Dinner</li>
          <li>Flower Bed Decoration</li>
          <li>Romantic Surprise</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Need Help -->
  <div class="col d-flex align-items-center justify-content-center">
    <h5><b>Need Help</b></h5>
    <p>Call: +91 97505 26684</p>
    <p>Email: sales@grandskholidays.com</p>
  </div>

</div>

        </div>
      </div>
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
<?php include __DIR__ . '/../../footer.php'; ?>
