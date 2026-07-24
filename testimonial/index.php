<?php
$SK_PAGE_ASSETS = [
    "<link rel=\"stylesheet\" href=\"styles.css\">",
];
include __DIR__ . '/header.php';
?>
  <header class="hero">
    <div>
      <p class="kicker">Customer stories</p>
      <h1>GRAND SK Holidays Testimonials</h1>
      <p>Published photos and videos from the admin dashboard appear here automatically in this browser.</p>
    </div>
    <aside class="score-card">
      <strong>4.9</strong>
      <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <span>Trusted by happy travellers</span>
    </aside>
  </header>

  <main>
    <section class="section" id="videos">
      <div class="section-head">
        <div>
          <p class="kicker">Video carousel</p>
          <h2>Travel moments from our guests</h2>
        </div>
        <span class="counter" id="videoCounter">0 videos</span>
      </div>

      <div class="carousel-card">
        <div class="stage" id="videoStage">
          <div class="empty-state">No published videos yet.</div>
        </div>
        <div class="carousel-bar">
          <button class="arrow-btn" type="button" data-video-prev aria-label="Previous video">&#8249;</button>
          <span class="slide-name" id="videoLabel">Publish videos from dashboard</span>
          <button class="arrow-btn" type="button" data-video-next aria-label="Next video">&#8250;</button>
        </div>
      </div>
    </section>

    <section class="section" id="images">
      <div class="section-head">
        <div>
          <p class="kicker">Image carousel</p>
          <h2>Smiles from recent trips</h2>
        </div>
        <span class="counter" id="imageCounter">0 images</span>
      </div>

      <div class="carousel-card">
        <div class="stage" id="imageStage">
          <div class="empty-state">No published images yet.</div>
        </div>
        <div class="carousel-bar">
          <button class="arrow-btn" type="button" data-image-prev aria-label="Previous image">&#8249;</button>
          <span class="slide-name" id="imageLabel">Publish images from dashboard</span>
          <button class="arrow-btn" type="button" data-image-next aria-label="Next image">&#8250;</button>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="section-head">
        <div>
          <p class="kicker">Gallery</p>
          <h2>Published photo gallery</h2>
        </div>
      </div>
      <div class="photo-grid" id="photoGrid"></div>
    </section>

    <section class="section">
      <div class="section-head">
        <div>
          <p class="kicker">Reviews</p>
          <h2>What our travellers say</h2>
        </div>
      </div>
      <div class="reviews">
        <article class="review-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>Dubai trip was perfectly organized. Premium hotels, smooth transfers, and quick support from the team.</p>
          <div class="review-profile"><div class="avatar">RK</div><strong>Ravi Kumar</strong></div>
        </article>
        <article class="review-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>Our family loved every moment. The resort suggestion, activities, and travel timing were handled beautifully.</p>
          <div class="review-profile"><div class="avatar">PR</div><strong>Priya Rajan</strong></div>
        </article>
        <article class="review-card">
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p>The Kerala backwater trip was peaceful and well planned. Houseboat, food, and driver coordination were excellent.</p>
          <div class="review-profile"><div class="avatar">SV</div><strong>Suresh Venkat</strong></div>
        </article>
      </div>
    </section>
  </main>

 
   
  <script>
    const STORAGE_KEY = "grandSkTestimonialMedia";
    const fallbackImages = [
      { name: "Dubai", url: "../Bestselling/dubai.jpg" },
      { name: "Maldives", url: "../Bestselling/maldives.jpg" },
      { name: "Kerala", url: "../image_45/Kerala.jpg" }
    ];
    const fallbackVideos = [
      { name: "GRAND SK Travel", url: "../4791166-uhd_3840_2160_30fps.mp4" }
    ];

    let imageIndex = 0;
    let videoIndex = 0;
    let media = loadMedia();

    function loadMedia() {
      try {
        const stored = JSON.parse(localStorage.getItem(STORAGE_KEY));
        return {
          images: stored?.images?.length ? stored.images : fallbackImages,
          videos: stored?.videos?.length ? stored.videos : fallbackVideos
        };
      } catch (error) {
        return { images: fallbackImages, videos: fallbackVideos };
      }
    }

    function renderImage() {
      const stage = document.getElementById("imageStage");
      const label = document.getElementById("imageLabel");
      const counter = document.getElementById("imageCounter");
      const items = media.images || [];

      counter.textContent = `${items.length} images`;
      if (!items.length) {
        stage.innerHTML = `<div class="empty-state">No published images yet.</div>`;
        label.textContent = "Publish images from dashboard";
        return;
      }

      const item = items[imageIndex];
      stage.innerHTML = `<img src="${item.url}" alt="${item.name || "Published testimonial image"}">`;
      label.textContent = `${imageIndex + 1} / ${items.length} - ${item.name || "Published image"}`;
    }

    function renderVideo() {
      const stage = document.getElementById("videoStage");
      const label = document.getElementById("videoLabel");
      const counter = document.getElementById("videoCounter");
      const items = media.videos || [];

      counter.textContent = `${items.length} videos`;
      if (!items.length) {
        stage.innerHTML = `<div class="empty-state">No published videos yet.</div>`;
        label.textContent = "Publish videos from dashboard";
        return;
      }

      const item = items[videoIndex];
      stage.innerHTML = `<video src="${item.url}" controls muted playsinline></video>`;
      label.textContent = `${videoIndex + 1} / ${items.length} - ${item.name || "Published video"}`;
    }

    function renderGallery() {
      const grid = document.getElementById("photoGrid");
      const items = media.images || [];
      grid.innerHTML = items.map(item => `
        <figure class="photo-card">
          <img src="${item.url}" alt="${item.name || "Published testimonial image"}">
          <figcaption>${item.name || "Published image"}</figcaption>
        </figure>
      `).join("");
    }

    function moveImage(direction) {
      const total = media.images.length;
      if (!total) return;
      imageIndex = (imageIndex + direction + total) % total;
      renderImage();
    }

    function moveVideo(direction) {
      const total = media.videos.length;
      if (!total) return;
      videoIndex = (videoIndex + direction + total) % total;
      renderVideo();
    }

    document.querySelector("[data-image-prev]").addEventListener("click", () => moveImage(-1));
    document.querySelector("[data-image-next]").addEventListener("click", () => moveImage(1));
    document.querySelector("[data-video-prev]").addEventListener("click", () => moveVideo(-1));
    document.querySelector("[data-video-next]").addEventListener("click", () => moveVideo(1));

    renderVideo();
    renderImage();
    renderGallery();
  </script>
<?php include __DIR__ . '/footer.php'; ?>
