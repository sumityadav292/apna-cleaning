
<?php
require_once __DIR__.'/includes/bootstrap.php';

$pageTitle = 'Apna Cleaning | Upholstery & Home Cleaning Services in Andheri, Mumbai';
$pageDescription = 'Apna Cleaning provides professional sofa, carpet, mattress, curtain, window and home cleaning service enquiries in Andheri West, Andheri East and nearby Mumbai locations.';

require __DIR__.'/includes/header.php';
?>

<!-- ==========================================
     HOMEPAGE HERO SLIDER
========================================== -->

<section class="hero hero-home">

    <div class="hero-slider" id="heroSlider" aria-label="Cleaning and interior images">

        <div class="hero-slide is-active">
            <img src="<?=e(asset('images/1.png'))?>" alt="" fetchpriority="high">
        </div>

        <div class="hero-slide">
            <img src="<?=e(asset('images/2.png'))?>" alt="" loading="eager">
        </div>

        <div class="hero-slide">
            <img src="<?=e(asset('images/3.png'))?>" alt="" loading="eager">
        </div>

    </div>

    <div class="hero-shade"></div>

    <div class="hero-orb orb-one"></div>
    <div class="hero-orb orb-two"></div>

    <div class="container hero-content">

        <div class="hero-copy reveal">

            <div class="eyebrow eyebrow-light">
                <span></span>
                PROFESSIONAL UPHOLSTERY & HOME CLEANING IN ANDHERI
            </div>

            <h1>
                A fresher home.
                <em>A more comfortable space.</em>
            </h1>

            <p class="hero-lead">
                From sofas and mattresses to carpets, curtains, windows and complete home cleaning,
                explore professional cleaning services from Apna Cleaning in Andheri, Mumbai.
            </p>

            <div class="hero-actions">

                <a class="button button-primary"
                   href="<?=e(page_url('contact.php'))?>">
                    Get Your Free Quote
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a class="button button-ghost"
                   href="<?=e(page_url('about.php'))?>">
                    Explore Our Approach
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>

            </div>

            <div class="hero-note">

                <span class="note-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </span>

                <span>
                    <strong>Serving Andheri &amp; nearby Mumbai</strong>
                    <small><?= e($config['service_area_label']) ?></small>
                </span>

            </div>

        </div>

    </div>

    <div class="hero-slider-dots" aria-label="Choose hero image">

        <button class="is-active" type="button"
                data-slide-to="0" aria-label="Show image 1"></button>

        <button type="button"
                data-slide-to="1" aria-label="Show image 2"></button>

        <button type="button"
                data-slide-to="2" aria-label="Show image 3"></button>

    </div>

    <div class="hero-bottom container">

        <span>01 — A CONSIDERED APPROACH</span>

        <span>
            SCROLL TO EXPLORE
            <i class="fa-solid fa-arrow-down"></i>
        </span>

    </div>

</section>

<!-- END HOMEPAGE HERO -->


<!-- ==========================================
     ABOUT SECTION
========================================== -->

<section class="section section-about">

    <div class="container about-grid">

        <div class="about-visual reveal">

            <div class="about-photo photo-large">
                <img
                    src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1000&q=82"
                    alt="Calm light-filled contemporary interior"
                    loading="lazy">
            </div>

            <div class="about-photo photo-small">
                <img
                    src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?auto=format&fit=crop&w=700&q=82"
                    alt="Neatly arranged modern home interior"
                    loading="lazy">
            </div>

            <div class="about-caption">
                <i class="fa-solid fa-leaf"></i>
                <span>Care begins<br>with the details.</span>
            </div>

        </div>

        <div class="about-copy reveal">

            <div class="eyebrow">
                <span></span>
                THE IDEA BEHIND THE CLEAN
            </div>

            <h2>
                A cleaner space is about more than
                <em>what you see.</em>
            </h2>

            <p class="lead-copy">
                It is about feeling comfortable in the spaces you use every day.
            </p>

            <p>
                Apna Cleaning is focused on professional upholstery and home cleaning.
                We start by understanding the space, the surface and the result
                you are looking for, then discuss a clear service scope.
                Every property and surface has different considerations,
                so the details matter.
            </p>

            <p>
                Explore our dedicated service pages and tell us what needs attention.
                We serve enquiries in Andheri West, Andheri East and nearby Mumbai
                locations. Availability, timings and quotations are confirmed directly.
            </p>

            <a class="text-link" href="<?=e(page_url('about.php'))?>">
                More about us
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- ==========================================
     SERVICES SECTION
========================================== -->

<section class="section section-dark section-services">

    <div class="container">

        <div class="section-heading heading-split reveal">

            <div>

                <div class="eyebrow eyebrow-light">
                    <span></span>
                    START WITH YOUR SPACE
                </div>

                <h2>
                    What does a <em>better clean</em>
                    look like to you?
                </h2>

            </div>

            <p>
                Tell us about the area, the surfaces and the result you
                have in mind. The exact service options and scope can
                be confirmed before you decide.
            </p>

        </div>

        <div class="needs-grid">

            <article class="need-card reveal">

                <div class="need-number">01</div>

                <div class="need-icon">
                    <i class="fa-solid fa-house-chimney-window"></i>
                </div>

                <h3>Your space</h3>

                <p>
                    Share whether your enquiry is for a home, a workplace
                    or another type of property.
                </p>

                <a href="<?=e(page_url('contact.php'))?>"
                   class="circle-link"
                   aria-label="Enquire about your space">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>

            </article>

            <article class="need-card need-featured reveal reveal-delay">

                <div class="need-number">02</div>

                <div class="need-icon">
                    <i class="fa-solid fa-list-check"></i>
                </div>

                <h3>Your priorities</h3>

                <p>
                    Describe the areas that need attention, the surfaces
                    involved and any special considerations.
                </p>

                <a href="<?=e(page_url('contact.php'))?>"
                   class="circle-link"
                   aria-label="Share your priorities">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>

            </article>

            <article class="need-card reveal reveal-delay-2">

                <div class="need-number">03</div>

                <div class="need-icon">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>

                <h3>Your schedule</h3>

                <p>
                    Share your preferred date and timing so the business
                    can confirm current availability.
                </p>

                <a href="<?=e(page_url('contact.php'))?>"
                   class="circle-link"
                   aria-label="Discuss your schedule">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>

            </article>

        </div>

        <div class="service-note">

            <i class="fa-regular fa-circle-info"></i>

            <span>
                Explore all 26 dedicated cleaning services for your home and upholstery needs.
            </span>

            <a href="<?=e(page_url('services'))?>">
                View all services
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- ==========================================
     PROCESS SECTION
========================================== -->

<section class="section process-section">

    <div class="container">

        <div class="section-heading centered reveal">

            <div class="eyebrow">
                <span></span>
                A CLEAR WAY FORWARD
            </div>

            <h2>
                From first hello to a <em>clear plan.</em>
            </h2>

            <p>
                Four simple steps to help you understand what happens next.
            </p>

        </div>

        <div class="process-grid">

            <div class="process-line"></div>

            <article class="process-step reveal">

                <div class="process-icon">
                    <i class="fa-regular fa-message"></i>
                    <span>01</span>
                </div>

                <h3>Start a conversation</h3>

                <p>
                    Tell us about your property and what you would like to discuss.
                </p>

            </article>

            <article class="process-step reveal reveal-delay">

                <div class="process-icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>02</span>
                </div>

                <h3>Share the details</h3>

                <p>
                    Describe the rooms, surfaces, priorities and any access requirements.
                </p>

            </article>

            <article class="process-step reveal reveal-delay-2">

                <div class="process-icon">
                    <i class="fa-solid fa-file-circle-check"></i>
                    <span>03</span>
                </div>

                <h3>Confirm the scope</h3>

                <p>
                    Ask the business to confirm service availability,
                    inclusions and quotation.
                </p>

            </article>

            <article class="process-step reveal reveal-delay-3">

                <div class="process-icon">
                    <i class="fa-regular fa-calendar-days"></i>
                    <span>04</span>
                </div>

                <h3>Agree the next step</h3>

                <p>
                    Proceed only once the scope, timing and terms are clear to you.
                </p>

            </article>

        </div>

    </div>

</section>


<!-- ==========================================
     IMAGE BREAK SECTION
========================================== -->

<section class="section image-break">

    <div class="image-break-bg"></div>

    <div class="container image-break-content reveal">

        <div class="eyebrow eyebrow-light">
            <span></span>
            APNA CLEANING - PROFESSIONAL HOME CARE
        </div>

        <h2>
            Small details. Thoughtful choices.
            A space that feels <em>like yours.</em>
        </h2>

        <a class="button button-light"
           href="<?=e(page_url('contact.php'))?>">
            Tell us what you need
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>

</section>


<!-- ==========================================
     VALUES SECTION
========================================== -->

<section class="section section-values">

    <div class="container values-grid">

        <div class="values-copy reveal">

            <div class="eyebrow">
                <span></span>
                WHY CLARITY MATTERS
            </div>

            <h2>
                Good expectations make for a
                <em>better experience.</em>
            </h2>

            <p>
                Before a cleaning visit is arranged, it helps to understand
                what is needed and what can realistically be included.
                Here is the approach we encourage for every enquiry.
            </p>

            <a class="text-link"
               href="<?=e(page_url('why-choose-us.php'))?>">
                Explore our approach
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

        <div class="values-list">

            <div class="value-row reveal">

                <span class="value-icon">
                    <i class="fa-solid fa-bullseye"></i>
                </span>

                <div>
                    <h3>Start with the actual requirement</h3>
                    <p>
                        Describe your space rather than relying on a broad service label.
                    </p>
                </div>

                <span class="value-index">01</span>

            </div>

            <div class="value-row reveal">

                <span class="value-icon">
                    <i class="fa-solid fa-file-lines"></i>
                </span>

                <div>
                    <h3>Make the scope understandable</h3>
                    <p>
                        Confirm inclusions, exclusions and any special surface considerations.
                    </p>
                </div>

                <span class="value-index">02</span>

            </div>

            <div class="value-row reveal">

                <span class="value-icon">
                    <i class="fa-solid fa-clock"></i>
                </span>

                <div>
                    <h3>Check timing and availability</h3>
                    <p>
                        Agree the date and expected duration directly with the business.
                    </p>
                </div>

                <span class="value-index">03</span>

            </div>

            <div class="value-row reveal">

                <span class="value-icon">
                    <i class="fa-solid fa-comments"></i>
                </span>

                <div>
                    <h3>Keep communication open</h3>
                    <p>
                        Ask questions before confirming a booking or quotation.
                    </p>
                </div>

                <span class="value-index">04</span>

            </div>

        </div>

    </div>

</section>


<!-- ==========================================
     GALLERY PREVIEW
========================================== -->

<section class="section gallery-preview">

    <div class="container">

        <div class="section-heading heading-split reveal">

            <div>

                <div class="eyebrow">
                    <span></span>
                    SPACES THAT INSPIRE
                </div>

                <h2>
                    A little inspiration for a <em>fresh start.</em>
                </h2>

            </div>

            <p>
                Creating cleaner, fresher and more comfortable spaces for our valued clients.
            </p>

        </div>

        <div class="gallery-mosaic">

            <a class="mosaic-item mosaic-tall reveal"
               href="<?=e(page_url('gallery.php'))?>">

                <img
                    src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=82"
                    alt="Bright contemporary living area"
                    loading="lazy">

                <span>Light-filled living</span>

            </a>

            <a class="mosaic-item reveal reveal-delay"
               href="<?=e(page_url('gallery.php'))?>">

                <img
                    src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=900&q=82"
                    alt="Modern kitchen interior"
                    loading="lazy">

                <span>Thoughtful details</span>

            </a>

            <a class="mosaic-item reveal reveal-delay-2"
               href="<?=e(page_url('gallery.php'))?>">

                <img
                    src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=900&q=82"
                    alt="Minimal organised interior"
                    loading="lazy">

                <span>Calm surroundings</span>

            </a>

        </div>

        <div class="center-action">

            <a class="text-link" href="<?=e(page_url('gallery.php'))?>">
                View the inspiration gallery
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>



<?php
$allHomeServices = approved_services();
$homeServices = array_filter($allHomeServices, static function ($service) {
    return !empty($service['featured']);
});

/* The homepage highlights the six core categories; the full catalogue contains every dedicated service. */
?>

<!-- ==========================================
     PREMIUM HOME SERVICES SECTION
========================================== -->

<section class="section home-services-section" id="our-services">

    <div class="container">

        <!-- SECTION HEADING -->

        <div class="home-services-heading reveal">

            <div class="eyebrow">
                <span></span>
                OUR CLEANING SERVICES
            </div>

            <h2>
                Professional Cleaning Solutions
                <em>For Every Space.</em>
            </h2>

            <p>
                Explore our main cleaning categories, then choose from dedicated
                service pages for sofas, carpets, mattresses, curtains, windows
                and home cleaning across Andheri and nearby Mumbai locations.
            </p>

        </div>


        <!-- SERVICE CARDS -->

        <div class="home-services-grid">

            <?php foreach ($homeServices as $slug => $service): ?>

                <?php
                $visual = [
                    'image' => $service['image'] ?? '',
                    'description' => $service['summary'] ?? 'Explore our cleaning service options.',
                    'icon' => $service['icon'] ?? 'fa-sparkles'
                ];

                $serviceTitle = $service['title'] ?? 'Cleaning Service';
                ?>

                <a
                    href="<?= e(page_url('services/' . rawurlencode($slug))) ?>"
                    class="home-service-card reveal"
                    aria-label="<?= e($serviceTitle) ?> - View service details">

                    <!-- IMAGE -->

                    <div class="home-service-image">

                        <img
                            src="<?= e($visual['image']) ?>"
                            alt="<?= e($serviceTitle) ?>"
                            loading="lazy"
                            decoding="async">

                        <div class="home-service-image-overlay"></div>


                        <!-- TOP ICON -->

                        <span class="home-service-icon">
                            <i class="fa-solid <?= e($visual['icon']) ?>"></i>
                        </span>


                        <!-- NUMBER -->

                        <span class="home-service-number">
                            <?= str_pad((string)($slug === '' ? 0 : array_search($slug, array_keys($homeServices), true) + 1), 2, '0', STR_PAD_LEFT) ?>
                        </span>

                    </div>


                    <!-- CARD CONTENT -->

                    <div class="home-service-content">

                        <h3><?= e($serviceTitle) ?></h3>

                        <p><?= e($visual['description']) ?></p>

                        <div class="home-service-link">

                            <span>Explore Service</span>

                            <i class="fa-solid fa-arrow-right"></i>

                        </div>

                    </div>

                </a>

            <?php endforeach; ?>

        </div>


        <!-- BOTTOM CTA -->

        <div class="home-services-bottom reveal">

            <p>
                
            </p>

            <a href="<?= e(page_url('contact.php')) ?>"
               class="button button-primary">

                Discuss Your Requirement

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>



<!-- ==========================================
     CUSTOMER FEEDBACK
========================================== -->

<section class="section feedback-section">

    <div class="container feedback-grid">

        <div class="feedback-copy reveal">

            <div class="eyebrow">
                <span></span>
                CUSTOMER FEEDBACK
            </div>

            <h2>
                Every customer experience <em>matters.</em>
            </h2>

            <p>
                Customer satisfaction is an important part of the service experience.
                We value honest feedback and believe in sharing genuine customer
                experiences with transparency.
            </p>

        </div>

        <div class="feedback-placeholder reveal reveal-delay">

            <div class="quote-mark">“</div>

            <div class="feedback-stars" aria-label="Customer ratings not yet published">
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
            </div>

            <h3>Honest feedback builds lasting trust.</h3>

            <p>
                We are committed to listening to our customers and sharing
                authentic feedback with their permission.
            </p>

            <span class="placeholder-label">
                CUSTOMER FEEDBACK
            </span>

        </div>

    </div>

</section>


<!-- ==========================================
     PREMIUM HOMEPAGE CONTENT
========================================== -->

<section class="section detail-experience">

    <div class="container">

        <div class="section-heading centered reveal">

            <div class="eyebrow">
                <span></span>
                THE DETAILS THAT MATTER
            </div>

            <h2>
                The difference is in
                <em>every little detail.</em>
            </h2>

            <p>
                A well-considered cleaning experience starts with understanding
                the space, identifying its needs and paying attention to the
                details that make everyday surroundings feel better.
            </p>

        </div>

        <div class="detail-grid">

            <article class="detail-card reveal">

                <div class="detail-card-icon">
                    <i class="fa-solid fa-house-circle-check"></i>
                </div>

                <span class="detail-number">01 / YOUR SPACE</span>

                <h3>Every space has its own story.</h3>

                <p>
                    Homes, offices and commercial environments all have
                    different layouts, surfaces and everyday requirements.
                    Understanding the space is the first step towards
                    discussing the right cleaning approach.
                </p>

                <a href="<?=e(page_url('contact.php'))?>" class="text-link">
                    Discuss your space
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>

            <article class="detail-card detail-card-featured reveal reveal-delay">

                <div class="detail-card-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

                <span class="detail-number">02 / THE DETAILS</span>

                <h3>Thoughtful attention makes a difference.</h3>

                <p>
                    Different materials and surfaces need different
                    considerations. Discuss the areas that need attention
                    and make sure the expected scope is clearly understood
                    before arranging a visit.
                </p>

                <a href="<?=e(page_url('about.php'))?>" class="text-link">
                    Discover our approach
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>

            <article class="detail-card reveal reveal-delay-2">

                <div class="detail-card-icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>

                <span class="detail-number">03 / EVERYDAY COMFORT</span>

                <h3>Make room for better everyday living.</h3>

                <p>
                    A clean and organised environment can make everyday
                    routines feel more comfortable. Our guiding idea is
                    simple: thoughtful care for every home and every surface.
                </p>

                <a href="<?=e(page_url('qna.php'))?>" class="text-link">
                    Explore helpful answers
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </article>

        </div>

        <div class="detail-bottom reveal">

            <div>

                <span class="detail-bottom-label">
                    APNA CLEANING - PROFESSIONAL HOME CARE
                </span>

                <h3>
                    Start with a conversation about your space.
                </h3>

            </div>

            <a href="<?=e(page_url('contact.php'))?>"
               class="button button-primary">
                Get in touch
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>

</section>


<!-- ==========================================
     FAQ SECTION
========================================== -->

<section class="section faq-home section-soft">

    <div class="container faq-grid">

        <div class="faq-intro reveal">

            <div class="eyebrow">
                <span></span>
                NEED TO KNOW
            </div>

            <h2>
                Questions, made <em>clear.</em>
            </h2>

            <p>
                Find a few helpful starting points. Specific service
                availability and arrangements should be confirmed
                directly with the business.
            </p>

            <a class="text-link" href="<?=e(page_url('qna.php'))?>">
                Visit the Q&amp;A page
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

        <div class="accordion reveal reveal-delay">

            <?php
            $faqs = [
                [
                    'What is deep cleaning?',
                    'Deep cleaning generally refers to a more detailed clean that goes beyond routine surface upkeep. The exact tasks depend on the property, materials and agreed scope.'
                ],
                [
                    'Which cleaning services are available?',
                    'Apna Cleaning offers dedicated pages for sofa, carpet, mattress, curtain, window and home cleaning. Explore the full catalogue to choose the service you need.'
                ],
                [
                    'How can I request a quotation?',
                    'Use the contact page to prepare your enquiry. Once the contact channel is enabled, share your space details, location and preferred timing to discuss a quotation.'
                ],
                [
                    'Which areas of Mumbai are covered?',
                    'Our listed service areas are Andheri West, Andheri East and nearby Mumbai locations. Share your exact locality to confirm availability.'
                ],
                [
                    'How long does a cleaning visit take?',
                    'Duration varies with the size and condition of the space and the work included. Ask for an estimate after the scope has been discussed.'
                ]
            ];

            foreach ($faqs as $i => $f):
            ?>

                <details class="accordion-item" <?=$i === 0 ? 'open' : ''?>>

                    <summary>
                        <span><?=e($f[0])?></span>
                        <i class="fa-solid fa-plus"></i>
                    </summary>

                    <div class="accordion-answer">
                        <p><?=e($f[1])?></p>
                    </div>

                </details>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ==========================================
     FINAL CTA SECTION
========================================== -->

<section class="section final-cta">

    <div class="cta-decoration cta-decoration-one"></div>
    <div class="cta-decoration cta-decoration-two"></div>

    <div class="container final-cta-inner reveal">

        <div>

            <div class="eyebrow eyebrow-light">
                <span></span>
                YOUR NEXT STEP STARTS HERE
            </div>

            <h2>
                Tell us about the space you want to <em>refresh.</em>
            </h2>

            <p>
                Share your requirement and confirm the right next step
                with the business.
            </p>

        </div>

        <a class="button button-primary"
           href="<?=e(page_url('contact.php'))?>">
            Start your enquiry
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>

</section>


<?php require __DIR__.'/includes/footer.php'; ?>
