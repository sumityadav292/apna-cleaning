
<?php
require_once __DIR__ . '/includes/bootstrap.php';

$pageTitle = 'Contact Apna Cleaning | Sofa & Home Cleaning in Andheri Mumbai';
$pageDescription = 'Contact Apna Cleaning for sofa, carpet, mattress, curtain, window and home cleaning enquiries in Andheri West, Andheri East and nearby Mumbai.';

require __DIR__ . '/includes/header.php';

// Confirmed Apna Cleaning contact details from central configuration.
$businessPhone = $config['phone'];
$phoneLink = $config['phone_link'];
$whatsappNumber = preg_replace('/[^0-9]/', '', $config['whatsapp']);
$businessEmail = $config['email'];
$serviceGroups = [];
foreach (approved_services() as $serviceItem) {
    $serviceGroups[$serviceItem['category'] ?? 'Cleaning Services'][] = $serviceItem;
}

$whatsappMessage = 'Hello Apna Cleaning, I would like to enquire about your cleaning services. Please share the details.';
// Check form configuration
$formReady = !empty($config['lead_form_enabled'])
    && !empty($config['contact_details_confirmed']);

// Get flash messages
$successMessage = function_exists('get_flash') ? get_flash('success') : null;
$errorMessage = function_exists('get_flash') ? get_flash('error') : null;
?>

<!-- CONTACT HERO -->
<section class="page-hero page-hero-compact">

    <div class="page-hero-image"
         style="background-image:url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1800&q=82')">
    </div>

    <div class="page-hero-overlay"></div>

    <div class="container page-hero-content">

        <div class="eyebrow eyebrow-light">
            <span></span> LET'S TALK ABOUT YOUR SPACE
        </div>

        <h1>Your next step starts with <em>a conversation.</em></h1>

        <p>
            Contact Apna Cleaning for your upholstery and home cleaning enquiries.
            Call us, WhatsApp us or send an enquiry online.
        </p>

        <div class="breadcrumbs">
            <a href="<?= e(site_url()) ?>">Home</a>
            <i class="fa-solid fa-angle-right"></i>
            <span>Contact</span>
        </div>

    </div>
</section>


<!-- CONTACT SECTION -->
<section class="section">

    <div class="container contact-grid">

        <!-- LEFT CONTACT INFORMATION -->
        <div class="contact-info reveal">

            <div class="eyebrow">
                <span></span> CONTACT INFORMATION
            </div>

            <h2>We are based in <em>Mumbai.</em></h2>

            <p>
                Get in touch with Apna Cleaning for your sofa, upholstery and home
                cleaning requirements. Contact us directly to discuss your requirements
                and appointment arrangements.
            </p>


            <!-- ADDRESS -->
            <div class="contact-detail">

                <span class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </span>

                <div>
                    <small>BUSINESS ADDRESS</small>

                    <strong>
                        <?= e($config['address']) ?>
                    </strong>

                    <a href="https://www.google.com/maps/search/?api=1&query=<?= rawurlencode($config['address']) ?>"
                       target="_blank"
                       rel="noopener noreferrer">

                        Get directions
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>

                    </a>
                </div>

            </div>


            <!-- WORKING HOURS -->
            <div class="contact-detail">

                <span class="contact-icon">
                    <i class="fa-regular fa-clock"></i>
                </span>

                <div>
                    <small>WORKING HOURS</small>

                    <strong>
                        <?= e($config['working_hours']) ?>
                    </strong>
                </div>

            </div>


            <!-- PHONE -->
            <div class="contact-detail">

                <span class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </span>

                <div>
                    <small>CALL US</small>

                    <strong>
                        <a href="tel:<?= e($phoneLink) ?>">
                            <?= e($businessPhone) ?>
                        </a>
                    </strong>
                </div>

            </div>


            <!-- EMAIL -->
            <div class="contact-detail">

                <span class="contact-icon">
                    <i class="fa-regular fa-envelope"></i>
                </span>

                <div>
                    <small>EMAIL ADDRESS</small>

                    <strong>
                        <a href="mailto:<?= e($businessEmail) ?>">
                            <?= e($businessEmail) ?>
                        </a>
                    </strong>
                </div>

            </div>


            <!-- WHATSAPP -->
            <div class="contact-detail">

                <span class="contact-icon">
                    <i class="fa-brands fa-whatsapp"></i>
                </span>

                <div>
                    <small>WHATSAPP</small>

                    <strong>
                        <a href="https://wa.me/<?= e($whatsappNumber) ?>?text=<?= rawurlencode($whatsappMessage) ?>"
                           target="_blank"
                           rel="noopener noreferrer">

                            <?= e($businessPhone) ?>

                        </a>
                    </strong>
                </div>

            </div>


            <!-- CONTACT ACTION BUTTONS -->
            <div class="contact-action-buttons">

                <a class="button button-primary"
                   href="tel:<?= e($phoneLink) ?>">

                    <i class="fa-solid fa-phone"></i>
                    Call Now

                </a>

                <a class="button"
                   href="https://wa.me/<?= e($whatsappNumber) ?>?text=<?= rawurlencode($whatsappMessage) ?>"
                   target="_blank"
                   rel="noopener noreferrer">

                    <i class="fa-brands fa-whatsapp"></i>
                    WhatsApp Now

                </a>

            </div>


            <!-- GOOGLE MAP -->
<div class="contact-map contact-map-large">

    <iframe
        src="<?= e($config['map_embed']) ?>"
        title="Apna Cleaning business location in Jogeshwari West, Mumbai"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        allowfullscreen>
    </iframe>

</div>

        </div>


        <!-- RIGHT ENQUIRY FORM -->
        <div class="contact-form-wrap reveal reveal-delay">

            <div class="form-heading">

                <div class="eyebrow">
                    <span></span> REQUEST A QUOTATION
                </div>

                <h2>Tell us a little <em>about it.</em></h2>

                <p>
                    Share your cleaning requirements and contact details.
                    Our business can follow up using the information provided.
                </p>

            </div>


            <!-- SUCCESS MESSAGE -->
            <?php if (!empty($successMessage)): ?>

                <div class="form-status-notice">
                    <i class="fa-solid fa-circle-check"></i>

                    <div>
                        <strong>Enquiry submitted successfully!</strong>

                        <p><?= e($successMessage) ?></p>
                    </div>
                </div>

            <?php endif; ?>


            <!-- ERROR MESSAGE -->
            <?php if (!empty($errorMessage)): ?>

                <div class="form-status-notice">
                    <i class="fa-solid fa-circle-exclamation"></i>

                    <div>
                        <strong>Unable to process your enquiry.</strong>

                        <p><?= e($errorMessage) ?></p>
                    </div>
                </div>

            <?php endif; ?>


            <!-- FORM CONFIGURATION NOTICE -->
            <?php if (!$formReady): ?>

                <div class="form-status-notice">

                    <i class="fa-solid fa-shield-halved"></i>

                    <div>
                        <strong>Online enquiry form is temporarily unavailable.</strong>

                        <p>
                            Please contact us directly by phone or WhatsApp.
                        </p>
                    </div>

                </div>

            <?php endif; ?>


<form
    class="contact-form"
    id="contactWhatsAppForm"
    method="post"
    action="#"
    novalidate>

    <div class="form-row">

        <label>
            Full name

            <input
                type="text"
                name="name"
                placeholder="Your name"
                maxlength="80"
                autocomplete="name"
                required
                <?= $formReady ? '' : 'disabled' ?>>
        </label>

        <label>
            Phone number

            <input
                type="tel"
                name="phone"
                placeholder="Your contact number"
                maxlength="20"
                autocomplete="tel"
                required
                <?= $formReady ? '' : 'disabled' ?>>
        </label>

    </div>


    <div class="form-row">

        <label>
            Email address

            <input
                type="email"
                name="email"
                placeholder="name@example.com"
                maxlength="120"
                autocomplete="email"
                <?= $formReady ? '' : 'disabled' ?>>
        </label>

        <label>
            Property location

            <input
                type="text"
                name="location"
                placeholder="Area / neighbourhood"
                maxlength="120"
                required
                <?= $formReady ? '' : 'disabled' ?>>
        </label>

    </div>


    <label>
        What would you like to discuss?

        <select
            name="service"
            required
            <?= $formReady ? '' : 'disabled' ?>>

            <option value="">Choose a cleaning service</option>
            <?php foreach ($serviceGroups as $groupName => $groupServices): ?>
                <optgroup label="<?= e($groupName) ?>">
                    <?php foreach ($groupServices as $serviceItem): ?>
                        <option value="<?= e($serviceItem['title']) ?>"><?= e($serviceItem['title']) ?></option>
                    <?php endforeach; ?>
                </optgroup>
            <?php endforeach; ?>
            <option value="Other cleaning requirement">Other cleaning requirement</option>
            <option value="Not sure yet">Not sure yet</option>

        </select>
    </label>


    <label>
        Your message

        <textarea
            name="message"
            rows="5"
            maxlength="2000"
            placeholder="Tell us about your space, cleaning requirements and preferred timing..."
            required
            <?= $formReady ? '' : 'disabled' ?>></textarea>
    </label>


    <label class="consent-check">

        <input
            type="checkbox"
            name="consent"
            value="1"
            required
            <?= $formReady ? '' : 'disabled' ?>>

        <span>
            I agree that the information above may be used to respond to this enquiry.
        </span>

    </label>


    <button
        class="button button-primary form-submit"
        type="submit"
        <?= $formReady ? '' : 'disabled' ?>>

        Send Enquiry via WhatsApp
        <i class="fa-brands fa-whatsapp"></i>

    </button>

    <small class="form-privacy">
        Your enquiry details will be prepared in WhatsApp.
        Please review and send the message to complete your enquiry.
    </small>

</form>


        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('contactWhatsAppForm');

    if (!form) return;

    form.addEventListener('submit', function (event) {

        event.preventDefault();

        // Validate all required fields
        if (!form.reportValidity()) {
            return;
        }

        const formData = new FormData(form);

        const name = formData.get('name').trim();
        const phone = formData.get('phone').trim();
        const email = formData.get('email').trim();
        const location = formData.get('location').trim();
        const service = formData.get('service');
        const message = formData.get('message').trim();
        const consent = formData.get('consent');

        if (!consent) {
            alert('Please accept the consent checkbox before continuing.');
            return;
        }

        // Prepare WhatsApp enquiry
        const whatsappMessage =
`Hello Apna Cleaning,

I would like to enquire about your cleaning services.

CUSTOMER DETAILS
-------------------------
Name: ${name}
Phone: ${phone}
Email: ${email || 'Not provided'}
Property Location: ${location}

SERVICE REQUIREMENT
-------------------------
${service}

MESSAGE
-------------------------
${message}

I would like to know more about the service, availability and quotation.

Thank you.`;

        const whatsappNumber = <?= json_encode($whatsappNumber) ?>;

        const whatsappURL =
            'https://wa.me/' +
            whatsappNumber +
            '?text=' +
            encodeURIComponent(whatsappMessage);

        // Open WhatsApp with pre-filled enquiry
       window.open(whatsappURL, '_blank', 'noopener,noreferrer');

    });

});
</script>


<?php require __DIR__ . '/includes/footer.php'; ?>
