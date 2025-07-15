<!-- najjintro stranica -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetConnect - Adoption & Fostering Platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background-overlay"></div>
    
    <header class="header">
        <div class="nav-container">
            <div class="logo">PetConnect</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#explore">Explore</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#shelters">Shelters</a></li>
                    <li><a href="#foster">Foster</a></li>
                    <li><a href="#news">News</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <a href="#login" class="btn btn-primary">Log in</a>
                <a href="#signup" class="btn btn-secondary">Sign up</a>
            </div>
        </div>
    </header>

    <main class="main-content">
        <section class="pet-gallery">
            <div class="gallery-header">
                <h1 class="gallery-title">Find your perfect companion</h1>
                <p class="gallery-subtitle">Discover loving pets waiting for their forever homes</p>
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Search for dogs, cats, rabbits, and more...">
                </div>
            </div>

            <div class="pet-grid">
                <div class="pet-card">
                    <div class="pet-image">🐕</div>
                    <div class="pet-info">
                        <h3 class="pet-name">Buddy</h3>
                        <p class="pet-details">Golden Retriever • 3 years old • Male</p>
                        <span class="pet-status status-adoption">For Adoption</span>
                    </div>
                </div>

                <div class="pet-card">
                    <div class="pet-image">🐱</div>
                    <div class="pet-info">
                        <h3 class="pet-name">Luna</h3>
                        <p class="pet-details">Persian Cat • 2 years old • Female</p>
                        <span class="pet-status status-fostering">Foster Care</span>
                    </div>
                </div>

                <div class="pet-card">
                    <div class="pet-image">🐰</div>
                    <div class="pet-info">
                        <h3 class="pet-name">Snowball</h3>
                        <p class="pet-details">Holland Lop • 1 year old • Male</p>
                        <span class="pet-status status-adoption">For Adoption</span>
                    </div>
                </div>

                <div class="pet-card">
                    <div class="pet-image">🐕</div>
                    <div class="pet-info">
                        <h3 class="pet-name">Bella</h3>
                        <p class="pet-details">Labrador Mix • 4 years old • Female</p>
                        <span class="pet-status status-adoption">For Adoption</span>
                    </div>
                </div>

                <div class="pet-card">
                    <div class="pet-image">🐱</div>
                    <div class="pet-info">
                        <h3 class="pet-name">Whiskers</h3>
                        <p class="pet-details">Maine Coon • 5 years old • Male</p>
                        <span class="pet-status status-fostering">Foster Care</span>
                    </div>
                </div>

                <div class="pet-card">
                    <div class="pet-image">🐦</div>
                    <div class="pet-info">
                        <h3 class="pet-name">Sunny</h3>
                        <p class="pet-details">Cockatiel • 6 months old • Female</p>
                        <span class="pet-status status-adoption">For Adoption</span>
                    </div>
                </div>
            </div>
        </section>

        <aside class="welcome-panel">
            <div class="welcome-icon"></div>
            <h2 class="welcome-title">Welcome to PetConnect</h2>
            
            <form id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-input" placeholder="Enter your email">
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="password-toggle">
                        <input type="password" id="password" class="form-input" placeholder="Enter your password">
                        <button type="button" class="password-toggle-btn" onclick="togglePassword()">👁️</button>
                    </div>
                </div>
                
                <div class="forgot-password">
                    <a href="#forgot">Forgot your password?</a>
                </div>
                
                <button type="submit" class="login-btn">Log in</button>
            </form>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
            <button class="social-btn">
                <span>🔵</span> Continue with Facebook
            </button>
            
            <button class="social-btn">
                <span>🔴</span> Continue with Google
            </button>
            
            <div class="signup-link">
                Not on PetConnect yet? <a href="#signup">Sign up</a>
            </div>
            
            <div class="terms">
                By continuing, you agree to PetConnect's <a href="#terms">Terms of Service</a> and acknowledge you've read our <a href="#privacy">Privacy Policy</a>. <a href="#notice">Notice at collection</a>.
            </div>
        </aside>
    </main>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleBtn = document.querySelector('.password-toggle-btn');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleBtn.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleBtn.textContent = '👁️';
            }
        }

        // Add interactivity to pet cards
        document.querySelectorAll('.pet-card').forEach(card => {
            card.addEventListener('click', function() {
                const petName = this.querySelector('.pet-name').textContent;
                alert(`You clicked on ${petName}! This would open their detailed profile.`);
            });
        });

        // Handle form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (email && password) {
                alert(`Login attempt for: ${email}`);
            } else {
                alert('Please fill in both email and password fields.');
            }
        });

        // Add search functionality
        document.querySelector('.search-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value;
                if (searchTerm.trim()) {
                    alert(`Searching for: ${searchTerm}`);
                }
            }
        });
    </script>
</body>
</html>