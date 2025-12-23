<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gramicci Footer</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f5f5f5;
            padding: 50px 0;
        }

        /* Newsletter Section */
        .newsletter-section {
            background: #2c2c2c;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .newsletter-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .newsletter-title {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }

        .newsletter-subtitle {
            font-size: 14px;
            color: #b0b0b0;
            margin-bottom: 24px;
        }

        .newsletter-form {
            display: flex;
            gap: 12px;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-input {
            flex: 1;
            padding: 14px 18px;
            border: none;
            font-size: 14px;
            background: white;
        }

        .newsletter-input::placeholder {
            color: #999;
        }

        .newsletter-btn {
            padding: 14px 32px;
            background: white;
            color: #2c2c2c;
            border: none;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s, color 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .newsletter-btn:hover {
            background: #f0f0f0;
        }

        /* Main Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 20px 40px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #b0b0b0;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        /* Brand Section */
        .footer-brand {
            text-align: center;
            padding: 30px 0;
            border-top: 1px solid #333;
        }

        .footer-tagline {
            font-size: 12px;
            color: #b0b0b0;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .footer-slogan {
            font-size: 16px;
            color: white;
            font-weight: 500;
            margin-bottom: 20px;
        }

        /* Social Links */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
        }

        .social-link:hover {
            background: #555;
        }

        .social-link svg {
            width: 20px;
            height: 20px;
        }

        /* Bottom Bar */
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333;
            font-size: 12px;
            color: #888;
        }

        .footer-bottom-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .footer-bottom-links a {
            color: #888;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-bottom-links a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-btn {
                width: 100%;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }

            .footer-bottom-links {
                flex-direction: column;
                gap: 10px;
            }
        }

        @media (max-width: 480px) {
            .newsletter-title {
                font-size: 22px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div class="newsletter-content">
            <h2 class="newsletter-title">Newsletter</h2>
            <p class="newsletter-subtitle">Sign up for exclusive offers, original stories, events and more.</p>
            <div class="newsletter-form">
                <input 
                    type="email" 
                    class="newsletter-input" 
                    placeholder="Enter your email address"
                    id="newsletterEmail"
                >
                <button class="newsletter-btn" onclick="subscribeNewsletter()">Subscribe</button>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <!-- Customer Service Column -->
                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <ul class="footer-links">
                        <li><a href="#" onclick="return false">My Account</a></li>
                        <li><a href="#" onclick="return false">Returns & Exchanges</a></li>
                        <li><a href="#" onclick="return false">Shipping</a></li>
                        <li><a href="#" onclick="return false">International Shipping</a></li>
                        <li><a href="#" onclick="return false">Contact</a></li>
                        <li><a href="#" onclick="return false">FAQs</a></li>
                    </ul>
                </div>

                <!-- Company Column -->
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#" onclick="return false">Journal</a></li>
                        <li><a href="#" onclick="return false">About</a></li>
                        <li><a href="#" onclick="return false">Stockists</a></li>
                        <li><a href="#" onclick="return false">G-Tribe Rewards</a></li>
                        <li><a href="#" onclick="return false">Online Gift Card</a></li>
                    </ul>
                </div>

                <!-- Collections Column -->
                <div class="footer-column">
                    <h3>Collections</h3>
                    <ul class="footer-links">
                        <li><a href="#" onclick="return false">Fall & Winter 2025</a></li>
                        <li><a href="#" onclick="return false">Men's Mid Season</a></li>
                        <li><a href="#" onclick="return false">Women's Mid Season</a></li>
                        <li><a href="#" onclick="return false">Gramicci & Merrell</a></li>
                        <li><a href="#" onclick="return false">Sale</a></li>
                    </ul>
                </div>

                <!-- Shop Column -->
                <div class="footer-column">
                    <h3>Shop</h3>
                    <ul class="footer-links">
                        <li><a href="#" onclick="return false">All Products</a></li>
                        <li><a href="#" onclick="return false">Mens</a></li>
                        <li><a href="#" onclick="return false">Womens</a></li>
                        <li><a href="#" onclick="return false">Accessories</a></li>
                        <li><a href="#" onclick="return false">Footwear</a></li>
                    </ul>
                </div>
            </div>

            <!-- Brand Section -->
            <div class="footer-brand">
                <p class="footer-tagline">Original Since 1982</p>
                <p class="footer-slogan">Outdoor Lifestyle & Climbing Apparel</p>
                
                <!-- Social Links -->
                <div class="social-links">
                    <a href="#" class="social-link" onclick="return false" aria-label="Instagram">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" onclick="return false" aria-label="Facebook">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" onclick="return false" aria-label="Twitter">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" onclick="return false" aria-label="YouTube">
                        <svg fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <p>&copy; 2025 Gramicci. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <a href="#" onclick="return false">Privacy Policy</a>
                    <a href="#" onclick="return false">Terms of Service</a>
                    <a href="#" onclick="return false">Do Not Sell My Information</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Newsletter subscription
        function subscribeNewsletter() {
            const emailInput = document.getElementById('newsletterEmail');
            const email = emailInput.value.trim();
            
            if (!email) {
                alert('Please enter your email address');
                return;
            }
            
            if (!isValidEmail(email)) {
                alert('Please enter a valid email address');
                return;
            }
            
            console.log('Newsletter subscription:', email);
            alert('Thank you for subscribing to our newsletter!');
            emailInput.value = '';
        }

        // Email validation
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Allow Enter key to submit newsletter
        document.getElementById('newsletterEmail').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                subscribeNewsletter();
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add animation on scroll (optional)
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe footer columns
        document.querySelectorAll('.footer-column').forEach(column => {
            column.style.opacity = '0';
            column.style.transform = 'translateY(20px)';
            column.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(column);
        });
    </script>
</body>
</html>