<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<script src=\"../../../../scricpt.js\"></script>",
    "<link rel=\"stylesheet\" href=\"../../../../sk.css\">",
    "<style>\r\n    \r\n    /* SIDE BUTTON */\r\n    .sk-open-btn{\r\n      position:fixed;\r\n      top:50%;\r\n      right:0;\r\n      transform:translateY(-20%);\r\n      background:linear-gradient(135deg,#007bff,#003399);\r\n      color:#fff;\r\n      border:none;\r\n      padding:18px 12px;\r\n      cursor:pointer;\r\n      font-size:16px;\r\n      font-weight:bold;\r\n      border-radius:12px 0 0 12px;\r\n      writing-mode:vertical-rl;\r\n      text-orientation:mixed;\r\n      z-index:1000;\r\n      transition:0.3s;\r\n      box-shadow:0 5px 15px rgba(0,0,0,0.2);\r\n    }\r\n\r\n    .sk-open-btn:hover{\r\n      padding-right:15px;\r\n    }\r\n\r\n    /* CONTACT CARD */\r\n\r\n    .sk-contact-side{\r\n      position:fixed;\r\n      top:50%;\r\n      right:-400px;\r\n      transform:translateY(-50%);\r\n      width:340px;\r\n      background:#fff;\r\n      border-radius:20px;\r\n      overflow:hidden;\r\n      box-shadow:0 10px 30px rgba(0,0,0,0.2);\r\n      transition:0.5s ease;\r\n      z-index:999;\r\n    }\r\n\r\n    .sk-contact-side.sk-active{\r\n      right:20px;\r\n    }\r\n\r\n    /* HEADER */\r\n\r\n    .sk-contact-header{\r\n      background:linear-gradient(135deg,#003399,#0f4c81);\r\n      color:#fff;\r\n      padding:25px 20px;\r\n      text-align:center;\r\n      position:relative;\r\n    }\r\n\r\n    .sk-contact-header h2{\r\n      font-size:24px;\r\n      margin-bottom:10px;\r\n    }\r\n\r\n    .sk-contact-header p{\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    /* CLOSE BUTTON */\r\n\r\n    .sk-close-btn{\r\n      position:absolute;\r\n      top:12px;\r\n      right:15px;\r\n      width:32px;\r\n      height:32px;\r\n      border:none;\r\n      border-radius:50%;\r\n      background:#fff;\r\n      color:#0f4c81;\r\n      cursor:pointer;\r\n      font-size:18px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n    }\r\n\r\n    .sk-close-btn:hover{\r\n      background:red;\r\n      color:#fff;\r\n    }\r\n\r\n    /* BODY */\r\n\r\n    .sk-contact-body{\r\n      padding:20px;\r\n    }\r\n\r\n    .sk-info-box{\r\n      display:flex;\r\n      gap:15px;\r\n      /* margin-bottom:20px; */\r\n      align-items:flex-start;\r\n    }\r\n\r\n    .sk-info-box i{\r\n      width:45px;\r\n      height:45px;\r\n      background:#1ea5fc;\r\n      color:#fff;\r\n      border-radius:50%;\r\n      display:flex;\r\n      align-items:center;\r\n      justify-content:center;\r\n      font-size:18px;\r\n      flex-shrink:0;\r\n    }\r\n\r\n    .sk-info-text h4{\r\n      margin-bottom:5px;\r\n      color:#222;\r\n      font-size:16px;\r\n    }\r\n\r\n    .sk-info-text p,\r\n    .sk-info-text a{\r\n      color:#555;\r\n      text-decoration:none;\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    .sk-info-text a:hover{\r\n      color:#1ea5fc;\r\n    }\r\n\r\n    /* BUTTON */\r\n\r\n    .sk-contact-btn{\r\n      display:block;\r\n      width:100%;\r\n      text-align:center;\r\n      text-decoration:none;\r\n      background:linear-gradient(135deg,#003399,#1ea5fc);\r\n      color:#fff;\r\n      padding:14px;\r\n      border-radius:10px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n      margin-top:10px;\r\n    }\r\n\r\n    .sk-contact-btn:hover{\r\n      transform:translateY(-2px);\r\n      box-shadow:0 8px 20px rgba(30,165,252,0.3);\r\n    }\r\n\r\n    /* MOBILE */\r\n\r\n    @media(max-width:480px){\r\n\r\n      .sk-contact-side{\r\n        width:90%;\r\n      }\r\n\r\n      .sk-contact-side.sk-active{\r\n        right:5%;\r\n      }\r\n\r\n    }\r\n\r\n\r\n   </style>"
];
include __DIR__ . '/../../../../header.php';
?>
<button class="sk-open-btn" id="skOpenBtn">
    Contact Us
  </button>
  <div class="sk-contact-side" id="skContactCard">

    <div class="sk-contact-header">

      <button class="sk-close-btn" id="skCloseBtn">
        �
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

          <a href="mailto:info@grandskholidays.com">
            info@grandskholidays.com
          </a>
        </div>

      </div>

      <a href="<?php echo $SK_ROOT_PREFIX; ?>bookingform.php" class="sk-contact-btn">
        Book Your Trip Now
      </a>

    </div>

  </div>
 <!-- <button class="testimonial-btn" onclick="window.location.href='testimonials.php'">
    Testimonials
</button> -->

<!-- ===== CONTENT ===== -->


   <div class="background_main">
    <img src="./Andaman1.png" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4>Andaman Island</h4>
   <p>The Andaman Islands, a pristine archipelago in the Bay of Bengal, are part of the Indian Union Territory of Andaman and Nicobar Islands, renowned for their lush tropical rainforests, rich marine biodiversity, and stunning beaches like These islands, home to about 325 landmasses with only a few inhabited, are ecologically unique, featuring coral reefs, mangroves, and endemic wildlife such as saltwater crocodiles, emerald geckos, and the endangered Andaman wild boar. .</p>

  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Andaman Packages 4N5D -------------------------------------------------------------------------------------------->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;">
      <div class="card">
      <div class="card-image" style="background-image: url(./Andaman2.png); background-size: cover;">
        <p style="background-color:#000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Basic Pack</h5>
          <h4 class="card-title">Trip to Andaman </h4><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <!-- <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <p>Meal</p>
                </div> -->
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>Flight</p>  -->
                </div>
              </div>
          </div><hr>
          <!-- <button class="card-button">View Itinerary</button> -->
          <!-- modal -->
           <!-- Button trigger modal -->
            <div class="container d-flex justify-content-center">
              <a href="../andaman/Itinerary/andaman4N5D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Andaman3.png); background-size: cover;">
        <p style="background-color: #000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Andaman </h4>        
          </div><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Sea ways</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>Guide</p>  -->
                </div>
              </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="../andaman/Itinerary/andamanstandard5N6D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./andaman5.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Andaman </h4>        
          </div><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel4.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Air ways</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>guide</p>  -->
                </div>
              </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="../andaman/Itinerary/andamanpremium4N5D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>

    <!-- Andaman 5N6D ------------------------------------------------------------------------------------------------->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./andaman6.jpg); background-size: cover;">
        <p style="background-color:#000080;">5 Nights / 6 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Basic Pack</h5>
          <h4 class="card-title">Trip to Andaman </h4><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <!-- <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <p>Meal</p>
                </div> -->
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>Flight</p>  -->
                </div>
              </div>
          </div><hr>
          <!-- <button class="card-button">View Itinerary</button> -->
          <!-- modal -->
           <!-- Button trigger modal -->
            <div class="container d-flex justify-content-center">
              <a href="../andaman/Itinerary/andaman5N6D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./andaman7.jpg); background-size: cover;">
        <p style="background-color: #000080;">5 Nights / 6 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Andaman </h4>        
          </div><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Sea ways</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>Guide</p>  -->
                </div>
              </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="../andaman/Itinerary/andamanstandard5N6D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./andaman8.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 5 Nights / 6 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Andaman </h4>        
          </div><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel4.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Air ways</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>guide</p>  -->
                </div>
              </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="../andaman/Itinerary/andamanpremium5N6D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>

<!-- Andaman 6N7D ---------------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./andaman9.jpg); background-size: cover;">
        <p style="background-color:#000080;">6 Nights / 7 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Basic Pack</h5>
          <h4 class="card-title">Trip to Andaman </h4><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <!-- <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <p>Meal</p>
                </div> -->
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>Flight</p>  -->
                </div>
              </div>
          </div><hr>
          <!-- <button class="card-button">View Itinerary</button> -->
          <!-- modal -->
           <!-- Button trigger modal -->
            <div class="container d-flex justify-content-center">
              <a href="../andaman/Itinerary/andaman6N7D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./andaman_back.jpg); background-size: cover;">
        <p style="background-color: #000080;">6 Nights / 7 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Andaman </h4>        
          </div><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Sea ways</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>Guide</p>  -->
                </div>
              </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="../andaman/Itinerary/andamanstandard6N7D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Andman1.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 6 Nights / 7 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Andaman Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Andaman </h4>        
          </div><hr>
          <div class="vl">
              <div class="row d-flex align-items-start">
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel4.png">
                  <!-- <p>Hotel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png">
                  <!-- <p>Meal</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png">
                  <!-- <p>Travel</p> -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png">
                  <!-- <p>Sight Seeing</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png">
                  <!-- <p>Air ways</p>  -->
                </div>
                <div class="col-2">
                  <img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png">
                  <!-- <p>guide</p>  -->
                </div>
              </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="../andaman/Itinerary/andamanpremium6N7D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div>
  </div>

<!-- <div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex row_cards justify-content-center align-items-center"> -->
    <!-- Andaman Packages 3N4D -------------------------------------------------------------------------------------------->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(./Andaman1.png); background-size: cover;">
          <p style="background-color:#000080;">3 Nights / 4 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Andaman Basic Pack</h5>
          <h4 class="card-title">Trip to Andaman </h4><hr>
          <div class="vl">
            <div class="row d-flex align-items-start">
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png"></div>
            </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="Itinerary/andaman3N4DBasic.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(./Andaman2.png); background-size: cover;">
          <p style="background-color:#000080;">3 Nights / 4 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Andaman Standard Pack</h5>
          <h4 class="card-title">Trip to Andaman </h4><hr>
          <div class="vl">
            <div class="row d-flex align-items-start">
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png"></div>
            </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="Itinerary/andaman3N4DStandard.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(./Andaman3.png); background-size: cover;">
          <p style="background-color:#000080;">3 Nights / 4 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Andaman Premium Pack</h5>
          <h4 class="card-title">Trip to Andaman </h4><hr>
          <div class="vl">
            <div class="row d-flex align-items-start">
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel4.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png"></div>
            </div>
          </div><hr>
          <div class="container d-flex justify-content-center">
            <a href="Itinerary/andaman3N4DPremium.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>
  <!-- </div>
</div> -->

</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>Andaman-Frequently Asked Question</h1>
  <div class="faq">
      <div class="faq-item">
          <h2 class="faq-question">1. When is the best time to visit the Andaman Islands?</h2>
          <div class="faq-answer">
              <p>The ideal time is between October and May, when the weather is pleasant for beach activities and sightseeing.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">2. What are the must-visit places in the Andaman Islands?</h2>
          <div class="faq-answer">
              <p>Popular destinations include Havelock Island, Neil Island, Port Blair, Cellular Jail, Ross Island, and Baratang Island.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">3. What activities can I do in the Andaman Islands?</h2>
          <div class="faq-answer">
              <p>Activities include scuba diving, snorkeling, glass-bottom boat rides, trekking, and exploring marine parks.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">4. How do I reach the Andaman Islands?</h2>
          <div class="faq-answer">
              <p>You can reach the islands by flight to Veer Savarkar International Airport in Port Blair or by ferry from the mainland.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">5. What are the accommodation options in the Andaman Islands?</h2>
          <div class="faq-answer">
              <p>Options range from luxury resorts to budget hotels and guesthouses, catering to various budgets.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">6. Do I need a permit to visit the Andaman Islands?</h2>
          <div class="faq-answer">
              <p>Indian nationals do not need a permit; however, foreign nationals need an Entry Permit, which can be obtained on arrival in Port Blair.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">7. What is the local cuisine like?</h2>
          <div class="faq-answer">
              <p>Andaman cuisine features fresh seafood, coconut-based dishes, and local fruits. Don�t miss trying fish curry and prawn dishes.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">8. Are there any health precautions I should take?</h2>
          <div class="faq-answer">
              <p>It's advisable to carry basic medication, stay hydrated, and use sunscreen. Check for any required vaccinations before traveling.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">9. Is it safe to swim in the waters around the islands?</h2>
          <div class="faq-answer">
              <p>Generally, yes, but be cautious of currents and always swim in designated safe areas.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">10. What is the local currency, and should I carry cash?</h2>
          <div class="faq-answer">
              <p>The local currency is the Indian Rupee (INR). While many places accept cards, it�s good to carry cash for small vendors.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">11. How do I get around the islands?</h2>
          <div class="faq-answer">
              <p>You can hire taxis, auto-rickshaws, or rent scooters and bicycles. Ferries connect the major islands.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">12. What should I pack for my Andaman trip?</h2>
          <div class="faq-answer">
              <p>Essentials include lightweight clothing, swimwear, sunscreen, insect repellent, and comfortable footwear for trekking.</p>
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
  document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});

// Disable right-click----------

// document.addEventListener("contextmenu", (e) => e.preventDefault());

// Disable common developer tool shortcuts------------

// document.addEventListener("keydown", (e) => {
//     if (e.key === "F12" || (e.ctrlKey && e.shiftKey && e.key === "I")) {
//         e.preventDefault();
//     }
// });

function showLocation(place) {
  const popup = document.getElementById("locationModal");
  const text = document.getElementById("locationText");

  if (place === "trichy") {
    text.innerHTML = `
          <strong>Trichy Office:</strong><br>
          NO: 103, FIRST FLOOR, ST PAUL COMPLEX,<br>
          BHARATHIYAR SALAI, OPPOSITE HEAD POST OFFICE,<br>
          TRICHY - 620001
        `;
  } else if (place === "perambalur") {
    text.innerHTML = `
          <strong>Perambalur Office:</strong><br>
          2nd Floor, Vallalar Complex,<br>
          Kamarajar Signal,<br>
          Perambalur - 621212
        `;
  } else if (place === "thuraiyur") {
    text.innerHTML = `
          <strong>Thuraiyur Office:</strong><br>
          NO: 210, FIRST FLOOR, SRINIVASA COMPLEX,<br>
           TRICHY ROAD,<br>
            THURAIYUR�-�621110
        `;
  }

  popup.style.display = "flex";
}

function closeLocationPopup() {
  document.getElementById("locationModal").style.display = "none";
}

// Close popup if user clicks outside it
window.onclick = function (event) {
  const popup = document.getElementById("locationModal");
  if (event.target === popup) {
    popup.style.display = "none";
  }
};


</script>
<?php include __DIR__ . '/../../../../footer.php'; ?>

