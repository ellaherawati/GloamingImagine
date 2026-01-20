<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloaming Imagine</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            background: #f5f5f5;
        }

        /* Newsletter Section */
        .newsletter-section {
            background: #fff;
            padding: 80px 40px;
            border-bottom: 1px solid #e5e5e5;
        }

        .newsletter-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }

        .newsletter-left {
            flex: 1;
        }

        .newsletter-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 16px;
            color: #000;
        }

        .newsletter-title {
            font-size: 32px;
            font-weight: 400;
            line-height: 1.3;
            color: #000;
            letter-spacing: -0.5px;
        }

        .newsletter-right {
            flex-shrink: 0;
        }

        .newsletter-btn {
            padding: 16px 48px;
            background: #000;
            color: #fff;
            border: 1px solid #000;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .newsletter-btn:hover {
            background: #fff;
            color: #000;
        }

        /* Main Footer */
        .footer {
            background: #fff;
            padding: 60px 40px 40px;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Footer Top - 3 Column Layout */
        .footer-top {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 80px;
            margin-bottom: 60px;
            padding-bottom: 60px;
            border-bottom: 1px solid #e5e5e5;
        }

        .footer-column h3 {
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #000;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #000;
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            transition: opacity 0.3s;
            display: inline-block;
        }

        .footer-links a:hover {
            opacity: 0.6;
        }

        /* Shipping Info */
        .shipping-info {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .shipping-info select {
            padding: 8px 32px 8px 12px;
            border: 1px solid #000;
            background: #fff;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L6 6L11 1' stroke='black' stroke-width='2'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
        }

        /* Footer Bottom */
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 30px;
        }

        .footer-legal {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .footer-legal a {
            color: #000;
            text-decoration: none;
            font-size: 13px;
            transition: opacity 0.3s;
        }

        .footer-legal a:hover {
            opacity: 0.6;
        }

        .footer-social {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .footer-social a {
            color: #000;
            text-decoration: none;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: opacity 0.3s;
        }

        .footer-social a:hover {
            opacity: 0.6;
        }

        .footer-copyright {
            font-size: 13px;
            color: #000;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .newsletter-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .newsletter-btn {
                width: 100%;
            }

            .footer-top {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }

            .footer-column:first-child {
                grid-column: 1 / -1;
            }
        }

        @media (max-width: 768px) {
            .newsletter-section {
                padding: 60px 24px;
            }

            .newsletter-title {
                font-size: 24px;
            }

            .footer {
                padding: 40px 24px;
            }

            .footer-top {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .footer-column:first-child {
                grid-column: 1;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 30px;
                align-items: flex-start;
            }

            .footer-legal {
                flex-direction: column;
                gap: 15px;
            }

            .footer-social {
                order: -1;
            }
        }
    </style>
</head>
<body>
    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="newsletter-container">
            <div class="newsletter-left">
                <div class="newsletter-label">NEWSLETTER</div>
                <h2 class="newsletter-title">Be the first to know about<br>upcoming drops, events and deals.</h2>
            </div>
            <div class="newsletter-right">
                <button class="newsletter-btn" onclick="openNewsletterSignup()">Sign Up</button>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Footer Top - 3 Columns -->
            <div class="footer-top">
                <!-- Column 1: Shipping -->
                <div class="footer-column">
                    <h3>Shipping To:</h3>
                    <div class="shipping-info">
                        <select id="shippingRegion">
                            <option value="rest-of-eu">REST OF EU</option>
                            <option value="usa">USA</option>
                            <option value="uk">UK</option>
                            <option value="asia">ASIA</option>
                            <option value="australia">AUSTRALIA</option>
                        </select>
                    </div>
                    <ul class="footer-links" style="margin-top: 30px;">
                        <li><a href="#">Destination Everywhere</a></li>
                        <li><a href="#">Sponsored Teams</a></li>
                        <li><a href="#">Find Stores</a></li>
                    </ul>
                </div>

                <!-- Column 2: Customer Care -->
                <div class="footer-column">
                    <h3>Customer Care</h3>
                    <ul class="footer-links">
                        <li><a href="#">Get in Touch</a></li>
                        <li><a href="#">Gift Guide</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Crash Replacement</a></li>
                        <li><a href="#">Care Guide</a></li>
                    </ul>
                </div>

                <!-- Column 3: About -->
                <div class="footer-column">
                    <h3>About Gloaming Imagine</h3>
                    <ul class="footer-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Stores</a></li>
                        <li><a href="#">International Cycling Club</a></li>
                        <li><a href="#">Impact & Responsibility</a></li>
                        <li><a href="#">Industry Programme</a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-legal">
                    <a href="#">TERMS & CONDITIONS</a>
                    <a href="#">PRIVACY POLICY</a>
                    <a href="#">COOKIE POLICY</a>
                    <a href="#">COOKIE POLICY SETTING</a>
                </div>
                
                <div class="footer-social">
                    <a href="#">INSTAGRAM</a>
                    <a href="#">YOUTUBE</a>
                    <a href="#">STRAVA</a>
                    <a href="#">LINKEDIN</a>
                </div>
                
                <div class="footer-copyright">
                    © GLOAMING IMAGINE 2026
                </div>
            </div>
        </div>
    </footer>

    <script>
        function openNewsletterSignup() {
            alert('Newsletter signup modal would open here');
            // In production, this would open a modal/popup for email signup
        }

        // Shipping region selector
        document.getElementById('shippingRegion').addEventListener('change', function(e) {
            console.log('Shipping region changed to:', e.target.value);
            // In production, this would update shipping options/prices
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
            });
        });
    </script>
</body>
</html>