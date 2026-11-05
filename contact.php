<?php
$pageKey = 'contact';
$pageTitle = 'Contact — Aani LittleCrab';
$pageDescription = 'Get in touch with the makers of Aani LittleCrab at info@aanilittlecrab.com.';
include __DIR__ . '/partials/header.php';
?>

<main id="main" class="information-page">
    <section class="page-intro" aria-labelledby="contact-title">
        <div class="container-wide">
            <nav class="page-breadcrumb" aria-label="Breadcrumb"><a href="index.php">Home</a><span
                    aria-hidden="true">/</span><span aria-current="page">Contact</span></nav>
            <p class="eyebrow"><span class="gold-line"></span> Let's stay connected</p>
            <h1 id="contact-title">Contact <em>us.</em></h1>
        </div>
    </section>

    <section class="contact-section" aria-labelledby="contact-email-title">
        <div class="container-wide">
            <div class="contact-panel reveal">
                <span class="contact-mark" aria-hidden="true"><svg>
                        <use href="#icon-crab" />
                    </svg></span>
                <p class="eyebrow" id="contact-email-title">Say hello</p>
                <h2>We'd love to <em>hear from you.</em></h2>
                <p>For questions about Aani LittleCrab, get in touch by email.</p>
                <a class="contact-email" href="mailto:info@aanilittlecrab.com">info@aanilittlecrab.com <svg class="icon"
                        aria-hidden="true">
                        <use href="#icon-arrow" />
                    </svg></a>
                <form class="contact-form" id="contact-form" action="mailto:info@aanilittlecrab.com" method="post"
                    enctype="text/plain" aria-describedby="contact-form-help">
                    <div class="contact-form-row">
                        <div class="contact-field">
                            <label for="contact-name">Your name <span aria-hidden="true">*</span></label>
                            <input type="text" id="contact-name" name="name" autocomplete="name"
                                placeholder="Your full name" required maxlength="100">
                        </div>
                        <div class="contact-field">
                            <label for="contact-email">Email address <span aria-hidden="true">*</span></label>
                            <input type="email" id="contact-email" name="email" autocomplete="email"
                                placeholder="you@example.com" required maxlength="254">
                        </div>
                    </div>
                    <div class="contact-field">
                        <label for="contact-subject">Subject <span class="contact-optional">(optional)</span></label>
                        <input type="text" id="contact-subject" name="subject" placeholder="What would you like to ask?"
                            maxlength="160">
                    </div>
                    <div class="contact-field">
                        <label for="contact-message">Your message <span aria-hidden="true">*</span></label>
                        <textarea id="contact-message" name="message" rows="6" placeholder="Write your message here…"
                            required maxlength="5000"></textarea>
                    </div>
                    <p class="contact-form-help" id="contact-form-help">Required fields are marked *. Submitting opens a
                        draft in your email app for you to send.</p>
                    <button type="submit" class="button button-gold">Submit <svg class="icon"
                            aria-hidden="true">
                            <use href="#icon-arrow" />
                        </svg></button>
                    <p class="contact-form-status" id="contact-form-status" role="status" aria-live="polite"></p>
                    <a class="contact-draft-link" id="contact-draft-link" hidden>If your email app didn't open, open
                        your draft here.</a>
                    <noscript>
                        <p class="contact-form-help">You can also email us directly at <a
                                href="mailto:info@aanilittlecrab.com">info@aanilittlecrab.com</a>.</p>
                    </noscript>
                </form>
            </div>
        </div>
    </section>
</main>


<?php include __DIR__ . '/partials/footer.php'; ?>