<?php
$pageKey = 'about';
$pageTitle = 'About the Author & Artist — Aani LittleCrab';
$pageDescription = 'Meet Julia VanDyke and Twana MacArthur, the author and artist behind I Am Aani LittleCrab, and discover the inspiration behind the story.';
include __DIR__ . '/partials/header.php';
?>

<main id="main" class="about-page">
    <section class="about-hero" aria-labelledby="about-title">
        <div class="container-wide about-hero-inner">
            <nav class="about-breadcrumb" aria-label="Breadcrumb"><a href="index.php">Home</a><span
                    aria-hidden="true">/</span><span aria-current="page">About us</span></nav>
            <p class="eyebrow"><span class="gold-line"></span> The people behind the pages</p>
            <h1 id="about-title">Two creative hearts.<br>One <em>extraordinary story.</em></h1>
            <p class="about-hero-description">Meet the author and artist who bring Aani LittleCrab's world to life,
                through a love of stories, art and the wild beauty of the Northwest Coast.</p>
            <div class="about-hero-links">
                <a href="#author" class="text-link">Meet Julia <svg class="icon" aria-hidden="true">
                        <use href="#icon-arrow" />
                    </svg></a>
                <a href="#artist" class="text-link">Meet Twana <svg class="icon" aria-hidden="true">
                        <use href="#icon-arrow" />
                    </svg></a>
            </div>
        </div>
        <span class="about-hero-note" aria-hidden="true">STORIES BY JULIA VANDYKE &nbsp; · &nbsp; ART BY TWANA
            MACARTHUR</span>
    </section>

    <section class="about-profile section-space" id="author" aria-labelledby="author-title">
        <div class="container-wide about-profile-grid">
            <figure class="about-portrait reveal">
                <div class="about-photo-frame"><img src="assets/images/about/julia-vandyke.jpg"
                        alt="Julia VanDyke beside the water with her Tahltan Bear Dog, the inspiration for Snowflake"
                        width="830" height="856" loading="lazy"></div>
                <figcaption><span class="caption-line"></span> Julia &amp; the inspiration for Snowflake</figcaption>
                <div class="about-portrait-signature" aria-hidden="true">A love of stories.<br><em>A lifetime of
                        wonder.</em></div>
            </figure>
            <div class="about-biography reveal">
                <p class="eyebrow"><span class="gold-line"></span> Meet the author</p>
                <h2 id="author-title">Julia <em>VanDyke</em></h2>
                <p class="about-role">The voice behind Aani's adventures</p>
                <p class="about-lead">Grandmother lived with us. She, the baker and story-teller, would put me to bed
                    with cookies and the latest of her own imagined sagas.</p>
                <p>Or her reading of <em>Lorna Doone</em>, <em>The Three Musketeers</em>, everything Dickens, poetry of
                    Burns, Wordsworth and Longfellow; and the great adventures of the Bible. By the age of seven, I had
                    covered the classics.</p>
                <p>Gram loved the written word, and passed that on to me. It became the foundation of my schooling and
                    writing short stories and poetry. &ldquo;When you become a writer,&rdquo; she said, &ldquo;you must
                    carry on the name of our forebear, my own grandmother, Julia Vandyke. Now, she could write!&rdquo; I
                    have complied.</p>
                <p>Honing the craft in University of Victoria's creative writing programs was another gift of great
                    worth. But earning a living as a writer has its challenges. I chose business instead, and long
                    shelved story writing.</p>
                <p>Even as a child I thought and questioned, &ldquo;This island. This coast. What happened here, who was
                    here, hundreds or thousands of years ago?&rdquo; I began to read the stories and legends of the
                    first peoples whose land we now call &ldquo;ours.&rdquo;</p>
                <p>I listened to their songs, felt the rhythm of their dances. I am awed by their art, moved by their
                    vision. I marvel at their resilience, dignity, wisdom and humanity in the face of centuries of
                    abuse. Our first peoples have never lost sight of their stewardship of this earth and the life upon
                    it.</p>
                <p>A few years ago, I received the extraordinary gift of my Tahltan Bear Dog, born in Old Crow, Yukon.
                    Her lineage goes back centuries, too! She inspires me and makes me laugh every day. She is Snowflake
                    in the stories.</p>
                <p>Then along came &ldquo;Aani,&rdquo; a small child tugging at my heart. I had to figure out her name,
                    had no idea what it meant. Where did she live? When did she live? Who are her peoples? What is her
                    story? At last she told me:</p>
                <blockquote class="about-inline-quote">&ldquo;I Am Aani LittleCrab.&rdquo;</blockquote>
                <p>Her story unfolded in a part of my brain I didn't know I had, and I wrote it down.</p>
                <p class="about-signoff">Enjoy! <span>Julia</span></p>
            </div>
        </div>
    </section>

    <section class="about-quote-band" aria-labelledby="about-quote">
        <div class="container-wide reveal">
            <svg class="about-quote-icon" aria-hidden="true">
                <use href="#icon-leaf" />
            </svg>
            <blockquote id="about-quote">&ldquo;I paint from the heart, my love for<br class="d-none d-md-block"> the
                natural world <em>inspires me always.</em>&rdquo;</blockquote>
            <p>Twana MacArthur <span>Artist &amp; illustrator</span></p>
        </div>
    </section>

    <section class="about-profile about-artist section-space" id="artist" aria-labelledby="artist-title">
        <div class="container-wide about-profile-grid">
            <div class="about-biography reveal">
                <p class="eyebrow"><span class="gold-line"></span> Meet the artist</p>
                <h2 id="artist-title">Twana <em>MacArthur</em></h2>
                <p class="about-role">The heart behind every brushstroke</p>
                <p class="about-lead">The woods and beaches of Vancouver Island were my early-childhood playground.
                    There my imagination brought stories to life aided by sandcastles and tree-climbing.</p>
                <p>Horses were a passion. I first learned to ride Shetland ponies. With friends, galloped in mock battle
                    and ambush in wild dress-up, telling stories to the beat of hooves.</p>
                <p>Illustrating Aani was both a challenge and a joy. Painting the beaches, trees, eagles, crows, dogs,
                    are things I have long loved to portray.</p>
                <p>I have lived on Vancouver Island many years, and am mainly self-taught as an artist. I paint from the
                    heart, my love for the natural world inspires me always.</p>
                <p>I also draw on my Métis heritage as well as the Scottish family influence of work discipline and
                    drive to get it right!</p>
                <a class="text-link about-profile-link" href="index.php#art">Explore Twana's illustrations <svg
                        class="icon" aria-hidden="true">
                        <use href="#icon-arrow" />
                    </svg></a>
            </div>
            <figure class="about-portrait reveal">
                <div class="about-photo-frame"><img src="assets/images/about/twana-macarthur.jpg"
                        alt="Twana MacArthur at her studio easel painting birds above the coast" width="1000"
                        height="750" loading="lazy"></div>
                <figcaption><span class="caption-line"></span> Twana at work, bringing the coast to life</figcaption>
                <div class="about-portrait-signature" aria-hidden="true">Inspired by nature.<br><em>Painted from the
                        heart.</em></div>
            </figure>
        </div>
    </section>

    <section class="about-story-invitation" aria-labelledby="about-invitation-title">
        <div class="container-wide about-invitation-inner">
            <div class="reveal">
                <p class="eyebrow"><span class="gold-line"></span> Step into the story</p>
                <h2 id="about-invitation-title">Now you know the makers.<br>Come meet <em>Aani.</em></h2>
                <p>Travel to a far-off time on the Northwest Coast, into a world of adventure, courage and discovery.
                </p>
                <a href="index.php#find-book" class="button button-gold">Find the book <svg class="icon"
                        aria-hidden="true">
                        <use href="#icon-arrow" />
                    </svg></a>
            </div>
            <a class="about-invitation-book reveal" href="index.php#find-book"
                aria-label="Find I Am Aani LittleCrab"><img src="assets/images/book-cover.webp"
                    alt="I Am Aani LittleCrab, stories by Julia VanDyke and illustrations by Twana MacArthur"
                    width="600" height="563" loading="lazy"></a>
        </div>
    </section>

    <section class="newsletter-section" id="stay-updated" aria-labelledby="newsletter-title">
        <div class="container-wide row align-items-center g-5 mx-auto">
            <div class="col-lg-6 reveal">
                <p class="eyebrow"><span class="gold-line"></span> There's more to the story</p>
                <h2 id="newsletter-title">The next chapter<br>begins <em>with you.</em></h2>
                <p>Be the first to know when Aani LittleCrab embarks on her next adventure. Aani will lead you on a
                    journey to explore a far off time full of adventure, dance, music, art and stories of the Tlingit
                    peoples.</p>
            </div>
            <div class="col-lg-5 offset-lg-1 reveal">
                <form id="newsletter-form" action="mailto:info@aanilittlecrab.com" method="get">
                    <label for="newsletter-email">Stay updated</label>
                    <div class="email-field"><input type="email" id="newsletter-email" name="email" autocomplete="email"
                            placeholder="Your email address" required maxlength="254"
                            aria-describedby="newsletter-help newsletter-status"><button type="submit"
                            aria-label="Request updates by email"><svg class="icon" aria-hidden="true">
                                <use href="#icon-arrow" />
                            </svg></button></div>
                    <p class="form-help" id="newsletter-help">Request updates by email. We'll open a draft for you to
                        send.</p>
                    <p class="form-status" id="newsletter-status" role="status" aria-live="polite"></p>
                    <p class="privacy-note"><svg class="icon" aria-hidden="true">
                            <use href="#icon-heart" />
                        </svg> We respect your privacy and will never share your information with any third-party
                        vendors.</p>
                </form>
            </div>
        </div>
    </section>
</main>



<?php include __DIR__ . '/partials/footer.php'; ?>