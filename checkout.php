<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Pas Normal Studios</title>
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

        .header {
            background: white;
            padding: 20px 40px;
            border-bottom: 1px solid #e5e5e5;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .logo {
            text-align: center;
        }

        .logo-title {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 2.5px;
            margin-bottom: 0;
            line-height: 1.2;
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
    <header class="header">
        <div class="logo">
            <div class="logo-title">PAS NORMAL STUDIOS®</div>
            <div class="logo-subtitle">INTERNATIONAL CYCLING CLUB</div>
        </div>
        <svg class="cart-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 2L9 6M15 2L15 6M4 9L20 9M5 9L5 21L19 21L19 9"></path>
        </svg>
    </header>

    <div class="main-container">
        <div class="left-panel">
            <div class="express-section">
                <div class="express-title">Express checkout</div>
                <div class="express-buttons">
                    <button class="express-btn">Shop Pay</button>
                    <button class="express-btn">PayPal</button>
                </div>
                <div class="or-divider">OR</div>
            </div>

            <form id="checkoutForm">
                <div class="section-title">Contact</div>
                <div class="form-field">
                    <input type="email" placeholder="Email" required>
                </div>

                <div class="checkbox-wrapper">
                    <input type="checkbox" id="emailNews">
                    <label for="emailNews">Email me with news and offers</label>
                </div>

                <div class="section-title">Delivery</div>
                
                <div class="form-field">
                    <label class="form-label">Country/Region</label>
                    <select required>
                        <option value="AT">Austria</option>
                        <option value="AU">Australia</option>
                        <option value="BE">Belgium</option>
                        <option value="CA">Canada</option>
                        <option value="DK">Denmark</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                        <option value="HK">Hong Kong</option>
                        <option value="ID">Indonesia</option>
                        <option value="JP">Japan</option>
                        <option value="NL">Netherlands</option>
                        <option value="SG">Singapore</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <input type="text" placeholder="First name" required>
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="Last name" required>
                    </div>
                </div>

                <div class="form-field">
                    <input type="text" placeholder="Address" required>
                </div>

                <div class="form-field">
                    <input type="text" placeholder="Apartment, suite, etc. (optional)">
                </div>

                <div class="form-row">
                    <div class="form-field">
                        <input type="text" placeholder="Postal code" required>
                    </div>
                    <div class="form-field">
                        <input type="text" placeholder="City" required>
                    </div>
                </div>

                <div class="form-field">
                    <input type="tel" placeholder="Phone (optional)">
                </div>

                <div class="checkbox-wrapper">
                    <input type="checkbox" id="saveInfo">
                    <label for="saveInfo">Save this information for next time</label>
                </div>
            </form>
        </div>

        <div class="right-panel">
            <div class="order-product">
                <div class="product-img-wrapper">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='64' height='64'%3E%3Crect fill='%232a2a2a' width='64' height='64'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' fill='%23666' font-size='10' font-family='Arial'%3ETKO%3C/text%3E%3C/svg%3E" alt="Product">
                    <div class="qty-badge">1</div>
                </div>
                <div class="product-info">
                    <div class="product-title">Women's T.K.O. Mechanism Jersey - T.K.O. Black Multi</div>
                    <div class="product-variant">S</div>
                </div>
                <div class="product-total">€205.00</div>
            </div>

            <div class="promo-section">
                <input type="text" placeholder="Discount code or gift card">
                <button class="promo-btn" type="button">Apply</button>
            </div>

            <div class="summary-divider">
                <div class="summary-row">
                    <span class="label">Subtotal</span>
                    <span class="amount">€205.00</span>
                </div>
                <div class="summary-row">
                    <span class="label">
                        Shipping
                        <span class="info-circle">i</span>
                    </span>
                    <span class="amount">Enter shipping address</span>
                </div>
            </div>

            <div class="total-row">
                <div class="total-label">Total</div>
                <div class="total-amount">
                    <span class="currency">EUR</span>
                    <span class="total-price">€205.00</span>
                </div>
            </div>
            <div class="tax-note">Including €34.17 in taxes</div>
        </div>
    </div>

    <script>
        // Enhanced form interactions
        const inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], select');
        
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#1a1a1a';
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.style.borderColor = '#cfcfcf';
                }
            });
        });

        // Express checkout
        document.querySelectorAll('.express-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                alert(`Redirecting to ${this.textContent} checkout...`);
            });
        });

        // Promo code
        document.querySelector('.promo-btn').addEventListener('click', function() {
            const promoInput = document.querySelector('.promo-section input');
            if (promoInput.value.trim()) {
                alert(`Applying code: ${promoInput.value}`);
                // Simulate discount application
                setTimeout(() => {
                    alert('Discount applied successfully!');
                    promoInput.value = '';
                }, 500);
            }
        });

        // Form submission
        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate all required fields
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#ff4444';
                    isValid = false;
                } else {
                    field.style.borderColor = '#cfcfcf';
                }
            });
            
            if (isValid) {
                alert('Proceeding to shipping method selection...');
            }
        });

        // Shipping info tooltip
        document.querySelector('.info-circle').addEventListener('click', function() {
            alert('Shipping cost will be calculated based on your delivery address');
        });
    </script>
</body>
</html>