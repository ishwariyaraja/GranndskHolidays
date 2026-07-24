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
            <img src="../Honeymoon_photo/Andaman.jpg" class="d-block w-100" alt="...">
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
                  <a class="nav-link" href="#scrollspyHeading3">Terms Condition</a>
                </li>                
              </ul>
            </nav>

            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0" style="border: 1px solid navajowhite;">
              <div class="itinerary_list">
                <!-- <h4 id="scrollspyHeading1">First heading</h4> -->
              <h4>Itinerary:</h4>
                  <!-- <ul style="text-align: justify;"> -->
                   <div class="itinerary-card">
  <h3>DAY 1: ARRIVAL AT PORT BLAIR</h3>
  <p>
    Arrive in Port Blair and transfer to hotel. Visit Corbyn's Cove Beach for swimming, sunbathing, and bathing. Visit Cellular Jail Museum and hear the Indian freedom struggle's heroic story. Overnight at hotel/resort.
  </p>
</div>

<div class="itinerary-card">
  <h3>DAY 2: PORT BLAIR TO RADHANAGAR BEACH</h3>
  <p>
    Early morning ferry departure to Havelock Island, 57 km from Port Blair. Enjoy the afternoon at Radha Nagar Beach, ranked "Best Beach in Asia" in 2004. Overnight stay at hotel/resort.
  </p>
  <div class="special-highlights">
    <span> Candle Light Dinner</span>
    <span>Flower Bed Decoration</span>
    <span>Romantic Surprise</span>
  </div>
</div>

<div class="itinerary-card">
  <h3>DAY 3: HEAVELOCK - ELEPHANT BEACH</h3>
  <p>
    After breakfast, return to Port Blair, transfer to hotel, overnight stay at resort. Optional water-sports tour to Elephant Beach or Kalapathar Beach, at additional cost.
  </p>
</div>

<div class="itinerary-card">
  <h3>DAY 4: HEAVELOCK PORT BLAIR</h3>
  <p>
    A full-day excursion to North Bay (Coral Island) offers coral reefs, exotic fish, and marine life. Enjoy snorkeling, jet ski rides, and sea walks. Visit Ross Island, where the British governed Andaman & Nicobar Islands before India's Independence. Explore ruins of a church, swimming pool, chief commissioner's residence, cemetery, and Indian Navy museum. Enjoy nature walks with deer, peacocks, and exotic birds. Overnight stay at Port Blair hotel.
  </p>
</div>

<div class="itinerary-card">
  <h3>DAY 5: PORT BLAIR - AIRPORT</h3>
  <p>
    The morning is free for packing and personal activities before being transferred to the airport.
  </p>
         </ul> 
</div>
                  <!-- </ul>   -->
            </div><hr>

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
                            <li>Any Adventure Expanses</li>
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
                        <li>Documentation: Passports, visas, and other documents are the customerâ€™s responsibility.</li>
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
        <h3 class="card-title">Andaman</h3>
        <p class="card-text"><b>4 Nights / 5 Days</b></p>
        <!-- row -->
        <nav class="container" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Andaman</li>
          </ol>
        </nav>
        <!--<p class="card-text">Munnar - 2 Nights</p>-->
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
    <p>Email: sales@skholidays.com</p>
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
