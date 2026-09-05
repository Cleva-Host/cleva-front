<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="<?php echo $metaDescription ?? 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services'; ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?? 'Web Hosting, Domain Registration, Reseller Hosting, Cloud Hosting, VPS'; ?>">
    <link rel="canonical" href="<?php echo $canonical ?? 'index.php'; ?>">
    <meta name="robots" content="index, follow">
    <!-- for open graph social media -->
    <meta property="og:title" content="<?php echo $ogTitle ?? $pageTitle ?? 'Cleva - Premium Web Hosting & Domain Services'; ?>">
    <meta property="og:description" content="<?php echo $ogDescription ?? $metaDescription ?? 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services'; ?>">
    <meta property="og:image" content="https://clevahost.com/assets/images/banner/slider-img-01.webp">
    <meta property="og:url" content="<?php echo $ogUrl ?? 'https://clevahost.com/'; ?>">
    <!-- for twitter sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $twitterTitle ?? $pageTitle ?? 'Cleva - Premium Web Hosting & Domain Services'; ?>">
    <meta name="twitter:description" content="<?php echo $twitterDescription ?? $metaDescription ?? 'Your Ultimate Solution for Web Hosting, Domains, and Reseller Services'; ?>">
    <meta name="twitter:image" content="https://clevahost.com/assets/images/banner/slider-img-01.webp">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">

    <title><?php echo $pageTitle ?? 'Cleva - Premium Web Hosting & Domain Services'; ?></title>
    <!-- Preconnect to Google Fonts and Google Fonts Static -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Importing Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,500;0,600;0,700;1,400;1,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <!-- all styles -->
    <link rel="preload stylesheet" href="assets/css/plugins.min.css" as="style">
    <!-- fontawesome css -->
    <link rel="preload stylesheet" href="assets/css/plugins/fontawesome.min.css" as="style">
    <!-- Custom css -->
    <link rel="preload stylesheet" href="assets/css/style.css" as="style">
</head>

<body<?php echo isset($bodyClass) ? ' class="' . $bodyClass . '"' : ''; ?>>
