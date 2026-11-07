
<?php
require_once __DIR__ . '/bootstrap.php';

$pageTitle = $pageTitle ?? ($config['business_name'] . ' | Professional Cleaning Services in Andheri, Mumbai');

$pageDescription = $pageDescription ?? 'Professional upholstery and home cleaning services in Andheri West, Andheri East and nearby Mumbai locations. Explore services and contact Apna Cleaning.';

$canonical = $canonical ?? site_url(
    ltrim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/')
);

$canonical = rtrim($canonical, '/') ?: site_url();

$flash = get_flash();
$services = approved_services();

/* CURRENT PAGE DETECTION */

$requestPath = trim(
    parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/',
    '/'
);

$basePath = trim(
    parse_url($config['base_url'] ?? '', PHP_URL_PATH) ?: '',
    '/'
);

if ($basePath !== '' && strpos($requestPath, $basePath) === 0) {
    $requestPath = trim(substr($requestPath, strlen($basePath)), '/');
}

$currentPage = $requestPath;

$isHome = ($currentPage === '' || $currentPage === 'index.php');
$isAbout = ($currentPage === 'about.php');

$isServices = (
    $currentPage === 'services.php' ||
    $currentPage === 'services' ||
    strpos($currentPage, 'services/') === 0
);

$isGallery = ($currentPage === 'gallery.php');
$isWhyUs = ($currentPage === 'why-choose-us.php');

$isBlog = (
    $currentPage === 'blog' ||
    $currentPage === 'blog/index.php' ||
    strpos($currentPage, 'blog/') === 0
);

$isQna = ($currentPage === 'qna.php');
$isContact = ($currentPage === 'contact.php');

$headerPhone = $config['phone'] ?? '';
$headerPhoneLink = $config['phone_link'] ?? preg_replace('/[^0-9+]/', '', $headerPhone);
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#071a23">

    <title><?= e($pageTitle) ?></title>

    <meta name="description" content="<?= e($pageDescription) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($config['business_name']) ?>">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDescription) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:image" content="<?= e(asset('images/og-cover.svg')) ?>">

    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/png" href="<?= e(asset('images/apna-cleaning-favicon.png')) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="<?= e(asset('css/style.css')) ?>">

    <script type="application/ld+json"><?= json_ld() ?></script>

</head>

<body>

<a class="skip-link" href="#main">Skip to content</a>

<!-- TOP BAR -->

<div class="topbar">
    <div class="container topbar-inner">

        <div class="topbar-left">

            <span>
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                <?= e($config['location']) ?>
            </span>

            <span class="topbar-email">
    <i class="fa-solid fa-envelope" aria-hidden="true"></i>
    <a href="mailto:<?= e($config['email']) ?>">
        <?= e($config['email']) ?>
    </a>
</span>

<span class="topbar-hours">
    <i class="fa-regular fa-clock" aria-hidden="true"></i>
    Available 24 Hours
</span>

        </div>

        
<div class="topbar-right">

    <?php if ($headerPhone): ?>

        <a href="tel:<?= e($headerPhoneLink) ?>">
            <i class="fa-solid fa-phone"></i>
            <?= e($headerPhone) ?>
        </a>

    <?php endif; ?>

    <a
        class="topbar-whatsapp"
        href="https://wa.me/<?= e(preg_replace('/\D+/', '', $config['whatsapp'])) ?>?text=<?= rawurlencode('Hello Apna Cleaning, I would like to enquire about your cleaning services.') ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat with Apna Cleaning on WhatsApp"
    >
        <i class="fa-brands fa-whatsapp"></i>
        WhatsApp
    </a>

</div>


    </div>
</div>

<!-- MAIN HEADER -->

<header class="site-header" id="site-header">

    <div class="container nav-wrap">

        <!-- LOGO -->

        <a class="brand"
           href="<?= e(site_url()) ?>"
           aria-label="<?= e($config['business_name']) ?> home">

            <img
                src="<?= e(asset('images/apna-cleaning-logo.jpg')) ?>"
                width="54"
                height="54"
                alt="">

            <span class="brand-copy">
                <strong><?= e($config['brand_name']) ?></strong>
                <small><?= e($config['brand_descriptor']) ?></small>
            </span>

        </a>

   <!-- MOBILE HAMBURGER MENU -->
<button class="menu-toggle"
        type="button"
        aria-label="Open navigation"
        aria-expanded="false"
        aria-controls="primary-navigation">
    <span></span>
    <span></span>
    <span></span>
</button>


        <!-- NAVIGATION -->

        <nav
            class="primary-nav"
            id="primary-navigation"
            aria-label="Primary navigation">

            <a
                class="nav-link<?= $isHome ? ' active' : '' ?>"
                href="<?= e(site_url()) ?>"
                <?= $isHome ? 'aria-current="page"' : '' ?>>
                Home
            </a>

            <a
                class="nav-link<?= $isAbout ? ' active' : '' ?>"
                href="<?= e(page_url('about.php')) ?>"
                <?= $isAbout ? 'aria-current="page"' : '' ?>>
                About
            </a>

            <!-- SERVICES -->

            <div class="nav-dropdown<?= $isServices ? ' active' : '' ?>">

                <a
                    class="nav-link dropdown-trigger<?= $isServices ? ' active' : '' ?>"
                    href="<?= e(site_url('services')) ?>"
                    aria-haspopup="true"
                    <?= $isServices ? 'aria-current="page"' : '' ?>>

                    Services
                    <i class="fa-solid fa-chevron-down"></i>

                </a>

                <div class="dropdown-panel services-mega-panel">

                    <div class="services-mega-header">
                        <span>OUR SERVICES</span>
                        <h3>Professional Cleaning Solutions</h3>
                    </div>

                    <div class="services-mega-grid">

                        <?php if ($services): ?>

                            <?php foreach ($services as $slug => $service): ?>

                                <a
                                    class="services-mega-item"
                                    href="<?= e(page_url('services/' . rawurlencode($slug))) ?>">

                                    <i class="fa-solid fa-sparkles service-icon"></i>

                                    <span>
                                        <?= e($service['title'] ?? 'Cleaning service') ?>
                                    </span>

                                    <i class="fa-solid fa-arrow-up-right-from-square service-arrow"></i>

                                </a>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <div class="dropdown-pending">
                                <i class="fa-regular fa-hourglass-half"></i>

                                <span>
                                    <b>Catalogue in preparation</b>
                                    <small>Offerings will appear after approval</small>
                                </span>
                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <a
                class="nav-link<?= $isGallery ? ' active' : '' ?>"
                href="<?= e(page_url('gallery.php')) ?>"
                <?= $isGallery ? 'aria-current="page"' : '' ?>>
                Gallery
            </a>

            <a
                class="nav-link<?= $isWhyUs ? ' active' : '' ?>"
                href="<?= e(page_url('why-choose-us.php')) ?>"
                <?= $isWhyUs ? 'aria-current="page"' : '' ?>>
                Why Us
            </a>

            <a
                class="nav-link<?= $isBlog ? ' active' : '' ?>"
                href="<?= e(page_url('blog')) ?>"
                <?= $isBlog ? 'aria-current="page"' : '' ?>>
                Blog
            </a>

            <a
                class="nav-link<?= $isQna ? ' active' : '' ?>"
                href="<?= e(page_url('qna.php')) ?>"
                <?= $isQna ? 'aria-current="page"' : '' ?>>
                Q&amp;A
            </a>

            <a
                class="nav-link<?= $isContact ? ' active' : '' ?>"
                href="<?= e(page_url('contact.php')) ?>"
                <?= $isContact ? 'aria-current="page"' : '' ?>>
                Contact
            </a>

            <a
                class="button button-small nav-cta"
                href="<?= e(page_url('contact.php')) ?>">

                Get a free quote
                <i class="fa-solid fa-arrow-up-right-from-square"></i>

            </a>

            <!-- MOBILE PHONE DETAILS -->

            <?php if ($headerPhone): ?>

                <a class="mobile-menu-phone" href="tel:<?= e($headerPhoneLink) ?>">
                    <i class="fa-solid fa-phone"></i>
                    <span>Call Us: <?= e($headerPhone) ?></span>
                </a>

            <?php endif; ?>

        </nav>

    </div>

</header>

<!-- FLASH MESSAGE -->

<?php if ($flash): ?>

    <div class="container flash-wrap">

        <div
            class="flash flash-<?= e($flash['type']) ?>"
            role="status">

            <?= e($flash['message']) ?>

        </div>

    </div>

<?php endif; ?>

<main id="main">
