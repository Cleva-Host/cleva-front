<?php
$allowedTlds = ['.com', '.net', '.love', '.pw', '.org', '.info', '.xyz'];

$label = isset($_GET['domain']) ? trim($_GET['domain']) : '';
$label = preg_replace('#^https?://#i', '', $label);
$label = preg_replace('#^www\.#i', '', $label);
$label = strtolower(explode('/', $label)[0]);
// allow the user to paste a full domain (example.com) as well as a bare label
if (strpos($label, '.') !== false) {
    $label = explode('.', $label, 2)[0];
}

$tld = isset($_GET['tld']) ? strtolower(trim($_GET['tld'])) : '.com';
if (!in_array($tld, $allowedTlds, true)) {
    $tld = '.com';
}

$isValidLabel = (bool) preg_match('/^(?!-)[a-z0-9-]{1,63}(?<!-)$/', $label);
$fullDomain = $isValidLabel ? $label . $tld : '';

$pageTitle = $fullDomain !== '' ? 'Availability for ' . $fullDomain . ' - Cleva' : 'Domain Availability - Cleva';
$metaDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$metaKeywords = 'Web Hosting, Domain Registration, Reseller Hosting, Cloud Hosting, VPS';
$canonical = 'domain-availability.php';
$ogTitle = $pageTitle;
$ogDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$ogUrl = 'https://clevahost.com/domain-availability.php';
$twitterTitle = $pageTitle;
$twitterDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$bodyClass = 'page-template template-resell';

if ($fullDomain !== '') {
    $messageText = 'Checking ' . $fullDomain . '…';
    $messageClass = 'whois-lookup-message';
} elseif ($label !== '') {
    $messageText = "That doesn't look like a valid domain name. Try something like example.com.";
    $messageClass = 'whois-lookup-message error';
} else {
    $messageText = '';
    $messageClass = 'whois-lookup-message';
}
?>
<?php include 'components/header.php'; ?>

    <!-- HEADER AREA -->
    <?php include 'components/navbar.php'; ?>
    <!-- HEADER AREA END -->

    <!-- HERO BANNER ONE -->
    <section class="rts-hero-three rts-hosting-banner rts-hero__one domain-checker-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="rts-hero__content domain">
                        <h1 data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Domain Availability</h1>
                        <p class="description" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                            <?php echo $fullDomain !== '' ? 'Results for ' . htmlspecialchars($fullDomain, ENT_QUOTES) : 'Enter a domain name to check its availability.'; ?>
                        </p>

                        <form id="domain-availability-form" action="domain-availability.php" method="get">
                            <div class="rts-hero__form-area">
                                <input type="text" id="domain-availability-input" placeholder="find your domain name" name="domain" value="<?php echo htmlspecialchars($label, ENT_QUOTES); ?>" required>
                                <div class="select-button-area">
                                    <select name="tld" id="select" class="price__select">
                                        <?php foreach ($allowedTlds as $option): ?>
                                        <option value="<?php echo htmlspecialchars($option, ENT_QUOTES); ?>" <?php echo $option === $tld ? 'selected' : ''; ?>><?php echo htmlspecialchars($option, ENT_QUOTES); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <button type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                        <div id="domain-availability-message" class="<?php echo $messageClass; ?>" <?php echo $messageText === '' ? 'hidden' : ''; ?>><?php echo htmlspecialchars($messageText, ENT_QUOTES); ?></div>
                        <div id="domain-availability-result" class="whois-result-card" hidden></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape-area">
            <img class="three" src="assets/images/banner/banner-bg-element.svg" alt="">
        </div>
    </section>
    <!-- HERO BANNER ONE END -->

    <!-- CLEVA CTA -->
    <div class="rts-cta-two shared-page-bg">
        <div class="container">
            <div class="row">
                <div class="rts-cta-two__wrapper">
                    <div class="cta__shape"></div>
                    <div class="cta-content">
                        <span data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">Need help choosing a plan?</span>
                        <h4 data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">Need help?
                            We're always here for you.</h4>
                    </div>
                    <div class="cta-btn">
                        <a href="#" class="contact__us primary__btn btn__two secondary__bg secondary__color">Go to Live chat Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CLEVA CTA END -->

    <!-- DOMAIN AVAILABILITY JS -->
    <script defer src="assets/js/domain-availability.js?v=<?php echo filemtime(__DIR__ . '/assets/js/domain-availability.js'); ?>"></script>

    <!-- FOOTER AREA -->
    <?php include 'components/footer.php'; ?>
