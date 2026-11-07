<?php
require_once __DIR__ . '/includes/bootstrap.php';

$services = approved_services();
$pageTitle = 'Upholstery & Home Cleaning Services in Andheri, Mumbai | ' . $config['business_name'];
$pageDescription = 'Explore sofa, carpet, mattress, curtain, window and home cleaning services from Apna Cleaning in Andheri West, Andheri East and nearby Mumbai locations.';
$canonical = site_url('services');

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero page-hero-compact">
    <div class="page-hero-image" style="background-image:url('https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=1800&q=85')"></div>
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="eyebrow eyebrow-light"><span></span> APNA CLEANING SERVICES</div>
        <h1>Professional care for <em>every space.</em></h1>
        <p>Explore upholstery, mattress, carpet, curtain, window and home cleaning services in Andheri, Mumbai.</p>
        <div class="breadcrumbs">
            <a href="<?= e(site_url()) ?>">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <span>Services</span>
        </div>
    </div>
</section>

<section class="section services-catalogue-section">
    <div class="container">
        <div class="section-heading centered services-catalogue-heading reveal">
            <div class="eyebrow"><span></span> PROFESSIONAL CLEANING SOLUTIONS</div>
            <h2>Explore our complete range of <em>cleaning services.</em></h2>
            <p>From sofas and carpets to mattresses, curtains, windows and complete home cleaning, choose a service to explore its dedicated page and details.</p>
        </div>

        <?php if ($services): ?>
            <div class="approved-service-grid services-catalogue-grid">
                <?php foreach ($services as $slug => $service): ?>
                    <?php
                    $serviceTitle = $service['title'] ?? 'Cleaning Service';
                    $serviceSummary = $service['summary'] ?? 'Contact us to discuss your cleaning requirement.';
                    $image = $service['image'] ?? 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=1000&q=85';
                    $serviceCategory = $service['category'] ?? 'Professional Cleaning';
                    ?>
                    <article class="approved-service-card services-catalogue-card">
                        <a class="service-card-image"
                           href="<?= e(page_url('services/' . rawurlencode($slug))) ?>"
                           aria-label="<?= e($serviceTitle) ?> details">
                            <img src="<?= e($image) ?>"
                                 alt="<?= e($serviceTitle) ?> in Andheri Mumbai"
                                 loading="lazy"
                                 decoding="async"
                                 referrerpolicy="no-referrer">
                            <span class="service-card-image-label">
                                <i class="fa-solid fa-sparkles"></i>
                                <?= e(strtoupper($serviceCategory)) ?>
                            </span>
                        </a>
                        <div class="service-card-content">
                            <span class="service-card-kicker">
                                <i class="fa-solid fa-circle-check"></i>
                                APNA CLEANING
                            </span>
                            <h3><?= e($serviceTitle) ?></h3>
                            <p><?= e($serviceSummary) ?></p>
                            <a class="service-card-link" href="<?= e(page_url('services/' . rawurlencode($slug))) ?>">
                                Explore Service <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="catalogue-pending">
                <h3>Service information is being updated.</h3>
                <p>Please contact us to discuss your cleaning requirements.</p>
                <a class="button button-primary" href="<?= e(page_url('contact.php')) ?>">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <div class="section-heading centered">
            <div class="eyebrow"><span></span> PLAN YOUR CLEANING REQUIREMENT</div>
            <h2>Let's understand your <em>space and needs.</em></h2>
            <p>Share your locality, item or room details, approximate size and preferred schedule. We will discuss the suitable service scope and quotation.</p>
        </div>

        <div class="quote-detail-grid">
            <div><i class="fa-solid fa-location-dot"></i><h3>Your Location</h3><p>Andheri West, Andheri East and nearby Mumbai locations.</p></div>
            <div><i class="fa-solid fa-ruler-combined"></i><h3>Item or Space</h3><p>Share sofa seats, mattress size, carpet dimensions, room count or window quantity.</p></div>
            <div><i class="fa-solid fa-broom"></i><h3>Cleaning Requirement</h3><p>Tell us about the material, condition, stains and areas needing attention.</p></div>
            <div><i class="fa-solid fa-calendar-check"></i><h3>Preferred Schedule</h3><p>Share your preferred date and timing for availability confirmation.</p></div>
        </div>

        <div class="services-bottom-cta">
            <h2>Need help choosing a cleaning service?</h2>
            <p>Contact Apna Cleaning and describe what you would like cleaned.</p>
            <a class="button button-primary" href="<?= e(page_url('contact.php')) ?>">Discuss Your Requirement <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
