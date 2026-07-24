<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<style>\r\n\r\n    /* SIDE BUTTON */\r\n    .sk-open-btn{\r\n      position:fixed;\r\n      top:50%;\r\n      right:0;\r\n      transform:translateY(-20%);\r\n      background:linear-gradient(135deg,#007bff,#003399);\r\n      color:#fff;\r\n      border:none;\r\n      padding:18px 12px;\r\n      cursor:pointer;\r\n      font-size:16px;\r\n      font-weight:bold;\r\n      border-radius:12px 0 0 12px;\r\n      writing-mode:vertical-rl;\r\n      text-orientation:mixed;\r\n      z-index:1000;\r\n      transition:0.3s;\r\n      box-shadow:0 5px 15px rgba(0,0,0,0.2);\r\n    }\r\n\r\n    .sk-open-btn:hover{\r\n      padding-right:15px;\r\n    }\r\n\r\n    /* CONTACT CARD */\r\n\r\n    .sk-contact-side{\r\n      position:fixed;\r\n      top:50%;\r\n      right:-400px;\r\n      transform:translateY(-50%);\r\n      width:340px;\r\n      background:#fff;\r\n      border-radius:20px;\r\n      overflow:hidden;\r\n      box-shadow:0 10px 30px rgba(0,0,0,0.2);\r\n      transition:0.5s ease;\r\n      z-index:999;\r\n    }\r\n\r\n    .sk-contact-side.sk-active{\r\n      right:20px;\r\n    }\r\n\r\n    /* HEADER */\r\n\r\n    .sk-contact-header{\r\n      background:linear-gradient(135deg,#003399,#0f4c81);\r\n      color:#fff;\r\n      padding:25px 20px;\r\n      text-align:center;\r\n      position:relative;\r\n    }\r\n\r\n    .sk-contact-header h2{\r\n      font-size:24px;\r\n      margin-bottom:10px;\r\n    }\r\n\r\n    .sk-contact-header p{\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    /* CLOSE BUTTON */\r\n\r\n    .sk-close-btn{\r\n      position:absolute;\r\n      top:12px;\r\n      right:15px;\r\n      width:32px;\r\n      height:32px;\r\n      border:none;\r\n      border-radius:50%;\r\n      background:#fff;\r\n      color:#0f4c81;\r\n      cursor:pointer;\r\n      font-size:18px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n    }\r\n\r\n    .sk-close-btn:hover{\r\n      background:red;\r\n      color:#fff;\r\n    }\r\n\r\n    /* BODY */\r\n\r\n    .sk-contact-body{\r\n      padding:20px;\r\n    }\r\n\r\n    .sk-info-box{\r\n      display:flex;\r\n      gap:15px;\r\n      /* margin-bottom:20px; */\r\n      align-items:flex-start;\r\n    }\r\n\r\n    .sk-info-box i{\r\n      width:45px;\r\n      height:45px;\r\n      background:#1ea5fc;\r\n      color:#fff;\r\n      border-radius:50%;\r\n      display:flex;\r\n      align-items:center;\r\n      justify-content:center;\r\n      font-size:18px;\r\n      flex-shrink:0;\r\n    }\r\n\r\n    .sk-info-text h4{\r\n      margin-bottom:5px;\r\n      color:#222;\r\n      font-size:16px;\r\n    }\r\n\r\n    .sk-info-text p,\r\n    .sk-info-text a{\r\n      color:#555;\r\n      text-decoration:none;\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    .sk-info-text a:hover{\r\n      color:#1ea5fc;\r\n    }\r\n\r\n    /* BUTTON */\r\n\r\n    .sk-contact-btn{\r\n      display:block;\r\n      width:100%;\r\n      text-align:center;\r\n      text-decoration:none;\r\n      background:linear-gradient(135deg,#003399,#1ea5fc);\r\n      color:#fff;\r\n      padding:14px;\r\n      border-radius:10px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n      margin-top:10px;\r\n    }\r\n\r\n    .sk-contact-btn:hover{\r\n      transform:translateY(-2px);\r\n      box-shadow:0 8px 20px rgba(30,165,252,0.3);\r\n    }\r\n\r\n    /* MOBILE */\r\n\r\n    @media(max-width:480px){\r\n      .sk-open-btn{\r\n        top:60%;\r\n        padding:14px 9px;\r\n        font-size:14px;\r\n        border-radius:10px 0 0 10px;\r\n      }\r\n\r\n      .sk-contact-side{\r\n        width:90%;\r\n      }\r\n\r\n      .sk-contact-side.sk-active{\r\n        right:5%;\r\n      }\r\n\r\n    }\r\n\r\n  </style>",
    "<link rel=\"stylesheet\" href=\"../../../../sk.css\">",
    "<link rel=\"stylesheet\" href=\"../../../styles.css\">",
];
include __DIR__ . '/../../../../header.php';
?>
<!-- <button class="testimonial-btn" onclick="window.location.href='testimonials.php'">
    Testimonials
</button> -->
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

          <a href="mailto:info@grandskholidays.com">
            info@grandskholidays.com
          </a>
        </div>

      </div>

      <a href="../../../../bookingform.php" class="sk-contact-btn">
        Book Your Trip Now
      </a>

    </div>

  </div>
<!-- ===== CONTENT ===== -->
    
   <div class="background_main">
    <img src="Dubai-6.jpg" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify;">
   <h4>Dubai</h4>
   <p>Dubai, located in the United Arab Emirates (UAE), is a futuristic city known for its luxury lifestyle, modern architecture, desert adventures, and world-class shopping. It blends traditional Arab culture with ultra-modern city life, making it one of the most visited destinations in the world Top tourist spots include the Burj Khalifa, Burj Al Arab, Dubai Mall, Palm Jumeirah, Dubai Marina, Desert Safari, Dubai Frame, Dubai Fountain, Miracle Garden, and Global Village.Burj Khalifa is the world’s tallest building with breathtaking city views.Dubai Mall isn’t just for shopping—it has an aquarium, ice rink, and theme parks.Palm Jumeirah offers luxury resorts and stunning beaches.The Desert Safari is a must for thrill-seekers — enjoy dune bashing, camel rides, and BBQ dinners.Global Village is perfect for culture lovers with pavilions from around the world, and Dubai Miracle Garden is a colorful wonderland of flowers.</p>

<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center" style="width:100%;">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Dubai Odyssey Packages -->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-1.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Odyssey</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!-- standard -->
   <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-2.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Odyssey</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
   <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-3.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Odyssey</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--   Burj Khalifa  Pakages-->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-4.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Burj Khalifa</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">3 Nights / 4 Days</p>
      </div>
    </div></div>

<!--Standard-->
   <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-5.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Burj Khalifa</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">3 Nights / 4 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
  <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-7.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Burj Khalifa</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">3 Nights / 4 Days</p>
      </div>
    </div></div>


<!--  Dubai Hotel Pakages-->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-9.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Hotel</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--Standard-->
   <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-9.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Hotel</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4Nights / 5 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-10.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Hotel</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--  Dubai Palm Beach Hotel Pakages-->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-11.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Palm Beach Hotel</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--Standard-->
   <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-12.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Palm Beach Hotel</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
   <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-13.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Palm Beach Hotel</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

 <!--  Dubai Abu Dhabi Pakages-->
    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-14.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Abu Dhabi</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">3 Nights / 4 Days</p>
      </div>
    </div></div>

<!--Standard-->
   <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-15.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Abu Dhabi</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">3 Nights / 4 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-16.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Abu Dhabi</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">3 Nights / 4 Days</p>
      </div>
    </div></div>   

<!--  Dubai Abu Dhabi City Pakages-->
    <!-- basics -->
     <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-17.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Abu Dhabi City</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--Standard-->
  <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-18.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Abu Dhabi City</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(Dubai-19.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Dubai Abu Dhabi City</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>   
</div>
</div>


<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>Frequently Asked Questions - Dubai Trip</h1>
  <div class="faq">
      <div class="faq-item">
          <h2 class="faq-question">1.What is the best time to visit Dubai?</h2>
          <div class="faq-answer">
              <p>November to March – Cool and pleasant weather, Avoid May–September (very hot 🔥).</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">2.Where to stay in Dubai?</h2>
          <div class="faq-answer">
              <p>Bur Dubai / Deira – Budget hotels Downtown / Marina / Palm Jumeirah – Luxury & mid-range,Al Barsha – Near Mall of Emirates (convenient)</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">3.Do Indians need a visa to visit Dubai?</h2>
          <div class="faq-answer">
              <p> Yes da. Indian citizens need a UAE tourist visa.You can apply:
                 Through travel agents (MakeMyTrip, Akbar Travels, etc.)
                 If you have US/UK/Schengen visa, you may get visa-on-arrival.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">4.What currency is used in Dubai?</h2>
          <div class="faq-answer">
              <p>UAE Dirham (AED)1 AED ≈ ₹22–₹24 (may vary).</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">5.How long does it take to reach Dubai from India?</h2>
          <div class="faq-answer">
              <p>Around 3.5 to 4 hours by direct flight from Chennai, Mumbai, Kochi, etc.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">6.What are must-visit tourist spots in Dubai?</h2>
          <div class="faq-answer">
              <p>Burj Khalifa ,l & Fountain,Desert Safari ,Marina Cruise ,Dubai Frame,Miracle Garden,Atlantis Aquaventure Waterpark,Global Village (seasonal).</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">7.What documents are required for Dubai travel?</h2>
          <div class="faq-answer">
              <p>Valid passport (6 months minimum),Tourist Visa,Return flight ticket,Hotel booking & travel insurance (optional but good to have)</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">8.What should I wear in Dubai?</h2>
          <div class="faq-answer">
              <p>Dubai is modern but modest.Wear decent clothes (covered shoulders/knees in public places). Beachwear allowed only at beach/pool</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">9.Is Indian vegetarian food available in Dubai?</h2>
          <div class="faq-answer">
              <p>Yes da! Romba easy ah kidaikum – lots of Indian restaurants:
Saravanaa Bhavan,Biryani Pot,Veg Hut,Bombay Chowpatty,Local Tamil mess too!.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">10.Is alcohol allowed in Dubai?</h2>
          <div class="faq-answer">
              <p>Yes, in licensed restaurants/hotels/bars. Drinking in public = illegal. Don’t carry alcohol from India unless you buy from Dubai Duty-Free</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">11.What is the baggage allowance for Dubai flights?</h2>
          <div class="faq-answer">
              <p>Economy class: 20–30 kg check-in + 7 kg cabin (differs by airline).Check with airline before travel</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">12. How to get a SIM card or mobile data in Dubai?</h2>
          <div class="faq-answer">
              <p>Buy tourist SIM at Dubai Airport (Etisalat, Du). Plans start from AED 49 onwards (with data)</p>
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
      const popup = document.getElementById('locationModal');
      const text = document.getElementById('locationText');

      if (place === 'trichy') {
        text.innerHTML = `
          <strong>Trichy Office:</strong><br>
          NO: 103, FIRST FLOOR, ST PAUL COMPLEX,<br>
          BHARATHIYAR SALAI, OPPOSITE HEAD POST OFFICE,<br>
          TRICHY - 620001
        `;
      } else if (place === 'perambalur') {
        text.innerHTML = `
          <strong>Perambalur Office:</strong><br>
          2nd Floor, Vallalar Complex,<br>
          Kamarajar Signal,<br>
          Perambalur - 621212
        `;
      } else if (place === 'thuraiyur') {
        text.innerHTML = `
          <strong>Thuraiyur Office:</strong><br>
          NO: 210, FIRST FLOOR, SRINIVASA COMPLEX,<br>
           TRICHY ROAD,<br>
            THURAIYUR - 621110
        `;
      }

      popup.style.display = 'flex';
    }

    function closeLocationPopup() {
      document.getElementById('locationModal').style.display = 'none';
    }

    // Close popup if user clicks outside it
    window.onclick = function(event) {
      const popup = document.getElementById('locationModal');
      if (event.target === popup) {
        popup.style.display = 'none';
      }
    }
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

