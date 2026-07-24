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
    <img src="./1.jpg" alt="">
    <!-- <img src="./Images/hawaii.png"> -->
   </div>
   <hr>
   <div class="container-fluid" style="text-align: justify; width: 95%;">
   <h4>Goa</h4>
   <p>
    Goa is a coastal paradise tucked away on the western shore of India, known for its laid-back vibe, sun-soaked beaches, and vibrant fusion of Indian and Portuguese cultures. Unlike any other place in the country, Goa moves to its own rhythm�a mix of lazy afternoons by the sea, colorful festivals, colonial-era charm, and energetic nightlife.

The coastline stretches with golden sands and swaying palm trees, where each beach has its own character. North Goa buzzes with life�filled with beach shacks, music, flea markets, and parties that last until sunrise. In contrast, South Goa offers peace and seclusion, with quieter, more pristine beaches and luxurious retreats ideal for rest and reflection.
   </p>
  </div>
<hr>
<!-- columns -->
<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex  row_cards justify-content-center align-items-center">
    <!-- <div class="col-9">.col-9</div> -->
<!-- Goa Packages 1N2D-------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./2.jpg); background-size: cover;">
        <p style="background-color:#000080;">1 Night / 2 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Basic Pack</h5>
          <h4 class="card-title">Trip to Goa </h4><hr>
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
              <a href="../goa/Itinerary/SK-Holidays_Goa-Basics1N2D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./3.jpeg); background-size: cover;">
        <p style="background-color:#000080;">1 Night / 2 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Goa </h4>        
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
            <a href="../goa/Itinerary/SK-Holidays_Goa-Standard1N2D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./4.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 1 Night / 2 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Goa </h4>        
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
            <a href="../goa/Itinerary/SK-Holidays_Goa-Premium1N2D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>

    <!-- Goa Packages 2N3D-------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./5.jpg); background-size: cover;">
        <p style="background-color:#000080;">2 Nights / 3 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Basic Pack</h5>
          <h4 class="card-title">Trip to Goa </h4><hr>
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
              <a href="../goa/Itinerary/SK-Holidays_Goa-Basics2N3D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary </button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./6.jpg); background-size: cover;">
        <p style="background-color: #000080;">2 Nights / 3 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Goa </h4>        
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
            <a href="../goa/Itinerary/SK-Holidays_Goa-Standard2N3D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./7.jpg); background-size: cover;">
        <p style="background-color:#000080;"> 2 Nights / 3 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Goa </h4>        
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
            <a href="../goa/Itinerary/SK-Holidays_Goa-Premium2N3D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>


    <!-- Goa Packages 1N2D-------------------------------------------------------------------------------------------->

    <!-- basics -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./8.jpg); background-size: cover;">
        <p style="background-color:#000080;">3 Nights / 4 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Basic Pack</h5>
          <h4 class="card-title">Trip to Goa </h4><hr>
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
            <a href="../goa/Itinerary/SK-Holidays_Goa-Basics3N4D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
</div></div>
    </div></div>

<!-- standard -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./9.jpg); background-size: cover;">
        <p style="background-color: #000080;">3 Nights / 4 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Standard Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Goa </h4>        
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
            <a href="../goa/Itinerary/SK-Holidays_Goa-Standard3N4D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
      </div>
    </div></div>

   <!-- Premium -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;"><div class="card">
      <div class="card-image" style="background-image: url(./10.jpg); background-size: cover;">
        <p style="background-color:#000080;">3 Nights / 4 Days</p>
      </div>
      <div class="card-content">
        <h5>Grand SK Holidays-India-Goa Premium Pack</h5>
        <div style="display: flex; justify-content: space-between;">
          <h4 class="card-title">Trip to Goa </h4>        
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
            <a href="../goa/Itinerary/SK-Holidays_Goa-Premium3N4D.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">View Itinerary</button></a>
            </div>
      </div>
    </div></div>


</div>
</div>

<!-- faq -->
 <hr>
<div class="container" style="margin-top: 35px;">
  <h1>FAQ - Goa Trip</h1>
  <div class="faq">
      <div class="faq-item">
          <h2 class="faq-question">1. When is the best time to visit Goa?</h2>
          <div class="faq-answer">
              <p>The best time to visit Goa is between November and February, when the weather is pleasant, and the beaches and festivals are in full swing.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">2. What are the must-visit places in Goa?</h2>
          <div class="faq-answer">
              <p>Must-visit places include Baga Beach, Calangute, Anjuna, Vagator, Fort Aguada, Basilica of Bom Jesus, Dudhsagar Falls, and Palolem Beach.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">3. What activities can I do in Goa?</h2>
          <div class="faq-answer">
              <p>You can enjoy water sports, beach parties, explore heritage churches, visit spice plantations, try Goan cuisine, and take sunset cruises.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">4. How do I reach Goa?</h2>
          <div class="faq-answer">
              <p>Goa is accessible by air via Dabolim Airport (GOI), by rail through major stations like Madgaon and Vasco da Gama, and by road from nearby states.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">5. What are the accommodation options in Goa?</h2>
          <div class="faq-answer">
              <p>Goa offers a range of stays�from beach resorts and boutique hotels to budget hostels, homestays, and luxury villas.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">6. Do I need any permits to visit Goa?</h2>
          <div class="faq-answer">
              <p>No permits are required for Indian or foreign tourists to visit Goa.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">7. What is the local cuisine like?</h2>
          <div class="faq-answer">
              <p>Goan cuisine blends Indian and Portuguese flavors. Try dishes like fish curry rice, vindaloo, xacuti, bebinca, and feni (a local spirit).</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">8. Are there any health precautions I should take?</h2>
          <div class="faq-answer">
              <p>Use sunscreen, stay hydrated, avoid drinking tap water, and choose hygienic food outlets. During monsoon, be cautious with water activities.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">9. Is Goa safe for tourists?</h2>
          <div class="faq-answer">
              <p>Goa is generally safe for tourists. Stick to well-known beaches at night, avoid isolated areas, and secure valuables when traveling.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">10. What is the local currency, and should I carry cash?</h2>
          <div class="faq-answer">
              <p>The local currency is Indian Rupee (INR). Most places accept digital payments, but carry some cash for small vendors and beach shacks.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">11. How do I get around Goa?</h2>
          <div class="faq-answer">
              <p>You can rent scooters or bikes, hire taxis, or use app-based cabs. Local buses are also available but may not cover all tourist spots.</p>
          </div>
      </div>

      <div class="faq-item">
          <h2 class="faq-question">12. What should I pack for my Goa trip?</h2>
          <div class="faq-answer">
              <p>Pack light cotton clothes, swimwear, flip-flops, sunscreen, sunglasses, beachwear, insect repellent, and a valid ID proof.</p>
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

