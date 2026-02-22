// cart.js - Mengelola cart di semua halaman via localStorage

let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Helper: parse harga dari string "Rp. 150.000" ke angka 150000
function parsePrice(priceStr) {
    if (typeof priceStr === 'number') return priceStr;
    return parseInt(priceStr.replace(/[^0-9]/g, ''), 10) || 0;
}

// Helper: format angka ke "Rp 150.000"
function formatPrice(num) {
    return 'Rp ' + Math.round(num).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function updateCartCount() {
    const count = cart.reduce((sum, item) => sum + item.quantity, 0);
    document.querySelectorAll('#cartCount, #cartItemCount').forEach(el => {
        if (!el) return;
        el.textContent = count;
        // Tampilkan badge hanya jika ada item, sembunyikan jika kosong
        el.style.display = count > 0 ? 'inline-block' : 'none';
    });
}

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

function closeCart() {
    const cartSidebar = document.getElementById('cartSidebar');
    const cartOverlay = document.getElementById('cartOverlay');
    if (cartSidebar && cartOverlay) {
        cartSidebar.classList.remove('open');
        cartOverlay.classList.remove('open');
        document.body.style.overflow = '';
    }
}

function renderCart() {
    const cartContentArea = document.getElementById('cartContentArea');
    if (!cartContentArea) return;

    if (cart.length === 0) {
        cartContentArea.innerHTML = `
            <div class="cart-empty">
                <h3 class="cart-empty-title">Keranjang kosong</h3>
                <p class="cart-empty-text">Tambahkan produk untuk memulai</p>
            </div>
        `;
        return;
    }

    const subtotal = cart.reduce((sum, item) => sum + (parsePrice(item.price) * item.quantity), 0);

    cartContentArea.innerHTML = `
        <div class="cart-content">
            ${cart.map((item, index) => `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                    <div class="cart-item-details">
                        <div class="cart-item-name">${item.name}</div>
                        <div class="cart-item-variant">${item.color ? item.color + ' | ' : ''}${item.size}</div>
                        <div class="cart-item-price">${formatPrice(parsePrice(item.price))}</div>
                        <div class="cart-item-actions">
                            <button class="cart-item-remove" onclick="removeFromCart(${index})">Hapus</button>
                            <div class="cart-quantity">
                                <button onclick="decreaseQuantity(${index})">-</button>
                                <span>${item.quantity}</span>
                                <button onclick="increaseQuantity(${index})">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('')}

            <div class="cart-gift">
                <div class="cart-gift-title">Tambah Gift Bag?</div>
                <div class="cart-gift-subtitle">Jadikan pembelianmu istimewa dengan gift bag kami</div>
                <div class="cart-gift-item">
                    <img src="img/paperbag.jpg" alt="Gift Bag" class="cart-gift-image">
                    <div style="flex:1;">
                        <div class="cart-gift-name">PNS Paper Gift Bag</div>
                        <div class="cart-gift-color">Brown | Rp 5.000</div>
                    </div>
                    <button onclick="addGiftBag()" style="background:#000;color:#fff;padding:8px 16px;border:none;border-radius:4px;cursor:pointer;font-size:12px;" onmouseover="this.style.background='#333'" onmouseout="this.style.background='#000'">Tambah</button>
                </div>
            </div>

            <div class="cart-recommendations">
                <div class="cart-recommendations-title">Mungkin kamu suka</div>
                <div class="cart-recommendations-grid">
                    <div class="cart-recommendation-item"><img src="https://cdn.sanity.io/images/k15yl91v/production/a4537ab8cea94765f8af7c303574821d73a9260a-3000x3750.png?w=200&q=75" alt="Rekomendasi" class="cart-recommendation-image"></div>
                    <div class="cart-recommendation-item"><img src="https://cdn.sanity.io/images/k15yl91v/production/7832c0a863d4188453bc3a1eb6b79b203835231d-1920x2400.png?w=200&q=75" alt="Rekomendasi" class="cart-recommendation-image"></div>
                    <div class="cart-recommendation-item"><img src="https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=200&q=75" alt="Rekomendasi" class="cart-recommendation-image"></div>
                </div>
            </div>
        </div>

        <div class="cart-footer">
            <div class="cart-subtotal">
                <span>Subtotal</span>
                <span>${formatPrice(subtotal)}</span>
            </div>
            <div class="cart-payment-methods">
                <span>Metode Pembayaran</span>
                <svg class="cart-payment-icon" viewBox="0 0 48 32"><rect width="48" height="32" rx="4" fill="#1434CB"/><path d="M19.5 11h9v10h-9z" fill="#FF5F00"/><circle cx="16" cy="16" r="7" fill="#EB001B"/><circle cx="32" cy="16" r="7" fill="#F79E1B"/></svg>
            </div>
            <a href="checkout.php" class="cart-checkout">LANJUT KE CHECKOUT</a>
        </div>
    `;
}

function increaseQuantity(index) {
    cart[index].quantity++;
    saveCart();
    updateCartCount();
    renderCart();
}

function decreaseQuantity(index) {
    if (cart[index].quantity > 1) {
        cart[index].quantity--;
        saveCart();
        updateCartCount();
        renderCart();
    }
}

function removeFromCart(index) {
    cart.splice(index, 1);
    saveCart();
    updateCartCount();
    renderCart();
}

function addGiftBag() {
    if (cart.find(item => item.name === 'PNS Paper Gift Bag')) {
        alert('Gift bag sudah ada di keranjang!');
        return;
    }
    cart.push({ name: 'PNS Paper Gift Bag', color: 'Brown', size: 'Standard', price: 5000, quantity: 1, image: 'img/paperbag.jpg' });
    saveCart();
    updateCartCount();
    renderCart();
}

// Fungsi utama: tambah produk ke cart
function addToCart(product) {
    product.price = parsePrice(product.price);

    const existing = cart.find(item =>
        item.name === product.name &&
        item.size === product.size &&
        item.color === product.color
    );

    if (existing) {
        existing.quantity++;
    } else {
        product.quantity = product.quantity || 1;
        cart.push(product);
    }

    saveCart();
    updateCartCount();
    openCart();
}

// Inisialisasi saat halaman dimuat
document.addEventListener('DOMContentLoaded', function () {
    updateCartCount();

    const cartToggle = document.getElementById('cartToggle');
    if (cartToggle) {
        cartToggle.addEventListener('click', function (e) {
            e.preventDefault();
            openCart();
        });
    }

    const cartClose = document.getElementById('cartClose');
    if (cartClose) {
        cartClose.addEventListener('click', closeCart);
    }

    const cartOverlay = document.getElementById('cartOverlay');
    if (cartOverlay) {
        cartOverlay.addEventListener('click', function (e) {
            if (e.target === cartOverlay) closeCart();
        });
    }
});