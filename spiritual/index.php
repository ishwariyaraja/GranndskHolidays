<?php
$SK_PAGE_ASSETS = [
    "<script src=\"./script.js\"></script>"
];
include __DIR__ . '/../header.php';
?>

<header class="spiritual-header text-center">
    <div class="container header-text">
        <h1 class="display-4 fw-bold">Spiritual Journeys</h1>
        <p class="lead">Discover inner peace through sacred travels</p>
    </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="mb-12">
                <h2 class="section-title">SPIRITUAL JOURNEYS</h2>
                <p class="spiritual-intro">
                    Welcome to a journey of the soul, where travel becomes a sacred path and every step leads inward.
                    Our spiritual holidays are crafted to reconnect you with peace, presence, and purpose.
                </p>
            </div>

            <hr class="my-5">

            <div class="row row_cards justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card destination-card">
                        <div class="card-image" style="background-image: url('./Spiritual15/shiradi.jpg');">
                            <span class="card-image-duration">3 Days</span>
                            <h4 class="card-image-name">Shirdi</h4>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title text-center">Shirdi</h4>
                            <hr>
                            <div class="amenities mb-4">
                                <div class="row d-flex align-items-start">
                                    <div class="col-2"><div class="amenity-icon"><i class="fas fa-hotel"></i></div><div class="amenity-label">Hotel</div></div>
                                    <div class="col-2"><div class="amenity-icon"><i class="fas fa-utensils"></i></div><div class="amenity-label">Meal</div></div>
                                    <div class="col-2"><div class="amenity-icon"><i class="fas fa-bus"></i></div><div class="amenity-label">Travel</div></div>
                                    <div class="col-2"><div class="amenity-icon"><i class="fas fa-plane"></i></div><div class="amenity-label">Flight</div></div>
                                    <div class="col-2"><div class="amenity-icon"><i class="fas fa-user"></i></div><div class="amenity-label">Guide</div></div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="Itinerary/shirdi.php" class="btn btn-book">View Itinerary</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../footer.php'; ?>
