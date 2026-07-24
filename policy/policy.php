<?php

$site = require __DIR__ . '/policy-data.php';
$policies = $site['policies'];

$requested = $policyKey ?? ($_GET['page'] ?? 'privacy');
if (!isset($policies[$requested])) {
    $requested = 'privacy';
}

$policy = $policies[$requested];
$brand = $site['brand'];

function policySlugLink(string $slug): string
{
    return $slug . '.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($policy['title'] . ' - ' . $brand['name'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($policy['subtitle'], ENT_QUOTES, 'UTF-8'); ?>">
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
                <span class="policy-brand__text"><?php echo htmlspecialchars($brand['name'], ENT_QUOTES, 'UTF-8'); ?></span>
            </a>
            <p class="policy-hero__eyebrow">Brand-aligned legal page</p>
            <h1><?php echo htmlspecialchars($policy['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="policy-hero__subtitle"><?php echo htmlspecialchars($policy['subtitle'], ENT_QUOTES, 'UTF-8'); ?></p>
            <div class="policy-meta">
                <span>Effective Date: <?php echo htmlspecialchars($policy['effective'], ENT_QUOTES, 'UTF-8'); ?></span>
                <span><?php echo htmlspecialchars($brand['phone'], ENT_QUOTES, 'UTF-8'); ?></span>
                <span><?php echo htmlspecialchars($brand['email'], ENT_QUOTES, 'UTF-8'); ?></span>
            </div>
        </div>
    </header>

    <section class="policy-nav">
        <div class="policy-container">
            <div class="policy-nav__card">
                <p class="policy-nav__label">Policies</p>
                <div class="policy-nav__links">
                    <?php foreach ($policies as $key => $item): ?>
                        <a class="<?php echo $key === $requested ? 'is-active' : ''; ?>" href="<?php echo htmlspecialchars(policySlugLink($item['slug']), ENT_QUOTES, 'UTF-8'); ?>">
                            <?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <main class="policy-main">
        <div class="policy-container policy-layout">
            <article class="policy-card">
                <p class="policy-intro"><?php echo htmlspecialchars($policy['intro'], ENT_QUOTES, 'UTF-8'); ?></p>

                <?php foreach ($policy['sections'] as $section): ?>
                    <section class="policy-section">
                        <h2><?php echo htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <?php echo $section['html']; ?>
                    </section>
                <?php endforeach; ?>
            </article>

            <aside class="policy-aside">
                <div class="policy-aside__card policy-aside__card--accent">
                    <p class="policy-aside__eyebrow">Need help?</p>
                    <h2>Contact Support</h2>
                    <p>Our team can help with booking questions, policy clarifications and service requests.</p>
                    <a class="policy-button" href="mailto:<?php echo htmlspecialchars($brand['email'], ENT_QUOTES, 'UTF-8'); ?>">Email Support</a>
                </div>

                <div class="policy-aside__card">
                    <p class="policy-aside__eyebrow">Quick facts</p>
                    <ul class="policy-aside__list">
                        <li>Company: <?php echo htmlspecialchars($brand['name'], ENT_QUOTES, 'UTF-8'); ?></li>
                        <li>Website: <?php echo htmlspecialchars($brand['website'], ENT_QUOTES, 'UTF-8'); ?></li>
                        <li>Phone: <?php echo htmlspecialchars($brand['phone'], ENT_QUOTES, 'UTF-8'); ?></li>
                        <li>Email: <?php echo htmlspecialchars($brand['email'], ENT_QUOTES, 'UTF-8'); ?></li>
                    </ul>
                </div>
            </aside>
        </div>
    </main>

    <footer class="policy-footer">
        <div class="policy-container policy-footer__top">
            <div class="policy-footer__brand">
                <span class="policy-footer__brand-title"><?php echo htmlspecialchars($brand['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                <p><?php echo htmlspecialchars($brand['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="policy-footer__links">
                <?php foreach ($policies as $key => $item): ?>
                    <a href="<?php echo htmlspecialchars(policySlugLink($item['slug']), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></a>
                <?php endforeach; ?>
            </div>
            <div class="policy-footer__contact">
                <p><strong>Call:</strong> <?php echo htmlspecialchars($brand['phone'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($brand['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Website:</strong> <?php echo htmlspecialchars($brand['website'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        </div>
        <div class="policy-footer__bottom">
            <div class="policy-container policy-footer__bottom-inner">
                <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($brand['name'], ENT_QUOTES, 'UTF-8'); ?>. All rights reserved.</p>
                <p>Privacy Policy | Terms &amp; Conditions</p>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
