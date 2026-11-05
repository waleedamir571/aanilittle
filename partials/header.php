<?php
$pageKey = $pageKey ?? 'home';
$homePrefix = $pageKey === 'home' ? '' : 'index.php';
$pageTitle = $pageTitle ?? 'Aani LittleCrab — A Small Girl. An Extraordinary Journey.';
$pageDescription = $pageDescription ?? "Enter the world of I Am Aani LittleCrab. A young girl's journey on the Northwest Coast, with stories by Julia VanDyke and illustrations by Twana MacArthur.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#102e2a">
    <meta name="description"
        content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <?php if ($pageKey === 'home'): ?>
    <link rel="preload" href="assets/images/coastal-landscape.webp" as="image" type="image/webp">
    <?php endif; ?>
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <?php if ($pageKey === 'about'): ?>
    <link rel="stylesheet" href="assets/css/about.css">
    <?php endif; ?>
    <?php if (in_array($pageKey, ['contact', 'locations'], true)): ?>
    <link rel="stylesheet" href="assets/css/pages.css">
    <?php endif; ?>
</head>

<body>
    <a href="#main" class="skip-link">Skip to content</a>
    <svg class="svg-library" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <symbol id="icon-arrow" viewBox="0 0 24 24">
            <path d="M4 12h15M13 5l7 7-7 7" />
        </symbol>
        <symbol id="icon-book" viewBox="0 0 32 32">
            <path
                d="M16 8C11 5 6 5 2 7v20c5-2 9-2 14 1 5-3 9-3 14-1V7c-4-2-9-2-14 1Zm0 0v20M6 11l6 1M6 16l6 1M20 12l6-1M20 17l6-1" />
        </symbol>
        <symbol id="icon-mountain" viewBox="0 0 32 32">
            <path d="m2 26 11-20 7 12 4-7 7 15H2ZM9 13l4 3 3-3M21 17l3 2 2-2" />
        </symbol>
        <symbol id="icon-leaf" viewBox="0 0 32 32">
            <path d="M26 4C8 3 2 11 7 23 20 30 29 21 26 4ZM5 28 23 10M13 20l-1-8M18 15h7" />
        </symbol>
        <symbol id="icon-heart" viewBox="0 0 32 32">
            <path d="M16 28 4 16C-3 7 9-1 16 8c7-9 19-1 12 8L16 28Z" />
        </symbol>
        <symbol id="icon-pin" viewBox="0 0 24 24">
            <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z" />
            <circle cx="12" cy="10" r="2.5" />
        </symbol>
        <symbol id="icon-crab" viewBox="0 0 64 48">
            <path
                d="M19 26c0-9 26-9 26 0 0 15-26 15-26 0ZM23 21l-2-6m20 6 2-6M18 26 8 21l-1-8m39 13 10-5 1-8M19 30 8 32l-5 7m42-9 11 2 5 7M22 35l-7 7m27-7 7 7M7 15C0 12 2 4 6 2l2 7 5-5c3 5 1 10-6 11Zm50 0c7-3 5-11 1-13l-2 7-5-5c-3 5-1 10 6 11Z" />
            <circle cx="21" cy="13" r="1.5" />
            <circle cx="43" cy="13" r="1.5" />
        </symbol>
    </svg>

    <header class="site-header" id="site-header">
        <nav class="navbar navbar-expand-lg container-wide" aria-label="Main navigation">
            <a class="navbar-brand brand" href="<?= $homePrefix ?>#home" aria-label="Aani LittleCrab home">
                <svg class="brand-crab" aria-hidden="true">
                    <use href="#icon-crab" />
                </svg>
                <span>Aani <span class="brand-small">LittleCrab</span></span>
            </a>
            <button class="navbar-toggler menu-toggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false"
                aria-label="Toggle navigation"><span></span><span></span></button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link<?= $pageKey === 'home' ? ' active' : '' ?>" href="<?= $homePrefix ?>#home"<?= $pageKey === 'home' ? ' aria-current="page"' : '' ?>>Home</a></li>
                    <li class="nav-item"><a class="nav-link<?= $pageKey === 'about' ? ' active' : '' ?>" href="about.php"<?= $pageKey === 'about' ? ' aria-current="page"' : '' ?>>About</a></li>
                    <li class="nav-item"><a class="nav-link<?= $pageKey === 'locations' ? ' active' : '' ?>" href="where-to-find.php"<?= $pageKey === 'locations' ? ' aria-current="page"' : '' ?>>Where to find</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="<?= $homePrefix ?>#world">Media</a></li> -->
                  
                    <li class="nav-item"><a class="nav-link<?= $pageKey === 'contact' ? ' active' : '' ?>" href="contact.php"<?= $pageKey === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a></li>
                </ul>
                <a href="where-to-find.php" class="button button-outline nav-cta">Find the book <svg class="icon"
                        aria-hidden="true">
                        <use href="#icon-arrow" />
                    </svg></a>
            </div>
        </nav>
    </header>
