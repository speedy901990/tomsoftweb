<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Color Trends - Portfolio | TomSoft</title>
  <meta content="Color Trends — a cross-platform iOS and Android palette generator app built with Flutter. Curated trend palettes, random generation, and image extraction." name="description">
  <meta content="color trends, palette generator, flutter, ios, android, color palette, design tools, portfolio" name="keywords">

  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/portfolio-page.css" rel="stylesheet">

  <style>
    :root {
      --p-accent:       #D97B5A;
      --p-accent-light: #f5e5dc;
      --p-accent-muted: #faf2ee;
    }
  </style>
</head>

<body>

  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <?php include '../header.html'; ?>

  <main id="main">

    <!-- Breadcrumbs -->
    <div class="pd-breadcrumbs">
      <div class="container">
        <a href="../index.php#portfolio" class="pd-back-link">
          <i class="bi bi-arrow-left"></i> Portfolio
        </a>
        <ol class="pd-breadcrumb-trail">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../index.php#portfolio">Portfolio</a></li>
          <li>Color Trends</li>
        </ol>
      </div>
    </div>

    <!-- Project Title -->
    <div class="pd-project-title">
      <div class="container">
        <h1>
          <i class="bi bi-palette pd-title-icon"></i>
          Color Trends
        </h1>
        <div class="pd-title-bar"></div>
      </div>
    </div>

    <!-- Slider + Info -->
    <div class="pd-slider-wrap">
      <div class="container">
        <div class="row g-4 align-items-start">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="pd-slider pd-slider--screenshots portfolio-details-slider swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/color-trends/colortrends-screen-trends.png" alt="Color Trends — Trends tab with named palettes">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/color-trends/colortrends-screen-random.png" alt="Color Trends — Random palette generation">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/color-trends/colortrends-screen-fullscreen.png" alt="Color Trends — Fullscreen palette view">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/color-trends/colortrends-screen-picker.png" alt="Color Trends — Extract palette from image">
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-left">
            <div class="pd-info">
              <span class="pd-info-label">Project Info</span>
              <ul>
                <li>
                  <strong>Category</strong>
                  Mobile App
                </li>
                <li>
                  <strong>Platform</strong>
                  iOS &middot; Android
                </li>
                <li>
                  <strong>Technologies</strong>
                  Flutter &middot; Dart
                </li>
                <li>
                  <strong>Started</strong>
                  2025
                </li>
                <li>
                  <strong>Status</strong>
                  <span class="badge bg-warning text-dark">Coming Soon</span>
                </li>
                <li>
                  <strong>Website</strong>
                  <a href="https://tomsoft.dev/colortrends" target="_blank">
                    <i class="bi bi-globe me-1"></i>Color Trends
                  </a>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- About -->
    <div class="pd-about" data-aos="fade-up">
      <div class="container">
        <h2 class="pd-section-title">About the Project</h2>
        <p>Color Trends is a cross-platform palette generator for iOS and Android built with Flutter. It combines curated trend palettes organized by creative field, on-the-fly generation using color harmony schemes, and image-based extraction — all in one app. Palettes save locally with no account required. HEX and RGB output, dark and light themes, and full offline support. Coming soon on the App Store and Google Play.</p>
      </div>
    </div>

    <!-- How It's Made -->
    <div class="pd-details" data-aos="fade-up">
      <div class="container">
        <h2 class="pd-section-title">How It's Made</h2>
        <div class="row g-4">

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-phone pd-card-icon"></i>
              <h4>Flutter &amp; Dart</h4>
              <p>Single codebase targeting iOS and Android. Declarative UI with custom animations, a staggered swatch reveal, and gesture-based fullscreen transitions.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-palette pd-card-icon"></i>
              <h4>Color Science</h4>
              <p>Palette generation uses HSL harmony schemes (analogous, triadic, split-complementary) seeded from curated trend hues. Image extraction uses the <code>palette_generator</code> package.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-device-hdd pd-card-icon"></i>
              <h4>Local-First Data</h4>
              <p>All settings and saved palettes stored locally via <code>SharedPreferences</code>. No backend, no account — data stays on device for full privacy and offline use.</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Channels / CTA -->
    <div class="pd-channels" data-aos="fade-up">
      <div class="container">
        <div class="pd-channels-inner">
          <div class="pd-channels-text">
            <h3>Coming to App Store &amp; Google Play</h3>
            <p>Free on iOS and Android — no account, no setup</p>
          </div>
          <div class="pd-channels-btns">
            <a href="../colortrends/" class="pd-btn pd-btn-primary">
              <i class="bi bi-grid-3x3-gap"></i> Landing Page
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Gallery -->
    <div class="pd-gallery" data-aos="fade-up">
      <div class="container">
        <h2 class="pd-section-title">Gallery</h2>
        <div class="row g-4">

          <div class="col-lg-6 col-md-6">
            <div class="pd-gallery-card pd-gallery-card--contain">
              <img src="../assets/img/portfolio/color-trends/colortrends-screen-profile.png" alt="Profile and Settings screen">
              <div class="pd-gallery-caption">
                <h5>Profile &amp; Settings</h5>
                <p>Saved library, color count, HEX/RGB toggle, show codes, and theme selection in one screen.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="pd-gallery-card pd-gallery-card--contain">
              <img src="../assets/img/portfolio/color-trends/colortrends-screen-trends-codes.png" alt="Trends tab with color codes visible">
              <div class="pd-gallery-caption">
                <h5>Trends with Codes</h5>
                <p>Toggle color codes on trend palette miniatures for quick reference without opening the fullscreen view.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Project Navigation -->
    <div class="pd-project-nav">
      <div class="container">
        <a href="lazyscore.php" class="pd-nav-link">
          <i class="bi bi-arrow-left"></i>
          <div>
            <span class="pd-nav-link-label">Previous Project</span>
            <span class="pd-nav-link-title">Lazy Score</span>
          </div>
        </a>
        <div class="pd-nav-center">
          <a href="../index.php#portfolio">
            <i class="bi bi-grid-3x3-gap"></i> All Projects
          </a>
        </div>
        <a href="coffeemypassion.php" class="pd-nav-link pd-nav-next">
          <div style="text-align: right">
            <span class="pd-nav-link-label">Next Project</span>
            <span class="pd-nav-link-title">Coffee My Passion</span>
          </div>
          <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

  </main>

  <footer id="footer">
    <div class="container">
      <div class="copyright">&copy; Copyright <strong><span>TomSoft</span></strong></div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>
