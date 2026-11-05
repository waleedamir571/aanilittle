 <footer class="site-footer" id="contact">
        <div class="container-wide">
            <div class="footer-top row g-5">
                <div class="col-lg-3"><a class="brand footer-brand" href="<?= $homePrefix ?>#home"><svg class="brand-crab"
                            aria-hidden="true">
                            <use href="#icon-crab" />
                        </svg><span>Aani <span class="brand-small">LittleCrab</span></span></a>
                    <p class="footer-tagline">Stories to wonder.<br>Art to remember.</p><a class="footer-back"
                        href="<?= $homePrefix ?>#home">BACK TO THE BEGINNING <span aria-hidden="true">↑</span></a>
                </div>
                <div class="col-lg-6 gratitude">
                    <h2>With Gratitude</h2>
                    <p>We, the makers of this small book, live, work and play on this Pacific island bounded by the
                        Salish Sea. We acknowledge that this Island is the ancestral home and traditional territory of
                        the Coast Salish, Nuu-chah-nulth, and Kwakwaka’wakw peoples. These in turn abound with diversity
                        with distinct names, culture and languages. For millennia these First Nations have been, and
                        continue to be, stewards, watchmen, and knowledge keepers to the benefit of this land. May we
                        humbly walk and learn from them.</p>
                </div>
                <div class="col-lg-3 footer-contact">
                    <h2>Let’s stay connected</h2><a href="mailto:info@aanilittlecrab.com">info@aanilittlecrab.com <span
                            aria-hidden="true">↗</span></a><a href="where-to-find.php">Where to find the book <span
                            aria-hidden="true">↗</span></a><a href="<?= $homePrefix ?>#art">Explore the illustrations <span
                            aria-hidden="true">↗</span></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Master Financial Services Corp. &amp; Master Publishing Services</p><span>I Am Aani LittleCrab
                    · stories and art</span>
            </div>
        </div>
    </footer>

    <div class="modal fade artwork-modal" id="artwork-modal" tabindex="-1" aria-labelledby="lightbox-title"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="lightbox-header"><span>THE ART OF AANI LITTLECRAB</span><button type="button"
                        class="lightbox-close" data-bs-dismiss="modal" aria-label="Close artwork">×</button></div>
                <div class="lightbox-stage"><button class="circle-button" id="lightbox-prev"
                        aria-label="Previous artwork"><svg class="icon reversed" aria-hidden="true">
                            <use href="#icon-arrow" />
                        </svg></button><img id="lightbox-image" src="assets/images/sunrise.jpg"
                        alt="The Sunrise"><button class="circle-button" id="lightbox-next"
                        aria-label="Next artwork"><svg class="icon" aria-hidden="true">
                            <use href="#icon-arrow" />
                        </svg></button></div>
                <div class="lightbox-caption">
                    <div>
                        <h2 id="lightbox-title">The Sunrise</h2>
                        <p>Original illustration by Twana MacArthur</p>
                    </div><span id="lightbox-counter">01 / 05</span>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
