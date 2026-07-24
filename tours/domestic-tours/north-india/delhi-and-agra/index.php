<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link rel=\"stylesheet\" href=\"../../../../sk.css\">",
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
    <img src="./Delhi.jpg" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4>Delhi</h4>
   <p>Delhi, the capital city of India, is a vibrant blend of history, culture, and modernity. It is divided into Old Delhi, known for its narrow lanes, bustling markets, and historical monuments like the Red Fort, Jama Masjid, and Chandni Chowk, and New Delhi, designed by British architect Edwin Lutyens, which serves as the seat of the Indian government with wide roads, government buildings, and landmarks such as India Gate, Rashtrapati Bhavan, and Parliament House. The city reflects a unique mix of Mughal heritage, colonial architecture, and contemporary urban life. Renowned for its diverse festivals, flavorful street food, and bustling shopping hubs, Delhi stands as both a cultural heart of India and a gateway to North Indian tourism.</p>
  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Delhi Packages -------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Delhi2.jpg); background-size: cover;">
        <p style="background-color:#000080;">2 Nights / 3 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Delhi Basic Pack</h5>
          <h4 class="card-title">Trip to Delhi </h4><hr>
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
              <a href="../delhi-and-agra/Itinerary/SK-Holidays_Delhi.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Delhi3.jpg); background-size: cover;">
        <p style="background-color: #000080;">2 Nights / 3 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Delhi Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Delhi </h4>        
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
            <a href="../delhi-and-agra/Itinerary/SK-Holidays_Delhi_Standard.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Delhi4.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 2 Nights / 3 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Delhi Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Delhi </h4>        
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
            <a href="../delhi-and-agra/Itinerary/SK-Holidays_Delhi_Premium.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>


</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>FAQ - Delhi Trip</h1>
  <div class="faq">
      <div class="faq-item">
          <h2 class="faq-question">1. When is the best time to visit Delhi?</h2>
          <div class="faq-answer">
              <p>The best time to visit Delhi is between October and March, when the weather is cooler and suitable for sightseeing and outdoor activities.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">2. What are the must-visit places in Delhi?</h2>
          <div class="faq-answer">
              <p>Must-visit attractions include the Red Fort, Qutub Minar, India Gate, Lotus Temple, Humayun�s Tomb, Akshardham Temple, and Chandni Chowk.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">3. What activities can I do in Delhi?</h2>
          <div class="faq-answer">
              <p>You can explore historical monuments, shop in bustling markets, take heritage walks, try diverse street food, and visit museums and art galleries.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">4. How do I reach Delhi?</h2>
          <div class="faq-answer">
              <p>Delhi is well connected by air, rail, and road. Indira Gandhi International Airport serves both domestic and international flights, and the city has multiple major railway stations.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">5. What are the accommodation options in Delhi?</h2>
          <div class="faq-answer">
              <p>Delhi offers a wide range of accommodations, from luxury hotels and boutique stays to budget hostels and guesthouses across different areas.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">6. Do I need any permits to visit Delhi?</h2>
          <div class="faq-answer">
              <p>No permits are required for Indian or foreign tourists to visit Delhi.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">7. What is the local cuisine like?</h2>
          <div class="faq-answer">
              <p>Delhi�s cuisine is a mix of North Indian, Mughlai, and street food. Popular dishes include chole bhature, butter chicken, kebabs, parathas, and golgappas (pani puri).</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">8. Are there any health precautions I should take?</h2>
          <div class="faq-answer">
              <p>Stay hydrated, avoid street food from unhygienic vendors, carry basic medication, and check air quality if you have respiratory issues, especially in winter.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">9. Is Delhi safe for tourists?</h2>
          <div class="faq-answer">
              <p>Delhi is generally safe, especially in tourist areas. However, it�s best to avoid isolated areas at night, be cautious with valuables, and use trusted transportation.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">10. What is the local currency, and should I carry cash?</h2>
          <div class="faq-answer">
              <p>The local currency is Indian Rupee (INR). Digital payments are widely accepted, but it�s advisable to carry some cash for local markets and small vendors.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">11. How do I get around Delhi?</h2>
          <div class="faq-answer">
              <p>Delhi has a well-connected metro system, along with taxis, auto-rickshaws, buses, and app-based cab services like Ola and Uber for easy travel.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">12. What should I pack for my Delhi trip?</h2>
          <div class="faq-answer">
              <p>Pack according to the season � light cotton clothes in summer, warm layers in winter, sunscreen, comfortable footwear, and a reusable water bottle.</p>
          </div>
      </div>
  </div>
</div>
   

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>



















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

