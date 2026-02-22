<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Indonesia</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            background: white;
            color: #1a1a1a;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        .header-image {
            width: 100%;
            aspect-ratio: 17 / 1;
            overflow: hidden;
            position: relative;
        }

        .header-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .logo-subtitle {
            font-size: 9px;
            letter-spacing: 2px;
            color: #666;
            margin-top: 2px;
        }

        .cart-icon {
            position: absolute;
            right: 40px;
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        .main-container {
            display: grid;
            grid-template-columns: 58% 42%;
            min-height: calc(100vh - 80px);
        }

        .left-panel {
            padding: 50px 80px 80px 140px;
            background: white;
        }

        .right-panel {
            padding: 50px 60px 80px 60px;
            background: #000;
            color: white;
        }

        .express-section {
            margin-bottom: 35px;
        }

        .express-title {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 18px;
            text-align: center;
            color: #333;
        }

        .express-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .express-btn {
            padding: 15px 20px;
            background: #fafafa;
            border: 1px solid #d1d1d1;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s;
            color: #333;
        }

        .express-btn:hover {
            background: #f0f0f0;
            border-color: #b8b8b8;
        }

        .or-divider {
            text-align: center;
            margin: 28px 0;
            position: relative;
            color: #999;
            font-size: 13px;
        }

        .or-divider::before,
        .or-divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: calc(50% - 25px);
            height: 1px;
            background: #e0e0e0;
        }

        .or-divider::before {
            left: 0;
        }

        .or-divider::after {
            right: 0;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .form-field {
            margin-bottom: 14px;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-size: 12px;
            font-weight: 500;
            color: #4a4a4a;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #cfcfcf;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.2s;
            font-family: inherit;
            background: white;
            color: #1a1a1a;
        }

        input::placeholder {
            color: #999;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #1a1a1a;
            box-shadow: 0 0 0 1px #1a1a1a;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M10.293 3.293L6 7.586 1.707 3.293A1 1 0 00.293 4.707l5 5a1 1 0 001.414 0l5-5a1 1 0 10-1.414-1.414z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            padding-right: 40px;
        }

        select:disabled {
            background-color: #f5f5f5;
            cursor: not-allowed;
            opacity: 0.6;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 18px 0 32px 0;
        }

        .checkbox-wrapper input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-top: 2px;
            cursor: pointer;
            flex-shrink: 0;
        }

        .checkbox-wrapper label {
            font-size: 13px;
            font-weight: 400;
            cursor: pointer;
            color: #333;
            line-height: 1.4;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        /* Right Panel Styles */
        .order-product {
            display: flex;
            gap: 14px;
            margin-bottom: 20px;
        }

        .product-img-wrapper {
            width: 64px;
            height: 64px;
            background: #1a1a1a;
            border-radius: 8px;
            position: relative;
            flex-shrink: 0;
            border: 1px solid #2a2a2a;
        }

        .product-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .qty-badge {
            position: absolute;
            top: -7px;
            right: -7px;
            background: #5a5a5a;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 600;
            border: 2px solid #000;
        }

        .product-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .product-title {
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 3px;
            line-height: 1.3;
            color: #fff;
        }

        .product-variant {
            font-size: 12px;
            color: #999;
        }

        .product-total {
            font-size: 13px;
            font-weight: 600;
            margin-left: auto;
            align-self: center;
        }

        .promo-section {
            display: flex;
            gap: 10px;
            margin: 25px 0;
        }

        .promo-section input {
            flex: 1;
            background: #000;
            color: white;
            border: 1px solid #3a3a3a;
        }

        .promo-section input::placeholder {
            color: #5a5a5a;
        }

        .promo-section input:focus {
            border-color: #666;
            box-shadow: 0 0 0 1px #666;
        }

        .promo-btn {
            padding: 13px 22px;
            background: #1a1a1a;
            color: #ccc;
            border: 1px solid #3a3a3a;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            font-size: 13px;
            transition: all 0.2s;
            white-space: nowrap;
        }

        .promo-btn:hover {
            background: #2a2a2a;
            color: white;
        }

        .summary-divider {
            border-top: 1px solid #2a2a2a;
            padding-top: 20px;
            margin-top: 20px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 14px;
            font-size: 13px;
        }

        .summary-row .label {
            color: #ccc;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .info-circle {
            width: 15px;
            height: 15px;
            border: 1px solid #5a5a5a;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            cursor: help;
            color: #999;
        }

        .summary-row .amount {
            font-weight: 500;
            color: #fff;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 18px;
            margin-top: 18px;
            border-top: 1px solid #2a2a2a;
        }

        .total-label {
            font-size: 18px;
            font-weight: 600;
        }

        .total-amount {
            display: flex;
            align-items: baseline;
            gap: 8px;
        }

        .currency {
            font-size: 12px;
            color: #999;
            font-weight: 500;
        }

        .total-price {
            font-size: 20px;
            font-weight: 700;
        }

        .tax-note {
            font-size: 11px;
            color: #8a8a8a;
            margin-top: 6px;
        }

        .loading-text {
            color: #999;
            font-size: 13px;
            font-style: italic;
        }

        @media (max-width: 1100px) {
            .main-container {
                grid-template-columns: 1fr;
            }

            .right-panel {
                order: -1;
            }

            .left-panel {
                padding: 40px 30px;
            }

            .right-panel {
                padding: 40px 30px;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 18px 20px;
            }

            .logo-title {
                font-size: 16px;
            }

            .logo-subtitle {
                font-size: 8px;
            }

            .cart-icon {
                right: 20px;
            }

            .left-panel {
                padding: 30px 20px;
            }

            .right-panel {
                padding: 30px 20px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <?php include 'header/headercheckout.php'; ?>
    </header>

    <div class="main-container">
        <div class="left-panel">
            <form id="checkoutForm">
                <div class="section-title">Kontak</div>
                <div class="form-field">
                    <input type="email" placeholder="Email" required>
                </div>

                <div class="checkbox-wrapper">
                    <input type="checkbox" id="emailNews">
                    <label for="emailNews">Kirim saya penawaran dan berita terbaru via email</label>
                </div>

                <div class="section-title">Pengiriman</div>
                
                <div class="form-field">
                    <label class="form-label">Negara/Region</label>
                    <select id="countrySelect" required>
                        <option value="">Pilih Negara</option>
                        <option value="ID" selected>Indonesia</option>
                        <option value="MY">Malaysia</option>
                        <option value="SG">Singapore</option>
                        <option value="TH">Thailand</option>
                    </select>
                </div>

                <div id="indonesiaFields" style="display: block;">
                    <div class="form-field">
                        <label class="form-label">Provinsi</label>
                        <select id="provinceSelect" required>
                            <option value="">Pilih Provinsi</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-field">
                            <input type="text" id="firstName" placeholder="Nama Depan" required>
                        </div>
                        <div class="form-field">
                            <input type="text" id="lastName" placeholder="Nama Belakang" required>
                        </div>
                    </div>

                    <div class="form-field">
                        <label class="form-label">Kabupaten/Kota</label>
                        <select id="citySelect" required disabled>
                            <option value="">Pilih Provinsi Terlebih Dahulu</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label class="form-label">Kecamatan</label>
                        <select id="districtSelect" required disabled>
                            <option value="">Pilih Kabupaten/Kota Terlebih Dahulu</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label class="form-label">Kode Pos</label>
                        <select id="postalCodeSelect" required disabled>
                            <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <input type="text" id="address" placeholder="Alamat Lengkap (Nama Jalan, No. Rumah)" required>
                    </div>

                    <div class="form-field">
                        <input type="text" id="addressDetail" placeholder="Detail Alamat (Blok, RT/RW, Patokan) - opsional">
                    </div>

                    <div class="form-field">
                        <input type="tel" id="phone" placeholder="No. Telepon/HP" required>
                    </div>
                </div>

                <div class="checkbox-wrapper">
                    <input type="checkbox" id="saveInfo">
                    <label for="saveInfo">Simpan informasi ini untuk pembelian berikutnya</label>
                </div>
            </form>
        </div>

        <div class="right-panel">
            <!-- Produk dari cart akan dirender di sini oleh JS -->
            <div id="checkoutCartItems">
                <p class="loading-text">Memuat produk...</p>
            </div>

            <div class="promo-section">
                <input type="text" id="promoInput" placeholder="Kode diskon atau gift card">
                <button class="promo-btn" type="button" id="promoBtn">Gunakan</button>
            </div>

            <div class="summary-divider">
                <div class="summary-row">
                    <span class="label">Subtotal</span>
                    <span class="amount" id="checkoutSubtotal">Rp 0</span>
                </div>
                <div class="summary-row">
                    <span class="label">
                        Ongkos Kirim
                        <span class="info-circle" id="shippingInfoBtn">i</span>
                    </span>
                    <span class="amount" id="checkoutShipping">Masukkan alamat lengkap</span>
                </div>
            </div>

            <div class="total-row">
                <div class="total-label">Total</div>
                <div class="total-amount">
                    <span class="currency">IDR</span>
                    <span class="total-price" id="checkoutTotal">Rp 0</span>
                </div>
            </div>
            <div class="tax-note">Sudah termasuk pajak</div>
        </div>
    </div>

    <script>
        // ============================
        // CART - Baca dari localStorage
        // ============================
        function parsePrice(priceStr) {
            if (typeof priceStr === 'number') return priceStr;
            return parseInt(priceStr.replace(/[^0-9]/g, ''), 10) || 0;
        }

        function formatPrice(num) {
            return 'Rp ' + Math.round(num).toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        function renderCheckoutCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const container = document.getElementById('checkoutCartItems');
            const subtotalEl = document.getElementById('checkoutSubtotal');
            const totalEl = document.getElementById('checkoutTotal');

            if (cart.length === 0) {
                container.innerHTML = `
                    <div style="color:#999;font-size:13px;text-align:center;padding:20px 0;">
                        Keranjang kamu kosong. <a href="shop.php" style="color:#fff;text-decoration:underline;">Belanja dulu yuk!</a>
                    </div>`;
                subtotalEl.textContent = 'Rp 0';
                totalEl.textContent = 'Rp 0';
                return;
            }

            let subtotal = 0;
            let html = '';
            cart.forEach(item => {
                const price = parsePrice(item.price);
                const lineTotal = price * item.quantity;
                subtotal += lineTotal;
                html += `
                    <div class="order-product">
                        <div class="product-img-wrapper">
                            <img src="${item.image}" alt="${item.name}" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'64\' height=\'64\'%3E%3Crect fill=\'%232a2a2a\' width=\'64\' height=\'64\'/%3E%3C/svg%3E'">
                            <div class="qty-badge">${item.quantity}</div>
                        </div>
                        <div class="product-info">
                            <div class="product-title">${item.name}</div>
                            <div class="product-variant">${item.color && item.color !== '-' ? item.color + ' / ' : ''}Size ${item.size}</div>
                        </div>
                        <div class="product-total">${formatPrice(lineTotal)}</div>
                    </div>`;
            });

            container.innerHTML = html;
            subtotalEl.textContent = formatPrice(subtotal);
            totalEl.textContent = formatPrice(subtotal); // shipping dihitung terpisah
        }

        // Update total saat ongkir berubah
        function updateTotal(shippingCost) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const subtotal = cart.reduce((sum, item) => sum + (parsePrice(item.price) * item.quantity), 0);
            const total = subtotal + shippingCost;
            document.getElementById('checkoutTotal').textContent = formatPrice(total);
            document.getElementById('checkoutShipping').textContent = shippingCost > 0 ? formatPrice(shippingCost) : 'Masukkan alamat lengkap';
        }

        // ============================
        // DATA WILAYAH INDONESIA
        // ============================
        let indonesiaData = null;

        // Load data wilayah Indonesia
        async function loadIndonesiaData() {
            try {
                const response = await fetch('indonesia-regions.json');
                indonesiaData = await response.json();
                populateProvinces();
            } catch (error) {
                console.error('Error loading Indonesia data:', error);
                alert('Gagal memuat data wilayah Indonesia. Silakan refresh halaman.');
            }
        }

        // Populate provinces
        function populateProvinces() {
            const provinceSelect = document.getElementById('provinceSelect');
            provinceSelect.innerHTML = '<option value="">Pilih Provinsi</option>';
            
            if (indonesiaData && indonesiaData.provinces) {
                Object.keys(indonesiaData.provinces).forEach(key => {
                    const province = indonesiaData.provinces[key];
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = province.name;
                    provinceSelect.appendChild(option);
                });
            }
        }

        // Handle province selection
        document.getElementById('provinceSelect').addEventListener('change', function() {
            const provinceKey = this.value;
            const citySelect = document.getElementById('citySelect');
            const districtSelect = document.getElementById('districtSelect');
            const postalCodeSelect = document.getElementById('postalCodeSelect');

            // Reset dependent fields
            citySelect.innerHTML = '<option value="">Pilih Kabupaten/Kota</option>';
            districtSelect.innerHTML = '<option value="">Pilih Kabupaten/Kota Terlebih Dahulu</option>';
            postalCodeSelect.innerHTML = '<option value="">Pilih Kecamatan Terlebih Dahulu</option>';
            districtSelect.disabled = true;
            postalCodeSelect.disabled = true;

            if (provinceKey && indonesiaData.provinces[provinceKey]) {
                const cities = indonesiaData.provinces[provinceKey].cities;
                citySelect.disabled = false;

                Object.keys(cities).forEach(cityKey => {
                    const city = cities[cityKey];
                    const option = document.createElement('option');
                    option.value = cityKey;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
            } else {
                citySelect.disabled = true;
            }
        });

        // Handle city selection
        document.getElementById('citySelect').addEventListener('change', function() {
            const provinceKey = document.getElementById('provinceSelect').value;
            const cityKey = this.value;
            const districtSelect = document.getElementById('districtSelect');
            const postalCodeSelect = document.getElementById('postalCodeSelect');

            // Reset dependent fields
            districtSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
            postalCodeSelect.innerHTML = '<option value="">Pilih Kecamatan Terlebih Dahulu</option>';
            postalCodeSelect.disabled = true;

            if (cityKey && indonesiaData.provinces[provinceKey].cities[cityKey]) {
                const districts = indonesiaData.provinces[provinceKey].cities[cityKey].districts;
                districtSelect.disabled = false;

                Object.keys(districts).forEach(districtKey => {
                    const district = districts[districtKey];
                    const option = document.createElement('option');
                    option.value = districtKey;
                    option.textContent = district.name;
                    districtSelect.appendChild(option);
                });
            } else {
                districtSelect.disabled = true;
            }
        });

        // Handle district selection
        document.getElementById('districtSelect').addEventListener('change', function() {
            const provinceKey = document.getElementById('provinceSelect').value;
            const cityKey = document.getElementById('citySelect').value;
            const districtKey = this.value;
            const postalCodeSelect = document.getElementById('postalCodeSelect');

            // Reset postal code field
            postalCodeSelect.innerHTML = '<option value="">Pilih Kode Pos</option>';

            if (districtKey) {
                const district = indonesiaData.provinces[provinceKey].cities[cityKey].districts[districtKey];
                postalCodeSelect.disabled = false;

                district.postal_codes.forEach(code => {
                    const option = document.createElement('option');
                    option.value = code;
                    option.textContent = code;
                    postalCodeSelect.appendChild(option);
                });
            } else {
                postalCodeSelect.disabled = true;
            }
        });

        // Country selection handler
        document.getElementById('countrySelect').addEventListener('change', function() {
            const indonesiaFields = document.getElementById('indonesiaFields');
            if (this.value === 'ID') {
                indonesiaFields.style.display = 'block';
            } else {
                indonesiaFields.style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = {
                email: document.querySelector('input[type="email"]').value,
                country: document.getElementById('countrySelect').value,
                province: document.getElementById('provinceSelect').options[document.getElementById('provinceSelect').selectedIndex].text,
                city: document.getElementById('citySelect').options[document.getElementById('citySelect').selectedIndex].text,
                district: document.getElementById('districtSelect').options[document.getElementById('districtSelect').selectedIndex].text,
                postalCode: document.getElementById('postalCodeSelect').value,
                firstName: document.getElementById('firstName').value,
                lastName: document.getElementById('lastName').value,
                address: document.getElementById('address').value,
                addressDetail: document.getElementById('addressDetail').value,
                phone: document.getElementById('phone').value
            };

            console.log('Form Data:', formData);
            alert('Data berhasil disubmit! Lihat console untuk detail.');
        });

        // Promo code
        document.querySelector('.promo-btn').addEventListener('click', function() {
            const promoInput = document.querySelector('.promo-section input');
            if (promoInput.value.trim()) {
                alert(`Menerapkan kode: ${promoInput.value}`);
                setTimeout(() => {
                    alert('Kode diskon berhasil diterapkan!');
                    promoInput.value = '';
                }, 500);
            }
        });

        // Shipping info tooltip
        document.querySelector('.info-circle').addEventListener('click', function() {
            alert('Biaya pengiriman akan dihitung berdasarkan alamat pengiriman Anda');
        });

        // Promo code
        document.getElementById('promoBtn').addEventListener('click', function() {
            const promoInput = document.getElementById('promoInput');
            if (promoInput.value.trim()) {
                alert(`Kode diskon "${promoInput.value}" berhasil diterapkan!`);
                promoInput.value = '';
            } else {
                alert('Masukkan kode diskon terlebih dahulu.');
            }
        });

        // Shipping info tooltip
        document.getElementById('shippingInfoBtn').addEventListener('click', function() {
            alert('Ongkos kirim akan dihitung berdasarkan alamat pengiriman Anda');
        });

        // Initialize
        window.addEventListener('DOMContentLoaded', function() {
            renderCheckoutCart();  // Tampilkan produk dari cart
            loadIndonesiaData();   // Load dropdown wilayah
        });
    </script>
</body>
</html>