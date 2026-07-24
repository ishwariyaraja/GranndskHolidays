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
  <title>Terms & Conditions - GRAND SK Holidays Pvt. Ltd.</title>
  <meta name="description" content="Terms and Conditions for GRAND SK Holidays Pvt. Ltd.">
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
      <h1>Terms &amp; Conditions</h1>
      <p class="policy-hero__subtitle">Important booking, travel, liability and service conditions for all tour packages.</p>
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
            <a class="<?php echo $key === 'terms' ? 'is-active' : ''; ?>" href="<?php echo $item['slug']; ?>.php"><?php echo $item['title']; ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <main class="policy-main">
    <div class="policy-container policy-layout">
      <article class="policy-card">
        <p class="policy-intro">By booking any domestic or international tour package with GRAND SK Holidays Pvt. Ltd., you agree to the following terms.</p>
        <section class="policy-section"><h2>Booking &amp; Confirmation</h2><p>A booking is confirmed only after the required advance payment is received.</p></section>
        <section class="policy-section"><h2>Pricing &amp; Travel Documents</h2><p>Prices may change until the booking is confirmed. Travelers are responsible for valid passports, visas and other required documents.</p></section>
        <section class="policy-section"><h2>Travel Services</h2><p>Hotels, flights, vehicles and sightseeing are subject to availability, supplier rules and operational conditions.</p></section>
        <section class="policy-section"><h2>Liability</h2><p>We act as an intermediary for service providers and are not liable for issues beyond our control such as delays, cancellations, weather disruptions or supplier changes.</p></section>
      </article>
      <aside class="policy-aside">
        <div class="policy-aside__card policy-aside__card--accent">
          <p class="policy-aside__eyebrow">Need help?</p>
          <h2>Contact Support</h2>
          <p>Our team can help with booking and policy questions.</p>
          <a class="policy-button" href="mailto:sales@grandskholidays.com">Email Support</a>
        </div>
        <div class="policy-aside__card">
          <p class="policy-aside__eyebrow">Quick links</p>
          <ul class="policy-aside__list">
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
            <li><a href="refund-policy.php">Refund Policy</a></li>
            <li><a href="cancellation-policy.php">Cancellation Policy</a></li>
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
        <p>Terms &amp; Conditions</p>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
