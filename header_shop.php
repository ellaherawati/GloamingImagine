<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pas Normal Studios - Header with Filter Modal</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Libre Franklin', -apple-system, sans-serif;
            background: #f5f5f5;
        }
        
        /* Header */
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
            list-style: none;
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

        /* Sub Header */
        .sub-header {
            padding: 15px 40px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sub-header-left {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .sub-header-left a {
            color: #000;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.3s;
            position: relative;
        }

        .sub-header-left a.active {
            font-weight: 600;
        }

        .sub-header-left a.active::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            right: 0;
            height: 2px;
            background: #000;
        }

        .sub-header-left a:hover {
            opacity: 0.6;
        }

        .product-count {
            font-size: 14px;
            color: #000;
        }

        .filter-sort-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: none;
            border: none;
            font-size: 14px;
            cursor: pointer;
            transition: opacity 0.3s;
            font-family: inherit;
        }

        .filter-sort-btn:hover {
            opacity: 0.6;
        }

        .filter-sort-btn svg {
            width: 16px;
            height: 16px;
        }

        /* Filter Modal */
        .filter-modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            visibility: hidden;
            opacity: 0;
            z-index: 1000;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .filter-modal.active {
            visibility: visible;
            opacity: 1;
        }

        .filter-modal-content {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            max-width: 450px;
            background: #fff;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .filter-modal.active .filter-modal-content {
            transform: translateX(0);
        }

        .filter-modal-header {
            padding: 30px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
        }

        .filter-modal-header h3 {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .close-modal {
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

        .close-modal:hover {
            opacity: 0.6;
        }

        .filter-modal-body {
            padding: 30px;
            flex: 1;
            overflow-y: auto;
        }

        .filter-section {
            margin-bottom: 35px;
        }

        .filter-section:last-child {
            margin-bottom: 0;
        }

        .filter-section-title {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            margin-bottom: 18px;
            color: #666;
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .filter-option {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .filter-option input[type="checkbox"],
        .filter-option input[type="radio"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .filter-option label {
            font-size: 14px;
            cursor: pointer;
            flex: 1;
        }

        .filter-count {
            font-size: 12px;
            color: #999;
        }

        .filter-modal-footer {
            padding: 25px 30px;
            border-top: 1px solid #e0e0e0;
            display: flex;
            gap: 15px;
            flex-shrink: 0;
            background: #fff;
        }

        .btn {
            flex: 1;
            padding: 14px 24px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            font-family: inherit;
        }

        .btn-primary {
            background: #000;
            color: #fff;
        }

        .btn-primary:hover {
            background: #333;
        }

        .btn-secondary {
            background: #fff;
            color: #000;
            border: 1px solid #e0e0e0;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
        }

        /* Demo Content */
        .demo-content {
            padding: 40px;
            text-align: center;
        }

        .demo-content h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .demo-content p {
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-main {
                padding: 15px 20px;
            }

            .header-left,
            .header-right {
                gap: 20px;
            }

            .logo-text {
                font-size: 12px;
            }

            .logo-subtitle {
                font-size: 6px;
            }

            .sub-header {
                padding: 15px 20px;
            }

            .sub-header-left {
                display: none;
            }

            .filter-modal-content {
                max-width: 100%;
            }

            .filter-modal-header,
            .filter-modal-body,
            .filter-modal-footer {
                padding: 20px;
            }
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
        }

    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-main">
            <div class="header-left">
                <a href="#shop">Shop</a>
                <a href="#explore">Explore</a>
            </div>
            
            <div class="logo">
                <img src="logoheader.png" alt="Gloaming Imagine" class="logo-image">
            </div>
            
            <div class="header-right">
                <a href="#search">Search</a>
                <a href="login.php">Account</a>
                <a href="#" id="cartToggle">Cart (<span id="cartCount">0</span>)</a>
            </div>
        </div>

        <div class="sub-header">

            <div class="sub-header-left">
                <a href="#all" class="active">Categories</a>
                
            
            
            <div class="product-count">26 products</div>
            
            <button class="filter-sort-btn" id="filterToggle">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="4" y1="6" x2="20" y2="6"></line>
                    <line x1="4" y1="12" x2="20" y2="12"></line>
                    <line x1="4" y1="18" x2="20" y2="18"></line>
                </svg>
                Filter & Sort
            </button>
        </div>
    </header>

    <!-- Filter Modal -->
    <div class="filter-modal" id="filterModal">
        <div class="filter-modal-content">
            <div class="filter-modal-header">
                <h3>Filter & Sort (0)</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            
            <div class="filter-modal-body">
                <!-- Category Filter -->
                <div class="filter-section">
                    <div class="filter-section-title">Category</div>
                    <div class="filter-options">
                        <div class="filter-option">
                            <input type="checkbox" id="cat-jerseys" name="category" value="jerseys">
                            <label for="cat-jerseys">Jerseys</label>
                            <span class="filter-count">(12)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="cat-bibs" name="category" value="bibs">
                            <label for="cat-bibs">Bibs</label>
                            <span class="filter-count">(8)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="cat-jackets" name="category" value="jackets">
                            <label for="cat-jackets">Jackets & Gilets</label>
                            <span class="filter-count">(6)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="cat-accessories" name="category" value="accessories">
                            <label for="cat-accessories">Accessories</label>
                            <span class="filter-count">(15)</span>
                        </div>
                    </div>
                </div>

                <!-- Gender Filter -->
                <div class="filter-section">
                    <div class="filter-section-title">Gender</div>
                    <div class="filter-options">
                        <div class="filter-option">
                            <input type="checkbox" id="gender-men" name="gender" value="men">
                            <label for="gender-men">Men</label>
                            <span class="filter-count">(18)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="gender-women" name="gender" value="women">
                            <label for="gender-women">Women</label>
                            <span class="filter-count">(14)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="gender-unisex" name="gender" value="unisex">
                            <label for="gender-unisex">Unisex</label>
                            <span class="filter-count">(8)</span>
                        </div>
                    </div>
                </div>

                <!-- Sort By -->
                <div class="filter-section">
                    <div class="filter-section-title">Sort By</div>
                    <div class="filter-options">
                        <div class="filter-option">
                            <input type="radio" id="sort-featured" name="sort" value="featured" checked>
                            <label for="sort-featured">Featured</label>
                        </div>
                        <div class="filter-option">
                            <input type="radio" id="sort-newest" name="sort" value="newest">
                            <label for="sort-newest">Newest</label>
                        </div>
                        <div class="filter-option">
                            <input type="radio" id="sort-price-low" name="sort" value="price-low">
                            <label for="sort-price-low">Price: Low to High</label>
                        </div>
                        <div class="filter-option">
                            <input type="radio" id="sort-price-high" name="sort" value="price-high">
                            <label for="sort-price-high">Price: High to Low</label>
                        </div>
                    </div>
                </div>

                <!-- Color Filter -->
                <div class="filter-section">
                    <div class="filter-section-title">Color</div>
                    <div class="filter-options">
                        <div class="filter-option">
                            <input type="checkbox" id="color-black" name="color" value="black">
                            <label for="color-black">Black</label>
                            <span class="filter-count">(10)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="color-white" name="color" value="white">
                            <label for="color-white">White</label>
                            <span class="filter-count">(5)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="color-grey" name="color" value="grey">
                            <label for="color-grey">Grey</label>
                            <span class="filter-count">(7)</span>
                        </div>
                        <div class="filter-option">
                            <input type="checkbox" id="color-multi" name="color" value="multi">
                            <label for="color-multi">Multi</label>
                            <span class="filter-count">(4)</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="filter-modal-footer">
                <button class="btn btn-secondary" id="clearFilters">Clear All</button>
                <button class="btn btn-primary" id="applyFilters">Apply Filters</button>
            </div>
        </div>
    </div>

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

    <script>
        // Cart functionality
        let cart = [];
        const cartSidebar = document.getElementById('cartSidebar');
        const cartOverlay = document.getElementById('cartOverlay');
        const cartToggle = document.getElementById('cartToggle');
        const cartClose = document.getElementById('cartClose');
        const cartCount = document.getElementById('cartCount');
        const cartItemCount = document.getElementById('cartItemCount');
        const cartContentArea = document.getElementById('cartContentArea');

        function updateCartCount() {
            const count = cart.reduce((sum, item) => sum + item.quantity, 0);
            cartCount.textContent = count;
            cartItemCount.textContent = count;
        }

        function openCart() {
            cartSidebar.classList.add('open');
            cartOverlay.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeCart() {
            cartSidebar.classList.remove('open');
            cartOverlay.classList.remove('open');
            document.body.style.overflow = '';
        }

        function renderCart() {
            if (cart.length === 0) {
                cartContentArea.innerHTML = `
                    <div class="cart-empty">
                        <h3 class="cart-empty-title">Your cart is empty</h3>
                        <p class="cart-empty-text">Add items to get started</p>
                    </div>
                `;
                return;
            }

            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            
            cartContentArea.innerHTML = `
                <div class="cart-content">
                    ${cart.map((item, index) => `
                        <div class="cart-item">
                            <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                            <div class="cart-item-details">
                                <div class="cart-item-name">${item.name}</div>
                                <div class="cart-item-variant">${item.color} | ${item.size}</div>
                                <div class="cart-item-price">€ ${item.price.toFixed(2)}</div>
                                <div class="cart-item-actions">
                                    <button class="cart-item-remove" onclick="removeFromCart(${index})">Remove</button>
                                    <div class="cart-quantity">
                                        <button onclick="decreaseQuantity(${index})">−</button>
                                        <span>${item.quantity}</span>
                                        <button onclick="increaseQuantity(${index})">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `).join('')}

                    <div class="cart-gift">
                        <div class="cart-gift-title">Complimentary Gift Bag</div>
                        <div class="cart-gift-subtitle">Add free gift bag</div>
                        <div class="cart-gift-item">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=100&q=75" alt="Gift Bag" class="cart-gift-image">
                            <div>
                                <div class="cart-gift-name">PNS Paper Gift Bag</div>
                                <div class="cart-gift-color">Brown</div>
                            </div>
                            <a class="cart-gift-select">Select size</a>
                        </div>
                    </div>

                    <div class="cart-recommendations">
                        <div class="cart-recommendations-title">You may also like</div>
                        <div class="cart-recommendations-grid">
                            <div class="cart-recommendation-item">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/a4537ab8cea94765f8af7c303574821d73a9260a-3000x3750.png?w=200&q=75" alt="Recommendation" class="cart-recommendation-image">
                            </div>
                            <div class="cart-recommendation-item">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/7832c0a863d4188453bc3a1eb6b79b203835231d-1920x2400.png?w=200&q=75" alt="Recommendation" class="cart-recommendation-image">
                            </div>
                            <div class="cart-recommendation-item">
                                <img src="https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=200&q=75" alt="Recommendation" class="cart-recommendation-image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-footer">
                    <div class="cart-subtotal">
                        <span>Subtotal</span>
                        <span>€ ${subtotal.toFixed(2)}</span>
                    </div>
                    <div class="cart-payment-methods">
                        <span>Payment methods</span>
                        <svg class="cart-payment-icon" viewBox="0 0 48 32"><rect width="48" height="32" rx="4" fill="#1434CB"/><path d="M19.5 11h9v10h-9z" fill="#FF5F00"/><circle cx="16" cy="16" r="7" fill="#EB001B"/><circle cx="32" cy="16" r="7" fill="#F79E1B"/></svg>
                        <svg class="cart-payment-icon" viewBox="0 0 48 32"><rect width="48" height="32" rx="4" fill="#00579F"/><path d="M20 20l4-8 4 8h-8z" fill="#FFA500"/></svg>
                    </div>
                    <button class="cart-checkout" onclick="checkout()">Proceed to checkout</button>
                </div>
            `;
        }

        function increaseQuantity(index) {
            cart[index].quantity++;
            updateCartCount();
            renderCart();
        }

        function decreaseQuantity(index) {
            if (cart[index].quantity > 1) {
                cart[index].quantity--;
                updateCartCount();
                renderCart();
            }
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCartCount();
            renderCart();
        }

        function checkout() {
            alert('Proceeding to checkout...');
        }

        cartToggle.addEventListener('click', (e) => {
            e.preventDefault();
            openCart();
        });

        cartClose.addEventListener('click', closeCart);
        cartOverlay.addEventListener('click', closeCart);


   

   
        // Get elements
        const filterToggle = document.getElementById('filterToggle');
        const filterModal = document.getElementById('filterModal');
        const closeModal = document.getElementById('closeModal');
        const applyFilters = document.getElementById('applyFilters');
        const clearFilters = document.getElementById('clearFilters');

        // Open modal
        filterToggle.addEventListener('click', () => {
            filterModal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scroll
        });

        // Close modal functions
        function closeFilterModal() {
            filterModal.classList.remove('active');
            document.body.style.overflow = ''; // Restore scroll
        }

        // Close on X button
        closeModal.addEventListener('click', closeFilterModal);

        // Close on background click
        filterModal.addEventListener('click', (e) => {
            if (e.target === filterModal) {
                closeFilterModal();
            }
        });

        // Close on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && filterModal.classList.contains('active')) {
                closeFilterModal();
            }
        });

        // Apply filters
        applyFilters.addEventListener('click', () => {
            // Collect selected filters
            const selectedFilters = {
                categories: [],
                genders: [],
                colors: [],
                sort: document.querySelector('input[name="sort"]:checked')?.value
            };

            // Get all checked checkboxes
            document.querySelectorAll('input[name="category"]:checked').forEach(cb => {
                selectedFilters.categories.push(cb.value);
            });

            document.querySelectorAll('input[name="gender"]:checked').forEach(cb => {
                selectedFilters.genders.push(cb.value);
            });

            document.querySelectorAll('input[name="color"]:checked').forEach(cb => {
                selectedFilters.colors.push(cb.value);
            });

            console.log('Applied Filters:', selectedFilters);
            
            // Here you would filter your products
            // For demo, just close the modal
            closeFilterModal();
        });

        // Clear all filters
        clearFilters.addEventListener('click', () => {
            // Uncheck all checkboxes
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
                cb.checked = false;
            });

            // Reset to default sort
            document.getElementById('sort-featured').checked = true;

            console.log('Filters cleared');
        });

        // Filter Handler (from sub-header links)
        document.querySelectorAll('.sub-header-left a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                
                // Update active state
                document.querySelectorAll('.sub-header-left a').forEach(a => a.classList.remove('active'));
                e.target.classList.add('active');
                
                // Filter products
                const filter = e.target.getAttribute('href').replace('#', '');
                console.log('Quick filter:', filter);
                
                // Here you would filter your products
            });
        });
    </script>
</body>
</html>