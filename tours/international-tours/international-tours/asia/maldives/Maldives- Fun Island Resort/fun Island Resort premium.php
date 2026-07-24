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
<!-- ===== CONTENT ===== -->
    <div class="container-fluid package p-0">
        <div class="row pack_mobile">

          <div class="col-lg-12 pic p-0">            
      <!-- car -->
      <div id="carouselExampleSlidesOnly" class="carousel slide d-flex" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="../../../../itinerary-placeholder.svg" class="d-block w-100 itinerary-hero-placeholder" alt="Tour preview image placeholder"> 
          </div>
          <!-- <div class="carousel-item">
            <img src="../../../../itinerary-placeholder.svg" class="d-block w-100 itinerary-hero-placeholder" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../../../../itinerary-placeholder.svg" class="d-block w-100 itinerary-hero-placeholder" alt="...">
          </div> -->
        </div>
      </div>    
        </div>

              <div class="container col-lg-7 d-flex cont">
            <nav id="navbar-example2" class="navbars bg-body-tertiary px-3 mb-3 justify-content-center">
              <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" href="#scrollspyHeading1">Itinerary</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading2">Inclusion & Exclusion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading3">Terms & Condition</a>
                </li>                
              </ul>
            </nav>

            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0" style="border: 1px solid navajowhite;">
              <div class="itinerary_list">
                <!-- <h4 id="scrollspyHeading1">First heading</h4> -->
              <h4>Itinerary:</h4>
                  <ul style="text-align: justify;">
                      <li><b>Day 1:  Arrival</b></li>
<p>Welcome to tropical island of Maldives. On Arrival meet & greet with our representative and get transfers by speedboat to your hotel. Check in at the hotel. Spend the day at leisure and enjoy the views of crystal clear waters and sandy beaches. Overnight at the hotel.</p>

<li><b>Day 2: Adventure and leisure in Maldives </b></li>
<p>Today you have the entire day at leisure to explore and enjoy resort activities. Enjoy a game of beach volleyball, or take up water sports like snorkeling, windsurfing and canoeing (at extra cost). Overnight at the hotel.</p>

<li><b>Day 3:Day at Leisure or Spa & Wellness Therapy </b></li>
<p>After breakfast at the hotel, day is free to relax or you to pamper yourself with an indulgent spa treatment (at additional cost). Overnight at the hotel.</p>

<li><b>Day 4:Departure</b></li>
<p>Bid farewell to mesmerising Maldives. After a scrumptious breakfast at the resort, you will be transferred to Male International Airport via a speedboat.</p>



                  </ul>  
            </div>

                <div class="inc_exc">
  
  <h4>
    Package Inclusion & Exclusion:
  </h4>

  <div class="row">

    <!-- Inclusion -->
    <div class="col-12 col-md-6 mb-3">
      <div style="padding: 10px; border-radius: 5px; ">
        <h5>Inclusion:</h5>
        <hr>
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
    </div>

    <!-- Exclusion -->
    <div class="col-12 col-md-6 mb-3">
      <div style="padding: 10px; border-radius: 5px; ">
        <h5>Exclusion:</h5>
        <hr>
        <ul>
          <li>All Entrance Fees</li>
          <li>Adventure Expenses</li>
          <li>Meal Other than specified</li>
          <li>Any Personal Expenses</li>
          <li>Camera & Video Charges</li>
          <li>Hotel Early CheckIn</li>
          <li>Late CheckOut</li>
        </ul>
      </div>
    </div>

  </div>
</div>

            <div>
              <h4>Terms & Conditions</h4>
                  <div>
                      <ul>
                        <li>Booking Confirmation: Bookings are confirmed only upon receipt of a deposit.</li>
                        <li>Cancellation Policy: Cancellations are subject to fees based on the time of cancellation.</li>
                        <li>Itinerary Changes: The itinerary may be modified due to unforeseen circumstances.</li>
                        <li>Refund Policy: Refunds are processed based on the terms of our cancellation policy.</li>
                        <li>Liability: The agency is not responsible for delays, losses, or accidents beyond our control.</li>
                        <li>Documentation: Passports, visas, and other documents are the customer�s responsibility.</li>
                        <li>Payment Terms: Full payment is required prior to departure.</li>
                      </ul>
                </div>  
                <div id="scrollspyHeading3"></div>              
            </div> 
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center basic_pack">
            <h4>Premium Package Details:</h4>
            <div class="col">
                <div class="card text-center mb-3 package-card">
                    <div class="card-body">
                      <h3 class="card-title"> Fun Island Resort  </h3>
                      <p class="card-text"><b>3 Nights / 4 Days</b></p>
        <ol class="breadcrumb">
          <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li> -->
          <li class="breadcrumb-item"><a href="../index.php"> Maldives Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Fun Island Resort </li>
        </ol>
                      <!--<a href="../../../bookingform.php" -->
                      <!--target="_blank" class="btn btn-primary">Book Now</a>-->
                      <!--<a href="../enquiryForm.php" target="_blank" class="btn btn-primary">For More Details</a>-->
                    </div>
                  </div>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <h5><b>Need Help</b></h5>
                <p>Call: +91 97505 26684</p>
                <p>Email: sales@grandskholidays.com</p>
            </div>
          </div>
        </div>
      </div>
   

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
<?php include __DIR__ . '/../../../../../footer.php'; ?>

