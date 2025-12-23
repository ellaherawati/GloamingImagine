<style>
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
            height: px;
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

 </style>
 
 <!-- Header -->
 <header>
        <div class="header-main">
            <div class="header-left">
                <a href="index.php">Shop</a>
                <a href="#gift-guide">About</a>
                <a href="#explore">Campaign</a>
            </div>
            
            <div class="logo">
                <img src="logoheader.png" alt="Gloaming Imagine" class="logo-image">
            </div>
            
            <div class="header-right">
                <a href="#search">Search</a>
                <a href="login.php">Account</a>
                <li><a href="#" id="cartToggle">CART (<span id="cartCount">0</span>)</a></li>
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
                        <div class="cart-gift-title">Add Gift Bag?</div>
                        <div class="cart-gift-subtitle">Make your purchase special with our gift bag</div>
                        <div class="cart-gift-item">
                            <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=100&q=75" alt="Gift Bag" class="cart-gift-image">
                            <div style="flex: 1;">
                                <div class="cart-gift-name">PNS Paper Gift Bag</div>
                                <div class="cart-gift-color">Brown | Rp 5.000</div>
                            </div>
                            <button onclick="addGiftBag()" style="background: #000; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; font-size: 12px;">Add Bag</button>
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
                  
                    <a href="checkout.php" target="_blank" class="cart-checkout">
  Checkout
</a>
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
                alert('Gift bag already added to cart!');
                return;
            }

            // Tambahkan gift bag ke cart
            const giftBag = {
                name: "PNS Paper Gift Bag",
                color: "Brown",
                size: "Standard",
                price: 5000,
                quantity: 1,
                image: "https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=100&q=75"
            };

            cart.push(giftBag);
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

    
    </script>