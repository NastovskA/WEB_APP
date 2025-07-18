<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptify - Dog Adoption</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #ffd700;
            letter-spacing: 1px;
        }

        .nav {
            display: flex;
            gap: 30px;
        }

        .nav a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-weight: 500;
            font-size: 12px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #ffd700;
            transition: width 0.3s ease;
        }

        .nav a:hover {
            color: #ffd700;
        }

        .nav a:hover::after {
            width: 100%;
        }

        .main-container {
            display: flex;
            height: calc(100vh - 90px);
            position: relative;
            padding-bottom: 120px;
        }
                .auth-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .auth-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.9);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
            letter-spacing: 1px;
        }

        .auth-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: #ffd700;
            color: #ffd700;
        }

        .auth-btn.signup {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #1a1a2e;
            border: none;
        }

        .auth-btn.signup:hover {
            background: linear-gradient(45deg, #ffed4e, #ffd700);
            color: #1a1a2e;
        }

        .auth-icon {
            width: 14px;
            height: 14px;
            fill: currentColor;
        }

        .left-section {
            flex: 1;
            padding: 60px 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .title {
            font-size: 50px;
            font-weight: 900;
            line-height: 0.9;
            margin-bottom: 15px;
            letter-spacing: 3px;
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subtitle {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 50px;
            font-weight: 300;
            letter-spacing: 6px;
        }

        .info-content-section {
            min-height: 280px;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            width: 100%;
            position: relative;
            flex-grow: 1;
        }

        .info-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            position: absolute;
            width: 100%;
            max-width: 480px;
        }

        .info-item.active {
            opacity: 1;
            transform: translateY(0);
        }

        .info-title {
            font-size: 22px;
            font-weight: 700;
            color: #ffd700;
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .info-content {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            line-height: 1.6;
            font-weight: 300;
        }

        .trait-bars {
            display: flex;
            flex-direction: column;
            gap: 14px;
            width: 100%;
            max-width: 380px;
        }

        .trait {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 0;
        }

        .trait-name {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.9);
            min-width: 110px;
            font-weight: 500;
        }

        .paw-rating {
            display: flex;
            gap: 2px;
            align-items: center;
        }

        .paw {
            width: 22px;
            height: 24px;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Main paw pad - larger and more rounded */
        .paw::before {
            content: '';
            position: absolute;
            top: 12px;
            left: 50%;
            transform: translateX(-50%);
            width: 12px;
            height: 9px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            transition: all 0.3s ease;
        }

        /* Toe pads - better positioned and sized */
        .paw .toe-1,
        .paw .toe-2,
        .paw .toe-3,
        .paw .toe-4 {
            position: absolute;
            width: 4px;
            height: 6px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            transition: all 0.3s ease;
        }

        .paw .toe-1 {
            top: 6px;
            left: 3px;
            transform: rotate(-15deg);
        }

        .paw .toe-2 {
            top: 3px;
            left: 7px;
            transform: rotate(-5deg);
        }

        .paw .toe-3 {
            top: 3px;
            right: 7px;
            transform: rotate(5deg);
        }

        .paw .toe-4 {
            top: 6px;
            right: 3px;
            transform: rotate(15deg);
        }

        .paw.filled::before {
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            box-shadow: 0 0 6px rgba(255, 215, 0, 0.4);
        }

        .paw.filled .toe-1,
        .paw.filled .toe-2,
        .paw.filled .toe-3,
        .paw.filled .toe-4 {
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            box-shadow: 0 0 3px rgba(255, 215, 0, 0.3);
        }

        .paw:hover {
            transform: scale(1.1);
        }

        .paw.filled:hover {
            filter: brightness(1.2);
        }

        .center-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 40px;
        }




        .dog-image {
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
            border: 3px solid rgba(255, 215, 0, 0.3);
        }

        .dog-image:hover {
            transform: scale(1.05);
        }

        .right-section {
            flex: 1;
            padding: 80px 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .paw-navigation {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 40px;
            padding: 0 10px;
        }

        .paw-nav-item {
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 15px 30px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
        }

        .paw-nav-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(8px);
        }

        .paw-nav-item.active {
            background: rgba(255, 215, 0, 0.15);
            transform: translateX(12px);
        }

        .paw-nav-item .paw-icon {
            width: 35px;
            height: 40px;
            margin-right: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            position: relative;
        }

        /* Navigation paw icons - improved design */
        .paw-nav-item .paw-icon::before {
            content: '';
            position: absolute;
            top: 16px;
            left: 50%;
            transform: translateX(-50%);
            width: 10px;
            height: 8px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            transition: all 0.3s ease;
        }

        .paw-nav-item .paw-icon .nav-toe-1,
        .paw-nav-item .paw-icon .nav-toe-2,
        .paw-nav-item .paw-icon .nav-toe-3,
        .paw-nav-item .paw-icon .nav-toe-4 {
            position: absolute;
            width: 3px;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            transition: all 0.3s ease;
        }
            

        .paw-nav-item .paw-icon .nav-toe-1 {
            top: 12px;
            left: 11px;
            transform: rotate(-15deg);
        }

        .paw-nav-item .paw-icon .nav-toe-2 {
            top: 10px;
            left: 14px;
            transform: rotate(-5deg);
        }

        .paw-nav-item .paw-icon .nav-toe-3 {
            top: 10px;
            right: 14px;
            transform: rotate(5deg);
        }

        .paw-nav-item .paw-icon .nav-toe-4 {
            top: 12px;
            right: 11px;
            transform: rotate(15deg);
        }

        .paw-nav-item.active .paw-icon::before {
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            box-shadow: 0 0 8px rgba(255, 215, 0, 0.5);
        }

        .paw-nav-item.active .paw-icon .nav-toe-1,
        .paw-nav-item.active .paw-icon .nav-toe-2,
        .paw-nav-item.active .paw-icon .nav-toe-3,
        .paw-nav-item.active .paw-icon .nav-toe-4 {
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            box-shadow: 0 0 4px rgba(255, 215, 0, 0.4);
        }

        .paw-nav-item.active .paw-icon {
            transform: scale(1.1);
        }

        .nav-label {
            font-size: 14px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.8);
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .paw-nav-item.active .nav-label {
            color: #ffd700;
        }

        .bottom-controls {
            position: absolute;
            bottom: 30px;
            left: 50px;
            right: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .nav-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 45px;
            height: 45px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 20px;
            color: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: #ffd700;
            color: #ffd700;
            transform: scale(1.1);
        }

        .meet-btn {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #1a1a2e;
            border: none;
            padding: 14px 28px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 12px 24px rgba(255, 215, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        .meet-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .meet-btn:hover::before {
            left: 100%;
        }

        .meet-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 16px 32px rgba(255, 215, 0, 0.4);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @media (max-width: 1200px) {
            .main-container {
                flex-direction: column;
                height: auto;
                padding-bottom: 80px;
            }
            
            .left-section, .right-section {
                flex: none;
                padding: 30px;
            }
            
            .title {
                font-size: 48px;
            }
            
            .center-section {
                padding: 20px;
            }
            
            .dog-image {
                width: 300px;
                height: 300px;
            }

            .bottom-controls {
                position: relative;
                bottom: auto;
                left: auto;
                right: auto;
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Adoptify</div>
        <nav class="nav">
            <a href="#license">LICENSE</a>
            <a href="#about">ABOUT</a>
            <a href="#contact">CONTACT</a>
            <a href="#canines">CANINES</a>
        </nav>
        <div class="auth-buttons">
                <a href="#login" class="auth-btn">
                    <svg class="auth-icon" viewBox="0 0 24 24">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    LOG IN
                </a>
                <a href="#signup" class="auth-btn signup">
                    <svg class="auth-icon" viewBox="0 0 24 24">
                        <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V8c0-.55-.45-1-1-1s-1 .45-1 1v2H2c-.55 0-1 .45-1 1s.45 1 1 1h2v2c0 .55.45 1 1 1s1-.45 1-1v-2h2c.55 0 1-.45 1-1s-.45-1-1-1H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    SIGN UP
                </a>
            </div>
        </div>
    </div>

    <div class="main-container">
        <div class="left-section">
            <div class="title">
                LOYAL &<br>
                FRIENDLY
            </div>
            <div class="subtitle">MEET MAX</div>
            
            <div class="info-content-section">
                <div class="info-item active" id="about">
                    <div class="info-title">About Max</div>
                    <div class="info-content">
                        Max is a loyal and friendly Golden Retriever who loves to play and spend time with his family. He's 4 years old and has been looking for his forever home. Max is intelligent, energetic, and gets along well with children and other pets. He's house-trained and knows many commands.
                    </div>
                </div>

                <div class="info-item" id="personality">
                    <div class="info-title">Personality</div>
                    <div class="trait-bars">
                        <div class="trait">
                            <span class="trait-name">Intelligent</span>
                            <div class="paw-rating">
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                            </div>
                        </div>
                        <div class="trait">
                            <span class="trait-name">Friendly</span>
                            <div class="paw-rating">
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                            </div>
                        </div>
                        <div class="trait">
                            <span class="trait-name">Energetic</span>
                            <div class="paw-rating">
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                            </div>
                        </div>
                        <div class="trait">
                            <span class="trait-name">Loyal</span>
                            <div class="paw-rating">
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                            </div>
                        </div>
                        <div class="trait">
                            <span class="trait-name">Affectionate</span>
                            <div class="paw-rating">
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw filled">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                                <span class="paw">
                                    <span class="toe-1"></span>
                                    <span class="toe-2"></span>
                                    <span class="toe-3"></span>
                                    <span class="toe-4"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-item" id="health">
                    <div class="info-title">Health</div>
                    <div class="info-content">
                        Max is in excellent health and up-to-date on all vaccinations. He's been neutered and microchipped. Recent veterinary checkup shows he's in perfect condition with no health concerns. He's active, energetic, and ready to bring joy to his new family.
                    </div>
                </div>
            </div>
        </div>

        <div class="center-section">
            <img src="https://images.unsplash.com/photo-1551717743-49959800b1f6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Max" class="dog-image">
        </div>

        <div class="right-section">
            <div class="paw-navigation">
                <div class="paw-nav-item active" data-section="about">
                    <div class="paw-icon">
                        <span class="nav-toe-1"></span>
                        <span class="nav-toe-2"></span>
                        <span class="nav-toe-3"></span>
                        <span class="nav-toe-4"></span>
                    </div>
                    <span class="nav-label">01 About Max</span>
                </div>
                <div class="paw-nav-item" data-section="personality">
                    <div class="paw-icon">
                        <span class="nav-toe-1"></span>
                        <span class="nav-toe-2"></span>
                        <span class="nav-toe-3"></span>
                        <span class="nav-toe-4"></span>
                    </div>
                    <span class="nav-label">02 Personality</span>
                </div>
                <div class="paw-nav-item" data-section="health">
                    <div class="paw-icon">
                        <span class="nav-toe-1"></span>
                        <span class="nav-toe-2"></span>
                        <span class="nav-toe-3"></span>
                        <span class="nav-toe-4"></span>
                    </div>
                    <span class="nav-label">03 Health</span>
                </div>
            </div>
        </div>

        <div class="bottom-controls">
            <div class="nav-buttons">
                <button class="nav-btn" onclick="previousDog()">‹</button>
                <button class="nav-btn" onclick="nextDog()">›</button>
            </div>
            <button class="meet-btn" onclick="meetDog()">MEET MAX! 🐾</button>
        </div>
    </div>

    <script>
        let currentInfoIndex = 0;
        const infoItems = ['about', 'personality', 'health'];
        const pawNavItems = document.querySelectorAll('.paw-nav-item');
        
        function showInfo(section) {
            // Hide all info items
            infoItems.forEach(item => {
                document.getElementById(item).classList.remove('active');
            });
            
            // Remove active class from all nav items
            pawNavItems.forEach(item => {
                item.classList.remove('active');
            });
            
            // Show selected info item
            document.getElementById(section).classList.add('active');
            
            // Add active class to selected nav item
            document.querySelector(`[data-section="${section}"]`).classList.add('active');
            
            // Update current index
            currentInfoIndex = infoItems.indexOf(section);
        }
        
        function showNextInfo() {
            // Move to next item
            currentInfoIndex = (currentInfoIndex + 1) % infoItems.length;
            showInfo(infoItems[currentInfoIndex]);
        }
        
        // Add click handlers to paw navigation items
        pawNavItems.forEach(item => {
            item.addEventListener('click', () => {
                const section = item.getAttribute('data-section');
                showInfo(section);
            });
        });
        
        // Auto-rotate information every 5 seconds
        setInterval(showNextInfo, 5000);
        
        function previousDog() {
            console.log('Previous dog clicked');
            // Add your logic to show previous dog
        }
        
        function nextDog() {
            console.log('Next dog clicked');
            // Add your logic to show next dog
        }
        
        function meetDog() {
            console.log('Meet Max clicked');
            // Add your logic for meeting the dog
        }
    </script>
</body>
</html>
