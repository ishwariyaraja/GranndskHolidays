<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<script src=\"../../../../scricpt.js\"></script>",
    "<link rel=\"stylesheet\" href=\"../../../../sk.css\">"
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
    <img src="./Golden_triangle.png" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4>The Golden Triangle</h4>
   <p>
    The Golden Triangle is a popular tourist circuit in northern India that connects three historically and culturally rich cities: Delhi, Agra, and Jaipur. This triangular route, named for the geographic shape formed on a map, offers a diverse and immersive experience of Indias heritage, architecture, and traditions. Delhi, the capital, showcases a blend of ancient monuments and modern infrastructure, with landmarks like the Red Fort, Qutub Minar, and India Gate. Agra, home to the world-famous Taj Mahal, reflects the grandeur of the Mughal era. Jaipur, known as the Pink City, captivates visitors with its royal palaces, forts, and vibrant markets. Together, these cities provide a fascinating journey through Indias past and present, making the Golden Triangle a must-visit for travelers seeking to explore the essence of India in a short span.
   </p>
  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Andaman Packages -------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Golden_triangle.png); background-size: cover;">
        <p style="background-color:#000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Golden_triangle Basic Pack</h5>
          <h4 class="card-title">Trip to Golden Triangle </h4><hr>
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
              <a href="../golden-triangle/Itinerary/SK-Holidays_GoldenTriangle-Basic.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Golden_triangle.png); background-size: cover;">
        <p style="background-color: #000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Golden_triangle Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Golden Triangle </h4>        
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
            <a href="../golden-triangle/Itinerary/SK-Holidays_GoldenTriangle-Standard.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./Golden_triangle.png); background-size: cover;">
        <p style="background-color:#000080;"> 4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Golden_triangle Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Golden Triangle </h4>        
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
            <a href="../golden-triangle/Itinerary/SK-Holidays_GoldenTriangle-Premium.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>


</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>FAQ - Golden Triangle Trip (Delhi, Agra, Jaipur)</h1>
  <div class="faq">
      <div class="faq-item">
          <h2 class="faq-question">1. What is the Golden Triangle in India?</h2>
          <div class="faq-answer">
              <p>The Golden Triangle is a popular tourist circuit that connects Delhi, Agra, and Jaipur, forming a triangle on the map. It offers a mix of heritage, culture, and architecture.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">2. When is the best time to visit the Golden Triangle?</h2>
          <div class="faq-answer">
              <p>The best time to visit is from October to March when the weather is cooler and pleasant for sightseeing across all three cities.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">3. What are the must-visit attractions in the Golden Triangle?</h2>
          <div class="faq-answer">
              <p>Highlights include the Taj Mahal (Agra), Red Fort & India Gate (Delhi), and Amer Fort & Hawa Mahal (Jaipur), along with many temples, palaces, and markets.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">4. How many days are ideal for a Golden Triangle tour?</h2>
          <div class="faq-answer">
              <p>A typical Golden Triangle trip lasts 5 to 7 days, giving enough time to explore major sites in each city at a comfortable pace.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">5. How do I travel between the cities?</h2>
          <div class="faq-answer">
              <p>You can travel between Delhi, Agra, and Jaipur by car, train, or flight. Many travelers opt for private tours or drive for flexibility and comfort.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">6. Do I need any permits to travel the Golden Triangle route?</h2>
          <div class="faq-answer">
              <p>No special permits are required for Indian or foreign tourists to travel along the Golden Triangle route.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">7. What is the cuisine like in the Golden Triangle region?</h2>
          <div class="faq-answer">
              <p>You�ll enjoy a rich variety of North Indian food: Mughlai cuisine in Delhi, sweet and spicy dishes in Agra, and Rajasthani specialties like dal baati churma in Jaipur.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">8. Is the Golden Triangle safe for travelers?</h2>
          <div class="faq-answer">
              <p>Yes, the route is popular and well-traveled. Take usual precautions, avoid isolated areas at night, and secure your belongings in crowded places.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">9. What is the best way to book a Golden Triangle tour?</h2>
          <div class="faq-answer">
              <p>You can book through travel agencies, tour operators, or plan independently. Many offer customizable packages with transport, hotels, and guides included.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">10. What should I pack for a Golden Triangle trip?</h2>
          <div class="faq-answer">
              <p>Carry lightweight clothing (or warm clothes in winter), sunscreen, comfortable shoes, a water bottle, and appropriate attire for temple visits.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">11. Is there good mobile and internet connectivity?</h2>
          <div class="faq-answer">
              <p>Yes, all three cities have good mobile and internet coverage. Most hotels and cafes offer free Wi-Fi, and SIM cards are easily available for tourists.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">12. Can I customize the Golden Triangle route?</h2>
          <div class="faq-answer">
              <p>Yes! Many travelers extend the route to include destinations like Ranthambore, Udaipur, or Varanasi. Custom tours are easily available.</p>
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

