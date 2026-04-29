<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lazy Score - Portfolio | TomSoft</title>
  <meta content="Lazy Score — an iPhone and Apple Watch app for effortless squash game scoring, built with Swift and SwiftUI." name="description">
  <meta content="lazy score, squash, ios app, apple watch, swift, swiftui, app store, portfolio" name="keywords">

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
      --p-accent: #4A90D9;
      --p-accent-light: #daeeff;
      --p-accent-muted: #f0f8ff;
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
          <li>Lazy Score</li>
        </ol>
      </div>
    </div>

    <!-- Project Title -->
    <div class="pd-project-title">
      <div class="container">
        <h1>
          <i class="bi bi-phone pd-title-icon"></i>
          Lazy Score
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
                  <img src="../assets/img/portfolio/lazy-score/lazyscore-ios-main.png" alt="Lazy Score — iOS main screen">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/lazy-score/lazyscore-watch-main.png" alt="Lazy Score — Apple Watch main screen">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/lazy-score/lazyscore-ios-scoring.png" alt="Lazy Score — iOS scoring interface">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/lazy-score/lazyscore-watch-scoring.png" alt="Lazy Score — Watch scoring interface">
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
                  iOS &middot; watchOS
                </li>
                <li>
                  <strong>Technologies</strong>
                  Swift &middot; SwiftUI &middot; WatchOS
                </li>
                <li>
                  <strong>Started</strong>
                  2025
                </li>
                <li>
                  <strong>Status</strong>
                  <span class="badge bg-success">Live</span>
                </li>
                <li>
                  <strong>App Store</strong>
                  <a href="https://apps.apple.com/pl/app/lazy-score/id6752389671" target="_blank">
                    <i class="bi bi-apple me-1"></i>Download
                  </a>
                </li>
                <li>
                  <strong>Website</strong>
                  <a href="https://tomsoft.dev/lazyscore" target="_blank">
                    <i class="bi bi-globe me-1"></i>Lazy Score
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
        <p>Lazy Score is an iPhone and Apple Watch app built for squash players who want to track game scores without interrupting play. One tap on the watch updates the score instantly — no need to touch the phone during a match. Built with Swift and SwiftUI, the app handles multiple game formats, stores match history locally, and works fully offline. It's live on the App Store and available for free.</p>
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
              <h4>iOS Development</h4>
              <p>Built natively with Swift and SwiftUI. Declarative UI with smooth animations, gesture recognition, and support for multiple screen sizes. No third-party dependencies.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-smartwatch pd-card-icon"></i>
              <h4>Apple Watch</h4>
              <p>Companion WatchOS app for wrist-based scoring during play. Haptic feedback confirms each tap, and the interface is designed for glanceability — readable at a glance mid-game.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-database pd-card-icon"></i>
              <h4>Data &amp; Offline</h4>
              <p>All game history stored locally with Core Data. No account required, no internet needed — data stays on device for full privacy and offline play.</p>
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
            <h3>Available on the App Store</h3>
            <p>Free download for iPhone and Apple Watch</p>
          </div>
          <div class="pd-channels-btns">
            <a href="https://apps.apple.com/pl/app/lazy-score/id6752389671" target="_blank" class="pd-btn pd-btn-primary">
              <i class="bi bi-apple"></i> Download on App Store
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
              <img src="../assets/img/portfolio/lazy-score/lazyscore-ios-settings.png" alt="iOS Settings screen">
              <div class="pd-gallery-caption">
                <h5>iOS Settings</h5>
                <p>Game format selection and app preferences for a customised experience.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="pd-gallery-card pd-gallery-card--contain">
              <img src="../assets/img/portfolio/lazy-score/lazyscore-watch-settings.png" alt="Apple Watch settings screen">
              <div class="pd-gallery-caption">
                <h5>Watch Settings</h5>
                <p>Wrist-optimised settings screen for quick in-game adjustments.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Project Navigation -->
    <div class="pd-project-nav">
      <div class="container">
        <a href="carswithtomasz.php" class="pd-nav-link">
          <i class="bi bi-arrow-left"></i>
          <div>
            <span class="pd-nav-link-label">Previous Project</span>
            <span class="pd-nav-link-title">Cars with Tomasz</span>
          </div>
        </a>
        <div class="pd-nav-center">
          <a href="../index.php#portfolio">
            <i class="bi bi-grid-3x3-gap"></i> All Projects
          </a>
        </div>
        <a href="colortrends.php" class="pd-nav-link pd-nav-next">
          <div style="text-align: right">
            <span class="pd-nav-link-label">Next Project</span>
            <span class="pd-nav-link-title">Color Trends</span>
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
