<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wishlist - Gloaming Imagine</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Libre Franklin', -apple-system, sans-serif;
            background: #fff;
        }

        /* Main Content */
        .wishlist-container {
            max-width: 2000px;
            margin: 0 auto;
            padding: 40px 40px 80px;
        }

        .wishlist-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .wishlist-title {
            font-size: 32px;
            font-weight: 400;
        }

        .wishlist-count {
            font-size: 14px;
            color: #666;
        }

        .clear-all-btn {
            padding: 10px 24px;
            background: #fff;
            color: #000;
            border: 1px solid #e0e0e0;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .clear-all-btn:hover {
            background: #000;
            color: #fff;
            border-color: #000;
        }

        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .product-card {
            text-decoration: none;
            color: #000;
            display: block;
            position: relative;
        }

        .product-image-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 125%;
            background: #f5f5f5;
            overflow: hidden;
            margin-bottom: 12px;
        }

        .product-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #fff;
            padding: 4px 8px;
            font-size: 9px;
            font-weight: 600;
            letter-spacing: 0.5px;
            z-index: 1;
        }

        .wishlist-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 36px;
            height: 36px;
            background: rgba(255,255,255,0.9);
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1;
            transition: all 0.3s;
            font-size: 16px;
        }

        .wishlist-btn:hover {
            background: #fff;
            transform: scale(1.1);
        }

        .wishlist-btn.active {
            background: #000;
            color: #fff;
            border-color: #000;
        }

        .product-info {
            padding: 0 4px;
        }

        .product-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
            line-height: 1.3;
        }

        .product-variant {
            font-size: 12px;
            color: #666;
            margin-bottom: 6px;
        }

        .product-price {
            font-size: 14px;
            font-weight: 600;
        }

        /* Empty State */
        .empty-wishlist {
            text-align: center;
            padding: 120px 20px;
        }

        .empty-icon {
            font-size: 64px;
            margin-bottom: 24px;
            opacity: 0.3;
        }

        .empty-title {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .empty-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .shop-btn {
            display: inline-block;
            padding: 14px 40px;
            background: #000;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: background 0.3s;
        }

        .shop-btn:hover {
            background: #333;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .wishlist-container {
                padding: 30px 20px;
            }

            .wishlist-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            .wishlist-title {
                font-size: 24px;
            }

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .product-name {
                font-size: 13px;
            }

            .product-variant {
                font-size: 11px;
            }

            .product-price {
                font-size: 13px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header/header_shop.php'; ?>

    <div class="wishlist-container">
        <div class="wishlist-header">
            <div>
                <h1 class="wishlist-title">My Wishlist</h1>
                <p class="wishlist-count" id="wishlistCount">0 items</p>
            </div>
            <button class="clear-all-btn" id="clearAllBtn">CLEAR ALL</button>
        </div>

        <div id="wishlistContent">
            <!-- Products will be loaded here by JavaScript -->
        </div>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script>
        // products dan wishlist functions sudah tersedia dari:
        // - products-data.js (loaded by header_shop.php)
        // - wishlist.js (loaded by header_shop.php)

        function removeFromWishlistPage(productId) {
            // Gunakan fungsi dari wishlist.js
            if (typeof removeFromWishlist === 'function') {
                removeFromWishlist(productId);
                loadWishlistPage();
            }
        }

        function loadWishlistPage() {
            const list = getWishlist();
            const countEl   = document.getElementById('wishlistCount');
            const contentEl = document.getElementById('wishlistContent');
            const clearBtn  = document.getElementById('clearAllBtn');

            // Update count teks
            if (countEl) countEl.textContent = list.length + ' ' + (list.length === 1 ? 'item' : 'items');

            // Update count di header
            if (typeof updateWishlistCount === 'function') {
                updateWishlistCount();
            }

            // Toggle clear button
            if (clearBtn) clearBtn.style.display = list.length === 0 ? 'none' : 'block';

            if (list.length === 0) {
                contentEl.innerHTML = `
                    <div class="empty-wishlist">
                        <div class="empty-icon">&#9825;</div>
                        <h2 class="empty-title">Your wishlist is empty</h2>
                        <p class="empty-text">Save your favorite items here and shop them later</p>
                        <a href="shop.php" class="shop-btn">START SHOPPING</a>
                    </div>`;
                return;
            }

            // Cari produk dari array global 'products' (dari products-data.js)
            const wishlistProducts = list
                .map(id => products.find(p => p.id == id))
                .filter(p => p !== undefined);

            if (wishlistProducts.length === 0) {
                contentEl.innerHTML = `
                    <div class="empty-wishlist">
                        <div class="empty-icon">&#9825;</div>
                        <h2 class="empty-title">Your wishlist is empty</h2>
                        <p class="empty-text">Save your favorite items here and shop them later</p>
                        <a href="shop.php" class="shop-btn">START SHOPPING</a>
                    </div>`;
                return;
            }

            let html = '<div class="products-grid">';
            wishlistProducts.forEach(function(product) {
                html += `
                    <div class="product-card-wrapper">
                        <a href="detail.php?id=${product.id}" class="product-card">
                            <div class="product-image-wrapper">
                                ${product.isNew ? '<div class="product-badge">NEW ARRIVAL</div>' : ''}
                                <button class="wishlist-btn active"
                                    onclick="event.preventDefault(); event.stopPropagation(); removeFromWishlistPage(${product.id})">
                                    &#9829;
                                </button>
                                <img src="${product.img1}" alt="${product.title}" class="product-image">
                            </div>
                            <div class="product-info">
                                <div class="product-name">${product.title}</div>
                                <div class="product-price">${product.price}</div>
                            </div>
                        </a>
                    </div>`;
            });
            html += '</div>';
            contentEl.innerHTML = html;
        }

        // Clear all
        document.addEventListener('DOMContentLoaded', function() {
            var clearBtn = document.getElementById('clearAllBtn');
            if (clearBtn) {
                clearBtn.addEventListener('click', function() {
                    if (confirm('Are you sure you want to remove all items from your wishlist?')) {
                        localStorage.removeItem('gloaming_wishlist');
                        loadWishlistPage();
                    }
                });
            }
        });

        // Init - pakai window.onload agar products-data.js sudah pasti terbaca
        window.addEventListener('load', function() {
            loadWishlistPage();
        });
    </script>
</body>
</html>