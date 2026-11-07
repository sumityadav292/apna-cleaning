
<?php
require_once __DIR__ . '/bootstrap.php';

$footerPhone = $config['phone'] ?? '';
$footerPhoneLink = $config['phone_link'] ?? preg_replace('/[^0-9+]/', '', $footerPhone);

$footerWhatsApp = $config['whatsapp'] ?? preg_replace('/[^0-9]/', '', $footerPhone);

if (empty($footerWhatsApp)) {
    $footerWhatsApp = preg_replace('/[^0-9]/', '', $footerPhone);
}
?>

</main>

<!-- FOOTER -->

<footer class="site-footer">

    <div class="footer-glow"></div>

    <div class="container footer-main">

        <!-- BRAND -->

        <div class="footer-brand-col">

            <a class="brand footer-brand" href="<?= e(site_url()) ?>">

                <img
                    src="<?= e(asset('images/apna-cleaning-logo.jpg')) ?>"
                    width="58"
                    height="58"
                    alt="Apna Cleaning logo">

                <span class="brand-copy">
                    <strong><?= e($config['brand_name']) ?></strong>
                    <small><?= e($config['brand_descriptor']) ?></small>
                </span>

            </a>

            <p class="footer-tagline">
                <?= e($config['tagline']) ?>
            </p>

            <p class="footer-intro">
                <?= e($config['business_category']) ?> in Andheri, Mumbai.
                Share your cleaning requirements and confirm the service scope
                directly with the Apna Cleaning team.
            </p>

            <a class="text-link" href="<?= e(page_url('contact.php')) ?>">
                Start an enquiry
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

        <!-- EXPLORE -->

        <div class="footer-col">

            <h3>Explore</h3>

            <a href="<?= e(site_url()) ?>">Home</a>
            <a href="<?= e(page_url('about.php')) ?>">About us</a>
           <a href="<?= e(site_url('services')) ?>">Services</a>
            <a href="<?= e(page_url('gallery.php')) ?>">Gallery</a>
            <a href="<?= e(page_url('why-choose-us.php')) ?>">Why choose us</a>

        </div>

        <!-- HELPFUL LINKS -->

        <div class="footer-col">

            <h3>Helpful links</h3>

            <a href="<?= e(page_url('blog')) ?>">Insights &amp; guides</a>
            <a href="<?= e(page_url('qna.php')) ?>">Questions &amp; answers</a>
            <a href="<?= e(page_url('contact.php')) ?>">Contact</a>
            <a href="<?= e(page_url('privacy-policy.php')) ?>">Privacy policy</a>
            <a href="<?= e(page_url('terms.php')) ?>">Terms</a>

        </div>

        <!-- CONTACT -->

        <div class="footer-col footer-contact">

            <h3>Find us</h3>

            <p>
                <i class="fa-solid fa-location-dot"></i>
                <?= e($config['address']) ?>
            </p>

            <p>
                <i class="fa-regular fa-clock"></i>
                <?= e($config['working_hours']) ?>
            </p>

            <?php if (contact_is_public()): ?>

                <?php if ($footerPhone): ?>

                    <a href="tel:<?= e($footerPhoneLink) ?>">
                        <i class="fa-solid fa-phone"></i>
                        <?= e($footerPhone) ?>
                    </a>

                <?php endif; ?>

                <?php if (!empty($config['email'])): ?>

                    <a href="mailto:<?= e($config['email']) ?>">
                        <i class="fa-regular fa-envelope"></i>
                        <?= e($config['email']) ?>
                    </a>

                <?php endif; ?>

            <?php else: ?>

                <p class="small-muted">
                    Phone and email details will be displayed after business confirmation.
                </p>

            <?php endif; ?>

            <!-- SOCIAL LINKS -->

            <?php if (!empty($config['social_links'])): ?>

                <div class="social-row">

                    <?php foreach ($config['social_links'] as $label => $url): ?>

                        <a
                            href="<?= e($url) ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="<?= e(ucfirst($label)) ?>">

                            <i class="fa-brands fa-<?= e($label) ?>"></i>

                        </a>

                    <?php endforeach; ?>

                </div>

            <?php endif; ?>

        </div>

    </div>

    <!-- FOOTER BOTTOM -->

    <div class="container footer-bottom">

        <span>
            © <?= date('Y') ?>
            <?= e($config['business_name']) ?>.
            All rights reserved.
        </span>

        <div class="footer-credit">

            <span>We Don't Just Clean Spaces, We Refresh the Way You Live.</span>

        </div>

    </div>

</footer>

<!-- FLOATING CALL BUTTON -->

<?php if (contact_is_public() && $footerPhone): ?>

    <a
        class="floating-call"
        href="tel:<?= e($footerPhoneLink) ?>"
        aria-label="Call Apna Cleaning">

        <i class="fa-solid fa-phone"></i>

    </a>

<?php endif; ?>

<!-- FLOATING WHATSAPP BUTTON -->

<?php if (contact_is_public() && $footerWhatsApp): ?>

    <a
        class="floating-whatsapp"
        href="https://wa.me/<?= e(preg_replace('/[^0-9]/', '', $footerWhatsApp)) ?>?text=<?= rawurlencode('Hello Apna Cleaning, I would like to enquire about your cleaning services. Please share the details.') ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="WhatsApp Apna Cleaning">

        <i class="fa-brands fa-whatsapp"></i>

    </a>

<?php endif; ?>

<!-- BACK TO TOP -->

<button
    class="back-to-top"
    type="button"
    aria-label="Back to top">

    <i class="fa-solid fa-arrow-up"></i>

</button>

<!-- MAIN JAVASCRIPT -->

<script src="<?= e(asset('js/main.js')) ?>" defer></script>

<!-- MOBILE NAVIGATION SCRIPT -->

</body>
</html>
