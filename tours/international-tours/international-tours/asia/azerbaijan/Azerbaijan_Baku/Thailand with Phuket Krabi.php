<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<script src=\"../../../../../scricpt.js\"></script>",
    "<style>\r\n\r\n    /* SIDE BUTTON */\r\n    .sk-open-btn{\r\n      position:fixed;\r\n      top:50%;\r\n      right:0;\r\n      transform:translateY(-20%);\r\n      background:linear-gradient(135deg,#007bff,#003399);\r\n      color:#fff;\r\n      border:none;\r\n      padding:18px 12px;\r\n      cursor:pointer;\r\n      font-size:16px;\r\n      font-weight:bold;\r\n      border-radius:12px 0 0 12px;\r\n      writing-mode:vertical-rl;\r\n      text-orientation:mixed;\r\n      z-index:1000;\r\n      transition:0.3s;\r\n      box-shadow:0 5px 15px rgba(0,0,0,0.2);\r\n    }\r\n\r\n    .sk-open-btn:hover{\r\n      padding-right:15px;\r\n    }\r\n\r\n    /* CONTACT CARD */\r\n\r\n    .sk-contact-side{\r\n      position:fixed;\r\n      top:50%;\r\n      right:-400px;\r\n      transform:translateY(-50%);\r\n      width:340px;\r\n      background:#fff;\r\n      border-radius:20px;\r\n      overflow:hidden;\r\n      box-shadow:0 10px 30px rgba(0,0,0,0.2);\r\n      transition:0.5s ease;\r\n      z-index:999;\r\n    }\r\n\r\n    .sk-contact-side.sk-active{\r\n      right:20px;\r\n    }\r\n\r\n    /* HEADER */\r\n\r\n    .sk-contact-header{\r\n      background:linear-gradient(135deg,#003399,#0f4c81);\r\n      color:#fff;\r\n      padding:25px 20px;\r\n      text-align:center;\r\n      position:relative;\r\n    }\r\n\r\n    .sk-contact-header h2{\r\n      font-size:24px;\r\n      margin-bottom:10px;\r\n    }\r\n\r\n    .sk-contact-header p{\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    /* CLOSE BUTTON */\r\n\r\n    .sk-close-btn{\r\n      position:absolute;\r\n      top:12px;\r\n      right:15px;\r\n      width:32px;\r\n      height:32px;\r\n      border:none;\r\n      border-radius:50%;\r\n      background:#fff;\r\n      color:#0f4c81;\r\n      cursor:pointer;\r\n      font-size:18px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n    }\r\n\r\n    .sk-close-btn:hover{\r\n      background:red;\r\n      color:#fff;\r\n    }\r\n\r\n    /* BODY */\r\n\r\n    .sk-contact-body{\r\n      padding:20px;\r\n    }\r\n\r\n    .sk-info-box{\r\n      display:flex;\r\n      gap:15px;\r\n      /* margin-bottom:20px; */\r\n      align-items:flex-start;\r\n    }\r\n\r\n    .sk-info-box i{\r\n      width:45px;\r\n      height:45px;\r\n      background:#1ea5fc;\r\n      color:#fff;\r\n      border-radius:50%;\r\n      display:flex;\r\n      align-items:center;\r\n      justify-content:center;\r\n      font-size:18px;\r\n      flex-shrink:0;\r\n    }\r\n\r\n    .sk-info-text h4{\r\n      margin-bottom:5px;\r\n      color:#222;\r\n      font-size:16px;\r\n    }\r\n\r\n    .sk-info-text p,\r\n    .sk-info-text a{\r\n      color:#555;\r\n      text-decoration:none;\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    .sk-info-text a:hover{\r\n      color:#1ea5fc;\r\n    }\r\n\r\n    /* BUTTON */\r\n\r\n    .sk-contact-btn{\r\n      display:block;\r\n      width:100%;\r\n      text-align:center;\r\n      text-decoration:none;\r\n      background:linear-gradient(135deg,#003399,#1ea5fc);\r\n      color:#fff;\r\n      padding:14px;\r\n      border-radius:10px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n      margin-top:10px;\r\n    }\r\n\r\n    .sk-contact-btn:hover{\r\n      transform:translateY(-2px);\r\n      box-shadow:0 8px 20px rgba(30,165,252,0.3);\r\n    }\r\n\r\n    /* MOBILE */\r\n\r\n    @media(max-width:480px){\r\n      .sk-open-btn{\r\n        top:60%;\r\n        padding:14px 9px;\r\n        font-size:14px;\r\n        border-radius:10px 0 0 10px;\r\n      }\r\n\r\n      .sk-contact-side{\r\n        width:90%;\r\n      }\r\n\r\n      .sk-contact-side.sk-active{\r\n        right:5%;\r\n      }\r\n\r\n    }\r\n\r\n  </style>"
];
include __DIR__ . '/../../../../../header.php';
?>
<button class="sk-open-btn" id="skOpenBtn">
    Contact Us
  </button>
  <div class="sk-contact-side" id="skContactCard">

    <div class="sk-contact-header">

      <button class="sk-close-btn" id="skCloseBtn">
        &times;
      </button>

      <h2>GRAND SK Holidays Pvt Ltd</h2>

      <p>
        Your trusted travel companion for unforgettable journeys 
        and amazing experiences worldwide.
      </p>

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

          <a href="tel:+917200449904">
            +91 72004 49904
          </a>
        </div>

      </div>

      <div class="sk-info-box">

        <i class="fa-solid fa-envelope"></i>

        <div class="sk-info-text">
          <h4>Email</h4>

          <a href="mailto:sales@grandskholidays.com">
            sales@grandskholidays.com
          </a>
        </div>

      </div>

      <a href="../../../bookingform.php" class="sk-contact-btn">
        Book Your Trip Now
      </a>

    </div>

  </div>
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
                  <a class="nav-link" href="#scrollspyHeading2">Inclusion  Exclusion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading3">Terms  Condition</a>
                </li>                
              </ul>
            </nav>

            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0" style="border: 1px solid navajowhite;">
              <div class="itinerary_list">
                <!-- <h4 id="scrollspyHeading1">First heading</h4> -->
              <h4>Itinerary:</h4>
                  <ul style="text-align: justify;">
                    <li><b>✈ Day 1 – Arrival at Baku</b></li>
  <p>
    Arrive at Heydar Aliyev International Airport, meet and greet with our representative, and transfer to your hotel. After check-in, relax and freshen up.
    In the evening, enjoy a <b>Panoramic Night Tour</b> of Baku — explore <b>Highland Park</b>, <b>Flame Towers</b>, <b>Baku Boulevard</b>, and the beautifully lit <b>Mini Venice</b>.
    <b>Overnight stay:</b> Baku
    <b>✨ Highlights:</b> Flame Towers, Baku Boulevard, Night Illumination Tour
  </p>

  <li><b>🌆 Day 2 – Baku City Tour</b></li>
  <p>
    After breakfast, proceed for a full-day <b>Baku City Tour</b>. Visit the <b>Old City (Icherisheher)</b> — explore <b>Maiden Tower</b>, <b>Shirvanshah Palace</b>, <b>Caravanserai</b>, and the ancient cobbled streets.
    Later, enjoy the modern side of Baku including the iconic <b>Heydar Aliyev Center</b>, shopping at <b>Nizami Street</b>, and relax at <b>Fountain Square</b>.
    <b>Overnight stay:</b> Baku
    <b>✨ Highlights:</b> Old City, Heydar Aliyev Center, Nizami Street, Fountain Square
  </p>

  <li><b>🌄 Day 3 – Gabala Excursion</b></li>
  <p>
    After breakfast, drive to <b>Gabala</b> (approx. 3 hours). En route, visit the scenic <b>Nohur Lake</b>, surrounded by the Caucasus Mountains.
    Continue to <b>Tufandag Mountain Resort</b> – enjoy cable car rides and optional adventure activities like ziplining, quad biking, and snow games (seasonal).
    Later, visit <b>Gabaland Amusement Park</b> and enjoy some leisure time before returning to Baku.
    <b>Overnight stay:</b> Baku
    <b>✨ Highlights:</b> Gabala, Nohur Lake, Tufandag Mountain Cable Car, Gabaland
  </p>

  <li><b>🌋 Day 4 – Absheron Peninsula & Fire Temple Tour</b></li>
  <p>
    After breakfast, set out to explore the historical and natural wonders of the <b>Absheron Peninsula</b>.
    Visit the mystical <b>Ateshgah Fire Temple</b>, the eternal flames at <b>Yanar Dag (Burning Mountain)</b>, and the <b>Gala Archaeological Reserve</b> for insights into Azerbaijan's ancient heritage.
    Later, visit the grand <b>Bibi-Heybat Mosque</b> and enjoy a relaxing walk along the <b>Caspian Sea Boulevard</b>.
    <b>Overnight stay:</b> Baku
    <b>✨ Highlights:</b> Ateshgah Fire Temple, Yanar Dag, Bibi-Heybat Mosque, Caspian Sea
  </p>

  <li><b>🧳 Day 5 – Departure</b></li>
  <p>
    After breakfast, check out from the hotel. Time for last-minute <b>shopping</b> or a stroll depending on your flight schedule.
    Transfer to <b>Heydar Aliyev International Airport</b> for your departure with wonderful memories of Azerbaijan.
    <b>✨ Safe travels!</b>
  </p>
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
                        <li>Documentation: Passports, visas, and other documents are the customer’s responsibility.</li>
                        <li>Payment Terms: Full payment is required prior to departure.</li>
                      </ul>
                </div>  
                <div id="scrollspyHeading3"></div>              
            </div> 
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center basic_pack">
            <h4>Basic Package Details:</h4>
            <div class="col">
                <div class="card text-center mb-3 package-card">
                    <div class="card-body">
                      <h3 class="card-title">Azerbaijan_Baku</h3>
                      <p class="card-text"><b>4 Nights / 5 Days</b></p>
        <ol class="breadcrumb">
          <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li> -->
          <li class="breadcrumb-item"><a href="../index.php">Azerbaijan Home</a></li>
          <li class="breadcrumb-item" aria-current="page">Azerbaijan_Baku</li>
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
<script>
  
    const skOpenBtn = document.getElementById("skOpenBtn");
    const skCloseBtn = document.getElementById("skCloseBtn");
    const skContactCard = document.getElementById("skContactCard");

    // OPEN CARD

    skOpenBtn.addEventListener("click", function(){

      skContactCard.classList.add("sk-active");

    });

    // CLOSE CARD

    skCloseBtn.addEventListener("click", function(){

      skContactCard.classList.remove("sk-active");

    });


</script>
<?php include __DIR__ . '/../../../../../footer.php'; ?>

