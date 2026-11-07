<?php
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = 'Questions & Answers | Apna Cleaning Mumbai';
$pageDescription = 'Answers to common questions about sofa, carpet, mattress, curtain, window and home cleaning enquiries in Andheri, Mumbai.';
require __DIR__ . '/includes/header.php';

$faqs = [
    ['Which cleaning services does Apna Cleaning offer?', 'Our service catalogue includes sofa and upholstery cleaning, carpet cleaning, mattress cleaning, curtain cleaning, window cleaning and home cleaning. Each service has a dedicated page with more information.'],
    ['Which locations do you serve?', 'Our listed service areas are Andheri West, Andheri East and nearby Mumbai locations. Share your exact locality to confirm current availability.'],
    ['How can I request a quotation?', 'Call or WhatsApp us, or use the contact page to prepare an enquiry. Share the item or room details, approximate size, condition and locality so the scope can be discussed.'],
    ['Do you clean fabric and leather sofas?', 'Fabric and leather sofa cleaning are listed separately because the materials need different care. Share the sofa type and available care-label details before the method is confirmed.'],
    ['Can old stains be removed completely?', 'Complete stain removal cannot be guaranteed. Results depend on the stain type, age, material, colourfastness and previous treatment.'],
    ['How long does a cleaning service take?', 'Time depends on the item or property size, condition, access and agreed scope. Ask for an estimate after sharing the details.'],
    ['Do I need to send photos?', 'Photos are helpful for sofas, carpets, mattresses, curtains, windows and room cleaning. They help explain the material, dimensions and areas needing attention.'],
    ['What are your working hours?', 'Please contact Apna Cleaning directly to confirm current service timings and appointment availability.'],
    ['How can I contact Apna Cleaning?', 'Call or WhatsApp +91 9918136319, or email Apnacleaning@gmail.com. You can also use the contact page to send your requirement.'],
];
?>
<section class="page-hero page-hero-compact">
    <div class="page-hero-image" style="background-image:url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1800&q=82')"></div>
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <div class="eyebrow eyebrow-light"><span></span> HERE TO HELP</div>
        <h1>Good questions make <em>clear answers.</em></h1>
        <p>Helpful information about Apna Cleaning services and enquiries.</p>
        <div class="breadcrumbs"><a href="<?= e(site_url()) ?>">Home</a><i class="fa-solid fa-angle-right"></i><span>Q&amp;A</span></div>
    </div>
</section>
<section class="section">
    <div class="container qna-layout">
        <aside class="qna-aside reveal">
            <div class="eyebrow"><span></span> QUICK HELP</div>
            <h2>Still have a <em>question?</em></h2>
            <p>Tell us what needs cleaning and share your locality. We will discuss the right service scope and next step.</p>
            <a class="button button-primary" href="<?= e(page_url('contact.php')) ?>">Make an enquiry <i class="fa-solid fa-arrow-right"></i></a>
            <div class="qna-aside-mark"><i class="fa-regular fa-circle-question"></i></div>
        </aside>
        <div class="accordion qna-accordion reveal reveal-delay">
            <?php foreach ($faqs as $i => $faq): ?>
                <details class="accordion-item" <?= $i === 0 ? 'open' : '' ?>>
                    <summary><span><?= e($faq[0]) ?></span><i class="fa-solid fa-plus"></i></summary>
                    <div class="accordion-answer"><p><?= e($faq[1]) ?></p></div>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
