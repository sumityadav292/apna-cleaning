
<?php
require_once __DIR__ . '/includes/bootstrap.php';

function fail_form(string $message): never
{
    set_flash('error', $message);
    header('Location: ' . page_url('contact.php'));
    exit;
}

function field_length(string $value): int
{
    return function_exists('mb_strlen')
        ? mb_strlen($value, 'UTF-8')
        : strlen($value);
}

// Allow POST requests only.
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('Method not allowed');
}

// Verify form activation and recipient.
if (
    empty($config['lead_form_enabled']) ||
    empty($config['contact_details_confirmed']) ||
    !filter_var($config['lead_recipient'] ?? '', FILTER_VALIDATE_EMAIL)
) {
    fail_form('The enquiry form is currently unavailable. Please contact the business directly.');
}

// Verify session and CSRF token.
start_site_session();

$token = (string)($_POST['csrf_token'] ?? '');

if (
    empty($_SESSION['csrf_token']) ||
    !hash_equals($_SESSION['csrf_token'], $token)
) {
    fail_form('Your session has expired. Please refresh the page and try again.');
}

// Honeypot spam protection.
if (!empty($_POST['website'] ?? '')) {
    fail_form('Your enquiry could not be processed.');
}

// Rate limit: one submission per minute per session.
$last = (int)($_SESSION['last_lead_at'] ?? 0);

if ($last && (time() - $last) < 60) {
    fail_form('Please wait a minute before sending another enquiry.');
}

// Collect form fields.
$name = trim(strip_tags((string)($_POST['name'] ?? '')));
$phone = trim(strip_tags((string)($_POST['phone'] ?? '')));
$email = trim((string)($_POST['email'] ?? ''));
$location = trim(strip_tags((string)($_POST['location'] ?? '')));
$service = trim(strip_tags((string)($_POST['service'] ?? '')));
$message = trim(strip_tags((string)($_POST['message'] ?? '')));
$consent = (string)($_POST['consent'] ?? '');

// Validate required fields.
if (
    $name === '' ||
    field_length($name) > 80 ||
    $phone === '' ||
    !preg_match('/^[0-9+() .-]{7,20}$/', $phone) ||
    $location === '' ||
    field_length($location) > 120 ||
    $service === '' ||
    $message === '' ||
    field_length($message) > 2000 ||
    $consent !== '1'
) {
    fail_form('Please check the required fields and try again.');
}

// Validate optional email.
if (
    $email !== '' &&
    (
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        preg_match('/[\r\n]/', $email)
    )
) {
    fail_form('Please enter a valid email address.');
}

// Prepare email.
$safeName = preg_replace('/[\r\n]+/', ' ', $name);
$subject = 'Website enquiry - ' . $safeName;

$body =
    "New website enquiry\n\n" .
    "Business: " . $config['business_name'] . "\n" .
    "Name: {$name}\n" .
    "Phone: {$phone}\n" .
    "Email: {$email}\n" .
    "Property location: {$location}\n" .
    "Requirement: {$service}\n\n" .
    "Message:\n{$message}\n\n" .
    "Business address: " . $config['address'] . "\n" .
    "Sent from: " . $config['base_url'];

// Email headers.
$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8'
];

$from = $config['lead_from'] ?? '';

if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
    $headers[] = 'From: ' . $config['business_name'] . ' <' . $from . '>';
}

if ($email !== '') {
    $headers[] = 'Reply-To: ' . $email;
}

// Send enquiry.
$sent = @mail(
    $config['lead_recipient'],
    $subject,
    $body,
    implode("\r\n", $headers)
);

if (!$sent) {
    fail_form(
        'Your enquiry could not be sent right now. Please contact us by phone or WhatsApp.'
    );
}

// Update session after successful submission.
$_SESSION['last_lead_at'] = time();
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

set_flash(
    'success',
    'Thank you! Your enquiry has been sent successfully. The business can contact you using the details provided.'
);

header('Location: ' . page_url('contact.php'));
exit;
