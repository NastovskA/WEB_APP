<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paws & Hearts - Find Your Perfect Companion</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #FFF6E5 0%, #f8f0e0 100%);
            color: #4A5C82;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Header nfkjabvjqbk;b */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(74, 92, 130, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #4A5C82;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo::before {
            content: "💕";
            font-size: 1.5rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #4A5C82;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #FF914D;
        }

        .cta-button {
            background: linear-gradient(135deg, #FF914D, #ff7a2e);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(255, 145, 77, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 145, 77, 0.4);
        }

        .cta-button.secondary {
            background: transparent;
            color: #FF914D;
            border: 2px solid #FF914D;
        }

        .cta-button.secondary:hover {
            background: #FF914D;
            color: white;
        }

        /* Hero Section */
        .hero {
            padding: 8rem 2rem 4rem;
            text-align: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: #4A5C82;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero h1 .highlight {
            color: #FF914D;
            position: relative;
        }

        .hero h1 .highlight::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #FF914D, #ff7a2e);
            border-radius: 2px;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            color: #4A5C82;
            opacity: 0.8;
        }

        .cta-group {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 3rem;
        }

        /* Pet Cards */
        .pet-showcase {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 3rem 0;
            height: 400px;
            position: relative;
            perspective: 1000px;
        }

        .pet-card {
            width: 240px;
            height: 320px;
            border-radius: 25px;
            overflow: hidden;
            position: absolute;
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            background: white;
            transform-origin: center bottom;
        }

        .pet-card:nth-child(1) {
            transform: translateX(-120px) rotate(-20deg) translateY(-20px);
            z-index: 1;
        }

        .pet-card:nth-child(2) {
            transform: translateX(0) rotate(0deg) translateY(-40px);
            z-index: 3;
        }

        .pet-card:nth-child(3) {
            transform: translateX(120px) rotate(20deg) translateY(-20px);
            z-index: 2;
        }

        .pet-card:hover {
            transform: translateX(0) rotate(0deg) translateY(-60px) scale(1.1);
            z-index: 10;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
        }

        .pet-card:nth-child(1):hover {
            transform: translateX(0) rotate(0deg) translateY(-60px) scale(1.1);
        }

        .pet-card:nth-child(2):hover {
            transform: translateX(0) rotate(0deg) translateY(-60px) scale(1.1);
        }

        .pet-card:nth-child(3):hover {
            transform: translateX(0) rotate(0deg) translateY(-60px) scale(1.1);
        }

        .pet-image {
            width: 100%;
            height: 70%;
            position: relative;
            overflow: hidden;
        }

        .pet-card:nth-child(1) .pet-image {
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
        }

        .pet-card:nth-child(2) .pet-image {
            background: linear-gradient(135deg, #87ceeb, #5dade2);
        }

        .pet-card:nth-child(3) .pet-image {
            background: linear-gradient(135deg, #f1c40f, #f39c12);
        }

        .pet-emoji {
            font-size: 4rem;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: transform 0.4s ease;
        }

        .pet-card:hover .pet-emoji {
            transform: translate(-50%, -50%) scale(1.2);
        }

        .pet-info {
            padding: 1rem;
            height: 30%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .pet-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #4A5C82;
            margin-bottom: 0.5rem;
        }

        .pet-details {
            font-size: 0.9rem;
            color: #4A5C82;
            opacity: 0.7;
        }

        .adoption-status {
            background: #FF914D;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            align-self: flex-start;
        }

        .adoption-status.foster {
            background: #87ceeb;
        }

        /* Stats Section */
        .stats {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            padding: 3rem 2rem;
            margin: 2rem 0;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item {
            padding: 1.5rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #FF914D;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #4A5C82;
            font-weight: 600;
        }

        /* Services Section */
        .services {
            padding: 4rem 2rem;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            margin: 2rem 0;
        }

        .services-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .services h2 {
            font-size: 2.5rem;
            color: #4A5C82;
            margin-bottom: 3rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #FF914D, #ff7a2e);
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .service-card h3 {
            color: #4A5C82;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .service-card p {
            color: #4A5C82;
            opacity: 0.8;
            margin-bottom: 1.5rem;
        }

        /* Floating Elements */
        .floating-heart {
            position: fixed;
            font-size: 1.5rem;
            color: rgba(255, 145, 77, 0.3);
            animation: float 6s ease-in-out infinite;
            pointer-events: none;
        }

        .floating-heart:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-heart:nth-child(2) {
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .floating-heart:nth-child(3) {
            bottom: 20%;
            left: 15%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(10deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .pet-showcase {
                height: 350px;
                flex-direction: column;
                align-items: center;
            }

            .pet-card {
                width: 200px;
                height: 280px;
                position: relative;
            }

            .pet-card:nth-child(1) {
                transform: translateY(-40px) rotate(-15deg);
            }

            .pet-card:nth-child(2) {
                transform: translateY(-20px) rotate(0deg);
            }

            .pet-card:nth-child(3) {
                transform: translateY(0px) rotate(15deg);
            }

            .pet-card:hover {
                transform: translateY(-30px) rotate(0deg) scale(1.05);
            }

            .pet-card:nth-child(1):hover {
                transform: translateY(-30px) rotate(0deg) scale(1.05);
            }

            .pet-card:nth-child(2):hover {
                transform: translateY(-30px) rotate(0deg) scale(1.05);
            }

            .pet-card:nth-child(3):hover {
                transform: translateY(-30px) rotate(0deg) scale(1.05);
            }

            .cta-group {
                flex-direction: column;
                align-items: center;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero, .services, .stats {
            animation: fadeInUp 0.8s ease-out;
        }

        .pet-card {
            animation: spreadIn 1.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .pet-card:nth-child(1) { 
            animation-delay: 0.2s; 
        }
        .pet-card:nth-child(2) { 
            animation-delay: 0.4s; 
        }
        .pet-card:nth-child(3) { 
            animation-delay: 0.6s; 
        }

        @keyframes spreadIn {
            0% {
                opacity: 0;
                transform: translateX(0) rotate(0deg) translateY(0) scale(0.8);
            }
            100% {
                opacity: 1;
            }
        }

        /* Success Stories */
        .success-banner {
            background: linear-gradient(135deg, #FF914D, #ff7a2e);
            color: white;
            padding: 1rem;
            text-align: center;
            font-weight: 600;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <div class="floating-heart">💕</div>
    <div class="floating-heart">🐾</div>
    <div class="floating-heart">💕</div>

    <header>
        <nav>
            <div class="logo">Paws & Hearts</div>
            <ul class="nav-links">
                <li><a href="#pets">Find Pets</a></li>
                <li><a href="#services">How It Works</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#volunteer">Volunteer</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <a href="#adopt" class="cta-button">Adopt Now</a>
        </nav>
    </header>

    <main>
        <div class="success-banner">
            🎉 Over 2,500 pets found loving homes this year! Join our mission to save more lives.
        </div>

        <section class="hero">
            <h1>FIND YOUR <span class="highlight">PERFECT</span><br>COMPANION</h1>
            <p>Every pet deserves a loving home. Adopt, foster, or volunteer to make a difference.</p>
            
            <div class="cta-group">
                <a href="#adopt" class="cta-button">Adopt a Pet</a>
                <a href="#foster" class="cta-button secondary">Foster a Pet</a>
            </div>
            
            <div class="pet-showcase">
                <div class="pet-card">
                    <div class="pet-image">
                        <div class="pet-emoji">🐱</div>
                    </div>
                    <div class="pet-info">
                        <div class="pet-name">Luna</div>
                        <div class="pet-details">2 years old • Female • Playful</div>
                        <div class="adoption-status">Available</div>
                    </div>
                </div>
                <div class="pet-card">
                    <div class="pet-image">
                        <div class="pet-emoji">🐕</div>
                    </div>
                    <div class="pet-info">
                        <div class="pet-name">Max</div>
                        <div class="pet-details">4 years old • Male • Friendly</div>
                        <div class="adoption-status">Available</div>
                    </div>
                </div>
                <div class="pet-card">
                    <div class="pet-image">
                        <div class="pet-emoji">🐰</div>
                    </div>
                    <div class="pet-info">
                        <div class="pet-name">Honey</div>
                        <div class="pet-details">1 year old • Female • Gentle</div>
                        <div class="adoption-status foster">Foster</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">2,500+</div>
                    <div class="stat-label">Pets Adopted</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">150+</div>
                    <div class="stat-label">Active Fosters</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">300+</div>
                    <div class="stat-label">Volunteers</div>
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="services-container">
                <h2>How It Works</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">🔍</div>
                        <h3>Browse Pets</h3>
                        <p>Explore our database of loving pets waiting for their forever homes. Filter by age, size, and personality.</p>
                        <a href="#browse" class="cta-button">Browse Now</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">📋</div>
                        <h3>Apply to Adopt</h3>
                        <p>Fill out our simple application form. We'll help match you with the perfect companion for your lifestyle.</p>
                        <a href="#apply" class="cta-button">Apply Now</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">🤝</div>
                        <h3>Meet & Greet</h3>
                        <p>Schedule a meet and greet with your potential new family member. Take your time to make sure it's the right fit.</p>
                        <a href="#meet" class="cta-button">Schedule Visit</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">🏠</div>
                        <h3>Foster Care</h3>
                        <p>Can't adopt yet? Consider fostering! Provide temporary care while we find permanent homes.</p>
                        <a href="#foster" class="cta-button">Foster Now</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">🎓</div>
                        <h3>Training Support</h3>
                        <p>Get access to training resources and support to help your new pet adjust to their forever home.</p>
                        <a href="#training" class="cta-button">Learn More</a>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">💝</div>
                        <h3>Volunteer</h3>
                        <p>Join our community of volunteers helping to care for pets and support adoption events.</p>
                        <a href="#volunteer" class="cta-button">Volunteer</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Add smooth scrolling to navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add interactive pet card clicks with enhanced palette effect
        document.querySelectorAll('.pet-card').forEach((card, index) => {
            card.addEventListener('click', function() {
                const petName = this.querySelector('.pet-name').textContent;
                
                // Enhanced click animation
                this.style.transform = 'translateX(0) rotate(0deg) translateY(-80px) scale(1.15)';
                this.style.zIndex = '20';
                
                // Show interest animation
                const heart = document.createElement('div');
                heart.innerHTML = '💕';
                heart.style.position = 'absolute';
                heart.style.top = '50%';
                heart.style.left = '50%';
                heart.style.transform = 'translate(-50%, -50%)';
                heart.style.fontSize = '2rem';
                heart.style.animation = 'floatUp 1s ease-out forwards';
                heart.style.pointerEvents = 'none';
                
                this.appendChild(heart);
                
                setTimeout(() => {
                    // Return to original palette position
                    if (index === 0) {
                        this.style.transform = 'translateX(-120px) rotate(-20deg) translateY(-20px)';
                        this.style.zIndex = '1';
                    } else if (index === 1) {
                        this.style.transform = 'translateX(0) rotate(0deg) translateY(-40px)';
                        this.style.zIndex = '3';
                    } else if (index === 2) {
                        this.style.transform = 'translateX(120px) rotate(20deg) translateY(-20px)';
                        this.style.zIndex = '2';
                    }
                    heart.remove();
                }, 1000);
            });
        });

        // Add floating animation keyframes
        const style = document.createElement('style');
        style.textContent = `
            @keyframes floatUp {
                0% {
                    opacity: 1;
                    transform: translate(-50%, -50%) scale(1);
                }
                100% {
                    opacity: 0;
                    transform: translate(-50%, -150%) scale(1.5);
                }
            }
        `;
        document.head.appendChild(style);

        // Animate stats on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumber = entry.target.querySelector('.stat-number');
                    const finalNumber = parseInt(statNumber.textContent.replace(/[^\d]/g, ''));
                    animateNumber(statNumber, finalNumber);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stat-item').forEach(item => {
            observer.observe(item);
        });

        function animateNumber(element, target) {
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                const suffix = element.textContent.includes('+') ? '+' : 
                             element.textContent.includes('%') ? '%' : '';
                element.textContent = Math.floor(current) + suffix;
            }, 40);
        }

        // Animate service cards on scroll
        const serviceObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.service-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            serviceObserver.observe(card);
        });
    </script>
</body>
</html>
