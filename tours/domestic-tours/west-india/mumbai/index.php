<?php
$SK_PAGE_ASSETS = [
    "<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap\" rel=\"stylesheet\">",
    "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">",
    "<script src=\"../../../../scricpt.js\"></script>",
];
include __DIR__ . '/../../../../header.php';
?>

<div class="background_main">
  <img src="../../../itinerary-placeholder-tour.svg" alt="Mumbai">
</div>
<hr>
<div class="container-fluid" style="text-align: justify; width: 95%;">
  <h4>Mumbai</h4>
  <p>
    Mumbai mixes sea views, film-city energy, iconic landmarks, and nonstop city life. This 4 nights / 5 days plan follows the route from the PDF with Gateway of India, Bandra Worli Sea Link, Marine Drive, and the city highlights.
  </p>
</div>
<hr>

<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex row_cards justify-content-center align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(../../../itinerary-placeholder-tour.svg); background-size: cover;">
          <p style="background-color:#000080;">4 Nights / 5 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Mumbai Basic Pack</h5>
          <h4 class="card-title">Trip to Mumbai</h4>
          <hr>
          <div class="vl">
            <div class="row d-flex align-items-start">
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png"></div>
            </div>
          </div>
          <hr>
          <div class="container d-flex justify-content-center">
            <a href="Itinerary/MumbaiBasic.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(../../../itinerary-placeholder-tour.svg); background-size: cover;">
          <p style="background-color:#000080;">4 Nights / 5 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Mumbai Standard Pack</h5>
          <h4 class="card-title">Trip to Mumbai</h4>
          <hr>
          <div class="vl">
            <div class="row d-flex align-items-start">
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png"></div>
            </div>
          </div>
          <hr>
          <div class="container d-flex justify-content-center">
            <a href="Itinerary/MumbaiStandard.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(../../../itinerary-placeholder-tour.svg); background-size: cover;">
          <p style="background-color:#000080;">4 Nights / 5 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Mumbai Premium Pack</h5>
          <h4 class="card-title">Trip to Mumbai</h4>
          <hr>
          <div class="vl">
            <div class="row d-flex align-items-start">
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Hotel4.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Meal.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Travel.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/sight-seeing.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Flight.png"></div>
              <div class="col-2"><img src="<?php echo $SK_ROOT_PREFIX; ?>tours/Icons/Guide.png"></div>
            </div>
          </div>
          <hr>
          <div class="container d-flex justify-content-center">
            <a href="Itinerary/MumbaiPremium.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../../../../footer.php'; ?>
