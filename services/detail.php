<?php
require_once __DIR__ . '/../includes/bootstrap.php';
require_once __DIR__ . '/../includes/service-content.php';

$slug = trim((string)($_GET['slug'] ?? ''));
$services = approved_services();

if ($slug === '' || !isset($services[$slug])) {
    http_response_code(404);
    $pageTitle = 'Service Not Found | ' . $config['business_name'];
    require __DIR__ . '/../includes/header.php';
    ?>
    <section class="section not-found">
        <div class="container">
            <div class="eyebrow"><span></span> SERVICE PAGE</div>
            <h1>This service page is <em>not available.</em></h1>
            <p>Please visit our services page to explore Apna Cleaning services.</p>
            <a class="button button-primary" href="<?= e(page_url('services')) ?>">
                Back to services <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </section>
    <?php
    require __DIR__ . '/../includes/footer.php';
    exit;
}

$s = $services[$slug];
$title = $s['title'] ?? 'Cleaning Service';
$details = service_page_content()[$slug] ?? null;

if (!$details) {
    http_response_code(404);
    $pageTitle = 'Service Information Unavailable | ' . $config['business_name'];
    require __DIR__ . '/../includes/header.php';
    ?>
    <section class="section not-found">
        <div class="container">
            <h1>Service information is being updated.</h1>
            <a class="button button-primary" href="<?= e(page_url('services')) ?>">Back to services</a>
        </div>
    </section>
    <?php
    require __DIR__ . '/../includes/footer.php';
    exit;
}

$image = $s['image'] ?? 'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=1600&q=85';
$pageTitle = $title . ' in Andheri, Mumbai | ' . $config['business_name'];
$pageDescription = $s['summary'] . ' Serving ' . implode(', ', $config['service_areas']) . '.';
$canonical = site_url('services/' . $slug);

require __DIR__ . '/../includes/header.php';
?>

<!-- SERVICE HERO -->
<section class="service-detail-hero">
    <div class="service-detail-hero-image" style="background-image:url('<?= e($image) ?>')"></div>
    <div class="service-detail-hero-shade"></div>

    <div class="container service-detail-hero-content">
        <div class="eyebrow eyebrow-light">
            <span></span> <?= e(strtoupper($s['category'] ?? 'PROFESSIONAL CLEANING')) ?>
        </div>

        <h1><?= e($title) ?></h1>
        <p><?= e($details['intro']) ?></p>

        <div class="service-detail-actions">
            <a class="button button-primary" href="<?= e(page_url('contact.php')) ?>">
                Enquire About This Service <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a class="button button-outline" href="<?= e(page_url('services')) ?>">All Services</a>
        </div>

        <div class="breadcrumbs">
            <a href="<?= e(site_url()) ?>">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <a href="<?= e(page_url('services')) ?>">Services</a>
            <i class="fa-solid fa-angle-right"></i>
            <span><?= e($title) ?></span>
        </div>
    </div>
</section>

<!-- INTRODUCTION -->
<section class="section service-detail-intro">
    <div class="container">
        <div class="service-detail-intro-grid">
            <div>
                <div class="eyebrow"><span></span> ABOUT THIS SERVICE</div>
                <h2>Professional care for a <em>cleaner space.</em></h2>
            </div>
            <div class="service-detail-intro-copy">
                <p><?= e($details['intro']) ?></p>
                <p>
                    Apna Cleaning serves enquiries in <?= e($config['location']) ?>.
                    Tell us your locality, the surface or item involved and the result you have in mind.
                    The exact method, inclusions, quotation and availability are confirmed before the visit.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SERVICE SCOPE -->
<section class="section service-detail-scope">
    <div class="container">
        <div class="section-heading">
            <div class="eyebrow"><span></span> SERVICE SCOPE</div>
            <h2>What this service <em>covers.</em></h2>
            <p>The points below are a guide to the areas that can be discussed. Final inclusions depend on the item, material, access and agreed quotation.</p>
        </div>

        <div class="service-detail-focus-grid">
            <?php foreach ($details['focus'] as $item): ?>
                <div class="service-detail-focus-card">
                    <span class="service-detail-check"><i class="fa-solid fa-check"></i></span>
                    <h3><?= e($item) ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- BENEFITS -->
<section class="section service-detail-benefits">
    <div class="container">
        <div class="service-detail-benefits-grid">
            <div class="service-detail-benefits-heading">
                <div class="eyebrow"><span></span> THE APNA CLEANING APPROACH</div>
                <h2>A cleaner space starts with the <em>right attention.</em></h2>
                <p>We discuss the material, condition and areas you want addressed so the service scope is clear before work is arranged.</p>
            </div>
            <div class="service-detail-benefit-list">
                <?php foreach ($details['benefits'] as $benefit): ?>
                    <div class="service-detail-benefit-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span><?= e($benefit) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="section service-detail-process">
    <div class="container">
        <div class="section-heading centered">
            <div class="eyebrow"><span></span> HOW IT WORKS</div>
            <h2>Simple steps to get your <em>space cleaned.</em></h2>
            <p>Share a few details and confirm the plan before the service is scheduled.</p>
        </div>

        <div class="service-detail-process-grid">
            <?php foreach ($details['process'] as $index => $step): ?>
                <div class="service-detail-process-card">
                    <span class="service-detail-step-number"><?= sprintf('%02d', $index + 1) ?></span>
                    <p><?= e($step) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="section service-detail-faq">
    <div class="container">
        <div class="section-heading centered">
            <div class="eyebrow"><span></span> FREQUENTLY ASKED QUESTIONS</div>
            <h2>Questions about <?= e($title) ?>?</h2>
            <p>Useful details to consider before making an enquiry.</p>
        </div>

        <div class="service-detail-faq-list">
            <?php foreach ($details['faqs'] as $index => $faq): ?>
                <details class="service-detail-faq-item" <?= $index === 0 ? 'open' : '' ?>>
                    <summary><span><?= e($faq[0]) ?></span><i class="fa-solid fa-plus"></i></summary>
                    <div class="service-detail-faq-answer"><p><?= e($faq[1]) ?></p></div>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section service-detail-cta">
    <div class="container">
        <div class="service-detail-cta-box">
            <div class="eyebrow eyebrow-light"><span></span> READY TO GET STARTED?</div>
            <h2>Looking for <?= e($title) ?> in Mumbai?</h2>
            <p>Contact Apna Cleaning with your location, item details and preferred schedule. We will discuss the service scope and current availability.</p>
            <div class="service-detail-actions">
                <a class="button button-primary" href="<?= e(page_url('contact.php')) ?>">
                    Make an Enquiry <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="<?= e(site_url('services')) ?>" class="text-link">Explore All Services <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
