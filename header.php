<?php
if (!function_exists('sk_resolve_root_prefix')) {
    function sk_resolve_root_prefix() {
        $scriptName = $_SERVER['SCRIPT_NAME'] ?? ($_SERVER['PHP_SELF'] ?? '');
        if ($scriptName !== '') {
            $scriptName = str_replace('\\', '/', $scriptName);
            $holidaysPos = stripos($scriptName, '/Holidays/');
            if ($holidaysPos !== false) {
                $relativePath = substr($scriptName, $holidaysPos + strlen('/Holidays/'));
                $relativeDir = trim(dirname($relativePath), '.\/');
                if ($relativeDir === '') {
                    return '';
                }

                return str_repeat('../', count(explode('/', $relativeDir)));
            }
        }

        $scriptFile = $_SERVER['SCRIPT_FILENAME'] ?? '';
        if ($scriptFile !== '') {
            $scriptDir = str_replace('\\', '/', dirname(realpath($scriptFile) ?: $scriptFile));
            $headerDir = str_replace('\\', '/', __DIR__);
            $scriptParts = array_values(array_filter(explode('/', $scriptDir), 'strlen'));
            $headerParts = array_values(array_filter(explode('/', $headerDir), 'strlen'));

            while (!empty($scriptParts) && !empty($headerParts) && strcasecmp($scriptParts[0], $headerParts[0]) === 0) {
                array_shift($scriptParts);
                array_shift($headerParts);
            }

            return str_repeat('../', count($scriptParts));
        }

        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $callerFile = $trace[1]['file'] ?? null;
        if (!$callerFile) {
            return '';
        }

        $callerDir = str_replace('\\', '/', dirname(realpath($callerFile) ?: $callerFile));
        $headerDir = str_replace('\\', '/', __DIR__);
        $callerParts = array_values(array_filter(explode('/', $callerDir), 'strlen'));
        $headerParts = array_values(array_filter(explode('/', $headerDir), 'strlen'));

        while (!empty($callerParts) && !empty($headerParts) && strcasecmp($callerParts[0], $headerParts[0]) === 0) {
            array_shift($callerParts);
            array_shift($headerParts);
        }

        return str_repeat('../', count($callerParts));
    }
}

if (!function_exists('sk_get_caller_file')) {
    function sk_get_caller_file() {
        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

        foreach ($trace as $frame) {
            $file = $frame['file'] ?? null;
            if (!$file) {
                continue;
            }

            $normalized = str_replace('\\', '/', $file);
            $headerPath = str_replace('\\', '/', __FILE__);

            if (strcasecmp($normalized, $headerPath) !== 0) {
                return $file;
            }
        }

        return null;
    }
}

if (!function_exists('sk_detect_itinerary_page')) {
    function sk_detect_itinerary_page() {
        static $cached = null;
        if ($cached !== null) {
            return $cached;
        }

        $callerFile = sk_get_caller_file();
        if (!$callerFile || !is_file($callerFile)) {
            return $cached = false;
        }

        $normalized = str_replace('\\', '/', $callerFile);
        if (stripos($normalized, '/itinerary/') !== false) {
            return $cached = true;
        }

        $content = @file_get_contents($callerFile);
        if ($content === false) {
            return $cached = false;
        }

        return $cached = (
            stripos($content, 'scrollspyHeading1') !== false ||
            stripos($content, 'itinerary_list') !== false ||
            stripos($content, 'navbar-example2') !== false
        );
    }
}

if (!function_exists('sk_detect_shared_index_page')) {
    function sk_detect_shared_index_page() {
        static $cached = null;
        if ($cached !== null) {
            return $cached;
        }

        $callerFile = sk_get_caller_file();
        if (!$callerFile || !is_file($callerFile)) {
            return $cached = false;
        }

        if (sk_detect_itinerary_page()) {
            return $cached = false;
        }

        $normalized = str_replace('\\', '/', $callerFile);
        $basename = strtolower(basename($normalized));
        if ($basename !== 'index.php') {
            return $cached = false;
        }

        return $cached = (
            stripos($normalized, '/tours/') !== false ||
            stripos($normalized, '/honeymoon-tour/') !== false ||
            stripos($normalized, '/spiritual/') !== false ||
            stripos($normalized, '/cruise/') !== false
        );
    }
}

if (!function_exists('sk_detect_home_index_page')) {
    function sk_detect_home_index_page() {
        static $cached = null;
        if ($cached !== null) {
            return $cached;
        }

        $callerFile = sk_get_caller_file();
        if (!$callerFile || !is_file($callerFile) || sk_detect_itinerary_page()) {
            return $cached = false;
        }

        $callerRealPath = realpath($callerFile);
        $homeRealPath = realpath(__DIR__ . '/index.php');
        if ($callerRealPath === false || $homeRealPath === false) {
            return $cached = false;
        }

        return $cached = strcasecmp($callerRealPath, $homeRealPath) === 0;
    }
}

if (!function_exists('sk_detect_page_section')) {
    function sk_detect_page_section() {
        static $cached = null;
        if ($cached !== null) {
            return $cached;
        }

        $callerFile = sk_get_caller_file();
        if (!$callerFile || !is_file($callerFile)) {
            return $cached = '';
        }

        $normalized = str_replace('\\', '/', $callerFile);
        if (stripos($normalized, '/honeymoon-tour/') !== false) {
            return $cached = 'honeymoon';
        }

        if (stripos($normalized, '/spiritual/') !== false) {
            return $cached = 'spiritual';
        }

        if (stripos($normalized, '/tours/') !== false) {
            return $cached = 'tours';
        }

        if (stripos($normalized, '/cruise/') !== false) {
            return $cached = 'cruise';
        }

        return $cached = '';
    }
}

if (!isset($SK_ROOT_PREFIX) || $SK_ROOT_PREFIX === '') {
    $SK_ROOT_PREFIX = sk_resolve_root_prefix();
}

if (!isset($SK_IS_ITINERARY_PAGE)) {
    $SK_IS_ITINERARY_PAGE = sk_detect_itinerary_page();
}

if (!isset($SK_IS_SHARED_INDEX_PAGE)) {
    $SK_IS_SHARED_INDEX_PAGE = sk_detect_shared_index_page();
}

if (!isset($SK_IS_CARD_NAME_INDEX_PAGE)) {
    $SK_IS_CARD_NAME_INDEX_PAGE = ($SK_IS_SHARED_INDEX_PAGE || sk_detect_home_index_page());
}

$SK_CARD_NAME_WORDS = [
    'Grand', 'Royal', 'Elite', 'Premium', 'Signature', 'Prestige', 'Regal', 'Majestic', 'Imperial', 'Exclusive',
    'Dream', 'Wonder', 'Magic', 'Bliss', 'Enchanted', 'Serene', 'Divine', 'Soulful', 'Timeless', 'Golden',
    'Explorer', 'Odyssey', 'Voyage', 'Trail', 'Quest', 'Discovery', 'Expedition', 'Journey', 'Wanderlust', 'Horizon',
    'Paradise', 'Oasis', 'Emerald', 'Tranquil', 'Scenic', 'Heritage', 'Panorama', 'Splendor', 'Escape', 'Getaway'
];

$SK_CARD_CONNECTOR_WORDS = [
    'Dream', 'Wonder', 'Magic', 'Explorer', 'Odyssey', 'Voyage', 'Trail', 'Quest',
    'Discovery', 'Expedition', 'Journey', 'Wanderlust', 'Horizon', 'Escape', 'Getaway'
];

$SK_CARD_NAME_PROFILE = 'default';
$skCardNameCaller = sk_get_caller_file();
if ($skCardNameCaller && is_file($skCardNameCaller)) {
    $skCardNamePath = str_replace('\\', '/', $skCardNameCaller);
    if (stripos($skCardNamePath, '/spiritual/') !== false && strtolower(basename($skCardNamePath)) === 'index.php') {
        $SK_CARD_NAME_PROFILE = 'spiritual';
        $SK_CARD_NAME_WORDS = [
            'Divine', 'Sacred', 'Blessed', 'Holy', 'Celestial', 'Graceful', 'Serene', 'Soulful', 'Tranquil', 'Mystic',
            'Radiant', 'Enlightened', 'Eternal', 'Peaceful', 'Sanctified', 'Reverent', 'Blissful', 'Pure', 'Spiritual', 'Harmonious'
        ];
        $SK_CARD_CONNECTOR_WORDS = [
            'Divine', 'Sacred', 'Blessed', 'Holy', 'Celestial', 'Graceful', 'Serene', 'Soulful', 'Mystic',
            'Radiant', 'Enlightened', 'Eternal', 'Peaceful', 'Sanctified', 'Reverent', 'Blissful', 'Spiritual', 'Harmonious'
        ];
    }
}

if (!isset($SK_PAGE_SECTION) || $SK_PAGE_SECTION === '') {
    $SK_PAGE_SECTION = sk_detect_page_section();
}

require_once __DIR__ . '/honeymoon-tour/honeymoon-itinerary-cards.php';

if (!function_exists('h')) {
    function h($s) {
        return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
    }
}

if (!defined('SK_BRAND_NAME')) {
    define('SK_BRAND_NAME', 'GRAND SK Holidays');
}

if (!defined('SK_BRAND_FULL_NAME')) {
    define('SK_BRAND_FULL_NAME', 'GRAND SK Holidays Travel Pvt Ltd');
}

if (!defined('SK_PRIMARY_EMAIL')) {
    define('SK_PRIMARY_EMAIL', 'sales@grandskholidays.com');
}

if (!function_exists('sk_looks_like_valid_utf8')) {
    function sk_looks_like_valid_utf8($value) {
        return preg_match('//u', $value) === 1;
    }
}

if (!function_exists('sk_convert_to_utf8')) {
    function sk_convert_to_utf8($value) {
        if ($value === '' || sk_looks_like_valid_utf8($value)) {
            return $value;
        }

        if (function_exists('mb_convert_encoding')) {
            $converted = @mb_convert_encoding($value, 'UTF-8', 'Windows-1252');
            if (is_string($converted) && $converted !== '') {
                return $converted;
            }
        }

        if (function_exists('iconv')) {
            $converted = @iconv('Windows-1252', 'UTF-8//IGNORE', $value);
            if (is_string($converted) && $converted !== '') {
                return $converted;
            }
        }

        return $value;
    }
}

if (!function_exists('sk_normalize_text_symbols')) {
    function sk_normalize_text_symbols($buffer) {
        $buffer = sk_convert_to_utf8($buffer);

        $buffer = strtr($buffer, [
            "\u{2018}" => "'",
            "\u{2019}" => "'",
            "\u{201A}" => "'",
            "\u{201B}" => "'",
            "\u{2032}" => "'",
            "\u{201C}" => '"',
            "\u{201D}" => '"',
            "\u{201E}" => '"',
            "\u{201F}" => '"',
            "\u{2033}" => '"',
            "\u{2013}" => '-',
            "\u{2014}" => '-',
            "\u{2026}" => '...',
            "\u{00A0}" => ' ',
            "\u{2009}" => ' ',
            "\u{200A}" => ' ',
            "\u{2022}" => '-',
            "\u{00D7}" => '&times;',
        ]);

        $buffer = preg_replace('/(\p{L})\x{FFFD}(?=\p{L})/u', "$1'", $buffer);
        $buffer = preg_replace('/(\d)\x{FFFD}(?=\d)/u', '$1-', $buffer);
        $buffer = preg_replace('/\s*\x{FFFD}\s*-\s*\x{FFFD}\s*/u', ' - ', $buffer);
        $buffer = preg_replace('/>\s*\x{FFFD}\s*</u', '>&times;<', $buffer);
        $buffer = str_replace("\u{FFFD}", "'", $buffer);

        return $buffer;
    }
}

if (!function_exists('sk_normalize_brand_text')) {
    function sk_normalize_brand_text($buffer) {
        $buffer = sk_normalize_text_symbols($buffer);

        $patterns = [
            '/(?<!GRAND\s)(?<!Grand\s)(?<!grand\s)\bSK Holidays Travel\b/u' => 'GRAND SK Holidays Travel',
            '/(?<!GRAND\s)(?<!Grand\s)(?<!grand\s)\bSK Holidays\b/u' => 'GRAND SK Holidays',
            '/info@grandskholidays\.com/i' => SK_PRIMARY_EMAIL,
            '/sales@skholidayss\.com/i' => SK_PRIMARY_EMAIL,
        ];

        foreach ($patterns as $pattern => $replacement) {
            $buffer = preg_replace($pattern, $replacement, $buffer);
        }

        return $buffer;
    }
}

if (!function_exists('sk_clean_page_title_text')) {
    function sk_clean_page_title_text($text) {
        $text = html_entity_decode(strip_tags((string)$text), ENT_QUOTES, 'UTF-8');
        $text = preg_replace('/\s+/u', ' ', $text ?? '');
        $text = trim((string)$text);

        return trim($text, " \t\n\r\0\x0B-_|:");
    }
}

if (!function_exists('sk_title_is_generic_label')) {
    function sk_title_is_generic_label($text) {
        $normalized = strtolower(sk_clean_page_title_text($text));
        if ($normalized === '') {
            return true;
        }

        $genericLabels = [
            'itinerary',
            'terms & conditions',
            'terms & condition',
            'package inclusion & exclusion',
            'package inclusion exclusion',
            'inclusion',
            'exclusion',
            'premium package details',
            'standard package details',
            'basic package details',
            'deluxe package details',
            'honeymoon inclusions',
            'view more itineraries',
            strtolower(SK_BRAND_NAME),
            strtolower(SK_BRAND_FULL_NAME),
            'grand sk holidays pvt ltd',
        ];

        return in_array($normalized, $genericLabels, true);
    }
}

if (!function_exists('sk_extract_itinerary_place_name')) {
    function sk_extract_itinerary_place_name($filePath) {
        if (!$filePath || !is_file($filePath)) {
            return '';
        }

        $content = @file_get_contents($filePath);
        if ($content === false || $content === '') {
            return '';
        }

        $patterns = [
            '/<h[1-6][^>]*class=["\'][^"\']*card-title[^"\']*["\'][^>]*>(.*?)<\/h[1-6]>/is',
            '/<li[^>]*class=["\'][^"\']*breadcrumb-item\s+active[^"\']*["\'][^>]*>(.*?)<\/li>/is',
            '/<h1[^>]*>(.*?)<\/h1>/is',
            '/<h2[^>]*>(.*?)<\/h2>/is',
            '/<h3[^>]*>(.*?)<\/h3>/is',
        ];

        foreach ($patterns as $pattern) {
            if (!preg_match_all($pattern, $content, $matches)) {
                continue;
            }

            foreach ($matches[1] as $match) {
                $candidate = sk_clean_page_title_text($match);
                if ($candidate === '' || sk_title_is_generic_label($candidate)) {
                    continue;
                }

                return $candidate;
            }
        }

        $fallback = pathinfo($filePath, PATHINFO_FILENAME);
        $fallback = preg_replace('/\b(?:basic|standard|premium|deluxe)\b/i', '', (string)$fallback);
        $fallback = preg_replace('/^SK[-_\s]*holidays[-_\s]*/i', '', (string)$fallback);
        $fallback = str_replace(['_', '-'], ' ', (string)$fallback);
        $fallback = sk_clean_page_title_text($fallback);

        return sk_title_is_generic_label($fallback) ? '' : $fallback;
    }
}

if (!function_exists('sk_ensure_brand_in_title')) {
    function sk_ensure_brand_in_title($title) {
        $title = sk_clean_page_title_text($title);
        if ($title === '') {
            return SK_BRAND_FULL_NAME . ' - Best Travel Packages & Tours';
        }

        if (stripos($title, SK_BRAND_NAME) !== false || stripos($title, SK_BRAND_FULL_NAME) !== false) {
            return $title;
        }

        return $title . ' | ' . SK_BRAND_NAME;
    }
}

if (!function_exists('sk_get_shared_favicon_path')) {
    function sk_get_shared_favicon_path($rootPrefix) {
        $faviconCandidates = [
            'spiritual/favicon.png',
            'favicon.png',
            'SK.png',
        ];

        foreach ($faviconCandidates as $candidate) {
            if (is_file(__DIR__ . '/' . str_replace('/', DIRECTORY_SEPARATOR, $candidate))) {
                return $rootPrefix . $candidate;
            }
        }

        return $rootPrefix . 'spiritual/favicon.png';
    }
}

if (!function_exists('sk_get_package_variant_weight')) {
    function sk_get_package_variant_weight($fileName) {
        $normalized = strtolower((string)$fileName);

        if (strpos($normalized, 'premium') !== false) {
            return 30;
        }

        if (strpos($normalized, 'standard') !== false) {
            return 20;
        }

        if (strpos($normalized, 'deluxe') !== false) {
            return 15;
        }

        if (strpos($normalized, 'basic') !== false) {
            return 10;
        }

        return 10;
    }
}

if (!function_exists('sk_get_tour_index_card_routes')) {
    function sk_get_tour_index_card_routes($indexFile) {
        if (!$indexFile || !is_file($indexFile) || strcasecmp(basename($indexFile), 'index.php') !== 0) {
            return [];
        }

        $indexPath = realpath($indexFile) ?: $indexFile;
        $indexDir = dirname($indexPath);
        $indexContent = @file_get_contents($indexPath);
        $cardCount = $indexContent === false ? 0 : preg_match_all('/<div\s+class="card"\b/i', $indexContent, $matches);

        $routeGroups = [];
        $directItineraryDir = $indexDir . DIRECTORY_SEPARATOR . 'Itinerary';
        if (is_dir($directItineraryDir)) {
            $routeGroups[] = $directItineraryDir;
        } else {
            $directories = @scandir($indexDir) ?: [];
            foreach ($directories as $directory) {
                if ($directory === '.' || $directory === '..') {
                    continue;
                }

                $groupPath = $indexDir . DIRECTORY_SEPARATOR . $directory;
                if (!is_dir($groupPath)) {
                    continue;
                }

                $groupFiles = glob($groupPath . DIRECTORY_SEPARATOR . '*.php') ?: [];
                $groupFiles = array_values(array_filter($groupFiles, function($filePath) {
                    return strcasecmp(basename($filePath), 'index.php') !== 0;
                }));

                if (!empty($groupFiles)) {
                    $routeGroups[] = $groupPath;
                }
            }

            natcasesort($routeGroups);
            $routeGroups = array_values($routeGroups);
        }

        $routes = [];
        foreach ($routeGroups as $groupPath) {
            $groupFiles = glob($groupPath . DIRECTORY_SEPARATOR . '*.php') ?: [];
            $groupFiles = array_values(array_filter($groupFiles, function($filePath) {
                return strcasecmp(basename($filePath), 'index.php') !== 0;
            }));

            usort($groupFiles, function($left, $right) {
                $leftWeight = sk_get_package_variant_weight(basename($left));
                $rightWeight = sk_get_package_variant_weight(basename($right));

                if ($leftWeight === $rightWeight) {
                    return strnatcasecmp(basename($left), basename($right));
                }

                return $leftWeight <=> $rightWeight;
            });

            foreach ($groupFiles as $filePath) {
                $realPath = realpath($filePath) ?: $filePath;
                $relativePath = substr($realPath, strlen($indexDir) + 1);
                $routes[] = str_replace(DIRECTORY_SEPARATOR, '/', $relativePath);
            }
        }

        if ($cardCount > 0 && count($routes) !== $cardCount) {
            return [];
        }

        return $routes;
    }
}

$SK_PAGE_TITLE = $SK_PAGE_TITLE ?? '';
if ($SK_IS_ITINERARY_PAGE) {
    $skItineraryPlaceName = sk_extract_itinerary_place_name(sk_get_caller_file());
    if ($skItineraryPlaceName !== '') {
        $SK_PAGE_TITLE = $skItineraryPlaceName . ' | ' . SK_BRAND_NAME;
    }
}

$SK_PAGE_TITLE = sk_ensure_brand_in_title($SK_PAGE_TITLE);
$SK_FAVICON_PATH = $SK_FAVICON_PATH ?? sk_get_shared_favicon_path($SK_ROOT_PREFIX);
$SK_META_KEYWORDS = $SK_META_KEYWORDS ?? 'travel tours, holidays deals, family tours, tours and packages, holidays travel, best deals for the holidays, holiday tours packages, holiday trip packages, best travel deals 2026';
$SK_META_DESCRIPTION = $SK_META_DESCRIPTION ?? (SK_BRAND_FULL_NAME . ' - Your trusted travel companion for unforgettable journeys. Explore international and domestic tour packages with best deals.');
$SK_BODY_CLASS = $SK_BODY_CLASS ?? '';
$SK_GROUP_TOUR_URL = $SK_GROUP_TOUR_URL ?? ($SK_ROOT_PREFIX . 'group-tour/new/index.php');
$SK_SHARED_INDEX_CARD_ROUTES = $SK_SHARED_INDEX_CARD_ROUTES ?? [];

if ($SK_IS_SHARED_INDEX_PAGE && $SK_PAGE_SECTION === 'tours' && empty($SK_SHARED_INDEX_CARD_ROUTES)) {
    $SK_SHARED_INDEX_CARD_ROUTES = sk_get_tour_index_card_routes(sk_get_caller_file());
}

if (!function_exists('sk_filter_page_assets')) {
    function sk_filter_page_assets($assets, $isItineraryPage = false, $isSharedIndexPage = false) {
        if (!is_array($assets)) {
            return [];
        }

        $filtered = [];
        $skipPatterns = [
            'fonts.googleapis.com/css2?family=poppins',
            'cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
            'cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
            'cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
            'header.css',
            'footer.css',
            '/sk.css',
            '\\sk.css',
        ];

        if ($isItineraryPage) {
            $skipPatterns = array_merge($skipPatterns, [
                '/styles.css',
                '\\styles.css',
                '/honeymoon.css',
                '\\honeymoon.css',
                '/spiritual.css',
                '\\spiritual.css',
                '<style',
            ]);
        }

        if ($isSharedIndexPage) {
            $skipPatterns = array_merge($skipPatterns, [
                '/styles.css',
                '\\styles.css',
                '/honeymoon.css',
                '\\honeymoon.css',
                '/styless.css',
                '\\styless.css',
                '/spiritual.css',
                '\\spiritual.css',
                '<style',
            ]);
        }

        foreach ($assets as $asset) {
            $assetString = trim((string)$asset);
            if ($assetString === '') {
                continue;
            }

            $assetLower = strtolower($assetString);
            $shouldSkip = false;

            foreach ($skipPatterns as $pattern) {
                if (strpos($assetLower, $pattern) !== false) {
                    $shouldSkip = true;
                    break;
                }
            }

            if (!$shouldSkip) {
                $filtered[] = $assetString;
            }
        }

        return $filtered;
    }
}

if (!empty($SK_PAGE_ASSETS)) {
    $SK_PAGE_ASSETS = sk_filter_page_assets($SK_PAGE_ASSETS, $SK_IS_ITINERARY_PAGE, $SK_IS_SHARED_INDEX_PAGE);
}

if (!defined('SK_BRAND_NORMALIZER_ACTIVE')) {
    define('SK_BRAND_NORMALIZER_ACTIVE', true);
    ob_start('sk_normalize_brand_text');
}

if (!empty($SK_INCLUDE_FRAGMENT)) {
    $content = file_get_contents(__FILE__);
    $start = strpos($content, '<!-- ===== NAVBAR ===== -->');
    if ($start !== false) {
        echo substr($content, $start);
    }
    return;
}

sk_register_honeymoon_output_filter();
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="<?php echo h($SK_META_KEYWORDS ?? ''); ?>">
  <meta name="description" content="<?php echo h($SK_META_DESCRIPTION ?? ''); ?>">
  <link rel="icon" type="image/png" href="<?php echo h($SK_FAVICON_PATH); ?>">
  <link rel="shortcut icon" href="<?php echo h($SK_FAVICON_PATH); ?>">
  <link rel="apple-touch-icon" href="<?php echo h($SK_FAVICON_PATH); ?>">
  <title><?php echo h($SK_PAGE_TITLE ?? ''); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>header.css">
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>footer.css">
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>travel support/air-ticket/style.css">
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>travel support/passport/style.css">
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>travel support/visa/style.css">
<?php $SK_SKIP_SK_CSS = $SK_SKIP_SK_CSS ?? $SK_IS_SHARED_INDEX_PAGE; ?>
<?php if (!$SK_SKIP_SK_CSS): ?>
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>sk.css">
<?php endif; ?>
<?php if ($SK_IS_ITINERARY_PAGE): ?>
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>itinerarystyle.css">
<?php endif; ?>
<?php if ($SK_IS_SHARED_INDEX_PAGE): ?>
<?php if ($SK_PAGE_SECTION === 'tours'): ?>
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>tourindex.css">
<?php elseif ($SK_PAGE_SECTION === 'cruise'): ?>
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>cruiseindex.css">
<?php else: ?>
  <link rel="stylesheet" href="<?php echo $SK_ROOT_PREFIX; ?>indexstyle.css">
<?php endif; ?>
<?php endif; ?>
<?php if (!empty($SK_PAGE_ASSETS)) { foreach ($SK_PAGE_ASSETS as $asset) { echo $asset; } } ?>
<?php echo sk_render_honeymoon_cards_css(); ?>
<?php echo sk_render_honeymoon_cards_script($SK_ROOT_PREFIX); ?>
</head>
<?php
$sectionClass = $SK_PAGE_SECTION !== '' ? ' section-' . $SK_PAGE_SECTION : '';
$sharedIndexClass = $SK_IS_SHARED_INDEX_PAGE ? ' shared-index-page' . $sectionClass : '';
$itineraryClass = $SK_IS_ITINERARY_PAGE ? ' itinerary-page' : '';
$skBodyClasses = trim(($SK_BODY_CLASS ?? '') . $itineraryClass . $sharedIndexClass);
?>
<body<?php echo $skBodyClasses !== '' ? ' class="' . h($skBodyClasses) . '"' : ''; ?>>
<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-xl sk-navbar">
        <div class="sk-navbar__shell sk-navbar__inner">
            <a class="navbar-brand sk-navbar__brand" href="<?php echo $SK_ROOT_PREFIX; ?>./" id="skNavbarBrand">
                <img src="<?php echo $SK_ROOT_PREFIX; ?>SK.png" alt="Logo" class="sk-navbar__logo">
            </a>
            
            <button class="navbar-toggler sk-navbar__toggler" type="button" data-bs-toggle="collapse" data-bs-target="#skHeaderNav" aria-controls="skHeaderNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse sk-navbar__collapse sk-navbar__collapse--near-brand" id="skHeaderNav">
                <ul class="navbar-nav sk-navbar__nav sk-navbar__nav--near-brand">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $SK_ROOT_PREFIX; ?>./">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="<?php echo h($SK_GROUP_TOUR_URL); ?>" id="skGroupDropdown">
                            Group
                        </a>
                    </li>
                    
                    <li class="nav-item dropdown sk-tour-nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            Tours
                        </a>
                        <div class="dropdown-menu tour-dropdown">
                            <div class="tour-dropdown__header">
                                <span class="tour-dropdown__eyebrow">Explore Packages</span>
                                <p>Browse destinations by region with a cleaner, faster tour menu.</p>
                            </div>
                            
                            <div class="tour-dropdown__columns">
                                <div class="tour-column">
                                    <div class="tour-section">
                                        <h6>India</h6>
                                        <ul class="tour-list">
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/amritsar/index.php">Amritsar</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/jammu-and-kashmir/index.php">Kashmir</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/leh-ladakh/index.php">Leh Ladakh</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/rajasthan/index.php">Rajasthan</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/golden-triangle/index.php">Golden Triangle</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/delhi-and-agra/index.php">Delhi &amp; Agra</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/east-india/kolkata/index.php">Kolkata</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/east-india/darjeeling-and-sikkim/index.php">Gangtok &amp; Darjeeling</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/east-india/7-sisters/index.php">7 Sisters</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/west-india/goa/index.php">Goa</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/south-india/kerala/index.php">Kerala</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/south-india/coorg/index.php">Coorg</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/south-india/andaman/index.php">Andaman</a></li>
                                                                        <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/east-india/assam-meghalaya/index.php">Assam &amp; Meghalaya</a></li>
                                                                                     <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/manali/index.php">Manali</a></li>
                                                                                                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/uttarakhand/index.php">Uttarakhand</a></li>
                                                                                                                             <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/north-india/simla-and-manali/index.php">Simla &amp; Manali</a></li>
                                   
                                        <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/south-india/mysore/index.php">Mysore</a></li>

                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/west-india/gujarat/index.php">Gujarat</a></li>
             
                                                         <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/west-india/mumbai/index.php">Mumbai</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/west-india/lakshadweep/index.php">lakshadweep</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/domestic-tours/south-india/hyderabad/index.php">Hyderabad</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="tour-column">-->
                                <!--    <div class="tour-section">-->
                                        
                                <!--        </ul>-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="tour-column">
                                    <div class="tour-section">
                                        <h6>Asia</h6>
                                        <ul class="tour-list">
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/azerbaijan/index.php">Azerbaijan</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/dubai-UAF/index.php">Dubai (UAE)</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/hong-kong/index.php">Hong Kong</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/russia/index.php">Russia</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/maldives/index.php">Maldives</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/malaysia/index.php">Malaysia</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/singapore/index.php">Singapore</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/sri-lanka/index.php">Sri Lanka</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/asia/thailand/index.php">Thailand</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tour-column">
                                    <div class="tour-section">
                                        <h6>Africa</h6>
                                        <ul class="tour-list">
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/Africa/mauritius/index.php">Mauritius</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/Africa/seychelles/index.php">Seychelles</a></li>
                                        </ul>
                                        <h6 style="margin-top:8px">Spiritual</h6>
                                        <ul class="tour-list">
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>spiritual/Itinerary/shirdi.php">Shirdi</a></li>
                                                       <!--<li><a href="<?php echo $SK_ROOT_PREFIX; ?>spiritual/Itinerary/gaya.php">Gaya</a></li>-->
                                                                  <li><a href="<?php echo $SK_ROOT_PREFIX; ?>spiritual/Itinerary/ayodhya_gaya_kasi.php">Ayodhya,gaya,kasi</a></li>
                                                                             <!--<li><a href="<?php echo $SK_ROOT_PREFIX; ?>spiritual/Itinerary/kasi.php">Kasi</a></li>-->
                                    </div>
                                </div>

                                <div class="tour-column">
                                    <div class="tour-section">
                                        <h6>Europe</h6>
                                        <ul class="tour-list">
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/europe/europe/index.php">Europe</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/europe/egypt/index.php">Egypt</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/australia/australia/index.php">Australia</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/australia/newzland/index.php">New Zealand</a></li>
                                            <li><a href="<?php echo $SK_ROOT_PREFIX; ?>tours/international-tours/north-america/united/index.php">United States</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $SK_ROOT_PREFIX; ?>spiritual/index.php">Spiritual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $SK_ROOT_PREFIX; ?>honeymoon-tour/index.php">Honeymoon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $SK_ROOT_PREFIX; ?>cruise/index.php">Cruise</a>
                        </li>
<li class="nav-item">
    <a class="nav-link" href="<?php echo $SK_ROOT_PREFIX; ?>testimonial/index.php">Testimonials</a>
</li>
                </ul>
            </div>
        </div>
 </nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const tourToggle = document.querySelector('.sk-tour-nav-item .dropdown-toggle');
  const navbarCollapse = document.getElementById('skHeaderNav');
  if (!tourToggle || !window.bootstrap || !window.bootstrap.Dropdown) return;

  const tourDropdown = window.bootstrap.Dropdown.getOrCreateInstance(tourToggle);
  const closeDropdown = () => tourDropdown.hide();

  if (navbarCollapse) {
    navbarCollapse.addEventListener('hide.bs.collapse', closeDropdown);
  }

  window.addEventListener('resize', closeDropdown);
});
</script>
<?php if ($SK_IS_SHARED_INDEX_PAGE && $SK_PAGE_SECTION === 'tours'): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const findNextElement = function(element, selector) {
    let current = element ? element.nextElementSibling : null;
    while (current) {
      if (current.matches(selector)) {
        return current;
      }

      current = current.nextElementSibling;
    }

    return null;
  };

  const findDirectChild = function(element, selectors) {
    if (!element) {
      return null;
    }

    const selectorList = selectors.split(',').map(function(item) {
      return item.trim().toLowerCase();
    });

    return Array.from(element.children).find(function(child) {
      return selectorList.includes(child.tagName.toLowerCase());
    }) || null;
  };

  const removeAdjacentHr = function(element) {
    if (!element) {
      return;
    }

    let sibling = element.previousElementSibling;
    if (sibling && sibling.tagName === 'HR') {
      sibling.remove();
    }

    sibling = element.nextElementSibling;
    if (sibling && sibling.tagName === 'HR') {
      sibling.remove();
    }
  };

  const heroImage = document.querySelector('.background_main');
  const overviewBlock = findNextElement(heroImage, '.container-fluid');
  if (!heroImage || !overviewBlock) {
    return;
  }

  if (heroImage.parentElement && heroImage.parentElement.classList.contains('sk-index-hero-layout')) {
    return;
  }

  const overviewTitle = findDirectChild(overviewBlock, 'h1, h2, h3, h4, h5, h6') || overviewBlock.querySelector('h1, h2, h3, h4, h5, h6');
  const overviewText = findDirectChild(overviewBlock, 'p') || overviewBlock.querySelector('p');
  if (!overviewTitle || !overviewText) {
    return;
  }

  const heroLayout = document.createElement('section');
  heroLayout.className = 'sk-index-hero-layout';

  const overviewPanel = document.createElement('div');
  overviewPanel.className = 'sk-index-overview';
  overviewPanel.appendChild(overviewTitle.cloneNode(true));
  overviewPanel.appendChild(overviewText.cloneNode(true));

  heroImage.parentNode.insertBefore(heroLayout, heroImage);
  heroLayout.appendChild(heroImage);
  heroLayout.appendChild(overviewPanel);

  overviewTitle.remove();
  overviewText.remove();

  if (overviewBlock.querySelector('.row_cards') || overviewBlock.querySelector('[style*="display: flex"]')) {
    while (overviewBlock.firstChild) {
      overviewBlock.parentNode.insertBefore(overviewBlock.firstChild, overviewBlock);
    }
  }

  const hasMeaningfulContent = Array.from(overviewBlock.childNodes).some(function(node) {
    return node.nodeType === Node.ELEMENT_NODE || (node.nodeType === Node.TEXT_NODE && node.textContent.trim() !== '');
  });

  if (!hasMeaningfulContent) {
    removeAdjacentHr(overviewBlock);
    overviewBlock.remove();
  } else {
    overviewBlock.classList.add('sk-index-overview-source');
  }

  removeAdjacentHr(heroLayout);
});
</script>
<?php endif; ?>
<?php if ($SK_IS_CARD_NAME_INDEX_PAGE): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const cardSelectors = [
    '.shared-index-page.section-tours .row_cards .card',
    '.shared-index-page .destination-card',
    '.destinations-container .destination-card'
  ];
  const isToursIndexPage = document.body.classList.contains('section-tours');
  const generatedRoutes = <?php echo json_encode(array_values($SK_SHARED_INDEX_CARD_ROUTES)); ?>;
  const namingWords = <?php echo json_encode(array_values($SK_CARD_NAME_WORDS)); ?>;
  const connectorWords = new Set(<?php echo json_encode(array_values($SK_CARD_CONNECTOR_WORDS)); ?>);

  const createSeed = function(text) {
    let seed = 0;
    for (let index = 0; index < text.length; index += 1) {
      seed = ((seed * 31) + text.charCodeAt(index)) >>> 0;
    }

    return seed || 1;
  };

  const shuffleWords = function(words, seed) {
    const shuffled = words.slice();
    let currentSeed = seed;

    for (let index = shuffled.length - 1; index > 0; index -= 1) {
      currentSeed = ((currentSeed * 1664525) + 1013904223) >>> 0;
      const swapIndex = currentSeed % (index + 1);
      const currentWord = shuffled[index];
      shuffled[index] = shuffled[swapIndex];
      shuffled[swapIndex] = currentWord;
    }

    return shuffled;
  };

  const normalizeCardTitle = function(text) {
    return text
      .replace(/\s+/g, ' ')
      .replace(/^Trip to\s+/i, '')
      .replace(/^Tours?\s+to\s+/i, '')
      .replace(/^Holiday\s+to\s+/i, '')
      .trim();
  };

  const buildCardTitle = function(baseName, word, index) {
    if (connectorWords.has(word)) {
      return word + ' to ' + baseName;
    }

    return index % 3 === 1 ? (baseName + ' ' + word) : (word + ' ' + baseName);
  };

  const shuffledWords = shuffleWords(namingWords, createSeed(window.location.pathname));

  const cards = Array.from(document.querySelectorAll(cardSelectors.join(', ')));
  cards.forEach(function(card, index) {
    const cardTitle = card.querySelector('.tour-card-title-row .card-title, .card-info .featured-content h3, .card-info h3, .card-title, h3, h4');
    const durationTag = card.querySelector('.tour-card-duration');

    if (cardTitle) {
      const originalTitle = cardTitle.dataset.skOriginalTitle || normalizeCardTitle(cardTitle.textContent);
      const word = shuffledWords[index % shuffledWords.length];
      const renamedTitle = buildCardTitle(originalTitle, word, index);
      const durationText = durationTag ? durationTag.textContent.replace(/\s+/g, ' ').trim() : '';

      cardTitle.dataset.skOriginalTitle = originalTitle;
      cardTitle.textContent = durationText !== '' ? (renamedTitle + ' - ' + durationText) : renamedTitle;
    }

    if (durationTag) {
      durationTag.remove();
    }

    let link = card.querySelector('a[href]');
    if (!link && isToursIndexPage && generatedRoutes[index]) {
      link = document.createElement('a');
      link.href = generatedRoutes[index];
      link.className = 'sk-card-link-anchor';
      link.setAttribute('aria-hidden', 'true');
      link.tabIndex = -1;
      card.appendChild(link);
    }

    if (!link) {
      return;
    }

    const href = link.getAttribute('href');
    if (!href || href.trim() === '' || href.startsWith('#')) {
      return;
    }

    card.classList.add('sk-clickable-card');
    link.classList.add('sk-card-link-anchor');

    if (!card.hasAttribute('tabindex')) {
      card.setAttribute('tabindex', '0');
    }

    card.setAttribute('role', 'link');

    if (cardTitle && !card.hasAttribute('aria-label')) {
      card.setAttribute('aria-label', 'Open ' + cardTitle.textContent.trim());
    }

    const navigate = function() {
      window.location.href = link.href;
    };

    card.addEventListener('click', function(event) {
      if (event.target.closest('a, button, input, select, textarea')) {
        return;
      }

      navigate();
    });

    card.addEventListener('keydown', function(event) {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        navigate();
      }
    });
  });

  if (!isToursIndexPage) {
    return;
  }
});
</script>
<?php endif; ?>
  
 <!-- <button class="testimonial-btn" onclick="window.location.href='<?php echo $SK_ROOT_PREFIX; ?>testimonials.php'">
    Testimonials
</button> -->

<!-- ===== CONTENT ===== -->
<!-- <div style="height:100vh; padding:50px;">
  <h1>Menu Working ðŸ‘</h1>
</div> -->
