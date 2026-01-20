// cart.js - File JavaScript untuk mengelola cart di semua halaman

// Inisialisasi cart dari localStorage
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Fungsi untuk menyimpan cart ke localStorage
function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Fungsi untuk update jumlah item di badge cart
function updateCartCount() {
    const count = cart.reduce((sum, item) => sum + item.quantity, 0);
    const cartCountElements = document.querySelectorAll('#cartCount, #cartItemCount');
    cartCountElements.forEach(el => {
        if (el) el.textContent = count;
    });
}

// Fungsi untuk membuka cart sidebar
function openCart() {
    const cartSidebar = document.getElementById('cartSidebar');
    const cartOverlay = document.getElementById('cartOverlay');
    if (cartSidebar && cartOverlay) {
        cartSidebar.classList.add('open');
        cartOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
        renderCart();
    }
}

// Fungsi untuk menutup cart sidebar
function closeCart() {
    const cartSidebar = document.getElementById('cartSidebar');
    const cartOverlay = document.getElementById('cartOverlay');
    if (cartSidebar && cartOverlay) {
        cartSidebar.classList.remove('open');
        cartOverlay.classList.remove('open');
        document.body.style.overflow = '';
    }
}

// Fungsi untuk render cart
function renderCart() {
    const cartContentArea = document.getElementById('cartContentArea');
    if (!cartContentArea) return;

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
                    <img src="paperbag.jpg?w=100&q=75" alt="Gift Bag" class="cart-gift-image">
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

// Fungsi untuk menambah quantity
function increaseQuantity(index) {
    cart[index].quantity++;
    saveCart();
    updateCartCount();
    renderCart();
}

// Fungsi untuk mengurangi quantity
function decreaseQuantity(index) {
    if (cart[index].quantity > 1) {
        cart[index].quantity--;
        saveCart();
        updateCartCount();
        renderCart();
    }
}

// Fungsi untuk menghapus item dari cart
function removeFromCart(index) {
    cart.splice(index, 1);
    saveCart();
    updateCartCount();
    renderCart();
}

// Fungsi untuk menambah gift bag
function addGiftBag() {
    const existingGiftBag = cart.find(item => item.name === "PNS Paper Gift Bag");
    
    if (existingGiftBag) {
        alert('Gift bag sudah ditambahkan ke cart!');
        return;
    }

    const giftBag = {
        name: "PNS Paper Gift Bag",
        color: "Brown",
        size: "Standard",
        price: 5000,
        quantity: 1,
        image: "paperbag.jpg?w=100&q=75"
    };

    cart.push(giftBag);
    saveCart();
    updateCartCount();
    renderCart();
}

// Fungsi utama untuk menambah produk ke cart
function addToCart(product) {
    // Cek apakah produk sudah ada di cart
    const existingItem = cart.find(item => 
        item.name === product.name && 
        item.size === product.size && 
        item.color === product.color
    );

    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push(product);
    }

    saveCart();
    updateCartCount();
    openCart();
}

// Event listeners untuk cart toggle dan close
document.addEventListener('DOMContentLoaded', function() {
    // Update cart count saat halaman dimuat
    updateCartCount();

    // Event listener untuk tombol buka cart
    const cartToggle = document.getElementById('cartToggle');
    if (cartToggle) {
        cartToggle.addEventListener('click', function(e) {
            e.preventDefault();
            openCart();
        });
    }

    // Event listener untuk tombol close cart
    const cartClose = document.getElementById('cartClose');
    if (cartClose) {
        cartClose.addEventListener('click', closeCart);
    }

    // Event listener untuk overlay
    const cartOverlay = document.getElementById('cartOverlay');
    if (cartOverlay) {
        cartOverlay.addEventListener('click', function(e) {
            if (e.target === cartOverlay) {
                closeCart();
            }
        });
    }
});