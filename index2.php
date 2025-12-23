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
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: #fff;
            color: #000;
            line-height: 1.6;
        }

        /* Header */
        .announcement-bar {
            background: #000;
            color: #fff;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        .announcement-bar a {
            color: #fff;
            text-decoration: underline;
        }

        header {
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .logo {
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #000;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 0.6;
        }

        .nav-icons {
            display: flex;
            gap: 20px;
        }

        .nav-icons button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Product Grid */
        .section-title {
            text-align: left;
            padding: 60px 40px 30px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .section-title h2 {
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2px;
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .product-card {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            background: #f8f8f8;
        }

        .product-images {
            position: relative;
            aspect-ratio: 4/5;
            overflow: hidden;
        }

        .product-images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.3s;
            position: absolute;
            top: 0;
            left: 0;
        }

        .product-images img.hover-img {
            opacity: 0;
        }

        .product-card:hover .product-images img.main-img {
            opacity: 0;
        }

        .product-card:hover .product-images img.hover-img {
            opacity: 1;
        }

        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #fff;
            padding: 5px 12px;
            font-size: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
            z-index: 10;
        }

        .product-info {
            padding: 20px 0;
        }

        .product-info h3 {
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .product-info p {
            font-size: 11px;
            color: #666;
            letter-spacing: 0.5px;
        }

        /* Categories Section */
        .categories-section {
            padding: 80px 40px;
            max-width: 1600px;
            margin: 0 auto;
        }

        .categories-section h2 {
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 40px;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .category-card {
            position: relative;
            aspect-ratio: 4/5;
            overflow: hidden;
            cursor: pointer;
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .category-card:hover img {
            transform: scale(1.05);
        }

        .category-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            color: #fff;
        }

        .category-overlay h3 {
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Collections Section */
        .collections-section {
            background: #f5f5f5;
            padding: 100px 40px;
            text-align: center;
        }

        .collections-section h2 {
            font-size: 28px;
            font-weight: 400;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .collections-section p {
            font-size: 14px;
            line-height: 1.8;
            max-width: 600px;
            margin: 0 auto 40px;
            color: #666;
        }

        .explore-btn {
            display: inline-block;
            padding: 15px 40px;
            background: #000;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 1px;
            transition: background 0.3s;
        }

        .explore-btn:hover {
            background: #333;
        }

        /* Featured Guides */
        .guides-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 2px;
            max-width: 1600px;
            margin: 60px auto;
            padding: 0 40px;
        }

        .guide-card {
            position: relative;
            aspect-ratio: 16/10;
            overflow: hidden;
            cursor: pointer;
        }

        .guide-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .guide-card:hover img {
            transform: scale(1.05);
        }

        .guide-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 30px;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: #fff;
        }

        .guide-badge {
            font-size: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .guide-title {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .guide-link {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Newsletter Section */
        .newsletter-section {
            background: #000;
            color: #fff;
            padding: 80px 40px;
            text-align: center;
        }

        .newsletter-section h2 {
            font-size: 14px;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .newsletter-section p {
            font-size: 12px;
            margin-bottom: 30px;
            color: #999;
        }

        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            gap: 10px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 15px;
            border: 1px solid #333;
            background: #000;
            color: #fff;
            font-size: 12px;
            letter-spacing: 0.5px;
        }

        .newsletter-form button {
            padding: 15px 30px;
            background: #fff;
            color: #000;
            border: none;
            cursor: pointer;
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: background 0.3s;
        }

        .newsletter-form button:hover {
            background: #f0f0f0;
        }

        /* Footer */
        footer {
            background: #000;
            color: #fff;
            padding: 60px 40px 40px;
        }

        .footer-content {
            max-width: 1600px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-section h3 {
            font-size: 12px;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section a {
            color: #999;
            text-decoration: none;
            font-size: 12px;
            letter-spacing: 0.5px;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #fff;
        }

        .footer-bottom {
            max-width: 1600px;
            margin: 40px auto 0;
            padding-top: 40px;
            border-top: 1px solid #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-bottom p {
            font-size: 11px;
            color: #666;
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-links a {
            color: #999;
            text-decoration: none;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            nav {
                padding: 15px 20px;
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
                padding: 0 20px;
            }

            .guides-grid {
                grid-template-columns: 1fr;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
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
        <nav>
            <button class="mobile-menu-btn">☰</button>
            <div class="logo">PAS NORMAL STUDIOS</div>
            <ul class="nav-links">
                <li><a href="#">Shop</a></li>
                <li><a href="#">Gift Guide</a></li>
                <li><a href="#">Explore</a></li>
            </ul>
            <div class="nav-icons">
                <button>Search</button>
            </div>
        </nav>
    </header>

    <!-- New Arrivals Section -->
    <div class="section-title">
        <h2>New Arrival</h2>
    </div>

    <div class="product-grid">
        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/872d6e019bf8787aa659ead58be7e86949abffd9-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/c7869dbdea7028916c773e94f5749bd5d87fc0c7-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Men's T.K.O. Mechanism Thermal Jacket</h3>
                <p>T.K.O. Dark Multi - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/cee23025d579c5ddb7700cb30c3d6b7b47b6d0a3-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/202ea51b64576ff6d2d62d3c9779bb8793702671-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Men's T.K.O. Mechanism Bibs</h3>
                <p>Dark Purple - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/80271e8cc12d0298eed5ee21b2c5408ccb5f3b5a-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/21c4f1ab621cf620e70f2ce48ef33709ffcce7dc-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Women's T.K.O. Mechanism Long Sleeve Jersey</h3>
                <p>T.K.O. Red - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/eff415d7d1b462c50f13141e569e25ebf1b932ac-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/2cbf11afba080913b6c3e346d82360231cb490db-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Women's T.K.O. Essential Thermal Long Bibs</h3>
                <p>Dark Purple - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/67d982b80c9a5338895c86067ad5f081043141e6-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/6a9bddef4dfba190d3d5e3b80a26e973e8671433-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Men's T.K.O. Mechanism Long Sleeve Jersey</h3>
                <p>T.K.O. Black Multi - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/1aa1a1b9596d4f27512dd9012322f806896d19e4-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/851d535b13ae2f244c83075ced0a07ed840833a4-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Women's T.K.O. Mechanism Bibs</h3>
                <p>Dark Purple - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/5f759890a0a77f999dbd5436aede2c854a49895e-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/26071a0c56508320faaa23685d080bb9a0cb2799-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Men's T.K.O. Woven Long Sleeve Jersey</h3>
                <p>T.K.O. Red - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/d41345af9e3dbd4df8cdc9d813d03ffdbf1df8b6-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/08fb22fc61180761034334b3f354c2a17981531f-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Women's T.K.O. Mechanism Jersey</h3>
                <p>T.K.O. Mauve - 2 colours</p>
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="categories-section">
        <h2>CategoriesCollections</h2>
        <div class="categories-grid">
            <div class="category-card">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/f4cf3adfc39e0ddd1cf6b92c613ca2ac824da53f-1767x2210.png?w=600&q=75&fit=max&auto=format" alt="Bundles">
                <div class="category-overlay">
                    <h3>Bundles</h3>
                </div>
            </div>
            <div class="category-card">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/a518b6748750e9cf2bed2f1fb602e31ff55faa1c-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Jerseys">
                <div class="category-overlay">
                    <h3>Jerseys</h3>
                </div>
            </div>
            <div class="category-card">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/faec59b9e1403a79e0ce520073dd37ee1f754b1a-3000x3750.png?w=600&q=75&fit=max&auto=format" alt="Bibs">
                <div class="category-overlay">
                    <h3>Bibs</h3>
                </div>
            </div>
            <div class="category-card">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/32e69ef6ce1a8ec53638b942307b21ad17e6d219-1920x2400.png?w=600&q=75&fit=max&auto=format" alt="Jackets">
                <div class="category-overlay">
                    <h3>Jackets & Gilets</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Collections Section -->
    <div class="collections-section">
        <h2>Our Autumn and Winter Collections</h2>
        <p>Out here, life feels different. Riding through the dark, cold months of the year brings a new perspective. Sudden changes in temperature. Weather, shifting from bad to worse, cresting the hill.</p>
        <a href="#" class="explore-btn">Explore</a>
    </div>

    <!-- Featured Guides -->
    <div class="guides-grid">
        <div class="guide-card">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/fa30e3cbaf319ee9327159b82c0e82880163a037-1920x1536.jpg?w=1000&q=75&fit=max&auto=format" alt="Guide">
            <div class="guide-overlay">
                <div class="guide-badge">Guide</div>
                <div class="guide-title">Our Selection of kit for deep winter</div>
                <div class="guide-link">Explore</div>
            </div>
        </div>
        <div class="guide-card">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/e11ebbe06d1b4307856ce9b7e6b13ecc9544dc11-5000x3335.jpg?w=1000&q=75&fit=max&auto=format" alt="Guide">
            <div class="guide-overlay">
                <div class="guide-badge">Guide</div>
                <div class="guide-title">Our Selection of kit for late autumn and early winter</div>
                <div class="guide-link">Explore</div>
            </div>
        </div>
    </div>

    <!-- More Products -->
    <div class="product-grid">
        <div class="product-card">
            <div class="product-badge">New Arrival</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/9b4b84c4ea124b2ddd47b7a2fd2e1b7e1318abd4-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/a8b3f5208a75100179ab7be5d4a5d5e0d4b1b9ed-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Women's Mechanism Shell Jacket</h3>
                <p>Dark Grey - 1 colour</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-badge">Restocked</div>
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/865d8c016d01179ea603c1b84e93de36c4617323-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/409575c94a3f66f091ec6a08cfb39828e4c786d6-3000x3750.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Women's Mechanism Deep Winter Long Bibs</h3>
                <p>Black - 4 colours</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/929bbc1eff442c3a857a3c1d55091a823a946dff-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/f0eeaa00412c1e028b47fdb63467e3e2a22acaca-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Men's Mechanism Thermal Long Sleeve Jersey</h3>
                <p>Dark Olive - 6 colours</p>
            </div>
        </div>

        <div class="product-card">
            <div class="product-images">
                <img class="main-img" src="https://cdn.sanity.io/images/k15yl91v/production/1d080d27c737e5aef32c1c0752ff0a8f104eadf7-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="Product">
                <img class="hover-img" src="https://cdn.sanity.io/images/k15yl91v/production/9b7305bee99aa24cbb33da7de52a8f5a96674708-1920x2400.png?w=800&q=75&fit=max&auto=format" alt="Product Hover">
            </div>
            <div class="product-info">
                <h3>Men's Thermal Long Sleeve Base Layer</h3>
                <p>Camel - 4 colours</p>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <h2>Newsletter</h2>
        <p>Be the first to know about upcoming drops, events and deals.</p>
        <form class="newsletter-form">
            <input type="email" placeholder="Enter your email">
            <button type="submit">SIGN UP</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Customer Care</h3>
                <ul>
                    <li><a href="#">Get in Touch <invoke name="artifacts">
<parameter name="command">update</parameter>
<parameter name="id">pas-normal-replica</parameter>
<parameter name="old_str">                    
    <li><a href="#">Get in Touch</parameter>
<parameter name="new_str">                    
                    <li><a href="#">Get in Touch</a></li>
                    <li><a href="#">Gift Card</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Care Guide</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>About Pas Normal Studios</h3>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">International Cycling Club</a></li>
                    <li><a href="#">Impact & Responsibility</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>International Cycling Club</h3>
                <p style="color: #999; font-size: 12px; line-height: 1.6;">Sign up to become a member</p>
                <a href="#" class="explore-btn" style="display: inline-block; margin-top: 15px; padding: 12px 25px;">SIGN UP</a>
            </div>
        </div>
