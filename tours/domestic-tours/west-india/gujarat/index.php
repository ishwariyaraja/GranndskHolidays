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
  <img src="../../../itinerary-placeholder-tour.svg" alt="Gujarat">
</div>
<hr>
<div class="container-fluid" style="text-align: justify; width: 95%;">
  <h4>Gujarat</h4>
  <p>
    Gujarat is a state of pilgrimage, heritage, wildlife, and modern landmarks. From Dwarka and Somnath to Gir National Park, the Statue of Unity, and the historic streets of Ahmedabad, it offers a strong blend of spiritual travel and sightseeing in one long route.
  </p>
</div>
<hr>

<div class="container" style="display: flex; justify-content: center;">
  <div class="row d-flex row_cards justify-content-center align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(../../../itinerary-placeholder-tour.svg); background-size: cover;">
          <p style="background-color:#000080;">7 Nights / 8 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Gujarat Basic Pack</h5>
          <h4 class="card-title">Trip to Gujarat</h4>
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
            <a href="Itinerary/GujaratBasic.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(../../../itinerary-placeholder-tour.svg); background-size: cover;">
          <p style="background-color:#000080;">7 Nights / 8 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Gujarat Standard Pack</h5>
          <h4 class="card-title">Trip to Gujarat</h4>
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
            <a href="Itinerary/GujaratStandard.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12" style="display:flex; justify-content:center; align-items:center; margin:auto;">
      <div class="card">
        <div class="card-image" style="background-image: url(../../../itinerary-placeholder-tour.svg); background-size: cover;">
          <p style="background-color:#000080;">7 Nights / 8 Days</p>
        </div>
        <div class="card-content">
          <h5>GRAND SK Holidays-India-Gujarat Premium Pack</h5>
          <h4 class="card-title">Trip to Gujarat</h4>
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
            <a href="Itinerary/GujaratPremium.php"><button type="button" class="btn btn-primary" data-bs-toggle="modal">View Itinerary</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/../../../../footer.php'; ?>
