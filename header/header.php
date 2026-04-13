<style>
     /* Header */
     /* Ganti bagian header */
header {
    position: sticky;
    top: 0;
    background: #fff;
    /* HAPUS: border-bottom: 1px solid #e0e0e0; */
    z-index: 100;
    transition: background 0.3s ease;
}

header.scrolled {
    background: transparent;
}

header.scrolled-up {
    background: #fff;
}

.header-main {
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* HAPUS: border-bottom: 1px solid #e0e0e0; */
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

        /* Search Box */
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
        /* Cart Sidebar */
        .cart-sidebar {
            position: fixed;
            top: 0;
            right: -450px;
            width: 450px;
            height: 100vh;
            background: #fff;
            z-index: 10000;
            box-shadow: -2px 0 20px rgba(0,0,0,0.1);
            transition: right 0.4s ease;
            overflow-y: auto;
        }
        .cart-sidebar.open {
            right: 0;
        }

        .cart-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0,0,0,0.5);
            z-index: 9999;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s ease;
        }

        .cart-overlay.open {
            opacity: 1;
            pointer-events: all;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 30px;
            border-bottom: 1px solid #e0e0e0;
        }

        .cart-title {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .cart-close {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s;
        }

        .cart-close:hover {
            opacity: 0.6;
        }

        .cart-content {
            padding: 30px;
        }

        .cart-item {
            display: flex;
            gap: 20px;
            padding-bottom: 30px;
            margin-bottom: 30px;
            border-bottom: 1px solid #e0e0e0;
        }

        .cart-item-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            background: #f5f5f5;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .cart-item-variant {
            font-size: 12px;
            color: #666;
            margin-bottom: 10px;
        }

        .cart-item-price {
            font-size: 14px;
            font-weight: 600;
        }

        .cart-item-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .cart-item-remove {
            font-size: 12px;
            color: #666;
            background: none;
            border: none;
            cursor: pointer;
            text-decoration: underline;
            padding: 0;
        }

        .cart-item-remove:hover {
            color: #000;
        }

        .cart-quantity {
            display: flex;
            align-items: center;
            gap: 15px;
            border: 1px solid #e0e0e0;
            padding: 5px 10px;
        }

        .cart-quantity button {
            background: none;
            border: none;
            font-size: 16px;
            cursor: pointer;
            padding: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-quantity span {
            font-size: 14px;
            min-width: 20px;
            text-align: center;
        }

        .cart-gift {
            background: #f9f9f9;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 4px;
        }

        .cart-gift-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .cart-gift-subtitle {
            font-size: 12px;
            color: #666;
            margin-bottom: 15px;
        }

        .cart-gift-item {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .cart-gift-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        .cart-gift-name {
            font-size: 13px;
            font-weight: 500;
        }

        .cart-gift-color {
            font-size: 12px;
            color: #666;
        }

        .cart-gift-select {
            margin-left: auto;
            font-size: 12px;
            text-decoration: underline;
            cursor: pointer;
        }

        .cart-recommendations {
            margin-bottom: 30px;
        }

        .cart-recommendations-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .cart-recommendations-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .cart-recommendation-item {
            cursor: pointer;
        }

        .cart-recommendation-image {
            width: 100%;
            height: 120px;
            object-fit: cover;
            background: #f5f5f5;
            margin-bottom: 8px;
        }

        .cart-footer {
            padding: 30px;
            border-top: 1px solid #e0e0e0;
            position: sticky;
            bottom: 0;
            background: #fff;
        }

        .cart-subtotal {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .cart-total {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 600;
        }

        .cart-payment-methods {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-bottom: 20px;
            align-items: center;
        }

        .cart-payment-methods span {
            font-size: 11px;
            color: #999;
        }

        .cart-payment-icon {
            width: 35px;
            height: auto;
        }

        .cart-checkout {
            width: 100%;
            padding: 18px;
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 13px;
            letter-spacing: 1.5px;
            transition: background 0.3s;
            text-decoration: none;
        }

        .cart-checkout:hover {
            background: #333;
        }

        .cart-empty {
            text-align: center;
            padding: 60px 30px;
        }

        .cart-empty-title {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .cart-empty-text {
            font-size: 13px;
            color: #666;
        }

        @media (max-width: 768px) {
            .cart-sidebar {
                width: 100%;
                right: -100%;
            }

            .logo-image {
                height: 40px;
            }
        }


        /* ============ SHOP SIDEBAR ============ */
        .shop-overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100vh;
            background: rgba(0,0,0,0.5);
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
            top: 0; left: -560px;
            width: 560px;
            height: 100vh;
            background: #fff;
            z-index: 9999;
            transition: left 0.35s cubic-bezier(0.4,0,0.2,1);
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
            padding: 28px 36px 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        .shop-sidebar-header span {
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .shop-sidebar-close {
            background: none;
            border: none;
            font-size: 22px;
            cursor: pointer;
            color: #000;
            line-height: 1;
            padding: 0;
        }
        .shop-sidebar-close:hover { opacity: 0.5; }

        /* Banner gambar di atas */
        .shop-sidebar-banner {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
            flex-shrink: 0;
        }
        .shop-sidebar-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .shop-sidebar-banner-label {
            position: absolute;
            bottom: 20px;
            left: 30px;
            background: #fff;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 600;
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
        /* ====================================== */
 </style>
 
 <!-- Header -->
 <header>
        <div class="header-main">
            <div class="header-left">
                <a href="#" id="shopToggle">Shop</a>
                <a href="#gift-guide">About</a>
                <a href="explore.php">Explore</a>
            </div>
            
            <div class="logo">
                <a href="index.html"><img src="img/logogloaming.png" alt="Gloaming Imagine" class="logo-image" style></a>
            </div>
            
            <div class="header-right">
                <div class="search-container">
                    <a class="search-toggle" id="searchToggle">Search</a>
                    <div class="search-box" id="searchBox">
                        <div class="search-input-wrapper">
                            <input type="text" class="search-input" placeholder="Search products..." id="searchInput">
                            <button class="search-close" id="searchClose">×</button>
                        </div>
                        <div class="search-dropdown" id="searchDropdown">
                            <!-- Results will be populated here by JavaScript -->
                        </div>
                    </div>
                </div>
                <a href="wishlist.php" style="position:relative; display:inline-block;">
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
                <a href="login.php">Account</a>
                <a href="#" id="cartToggle" style="position:relative; display:inline-block;">
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
            <div id="cartContainer"></div>
        </div>
    </header>
   
        <!-- Cart Sidebar -->
    <div class="cart-overlay" id="cartOverlay"></div>
    <div class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <h2 class="cart-title">Cart (<span id="cartItemCount">0</span>)</h2>
            <button class="cart-close" id="cartClose">×</button>
        </div>

        <div id="cartContentArea">
            <!-- Cart content will be dynamically inserted here -->
        </div>
    </div>

    
    <!-- Shop Sidebar -->
    <div class="shop-overlay" id="shopOverlay"></div>
    <div class="shop-sidebar" id="shopSidebar">

        <div class="shop-sidebar-header">
            <span>Menu</span>
            <button class="shop-sidebar-close" id="shopClose">&#x2715;</button>
        </div>

        <!-- Banner New Arrivals -->
        <div class="shop-sidebar-banner">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="New Arrivals">
            <div class="shop-sidebar-banner-label">New Arrivals</div>
        </div>

        <div class="shop-sidebar-body">

            <!-- Cycling -->
            <div class="shop-section-title">Cycling</div>
            <div class="shop-category-grid">
                <a href="shop.php?cat=bundles" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Bundles">
                    All
                </a>
                <a href="shop.php?cat=jerseys" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=80&q=75" class="shop-category-icon" alt="Jerseys">
                    Jerseys
                </a>
                <a href="shop.php?cat=base-layers" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/679b741ab85a94215020e3abff3370be8b2497d5-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Base Layers">
                    Base Layers
                </a>
                <a href="shop.php?cat=bibs" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=80&q=75" class="shop-category-icon" alt="Bibs">
                    Bibs
                </a>
                <a href="shop.php?cat=jackets" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Jackets">
                    Jackets &amp; Gilets
                </a>
                <a href="shop.php?cat=speedsuits" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/a4537ab8cea94765f8af7c303574821d73a9260a-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Speedsuits">
                    Speedsuits
                </a>
                <a href="shop.php?cat=warmers" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/7832c0a863d4188453bc3a1eb6b79b203835231d-1920x2400.png?w=80&q=75" class="shop-category-icon" alt="Warmers">
                    Arm &amp; Leg Warmers
                </a>
                <a href="shop.php?cat=socks" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/5dad33c8ca27ed6431f29e29be3e29281c1f6305-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Socks">
                    Socks
                </a>
                <a href="shop.php?cat=accessories" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Accessories">
                    Accessories
                </a>
                <a href="shop.php?cat=helmets" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/c27f21f50e90f9a7113c759b116e0920418f8810-3200x4000.jpg?w=80&q=75" class="shop-category-icon" alt="Helmets">
                    Helmets
                </a>
            </div>

            <div class="shop-divider"></div>

            <!-- Off-Race
            <div class="shop-section-title">Off-Race</div>
            <div class="shop-category-grid">
                <a href="shop.php" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/b47abf6f65495dd2ac71e9e36efaebe3830e8ba8-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="T-Shirts">
                    T-Shirts
                </a>
                <a href="shop.php?cat=sweatshirts" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/beab8507d7c19cffdd27ddb1c3245bbf205df91b-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Sweatshirts">
                    Sweatshirts &amp; Hoodies
                </a>
                <a href="shop.php?cat=outerwear" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/e7d032fe7beb12ca00ca47a48b3c1be73432d3af-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Outerwear">
                    Outerwear
                </a>
                <a href="shop.php?cat=pants" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/f0546c4f4f756114e628b6fe520ba15f1dff1a20-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Pants">
                    Pants &amp; Shorts
                </a>
                <a href="shop.php?cat=gym" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/448b32fb36d29886c5cef13aede0ae95806a5d05-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Gym">
                    Gym &amp; Training
                </a>
                <a href="shop.php?cat=offrace-acc" class="shop-category-item" onclick="closeShopSidebar()">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/9f2fd24d4d3d1ad79988a78b20c3e0e78463edb3-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Accessories">
                    Accessories
                </a>
            </div> -->

            <div class="shop-divider"></div>

            
        </div>
    </div>

    <script src="products-data.js"></script>
    <script>
    (function() {
    var header = document.querySelector('header');
    var lastScrollY = 0;
    var ticking = false;

    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(function() {
                var currentScrollY = window.scrollY;

                if (currentScrollY > 80) {
                    if (currentScrollY > lastScrollY) {
                        // Scroll ke bawah → semi transparan
                        header.style.background = 'rgba(255, 255, 255, 0.6)';
                        header.style.backdropFilter = 'blur(8px)';
                        header.style.webkitBackdropFilter = 'blur(8px)';
                    } else {
                        // Scroll ke atas → putih penuh
                        header.style.background = '#fff';
                        header.style.backdropFilter = 'none';
                        header.style.webkitBackdropFilter = 'none';
                    }
                } else {
                    // Di posisi atas → putih penuh
                    header.style.background = '#fff';
                    header.style.backdropFilter = 'none';
                    header.style.webkitBackdropFilter = 'none';
                }

                lastScrollY = currentScrollY;
                ticking = false;
            });
            ticking = true;
        }
    });
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
    document.addEventListener('DOMContentLoaded', function() {
        // ============ SEARCH BOX LOGIC WITH AUTOCOMPLETE ============
        var searchToggle = document.getElementById('searchToggle');
        var searchBox = document.getElementById('searchBox');
        var searchInput = document.getElementById('searchInput');
        var searchClose = document.getElementById('searchClose');
        var searchDropdown = document.getElementById('searchDropdown');

        // Load products from centralized data file (products-data.js)
        var products = (typeof DUMMY_PRODUCTS !== 'undefined') ? DUMMY_PRODUCTS : [];

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

        // Search input handler
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                var searchTerm = this.value.trim().toLowerCase();
                
                if (searchTerm.length > 0) {
                    // Filter products
                    var results = products.filter(function(product) {
                        return product.name.toLowerCase().indexOf(searchTerm) !== -1 || 
                               product.variant.toLowerCase().indexOf(searchTerm) !== -1;
                    });
                    
                    displaySearchResults(results, searchTerm);
                } else {
                    searchDropdown.classList.remove('active');
                }
            });

            // Handle Enter key
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    var searchTerm = searchInput.value.trim();
                    if (searchTerm) {
                        window.location.href = 'search_result.php?q=' + encodeURIComponent(searchTerm);
                    }
                }
            });
        }

        function displaySearchResults(results, searchTerm) {
            if (results.length === 0) {
                searchDropdown.innerHTML = '<div class="search-no-results">No products found</div>';
                searchDropdown.classList.add('active');
                return;
            }

            // Show max 5 results in dropdown
            var displayResults = results.slice(0, 5);
            var html = '';
            
            displayResults.forEach(function(product) {
                html += '<a href="detail.html?id=' + product.id + '" class="search-result-item">';
                html += '<img src="' + product.image + '" alt="' + product.name + '" class="search-result-image">';
                html += '<div class="search-result-info">';
                html += '<div class="search-result-name">' + product.name + '</div>';
                html += '<div class="search-result-variant">' + product.variant + '</div>';
                html += '</div>';
                html += '<div class="search-result-price">' + product.price + '</div>';
                html += '</a>';
            });

            // Add "See All Results" button
            if (results.length > 5) {
                html += '<div class="search-footer">';
                html += '<a href="search_result.php?q=' + encodeURIComponent(searchTerm) + '" class="search-see-all">';
                html += 'SEE ALL ' + results.length + ' RESULTS';
                html += '</a>';
                html += '</div>';
            } else if (results.length > 0) {
                html += '<div class="search-footer">';
                html += '<a href="search_result.php?q=' + encodeURIComponent(searchTerm) + '" class="search-see-all">';
                html += 'SEE ALL RESULTS';
                html += '</a>';
                html += '</div>';
            }

            searchDropdown.innerHTML = html;
            searchDropdown.classList.add('active');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchBox.contains(e.target) && !searchToggle.contains(e.target)) {
                searchBox.classList.remove('active');
                searchDropdown.classList.remove('active');
                searchInput.value = '';
            }
        });

        // Close search on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchBox.classList.contains('active')) {
                searchBox.classList.remove('active');
                searchDropdown.classList.remove('active');
                searchInput.value = '';
            }
        });

        // ============ SHOP SIDEBAR LOGIC ============
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
    });
    // ============================================
    </script>

    <script src="cart.js"></script>
    <script src="wishlist.js"></script>