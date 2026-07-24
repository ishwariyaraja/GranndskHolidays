<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<script src=\"../../../../scricpt.js\"></script>",
    "<style>\r\n    \r\n    /* SIDE BUTTON */\r\n    .sk-open-btn{\r\n      position:fixed;\r\n      top:50%;\r\n      right:0;\r\n      transform:translateY(-20%);\r\n      background:linear-gradient(135deg,#007bff,#003399);\r\n      color:#fff;\r\n      border:none;\r\n      padding:18px 12px;\r\n      cursor:pointer;\r\n      font-size:16px;\r\n      font-weight:bold;\r\n      border-radius:12px 0 0 12px;\r\n      writing-mode:vertical-rl;\r\n      text-orientation:mixed;\r\n      z-index:1000;\r\n      transition:0.3s;\r\n      box-shadow:0 5px 15px rgba(0,0,0,0.2);\r\n    }\r\n\r\n    .sk-open-btn:hover{\r\n      padding-right:15px;\r\n    }\r\n\r\n    /* CONTACT CARD */\r\n\r\n    .sk-contact-side{\r\n      position:fixed;\r\n      top:50%;\r\n      right:-400px;\r\n      transform:translateY(-50%);\r\n      width:340px;\r\n      background:#fff;\r\n      border-radius:20px;\r\n      overflow:hidden;\r\n      box-shadow:0 10px 30px rgba(0,0,0,0.2);\r\n      transition:0.5s ease;\r\n      z-index:999;\r\n    }\r\n\r\n    .sk-contact-side.sk-active{\r\n      right:20px;\r\n    }\r\n\r\n    /* HEADER */\r\n\r\n    .sk-contact-header{\r\n      background:linear-gradient(135deg,#003399,#0f4c81);\r\n      color:#fff;\r\n      padding:25px 20px;\r\n      text-align:center;\r\n      position:relative;\r\n    }\r\n\r\n    .sk-contact-header h2{\r\n      font-size:24px;\r\n      margin-bottom:10px;\r\n    }\r\n\r\n    .sk-contact-header p{\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    /* CLOSE BUTTON */\r\n\r\n    .sk-close-btn{\r\n      position:absolute;\r\n      top:12px;\r\n      right:15px;\r\n      width:32px;\r\n      height:32px;\r\n      border:none;\r\n      border-radius:50%;\r\n      background:#fff;\r\n      color:#0f4c81;\r\n      cursor:pointer;\r\n      font-size:18px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n    }\r\n\r\n    .sk-close-btn:hover{\r\n      background:red;\r\n      color:#fff;\r\n    }\r\n\r\n    /* BODY */\r\n\r\n    .sk-contact-body{\r\n      padding:20px;\r\n    }\r\n\r\n    .sk-info-box{\r\n      display:flex;\r\n      gap:15px;\r\n      /* margin-bottom:20px; */\r\n      align-items:flex-start;\r\n    }\r\n\r\n    .sk-info-box i{\r\n      width:45px;\r\n      height:45px;\r\n      background:#1ea5fc;\r\n      color:#fff;\r\n      border-radius:50%;\r\n      display:flex;\r\n      align-items:center;\r\n      justify-content:center;\r\n      font-size:18px;\r\n      flex-shrink:0;\r\n    }\r\n\r\n    .sk-info-text h4{\r\n      margin-bottom:5px;\r\n      color:#222;\r\n      font-size:16px;\r\n    }\r\n\r\n    .sk-info-text p,\r\n    .sk-info-text a{\r\n      color:#555;\r\n      text-decoration:none;\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    .sk-info-text a:hover{\r\n      color:#1ea5fc;\r\n    }\r\n\r\n    /* BUTTON */\r\n\r\n    .sk-contact-btn{\r\n      display:block;\r\n      width:100%;\r\n      text-align:center;\r\n      text-decoration:none;\r\n      background:linear-gradient(135deg,#003399,#1ea5fc);\r\n      color:#fff;\r\n      padding:14px;\r\n      border-radius:10px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n      margin-top:10px;\r\n    }\r\n\r\n    .sk-contact-btn:hover{\r\n      transform:translateY(-2px);\r\n      box-shadow:0 8px 20px rgba(30,165,252,0.3);\r\n    }\r\n\r\n    /* MOBILE */\r\n\r\n    @media(max-width:480px){\r\n\r\n      .sk-contact-side{\r\n        width:90%;\r\n      }\r\n\r\n      .sk-contact-side.sk-active{\r\n        right:5%;\r\n      }\r\n\r\n    }\r\n\r\n\r\n  </style>"
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
  <!-- imagetag -->
   <div class="background_main">
    <img src="./Darjeeling.jpg" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4>Darjeeling</h4>
   <p>Darjeeling, often called the queen of the Hills,is a breathtaking hill station nestled in the Lesser Himalayas of West Bengal, India, at an elevation of around 2,042 meters, offering majestic views of the Kanchenjunga range and a unique cultural mosaic shaped by Lepchas, Gorkhas, Bhutias, Tibetans, and Bengalis. Once a part of the Kingdom of Sikkim and developed by the British as a summer retreat, it flourished into a colonial town with churches, schools, and the iconic Darjeeling Himalayan Railwaya UNESCO World Heritage Site known for its scenic Toy Train.Darjeeling world-famous tea, cultivated since the 19th century in over 80 estates like Happy Valley and Glenburn, is globally revered for its delicate muscatel flavor and was India first product to receive a Geographical Indication tag.
  </p>
  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Darjeeling 3N4D Packages -------------------------------------------------------------------------------------------->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling2.jpg); background-size: cover;">
        <p style="background-color:#000080;">3 Nights / 4 Days</p>
      </div>
      <div class="card-content">
        <h5>SK Holidays-India-Darjeeling Basic Pack</h5>
          <h4 class="card-title">Trip to Darjeeling </h4><hr>
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
              <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling3N4D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling3.jpg); background-size: cover;">
        <p style="background-color:#000080;">3 Nights / 4 Days</p>
      </div>
      <div class="card-content">
        <h5>SK Holidays-India-Darjeeling Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Darjeeling </h4>        
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
            <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling-Standard3N4D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling4.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 3 Nights / 4 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Darjeeling Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Darjeeling </h4>        
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
            <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling-Premium3N4D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>


    <!-- Darjeeling 4N5D -->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling11.jpg); background-size: cover;">
        <p style="background-color:#000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Darjeeling Basic Pack</h5>
          <h4 class="card-title">Trip to Darjeeling </h4><hr>
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
              <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling4N5D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling6.jpg); background-size: cover;">
        <p style="background-color: #000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Darjeeling Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Darjeeling </h4>        
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
            <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling-Standard4N5D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling8.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Darjeeling Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Darjeeling </h4>        
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
            <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling-Premium4N5D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>


    <!-- Darjeeling 5N6D -->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling9.jpg); background-size: cover;">
        <p style="background-color:#000080;">5 Nights / 6 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Darjeeling Basic Pack</h5>
          <h4 class="card-title">Trip to Darjeeling </h4><hr>
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
              <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling5N6D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling7.jpg); background-size: cover;">
        <p style="background-color: #000080;">5 Nights / 6 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Darjeeling Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Darjeeling </h4>        
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
            <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling-Standard5N6D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Darjeeling10.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 5 Nights / 6 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Darjeeling Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Darjeeling </h4>        
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
            <a href="../darjeeling-and-sikkim/Itinerary/SK-Holidays_Darjeeling-Premium5N6D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>



</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>FAQ - Darjeeling Trip</h1>
  <div class="faq">
      <div class="faq-item">
          <h2 class="faq-question">1. When is the best time to visit Darjeeling?</h2>
          <div class="faq-answer">
              <p>The best time to visit Darjeeling is from March to May and October to December, when the weather is pleasant and ideal for sightseeing.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">2. What are the must-visit places in Darjeeling?</h2>
          <div class="faq-answer">
              <p>Top attractions include Tiger Hill, Batasia Loop, Darjeeling Himalayan Railway (Toy Train), Peace Pagoda, Rock Garden, and tea estates.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">3. What activities can I do in Darjeeling?</h2>
          <div class="faq-answer">
              <p>Activities include toy train rides, sunrise views from Tiger Hill, trekking, tea tasting, visiting monasteries, and local shopping.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">4. How do I reach Darjeeling?</h2>
          <div class="faq-answer">
              <p>The nearest airport is Bagdogra, around 70 km away. From there, you can take a taxi or shared jeep. New Jalpaiguri (NJP) is the nearest major railway station.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">5. What are the accommodation options in Darjeeling?</h2>
          <div class="faq-answer">
              <p>Darjeeling offers a wide range of stays � from luxury heritage hotels to budget guesthouses and homestays with mountain views.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">6. Do I need any permits to visit Darjeeling?</h2>
          <div class="faq-answer">
              <p>No permits are needed to visit Darjeeling. However, if you plan to visit areas near the Sikkim border or protected regions, permits may be required.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">7. What is the local cuisine like?</h2>
          <div class="faq-answer">
              <p>Darjeeling cuisine is influenced by Tibetan and Nepali flavors. Popular dishes include momos, thukpa, churpee, sel roti, and Darjeeling tea.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">8. Are there any health precautions I should take?</h2>
          <div class="faq-answer">
              <p>Carry medication for motion sickness due to hilly roads, dress warmly, and stay hydrated. No special vaccinations are required.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">9. Is Darjeeling safe for tourists?</h2>
          <div class="faq-answer">
              <p>Yes, Darjeeling is considered safe for both solo and family travelers. Just take normal precautions, especially in remote areas or at night.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">10. What is the local currency, and should I carry cash?</h2>
          <div class="faq-answer">
              <p>The currency is Indian Rupee (INR). While cards are accepted at hotels and bigger restaurants, it�s best to carry cash for local markets and small shops.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">11. How do I get around Darjeeling?</h2>
          <div class="faq-answer">
              <p>You can explore Darjeeling by walking, taking taxis, or using shared jeeps. The roads are narrow, so walking is often the most scenic and convenient option.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">12. What should I pack for my Darjeeling trip?</h2>
          <div class="faq-answer">
              <p>Pack warm clothing (especially in winter), comfortable walking shoes, a raincoat (during monsoon), sunscreen, and any personal medications.</p>
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
<?php include __DIR__ . '/../../../../footer.php'; ?>

