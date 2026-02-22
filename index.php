<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloaming Imagine - Performance Cycling</title>
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
        }

        /* Top Banner */
        .top-banner {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 8px 20px;
            font-size: 11px;
            letter-spacing: 0.5px;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 65vh;
            min-height: 500px;
            background: #2c3e50;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1541625602330-2277a4c46182?w=1600&q=80') center/cover;
            opacity: 0.4;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 1000px;
            padding: 0 40px;
        }

        .hero-subtitle {
            font-size: 11px;
            letter-spacing: 4px;
            margin-bottom: 30px;
            opacity: 0.95;
            font-weight: 400;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 300;
            letter-spacing: 2px;
            margin-bottom: 50px;
            line-height: 1.1;
            text-transform: uppercase;
        }

        .hero-title .highlight {
            font-weight: 400;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 0;
        }

        .btn {
            padding: 16px 40px;
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            text-decoration: none;
            border: 1px solid rgba(255,255,255,0.8);
            background: transparent;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #fff;
            color: #000;
            border-color: #fff;
        }

        /* Collection Header - PAS Normal Studios Style */
        .collection-header {
            padding: 45px 40px 35px;
            background: #8B6F47;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .collection-title {
            font-size: 16px;
            letter-spacing: 0.5px;
            font-weight: 400;
            text-transform: none;
        }

        .collection-nav {
            display: flex;
            gap: 12px;
        }

        .collection-nav button {
            width: 36px;
            height: 36px;
            border: 1px solid rgba(255,255,255,0.4);
            background: transparent;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 300;
        }

        .collection-nav button:hover {
            background: rgba(255,255,255,0.15);
            border-color: rgba(255,255,255,0.6);
        }

        /* Block Wrapper Section - PAS Normal Studios Product Grid */
        .block-wrapper {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            background: #8B6F47;
            margin: 0;
            padding: 0 0 80px 0;
        }

        .product-block {
            position: relative;
            background: #fff;
            border-right: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease;
        }

        .product-block:nth-child(4n) {
            border-right: none;
        }

        .product-block:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            z-index: 10;
        }

        .product-badges {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            padding: 12px;
            z-index: 5;
        }

        .new-arrival-badge {
            background: #fff;
            color: #000;
            font-size: 8px;
            letter-spacing: 1px;
            padding: 6px 10px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .wishlist-icon {
            width: 32px;
            height: 32px;
            background: #fff;
            border: 1px solid #e5e5e5;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .wishlist-icon:hover {
            background: #000;
            border-color: #000;
        }

        .wishlist-icon:hover svg {
            stroke: #fff;
        }

        .product-image-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 125%;
            overflow: hidden;
            background: #f8f8f8;
        }

        .product-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .product-block:hover .product-image {
            transform: scale(1.05);
        }

        .product-info {
            padding: 16px 14px 14px;
            background: #fff;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-size: 13px;
            font-weight: 400;
            color: #000;
            margin-bottom: 4px;
            line-height: 1.3;
        }

        .product-variant {
            font-size: 12px;
            color: #666;
            margin-bottom: 8px;
            font-weight: 300;
        }

        .product-price {
            font-size: 13px;
            color: #000;
            font-weight: 400;
            margin-bottom: 12px;
        }

        .product-sizes {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
            margin-top: auto;
        }

        .size-option {
            font-size: 10px;
            color: #666;
            padding: 2px 0;
            min-width: 20px;
            text-align: center;
        }

        .size-option:not(:last-child)::after {
            content: '';
            display: inline-block;
            width: 1px;
            height: 10px;
            background: #ddd;
            margin-left: 6px;
            vertical-align: middle;
        }

        /* Responsive Design */
        @media (max-width: 1400px) {
            .block-wrapper {
                grid-template-columns: repeat(3, 1fr);
            }
            
            .product-block:nth-child(4n) {
                border-right: 1px solid #e5e5e5;
            }
            
            .product-block:nth-child(3n) {
                border-right: none;
            }
        }

        @media (max-width: 1024px) {
            .block-wrapper {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .product-block:nth-child(3n),
            .product-block:nth-child(4n) {
                border-right: 1px solid #e5e5e5;
            }
            
            .product-block:nth-child(2n) {
                border-right: none;
            }
            
            .collection-header {
                padding: 30px 20px;
            }
        }

        @media (max-width: 768px) {
            .block-wrapper {
                grid-template-columns: 1fr;
                padding-bottom: 40px;
            }
            
            .product-block {
                border-right: none;
            }
            
            .collection-header {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
            
            .collection-title {
                font-size: 14px;
            }
        }

        /* Additional Block Items Section */
        .content-blocks {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0;
            background: #fff;
            margin: 0;
        }

        .content-block {
            position: relative;
            overflow: hidden;
            height: 100vh;
            min-height: 700px;
            max-height: 900px;
            background: #000;
            cursor: pointer;
            text-decoration: none;
            display: block;
        }

        .content-block img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: block;
        }

        .content-block:hover img {
            transform: scale(1.06);
        }

        .block-overlay {
            position: absolute;
            bottom: 50px;
            left: 50px;
            color: #fff;
            z-index: 2;
        }

        .block-category {
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 10px;
            opacity: 0.9;
            font-weight: 400;
        }

        .block-title {
            font-size: 36px;
            font-weight: 300;
            letter-spacing: 0px;
            line-height: 1.1;
            text-transform: uppercase;
        }

        @media (max-width: 1200px) {
            .content-block {
                height: 80vh;
                min-height: 600px;
            }
        }

        @media (max-width: 768px) {
            .content-blocks {
                grid-template-columns: 1fr;
            }
            
            .content-block {
                height: 70vh;
                min-height: 500px;
            }

            .block-overlay {
                bottom: 30px;
                left: 30px;
            }

            .block-title {
                font-size: 28px;
            }

            .block-category {
                font-size: 9px;
            }
        }

        /* Category Navigation */
        .category-nav {
            padding: 80px 40px;
            background: #f5f5f5;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .category-item {
            text-align: left;
        }

        .category-name {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
        }

        .subcategory-list {
            list-style: none;
            padding: 0;
        }

        .subcategory-list li {
            font-size: 12px;
            color: #666;
            margin-bottom: 8px;
            cursor: pointer;
            transition: color 0.2s;
        }

        .subcategory-list li:hover {
            color: #000;
        }

        @media (max-width: 1024px) {
            .category-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .category-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
            
            .category-nav {
                padding: 50px 20px;
            }
        }

        /* Featured Section */
        .featured-section {
            padding: 120px 40px;
            background: #1a1a1a;
            color: #fff;
            text-align: center;
        }

        .featured-content {
            max-width: 700px;
            margin: 0 auto;
        }

        .featured-subtitle {
            font-size: 10px;
            letter-spacing: 3px;
            margin-bottom: 20px;
            opacity: 0.8;
            font-weight: 400;
        }

        .featured-title {
            font-size: 42px;
            font-weight: 300;
            letter-spacing: 1px;
            margin-bottom: 25px;
        }

        .featured-description {
            font-size: 14px;
            line-height: 1.8;
            color: rgba(255,255,255,0.8);
            margin-bottom: 40px;
            font-weight: 300;
        }

        .featured-section .btn {
            border-color: rgba(255,255,255,0.6);
        }

        @media (max-width: 768px) {
            .featured-section {
                padding: 80px 20px;
            }
            
            .featured-title {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header/header.php'; ?>
    <!-- Top Banner -->
    <div class="top-banner">
        Join ICC and receive 10% off your first order
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-subtitle">PERFORMANCE CYCLING APPAREL</div>
            <h1 class="hero-title">
                RIDE WITH <span class="highlight">PURPOSE</span>
            </h1>
            <div class="hero-buttons">
                <a href="#" class="btn">SHOP CYCLING</a>
                <a href="#" class="btn">SHOP OFF-RACE</a>
            </div>
        </div>
    </section>

    <!-- Content Blocks Section -->
    <section class="content-blocks">
        <a href="#" class="content-block">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/2c8e0e5e9b3e8f5d1f6e7e8e9e0e1e2e3e4e5e6e-2400x3000.jpg?w=1200&q=85" alt="Cycling Collection">
            <div class="block-overlay">
                <div class="block-category">SPRING/SUMMER 2026</div>
                <h3 class="block-title">NEW SEASON</h3>
            </div>
        </a>

        <a href="#" class="content-block">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/1f7e8e9e0e1e2e3e4e5e6e7e8e9e0e1e2e3e4e5e-2400x3000.jpg?w=1200&q=85" alt="Editorial">
            <div class="block-overlay">
                <div class="block-category">EDITORIAL</div>
                <h3 class="block-title">THE LONG RIDE</h3>
            </div>
        </a>
    </section>

    <!-- Collection Header - PAS Normal Studios Style -->
    <div class="collection-header">
        <h2 class="collection-title">Off-Race Spring/Summer 2026</h2>
        <div class="collection-nav">
            <button>←</button>
            <button>→</button>
        </div>
    </div>

    <!-- Block Wrapper - PAS Normal Studios Product Grid -->
    <section class="block-wrapper">
        <!-- Product 1 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <span class="new-arrival-badge">NEW ARRIVAL</span>
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/b47abf6f65495dd2ac71e9e36efaebe3830e8ba8-1920x2400.jpg?w=600&q=75" alt="Off-Race Utility Jacket" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Off-Race Utility Jacket</div>
                <div class="product-variant">Steel - 2 colours</div>
                <div class="product-price">€ 350.00</div>
                <div class="product-sizes">
                    <span class="size-option">XXS</span>
                    <span class="size-option">XS</span>
                    <span class="size-option">S</span>
                    <span class="size-option">M</span>
                    <span class="size-option">L</span>
                    <span class="size-option">XL</span>
                </div>
            </div>
        </a>

        <!-- Product 2 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <span class="new-arrival-badge">NEW ARRIVAL</span>
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/beab8507d7c19cffdd27ddb1c3245bbf205df91b-1920x2400.jpg?w=600&q=75" alt="Off-Race 3L Poncho" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Off-Race 3L Poncho</div>
                <div class="product-variant">Hazel - 1 colour</div>
                <div class="product-price">€ 300.00</div>
                <div class="product-sizes">
                    <span class="size-option">ONE SIZE</span>
                </div>
            </div>
        </a>

        <!-- Product 3 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <span class="new-arrival-badge">NEW ARRIVAL</span>
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/f0546c4f4f756114e628b6fe520ba15f1dff1a20-3000x3750.png?w=600&q=75" alt="Women's Off-Race Tech Skirt" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Women's Off-Race Tech Skirt</div>
                <div class="product-variant">Dark Purple - 3 colours</div>
                <div class="product-price">€ 220.00</div>
                <div class="product-sizes">
                    <span class="size-option">XXS</span>
                    <span class="size-option">XS</span>
                    <span class="size-option">S</span>
                    <span class="size-option">M</span>
                    <span class="size-option">L</span>
                    <span class="size-option">XL</span>
                </div>
            </div>
        </a>

        <!-- Product 4 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <span class="new-arrival-badge">NEW ARRIVAL</span>
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/e7d032fe7beb12ca00ca47a48b3c1be73432d3af-3000x3750.png?w=600&q=75" alt="Off-Race Light Fleece Half-Zip" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Off-Race Light Fleece Half-Zip</div>
                <div class="product-variant">Beige - 2 colours</div>
                <div class="product-price">€ 230.00</div>
                <div class="product-sizes">
                    <span class="size-option">XXS</span>
                    <span class="size-option">XS</span>
                    <span class="size-option">S</span>
                    <span class="size-option">M</span>
                    <span class="size-option">L</span>
                    <span class="size-option">XL</span>
                </div>
            </div>
        </a>

        <!-- Product 5 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <span class="new-arrival-badge">NEW ARRIVAL</span>
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=600&q=75" alt="Men's Off-Race Heavyweight T-Shirt" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Men's Off-Race Heavyweight T-Shirt</div>
                <div class="product-variant">Dark Forest - 4 colours</div>
                <div class="product-price">€ 220.00</div>
                <div class="product-sizes">
                    <span class="size-option">XS</span>
                    <span class="size-option">S</span>
                    <span class="size-option">M</span>
                    <span class="size-option">L</span>
                    <span class="size-option">XL</span>
                </div>
            </div>
        </a>

        <!-- Product 6 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=600&q=75" alt="Off-Race Cargo Pants" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Off-Race Cargo Pants</div>
                <div class="product-variant">Olive - 3 colours</div>
                <div class="product-price">€ 280.00</div>
                <div class="product-sizes">
                    <span class="size-option">28</span>
                    <span class="size-option">30</span>
                    <span class="size-option">32</span>
                    <span class="size-option">34</span>
                    <span class="size-option">36</span>
                </div>
            </div>
        </a>

        <!-- Product 7 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=600&q=75" alt="Off-Race Wool Overshirt" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Off-Race Wool Overshirt</div>
                <div class="product-variant">Charcoal - 2 colours</div>
                <div class="product-price">€ 320.00</div>
                <div class="product-sizes">
                    <span class="size-option">S</span>
                    <span class="size-option">M</span>
                    <span class="size-option">L</span>
                    <span class="size-option">XL</span>
                </div>
            </div>
        </a>

        <!-- Product 8 -->
        <a href="#" class="product-block">
            <div class="product-badges">
                <div class="wishlist-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </div>
            </div>
            <div class="product-image-wrapper">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=600&q=75" alt="Off-Race Packable Jacket" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">Off-Race Packable Jacket</div>
                <div class="product-variant">Navy - 3 colours</div>
                <div class="product-price">€ 260.00</div>
                <div class="product-sizes">
                    <span class="size-option">XS</span>
                    <span class="size-option">S</span>
                    <span class="size-option">M</span>
                    <span class="size-option">L</span>
                    <span class="size-option">XL</span>
                </div>
            </div>
        </a>
    </section>

    <!-- Category Navigation -->
    <section class="category-nav">
        <div class="category-grid">
            <div class="category-item">
                <div class="category-name">Cycling</div>
                <ul class="subcategory-list">
                    <li>Jerseys</li>
                    <li>Bibs</li>
                    <li>Jackets & Gilets</li>
                    <li>Base Layers</li>
                    <li>Accessories</li>
                </ul>
            </div>

            <div class="category-item">
                <div class="category-name">Off-Race</div>
                <ul class="subcategory-list">
                    <li>T-Shirts</li>
                    <li>Sweatshirts</li>
                    <li>Jackets</li>
                    <li>Pants</li>
                    <li>Accessories</li>
                </ul>
            </div>

            <div class="category-item">
                <div class="category-name">Sale</div>
                <ul class="subcategory-list">
                    <li>Cycling</li>
                    <li>Off-Race</li>
                    <li>Accessories</li>
                    <li>Archive</li>
                </ul>
            </div>

            <div class="category-item">
                <div class="category-name">Women & Unisex</div>
                <ul class="subcategory-list">
                    <li>Women's</li>
                    <li>Unisex</li>
                    <li>All Products</li>
                </ul>
            </div>

            <div class="category-item">
                <div class="category-name">Collections</div>
                <ul class="subcategory-list">
                    <li>Spring/Summer</li>
                    <li>Autumn/Winter</li>
                    <li>Limited Edition</li>
                    <li>Collaborations</li>
                </ul>
            </div>

            <div class="category-item">
                <div class="category-name">Accessories</div>
                <ul class="subcategory-list">
                    <li>Caps</li>
                    <li>Socks</li>
                    <li>Gloves</li>
                    <li>Bags</li>
                    <li>Equipment</li>
                </ul>
            </div>
        </div>

        <div class="category-grid" style="margin-top: 60px;">
            <div class="category-item">
                <div class="category-name">Socks</div>
            </div>
            <div class="category-item">
                <div class="category-name">Underwear</div>
            </div>
            <div class="category-item">
                <div class="category-name">Equipment & Nutrition</div>
            </div>
            <div class="category-item">
                <div class="category-name">T-Shirts</div>
            </div>
            <div class="category-item">
                <div class="category-name">Pants & Shorts</div>
            </div>
            <div class="category-item">
                <div class="category-name">Books & Posters</div>
            </div>
        </div>
    </section>

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="featured-content">
            <div class="featured-subtitle">EXPLORE THE COLLECTION</div>
            <h2 class="featured-title">Deep Winter</h2>
            <p class="featured-description">
                Built for the harshest conditions, our Deep Winter collection combines advanced thermal technology 
                with refined aesthetics. Ride through rain, wind, and cold with confidence.
            </p>
            <a href="#" class="btn">SHOP COLLECTION</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script>
        // Simple scroll animation for hero
        window.addEventListener('scroll', function() {
            const hero = document.querySelector('.hero');
            const scrolled = window.pageYOffset;
            if (hero) {
                hero.style.opacity = 1 - (scrolled / 800);
            }
        });

        // Product card hover effect
        document.querySelectorAll('.product-block').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });

        // Wishlist icon interaction
        document.querySelectorAll('.wishlist-icon').forEach(icon => {
            icon.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                // Add your wishlist logic here
                console.log('Added to wishlist');
            });
        });
    </script>
</body>
</html>