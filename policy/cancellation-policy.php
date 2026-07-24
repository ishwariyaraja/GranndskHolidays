<?php
$policies = [
    'privacy' => ['slug' => 'privacy-policy', 'title' => 'Privacy Policy'],
    'terms' => ['slug' => 'terms-and-conditions', 'title' => 'Terms & Conditions'],
    'refund' => ['slug' => 'refund-policy', 'title' => 'Refund Policy'],
    'cancellation' => ['slug' => 'cancellation-policy', 'title' => 'Cancellation Policy'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cancellation Policy - GRAND SK Holidays Pvt. Ltd.</title>
  <meta name="description" content="Cancellation Policy for GRAND SK Holidays Pvt. Ltd.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="policy-theme.css">
</head>
<body class="policy-page">
<div class="policy-shell">
  <header class="policy-hero">
    <div class="policy-container">
      <a class="policy-brand" href="https://grandskholidays.com/" target="_blank" rel="noreferrer">
        <span class="policy-brand__mark">GRAND SK</span>
        <span class="policy-brand__text">GRAND SK Holidays Pvt. Ltd.</span>
      </a>
      <p class="policy-hero__eyebrow">Legal Page</p>
      <h1>Cancellation Policy</h1>
      <p class="policy-hero__subtitle">Cancellation charges and timelines for tour packages and related travel services.</p>
      <div class="policy-meta">
        <span>Effective Date: July 2025</span>
        <span>+91 97505 26684</span>
        <span>sales@grandskholidays.com</span>
      </div>
    </div>
  </header>

  <section class="policy-nav">
    <div class="policy-container">
      <div class="policy-nav__card">
        <p class="policy-nav__label">Policies</p>
        <div class="policy-nav__links">
          <?php foreach ($policies as $key => $item): ?>
            <a class="<?php echo $key === 'cancellation' ? 'is-active' : ''; ?>" href="<?php echo $item['slug']; ?>.php"><?php echo $item['title']; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <main class="policy-main">
    <div class="policy-container policy-layout">
      <article class="policy-card">
        <p class="policy-intro">Cancellation charges depend on airline, hotel, transport and other supplier rules.</p>
        <section class="policy-section"><h2>Cancellation Charges</h2><p>Charges may vary by booking type and service provider. Earlier cancellations generally attract lower charges while late cancellations may be fully chargeable.</p></section>
        <section class="policy-section"><h2>No Show / Late Cancellation</h2><p>No refund is usually provided for no-shows or cancellations made very close to the travel date.</p></section>
        <section class="policy-section"><h2>Supplier Terms</h2><p>Supplier-specific conditions for airlines, hotels, cruise operators and visa processing will apply in addition to our own charges.</p></section>
        <section class="policy-section"><h2>Force Majeure</h2><p>Events such as weather, natural disasters, strikes or government restrictions may affect cancellation outcomes based on supplier rules.</p></section>
      </article>
      <aside class="policy-aside">
        <div class="policy-aside__card policy-aside__card--accent">
          <p class="policy-aside__eyebrow">Need help?</p>
          <h2>Contact Support</h2>
          <p>Our team can help with cancellation questions and refund timing.</p>
          <a class="policy-button" href="mailto:sales@grandskholidays.com">Email Support</a>
        </div>
        <div class="policy-aside__card">
          <p class="policy-aside__eyebrow">Quick links</p>
          <ul class="policy-aside__list">
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
            <li><a href="terms-and-conditions.php">Terms &amp; Conditions</a></li>
            <li><a href="refund-policy.php">Refund Policy</a></li>
          </ul>
        </div>
      </aside>
    </div>
  </main>

  <footer class="policy-footer">
    <div class="policy-container policy-footer__top">
      <div class="policy-footer__brand">
        <span class="policy-footer__brand-title">GRAND SK Holidays Pvt. Ltd.</span>
        <p>Crafting honeymoon, spiritual and cruise journeys across South India and beyond.</p>
      </div>
      <div class="policy-footer__links">
        <a href="privacy-policy.php">Privacy Policy</a>
        <a href="terms-and-conditions.php">Terms &amp; Conditions</a>
        <a href="refund-policy.php">Refund Policy</a>
        <a href="cancellation-policy.php">Cancellation Policy</a>
      </div>
      <div class="policy-footer__contact">
        <p><strong>Call:</strong> +91 97505 26684</p>
        <p><strong>Email:</strong> sales@grandskholidays.com</p>
        <p><strong>Website:</strong> www.grandskholidays.com</p>
      </div>
    </div>
    <div class="policy-footer__bottom">
      <div class="policy-container policy-footer__bottom-inner">
        <p>&copy; <?php echo date('Y'); ?> GRAND SK Holidays Pvt. Ltd. All rights reserved.</p>
        <p>Cancellation Policy</p>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
