<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PAS NORMAL STUDIOS — Explore</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --clay: #7a7367;
    --clay-dark: #5c574f;
    --clay-light: #a09890;
    --off-white: #f5f3ef;
    --ink: #1a1916;
    --ink-muted: #6b6860;
    --white: #ffffff;
    --accent: #c8b99a;
  }

  html { scroll-behavior: smooth; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--off-white);
    color: var(--ink);
    overflow-x: hidden;
  }

  /* ─── ANNOUNCEMENT BAR ─── */
  .announcement {
    background: var(--ink);
    color: var(--white);
    text-align: center;
    font-size: 12px;
    letter-spacing: 0.1em;
    padding: 10px 40px;
    position: relative;
  }
  .announcement a { color: var(--accent); text-decoration: underline; cursor: pointer; }
  .announcement-close {
    position: absolute;
    right: 16px; top: 50%;
    transform: translateY(-50%);
    background: none; border: none;
    color: var(--white); font-size: 18px;
    cursor: pointer; line-height: 1;
  }

  /* ─── NAVBAR ─── */
  nav {
    background: var(--white);
    border-bottom: 0.5px solid rgba(0,0,0,0.12);
    padding: 0 48px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 64px;
    position: sticky;
    top: 0;
    z-index: 100;
  }
  .nav-links { display: flex; gap: 32px; }
  .nav-links a, .nav-actions a {
    font-size: 13px;
    letter-spacing: 0.06em;
    color: var(--ink);
    text-decoration: none;
    text-transform: uppercase;
    transition: color 0.2s;
  }
  .nav-links a:hover, .nav-actions a:hover { color: var(--clay); }
  .nav-logo { text-align: center; line-height: 1; }
  .nav-logo-name {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 18px;
    letter-spacing: 0.08em;
    color: var(--ink);
  }
  .nav-logo-sub {
    font-size: 8px;
    letter-spacing: 0.2em;
    color: var(--ink-muted);
    text-transform: uppercase;
    margin-top: 2px;
  }
  .nav-actions { display: flex; gap: 28px; align-items: center; }
  .cart-count {
    display: inline-flex; align-items: center; justify-content: center;
    width: 18px; height: 18px;
    background: var(--ink);
    color: var(--white);
    font-size: 10px;
    border-radius: 50%;
    margin-left: 4px;
  }

  /* ─── HERO ─── */
  .hero {
    background: var(--clay);
    padding: 72px 48px 88px;
    overflow: hidden;
    position: relative;
  }
  .hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4'%3E%3Crect width='1' height='1' fill='rgba(0,0,0,0.08)'/%3E%3C/svg%3E");
    pointer-events: none;
  }

  .hero-line {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(72px, 12vw, 160px);
    color: var(--white);
    letter-spacing: -0.01em;
    line-height: 0.92;
    opacity: 0;
    will-change: transform, opacity;
    transition: transform 1s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.8s ease;
    display: flex;
    align-items: center;
    gap: 24px;
  }
  .hero-line.l1 { transform: translateX(180px); }
  .hero-line.l2 { transform: translateX(-180px); transition-delay: 0.15s; }
  .hero-line.visible { transform: translateX(0); opacity: 1; }

  .pns-diamond {
    border: 3px solid var(--white);
    width: clamp(60px, 8vw, 100px);
    height: clamp(60px, 8vw, 100px);
    transform: rotate(45deg);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    position: relative;
  }
  .pns-diamond span {
    transform: rotate(-45deg);
    font-size: clamp(10px, 1.4vw, 16px);
    letter-spacing: 0.06em;
    text-align: center;
    line-height: 1.3;
  }

  /* ─── FILTER BAR ─── */
  .filter-section {
    background: var(--clay);
    padding: 0 48px 48px;
    display: flex;
    justify-content: center;
    gap: 0;
  }
  .filter-btn {
    padding: 12px 48px;
    border: 1px solid rgba(255,255,255,0.4);
    background: transparent;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.75);
    cursor: pointer;
    transition: background 0.25s, color 0.25s, border-color 0.25s;
  }
  .filter-btn:not(:last-child) { border-right: none; }
  .filter-btn.active {
    background: var(--white);
    color: var(--ink);
    border-color: var(--white);
  }
  .filter-btn:hover:not(.active) {
    background: rgba(255,255,255,0.12);
    color: var(--white);
  }

  /* ─── WELCOME BAR ─── */
  .welcome-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: var(--white);
    border: 0.5px solid rgba(0,0,0,0.12);
    padding: 24px 36px;
    margin: 36px 48px 0;
    gap: 20px;
    flex-wrap: wrap;
  }
  .welcome-bar h3 {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 4px;
  }
  .welcome-bar p {
    font-size: 13px;
    color: var(--ink-muted);
    max-width: 400px;
  }
  .btn-account {
    background: var(--ink);
    color: var(--white);
    border: none;
    padding: 13px 28px;
    font-family: 'DM Sans', sans-serif;
    font-size: 13px;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    cursor: pointer;
    white-space: nowrap;
    transition: background 0.2s;
  }
  .btn-account:hover { background: var(--clay); }

  /* ─── BLOG LIST ─── */
  .blog-grid {
    display: flex;
    flex-direction: column;
    gap: 30px;
    padding: 36px 0 80px;
    width: 95%;
    margin: 0 auto;
  }

  .blog-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    background: var(--clay-dark);
    width: 100%;
    height: 100vh;
    min-height: 560px;
    border-radius: 16px;
  }

  /* Blurred background fills entire card */
  .card-bg {
    position: absolute;
    inset: -20px;
    background-size: cover;
    background-position: center;
    filter: blur(18px) brightness(0.6) saturate(0.8);
    transform: scale(1.05);
    transition: filter 0.6s ease;
    will-change: filter;
  }
  .blog-card:hover .card-bg {
    filter: blur(22px) brightness(0.5) saturate(0.7);
  }

  /* Dark overlay on top of blur */
  .card-vignette {
    position: absolute;
    inset: 0;
    background: rgba(10, 8, 5, 0.35);
  }

  /* Portrait photo frame — centered, sharp, PNS style */
  .card-portrait-frame {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -54%);
    width: min(340px, 38vw);
    aspect-ratio: 3 / 4;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    box-shadow: 0 24px 72px rgba(0,0,0,0.55);
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.7s;
    pointer-events: none;
  }
  .blog-card:hover .card-portrait-frame {
    transform: translate(-50%, -57%) scale(1.025);
    box-shadow: 0 32px 96px rgba(0,0,0,0.7);
  }
  .card-portrait-frame img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
  }

  /* Bottom gradient for text legibility */
  .card-bottom-fade {
    position: absolute;
    inset: 0;
    background: linear-gradient(
      to top,
      rgba(8,6,3,0.92) 0%,
      rgba(8,6,3,0.45) 28%,
      transparent 55%
    );
    pointer-events: none;
  }

  /* Text block — bottom left */
  .card-content {
    position: absolute;
    bottom: 0; left: 0;
    padding: 48px 56px;
    color: var(--white);
    max-width: 520px;
  }
  .card-tag {
    font-size: 11px;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--accent);
    margin-bottom: 12px;
    display: block;
    font-weight: 500;
  }
  .card-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(32px, 4.5vw, 62px);
    letter-spacing: 0.01em;
    line-height: 1.0;
    margin-bottom: 28px;
  }
  .card-explore {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 13px 28px;
    border: 1px solid rgba(255,255,255,0.55);
    background: rgba(255,255,255,0.07);
    color: var(--white);
    font-family: 'DM Sans', sans-serif;
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
    backdrop-filter: blur(10px);
    transition: background 0.25s, border-color 0.25s, gap 0.25s;
  }
  .card-explore:hover {
    background: rgba(255,255,255,0.18);
    border-color: var(--white);
    gap: 18px;
  }
  .card-explore .arrow {
    font-size: 15px;
    transition: transform 0.25s;
    display: inline-block;
  }
  .card-explore:hover .arrow { transform: translateX(5px); }

 
</style>
</head>
<body>
    <header>
        <?php include 'header/header.php'; ?>
    </header>

<!-- Announcement -->
<div class="announcement" id="announcement">
  <a>Easter Holiday Shipping &amp; Delivery Information</a>
  <button class="announcement-close" onclick="document.getElementById('announcement').remove()">×</button>
</div>



<!-- Hero -->
<section class="hero">
  <div class="hero-line l1" id="hero-l1">
    INTERNATIONAL
    <div class="pns-diamond">
      <span>P<br>N<br>S</span>
    </div>
  </div>
  <div class="hero-line l2" id="hero-l2">CYCLING CLUB</div>
</section>

<!-- Filter -->
<div class="filter-section">
  <button class="filter-btn active" data-filter="all">All</button>
  <button class="filter-btn" data-filter="stories">Stories</button>
  <button class="filter-btn" data-filter="events">Events</button>
</div>

<!-- Welcome -->
<div class="welcome-bar">
  <div>
    <h3>Welcome</h3>
    <p>Get inspiration for your next cycling experiences, see our events and get product recommendations.</p>
  </div>
  <button class="btn-account">Create Account</button>
</div>

<!-- Blog Grid -->
<div class="blog-grid" id="blog-grid">

  <!-- Card 1 — Stories -->
  <div class="blog-card" data-cat="stories">
    <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1571068316344-75bc76f77890?w=1400&q=80');"></div>
    <div class="card-vignette"></div>
    <div class="card-portrait-frame">
      <img src="https://images.unsplash.com/photo-1571068316344-75bc76f77890?w=600&q=80" alt="Cyclists on coastal road">
    </div>
    <div class="card-bottom-fade"></div>
    <div class="card-content">
      <span class="card-tag">Stories</span>
      <div class="card-title">Learning to Read<br>the Road</div>
      <a href="https://pasnormalstudios.com/eu/explore" target="_blank" class="card-explore">
        Explore <span class="arrow">→</span>
      </a>
    </div>
  </div>

  <!-- Card 2 — Events -->
  <div class="blog-card" data-cat="events">
    <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1517649763962-0c623066013b?w=1400&q=80');"></div>
    <div class="card-vignette"></div>
    <div class="card-portrait-frame">
      <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?w=600&q=80" alt="Cycling event">
    </div>
    <div class="card-bottom-fade"></div>
    <div class="card-content">
      <span class="card-tag">Events</span>
      <div class="card-title">ICC Spring Ride<br>Paris 2026</div>
      <a href="https://pasnormalstudios.com/eu/explore" target="_blank" class="card-explore">
        Explore <span class="arrow">→</span>
      </a>
    </div>
  </div>

  <!-- Card 3 — Stories -->
  <div class="blog-card" data-cat="stories">
    <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1502904550040-7534597429ae?w=1400&q=80');"></div>
    <div class="card-vignette"></div>
    <div class="card-portrait-frame">
      <img src="https://images.unsplash.com/photo-1502904550040-7534597429ae?w=600&q=80" alt="Cycling at dawn">
    </div>
    <div class="card-bottom-fade"></div>
    <div class="card-content">
      <span class="card-tag">Stories</span>
      <div class="card-title">The Quiet Hour<br>Before Dawn</div>
      <a href="https://pasnormalstudios.com/eu/explore" target="_blank" class="card-explore">
        Explore <span class="arrow">→</span>
      </a>
    </div>
  </div>

  <!-- Card 4 — Events -->
  <div class="blog-card" data-cat="events">
    <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1534787238916-9ba6764efd4f?w=1400&q=80');"></div>
    <div class="card-vignette"></div>
    <div class="card-portrait-frame">
      <img src="https://images.unsplash.com/photo-1534787238916-9ba6764efd4f?w=600&q=80" alt="Mountain climb">
    </div>
    <div class="card-bottom-fade"></div>
    <div class="card-content">
      <span class="card-tag">Events</span>
      <div class="card-title">Stelvio Pass Climb<br>Summer Edition</div>
      <a href="https://pasnormalstudios.com/eu/explore" target="_blank" class="card-explore">
        Explore <span class="arrow">→</span>
      </a>
    </div>
  </div>

  <!-- Card 5 — Stories -->
  <div class="blog-card" data-cat="stories">
    <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1543942993-b4e7ff2e1b90?w=1400&q=80');"></div>
    <div class="card-vignette"></div>
    <div class="card-portrait-frame">
      <img src="https://images.unsplash.com/photo-1543942993-b4e7ff2e1b90?w=600&q=80" alt="Gravel road">
    </div>
    <div class="card-bottom-fade"></div>
    <div class="card-content">
      <span class="card-tag">Stories</span>
      <div class="card-title">Gravel, Grit &amp;<br>the Long Way Home</div>
      <a href="https://pasnormalstudios.com/eu/explore" target="_blank" class="card-explore">
        Explore <span class="arrow">→</span>
      </a>
    </div>
  </div>

  <!-- Card 6 — Events -->
  <div class="blog-card" data-cat="events">
    <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1558618047-f4e60cfd3f5e?w=1400&q=80');"></div>
    <div class="card-vignette"></div>
    <div class="card-portrait-frame">
      <img src="https://images.unsplash.com/photo-1558618047-f4e60cfd3f5e?w=600&q=80" alt="Training camp">
    </div>
    <div class="card-bottom-fade"></div>
    <div class="card-content">
      <span class="card-tag">Events</span>
      <div class="card-title">Mallorca Training<br>Camp — April</div>
      <a href="https://pasnormalstudios.com/eu/explore" target="_blank" class="card-explore">
        Explore <span class="arrow">→</span>
      </a>
    </div>
  </div>

</div>

<footer>
    <?php include 'footer.php'; ?>
</footer>

<script>
  // ── Hero animation ──
  window.addEventListener('load', () => {
    setTimeout(() => {
      document.getElementById('hero-l1').classList.add('visible');
      document.getElementById('hero-l2').classList.add('visible');
    }, 150);
  });

  // ── Filter ──
  const filterBtns = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.blog-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      cards.forEach(card => {
        const match = filter === 'all' || card.dataset.cat === filter;
        card.classList.toggle('hidden', !match);
      });
    });
  });
</script>
</body>
</html>