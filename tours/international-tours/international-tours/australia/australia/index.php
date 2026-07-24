<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link rel=\"stylesheet\" href=\"../../../../sk.css\">",
    "<style>\r\n\r\n    /* SIDE BUTTON */\r\n    .sk-open-btn{\r\n      position:fixed;\r\n      top:50%;\r\n      right:0;\r\n      transform:translateY(-20%);\r\n      background:linear-gradient(135deg,#007bff,#003399);\r\n      color:#fff;\r\n      border:none;\r\n      padding:18px 12px;\r\n      cursor:pointer;\r\n      font-size:16px;\r\n      font-weight:bold;\r\n      border-radius:12px 0 0 12px;\r\n      writing-mode:vertical-rl;\r\n      text-orientation:mixed;\r\n      z-index:1000;\r\n      transition:0.3s;\r\n      box-shadow:0 5px 15px rgba(0,0,0,0.2);\r\n    }\r\n\r\n    .sk-open-btn:hover{\r\n      padding-right:15px;\r\n    }\r\n\r\n    /* CONTACT CARD */\r\n\r\n    .sk-contact-side{\r\n      position:fixed;\r\n      top:50%;\r\n      right:-400px;\r\n      transform:translateY(-50%);\r\n      width:340px;\r\n      background:#fff;\r\n      border-radius:20px;\r\n      overflow:hidden;\r\n      box-shadow:0 10px 30px rgba(0,0,0,0.2);\r\n      transition:0.5s ease;\r\n      z-index:999;\r\n    }\r\n\r\n    .sk-contact-side.sk-active{\r\n      right:20px;\r\n    }\r\n\r\n    /* HEADER */\r\n\r\n    .sk-contact-header{\r\n      background:linear-gradient(135deg,#003399,#0f4c81);\r\n      color:#fff;\r\n      padding:25px 20px;\r\n      text-align:center;\r\n      position:relative;\r\n    }\r\n\r\n    .sk-contact-header h2{\r\n      font-size:24px;\r\n      margin-bottom:10px;\r\n    }\r\n\r\n    .sk-contact-header p{\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    /* CLOSE BUTTON */\r\n\r\n    .sk-close-btn{\r\n      position:absolute;\r\n      top:12px;\r\n      right:15px;\r\n      width:32px;\r\n      height:32px;\r\n      border:none;\r\n      border-radius:50%;\r\n      background:#fff;\r\n      color:#0f4c81;\r\n      cursor:pointer;\r\n      font-size:18px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n    }\r\n\r\n    .sk-close-btn:hover{\r\n      background:red;\r\n      color:#fff;\r\n    }\r\n\r\n    /* BODY */\r\n\r\n    .sk-contact-body{\r\n      padding:20px;\r\n    }\r\n\r\n    .sk-info-box{\r\n      display:flex;\r\n      gap:15px;\r\n      /* margin-bottom:20px; */\r\n      align-items:flex-start;\r\n    }\r\n\r\n    .sk-info-box i{\r\n      width:45px;\r\n      height:45px;\r\n      background:#1ea5fc;\r\n      color:#fff;\r\n      border-radius:50%;\r\n      display:flex;\r\n      align-items:center;\r\n      justify-content:center;\r\n      font-size:18px;\r\n      flex-shrink:0;\r\n    }\r\n\r\n    .sk-info-text h4{\r\n      margin-bottom:5px;\r\n      color:#222;\r\n      font-size:16px;\r\n    }\r\n\r\n    .sk-info-text p,\r\n    .sk-info-text a{\r\n      color:#555;\r\n      text-decoration:none;\r\n      font-size:14px;\r\n      line-height:1.6;\r\n    }\r\n\r\n    .sk-info-text a:hover{\r\n      color:#1ea5fc;\r\n    }\r\n\r\n    /* BUTTON */\r\n\r\n    .sk-contact-btn{\r\n      display:block;\r\n      width:100%;\r\n      text-align:center;\r\n      text-decoration:none;\r\n      background:linear-gradient(135deg,#003399,#1ea5fc);\r\n      color:#fff;\r\n      padding:14px;\r\n      border-radius:10px;\r\n      font-weight:bold;\r\n      transition:0.3s;\r\n      margin-top:10px;\r\n    }\r\n\r\n    .sk-contact-btn:hover{\r\n      transform:translateY(-2px);\r\n      box-shadow:0 8px 20px rgba(30,165,252,0.3);\r\n    }\r\n\r\n    /* MOBILE */\r\n\r\n    @media(max-width:480px){\r\n      .sk-open-btn{\r\n        top:60%;\r\n        padding:14px 9px;\r\n        font-size:14px;\r\n        border-radius:10px 0 0 10px;\r\n      }\r\n\r\n      .sk-contact-side{\r\n        width:90%;\r\n      }\r\n\r\n      .sk-contact-side.sk-active{\r\n        right:5%;\r\n      }\r\n\r\n    }\r\n\r\n  </style>",
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
    <img src="./SK_Holidays-Australia-Cover.jpg" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4>Australia</h4>
   <p>Australia is a vast and diverse country known for its natural wonders, modern cities, and unique wildlife. It is home to world-famous attractions like the Sydney Opera House, Great Barrier Reef, and Uluru. The country offers a variety of landscapes, from tropical beaches and rainforests to deserts and snowy mountains. Australia’s major cities—Sydney, Melbourne, Brisbane, and Perth—are vibrant hubs of culture, cuisine, and entertainment. English is the official language, and the local currency is the Australian Dollar (AUD). Visitors can enjoy activities such as surfing, snorkeling, hiking, and wildlife spotting. Australia has a strong Indigenous heritage, with Aboriginal culture deeply woven into its identity. The climate varies by region, with summer from December to February and winter from June to August.</p>
  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center" style="width:100%;">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Amazing sydney -------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia15.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Amazing sydney</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">6 Nights / 7 Days</p>
      </div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia14.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Amazing sydney</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">6 Nights / 7 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia13.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Amazing sydney</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">6 Nights / 7 Days</p>
      </div>
    </div></div>

<!--  Magnificient---------------------------------------------------------------------------------------------->
    <!-- basics -->
     <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia12.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Magnificient Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">12 Nights / 13 Days</p>
      </div>
    </div></div>

<!--Standard-->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia11.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Magnificient Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">12 Nights / 13 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia1.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Magnificient Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">12 Nights / 13 Days</p>
      </div>
    </div></div>


<!-- Romantic Australia ------------------------------------------------------------------------------------------------>

<!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia2.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Romantic Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">14 Nights / 15 Days</p>
      </div>
    </div></div>

<!-- Standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia3.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Romantic Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">14 Nights / 15 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia4.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Romantic Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">14 Nights / 15 Days</p>
      </div>
    </div></div>

<!-- Stunning Australia ----------------------------------------------------------------------------------------->

<!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia5.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Stunning Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">12 Nights / 13 Days</p>
      </div>
    </div></div>

<!-- Standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia6.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Stunning Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">12 Nights / 13 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia7.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - Stunning Australia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">12 Nights / 13 Days</p>
      </div>
    </div></div>
    
<!-- The Big Three ------------------------------------------------------------------------------------------->

<!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia8.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - The Big Three</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">8 Nights / 9 Days</p>
      </div>
    </div></div>

<!-- Standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia9.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - The Big Three</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">8 Nights / 9 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Australia10.jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Australia - The Big Three</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">8 Nights / 9 Days</p>
      </div>
    </div></div>

</div>
</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>Frequently Asked Questions - Australia Trip</h1>
 <div class="faq">
    <div class="faq-item">
        <h2 class="faq-question">1. When is the best time to visit Australia?</h2>
        <div class="faq-answer">
            <p>The best time to visit depends on the region. For most cities, September to November and March to May offer pleasant weather and fewer crowds.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">2. What are the top places to visit in Australia?</h2>
        <div class="faq-answer">
            <p>Must-see places include the Great Barrier Reef, Sydney Opera House, Uluru, Great Ocean Road, navy Mountains, and the beaches of Gold Coast.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">3. What activities can I enjoy in Australia?</h2>
        <div class="faq-answer">
            <p>You can explore natural parks, snorkel or dive in coral reefs, surf on world-famous beaches, enjoy wine tasting, and go on outback adventures.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">4. How do I get to Australia?</h2>
        <div class="faq-answer">
            <p>Most international visitors arrive via flights into major cities such as Sydney, Melbourne, or Brisbane, which have excellent global connectivity.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">5. What are the accommodation options in Australia?</h2>
        <div class="faq-answer">
            <p>Australia offers a range of accommodations from luxury resorts and hotels to budget hostels, motels, and camping sites in national parks.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">6. Do I need a visa to travel to Australia?</h2>
        <div class="faq-answer">
            <p>Yes, most travelers need a visa to enter Australia. You can apply online for an eVisitor or ETA (Electronic Travel Authority) depending on your nationality.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">7. What kind of food can I expect in Australia?</h2>
        <div class="faq-answer">
            <p>Australian cuisine is diverse, with influences from Europe and Asia. Try local favorites like meat pies, barbeque, fresh seafood, and bush tucker in Aboriginal communities.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">8. Is Australia safe for tourists?</h2>
        <div class="faq-answer">
            <p>Yes, Australia is considered very safe for tourists. Just follow general safety precautions and be aware of beach safety flags and wildlife warnings in nature areas.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">9. How can I travel within Australia?</h2>
        <div class="faq-answer">
            <p>You can travel by domestic flights, long-distance trains, buses, rental cars, or campervans. Major cities have reliable public transport systems.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">10. What should I pack for my trip to Australia?</h2>
        <div class="faq-answer">
            <p>Pack according to the season and destination: sunscreen, light clothes, sturdy shoes, insect repellent, swimwear, and a reusable water bottle are essentials.</p>
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


