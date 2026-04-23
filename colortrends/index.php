<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color Trends — Palette Generator for iOS & Android</title>
  <meta name="description" content="Color Trends is a modern color palette generator for iOS and Android. Curated trend palettes, instant generation, and image extraction. Coming soon.">
  <meta name="keywords" content="color trends, color palette generator, ios app, android app, flutter, design tools, color inspiration, palette app">

  <meta property="og:title" content="Color Trends — Palette Generator for iOS & Android">
  <meta property="og:description" content="Curated trend palettes, instant generation, and image extraction. Coming soon on iOS & Android.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://tomsoft.dev/colortrends/">
  <meta property="og:image" content="https://tomsoft.dev/assets/img/portfolio/color-trends/colortrends-icon.jpg">

  <link rel="icon" href="../assets/img/favicon.png">
  <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
  <link rel="stylesheet" href="../assets/css/landing.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">

  <style>
    :root {
      --ct-accent:    #D97B5A;
      --ct-accent-dk: #b8603f;
      --ct-dark:      #1A1208;
    }

    .ct-hero-dark { background: var(--ct-dark); }

    .ct-hero-dark h1,
    .ct-hero-dark .ld-hero-sub { color: #fff; }

    .ct-hero-dark .ld-hero-sub { opacity: 0.82; }

    .ct-hero-dark .ld-badge {
      background: rgba(255,255,255,0.10);
      border-color: rgba(255,255,255,0.25);
      color: rgba(255,255,255,0.85);
    }

    .ct-hero-dark .ld-btn-primary {
      background: var(--ct-accent);
      color: #fff;
    }
    .ct-hero-dark .ld-btn-primary:hover { background: var(--ct-accent-dk); color: #fff; }

    .ct-hero-dark .ld-btn-secondary {
      background: rgba(255,255,255,0.12);
      border-color: rgba(255,255,255,0.30);
      color: #fff;
    }
    .ct-hero-dark .ld-btn-secondary:hover {
      background: rgba(255,255,255,0.20);
      color: #fff;
    }

    .ct-proof-strip { color: rgba(255,255,255,0.65); }
    .ct-proof-strip .ld-proof-sep { background: rgba(255,255,255,0.28); }

    .ld-section-label,
    .ld-split-label { color: var(--ct-accent); }

    .ld-mini-icon { color: var(--ct-accent); }

    .ld-nav-coming {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 16px;
      background: var(--ct-dark);
      color: rgba(255,255,255,0.85);
      border-radius: 980px;
      font-size: 13px;
      font-weight: 500;
    }

    .ld-screen--phone-lg {
      max-height: 520px;
      max-width: 240px;
    }

    .ct-cta-btn {
      background: var(--ct-accent);
      color: #fff;
      padding: 16px 36px;
      font-size: 16px;
      margin-top: 8px;
    }
    .ct-cta-btn:hover { background: var(--ct-accent-dk); color: #fff; }

    .ld-mobile-bar a { background: var(--ct-dark); }
  </style>
</head>
<body>

<!-- ======= Nav ======= -->
<nav class="ld-nav">
  <a class="ld-nav-brand" href="../index.php">
    <img src="../assets/img/portfolio/color-trends/colortrends-icon.jpg" alt="Color Trends" class="ld-nav-appicon">
    Color Trends <span>by TomSoft</span>
  </a>
  <span class="ld-nav-coming">
    <i class="bi bi-clock"></i> Coming Soon
  </span>
</nav>

<!-- ======= Hero ======= -->
<section class="ld-hero ct-hero-dark">
  <img src="../assets/img/portfolio/color-trends/colortrends-icon.jpg" alt="Color Trends app icon" class="ld-hero-appicon">

  <div class="ld-badge">
    <i class="bi bi-phone"></i> Coming Soon &middot; iOS &amp; Android
  </div>

  <h1>Your Palette.<br>Your Vibe.</h1>

  <p class="ld-hero-sub">Discover curated trend palettes, generate harmonious combos on the fly, or extract colors from any photo.</p>

  <div class="ld-btn-group">
    <a class="ld-btn ld-btn-secondary" href="#features">Explore Features</a>
  </div>

  <div class="ld-proof ct-proof-strip">
    <span>iOS &amp; Android</span>
    <span class="ld-proof-sep"></span>
    <span>Flutter</span>
    <span class="ld-proof-sep"></span>
    <span>Free</span>
    <span class="ld-proof-sep"></span>
    <span>No account required</span>
    <span class="ld-proof-sep"></span>
    <span>Works offline</span>
  </div>
</section>

<!-- Wave: dark → white -->
<div class="ld-wave" style="background:#1A1208">
  <svg viewBox="0 0 1440 72" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,36 C240,72 480,0 720,36 C960,72 1200,8 1440,36 L1440,72 L0,72 Z" fill="#ffffff"/>
  </svg>
</div>

<!-- ======= Screenshots ======= -->
<div class="ld-screens">
  <img class="ld-screen ld-screen--phone ld-screen--phone-lg"
       src="../assets/img/portfolio/color-trends/colortrends-screen-trends.png"
       alt="Color Trends — Trends tab with named palettes">
  <img class="ld-screen ld-screen--phone"
       src="../assets/img/portfolio/color-trends/colortrends-screen-random.png"
       alt="Color Trends — Random palette generation">
  <img class="ld-screen ld-screen--phone"
       src="../assets/img/portfolio/color-trends/colortrends-screen-fullscreen.png"
       alt="Color Trends — Fullscreen palette view">
  <img class="ld-screen ld-screen--phone ld-screen--phone-lg"
       src="../assets/img/portfolio/color-trends/colortrends-screen-picker.png"
       alt="Color Trends — Extract palette from image">
</div>

<!-- Wave: white → surface -->
<div class="ld-wave" style="background:#ffffff">
  <svg viewBox="0 0 1440 72" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,24 C360,72 720,0 1080,48 C1260,68 1380,20 1440,36 L1440,72 L0,72 Z" fill="#f5f5f7"/>
  </svg>
</div>

<!-- ======= Features ======= -->
<div class="ld-features-intro" id="features">
  <p class="ld-section-label">Why Color Trends</p>
  <h2 class="ld-section-title">Color at the speed<br>of inspiration.</h2>
</div>

<section class="ld-features-split">

  <!-- Trend Palettes -->
  <div class="ld-split-row">
    <div class="ld-split-text">
      <p class="ld-split-label">Trend Palettes</p>
      <h3>Stay ahead of color</h3>
      <p>Curated palettes organized by creative field — Photography, Architecture, Interior Design, and more. Named palettes like Mocha Mousse, Coastal, and Film Noir ready to use or expand.</p>
    </div>
    <div class="ld-split-img">
      <img src="../assets/img/portfolio/color-trends/colortrends-screen-trends.png" alt="Trends tab with named palettes by category">
    </div>
  </div>

  <!-- Random generation -->
  <div class="ld-split-row ld-split-row--reverse">
    <div class="ld-split-text">
      <p class="ld-split-label">Instant Generation</p>
      <h3>Generate the perfect combo</h3>
      <p>Tap generate for a fresh palette using color harmony schemes — analogous, triadic, and more — all seeded from real trend hues. Switch between HEX and RGB, tap any swatch to copy the code instantly.</p>
    </div>
    <div class="ld-split-img">
      <img src="../assets/img/portfolio/color-trends/colortrends-screen-random.png" alt="Random palette generation screen">
    </div>
  </div>

  <!-- Image picker -->
  <div class="ld-split-row">
    <div class="ld-split-text">
      <p class="ld-split-label">From Image</p>
      <h3>Extract colors from your world</h3>
      <p>Pick any photo from your gallery or shoot one with the camera. Color Trends extracts the dominant palette in seconds. The landscape you hiked, the coffee mug on your desk — anything is a palette.</p>
    </div>
    <div class="ld-split-img">
      <img src="../assets/img/portfolio/color-trends/colortrends-screen-picker.png" alt="Image color extraction screen">
    </div>
  </div>

</section>

<!-- Mini feature cards -->
<div class="ld-mini-features">
  <div class="ld-mini-grid">

    <div class="ld-mini-card">
      <i class="bi bi-clipboard ld-mini-icon"></i>
      <div>
        <h4>Copy in One Tap</h4>
        <p>Tap any color swatch to copy the code. HEX or RGB — you choose in settings.</p>
      </div>
    </div>

    <div class="ld-mini-card">
      <i class="bi bi-bookmark ld-mini-icon"></i>
      <div>
        <h4>Save to Library</h4>
        <p>Bookmark palettes you love. Your collection lives on device — no login, no cloud required.</p>
      </div>
    </div>

    <div class="ld-mini-card">
      <i class="bi bi-moon-stars ld-mini-icon"></i>
      <div>
        <h4>Dark &amp; Light Modes</h4>
        <p>Full dark mode, light mode, and auto — adapts to system appearance seamlessly.</p>
      </div>
    </div>

  </div>
</div>

<!-- Wave: surface → dark -->
<div class="ld-wave" style="background:#f5f5f7">
  <svg viewBox="0 0 1440 72" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
    <path d="M0,48 C180,8 360,72 720,32 C900,16 1200,60 1440,24 L1440,72 L0,72 Z" fill="#1A1208"/>
  </svg>
</div>

<!-- ======= CTA ======= -->
<section class="ld-cta">
  <img src="../assets/img/portfolio/color-trends/colortrends-icon.jpg" alt="Color Trends" style="width:80px;height:80px;border-radius:18px;box-shadow:0 8px 32px rgba(0,0,0,0.4)">
  <h2>Coming Soon.</h2>
  <p>Free on iOS and Android. No account, no setup — just open and create.</p>
  <a class="ld-btn ct-cta-btn" href="../portfolio/colortrends.php">
    <i class="bi bi-grid-3x3-gap"></i> View Portfolio Page
  </a>
</section>

<!-- ======= Footer ======= -->
<footer class="ld-footer">
  <span>&copy; <?php echo date('Y'); ?> <a href="../index.php">TomSoft</a> &mdash; Tomasz Nowak</span>
  <span>
    <a href="../portfolio/colortrends.php">Portfolio page</a>
    &nbsp;&middot;&nbsp;
    <a href="../index.php">tomsoft.dev</a>
  </span>
</footer>

<!-- ======= Mobile Sticky Bar ======= -->
<div class="ld-mobile-bar">
  <a>
    <i class="bi bi-clock"></i> Coming Soon &mdash; iOS &amp; Android
  </a>
</div>

</body>
</html>
