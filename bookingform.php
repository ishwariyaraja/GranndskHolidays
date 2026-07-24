<?php
// booking_system.php (multiselect destinations + email all selections)

// --- Hardening & logging ---
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/booking_errors.log');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// --- Configuration ---
$company_email = "sales@grandskholidays.com";
$company_name  = "Grand SK Holidays Pvt Ltd";
$from_email    = "noreply@grandskholidays.com"; // use a sender you can send from on your server
$return_path   = $company_email;

// --- Destination Options ---
$national_destinations = [
    'andaman' => 'Andaman & Nicobar',
    'goa' => 'Goa',
    'kerala' => 'Kerala',
    'kashmir' => 'Kashmir',
    'rajasthan' => 'Rajasthan',
    'himachal' => 'Himachal Pradesh',
    'leh_ladakh' => 'Leh Ladakh',
    'uttarakhand' => 'Uttarakhand',
    'sikkim' => 'Sikkim',
    'northeast' => 'North East India'
];

$international_destinations = [
    'thailand' => 'Thailand',
    'singapore' => 'Singapore',
    'malaysia' => 'Malaysia',
    'dubai' => 'Dubai',
    'maldives' => 'Maldives',
    'bali' => 'Bali, Indonesia',
    'europe' => 'Europe',
    'usa' => 'United States',
    'canada' => 'Canada',
    'australia' => 'Australia'
];

$spiritual_destinations = [
    'shirdi' => 'Shirdi',
    'adi_kailash' => 'Adi Kailash',
    'rishikesh_haridwar' => 'Rishikesh & Haridwar',
    'badrinath' => 'Badrinath',
    'bhubaneshwar' => 'Bhubaneshwar',
    'delhi_char_dham' => 'Delhi Char Dham',
    'haridwar_char_dham' => 'Haridwar Char Dham',
    'varanasi_prayagraj' => 'Varanasi Prayagraj',
    'varanasi' => 'Varanasi'
];

$honeymoon_domestic_destinations = [
    'kerala' => 'Kerala',
    'goa' => 'Goa',
    'sikkim' => 'Sikkim',
    'andaman' => 'Andaman',
    'ladakh' => 'Ladakh'
];

$honeymoon_international_destinations = [
    'singapore' => 'Singapore',
    'sri_lanka' => 'Sri Lanka',
    'mauritius' => 'Mauritius',
    'maldives' => 'Maldives',
    'dubai' => 'Dubai',
    'thailand' => 'Thailand'
];

// --- Helpers ---
function h($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function sanitize_header_str($s){ return trim(preg_replace('/[\r\n]+/', ' ', (string)$s)); }
function sanitize_array_strings($arr){
    $out=[];
    foreach((array)$arr as $v){ $out[] = sanitize_header_str($v); }
    return $out;
}
function format_safe_date($date_str){
    if(!$date_str) return 'Not provided';
    try{ $dt = new DateTime($date_str); return $dt->format('F j, Y'); }
    catch(Throwable $e){ return 'Not provided'; }
}
function travelers_text($v){
    $map = ['1'=>'1 Person','2'=>'2 People','3'=>'3 People','4'=>'4 People','5+'=>'5+ People'];
    return $map[$v] ?? ($v ?: 'Not provided');
}
function destination_type_text($v){
    $map = ['national'=>'National','international'=>'International','spiritual'=>'Spiritual','honeymoon'=>'Honeymoon'];
    return $map[$v] ?? 'Unknown';
}

/**
 * Resolve multiple destination selections to display labels, including "Other".
 * @return string Comma-separated list
 */
function resolve_destinations_list($booking_data, $maps){
    $type = $booking_data['destinationType'] ?? '';
    $selected = $booking_data['destination'] ?? []; // array
    $custom = trim((string)($booking_data['customDestination'] ?? ''));
    $labels = [];

    $map = [];
    if ($type === 'national')        $map = $maps['national'];
    elseif ($type === 'international')$map = $maps['international'];
    elseif ($type === 'spiritual')   $map = $maps['spiritual'];
    elseif ($type === 'honeymoon'){
        if (($booking_data['honeymoonType'] ?? '') === 'domestic') {
            $map = $maps['honeymoon_dom'];
        } else {
            $map = $maps['honeymoon_int'];
        }
    }

    foreach ((array)$selected as $key){
        if ($key === 'other') continue; // handled below
        $labels[] = $map[$key] ?? $key;
    }

    if (in_array('other', (array)$selected, true) && $custom !== ''){
        $labels[] = $custom;
    }

    // Prefix Domestic/International for Honeymoon
    if ($type === 'honeymoon' && !empty($booking_data['honeymoonType'])) {
        $prefix = ($booking_data['honeymoonType'] === 'domestic') ? 'Domestic' : 'International';
        if (!empty($labels)) {
            $labels = array_map(fn($l)=> "$prefix - $l", $labels);
        } else {
            $labels[] = "$prefix - Other";
        }
    }

    // De-duplicate and return
    $labels = array_values(array_unique(array_filter($labels, fn($x)=>trim($x) !== '')));
    return !empty($labels) ? implode(', ', $labels) : 'Not provided';
}

// --- Email sender ---
function sendBookingEmail(array $booking_data){
    global $company_email, $company_name, $from_email, $return_path,
           $national_destinations, $international_destinations, $spiritual_destinations,
           $honeymoon_domestic_destinations, $honeymoon_international_destinations;

    $dest_type_text = destination_type_text($booking_data['destinationType'] ?? '');
    $dest_list = resolve_destinations_list($booking_data, [
        'national'      => $national_destinations,
        'international' => $international_destinations,
        'spiritual'     => $spiritual_destinations,
        'honeymoon_dom' => $honeymoon_domestic_destinations,
        'honeymoon_int' => $honeymoon_international_destinations,
    ]);
    $travelers   = travelers_text($booking_data['travelers'] ?? '');
    $travel_date = format_safe_date($booking_data['travelDate'] ?? '');

    $fullName = sanitize_header_str($booking_data['fullName'] ?? '');
    $email    = sanitize_header_str($booking_data['email'] ?? '');
    $mobile   = sanitize_header_str(($booking_data['countryCode'] ?? '+91') . ' ' . ($booking_data['mobile'] ?? ''));

    // Headers
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: ".sanitize_header_str($company_name)." <{$from_email}>\r\n";
    $headers .= "Reply-To: {$company_email}\r\n";

    // Customer email (optional)
    $customer_email_sent = false;
    if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $customer_subject = "Booking Confirmation - {$company_name}";
        $customer_message = "
        <html><body style='font-family:Arial,sans-serif;line-height:1.6;color:#333'>
          <div style='background:linear-gradient(135deg,#ffaa02,#764ba2);color:#fff;padding:16px;text-align:center'>
            <h2 style='margin:0'>{$company_name}</h2>
            <div>Booking Confirmation</div>
          </div>
          <div style='padding:16px'>
            <p>Dear <strong>".h($fullName)."</strong>,</p>
            <p>Thank you for choosing {$company_name}! Your booking request has been received.</p>
            <div style='background:#f9f9f9;border-radius:8px;padding:12px;border:1px solid #eee'>
              <h3 style='margin-top:0'>Booking Details</h3>
              <p><strong>Name:</strong> ".h($fullName)."</p>
              <p><strong>Email:</strong> ".h($email ?: 'Not provided')."</p>
              <p><strong>Mobile:</strong> ".h($mobile)."</p>
              <p><strong>Destination Type:</strong> ".h($dest_type_text)."</p>
              <p><strong>Destinations:</strong> ".h($dest_list)."</p>
              <p><strong>Travelers:</strong> ".h($travelers)."</p>
              <p><strong>Travel Date:</strong> ".h($travel_date)."</p>
            </div>
            <p style='margin-top:14px'>Our consultant will contact you within 24 hours to discuss the itinerary and pricing.</p>
            <p style='margin:0'>Best regards,<br><strong>{$company_name} Team</strong></p>
          </div>
        </body></html>";
        $customer_email_sent = @mail($email, $customer_subject, $customer_message, $headers, "-f{$return_path}");
    }

    // Admin email (always)
    $admin_subject = "New Booking Request - " . ($fullName ?: 'Customer');
    $admin_message = "
    <html><body style='font-family:Arial,sans-serif;line-height:1.6;color:#333'>
      <div style='background:#dc3545;color:#fff;padding:16px;text-align:center'>
        <h2 style='margin:0'>NEW BOOKING REQUEST</h2>
        <div>{$company_name}</div>
      </div>
      <div style='padding:16px'>
        <div style='background:#fff3cd;border:1px solid #ffe08a;border-radius:8px;padding:10px;margin-bottom:12px'>
          <strong>Action Required:</strong> Please contact the customer within 24 hours.
        </div>
        <div style='background:#f9f9f9;border:1px solid #eee;border-left:4px solid #dc3545;border-radius:8px;padding:12px'>
          <h3 style='margin-top:0'>Customer Details</h3>
          <p><strong>Name:</strong> ".h($fullName)."</p>
          <p><strong>Email:</strong> ".h($email ?: 'Not provided')."</p>
          <p><strong>Mobile:</strong> ".h($mobile)."</p>
          <p><strong>Destination Type:</strong> ".h($dest_type_text)."</p>
          <p><strong>Destinations:</strong> ".h($dest_list)."</p>
          <p><strong>Travelers:</strong> ".h($travelers)."</p>
          <p><strong>Travel Date:</strong> ".h($travel_date)."</p>
          <p><strong>Submitted at:</strong> ".h(date('F j, Y g:i A'))."</p>
        </div>
      </div>
    </body></html>";
    $admin_email_sent = @mail($company_email, $admin_subject, $admin_message, $headers, "-f{$return_path}");

    $_SESSION['email_status'] = [
        'customer_sent'  => (bool)$customer_email_sent,
        'admin_sent'     => (bool)$admin_email_sent,
        'customer_email' => $email
    ];

    return $customer_email_sent || $admin_email_sent;
}

// --- Session bootstrap ---
if (!isset($_SESSION['booking_data'])) {
    $_SESSION['booking_data'] = [
        'fullName'         => '',
        'email'            => '',
        'countryCode'      => '+91',
        'mobile'           => '',
        'destinationType'  => '',
        'destination'      => [], // ARRAY now
        'customDestination'=> '',
        'honeymoonType'    => '',
        'travelers'        => '',
        'travelDate'       => ''
    ];
}

// --- Handle POST ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_booking'])) {
        session_destroy();
        session_start();
        header('Location: ?step=1');
        exit;
    }

    if (isset($_POST['step1_submit'])) {
        $fullName        = sanitize_header_str($_POST['fullName'] ?? '');
        $email           = sanitize_header_str($_POST['email'] ?? '');
        $countryCode     = sanitize_header_str($_POST['countryCode'] ?? '+91');
        $mobile          = sanitize_header_str($_POST['mobile'] ?? '');
        $destinationType = sanitize_header_str($_POST['destinationType'] ?? '');
        $destination     = sanitize_array_strings($_POST['destination'] ?? []); // ARRAY
        $customDest      = sanitize_header_str($_POST['customDestination'] ?? '');
        $honeymoonType   = sanitize_header_str($_POST['honeymoonType'] ?? '');
        $travelers       = sanitize_header_str($_POST['travelers'] ?? '');
        $travelDate      = sanitize_header_str($_POST['travelDate'] ?? '');

        // Validation
        $errors = [];
        if ($fullName === '' || strlen($fullName) < 2) $errors[] = 'Name is required';
        if ($mobile === '' || !preg_match('/^\d{10}$/', preg_replace('/\s+/', '', $mobile))) $errors[] = 'Valid 10-digit mobile is required';
        if ($destinationType === '') $errors[] = 'Destination type is required';
        if ($destinationType === 'honeymoon' && $honeymoonType === '') $errors[] = 'Honeymoon type is required';

        // At least one destination or a custom one
        $hasDest = count(array_filter($destination, fn($x)=>$x !== '')) > 0;
        $needsCustom = in_array('other', $destination, true);
        if (!$hasDest) $errors[] = 'Select at least one destination';
        if ($needsCustom && $customDest === '') $errors[] = 'Please enter your custom destination';

        if ($travelDate === '') $errors[] = 'Travel date is required';

        if (!empty($errors)) {
            $_SESSION['booking_data'] = [
                'fullName'         => $fullName,
                'email'            => $email,
                'countryCode'      => $countryCode,
                'mobile'           => $mobile,
                'destinationType'  => $destinationType,
                'destination'      => $destination,
                'customDestination'=> $customDest,
                'honeymoonType'    => $honeymoonType,
                'travelers'        => $travelers,
                'travelDate'       => $travelDate
            ];
            $_SESSION['form_errors'] = $errors;
            header('Location: ?step=1');
            exit;
        }

        $_SESSION['booking_data'] = [
            'fullName'         => $fullName,
            'email'            => $email,
            'countryCode'      => $countryCode,
            'mobile'           => $mobile,
            'destinationType'  => $destinationType,
            'destination'      => $destination,
            'customDestination'=> $customDest,
            'honeymoonType'    => $honeymoonType,
            'travelers'        => $travelers,
            'travelDate'       => $travelDate
        ];

        $email_sent = sendBookingEmail($_SESSION['booking_data']);
        $_SESSION['booking_verified'] = true;
        $_SESSION['email_sent'] = $email_sent;

        header('Location: ?step=2');
        exit;
    }
}

// --- Which step? ---
$current_step = isset($_GET['step']) && in_array($_GET['step'], ['1','2'], true) ? (int)$_GET['step'] : 1;

if ($current_step === 2 && empty($_SESSION['booking_verified'])) {
    header('Location: ?step=1');
    exit;
}

$bd = $_SESSION['booking_data'];

// helper for selecting in multiselect
function selected_in($arr, $val){ return in_array($val, (array)$arr, true) ? 'selected' : ''; }

$SK_ROOT_PREFIX = '';
$SK_PAGE_TITLE = 'Book Your Tour | Grand SK Holidays';
$SK_META_KEYWORDS = 'tour booking form, holiday enquiry, Grand SK Holidays booking, honeymoon booking, spiritual tour booking';
$SK_META_DESCRIPTION = 'Submit your holiday enquiry with Grand SK Holidays for domestic, international, spiritual, honeymoon and cruise travel planning.';
$SK_BODY_CLASS = 'booking-page';
$SK_SKIP_SK_CSS = true;
$SK_PAGE_ASSETS = [
    '<link rel="stylesheet" href="' . h($SK_ROOT_PREFIX) . 'bookingform.css">'
];

require __DIR__ . '/header.php';
?>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="back-button">
                <a href="<?php echo h($SK_ROOT_PREFIX); ?>./" class="btn-back-page">
                    <i class="fas fa-arrow-left"></i>
                    <span>Back to Home</span>
                </a>
            </div>

            <div class="row align-items-center booking-hero-row">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title">Plan Your Next Holiday With <?= h($company_name) ?></h1>
                        <p class="hero-subtitle">Share your destination choices, travel date and traveler details, and our team will get back to you with the best-fit package.</p>
                        <div class="hero-features">
                            <div class="feature-item"><i class="fas fa-check-circle"></i><span>Fast itinerary assistance</span></div>
                            <div class="feature-item"><i class="fas fa-shield-alt"></i><span>Trusted booking support</span></div>
                            <div class="feature-item"><i class="fas fa-headset"></i><span>Responsive travel experts</span></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="registration-card">
                        <div class="card-header">
                            <h2>Start Your Journey</h2>
                            <p>Fill in your details and we will help you build the right tour plan.</p>
                        </div>

                        <!-- Step Indicator -->
                        <div class="step-indicator">
                            <div class="step <?= ($current_step >= 1 ? 'active' : '') . ($current_step > 1 ? ' completed' : '') ?>" data-step="1">
                                <div class="step-number">1</div>
                                <div class="step-title">Booking Details</div>
                            </div>
                            <div class="step <?= ($current_step >= 2 ? 'active' : '') ?>" data-step="2">
                                <div class="step-number">2</div>
                                <div class="step-title">Complete</div>
                            </div>
                        </div>

                        <?php if (!empty($_SESSION['form_errors']) && $current_step == 1): ?>
                            <div class="alert alert-danger">
                                <?php foreach ($_SESSION['form_errors'] as $e) echo '<div>'.h($e).'</div>'; unset($_SESSION['form_errors']); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($current_step == 1): ?>
                        <!-- STEP 1 FORM -->
                        <form method="post" action="" id="registrationForm" novalidate>
                            <div class="form-step active" id="step1">
                                <div class="form-group">
                                    <label for="fullName"><i class="fas fa-user"></i> Full Name *</label>
                                    <input type="text" id="fullName" name="fullName" value="<?= h($bd['fullName']) ?>" required>
                                    <div class="error-message"></div>
                                </div>

                                <div class="form-group">
                                    <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
                                    <input type="email" id="email" name="email" value="<?= h($bd['email']) ?>">
                                    <div class="error-message"></div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile"><i class="fas fa-phone"></i> Mobile Number *</label>
                                    <div class="phone-input">
                                        <select id="countryCode" name="countryCode">
                                            <option value="+91"  <?= $bd['countryCode']=='+91'  ? 'selected':''; ?>>+91 (India)</option>
                                            <option value="+1"   <?= $bd['countryCode']=='+1'   ? 'selected':''; ?>>+1 (USA)</option>
                                            <option value="+44"  <?= $bd['countryCode']=='+44'  ? 'selected':''; ?>>+44 (UK)</option>
                                            <option value="+971" <?= $bd['countryCode']=='+971' ? 'selected':''; ?>>+971 (UAE)</option>
                                        </select>
                                        <input type="tel" id="mobile" name="mobile" placeholder="9876543210" value="<?= h($bd['mobile']) ?>" required>
                                    </div>
                                    <div class="error-message"></div>
                                </div>

                                <!-- Destination Type -->
                                <div class="destination-type-group">
                                    <label><i class="fas fa-globe"></i> Destination Type *</label>
                                    <div class="destination-type-options">
                                        <div class="destination-type-option <?= $bd['destinationType']=='national' ? 'selected':''; ?>" data-type="national">
                                            <i class="fas fa-map-marked-alt"></i><div class="option-label">National</div><small>Within India</small>
                                        </div>
                                        <div class="destination-type-option <?= $bd['destinationType']=='international' ? 'selected':''; ?>" data-type="international">
                                            <i class="fas fa-plane"></i><div class="option-label">International</div><small>Outside India</small>
                                        </div>
                                        <div class="destination-type-option <?= $bd['destinationType']=='spiritual' ? 'selected':''; ?>" data-type="spiritual">
                                            <i class="fas fa-place-of-worship"></i><div class="option-label">Spiritual</div><small>Religious Tours</small>
                                        </div>
                                        <div class="destination-type-option <?= $bd['destinationType']=='honeymoon' ? 'selected':''; ?>" data-type="honeymoon">
                                            <i class="fas fa-heart"></i><div class="option-label">Honeymoon</div><small>Romantic Getaways</small>
                                        </div>
                                    </div>
                                    <input type="hidden" id="destinationType" name="destinationType" value="<?= h($bd['destinationType']) ?>" required>
                                    <div class="error-message"></div>
                                </div>

                                <!-- National (MULTISELECT) -->
                                <div class="destination-select-group <?= $bd['destinationType']=='national' ? 'active':''; ?>" id="nationalDestinationGroup">
                                    <div class="form-group">
                                        <label for="nationalDestination"><i class="fas fa-map-marker-alt"></i> National Destinations *</label>
                                        <select id="nationalDestination" name="destination[]" <?= $bd['destinationType']=='national'?'required':''; ?> multiple size="8" onchange="handleDestinationChange('national')">
                                            <?php foreach($national_destinations as $k=>$v): ?>
                                                <option value="<?= h($k) ?>" <?= selected_in($bd['destination'],$k); ?>><?= h($v) ?></option>
                                            <?php endforeach; ?>
                                            <option value="other" <?= selected_in($bd['destination'],'other'); ?>>Other Destination</option>
                                        </select>
                                        <div class="select-hint">Hold Ctrl (Windows) or ⌘ (Mac) to select multiple.</div>
                                        <input type="text" id="customNationalDestination" name="customDestination" placeholder="Enter your national destination"
                                               value="<?= h($bd['destinationType']=='national' ? $bd['customDestination'] : '') ?>"
                                               style="display: <?= ($bd['destinationType']=='national' && in_array('other',(array)$bd['destination'],true)) ? 'block':'none'; ?>; margin-top:10px;">
                                        <div class="error-message"></div>
                                    </div>
                                </div>

                                <!-- International (MULTISELECT) -->
                                <div class="destination-select-group <?= $bd['destinationType']=='international' ? 'active':''; ?>" id="internationalDestinationGroup">
                                    <div class="form-group">
                                        <label for="internationalDestination"><i class="fas fa-map-marker-alt"></i> International Destinations *</label>
                                        <select id="internationalDestination" name="destination[]" <?= $bd['destinationType']=='international'?'required':''; ?> multiple size="8" onchange="handleDestinationChange('international')">
                                            <?php foreach($international_destinations as $k=>$v): ?>
                                                <option value="<?= h($k) ?>" <?= selected_in($bd['destination'],$k); ?>><?= h($v) ?></option>
                                            <?php endforeach; ?>
                                            <option value="other" <?= selected_in($bd['destination'],'other'); ?>>Other Destination</option>
                                        </select>
                                        <div class="select-hint">Hold Ctrl (Windows) or ⌘ (Mac) to select multiple.</div>
                                        <input type="text" id="customInternationalDestination" name="customDestination" placeholder="Enter your international destination"
                                               value="<?= h($bd['destinationType']=='international' ? $bd['customDestination'] : '') ?>"
                                               style="display: <?= ($bd['destinationType']=='international' && in_array('other',(array)$bd['destination'],true)) ? 'block':'none'; ?>; margin-top:10px;">
                                        <div class="error-message"></div>
                                    </div>
                                </div>

                                <!-- Spiritual (MULTISELECT) -->
                                <div class="destination-select-group <?= $bd['destinationType']=='spiritual' ? 'active':''; ?>" id="spiritualDestinationGroup">
                                    <div class="form-group">
                                        <label for="spiritualDestination"><i class="fas fa-map-marker-alt"></i> Spiritual Destinations *</label>
                                        <select id="spiritualDestination" name="destination[]" <?= $bd['destinationType']=='spiritual'?'required':''; ?> multiple size="8" onchange="handleDestinationChange('spiritual')">
                                            <?php foreach($spiritual_destinations as $k=>$v): ?>
                                                <option value="<?= h($k) ?>" <?= selected_in($bd['destination'],$k); ?>><?= h($v) ?></option>
                                            <?php endforeach; ?>
                                            <option value="other" <?= selected_in($bd['destination'],'other'); ?>>Other Destination</option>
                                        </select>
                                        <div class="select-hint">Hold Ctrl (Windows) or ⌘ (Mac) to select multiple.</div>
                                        <input type="text" id="customSpiritualDestination" name="customDestination" placeholder="Enter your spiritual destination"
                                               value="<?= h($bd['destinationType']=='spiritual' ? $bd['customDestination'] : '') ?>"
                                               style="display: <?= ($bd['destinationType']=='spiritual' && in_array('other',(array)$bd['destination'],true)) ? 'block':'none'; ?>; margin-top:10px;">
                                        <div class="error-message"></div>
                                    </div>
                                </div>

                                <!-- Honeymoon -->
                                <div class="destination-select-group <?= $bd['destinationType']=='honeymoon' ? 'active':''; ?>" id="honeymoonDestinationGroup">
                                    <div class="honeymoon-type-group <?= $bd['destinationType']=='honeymoon' ? 'active':''; ?>" id="honeymoonTypeGroup">
                                        <label><i class="fas fa-ring"></i> Honeymoon Type *</label>
                                        <div class="honeymoon-type-options">
                                            <div class="honeymoon-type-option <?= $bd['honeymoonType']=='domestic' ? 'selected':''; ?>" data-type="domestic">
                                                <i class="fas fa-home"></i><div class="option-label">Domestic</div><small>Within India</small>
                                            </div>
                                            <div class="honeymoon-type-option <?= $bd['honeymoonType']=='international' ? 'selected':''; ?>" data-type="international">
                                                <i class="fas fa-plane"></i><div class="option-label">International</div><small>Outside India</small>
                                            </div>
                                        </div>
                                        <input type="hidden" id="honeymoonType" name="honeymoonType" value="<?= h($bd['honeymoonType']) ?>" <?= $bd['destinationType']=='honeymoon'?'required':''; ?>>
                                        <div class="error-message"></div>
                                    </div>

                                    <!-- Domestic Honeymoon (MULTISELECT) -->
                                    <div class="form-group" id="domesticHoneymoonGroup" style="display: <?= ($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='domestic') ? 'block':'none'; ?>;">
                                        <label for="domesticHoneymoonDestination"><i class="fas fa-map-marker-alt"></i> Honeymoon Destinations *</label>
                                        <select id="domesticHoneymoonDestination" name="destination[]" <?= ($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='domestic')?'required':''; ?> multiple size="8" onchange="handleDestinationChange('domesticHoneymoon')">
                                            <?php foreach($honeymoon_domestic_destinations as $k=>$v): ?>
                                                <option value="<?= h($k) ?>" <?= selected_in($bd['destination'],$k); ?>><?= h($v) ?></option>
                                            <?php endforeach; ?>
                                            <option value="other" <?= selected_in($bd['destination'],'other'); ?>>Other Destination</option>
                                        </select>
                                        <div class="select-hint">Hold Ctrl (Windows) or ⌘ (Mac) to select multiple.</div>
                                        <input type="text" id="customDomesticHoneymoonDestination" name="customDestination" placeholder="Enter your honeymoon destination"
                                               value="<?= h(($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='domestic') ? $bd['customDestination'] : '') ?>"
                                               style="display: <?= ($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='domestic' && in_array('other',(array)$bd['destination'],true)) ? 'block':'none'; ?>; margin-top:10px;">
                                        <div class="error-message"></div>
                                    </div>

                                    <!-- International Honeymoon (MULTISELECT) -->
                                    <div class="form-group" id="internationalHoneymoonGroup" style="display: <?= ($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='international') ? 'block':'none'; ?>;">
                                        <label for="internationalHoneymoonDestination"><i class="fas fa-map-marker-alt"></i> Honeymoon Destinations *</label>
                                        <select id="internationalHoneymoonDestination" name="destination[]" <?= ($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='international')?'required':''; ?> multiple size="8" onchange="handleDestinationChange('internationalHoneymoon')">
                                            <?php foreach($honeymoon_international_destinations as $k=>$v): ?>
                                                <option value="<?= h($k) ?>" <?= selected_in($bd['destination'],$k); ?>><?= h($v) ?></option>
                                            <?php endforeach; ?>
                                            <option value="other" <?= selected_in($bd['destination'],'other'); ?>>Other Destination</option>
                                        </select>
                                        <div class="select-hint">Hold Ctrl (Windows) or ⌘ (Mac) to select multiple.</div>
                                        <input type="text" id="customInternationalHoneymoonDestination" name="customDestination" placeholder="Enter your honeymoon destination"
                                               value="<?= h(($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='international') ? $bd['customDestination'] : '') ?>"
                                               style="display: <?= ($bd['destinationType']=='honeymoon' && $bd['honeymoonType']=='international' && in_array('other',(array)$bd['destination'],true)) ? 'block':'none'; ?>; margin-top:10px;">
                                        <div class="error-message"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="travelers"><i class="fas fa-users"></i> Number of Travelers *</label>
                                            <select id="travelers" name="travelers" required>
                                                <option value="">Select</option>
                                                <option value="1"  <?= $bd['travelers']=='1'  ? 'selected':''; ?>>1 Person</option>
                                                <option value="2"  <?= $bd['travelers']=='2'  ? 'selected':''; ?>>2 People</option>
                                                <option value="3"  <?= $bd['travelers']=='3'  ? 'selected':''; ?>>3 People</option>
                                                <option value="4"  <?= $bd['travelers']=='4'  ? 'selected':''; ?>>4 People</option>
                                                <option value="5+" <?= $bd['travelers']=='5+' ? 'selected':''; ?>>5+ People</option>
                                            </select>
                                            <div class="error-message"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="travelDate"><i class="fas fa-calendar-alt"></i> Travel Date *</label>
                                    <input type="date" id="travelDate" name="travelDate" value="<?= h($bd['travelDate']) ?>" required>
                                    <div class="error-message"></div>
                                </div>

                                <button type="submit" name="step1_submit" class="btn-next">
                                    Submit Booking Request <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                        <?php endif; ?>

                        <?php if ($current_step == 2): ?>
                        <!-- STEP 2: Confirmation -->
                        <form method="post" action="">
                            <div class="form-step active" id="step2">
                                <div class="success-section">
                                    <div class="success-icon"><i class="fas fa-check-circle"></i></div>
                                    <h3>Booking Request Submitted!</h3>
                                    <p>Thank you for choosing <?= h($company_name) ?>. Your booking request has been submitted successfully.</p>

                                    <?php $es = $_SESSION['email_status'] ?? ['customer_sent'=>false,'admin_sent'=>false,'customer_email'=>'']; ?>
                                    <div class="email-status <?= ($es['customer_sent'] || $es['admin_sent']) ? 'success' : 'warning'; ?>">
                                        <h4><i class="fas fa-envelope"></i> Email Notification</h4>

                                        <?php if (!empty($es['admin_sent'])): ?>
                                            <div class="email-status-item">
                                                <div class="email-status-icon"><i class="fas fa-check-circle text-success"></i></div>
                                                <span>Notification sent to <?= h($company_name) ?> team</span>
                                            </div>
                                        <?php else: ?>
                                            <div class="email-status-item">
                                                <div class="email-status-icon"><i class="fas fa-exclamation-triangle text-warning"></i></div>
                                                <span>Admin notification failed - our team will contact you soon</span>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($es['customer_email'])): ?>
                                            <?php if (!empty($es['customer_sent'])): ?>
                                                <div class="email-status-item">
                                                    <div class="email-status-icon"><i class="fas fa-check-circle text-success"></i></div>
                                                    <span>Confirmation email sent to <?= h($es['customer_email']) ?></span>
                                                </div>
                                            <?php else: ?>
                                                <div class="email-status-item">
                                                    <div class="email-status-icon"><i class="fas fa-exclamation-triangle text-warning"></i></div>
                                                    <span>Confirmation email not sent - check your spam folder or contact us</span>
                                                </div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <div class="email-status-item">
                                                <div class="email-status-icon"><i class="fas fa-info-circle text-info"></i></div>
                                                <span>No email provided - we'll contact you via phone</span>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="booking-summary">
                                        <h4>Booking Summary</h4>
                                        <div class="summary-item"><span>Name:</span><span id="summaryName"><?= h($bd['fullName']) ?></span></div>
                                        <div class="summary-item"><span>Email:</span><span id="summaryEmail"><?= h($bd['email'] ?: 'Not provided') ?></span></div>
                                        <div class="summary-item"><span>Mobile:</span><span id="summaryMobile"><?= h($bd['countryCode'].' '.$bd['mobile']) ?></span></div>
                                        <div class="summary-item"><span>Destination Type:</span><span id="summaryDestinationType"><?= h(destination_type_text($bd['destinationType'])) ?></span></div>

                                        <?php if ($bd['destinationType']=='honeymoon' && !empty($bd['honeymoonType'])): ?>
                                        <div class="summary-item"><span>Honeymoon Type:</span><span id="summaryHoneymoonType"><?= h($bd['honeymoonType']=='domestic'?'Domestic':'International') ?></span></div>
                                        <?php endif; ?>

                                        <div class="summary-item">
                                            <span>Destinations:</span>
                                            <span id="summaryDestination"><?= h(resolve_destinations_list($bd, [
                                                'national'      => $national_destinations,
                                                'international' => $international_destinations,
                                                'spiritual'     => $spiritual_destinations,
                                                'honeymoon_dom' => $honeymoon_domestic_destinations,
                                                'honeymoon_int' => $honeymoon_international_destinations,
                                            ])) ?></span>
                                        </div>
                                        <div class="summary-item"><span>Travelers:</span><span id="summaryTravelers"><?= h(travelers_text($bd['travelers'])) ?></span></div>
                                        <div class="summary-item"><span>Travel Date:</span><span id="summaryTravelDate"><?= h(format_safe_date($bd['travelDate'])) ?></span></div>
                                    </div>

                                    <div class="contact-info">
                                        <h4>Our team will contact you soon!</h4>
                                        <p>For immediate assistance:</p>
                                        <div class="contact-details">
                                            <div class="contact-item"><i class="fas fa-phone"></i><span>+91 72004 49904</span></div>
                                            <div class="contact-item"><i class="fas fa-envelope"></i><span>sales@grandskholidays.com</span></div>
                                        </div>
                                    </div>

                                    <button type="submit" name="new_booking" class="btn-new-booking">
                                        <i class="fas fa-plus"></i> New Booking
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating particles -->
    <div class="particles">
        <div class="particle"></div><div class="particle"></div><div class="particle"></div>
        <div class="particle"></div><div class="particle"></div><div class="particle"></div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        initializeForm();
        setupEventListeners();
        setMinDate();
    });

    function initializeForm(){
        setMinDate();
        setupDestinationTypeSelection();
        setupHoneymoonTypeSelection();
        const type = document.getElementById('destinationType')?.value || '';
        if (type) showDestinationGroup(type);
        if (type === 'honeymoon') {
            const ht = document.getElementById('honeymoonType')?.value || '';
            if (ht) showHoneymoonDestinationGroup(ht);
        }
    }

    function setupDestinationTypeSelection(){
        document.querySelectorAll('.destination-type-option').forEach(el=>{
            el.addEventListener('click',()=> selectDestinationType(el.getAttribute('data-type')));
        });
    }
    function setupHoneymoonTypeSelection(){
        document.querySelectorAll('.honeymoon-type-option').forEach(el=>{
            el.addEventListener('click',()=> selectHoneymoonType(el.getAttribute('data-type')));
        });
    }

    function selectDestinationType(type){
        document.querySelectorAll('.destination-type-option').forEach(o=>o.classList.remove('selected'));
        const sel = document.querySelector(`.destination-type-option[data-type="${type}"]`);
        if (sel) sel.classList.add('selected');
        document.getElementById('destinationType').value = type;

        showDestinationGroup(type);

        // clear selections
        ['nationalDestination','internationalDestination','spiritualDestination','domesticHoneymoonDestination','internationalHoneymoonDestination']
          .forEach(id=>{ const el=document.getElementById(id); if (el) { [...el.options].forEach(op=>op.selected=false); } });

        // hide custom inputs
        ['customNationalDestination','customInternationalDestination','customSpiritualDestination','customDomesticHoneymoonDestination','customInternationalHoneymoonDestination']
          .forEach(id=>{ const el=document.getElementById(id); if (el){ el.style.display='none'; el.value=''; } });

        // set requireds
        const req = (id,cond)=>{ const el=document.getElementById(id); if(el){ cond?el.setAttribute('required','required'):el.removeAttribute('required'); } };
        req('nationalDestination', type==='national');
        req('internationalDestination', type==='international');
        req('spiritualDestination', type==='spiritual');
        req('honeymoonType', type==='honeymoon');
    }

    function selectHoneymoonType(type){
        document.querySelectorAll('.honeymoon-type-option').forEach(o=>o.classList.remove('selected'));
        const el = document.querySelector(`.honeymoon-type-option[data-type="${type}"]`);
        if (el) el.classList.add('selected');
        document.getElementById('honeymoonType').value = type;

        showHoneymoonDestinationGroup(type);

        // reset selects & custom fields
        ['domesticHoneymoonDestination','internationalHoneymoonDestination'].forEach(id=>{
            const s=document.getElementById(id); if(s){ [...s.options].forEach(op=>op.selected=false); }
        });
        ['customDomesticHoneymoonDestination','customInternationalHoneymoonDestination'].forEach(id=>{
            const i=document.getElementById(id); if(i){ i.style.display='none'; i.value=''; }
        });

        const req = (id,cond)=>{ const el=document.getElementById(id); if(el){ cond?el.setAttribute('required','required'):el.removeAttribute('required'); } };
        req('domesticHoneymoonDestination', type==='domestic');
        req('internationalHoneymoonDestination', type==='international');
    }

    function showDestinationGroup(type){
        document.querySelectorAll('.destination-select-group').forEach(g=>g.classList.remove('active'));
        const g = document.getElementById(type+'DestinationGroup');
        if (g) g.classList.add('active');

        const hgroup = document.getElementById('honeymoonTypeGroup');
        if (type==='honeymoon'){ hgroup?.classList.add('active'); }
        else {
            hgroup?.classList.remove('active');
            document.getElementById('domesticHoneymoonGroup').style.display='none';
            document.getElementById('internationalHoneymoonGroup').style.display='none';
        }
    }
    function showHoneymoonDestinationGroup(type){
        document.getElementById('domesticHoneymoonGroup').style.display = (type==='domestic')?'block':'none';
        document.getElementById('internationalHoneymoonGroup').style.display = (type==='international')?'block':'none';
    }

    function handleDestinationChange(group){
        let sel=null, custom=null;
        if (group==='national'){ sel=document.getElementById('nationalDestination'); custom=document.getElementById('customNationalDestination'); }
        if (group==='international'){ sel=document.getElementById('internationalDestination'); custom=document.getElementById('customInternationalDestination'); }
        if (group==='spiritual'){ sel=document.getElementById('spiritualDestination'); custom=document.getElementById('customSpiritualDestination'); }
        if (group==='domesticHoneymoon'){ sel=document.getElementById('domesticHoneymoonDestination'); custom=document.getElementById('customDomesticHoneymoonDestination'); }
        if (group==='internationalHoneymoon'){ sel=document.getElementById('internationalHoneymoonDestination'); custom=document.getElementById('customInternationalHoneymoonDestination'); }

        if (sel && custom){
            const values = [...sel.selectedOptions].map(o=>o.value);
            if (values.includes('other')){
                custom.style.display='block';
                custom.setAttribute('required','required');
            } else {
                custom.style.display='none';
                custom.value='';
                custom.removeAttribute('required');
            }
        }
    }

    function setupEventListeners(){
        const form = document.getElementById('registrationForm');
        if (!form) return;

        const reqs = form.querySelectorAll('[required]');
        reqs.forEach(el=>{
            el.addEventListener('blur', ()=>validateField(el));
            el.addEventListener('input', ()=>clearError(el));
        });

        const mobile = document.getElementById('mobile');
        if (mobile){
            mobile.addEventListener('input', (e)=>{
                let v = e.target.value.replace(/\D/g,'').slice(0,10);
                e.target.value = v;
            });
        }

        form.addEventListener('submit', function(e){
            let ok = true;
            form.querySelectorAll('[required]').forEach(el=>{ if (!validateField(el)) ok=false; });

            // destination validation: at least one selected in the visible select
            const type = document.getElementById('destinationType').value;
            let visibleSelId = null;
            if (type==='national') visibleSelId='nationalDestination';
            if (type==='international') visibleSelId='internationalDestination';
            if (type==='spiritual') visibleSelId='spiritualDestination';
            if (type==='honeymoon'){
                const ht=document.getElementById('honeymoonType').value;
                if (!ht){ showError(document.getElementById('honeymoonType'),'Please select honeymoon type'); ok=false; }
                visibleSelId = (ht==='domestic')?'domesticHoneymoonDestination':'internationalHoneymoonDestination';
            }
            if (visibleSelId){
                const sel = document.getElementById(visibleSelId);
                const selected = [...sel.selectedOptions].map(o=>o.value);
                const needsCustom = selected.includes('other');
                if (selected.length===0){
                    showError(sel,'Select at least one destination'); ok=false;
                }
                if (needsCustom){
                    const customId = sel.id.replace('Destination',''); // rough, but we handle specifically below
                    let customInput = null;
                    if (sel.id==='nationalDestination') customInput=document.getElementById('customNationalDestination');
                    if (sel.id==='internationalDestination') customInput=document.getElementById('customInternationalDestination');
                    if (sel.id==='spiritualDestination') customInput=document.getElementById('customSpiritualDestination');
                    if (sel.id==='domesticHoneymoonDestination') customInput=document.getElementById('customDomesticHoneymoonDestination');
                    if (sel.id==='internationalHoneymoonDestination') customInput=document.getElementById('customInternationalHoneymoonDestination');
                    if (customInput && !customInput.value.trim()){
                        showError(customInput,'Please enter your custom destination'); ok=false;
                    }
                }
            }

            if (!ok){ e.preventDefault(); }
        });
    }

    function validateField(field){
        const val = (field.value || '').trim();
        let msg = '';

        if (field.hasAttribute('required') && !val && field.tagName !== 'SELECT'){
            msg = 'This field is required';
        } else if (val){
            switch(field.name){
                case 'fullName':
                    if (val.length < 2) msg = 'Name must be at least 2 characters';
                    else if (!/^[a-zA-Z\s]+$/.test(val)) msg = 'Name can contain only letters and spaces';
                    break;
                case 'email':
                    if (val && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) msg = 'Enter a valid email';
                    break;
                case 'mobile':
                    if (!/^\d{10}$/.test(val)) msg = 'Enter a valid 10-digit mobile';
                    break;
                case 'travelDate':
                    const today = new Date(); today.setHours(0,0,0,0);
                    const sel = new Date(val);
                    if (sel < today) msg = 'Travel date cannot be in the past';
                    break;
            }
        }

        if (msg){ showError(field, msg); return false; }
        clearError(field); return true;
    }
    function showError(field, msg){
        field.classList.add('error');
        const err = field.parentNode.querySelector('.error-message');
        if (err) err.textContent = msg;
    }
    function clearError(field){
        field.classList.remove('error');
        const err = field.parentNode.querySelector('.error-message');
        if (err) err.textContent = '';
    }
    function setMinDate(){
        const d = document.getElementById('travelDate');
        if (d) d.setAttribute('min', new Date().toISOString().split('T')[0]);
    }
    </script>
<?php require __DIR__ . '/footer.php'; ?>
