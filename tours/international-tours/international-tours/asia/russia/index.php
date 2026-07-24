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
 <!-- <button class="testimonial-btn" onclick="window.location.href='testimonials.php'">
    Testimonials
</button> -->

<!-- ===== CONTENT ===== -->
    
   <div class="background_main">
    <img src="SK-Holidays_Russia (1).jpg" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4> Russia </h4>
   <p>Russia is the largest country in the world, spanning Eastern Europe and northern Asia, with diverse landscapes including tundra, forests, mountains, and lakes. Its capital, Moscow, is known for the iconic Kremlin and Red Square, while St. Petersburg boasts grand palaces and cultural landmarks. Russia has a rich history marked by czarist rule, the Soviet era, and its modern federal republic. The Trans-Siberian Railway, the longest railway line in the world, offers a unique way to explore the vast country. Russian is the official language, and the local currency is the Russian Ruble (RUB). The country experiences extreme seasonal contrasts, from freezing winters to warm summers. Russia is renowned for its contributions to literature, ballet, classical music, and space exploration. Popular attractions include Lake Baikal, the Hermitage Museum, and the Golden Ring cities.</p>
  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center" style="width:100%;">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Russia-Moscow  Packages -->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(2\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Russia - Moscow</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(3\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Russia - Moscow</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">  
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(4\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Russia - Moscow</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--  Russia - St. Petersburg  Pakages-->
    <!-- basics -->
     <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(5\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Russia - St. Petersburg</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--Standard-->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(6\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Russia - St. Petersburg</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(7\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Russia - St. Petersburg</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">4 Nights / 5 Days</p>
      </div>
    </div></div>

<!--  Russia Pakages-->
    <!-- basics -->
     <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(8\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Basic Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Extravagance in Russia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">6 Nights / 7 Days</p>
      </div>
    </div></div>

<!--Standard-->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(9\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Standard Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Extravagance in Russia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">6 Nights / 7 Days</p>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(SK-Holidays_Russia\ \(10\).jpg); background-size: cover;">
      </div>
      <div class="card-content tour-card-content" style="display:flex; flex-direction:column; align-items:center; justify-content:center; text-align:center; gap:12px; min-height:150px; padding:22px 18px 26px;">
        <h5 class="tour-card-pack" style="margin:0; width:100%;">Premium Package</h5>
        <h4 class="card-title" style="margin:0; width:100%;">Extravagance in Russia</h4>
        <p class="tour-card-duration" style="margin:0; display:inline-block; background-color:#0b4aa2; color:#ffffff; padding:10px 18px; border-radius:999px; font-weight:700;">6 Nights / 7 Days</p>
      </div>
    </div></div>
</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>Frequently Asked Questions - Russia</h1>
  <div class="faq">
    <div class="faq-item">
        <h2 class="faq-question">1. When is the best time to visit Russia?</h2>
        <div class="faq-answer">
            <p>The best time to visit Russia is from May to September when the weather is mild, and the days are longer for sightseeing and outdoor activities.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">2. What are the top places to visit in Russia?</h2>
        <div class="faq-answer">
            <p>Must-visit places include Moscow's Red Square, St. Basil’s Cathedral, St. Petersburg’s Hermitage Museum, Lake Baikal, and the Trans-Siberian Railway route.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">3. Do I need a visa to travel to Russia?</h2>
        <div class="faq-answer">
            <p>Yes, most travelers need a visa to enter Russia. It's best to check with the Russian consulate or embassy in your country before planning your trip.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">4. What is the local currency in Russia?</h2>
        <div class="faq-answer">
            <p>The official currency is the Russian Ruble (RUB). Credit cards are widely accepted in cities, but cash is useful for rural areas and local markets.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">5. Is English widely spoken in Russia?</h2>
        <div class="faq-answer">
            <p>English is spoken in tourist areas, hotels, and big cities, but learning a few basic Russian phrases can be very helpful.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">6. What is traditional Russian cuisine like?</h2>
        <div class="faq-answer">
            <p>Russian cuisine includes hearty dishes like borscht, pelmeni (dumplings), blini (pancakes), beef stroganoff, and caviar. Bread and soups are common staples.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">7. How do I get around in Russia?</h2>
        <div class="faq-answer">
            <p>You can travel by domestic flights, long-distance trains like the Trans-Siberian Railway, metro systems in big cities, or buses and taxis.</p>
        </div>
    </div>

    <div class="faq-item">
        <h2 class="faq-question">8. Are there any cultural customs I should be aware of?</h2>
        <div class="faq-answer">
            <p>Yes, it's respectful to greet with a handshake, remove shoes before entering homes, and avoid discussing politics or sensitive topics. Dress modestly in churches.</p>
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

