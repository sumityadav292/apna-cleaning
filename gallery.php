
<?php
require_once __DIR__ . '/includes/bootstrap.php';

$pageTitle = 'Cleaning Gallery | Apna Cleaning Mumbai';
$pageDescription = 'Explore home, upholstery, carpet, kitchen, bedroom and window cleaning inspiration from Apna Cleaning in Mumbai.';

require __DIR__ . '/includes/header.php';

$gallery = [

    [
        'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1400&q=85',
        'Beautiful Living Spaces',
        'Clean, comfortable and welcoming home interiors',
        'HOME INTERIORS'
    ],

    [
        'https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=1400&q=85',
        'Kitchen Cleaning',
        'A fresh perspective on kitchen surfaces and details',
        'KITCHEN'
    ],

    [
        'https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=1400&q=85',
        'Modern Home Interiors',
        'Thoughtfully designed spaces with a clean appearance',
        'RESIDENTIAL'
    ],

    [
        'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1400&q=85',
        'Fresh and Calm Corners',
        'Little details that make a living space inviting',
        'HOME CARE'
    ],

    [
        'https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1400&q=85',
        'Comfortable Living Areas',
        'Inspiration for sofas, carpets and everyday comfort',
        'UPHOLSTERY'
    ],

    [
        'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1400&q=85',
        'Elegant Floor Spaces',
        'Beautiful flooring and well-maintained interiors',
        'FLOOR CARE'
    ],

    [
        'https://images.unsplash.com/photo-1620626011761-996317b8d101?auto=format&fit=crop&w=1400&q=85',
        'Modern Bathroom Spaces',
        'A clean and refreshing bathroom environment',
        'BATHROOM'
    ],

    [
        'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=1400&q=85',
        'Sofa and Living Comfort',
        'Furniture and upholstery cleaning inspiration',
        'SOFA CARE'
    ],

    [
        'https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1400&q=85',
        'Professional Office Spaces',
        'Organised and comfortable workplace interiors',
        'OFFICE'
    ],

    [
        'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1400&q=85',
        'Commercial Interiors',
        'Clean and welcoming spaces for businesses',
        'COMMERCIAL'
    ],

    [
        'https://images.unsplash.com/photo-1600210492493-0946911123ea?auto=format&fit=crop&w=1400&q=85',
        'Beautiful Residential Spaces',
        'Interior inspiration for a comfortable home',
        'RESIDENTIAL'
    ],

    [
        'https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?auto=format&fit=crop&w=1400&q=85',
        'Cleaning and Home Care',
        'Inspiration for maintaining a fresh environment',
        'CLEANING'
    ],

];

?>

<!-- GALLERY HERO -->
<section class="page-hero page-hero-compact">

    <div class="page-hero-image"
         style="background-image:url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1800&q=85')">
    </div>

    <div class="page-hero-overlay"></div>

    <div class="container page-hero-content">

        <div class="eyebrow eyebrow-light">
            <span></span> OUR VISUAL GALLERY
        </div>

        <h1>Inspiration for a cleaner, <em>better space.</em></h1>

        <p>
            Explore beautiful interiors, comfortable living spaces and
            cleaning inspiration for homes, offices and commercial properties
            across Mumbai.
        </p>

        <div class="breadcrumbs">
            <a href="<?= e(site_url()) ?>">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <span>Gallery</span>
        </div>

    </div>
</section>


<!-- GALLERY INTRO -->
<section class="section gallery-intro-section">

    <div class="container">

        <div class="gallery-intro-grid">

            <div>

                <div class="eyebrow">
                    <span></span> EXPLORE OUR GALLERY
                </div>

                <h2>
                    Every space deserves a little
                    <em>extra care.</em>
                </h2>

            </div>

            <div class="gallery-intro-copy">

                <p>
                    From comfortable living rooms and modern kitchens to
                    bathrooms, upholstery and professional workspaces,
                    discover inspiration for cleaner surroundings.
                </p>

                <p>
                    Explore different spaces and cleaning categories
                    connected with our residential and commercial cleaning
                    services in Mumbai.
                </p>

                <p>
                    Every space deserves a fresh touch. Explore beautifully
                    maintained homes, gleaming kitchens, refreshing bathrooms,
                    comfortable upholstery and modern commercial spaces.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- GALLERY GRID -->
<section class="section gallery-main-section">

    <div class="container">

        <div class="section-heading centered">

            <div class="eyebrow">
                <span></span> CLEANING & INTERIOR INSPIRATION
            </div>

            <h2>
                Explore our visual
                <em>collection.</em>
            </h2>

            <p>
                Discover beautiful spaces, surfaces and interiors
                that inspire a cleaner and more comfortable environment.
            </p>

        </div>


        <div class="full-gallery">

            <?php foreach ($gallery as $i => $g): ?>

                <button
                    class="gallery-tile reveal <?= ($i % 5 === 0 ? 'tile-wide' : '') ?>"
                    type="button"
                    data-lightbox="<?= e($g[0]) ?>"
                    data-caption="<?= e($g[1] . ' | ' . $g[2]) ?>"
                    aria-label="<?= e('View ' . $g[1]) ?>"
                >

                    <img
                        src="<?= e($g[0]) ?>"
                        alt="<?= e($g[1] . ' - ' . $g[2]) ?>"
                        loading="lazy"
                    >

                    <span class="gallery-tile-copy">

                        <small><?= e($g[3]) ?></small>

                        <strong><?= e($g[1]) ?></strong>

                        <span class="gallery-tile-description">
                            <?= e($g[2]) ?>
                        </span>

                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    </span>

                </button>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- GALLERY CTA -->
<section class="section gallery-cta-section">

    <div class="container">

        <div class="gallery-cta-box">

            <div class="eyebrow eyebrow-light">
                <span></span> NEED PROFESSIONAL CLEANING?
            </div>

            <h2>
                Let's make your space
                <em>feel fresh.</em>
            </h2>

            <p>
                Looking for home deep cleaning, sofa cleaning, kitchen
                cleaning, office cleaning or another cleaning service
                in Mumbai? Get in touch to discuss your requirements.
            </p>

            <div class="gallery-cta-actions">

                <a class="button button-primary"
                   href="<?= e(page_url('services')) ?>">

                    Explore Our Services
                    <i class="fa-solid fa-arrow-right"></i>

                </a>

                <a class="button button-outline"
                   href="<?= e(page_url('contact.php')) ?>">

                    Contact Us

                </a>

            </div>

        </div>

    </div>

</section>


<!-- LIGHTBOX -->
<div class="lightbox" aria-hidden="true">

    <button class="lightbox-close"
            type="button"
            aria-label="Close image">

        <i class="fa-solid fa-xmark"></i>

    </button>

    <img src="" alt="Gallery image">

    <p></p>

</div>


<?php require __DIR__ . '/includes/footer.php'; ?>
