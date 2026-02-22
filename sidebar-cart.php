<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
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
            display: block;
            text-align: center;
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

        /* Demo Styles */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .demo-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .demo-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 40px;
        }

        .demo-cart-btn {
            background: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: red;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
        }

        .demo-product {
            border: 1px solid #e0e0e0;
            padding: 20px;
            margin-bottom: 20px;
        }

        .size-options {
            display: flex;
            gap: 10px;
            margin: 20px 0;
        }

        .size-option {
            border: 1px solid #e0e0e0;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .size-option:hover {
            border-color: #000;
        }

        .size-option.selected {
            background: #000;
            color: #fff;
            border-color: #000;
        }

        #addToCart {
            background: #000;
            color: #fff;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            width: 100%;
            font-size: 14px;
            letter-spacing: 1px;
        }

        #addToCart:disabled {
            background: #ccc;
            cursor: not-allowed;
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
    <div class="demo-container">
        <div class="demo-header">
            <h1>Demo Shopping Cart</h1>
            <button class="demo-cart-btn" id="cartToggle">
                Cart
                <span class="cart-badge" id="cartCount">0</span>
            </button>
        </div>

        <div class="demo-product">
            <h2>Women's T.K.O. Mechanism Jersey</h2>
            <p>T.K.O. Black Multi</p>
            <p><strong>Rp 205.000</strong></p>
            
            <div class="size-options">
                <div class="size-option" data-size="XS">XS</div>
                <div class="size-option" data-size="S">S</div>
                <div class="size-option" data-size="M">M</div>
                <div class="size-option" data-size="L">L</div>
                <div class="size-option" data-size="XL">XL</div>
            </div>

            <button id="addToCart" disabled>SELECT SIZE</button>
        </div>
    </div>

    <!-- Cart Sidebar -->
    <div class="cart-overlay" id="cartOverlay"></div>
    <aside class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <h2 class="cart-title">
                Cart (<span id="cartItemCount">0</span>)
            </h2>
            <button class="cart-close" id="cartClose">×</button>
        </div>

        <div id="cartContentArea">
            <!-- Cart content will be dynamically inserted here -->
        </div>
    </aside>

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
                                <div class="cart-item-price">Rp ${item.price.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</div>
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
                        <div class="cart-gift-title">Add Gift Bag?</div>
                        <div class="cart-gift-subtitle">Make your purchase special with our gift bag</div>
                        <div class="cart-gift-item">
                            <img src="img/paperbag.jpg?w=100&q=75" alt="Gift Bag" class="cart-gift-image">
                            <div style="flex: 1;">
                                <div class="cart-gift-name">PNS Paper Gift Bag</div>
                                <div class="cart-gift-color">Brown | Rp 5.000</div>
                            </div>
                            <button onclick="addGiftBag()" style="background: #000; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; font-size: 12px; transition: background 0.3s;" onmouseover="this.style.background='#333'" onmouseout="this.style.background='#000'">Add Bag</button>
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
                        <span>Rp ${subtotal.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</span>
                    </div>
                    <div class="cart-payment-methods">
                        <span>Payment methods</span>
                        <svg class="cart-payment-icon" viewBox="0 0 48 32"><rect width="48" height="32" rx="4" fill="#1434CB"/><path d="M19.5 11h9v10h-9z" fill="#FF5F00"/><circle cx="16" cy="16" r="7" fill="#EB001B"/><circle cx="32" cy="16" r="7" fill="#F79E1B"/></svg>
                        <svg class="cart-payment-icon" viewBox="0 0 48 32"><rect width="48" height="32" rx="4" fill="#00579F"/><path d="M20 20l4-8 4 8h-8z" fill="#FFA500"/></svg>
                    </div>
                    <a href="checkout.php" class="cart-checkout">PROCEED TO CHECKOUT</a>
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

        function addGiftBag() {
            // Cek apakah gift bag sudah ada di cart
            const existingGiftBag = cart.find(item => item.name === "PNS Paper Gift Bag");
            
            if (existingGiftBag) {
                alert('Gift bag sudah ditambahkan ke cart!');
                return;
            }

            // Tambahkan gift bag ke cart
            const giftBag = {
                name: "PNS Paper Gift Bag",
                color: "Brown",
                size: "Standard",
                price: 5000,
                quantity: 1,
                image: "img/paperbag.jpg?w=100&q=75"
            };

            cart.push(giftBag);
            updateCartCount();
            renderCart();
        }

        cartToggle.addEventListener('click', (e) => {
            e.preventDefault();
            openCart();
        });

        cartClose.addEventListener('click', closeCart);
        cartOverlay.addEventListener('click', (e) => {
            if (e.target === cartOverlay) {
                closeCart();
            }
        });

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
                    price: 205000,
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

        // Load cart saat halaman dimuat
        window.addEventListener('load', () => {
            renderCart();
        });
    </script>
</body>
</html>