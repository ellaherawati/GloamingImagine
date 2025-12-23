<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Account</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Left Side - Slider */
        .slider-section {
            flex: 1;
            position: relative;
            overflow: hidden;
            background: #000;
        }

        .slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slide.active {
            opacity: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.2);
        }

        .slide-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 48px;
            color: white;
        }

        .slide-title {
            font-size: 32px;
            font-weight: 300;
            line-height: 1.3;
            max-width: 500px;
        }

        /* Navigation Arrows */
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 50%;
            color: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            z-index: 10;
        }

        .nav-arrow:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .nav-arrow.prev {
            left: 24px;
        }

        .nav-arrow.next {
            right: 24px;
        }

        /* Slide Indicators */
        .slide-indicators {
            position: absolute;
            bottom: 24px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .indicator {
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.5);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .indicator.active {
            width: 32px;
            background: white;
        }

        /* Right Side - Form */
        .form-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px;
            background: white;
        }

        .form-container {
            width: 100%;
            max-width: 448px;
        }

        /* Toggle Buttons */
        .toggle-buttons {
            display: flex;
            border-bottom: 1px solid #e5e7eb;
            margin-bottom: 32px;
        }

        .toggle-btn {
            flex: 1;
            padding: 16px 0;
            background: none;
            border: none;
            font-size: 14px;
            font-weight: 500;
            color: #9ca3af;
            cursor: pointer;
            transition: color 0.3s;
            position: relative;
        }

        .toggle-btn:hover {
            color: #6b7280;
        }

        .toggle-btn.active {
            color: #000;
        }

        .toggle-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            right: 0;
            height: 2px;
            background: #000;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: #000;
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
        }

        .checkbox {
            width: 16px;
            height: 16px;
            margin-top: 2px;
            cursor: pointer;
        }

        .checkbox-label {
            margin-left: 8px;
            font-size: 12px;
            color: #6b7280;
            line-height: 1.4;
        }

        /* Remember & Forgot */
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .remember-forgot a {
            color: #6b7280;
            text-decoration: underline;
        }

        .remember-forgot a:hover {
            color: #000;
        }

        /* Submit Button */
        .submit-btn {
            width: 100%;
            padding: 16px;
            background: #000;
            color: white;
            border: none;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #1f2937;
        }

        /* Footer Text */
        .form-footer {
            text-align: center;
            margin-top: 32px;
            font-size: 14px;
            color: #6b7280;
        }

        .form-footer button {
            background: none;
            border: none;
            color: #000;
            font-weight: 500;
            cursor: pointer;
            text-decoration: underline;
        }

        .form-footer button:hover {
            color: #374151;
        }

        .hidden {
            display: none;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .slider-section {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Side - Slider -->
        <div class="slider-section">
            <div class="slide active">
                <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?w=1200&h=1600&fit=crop" alt="Slide 1">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h2 class="slide-title">Exclusive product launches and promotions</h2>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1541625602330-2277a4c46182?w=1200&h=1600&fit=crop" alt="Slide 2">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h2 class="slide-title">Easy returns and order management</h2>
                </div>
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1534787238916-9ba6764efd4f?w=1200&h=1600&fit=crop" alt="Slide 3">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h2 class="slide-title">Sign up to rides and events around the world</h2>
                </div>
            </div>

            <button class="nav-arrow prev" onclick="changeSlide(-1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>
            <button class="nav-arrow next" onclick="changeSlide(1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>

            <div class="slide-indicators">
                <button class="indicator active" onclick="goToSlide(0)"></button>
                <button class="indicator" onclick="goToSlide(1)"></button>
                <button class="indicator" onclick="goToSlide(2)"></button>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="form-section">
            <div class="form-container">
                <!-- Toggle Buttons -->
                <div class="toggle-buttons">
                    <button class="toggle-btn active" onclick="toggleForm('login')">LOGIN</button>
                    <button class="toggle-btn" onclick="toggleForm('register')">CREATE ACCOUNT</button>
                </div>

                <!-- Login Form -->
                <div id="loginForm">
                    <div class="form-group">
                        <label class="form-label">EMAIL *</label>
                        <input type="email" class="form-input" id="loginEmail" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">PASSWORD *</label>
                        <input type="password" class="form-input" id="loginPassword" required>
                    </div>
                    <div class="remember-forgot">
                        <label class="checkbox-group">
                            <input type="checkbox" class="checkbox" id="rememberMe">
                            <span class="checkbox-label">Remember me</span>
                        </label>
                        <a href="#" onclick="event.preventDefault()">Forgot password?</a>
                    </div>
                    <button class="submit-btn" onclick="handleLogin()">LOGIN</button>
                    <div class="form-footer">
                        Don't have an account? 
                        <button onclick="toggleForm('register')">Create one</button>
                    </div>
                </div>

                <!-- Register Form -->
                <div id="registerForm" class="hidden">
                    <div class="form-group">
                        <label class="form-label">FIRST NAME *</label>
                        <input type="text" class="form-input" id="firstName" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">LAST NAME *</label>
                        <input type="text" class="form-input" id="lastName" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">EMAIL *</label>
                        <input type="email" class="form-input" id="registerEmail" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">PASSWORD *</label>
                        <input type="password" class="form-input" id="registerPassword" required>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-group">
                            <input type="checkbox" class="checkbox" id="agreeTerms" required>
                            <span class="checkbox-label">I agree to the terms and conditions and privacy policy *</span>
                        </label>
                        <label class="checkbox-group">
                            <input type="checkbox" class="checkbox" id="newsletter">
                            <span class="checkbox-label">Subscribe to newsletter for exclusive updates and offers</span>
                        </label>
                    </div>
                    <button class="submit-btn" onclick="handleRegister()">CREATE ACCOUNT</button>
                    <div class="form-footer">
                        Already have an account? 
                        <button onclick="toggleForm('login')">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Slider functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('.indicator');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));
            
            currentSlide = (index + totalSlides) % totalSlides;
            
            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
        }

        function changeSlide(direction) {
            showSlide(currentSlide + direction);
        }

        function goToSlide(index) {
            showSlide(index);
        }

        // Auto slide
        setInterval(() => {
            changeSlide(1);
        }, 5000);

        // Form toggle functionality
        function toggleForm(formType) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const toggleBtns = document.querySelectorAll('.toggle-btn');

            if (formType === 'login') {
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
                toggleBtns[0].classList.add('active');
                toggleBtns[1].classList.remove('active');
            } else {
                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');
                toggleBtns[0].classList.remove('active');
                toggleBtns[1].classList.add('active');
            }
        }

        // Form submission handlers
        function handleLogin() {
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            const rememberMe = document.getElementById('rememberMe').checked;

            if (!email || !password) {
                alert('Please fill in all required fields');
                return;
            }

            console.log('Login:', { email, password, rememberMe });
            alert('Login successful!');
        }

        function handleRegister() {
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('registerEmail').value;
            const password = document.getElementById('registerPassword').value;
            const agreeTerms = document.getElementById('agreeTerms').checked;
            const newsletter = document.getElementById('newsletter').checked;

            if (!firstName || !lastName || !email || !password) {
                alert('Please fill in all required fields');
                return;
            }

            if (!agreeTerms) {
                alert('Please agree to the terms and conditions');
                return;
            }

            console.log('Register:', { firstName, lastName, email, password, agreeTerms, newsletter });
            alert('Account created successfully!');
        }
    </script>
</body>
</html>