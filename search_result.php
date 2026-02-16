<?php
// Get search query from URL
$searchQuery = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '';

// Dummy products data - static array for demo purposes
$allProducts = [
    // Bibs
    ['id' => 1, 'name' => "Men's Mechanism Pro Bibs", 'variant' => 'Iron Grey - 2 colours', 'price' => '€ 300,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 2, 'name' => "Men's Mechanism Pro Bibs", 'variant' => 'Black - 2 colours', 'price' => '€ 300,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 3, 'name' => "Men's PAS Mechanism Pro Bibs", 'variant' => 'Navy - 1 colour', 'price' => '€ 320,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => 'NEW ARRIVAL'],
    ['id' => 4, 'name' => "Women's Mechanism Pro Bibs", 'variant' => 'Black - 3 colours', 'price' => '€ 300,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => 'RESTOCKED'],
    ['id' => 5, 'name' => "Men's Mechanism Bibs", 'variant' => 'Steel - 9 colours', 'price' => '€ 260,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 6, 'name' => "Women's Mechanism Bibs", 'variant' => 'Steel - 8 colours', 'price' => '€ 260,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 7, 'name' => "Men's Essential Bibs", 'variant' => 'Light Olive - 5 colours', 'price' => '€ 220,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 8, 'name' => "Women's Essential Bibs", 'variant' => 'Light Olive - 5 colours', 'price' => '€ 220,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 9, 'name' => "Men's Thermal Bibs", 'variant' => 'Black - 4 colours', 'price' => '€ 280,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 10, 'name' => "Women's Thermal Bibs", 'variant' => 'Navy - 3 colours', 'price' => '€ 280,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/4e44e9497dee224c1bfbde346726121e50b6e537-1920x2400.png?w=400', 'badge' => ''],
    
    // Jerseys
    ['id' => 11, 'name' => "Men's Mechanism Jersey", 'variant' => 'Black Multi - 5 colours', 'price' => '€ 180,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 12, 'name' => "Women's Mechanism Jersey", 'variant' => 'Dark Purple - 5 colours', 'price' => '€ 180,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=400', 'badge' => 'NEW ARRIVAL'],
    ['id' => 13, 'name' => "Men's Essential Jersey", 'variant' => 'Navy - 4 colours', 'price' => '€ 150,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 14, 'name' => "Women's Essential Jersey", 'variant' => 'White - 4 colours', 'price' => '€ 150,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 15, 'name' => "Men's Pro Jersey", 'variant' => 'Steel - 6 colours', 'price' => '€ 200,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/906a70b737b93481ff7d503296d84fcf296a0af2-1920x2400.png?w=400', 'badge' => 'RESTOCKED'],
    
    // Jackets
    ['id' => 16, 'name' => "Men's Off-Race Utility Jacket", 'variant' => 'Steel - 2 colours', 'price' => '€ 350,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=400', 'badge' => 'NEW ARRIVAL'],
    ['id' => 17, 'name' => "Women's Off-Race Utility Jacket", 'variant' => 'Black - 2 colours', 'price' => '€ 350,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=400', 'badge' => ''],
    ['id' => 18, 'name' => "Men's Rain Jacket", 'variant' => 'Navy - 3 colours', 'price' => '€ 280,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=400', 'badge' => ''],
    ['id' => 19, 'name' => "Women's Rain Jacket", 'variant' => 'Dark Olive - 3 colours', 'price' => '€ 280,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/833f664f6599960e45e465265f64b7129ff40d0c-3000x3750.png?w=400', 'badge' => ''],
    
    // Accessories
    ['id' => 20, 'name' => "Cycling Cap", 'variant' => 'Black - 1 colour', 'price' => '€ 35,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/148cf7fbd34a0256fb1708fab10d489b21a5bf87-1920x2400.jpg?w=400', 'badge' => ''],
    ['id' => 21, 'name' => "Arm Warmers", 'variant' => 'Black - 2 colours', 'price' => '€ 45,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/7832c0a863d4188453bc3a1eb6b79b203835231d-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 22, 'name' => "Leg Warmers", 'variant' => 'Black - 2 colours', 'price' => '€ 55,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/7832c0a863d4188453bc3a1eb6b79b203835231d-1920x2400.png?w=400', 'badge' => ''],
    ['id' => 23, 'name' => "Cycling Socks", 'variant' => 'White - 4 colours', 'price' => '€ 25,00', 'image' => 'https://cdn.sanity.io/images/k15yl91v/production/5dad33c8ca27ed6431f29e29be3e29281c1f6305-1920x2400.jpg?w=400', 'badge' => ''],
];

// Filter products based on search query (case-insensitive)
$searchResults = [];
if (!empty($searchQuery)) {
    foreach ($allProducts as $product) {
        if (stripos($product['name'], $searchQuery) !== false || 
            stripos($product['variant'], $searchQuery) !== false) {
            $searchResults[] = $product;
        }
    }
}

$resultCount = count($searchResults);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search results: <?php echo $searchQuery; ?> - Gloaming Imagine</title>
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
        .search-results-container {
            max-width: 2000px;
            margin: 0 auto;
            padding: 40px 40px 80px;
        }

        .search-title {
            font-size: 32px;
            font-weight: 400;
            margin-bottom: 40px;
        }

        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 30px;
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
        }

        .wishlist-btn:hover {
            background: #fff;
            transform: scale(1.1);
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

        .no-results {
            text-align: center;
            padding: 80px 20px;
        }

        .no-results-icon {
            font-size: 48px;
            margin-bottom: 20px;
            opacity: 0.3;
        }

        .no-results-title {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .no-results-text {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .back-btn {
            display: inline-block;
            padding: 12px 32px;
            background: #000;
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: background 0.3s;
        }

        .back-btn:hover {
            background: #333;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .search-results-container {
                padding: 30px 20px;
            }

            .search-title {
                font-size: 24px;
                margin-bottom: 30px;
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

    <div class="search-results-container">
        <h1 class="search-title">Search results: <?php echo $searchQuery; ?></h1>

        <?php if ($resultCount > 0): ?>
            <div class="products-grid">
                <?php foreach ($searchResults as $product): ?>
                    <a href="detail.php?id=<?php echo $product['id']; ?>" class="product-card">
                        <div class="product-image-wrapper">
                            <?php if (!empty($product['badge'])): ?>
                                <div class="product-badge"><?php echo $product['badge']; ?></div>
                            <?php endif; ?>
                            <button class="wishlist-btn" onclick="event.preventDefault(); toggleWishlist(<?php echo $product['id']; ?>)">
                                ♡
                            </button>
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
                        </div>
                        <div class="product-info">
                            <div class="product-name"><?php echo $product['name']; ?></div>
                            <div class="product-variant"><?php echo $product['variant']; ?></div>
                            <div class="product-price"><?php echo $product['price']; ?></div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="no-results">
                <div class="no-results-icon">🔍</div>
                <h2 class="no-results-title">No results found for "<?php echo $searchQuery; ?>"</h2>
                <p class="no-results-text">Try searching with different keywords or browse our collections</p>
                <a href="index.php" class="back-btn">BACK TO SHOP</a>
            </div>
        <?php endif; ?>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script>
        function toggleWishlist(productId) {
            console.log('Toggle wishlist for product:', productId);
            // Add your wishlist functionality here
        }
    </script>
</body>
</html>