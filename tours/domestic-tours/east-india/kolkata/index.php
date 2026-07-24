<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
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
    <img src="./5.jpg" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4>Kolkata</h4>
   <p>Kolkata, formerly known as Calcutta, is the vibrant capital of West Bengal and one of India�s most culturally and historically rich cities, blending colonial heritage with modern dynamism. Founded as an East India Company trading post in 1690 and later serving as the capital of British India until 1911, Kolkata is steeped in history, evident in its iconic colonial-era architecture such as the Victoria Memorial, Writers building, and St. Paul cathedral. Located on the eastern bank of the Hooghly River, the city is known for its bustling streets, historic trams, the famous Howrah Bridge, and a deeply rooted intellectual and artistic legacy that produced luminaries like Rabindranath Tagore, Satyajit Ray, and Swami Vivekananda. A hub of literature, cinema, and political thought, Kolkata thrives on its love for ntellectual conversation), its passion for football and cricket, and its unmatched cultural fervor, particularly during the grand celebration of Durga Puja.
</p>
  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Andaman Packages -------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./1.jpg); background-size: cover;">
        <p style="background-color:#000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Kolkata Basic Pack</h5>
          <h4 class="card-title">Trip to Kolkata </h4><hr>
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
              <a href="../kolkata/Itinerary/SK-holidays_kolkata.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(./2.jpg); background-size: cover;">
        <p style="background-color: #000080;">4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Kolkata Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Kolkata </h4>        
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
            <a href="../kolkata/Itinerary/SK-holidays_standard.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; justify-content: center; align-items: center; margin: auto;"><div class="card">
      <div class="card-image" style="background-image: url(.//3.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 4 Nights / 5 Days</p>
      </div>
      <div class="card-content">
        <h5>GRAND SK Holidays-India-Kolkata Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Kolkata </h4>        
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
            <a href="../kolkata/Itinerary/SK-holidays_perium.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>

</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>FAQ - Kolkata Trip</h1>
  <div class="faq">
      <div class="faq-item">
          <h2 class="faq-question">1. When is the best time to visit Kolkata?</h2>
          <div class="faq-answer">
              <p>The best time to visit Kolkata is from October to March when the weather is pleasant. October is especially popular for the grand Durga Puja celebrations.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">2. What are the must-visit attractions in Kolkata?</h2>
          <div class="faq-answer">
              <p>Key attractions include Victoria Memorial, Howrah Bridge, Indian Museum, Dakshineswar Kali Temple, Kalighat Temple, Marble Palace, and the Science City.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">3. What activities can I enjoy in Kolkata?</h2>
          <div class="faq-answer">
              <p>You can explore colonial architecture, enjoy tram rides, walk through College Street�s book market, try Bengali sweets, and attend cultural shows or art festivals.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">4. How do I reach Kolkata?</h2>
          <div class="faq-answer">
              <p>Kolkata is accessible by air via Netaji Subhash Chandra Bose International Airport, and by train and road from all major Indian cities.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">5. What are the accommodation options in Kolkata?</h2>
          <div class="faq-answer">
              <p>From luxury hotels and heritage properties to mid-range hotels and budget guesthouses, Kolkata offers a wide range of accommodations across the city.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">6. Do I need any permits to visit Kolkata?</h2>
          <div class="faq-answer">
              <p>No permits are needed to visit Kolkata for both Indian and foreign tourists.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">7. What is the local cuisine like?</h2>
          <div class="faq-answer">
              <p>Kolkata cuisine features Bengali dishes like fish curry (maachher jhol), shorshe ilish, mishti doi, rasgulla, kathi rolls, and street snacks like puchka (pani puri).</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">8. Are there any health precautions I should take?</h2>
          <div class="faq-answer">
              <p>Drink bottled water, avoid raw street food from unknown vendors, and carry basic medications for digestion or seasonal changes.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">9. Is Kolkata safe for tourists?</h2>
          <div class="faq-answer">
              <p>Yes, Kolkata is generally safe. Like any large city, stay aware of your surroundings, especially in crowded areas and at night. Use trusted transport services.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">10. What is the local currency, and should I carry cash?</h2>
          <div class="faq-answer">
              <p>The currency is Indian Rupee (INR). Digital payments are widely accepted, but carry cash for local markets and small eateries.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">11. How do I get around in Kolkata?</h2>
          <div class="faq-answer">
              <p>You can use the metro, trams, taxis, auto-rickshaws, and app-based cabs like Ola and Uber. The metro is efficient for avoiding traffic in busy areas.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">12. What should I pack for my Kolkata trip?</h2>
          <div class="faq-answer">
              <p>Pack light cotton clothes for summer, an umbrella or raincoat during monsoon, and a light jacket for winter. Comfortable footwear is recommended for walking tours.</p>
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

