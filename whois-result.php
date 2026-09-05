<?php
$domain = isset($_GET['domain']) ? trim($_GET['domain']) : '';
$domain = preg_replace('#^https?://#i', '', $domain);
$domain = preg_replace('#^www\.#i', '', $domain);
$domain = strtolower(explode('/', $domain)[0]);
$rawDomainProvided = isset($_GET['domain']) && trim($_GET['domain']) !== '';
$isValidDomain = (bool) preg_match('/^(?!-)[a-z0-9-]{1,63}(?<!-)(\.[a-z0-9-]{1,63})+$/', $domain);
if (!$isValidDomain) {
    $domain = '';
}

if ($domain !== '') {
    $messageText = 'Looking up ' . $domain . '…';
    $messageClass = 'whois-lookup-message';
} elseif ($rawDomainProvided) {
    $messageText = "That doesn't look like a valid domain name. Try something like example.com.";
    $messageClass = 'whois-lookup-message error';
} else {
    $messageText = '';
    $messageClass = 'whois-lookup-message';
}

$pageTitle = $domain !== '' ? 'Whois Results for ' . $domain . ' - Cleva' : 'Whois Lookup Results - Cleva';
$metaDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$metaKeywords = 'Web Hosting, Domain Registration, Reseller Hosting, Cloud Hosting, VPS';
$canonical = 'whois-result.php';
$ogTitle = $pageTitle;
$ogDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$ogUrl = 'https://clevahost.com/whois-result.php';
$twitterTitle = $pageTitle;
$twitterDescription = 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services';
$bodyClass = 'page-template template-resell';
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
                        <h1 data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">WHOIS Lookup Results</h1>
                        <p class="description" data-sal="slide-down" data-sal-delay="200" data-sal-duration="800">
                            <?php echo $domain !== '' ? 'Showing WHOIS details for ' . htmlspecialchars($domain, ENT_QUOTES) : 'Enter a domain name to see its WHOIS details.'; ?>
                        </p>
                        <form id="whois-lookup-form" action="whois-result.php" method="get" class="domain-form d-flex gap-2">
                            <input type="text" id="whois-domain-input" placeholder="Enter a domain name, e.g. example.com" name="domain" value="<?php echo htmlspecialchars($domain, ENT_QUOTES); ?>" required>
                            <button class="submit-btn" type="submit"><span class="btn-text">Lookup</span></button>
                        </form>
                        <div id="whois-lookup-message" class="<?php echo $messageClass; ?>" <?php echo $messageText === '' ? 'hidden' : ''; ?>><?php echo htmlspecialchars($messageText, ENT_QUOTES); ?></div>
                        <div id="whois-lookup-result" class="whois-result-card" hidden></div>
                        <div class="banner-content-tag">
                            <p class="desc" data-sal-delay="400" data-sal-duration="800">Looking for a new domain name? <a href="domain-checker.php">Try domain checker</a></p>
                        </div>
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

    <!-- WHOIS LOOKUP JS -->
    <script defer src="assets/js/whois-lookup.js?v=<?php echo filemtime(__DIR__ . '/assets/js/whois-lookup.js'); ?>"></script>

    <!-- FOOTER AREA -->
    <?php include 'components/footer.php'; ?>
