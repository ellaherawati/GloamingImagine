<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About — Gloaming Imagine</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --bg:      #ffffff;
  --surface: #ffffff;
  --border:  #e8e8e8;
  --text:    #111111;
  --muted:   #888888;
  --header-h: 61px;
}

html { scroll-behavior: smooth; }

body {
  font-family: 'Libre Franklin', -apple-system, sans-serif;
  background: var(--bg);
  color: var(--text);
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

body.dark-mode {
  --bg:      #111111;
  --surface: #111111;
  --border:  #2a2a2a;
  --text:    #f0f0f0;
  --muted:   #666666;
}

*, *::before, *::after {
  transition:
    background-color 0.45s cubic-bezier(0.4, 0, 0.2, 1),
    border-color     0.45s cubic-bezier(0.4, 0, 0.2, 1),
    color            0.45s cubic-bezier(0.4, 0, 0.2, 1),
    box-shadow       0.45s cubic-bezier(0.4, 0, 0.2, 1) !important;
}

.theme-ripple {
  position: fixed; border-radius: 50%;
  pointer-events: none; z-index: 99998;
  transform: scale(0); opacity: 0.18;
  will-change: transform, opacity;
}
.theme-ripple.expanding { transform: scale(1) !important; opacity: 0 !important; }
.dark-mode-toggle .toggle-icon { display: inline-block; }
.dark-mode-toggle.spinning .toggle-icon {
  animation: spin-bounce 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
}
@keyframes spin-bounce {
  0%   { transform: rotate(0deg) scale(1); }
  50%  { transform: rotate(200deg) scale(1.5); }
  100% { transform: rotate(360deg) scale(1); }
}

/* ── ANNOUNCEMENT BAR ── */
.announce-bar {
  background: var(--text);
  color: var(--bg);
  text-align: center;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.06em;
  padding: 10px 40px;
  position: relative;
}
.announce-close {
  position: absolute; right: 16px; top: 50%;
  transform: translateY(-50%);
  background: none; border: none; color: inherit;
  font-size: 18px; cursor: pointer; opacity: 0.5; padding: 0 4px;
}
.announce-close:hover { opacity: 1; }

/* ── HEADER ── */
header {
  position: sticky; top: 0;
  background: var(--surface);
  border-bottom: 1px solid var(--border);
  z-index: 1000;
}
header.scrolled { box-shadow: 0 1px 12px rgba(0,0,0,0.06); }
body.dark-mode header.scrolled { box-shadow: 0 1px 12px rgba(0,0,0,0.4); }

.header-main {
  padding: 0 40px; height: var(--header-h);
  display: flex; justify-content: space-between; align-items: center;
}
.header-left { display: flex; gap: 32px; align-items: center; }
.header-left a {
  color: var(--text); text-decoration: none;
  font-size: 13px; font-weight: 400;
}
.header-left a:hover { opacity: 0.5; }

.logo { flex: 1; text-align: center; }
.logo a { text-decoration: none; }
.logo-image { height: 32px; width: auto; object-fit: contain; }
.logo-text {
  font-size: 13px; font-weight: 700;
  letter-spacing: 2.5px; text-transform: uppercase;
  color: var(--text); display: block; line-height: 1.2;
}
.logo-sub {
  font-size: 7px; font-weight: 400;
  letter-spacing: 2px; text-transform: uppercase;
  color: var(--muted); display: block; margin-top: 2px;
}

.header-right { display: flex; gap: 28px; align-items: center; }
.header-right a {
  color: var(--text); text-decoration: none;
  font-size: 13px; font-weight: 400;
}
.header-right a:hover { opacity: 0.5; }

.dark-mode-toggle {
  background: none; border: none; cursor: pointer;
  display: flex; align-items: center; gap: 6px;
  font-family: 'Libre Franklin', sans-serif;
  font-size: 13px; color: var(--text); padding: 0;
}
.dark-mode-toggle:hover { opacity: 0.5; }
.dark-mode-toggle .toggle-icon { font-size: 14px; }

/* ── PAGE CONTENT ── */
.page-wrap {
  max-width: 740px;
  margin: 0 auto;
  padding: 80px 40px 0;
}

.about-title {
  font-size: clamp(36px, 5vw, 60px);
  font-weight: 700;
  letter-spacing: -0.04em;
  line-height: 1.05;
  color: var(--text);
  margin-bottom: 32px;
}

.about-body {
  font-size: 15px;
  font-weight: 400;
  line-height: 1.75;
  color: var(--text);
  margin-bottom: 20px;
}

/* ── INFO TABLE ── */
.info-block {
  margin-top: 64px;
  margin-bottom: 80px;
}
.info-row {
  display: flex;
  padding: 14px 0;
  border-top: 1px solid var(--border);
  gap: 24px;
}
.info-row:last-child { border-bottom: 1px solid var(--border); }
.info-key {
  font-size: 14px; font-weight: 400;
  color: var(--text); min-width: 200px; flex-shrink: 0;
}
.info-val {
  font-size: 14px; font-weight: 400; color: var(--text);
}
.info-val a { color: var(--text); text-decoration: none; }
.info-val a:hover { text-decoration: underline; }

/* ── PRESS SECTION ── */
.press-section {
  max-width: 740px;
  margin: 0 auto;
  padding: 0 40px 100px;
}
.press-title {
  font-size: clamp(28px, 3.5vw, 44px);
  font-weight: 700;
  letter-spacing: -0.04em;
  color: var(--text);
  margin-bottom: 36px;
}
.press-item {
  padding: 28px 0;
  border-top: 1px solid var(--border);
}
.press-item:last-child { border-bottom: 1px solid var(--border); }
.press-item-title {
  font-size: 15px; font-weight: 600;
  color: var(--text); margin-bottom: 8px;
  letter-spacing: -0.01em;
}
.press-item-body {
  font-size: 14px; font-weight: 400;
  line-height: 1.7; color: var(--text);
  opacity: 0.7; margin-bottom: 12px;
}
.press-link {
  font-size: 13px; font-weight: 500;
  color: var(--text); text-decoration: underline;
  text-underline-offset: 3px;
}
.press-link:hover { opacity: 0.5; }

/* ── HERO IMAGE ── */
.hero-image {
  width: 100%; height: 70vh; min-height: 400px;
  overflow: hidden;
}
.hero-image img {
  width: 100%; height: 100%;
  object-fit: cover; object-position: center 40%;
  display: block;
}

/* ── NEWSLETTER ── */
.newsletter-section {
  padding: 72px 40px;
  border-top: 1px solid var(--border);
}
.newsletter-container {
  max-width: 1200px; margin: 0 auto;
  display: flex; justify-content: space-between;
  align-items: center; gap: 40px;
}
.newsletter-label {
  font-size: 9px; font-weight: 700;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--muted); margin-bottom: 14px;
}
.newsletter-title {
  font-size: clamp(20px, 2.8vw, 32px);
  font-weight: 400; line-height: 1.3;
  letter-spacing: -0.03em; color: var(--text);
}
.newsletter-btn {
  flex-shrink: 0; padding: 14px 40px;
  background: transparent; color: var(--text);
  border: 1px solid var(--text);
  font-size: 11px; font-weight: 600;
  letter-spacing: 0.14em; text-transform: uppercase;
  cursor: pointer; font-family: inherit;
}
.newsletter-btn:hover { background: var(--text); color: var(--bg); }

/* ── FOOTER ── */
.site-footer {
  background: var(--surface);
  padding: 60px 40px 36px;
  border-top: 1px solid var(--border);
}
.footer-inner { max-width: 1200px; margin: 0 auto; }
.footer-top {
  display: grid;
  grid-template-columns: 260px 1fr 1fr;
  gap: 60px;
  margin-bottom: 56px; padding-bottom: 56px;
  border-bottom: 1px solid var(--border);
}
.footer-col-brand .shipping-label {
  font-size: 9px; font-weight: 700;
  letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--muted); margin-bottom: 12px;
}
.shipping-row {
  display: flex; align-items: center; gap: 8px;
  font-size: 13px; color: var(--text);
  margin-bottom: 36px; cursor: pointer;
}
.shipping-row:hover { opacity: 0.6; }
.shipping-arrow { font-size: 9px; color: var(--muted); }
.footer-brand-links { list-style: none; }
.footer-brand-links li { margin-bottom: 14px; }
.footer-brand-links a {
  font-size: 22px; font-weight: 600;
  letter-spacing: -0.03em; color: var(--text);
  text-decoration: none; line-height: 1.2; display: block;
}
.footer-brand-links a:hover { opacity: 0.5; }
.footer-col h3 {
  font-size: 9px; font-weight: 700;
  letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--muted); margin-bottom: 20px;
}
.footer-links { list-style: none; }
.footer-links li { margin-bottom: 11px; }
.footer-links a { color: var(--text); text-decoration: none; font-size: 14px; }
.footer-links a:hover { opacity: 0.5; }
.footer-bottom {
  display: flex; justify-content: space-between;
  align-items: center; flex-wrap: wrap; gap: 12px;
}
.footer-legal { display: flex; gap: 24px; flex-wrap: wrap; }
.footer-legal a {
  color: var(--text); text-decoration: none;
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.04em; text-transform: uppercase;
}
.footer-legal a:hover { opacity: 0.5; }
.footer-social { display: flex; gap: 20px; }
.footer-social a {
  color: var(--text); text-decoration: none;
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.08em; text-transform: uppercase;
}
.footer-social a:hover { opacity: 0.5; }
.footer-copy { font-size: 11px; color: var(--muted); }

/* ── RESPONSIVE ── */
@media (max-width: 768px) {
  .header-main { padding: 0 20px; }
  .header-left { display: none; }
  .page-wrap { padding: 48px 20px 0; }
  .press-section { padding: 0 20px 60px; }
  .info-key { min-width: 120px; font-size: 13px; }
  .info-val { font-size: 13px; }
  .newsletter-container { flex-direction: column; align-items: flex-start; }
  .newsletter-btn { width: 100%; text-align: center; }
  .newsletter-section { padding: 48px 20px; }
  .footer-top { grid-template-columns: 1fr; gap: 40px; padding-bottom: 40px; margin-bottom: 40px; }
  .footer-bottom { flex-direction: column; align-items: flex-start; gap: 16px; }
  .site-footer { padding: 48px 20px 32px; }
}
</style>
</head>

<body>

<!-- ── ANNOUNCEMENT BAR ── -->
<div class="announce-bar" id="announceBar">
  Join ICC and receive 10% off your first order
  <button class="announce-close" onclick="document.getElementById('announceBar').style.display='none'">×</button>
</div>

<!-- ── HEADER ── -->
<header id="siteHeader">
  <div class="header-main">
    <div class="header-left">
      <a href="#">Shop</a>
      <a href="explore.html">Explore</a>
      <a href="#">Flagship Stores</a>
    </div>

    <div class="logo">
      <a href="#">
        <img src="img/logogloaming.png" alt="Gloaming Imagine" class="logo-image"
          onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
        <span class="logo-text" style="display:none;">GLOAMING IMAGINE<span class="logo-sub">International Cycling Club</span></span>
      </a>
    </div>

    <div class="header-right">
      <button class="dark-mode-toggle" id="darkModeToggle" title="Toggle Dark Mode">
        <span class="toggle-icon">☀️</span>
        <span class="toggle-label">Dark Mode</span>
      </button>
      <a href="#">Search</a>
      <a href="#">Account</a>
      <a href="#">Cart</a>
    </div>
  </div>
</header>

<!-- ── ABOUT TEXT ── -->
<div class="page-wrap">
  <h1 class="about-title">Gloaming Imagine</h1>

  <p class="about-body">Gloaming Imagine is a Copenhagen-based brand of contemporary, technical cycling clothing. The concept of Gloaming Imagine is to create technically perfect apparel, combined with visionary aesthetics. Through innovative designs, brand collaborations, and sourcing of new production methods, Gloaming Imagine strives to bring out collections that define modern cycling in a different context.</p>

  <p class="about-body">The brand honours the great traditions of cycling, but is above all committed to the patterns and colours that define state of the art fashion today. The uncompromising attention to detail and hand-made, sustainable quality is paired with an inspired take on today's look and feel. Gloaming Imagine produces high-end clothing with textiles and methods at the same level as demanded by professional riders — but at the same time, all styles are created for long-term usage and durability. Based in Scandinavia, but with a specific international element, Gloaming Imagine can now be found throughout Europe, parts of Asia, and North America.</p>

  <!-- ── COMPANY INFO ── -->
  <div class="info-block">
    <div class="info-row">
      <span class="info-key">Company Name</span>
      <span class="info-val">Gloaming Imagine</span>
    </div>
    <div class="info-row">
      <span class="info-key">Legal Name</span>
      <span class="info-val">Gloaming Imagine ApS</span>
    </div>
    <div class="info-row">
      <span class="info-key">CVR no.</span>
      <span class="info-val">36440473</span>
    </div>
    <div class="info-row">
      <span class="info-key">Year Founded</span>
      <span class="info-val">2016</span>
    </div>
    <div class="info-row">
      <span class="info-key">Address</span>
      <span class="info-val">Århusgade 126, DK-2150, Copenhagen, Denmark</span>
    </div>
    <div class="info-row">
      <span class="info-key">Office Tel.</span>
      <span class="info-val"><a href="tel:+4531333338">+45 3133 3338</a></span>
    </div>
    <div class="info-row">
      <span class="info-key">General Info</span>
      <span class="info-val"><a href="mailto:support@gloamingimagine.com">support@gloamingimagine.com</a></span>
    </div>
    <div class="info-row">
      <span class="info-key">Customer Support</span>
      <span class="info-val"><a href="mailto:support@gloamingimagine.com">support@gloamingimagine.com</a></span>
    </div>
    <div class="info-row">
      <span class="info-key">Press Requests</span>
      <span class="info-val"><a href="mailto:press@gloamingimagine.com">press@gloamingimagine.com</a></span>
    </div>
  </div>
</div>

<!-- ── PRESS RELEASES ── -->
<div class="press-section">
  <h2 class="press-title">Press releases</h2>

  <div class="press-item">
    <div class="press-item-title">Archive and Gloaming Imagine Sign a Strategic Partnership</div>
    <p class="press-item-body">The investment company Archive Srl and Gloaming Imagine ApS, a company specializing in technical cycling clothing, announce the signature of a partnership agreement.</p>
    <a href="#" class="press-link">Full press release</a>
  </div>

  <div class="press-item">
    <div class="press-item-title">Gloaming Imagine Opens First Flagship Store in Copenhagen</div>
    <p class="press-item-body">The brand's first physical retail space opens at Nørreport, bringing the full collection and ICC membership programme to the Danish capital.</p>
    <a href="#" class="press-link">Full press release</a>
  </div>

  <div class="press-item">
    <div class="press-item-title">The Merino Project — Transparency Report 2024</div>
    <p class="press-item-body">Full disclosure of material sourcing, manufacturing partners, and environmental offset for the Spring/Summer 2024 collection.</p>
    <a href="#" class="press-link">Full press release</a>
  </div>
</div>

<!-- ── HERO IMAGE ── -->
<div class="hero-image">
  <img src="https://images.unsplash.com/photo-1541625602330-2277a4c46182?w=1800&q=85" alt="Riders on road">
</div>

<!-- ── NEWSLETTER ── -->
<section class="newsletter-section">
  <div class="newsletter-container">
    <div>
      <div class="newsletter-label">Newsletter</div>
      <h2 class="newsletter-title">Be the first to know about<br>upcoming drops, events and deals.</h2>
    </div>
    <button class="newsletter-btn">Sign Up</button>
  </div>
</section>

<!-- ── FOOTER ── -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-col-brand">
        <div class="shipping-label">Shipping To</div>
        <div class="shipping-row">REST OF EU <span class="shipping-arrow">▾</span></div>
        <ul class="footer-brand-links">
          <li><a href="#">Destination Everywhere</a></li>
          <li><a href="#">Sponsored Teams</a></li>
          <li><a href="#">Find Stores</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>Customer Care</h3>
        <ul class="footer-links">
          <li><a href="#">Get in Touch</a></li>
          <li><a href="#">Gift Guide</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Crash Replacement</a></li>
          <li><a href="#">Care Guide</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h3>About Gloaming Imagine</h3>
        <ul class="footer-links">
          <li><a href="#">About</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">Career</a></li>
          <li><a href="#">Stores</a></li>
          <li><a href="#">International Cycling Club</a></li>
          <li><a href="#">Impact &amp; Responsibility</a></li>
          <li><a href="#">Industry Programme</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-legal">
        <a href="#">Terms &amp; Conditions</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Cookie Policy</a>
        <a href="#">Cookie Policy Setting</a>
      </div>
      <div class="footer-social">
        <a href="#">Instagram</a>
        <a href="#">YouTube</a>
        <a href="#">Strava</a>
        <a href="#">LinkedIn</a>
      </div>
      <span class="footer-copy">© Gloaming Imagine 2026</span>
    </div>
  </div>
</footer>

<script>
(function() {
  const btn = document.getElementById('darkModeToggle');

  function spawnRipple(x, y, toDark) {
    const size = Math.hypot(window.innerWidth, window.innerHeight) * 2.2;
    const r = document.createElement('div');
    r.className = 'theme-ripple';
    r.style.cssText = `width:${size}px;height:${size}px;left:${x - size/2}px;top:${y - size/2}px;background:${toDark ? '#111' : '#fff'};transition:transform 0.7s cubic-bezier(0.4,0,0.2,1),opacity 0.7s cubic-bezier(0.4,0,0.2,1);`;
    document.body.appendChild(r);
    r.getBoundingClientRect();
    r.classList.add('expanding');
    r.addEventListener('transitionend', () => r.remove(), { once: true });
  }

  function apply(dark, animate, x, y) {
    const icon  = btn.querySelector('.toggle-icon');
    const label = btn.querySelector('.toggle-label');
    if (animate) {
      btn.classList.remove('spinning'); void btn.offsetWidth; btn.classList.add('spinning');
      btn.addEventListener('animationend', () => btn.classList.remove('spinning'), { once: true });
      spawnRipple(x ?? window.innerWidth/2, y ?? window.innerHeight/2, dark);
    }
    setTimeout(() => {
      document.body.classList.toggle('dark-mode', dark);
      if (icon)  icon.textContent  = dark ? '🌙' : '☀️';
      if (label) label.textContent = dark ? 'Light Mode' : 'Dark Mode';
      localStorage.setItem('darkMode', dark ? '1' : '0');
    }, animate ? 80 : 0);
  }

  if (localStorage.getItem('darkMode') === '1') apply(true, false);
  btn.addEventListener('click', e => apply(!document.body.classList.contains('dark-mode'), true, e.clientX, e.clientY));
})();

window.addEventListener('scroll', () => {
  document.getElementById('siteHeader').classList.toggle('scrolled', window.scrollY > 10);
}, { passive: true });
</script>

</body>
</html>