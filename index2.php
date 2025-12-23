<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pas Normal Studios | Premium Cycling Apparel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background: #fff;
            color: #000;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        /* Announcement Bar */
        .announcement-bar {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 10px 20px;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        .announcement-bar a {
            color: #fff;
            text-decoration: underline;
        }

        /* Header */
        header {
            position: sticky;
            top: 0;
            background: #fff;
            z-index: 1000;
            border-bottom: 1px solid #e0e0e0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .header-left {
            display: flex;
            gap: 35px;
            align-items: center;
        }

        .header-left a {
            color: #000;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: opacity 0.3s;
            cursor: pointer;
        }

        .header-left a:hover {
            opacity: 0.5;
        }

        .logo {
            text-align: center;
            flex: 1;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .header-right {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .header-right a {
            color: #000;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            transition: opacity 0.3s;
            cursor: pointer;
        }

        .header-right a:hover {
            opacity: 0.5;
        }

        /* Shop Sidebar */
        .shop-sidebar {
            position: fixed;
            top: 0;
            left: -550px;
            width: 550px;
            height: 100vh;
            background: #fff;
            z-index: 10000;
            box-shadow: 2px 0 20px rgba(0,0,0,0.1);
            transition: left 0.4s ease;
            overflow-y: auto;
        }

        .shop-sidebar.open {
            left: 0;
        }

        .shop-overlay {
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

        .shop-overlay.open {
            opacity: 1;
            pointer-events: all;
        }

        .shop-header {
            padding: 30px 40px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .shop-close {
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            padding: 0;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s;
        }

        .shop-close:hover {
            opacity: 0.5;
        }

        .shop-tabs {
            display: flex;
            gap: 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .shop-tab {
            flex: 1;
            padding: 20px 40px;
            background: none;
            border: none;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s;
            border-bottom: 2px solid transparent;
        }

        .shop-tab.active {
            font-weight: 600;
            border-bottom-color: #000;
        }

        .shop-content {
            padding: 40px;
        }

        .shop-section {
            margin-bottom: 50px;
        }

        .shop-section-title {
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .shop-items {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px 30px;
        }

        .shop-item {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: #000;
            transition: opacity 0.3s;
        }

        .shop-item:hover {
            opacity: 0.6;
        }

        .shop-item-icon {
            width: 45px;
            height: 45px;
            background: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            flex-shrink: 0;
        }

        .shop-item-icon img {
            width: 30px;
            height: 30px;
            object-fit: contain;
            filter: brightness(0.3);
        }

        .shop-item-name {
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.2px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        @media (max-width: 768px) {
            .shop-sidebar {
                width: 100%;
                left: -100%;
            }
            
            .header-content {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }
            
            .header-left, .header-right {
                gap: 20px;
            }
        }

        /* International Cycling Club Banner */
        .icc-banner {
            background: #f8f8f8;
            padding: 40px 30px;
            text-align: center;
            border-bottom: 1px solid #e5e5e5;
        }

        .icc-banner h3 {
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
        }

        .icc-banner p {
            font-size: 13px;
            margin-bottom: 20px;
            color: #666;
        }

        .icc-banner .btn {
            background: #000;
            color: #fff;
            padding: 12px 30px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            display: inline-block;
            transition: background 0.3s;
        }

        .icc-banner .btn:hover {
            background: #333;
        }

        /* Categories Section */
        .categories-section {
            padding: 60px 30px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .section-header {
            margin-bottom: 40px;
        }

        .section-tabs {
            display: flex;
            gap: 30px;
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 10px;
            margin-bottom: 40px;
        }

        .section-tabs button {
            background: none;
            border: none;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.5px;
            cursor: pointer;
            padding-bottom: 10px;
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
        }

        .section-tabs button.active {
            border-bottom-color: #000;
            font-weight: 700;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            margin-bottom: 80px;
        }

        .category-card {
            text-decoration: none;
            color: #000;
            display: block;
        }

        .category-image {
            width: 100%;
            aspect-ratio: 4/5;
            background: #f5f5f5;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .category-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .category-card:hover .category-image img {
            transform: scale(1.05);
        }

        .category-name {
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-align: center;
        }

        /* Hero Section */
        .hero-section {
            padding: 80px 30px;
            text-align: center;
            background: #fafafa;
        }

        .hero-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .hero-section h1 {
            font-size: 32px;
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 25px;
        }

        .hero-section p {
            font-size: 15px;
            line-height: 1.8;
            color: #666;
            margin-bottom: 35px;
        }

        .hero-section .btn {
            background: #000;
            color: #fff;
            padding: 14px 40px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            display: inline-block;
            transition: background 0.3s;
        }

        .hero-section .btn:hover {
            background: #333;
        }

        /* Guide Cards */
        .guide-section {
            padding: 60px 30px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .guide-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 80px;
        }

        .guide-card {
            position: relative;
            text-decoration: none;
            color: #000;
            display: block;
            overflow: hidden;
        }

        .guide-image {
            width: 100%;
            height: 400px;
            background: #f0f0f0;
            overflow: hidden;
        }

        .guide-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .guide-card:hover .guide-image img {
            transform: scale(1.05);
        }

        .guide-info {
            position: absolute;
            bottom: 30px;
            left: 30px;
            right: 30px;
            color: #fff;
        }

        .guide-badge {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
        }

        .guide-title {
            font-size: 18px;
            font-weight: 600;
            line-height: 1.4;
            margin-bottom: 15px;
        }

        .guide-link {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-decoration: underline;
        }

        /* Products Section */
        .products-section {
            padding: 60px 30px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .section-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 30px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 80px;
        }

        .product-card {
            text-decoration: none;
            color: #000;
            display: block;
            position: relative;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #fff;
            padding: 6px 12px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            z-index: 1;
        }

        .product-images {
            position: relative;
            width: 100%;
            aspect-ratio: 4/5;
            background: #f8f8f8;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.3s ease;
        }

        .product-image:nth-child(2) {
            opacity: 0;
        }

        .product-card:hover .product-image:nth-child(2) {
            opacity: 1;
        }

        .product-info {
            padding: 0 5px;
        }

        .product-name {
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 5px;
            letter-spacing: 0.3px;
        }

        .product-color {
            font-size: 12px;
            color: #999;
            letter-spacing: 0.3px;
        }

        /* Stores Section */
        .stores-section {
            padding: 60px 30px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .stores-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .store-card {
            text-decoration: none;
            color: #000;
            display: block;
            position: relative;
        }

        .store-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #fff;
            padding: 6px 12px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            z-index: 1;
        }

        .store-image {
            width: 100%;
            aspect-ratio: 4/5;
            background: #f5f5f5;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .store-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .store-card:hover .store-image img {
            transform: scale(1.05);
        }

        .store-info {
            padding: 0 5px;
        }

        .store-name {
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* Footer */
        footer {
            background: #f8f8f8;
            padding: 80px 30px 40px;
            border-top: 1px solid #e5e5e5;
        }

        .footer-newsletter {
            max-width: 1600px;
            margin: 0 auto 60px;
            text-align: center;
        }

        .footer-newsletter h3 {
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
        }

        .footer-newsletter p {
            font-size: 13px;
            color: #666;
            margin-bottom: 25px;
        }

        .footer-newsletter .btn {
            background: #000;
            color: #fff;
            padding: 12px 30px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            display: inline-block;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
        }

        .footer-content {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 60px;
            margin-bottom: 60px;
        }

        .footer-column h4 {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links a {
            color: #000;
            text-decoration: none;
            font-size: 13px;
            line-height: 2.2;
            display: block;
            transition: opacity 0.2s;
        }

        .footer-links a:hover {
            opacity: 0.5;
        }

        .footer-bottom {
            max-width: 1600px;
            margin: 0 auto;
            padding-top: 40px;
            border-top: 1px solid #e5e5e5;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-legal {
            display: flex;
            gap: 20px;
        }

        .footer-legal a {
            color: #999;
            text-decoration: none;
            font-size: 12px;
            transition: opacity 0.2s;
        }

        .footer-legal a:hover {
            opacity: 0.5;
        }

        .footer-social {
            display: flex;
            gap: 15px;
        }

        .footer-social a {
            color: #000;
            font-size: 13px;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .footer-social a:hover {
            opacity: 0.5;
        }

        .copyright {
            color: #999;
            font-size: 12px;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .categories-grid {
                grid-template-columns: repeat(4, 1fr);
            }
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .stores-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .guide-grid {
                grid-template-columns: 1fr;
            }
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .stores-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 20px;
            }
        }

        @media (max-width: 480px) {
            .categories-grid {
                grid-template-columns: 1fr;
            }
            .products-grid {
                grid-template-columns: 1fr;
            }
            .stores-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Announcement Bar -->
    <div class="announcement-bar">
        <a href="#">Order Deadlines for Holiday Delivery</a>
    </div>

    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-left">
                <a href="#" id="shopToggle">Shop</a>
                <a href="#gift">Gift Guide</a>
                <a href="#explore">Explore</a>
            </div>
            
            <div class="logo">PAS NORMAL STUDIOS</div>
            
            <div class="header-right">
                <a href="#search">Search</a>
                <a href="#account">Account</a>
                <a href="#cart" id="cartToggle">Cart (0)</a>
            </div>
        </div>
    </header>

    <!-- Shop Sidebar -->
    <div class="shop-overlay" id="shopOverlay"></div>
    <div class="shop-sidebar" id="shopSidebar">
        <div class="shop-header">
            <span style="font-size: 13px; font-weight: 600; letter-spacing: 0.5px;">SHOP</span>
            <button class="shop-close" id="shopClose">×</button>
        </div>

        <div class="shop-tabs">
            <button class="shop-tab active" data-tab="categories">Categories</button>
            <button class="shop-tab" data-tab="collections">Collections</button>
            <button class="shop-tab" data-tab="intended">Intended use</button>
        </div>

        <div class="shop-content" id="shopContent">
            <!-- Categories Tab -->
            <div class="tab-content active" id="categoriesTab">
                <div class="shop-section">
                    <div class="shop-section-title">New Arrivals</div>
                </div>

                <div class="shop-section">
                    <div class="shop-section-title">Cycling</div>
                    <div class="shop-items">
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/f4cf3adfc39e0ddd1cf6b92c613ca2ac824da53f-1767x2210.png?w=80&q=75&fit=max&auto=format" alt="Bundles">
                            </div>
                            <span class="shop-item-name">Bundles</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/a518b6748750e9cf2bed2f1fb602e31ff55faa1c-1920x2400.png?w=80&q=75&fit=max&auto=format" alt="Jerseys">
                            </div>
                            <span class="shop-item-name">Jerseys</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/faec59b9e1403a79e0ce520073dd37ee1f754b1a-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Bibs">
                            </div>
                            <span class="shop-item-name">Bibs</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/ecd561c2d6effd314514274665ce98917b947778-1920x2400.png?w=80&q=75&fit=max&auto=format" alt="Base Layers">
                            </div>
                            <span class="shop-item-name">Base Layers</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/32e69ef6ce1a8ec53638b942307b21ad17e6d219-1920x2400.png?w=80&q=75&fit=max&auto=format" alt="Jackets">
                            </div>
                            <span class="shop-item-name">Jackets & Gilets</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/a518b6748750e9cf2bed2f1fb602e31ff55faa1c-1920x2400.png?w=80&q=75&fit=max&auto=format" alt="Speedsuits">
                            </div>
                            <span class="shop-item-name">Speedsuits</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/670df80405e6d7a9a7072648e20ca7e476fdcb2c-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Warmers">
                            </div>
                            <span class="shop-item-name">Arm & Leg Warmers</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/4d157b96612b41146ca3327ff44e79ef85fe257b-1400x1750.png?w=80&q=75&fit=max&auto=format" alt="Socks">
                            </div>
                            <span class="shop-item-name">Socks</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/670df80405e6d7a9a7072648e20ca7e476fdcb2c-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Accessories">
                            </div>
                            <span class="shop-item-name">Accessories</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/ef6c663599668d5c0c2d4cd8d8bf9f1e433cfa30-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Helmets">
                            </div>
                            <span class="shop-item-name">Helmets</span>
                        </a>
                    </div>
                </div>

                <div class="shop-section">
                    <div class="shop-section-title">Off-Race</div>
                    <div class="shop-items">
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/2857e5f4302c9164cd83611acb4391256bebe7aa-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="T-shirts">
                            </div>
                            <span class="shop-item-name">T-shirts</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/257365928c276ffbba1b2899eb3f941c6573797a-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Sweatshirts">
                            </div>
                            <span class="shop-item-name">Sweatshirts & Hoodies</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/c6f20ad271c87eebf085e92dc9e982ed198dadba-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Outerwear">
                            </div>
                            <span class="shop-item-name">Outerwear</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/8cf737d3ab290ee4845936c23e0dc26e86944b7f-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Pants">
                            </div>
                            <span class="shop-item-name">Pants & Shorts</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/7aa07ea8e1cd358d16393087fadc53aecf30bd7d-1920x2400.png?w=80&q=75&fit=max&auto=format" alt="Gym">
                            </div>
                            <span class="shop-item-name">Gym & Training</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/670df80405e6d7a9a7072648e20ca7e476fdcb2c-3000x3750.png?w=80&q=75&fit=max&auto=format" alt="Accessories">
                            </div>
                            <span class="shop-item-name">Accessories</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Collections Tab (hidden by default) -->
            <div class="tab-content" id="collectionsTab" style="display: none;">
                <div class="shop-section">
                    <div class="shop-section-title">Collections</div>
                    <div class="shop-items">
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">📦</div>
                            <span class="shop-item-name">Autumn/Winter 2025</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">📦</div>
                            <span class="shop-item-name">Spring/Summer 2025</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Intended Use Tab (hidden by default) -->
            <div class="tab-content" id="intendedTab" style="display: none;">
                <div class="shop-section">
                    <div class="shop-section-title">Intended Use</div>
                    <div class="shop-items">
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">🚴</div>
                            <span class="shop-item-name">Road Cycling</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">🏔️</div>
                            <span class="shop-item-name">Gravel</span>
                        </a>
                        <a href="#" class="shop-item">
                            <div class="shop-item-icon">💪</div>
                            <span class="shop-item-name">Training</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- International Cycling Club Banner -->
    <section class="icc-banner">
        <h3>INTERNATIONAL CYCLING CLUB</h3>
        <p>Sign up to become a member</p>
        <a href="#" class="btn">SIGN UP</a>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
        <div class="section-header">
            <div class="section-tabs">
                <button class="active">Categories</button>
                <button>Collections</button>
            </div>
        </div>

        <div class="categories-grid">
            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/f4cf3adfc39e0ddd1cf6b92c613ca2ac824da53f-1767x2210.png?w=600&q=75&fit=max&auto=format" alt="Bundles">
                </div>
                <div class="category-name">Bundles</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/a518b6748750e9cf2bed2f1fb602e31ff55faa1c-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Jerseys">
                </div>
                <div class="category-name">Jerseys</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/faec59b9e1403a79e0ce520073dd37ee1f754b1a-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Bibs">
                </div>
                <div class="category-name">Bibs</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/32e69ef6ce1a8ec53638b942307b21ad17e6d219-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Jackets & Gilets">
                </div>
                <div class="category-name">Jackets & Gilets</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/ef6c663599668d5c0c2d4cd8d8bf9f1e433cfa30-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Helmets">
                </div>
                <div class="category-name">Helmets</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/670df80405e6d7a9a7072648e20ca7e476fdcb2c-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Accessories">
                </div>
                <div class="category-name">Accessories</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/4d157b96612b41146ca3327ff44e79ef85fe257b-1400x1750.png?w=600&q=75&fit=max&auto=format" alt="Socks">
                </div>
                <div class="category-name">Socks</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/c6f20ad271c87eebf085e92dc9e982ed198dadba-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Outerwear">
                </div>
                <div class="category-name">Outerwear</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/257365928c276ffbba1b2899eb3f941c6573797a-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Sweatshirts & Hoodies">
                </div>
                <div class="category-name">Sweatshirts & Hoodies</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/2857e5f4302c9164cd83611acb4391256bebe7aa-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="T-Shirts">
                </div>
                <div class="category-name">T-Shirts</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/8cf737d3ab290ee4845936c23e0dc26e86944b7f-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Pants & Shorts">
                </div>
                <div class="category-name">Pants & Shorts</div>
            </a>

            <a href="#" class="category-card">
                <div class="category-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/7aa07ea8e1cd358d16393087fadc53aecf30bd7d-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Gym & Training">
                </div>
                <div class="category-name">Gym & Training</div>
            </a>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Our Autumn and Winter Collections</h1>
            <p>Out here, life feels different. Riding through the dark, cold months of the year brings a new perspective. Sudden changes in temperature. Weather, shifting from bad to worse, cresting the hill.</p>
            <a href="#" class="btn">EXPLORE</a>
        </div>
    </section>

    <!-- Guide Section -->
    <section class="guide-section">
        <div class="guide-grid">
            <a href="#" class="guide-card">
                <div class="guide-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/fa30e3cbaf319ee9327159b82c0e82880163a037-1920x1536.jpg?w=1200&q=75&fit=max&auto=format" alt="Guide">
                </div>
                <div class="guide-info">
                    <div class="guide-badge">GUIDE</div>
                    <div class="guide-title">Our Selection of kit for deep winter</div>
                    <div class="guide-link">Explore</div>
                </div>
            </a>

            <a href="#" class="guide-card">
                <div class="guide-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/e11ebbe06d1b4307856ce9b7e6b13ecc9544dc11-5000x3335.jpg?w=1200&q=75&fit=max&auto=format" alt="Guide">
                </div>
                <div class="guide-info">
                    <div class="guide-badge">GUIDE</div>
                    <div class="guide-title">Our Selection of kit for late autumn and early winter</div>
                    <div class="guide-link">Explore</div>
                </div>
            </a>
        </div>
    </section>

    <!-- New Arrivals -->
    <section class="products-section">
        <div class="section-label">NEW ARRIVAL</div>
        <div class="products-grid">
            <a href="#" class="product-card">
                <div class="product-badge">New Arrival</div>
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/9b4b84c4ea124b2ddd47b7a2fd2e1b7e1318abd4-1920x2400.jpg?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/a8b3f5208a75100179ab7be5d4a5d5e0d4b1b9ed-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Women's Mechanism Shell Jacket</div>
                    <div class="product-color">Dark Grey - 1 colour</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-badge">Restocked</div>
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/865d8c016d01179ea603c1b84e93de36c4617323-1920x2400.jpg?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/409575c94a3f66f091ec6a08cfb39828e4c786d6-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Women's Mechanism Deep Winter Long Bibs</div>
                    <div class="product-color">Black - 4 colours</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/929bbc1eff442c3a857a3c1d55091a823a946dff-1920x2400.jpg?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/f0eeaa00412c1e028b47fdb63467e3e2a22acaca-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Men's Mechanism Thermal Long Sleeve Jersey</div>
                    <div class="product-color">Dark Olive - 6 colours</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/433e721cee24e8a0506571bf617e61dd5d63c25f-1920x2400.jpg?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/ecd561c2d6effd314514274665ce98917b947778-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Men's Thermal Long Sleeve Base Layer</div>
                    <div class="product-color">Navy - 4 colours</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/f946b01d7e177c85855c332cd54c446da60b7476-2040x2506.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Men's Mechanism Deep Winter Bundle</div>
                    <div class="product-color">Select your favourite Mechanism combination and save 20%</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/8d6568471447bf5cafb8f9bb3cf3d14c06acd116-1920x2400.jpg?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/6590fb8792145cc9eac2023fc3d892ce4c9e3155-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Women's Essential Thermal Long Bibs</div>
                    <div class="product-color">Light Brown - 4 colours</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-badge">Restocked</div>
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/7094d3feae92d31172d607009510fa23f51dfc2c-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/7e8581ffcf451226ebcf2074da4e3ca3323afc64-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Women's Thermal Long Sleeve Base Layer</div>
                    <div class="product-color">Off White - 4 colours</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/d4bcf9158b92ccd53ae68bc91b6405b29aebe07d-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/84a5f19b5d89a5c41c0037510b7d55124a270dda-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Women's Essential Thermal Long Sleeve Jersey</div>
                    <div class="product-color">Dark Celeste - 4 colours</div>
                </div>
            </a>
        </div>
    </section>

    <!-- More Products -->
    <section class="products-section">
        <div class="products-grid">
            <a href="#" class="product-card">
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/f43d930eb276b4ec02c3e2c33ad681e4a366df24-2040x2506.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Women's Essential Kit Bundle</div>
                    <div class="product-color">Select your favourite colour combination and save 20%</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-badge">New Arrival</div>
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/21e7c936d2463bebdde102dfe3c81b5f277c2096-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/5d028bf94cdf245af922eec31dd9eac83211f036-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Logo Heavy Overshoes</div>
                    <div class="product-color">Black - 1 colour</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-badge">Restocked</div>
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/559e007a0b4e23116d4d275ab11d22731746a8d7-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/bcbe2c2cb402e4e7eec537b922f42154a4012f46-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Logo Thermal Gloves</div>
                    <div class="product-color">Black - 1 colour</div>
                </div>
            </a>

            <a href="#" class="product-card">
                <div class="product-images">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/15c4edb62f0ce22617d32ea64662a6030175b676-1920x2400.jpg?w=600&q=75&fit=max&auto=format" alt="Product">
                    <img class="product-image" src="https://cdn.sanity.io/images/k15yl91v/production/ba248524b34cda23434b9dccdd30432971a85572-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Product">
                </div>
                <div class="product-info">
                    <div class="product-name">Men's Mechanism Thermal Jacket</div>
                    <div class="product-color">Black - 3 colours</div>
                </div>
            </a>
        </div>
    </section>

    <!-- Stores Section -->
    <section class="stores-section">
        <div class="section-label">FLAGSHIP</div>
        <div class="stores-grid">
            <a href="#" class="store-card">
                <div class="store-badge">Flagship</div>
                <div class="store-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/59df24a0d2545275a03a76c9f2421f7ded8d8f6d-1620x2025.png?w=600&q=75&fit=max&auto=format" alt="Copenhagen">
                </div>
                <div class="store-info">
                    <div class="store-name">Copenhagen, Nordhavn</div>
                </div>
            </a>

            <a href="#" class="store-card">
                <div class="store-badge">Flagship</div>
                <div class="store-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/a0d2e533e30da5a7a9eff33dc9a2ae38f85d9e18-3942x5913.jpg?w=600&q=75&fit=max&auto=format" alt="Palma">
                </div>
                <div class="store-info">
                    <div class="store-name">Palma, Illes Balears</div>
                </div>
            </a>

            <a href="#" class="store-card">
                <div class="store-badge">Flagship</div>
                <div class="store-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/794ff00ddda73ba330ba0c09bac0e2097132b315-1620x2025.png?w=600&q=75&fit=max&auto=format" alt="Taipei">
                </div>
                <div class="store-info">
                    <div class="store-name">Taipei, Minsheng</div>
                </div>
            </a>

            <a href="#" class="store-card">
                <div class="store-badge">Flagship</div>
                <div class="store-image">
                    <img src="https://cdn.sanity.io/images/k15yl91v/production/97f0378ab5c8e3735e89f41148da3f60ad95debd-1620x2025.png?w=600&q=75&fit=max&auto=format" alt="Seoul">
                </div>
                <div class="store-info">
                    <div class="store-name">Seoul, Gangdong District</div>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-newsletter">
            <h3>NEWSLETTER</h3>
            <p>Be the first to know about upcoming drops, events and deals.</p>
            <button class="btn">SIGN UP</button>
        </div>

        <div class="footer-content">
            <div class="footer-column">
                <h4>QUICK LINKS</h4>
                <ul class="footer-links">
                    <li><a href="#">Destination Everywhere</a></li>
                    <li><a href="#">Sponsored Teams</a></li>
                    <li><a href="#">Find Stores</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>CUSTOMER CARE</h4>
                <ul class="footer-links">
                    <li><a href="#">Get in Touch</a></li>
                    <li><a href="#">Gift Card</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Crash Replacement</a></li>
                    <li><a href="#">Care Guide</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>ABOUT PAS NORMAL STUDIOS</h4>
                <ul class="footer-links">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">International Cycling Club</a></li>
                    <li><a href="#">Impact & Responsibility</a></li>
                    <li><a href="#">Industry Programme</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-legal">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie Policy</a>
                <span class="copyright">© Pas Normal Studios 2025</span>
            </div>
            <div class="footer-social">
                <a href="#">Instagram</a>
                <a href="#">YouTube</a>
                <a href="#">Strava</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script>
        // Shop Sidebar functionality
        const shopSidebar = document.getElementById('shopSidebar');
        const shopOverlay = document.getElementById('shopOverlay');
        const shopToggle = document.getElementById('shopToggle');
        const shopClose = document.getElementById('shopClose');
        const shopTabs = document.querySelectorAll('.shop-tab');

        function openShop() {
            shopSidebar.classList.add('open');
            shopOverlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeShop() {
            shopSidebar.classList.remove('open');
            shopOverlay.classList.remove('open');
            document.body.style.overflow = '';
        }

        shopToggle.addEventListener('click', (e) => {
            e.preventDefault();
            openShop();
        });

        shopClose.addEventListener('click', closeShop);
        shopOverlay.addEventListener('click', closeShop);

        // Tab switching
        shopTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                shopTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');

                // Hide all tab contents
                document.querySelectorAll('.tab-content').forEach(content => {
                    content.style.display = 'none';
                });

                // Show selected tab content
                const tabName = this.getAttribute('data-tab');
                const tabContent = document.getElementById(tabName + 'Tab');
                if (tabContent) {
                    tabContent.style.display = 'block';
                }
            });
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href !== '#search' && href !== '#account' && href !== '#cart') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });

        // Tab switching for main page (if exists)
        const tabButtons = document.querySelectorAll('.section-tabs button');
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Lazy loading images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                        }
                        observer.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    </script>
</body>
</html>