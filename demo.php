<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Text - Pas Normal Studios</title>
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
            padding: 40px 0;
        }
        
        /* Running Text Container */
        .running-text-container {
            background: #000;
            color: #fff;
            padding: 12px 0;
            overflow: hidden;
            position: relative;
        }
        
        .running-text-wrapper {
            display: flex;
            white-space: nowrap;
            animation: scroll 30s linear infinite;
        }
        
        .running-text-content {
            display: flex;
            align-items: center;
            padding-right: 40px;
        }
        
        .running-text-item {
            display: inline-flex;
            align-items: center;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 0 20px;
        }
        
        .running-text-item::after {
            content: '•';
            margin-left: 40px;
            opacity: 0.5;
        }
        
        .running-text-item:last-child::after {
            display: none;
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        /* Variant 2: With Background Color */
        .running-text-white {
            background: #fff;
            color: #000;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
        }
        
        /* Variant 3: With Link Hover */
        .running-text-link {
            text-decoration: none;
            color: inherit;
            transition: opacity 0.3s;
        }
        
        .running-text-link:hover {
            opacity: 0.6;
        }
        
        /* Variant 4: Slow Speed */
        .speed-slow .running-text-wrapper {
            animation: scroll 60s linear infinite;
        }
        
        /* Variant 5: Fast Speed */
        .speed-fast .running-text-wrapper {
            animation: scroll 15s linear infinite;
        }
        
        /* Variant 6: With Icons/Emoji */
        .running-text-icon {
            margin-right: 8px;
            font-size: 16px;
        }
        
        /* Demo Section */
        .demo-section {
            margin: 40px 0;
        }
        
        .demo-title {
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 15px;
            color: #666;
        }
        
        .content-block {
            max-width: 1200px;
            margin: 40px auto;
            padding: 60px 40px;
            background: #fff;
            text-align: center;
        }
        
        .content-block h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .content-block p {
            color: #666;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <!-- Example 1: Basic Black Running Text -->
    <div class="demo-section">
        <div class="demo-title">Basic Black Running Text</div>
        <div class="running-text-container">
            <div class="running-text-wrapper">
                <div class="running-text-content">
                    <span class="running-text-item">Free Shipping on Orders Over €150</span>
                    <span class="running-text-item">New T.K.O. Collection Available Now</span>
                    <span class="running-text-item">International Cycling Club Member Benefits</span>
                    <span class="running-text-item">Order Deadlines for Holiday Delivery</span>
                    <span class="running-text-item">Premium Cycling Apparel</span>
                </div>
                <!-- Duplicate for seamless loop -->
                <div class="running-text-content" aria-hidden="true">
                    <span class="running-text-item">Free Shipping on Orders Over €150</span>
                    <span class="running-text-item">New T.K.O. Collection Available Now</span>
                    <span class="running-text-item">International Cycling Club Member Benefits</span>
                    <span class="running-text-item">Order Deadlines for Holiday Delivery</span>
                    <span class="running-text-item">Premium Cycling Apparel</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Example 2: White Background -->
    <div class="demo-section">
        <div class="demo-title">White Background Variant</div>
        <div class="running-text-container running-text-white">
            <div class="running-text-wrapper">
                <div class="running-text-content">
                    <span class="running-text-item">Winter Collection 2025</span>
                    <span class="running-text-item">Engineered for Performance</span>
                    <span class="running-text-item">Destination Everywhere</span>
                    <span class="running-text-item">Shop Men's & Women's</span>
                </div>
                <div class="running-text-content" aria-hidden="true">
                    <span class="running-text-item">Winter Collection 2025</span>
                    <span class="running-text-item">Engineered for Performance</span>
                    <span class="running-text-item">Destination Everywhere</span>
                    <span class="running-text-item">Shop Men's & Women's</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Example 3: With Clickable Links -->
    <div class="demo-section">
        <div class="demo-title">With Clickable Links</div>
        <div class="running-text-container">
            <div class="running-text-wrapper">
                <div class="running-text-content">
                    <a href="#" class="running-text-item running-text-link">Shop New Arrivals</a>
                    <a href="#" class="running-text-item running-text-link">Gift Guide 2025</a>
                    <a href="#" class="running-text-item running-text-link">Find Your Local Store</a>
                    <a href="#" class="running-text-item running-text-link">Join the Cycling Club</a>
                </div>
                <div class="running-text-content" aria-hidden="true">
                    <a href="#" class="running-text-item running-text-link">Shop New Arrivals</a>
                    <a href="#" class="running-text-item running-text-link">Gift Guide 2025</a>
                    <a href="#" class="running-text-item running-text-link">Find Your Local Store</a>
                    <a href="#" class="running-text-item running-text-link">Join the Cycling Club</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Example 4: Slow Speed -->
    <div class="demo-section">
        <div class="demo-title">Slow Speed (60s)</div>
        <div class="running-text-container speed-slow">
            <div class="running-text-wrapper">
                <div class="running-text-content">
                    <span class="running-text-item">Mechanism Collection</span>
                    <span class="running-text-item">Essential Series</span>
                    <span class="running-text-item">Off-Race Apparel</span>
                    <span class="running-text-item">Limited Edition</span>
                </div>
                <div class="running-text-content" aria-hidden="true">
                    <span class="running-text-item">Mechanism Collection</span>
                    <span class="running-text-item">Essential Series</span>
                    <span class="running-text-item">Off-Race Apparel</span>
                    <span class="running-text-item">Limited Edition</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Example 5: Fast Speed -->
    <div class="demo-section">
        <div class="demo-title">Fast Speed (15s)</div>
        <div class="running-text-container speed-fast">
            <div class="running-text-wrapper">
                <div class="running-text-content">
                    <span class="running-text-item">Flash Sale</span>
                    <span class="running-text-item">24 Hours Only</span>
                    <span class="running-text-item">Up to 30% Off</span>
                    <span class="running-text-item">Shop Now</span>
                </div>
                <div class="running-text-content" aria-hidden="true">
                    <span class="running-text-item">Flash Sale</span>
                    <span class="running-text-item">24 Hours Only</span>
                    <span class="running-text-item">Up to 30% Off</span>
                    <span class="running-text-item">Shop Now</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Example 6: With Icons/Emoji -->
    <div class="demo-section">
        <div class="demo-title">With Icons</div>
        <div class="running-text-container running-text-white">
            <div class="running-text-wrapper">
                <div class="running-text-content">
                    <span class="running-text-item">
                        <span class="running-text-icon">🚴</span>
                        Premium Cycling Gear
                    </span>
                    <span class="running-text-item">
                        <span class="running-text-icon">🌍</span>
                        Worldwide Shipping
                    </span>
                    <span class="running-text-item">
                        <span class="running-text-icon">⭐</span>
                        Award Winning Design
                    </span>
                    <span class="running-text-item">
                        <span class="running-text-icon">💯</span>
                        Satisfaction Guaranteed
                    </span>
                </div>
                <div class="running-text-content" aria-hidden="true">
                    <span class="running-text-item">
                        <span class="running-text-icon">🚴</span>
                        Premium Cycling Gear
                    </span>
                    <span class="running-text-item">
                        <span class="running-text-icon">🌍</span>
                        Worldwide Shipping
                    </span>
                    <span class="running-text-item">
                        <span class="running-text-icon">⭐</span>
                        Award Winning Design
                    </span>
                    <span class="running-text-item">
                        <span class="running-text-icon">💯</span>
                        Satisfaction Guaranteed
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Demo Content -->
    <div class="content-block">
        <h2>Running Text Examples</h2>
        <p>Scroll through the examples above to see different styles of running text animations. Perfect for announcements, promotions, and important messages on your website.</p>
    </div>

    <script>
        // Pause animation on hover
        document.querySelectorAll('.running-text-container').forEach(container => {
            container.addEventListener('mouseenter', () => {
                const wrapper = container.querySelector('.running-text-wrapper');
                wrapper.style.animationPlayState = 'paused';
            });
            
            container.addEventListener('mouseleave', () => {
                const wrapper = container.querySelector('.running-text-wrapper');
                wrapper.style.animationPlayState = 'running';
            });
        });
    </script>
</body>
</html>