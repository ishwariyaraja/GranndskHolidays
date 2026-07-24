<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<script src=\"../../../../../scricpt.js\"></script>",
    "<link rel=\"stylesheet\" href=\"../../../styles.css\">",
    "<style>
    .sk-open-btn{
      position:fixed;
      top:50%;
      right:0;
      transform:translateY(-20%);
      background:linear-gradient(135deg,#007bff,#003399);
      color:#fff;
      border:none;
      padding:18px 12px;
      cursor:pointer;
      font-size:16px;
      font-weight:bold;
      border-radius:12px 0 0 12px;
      writing-mode:vertical-rl;
      text-orientation:mixed;
      z-index:1000;
      transition:0.3s;
      box-shadow:0 5px 15px rgba(0,0,0,0.2);
    }
    .sk-open-btn:hover{padding-right:15px;}
    .sk-contact-side{
      position:fixed;
      top:50%;
      right:-400px;
      transform:translateY(-50%);
      width:340px;
      background:#fff;
      border-radius:20px;
      overflow:hidden;
      box-shadow:0 10px 30px rgba(0,0,0,0.2);
      transition:0.5s ease;
      z-index:999;
    }
    .sk-contact-side.sk-active{right:20px;}
    .sk-contact-header{
      background:linear-gradient(135deg,#003399,#0f4c81);
      color:#fff;
      padding:25px 20px;
      text-align:center;
      position:relative;
    }
    .sk-contact-header h2{font-size:24px;margin-bottom:10px;}
    .sk-contact-header p{font-size:14px;line-height:1.6;}
    .sk-close-btn{
      position:absolute;
      top:12px;
      right:15px;
      width:32px;
      height:32px;
      border:none;
      border-radius:50%;
      background:#fff;
      color:#0f4c81;
      cursor:pointer;
      font-size:18px;
      font-weight:bold;
      transition:0.3s;
    }
    .sk-close-btn:hover{background:red;color:#fff;}
    .sk-contact-body{padding:20px;}
    .sk-info-box{display:flex;gap:15px;align-items:flex-start;}
    .sk-info-box i{
      width:45px;height:45px;background:#1ea5fc;color:#fff;border-radius:50%;
      display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0;
    }
    .sk-info-text h4{margin-bottom:5px;color:#222;font-size:16px;}
    .sk-info-text p,.sk-info-text a{color:#555;text-decoration:none;font-size:14px;line-height:1.6;}
    .sk-info-text a:hover{color:#1ea5fc;}
    .sk-contact-btn{
      display:block;width:100%;text-align:center;text-decoration:none;
      background:linear-gradient(135deg,#003399,#1ea5fc);color:#fff;padding:14px;
      border-radius:10px;font-weight:bold;transition:0.3s;margin-top:10px;
    }
    .sk-contact-btn:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(30,165,252,0.3);}
    @media(max-width:480px){
      .sk-contact-side{width:90%;}
      .sk-contact-side.sk-active{right:5%;}
    }
   </style>",
    "<link rel=\"stylesheet\" href=\"../../../styles.css\">",
];
include __DIR__ . '/../../../../../header.php';
?>
<button class="sk-open-btn" id="skOpenBtn">
    Contact Us
  </button>
  <div class="sk-contact-side" id="skContactCard">

    <div class="sk-contact-header">

      <button class="sk-close-btn" id="skCloseBtn">
        ï¿½
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
  <div class="container package p-0">
        <div class="row pack_mobile">

          <div class="col-lg-12 pic p-0">            
      <!-- car -->
      <div id="carouselExampleSlidesOnly" class="carousel slide d-flex" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../LehLadakh.jpg" class="d-block w-100" alt="...">
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
                  <a class="nav-link" href="#scrollspyHeading2">Inclusion & Exclusion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#scrollspyHeading3">Terms & Condition</a>
                </li>                
              </ul>
            </nav>

            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -20%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0" style="border: 1px solid navajowhite;">
              <div class="itinerary_list">
              <h4>Itinerary:</h4>
                  <ul style="text-align: justify;">
                    <li><b>DAY 1: CHENNAI - LADAKH</b></li>
                    <p>Upon arrival at Kushok Bakula Rimpochee Airport, meet our representative and transfer to your hotel in Leh. After check-in, relax and acclimatize to the high-altitude conditions. In the evening, visit Leh Palace, Leh Market, and Shanti Stupa. Return to the hotel for dinner and overnight stay.</p>
                    <li><b>DAY 2: LEH - SHAAM VALLEY</b></li>
                    <p>After breakfast, proceed for a full-day excursion to the beautiful Sham Valley, covering Gurudwara Pathar Sahib, Magnetic Hill, and Sangam Point. By evening, return to Leh for dinner and overnight stay at the hotel.</p>
                    <li><b>DAY 3: LEH - NUBRA TRANSFER AND SIGHTSEEING</b></li>
                    <p>Early morning, drive to Nubra Valley via the famous Khardung La Pass, one of the world’s highest motorable roads. On arrival in Nubra Valley, visit the white sand dunes of Hunder Sand Dunes and enjoy an optional camel ride on the famous double-humped Bactrian camels. Later, check in to the camp or hotel and spend the evening at leisure followed by dinner and overnight stay in Nubra Valley.</p>
                    <li><b>DAY 4: NUBRA - PANGONG</b></li>
                    <p>After breakfast, visit Diskit Monastery, the oldest and largest monastery in Nubra Valley, famous for its giant Maitreya Buddha statue and panoramic valley views. Later, proceed towards Pangong Lake via the scenic Shayok/Wari La route. On arrival, check in to the camp and enjoy dinner and overnight stay near Pangong Lake.</p>
                    <li><b>DAY 5: PANGONG - LEH</b></li>
                    <p>In the morning have breakfast in your camps in Pangong. Thereafter, proceed for your journey back to Leh. Upon arrival in Leh, you may enjoy sightseeing of Hemis Monastery in the evening at leisure. Dinner and overnight stay at the hotel.</p>
                    <li><b>DAY 6: LEH - DEPARTURE</b></li>
                    <p>After breakfast, check out from the hotel and transfer to Kushok Bakula Rimpochee Airport for your onward journey. Depart with unforgettable memories of your wonderful Ladakh trip.</p>
                  </ul>  
            </div><hr>

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
          <li>Camera &amp; Video Charges</li>
          <li>Hotel Early Check In &amp; Late Check-out</li>
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
                      <h3 class="card-title">LEH LADAKH</h3>
                      <p class="card-text"><b>5 Nights / 6 Days</b></p>
                      <nav class="container" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Leh Ladakh</li>
        </ol>
      </nav>
                    </div>
                  </div>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <h5><b>Need Help</b></h5>
                <p>Call: +91 72004 49904</p>
                <p>Email: sales@grandskholidays.com</p>
            </div>
          </div>
        </div>
      </div>

<button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const customDropdowns = document.querySelectorAll(".custom-dropdown");
  const groupDropdown = document.getElementById("groupDropdown");
  customDropdowns.forEach(drop => {
    drop.addEventListener("click", function (e) {
      e.stopPropagation();
      this.classList.toggle("active");
    });
  });
  if (groupDropdown) {
    groupDropdown.addEventListener("click", function (e) {
      e.stopPropagation();
      this.classList.toggle("active");
    });
  }
  document.addEventListener("click", () => {
    customDropdowns.forEach(drop => drop.classList.remove("active"));
    if (groupDropdown) groupDropdown.classList.remove("active");
  });
</script>
<script>
    const skOpenBtn = document.getElementById("skOpenBtn");
    const skCloseBtn = document.getElementById("skCloseBtn");
    const skContactCard = document.getElementById("skContactCard");
    skOpenBtn.addEventListener("click", function(){
      skContactCard.classList.add("sk-active");
    });
    skCloseBtn.addEventListener("click", function(){
      skContactCard.classList.remove("sk-active");
    });
</script>
<?php include __DIR__ . '/../../../../../footer.php'; ?>
