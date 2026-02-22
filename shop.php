<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloaming</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;
            background: #fff;
            color: #000;
            line-height: 1.5;
        }

        /* Hero Section */
        .hero {
            padding: 40px 40px 40px;
            max-width: 2000px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 30px;
            font-weight: 500;
            margin-bottom: -50px;
            letter-spacing: -0.5px;
        }

        /* Products Grid */
        .products-container {
            max-width: 2000px;
            margin: 0 auto;
            padding: 40px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px 30px;
        }

        .product-card {
            position: relative;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .product-images {
            position: relative;
            overflow: hidden;
            aspect-ratio: 4/5;
            background: #f5f5f5;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .product-images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.4s ease;
            position: absolute;
            top: 0;
            left: 0;
        }

        .product-images .img-main {
            opacity: 1;
            z-index: 1;
        }

        .product-images .img-hover {
            opacity: 0;
            z-index: 2;
        }

        .product-card:hover .img-main {
            opacity: 0;
        }

        .product-card:hover .img-hover {
            opacity: 1;
        }

        .size-selector {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 10px;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 3;
        }

        .product-card:hover .size-selector {
            opacity: 1;
            transform: translateY(0);
        }

        .size-option {
            padding: 8px 8px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            border-bottom: 2px solid transparent;
        }

        .size-option:hover {
            border-bottom: 2px solid #000;
        }

        .wishlist-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 40px;
            height: 40px;
            background: #fff;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 4;
            opacity: 0;
            transition: opacity 0.3s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .product-card:hover .wishlist-btn {
            opacity: 1;
        }

        .wishlist-btn svg {
            width: 20px;
            height: 20px;
            stroke: #000;
            fill: none;
            transition: all 0.2s;
        }

        .wishlist-btn:hover svg,
        .wishlist-btn.active svg {
            fill: #000;
        }

        .wishlist-btn.active {
            background: #000;
        }

        .wishlist-btn.active svg {
            stroke: #fff;
            fill: #fff;
        }

        .new-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #000;
            color: #fff;
            padding: 5px 10px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.5px;
            z-index: 1;
        }

        .product-info {
            padding: 0 5px;
        }

        .product-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .product-price {
            font-size: 13px;
            color: #666;
        }

        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px 20px;
            }

            .hero {
                padding: 40px 20px 20px;
            }

            .products-container {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
    <?php include 'header/header_shop.php'; ?>
    </header>
    <!-- Hero Section -->


    <!-- Products Grid -->
    <div class="products-container">
        <div class="products-grid" id="productsGrid">
        </div>
    </div>
<footer> <?php include 'footer.php'; ?>
</footer>
    <script>
        // Products data sudah di-load dari products-data.js via header_shop.php
        // Wishlist functions sudah di-load dari wishlist.js via header_shop.php
        
        // Render Products
        function renderProducts(filter = 'all') {
            const grid = document.getElementById('productsGrid');
            
            // Check if products is available
            if (typeof products === 'undefined') {
                console.error('Products data not loaded!');
                return;
            }
            
            const filteredProducts = products.filter(p => {
                if (filter === 'all') return true;
                if (filter === 'new') return p.isNew;
                return p.category === filter;
            });

            grid.innerHTML = filteredProducts.map(product => {
                return `
                <a href="detail.php?id=${product.id}" class="product-card">
                    ${product.isNew ? '<div class="new-badge">NEW ARRIVAL</div>' : ''}
                    <div class="product-images">
                        <img src="${product.img1}" alt="${product.title}" class="img-main">
                        <img src="${product.img2}" alt="${product.title}" class="img-hover">
                        <button class="wishlist-btn" 
                                data-product-id="${product.id}"
                                aria-label="Add to wishlist">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="size-selector" onclick="event.preventDefault()">
                            <div class="size-option" onclick="selectSize(event, ${product.id}, 'XXS')">XXS</div>
                            <div class="size-option" onclick="selectSize(event, ${product.id}, 'XS')">XS</div>
                            <div class="size-option" onclick="selectSize(event, ${product.id}, 'S')">S</div>
                            <div class="size-option" onclick="selectSize(event, ${product.id}, 'M')">M</div>
                            <div class="size-option" onclick="selectSize(event, ${product.id}, 'L')">L</div>
                            <div class="size-option" onclick="selectSize(event, ${product.id}, 'XL')">XL</div>
                            <div class="size-option" onclick="selectSize(event, ${product.id}, 'XXL')">XXL</div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-title">${product.title}</div>
                        <div class="product-price">${product.price}</div>
                    </div>
                </a>
            `;
            }).join('');
            
            // Re-initialize wishlist buttons after rendering
            if (typeof initializeWishlistButtons === 'function') {
                initializeWishlistButtons();
            }
        }

        // Select Size - langsung masuk cart
        function selectSize(event, productId, size) {
            event.stopPropagation();
            const product = products.find(p => p.id === productId);
            if (!product) return;
            
            if (typeof addToCart === 'function') {
                addToCart({
                    name: product.title,
                    color: '-',
                    size: size,
                    price: product.price,
                    quantity: 1,
                    image: product.img1
                });
            }
        }

        // Initial Render - pakai window.onload agar semua script dari header sudah siap
        window.addEventListener('load', function() {
            console.log('Page loaded, rendering products...');
            console.log('Products available:', typeof products !== 'undefined');
            console.log('initializeWishlistButtons available:', typeof initializeWishlistButtons !== 'undefined');
            
            renderProducts();
            
            if (typeof updateWishlistCount === 'function') {
                updateWishlistCount();
            }
            
            console.log('Render complete, wishlist buttons initialized');
        });
    </script>

    <!-- cart.js dan wishlist.js sudah di-load oleh header_shop.php -->
</body>
</html>