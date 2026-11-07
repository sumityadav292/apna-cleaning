<?php
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = 'About Apna Cleaning | Upholstery & Home Cleaning in Andheri';
$pageDescription = 'Get to know Apna Cleaning, providing professional upholstery and home cleaning services in Andheri West, Andheri East and nearby Mumbai locations.';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="page-hero-image" style="background-image:url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1800&q=82')"></div>
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="eyebrow eyebrow-light"><span></span> GET TO KNOW APNA CLEANING</div>
        <h1>Thoughtful care for <em>the spaces you use.</em></h1>
        <p><?= e($config['business_category']) ?> in Andheri, Mumbai.</p>
        <div class="breadcrumbs"><a href="<?= e(site_url()) ?>">Home</a><i class="fa-solid fa-angle-right"></i><span>About us</span></div>
    </div>
</section>
<section class="section">
    <div class="container about-page-grid">
        <div class="about-page-image reveal">
            <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=1100&q=82" alt="Clean and comfortable contemporary home interior" loading="lazy">
            <span class="image-sticker"><i class="fa-solid fa-sparkles"></i> Apna Cleaning</span>
        </div>
        <div class="about-page-copy reveal reveal-delay">
            <div class="eyebrow"><span></span> OUR APPROACH</div>
            <h2>A better clean begins with <em>understanding.</em></h2>
            <p class="lead-copy">Every sofa, mattress, carpet, curtain and home has different cleaning requirements.</p>
            <p>Apna Cleaning focuses on professional upholstery and home cleaning services. We begin by understanding the material, current condition, access and the areas you want addressed.</p>
            <p>Our service catalogue includes dedicated pages for sofa cleaning, carpets, mattresses, curtains, windows and home cleaning. Before a visit is arranged, we discuss the suitable method, inclusions, quotation and availability with you.</p>
            <p>Our listed service areas are Andheri West, Andheri East and nearby Mumbai locations. Share your locality and cleaning requirement so we can confirm whether the service can be arranged.</p>
        </div>
    </div>
</section>
<section class="section section-dark">
    <div class="container">
        <div class="section-heading centered reveal">
            <div class="eyebrow eyebrow-light"><span></span> THE PRINCIPLES</div>
            <h2>Keep it clear. Keep it <em>considered.</em></h2>
            <p>A straightforward approach helps make the cleaning requirement and next steps easier to understand.</p>
        </div>
        <div class="principle-grid">
            <article class="principle-card reveal"><span>01</span><i class="fa-solid fa-ear-listen"></i><h3>Listen first</h3><p>Understand the item, material, property and result you want to achieve.</p></article>
            <article class="principle-card reveal reveal-delay"><span>02</span><i class="fa-solid fa-clipboard-check"></i><h3>Define the scope</h3><p>Clarify inclusions, exclusions, access and any special surface considerations.</p></article>
            <article class="principle-card reveal reveal-delay-2"><span>03</span><i class="fa-solid fa-calendar-days"></i><h3>Confirm the details</h3><p>Discuss the quotation, service method and available date before proceeding.</p></article>
        </div>
    </div>
</section>
<section class="section">
    <div class="container address-band reveal">
        <div class="address-band-icon"><i class="fa-solid fa-location-dot"></i></div>
        <div>
            <div class="eyebrow"><span></span> BUSINESS ADDRESS</div>
            <h2>Based in <em>Jogeshwari West.</em></h2>
            <p><?= e($config['address']) ?></p>
        </div>
        <a class="button button-dark" href="https://www.google.com/maps/search/?api=1&query=<?= rawurlencode($config['address']) ?>" target="_blank" rel="noopener noreferrer">Open map <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
