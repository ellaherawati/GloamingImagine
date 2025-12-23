<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's T.K.O. Mechanism Jersey | PAS Normal Studios</title>
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

       
        /* Product Section */
        .product-container {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 60px;
            max-width: 1800px;
            padding: 40px;
        }

        /* Gallery */
        .gallery {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .gallery-image {
            width: 100%;
            height: auto;
            cursor: zoom-in;
            transition: opacity 0.3s;
        }

        .gallery-image:hover {
            opacity: 0.95;
        }

        /* Product Info */
        .product-info {
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .badge {
            font-size: 11px;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            color: #666;
        }

        .product-title {
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .color-name {
            font-size: 13px;
            color: #666;
            margin-bottom: 10px;
        }

        .color-options {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .color-swatch {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #e0e0e0;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .color-swatch.active {
            border-color: #000;
        }

        .color-swatch:hover {
            border-color: #666;
        }

        .product-description {
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 30px;
            color: #333;
        }

        /* Size Selector */
        .size-selector {
            margin-bottom: 25px;
        }

        .size-label {
            font-size: 13px;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .size-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        .size-option {
            padding: 15px;
            border: 1px solid #e0e0e0;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 13px;
            background: #fff;
        }

        .size-option:hover {
            border-color: #000;
        }

        .size-option.selected {
            background: #000;
            color: #fff;
            border-color: #000;
        }

        /* Price and CTA */
        .price {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .add-to-cart {
            width: 100%;
            padding: 18px;
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 13px;
            letter-spacing: 1.5px;
            transition: background 0.3s;
            margin-bottom: 15px;
        }

        .add-to-cart:hover {
            background: #333;
        }

        .add-to-cart:disabled {
            background: #ccc;
            cursor: not-allowed;
        }

        /* Info Links */
        .info-links {
            list-style: none;
            border-top: 1px solid #e0e0e0;
            padding-top: 20px;
        }

        .info-links li {
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-links a {
            text-decoration: none;
            color: #000;
            font-size: 13px;
            letter-spacing: 0.5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .info-links a:hover {
            opacity: 0.6;
        }

        /* Specs Section */
        .specs-section {
            max-width: 1800px;
            margin: 80px auto;
            padding: 0 40px;
        }

        .specs-title {
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: 400;
        }

        .specs-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .spec-item h4 {
            font-size: 13px;
            letter-spacing: 1px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .spec-item p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .product-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .product-info {
                position: relative;
                top: 0;
            }

            .specs-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            nav {
                padding: 15px 20px;
            }

            .nav-links {
                gap: 20px;
            }

            .product-container {
                padding: 20px;
                margin-top: 80px;
            }

            .product-title {
                font-size: 24px;
            }

            .size-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Temperature Bar */
        .temp-indicator {
            margin: 20px 0;
        }

        .temp-label {
            font-size: 12px;
            color: #666;
            margin-bottom: 8px;
        }

        .temp-bar {
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            position: relative;
            overflow: hidden;
        }

        .temp-bar-fill {
            height: 100%;
            background: #000;
            width: 70%;
            border-radius: 2px;
        }

        .temp-range {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            color: #999;
            margin-top: 5px;
        }

        /* Rating bars */
        .rating-item {
            margin: 15px 0;
        }

        .rating-label {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .rating-bar {
            height: 4px;
            background: #e0e0e0;
            border-radius: 2px;
            overflow: hidden;
        }

        .rating-fill {
            height: 100%;
            background: #000;
            border-radius: 2px;
        }

        /* Details Section */
        .details-section {
            max-width: 1800px;
            margin: 80px auto;
            padding: 0 40px;
        }

        .details-title {
            font-size: 24px;
            margin-bottom: 40px;
            font-weight: 400;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .detail-card {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .detail-image, .detail-video video {
            width: 100%;
            height: auto;
            display: block;
        }

        .detail-video {
            width: 100%;
            background: #f5f5f5;
        }

        .detail-info h3 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .detail-info p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        /* Gallery Section */
        .gallery-section {
            max-width: 1800px;
            margin: 80px auto 120px;
            padding: 0 40px;
        }

        .gallery-section-title {
            font-size: 24px;
            margin-bottom: 40px;
            font-weight: 400;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .gallery-grid-image {
            width: 100%;
            height: auto;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .gallery-grid-image:hover {
            opacity: 0.8;
        }

        /* Responsive Updates */
        @media (max-width: 1200px) {
            .details-grid {
                grid-template-columns: 1fr;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .details-section, .gallery-section {
                padding: 0 20px;
            }
        }

        

     
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Product Section -->
    <div class="product-container">
        <!-- Gallery -->
        <div class="gallery" id="gallery">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=1200&q=85&fit=max&auto=format" alt="T.K.O. Mechanism Jersey Front" class="gallery-image">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/679b741ab85a94215020e3abff3370be8b2497d5-1920x2400.jpg?w=1200&q=85&fit=max&auto=format" alt="T.K.O. Mechanism Jersey Back" class="gallery-image">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=1200&q=85&fit=max&auto=format" alt="T.K.O. Mechanism Jersey Detail" class="gallery-image">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=1200&q=85&fit=max&auto=format" alt="T.K.O. Mechanism Jersey On Bike" class="gallery-image">
            <img src="https://cdn.sanity.io/images/k15yl91v/production/5dad33c8ca27ed6431f29e29be3e29281c1f6305-1920x2400.jpg?w=1200&q=85&fit=max&auto=format" alt="T.K.O. Mechanism Jersey Fit" class="gallery-image">
        </div>

        <!-- Product Info -->
        <div class="product-info">
            <div class="badge">NEW ARRIVAL</div>
            <h1 class="product-title">Women's T.K.O. Mechanism Jersey</h1>
            <div class="price">Rp.250.000</div>

            <div class="color-name">T.K.O. Black Multi</div>
            
            <div class="color-options">
                <div class="color-swatch active" style="background: linear-gradient(135deg, #000 50%, #e74c3c 50%);" title="T.K.O. Black Multi"></div>
                <div class="color-swatch" style="background: #f5f5f5;" title="Off White"></div>
                <div class="color-swatch" style="background:rgb(13, 98, 91);" title="Off White"></div>
            </div>

            <p class="product-description">
                The T.K.O. Mechanism Jersey features a low-cut collar to reduce chafing and improve the comfort of the jersey. It gives the jersey a modern look and aerodynamic benefits - a jersey using lightweight fabric that provides everything you need for competitive races or fast-paced training days. Still remains a staple for your everyday summer rides.
            </p>

            <!-- Size Selector -->
            <div class="size-selector">
                <div class="size-label">SELECT SIZE</div>
                <div class="size-grid" id="sizeGrid">
                    <div class="size-option" data-size="XS">XS</div>
                    <div class="size-option" data-size="S">S</div>
                    <div class="size-option" data-size="M">M</div>
                    <div class="size-option" data-size="L">L</div>
                    <div class="size-option" data-size="XL">XL</div>
                    <div class="size-option" data-size="XXL">XXL</div>
                </div>
            </div>
            <button class="add-to-cart" id="addToCart" disabled>SELECT SIZE</button>

           
        </div>
    </div>

    <!-- Specifications Section -->
    <div class="specs-section">
        <h2 class="specs-title">Product Specifications</h2>
        <div class="specs-grid">
            <div class="spec-item">
                <h4>INTENDED USE</h4>
                <p>Ideal for high-intensity road riding and racing. The jersey has a tight, aerodynamic fit.</p>
            </div>
            <div class="spec-item">
                <h4>FEATURES</h4>
                <p>Low-cut collar, lightweight fabric, concealed single-layer patch side pocket with YKK stay-down seam zipper, elastic grippers.</p>
            </div>
            <div class="spec-item">
                <h4>CARE</h4>
                <p>Machine wash cold, do not bleach, tumble dry low, do not iron, do not dry clean.</p>
            </div>
        </div>
    </div>

    <!-- Detail Features Section -->
    <div class="details-section">
        <h2 class="details-title">Features & Details</h2>
        <div class="details-grid">
            <div class="detail-card">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/413c2dcc9acaf9c034626ddadaf80b3aec7e9130-3200x4000.jpg?w=800&q=85&fit=max&auto=format" alt="On Bike Fit" class="detail-image">
                <div class="detail-info">
                    <h3>On Bike</h3>
                    <p>Aerodynamic race fit designed for high-intensity riding. The jersey stays in place during aggressive cycling positions.</p>
                </div>
            </div>

            <div class="detail-card">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/c27f21f50e90f9a7113c759b116e0920418f8810-3200x4000.jpg?w=800&q=85&fit=max&auto=format" alt="Elastic Grippers" class="detail-image">
                <div class="detail-info">
                    <h3>Elastic Grippers</h3>
                    <p>Silicone gripper elastic at the hem keeps the jersey secure without restricting movement or comfort.</p>
                </div>
            </div>

            <div class="detail-card">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/c2b4f365027938fe47fb72bbb9cb3b3c09173d73-3200x4000.jpg?w=800&q=85&fit=max&auto=format" alt="Side Pocket" class="detail-image">
                <div class="detail-info">
                    <h3>Pockets</h3>
                    <p>Concealed single-layer patch side pocket with stay-down seam zipper for easy access to essentials while riding.</p>
                </div>
            </div>

            <div class="detail-card">
                <div class="detail-video">
                    <video autoplay loop muted playsinline poster="https://i.vimeocdn.com/video/1992973931-298135bd1cb47204487473f6ef018ca36d2e9e57ed7e00ab979803c46ffb964b-d">
                        <source src="https://player.vimeo.com/progressive_redirect/playback/1065460980/rendition/720p/file.mp4?loc=external&signature=0b20d5f2924ccd7a23071a7ebf37c1c9653ac96863134565dad5f1b6d23d636c" type="video/mp4">
                    </video>
                </div>
                <div class="detail-info">
                    <h3>YKK Zipper</h3>
                    <p>Premium YKK zipper ensures smooth operation and durability. Full-length front zipper for ventilation control.</p>
                </div>
            </div>
        </div>
    </div>

   <footer>
     <?php include 'footer.php'; ?>
   </footer>
<script>
        // Size Selection
        const sizeOptions = document.querySelectorAll('.size-option');
        const addToCartBtn = document.getElementById('addToCart');
        let selectedSize = null;

        sizeOptions.forEach(option => {
            option.addEventListener('click', () => {
                sizeOptions.forEach(opt => opt.classList.remove('selected'));
                option.classList.add('selected');
                selectedSize = option.dataset.size;
                addToCartBtn.disabled = false;
                addToCartBtn.textContent = 'ADD TO CART';
            });
        });

        // Add to Cart
        addToCartBtn.addEventListener('click', () => {
            if (selectedSize) {
                const newItem = {
                    name: "Women's T.K.O. Mechanism Jersey",
                    color: "T.K.O. Black Multi",
                    size: selectedSize,
                    price: 205.00,
                    quantity: 1,
                    image: "https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=200&q=75"
                };
                
                // Check if item already exists
                const existingItem = cart.find(item => 
                    item.name === newItem.name && 
                    item.size === newItem.size && 
                    item.color === newItem.color
                );

                if (existingItem) {
                    existingItem.quantity++;
                } else {
                    cart.push(newItem);
                }

                updateCartCount();
                renderCart();
                openCart();
            }
        });

        // Color Selection
        const colorSwatches = document.querySelectorAll('.color-swatch');
        colorSwatches.forEach(swatch => {
            swatch.addEventListener('click', () => {
                colorSwatches.forEach(s => s.classList.remove('active'));
                swatch.classList.add('active');
            });
        });

        // Smooth scroll for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Image zoom on click (simple lightbox effect)
        const galleryImages = document.querySelectorAll('.gallery-image, .gallery-grid-image, .detail-image');
        galleryImages.forEach(img => {
            img.addEventListener('click', () => {
                const overlay = document.createElement('div');
                overlay.style.cssText = `
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(255,255,255,0.95);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 9999;
                    cursor: zoom-out;
                `;
                
                const zoomedImg = img.cloneNode();
                zoomedImg.style.maxWidth = '90%';
                zoomedImg.style.maxHeight = '90%';
                zoomedImg.style.objectFit = 'contain';
                
                overlay.appendChild(zoomedImg);
                document.body.appendChild(overlay);
                
                overlay.addEventListener('click', () => {
                    document.body.removeChild(overlay);
                });
            });
        });
    </script>
</body>
</html>