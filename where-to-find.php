<?php
$pageKey = 'locations';
$pageTitle = 'Where to Find — Aani LittleCrab';
$pageDescription = 'Find I Am Aani LittleCrab at booksellers, galleries and gift shops in Victoria, Parksville, Qualicum Beach, Sidney and Nanaimo, British Columbia.';
$locations = [
    ['name' => 'Art Gallery Greater Victoria', 'city' => 'Victoria', 'address' => '1040 Moss St, Victoria, BC'],
    ['name' => 'Fireside Books', 'city' => 'Parksville', 'address' => '464 Island Hwy E., Parksville, BC V9P 1V2', 'phone' => '250.248.1234', 'tel' => '+12502481234'],
    ['name' => 'MAC McMillan Art Centre', 'city' => 'Parksville', 'address' => '133 McMillan St, Parksville, BC'],
    ['name' => 'MONK Gallery & Studio', 'city' => 'Parksville', 'address' => '#151A Morison Ave., Parksville, BC'],
    ['name' => 'Mulberrybush Books, Qualicum', 'city' => 'Qualicum Beach', 'address' => '#130, 130 W 2nd Ave, Qualicum Beach, BC'],
    ['name' => 'The Pines Gift Shop', 'city' => 'Parksville', 'address' => 'Tigh-Na-Mara Resort, 1155 Resort Drive, Parksville, BC'],
    ['name' => 'Shaw Centre for the Salish Sea', 'city' => 'Sidney', 'address' => '9811 Seaport Place, Sidney, BC'],
    ['name' => 'Yellow Bird Arts Gallery', 'city' => 'Nanaimo', 'address' => 'Country Club Centre, #13 – 3200 Island Hwy, Nanaimo, BC V9T 1W1', 'phone' => '250.758.2480', 'tel' => '+12507582480'],
];
include __DIR__ . '/partials/header.php';
?>

<main id="main" class="information-page">
    <section class="page-intro" aria-labelledby="locations-title">
        <div class="container-wide">
            <nav class="page-breadcrumb" aria-label="Breadcrumb"><a href="index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Where to find</span></nav>
            <p class="eyebrow"><span class="gold-line"></span> Find your local bookseller</p>
            <h1 id="locations-title">Where to <em>find.</em></h1>
            <p class="page-intro-description"><em>I Am Aani LittleCrab</em> is now available at the following locations.</p>
        </div>
    </section>

    <section class="locations-section" aria-label="Book locations in British Columbia">
        <div class="container-wide">
            <div class="locations-heading"><p>British Columbia, Canada</p><span><?= count($locations) ?> locations</span></div>
            <ul class="locations-grid">
                <?php foreach ($locations as $index => $location): ?>
                <li class="location-card reveal">
                    <div class="location-card-top"><span class="location-number"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) ?></span><p><?= htmlspecialchars($location['city'], ENT_QUOTES, 'UTF-8') ?></p><svg class="icon" aria-hidden="true"><use href="#icon-pin" /></svg></div>
                    <h2><?= htmlspecialchars($location['name'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <address><?= htmlspecialchars($location['address'], ENT_QUOTES, 'UTF-8') ?></address>
                    <?php if (isset($location['phone'])): ?>
                    <a class="location-phone" href="tel:<?= htmlspecialchars($location['tel'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($location['phone'], ENT_QUOTES, 'UTF-8') ?></a>
                    <?php endif; ?>
                    <a class="text-link location-map" href="https://www.google.com/maps/search/?api=1&amp;query=<?= rawurlencode($location['name'] . ' ' . $location['address']) ?>" target="_blank" rel="noopener noreferrer" aria-label="View <?= htmlspecialchars($location['name'], ENT_QUOTES, 'UTF-8') ?> on Google Maps (opens in a new tab)">View on map <svg class="icon" aria-hidden="true"><use href="#icon-arrow" /></svg></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>


<?php include __DIR__ . '/partials/footer.php'; ?>
