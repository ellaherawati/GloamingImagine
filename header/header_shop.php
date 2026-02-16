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
    
    /* Header Main - mengikuti header.php */
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

    /* Search Box */
    .search-container {
        position: relative;
    }

    .search-toggle {
        color: #000;
        text-decoration: none;
        font-size: 14px;
        transition: opacity 0.3s;
        cursor: pointer;
    }

    .search-toggle:hover {
        opacity: 0.6;
    }

    .search-box {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 0;
        overflow: visible;
        z-index: 1000;
    }

    .search-box.active {
        width: 350px;
        opacity: 1;
        visibility: visible;
    }

    .search-input-wrapper {
        position: relative;
    }

    .search-input {
        width: 100%;
        padding: 10px 35px 10px 12px;
        border: none;
        outline: none;
        font-size: 14px;
        font-family: inherit;
    }

    .search-close {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
        color: #666;
        padding: 0;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .search-close:hover {
        color: #000;
    }

    /* Search Dropdown */
    .search-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #fff;
        border: 1px solid #e0e0e0;
        border-top: none;
        max-height: 400px;
        overflow-y: auto;
        display: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .search-dropdown.active {
        display: block;
    }

    .search-result-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        text-decoration: none;
        color: #000;
        border-bottom: 1px solid #f5f5f5;
        transition: background 0.2s;
    }

    .search-result-item:hover {
        background: #f8f8f8;
    }

    .search-result-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        background: #f5f5f5;
        flex-shrink: 0;
    }

    .search-result-info {
        flex: 1;
    }

    .search-result-name {
        font-size: 13px;
        font-weight: 500;
        margin-bottom: 2px;
    }

    .search-result-variant {
        font-size: 11px;
        color: #666;
    }

    .search-result-price {
        font-size: 13px;
        font-weight: 600;
        flex-shrink: 0;
    }

    .search-footer {
        padding: 12px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }

    .search-see-all {
        display: inline-block;
        padding: 8px 24px;
        background: #000;
        color: #fff;
        text-decoration: none;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: background 0.3s;
    }

    .search-see-all:hover {
        background: #333;
    }

    .search-no-results {
        padding: 24px;
        text-align: center;
        color: #666;
        font-size: 13px;
    }

    /* Sub Header - Layout: Kiri | Tengah | Kanan */
    .sub-header {
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff;
    }

    /* Kiri - Categories */
    .sub-header-left {
        display: flex;
        gap: 25px;
        align-items: center;
        flex: 1;
    }

    .sub-header-left a {
        color: #000;
        text-decoration: none;
        font-size: 14px;
        transition: opacity 0.3s;
        position: relative;
        padding-bottom: 15px;
    }

    .sub-header-left a.active {
        font-weight: 600;
    }

    .sub-header-left a.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: #000;
    }

    .sub-header-left a:hover {
        opacity: 0.6;
    }

    /* Tengah - Product Count */
    .sub-header-center {
        flex: 1;
        text-align: center;
    }

    .product-count {
        font-size: 14px;
        color: #666;
    }

    /* Kanan - Filter */
    .sub-header-right {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        gap: 20px;
        align-items: center;
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
        color: #000;
    }

    .filter-sort-btn:hover {
        opacity: 0.6;
    }

    .filter-sort-btn svg {
        width: 16px;
        height: 16px;
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
        min-width: 20px;
        text-align: center;
        font-size: 14px;
    }

    .cart-empty {
        text-align: center;
        padding: 60px 30px;
    }

    .cart-empty-icon {
        font-size: 48px;
        margin-bottom: 20px;
        opacity: 0.3;
    }

    .cart-empty-text {
        font-size: 14px;
        color: #666;
        margin-bottom: 30px;
    }

    .cart-footer {
        position: sticky;
        bottom: 0;
        background: #fff;
        padding: 30px;
        border-top: 1px solid #e0e0e0;
    }

    .cart-subtotal {
        display: flex;
        justify-content: space-between;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .cart-subtotal-label {
        font-weight: 500;
    }

    .cart-subtotal-amount {
        font-weight: 600;
    }

    .cart-checkout-btn {
        width: 100%;
        padding: 16px;
        background: #000;
        color: #fff;
        border: none;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .cart-checkout-btn:hover {
        background: #333;
    }

    .cart-continue-btn {
        width: 100%;
        padding: 16px;
        background: #fff;
        color: #000;
        border: 1px solid #000;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        cursor: pointer;
        margin-top: 15px;
        transition: all 0.3s;
    }

    .cart-continue-btn:hover {
        background: #000;
        color: #fff;
    }

    /* Shop Sidebar */
    .shop-overlay {
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

    .shop-overlay.open {
        opacity: 1;
        pointer-events: all;
    }

    .shop-sidebar {
        position: fixed;
        top: 0;
        left: -500px;
        width: 500px;
        height: 100vh;
        background: #fff;
        z-index: 10000;
        transition: left 0.4s ease;
        overflow-y: auto;
    }

    .shop-sidebar.open {
        left: 0;
    }

    .shop-sidebar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 25px 30px;
        border-bottom: 1px solid #e0e0e0;
        position: sticky;
        top: 0;
        background: #fff;
        z-index: 10;
    }

    .shop-sidebar-header span {
        font-size: 18px;
        font-weight: 600;
    }

    .shop-sidebar-close {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s;
    }

    .shop-sidebar-close:hover {
        opacity: 0.6;
    }

    .shop-sidebar-banner {
        position: relative;
        height: 300px;
        overflow: hidden;
    }

    .shop-sidebar-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .shop-sidebar-banner-label {
        position: absolute;
        bottom: 20px;
        left: 30px;
        background: #fff;
        padding: 8px 16px;
        font-size: 14px;
        font-weight: 600;
    }

    .shop-sidebar-body {
        padding: 30px;
    }

    .shop-section-title {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 15px;
        margin-top: 20px;
    }

    .shop-section-title:first-child {
        margin-top: 0;
    }

    .shop-category-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-bottom: 20px;
    }

    .shop-category-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        background: #f8f8f8;
        text-decoration: none;
        color: #000;
        font-size: 13px;
        transition: background 0.2s;
    }

    .shop-category-item:hover {
        background: #efefef;
    }

    .shop-category-icon {
        width: 36px;
        height: 36px;
        object-fit: contain;
        flex-shrink: 0;
        filter: grayscale(100%);
    }

    .shop-divider {
        height: 1px;
        background: #e8e8e8;
        margin: 8px 0 4px;
    }

    .shop-link-simple {
        display: block;
        padding: 11px 0;
        text-decoration: none;
        color: #000;
        font-size: 14px;
        border-bottom: 1px solid #f5f5f5;
        transition: opacity 0.2s;
    }
    
    .shop-link-simple:hover { 
        opacity: 0.5; 
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
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 25px 30px;
        border-bottom: 1px solid #e0e0e0;
        position: sticky;
        top: 0;
        background: #fff;
        z-index: 10;
    }

    .filter-modal-title {
        font-size: 18px;
        font-weight: 600;
    }

    .close-modal {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
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
        flex: 1;
        padding: 30px;
        overflow-y: auto;
    }

    .filter-section {
        margin-bottom: 30px;
    }

    .filter-section-title {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
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
        flex: 1;
        cursor: pointer;
        font-size: 14px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .filter-count {
        font-size: 12px;
        color: #999;
    }

    .filter-modal-footer {
        display: flex;
        gap: 15px;
        padding: 25px 30px;
        border-top: 1px solid #e0e0e0;
        position: sticky;
        bottom: 0;
        background: #fff;
    }

    .btn {
        flex: 1;
        padding: 14px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        border: none;
        cursor: pointer;
        transition: all 0.3s;
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
        border: 1px solid #000;
    }

    .btn-secondary:hover {
        background: #000;
        color: #fff;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .header-main {
            padding: 15px 20px;
        }

        .sub-header {
            padding: 12px 20px;
            flex-direction: column;
            gap: 15px;
        }

        .sub-header-left,
        .sub-header-center,
        .sub-header-right {
            width: 100%;
            justify-content: center;
        }

        .sub-header-center {
            order: -1;
        }

        .shop-sidebar,
        .cart-sidebar,
        .filter-modal-content {
            max-width: 100%;
        }
    }
</style>

<!-- Header -->
<header>
    <div class="header-main">
        <div class="header-left">
            <a href="#" id="shopToggle">Shop</a>
            <a href="#gift-guide">About</a>
            <a href="#explore">Campaign</a>
        </div>
        
        <div class="logo">
            <img src="logoheader.png" alt="Gloaming Imagine" class="logo-image">
        </div>
        
        <div class="header-right">
            <div class="search-container">
                <a class="search-toggle" id="searchToggle">Search</a>
                <div class="search-box" id="searchBox">
                    <div class="search-input-wrapper">
                        <input type="text" class="search-input" placeholder="Search products..." id="searchInput">
                        <button class="search-close" id="searchClose">×</button>
                    </div>
                    <div class="search-dropdown" id="searchDropdown">
                        <!-- Results will be populated here by JavaScript -->
                    </div>
                </div>
            </div>
            <a href="wishlist.php" style="position:relative; display:inline-block;">
                Wishlist
                <span id="wishlistHeaderCount" style="
                    display: none;
                    position: absolute;
                    top: -8px;
                    right: -12px;
                    background: #000;
                    color: #fff;
                    font-size: 9px;
                    font-weight: 700;
                    min-width: 16px;
                    height: 16px;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 16px;
                    padding: 0 3px;
                    letter-spacing: 0;
                ">0</span>
            </a>
            <a href="login.php">Account</a>
            <a href="#" id="cartToggle" style="position:relative; display:inline-block;">
                Cart
                <span id="cartCount" style="
                    display: none;
                    position: absolute;
                    top: -8px;
                    right: -12px;
                    background: #000;
                    color: #fff;
                    font-size: 9px;
                    font-weight: 700;
                    min-width: 16px;
                    height: 16px;
                    border-radius: 50%;
                    text-align: center;
                    line-height: 16px;
                    padding: 0 3px;
                    letter-spacing: 0;
                ">0</span>
            </a>
        </div>
    </div>

    <!-- Sub Header: Kiri (Categories) | Tengah (Product Count) | Kanan (Filter) -->
    <div class="sub-header">
        <!-- Kiri - Categories -->
        <div class="sub-header-left">
            <a href="#all" class="active">All</a>
        </div>

        <!-- Tengah - Product Count -->
        <div class="sub-header-center">
            <span class="product-count">125 Products</span>
        </div>

        <!-- Kanan - Filter -->
        <div class="sub-header-right">
            <button class="filter-sort-btn" id="filterToggle">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h18M3 10h18M3 16h18"/>
                </svg>
                Filter & Sort
            </button>
        </div>
    </div>
</header>

<!-- Filter Modal -->
<div class="filter-modal" id="filterModal">
    <div class="filter-modal-content">
        <div class="filter-modal-header">
            <h2 class="filter-modal-title">Filter & Sort</h2>
            <button class="close-modal" id="closeModal">×</button>
        </div>
        
        <div class="filter-modal-body">
            <!-- Sort Options -->
            <div class="filter-section">
                <h3 class="filter-section-title">Sort By</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="radio" name="sort" id="sort-featured" value="featured" checked>
                        <label for="sort-featured">Featured</label>
                    </div>
                    <div class="filter-option">
                        <input type="radio" name="sort" id="sort-newest" value="newest">
                        <label for="sort-newest">Newest</label>
                    </div>
                    <div class="filter-option">
                        <input type="radio" name="sort" id="sort-price-low" value="price-low">
                        <label for="sort-price-low">Price: Low to High</label>
                    </div>
                    <div class="filter-option">
                        <input type="radio" name="sort" id="sort-price-high" value="price-high">
                        <label for="sort-price-high">Price: High to Low</label>
                    </div>
                </div>
            </div>

            <!-- Category Filter -->
            <div class="filter-section">
                <h3 class="filter-section-title">Category</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="checkbox" name="category" id="cat-jerseys" value="jerseys">
                        <label for="cat-jerseys">
                            Jerseys
                            <span class="filter-count">(24)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="category" id="cat-bibs" value="bibs">
                        <label for="cat-bibs">
                            Bibs
                            <span class="filter-count">(18)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="category" id="cat-jackets" value="jackets">
                        <label for="cat-jackets">
                            Jackets
                            <span class="filter-count">(12)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="category" id="cat-accessories" value="accessories">
                        <label for="cat-accessories">
                            Accessories
                            <span class="filter-count">(32)</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Gender Filter -->
            <div class="filter-section">
                <h3 class="filter-section-title">Gender</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="checkbox" name="gender" id="gender-men" value="men">
                        <label for="gender-men">
                            Men
                            <span class="filter-count">(56)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="gender" id="gender-women" value="women">
                        <label for="gender-women">
                            Women
                            <span class="filter-count">(48)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="gender" id="gender-unisex" value="unisex">
                        <label for="gender-unisex">
                            Unisex
                            <span class="filter-count">(21)</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Color Filter -->
            <div class="filter-section">
                <h3 class="filter-section-title">Color</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="checkbox" name="color" id="color-black" value="black">
                        <label for="color-black">
                            Black
                            <span class="filter-count">(15)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="color" id="color-white" value="white">
                        <label for="color-white">
                            White
                            <span class="filter-count">(12)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="color" id="color-blue" value="blue">
                        <label for="color-blue">
                            Blue
                            <span class="filter-count">(8)</span>
                        </label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" name="color" id="color-red" value="red">
                        <label for="color-red">
                            Red
                            <span class="filter-count">(6)</span>
                        </label>
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

<!-- Shop Sidebar -->
<div class="shop-overlay" id="shopOverlay"></div>
<div class="shop-sidebar" id="shopSidebar">
    <div class="shop-sidebar-header">
        <span>Menu</span>
        <button class="shop-sidebar-close" id="shopClose">&#x2715;</button>
    </div>

    <!-- Banner New Arrivals -->
    <div class="shop-sidebar-banner">
        <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=800&q=75&fit=max&auto=format" alt="New Arrivals">
        <div class="shop-sidebar-banner-label">New Arrivals</div>
    </div>

    <div class="shop-sidebar-body">
        <!-- Cycling -->
        <div class="shop-section-title">Cycling</div>
        <div class="shop-category-grid">
            <a href="index.php?cat=bundles" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/b5eda6f4ea2aa30f180fdaf34173ea2c869ab848-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Bundles">
                Bundles
            </a>
            <a href="index.php?cat=jerseys" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=80&q=75" class="shop-category-icon" alt="Jerseys">
                Jerseys
            </a>
            <a href="index.php?cat=base-layers" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/679b741ab85a94215020e3abff3370be8b2497d5-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Base Layers">
                Base Layers
            </a>
            <a href="index.php?cat=bibs" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=80&q=75" class="shop-category-icon" alt="Bibs">
                Bibs
            </a>
            <a href="index.php?cat=jackets" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Jackets">
                Jackets &amp; Gilets
            </a>
            <a href="index.php?cat=speedsuits" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/a4537ab8cea94765f8af7c303574821d73a9260a-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Speedsuits">
                Speedsuits
            </a>
            <a href="index.php?cat=warmers" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/7832c0a863d4188453bc3a1eb6b79b203835231d-1920x2400.png?w=80&q=75" class="shop-category-icon" alt="Warmers">
                Arm &amp; Leg Warmers
            </a>
            <a href="index.php?cat=socks" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/5dad33c8ca27ed6431f29e29be3e29281c1f6305-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Socks">
                Socks
            </a>
            <a href="index.php?cat=accessories" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Accessories">
                Accessories
            </a>
            <a href="index.php?cat=helmets" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/c27f21f50e90f9a7113c759b116e0920418f8810-3200x4000.jpg?w=80&q=75" class="shop-category-icon" alt="Helmets">
                Helmets
            </a>
        </div>

        <div class="shop-divider"></div>

        <!-- Off-Race -->
        <div class="shop-section-title">Off-Race</div>
        <div class="shop-category-grid">
            <a href="index.php" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/b47abf6f65495dd2ac71e9e36efaebe3830e8ba8-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="T-Shirts">
                T-Shirts
            </a>
            <a href="index.php?cat=sweatshirts" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/beab8507d7c19cffdd27ddb1c3245bbf205df91b-1920x2400.jpg?w=80&q=75" class="shop-category-icon" alt="Sweatshirts">
                Sweatshirts &amp; Hoodies
            </a>
            <a href="index.php?cat=outerwear" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/e7d032fe7beb12ca00ca47a48b3c1be73432d3af-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Outerwear">
                Outerwear
            </a>
            <a href="index.php?cat=pants" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/f0546c4f4f756114e628b6fe520ba15f1dff1a20-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Pants">
                Pants &amp; Shorts
            </a>
            <a href="index.php?cat=gym" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/448b32fb36d29886c5cef13aede0ae95806a5d05-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Gym">
                Gym &amp; Training
            </a>
            <a href="index.php?cat=offrace-acc" class="shop-category-item" onclick="closeShopSidebar()">
                <img src="https://cdn.sanity.io/images/k15yl91v/production/9f2fd24d4d3d1ad79988a78b20c3e0e78463edb3-3000x3750.png?w=80&q=75" class="shop-category-icon" alt="Accessories">
                Accessories
            </a>
        </div>

        <div class="shop-divider"></div>

        <!-- Links tambahan -->
        <a href="#" class="shop-link-simple" onclick="closeShopSidebar()">Collections</a>
        <a href="#" class="shop-link-simple" onclick="closeShopSidebar()">Intended Use</a>
        <a href="#" class="shop-link-simple" onclick="closeShopSidebar()">About</a>
        <a href="#" class="shop-link-simple" onclick="closeShopSidebar()">Campaign</a>
    </div>
</div>

<script>
// ============ SHOP SIDEBAR LOGIC ============
function openShopSidebar() {
    document.getElementById('shopSidebar').classList.add('open');
    document.getElementById('shopOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeShopSidebar() {
    document.getElementById('shopSidebar').classList.remove('open');
    document.getElementById('shopOverlay').classList.remove('open');
    document.body.style.overflow = '';
}

document.addEventListener('DOMContentLoaded', function() {
    // ============ SEARCH BOX LOGIC WITH AUTOCOMPLETE ============
    const searchToggle = document.getElementById('searchToggle');
    const searchBox = document.getElementById('searchBox');
    const searchInput = document.getElementById('searchInput');
    const searchClose = document.getElementById('searchClose');
    const searchDropdown = document.getElementById('searchDropdown');

    // Load products dari products-data.js (sudah di-load sebagai script external)
    // products-data.js mendefinisikan variabel global 'products'
    // Map ke format yang dibutuhkan search autocomplete
    const searchProducts = (typeof products !== 'undefined') 
        ? products.map(p => ({ id: p.id, name: p.title, variant: '', price: p.price, image: p.img1 }))
        : [];


    if (searchToggle) {
        searchToggle.addEventListener('click', function(e) {
            e.preventDefault();
            searchBox.classList.add('active');
            searchInput.focus();
        });
    }

    if (searchClose) {
        searchClose.addEventListener('click', function() {
            searchBox.classList.remove('active');
            searchDropdown.classList.remove('active');
            searchInput.value = '';
        });
    }

    // Search input handler
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.trim().toLowerCase();
            
            if (searchTerm.length > 0) {
                // Filter products
                const results = searchProducts.filter(product => 
                    product.name.toLowerCase().includes(searchTerm) || 
                    product.variant.toLowerCase().includes(searchTerm)
                );
                
                displaySearchResults(results, searchTerm);
            } else {
                searchDropdown.classList.remove('active');
            }
        });

        // Handle Enter key
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = searchInput.value.trim();
                if (searchTerm) {
                    // Redirect to search results page
                    window.location.href = 'search_result.php?q=' + encodeURIComponent(searchTerm);
                }
            }
        });
    }

    function displaySearchResults(results, searchTerm) {
        if (results.length === 0) {
            searchDropdown.innerHTML = '<div class="search-no-results">No products found</div>';
            searchDropdown.classList.add('active');
            return;
        }

        // Show max 5 results in dropdown
        const displayResults = results.slice(0, 5);
        let html = '';
        
        displayResults.forEach(product => {
            html += `
                <a href="detail.php?id=${product.id}" class="search-result-item">
                    <img src="${product.image}" alt="${product.name}" class="search-result-image">
                    <div class="search-result-info">
                        <div class="search-result-name">${product.name}</div>
                        <div class="search-result-variant">${product.variant}</div>
                    </div>
                    <div class="search-result-price">${product.price}</div>
                </a>
            `;
        });

        // Add "See All Results" button if there are more results
        if (results.length > 5) {
            html += `
                <div class="search-footer">
                    <a href="search_result.php?q=${encodeURIComponent(searchTerm)}" class="search-see-all">
                        SEE ALL ${results.length} RESULTS
                    </a>
                </div>
            `;
        } else if (results.length > 0) {
            html += `
                <div class="search-footer">
                    <a href="search_result.php?q=${encodeURIComponent(searchTerm)}" class="search-see-all">
                        SEE ALL RESULTS
                    </a>
                </div>
            `;
        }

        searchDropdown.innerHTML = html;
        searchDropdown.classList.add('active');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchBox.contains(e.target) && !searchToggle.contains(e.target)) {
            searchBox.classList.remove('active');
            searchDropdown.classList.remove('active');
            searchInput.value = '';
        }
    });

    // Close search on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && searchBox.classList.contains('active')) {
            searchBox.classList.remove('active');
            searchDropdown.classList.remove('active');
            searchInput.value = '';
        }
    });

    // ============ SHOP SIDEBAR LOGIC ============
    // Shop toggle
    var shopToggle = document.getElementById('shopToggle');
    if (shopToggle) {
        shopToggle.addEventListener('click', function(e) {
            e.preventDefault();
            openShopSidebar();
        });
    }
    
    var shopClose = document.getElementById('shopClose');
    if (shopClose) shopClose.addEventListener('click', closeShopSidebar);

    var shopOverlay = document.getElementById('shopOverlay');
    if (shopOverlay) {
        shopOverlay.addEventListener('click', function(e) {
            if (e.target === shopOverlay) closeShopSidebar();
        });
    }

    // ============ FILTER MODAL LOGIC ============
    const filterToggle = document.getElementById('filterToggle');
    const filterModal = document.getElementById('filterModal');
    const closeModal = document.getElementById('closeModal');
    const applyFilters = document.getElementById('applyFilters');
    const clearFilters = document.getElementById('clearFilters');

    // Open modal
    if (filterToggle) {
        filterToggle.addEventListener('click', () => {
            filterModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }

    // Close modal functions
    function closeFilterModal() {
        filterModal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Close on X button
    if (closeModal) closeModal.addEventListener('click', closeFilterModal);

    // Close on background click
    if (filterModal) {
        filterModal.addEventListener('click', (e) => {
            if (e.target === filterModal) {
                closeFilterModal();
            }
        });
    }

    // Close on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && filterModal.classList.contains('active')) {
            closeFilterModal();
        }
    });

    // Apply filters
    if (applyFilters) {
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
    }

    // Clear all filters
    if (clearFilters) {
        clearFilters.addEventListener('click', () => {
            // Uncheck all checkboxes
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
                cb.checked = false;
            });

            // Reset to default sort
            const sortFeatured = document.getElementById('sort-featured');
            if (sortFeatured) sortFeatured.checked = true;

            console.log('Filters cleared');
        });
    }

    // ============ CATEGORY FILTER (SUB-HEADER) ============
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
});
</script>

<!-- Products data - HARUS load pertama sebelum script lain -->
<script src="products-data.js"></script>

<!-- cart.js -->
<script src="cart.js"></script>

<!-- wishlist.js -->
<script src="wishlist.js"></script>