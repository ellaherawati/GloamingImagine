<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloaming Imagine - Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Libre Franklin', -apple-system, sans-serif;
            background: #fff;
            color: #000;
            overflow-x: hidden;
            transition: background 0.55s cubic-bezier(0.4, 0, 0.2, 1),
                        color 0.55s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Global smooth transition */
        *, *::before, *::after {
            transition:
                background-color 0.55s cubic-bezier(0.4, 0, 0.2, 1),
                border-color 0.55s cubic-bezier(0.4, 0, 0.2, 1),
                color 0.55s cubic-bezier(0.4, 0, 0.2, 1),
                box-shadow 0.55s cubic-bezier(0.4, 0, 0.2, 1),
                filter 0.55s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        /* Theme ripple overlay */
        .theme-ripple {
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
            z-index: 99998;
            transform: scale(0);
            opacity: 0.18;
            will-change: transform, opacity;
        }

        .theme-ripple.expanding {
            transform: scale(1) !important;
            opacity: 0 !important;
        }

        /* Toggle icon spin */
        .dark-mode-toggle .toggle-icon {
            display: inline-block;
        }

        .dark-mode-toggle.spinning .toggle-icon {
            animation: spin-bounce 0.55s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        @keyframes spin-bounce {
            0%   { transform: rotate(0deg) scale(1); }
            50%  { transform: rotate(200deg) scale(1.5); }
            100% { transform: rotate(360deg) scale(1); }
        }

        /* ── Dark Mode ── */
        body.dark-mode {
            background: #111;
            color: #f0f0f0;
        }

        body.dark-mode header {
            background: #1a1a1a !important;
            border-bottom-color: #333 !important;
        }

        body.dark-mode .header-main {
            border-bottom-color: #333 !important;
        }

        /* ── Frosted Glass Header on Scroll ── */
        header {
            transition:
                background-color 0.45s cubic-bezier(0.4, 0, 0.2, 1),
                border-color     0.45s cubic-bezier(0.4, 0, 0.2, 1),
                box-shadow       0.45s cubic-bezier(0.4, 0, 0.2, 1),
                backdrop-filter  0.45s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        header.at-top {
            background: #fff !important;
            border-bottom-color: #e0e0e0 !important;
            backdrop-filter: none !important;
            box-shadow: none !important;
        }

        header.scrolled {
            background: #fff !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.07) !important;
        }

        header.scrolling-down {
            background: rgba(255, 255, 255, 0.55) !important;
            backdrop-filter: blur(18px) saturate(180%) !important;
            -webkit-backdrop-filter: blur(18px) saturate(180%) !important;
            box-shadow: none !important;
        }

        /* Dark mode — at top */
        body.dark-mode header.at-top {
            background: transparent !important;
            border-bottom-color: transparent !important;
            backdrop-filter: none !important;
            box-shadow: none !important;
        }

        body.dark-mode header.at-top .header-main {
            border-bottom-color: transparent !important;
        }

        body.dark-mode header.at-top .header-left a,
        body.dark-mode header.at-top .header-right a,
        body.dark-mode header.at-top .search-toggle,
        body.dark-mode header.at-top .dark-mode-toggle {
            color: #fff !important;
        }

        /* Dark mode — scroll ke atas */
        body.dark-mode header.scrolled {
            background: #1a1a1a !important;
            backdrop-filter: none !important;
            -webkit-backdrop-filter: none !important;
            border-bottom-color: #333 !important;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.4) !important;
        }

        body.dark-mode header.scrolled .header-main {
            border-bottom-color: transparent !important;
        }

        /* Dark mode — scroll ke bawah */
        body.dark-mode header.scrolling-down {
            background: rgba(17, 17, 17, 0.45) !important;
            backdrop-filter: blur(18px) saturate(160%) !important;
            -webkit-backdrop-filter: blur(18px) saturate(160%) !important;
            border-bottom-color: transparent !important;
            box-shadow: none !important;
        }

        body.dark-mode header.scrolling-down .header-main {
            border-bottom-color: transparent !important;
        }

        body.dark-mode header.scrolling-down .header-left a,
        body.dark-mode header.scrolling-down .header-right a,
        body.dark-mode header.scrolling-down .search-toggle,
        body.dark-mode header.scrolling-down .dark-mode-toggle {
            color: #fff !important;
        }

        body.dark-mode .header-left a,
        body.dark-mode .header-right a,
        body.dark-mode .search-toggle {
            color: #f0f0f0 !important;
        }

        /* ── Dark Mode Toggle Button ── */
        .dark-mode-toggle {
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: 'Libre Franklin', sans-serif;
            font-size: 14px;
            color: #000;
            padding: 0;
            transition: opacity 0.3s;
        }

        .dark-mode-toggle:hover {
            opacity: 0.6;
        }

        body.dark-mode .dark-mode-toggle {
            color: #f0f0f0;
        }

        .dark-mode-toggle .toggle-icon {
            font-size: 15px;
            line-height: 1;
        }

        /* ── Header ── */
        header {
            position: sticky;
            top: 0;
            background: #fff;
            border-bottom: 1px solid #e0e0e0;
            z-index: 100;
        }

        .header-main {
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
        }

        .header-left {
            display: flex;
            gap: 35px;
            align-items: center;
        }

        .header-left a {
            color: #000;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.3s;
        }

        .header-left a:hover {
            opacity: 0.6;
        }

        .logo {
            text-align: center;
            flex: 1;
        }

        .logo-image {
            height: 35px;
            width: auto;
            object-fit: contain;
        }

        .logo-text {
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            line-height: 1.2;
            display: block;
        }

        .logo-subtitle {
            font-size: 8px;
            font-weight: 400;
            letter-spacing: 2px;
            margin-top: 2px;
            display: block;
        }

        .header-right {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .header-right a {
            color: #000;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.3s;
        }

        .header-right a:hover {
            opacity: 0.6;
        }

        /* ── Search Box ── */
        .search-container {
            position: relative;
        }

        .search-toggle {
            color: #000;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.3s;
            cursor: pointer;
        }

        .search-toggle:hover {
            opacity: 0.6;
        }

        .search-box {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 0;
            overflow: visible;
            z-index: 1000;
        }

        .search-box.active {
            width: 350px;
            opacity: 1;
            visibility: visible;
        }

        .search-input-wrapper {
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 10px 35px 10px 12px;
            border: none;
            outline: none;
            font-size: 14px;
            font-family: inherit;
        }

        .search-close {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #666;
            padding: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-close:hover {
            color: #000;
        }

        /* Search Dropdown */
        .search-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-top: none;
            max-height: 400px;
            overflow-y: auto;
            display: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .search-dropdown.active {
            display: block;
        }

        .search-result-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            text-decoration: none;
            color: #000;
            border-bottom: 1px solid #f5f5f5;
            transition: background 0.2s;
        }

        .search-result-item:hover {
            background: #f8f8f8;
        }

        .search-result-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            background: #f5f5f5;
            flex-shrink: 0;
        }

        .search-result-info {
            flex: 1;
        }

        .search-result-name {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 2px;
        }

        .search-result-variant {
            font-size: 11px;
            color: #666;
        }

        .search-result-price {
            font-size: 13px;
            font-weight: 600;
            flex-shrink: 0;
        }

        .search-footer {
            padding: 12px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }

        .search-see-all {
            display: inline-block;
            padding: 8px 24px;
            background: #000;
            color: #fff;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: background 0.3s;
        }

        .search-see-all:hover {
            background: #333;
        }

        .search-no-results {
            padding: 24px;
            text-align: center;
            color: #666;
            font-size: 13px;
        }

        /* ── Dark Mode Search ── */
        body.dark-mode .search-box {
            background: #1a1a1a !important;
            border-color: #333 !important;
        }

        body.dark-mode .search-input {
            background: #1a1a1a !important;
            color: #f0f0f0 !important;
        }

        body.dark-mode .search-dropdown {
            background: #1a1a1a !important;
            border-color: #333 !important;
        }

        body.dark-mode .search-result-item {
            color: #f0f0f0 !important;
            border-bottom-color: #2a2a2a !important;
        }

        body.dark-mode .search-result-item:hover {
            background: #2a2a2a !important;
        }

        body.dark-mode .search-no-results {
            color: #888 !important;
        }

        body.dark-mode .search-footer {
            border-top-color: #333 !important;
        }

        /* ── Shop Sidebar ── */
        .shop-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 9998;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.35s ease;
        }

        .shop-overlay.open {
            opacity: 1;
            pointer-events: all;
        }

        .shop-sidebar {
            position: fixed;
            top: 0;
            left: -480px;
            width: 460px;
            height: 100vh;
            background: #fff;
            z-index: 9999;
            box-shadow: 4px 0 30px rgba(0,0,0,0.12);
            transition: left 0.4s cubic-bezier(0.4,0,0.2,1);
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .shop-sidebar.open {
            left: 0;
        }

        .shop-sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 36px;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #f0f0f0;
        }

        .shop-sidebar-close {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 600;
        }

        .shop-sidebar-banner {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .shop-sidebar-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .shop-sidebar-banner-label {
            position: absolute;
            bottom: 16px;
            left: 20px;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 1px;
            text-shadow: 0 1px 4px rgba(0,0,0,0.4);
        }

        .shop-sidebar-body {
            padding: 0 36px 36px;
            flex: 1;
        }

        .shop-section-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #999;
            margin: 28px 0 16px;
        }

        .shop-category-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6px 24px;
        }

        .shop-category-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 10px 0;
            text-decoration: none;
            color: #000;
            font-size: 14px;
            border-bottom: 1px solid #f5f5f5;
            transition: opacity 0.2s;
        }

        .shop-category-item:hover { opacity: 0.5; }

        .shop-category-icon {
            width: 36px;
            height: 36px;
            object-fit: contain;
            flex-shrink: 0;
            filter: grayscale(100%);
        }

        .shop-divider {
            height: 1px;
            background: #e8e8e8;
            margin: 8px 0 4px;
        }

        .shop-link-simple {
            display: block;
            padding: 11px 0;
            text-decoration: none;
            color: #000;
            font-size: 14px;
            border-bottom: 1px solid #f5f5f5;
            transition: opacity 0.2s;
        }

        .shop-link-simple:hover { opacity: 0.5; }

        /* Dark Mode Shop Sidebar */
        body.dark-mode .shop-sidebar,
        body.dark-mode .shop-sidebar {
            background: #1a1a1a !important;
            color: #f0f0f0 !important;
        }

        body.dark-mode .shop-sidebar-header {
            border-bottom-color: #333 !important;
        }

        body.dark-mode .shop-sidebar-close {
            color: #f0f0f0 !important;
        }

        body.dark-mode .shop-section-title {
            color: #666 !important;
        }

        body.dark-mode .shop-category-item,
        body.dark-mode .shop-link-simple {
            color: #f0f0f0 !important;
            border-bottom-color: #2a2a2a !important;
        }

        body.dark-mode .shop-divider {
            background: #2a2a2a !important;
        }

        /* Demo spacer (so header scroll effects are visible) */
        .demo-content {
            height: 200vh;
            background: linear-gradient(to bottom, #f5f5f5, #e0e0e0);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            color: #999;
            letter-spacing: 1px;
        }

        body.dark-mode .demo-content {
            background: linear-gradient(to bottom, #1a1a1a, #111);
            color: #555;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="header-main">
            <div class="header-left">
                <a href="#" id="shopToggle">Shop</a>
                <a href="#">About</a>
                <a href="#">Campaign</a>
                <a href="#">Account</a>
            </div>

            <div class="logo">
                <a href="#">
                    <!-- Ganti src dengan path logo kamu -->
                    <span class="logo-text">Gloaming Imagine</span>
                    <span class="logo-subtitle">Performance Cycling</span>
                </a>
            </div>

            <div class="header-right">
                <button class="dark-mode-toggle" id="darkModeToggle" title="Toggle Dark Mode">
                    <span class="toggle-icon">☀️</span>
                    <span class="toggle-label">Dark Mode</span>
                </button>

                <div class="search-container">
                    <a class="search-toggle" id="searchToggle">Search</a>
                    <div class="search-box" id="searchBox">
                        <div class="search-input-wrapper">
                            <input type="text" class="search-input" placeholder="Search products..." id="searchInput">
                            <button class="search-close" id="searchClose">×</button>
                        </div>
                        <div class="search-dropdown" id="searchDropdown"></div>
                    </div>
                </div>

                <a href="#" style="position:relative; display:inline-block;">
                    Wishlist
                    <span id="wishlistHeaderCount" style="
                        display: none;
                        position: absolute;
                        top: -8px;
                        right: -12px;
                        background: #000;
                        color: #fff;
                        font-size: 9px;
                        font-weight: 700;
                        min-width: 16px;
                        height: 16px;
                        border-radius: 50%;
                        text-align: center;
                        line-height: 16px;
                        padding: 0 3px;
                        letter-spacing: 0;
                    ">0</span>
                </a>

                <a href="#" style="position:relative; display:inline-block;">
                    Cart
                    <span id="cartCount" style="
                        display: none;
                        position: absolute;
                        top: -8px;
                        right: -12px;
                        background: #000;
                        color: #fff;
                        font-size: 9px;
                        font-weight: 700;
                        min-width: 16px;
                        height: 16px;
                        border-radius: 50%;
                        text-align: center;
                        line-height: 16px;
                        padding: 0 3px;
                        letter-spacing: 0;
                    ">0</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Shop Sidebar -->
    <div class="shop-overlay" id="shopOverlay"></div>
    <div class="shop-sidebar" id="shopSidebar">
        <div class="shop-sidebar-header">
            <span>Menu</span>
            <button class="shop-sidebar-close" id="shopClose">&#x2715;</button>
        </div>

        <div class="shop-sidebar-banner">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="New Arrivals">
            <div class="shop-sidebar-banner-label">New Arrivals</div>
        </div>

        <div class="shop-sidebar-body">
            <div class="shop-section-title">Cycling</div>
            <div class="shop-category-grid">
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Bundles">
                    Bundles
                </a>
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Jerseys">
                    Jerseys
                </a>
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Bibs">
                    Bibs &amp; Shorts
                </a>
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Accessories">
                    Accessories
                </a>
            </div>

            <div class="shop-section-title">Lifestyle</div>
            <div class="shop-category-grid">
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/b47abf6f65495dd2ac71e9e36efaebe3830e8ba8-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="T-Shirts">
                    T-Shirts
                </a>
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/beab8507d7c19cffdd27ddb1c3245bbf205df91b-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Sweatshirts">
                    Sweatshirts &amp; Hoodies
                </a>
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/e7d032fe7beb12ca00ca47a48b3c1be73432d3af-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Outerwear">
                    Outerwear
                </a>
                <a href="#" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/f0546c4f4f756114e628b6fe520ba15f1dff1a20-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Pants">
                    Pants &amp; Shorts
                </a>
            </div>

            <div class="shop-divider"></div>
            <a href="#" class="shop-link-simple">Sale</a>
            <a href="#" class="shop-link-simple">New Arrivals</a>
        </div>
    </div>

    <!-- Demo Scroll Area -->
    <div class="demo-content">Scroll ke bawah untuk melihat efek header ↓</div>

    <script>
        // ============ DARK MODE LOGIC ============
        (function () {
            const toggleBtn  = document.getElementById('darkModeToggle');
            const icon       = toggleBtn ? toggleBtn.querySelector('.toggle-icon') : null;
            const label      = toggleBtn ? toggleBtn.querySelector('.toggle-label') : null;

            function spawnRipple(cx, cy, tooDark) {
                const size = Math.max(window.innerWidth, window.innerHeight) * 2.5;
                const ripple = document.createElement('div');
                ripple.className = 'theme-ripple';
                ripple.style.cssText = `
                    width:${size}px; height:${size}px;
                    left:${cx - size/2}px; top:${cy - size/2}px;
                    background:${tooDark ? '#fff' : '#000'};
                    transition: transform 0.6s cubic-bezier(0.4,0,0.2,1),
                                opacity  0.6s cubic-bezier(0.4,0,0.2,1);
                `;
                document.body.appendChild(ripple);
                requestAnimationFrame(() => {
                    ripple.classList.add('expanding');
                    setTimeout(() => ripple.remove(), 700);
                });
            }

            function applyDarkMode(enabled, animate = true, originX, originY) {
                if (toggleBtn) {
                    toggleBtn.classList.add('spinning');
                    setTimeout(() => toggleBtn.classList.remove('spinning'), 600);
                }

                if (animate) {
                    const rect = toggleBtn ? toggleBtn.getBoundingClientRect() : { left: 0, top: 0, width: 0, height: 0 };
                    const cx = originX ?? rect.left + rect.width / 2;
                    const cy = originY ?? rect.top  + rect.height / 2;
                    spawnRipple(cx, cy, enabled);
                }

                setTimeout(() => {
                    if (enabled) {
                        document.body.classList.add('dark-mode');
                        if (icon)  icon.textContent  = '🌙';
                        if (label) label.textContent = 'Light Mode';
                    } else {
                        document.body.classList.remove('dark-mode');
                        if (icon)  icon.textContent  = '☀️';
                        if (label) label.textContent = 'Dark Mode';
                    }
                    localStorage.setItem('darkMode', enabled ? '1' : '0');
                }, animate ? 80 : 0);
            }

            // Restore saved preference
            const saved = localStorage.getItem('darkMode');
            if (saved === '1') applyDarkMode(true, false);

            if (toggleBtn) {
                toggleBtn.addEventListener('click', function(e) {
                    applyDarkMode(!document.body.classList.contains('dark-mode'), true, e.clientX, e.clientY);
                });
            }
        })();

        // ============ SHOP SIDEBAR LOGIC ============
        function openShopSidebar() {
            document.getElementById('shopSidebar').classList.add('open');
            document.getElementById('shopOverlay').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeShopSidebar() {
            document.getElementById('shopSidebar').classList.remove('open');
            document.getElementById('shopOverlay').classList.remove('open');
            document.body.style.overflow = '';
        }

        document.addEventListener('DOMContentLoaded', function () {

            // Shop toggle
            var shopToggle = document.getElementById('shopToggle');
            if (shopToggle) {
                shopToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    openShopSidebar();
                });
            }

            var shopClose = document.getElementById('shopClose');
            if (shopClose) shopClose.addEventListener('click', closeShopSidebar);

            var shopOverlay = document.getElementById('shopOverlay');
            if (shopOverlay) {
                shopOverlay.addEventListener('click', function(e) {
                    if (e.target === shopOverlay) closeShopSidebar();
                });
            }

            // ============ SEARCH LOGIC ============
            var searchToggle  = document.getElementById('searchToggle');
            var searchBox     = document.getElementById('searchBox');
            var searchInput   = document.getElementById('searchInput');
            var searchClose   = document.getElementById('searchClose');
            var searchDropdown = document.getElementById('searchDropdown');

            if (searchToggle) {
                searchToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    searchBox.classList.add('active');
                    searchInput.focus();
                });
            }

            if (searchClose) {
                searchClose.addEventListener('click', function() {
                    searchBox.classList.remove('active');
                    searchDropdown.classList.remove('active');
                    searchInput.value = '';
                });
            }

            if (searchInput) {
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        var q = searchInput.value.trim();
                        if (q) window.location.href = 'search_result.php?q=' + encodeURIComponent(q);
                    }
                });
            }

            // Close search on outside click
            document.addEventListener('click', function(e) {
                if (!searchBox.contains(e.target) && !searchToggle.contains(e.target)) {
                    searchBox.classList.remove('active');
                    searchDropdown.classList.remove('active');
                    if (searchInput) searchInput.value = '';
                }
            });

            // Close search on ESC
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && searchBox.classList.contains('active')) {
                    searchBox.classList.remove('active');
                    searchDropdown.classList.remove('active');
                    if (searchInput) searchInput.value = '';
                }
            });

            // ============ HEADER SCROLL BEHAVIOR ============
            var lastScrollY = window.pageYOffset;

            window.addEventListener('scroll', function() {
                var header = document.querySelector('header');
                if (!header) return;

                var currentY = window.pageYOffset;
                var scrollingDown = currentY > lastScrollY;

                if (currentY < 10) {
                    header.classList.add('at-top');
                    header.classList.remove('scrolled', 'scrolling-down');
                } else if (scrollingDown) {
                    header.classList.remove('at-top', 'scrolled');
                    header.classList.add('scrolling-down');
                } else {
                    header.classList.remove('at-top', 'scrolling-down');
                    header.classList.add('scrolled');
                }

                lastScrollY = currentY;
            });

            // Set initial state
            var header = document.querySelector('header');
            if (header) header.classList.add('at-top');
        });
    </script>
</body>
</html>