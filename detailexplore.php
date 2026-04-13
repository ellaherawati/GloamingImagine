<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About | Gloaming Imagine</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
<style>

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --black:  #1a1a1a;
  --mid:rgb(255, 255, 255);
  --border: #e0e0e0;
  --white:  #ffffff;
}

html { font-size: 16px; }

body {
  background: var(--white);
  color: var(--black);
  font-family: 'Poppins', sans-serif;
  letter-spacing: -0.03em;
  -webkit-font-smoothing: antialiased;
}

/* ── PAGE ── */
.page {
  max-width: 1200px;
  margin: 0 auto;
  padding: 80px 40px 120px;
}

/* ── LOGO LINE ── */
.brand {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--black);
  /* margin-bottom: 72px; */
  display: block;
}

/* ── SECTION HEADING ── */
.section-title {
  font-size: 60px;
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.04em;
  margin-bottom: 20px;
  color: var(--black);
}

.divider {
  width: 100%;
  height: 1px;
  background: var(--border);
  margin-bottom: 28px;
}

/* ── BODY TEXT ── */
p {
  font-size: 14px;
  font-weight: 300;
  line-height: 1.3;
  color: #3a3a3a;
  margin-bottom: 18px;
}
p:last-child { margin-bottom: 0; }
p strong { font-weight: 600; color: var(--black); }

/* ── INFO TABLE ── */
.info-table {
  width: 100%;
  border-collapse: collapse;
  margin: 56px 0;
}
.info-table tr {
  border-bottom: 1px solid var(--border);
}
.info-table tr:first-child {
  border-top: 1px solid var(--border);
}
.info-table td {
  padding: 14px 0;
  font-size: 13px;
  line-height: 1.5;
  vertical-align: top;
}
.info-table .lbl {
  font-weight: 600;
  color: var(--black);
  width: 200px;
  padding-right: 24px;
  letter-spacing: -0.01em;
}
.info-table .val {
  font-weight: 300;
  color: #3a3a3a;
}
.info-table .val a {
  color: var(--black);
  text-decoration: none;
  border-bottom: 1px solid var(--border);
  padding-bottom: 1px;
  transition: border-color 0.15s;
}
.info-table .val a:hover {
  border-color: var(--black);
}

/* ── BLOCK SEPARATOR ── */
.block {
  padding: 56px 0;
  border-top: 1px solid var(--border);
}
.block:first-of-type { border-top: none; }

/* ── PILLARS ── */
.pillar-num {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.1em;
  color: var(--mid);
  text-transform: uppercase;
  display: block;
  margin-bottom: 12px;
}
.pillar-name {
  font-size: 22px;
  font-weight: 700;
  letter-spacing: -0.04em;
  margin-bottom: 14px;
  color: var(--black);
}

/* ── TEAM ── */
.team-row {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 1px;
  background: var(--border);
  margin-top: 40px;
  border: 1px solid var(--border);
}
.team-member {
  background: var(--white);
  padding: 28px 24px 32px;
}
.member-name {
  font-size: 15px;
  font-weight: 700;
  letter-spacing: -0.04em;
  margin-bottom: 2px;
  color: var(--black);
}
.member-role {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--mid);
  margin-bottom: 14px;
}
.member-bio {
  font-size: 12px;
  line-height: 1.75;
  font-weight: 300;
  color: #555;
  margin: 0;
}

/* ── STATS ── */
.stats-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1px;
  background: var(--border);
  border: 1px solid var(--border);
  margin-top: 40px;
}
.stat {
  background: var(--white);
  padding: 28px 20px;
}
.stat-num {
  font-size: 36px;
  font-weight: 700;
  letter-spacing: -0.05em;
  line-height: 1;
  margin-bottom: 6px;
  color: var(--black);
}
.stat-lbl {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--mid);
  line-height: 1.5;
}

/* ── SUSTAIN LIST ── */
.sustain-list {
  list-style: none;
  border-top: 1px solid var(--border);
  margin-top: 28px;
}
.sustain-list li {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 13px 0;
  border-bottom: 1px solid var(--border);
  font-size: 13px;
  font-weight: 500;
  color: var(--black);
  letter-spacing: -0.01em;
}
.sustain-list li::before {
  content: '';
  width: 5px; height: 5px;
  background: var(--black);
  border-radius: 50%;
  flex-shrink: 0;
}

/* ── QUOTE ── */
.quote-block {
  padding: 56px 0;
  border-top: 1px solid var(--border);
}
.quote-text {
  font-size: 28px;
  font-weight: 700;
  letter-spacing: -0.05em;
  line-height: 1.2;
  color: var(--black);
  margin-bottom: 20px;
}
.quote-attr {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--mid);
  margin: 0;
}

/* ── CTA BUTTON ── */
.btn-wrap {
  margin-top: 40px;
}
.btn {
  display: inline-block;
  background: var(--black);
  color: var(--white);
  font-family: 'Poppins', sans-serif;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  text-decoration: none;
  padding: 14px 40px;
  letter-spacing: -0.01em;
  transition: opacity 0.15s;
}
.btn:hover { opacity: 0.75; }
.btn-ghost {
  background: transparent;
  color: var(--black);
  border: 1px solid var(--border);
  margin-left: 12px;
}
.btn-ghost:hover { border-color: var(--black); opacity: 1; }

/* ── FADE IN ── */
.fade {
  opacity: 0;
  transform: translateY(16px);
  transition: opacity 0.65s ease, transform 0.65s ease;
}
.fade.in { opacity: 1; transform: none; }

/* ════════════════════════════════════════
   ── FULL-SCREEN BANNER ──
   ════════════════════════════════════════ */

.banner-section {
  position: relative;
  width: 100vw;
  left: 50%;
  right: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  height: 100vh;
  min-height: 600px;
  overflow: hidden;
  background: #0f0f0f;
}

/* Layered gradient atmosphere */
.banner-bg {
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 80% 60% at 70% 40%, rgba(90, 75, 55, 0.35) 0%, transparent 65%),
    radial-gradient(ellipse 50% 70% at 20% 80%, rgba(45, 55, 60, 0.4) 0%, transparent 60%),
    linear-gradient(160deg, #0f0f0f 0%, #1c1a16 40%, #111213 100%);
}

/* Subtle grain texture via SVG filter */
.banner-grain {
  position: absolute;
  inset: 0;
  opacity: 0.045;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
  background-size: 180px 180px;
  pointer-events: none;
}

/* Thin horizontal rule lines — editorial atmosphere */
.banner-lines {
  position: absolute;
  inset: 0;
  pointer-events: none;
}
.banner-lines::before,
.banner-lines::after {
  content: '';
  position: absolute;
  left: 0; right: 0;
  height: 1px;
  background: rgba(255,255,255,0.06);
}
.banner-lines::before { top: 38%; }
.banner-lines::after  { top: 62%; }

/* Large ghost letter watermark */
.banner-watermark {
  position: absolute;
  bottom: -0.12em;
  right: -0.05em;
  font-family: 'Poppins', sans-serif;
  font-size: clamp(180px, 28vw, 380px);
  font-weight: 700;
  letter-spacing: -0.06em;
  color: transparent;
  -webkit-text-stroke: 1px rgba(255,255,255,0.04);
  line-height: 1;
  pointer-events: none;
  user-select: none;
}

/* Vertical side label */
.banner-side-label {
  position: absolute;
  left: 48px;
  bottom: 48px;
  writing-mode: vertical-rl;
  text-orientation: mixed;
  transform: rotate(180deg);
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.25);
}

/* Content container */
.banner-content {
  position: relative;
  z-index: 2;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 0 80px 72px;
  max-width: 1200px;
  margin: 0 auto;
}

/* Top badge */
.banner-badge {
  position: absolute;
  top: 48px;
  left: 80px;
  font-size: 9px;
  font-weight: 700;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.35);
  display: flex;
  align-items: center;
  gap: 10px;
}
.banner-badge::before {
  content: '';
  width: 28px;
  height: 1px;
  background: rgba(255,255,255,0.3);
  display: block;
}

/* Year tag top right */
.banner-year {
  position: absolute;
  top: 48px;
  right: 80px;
  font-size: 9px;
  font-weight: 600;
  letter-spacing: 0.18em;
  color: rgba(255,255,255,0.2);
}

/* Headline */
.banner-headline {
  font-size: clamp(44px, 7vw, 88px);
  font-weight: 700;
  letter-spacing: -0.05em;
  line-height: 0.95;
  color: #f5f0e8;
  margin-bottom: 32px;
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.9s ease 0.2s, transform 0.9s ease 0.2s;
}
.banner-headline em {
  font-style: italic;
  font-weight: 300;
  color: rgba(245,240,232,0.5);
}
.banner-headline.reveal {
  opacity: 1;
  transform: none;
}

/* Sub row */
.banner-sub-row {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
}

.banner-tagline {
  font-size: 13px;
  font-weight: 300;
  line-height: 1.7;
  color: rgba(245,240,232,0.45);
  max-width: 400px;
  margin: 0;
  opacity: 0;
  transform: translateY(16px);
  transition: opacity 0.9s ease 0.45s, transform 0.9s ease 0.45s;
}
.banner-tagline.reveal {
  opacity: 1;
  transform: none;
}

/* Scroll cue */
.banner-scroll-cue {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;
  opacity: 0;
  transition: opacity 0.9s ease 0.7s;
}
.banner-scroll-cue.reveal { opacity: 1; }
.banner-scroll-cue span {
  font-size: 8px;
  font-weight: 700;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.2);
}
.scroll-line {
  width: 1px;
  height: 40px;
  background: linear-gradient(to bottom, rgba(255,255,255,0.25), transparent);
  animation: scrollDrop 1.8s ease-in-out infinite;
}
@keyframes scrollDrop {
  0%   { transform: scaleY(0); transform-origin: top; opacity: 1; }
  50%  { transform: scaleY(1); transform-origin: top; opacity: 1; }
  51%  { transform: scaleY(1); transform-origin: bottom; }
  100% { transform: scaleY(0); transform-origin: bottom; opacity: 0; }
}

/* Horizontal divider line inside banner */
.banner-divider {
  position: absolute;
  left: 80px;
  right: 80px;
  bottom: 140px;
  height: 1px;
  background: rgba(255,255,255,0.07);
  opacity: 0;
  transition: opacity 1s ease 0.3s;
}
.banner-divider.reveal { opacity: 1; }

/* ── RESPONSIVE ── */
@media (max-width: 680px) {
  .banner-content  { padding: 0 28px 52px; }
  .banner-badge,
  .banner-year     { left: 28px; right: 28px; }
  .banner-year     { left: auto; }
  .banner-side-label { left: 16px; bottom: 32px; }
  .banner-divider  { left: 28px; right: 28px; }
  .banner-sub-row  { flex-direction: column; align-items: flex-start; }
  .banner-scroll-cue { display: none; }
}

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

</style>
</head>
<body>
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
</div>
<div class="page">

  <!-- ── INTRO ── -->
  <div class="block fade">
    <h1 class="section-title">Gloaming Imagine</h1>
    <div class="divider"></div>
    <p>Gloaming Imagine adalah brand lifestyle dan home goods berbasis di Jakarta. Kami ada di persimpangan antara desain yang dipertimbangkan dan fungsi keseharian — mengkurasi objek yang benar-benar memiliki tempat di ruang yang Anda tinggali.</p>
    <p>Didirikan tahun 2019, Gloaming Imagine lahir dari satu obsesi: menemukan benda-benda yang dibuat dengan jujur. Bukan produk tren, bukan barang cepat — melainkan benda dengan integritas material dan alasan nyata untuk ada.</p>
    <p>Nama kami berasal dari <em>gloaming</em> — jam singkat antara siang dan malam yang tidak masuk kategori mana pun. Kami percaya desain yang baik hidup di sana: cukup spesifik untuk menjadi dirinya sendiri, cukup terbuka untuk cocok di mana saja.</p>
  </div>
</div>


<script>
  /* ── Fade-in for general blocks ── */
  const els = document.querySelectorAll('.fade');
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
  }, { threshold: 0.08 });
  els.forEach(el => io.observe(el));

  /* ── Banner reveal on scroll into view ── */
  const bannerHeadline = document.getElementById('bannerHeadline');
  const bannerTagline  = document.getElementById('bannerTagline');
  const bannerScroll   = document.getElementById('bannerScroll');
  const bannerDivider  = document.getElementById('bannerDivider');

  const bannerObserver = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        bannerHeadline.classList.add('reveal');
        bannerTagline.classList.add('reveal');
        bannerScroll.classList.add('reveal');
        bannerDivider.classList.add('reveal');
        bannerObserver.disconnect();
      }
    });
  }, { threshold: 0.15 });

  bannerObserver.observe(document.getElementById('banner'));
</script>

</body>
</html>