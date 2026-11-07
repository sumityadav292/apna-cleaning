<?php
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = 'Why Choose Apna Cleaning | Andheri, Mumbai';
$pageDescription = 'Discover the Apna Cleaning approach to upholstery and home cleaning enquiries in Andheri West, Andheri East and nearby Mumbai.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="page-hero-image" style="background-image:url('https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=1800&q=82')"></div>
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="eyebrow eyebrow-light"><span></span> THE APNA CLEANING APPROACH</div>
        <h1>Confidence comes from <em>clarity.</em></h1>
        <p>Understand the work, align expectations and make an informed decision.</p>
        <div class="breadcrumbs"><a href="<?= e(site_url()) ?>">Home</a><i class="fa-solid fa-angle-right"></i><span>Why choose us</span></div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="section-heading centered reveal">
            <div class="eyebrow"><span></span> OUR CUSTOMER APPROACH</div>
            <h2>Make every detail <em>easier to understand.</em></h2>
            <p>We want you to understand the service method, scope, quotation and schedule before arranging a cleaning visit.</p>
        </div>
        <div class="why-grid">
            <?php
            $items = [
                ['fa-comments', 'Listen to the requirement', 'Start with the item, room, material and the outcome you want to achieve.'],
                ['fa-list-check', 'Discuss the scope', 'Clarify the surfaces, areas, access requirements and any special considerations.'],
                ['fa-file-invoice', 'Understand the quotation', 'Review what is included, what may be extra and which terms apply to your enquiry.'],
                ['fa-calendar-check', 'Confirm availability', 'Agree a suitable date and timing directly with Apna Cleaning.'],
                ['fa-shield-heart', 'Respect your space', 'Raise concerns about delicate fabrics, leather finishes, glass coatings or fragile items.'],
                ['fa-circle-question', 'Ask before you proceed', 'Take time to clarify the cleaning method and after-care instructions.'],
            ];
            foreach ($items as $i => $item):
            ?>
                <article class="why-card reveal <?= ($i % 3 ? 'reveal-delay' : '') ?>">
                    <div class="why-card-top"><i class="fa-solid <?= e($item[0]) ?>"></i><span><?= sprintf('%02d', $i + 1) ?></span></div>
                    <h3><?= e($item[1]) ?></h3>
                    <p><?= e($item[2]) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section section-dark">
    <div class="container clarity-banner reveal">
        <div><div class="eyebrow eyebrow-light"><span></span> READY TO TALK?</div><h2>Start with a clear <em>conversation.</em></h2><p>Share your cleaning requirement and locality to discuss the next step.</p></div>
        <a class="button button-primary" href="<?= e(page_url('contact.php')) ?>">Contact Apna Cleaning <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
