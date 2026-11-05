# Aani LittleCrab

A responsive, cinematic book website inspired by the visual storytelling of Crystalman, retaining Aani LittleCrab’s book, original illustrations, contact details, land acknowledgement and eight bookseller locations.

Open `http://localhost/company-projects/aanilittle/` with Apache running in XAMPP. Alternatively, run `C:\xampp\php\php.exe -S localhost:8765` from this directory.

## Files

- `index.php`: semantic page markup; no PHP backend is required.
- `about.php`: author and artist biographies, using the shared header and footer.
- `contact.php`: contact form with name, email, optional subject and message, based on https://www.aanilittlecrab.com/contact. Submission validates the fields and opens an email draft for the visitor to send; SMTP delivery is not configured.
- `where-to-find.php`: eight retail locations with addresses, available phone numbers and Google Maps links.
- `assets/css/pages.css`: shared styles for the contact and location pages.
- `assets/css/about.css`: responsive About page styles using the existing theme.
- `assets/css/style.css`: all custom styles, responsive layouts and animations.
- `assets/js/script.js`: custom jQuery interactions, gallery/lightbox, navigation, email handoff and particle animation.
- `assets/vendor/`: local Bootstrap 5.3.3 and jQuery 3.7.1 distributions.
- `assets/fonts/`: local Cormorant Garamond and Manrope fonts.
- `assets/images/`: original book artwork, the generated landscape and optimized WebP copies.
- `assets/images/about/`: the About page's original author and artist images, watercolor background and coast map from https://www.aanilittlecrab.com/aboutus.

Body copy uses 16–19px type. Supporting text is at least 14px at every breakpoint. Motion respects `prefers-reduced-motion`; decorative particles pause outside the viewport and in hidden tabs.

## Content and artwork

Content and original artwork: https://www.aanilittlecrab.com/ and https://www.aanilittlecrab.com/wheretofind. Stories by Julia VanDyke; original illustrations by Twana MacArthur. The original book cover and five illustrations are reused from the supplied website. Reference for cinematic composition: https://crystalman.org/.

The book locations open Google Maps. The online store remains “coming soon.” The updates form validates an email address and opens an email draft to `info@aanilittlecrab.com`; visitors must send the draft. It does not silently subscribe visitors or store their personal information. A newsletter provider can be connected later.

## Generated asset

Built-in image generation created `assets/images/coastal-landscape.png`; `assets/images/coastal-landscape.webp` is the optimized version used on the page. This decorative imagined landscape is separate from the original book illustrations.

Final generation prompt:

> Use case: stylized-concept. Asset type: wide cinematic atmospheric landscape background for an illustrated book website, landscape 1536x1024 or wider. Create a stunning painterly panoramic northwest Pacific coast landscape, Alaska coastal mountains meeting still turquoise sea, dense dark evergreen rainforest at edges, distant glacier peaks, drifting mist, gentle pale gold late afternoon light on water. A small cedar branch in foreground, immense serene landscape. Dark forest teal and muted jade with warm cream sky and gold highlights. Hand-painted watercolor and gouache texture, sophisticated literary storybook mood, richly detailed, beautiful natural light. Composition: left half darker with quiet negative space for white webpage title overlay, coastline and illuminated mountains on right. No people, no boats, no animals, no buildings, no symbols, no Indigenous motifs, no lettering, no text, no watermarks. This is a decorative imagined landscape, not original book art.

## Verification

PHP and JavaScript syntax checks and browser checks cover desktop/mobile layouts, minimum font sizes, image loading, gallery controls, lightbox keyboard navigation and focus restoration, mobile navigation, email validation and reduced motion. Local verification artifacts are in the ignored `.preview/` directory.
