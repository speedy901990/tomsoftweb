<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Coffee My Passion - Portfolio | TomSoft</title>
  <meta content="Coffee My Passion — a personal coffee blog combining web development, photography, and video content around alternative brewing methods and coffee culture." name="description">
  <meta content="coffee, brewing, pour-over, aeropress, blog, photography, youtube, portfolio" name="keywords">

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
      --p-accent: #b6894c;
      --p-accent-light: #f5e6c8;
      --p-accent-muted: #fffbe7;
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
          <li>Coffee My Passion</li>
        </ol>
      </div>
    </div>

    <!-- Project Title -->
    <div class="pd-project-title">
      <div class="container">
        <h1>
          <i class="bi bi-cup-hot-fill pd-title-icon"></i>
          Coffee My Passion
        </h1>
        <div class="pd-title-bar"></div>
      </div>
    </div>

    <!-- Slider + Info -->
    <div class="pd-slider-wrap">
      <div class="container">
        <div class="row g-4 align-items-start">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="pd-slider portfolio-details-slider swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/coffee-my-passion/coffee-main.jpg" alt="Coffee My Passion homepage">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/coffee-my-passion/coffee-brewing.jpg" alt="Coffee brewing guide">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/coffee-my-passion/coffee-equipment.jpg" alt="Coffee equipment review">
                </div>
                <div class="swiper-slide">
                  <img src="../assets/img/portfolio/coffee-my-passion/coffee-mobile.jpg" alt="Mobile responsive design">
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
                  Web &middot; Photo &middot; Video
                </li>
                <li>
                  <strong>Technologies</strong>
                  HTML &middot; CSS &middot; JavaScript
                </li>
                <li>
                  <strong>Started</strong>
                  2020
                </li>
                <li>
                  <strong>Status</strong>
                  <span class="badge bg-success">Live</span>
                </li>
                <li>
                  <strong>Website</strong>
                  <a href="http://coffeemypassion.com" target="_blank">coffeemypassion.com</a>
                </li>
                <li>
                  <strong>YouTube</strong>
                  <a href="https://www.youtube.com/@coffeemypassion" target="_blank">
                    <i class="bi bi-youtube me-1"></i>@coffeemypassion
                  </a>
                </li>
                <li>
                  <strong>Instagram</strong>
                  <a href="https://www.instagram.com/__coffeemypassion__/" target="_blank">
                    <i class="bi bi-instagram me-1"></i>@coffeemypassion
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
        <p>Coffee My Passion is a personal project born from a genuine love of specialty coffee. It combines web development, photography, and video production into one platform — sharing alternative brewing techniques (pour-over, Aeropress, French press), equipment reviews, and coffee culture through written content, YouTube tutorials, and Instagram photography. It started as a creative outlet and grew into a dedicated community around the art of brewing.</p>
      </div>
    </div>

    <!-- How It's Made -->
    <div class="pd-details" data-aos="fade-up">
      <div class="container">
        <h2 class="pd-section-title">How It's Made</h2>
        <div class="row g-4">

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-code-slash pd-card-icon"></i>
              <h4>Web Development</h4>
              <p>Static site built with HTML, CSS, and vanilla JavaScript. Optimised for fast loading and mobile-first reading experience, with no heavy frameworks or dependencies.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-camera pd-card-icon"></i>
              <h4>Coffee Photography</h4>
              <p>Product and lifestyle shots focusing on composition, natural light, and the textures of brewing equipment. Consistent warm-toned aesthetic across all visual content.</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="pd-detail-card">
              <i class="bi bi-camera-video pd-card-icon"></i>
              <h4>Video Production</h4>
              <p>YouTube tutorials covering brewing methods step by step — scripted, filmed, and edited for clarity. Audio quality and colour grade prioritised for a professional finish.</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Channels -->
    <div class="pd-channels" data-aos="fade-up">
      <div class="container">
        <div class="pd-channels-inner">
          <div class="pd-channels-text">
            <h3>Follow the coffee journey</h3>
            <p>Brewing tutorials, equipment reviews, and coffee photography</p>
          </div>
          <div class="pd-channels-btns">
            <a href="https://www.youtube.com/@coffeemypassion" target="_blank" class="pd-btn pd-btn-primary">
              <i class="bi bi-youtube"></i> YouTube
            </a>
            <a href="https://www.instagram.com/__coffeemypassion__/" target="_blank" class="pd-btn pd-btn-outline">
              <i class="bi bi-instagram"></i> Instagram
            </a>
            <a href="http://coffeemypassion.com" target="_blank" class="pd-btn pd-btn-outline">
              <i class="bi bi-globe"></i> Website
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
            <div class="pd-gallery-card">
              <img src="../assets/img/portfolio/coffee-my-passion/coffee-brewing-guides.jpg" alt="Brewing guides section">
              <div class="pd-gallery-caption">
                <h5>Brewing Guides</h5>
                <p>Step-by-step guides for pour-over, Aeropress, French press, and more.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="pd-gallery-card">
              <img src="../assets/img/portfolio/coffee-my-passion/coffee-mobile-experience.jpg" alt="Mobile design">
              <div class="pd-gallery-caption">
                <h5>Mobile Experience</h5>
                <p>Fully responsive layout optimised for reading on any device.</p>
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
        <a href="carswithtomasz.php" class="pd-nav-link pd-nav-next">
          <div style="text-align: right">
            <span class="pd-nav-link-label">Next Project</span>
            <span class="pd-nav-link-title">Cars with Tomasz</span>
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
