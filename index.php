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
            padding: 60px 40px 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 30px;
            font-weight: 500;
            margin-bottom: -50px;
            letter-spacing: -0.5px;
        }

        .hero p {
            max-width: 700px;
            color: #666;
            font-size: 15px;
            line-height: 1.6;
        }

        /* Filter Bar */
        .filter-bar {
            padding: 30px 40px;
            border-bottom: 1px solid #e0e0e0;
            display: none;
        }

        /* Products Grid */
        .products-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px 30px;
        }

        .product-card {
            cursor: pointer;
            position: relative;
        }

        .product-images {
            position: relative;
            overflow: hidden;
            aspect-ratio: 4/5;
            background: #f5f5f5;
            margin-bottom: 15px;
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
            transition: fill 0.2s;
        }

        .wishlist-btn:hover svg {
            fill: #000;
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

        .product-variant {
            font-size: 13px;
            color: #666;
        }

    
    </style>
</head>
<body>

    <?php include 'header_shop.php'; ?>
    
   
    <!-- Hero Section -->
    <div class="hero">
        <h1>T-Shirts</h1>
    </div>
    

    

    <!-- Products Grid -->
    <div class="products-container">
        <div class="products-grid" id="productsGrid">
        <a href="detail.php?">
    </a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
       <?php include 'footer.php'; ?>
    </footer>

    <script>
        // Product Data
        const products = [
            {
                id: 1,
                title: 'T.K.O. Off-Race Graphic T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/36ab7ba25a0677a35050692cf5b911ce139812d6-1920x2400.png?w=800&q=75&fit=max&auto=format',
                isNew: true,
                category: 'men'
            },
            {
                id: 2,
                title: 'T.K.O. Off-Race Long Sleeve T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/beab8507d7c19cffdd27ddb1c3245bbf205df91b-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/bc2416b2980f1c484907b22fd78154eeb5735851-1920x2400.png?w=800&q=75&fit=max&auto=format',
                isNew: true,
                category: 'men'
            },
            {
                id: 3,
                title: 'Off-Race Graphic T-shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/5dd579a9f7923eb85fa97864bcb210f3d9635845-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/e7d032fe7beb12ca00ca47a48b3c1be73432d3af-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 4,
                title: 'Off-Race Graphic Long Sleeve T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/8700c37b2da19b204c7678ca8a98dbb22d80d238-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/f0546c4f4f756114e628b6fe520ba15f1dff1a20-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 5,
                title: 'Off-Race Graphic T-shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/fe7f2f0d61e17a5b3ecd049ad28482a7da728cee-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/448b32fb36d29886c5cef13aede0ae95806a5d05-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 6,
                title: 'Off-Race Graphic T-shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/3fec4647fb24efcd8de6dfb999f3040eda21caeb-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/834ece3adb4452130060504e5be5cce9b37c74bb-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 7,
                title: 'Off-Race T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/62496f7b8af6b3e6dd6278f41c3c91e01cefca01-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/a299cc794372f9b53287223848f5bf32361649d1-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 8,
                title: 'Off-Race Logo T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/b505ec4eda4f201ca0ad28a89f868a3b00c1a72d-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/42c99e89744c2c2ccaca3cb6706732617082c920-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 9,
                title: 'Off-Race T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/b6713bdc16ae362a5e8137eb0f65bba19db1f455-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/e7e9bf9a768c87ffc0d725c5fa646ba8cd578c20-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 10,
                title: 'Off-Race Logo T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/b47abf6f65495dd2ac71e9e36efaebe3830e8ba8-1920x2400.jpg?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/a039619638c9dd6962e9743673308987ca5758fd-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            },
            {
                id: 11,
                title: 'Women\'s Off-Race Lightweight T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/19f0811f303dcad3e99a3ad2f40c781cb2003a20-3000x3750.png?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/2aafcd025d33287f0646c6c9e570050708d978e9-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'women'
            },
            {
                id: 12,
                title: 'Off-Race PNS T-Shirt',
                Price: 'Rp. 150.000',
                img1: 'https://cdn.sanity.io/images/k15yl91v/production/ecaee966a1a0ae0fb19bc92216eeb8b37d58c303-3000x3750.png?w=800&q=75&fit=max&auto=format',
                img2: 'https://cdn.sanity.io/images/k15yl91v/production/9f2fd24d4d3d1ad79988a78b20c3e0e78463edb3-3000x3750.png?w=800&q=75&fit=max&auto=format',
                isNew: false,
                category: 'men'
            }
        ];

        // Render Products
        function renderProducts(filter = 'all') {
            const grid = document.getElementById('productsGrid');
            const filteredProducts = products.filter(p => {
                if (filter === 'all') return true;
                if (filter === 'new') return p.isNew;
                return p.category === filter;
            });

            grid.innerHTML = filteredProducts.map(product => `
                <div class="product-card">
                    ${product.isNew ? '<div class="new-badge">NEW ARRIVAL</div>' : ''}
                    <div class="product-images a href="detail.php?id=${product.id}">
                        <img src="${product.img1}" alt="${product.title}" class="img-main">
                        <img src="${product.img2}" alt="${product.title}" class="img-hover">
                        <button class="wishlist-btn" aria-label="Add to wishlist">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div class="size-selector">
                            <div class="size-option">XXS</div>
                            <div class="size-option">XS</div>
                            <div class="size-option">S</div>
                            <div class="size-option">M</div>
                            <div class="size-option">L</div>
                            <div class="size-option">XL</div>
                            <div class="size-option">XXL</div>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-title">${product.title}</div>
                        <div class="product-Price">${product.Price}</div>
                    </div>
                </div>
            `).join('');
        }

        

        // Initial Render
        renderProducts();
    </script>
</body>
</html>